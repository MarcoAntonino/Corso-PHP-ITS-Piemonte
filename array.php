<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$numeri = array(10,15,20); //ho inizializzato un array di interi
	$numeri1 = [10,15,20]; //un altro modo per scriverlo
	echo $numeri[0];
	echo "<br/>";
	echo $numeri[1];
	echo "<br/>";
	echo $numeri[2];
	echo "<br/>";

	$testi = array(
		"stefano",
		"simone",
		"lorenzo",
		);
	$misto = array("stringa", 
					10, 
					true,
					array(1,2)
					); //Gli array possono essere misti perchè PHP è debolmente tipizzato

	echo print_r($misto); //In questo modo stampa le posizioni
	echo "<br/>";
	echo "<pre>".print_r($misto); //Serve in base di debug. 1 è il valore di ritorno di print_r
	echo "<br/>";

 ?>

</body>
</html>