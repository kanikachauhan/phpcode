<?php

//class creation code
Class item{
	private $name;
	private $price;
	private $quantity;
	private $place;
	private $option;
	private $image;
	private $rating;
	
	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}

	public function setPrice($price){
		$this->price = $price;
	}
	public function getPrice(){
		return $this->price;
	}
	
	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}
	public function getQuantity(){
		return $this->quantity;
	}
	
	public function setPlace($place){
		$this->place = $place;
	}
	public function getPlace(){
		return $this->place;
	}
	
	public function setOption($option){
		$this->option = $option;
	}
	public function getOption(){
		return $this->option;
	}
	
	public function setRating($rating){
		$this->rating = rating;
	}
	public function getRating(){
		return $this->rating;
	}
}


//variables for storing data from post request and html
$iname = $price = $quantity = $rating = $option = $place = $option = "";


//creating object and assigning the values to variables
$itemObj = new item();
$itemObj->setName($name);
$itemObj->setPrice($price);
$itemObj->setQuantity($quantity);
$itemObj->setPlace($place);
$itemObj->setOption($option);
$itemObj->setRating($rating);



$message = "";

//database connection variables declared
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO itemstable VALUES (, 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    $message = "Record Saved Successfully";
} else {
    $message = "Record Not saved";
}

$conn->close();
?>


