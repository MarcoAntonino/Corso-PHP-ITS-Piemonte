<?php
echo "<h1>Matrici</h1>";

$calendario=[
	["", "lunedì", "martedì", "mercoledì", "giovedì", "venerdì", "sabato", "domenica"],
	["mattino", "", "", "", "", "", "", ""],
	["pomeriggio", "Java", "", "PHP Programming", "", "", "", ""],
	["sera", "", "", "", "", "", "", ""],
	];
?>

<table class='calendario'>
	<?php
	for($i=0;$i<count($calendario); $i++)
	{
	?>
		<tr>
			<?php
			for($j=0; $j<count($calendario[$i]); $j++)
			{
			?>
				<td> <?= $calendario[$i][$j]; /*<= > equivale ad apertura di ?php + echo*/ ?> </td>	
			<?php
			}
			?>
		</tr>
	<?php 
	}
	?>
</table>