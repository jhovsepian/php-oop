<?php
class Snake {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function  __construct($scientificName, $firstName, $lastName, $gender, $weight) {
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
class KingCobra extends Snake {
	function  __construct($scientificName, $firstName, $lastName, $gender, $weight, $hiss){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->hiss=$hiss;
	}
	function greet() {
	return $this->hiss;
	}
}

class Boa extends Snake {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $hiss){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->hiss=$hiss;
	}

	function hello() {
		return $this->hiss;
	}
}
$Boa = new Boa("Boa", "Kevin","Thegreatboa", "male", 7, true);
print " Snake 1 is a " .$Boa->getName();

?>
<!-- Example 2 -->
<?php
class Lizard {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function  __construct($scientificName, $firstName, $lastName, $gender, $weight) {
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
	function  __construct($scientificName, $firstName, $lastName, $gender, $weight, $slither){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->slither=$slither;
	}
	function greet() {
	return $this->slither;
	}
}

class Iguana extends Lizard {
	function  __construct($scientificName, $firstName, $lastName, $gender, $weight, $slither){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->slither=$slither;
	}

	function hello() {
		return $this->slither;
	}
}
$Gecko = new Gecko("Gecko", "Jeremy", "Kekler", "male", 7, true);
print " Lizard 1 is a " .$Gecko->getName();

?>
<!-- Example 3 -->
<?php
class Tiger {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function  __construct($scientificName, $firstName, $lastName, $gender, $weight) {
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
class SiberianTiger extends Tiger {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $roar){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->roar=$roar;
	}
	function greet() {
	return $this->roar;
	}
}

class WhiteTiger extends Tiger {
	function  __construct($scientificName, $firstName, $lastName, $gender, $weight, $roar){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->roar=$roar;
	}

	function hello() {
		return $this->roar;
	}
}
$WhiteTiger = new WhiteTiger("WhiteTiger", "Jeff", "Anderson", "white", 7, true);
print " Tiger 1 is a " .$WhiteTiger->getName();
?>