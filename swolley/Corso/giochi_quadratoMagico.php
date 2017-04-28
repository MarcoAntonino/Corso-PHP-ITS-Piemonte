<h2>Quadrato magico</h2>
<div class='quadratomagico'>
<?php
/*$choice=["si", "no", "ci penso"];
shuffle($choice);

echo "<h1>".$choice[0]."</h1>";*/

$numeri= [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

/*while(list($chiave, $valore) = each($numeri))
{
	echo "<h1>";
	echo "\$numeri[$chiave] $chiave <br/>";
	echo "</h1>";
	echo "<h2>";
	var_dump($valore);
	echo "</h2>";
}*/
for ($i=0; $i < 3; $i++) 
{
	for ($j=0; $j < 3; $j++) 
	{ 
		echo "<table>";
		shuffle($numeri);
		foreach($numeri as $value)
		{
			echo "<tr>";
			shuffle($value);
			foreach($value as $subvalue)
			{
				echo "<td>".$subvalue."</td>";
			}
			echo "<tr>";
		}
		echo "</table>";
	}
	echo "<div></div>";
}
?>
</div>

