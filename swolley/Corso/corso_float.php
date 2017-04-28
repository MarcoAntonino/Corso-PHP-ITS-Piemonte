<!DOCTYPE html>
<html>
<head>
	<title>Floating point numbers</title>
</head>
<body>
<?php
	echo "<b>Float:</b></br>";
	echo $float=3.14;
	echo "</br>";
	echo $float + 7;
	echo "</br>";
	echo 5/3;
	//echo 5/0;	//ritorna warning division by 0
	echo "</br></br><b>Arrotondamenti:</b>";
	echo "</br>".round($float, 2);	//se non specifico secondo parametro ritorna un intero
	echo "</br>".ceil($float);	//arrotonda x eccesso
	echo "</br>".floor($float);	//arrotonda x difetto

	echo "</br></br><b>Controlli tipo:</b>";
	$intero = 12;
	echo "</br>è intero il numero ".(is_int($intero) ? 'VERO' : 'FALSO');
	echo "</br>è float il numero ".(is_float($intero) ? 'VERO' : 'FALSO');
	echo "</br>è float il numero ".(is_float($float) ? 'VERO' : 'FALSO');
	echo "</br>il valore è ".strtoupper(gettype($float));

	echo "</br></br><b>Casting:</b></br>";
	echo $float=(string)$float;

	echo "</br></br><b>Costanti:</b>";
	define('PIGRECO',3.14);	//costante
	echo "</br>".PIGRECO;
	$raggio=5;
	echo "</br>L'area del cerchio di raggio ".$raggio." è: ".(PIGRECO*pow($raggio,2));

	$string="false";
	if($string) echo "vuoto";
	$string=0;
	if($string) echo "vuoto";

?>
</body>
</html>