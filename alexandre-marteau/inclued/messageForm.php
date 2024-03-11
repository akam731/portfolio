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
	$from_email = 'alexandre.marteau.dev@gmail.com'; 
    $subject = "Nouveau message !";
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPSecure = 'ssl';
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;     
    $mail->Username   = 'alexandre.marteau.dev@gmail.com';  //SMTP username
    $mail->Password   = 'fhbvhzmcskpywqul';  //SMTP password
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

$nom = "";
$mail = "";
$subject = "";
$msg = "";

$formValid = false;

if (isset($_POST['send'])) {

    if (isset($_POST['nom']) AND !empty($_POST['nom'])) {
        $nom =  $_POST['nom'];  
        if(strlen($nom) <= 255){
            $_SESSION['form_nom'] = $nom;

            if (isset($_POST['mail']) AND !empty($_POST['mail'])) {
                $mail = $_POST['mail'];
                if(strlen($mail) <= 320){
                    $_SESSION['form_mail'] = $mail;

                    if (isset($_POST['subject']) AND !empty($_POST['subject'])) {
                        $subject = $_POST['subject'];
                        if(strlen($subject) <= 255){
                            $_SESSION['form_subject'] = $subject;


                            if (isset($_POST['message']) AND !empty($_POST['message'])) {
                                $msg = $_POST['message'];
                                if(strlen($msg) <= 5000){

                                    $formValid = true;

                                }else{
                                    $_SESSION['form_error'] = "Votre message ne peux pas dépasser 5000 caractères";
                                }
                            }else{
                                $_SESSION['form_error'] = "Veuillez saisir un message";
                            }


                        }else{
                            $_SESSION['form_error'] = "Votre sujet ne peux pas dépasser 255 caractères";
                        }
                    }else{
                        $_SESSION['form_error'] = "Veuillez saisir un sujet";
                    }

                }else{
                    $_SESSION['form_error'] = "Votre adresse mail ne peux pas dépasser 320 caractères";
                }
            }else{
                $_SESSION['form_error'] = "Veuillez saisir une adresse mail";
            }

        }else{
            $_SESSION['form_error'] = "Votre nom ne peux pas dépasser 255 caractères";
        }
    }else{
        $_SESSION['form_error'] = "Veuillez saisir un nom";
    }

}




$message = '
Nouveau message :<br><br>
Nom : <br><br>
'.$nom.'<br><br>
Mail : <br><br>
'.$mail.'<br><br>
Sujet : <br><br>
'.$subject.'<br><br>
Message : <br><br>
'.$msg.'<br><br>
Date : <br><br>
'.date('d/m/Y à H:i').'<br>
';

if ($formValid) {
    if (envoie_mail($message)) {
        $_SESSION['form_success'] = "Votre message à était envoyé avec succès";
        unset($_SESSION['form_nom']);
        unset($_SESSION['form_mail']);
        unset($_SESSION['form_subject']);
    }
    else {
        $_SESSION['form_error'] = "Une erreur s'est produite lors de l'envoi du mail";
    }
}
?>
<<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" sizes="16x16"  href="../images/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
<meta name="description" content="Découvrez Alexandre Marteau, développeur web. Des sites uniques qui captivent et inspirent.">
    <script src="https://kit.fontawesome.com/7055cf6fe9.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alexandre Marteau | Traitement en cours...</title>
</head>
<body>

</body>
</html>
<script type="text/javascript">
   window.location.href = '../';
</script>