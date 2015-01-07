<?php
class Cat{
	public $firstName;
	public $lastName;
	public $breed;

	function__construct($title, $firstName, $lastName, $breed) {
	$this->firstName = $firstName;
	$this->lastName = $lastName;
	$this->breed = $breed;
	}

	function getName() {
		return "{$this->firstName}" .
		"{$this->lastName}";
	}
}

$cat1 = new Cat("Snickers", "Snikki", "American Curl");
print"Cat 1: {$cat1->getName()}\n;

?>

------------------------------------------
<?php
class Pigeon{
	public $firstName;
	public $lastName;
	public $breed;

	function__construct($title, $firstName, $lastName, $breed) {
	$this->firstName = $firstName;
	$this->lastName = $lastName;
	$this->breed = $breed;
	}

	function getName() {
		return "{$this->firstName}" .
		"{$this->lastName}";
	}
}

$pigeon1 = new Pigeon("lucky", "wing", "Grey Pigeon");
print"Pigeon 1: {$pigeon1->getName()}\n;
?>
-------------------------------------
<?php
class Ant{
	public $firstName;
	public $lastName;
	public $breed;

	function__construct($title, $firstName, $lastName, $breed) {
	$this->firstName = $firstName;
	$this->lastName = $lastName;
	$this->breed = $breed;
	}

	function getName() {
		return "{$this->firstName}" .
		"{$this->lastName}";
	}
}

$ant1 = new Ant("ugly", "little thing", "black ant");
print"Ant 1: {$ant1->getName()}\n;
?>
