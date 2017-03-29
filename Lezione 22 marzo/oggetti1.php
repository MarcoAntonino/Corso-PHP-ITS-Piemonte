<?php 

/**
* 
*/
class HelloWorld
{
	public $var = "Hello, World";
	//per definire le proprietà di un oggetto, la classe è il luogo giusto

	public function displayVar()
	{
		echo $this->var;
	}
}

/*
$this è una variabile che accede alla variabile var di quest'oggetto
*/

class CiaoMondo
{
	public $var = "Ciao, Mondo";

	public function displayVar()
	{
		echo $this->var;
	}
}

$mioSaluto = new HelloWorld(); // ho creato un oggetto di tipo helloworld
$tuoSaluto = new CiaoMondo(); // ho creato un oggetto di tipo helloworld

print_r($mioSaluto);
/*
HelloWorld Object ( [var] => Hello, World )
*/
echo "<br>";
echo $mioSaluto->var;
//l'operatore per accedere agli oggetti di php è ->
//Quando uso l'operatore freccia, non uso più il dollaro davanti
echo "<br>";
echo $tuoSaluto->displayVar();






 ?>