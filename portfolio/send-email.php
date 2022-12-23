<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$secret=yaml_parse_file('secret.yaml');

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
try{
    $mail->SMTPDebug = 0;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $secret['mail'];
    $mail->Password = $secret['mdp'];
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    //
    $mail->Host = gethostbyname('sn1.migomta.one');
    //

    $mail->setFrom($_POST['prenom'], $_POST['e-mail']);
    $mail->addAddress('florent.lamy@sts-sio-caen.info');

    $mail->isHTML(true);
    $mail->Subject = $_POST['prenom'];
    $mail->Body    = $_POST['e-mail'].'</br>';
    $mail->Body    = $_POST['profil'].'</br>';
    $mail->Body    = $_POST['message'];

    $mail->Send();
    header('Location: index.php');
    exit();
}catch (Exception $e){
   echo "Erreur lors de l'envoi de votre message !";
   echo 'mailer error: '. $mail->ErrorInfo;
}

?>