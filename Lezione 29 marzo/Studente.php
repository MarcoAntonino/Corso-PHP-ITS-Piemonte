<?php


/**
 *
 */
class Studente
{
  public $nome;
  public $cognome;
  private $data_nascita;
  public $email;
  private $skill;
  private $noskill;
  private $foto;
  private $hobby;
  private $matricola;

/*
La reflection è una proprietà degli elementi di raccontare info su loro stessi

*/

  public function __construct($nome, $cognome, $email)
  {
    $this->nome=$nome;
    $this->cognome=$cognome;
    $this->email=$email;
    $this->skill=array('PHP', 'Java', 'C#');

  }

  public function __toString()
  {
    return $this->nome." ".$this->cognome;
  }



}















 ?>
