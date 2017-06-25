<?php

try {
  $category = isset($_POST['category']) ? $_POST['category'] : false;

  if($category){
    // echo "CATEGORY IS TRUE";
    $query = "SELECT title, subtitle, post, category_id, date_posted FROM blog_posts where category_id = $category order by date_posted desc";
  }else {
    // echo "CATEGORY IS FALSE";
    $query = "SELECT title, subtitle, post, category_id, date_posted FROM blog_posts order by date_posted desc";
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
    <form class="" action="#" method="post">
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

  $post->execute();

    while ($row = $post->fetch()) {  ?>

        <div class="blog-post">
          <h2 class="blog-post-title"><?=$row['title'] ?></h2>
          <h3 class="blog-post-subtitle"><?= $row['subtitle'] ?></h3>
          <p class="blog_post-meta"><?=date("l jS \of F Y H:i", intval($row['date_posted'])) ?></p>
          <p><?=$row['post'] ?></p>
        </div>

      <?php
      //print_r($row);
    }


} catch (Exception $e) {

  echo $e->getMessage();

}

?>
</div>
