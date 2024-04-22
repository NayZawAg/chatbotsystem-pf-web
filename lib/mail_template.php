<?php

class MailTemplateModel
{
  public function get_template($langage, $data)
  {
		if (isset(['contact']['user_type'])){
			$user_type = $_POST['contact']['user_type'];
		}
    if (isset($user_type)) {
      switch ($langage) {
        case 'ja':
          return $this->getJapaneseTemplateCompany($data);
          break;
        default:
          return $this->getEnglishTemplateCompany($data);
          break;
      }
    } else {
      switch ($langage) {
        case 'ja':
          return $this->getJapaneseTemplate($data);
          break;
        default:
          return $this->getEnglishTemplate($data);
          break;
      }
    }
  }

  private function getJapaneseTemplate($data)
  {
    $html = "{$data['name']} 様\n";
    $html .= "\n";
    $html .= "このたびはwithJorgeへお問い合わせ頂き誠にありがとうございます。\n";
    $html .= "担当者の者より後日、ご連絡を差し上げます。しばらくお待ちください。\n";
    $html .= "なお、ご連絡差し上げるまで数日かかる場合がございます。\n";
    $html .= "\n";
    $html .= "お問い合わせ頂きました内容は、下記の通りです。\n";
    $html .= "\n";
    $html .= "[ 受付日時 ] {$data['datetime']} \n";
    $html .= "[ 氏名] {$data['name']}  様\n";
    $html .= "[ メールアドレス ] {$data['mailaddress']} \n";
    $html .= "\n";
    $html .= "[ 件名 ] {$data['subject']} \n";
    $html .= "[ お問い合わせ内容 ]\n";
    $html .= "{$data['body']} \n";
    $html .= "\n";
    $html .= "\n";
    $html .= "------\n";
    $html .= "ご注意\n";
    $html .= "------\n";
    $html .= "- このメールはシステムより自動送信されております。\n";
    $html .= "- このメールにお心当たりのない場合は破棄していただけますようにお願いいたします。\n";
    $html .= "- ご不明な点は以下の連絡先までお問合せください。\n";
    $html .= "\n";
    $html .= "======\n";
    $html .= "おもてなしプラットフォーム\n";
    $html .= "メール : inquiry@withjorge.jp\n";
    $html .= "営業時間：平日10～18時、土日祝日、年末年始は休み\n";
    $html .= "\n";
    $html .= "withJorgeの紹介はこちら\n";
    $html .= "https://www.withjorge.jp/\n";
    $html .= "======\n";
    $html .= "\n";
    return $html;
  }

  private function getEnglishTemplate($data)
  {
    $html  = "Hi {$data['name']},\n";
    $html .= "\n";
    $html .= "Thank you for contacting  withJorge.\n";
    $html .= "We have now received your inquiry and will get back to you as soon as possible .\n";
    $html .= "Note that it may take a few days to contact you.\n";
    $html .= "\n";
    $html .= "Your inquiry is written below.\n";
    $html .= "\n";
    $html .= "[ Received time ] {$data['datetime']}\n";
    $html .= "[ Name ] {$data['name']} \n";
    $html .= "[ E-mail ] {$data['mailaddress']}\n";
    $html .= "\n";
    $html .= "[ Subject ] {$data['subject']}\n";
    $html .= "[ Content ]\n";
    $html .= "{$data['body']}\n";
    $html .= "\n";
    $html .= "\n";
    $html .= "------\n";
    $html .= "Notice\n";
    $html .= "------\n";
    $html .= "- This is an automatically generated email.\n";
    $html .= "- Please delete this email if you have no idea about it.\n";
    $html .= "- For any questions, Please contact below.\n";
    $html .= "======\n";
    $html .= "Omotenashi Platform\n";
    $html .= "Email : inquiry@withjorge.jp\n";
    $html .= "Opening hours: weekdays 10:00 - 18:00, closed on weekends, public holidays, and the end and beginning of a year.\n";
    $html .= "\n";
    $html .= "About withJorge\n";
    $html .= "https://www.withJorge.jp/\n";
    $html .= "======\n";
    return $html;
  }

  private function getJapaneseTemplateCompany($data)
  {

    $html  = "{$data['organization']}\n";
    $html .= "{$data['name']} 様\n";
    $html .= "\n";
    $html .= "このたびはwithJorgeへお問い合わせ頂き誠にありがとうございます。\n";
    $html .= "担当者の者より後日、ご連絡を差し上げます。しばらくお待ちください。\n";
    $html .= "なお、ご連絡差し上げるまで数日かかる場合がございます。\n";
    $html .= "\n";
    $html .= "お問い合わせ頂きました内容は、下記の通りです。\n";
    $html .= "\n";
    $html .= "[ 受付日時 ] {$data['datetime']} \n";
    $html .= "[ 会社名] {$data['organization']}  様\n";
    $html .= "[ 氏名] {$data['name']}  様\n";
    $html .= "[ メールアドレス ] {$data['mailaddress']} \n";
    $html .= "\n";
    $html .= "[ 件名 ] {$data['subject']} \n";
    $html .= "[ お問い合わせ内容 ]\n";
    $html .= "{$data['body']} \n";
    $html .= "\n";
    $html .= "\n";
    $html .= "------\n";
    $html .= "ご注意\n";
    $html .= "------\n";
    $html .= "- このメールはシステムより自動送信されております。\n";
    $html .= "- このメールにお心当たりのない場合は破棄していただけますようにお願いいたします。\n";
    $html .= "- ご不明な点は以下の連絡先までお問合せください。\n";
    $html .= "\n";
    $html .= "======\n";
    $html .= "おもてなしプラットフォーム\n";
    $html .= "メール : inquiry@withjorge.jp\n";
    $html .= "営業時間：平日10～18時、土日祝日、年末年始は休み\n";
    $html .= "\n";
    $html .= "withJorgeの紹介はこちら\n";
    $html .= "https://www.withjorge.jp/\n";
    $html .= "======\n";
    $html .= "\n";
    return $html;
  }

  private function getEnglishTemplateCompany($data)
  {

    $html  = "Hi {$data['name']},\n";
    $html .= "\n";
    $html .= "Thank you for contacting  withJorge.\n";
    $html .= "We have now received your inquiry and will get back to you as soon as possible .\n";
    $html .= "Note that it may take a few days to contact you.\n";
    $html .= "\n";
    $html .= "Your inquiry is written below.\n";
    $html .= "\n";
    $html .= "[ Received time ] {$data['datetime']}\n";
    $html .= "[ Company ] {$data['organization']}\n";
    $html .= "[ Name ] {$data['name']} 様\n";
    $html .= "[ E-mail ] {$data['mailaddress']}\n";
    $html .= "\n";
    $html .= "[ Subject ] {$data['subject']}\n";
    $html .= "[ Content ]\n";
    $html .= "{$data['body']}\n";
    $html .= "\n";
    $html .= "\n";
    $html .= "------\n";
    $html .= "Notice\n";
    $html .= "------\n";
    $html .= "- This is an automatically generated email.\n";
    $html .= "- Please delete this email if you have no idea about it.\n";
    $html .= "- For any questions, Please contact below.\n";
    $html .= "======\n";
    $html .= "Omotenashi Platform\n";
    $html .= "Email : inquiry@withjorge.jp\n";
    $html .= "Opening hours: weekdays 10:00 - 18:00, closed on weekends, public holidays, and the end and beginning of a year.\n";
    $html .= "\n";
    $html .= "About withJorge\n";
    $html .= "https://www.withJorge.jp/\n";
    $html .= "======\n";
    return $html;
  }
  
}