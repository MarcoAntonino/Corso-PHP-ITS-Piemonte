<?php
if(isset($_POST['btnSubmit'])){
 try {
   $query = "INSERT INTO blog_posts (title, subtitle, post, category_id, date_posted) VALUES (:title, :subtitle, :post, :category_id, :date_posted)";
   $DB->insert($query);
   } catch (Exception $e) {
     echo $e->getMessage();
   }
 }
 ?>
<div class="col-sm-8 blog main">
  <form action="?view=newPost" method="post">
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" type="text" name="title" placeholder="Title" >
    </div>
    <div class="form-group">
      <label for="subtitle">Subtitle</label>
      <input class="form-control" type="text" name="subtitle" placeholder="Subtitle" >
    </div>
    <div class="form-group">
      <label for="post">Post</label>
      <input class="form-control" rows=3 type="text" name="post" placeholder="Write here your post..." >
    </div>
    <div class="form-group">
      <label for="imagine">Imagine</label>
      <input type="file" name="imagine"  >
    </div>

    <div class="checkbox">
      <?php
      $query = "SELECT id, name FROM categories";
      $results = $DB->getLink()->prepare($query);
      $results->execute();
      $data = $results->fetchAll();
      ?>
      <select class="form-control" name="category">
        <?php
          foreach ($data as $row) {
             ?>
             <option value="<?= $row['id']?>"><?= $row['name']?></option>
             <?php
          }
          ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>

  </form>

</div>
