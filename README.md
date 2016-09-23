#<?php

Class items{
	private $name;
	private $price;
	private $quantity;
	private $rating;
	private $place;
	private $option;
	private $image;
	
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

}
?>
