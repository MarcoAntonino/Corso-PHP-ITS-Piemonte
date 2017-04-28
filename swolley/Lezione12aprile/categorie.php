<?php
include "includes/header.php";
?>
<div class="container">
      <div class="blog-header">
        <h1 class="blog-title">The PHP Programming Blog</h1>
        <p class="lead blog-description">The PHP Programming Official Blog.</p>
      </div>
      <div class="row">
        <?php  
        include "./includes/content.php";
        //include "./includes/sidebar.php";
        ?>
      </div><!-- /.row -->
</div><!-- /.container -->

<?php
include "./includes/footer.php";
?>