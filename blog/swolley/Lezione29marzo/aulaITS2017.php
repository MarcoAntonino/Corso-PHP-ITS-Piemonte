<?php 

include "contenitoreStudenti.php";
include 'header.php' 

?>

<div class="container">

  <?php if(isset($_GET['list'])) : //apro if ?>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <h1>Studenti</h1>

   </div>
   <div>
    <table class="table table-hover">
    	<thead>
          <tr>
            <th>nome</th>
            <th>cognome</th>
            <th>email</th>
          </tr>
        </thead>
        <tbody>
      	  <?php foreach ($elencoStudenti as $studente) : ?>
    	      <tr>
    	        <td><?= $studente->nome ?></td>
    	        <td><?= $studente->cognome ?></td>
    	        <td><?= $studente->email ?></td>
    	      </tr>
      	  <?php endforeach; ?>
      	</tbody>
    </table>
   </div>
  <?php endif; 	//chiudo if ?>

<!-- ///////////////////////////////////////////////////// -->


  <?php if(isset($_GET['grid'])) : //apro if ?>

  	<?php foreach ($elencoStudenti as $studente) : ?>

  		<div class="card-group">
    			<div class="card">
      			<img class="card-img-top" src="..." alt="Card image cap">
      			<div class="card-block">
        				<h4 class="card-title"><?= $studente->cognome ?></h4>
        				<p class="card-text"><?= $studente->nome ?></p>
        				<p class="card-text"><small class="text-muted"><?= $studente->email ?></small></p>
      			</div>
    			</div>
    		</div>

  	<?php endforeach; ?>

  <?php endif; 	//chiudo if ?>

</div> <!-- /container -->

<?php include 'footer.php' ?>

<!-- /////////////////////////////////////////////// -->