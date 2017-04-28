<?php

//apro connessione
$mysqliConnection = new mysqli("localhost", "root", "", "php_its2017");
if(mysqli_connect_errno())
{
	printf("errore: %s\n", mysqli_connect_error());
	exit();
}

//chiudo connessione
//$mysqliConnection->close();

?>