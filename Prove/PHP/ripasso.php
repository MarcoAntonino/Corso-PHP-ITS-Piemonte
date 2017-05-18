<?php
define('MEANING_OF_LIFE', '42');

echo MEANING_OF_LIFE;
echo "<br>";

$var= "ciao";
echo "$var";
echo "<br>";

$var.="mamma" ;

echo "$var";
echo "<br>";

echo "Questo operatore === significa identico: cioè dello stesso tipo";
echo "<br>";
echo "<br>";
echo "**************";
echo "<br>";
$array = array();
// conversione implicita da array a booleano
/*CONVERSIONE IMPLICITA
La conversione implicita avviene anche per i booleani:
- vengono convertiti in true: tutti i numeri tranne lo 0, tutte le stringhe tranne le sstringhe vuote e quelle che valgono 0, tutti gli array tranne quelli vuoti
*/

if($array)
{
echo 'l\'array $array ha almeno un elemento <br>';
}
else
{
echo 'l\'array $array è vuoto <br>';
}
echo "**************";
echo "<br>";

$stringa = "La mia casa ha due porte e due finestre";
$num = strlen($stringa);
echo $num;

echo "**************";
echo "<br>";

$x=10;
$y=intval(sqrt($x));
echo "La radice quadrata di $x senza decimali è $y";

echo "**************";
echo "<br>";

$format=DATE_RSS;
echo date('l jS \of F Y h:i:s A');
echo "**************";
echo "<br>";

$arraynormale= array("uno","due", "tre");
echo $arraynormale[1];
echo "**************";
echo "<br>";

$arrayassociativo = array('nome' =>"Marco" ,
                          'cognome' =>"Antonino",
                          'eta'=>31);

echo $arrayassociativo['cognome'];                          



 ?>
