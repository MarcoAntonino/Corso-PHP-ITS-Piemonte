<?php
include 'classesAndFunctions.php';
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
  $game1 = new game($t1,$t2,$team1Score,$team2Score);
  $game1->toString();

  echo "<br>ora si fa sul serio <br>";

  //$campionato = getCampionato();

  if (in_array("campionatoSalvato",$_SESSION)){

    $campionato = getCampionato();

  }

  $campionato = saveGame($campionato, $game1);

  setCampionato($campionato);
  //$campionato = getCampionato();

  //array_push($campionato, $game1);


  foreach ($campionato as $game ) {

    echo $game->toString();
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
