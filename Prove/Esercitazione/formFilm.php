<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Valuta il film</title>
  </head>
  <body>

    <form action="riepilogo.php" method="post">
      <fieldset>
        <legend>Compila il form</legend>

          <label for="title">TITOLO</label>
          <input type="text" name="title[]"  placeholder="Titolo">

          <label for="vote">VALUTAZIONE</label>
          <label for="1">1</label>
          <input type="radio" name="vote" value="1">
          <label for="1">2</label>
          <input type="radio" name="vote" value="2">
          <label for="1">3</label>
          <input type="radio" name="vote" value="3">
          <label for="1">4</label>
          <input type="radio" name="vote" value="4">
          <label for="1">5</label>
          <input type="radio" name="vote" value="5">

          <br>

          <label for="titleSe">TITOLO</label>
          <select name="titleSe">

          </select>
          <label for="genre">GENERE</label>
          <select name="genre">
            <option value="horror">Horror</option>
            <option value="comedy">Commedia</option>
            <option value="drama">Drammatico</option>
            <option value="fantasy">Fantasy</option>
            <option value="comedy">Commedia</option>
            <option value="scify">Fantascienza</option>
            <option value="action">Azione</option>
          </select>

          <label for="type">Tipologia</label>
          <select name="type">
            <option value="film">Film</option>
            <option value="tvSeries">Serie TV</option>
          </select>

          <input type="submit" value="Invia">



      </fieldset>

    </form>

  </body>
</html>
