<!--Errato-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method='post'>
	<input type="number" name="number1" placeholder="inserisci numero"/><br/>
	<input type="number" name="number2" placeholder="inserisci numero"/><br/>
	<input type="number" name="number3" placeholder="inserisci numero"/><br/>

	<input type="submit" />
 </form>

 <?php 

 if ( isset($_POST['number1'])) $num1 = $_POST['number1'];//3
 if ( isset($_POST['number2'])) $num2 = $_POST['number2'];//2
 if ( isset($_POST['number3'])) $num3 = $_POST['number3'];//1

 $temp = 0;
//se sono verificate tutte e tre le condizioni
 if (isset($num1,$num2,$num3)) {
 	
 	for ($i=0; $i < 2; $i++) { 
 		if ($num1 >= $num2) {
 		$temp = $num1;//3
 		$num1 = $num2;//2
 		$num2 = $temp;//3

 			if ($num2 >= $num3) {
 			$temp = $num2;//3
 			$num2 = $num3;//1
 			$num3 = $temp;//3
 	}
 	
 	}
 }

}

echo $num1." ".$num2." ".$num3;

  ?>

</body>
</html>