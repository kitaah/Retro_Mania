<?php

namespace Validation;

class Validate {
    private $regExpUsername = "/^[a-zA-Z0-9_-]*$/";
	private $regExpPassword = "/^(?=.*\d)(?=(.*\W){2})(?=.*[a-zA-Z])(?!.*\s).{1,15}$/";
    private $regExpNameTitle = "/^[a-zA-Z\s]*$/";
	private $regExpPrice = "/^[+]?\d+([.]\d+)?$/";
	private $regExpImage = "/[^\\s]+(.*?)\\.(jpg|jpeg)$/";
	private $regExpPositiveNumbers = "/^[1-9]\d*$/";

    private function postAdminRegistration($admin_username,$password) {
		$admin_username = $_POST["admin_username"]; 	
		$password = $_POST["password"];
	}

	private function validationAdminRegistration($admin_username,$password) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {	
            if (empty($admin_username) && empty($password)) {
                exit("Please, complete the username and the password fields ⚠️");
            }
            if (!preg_match($this->regExpUsername,$admin_username) && !preg_match($this->regExpPassword,$password)) {
                exit("Please, complete correctly the username and the password fields ⚠️");
            } 
            if (empty($admin_username)) {
                exit("Please, complete the username field ⚠️");
            } 
            if (!preg_match($this->regExpUsername,$admin_username)) {
                exit("Please, complete correctly the username field ⚠️");
            } 
            if (empty($password)) {
                exit("Please, complete the password field ⚠️");
            } 
            if (!preg_match($this->regExpPassword,$password)) {
                exit("Please, complete correctly the password field ⚠️");	
            } else {
				return true;                                                                                                                                                                                                                           
            }
        }
    }

	public function validationNewAdminAccount($admin_username,$password)
	{
		$this->postAdminRegistration($admin_username,$password);
		$this->validationAdminRegistration($admin_username,$password);
	} 

    private function postAdminLogin($admin_username,$password) {
		$admin_username = $_POST["admin_username"]; 	
		$password = $_POST["password"];
	}

	private function validationAdminLogin($admin_username,$password) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {	
            if (empty($admin_username) && empty($password)) {
                exit("Please, complete the username and the password fields ⚠️");
            }
            if (!preg_match($this->regExpUsername,$admin_username) && !preg_match($this->regExpPassword,$password)) {
                exit("Please, complete correctly the username and the password fields ⚠️");
            } 
            if (empty($admin_username)) {
                exit("Please, complete the username field ⚠️");
            } 
            if (!preg_match($this->regExpUsername,$admin_username)) {
                exit("Please, complete correctly the username field ⚠️");
            } 
            if (empty($password)) {
                exit("Please, complete the password field ⚠️");
            } 
            if (!preg_match($this->regExpPassword,$password)) {	
                exit("Please, complete correctly the password field ⚠️");	
            } else {
				return true;                                                                                                                                                                                                                           
            }
        }
    }

	public function validationCurrentAdminAccount($admin_username,$password)
	{
		$this->postAdminLogin($admin_username,$password);
		$this->validationAdminLogin($admin_username,$password);
	} 
    
    private function postCap($name,$price,$quantity,$image,$description,$collection_id,$admin_creator_id) {
		$name = $_POST["name"];
		$price = $_POST["price"]; 	 	
		$quantity = $_POST["quantity"]; 	
		$image = $_POST["image"];
		$description = $_POST["description"]; 	 	
		$collection_id = $_POST["collection_id"]; 	
		$admin_creator_id = $_POST["admin_creator_id"]; 	
	}

	private function validationCap($name,$price,$quantity,$image,$description,$collection_id,$admin_creator_id) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {	
            if (empty($name) && empty($price) && empty($quantity) && empty($image) && empty($description) && empty($collection_id) && empty($admin_creator_id)) {	
                exit("Please, complete all the fields ⚠️");
            } 
            if (empty($name)) {
                exit("Please, complete the cap name field ⚠️");
            } 
            if (!preg_match($this->regExpNameTitle,$name)) {
                exit("Please, complete correctly the cap name field ⚠️");
            } 
            if (empty($price)) {
                exit("Please, complete the price field ⚠️");
            } 
            if (!preg_match($this->regExpPrice,$price)) {
                exit("Please, complete correctly the price field ⚠️");
            } 
            if (empty($quantity)) {
                exit("Please, complete the quantity field ⚠️");
            } 
            if (!preg_match($this->regExpPositiveNumbers,$quantity)) {
                exit("Please, complete correctly the quantity field ⚠️");
            } 
            if (empty($image)) {	
                exit("Please, complete the image field ⚠️");
            } 
            if (!preg_match($this->regExpImage,$image)) {
                exit("Please, upload an image with the correct extension ⚠️");
            } 
            if (empty($description)) {	
                exit("Please, complete the description field ⚠️");
            } 
            if (empty($collection_id)) {
                exit("Please, complete the collection code field ⚠️");
            } 
            if (!preg_match($this->regExpPositiveNumbers,$collection_id)) {	
                exit("Please, complete correctly the collection code field ⚠️");
            }
            if (empty($admin_creator_id)) {
                exit("Please, complete correctly the admin creator id field ⚠️");
            }
            if (!preg_match($this->regExpPositiveNumbers,$admin_creator_id)) {	
                exit("Please, complete correctly the admin creator id field ⚠️");
			} else {
				return true;
            }
        }
    }

    public function validationNewCap($name, $price, $quantity, $image, $description, $collection_id, $admin_creator_id) {
        $this->postCap($name, $price, $quantity, $image, $description, $collection_id, $admin_creator_id);
        $this->validationCap($name,$price,$quantity,$image, $description, $collection_id,$admin_creator_id);
    }

    private function postUpdateCap($name,$price,$quantity,$description,$collection_id,$admin_creator_id,$product_id)
	{
		$name = $_POST["name"];
		$price = $_POST["price"]; 	 	
		$quantity = $_POST["quantity"]; 	
		$description = $_POST["description"]; 	 	
		$collection_id = $_POST["collection_id"]; 	
		$admin_creator_id = $_POST["admin_creator_id"]; 
		$product_id = $_POST["product_id"]; 
	}

	private function validationUpdateCap($name,$price,$quantity,$description,$collection_id,$admin_creator_id,$product_id) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {	
            if (empty($name) && empty($price) && empty($quantity) && empty($description) && empty($collection_id) && empty($admin_creator_id)) {
                exit("Please, complete all the fields ⚠️");
            } 
            if (empty($name)) {
                exit("Please, complete the cap name field ⚠️");
            } 
            if (!preg_match($this->regExpNameTitle,$name)) {	
                exit("Please, complete correctly the cap name field ⚠️");
            } 
            if (empty($price)) {	
                exit("Please, complete the price field ⚠️");
            } 
            if (!preg_match($this->regExpPrice,$price)) {
                exit("Please, complete correctly the price field ⚠️");
            } 
            if (empty($quantity)) {
                exit("Please, complete the quantity field ⚠️");
            } 
            if (!preg_match($this->regExpPositiveNumbers,$quantity)) {
                exit("Please, complete correctly the quantity field ⚠️");
            } 
            if (empty($description)) {
                exit("Please, complete the description field ⚠️");
            } 
            if (empty($collection_id)) {
                exit("Please, complete the collection code field ⚠️");
            } 
            if (!preg_match($this->regExpPositiveNumbers,$collection_id)) {
                exit("Please, complete correctly the collection code field ⚠️");
            }
            if (empty($admin_creator_id)) {
                exit("Please, complete correctly the admin creator id field ⚠️");
            }
            if (!preg_match($this->regExpPositiveNumbers,$admin_creator_id)) {
                exit("Please, complete correctly the admin creator id field ⚠️");
			} 
            if (empty($product_id)) {
                exit("The product id field is empty ⚠️");
            }
			if (!preg_match($this->regExpPositiveNumbers,$product_id)) {	
                exit("Invalid product id field ⚠️");
			} else {
				return true;
            }
        }
    }

	public function validationUpdateCurrentCap($name,$price,$quantity,$description,$collection_id,$admin_creator_id,$product_id)
	{
		$this->postUpdateCap($name,$price,$quantity,$description,$collection_id,$admin_creator_id,$product_id);
		$this->validationUpdateCap($name,$price,$quantity,$description,$collection_id,$admin_creator_id,$product_id);
	}

	private function postUpdateCapImage($image,$product_id)
	{ 	
		$image = $_POST["image"]; 	
		$product_id = $_POST["product_id"]; 	
	}

	private function validationUpdateCapImage($image,$product_id) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {	
            if (empty($image)) {	
                exit("Please, complete the image field ⚠️");
            } 
            if (!preg_match($this->regExpImage,$image)) {	
                exit("Please, upload an image with the correct extension ⚠️");
            } 
            if (empty($product_id)) {	
                exit("The product id field is empty ⚠️");
            }
			if (!preg_match($this->regExpPositiveNumbers,$product_id)) {	
                exit("Invalid product id field ⚠️");
			} else {
				return true;
            }
        }
    }

	public function validationUpdateCurrentCapImage($image,$product_id)
	{
		$this->postUpdateCapImage($image,$product_id);
		$this->validationUpdateCapImage($image,$product_id);
	}

    private function postComment($username,$title,$comment,$website) {
		$username = $_POST['username'];
		$title = $_POST['title'];
		$comment = $_POST['comment'];
        $website = $_POST['website'];
	}

	private function validationComment($username,$title,$comment,$website) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {	
            if (empty($username) && empty($title) && empty($comment)) {
                exit("Please, complete the username, the title and the comment fields ⚠️");
            }
            if (empty($username)) {
                exit("Please, complete the username field ⚠️");
            }
            if (!preg_match($this->regExpUsername,$username)) {
                exit("Please, complete correctly the username field ⚠️");
            }
            if (empty($title)) {	
                exit("Please, complete the title field ⚠️");
            }
            if (!preg_match($this->regExpNameTitle,$title)) {
                exit("Please, complete correctly the title field ⚠️");
            }   
            if (empty($comment)) {
                exit("Please, complete the comment field ⚠️");
            } 
            if (!empty($website)) {
                exit("You are a spammer ⚠️");
            } else {
				return true;
            }
        }
    }
	
	public function validationNewComment($username,$title,$comment,$website) {
        $this->postComment($username,$title,$comment,$website);
        $this->validationComment($username,$title,$comment,$website);
	}
}
?>

