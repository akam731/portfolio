<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


function envoie_mail($message){
    $from_name = "contact@alex-marteau.com";
	$from_email = 'alexandre.marteau63@gmail.com';
    $subject = "Nouveau message !";
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPSecure = 'ssl';
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;     
    $mail->Username   = 'alexandre.marteau63@gmail.com';  //SMTP username
    $mail->Password   = 'feayxtlnhjtxhmtv';  //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //Enable implicit TLS encryption
    $mail->Port       = 465;
    $mail->setFrom($from_email, $from_name);
    $mail->addAddress('alexandre.marteau11@gmail.com','ADMIN alex-marteau.com');
    $mail->isHTML(true);                                 
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->setLanguage('fr', '/optional/path/to/language/directory/');
    if (!$mail->Send()) {
        return false;
    }
    else {
        return true;
    }
}
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

require_once("inclued/mail.php");

if (envoie_mail($message)) {
    echo "OK";
}
else {
    echo "Une erreur s'est produite";
}
?>