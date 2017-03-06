<!--CORREZIONE IN CLASSE-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Calcolatrice</h1>

	<form action="" method="post">
<!--Action sarà vuoto, così si torna su QUESTA pagina-->
<!--Il FORM non si legge nella pagina caricata dal browser-->
	<fieldset>
<!--Mette un bordino filettato per racchiudere una parte di codice-->	
	<legend>Personalia:</legend>
<!---->
	<label for="valore1">Valore</label>
	<!--È buona norma mettere la label-->
	<input type="number" name="valore1" placeholder="Inserire il valore qui" />
<!--Se non è disponibile un tag chiusura, è buona norma indicare che il tag finisce sulla stssa riga. Lo richiede il xml-->
	<label for="valore2">Valore</label>
	<input type="number" name="valore2" placeholder="Inserire il valore qui"/>

	<label for="operazione">Operazioni</label>
	<input type="radio" name="operazione" value="addizione">
	<label for="operazione">+</label>
	<input type="radio" name="operazione" value="sottrazione">
	<label for="operazione">-</label>
	<input type="radio" name="operazione" value="moltiplicazione">
	<label for="operazione">*</label>
	<input type="radio" name="operazione" value="divisione">
	<label for="operazione">/</label>
	</fieldset>

	<input type="submit" value="calcola">

	</form>
<?php 

	//error_reporting(E_ALL);
	$val1 = $_POST['valore1']?$_POST['valore1']:0;
	$val2 = $_POST['valore2']?$_POST['valore2']:0;
	$operazione = $_POST['operazione']?$_POST['operazione']:0;
     
	include '../inc/config.php';
	$calcolo = calcolaValori($val1, $val2, $operazione);



	if (is_numeric($calcolo)){
		echo "<h2>Il risultato è ".$calcolo."</h2>";
	}

	

 ?>

</body>
</html>