<?php
/*   ARRAY   */
echo "<h1>Array monodimensionali</h1>";
$numeri1=array(1,10,50,4);
echo $numeri1[0]."<br/>";	//stampa posizione array
echo count($numeri1)."<br/>";
echo min($numeri1)."<br/>";	//valore minimo
echo max($numeri1)."<br/>";	//valore massimo

/*   ARRAT MISTO    */
$numeri2=array(1,"paolo",13,true,array(666,999));	//array misto
echo "<pre>";	//preformatted text (lo visualizza "così com'è!", mentre html troncherebbe gli a capo, i tab, ecc)
echo "contiene ".count($numeri2)." elementi</br>";
print_r(array_values($numeri2));	//stampa tutti i valori dell'array

echo "</br></br>Aggiungo valore al fondo</br>";
$numeri2[]=5;						//aggiunge in coda all'array
echo "contiene ".count($numeri2)." elementi</br>";
echo "accedo a posizione i-esima: ".$numeri2[1]."</br>";
print_r(array_values($numeri2));
echo "</pre>";

//da php>5.6 esiste altra notazione short per creare array: $a=['val1', 2,3.4,true];

/*    ARRAY ASSOCIATIVI    */
$studenti=array(
	"nome"=>"Swollen",
	"cognome"=>"Belly");
echo $studenti["nome"]." ";
echo $studenti["cognome"]."<br/><br/>";

$studenti=array(
	array(
	"nome"=>"Swollen",
	"cognome"=>"Belly"),
	array(
	"nome"=>"Marco",
	"cognome"=>"Paolo")
	);
echo $studenti[0]["nome"]." ".$studenti[0]["cognome"]."<br/>";

echo $studenti[1]["nome"]." ".$studenti[1]["cognome"];

echo "<h1>Array multidimensionali</h1>";
$a=0;

$a=array(
	array("lunedì", "martedì", "mercoledì", "giovedì", "venerdì", "sabato", "domenica"),
	array("prova1", "prova2"),
	);

echo "<table>";
for($i=0;$i<count($a); $i++)
{
	echo "<tr>";
	for($j=0; $j<count($a[$i]); $j++)
	{
		echo "<td>".$a[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
