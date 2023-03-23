<?php
class DBFactory
{
	protected $db;
	//Définition des constantes
	const PORT = 3306;
	const CHARSET = 'utf8';
	const HOST = 'localhost';
	const DB   = 'ehyua';
	const USER = 'Ehyua777';
	const PW   = 'Ehyu@777';
	//Fonction de connection à la base de données via PDO
	public static function getMysqlConnexionWithPDO()
	{
		try {
			$db = new \PDO(
				'mysql:
			host=' . self::HOST . ';
			port=' . self::PORT . ';
			charset=' . self::CHARSET . ';
			dbname=' . self::DB,
				self::USER,
				self::PW
			);
			$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $err) {
			die('error[' . $err->getCode() . '] ' . $err->getMessage());
		}
		return $db;
	}
	public function setDb($dataBase)
	{
		$dataBase = self::getMysqlConnexionWithPDO();
		$this->db = $dataBase;
	}
	public function __construct($dataBase)
	{
		$this->setDb($dataBase);
	}
	//Fonction de connection à la base de données via PMYSQLi
	public static function getMysqlConnexionWithMySQLi()
	{
		return new \MySQLi(self::HOST, self::USER, self::PW, self::DB, self::PORT);
	}
	public function db()
	{
		return $this->db;
	}
}
