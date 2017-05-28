<?php
include 'classesAndFunctions.php'; //MOLTO IMPORTANTE: QUESTO è L'ORDINE
session_start();
$squadre = array("Atalanta", "Bologna", "Cagliari", "Chievo", "Crotone", "Empoli", "Fiorentina", "Genoa", "Inter", "Juventus", "Lazio", "Milan", "Napoli", "Palermo", "Pescara", "Roma", "Sampdoria", "Sassuolo","Torino", "Udinese");

$team1Name;
$team1Score;
$team2Name;
$team2Score;
$campionato= array();

$atalanta = new team("Atalanta");
$bologna = new team("Bologna");
$cagliari = new team("Cagliari");
$chievo = new team("Chievo");
$crotone = new team("Crotone");
$empoli = new team("Empoli");
$fiorentina = new team("Fiorentina");
$genoa = new team("Genoa");
$inter = new team("Inter");
$juventus = new team("Juventus");
$lazio = new team("Lazio");
$milan = new team("Milan");
$napoli = new team("Napoli");
$palermo = new team ("Palermo");
$pescara = new team ("Pescara");
$roma = new team ("Roma");
$sampdoria = new team ("Sampdoria");
$sassuolo = new team ("Sassuolo");
$torino = new team ("Torino");
$udinese = new team ("Udinese");

$_SESSION['table'] = array($atalanta, $bologna, $cagliari, $chievo, $crotone, $empoli, $fiorentina, $inter, $juventus, $lazio, $milan, $napoli, $palermo, $pescara, $roma, $sampdoria, $sassuolo, $torino, $udinese);


if (isset($_POST['team1Name']) && isset($_POST['team1Score']) && isset($_POST['team2Name']) && isset($_POST['team2Score'])){

  $team1Name=$_POST['team1Name'];
  $team1Score=$_POST['team1Score'];
  $team2Name=$_POST['team2Name'];
  $team2Score=$_POST['team2Score'];

  $t1 = new team($team1Name);
  $t2 = new team($team2Name);
  $t1->toString();
  echo "<br>";
  $t2->toString();
  echo "<br>";
  $testGame = new game($juventus,$torino,6,0);
  $game1 = new game($t1,$t2,$team1Score,$team2Score);
  $game1->toString();

  echo "<br>ora si fa sul serio <br>";

  if (!isset($_SESSION['savedChampionship'])){

    $_SESSION['savedChampionship'] = array($game1);

  } else if (gameExists($_SESSION['savedChampionship'], $game1)){

    foreach ($_SESSION['savedChampionship'] as $gameToCheck) {

        if($gameToCheck->getHomeTeam() == $game1->getHomeTeam() && $gameToCheck->getGuestTeam() == $game1->getGuestTeam())
        {
          $gameToCheck->setHomeTeamScore($game1->getHomeTeamScore());
          $gameToCheck->setGuestTeamScore($game1->getGuestTeamScore());
        }

        }
  }else{
          array_push($_SESSION['savedChampionship'], $game1);
        }


  foreach ($_SESSION['savedChampionship'] as $game ) {

    echo $game->toString()."<br>";
  }


//*******************************

foreach ($_SESSION['savedChampionship'] as $game) {


  if($game->getHomeTeamScore() > $game->getGuestTeamScore())
  {
    foreach ($_SESSION['table'] as $team) {
      if($team->getName() == $game->getHomeTeam()->getName())
      {
        $team->setScore($team->getScore()+3);
      }
    }
    echo "VINCE".$game->getHomeTeam()->getName()."<br>";

  } elseif ($game->getHomeTeamScore() < $game->getGuestTeamScore()) {

    foreach ($_SESSION['table'] as $team) {
      if($team->getName() == $game->getGuestTeam()->getName())
      {
        $team->setScore($team->getScore()+3);
      }
    }
    echo "VINCE OSPITE<br>";

  } else {

    foreach ($_SESSION['table'] as $team) {
      if($team->getName() == $game->getHomeTeam()->getName())
      {
        $team->setScore($team->getScore()+1);
      }
    }

    foreach ($_SESSION['table'] as $team) {
      if($team->getName() == $game->getGuestTeam()->getName())
      {
        $team->setScore($team->getScore()+1);
      }
    }
    echo "PAREGGIO<br>";
  }





}


  echo "<br>CLASSIFICA:<br>";



  foreach ($_SESSION['table'] as $team ) {

    echo $team->toString()."<br>";
  }


  echo "<br>CLASSIFICA ordinata:<br>";

  function sortTable($team1, $team2)
  {
    if($team1->getScore() == $team2->getScore())
    {
      return 0;
    }

    return ($team1->getScore() > $team2->getScore()) ? -1 : 1;;
  }

  usort($_SESSION['table'], "sortTable");



  foreach ($_SESSION['table'] as $team ) {

    echo $team->toString()."<br>";
  }


  // $_SESSION['saluto']="ciao";
  // echo "<br>".$_SESSION['saluto'];
  // $_SESSION['saluto']="arrivederci";
  // echo "<br>".$_SESSION['saluto']."<br>";

  //MODO PER STAMPARE LA SESSIONE
  // foreach ($_SESSION as $key => $value) {
  //   echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
  // }



}
?>
