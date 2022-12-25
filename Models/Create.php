<?php
namespace Models;

class Create extends DatabaseConnection 
{
	private $data;
	private $sql; 
	private $stmt;
	private $timeZone; 
	private $errDate; 
	private $errLog;

	private function newAdminAccount($admin_username, $password) {
		try {
			$this->data = [
			'admin_username' => $admin_username, 
			'password' => $password];
			$this->sql = "INSERT INTO `admins`(`admin_username`, `password`) VALUES (:admin_username, :password)";
			$this->stmt = $this->getDbCon()->prepare($this->sql)->execute($this->data);			
		}
        catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
            $this->errLog = file_put_contents('logs/create/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND); // Write data in the error log file (FILE_APPEND, append content to existing file)
            exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔"); // Display SQLSTATE (code + message) next to the "Something went wrong!"
        }
    }

	public function createNewAdminAccount($admin_username, $password)
	{
		$this->newAdminAccount($admin_username, $password);
	} 	

    private function newCap($name, $price, $quantity, $image, $description, $collection_id, $admin_contributor_id)
	{
		try {
			$this->data = [
			"name" => $name, 
			"price" => $price, 
			"quantity" => $quantity,
			"image" => $image, 
			"description" => $description, 
			"collection_id" => $collection_id,
			"admin_contributor_id" => $admin_contributor_id
			];
			$this->sql = "INSERT INTO `products` (`name`, `price`, `quantity`, `image`, `description`, `collection_id`, `admin_contributor_id`) VALUES (:name, :price, :quantity, :image, :description, :collection_id, :admin_contributor_id)";
			$this->stmt = $this->getDbCon()->prepare($this->sql)->execute($this->data);
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/create/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND); // Write data in the error log file (FILE_APPEND, append content to existing file)
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔"); // Display SQLSTATE (code + message) next to the "Something went wrong!"	
		}
	}

	public function createNewCap($name, $price, $quantity, $image, $description, $collection_id, $admin_contributor_id) {
		$this->newCap($name, $price, $quantity, $image, $description, $collection_id, $admin_contributor_id);
	}

    private function newCommentVisitors($username,$avatar,$title,$rating,$comment) {
		try {
			$this->data = [
			"username" => $username, 
			"avatar" => $avatar, 
			"title" => $title, 
			"rating" => $rating,
			"comment" => $comment
			];
			$this->sql = "INSERT INTO `online_guestbook` (`username`, `avatar`, `title`, `rating`, `comment`) VALUES (:username, :avatar, :title, :rating, :comment)";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute($this->data);
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/create/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND); // Write data in the error log file (FILE_APPEND, append content to existing file)
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔"); // Display SQLSTATE (code + message) next to the "Something went wrong!"	
		}
	}

	public function createNewCommentVisitors($username,$avatar,$title,$rating,$comment)
	{
		$this->newCommentVisitors($username,$avatar,$title,$rating,$comment);
	}
}
