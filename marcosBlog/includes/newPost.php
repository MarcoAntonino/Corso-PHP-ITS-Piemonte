
<div class="col-sm-8 blog main">
  <form action="?view=content" method="post">
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" type="text" name="newTitle" placeholder="Title" >
    </div>
    <div class="form-group">
      <label for="subtitle">Subtitle</label>
      <input class="form-control" type="text" name="newSubtitle" placeholder="Subtitle" >
    </div>
    <div class="form-group">
      <label for="post">Post</label>
      <input class="form-control" rows=3 type="text" name="newPost" placeholder="Write here your post..." >
    </div>

    <div class="form-group">
      <label for="">Categoria</label>
      <div class="checkbox">
        <?php
        $query = "SELECT id, name FROM categories";
        $results = $DB->getLink()->prepare($query);
        $results->execute();
        $data = $results->fetchAll();
        ?>
        <select class="form-control" name="newCategory">
          <?php
            foreach ($data as $row) {
               ?>
               <option value="<?= $row['id']?>"><?= $row['name']?></option>
               <?php
            }
            ?>
        </select>
      </div>

    </div>

    <button type="submit" class="btn btn-primary" name="btnNewPost">Submit</button>

  </form>

</div>
