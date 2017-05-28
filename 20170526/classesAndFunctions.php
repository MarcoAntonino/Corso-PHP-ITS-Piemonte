<?php

class Team{

    private $name;
    private $score;

    function __construct($name, $score=0) {
        $this->name = $name;
        $this->score = $score;
    }

    function getName() {
        return $this->name;
    }

    function getScore() {
        return $this->score;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setScore($score) {
        $this->score = $score;
    }

    public function toString()
    {
      echo $this->getName()." ".$this->getScore();
    }


}

class Game
{
  private $homeTeam;
  private $guestTeam;
  private $homeTeamScore;
  private $guestTeamScore;

  public function __construct($homeTeam="", $guestTeam="",$homeTeamScore=0,$guestTeamScore=0)
  {
    $this->homeTeam = $homeTeam;
    $this->guestTeam = $guestTeam;
    $this->homeTeamScore = $homeTeamScore;
    $this->guestTeamScore = $guestTeamScore;
  }

  public function getHomeTeam() {
      return $this->homeTeam;
  }

  public function getGuestTeam() {
      return $this->guestTeam;
  }

  public function getHomeTeamScore() {
      return $this->homeTeamScore;
  }

  public function getGuestTeamScore() {
      return $this->guestTeamScore;
  }

  public function setHomeTeam($homeTeam) {
      $this->homeTeam = $homeTeam;
  }

  public function setGuestTeam($guestTeam) {
      $this->guestTeam = $guestTeam;
  }

  public function setHomeTeamScore($homeTeamScore) {
      $this->homeTeamScore = $homeTeamScore;
  }

  public function setGuestTeamScore($guestTeamScore) {
      $this->guestTeamScore = $guestTeamScore;
  }

  public function toString() {

    echo $this->homeTeam->getName()."-".$this->guestTeam->getName().": ".$this->getHomeTeamScore()."-".$this->getGuestTeamScore();

  }

}

function saveGame($array,$game)
{
  if (!in_array($game, $array)){

    array_push($array,$game);
  }
  else {

    foreach ($array as $gameToCheck) {

        if($gameToCheck->getHomeTeam() == $game->getHomeTeam() && $gameToCheck->getGuestTeam() == $game->getGuestTeam())
        {
          $gameToCheck = $game;
        }

    }

  }

  return $array;
}

function gameExists($array, $game)
{
  $isPresent = false;

  foreach ($_SESSION['savedChampionship'] as $gameToCheck) {

      if($gameToCheck->getHomeTeam() == $game->getHomeTeam() && $gameToCheck->getGuestTeam() == $game->getGuestTeam())
      {
        $isPresent = true;
      }

  }

  return $isPresent;
}

function updateTable($championship, $table)
{

  /*
  devo andare a prendere l'array savedChampionship.
  Per ogni partita dell'array campionato.
    Se il punteggio del team di casa è maggiore di quello ospite, allora cerca la squdra con lo stesso nome e aggiungi 3 punti.
    Se il punteggio del team ospite è maggiore allora vai a cercare il team con lo stesso nome e aggiungigli 3 pti.
    Altrimenti vai a cercare il nome del team di casa e aggiungilgi 1 punti
    e poi vai a cercare il punteggio del team ospite e dagli 1 punto
  Chiaro?
  */

  foreach ($championship as $game) {

    if($game->getHomeTeamScore() > $game->getGuestTeamScore())
    {
      foreach ($table as $team) {

        if($team->getName() == $game->getHomeTeam())
        {
          $team->setScore($team->getScore()+3);
        }

      }
    } else if ($game->getHomeTeamScore() < $game->getGuestTeamScore())
    {
      foreach ($table as $team) {

        if($team->getName() == $game->getGuestTeam())
        {
          $team->setScore($team->getScore()+3);
        }

      }

    } else {

      foreach ($table as $team) {

        if($team->getName() == $game->getHomeTeam())
        {
          $team->setScore($team->getScore()+1);
        }

      }

      foreach ($table as $team) {

        if($team->getName() == $game->getGuestTeam())
        {
          $team->setScore($team->getScore()+1);
        }

      }


    }
  }





}

function setCampionato($campionato){

  $_SESSION['savedChampionship'] = $campionato;

}

function getCampionato(){

  return $_SESSION['savedChampionship'];
}

 ?>
