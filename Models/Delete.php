<?php
namespace Models;

class Delete extends DatabaseConnection
{
	private $sql;
	private $stmt;
	private $timeZone;
	private $errDate;
	private $errLog;

    private function capToDelete($product_id)
	{
		try {
			$this->sql = "DELETE FROM `products` WHERE `product_id` = ?";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->bindValue(1, $product_id, \PDO::PARAM_INT);
			$this->stmt->execute();
		} catch(\PDOException $err) {
			$this->timeZone =date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/delete/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

	public function deleteCap($product_id) {
		return $this->capToDelete($product_id);
	}
}
