<?php
include "api.php";?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inserisci la temperatura</title>
  </head>
  <body>

    <form action="api.php" method="get">
      <fieldset>
        <legend>Inserisci la temperatura massima e minima raccolte</legend>
        <label for="cityName">Città</label>
        <select name="cityName">
          <?php
            foreach ($cities as $city) {
               ?>
               <option value="<?= $city->getName()?>"><?= $city->getName()?></option>
               <?php
            }
            ?>
        </select>
        <label for="cityMinT">Minima:</label>
        <input type="number" name="cityMinT" value="0">
        <label for="cityMaxT">Massima:</label>
        <input type="number" name="cityMaxT" value="0">
        <input type="submit" name="submit" value="Invia">
      </fieldset>

    </form>

  </body>
</html>
