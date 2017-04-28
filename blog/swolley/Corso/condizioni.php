<?php
echo "<h1>Condizioni</h1>";
//condizioni in php

//if, if...else, if...elseif...else
$count=0;

if($count >0)
	echo "è maggiore di zero";
elseif ($count<0)
		echo "è minore di zero";
	else
		echo "è uguale a zero";

//switch case
echo "<br/><br/>";
switch ($count) {
	case 0:
		echo "è uguale a zero";
		break;
	
	default:
		echo "è diverso da zero";
		break;
}

//operatore ternario
echo "<br/><br/>";
echo "il valore è ";
$valorecount=($count>0 ? "maggiore di zero" : "minore o uguale a zero");
echo $valorecount;
?>