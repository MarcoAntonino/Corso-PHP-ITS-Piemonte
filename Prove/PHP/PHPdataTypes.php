<?php 

$x=555;
var_dump($x);
echo "<br/>";
$mucche  = array("Clarabella", "Claravingia","Massimo",7);
var_dump($mucche);
echo "<br/>";
/**
* Questa è una classe di prova, oltre alla mia prima classe in php
*/
class Car 
{
	
	function Car()
	{
		$this->model = "VW";
	}
}

// istanzia la classe
$herbie = new Car();

//mostra le proprietà degli oggetti
echo $herbie->model;

echo "<br/>";
$x = "Hello world!";
$x = null;
var_dump($x);



 ?>