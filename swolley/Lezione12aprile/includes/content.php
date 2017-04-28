<?php
$categoria = isset($_REQUEST['idcat']) ? $_REQUEST['idcat'] : false;

if ($categoria)
    $query = "SELECT * FROM posts JOIN categorie ON categorie.idcategoria=posts.idcategoria WHERE posts.idcategoria=" . $categoria . " ORDER BY data DESC";
else
    $query = "SELECT * FROM posts JOIN categorie ON categorie.idcategoria=posts.idcategoria ORDER BY data DESC";

$elencoposts = $db->select($query);
?>

<div class="col-sm-8 blog-main">
    <?php while($row=mysqli_fetch_array($elencoposts)) :  ?>
        <div class="blog-post">
          <h2 class="blog-post-title">
            <?= utf8_encode($row['titolo']); ?>
          </h2>
            <p class="blog-post-meta"><?= formattaData($row['data'])." - ".strtoupper($row['categoria']); ?>
          </p>
          <p><?= utf8_encode(substr($row['testo'], 0, 120)); ?></p>
          <p>
          <?php
          if(strlen($row['testo'])>120)
          {
             echo "<a href='?view=single&idpost=".$row['idpost']."' class='btn btn-primary'>Leggi tutto</a> ";
          }
             echo "<a href='?view=update&idpost=".$row['idpost']."' class='btn btn-warning'>Modifica</a> ";
             echo "<a href='?view=delete&idpost=".$row['idpost']."' class='btn btn-danger'>Elimina</a> ";
          ?>
          </p>
          <hr>
        </div><!-- /.blog-post -->
    <?php endwhile; ?>
  <!--<nav>
     <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul> 
  </nav>-->

</div><!-- /.blog-main -->