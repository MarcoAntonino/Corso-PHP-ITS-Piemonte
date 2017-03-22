<?php 

/**
* 
*/
class Automobile
{
	// stato interno, proprietà della classe
	/*
	MODIFICATORI DI ACCESSO:
	- package:
	*/
	private $marca="BMW";
	private $modello="X5";
	private $cilindrata="3000"; // posso inizializzare come string e poi al massimo la cambio in int
	private $colore="Nera";
	const NUM_RUOTE= 4;// è una costante

	public function __construct($marca, $modello, $cilindrata, $colore) // parametri formali
	{
		//echo "Ho costruito un oggetto ";
		public function setMarca $this->marca=$marca;
		public function setModello $this->modello=$modello;
		public function setCilindrata $this->cilindrata=$cilindrata;
		public function setColore $this->colore=$colore;
	}

	//se ci sono delle graffe, quello che c'è all'interno è inacessibile dall'esterno e bisogna per forza mettere i modificatori di accesso
	//Conviene sempre istanziare le variabili, magari mettendo anche un ""

	public function stampaOggetto()
	{
		return "marca ".$this->marca."<br/>".
			   "modello ".$this->modello."<br/>".
			   "cilindrata ".$this->cilindrata."<br/>".
			   "colore ".$this->colore."<br/>".
			   "numRuote ".Automobile::NUM_RUOTE."<br/>";
	}

	//:: vuol dire acceddo a una proprietà statica della classe ovviamente perchè una costante è sempre statica

	/*
	Invece di fare una sbrodolata di echo, mi faccio ritornare una stringa e poi stampo la stringa.
	*/

	public function setMarca($value){$this->marca=$value;}
	public function setModello($value){$this->modello=$value;}
	public function setCilindrata($value){$this->cilindrata=$value;}
	public function setColore($value){$this->colore=$value;}

}

	$marca="BMW";
	$modello="X5";
	$cilindrata=3000;
	$colore="Nera";

$miaAuto = new Automobile($marca, $modello, $cilindrata, $colore); //() ricorso a costruttore implicito
$miaAuto2 = new Automobile("Ferrari", "GTOSA", 6000, "Leopardata");


/*
echo mb_strtoupper($miaAuto->stampaOggetto()); 
echo mb_strtoupper($miaAuto2->stampaOggetto()); 
// mb_strtoupper: stampa tutto in maiuscolo

$arrayDiOggetti = array($miaAuto, $miaAuto2);

echo count($arrayDiOggetti);
echo "<pre>";
print_r($arrayDiOggetti);
echo "</pre>";

for ($i=0; $i < count($arrayDiOggetti) ; $i++) { 
	echo $arrayDiOggetti[$i]->stampaOggetto();
}
*/

?>