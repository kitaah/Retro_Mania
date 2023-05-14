<?php
namespace Models;

class Create extends DatabaseConnection 
{
	private $sql; 
	private $stmt;
	private $timeZone; 
	private $errDate; 
	private $errLog;

	private function newAdminAccount($admin_username, $password) {
		try {
			$this->sql = "INSERT INTO `admins`(`admin_username`, `password`) VALUES (?, ?)";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->bindValue(1, $admin_username);
			$this->stmt->bindValue(2, $password);
			$this->stmt->execute();
		}
        catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
            $this->errLog = file_put_contents('logs/create/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
            exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
        }
    }

	public function createNewAdminAccount($admin_username, $password)
	{
		$this->newAdminAccount($admin_username, $password);
	} 	

    private function newCap($name, $price, $quantity, $image, $description, $collection_id, $admin_contributor_id)
	{
		try {
			$this->sql = "INSERT INTO `products` (`name`, `price`, `quantity`, `image`, `description`, `collection_id`, `admin_contributor_id`) VALUES (?, ?, ?, ?, ?, ?, ?)";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->bindValue(1, $name);
			$this->stmt->bindValue(2, $price);
			$this->stmt->bindValue(3, $quantity, \PDO::PARAM_INT);
			$this->stmt->bindValue(4, $image);
			$this->stmt->bindValue(5, $description);
			$this->stmt->bindValue(6, $collection_id, \PDO::PARAM_INT);
			$this->stmt->bindValue(7, $admin_contributor_id, \PDO::PARAM_INT);
			$this->stmt->execute();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/create/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

	public function createNewCap($name, $price, $quantity, $image, $description, $collection_id, $admin_contributor_id) {
		$this->newCap($name, $price, $quantity, $image, $description, $collection_id, $admin_contributor_id);
	}

    private function newCommentVisitors($username,$avatar,$title,$rating,$comment) {
		try {
			$this->sql = "INSERT INTO `online_guestbook` (`username`, `avatar`, `title`, `rating`, `comment`) VALUES (?, ?, ?, ?, ?)";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->bindValue(1, $username);
			$this->stmt->bindValue(2, $avatar);
			$this->stmt->bindValue(3, $title);
			$this->stmt->bindValue(4, $rating);
			$this->stmt->bindValue(5, $comment);
			$this->stmt->execute();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/create/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

	public function createNewCommentVisitors($username,$avatar,$title,$rating,$comment)
	{
		$this->newCommentVisitors($username,$avatar,$title,$rating,$comment);
	}
}
