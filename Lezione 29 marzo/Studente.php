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
    $this->skill=array('PHP', 'Java', 'C#');//solo qui viene dato il tipo alla variabile

  }
  /*
  La freccia è l'operatore per accesso alle proprietà
  $this mi permette l'accesso alla variabile di qeusta istanza
  */

  /*
  Per importarmi la classe da un'altr parte, devo importarmi il file che
  la contiene. Meglio a qeusto punto creare un file che contenta solo essa
  
  */

  public function __toString()
  {
    return $this->nome." ".$this->cognome;
  }



}















 ?>
