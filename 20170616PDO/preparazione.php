<?php
include 'connessione.php';
include 'studente.php';

/**
 *
 */



try {



  $query = "select * from studenti where Id = :Id";
  $risultati = $conn->prepare($query);
  $Id = $_GET['Id']; //in questo modo possiamo passare il valore direttamente dalla barra degli indirizzi preparazione.php?Id=1 così

  //prepare statement
  $risultati->bindParam(":Id", $Id, PDO::PARAM_INT); // qui dice sostituisci il segnaposto con la variabile
  $risultati->execute(); //esegui la query

  $risultati->setFetchMode(PDO::FETCH_CLASS, "Studente"); //quello che ti arriva, mettilo nella classe studente e ti ritorna gli oggetti ORM

  while ($studente = $risultati->fetch()) {
    echo $studente->__toString();
    echo "<br>";

  }


} catch (PDOException $e) {

  echo $e->getMessage();

}


 ?>
