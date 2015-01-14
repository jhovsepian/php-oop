<?php 
class Hamster {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;
	public $squeak;

	function__construct($scientificName, $firstName, $lastName, $gender, $weight, $squeak) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->genderName = $gender;
		$this->weight = $weight;
		$this->squeak = $squeak;
	}

	function getName() {
		return "This is my". $this->firstName . 
		" and last".$this->lastName;
	}
}

?>