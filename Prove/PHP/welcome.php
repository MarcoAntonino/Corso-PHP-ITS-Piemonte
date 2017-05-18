<?php setcookie('cooUsername',$_POST['username'], time() + 3600); ?>
<?php include "userpass.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Benvenuto</title>
  </head>
  <body>
    <?php
      $username=$_POST['username'];
      $password=$_POST['password'];

      $isPresent=false;

      //for($i=0;$i< count($usernames);$i++)
      foreach ($usernames as $key => $value)
      {
        if($username==$key && $password==$value)
        {
          $isPresent=true;
        }

      }

      if($isPresent)
      {
        echo "sei un figo";
      }
      else {
        echo "sei una merdaccia";
      }
      echo "<br>";

      
      if(isset($_COOKIE['cooUsername']) )
      {
        $saluto="Bentornato";
      }
      else {
        $saluto="Benvenuto";
      }

      echo $saluto." ".$username;


     ?>

  </body>
</html>
