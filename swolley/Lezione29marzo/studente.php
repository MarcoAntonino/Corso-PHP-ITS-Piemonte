<?php

class Studente
{
	public $nome;
	public $cognome;
	private $dataNascita;
	public $email;
	private $skill;
	private $noskill;
	private $foto;
	private $hobby;
	private $matricola;

	public function __construct($nome, $cognome, $email)
	{
		$this->nome=$nome;
		$this->cognome=$cognome;
		$this->email=$email;
		$this->skill=array('PHP','Java','C#');
	}

	/*public function __construct($nome, $cognome, $dataNascita, $email, $skill, $foto, $hobby, $matricola)
	{
		$this->nome=$nome;
		$this->cognome=$cognome;
		$this->dataNascita=$dataNascita;
		$this->email=$email;
		$this->skill=array('PHP','Java','C#');
		$this->foto=$foto;
		$this->hobby=$hobby;
		$this->matricola=$matricola;
	}*/

	public function studia()
	{

	}

	public function __toString()
	{
		return "Nome: ".$this->nome
				."<br/>Cognome: ".$this->cognome
				."<br/>Data Nascita: ".$this->dataNascita
				."<br/>Email: ".$this->email
				."<br/>Skill: ".$this->skill
				."<br/>NoSkill: ".$this->noSkill
				."<br/>Foto: ".$this->foto
				."<br/>Hobby: ".$this->hobby
				."<br/>Matricola: ".$this->matricola;
	}

}

?>