<!DOCTYPE html>
<html>
<head>
	<title>array associativi</title>
</head>
<body>

<!-- In pratica dò un nome all'indice. Cioè potrò richiamare la posizione 0 o nome. È lo stesso -->
<?php 
	$studenti = array(
					array(
						"nome"=>"mauro",
						"cognome"=>"bogliaccino"
						),
					array(
						"nome"=>"paolo",
						"cognome"=>"bogliaccino"
						)
					);
	echo $studenti[0]["nome"];
	echo $studenti[0]["cognome"];
	//questo è un array multidimensionale

	$numeri=array(10,20,15);
	echo count($numeri);
	echo max($numeri); //Ritorni valore valore contenuto in un array
	echo min($numeri); //Ritorni valore minimo contenuto in un array
 ?> 
</body>
</html>