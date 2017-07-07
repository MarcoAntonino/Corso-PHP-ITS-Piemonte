<?php include 'includes/header.php'; ?>
<?php
$query = "SELECT id, name FROM categories";
$results = $DB->getLink()->prepare($query);
$results->execute();
$data = $results->fetchAll();
?>

<div class="container">
  <section>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>nome</th>
        </tr>
      </thead>
      <tbody>
          <?php
            foreach ($data as $row) {
              ?>
              <tr>
                <th scope="row"><?= $row['id']?></th>
                <td><?= $row['name']?></td>
                <td><button type="submit" name="edit" class="btn btn-warning">Edit</button></td>
                <td><button type="submit" name="delete" class="btn btn-danger">Delete</button></td>


              </tr>
              <?php
            }
           ?>

      </tbody>


    </table>
  </section>

</div>
