<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/PHPMailer/src/Exception.php';
require './PHPMailer/PHPMailer/src/PHPMailer.php';
require './PHPMailer/PHPMailer/src/SMTP.php';



$Email = 'gsbgroup@naver.com'; // 신청받을 메일주소

$name = isset($_POST['name1']) ? $_POST['name1'] : '';
$number = isset($_POST['number']) ? $_POST['number'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'smtp.zoho.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->Username   = 'jejecomms@zohomail.com';         // SMTP username
    $mail->Password   = '@jeje5575@';   
    // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587;

    //$mail->setLanguage('ko', './PHPMailer/language/');
    //$mail->CharSet = 'UTF-8';
    // 보내는 메일

    $mail->setFrom('jejecomms@zohomail.com');
    $mail->addAddress('gsbgroup@naver.com');

    $mail->IsHTML(true); 

    $body = '<h1>문의하기</h1>';
    $body .= "<p>이름: $name</p>";
    $body .= "<p>전화번호: $number</p>";
    $body .= "<p>이메일: $email</p>";
    $body .= "<p>문의사항: $message</p>";


    

    $mail->Subject = 'Here is the subject';
    $mail->Body = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    $message = '문의가 완료되었습니다.
    빠른 시일내에 해당 번호 또는 이메일을 통해 연락드리겠습니다. 감사합니다.';
} catch (Exception $e) {
    $message = 'Mailer Error: ' . $mail->ErrorInfo;
}

$response = ['message' => $message];
header('Content-type: application/json');
echo json_encode($response);
?>