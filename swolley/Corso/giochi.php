<?php
if(isset($_GET['argomento']))
			$argomento=$_GET['argomento'];
		else $argomento="";
echo "<h1>Giochi</h1>";
switch ($argomento)
{
	case 'dadi':
		include 'giochi_lanciaDadiPost.php';
	break;
	case 'quadrato':
		include 'giochi_quadratoMagico.php';
	break;
	default: echo "Seleziona un argomento per visualizzare i dettagli";
}
	
?>