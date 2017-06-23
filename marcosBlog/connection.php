<?php
try {

  $conn = new PDO("mysql:host=localhost;dbname=marcos_blog", "root", "");

  if($conn){
    echo "sei connesso";
    echo "<br>";
  }

} catch (Exception $e) {

  echo $e->getMessage();

}


 ?>
