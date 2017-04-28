<!DOCTYPE html>
<html>
<head>
	<title>Calendario lezioni</title>
	<style type="text/css">
		.box{width:50px;
			height:50px;
			float: left;
			border: 1px solid black;
		}
		.red{ background-color: red; }
		.clear{clear: left;}
	</style>
</head>
<body>
<?php

	$orelezione=4;
	$totaleore=110;
	$lezioneoggi=10;
	$numlezioni=$totaleore/$orelezione;

	for($i=0, $e=1; $i<$numlezioni; $i++, $e++)
	{
		$classe = ($e<=$lezioneoggi) ? "red" : "";
		echo "<div class='box {$classe}'>$e</div>";
		if($e%6==0)
			echo "<div class='clear'></div>";
	}

?>
</body>
</html>