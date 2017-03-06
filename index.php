<?php include 'inc/config.php' ?>


<div id="header">
	<?php include 'header.php' ?>
</div>

<div id="testata">
	<h1><?php echo $title; ?></h1>
</div>

<div id="menu">
<!--è una funzione presente in config-->
<?php creaHeader('hello'); ?>
	<?php include 'menu.php' ?>
</div>

<div id="container">

	<div id="sidebar">
	<?php include 'sidebar.php' ?>
	</div>

	<div id="content">
		<?php include 'sidebar.php' 
		?>
	</div>

</div>

<div id="footer">
	<?php include 'footer.php' ?>
</div>