<?php
$squadre = array("Atalanta", "Bologna", "Cagliari", "Chievo", "Crotone", "Empoli", "Fiorentina", "Genoa", "Inter", "Juventus", "Lazio", "Milan", "Napoli", "Palermo", "Pescara", "Roma", "Sampdoria", "Sassuolo","Torino", "Udinese");

$t1Name=$_POST['t1Name'];
$t1Score=$_POST['t1Score'];
$t2Name=$_POST['t2Name'];
$t2Score=$_POST['t2Score'];

$partita = array( $t1Name => $t1Score ,
                  $t2Name => $t2Score);

echo "$partita";

$s = '12345';
$s[$s[1]] = '2';
echo $s;

?>
