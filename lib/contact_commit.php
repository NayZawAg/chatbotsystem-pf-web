<?php

require_once('../lib/mail_template.php');

class ContactModel
{

  public $post;
  public $mail_template_model;

  public function __construct()
  {
    $this->mail_template_model = new MailTemplateModel();
  }

  /**
   * 送信データ初期セット
   */
  public function set_value()
  {
    $result['name'] = $this->post['contact']['name'];
    $result['mailaddress'] = $this->post['contact']['mailaddress'];
    $result['subject'] = $this->post['contact']['subject'];
    $result['body'] = $this->post['contact']['body'];
    $result['agree_privacy'] = $this->post['contact']['agree_privacy'];
    return $result;
  }

  /**
   * チェックフラグ
   */
  public function checked_checkbox($param)
  { if (isset(['contact'][$param])){
      if ($this->post['contact'][$param] == 1) {
        echo 'checked="chekced"';
      } else {
        echo '';
      }
    }
  }

  public function validate()
  {
    $validate = [
      'name' => [
        'name' => '名前',
        'rules' => [
          ['maxlength', 50]
        ],
      ],
      'mailaddress' => [
        'name' => 'メールアドレス',
        'rules' => [
          ['required'],
          ['email'],
          ['maxlength', 255],
        ],
      ],
      'subject' => [
        'name' => '件名',
        'rules' => [
          ['maxlength', 50],
        ],
      ],
      'body' => [
        'name' => 'お問い合わせ内容',
        'rules' => [
          ['required'],
          ['maxlength', 2000],
        ],
      ],
      'agree_privacy' => [
        'name' => 'プライバシーポリシーへの同意',
        'rules' => [
          ['required']
        ]
      ],
    ];
    if (isset(['contact']['user_type']))
    {
      if ($this->post['contact']['user_type'] == 'company') {
        $validate['organization'] = [
          'name' => '会社名',
          'rules' => [
            ['maxlength', 50]
          ]
        ];  
      }
    }

    return $validate;
  }

  public function run_validate()
  {
    $validate_rule = $this->validate();
    $errors = null;

    if (get_lang() == 'ja') {
      $lang = 'ja';
    } else {
      $lang = 'en';
    }
    foreach ($validate_rule as $param_name => $element) {
      $data = $this->post['contact'][$param_name];
      foreach ($element['rules'] as $rule) {
        switch ($rule[0]) {
          case 'required':
            if (empty($data)) {
              $errors['contact'][$param_name] = get_word_list()['user'][$lang]['contact_error_required'];
              if ($lang == 'ja') {
                $errors['contact'][$param_name] = $element['name'] . 'は' . $errors['contact'][$param_name];
              }
              continue 2;
            }
            break;
          case 'maxlength':
            if (mb_strlen($data) > $rule[1]) {
              $errors['contact'][$param_name] = get_word_list()['user'][$lang]['contact_error_maxlength_1'] . $rule[1] . get_word_list()['user'][$lang]['contact_error_maxlength_2'];
              continue 2;
            }
            break;
          case 'email':
            if (filter_var($data, FILTER_VALIDATE_EMAIL) == false) {
              $errors['contact'][$param_name] = get_word_list()['user'][$lang]['contact_error_mailaddress'];
              if ($lang == 'ja') {
                $errors['contact'][$param_name] = $element['name'] . 'は' . $errors['contact'][$param_name];
              }
              continue 2;
            }
            break;
        }
        if (!empty($errors['contact'][$param_name])) {
          break;
        }
      }
    }
    return $errors;
  }

  public function get_subject_prefix()
  {
    if (get_lang() == 'ja') {
      return 'お問い合せ: ';
    } else {
      return 'Contact: ';
    }
  }

  public function send_contact()
  {
    $data = $this->post['contact'];
    $data['datetime'] = date('Y-m-d H:i:s');
    $mailbody = $this->mail_template_model->get_template(get_lang(), $data);
    $subject_prefix = $this->get_subject_prefix();

    // admin 送信
    send_mail('[withJorge]ユーザーよりお問い合わせがありました: ' . $this->post['contact']['subject'], $mailbody);
    // user送信
    return send_mail($subject_prefix . ' ' . $this->post['contact']['subject'], $mailbody, $this->post['contact']['mailaddress']);
  }
}

$contact_model = new ContactModel();

$contact['name'] = '';
$contact['organization'] = '';
$contact['mailaddress'] = '';
$contact['subject'] = '';
$contact['body'] = '';
$contact['agree_privacy'] = '';
$errors['contact'] = [];

if (isset($_POST['submitbtn'])) {
  $contact_model->post = $_POST;

  $contact = $contact_model->set_value();

  if (!$errors = $contact_model->run_validate()) {
    $contact_result = $contact_model->send_contact();
    if ($contact_result) {
      header('Location: ' . get_site_url() . '/contact-complete?lang=' . get_lang());
    } else {
      $errors['global'] = 'メールの送信に失敗しました';
    }
  }
}
