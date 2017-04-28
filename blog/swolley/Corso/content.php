<?php 

/*	$saluto = "ciao";
	echo "il mio saluto è $saluto";
	echo 'il mio saluto è {$saluto}';*/
	//echo $_GET['pagina'];
	//$a = $_GET['pagina'];
	//qui ricevo la variabile passata via GET
	if(isset($_GET['pagina']))
	{
		switch($_GET['pagina'])
		{
			case "uno":
				include "var_server.php";
				break;
			case "due":
				include "corso.php";
				break;			
			case "giochi":
				include "giochi.php";
				break;
			case "studenti":
				include "studenti_info.php";
				break;
			case "sfide";
				include "sfide.php";
				break;
		}
	}
	else
	{
		echo "mi dispiace non posso mostrarti queste informazioni segretissime";
		echo "<br/>ti trovi nella home<br/>";
		echo "<br/><b>Funzione creaHeader()</b><br/>";
		creaHeader("ciao");
		echo "<br/><b>Funzione calcolaValori()</b><br/>";
		echo calcolaValori(17,3,'moltiplicazione')."<br/><br/>";
	}
 ?>