<form method="post" action="<?=$_SERVER['PHP_SELF']?>?view=insert">
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <div class="form-group">
              <label for="titolo">Titolo</label>
              <input type="text" class="form-control" id="titolo" name="titolo" placeholder="Titolo">
            </div>
            <div class="form-group">
              <label for="sottotitolo">Sottotitolo</label>
              <input type="text" class="form-control" id="sottotitolo" name="sottotitolo" placeholder="Sottotitolo">
            </div>
            <div class="form-group">
              <label for="testo">Testo</label>
              <textarea class="form-control" id="testo" name="testo" placeholder="Testo" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="immagine">Immagine</label>
              <input type="file" id="immagine" name="immagine">
            </div>
            <div class="checkbox">
                <select class="form-control" name="categoria">
                    <option value="0">Seleziona una categoria</option>
                    <?php while($row=mysqli_fetch_array($elencocategorie))
                      {
                        echo "<option value='".$row['idcategoria']."'>".strtoupper($row['categoria'])."</option>";
                      }  
                ?>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>