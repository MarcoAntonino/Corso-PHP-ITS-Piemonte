<?php
include 'includes\config.php';
include 'includes\materia.php';
include 'includes\iscrizione.php';
?>
<?php

if (isset($_POST['submitIscrizione'])) {
  $iscrizione = new Iscrizione($_POST['idEvento'],$_POST['nome'],$_POST['cognome']);
  $iscrizione->insertIscrizione();
}
 ?>
 <?php
  if(isset($_POST['delete'])){

    $lezione = new Lezione($_POST['dataToDelete'],$_POST['idMatToDelete']);
    $lezione->deleteLezione($_POST['idEvToDelete']);
    echo $_POST['idEvToDelete'];

  }


  ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Materie Inserite</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>
   <body>
     <div class="container">
       <section>
         <table class="table">
           <?php
           try {

             $DB = new Database();
             $DB->connection();
             if($DB){
               echo "sei connesso";
               echo "<br>";
             }

           } catch (Exception $e) {

             echo $e->getMessage();

           }

           $query = "SELECT id_lezione, nome, cognome FROM iscrizioni";
           $results = $DB->getLink()->prepare($query);
           $results->execute();
           $data = $results->fetchAll();
           ?>
           <thead>
             <tr>

               <th>id_Lezione</th>
               <th>nome</th>
               <th>cognome</th>
             </tr>
           </thead>
           <tbody>
               <?php
                 foreach ($data as $row) {
                   ?>
                   <tr>
                     <th scope="row"><?= $row['id_lezione']?></th>
                     <td><?= $row['nome']?></td>
                     <td><?= $row['cognome']?></td>
                     <td>
                       <form action="editMaterie.php" method="post">
                         <input type="hidden" name="idToEdit" value="<?=$row['id_materia']?>">
                         <input type="hidden" name="materiaToEdit" value="<?=$row['materia']?>">
                         <button type="submit" name="edit" class="btn btn-warning">Edit</button>
                       </form>
                     </td>
                     <td>
                       <form action="#" method="post">
                         <input type="hidden" name="idEvToDelete" value="<?=$row['id_evento']?>">
                         <input type="hidden" name="idMatToDelete" value="<?=$row['id_materie']?>">
                         <input type="hidden" name="dataToDelete" value="<?=$row['data']?>">
                         <button type="submit" name="delete" class="btn btn-danger">Delete</button></td>
                       </form>
                   </tr>
                   <?php
                 }
                ?>

           </tbody>


         </table>
       </section>

     </div>

   </body>
 </html>
