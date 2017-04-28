<?php
include "includes/header.php";
?>
<div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><?= TITOLO ?></h1>
        <p class="lead blog-description"><?= SUBTITOLO ?></p>
      </div>
      <div class="row">
        <?php  
        //switch viste
        $vista = (isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home');
        //content lato sx
        switch($vista)
        {
            case 'single':
                include "includes/single_post.php";
                break;
            case 'insert':
                include "includes/form.php";
                break;
            case 'newcat':
                break;
            case 'delete':
                break;
            case 'update':
                break;
            case 'nopost':
                echo "non ci sono post";
            default:
                include "./includes/content.php";
                break;
        }
        
        //sidebar lato dx
        include "./includes/sidebar.php";
        ?>
      </div><!-- /.row -->
</div><!-- /.container -->

<?php
include "./includes/footer.php";
?>