<html>
    <head>
          <meta charset="utf-8"/>
   </head>
   <body>
       <form action="index.php" method="POST">
           <label for="nome">
               <input type="text" name="nome" id="nome" />Inserisci il nome</label><br/>
               <label for="indice">
                   <input type="number" name="indice" min="0" max="100" step="1" id="indice">Inserisci il numero di volte</label><br/>
                   <input type="submit" value="invia"/>
       </form>
       
       <?PHP
       if (isset($_POST['nome']))
       {
           $nome=$_POST['nome'];
           $indice=$_POST['indice'];
           
           for ($i=1;$i<$indice;$i++)
           {
               echo '<br/>ciao'.$nome;
           }
       }
           
       ?>
   </body>
       
</html>