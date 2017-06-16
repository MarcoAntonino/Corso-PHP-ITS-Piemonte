<?php
include 'connessione.php';
include 'studente.php';

/**
 *
 */



try {



  $query = "DELETE FROM studenti WHERE Id = :Id";

  $risultati = $conn->prepare($query);
  $Id = 5; //in questo modo possiamo passare il valore direttamente dalla barra degli indirizzi preparazione.php?Id=1 così

  //prepare statement
  //è un metodo di sicurezza e quindi anche passando un nome con l'apostrofo senza
  $risultati->bindParam(":Id", $Id, PDO::PARAM_INT); // qui dice sostituisci il segnaposto con la variabile

  if ($risultati->execute()) {
    echo "".$risultati->rowCount(). " record eliminati";
  }
 //esegui la query



} catch (PDOException $e) {

  echo $e->getMessage();

}


 ?>
