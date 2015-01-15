<?php
class Snake {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function__construct($scientificName, $firstName, $lastName, $gender, $weight) {
		$this->scientificName = $scientificName; 
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;

	}

	function getName() {
	return "This is my" . $this->firstName .
		" and last" . $this->lastName .
		" and this is my scientific-name" . $this->scientificName . " . ";
	}
}
class King Cobra extends Snake {
	function__construct($scientificName, $firstName, $lastName, $gender, $weight, $hiss){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->hiss=$hiss;
	}
	function greet() {
	return $this->hiss;
	}
}

class Boa extends Snake {
	function__construct($scientificName, $firstName, $lastName, $gender, $weight, $hiss){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->hiss=$hiss;
	}

	function hello() {
		return $this->hiss;
	}
}
?>
-------------------------------------
<?php
class Lizard {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function__construct($scientificName, $firstName, $lastName, $gender, $weight) {
		$this->scientificName = $scientificName; 
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;

	}

	function getName() {
	return "This is my" . $this->firstName .
		" and last" . $this->lastName .
		" and this is my scientific-name" . $this->scientificName . " . ";
	}
}
class Gecko extends Lizard {
	function__construct($scientificName, $firstName, $lastName, $gender, $weight, $slither){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->slither=$slither;
	}
	function greet() {
	return $this->slither;
	}
}

class Iguana extends Lizard {
	function__construct($scientificName, $firstName, $lastName, $gender, $weight, $slither){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->slither=$slither;
	}

	function hello() {
		return $this->slither;
	}
}
?>
---------------------------
<?php
class Tiger {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function__construct($scientificName, $firstName, $lastName, $gender, $weight) {
		$this->scientificName = $scientificName; 
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;

	}

	function getName() {
	return "This is my" . $this->firstName .
		" and last" . $this->lastName .
		" and this is my scientific-name" . $this->scientificName . " . ";
	}
}
class Siberian Tiger extends Tiger {
	function__construct($scientificName, $firstName, $lastName, $gender, $weight, $roar){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->roar=$roar;
	}
	function greet() {
	return $this->roar;
	}
}

class White Tiger extends Tiger {
	function__construct($scientificName, $firstName, $lastName, $gender, $weight, $roar){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->roar=$roar;
	}

	function hello() {
		return $this->roar;
	}
}
?>