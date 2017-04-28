<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form processing</title>
</head>
<body>
<?php
	if(isset($_POST['submit']))	//se arrivo dal form
	{
		/*if(isset($_POST['username']))
			$username=$_POST['username'];
		else $username="";
		if(isset($_POST['password']))
			$password=$_POST['password'];
		else $password;*/

		//stessa cosa di sopra scritta con operatori ternari
		$username=isset($_POST['username']) ? $_POST['username'] : "";
		$password=isset($_POST['password']) ? $_POST['password'] : "";
		$loginPage="?pagina=due&argomento=form";
		$stringa="";

		if(trim($username)=="SWOLLEY" && $password=="666")	//trim leva spazi bianchi da inizio e fine stringa
		{
			$stringa="Benvenuto ";
			$_SESSION['username']=$username;
		}
		else
		{
			$stringa="username o password errati, ritorna al <a href='".$loginPage."'>login</a>";
		}

		echo $stringa;
		if(isset($_SESSION['username']))
			echo ucfirst(strtolower($_SESSION['username']));
	}
	else
	{
		redirect("?pagina=due&argomento=form");
	}
?>
</body>
</html>