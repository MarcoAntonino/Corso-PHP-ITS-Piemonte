<?php
//include 'includes\config.php';
//include 'includes\database.php';
//include 'includes\materia.php';
include 'showMaterie.php';
?>

<?php
  if (isset($_POST['edit'])) {

    try {
      $DB = new Database();
      $DB->connection();
      if($DB){
        echo "sei connesso";
        echo "<br>";
      }
      $idMateria = $_POST['idToEdit'];
      $materia = $_POST['materiaToEdit'];
      $query = "SELECT * FROM materie WHERE id= $idMateria";
      $results = $DB->getLink()->prepare($query);
      $results->bindParam(":id", $idMateria, PDO::PARAM_STR);
      $results->execute();
      $materiaToEdit = $results->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      echo $e->getMessage();

    }

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
           <form action="showMaterie.php" method="post">
             <input type="hidden" name="idToEdit" value="<?=$materiaToEdit['id']?>">
             <div class="form-group">
               <label for="materia">materia</label>
               <input type="text" class="form-control" id="nameMateria" name="nameMateriaToEdit" value="<?=$materiaToEdit['materia']?>">
             </div>
             <button type="submit" class="btn btn-default" name="submitEditedMateria">Submit</button>
           </form>

         </section>

       </div>


     </body>
   </html>

   <?php



  }
  ?>
