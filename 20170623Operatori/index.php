<?php

/*PUNTATORI
&$string è un puntamento.
*/

/*OVERLOAD
Ecco come PHP implementa l'overload.
*/
function fare_pizza($pizza = "margherita")
{
  //se voglio passare dei parametri di default, li passo in ultima posizione
  return "Hai scelto una pizza ".$pizza."<br>";
}

echo fare_pizza();
echo fare_pizza("capricciosa");

//è consigliato(=obbligatorio) di mettere i valori di default al fondo
function test($value='', $key)
{
  # code...
}

//test(1,2) corretto
//test(1) restituirebbe errore, perchè l'argomento di default è il secondo. ecco perchè è consiglaito mettere i valori opzionali al fondo

/*Le classi wrapper sono classi di tipo oggetto che corrispondono ai tipi primitivi.
Questo per ereditare metodi e funzioni.*/


/*ù
$bar = each($array)
Prende l'oggetto a un determinato indice e poi aumenta l'indice di uno.
Se con each() vado alla fine, mi restituisce -1, quindi posso metterlo in un ciclo.
*/

/*GESTIONE DEI FILE
fopen() mi pare una connessione con un file. Bisogna specificare il tipo di connessione. Se il file non esiste lo crea e gestisce anche le eccezioni.

bool fclose() chiude la connessione per liberare le risorse.

bool feof() ritorna true finchè ci sono righe

string fgetc() mi ritorna carattere per carattere

string gets() ritorna una stringa

int fwrite($risorsa, string "la stringa che devo scrivere")
ritorna il numero di byte scritti

array explode(string separator) una funzione a partire da una stringa, mi ritorna un array e c'è una che fa l'opposto mettendo anche un separatore*/

$frutti = array('mela','pera','banana');

echo implode('<br/>', $frutti);


/*

*/


 ?>
