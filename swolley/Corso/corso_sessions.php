<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form per invio dati</title>
</head>
<body>

<?php if(!isset($_SESSION['username'])) 
	  { 
?>
		<form method="post" action="?pagina=due&argomento=sessions_processing">
			Nome utente: <input type="text" name="username" /><br/>
			Password: <input type="password" name="password" /><br/>
			<input type="submit" name="submit" value="Fai login" />
		</form>
<?php 
	  }
	  else 
	  	echo "Ciao ".ucfirst(strtolower($_SESSION['username'])); 
?>
</body>
</html>