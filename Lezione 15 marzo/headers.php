<?php 
	function redirect($pagina)
	{
		header("Location: ".$pagina);
		exit;
	}
	//header("Location: form.php");
	// va messo in cima alla pagina
	/*
	Ti porta direttamente alla pagina che vuoi. Questo per impedire che ci si memorizzi l'indirizzo della pagina di login e si provi a fare il login
	*/

	function esiste($value)
	{
		return isset($value) && $value !== ""; // in questo modo 5 e "5" sono diversi ergo controlla èure il tipo
	}


 ?>
