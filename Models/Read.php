<?php 
namespace Models; 

class Read extends DatabaseConnection 
{ 
    private $data; 
	private $sql; 
	private $stmt; 
	private $result;
	private $timeZone; 
	private $errDate; 
	private $errLog;

	private function readAdminAccount($admin_username,$password) {
		try {
			$this->data = ["admin_username"=> $admin_username];
			$this->sql = "SELECT * FROM `admins` WHERE `admin_username`= :admin_username";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute($this->data);
			$this->result = $this->stmt->fetch();
			if	(!$this->result || !password_verify($password, $this->result['password'])) {
				exit("Invalid admin account ⚠️");
			} else {
				session_start();
				$_SESSION['admin_id'] = $this->result['admin_id'];
				$_SESSION['admin_username'] = $this->result['admin_username'];
			}
		} catch(\PDOException $err) { 
			$this->timeZone = date_default_timezone_set('Europe/Paris'); 
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND); 
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");		
		}
	}	
	
	public function readCurrentAdminAccount($admin_username,$password) { 
		return $this->readAdminAccount($admin_username,$password);
		}

	private function collectionsList() 
	{
		try {
			$this->sql = "SELECT * FROM `collections`"; 
			$this->stmt = $this->getDbCon()->prepare($this->sql); 
			$this->stmt->execute(); 
			return $this->stmt->fetchAll(); 
		} catch(\PDOException $err) { 
			$this->timeZone = date_default_timezone_set('Europe/Paris'); 
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰'); 
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND); 
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

	public function readCollectionsList() { 
		return $this->collectionsList();
	}

    private function capsCatalog()
	{
		try {
			$this->sql = "SELECT * FROM `products`";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute();
			return $this->stmt->fetchAll();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

    public function readCatalog() {
		return $this->capsCatalog();
	}

    private function capDescription($product_id)
	{
		try {
			$this->data = ["product_id" => $product_id];
			$this->sql =  "SELECT * FROM `products` WHERE `product_id` = :product_id"; 
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute($this->data);
			return $this->stmt->fetch();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

	public function readCapDescription($product_id) {
		return $this->capDescription($product_id);
	}

    private function employeesList() 
	{
		try  {
			$this->sql = "SELECT * FROM `employees`";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute();
			return $this->stmt->fetchAll();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}
    
	public function readEmployeesList() { 
		return $this->employeesList();
	}

    private function existingCap($product_id)
	{
		try {
			$this->data = ["product_id" => $product_id];
			$this->sql =  "SELECT * FROM `products` WHERE `product_id` = :product_id"; 
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute($this->data);
			return $this->stmt->fetch();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

	public function readExistingCap($product_id)
	{
		return $this->existingCap($product_id);
	}

    private function winnersList() 
	{
		try {
			$this->sql = "SELECT * FROM `winners`";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute();
			return $this->stmt->fetchAll();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

	public function readWinnersList() { 
		return $this->winnersList();
	}

    private function capsCatalogVisitors() 
	{ 
		try {
			$this->sql = "SELECT * FROM `products`";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute();
			return $this->stmt->fetchAll();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		}
	}

	public function readCapsCatalogVisitors() { 
		return $this->capsCatalogVisitors();
	}

    private function capDescriptionVisitors($product_id)
	{
		try {
			$this->data = ["product_id" => $product_id];
			$this->sql =  "SELECT * FROM `products` WHERE `product_id` = :product_id";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute($this->data);
			return $this->stmt->fetch();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");
		} 
	}

	public function readCapDescriptionVisitors($product_id) {
		return $this->capDescriptionVisitors($product_id);
	}

    private function commentsVisitors() 
	{	
        try {
		    $this->sql = "SELECT * FROM `online_guestbook`";
			$this->stmt = $this->getDbCon()->prepare($this->sql);
			$this->stmt->execute();
			return $this->stmt->fetchAll();
		} catch(\PDOException $err) {
			$this->timeZone = date_default_timezone_set('Europe/Paris');
			$this->errDate = date('d-m-Y 📅 H:i:s ⏰');
			$this->errLog = file_put_contents('logs/read/errors.txt',$err . $this->errDate . PHP_EOL, FILE_APPEND);
			exit("Something went wrong ⚠️! Please read the following message ! ➡️ " . $err->getMessage() . " ⛔");	
		}
	}

	public function readCommentsVisitors() { 
		return $this->commentsVisitors();
	}
}
?>

