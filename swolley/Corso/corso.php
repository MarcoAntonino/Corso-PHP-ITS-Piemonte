<?php
if(isset($_GET['argomento']))
			$argomento=$_GET['argomento'];
		else $argomento="";
echo "<h1>Corso php</h1>";
echo "<h2>Elementi del linguaggio</h2>";
switch ($argomento)
{
	case 'stringhe':
		codice('corso_stringhe.php');
		//include 'corso_stringhe.php';
	break;
	case 'array':
		codice('corso_array.php');
		codice('corso_matrici.php');
		codice('corso_arrayAssociativi.php');
		//include 'corso_array.php';
	break;
	case 'condizioni':
		codice('corso_condizioni.php');
		//include 'corso_condizioni.php';
	break;
	case 'cicliWhile':
		codice('corso_cicliWhile.php');
		//include 'corso_cicliWhile.php';
	break;
	case 'float':
		codice('corso_float.php');
		//include 'corso_float.php';
	break;
	case 'funzioni':
		codice('corso_funzioni.php');
		//include 'corso_funzioni.php';
	break;
	case 'sessions_processing':
		codice('corso_sessionsProcessing.php');
		//include 'corso_sessionsProcessing.php';
	break;
	case 'cookies':
		codice('corso_cookies.php');
		//include 'corso_cookies.php';
	break;
	case 'sessions':
		codice('corso_sessions.php');
		//include 'corso_sessions.php';
	break;
	case 'oggetti':
		codice('corso_oggetti1.php');
		codice('corso_oggetti2.php');
		codice('corso_oggettiMain.php');
	break;
	default: 
		include "calendario.php";
		echo "<br/><br/><br/><br/><br/>";
		echo "Seleziona un argomento per visualizzare i dettagli";
}
	
?>