<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$calendario = [
				["lunedì", "martedì", "mercoledì", "giovedì", "venerdì", "sabato", "domenica", ],
				["mattino","", "","", "","", "","",],
				["pomeriggio","", "PHP Programming","", "","", "","",],
				["sera","", "","", "","", "","",],
	];
	
?>

<table>

 
<?php 
for ($i=0; $i < count($calendario) ; $i++) { 
	//stampo la riga tr
}
 ?>

 <tr>
 	<?php
 		for ($j=0; $j < count($calendario[$i]); $i++) { 
 	 		?>
 		 	
 		 	<td><?= $calendario[$i][$j]?></td>
 		 	<!-- Ho messo un blocco di php dentro ad html.
 		 	Equivale a un'apertura di ?php echo*/-->
 		 	<?php
 		 	} 
 		 	 ?> 


 </tr>
 <?php
 } 
 ?>

 </table>



 

</body>
</html>

<?php 
 ?>