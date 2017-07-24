<?php
//load the database configuration file
include 'includes\config.php';
include 'includes\classes\database.php';

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
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether member already exists in database with same email
                $query = "SELECT id FROM members WHERE email = '".$line[1]."'";
                $prevResult = $DB->getLink()->prepare($query);
                $prevResult->execute();
                if($prevResult->rowCount() > 0){
                    //update member data
                    $db->query("UPDATE members SET name = '".$line[0]."', phone = '".$line[2]."', created = '".$line[3]."', modified = '".$line[3]."', status = '".$line[4]."' WHERE email = '".$line[1]."'");
                }else{
                    //insert member data into database
                    $db->query("INSERT INTO members (name, email, phone, created, modified, status) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[3]."','".$line[4]."')");
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
