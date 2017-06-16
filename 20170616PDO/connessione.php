<?php
try {

  $conn = new PDO("mysql:host=localhost;dbname=its2017", "root", ""); //oggetto
  //con questo sei connesso

  if($conn){
    echo "sei connesso";
    echo "<br>";
  }

} catch (PDOException $e) {

  echo $e->getMessage();
  /*Se l'elemento fosse statico, accederemmo alle proprietà con ::*/

}



 ?>
