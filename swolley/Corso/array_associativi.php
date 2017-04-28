<?php 
//array associativo
echo "<h1>Array associativi</h1>";
echo "<br/><b>FOREACH array associativi</b><br/>";
$studenti1 = [
		"nome" =>"stefano", "cognome"=>"adamo"
	];

foreach($studenti1 as $chiave=>$valore)
	{
		echo $chiave.": ".$valore."<br/>";
	}

//----------------------------------------------------------
echo "<br/><b>FOREACH array misti associativi/classici</b><br/>";
$a=array("gino"=>7.5, "piero"=>6.8, 4=>300, 10, "pistacchio", "centesimo"=>22.99);	//dichiarando 4 un indice, automaticamente salta i valori, 2 e 3 e poi prosegue da 5 in avanti
echo $a[2];	//in fatti non esiste
echo $a["gino"]."</br>";	//stampo una posizione in particolare
echo count($a)." posizioni</br>";
foreach($a as $chiave=>$valore)
{
	if(is_int($chiave))
		echo "Chiave è un intero! \$a[$chiave] = $a[$chiave]<br/>";
	else echo "\$a[\"$chiave\"] = $valore<br/>";
}

//-----------------------------------------------------------
echo "<br><br>";
$voti=array("centesimo"=>9.75, "primo"=>7.5, 6.5, 8.5, "secondo"=>7.1, 2=>6.5, "tizio"=>10, "pistacchio"=>4.5, "centesimo"=>9.75, "centesimo"=>9.75);		//se trova più indici con lo stesso nome considera il primo e tralascia gli altri
$somma=0;
foreach($voti as $studente=>$voto)
{
	echo "studente = $voto<br/>";
	$somma+=$voto;
}
echo "<h2>media: ".$somma/count($voti)."</h2>";

//-----------------------------------------------------------
echo "<br/><b>FOREACH array di array associativi</b><br/>";
		//array di array associativi
	//1° modo
	/*$studenti2 = array(
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
		array ("nome" =>"stefano", "cognome"=>"adamo"),
	);*/

//--------------------------------------------------------------
	//2° modo
	$studenti2 = [
		["nome" =>"stefano", "cognome"=>"adamo"],
		["nome" =>"tizio", "cognome"=>"caio"],
		["nome" =>"cip", "cognome"=>"ciop"],
		["nome" =>"bello", "cognome"=>"patato"]
	];

foreach($studenti2 as $valore)
	{
		echo $valore["nome"].": ".$valore["cognome"]."<br/>";
	}	
 ?>
