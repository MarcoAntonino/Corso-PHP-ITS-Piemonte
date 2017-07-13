<?php include 'includes/header.php'; ?>

<div class="container">
  <div class="blog-header">
    <h1 class="blog-title"><?=TITLE ?></h1>
    <p class="lead blog-description"><?= SUBTITLE ?></p>
  </div>

  <?php

  $view = (isset($_REQUEST['view'])?  $_REQUEST['view'] : 'home');

  switch ($view) {

      case 'newPost':
          include './includes/newPost.php';
          break;
      case 'editPost':
          include './includes/editPost.php';
    
      default:
          include './includes/content.php';
           break;
  }

   ?>

</div>
