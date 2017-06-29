<?php include 'includes/header.php'; ?>

<div class="container">
  <div class="blog-header">
    <h1 class="blog-title"><?=TITLE ?></h1>
    <p class="lead blog-description"><?= SUBTITLE ?></p>
  </div>

  <?php

  $view = (isset($_REQUEST['view'])?  $_REQUEST['view'] : 'home');

  switch ($view) {
      // case "single":
      //     include './includes/single_post.php';
      //     break;
      case 'newPost':
          include './includes/newPost.php';
          break;
      case 'editPost':
          include './includes/editPost.php';
      // case 'authors':
      //     include './includes/studenti.php';
      //     break;
      // case 'elimina':
      //     include './includes/deletePost.php';
      //     break;
      //insert
      //delete
      //update
      // case 'nopost';
      //     echo "non ci sono post";
      default:
          include './includes/content.php';
           break;
  }

   ?>

</div>
