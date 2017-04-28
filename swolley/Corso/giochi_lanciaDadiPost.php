<?php 
echo "<h2>gioco dadi</h2>";

if(isset($_POST['numgiocate']))
{
	$numgiocate = $_POST['numgiocate'];
	$numsuccessi = $_POST['successi']; 
}
else 
{
	$numgiocate=0;
	$numsuccessi=0;
}

$dado1=rand(1,6);
$dado2=rand(1,6);
			
$numgiocate++;		//giocata avvenuta
//$numsuccessi=count($successi);
echo "<img src='img/dadi/".$dado1.".png'/> <img src='img/dadi/".$dado2.".png'/></br>";
echo "Numero giocate=".$numgiocate."<br/>Numero successi=".$numsuccessi."<br/>Percentuale vincite=".round($numsuccessi/$numgiocate*100,2)."%<br/>";
			
if($dado1==$dado2)
{
	echo "<h1>Hai vinto</h1>";
	//$successi[]=$dado1;		//aggiunge al fondo
	$numsuccessi++;
}
else echo "<h1>&nbsp;</h1>";

echo "<form action='?pagina=giochi' method='post'>
		  <input type='hidden' name='numgiocate' value='".$numgiocate."'>
		  <input type='hidden' name='successi' value='".$numsuccessi."'>
		  <button type='submit'>Fai una nuova giocata</button>
	  </form>";
?>