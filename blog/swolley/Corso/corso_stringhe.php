<?php
/* STRINGHE */
$nome="Swolley";
$saluto="ciao";
echo "<h1>Stringhe</h1>";
echo "<p>".$saluto." &quot;".$nome."&quot;</p>";
//$nome=15;
//echo "<h2>".$nome."</h2>";
/*bubibubi
bubuibib
bubuibiub*/

echo strtoupper($nome."<br/>");				//forza maiuscolo
echo strtolower($nome."<br/>");				//forza minuscolo
echo ucfirst($nome." è il migliore<br/>");	//forza 1ª lettere maiuscola stringa
echo ucwords($nome." è il migliore<br/>");	//forza 1ª lettere maiuscola ogni parola

$frase1="      sempre caro mi fu      ";
$frase2=" ei fu siccome immobile";
echo trim($frase1);							//elimina spazi e tab ad inizio e fine stringa
echo " = ".strlen($frase1)." caratteri";	//lunghezza stringa
echo trim($frase2)." = ".strlen($frase2)." caratteri<br/>";
echo "la differenza è ".(strlen($frase1)-strlen($frase2))." caratteri<br/>";

$email  = 'name@example.com';
$domain = strstr($email, '@');	//stampa stringa da carattere ricercato in avanti
echo $domain."<br/>"; // prints @example.com
$domain = strstr($email, '@', true); //stampa stringa prima del carattere ricercato
echo $domain."<br/>"; // prints name
$domain = strstr($email, '#');
echo $domain."<br/>"; // non stampa nulla

$frase3=$frase1.$frase2;
echo $frase3." = ".strlen($frase3)." caratteri</br>";	//lunghezza stringa
$frase4=str_replace("a", "###", $frase3)."<br>";	//sostituisce caratteri in stringa
echo $frase4;

echo substr($frase4, 15, 5)."<br/>";	//stampa porzione di stringa
echo substr($frase4, -14)."<br>";

echo strpos($frase4,"i");
?>
