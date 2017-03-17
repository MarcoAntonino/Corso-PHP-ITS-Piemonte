<!DOCTYPE html>
<html>
<head>
	<title>prova</title>
</head>
<body>

<?php function perimetroTriEqui($lato){

		echo "Perimetro: ".$lato*3;
}

function areaTri($base, $altezza)
	{
		
		echo "Area: ".($base*$altezza)/2;
	}

function perimetroTriIso($base, $lato)
	{
		echo "Perimetro: ".($base+($lato*2));
	}

function perimetroTriSca($lato1, $lato2, $lato3)
	{
		echo "Perimetro: ".($lato1+$lato2+$lato3);
	}

 ?>
<form action="form_geomessing.php" method="post">
<fieldset>
<legend>Risultati</legend>
	
<?php 

switch ($_POST["figura"]) {
	case 'triangolo':
		switch ($_POST["tipo"]) {
			case 'equilatero':
				perimetroTriEqui($_POST["baseTri"]);
				echo "<br>";
				areaTri($_POST["baseTri"], $_POST["altezzaTri"]);
				
				break;
			case 'isoscele':
				perimetroTriIso($_POST["baseTri"], $_POST["lato2"]);
				echo "<br>";
				areaTri($_POST["baseTri"], $_POST["altezzaTri"]);
				
				break;
			case 'scaleno':
				perimetroTriSca($_POST["baseTri"], $_POST["lato2"], $_POST["lato3"]);
				echo "<br>";
				areaTri($_POST["baseTri"], $_POST["altezzaTri"]);
				
				break;
			
			default:
				# code...
				break;
		}
		break;
	case 'rettangolo':
		
		break;
	case 'cerchio':
		
		break;
	
	default:
		# code...
		break;
}

 ?>
</fieldset>
</form>	
</body>
</html>