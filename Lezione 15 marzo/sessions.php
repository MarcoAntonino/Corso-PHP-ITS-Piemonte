<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>sessioni</title>
</head>
<body>

<?php $nome = $_SESSION['nome']='marco'; 


	echo $nome;
?>

</body>
</html>