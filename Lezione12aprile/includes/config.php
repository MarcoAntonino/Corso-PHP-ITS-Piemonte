<?php
session_start(); //qui parte la sessione
//dobbiamo includerlo come prima riga 
$_SESSION['admin'] = 1234; //è un array super globale

define ("TITOLO", "Mondo verticale");
define ("SOTTOTITOLO", "Il blog di marco")



define('DB_HOST', "localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_NAME', "ITS2017");