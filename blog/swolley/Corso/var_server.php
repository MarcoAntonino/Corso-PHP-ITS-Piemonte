<?php
//phpinfo();
//$_SERVER è un array contenente Server and execution environment information
echo $_SERVER['SCRIPT_FILENAME']." //specificato un singolo parametro<br/><br/><br/>";		//specifico un singolo parametro
	
foreach($_SERVER as $key=>$value)		//stampo tutti i possibili valori dei parametri di $_SERVER[]
{
	echo $key."".$value."<br/>";
}
?>