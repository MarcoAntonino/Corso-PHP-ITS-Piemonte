<!DOCTYPE html>
<!--Crea una pagina web contentente un form per selezionare una figura geometrica primitiva (cerchio, rettangolo, triangolo), passare gli attributi principali (raggio, base, altezza, ...)

ricevi i valori inviati via post e calcola area e perimetro utilizzando le funzioni custom-->
<html>
<head>
	<title>Form geometrico</title>
</head>
<body>

	

<form action="" method="post">
	<fieldset> 
		<legend>Scegli la tua figura geometrica</legend>
		<input type="radio" name="figura" value="triangolo">Triangolo
		<select name="tipo">
			<option value="equilatero" selected>equilatero</option>
			<option value="isoscele">isoscele</option>
			<option value="scaleno">scaleno</option>
		</select><br>
		<input type="number" name="baseTri" placeholder="base">
		<input type="number" name="altezzaTri" placeholder="altezza">
		<input type="number" name="lato2" placeholder="lato2">
		<input type="number" name="lato3" placeholder="lato3"><br>
		
		<input type="radio" name="figura" value="rettangolo">Rettangolo<br>
		<input type="number" name="baseRett" placeholder="base">
		<input type="number" name="altezzaRett" placeholder="altezza"><br>
		
		<input type="radio" name="figura" value="cerchio">Cerchio<br>
		<input type="number" name="raggio" placeholder="raggio"><br><br>
		
		<input type="submit" name="calcola" value="Calcola">
		
	</fieldset>
</form>

<?php 

switch ($_POST["figura"]) { //se imposto isset qui, quando cerco di calcolare i dati di triangolo e rettangolo, mi restituisce 0
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
		perimetroRett($_POST["baseRett"], $_POST["altezzaRett"]);
		echo "<br>";
		areaRett($_POST["baseRett"], $_POST["altezzaRett"]);
		
		break;
	case 'cerchio':
		circonferenza($_POST["raggio"]);
		echo "<br>";
		areaCerchio($_POST["raggio"]);

		
		break;
	
	default:
		# code...
		break;
}

function perimetroTriEqui($lato){

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


function areaRett($base, $altezza)
{
	echo "Area: ".($base*$altezza);

}

function perimetroRett($base, $altezza)
{
	echo "Perimetro: ".($base+$altezza)*2;
}

function circonferenza($raggio)
{
	echo "Circonferenza: ".number_format($raggio*2*pi(),2,',',' ');
}

function areaCerchio($raggio)
{
	echo "Area: ".number_format($raggio*$raggio*pi(),2,',',' ');
}




 ?>


</body>
</html>