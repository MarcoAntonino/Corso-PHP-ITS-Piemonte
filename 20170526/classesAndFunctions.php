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
      echo $this->name." ".$this->score;
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

    echo $this->homeTeam->getName()."-".$this->guestTeam->getName().": ".$this->homeTeamScore."-".$this->guestTeamScore;

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



function setCampionato($campionato){

  $_SESSION['campionatoSalvato'] = $campionato;

}

function getCampionato(){

  return $_SESSION['campionatoSalvato'];
}

 ?>
