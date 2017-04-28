<?php 

class Automobile
{
	//inizializzazione a valori di default
	private $marca="mercedes";
	private $modello="clk";
	private $cilindrata="2200";
	private $colore="grigio";
	const NUM_RUOTE=4;

	public function __construct($marca, $modello, $cilindrata, $colore)
	{
		//echo "ho costruito un oggetto";
		$this->marca=$marca;
		$this->modello=$modello;
		$this->cilindrata=$cilindrata;
		$this->colore=$colore;
	}

	public function stampaOggetto()
	{
		//sempre meglio ritornare dei valori e lasciare le stampe alle chiamate, perchè magari voglio gestirmela convertendola, o formattandola a piacimento
		return "marca ".$this->marca."<br/>"
		."modello ".$this->modello."<br/>"
		."cilindrata ".$this->cilindrata."<br/>"
		."colore ".$this->colore."<br/>"
		."numRuote ".Automobile::NUM_RUOTE."<br/>";	// ':' per acceder alle proprietà statiche di una classe
	}

	//getters e setters
	public function setMarca($value) {$this->marca=$value;}
	public function setModello($value) {$this->modello=$value;}
	public function setCilindrata($value) {$this->cilindrata=$value;}
	public function setColore($value) {$this->colore=$value;}

}

?>
