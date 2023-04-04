<?php
require 'C:\Users\EHYUA\wmd\webapps\ehyua.com\src\lib\phpmailer\vendor\phpmailer\phpmailer\src\Exception.php';
require 'C:\Users\EHYUA\wmd\webapps\ehyua.com\src\lib\phpmailer\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\Users\EHYUA\wmd\webapps\ehyua.com\src\lib\phpmailer\vendor\phpmailer\phpmailer\src\SMTP.php';
require 'MailConfiguration.manager.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class MailManager
{
	private $senderName, $senderMailAdress, $subject, $content;

	// SETTERS //
	public function setSubject($subject)
	{
		$this->subject = stripslashes(htmlspecialchars($subject));
	}
	public function setContent($content)
	{
		$this->content = stripslashes(htmlspecialchars($content));
	}
	public function setSenderName($senderName)
	{
		$this->senderName = $senderName;
	}
	public function setSenderMailAdress($sender)
	{
		$this->senderMailAdress = $sender;
	}
	// HYDRATATION //
	public function hydrate($data)
	{
		foreach ($data as $attribute => $value) {
			$method = 'set' . ucfirst($attribute);
			if (is_callable(array($this, $method))) {
				$this->$method($value);
			}
		}
	}
	// CONSTRUCTEUR //
	public function __construct($values = array())
	{
		if (!empty($values)) {
			$this->hydrate($values);
		}
	}
	// FONCTIONS DE VERIFICATION //
	public function checkContactEmail()
	{
		$alert = 0;
		$emailErr = NULL;
		$contactEmailAlert = array();
		if (empty($this->senderMailAdress)) {
			$alert++;
			$emailErr = "Vous n'avez pas remplis le champ e-mail.";
		}
		if (!preg_match(
			'#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#',
			$this->senderMailAdress
		)) {
			$alert++;
			$emailErr = "E-mail pas valid!";
		}
		$contactEmailAlert = array('alertNumber' => $alert, 'error' => $emailErr);
		return $contactEmailAlert;
	}
	// GETTERS //
	public function subject()
	{
		return $this->subject;
	}
	public function content()
	{
		return $this->content;
	}
	public function sender()
	{
		return $this->senderMailAdress;
	}
	public function senderName()
	{
		return $this->senderName;
	}
	// FONCTION CLE D'EXPEDITION D'UN COURIER ELECTRONIQUE //
	function sendAnEmail(MailConfigurationManager $config): bool
	{

		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			//Server settings
			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = $config->host();                     //Set the SMTP server to send through
			$mail->SMTPAuth   = $config->authentication();                                   //Enable SMTP authentication
			$mail->Username   = $config->userName();                     //SMTP username
			$mail->Password   = $config->password();                               //SMTP password
			$mail->Port       = $config->port();
			$mail->SMTPSecure = $config->secure();                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
			//Enable verbose debug output

			//Recipients
			$mail->setFrom($this->senderMailAdress, $this->senderName); //fourni par le formulaire
			$mail->addAddress($config->recipient(), $config->recipientName()); //Add a recipient (système)
			//$mail->addAddress('');               //Name is optional (système)
			$mail->addReplyTo($this->senderMailAdress, $this->senderName); //fourni par le formulaire
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

			//Content
			$mail->isHTML(true);
			$mail->CharSet = "UTF-8";                               //Set email format to HTML
			$mail->Subject = $this->subject; //fourni par le formulaire
			$mail->Body    = $this->content; //fourni par le formulaire
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			return true;
		} catch (Exception $e) {
			return false;
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}

	//checkers
	public function checkSubject()
	{
		return !empty($this->subject);
	}
	public function checkContent()
	{
		return !empty($this->content);
	}
	public function checkSenderName()
	{
		return !empty($this->senderName);
	}
	public function checkContactPosts($pseudo, $subject, $message)
	{
		$alert = 0;
		$contactErr = NULL;
		$pseudoErr = NULL;
		$subjectErr = NULL;
		$messageErr = NULL;
		$contactAlert = array();
		if (empty($pseudo)) {
			$alert++;
			$pseudoErr = 'Vous n\'avez pas remplis le champ du pseudo.';
		}
		if (empty($subject)) {
			$alert++;
			$subjectErr = 'Vous n\'avez pas remplis le champ du sujet.';
		}
		if (empty($message)) {
			$alert++;
			$messageErr = 'Vous n\'avez pas remplis le champ du message.';
		}
		$contactAlert = array(
			'alert' => $alert,
			'perro' => $pseudoErr,
			'serro' => $subjectErr,
			'merro' => $messageErr
		);
		return $contactAlert;
	}
}
