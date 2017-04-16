<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>Riepilogo</title>
  </head>
  <body>
    <pre>
      <?php
        $style=$_GET['style'];
        $extra=0;
        $cappello=$_GET['testa'];
        $prezzoCappello=20;
        $maglia=$_GET['torso'];
        $prezzoMaglia=40;
        $pantaloni=$_GET['gambe'];
        $prezzoPantaloni=50;
        $scarpe=$_GET['piedi'];
        $prezzoScarpe=80;
        $prezzoTot;

        function calcolaExtra($style){
          switch ($style) {
            case "Casual":
              $extra=0;
              break;

            case "Formal":
              $extra=50;
              break;

            case "Classic":
              $extra=150;
              break;

            default:
              # code...
              break;
          }
          return $extra;
        }

        echo calcolaExtra($style);


        function aggiungiArticolo($_GET[slot],"nomeArticolo")
        {if ($_GET[slot]=="nomeArticolo")
            {
                $somma=;
            }
        }
        if ($cappello == 'cappello')
        {
          echo "Cappello: ".$prezzoCappello+$extra;
          $somma=$prezzoCappello+$extra;
        }

        echo $somma;


       ?>
    </pre>

  </body>
</html>
