<!---->
<!--È un file di configurazione-->
<?php /*Switch per la modalità debug*/
error_reporting(0);
//error_reporting(E_ALL);
 ?>

//etichette
<!-- Questo è il titolo che richiameremo dopo-->
<?php
$title = "Corso Backend ITS 2017 PHP Programming";

 //etichette

// array di array associativi info studenti

$studenti = [
							
		["nome"=>"RICCARDO", "cognome"=>"GABOSSI",	"email" => "riccardo.gabossi@edu.itspiemonte.it"		],

		["nome"=>"VLADIMIR", "cognome"=>"VIBIO",	"email" => "vladimir.vibio@edu.itspiemonte.it"		],

		["nome"=>"GIORGIO", "cognome"=>"MASERAZZO",	"email" => "giorgio.maserazzo@edu.itspiemonte.it" ],

		["nome"=>"STEFANO", "cognome"=>"SCICOLONE",	"email" => "stefano.scicolone@edu.itspiemonte.it"		],

		["nome"=>"DAVIDE", "cognome"=>"COLANGELO",	"email" => "davide.colangelo@edu.itspiemonte.it"		],

		["nome"=>"FABRIZIO", "cognome"=>"DE CICCO",	"email" => "fabrizio.decicco@edu.itspiemonte.it"		],

		["nome"=>"SIMONE", "cognome"=>"RORATO",	"email" => "simone.rorato@edu.itspiemonte.it"		],

		["nome"=>"LORENZO", "cognome"=>"SCARPA",	"email" => "lorenzo.scarpa@edu.itspiemonte.it"		],

		["nome"=>"SIMONE", "cognome"=>"FUOCO",	"email" => "simone.fuoco@edu.itspiemonte.it"		],

		["nome"=>"ALESSANDRO", "cognome"=>"VIOTTI",	"email" => "alessandro.viotti@edu.itspiemonte.it"		],

		["nome"=>"ROSA", "cognome"=>"BUONO",	"email" => "rosa.buono@edu.itspiemonte.it"		],

		["nome"=>"STEFANO", "cognome"=>"ADAMO",	"email" => "stefano.adamo@edu.itspiemonte.it"		],

		["nome"=>"TONY", "cognome"=>"FAVA",	"email" => "tony.fava@edu.itspiemonte.it"		],

		["nome"=>"FRANCESCO", "cognome"=>"TALOMO",	"email" => "francesco.talomo@edu.itspiemonte.it"		],

		["nome"=>"LUIGI", "cognome"=>"BOTTASSO",	"email" => "luigi.bottasso@edu.itspiemonte.it"		],

		["nome"=>"MARCO", "cognome"=>"DE GENNARO",	"email" => "marco.degennaro@edu.itspiemonte.it"		],

		["nome"=>"EMANUELE", "cognome"=>"GALLINA",	"email" => "alessandro.gallina@edu.itspiemonte.it"		], 

		["nome"=>"MARCO", "cognome"=>"ANTONINO",	"email" => "marco.antonino@edu.itspiemonte.it"		], 

		["nome"=>"ANDREA", "cognome"=>"SCAVUZZO",	"email" => "andrea.scavuzzo@edu.itspiemonte.it"		], 

		["nome"=>"THOMAS", "cognome"=>"OWENS",	"email" => "thomas.owens@edu.itspiemonte.it"		], 

		["nome"=>"ALESSANDRO", "cognome"=>"FLERES",	"email" => "alessandro.fleres@edu.itspiemonte.it"		], 

		["nome"=>"DANILO", "cognome"=>"CAPPELLINO",	"email" => "danilo.cappellino@edu.itspiemonte.it"		], 

		["nome"=>"VINCENZO", "cognome"=>"DI DOMENICO",	"email" => "vincenzo.didomenico@edu.itspiemonte.it"		],

		["nome"=>"EDOARDO", "cognome"=>"ELIA",	"email" => "edoardo.elia@edu.itspiemonte.it"		], 

		["nome"=>"SIMONE", "cognome"=>"VOLPE",	"email" => "simone.volpe@edu.itspiemonte.it"		], 

		["nome"=>"MATTIA", "cognome"=>"VICENZI",	"email" => "mattia.vicenzi@edu.itspiemonte.it"		],

		["nome"=>"MARCO", "cognome"=>"PANZANARO",	"email" => "marco.panzanaro@edu.itspiemonte.it"		], 


				];	



//etichette menù principale 

$menu_orizzontale = [
		''	=> 'Home Page',
		'uno' =>'PhpInfo',
		'due' =>'Corso Php',
		'studenti' =>'Studenti',
		'giochi' =>'Giochi',
		'http://www.php.net' => 'Php.net',
		'http://github.com/maboglia/ITS2017' => 'github',

	];

//pagine corso php

	$pagine = array(
		'variabili' => '?pagina=due&argomento=variabili',
		'cicli' => '?pagina=due&argomento=cicliWhile',
		'array' => '?pagina=due&argomento=array',
		'array associativi' => '?pagina=due&argomento=array_associativi',
		'condizioni' => '?pagina=due&argomento=condizioni',

	 );				
/*siccome abbiamo incluso config all'itenro dell'index, la seguente funzione può essere usata in qualsiasi parte dell'index e nelle pagine a lui collegate*/
function creaHeader($parola='') // do un valore di default all'argomento
/*Se io metto uguale parola  a una riga vuota, dovrei dichiararne un valore*/
{/*Scope: quello che è visto qui dentro non è visbile da fuori*/
/*Return void*/
switch ($parola) {
	case 'ciao': //se la parola è ciao
		for ($i=1; $i < 7; $i++) { 
			echo "<h".$i.">$parola</h".$i.">";
		}
		break;
	case '':
		echo "non hai scritto nulla";
		break;
	
	default:
		echo "<h1>hai scritto: $parola</h1>";
		break;

            
            }
}
 
function calcolaValori($a, $b, $operazione="addizione"){
	//cavolavalori (12,6) così farà la somma
	//cavolavalori (12,6, 'sottrazione') così farà l'operazione chiamta
	$c = 0;

	switch ($operazione) {
		case 'addizione':
			$c = $a+$b;
			break;

		case 'sottrazione':
			$c = $a-$b;
			break;

		case 'moltiplicazione':
			$c = $a*$b;
			break;

		case 'divisione':
			$c = $a/$b;
			break;
		
		default:
			$c="Non hai inserito valori corretti";
			break;
	}

	
	return $c;

}


?>









 