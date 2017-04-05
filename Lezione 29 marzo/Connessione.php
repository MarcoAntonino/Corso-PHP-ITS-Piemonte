<?php

//apro la connessione al db
$mysqliConnction = new mysqli("localhost","root","","its2017");


  if (mysqli_connect_errno()) {
    printf("Oops, abbiamo problemi con la connessione al db: %s\n", mysqli_connect_error());
    exit();
  }

//preparo la query sql

//chiudo la connessione col db
/*
$mysqliConnection->close();
*/
 ?>
