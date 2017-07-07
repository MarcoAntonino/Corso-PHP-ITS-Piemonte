<?php

include 'includes\config.php';
include 'includes\iscrizione.php';


$iscrizione = new Iscrizione(3,"marco","antonino");
$iscrizione->deleteIscrizione(1);
?>
