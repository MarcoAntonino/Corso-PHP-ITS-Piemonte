
<?php
include 'contenitoreStudenti.php';
include 'header.php'
 ?>
<div class="container">

<?php if (isset($_GET['list'])) : ?>

 <table class="table table-striped">
   <thead>
     <tr>
       <th>Nome</th>
       <th>Cognome</th>
       <th>Email</th>
     </tr>
   </thead>

   <tbody>
     <?php foreach ($elencoStudenti as $studente): ?>
     <tr>
       <td><?=$studente?></td>
       <td><?=$studente?></td>
       <td><?=$studente?></td>
   </tr>
 <?php endforeach; ?>
   </tbody>

 </table>
<?php endif; ?>


<?php if (isset($_GET['queryDB'])) : ?>

 <table class="table table-striped">
   <thead>
     <tr>
       <th>query</th>
     </tr>
   </thead>

   <tbody>
     <?php foreach ($elencoStudenti as $studente): ?>
     <tr>
       <td>inserti into studenti (nome, cognome, email) values ('<?=$studente?->nome ?>{}</td>
       <td><?=$studente?></td>
       <td><?=$studente?></td>
   </tr>
 <?php endforeach; ?>
   </tbody>

 </table>
<?php endif; ?>

 <?php if (isset($_GET['grid'])) : ?>


      <?php foreach ($elencoStudenti as $studente): ?>
        <?php ++$i; ?>
      <div class="panel col-md-2">
        <div><td><?=$studente->nome?></td></div>
        <div><td><?=$studente->cognome?></td></div>
        <div><td><?=$studente->email?></td></div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>



</div>


<?php include 'footer.php'; ?>
