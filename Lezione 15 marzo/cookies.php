<?php 
	$nome = "test";
	$valore = "valore del cookie";
	$scadenza = (60*60*24*7);
	setcookie($nome, $valore , $scadenza);
	//l'ultim ocampo setta la vita del cookie in secondi, in questo modo lo facciamo durare 7gg
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>cookies</title>
</head>
<body>
<h1>test cookie</h1>
<pre>
	<?php 
	//print_r($_COOKIE);


	 ?>


</pre>

<?php
	
	/*if (isset($_cookie['test']))
		echo $test = $_COOKIE['test']; 
*/
	$test=isset($_cookie['test']) ? $_COOKIE['test'] : "";

 ?>

 <h1><?= $test ?></h1>


</body>
</html>