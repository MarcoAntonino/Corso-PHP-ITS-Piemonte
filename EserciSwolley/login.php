<?php

$elencoutente = array("Pippo"=>"Pluto","Cane"=>"Gatto","Pesci"=>"Scimmia");



if(isset($_POST['utente']) && isset ($_POST['password'])){
  foreach ($elencoutente as $user => $pass) {

    if($_POST['utente']==$user && $_POST['password']==$pass)
    {
      header("location: aggiungipunto.php");
    }
  }
} else if (if($_POST['utente']!=$user || $_POST['password']!=$pass)){
  echo "Hai di nuovo sbagliato<form action=login.php>";


}
else{

  ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

    <form action="login.php" method="post">

      <label>Utente</label>
      <input type="text" name="utente">
      <label>Password</label>
      <input type="password" name="password">
      <button type="submit" value="Submit">Invia</button>
      <button type="reset">Reinposta</button>

    </form>

  </body>
</html>
<?php
}
?>
