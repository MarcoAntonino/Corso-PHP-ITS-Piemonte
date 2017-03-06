<!DOCTYPE html>
<!-- -->
<!--Per attivare l'autocompletamento devi salvare il file in formato .php-->
<!--In Tool, Snippets hai delle shortcuts per i tag -->
<!-- Dai un'occhiata anche alle selection -->
<!--Una stringa può essere  -->
<!--Anche se cancello gli head del codice html, se ispeziono la pagina, vedrò comunque dei costrutti html -->
<html>
<head>
	<title> </title>
<?php $nome = "6"; ?> 
</head>
<body>



<?php $saluto = "ciao"; ?>
<?php $nome = "mauro"; ?> 
<?php $nome = "pippo"; ?> <!-- Assegnando un nuovo valore, ovviamente cambia-->
<h1>
	
<?php 
	echo $saluto.
		$nome;
?> <!-- Il punto serve a concatenare.-->
<?php echo "<br/>"; ?> <!-- Questo serve per andare a capo.-->
<?php echo $saluto." ".$nome; ?> <!-- Lo spazio lo faccio con doppio apice e uno spazio in mezzo.-->
<?php echo $saluto."<br/>'cavder'"; ?> <!-- Per scrivere un apostrofo o apice, incapsulo il carattere che voglio stampare in altri diversi. 
<!--Ricorda che ci vuole sempre l'istruzione per mandare a stampa sullo schermo-->
<?php echo "<br/>"; ?>
<?php 
	echo ucfirst($saluto) //ucfirst mette la prima lettera maiuscola. ucwords mette in maiuscolo le prime lettere delle parole 
		." ".strtoupper($nome); 
 ?> <?php 
	echo ucwords($saluto 
		." ".strtoupper($nome)); 
 ?> <!--La f strtoupper appena vista mette tutto in maiuscolo -->
 <!-- Questo serve perchè, indipendentemente da cosa scrive l'utente, noi sia abbia il formato voluto -->
<?php echo "<br/>"; ?>
<?php 
	$frase = "   sempre caro mi fu       ";
	$frase2 = "           ei fu siccome immbole dato";
	echo trim($frase); //toglie gli spazi a inizio e fine della frae
	echo $frase2;
?>
<?php echo "<br/>"; ?>
<?php 
	echo "la frase 1 conta ";
	echo strlen($frase); //dice la lunghezza della frase. Posso anche fare sottrazioni fra di esse. strlen($frase)-strlen($frase2)
	echo " caratteri"
 ?>
<?php echo "<br/>"; ?>
<?php
	$email = "name[at]example[dot]com";
	$domain = strtr($email, "@");
	//se voglio cercare qualcosa in una stringa uso questo comando. Controlla perchè c isono degli errori
 ?>
<?php echo "<br/>"; ?>
<?php
	echo str_replace("fu", "è", $frase); // sostituisce una parola con un'altra
	echo "<br/>";

	$frase5 = "44 gatti in fila per 6 col resto di 2";
	echo str_replace("44", "quarantaquattro", $frase5); // sostituisce una parola con un'altra
	echo "<br/>";
	echo substr($frase5, 20, 5); //Parti dal carattere, in questo caso 20 e tronca dopo 5 caratteri. Se metti un valore negativo, parti dagli ultimi caratteri
	echo "<br/>";
    echo strrpos($frase5, "6"); //Mi trova la posizione della parola all'interno della stringa
	echo "<br/>";
	$numeri = $array(10,15,20); //ho inizializzato un array di interi
	echo $numeri[0];
	echo $numeri[1];
	echo $numeri[2];

 ?>  
</h1>
</body>
</html>
<!--La programmazione delle stringhe è una funzione base di PHP-->