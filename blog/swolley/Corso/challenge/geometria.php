<?php
function perimetro($figura, $lato1, $lato2, $lato3, $raggio='')
{
	switch($figura)
	{
		case "cerchio":
			$p=2*pi()*$raggio;
			break;
		case "rettangolo":
			$p=2*$lato1+2*$lato2;
			break;
		case "triangolo":
			if($lato1+$lato2>$lato3 && $lato2+$lato3>$lato1 && $lato3+$lato1>$lato2)
			{	
				$p=$lato1+$lato2+$lato3;
			}
			else
			{
				$p=-1;
			}
			break;
	}
	return $p;
}

function area($figura, $lato1, $lato2, $lato3, $raggio)
{
	switch($figura)
	{
		case "cerchio":
			$a=pow($raggio,2)*pi();
			break;
		case "rettangolo":
			$a=$lato1*$lato2;
			break;
		case "triangolo":
			if($lato1+$lato2>$lato3 && $lato2+$lato3>$lato1 && $lato3+$lato1>$lato2)
			{	
				$sp=perimetro($figura, $lato1, $lato2, $lato3)/2;
				$a=sqrt($sp*($sp-$lato1)*($sp-$lato2)*($sp-$lato3));
			}
			else
			{
				$a=-1;
			}
			break;
	}
	return $a;
}

//--------------------------------------------------------------------------//

$lato1=isset($_POST['lato1']) ? $_POST['lato1'] : 0;
$lato2=isset($_POST['lato2']) ? $_POST['lato2'] : 0;
$lato3=isset($_POST['lato3']) ? $_POST['lato3'] : 0;
$raggio=isset($_POST['raggio']) ? $_POST['raggio'] : 0;

if(isset($_POST['figura']) || isset($_POST['shape']))
{
	$figura=isset($_POST['figura']) ? $_POST['figura'] : $_POST['shape'];
	if(!empty($lato1) || !empty($raggio))
	{	
		$p=perimetro($figura, $lato1, $lato2, $lato3, $raggio);
		$a=area($figura, $lato1, $lato2, $lato3, $raggio);
	}
	else
	{
		$p=0;
		$a=0;
	}
}
else
{
	$figura="";
	$p=0;
	$a=0;
}

$plabel=($figura=="cerchio") ? "Circonferenza" : "Perimetro";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Figure geometriche</title>
	<style>
		.esterno{
			text-align: center;
			width:400px;
			left:50%;
			margin-left: -200px;
			position: relative;
			/*z-index: -1000;*/
		}

		nav input[type=submit] {
    		width: 85px;
		}

		.calcola input[type=submit] {
    		width: 200px;
		}
	</style>
</head>
<body>
	<div class='esterno'>
		<fieldset>
			<legend>Calcolo formule geometriche</legend>
			<form method='post' name="figura">
				<nav>
					<input type="submit" name="figura" value="rettangolo" />
					<input type="submit" name="figura" value="triangolo" />
					<input type="submit" name="figura" value="cerchio" />
				</nav>
			</form>
			<br/>
			<?php
			if($figura!="")
			{
				echo "<form method='post' name='dati'>
						<content>
							<div>";
								switch($figura)
								{
									case "cerchio":
										echo "
										<canvas id='cerchio' width='100' height='50'><p>Your browser doesn't support canvas.</p></canvas>
										<script>
											var c = document.getElementById('cerchio');
											var cerchio = c.getContext('2d');
											cerchio.beginPath();
											cerchio.arc(50,25,24,0,2*Math.PI);
											cerchio.lineWidth = 1;
											cerchio.strokeStyle = '#000000';
											cerchio.stroke();
										</script>
										<br/><br/>
										<label>Raggio: </label><input type='number' name='raggio' min='0.1' step='0.1' placeholder='Inserisci misura raggio' /> cm</br>";
										break;
									case "rettangolo":
										echo "
										  <canvas id='rettangolo' width='100' height='50'><p>Your browser doesn't support canvas.</p></canvas>
										  <script>
											var t = document.getElementById('rettangolo');
											var rett = t.getContext('2d');
											rett.beginPath();
											rett.moveTo(1,1);
											rett.lineTo(99, 1);
											rett.lineTo(99, 49);
											rett.lineTo(1, 49);
											rett.closePath();
											rett.lineWidth = 1;
											rett.strokeStyle = '#000000';
											rett.stroke();
										  </script>
										  <br/><br/>
										  <label>Lato 1: </label><input type='number' name='lato1' min='0.1' step='0.1' placeholder='Inserisci misura lato1' /> cm<br/>
										  <label>Lato 2: </label><input type='number' name='lato2' min='0.1' step='0.1' placeholder='Inserisci misura lato2' /> cm<br/>";
										break;
									case "triangolo":
										echo "
										  <canvas id='triangolo' width='100' height='50'><p>Your browser doesn't support canvas.</p></canvas>
										  <script>
											var t = document.getElementById('triangolo');
											var triang = t.getContext('2d');
											triang.beginPath();
											triang.moveTo(1,1);
											triang.lineTo(99, 49);
											triang.lineTo(1, 49);
											triang.closePath();
											triang.lineWidth = 1;
											triang.strokeStyle = '#000000';
											triang.stroke();
										  </script>
										  <br/><br/>
										  <label>Lato 1: </label><input type='number' name='lato1' min='0.1' step='0.1' placeholder='Inserisci misura lato1' /> cm<br/>
										  <label>Lato 2: </label><input type='number' name='lato2' min='0.1' step='0.1' placeholder='Inserisci misura lato2' /> cm<br/>
										  <label>Lato 3: </label><input type='number' name='lato3' min='0.1' step='0.1' placeholder='Inserisci misura lato3' /> cm<br/>";
										break;
								}
								/*if($figura!="cerchio")
								{	
									echo "<label>Lato 1: </label><input type='number' name='lato1' min='0.1' step='0.1' placeholder='Inserisci misura lato1' /> cm<br/>
										  <label>Lato 2: </label><input type='number' name='lato2' min='0.1' step='0.1' placeholder='Inserisci misura lato2' /> cm<br/>";
									if($figura=="triangolo")
									{
										echo "<label>Lato 3: </label><input type='number' name='lato3' min='0.1' step='0.1' placeholder='Inserisci misura lato3' /> cm<br/>";
									}
								}
								else
								{
									echo "<label>Raggio: </label><input type='number' name='raggio' min='0.1' step='0.1' placeholder='Inserisci misura raggio' /> cm</br>";
								}*/
								echo "<input type='hidden' name='shape' value='".$figura."'></input>";
						echo "</div>
							  <br/>";
						echo "<div class='calcola'>
								<input type='submit' name='calcola' value='calcola' />
							  </div><br/>";
			}
			if($p!=0)
			{
						echo "<div>";
								if($p!=0)
								{
									if($p!=-1)
									{
										echo $plabel." = ".round($p,2)." cm<br>
										Area = ".round($a,2)." cm";
									}
									else
									{
										echo "Dati inseriti non validi";
									}
								}
						echo "</div>";
			}
				  echo "</content>
					</form>";
			?>
		</fieldset>
	</div>
</body>
</html>