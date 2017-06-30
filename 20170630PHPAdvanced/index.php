<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Json</h1>
    <p>Il Json è un formato di interscambio e ha dei vantaggi rispetto all'html
    <ul>
      <li>è più compatto. Di conseguenza è più ordinato e pesa meno perchè ci sono meno battute meno</li>
    </ul>
  Se si parla di oggetti, allora avrà le graffe intorno. Se si parla di array, avrà le quadre intorno e gli elementi divisi da virgole. <u>Tranne l'ultimo che non ha la virgola dopo</u>.</p>
  <p>Ricordati sempre link <a href="http://jsoneditoronline.org" target="_blank"></a></p>
  <p>Come fa php a produrre un json? <code>json_encode()</code> e per deserializzarlo <code>json_decode()</code></p>

  <?php
  $arr = array('a' => 2, 'b' => 3 , 'c' => 10);

  echo json_encode($arr);




   ?>

  </body>
</html>
