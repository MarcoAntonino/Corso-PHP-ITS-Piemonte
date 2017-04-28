<?php 
echo "<h3>Oggetti 1</h3>";

class HelloWorld
{
	//properties
	public $var = 'Hello, World';

	//methods
	public function displayVar(){
		echo $this->var;
	}
}

class CiaoMondo
{
	//properties
	public $var = 'Ciao, Mondo';

	//methods
	public function displayVar(){
		echo $this->var;
	}
}

//istanziazione
$miosaluto= new HelloWorld();
$tuosaluto= new CiaoMondo();

print_r($miosaluto);

echo $miosaluto->displayVar();
echo $tuosaluto->displayVar();
 ?>
