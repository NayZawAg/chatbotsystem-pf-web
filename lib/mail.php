<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function send_mail($subject, $body, $to = 'inquiry@withjorge.jp', $from = 'inquiry@withjorge.jp') {
  $mail = new PHPMailer(true);

  if (!is_production()) {
    $subject = '【テスト環境】'.$subject;
  }

  try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.withjorge.jp';
    $mail->SMTPAuth = true;
    $mail->Username = 'inquiry@withjorge.jp';
    $mail->Password = 'L8sx1cu&';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );


    $mail->setFrom($from);
    $mail->addAddress($to);
    // $mail->addReplyTo($from);

    $mail->isHTML(false);
    $mail->CharSet = "UTF-8";
    $mail->Subject = $subject;
    $mail->Body = $body;

    $mail->send();
    return true;
  } catch (Exception $e) {
    return false;
  }
}
