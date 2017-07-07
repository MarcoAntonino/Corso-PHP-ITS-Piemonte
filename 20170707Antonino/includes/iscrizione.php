<?php
include 'database.php';

/**
 *
 */
class Iscrizione
{
  private $idIscrizione;
  private $idLezione;
  private $nome;
  private $cognome;

  function __construct($idLezione, $nome, $cognome)
  {
    try {
      $DB = new Database();
      $DB->connection();
      $query = "SELECT * FROM lezioni WHERE id_evento = :idLezione";
      $results = $DB->getLink()->prepare($query);
      $results->bindParam(":idLezione", $idLezione, PDO::PARAM_STR);
      $results->execute();
      if (($results->rowCount())>0) {
        echo "Esiste la lezione";
        $lezione = $results->fetch(PDO::FETCH_ASSOC);
        $this->idLezione = $lezione["id_evento"];
        $this->nome = $nome;
        $this->cognome = $cognome;
      }else {
        echo "La lezione non esiste";
      }
      $DB = null;
    } catch (Exception $e) {
      echo $e->getMessage();

    }

  }

  function insertIscrizione()
  {
    try {
      $DB = new Database();
      $DB->connection();

      $query = "INSERT INTO iscrizioni ( id_lezione, nome, cognome) VALUES (:id_lezione, :nome, :cognome)";
      $results = $DB->getLink()->prepare($query);
      $id_lezione = $this->idLezione;
      $nome = $this->nome;
      $cognome = $this->cognome;
      $results->bindParam(":id_lezione", $id_lezione, PDO::PARAM_INT);
      $results->bindParam(":nome", $nome, PDO::PARAM_STR);
      $results->bindParam(":cognome", $cognome, PDO::PARAM_STR);
      if ($results->execute()) {
        echo "record: ".$DB->getLink()->lastInsertId()." inserted<br>" ;
  		}
      $DB = null;


    } catch (Exception $e) {

      echo $e->getMessage();


    }

  }

  function deleteIscrizione($idToDelete)
  {
    try {

      $DB = new Database();
      $DB->connection();

      $query = "DELETE FROM iscrizioni where id_iscrizione = :id";
      $results = $DB->getLink()->prepare($query);
      $idIscrizione = $idToDelete;
      $results->bindParam(":id", $idIscrizione, PDO::PARAM_INT);
      $results->execute();
      
      $DB=null;

    } catch (Exception $e) {

    }

  }
}




 ?>
