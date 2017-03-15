<?php include 'headers.php'; ?>
<!--In questo modo se si digita la apss errata, si torna alla pagina grazie alla funzione-->
<!DOCTYPE html>
<html>
<head>
	<title>Form processing</title>
</head>
<body>

<pre> <!--Mette il testo preformattato-->
<?php 

	/*
	if (isset($_POST['username']))
		$username = $_POST['username']; //stampa i valori inviati
	else $username="";

	if (isset($_POST['password']))
		$password = $_POST['password'];
	else $password = "";
	*/
	//rifacciamo ma più semplice

if (isset($_POST['submit'])){
	$username= isset($_POST['username']) ? $_POST ['username']:"";
	$password= isset($_POST['password']) ? $_POST ['password']:"";

	$loginPage = "form.php";
	$stringa = "";
	// il trim toglie gli spazi prima e dopo la stringa passata
	if (trim($username) == "marco" && $password == "123"){
		$stringa = "Benvenuto ".ucfirst(strtolower($username));
		$_SESSION['username'] = $username;

		//in questo modo scrive il mio nome con la M maiuscola ma prima butta tutte le lettere minuscole quindi se srivo MArco diventa marco e poi MArco. Ovvio che non funziona perchè l'unico username accettato è marco
	} else {
		/*
		$stringa = "Username e password errati"
		.", ritorna al "
		. "<a href='"
		.$loginPage
		."'>"
		."login"
		."</a>.";
		*/
		redirect("form.php");
	}

	echo $stringa;

	echo $_SESSION['username'];
}
 ?>
 </pre>

</body>
</html>