<?php
include 'connessione.php';
include 'studente.php';

/**
 *
 */



try {

  $query = "select * from studenti";
  $risultati = $conn->query($query);
  //da query tornano un set di risultati

  //PRIMO STEP
  //uso fetch nel while
  // while ($riga = $risultati->fetch()) {
  //
  //   /*Il metodo fetch ritorna l'oggetto corrente e sposta il contatore avanti.
  //   Finchè ci sono oggetti ritorna true*/
  //
  //   echo $riga['Cognome'];
  //   echo "<br>";
  // }


  //2)Uso fetchall
  //$studenti = $risultati->fetchAll();


  // $i=0;
  //
  // foreach ($studenti as $studente) {
  //
  //   echo ++$i;
  //   echo $studente['Cognome'];
  //   echo "<br>";
  //
  //
  // }


  //3)terzo modo
  //risultati->setFetchMode(PDO::FETCH_OBJ); //ritorna un oggetto riga per riga
  $risultati->setFetchMode(PDO::FETCH_CLASS, "Studente"); //quello che ti arriva, mettilo nella classe studente e ti ritorna gli oggetti
  /*
  Switcha alla modalità oggetti
  */

  while ($studente = $risultati->fetch()) {
    echo $studente->__toString();
    echo "<br>";
    
  }


} catch (PDOException $e) {

  echo $e->getMessage();

}


 ?>
