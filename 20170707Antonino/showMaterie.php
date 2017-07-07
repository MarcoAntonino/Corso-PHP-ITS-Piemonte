<?php
include 'includes\config.php';
include 'includes\database.php';
include 'includes\materia.php';
?>
<?php

if (isset($_POST['submitMateria'])) {
  $materia = new Materia($_POST['nameMateria']);
  $materia->insertMateria();
}
 ?>
 <?php
  if(isset($_POST['delete'])){

    $materia = new Materia($_POST['materiaToDelete']);
    $materia->deleteMateria($_POST['idToDelete']);
    echo $_POST['idToDelete'];

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

           $query = "SELECT id_materia, materia FROM materie";
           $results = $DB->getLink()->prepare($query);
           $results->execute();
           $data = $results->fetchAll();
           ?>
           <thead>
             <tr>
               <th>id_Materia</th>
               <th>Materia</th>
             </tr>
           </thead>
           <tbody>
               <?php
                 foreach ($data as $row) {
                   ?>
                   <tr>
                     <th scope="row"><?= $row['id_materia']?></th>
                     <td><?= $row['materia']?></td>
                     <td>
                       <form action="editMaterie.php" method="post">
                         <input type="hidden" name="idToEdit" value="<?=$row['id_materia']?>">
                         <input type="hidden" name="materiaToEdit" value="<?=$row['materia']?>">
                         <button type="submit" name="edit" class="btn btn-warning">Edit</button>
                       </form>
                     </td>
                     <td>
                       <form action="#" method="post">
                         <input type="hidden" name="idToDelete" value="<?=$row['id_materia']?>">
                         <input type="hidden" name="materiaToDelete" value="<?=$row['materia']?>">
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
