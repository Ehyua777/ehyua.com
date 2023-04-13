<?php
class DBFactory
{
	protected $db;

	public static function getConfigForPDO()
	{
		return array(
			'host' => DB_HOST,
			'port' => DB_PORT,
			'charset' => DB_CHARSET,
			'dbname' => DB_NAME,
			'user' => DB_USER,
			'password' => DB_PASSWORD
		);
	}
	public static function getConfigForMySQLi()
	{
		return array(
			'host' => DB_HOST,
			'port' => DB_PORT,
			'dbname' => DB_NAME,
			'user' => DB_USER,
			'password' => DB_PASSWORD
		);
	}


	public static function getMysqlConnexionWithPDO()
	{
		try {
			$config = self::getConfigForPDO();
			$dsn = sprintf(
				'mysql:host=%s;port=%s;charset=%s;dbname=%s',
				$config['host'],
				$config['port'],
				$config['charset'],
				$config['dbname']
			);
			$pdo = new PDO($dsn, $config['user'], $config['password']);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $err) {
			die('error[' . $err->getCode() . '] ' . $err->getMessage());
		}
		return $pdo;
	}

	public function setDb()
	{
		$this->db = self::getMysqlConnexionWithPDO();
	}
	public function __construct()
	{
		$this->setDb();
	}
	//Fonction de connection à la base de données via PMYSQLi
	public static function getMysqlConnexionWithMySQLi()
	{
		$config = self::getConfigForMySQLi();
		$mysqli = new mysqli($config['host'], $config['user'], $config['password'], $config['dbname'], $config['port']);

		if ($mysqli->connect_error) {
			die('Connect Error (' . $mysqli->connect_errno . ') '
				. $mysqli->connect_error);
		}

		return $mysqli;
	}

	public function db()
	{
		return $this->db;
	}
}
