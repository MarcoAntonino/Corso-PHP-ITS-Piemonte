<?php

class studente
{

  private $Id;
  private $Nome;
  private $Cognome;
  private $matricola;
  private $email;

  function getId() {
      return $this->Id;
  }

  function getNome() {
      return $this->Nome;
  }

  function getCognome() {
      return $this->Cognome;
  }

  function getMatricola() {
      return $this->matricola;
  }

  function getEmail() {
      return $this->email;
  }

  function setId($Id) {
      $this->Id = $Id;
  }

  function setNome($Nome) {
      $this->Nome = $Nome;
  }

  function setCognome($Cognome) {
      $this->Cognome = $Cognome;
  }

  function setMatricola($matricola) {
      $this->matricola = $matricola;
  }

  function setEmail($email) {
      $this->email = $email;
  }


  public function firma()
  {
    return strtoupper($this->Nome." ".$this->Cognome);
  }

  public function __toString()
  {
    return $this->firma();
  }

}

 ?>
