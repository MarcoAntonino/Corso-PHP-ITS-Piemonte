<h2>menu</h2>
<?php 
	//metodo per verificare una variabile e ritorna o true o false
	/*Per manipolare il valore di get devi mettere */
	if (isset($_GET['pagina'])) {
		$miaPagina = $_GET['pagina'];
		/*Ci siamo creati una variabile di comeodo per memorizzare quello che arriva in input. In questo modo dovrebbe essere più comodo*/
	}
	else 
		$miaPagina = "home";

	switch ($miaPagina) {
		case 'studenti':
			//echo "Qui metto l'elenco studenti";
			
			echo "<ul>";

			foreach ($studenti as $studente ) {

				echo "<li>"
					."<a href='#' title=''>" //il significato del cancelletto è un'ancora interna
					.$studente['nome']
					." "
					.$studente['cognome']	
					."</a>"
					."</li>";
			}
			echo "</ul>";
			break;

		case 'due':
			echo "<ul>";


			foreach ($pagine as $key => $value) {
				echo "<li><a href=\"$value\">$key</a></li>";
			}

			echo "</ul>";
			
			break;
		
		default:
			echo 'Valore di default per la variabile $miaPagina';
			echo "<br>";
			echo "Valore di default per la variabile $miaPagina";
			break;
	}







 ?>