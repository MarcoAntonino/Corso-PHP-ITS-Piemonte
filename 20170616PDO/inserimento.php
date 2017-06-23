<?php
include 'connessione.php';
include 'studente.php';

/**
 *
 */



try {
  
  $query = "INSERT INTO studenti (Nome, Cognome)
        VALUES (:Nome, :Cognome)";

  $risultati = $conn->prepare($query);
  $Nome = $_GET['Nome']; //in questo modo possiamo passare il valore direttamente dalla barra degli indirizzi preparazione.php?Id=1 così
  $Cognome = $_GET['Cognome']; //in questo modo possiamo passare il valore direttamente dalla barra degli indirizzi preparazione.php?Id=1 così

  //prepare statement
  //è un metodo di sicurezza e quindi anche passando un nome con l'apostrofo senza
  $risultati->bindParam(":Nome", $Nome, PDO::PARAM_STR); // qui dice sostituisci il segnaposto con la variabile
  $risultati->bindParam(":Cognome", $Cognome, PDO::PARAM_STR); // qui dice sostituisci il segnaposto con la variabile

  if ($risultati->execute()) {
    echo "record: ".$conn->lastInsertId(). " inserito";
  }
 //esegui la query



} catch (PDOException $e) {

  echo $e->getMessage();

}


 ?>
