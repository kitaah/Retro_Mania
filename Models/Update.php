<?php

namespace Models; 

class Update extends DatabaseConnection
{
	private $sql;
	private $stmt;
	private $timeZone;
	private $errDate;
	private $errLog;

	private function updateCap($name,$price,$quantity,$description,$collection_id,$admin_contributor_id,$product_id) {
		try {
			$this->sql = "UPDATE `products` SET `name` = ?, `price` = ?, `quantity` = ?, `description` = ?, `collection_id` = ?, `admin_contributor_id` = ? WHERE `product_id` = ?";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->bindValue(1, $name);
			$this->stmt->bindValue(2, $price);
			$this->stmt->bindValue(3, $quantity, \PDO::PARAM_INT);
			$this->stmt->bindValue(4, $description);
			$this->stmt->bindValue(5, $collection_id, \PDO::PARAM_INT);
			$this->stmt->bindValue(6, $admin_contributor_id, \PDO::PARAM_INT);
			$this->stmt->bindValue(7, $product_id, \PDO::PARAM_INT);
			$this->stmt->execute();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/update/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND); // Write data in the error log file (FILE_APPEND, append content to existing file)
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔"); // Display SQLSTATE (code + message) next to the "Something went wrong!"	
		}
	}
	
	public function updateCurrentCap($name,$price,$quantity,$description,$collection_id,$admin_contributor_id,$product_id)
	{
		$this->updateCap($name,$price,$quantity,$description,$collection_id,$admin_contributor_id,$product_id);
	}

	private function updateCapImage($image, $product_id) {
		try {
			$this->sql = "UPDATE `products` SET `image` = ? WHERE `product_id` = ?";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->bindValue(1, $image);
			$this->stmt->bindValue(2, $product_id, \PDO::PARAM_INT);
			$this->stmt->execute();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/update/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND); // Write data in the error log file (FILE_APPEND, append content to existing file)
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔"); // Display SQLSTATE (code + message) next to the "Something went wrong!"	
        }
    }

	public function updateCurrentCapImage($image,$product_id)
	{
		$this->updateCapImage($image,$product_id);
	}
}
?>
