<!---->
<!--echo "<br/>";-->
<!--
20170210
Nelle funzioni possiamo avere:
-condizioni
-cicli
Ci sono sia variabili che costanti che sono elementi primitivi
Operatori, servono per variare le variabili
 - l'operatore . serve per concatenare delle variabili
-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	function saluta($nome="ospite")
	{
		if($nome=="ospite")
			echo "Benvenuti , oggi è il: ";
		else
			echo "Benvenuto $nome, oggi è il: ";
			echo date("Ymd-H.i.s"); 
		//i secondi che si muovono, è una logica client side con js
		//ora non comapre più la data ma la funzione deve esser chiamata
	}

	saluta("Marco");
	echo "<br/>";
	//saluta();

	function somma($uno, $due)
	{
		//La f può ritornare informazioni al chiamante
		return $uno + $due;
	}

	echo "<br/>";
	$somma=somma(2,3);
	echo $somma;
	echo "<br/>";
	echo (somma(35,55));
	

 ?>

</body>
</html>