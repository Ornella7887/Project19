<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;500;700&display=swap" rel="stylesheet">
	<title>Document</title>
	<style>
		body {
			background-color: rgb(32, 27, 27);
			font-family: 'Enriqueta', serif;
			font-size: 1.5rem;
			color: antiquewhite;
			padding: 2%;
		}
		h3 {
			text-align: center;
		}
		span {
			color: rgb(230, 142, 28);
		}
	</style>
</head>
<body>
	
</body>
</html>

<?php 
class Person {
	private $name;
	private $lastname;
	private $age;
	private $mother;
	private $father;

	function __construct($name, $lastname, $age, $mother=null, $father=null)
	{
		$this->name = $name;
		$this->lastname = $lastname;
		$this->age = $age;
		$this->mother = $mother;
		$this->father = $father;
	}

	function getName() {
		return $this->name;
	}
	function getMother() {
		return $this->mother;
	}
	function getFather() {
		return $this->father;
	}
	function getLastname() {
		return $this->lastname;
	}
	function getGrandMaFatherLine() {
		return $this->getFather()->getMother()->getName()." ".$this->getFather()->getMother()->getLastname();
	}
	function getGrandPaFatherLine() {
		return $this->getFather()->getFather()->getName()." ".$this->getFather()->getFather()->getLastname();
	}
	function getGrandMaMotherLine() {
		return $this->getMother()->getMother()->getName()." ".$this->getMother()->getMother()->getLastname();
	}
	function getGrandPaMotherLine() {
		return $this->getMother()->getFather()->getName()." ".$this->getMother()->getFather()->getLastname();
	}

	
	function getInfo() {
		return "<h3> A few words about myself:</h3> <br>"."<span>my name is </span>".$this->getName()."<br><span>my lastname is </span>".$this->getLastname()."<br><br><span>my father is </span>".$this->getFather()->getName()." ".$this->getFather()->getLastname()."<br><span>my mother is </span>".$this->getMother()->getName()." ".$this->getMother()->getLastname()."<br><br><span>my grandfather on my father's side is </span>".$this->getGrandPaFatherLine()."<br><span>my grandmother on my father's side is </span>".$this->getGrandMaFatherLine()."<br><br><span>my grandfather on my mother's side is </span>".$this->getGrandPaMotherLine()."<br><span>my grandmother on my mother's side is </span>".$this->getGrandMaMotherLine();
	}
}

$igor = new Person("Igor", "Petrov", 68);
$polya = new Person("Polya", "Petrova", 62);

$petr = new Person("Petr", "Ivanov", 75);
$maria = new Person("Maria", "Ivanova", 63);

$olga = new Person("Olga", "Ivanova", 42, $polya, $igor);
$alex = new Person("Alex", "Ivanov", 42, $maria, $petr);

$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);


echo $valera->getInfo();

?>