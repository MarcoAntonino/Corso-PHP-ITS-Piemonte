<?php include 'inc/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> <?php echo $title; ?></title> <!-- Mi fa comparire questo titolo in cima alla finestra-->

        <style type="text/css">
        body {font-size: 10px;} 

            #testata {background-color: red; border: 5px solid #FFEE00;} 
            #menu {background-color: yellow; border: 5px solid #CCCCCC; padding: 5px;}
            #menu a {text-decoration: none; color: black; font-size: 1.2em; }
            /*2em=è una moltiplicazione. È possibile utilizzarlo sia per i font che per le dimensioni degli oggetti*/
            #menu a:hover {text-decoration: underline;font-weight: bold;} 
            /*hover vuol dire solo quando ci passi solo il mouse*/
            #container {border: 1px solid #CCC;}
            div {padding: 5px; font-size: 12px}
        </style> 
        <!--Ho dato un aspetto grafico. Alla riga 15 ho dato la dimensione base per tutta la pagina
        -->


        <meta charset="UTF-8"> <!-- Questo è il set di caratteri di questa pagina-->
        <title></title>
    </head>
    <body>

    <div id="testata"><h1><?php echo $title; ?></h1></div>

    <div id="menu">
    <a href="?">Home page</a> <!--href è un link. Se metti solo il punto interrogativo, viene richiamata solo la pagina su cui ci si trova-->
    <a href="?pagina=uno">PhpInfo</a>
    <a href="?pagina=due">Corso Php</a>
    <a href="?pagina=tre">About me</a>
    <a href="http://www.php.net" target="blank">PHP.net</a><!--target="blank" ti apre una nuova finestra, si chiama collegamento ASSOLUTO-->

<!--È un menù dinamico.-->


    </div>
<div id="container">

    <?php 
    error_reporting(0);

    // echo $_GET['pagina'];
    
    $a = $_GET['pagina'];

    
    if ($a == "uno"){
        phpinfo();//è l'istruzione per avere tutte le info sul PHP che stanno girando sulla macchina.  Dà le info che si trovano su phpini. Ma se ho il mio spazio su Aruba, come faccio a sapere le info? Funziona solo il locale.
    }
    else if ($a == "due") {
        echo "<h1>Benvenuto nel corso PHP</h1>";
        echo "<ul>";
        echo "<li><a href='variabili.php'>variabili</a></li>"; //due modi diversi di indicare il testo
        echo "<li><a href=\"array.php\">array</a></li>"; //due modi diversi di indicare il testo

        echo "</ul>"; //elenco NON ordinato
    }
    else if ($a == "tre") {
        echo "mi dispiace non posso mostrarti queste info segreteissime";
    }
 ?>



        <h1>Ciao h1 HTML</h1>
        <?php 

        ?>
        <?php echo "<h1>Ciao h1 PHP</h1>"; ?>
        <?php echo "ciao"; ?>
        <?php $saluto =  "mondo" ?>
        <?php echo $saluto ?>
        <?php echo 3*2 ?>
        <!-- 
        L'istruzione PHP deve essere compilata o il browser non la vedrà
        mai.
        Ricorda che il dollaro introduce la variabile
        -->

        
        <?php
        // put your code here
        ?>
        </div>
    </body>
</html>

