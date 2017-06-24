<?php include 'header.php' ?>

<?php 

	/*	loop, cicli, strutture del linguaggio
		while (espressione)
			statement;
	*/
		$count = 0;
		$count1 = 0;

		while ( $count<= 10) {
			echo $count."<br>";
			$count+=2; //la forma estesa è count=count+2;
		}
		$count=0;

		echo "ALTRO ESERCIZIO";
		echo "<table>";

		while ($count<= 10) {
			if ($count % 2 == 0)
			echo "<tr style='background-color:red'><td>".$count."</td><td>".($count*2)."</td></tr>";
			else
				echo "<tr style='background-color:blue; color: white'><td>".$count."</td><td>".($count*2)."</td></tr>";
			$count+=1; //la forma estesa è count=count+2;
		}

		echo "</table>";





 ?>
