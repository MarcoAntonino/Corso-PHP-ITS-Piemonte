<?php //EDIT

if (isset($_POST['btnLogin'])) {

  $admin = new Admin($_POST['username'],$_POST['psw']);

  try {

    $query = "SELECT * FROM people where username=:username AND password=:password";
    $results = $DB->getLink()->prepare($query);
    $username = $_POST["username"];
    $psw = hash('sha256', $_POST["psw"]);
    $results->bindParam(":username", $username, PDO::PARAM_STR);
    $results->bindParam(":password", $psw, PDO::PARAM_STR);
    $results->execute();
    if (($results->rowCount())>0) {
      $_SESSION['adminToken']="t0k3n";
    }else {
      echo "Wrong username or password. Please try again";
    }

  } catch (Exception $e) {
    echo $e->getMessage();
  }

}

if(isset($_POST['btnSubmitEdit'])){
  try {
    $query = "UPDATE blog_posts SET title=:title, subtitle=:subtitle, post=:post, category_id=:category_id, date_posted=:date_posted WHERE id=:id";
    $DB->update($query);
  } catch (Exception $e) {
    echo $e->getMessage();
  }

}

 ?>

 <?php //INSERT
 if(isset($_POST['btnNewPost'])){
  try {
    $query = "INSERT INTO blog_posts (title, subtitle, post, category_id, date_posted) VALUES (:title, :subtitle, :post, :category_id, :date_posted)";
    $DB->insert($query);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
  ?>

<?php

try {
  $category = isset($_POST['category']) ? $_POST['category'] : false;

  if($category){
    // echo "CATEGORY IS TRUE";
    $query = "SELECT id, title, subtitle, post, category_id, date_posted FROM blog_posts where category_id = $category order by date_posted desc";
  }else {
    // echo "CATEGORY IS FALSE";
    $query = "SELECT id,title, subtitle, post, category_id, date_posted FROM blog_posts order by date_posted desc";
  }

  $post = $DB->getLink()->prepare($query);
?>
<div class="col-sm-8 blog-main">
    <?php
    $query = "SELECT id, name FROM categories";
    $results = $DB->getLink()->prepare($query);
    $results->execute();
    $data = $results->fetchAll();
    ?>
    <form action="#" method="post">
      <label>Filter for category</label>
      <div class="checkbox">
        <select class="form-control" name="category">
          <option value="">All categories</option>
          <?php
            foreach ($data as $row) {
               ?>
               <option value="<?= $row['id']?>"><?= $row['name']?></option>
               <?php
            }
            ?>
        </select>
        <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>

      </div>
    </form>


<?php

if (isset($_POST['delete'])) { //DELETE

  try {

    //echo "ECCO IL TUO POST ID ".$_POST['id'];
    $DB->delete();

  } catch (Exception $e) {

    echo $e->getMessage();

  }

}

  $post->execute();
  //print_r($post);



    while ($row = $post->fetch()) {  ?>

        <div class="blog-post">
          <h2 class="blog-post-title"><?=$row['title'] ?></h2>
          <h3 class="blog-post-subtitle"><?= $row['subtitle'] ?></h3>
          <p class="blog_post-meta"><?=date("l jS \of F Y H:i", intval($row['date_posted'])) ?></p>
          <p><?=$row['post'] ?></p>
        </div>
        <?php
        if (isset($_SESSION['adminToken'])) {?>
          <form action="?view=editPost" method="post">
            <input type="hidden" name="id" value="<?=$row['id']?>">
            <button type="submit" name="edit" class="btn btn-warning">Edit</button>
          </form>
          <form action="#" method="post">
            <input type="hidden" name="id" value="<?=$row['id']?>">
            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
          </form>
      <?php } ?>




      <?php


    }




} catch (Exception $e) {

  echo $e->getMessage();

}

?>
</div>

<?php



 ?>
