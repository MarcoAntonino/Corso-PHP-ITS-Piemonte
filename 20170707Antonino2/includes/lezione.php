<?php
include 'database.php';

/**
 *
 */
class Lezione
{
  private $idEvento;
  private $idMateria;
  private $data;

  function __construct($newData, $materia){

    try {

      $DB = new Database();
      $DB->connection();
      $query = "SELECT * FROM materie WHERE id_materia = :materia";
      $results = $DB->getLink()->prepare($query);
      $results->bindParam(":materia", $materia, PDO::PARAM_STR);
      $results->execute();
      if (($results->rowCount())>0) {
        echo "Esiste la materia";
        $materia = $results->fetch(PDO::FETCH_ASSOC);
        $this->idMateria = $materia["id_materia"];
        $this->data = $newData;
      }else {
        echo "La materia non esiste";
      }
      $DB = null;
    } catch (Exception $e) {
      echo $e->getMessage();

    }

  }

  function insertLezione()
  {
    try {
      $DB = new Database();
      $DB->connection();
      if($DB){
        echo "sei connesso";
        echo "<br>";
      }

      $query = "INSERT INTO lezioni (id_materie, data) VALUES (:id_materia, :data)";
      $results = $DB->getLink()->prepare($query);
      $id_materia = $this->idMateria;
      $data = $this->data;
      $results->bindParam(":id_materia", $id_materia, PDO::PARAM_INT);
      $results->bindParam(":data", $data, PDO::PARAM_STR);
      if ($results->execute()) {
        echo "record: ".$DB->getLink()->lastInsertId()." inserted<br>" ;
  		}
      $DB = null;

    } catch (Exception $e) {
      echo $e->getMessage();


    }


  }

  function deleteLezione($idToDelete)
  {
    try {

      $DB = new Database();
      $DB->connection();

      $query = "DELETE FROM lezioni where id_evento = :id";
      $results = $DB->getLink()->prepare($query);
      $idEvento = $idToDelete;
      $results->bindParam(":id", $idEvento, PDO::PARAM_INT);
      $results->execute();
      $DB=null;

    } catch (Exception $e) {
      echo $e->getMessage();

    }

  }
}


 ?>
