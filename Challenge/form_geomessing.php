<!DOCTYPE html>
<html>
<head>
	<title>Geomessing</title>
</head>
<body>
<?php


switch ($_POST["figura"]) {
	case 'triangolo':
		$area=($base*$altezza)/2;
		break;
	case 'rettangolo':
		$area=$base*$altezza;
		break;
	case 'cerchio':
		$area=$raggio*$raggio*pi();
		break;
	
	default:
		# code...
		break;
}

echo "L'area del ".$_POST["figura"]." è ".$area;



 ?>
</body>
</html>