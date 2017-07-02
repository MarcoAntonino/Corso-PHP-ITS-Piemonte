<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ripasso</title>
  </head>
  <body>
    <div class="container">
      <section class="col-sm-7 col-xs-12">
        <h1  class="text-center">Ripasso</h1>
        <h3>Passaggio parametri per riferimento</h3>
        <p class="text-justify"><pre><code>function addSomething(&$stringToModify)
        {
          $string .= "add this";
        }
        $str="This is a string";
        addSomething($str);</code></pre></p>
          <?php
          function addSomething(&$stringToModify)
          {
            $stringToModify .= " add this";
          }
          $str="This is a string";
          addSomething($str);
           ?>
         <p class="text-justify">Output: <?php echo $str; ?></p>

         <h2 class="text-center">Funzioni su array</h2>
         <h3><a href="http://php.net/manual/en/function.array-chunk.php" target="_blank">array_chunk</a></h3>
         <p class="text-justify"><pre><code>array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] )</code></pre></p>

        
      </section>

    </div>

  </body>
</html>
