<?php 
echo "<h1>Array di oggetti 2</h1>";
include_once 'corso_oggettiAutomobile.php';

$marche=["Fiat", "BMW", "Audi"];
$modelli=[
		["500", "Punto", "Panda"],
		["X1", "M3", "I8"],
		["R8", "A8", "TT"],
];
$colori=["Rosso", "Verde", "Blu", "Nero"];

$concessionario=array();

for ($i=0; $i <100 ; $i++) { 
	$marca=$marche[array_rand($marche)];
	$num=array_search($marca, $marche);
	$modello=$modelli[$num][array_rand($modelli[$num])];
	$colore=$colori[array_rand($colori)];

	$concessionario[] = new Automobile($marca, $modello, rand(10, 30)*100, $colore);
	echo "<pre>";
	print_r($concessionario);
	echo "</pre>";
}

 ?>