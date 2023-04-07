<?php
if (isset($_POST["send"])) {
    extract($_POST);
    $mail = new MailManager(array(
        'subject'          => htmlspecialchars($subject),
        'content'          => $mailBody,
        'senderName'       => $firstName . " " . $lastName,
        'senderMailAdress' => $email
    ));
    $alerte = $mail->checkContactEmail();
    if (isset($alerte["alertNumber"]) && $alerte["alertNumber"] > 1) {
?>
        <script>
            document.getElementById('errorMessage').innerHTML = "<?= $alerte["error"] ?>";
        </script>"
        <?php
    } else {
        $mailCofiguration = new MailConfigurationRepository();
        $smtConfig = $mailCofiguration->getConfigurationData($dBCon, "selected");
        if ($mail->sendAnEmail($smtConfig)) {
            $_POST = array();
            header("location:index.php#contact=success");
        } else { ?>
            <script>
                // Afficher la pop-up
                alert('Désolé, une erreur s\'est produite et nous n\'avons pas pu recevoir votre mail. Prière de réessayer un peu plus trad.');
            </script>
<?php }
    }
}

$contactRep = new ContactRepository();
$contact = $contactRep->getContactData($dBCon);
