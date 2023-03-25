<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'C:\Users\EHYUA\wmd\webapps\ehyua.com\src\lib\phpmailer\vendor\phpmailer\phpmailer\src\Exception.php';
require 'C:\Users\EHYUA\wmd\webapps\ehyua.com\src\lib\phpmailer\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\Users\EHYUA\wmd\webapps\ehyua.com\src\lib\phpmailer\vendor\phpmailer\phpmailer\src\SMTP.php';

function sendAnEMail()
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'lumbrera.ehyua@gmail.com';                     //SMTP username
        $mail->Password   = 'ipqaprhzeieeqbdc';                               //SMTP password
        $mail->Port       = 465;
        $mail->SMTPSecure = 'ssl';                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

        //Recipients
        $mail->setFrom("expediteur@example.com", "Nom de l'expéditeur"); //fourni par le formulaire
        $mail->addAddress("successful.ehyua@outlook.com", "Marcel Ehyua M'BIA"); //Add a recipient (système)
        //$mail->addAddress('');               //Name is optional (système)
        $mail->addReplyTo('expediteur@example.com', 'Information'); //fourni par le formulaire
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject'; //fourni par le formulaire
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>'; //fourni par le formulaire
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


if (isset($_POST['contact'])) {
    if (empty($_POST['teste'])) {
        extract($_POST);
        $mail = new Mail(array(
            'addrressee'  => 'marcel.ehya@memo.net',
            'subject'     => $subject,
            'content'     => $content,
            'senderName'  => $pseudo,
            'senderEmail' => $email
        ));
        if (!$mail->checkSubject()) {
            $message = "Proposez svp un sujet à la conversation";
        } elseif (!$mail->checkContent()) {
            $message = "Remplissez svp le champ message";
        } elseif (!$mail->checkSenderName()) {
            $message = "Remplissez svp le cham pseudo";
        } else {
            $alert = $mail->checkContactEmail();
            if ($alert['alert'] < 1) {
                if ($mail->sendAnEMail()) {
                    $message = "Votre message nous est bien parvenu";
                } else {
                    $message = "Oups, une erreur s'est produite lors de l'envoi du 
					message. Veuillez recommencer.";
                }
            } else {
                $message = $alert['error'];
            }
        }
    } else {
        $message = "Merci, votre message a tres bien été posté";
    }
} else {
    //header('location:'.$config->rp().'/contacts');
}
include('details.php');
include('form0.php');
