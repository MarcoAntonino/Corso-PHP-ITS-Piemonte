<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>Anagramma</title>
  </head>
  <body>
    <form class="" action="#" method="get">
      <fieldset>
        <legend>Inserisci la parola da anagrammare</legend>
        <input type="text" name="parola" placeholder="parola">
        <input type="submit" name="Anagramma" >
      </fieldset>

    </form>

    <?php
      echo $_GET["parola"];
      echo "<br>";
      $anagram=$_GET["parola"];
      echo strtoupper($anagram);
      echo "<br>";
      $arr1 = str_split($anagram);
      print_r($arr1);
      echo "<br>";
      echo $arr1[0];
      echo "<br>";
      echo "<br>";

      for ($i=0; $i < count($arr1); $i++) {
        for ($j=0; $j < count($arr1); $j++) {
          echo "i=".$i." E j=".$j;
          $tmp=$arr1[$i];
          $arr1[$i]=$arr1[$j];
          $arr1[$j]=$tmp;
          print_r($arr1);
          $tmp=$arr1[$j];
          $arr1[$j]=$arr1[$i];
          $arr1[$i]=$tmp;
          echo "<br>";

        }
        echo "<br>";
      }




     ?>

  </body>
</html>
