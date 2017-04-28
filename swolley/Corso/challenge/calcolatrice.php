<h2>Calcolatrice</h2>
	<form action='index.php?pagina=sfide&argomento=calcolatrice' method='post'>
		<fieldset>
			<legend>Nuova operazione: </legend>
			<label for="valore1">Valore</label>
			<input type='text' name='a' placeholder='Inserisci primo numero' required><br/>
			<label for="valore2">Valore</label>
			<input type='text' name='b' placeholder='Inserisci secondo numero' required><br/>
			<label for="valore3">Operazione</label><br/>
			<input type="radio" name="operazione" value="addizione" checked="checked"> Addizione (+)<br/>
			<input type="radio" name="operazione" value="sottrazione"> Sottrazione (-)<br/>
			<input type="radio" name="operazione" value="moltiplicazione"> Moltiplicazione (*)<br/>
			<input type="radio" name="operazione" value="divisione"> Divisione (/)<br/>
			<button type="submit">Calcola</button>
		</fieldset>
	</form>	
	<fieldset>
		<legend>Risultato:</legend>
		<?php
		if(isset($_POST['operazione']))
		{
			$a=($_POST['a'])?($_POST['a']):0;
			$b=($_POST['b'])?($_POST['b']):0;
			$operazione=$_POST['operazione'];
			$calcolo=calcolaValori($a, $b, $operazione);
			if(is_numeric($calcolo))
			{
				echo $a;
				switch($operazione)
				{
					case 'addizione':
						echo " + ";
						break;
					case 'sottrazione':
						echo " - ";
						break;
					case 'moltiplicazione':
						echo " * ";
						break;
					case 'divisione':
						echo " / ";
						break;
				}
				echo $b." = ";
				echo $calcolo;
			}
			else echo "operazione impossibile";
		}
		?>
	</fieldset>