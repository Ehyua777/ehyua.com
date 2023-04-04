<?php
class MailConfigurationManager
{
	private int $id;
	private $recipient;
	private $recipientName;
	private $userName;
	private $password;
	private $host;
	private $secure;
	private $port;
	private $authentication;
	private $accessProvider;

	// SETTERS //
	public function setId($id)
	{
		$this->id = $id;
	}
	public function setRecipient($recipient)
	{
		$this->recipient = $recipient;
	}
	public function setRecipientName($recipientName)
	{
		$this->recipientName = $recipientName;
	}
	public function setHost($host)
	{
		$this->host = $host;
	}
	public function setUserName($userName)
	{
		$this->userName = $userName;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	public function setPort($port)
	{
		$this->port = $port;
	}
	public function setSecure($secure)
	{
		$this->secure = $secure;
	}
	public function setAuthentication($authentication)
	{
		$this->authentication = $authentication;
	}
	public function setAccessProvider($accessProvider)
	{
		$this->accessProvider = $accessProvider;
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
	// GETTERS //
	public function id()
	{
		return $this->id;
	}
	public function recipient()
	{
		return $this->recipient;
	}
	public function recipientName()
	{
		return $this->recipientName;
	}
	public function userName()
	{
		return $this->userName;
	}
	public function password()
	{
		return $this->password;
	}
	public function host()
	{
		return $this->host;
	}
	public function port()
	{
		return $this->port;
	}
	public function secure()
	{
		return $this->secure;
	}
	public function authentication()
	{
		return $this->authentication;
	}
	public function accessProvider()
	{
		return $this->accessProvider;
	}
}
