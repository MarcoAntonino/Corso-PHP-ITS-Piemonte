<?php 

	/*
	Cpndizioni in php: 3 costrutti
	
	if, if...else, if ...elseif...else
	
	switch case

	operatore ternario

	*/
$count = -1;

//if
	if ($count>0)
	{
		echo"è maggiore di zero";
	}
	else if ($count<0)
	{
		echo"è minore di zero";
	}

	else {
		echo"è uguale a zero";
	}

//switch case è più elegante 

	switch ($count) {
		case 0:
			echo"è uguale a zero";
			break;
		
		default:
			echo "È diverso da zero";
			break;
	}

//operatore ternario

	echo "Il valore è ";
	$valoreCount = ($count > 0) ? "è maggiore di zero" : "È minore o uguale a zero";
	echo $valoreCount;

 ?>