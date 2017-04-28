<?php
include 'inc/config.php';
include 'inc/functions.php';
echo "<br><br><br><br><br><br>inclusione riuscita";
?>

<div id="header">
	<?php include 'header.php';?>
</div>

<div id="top">
	<div id="testata">
		<h1><?php echo $title; ?></h1>
	</div>

	<div id="menu">
		<?php include 'menu.php' ?>
	</div>
</div>

<div id="container">
	<div id="sidebar">
		<?php include 'content_sidebar.php' ?>
	</div>
	<div id="content">
		<?php include 'content.php' ?>
	</div>
</div>

<div id="footer">
<?php include 'footer.php' ?>
</div>
