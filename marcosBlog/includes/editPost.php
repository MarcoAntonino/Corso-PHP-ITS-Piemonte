<?php

if(isset($_POST['edit'])){
 try {
   $postId = $_POST['id'];
   $query = "SELECT * FROM blog_posts WHERE id = $postId";
   $results = $DB->getLink()->prepare($query);
   $results->bindParam(":id", $postId, PDO::PARAM_STR);
   $results->execute();
   $postToEdit = $results->fetch(PDO::FETCH_ASSOC);
   } catch (Exception $e) {
     echo $e->getMessage();
   }
 }
 ?>
<div class="col-sm-8 blog main">
  <form action="?view=content" method="post">
    <div class="form_group">
      <input type="hidden" name="idToEdit" value="<?=$postToEdit['id']?>">
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" type="text" name="titleToEdit" value="<?=$postToEdit['title']?>">
    </div>
    <div class="form-group">
      <label for="subtitle">Subtitle</label>
      <input class="form-control" type="text" name="subtitleToEdit" value="<?=$postToEdit['subtitle']?>" >
    </div>
    <div class="form-group">
      <label for="post">Post</label>
      <input class="form-control" rows=3 type="text" name="postToEdit" value="<?=$postToEdit['post']?>" >
    </div>
    <div class="form-group">
      <label for="imagine">Imagine</label>
      <input type="file" name="imagine"  >
    </div>
    <div class="checkbox">
      <?php
      $selectedCat = $postToEdit['category_id'];
      $queryForCatId = "SELECT id, name FROM categories where id = $selectedCat";
      $resultForCat = $DB->getLink()->prepare($queryForCatId);
      $resultForCat->execute();
      $selectedCatB = $resultForCat->fetch(PDO::FETCH_ASSOC);
      ?>
      <select class="form-control" name="categoryToEdit">
        <option value="<?=$selectedCatB['id']?>"><?=$selectedCatB['name']?></option>

      <?php
      $query = "SELECT id, name FROM categories where id != $selectedCat";
      $results = $DB->getLink()->prepare($query);
      $results->execute();
      $data = $results->fetchAll();
      ?>
        <?php
          foreach ($data as $row) {
             ?>
             <option value="<?= $row['id']?>"><?= $row['name']?></option>
             <?php
          }
          ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btnSubmitEdit">Submit the edit</button>

  </form>

</div>
