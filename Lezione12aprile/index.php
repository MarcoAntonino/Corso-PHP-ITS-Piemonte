<?php

include './includes/header.php';

?>

<div class="container">
<?php
//operatore ternario per switchare le viste

$vista = ( isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home'); //verifico se è settata la variabile che passa via get o post
//stiamo facendo uno switch della vista, lato sx
switch ($vista){
    case "single":
        include './include/single_post.php';
        
        break;
    //insert
    //delete
    //update
    case 'nopost';
        echo "Non ci sono post";
    default:
        include './includes/content.php';
    
    break;
}
include './includes/content.php';
include './includes/sidebar.php';
?>
</div>

<?php
include './includes/footer.php';
?>