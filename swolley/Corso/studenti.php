<?php 
echo "<br>";
//ordino vettore
for ($i=0;$i<count($studenti)-1;$i++)
{
	for ($j=$i+1;$j<count($studenti);$j++)
  	{
 		$ordina = strcmp($studenti[$i]['cognome'], $studenti[$j]['cognome']);
    	if ($ordina > 0)
    	{
      		$ordinato = $studenti[$i];
		    $studenti[$i] = $studenti[$j];
		    $studenti[$j] = $ordinato;
    	}
  	}
}

//stampo vettore
$i=0;
foreach($studenti as $valore)
	{
		/*echo "<pre>";
		print_r($valore);
		echo "</pre>";*/

		// creo un form per ogni voce così posso spedire con post
		
		echo "<form method='post' name='".$i."' id='".$i."'>";
			echo "<input type='hidden' name='nome' id='nome' value='".$valore['nome']."'>
				  <input type='hidden' name='cognome' id='cognome' value='".$valore['cognome']."'>
				  <input type='hidden' name='email' id='email' value='".$valore['email']."'>";
			echo "<a href='javascript:{}' onclick=document.getElementById('".$i."').submit();>"
				.ucfirst(strtolower($valore['cognome']))
				." ".
				ucfirst(strtolower($valore['nome']))
			."</a>";
		echo "</form>";
		$i++;

		//$valore["email"]."<br/>";
	}
//echo "</ul>";

?>