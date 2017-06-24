<!--20170125-->
<!---->
<div id="menu">
	<a href="?">Home page</a> <!--href è un link. Se metti solo il punto interrogativo, viene richiamata solo la pagina su cui ci si trova-->
	<a href="?pagina=uno">PhpInfo</a>
	<a href="?pagina=due">Corso Php</a>
	<a href="?pagina=tre">About me</a>
	<a href="http://www.php.net" target="blank">PHP.net</a><!--target="blank" ti apre una nuova finestra, si chiama collegamento ASSOLUTO-->

<!--È un menù dinamico.-->


</div>

<?php 
error_reporting(0);

	$saluto = "ciao";

	echo "Il mio saluto è $saluto";
	echo "Il mio saluto è {$saluto}";


	// echo $_GET['pagina'];
	//$a = $_GET['pagina'];

	if($_GET['pagina']){

	
	if ($_GET['pagina']) == "uno"){
		phpinfo();//è l'istruzione per avere tutte le info sul PHP che stanno girando sulla macchina.  Dà le info che si trovano su phpini. Ma se ho il mio spazio su Aruba, come faccio a sapere le info? Funziona solo il locale.
	}
	else if ($_GET['pagina'] == "due") {
		echo "<h1>Benvenuto nel corso PHP</h1>";
		echo "<ul>";
		echo "<li><a href='variabili.php'>variabili</a></li>";
		echo "<li><a href=\"array.php\">array</a></li>";

		echo "</ul>"; //elenco NON ordinato
	}
	else {
		echo "mi dispiace non posso mostrarti queste info segreteissime";
		}

	}
 ?>
 <!--
 Environment path: percorso di sistema che mi dice dove si trovano le varie info-->