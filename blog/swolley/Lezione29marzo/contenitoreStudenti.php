<?php
//switch per la modalità debug
//error_reporting(0);
error_reporting(E_ALL);
include "studente.php";
include "connessione.php";



//array info studenti
/*$studenti = [							
		["nome"=>"RICCARDO", "cognome"=>"GABOSSI", "email" => "riccardo.gabossi@edu.itspiemonte.it"],
		["nome"=>"VLADIMIR", "cognome"=>"VIBIO", "email" => "vladimir.vibio@edu.itspiemonte.it"],
		["nome"=>"GIORGIO", "cognome"=>"MASERAZZO",	"email" => "giorgio.maserazzo@edu.itspiemonte.it"],
		["nome"=>"STEFANO", "cognome"=>"SCICOLONE",	"email" => "stefano.scicolone@edu.itspiemonte.it"],
		["nome"=>"DAVIDE", "cognome"=>"COLANGELO", "email" => "davide.colangelo@edu.itspiemonte.it"],
		["nome"=>"FABRIZIO", "cognome"=>"DE CICCO",	"email" => "fabrizio.decicco@edu.itspiemonte.it"],
		["nome"=>"SIMONE", "cognome"=>"RORATO",	"email" => "simone.rorato@edu.itspiemonte.it"],
		["nome"=>"LORENZO", "cognome"=>"SCARPA", "email" => "lorenzo.scarpa@edu.itspiemonte.it"],
		["nome"=>"SIMONE", "cognome"=>"FUOCO", "email" => "simone.fuoco@edu.itspiemonte.it"],
		["nome"=>"ALESSANDRO", "cognome"=>"VIOTTI",	"email" => "alessandro.viotti@edu.itspiemonte.it"],
		["nome"=>"ROSA", "cognome"=>"BUONO", "email" => "rosa.buono@edu.itspiemonte.it"],
		["nome"=>"STEFANO", "cognome"=>"ADAMO",	"email" => "stefano.adamo@edu.itspiemonte.it"],
		["nome"=>"TONY", "cognome"=>"FAVA",	"email" => "tony.fava@edu.itspiemonte.it"],
		["nome"=>"FRANCESCO", "cognome"=>"TALOMO", "email" => "francesco.talomo@edu.itspiemonte.it"],
		["nome"=>"LUIGI", "cognome"=>"BOTTASSO", "email" => "luigi.bottasso@edu.itspiemonte.it"],
		["nome"=>"MARCO", "cognome"=>"DE GENNARO", "email" => "marco.degennaro@edu.itspiemonte.it"],
		["nome"=>"EMANUELE", "cognome"=>"GALLINA", "email" => "alessandro.gallina@edu.itspiemonte.it"], 
		["nome"=>"MARCO", "cognome"=>"ANTONINO", "email" => "marco.antonino@edu.itspiemonte.it"], 
		["nome"=>"ANDREA", "cognome"=>"SCAVUZZO", "email" => "andrea.scavuzzo@edu.itspiemonte.it"], 
		["nome"=>"THOMAS", "cognome"=>"OWENS", "email" => "thomas.owens@edu.itspiemonte.it"], 
		["nome"=>"ALESSANDRO", "cognome"=>"FLERES",	"email" => "alessandro.fleres@edu.itspiemonte.it"], 
		["nome"=>"DANILO", "cognome"=>"CAPPELLINO",	"email" => "danilo.cappellino@edu.itspiemonte.it"], 
		["nome"=>"VINCENZO", "cognome"=>"DI DOMENICO", "email" => "vincenzo.didomenico@edu.itspiemonte.it"],
		["nome"=>"EDOARDO", "cognome"=>"ELIA", "email" => "edoardo.elia@edu.itspiemonte.it"], 
		["nome"=>"SIMONE", "cognome"=>"VOLPE", "email" => "simone.volpe@edu.itspiemonte.it"], 
		["nome"=>"MATTIA", "cognome"=>"VICENZI", "email" => "mattia.vicenzi@edu.itspiemonte.it"],
		["nome"=>"MARCO", "cognome"=>"PANZANARO", "email" => "marco.panzanaro@edu.itspiemonte.it"], 
];*/

$studenti=array();

//preparo query
$sql="SELECT * FROM studenti";

//eseguo query e memorizzo risultati($result)
$result= mysqli_query($mysqliConnection, $sql);

//prendo riga per riga ($row)
while($row=mysqli_fetch_object($result))
{
	$studenti[] = array("nome"=>$row->nome, "cognome"=>$row->cognome, "email"=>$row->email);
}



$elencoStudenti=array();

foreach($studenti as $studente)
{
	    $elencoStudenti[] = new Studente($studente['nome'], $studente['cognome'], $studente['email']);
}

?>