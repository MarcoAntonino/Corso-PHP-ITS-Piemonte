<!--<h1>Menu</h1>-->

<?php
if(isset($_GET['pagina']))
{	
	switch($_GET['pagina'])
	{
		case 'studenti':
			include "studenti.php"; 
		break;
		case 'due':
			echo "<ul>";
			foreach ($menu_corso as $key => $value)
				echo "<li><a href='".$value."'>".ucfirst($key)."</a></li>";
			echo "</ul>";
			break;
		case 'sfide':
			echo "<ul>";
			foreach ($menu_sfide as $key => $value)
				echo "<li><a href='".$value."'>".ucfirst($key)."</a></li>";
			echo "</ul>";
			break;
		case 'giochi':
			echo "<ul>";
			foreach ($menu_giochi as $key => $value)
				echo "<li><a href='".$value."'>".ucfirst($key)."</a></li>";
			echo "</ul>";
			break;
	}

}

?>