<?php 
echo "<h1>Cicli while</h1>";
	/* loop, cicli, strutture del linguaggio
	while (espressione)
		statement;

	*/
$count=0;

while($count<=10)
{
	if($count%2==0)
		echo $count;
	//$count++;
	$count +=1;	//stessa cosa di $count++
}

echo "<br/><br/>";

$count=0;
echo "<table>";
while($count<=10)
{
	if($count%2==0)
		echo "<tr style='background-color:red'><td>".$count."</td><td>".($count*2)."</td></tr>";
	else
		echo "<tr style='background-color:black; color:white'><td>".$count."</td><td>".($count*2)."</td></tr>";
	$count +=1;	//stessa cosa di $count++
}
echo "</table>";
 ?>