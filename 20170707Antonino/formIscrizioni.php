<?php
include 'includes\config.php';
include 'includes\database.php';
include 'includes\materia.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inserisci materia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <section>
        <form action="showIscrizioni.php" method="post">
          <div class="checkbox">
            <?php
            try {
              $DB = new Database();
              $DB->connection();

            } catch (Exception $e) {
              echo $e->getMessage();

            }

            $query = "SELECT id_evento, data FROM lezioni";
            $results = $DB->getLink()->prepare($query);
            $results->execute();
            $data = $results->fetchAll();
            ?>
            <select class="form-control" name="idEvento">
              <?php
                foreach ($data as $row) {
                   ?>
                   <option value="<?= $row['id_evento']?>"><?= $row['data']?></option>
                   <?php
                }
                ?>
            </select>
          </div>

          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
          </div>
          <div class="form-group">
            <label for="cognome">Cognome</label>
            <input type="text" class="form-control" id="cognome" name="cognome">
          </div>
          <button type="submit" class="btn btn-default" name="submitIscrizione">Submit</button>
        </form>

      </section>

    </div>


  </body>
</html>
