<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>Accesso</title>
  </head>
  <body>
    <pre>
      <?php
          $username = $_POST['username'];
          $password = $_POST['password'];

          $loginPage = "form.php";
          $stringa = "";


          if(trim($username) == "marco" && $password == "123"){
            $stringa = "Benvenuto ".ucfirst(strtolower($username));
            $_SESSION['username'] = $username;
          }else {
            header("location: form.php");
          }
          echo $stringa;
          ?>



          <form class="" method="get" action="action2.php">
            <fieldset>
              <legend>Scegli il tuo stile</legend>
              <form>
                <input type="radio" name="style" value="Casual" checked> Casual<br>
                <input type="radio" name="style" value="Formal"> Formal<br>
                <input type="radio" name="style" value="Classic"> Classic<br>

                <input type="checkbox" name="testa" value="cappello">Cappello<br>
                <input type="checkbox" name="torso" value="maglia">Maglia<br>
                <input type="checkbox" name="gambe" value="pantaloni">Pantaloni<br>
                <input type="checkbox" name="piedi" value="scarpe">Scarpe<br>
                <input type="submit" name="Invia" >
            </fieldset>

          </form>

          <?php
          echo "\nSessione: ".$_SESSION['username'];
          ?>



       ?>
    </pre>

  </body>
</html>
