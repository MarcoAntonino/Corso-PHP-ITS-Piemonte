<?php
	function creaHeader($parola='')
	{
		switch($parola)
		{
		case "ciao":
			for ($i = 1 ; $i < 7 ; $i++)
			{
				echo "<h".$i.">$parola</h".$i.">";	
			}
			break;
		case "":
			echo "Non hai scritto nulla";
			break;
		default: echo "Hai scritto: ".$parola;
		}
	}; 


	function calcolaValori($a, $b, $operazione='addizione')
	{
		$c=0;
		switch($operazione)
		{
			case 'addizione':
				$c=$a+$b;
				break;
			case 'sottrazione':
				$c=$a-$b;
				break;
			case 'moltiplicazione':
				$c=$a*$b;
				break;
			case 'divisione':
				$c=$a/$b;
				break;
			default:
				$c="Non hai inserito valori corretti";
				break;
		}
		return $c;
	}


	function redirect($pagina='')
	{		
		header("Location: ".$pagina);
		exit;
	}


	function essite($value)
	{
		return isset($value) && $value !=="";	//== strettamente uguale, !== strettamente diverso
	}

	function codice($pagina)
	{
		include $pagina;
		echo "<hr/>";
		echo "<b>PHP CODE</b>";
		$pagina= "<pre><code>".htmlentities(file_get_contents($pagina))."</code></pre>";
		echo "<div class='codice'>".$pagina."</div>";
	}
?>