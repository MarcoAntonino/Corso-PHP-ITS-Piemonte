<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
// ARRAY MONODIMENSIONALE


$a[]=5; // shortcut: inizializzo un array in modo veloce
/*
Un'altro modo veloce per creare un array è 
$a=['val1',2,3,4,true];
*/

$a = array(75, "pistacchio", "1000lirealmese", 22,99);
echo "\$a[0]=$a[0]"; //stampa elemento con indice 0
echo "<br>";
echo count($a); // si chiede quanti elementi ci sono in array
$a[]=5; //si mette in coda questo elemento
echo "<br>";
echo count($a); // avendo aggiunto un elemento, ora ci sarà un elemento in più nella conta 

/*
È un contenitore interattivo.
*/
for ($i =0; $i < count ($a); $i ++) { 
	echo "<br>";
	echo "\$a[$i]=$a[$i];"; // ecco come stampi l'array

}

echo "<br>";
echo "<br>";

for ($i =0; $i < count ($a); $i ++) { 
	echo "<br/>";
	echo $somma += $a[$i] ; // c'è un errore ma al prof funziona

}


?>

<h1>//ARRAY ASSOCIATIVO
</h1>

<p>
<?php 
//ARRAY ASSOCIATIVO
/*
fa da associazione fra chiave e valore

*/

$voti = array('gino' => 7.5, "piero" => 9.8, "gigi"=>6.99 );
echo count($voti);

 ?>
 </p>

 <?php 

$a = array ("primo"=>75, "secondo"=>121,3=>300,10, "pistacchio", "centesimo"=>22.99); // questo è associativo ma il 10 non ha indice, è come se fosse un array normale. Puoi farlo!

//come faccio a scorrerlo? Uso foreach che è come for ma ha una sola direzione di scorrimento

// foreach ($a as $chiave => $valore) // qui ho deciso appunto come chiamare i contenuti dell'array
// primo argomento ti passo la collezione. Se è associativo a ogni indice trovo sia la chiave che il valore
	// if (is_int($chiave)) { //se la chiave è un intero, fai qualcosa

$a = array ("primo"=>7.5, "secondo"=>7.1 , "tizio"=>10, "pistacchio"=>4.5, "centesimo"=>9.75);

foreach ($voti as $studente => $voto) {
		echo "$studente = $voto <br/>";
		$somma += $voto;
	}

	echo "media: ".$somma/count($a)."</h2>";	
//prova a cambiare i nomi degli array nel foreach

?>

<H1>ARRAY MULTIDIMENSIONALI</H1>
<?php 

$a=0; // azzeramento

//$a[0][0]="prova1";
//$a[0][1]="prova2";
//$a[1][0]="prova3";
//$a[1][1]="prova4";

$a = array(
	array("lunedì", "martedì", "mercoledì", "giovedì", "venerdì", "sabato", "domenica", ),
	array("mattino","", "","", "","", "","",),
	array("pomeriggio","", "PHP Programming","", "","", "","",),
	array("sera","", "","", "","", "","",),
	);
	

/*
Matrice regolare ed omogenea perchè è un quadrato
Come la scorro?
Se è regolare...
*/

echo "<table>";
//ecco come stampare l'array
for ($i=0; $i < count($a); $i++) { 
	//stampo la riga tr
	echo "<tr>";
	for ($j=0; $j < count($a[$i]); $j++) { 
		//stampo la colonna td
		echo "<td>";
		echo $a[$i][$j];
		echo "</td>";
		# code...
	}
	echo "</tr>";
}
echo "</table>";






 ?>

</body>
</html>