<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "myDB";

  //Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  //Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  echo "<br>";

$sql = "INSERT INTO MyGuests (firstname, lastnname, email)
VALUES ('Marco', 'Antonino', 'marco@example.com')";

//sql create a Table

// $sql = "CREATE TABLE MyGuests (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   firstname VARCHAR(30) NOT NULL,
//   lastnname VARCHAR(30) NOT NULL,
//   email VARCHAR(50),
//   reg_date TIMESTAMP
// )";
//Create a db
// $sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: ". $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
