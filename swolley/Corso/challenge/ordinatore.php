<h2>Ordinatore</h2>
	<form action='index.php?pagina=sfide&argomento=ordinatore' method='post'>
		<fieldset>
			<legend>Nuovi valori: </legend>
			<label for="valore1">Valore 1</label>
			<input type='number' name='a' placeholder='Inserisci primo numero' required /><br/>
			<label for="valore2">Valore 2</label>
			<input type='number' name='b' placeholder='Inserisci secondo numero' required /><br/>
			<label for="valore3">Valore 3</label>
			<input type='number' name='c' placeholder='Inserisci terzo numero' required /><br/>
			<button type="submit">Ordina</button>
		</fieldset>
	</form>	
	<fieldset>
		<legend>Numeri ordinati:</legend>
		<?php
		if(isset($_POST) && $_POST)
		{
			foreach($_POST as $key => $value)
				$vett[] = $_POST[$key];
			
			$lung=count($vett);
			for($i=0; $i<$lung-1; $i++)
			{
				for($j=$i+1; $j<$lung; $j++)
				{
					if($vett[$j]<$vett[$i])
					{
						$temp=$vett[$i];
						$vett[$i]=$vett[$j];
						$vett[$j]=$temp;
					}
				}
			}
			foreach($vett as $value)
			{
				echo $value." ";
			}
		}
		else
		{
			echo "Prima inserisci i numeri da ordinare";
		}
		?>
	</fieldset>