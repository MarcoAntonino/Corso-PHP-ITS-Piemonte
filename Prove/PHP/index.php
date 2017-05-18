<?php
if(!$_GET)
{
echo 'Seleziona una notizia da leggere: <br><br>';
echo '<a href="index.php?id_notizia=1">Notizia 1</a> <br>';
echo '<a href="index.php?id_notizia=2">Notizia 2</a> <br>';
echo '<a href="index.php?id_notizia=3">Notizia 3</a> <br>';
}
else
{
$notizie = array(1=>'Questo è il testo della notizia numero 1',
'Questo è il testo della notizia numero 2',

'Questo è il testo della notizia numero 3');
$id_notizia = $_GET['id_notizia'];
echo 'Testo: <br>';
echo $notizie[$id_notizia] . '<br><br>';
echo '<a href="index.php">Torna all\'indice</a>';
}
?>
