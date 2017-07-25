<?php
//load the database configuration file
include 'index.php';


if(isset($_POST['importSubmit'])){

    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) /*Controla che il file abbia un nome*/&& in_array($_FILES['file']['type'],$csvMimes)) /*Controlla che il file sia un csv*/{
        if(is_uploaded_file($_FILES['file']['tmp_name'])){ /*Controlla che il file sia stato caricato tramite GET o POST*/

            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            //skip first line perchè c'è un puntatore interno
            fgetcsv($csvFile);

            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile, 1000, ";")) !== FALSE){
                //check whether member already exists in database with same email
                try {
                  $query = "SELECT id FROM members WHERE email = '".$line[1]."'";
                  $prevResult = $DB->getLink()->prepare($query);
                  $prevResult->execute();
                  if($prevResult->rowCount() > 0){
                      //update member data
                      $query="UPDATE members SET name = :name, phone = :phone, created = :created, modified = :modified, status = :status WHERE email = :email";
                      $results = $DB->getLink()->prepare($query);
                      $name=$line[0];
                      $email=$line[1];
                      $phone=$line[2];
                      $created=$line[3];
                      $modified=$line[4];
                      $status=$line[5];
                      $results->bindParam(":name", $name,PDO::PARAM_STR);
                      $results->bindParam(":email", $email,PDO::PARAM_STR);
                      $results->bindParam(":phone", $phone,PDO::PARAM_STR);
                      $results->bindParam(":created", $created,PDO::PARAM_STR);
                      $results->bindParam(":modified", $modified,PDO::PARAM_STR);
                      $results->bindParam(":status", $status,PDO::PARAM_INT);
                      $results->execute();
                  }else{
                      //insert member data into database
                      $query = "INSERT INTO members (name, email, phone, created, modified, status) VALUES (:name, :email, :phone, :created, :modified, :status)";
                      $results = $DB->getLink()->prepare($query);
                      $name=$line[0];
                      $email=$line[1];
                      $phone=$line[2];
                      $created=$line[3];
                      $modified=$line[4];
                      $status=$line[5];
                      $results->bindParam(":name", $name,PDO::PARAM_STR);
                      $results->bindParam(":email", $email,PDO::PARAM_STR);
                      $results->bindParam(":phone", $phone,PDO::PARAM_STR);
                      $results->bindParam(":created", $created,PDO::PARAM_STR);
                      $results->bindParam(":modified", $modified,PDO::PARAM_STR);
                      $results->bindParam(":status", $status,PDO::PARAM_INT);
                      $results->execute();
                  }

                } catch (Exception $e) {

                  echo $e->getMessage();
                }


            }

            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

//redirect to the listing page
header("Location: index.php".$qstring);
