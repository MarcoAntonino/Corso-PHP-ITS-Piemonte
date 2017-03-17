<!DOCTYPE html>
<!--Crea una pagina web contentente un form per selezionare una figura geometrica primitiva (cerchio, rettangolo, triangolo), passare gli attributi principali (raggio, base, altezza, ...)

ricevi i valori inviati via post e calcola area e perimetro utilizzando le funzioni custom-->
<html>
<head>
	<title>Form geometrico1</title>
</head>
<body>



<form action="form_geomessing.php" method="post">
	<fieldset>
		<legend>Inserisci i valori</legend>

		
		<input type="number" name="base" placeholder="base">
		<input type="number" name="altezza" placeholder="altezza">
		<input type="number" name="raggio" placeholder="raggio">
		<input type="submit" name="calcola" value="Calcola">
	</fieldset>
	
</form>



</body>
</html>
