<!--
Per trasferire una pagina ho due metodi:
- get: pesca tutto quello che passa via get
- post pesca tutto quello che passa via post
- $request: pesca tutto quello che passa via get e post
Sono due canali di trasmissione del protocollo HTTP o HTTPS. Ogni pagina per essere visualizzata tramite una sollecitazione GET, una request
-->

<?php 
//error_reporting(E_ALL);
error_reporting(0); //non mostrare l'errore
/*	$saluto = "ciao";
	echo "il mio saluto è $saluto";
	echo 'il mio saluto è {$saluto}';*/
	//echo $_GET['pagina'];
	//$a = $_GET['pagina'];
	/*$studenti = array(
		"stefano",
		"simone",
		"lorenzo",	
		"rosa",	
		"danilo",	
	);	*/
	//$studenti è un array
	//qui ricevo la variabile passata via GET
	switch ($_GET['pagina']){
		/*anche dollaro get è un array non creato dall'utente, ma globale di PHP a cui possiamo accedere e vale per la sessione associata al server*/
		case "uno":
			//phpinfo();

			//creaHeader('ciao');
			echo sommaValori(25,75);
			/*Se passassi un solo valore, PHP assegna lo zero ed è come un null e quindi la funzione gira lo stesso.
			Nel caso gli apssassi dei numeri dentro virgolette (stringhe) li accetterebbe lo stesso*/
			echo $_SERVER['SCRIPT_FILENAME'];
			echo '<br>';
			echo $_SERVER['REMOTE_HOST'];
			echo '<br>';		
			echo $_SERVER['REMOTE_USER'];		
			echo '<br>';

			$lunghezza = count($_SERVER);

			foreach ($_SERVER as $key => $value) {
						echo $key
							." "
							.$value
							."<br>";
					}

			for ($i=9; $i >= 0; $i--) {
				echo $studenti[$i]."<br>";
			}		
		
			foreach ($studenti as $studenteChiave => $studenteValore) {
				echo $studenteChiave.": ".$studenteValore['nome']."<br>";
			}

		break;

		case "due":
			echo "<h1>benvenuto nel corso php</h1>";
			echo "<h2>Elementi del linguaggio</h2>";

			
				if ($_GET['argomento'] == 'variabili' ) include 'variabili.php';
				if ($_GET['argomento'] == 'cicli' ) include 'cicliwhile.php';
				if ($_GET['argomento'] == 'array' ) include 'array.php';
				if ($_GET['argomento'] == 'array_associativi' ) include 'array_associativi.php';
				if ($_GET['argomento'] == 'condizioni' ) include 'condizioni.php';

				
		break;
		
		case "tre":
			
			//shuffle($studenti);

			for ($i=0; $i < count($studenti) ; $i++) { 
				echo $studenti[$i][0]."<br>";
			}
			/*echo $studenti[0].
					$studenti[1].
					$studenti[2];*/
		break;

		case "giochi")
			//include "giochi_lanciaDadi.php";
			include "giochi_lanciaDadiPost.php";
		break;

		default:
			echo "mi dispiace non posso mostrarti queste informazioni segretissime";
		
	else echo "ti trovi nella home";
	}
 ?>


		
		
		<?php     //$saluto  = " mondo";           ?>
		<?php     //echo $saluto;     ?>
		<?php 	//echo (3 + 2);  ?>