<?php include "api.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inserimento dati</title>
</head>
<body>
	<form method="post" action="api.php">
	<label>Squadra 1</label>
		<select name="t1Name">
			<?php
			foreach($squadre as $value)
			{
			?>
				<option value="<?= $value ?>"><?= $value ?></option>
			<?php
			}
			?>
		</select>
		<label>Punteggio</label>
		<input type="number" name="t1Score">

		<label>Squadra 2</label>
		<select  name="t2Name">
			<?php
			foreach($squadre as $value)
			{
			?>
				<option value="<?= $value ?>"><?= $value ?></option>
			<?php
			}
			?>
		</select>
		<label>Punteggio</label>
		<input type="number" name="t1Score">
		<input type="submit" name="submit" value="Salva partita">
	</form>
</body>
</html>
