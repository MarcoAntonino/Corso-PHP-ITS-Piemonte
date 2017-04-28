<?php
if(isset($_GET['argomento']))
			$argomento=$_GET['argomento'];
		else $argomento="";
echo "<h1>Sfide</h1>";
switch ($argomento)
{
	case 'calcolatrice':
		codice('challenge/calcolatrice.php');
	break;
	case 'ordinatore':
		codice('challenge/ordinatore.php');
	break;
	case 'geometria':
		codice('challenge/geometria.php');
	break;
	case 'stringa':
		codice('challenge/post_stringhe.php');
	break;
	default: echo "Seleziona un argomento per visualizzare i dettagli";
}
	
?>