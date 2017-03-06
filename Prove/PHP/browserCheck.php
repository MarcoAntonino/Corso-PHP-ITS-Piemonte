
<?php  
	echo $_SERVER["HTTP_USER_AGENT"];
	echo "<br>";
	/*
	Serve a verificare il browser tuilizzato dall'utente. L'utente, quando manda un richiesta, manda anche il suo browser nella variabile $_SERVER e di conseguenza il nsotro server la legge.
	*/
	if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !==false) {
		echo 'Stai usando Internet Explorer <br/>';
	}
	else{
		echo 'Non stai usando IE';
	}
?>