<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Film caricati</title>
  </head>
  <body>

    <?php
    $i=0;



    foreach ($_POST AS $key => $value) {

      $_SESSION['post'][$key] = $value;
    }

    foreach ($_SESSION as $key => $value) {

      echo $key.$value;
      # code...
    }

   ?>

  </body>
</html>
