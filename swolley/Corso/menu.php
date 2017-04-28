<?php 
echo "<ul>";
foreach ($menu_orizzontale as $key => $value) {
	echo "<li>";
	if (substr($key, 0,4) == 'http')
		echo "<a href=\"{$key}\" target='_blank'>".ucfirst($value)."</a>";
	else echo "<a href='?pagina=".$key."'>".ucfirst($value)."</a>";
	echo "</li>";
}
echo "</ul>";



 ?>	
