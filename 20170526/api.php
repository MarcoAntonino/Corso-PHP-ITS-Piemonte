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


if (isset($_POST['team1Name']) && isset($_POST['team1Score']) && isset($_POST['team2Name']) && isset($_POST['team2Score'])){

  $team1Name=$_POST['team1Name'];
  $team1Score=$_POST['team1Score'];
  $team2Name=$_POST['team2Name'];
  $team2Score=$_POST['team2Score'];

  //echo $team1Name."-".$team2Name.": ".$team1Score."-".$team2Score;

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

  //$campionato = getCampionato();

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




  // else{
  //
  //   array_push($_SESSION['savedChampionship'], $game1);
  //
  // }



  //}

  //$campionato = saveGame($campionato, $game1);

  //setCampionato($campionato);
  //$campionato = getCampionato();

  //array_push($campionato, $game1);



  foreach ($_SESSION['savedChampionship'] as $game ) {

    echo $game->toString()."<br>";
  }

  echo "<br> proviamo con il var dump<br>";

  var_dump($_SESSION);
  echo "<br>";
  echo "<br>";

  var_dump($_SESSION['savedChampionship']);

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
