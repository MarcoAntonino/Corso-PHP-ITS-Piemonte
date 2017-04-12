<!DOCTYPE html>
<!--Crea una pagina web contentente un form per selezionare una figura geometrica primitiva (cerchio, rettangolo, triangolo), passare gli attributi principali (raggio, base, altezza, ...)
ricevi i valori inviati via post e calcola area e perimetro utilizzando le funzioni custom-->
<html>
<head>
	<title>Form geometrico</title>
</head>
<body>

<form action="" method="post">
	<fieldset>
		<legend>Scegli la tua figura geometrica</legend>
		
		<input type="radio" name="figura" value="triangolo">Triangolo
		<select name="tipo">
			<option value="equilatero" selected>equilatero</option>
			<option value="isoscele">isoscele</option>
			<option value="scaleno">scaleno</option>
		</select><br>
		<input type="number" name="baseTri" placeholder="base">
		<input type="number" name="altezzaTri" placeholder="altezza">
		<input type="number" name="lato2" placeholder="lato2">
		<input type="number" name="lato3" placeholder="lato3"><br>

		<input type="radio" name="figura" value="rettangolo">Rettangolo<br>
		<input type="number" name="base" placeholder="base">
		<input type="number" name="altezzaRet" placeholder="altezza"><br>
		
		<input type="radio" name="figura" value="cerchio">Cerchio<br>
		<input type="number" name="raggio" placeholder="raggio"><br><br>
		
		<input type="submit" name="calcola" value="Calcola">
		
	</fieldset>
</form>

php
</body>
</html>