<!--
-->
<!--
Prima di usare il for each, dobbiamo avere in testa che esistono array semplici e 

Il while prevede una condizione booleana, finchè è vera, il ciclo continua a girare (anche all'infinito)
-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
$studenti = [
	"studente1" => [	"nome" => "stefano",
			"cognome" => "adamo")],
	[	"nome" => "marco",
			"cognome" => "antonino")],
	[	"nome" => "stefano",
			"cognome" => "adamo")],
	[	"nome" => "stefano",
			"cognome" => "adamo")],
	"simone",
	"marco"
	);
	$age = array(4,8,15,16,23,42);
	/*
	Il foreach è la naturale evoluzione del for che scorre tutto l'array dal primo valore all'ultimo. Se voglio scorrerlo al contrario, uso il for.
	*/
	for ($i=0; $i>= 0 ; $i--) { 
		echo $studenti[$i]."<br>";
	}

	foreach ($studenti as $studenteChiave => $studenteValore) {
		echo $studenteChiave.": ".$studenteValore['nome']."<br>";
	}
 ?>

</body>
</html>