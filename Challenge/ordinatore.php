<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Ordinatore</h1>

<form action="" method="post">
<fieldset>
<legend>Area di lavoro:</legend>

<label for="valore1">Valore 1</label>
<input type="number" name="valore1" placeholder="Inserire il valore qui" />
<br>
<label for="valore1">Valore 2</label>
<input type="number" name="valore2" placeholder="Inserire il valore qui" />
<br>
<label for="valore1">Valore 3</label>
<input type="number" name="valore3" placeholder="Inserire il valore qui" />

<input type="submit" value="Ordina">
</body>
</html>

<?php 
$val1 = $_POST['valore1']?$_POST['valore1']:0;
$val2 = $_POST['valore2']?$_POST['valore2']:0;
$val3 = $_POST['valore3']?$_POST['valore3']:0;

$primo="uno";
$secondo="due";
$terzo="tre";

if ($val1<$val2 && $val1<$val3) {
	 global $primo, $secondo, $terzo;
	 $primo =  $val1;

	 if ($val2<$val3)
	 {
	 	$secondo = $val2;
	 	$terzo = $val3;
	 }
	 else{
	 	$secondo = $val3;
	 	$terzo = $val2;
	 }
}
else if ($val2<$val1 && $val2<$val3) {
	$primo = $val2;

	if ($val1<$val3)
	 {
	 	$secondo = $val1;
	 	$terzo = $val3;
	 }
	 else{
	 	$secondo = $val3;
	 	$terzo = $val1;
	 }

}
else if ($val3<$val1 && $val3<$val2) {
	$primo = $val3;

	if ($val1<$val2)
	 {
	 	$secondo = $val1;
	 	$terzo = $val2;
	 }
	 else{
	 	$secondo = $val2;
	 	$terzo = $val1;
	 }
}

echo $primo." ".$secondo." ".$terzo;
 ?>