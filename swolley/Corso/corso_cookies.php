<?php 
	//setcookie("nome del cookie", "valore del cookie", "durata del cookie");
	$nome="test";
	$valore="valore del cookie";
	$scadenza=time() + (60*60*24*7);	//in secondi a partire da time()
	setcookie($nome, $valore, $scadenza);
	//per cancellarlo o gli do una scadenza nel passato o gli setto NULL come valore
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
	<h1>Test Cookies</h1>
	<pre>
	<?php //print_r($_COOKIE);?>
	</pre>

	<?php 
		$test= isset($_COOKIE['test']) ? $_COOKIE['test'] : "";
		echo "<h2>".$test."</h2>";
	?>
</head>
<body>
</body>
</html>