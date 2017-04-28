<?php
if(isset($_POST['nome']))
{
	$nome=$_POST['nome'];
	$cognome=$_POST['cognome'];
	$email=$_POST['email'];
	echo "<p>Studente:</p>";
	echo "<p>Nome: ".$nome."<br/>";
	echo "<p>Cognome: ".$cognome."<br/>";
	echo "<p>Email: ".$email."</p>";
}
else
{
	echo "<p>Selezionare uno studente dalla lista per visualizzare i dati estesi.</p>";
}
?>