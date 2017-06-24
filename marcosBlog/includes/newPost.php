<?php
if(isset($_POST['btnSubmit'])){
 try {
   $query = "INSERT INTO blog_posts (title, subtitle, post, date_posted) VALUES (:title, :subtitle, :post, :date_posted)";
   $results = $DB->link->prepare($query);
   $title = $_POST["title"];
   $subtitle = $_POST["subtitle"];
   $post = $_POST["post"];
   $date = time();
   $results->bindParam(":title", $title, PDO::PARAM_STR);
   $results->bindParam(":subtitle", $subtitle, PDO::PARAM_STR);
   $results->bindParam(":post", $post, PDO::PARAM_STR);
   $results->bindParam(":date_posted", $date, PDO::PARAM_STR);

   if ($results->execute()) {
     echo "record: ".$DB->link->lastInsertId()." inserted<br>" ;
   }
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
      <select class="form-control" name="tag">
        <option value="0">Choose a tag</option>

      </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>

  </form>

</div>
