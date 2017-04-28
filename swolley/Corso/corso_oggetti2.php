<?php 
echo "<h3>Oggetti 2</h3>";

include_once "corso_oggettiAutomobile.php";

$marca="bmw";
$modello="x5";
$cilindrata=3000;
$colore="nero";

$miaAuto=new Automobile($marca, $modello, $cilindrata, $colore);
$miaAuto2=new Automobile("Ferrari", "GT-666", 6000, "Leopardata");
 
 echo strtoupper($miaAuto->stampaOggetto());
 echo "<br/>";
 echo strtoupper($miaAuto2->stampaOggetto());

echo "<h1>Array di oggetti</h1>";
$arrayDiOggetti=array($miaAuto, $miaAuto2);
echo count($arrayDiOggetti)." elementi<br/>";
echo "<pre>";
print_r($arrayDiOggetti);
echo "</pre>";

for ($i=0; $i <count($arrayDiOggetti) ; $i++) { 
	echo $arrayDiOggetti[$i]->stampaOggetto()."<br/>";
}
?>
