<?php session_start();
include "api.php";?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inserisci il risultato</title>
	</head>
	<body>

		<form action="api.php" method="post">
			<fieldset>
				<legend>Inserisci il risultato della partita</legend>
				<label for="team1Name">Squadra 1</label>
				<select  name="team1Name">
				<?php
					foreach ($squadre as $value) {
						?>
						<option value="<?= $value ?>"><?= $value ?></option>
						<?php
					}
					?>
			</select>
			<label for="team1Score">Gol segnati</label>
			<input type="number" name="team1Score" value="0">
			<br>
			<label for="team2Name">Squadra 2</label>
			<select  name="team2Name">
			<?php
				foreach ($squadre as $value) {
					?>
					<option value="<?= $value ?>"><?= $value ?></option>
					<?php
				}
				?>
		</select>
		<label for="team2Score">Gol segnati</label>
		<input type="number" name="team2Score" value="0">
		<br>
		<input type="submit" name="submit" value="Carica partita">

			</fieldset>

		</form>

	</body>
</html>
