<?php
if (isset($_POST["send"])) {
    extract($_POST);
    $mail = new Mail(array(
        'addrressee'       => 'successful.ehyua@outlook.com',
        'subject'          => $subject,
        'content'          => $mailBody,
        'senderName'       => $firstName . " " . $lastName,
        'senderMailAdress' => $email
    ));
    $alerte = $mail->checkContactEmail();
    if (isset($alerte["alertNumber"]) && $alerte["alertNumber"] > 1) {
        echo "<script>alert('" . $alerte["error"] . "');</script>";
    } else {
        $mail->sendAnEMail();
    }
}
