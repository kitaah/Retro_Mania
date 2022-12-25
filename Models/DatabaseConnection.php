<?php

namespace Models;

class DatabaseConnection
{
	private $host = "retromania";
	private $port = "3306";
	private $dbname = "retro_mania";
	private $charset = "utf8mb4";
	private $username = "root";
	private $password = "16.miRO47.7r";
	private $dbCon;
	private $timeZone;
	private $errDate;
	private $errLog;

	private function setDbCon()
	{
		try {
			$this->dbCon = new \PDO('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname . ';charset=' . $this->charset . ';', $this->username, $this->password);
			$this->dbCon->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/database/errors.txt', $err . $this->errDate . PHP_EOL,  FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

	public function getDbCon()
	{
		if ($this->dbCon == null) {
			$this->setDbCon();
		}
		return $this->dbCon;
	}
}
