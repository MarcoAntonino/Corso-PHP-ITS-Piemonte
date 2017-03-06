<!DOCTYPE html>
<html>
<head>
	<title>Floating point numbers</title>
</head>
<body>

<?php 
	
	echo $float = 3.14;
	define('PIGRECO', 3.14); //COSTANTE e non puoi ridefinirla più avanti
	echo "<br/>";
	
	echo $float + 7; //in questo caso non c'è assegnazione, ma solo calcolo
	echo "<br/>";
	echo 5/3;
	echo "<br/>";

	echo round($float); //arrotandamento semplice
	echo "<br>";
	echo ceil($float); //arrotando al numero sup
	echo "<br>";
	echo floor($float);//arrotando al numero inf
	echo "<br>";
	$intero = 12;

	echo "È intero il numero " . is_int($intero); //ritorna vero valso
	echo "<br>";
	echo "È intero il numero " . is_float($intero); //ritorna vero valso
	echo "<br>";
	echo "È intero il numero " . is_double($float); //ritorna vero valso
	echo "<br>";
	echo "Faccio il casting " . $float=(string) $float; //esiste il casting dentro il PHP. da rivedere
	echo "<br>";
	echo "$float";
	echo "<br>";
	echo "È float il numero " . gettype($float);
	
	echo "<br>";
	echo PIGRECO;

	echo "<br>";
	$raggio=5;
	echo "L'area del cerchio di raggio 5 è uguale a : ".PIGRECO*$raggio*$raggio;

	echo "<br>";
	$string = "";
	if ($string) echo "vuoto"; //controlla solo se esiste











 ?>

</body>
</html>