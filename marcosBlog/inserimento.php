<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nuovo post</title>
  </head>
  <body>

  </body>
</html>
<?php
include 'connection.php';

try {

  $query = "INSERT INTO tags (name) VALUES (:name)";


} catch (Exception $e) {

}


 ?>
