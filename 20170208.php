<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  echo $_SERVER['REMOTE_HOST'];
			echo '<br>';		
			echo $_SERVER['REMOTE_USER'];		
			echo '<br>';

			echo count($_SERVER);

			$lunghezza = count($_SERVER)

			foreach ($_SERVER as $key => $value) {
				echo $key
					." "
					.$value
					."<br>";

			}
 ?>
</body>
</html>