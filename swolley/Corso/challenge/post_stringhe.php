<?php
//------------------------- array frasi ---------------------------//
$saluto1=[
	"Ciao!", 
	"Ehila'.",
	"Buongiorno.",
	];

$saluto1bis=[
	"Farei due parole ma non so il tuo nome.",
	"Come ti chiami?", 
	"Io sono Server e tu?", 
	"Piacere, Server. Tu chi sei?",
	];

$saluto2=[
	", sembri davvero una brava persona, ma purtroppo non mi hanno insegnato a dire altro al momento.",
	", scusa se tronco, ma non so che altro dire.",
	", mi avessero programmato qualche altra frase potevamo continuare, ma devo proprio salutarti a sto punto.",
	", scusami ma sono un po' a corto di parole.",
	", si è fatto tardi, devo proprio scappare.",
	];

$saluto2bis=[
	"Ciao ciao.",
	"Mi dispiace, devo per forza salutarti.",
	"Stammi bene.",
	"Ci vediamo.",
	"Ciao né.",
	"Fai il bravo, alla prossima.",
	];

$capito=[
	"Non ho capito.",
	"Puoi ripetere per favore?",
	"Non vedo scritto nulla.",
	"Mi sa che hai cliccato per sbaglio",
	];

$salute1=[
	", come stai?",
	", come andiamo?",
	", ciao. Com'e'?",
	];

$salute1bis=[
	"E' un piacere conoscerti!",
	"",
	"Tutto bene?",
	];

$salute2=[
	"Oh bene son contento!",
	"Fantastico.",
	"Beato te, io sono stanco: ho processato tanti bit.",
	"Mi mette il buon umore già solo sentirtelo dire.",
	];

$salute2bis=[
	"E' un'ottima giornata, quindi!",
	"Qualche esame andato bene?",
	"Tu ne quanti te ne smazzi al millisecondo?",
	"Stasera esci con gli amici?",
	];

$salute3=[
	"Dai, cerca di vedere il bicchiere mezzo pieno.", 
	"Di sicuro c'e' chi sta peggio.",
	"Non si può esser sempre al massimo.", 
	"Forza e coraggio, stasera fatti una bella dormita.",
	];

$salute3bis=[
	"Che ne pensi di riposarti un po'?",
	"Da domani si ricomincia di nuovo di buon umore.",
	"Pensa me che parlo tutto il giorno in esadecimale. Te la cavi con i numeri?",
	"Oggi va così, domani magari vinci alla lotteria. La fanno ancora a fine anno?",
	];

$salute4=[
	"Non dirmi cosi', mi preoccupo.",
	"Accidenti, speriam domani vada meglio.", 
	"Sarà il cambio stagionale.", 
	"E' un peccato, io sono in piena forma oggi!",
	"Dai non mi dire cosi'. Che sara' mai successo?",
	];

$salute4bis=[
	"Cosa è andato storto?", 
	"Toccato il fondo non si può che risalire, giusto?",
	"Magari basta un po' di relax.", 
	"Credi negli astri? Sarà qualche strano allineamento dei pianeti?",
	];


$domande=[
	$saluto1[rand(0,count($saluto1)-1)]." ".$saluto1bis[rand(0,count($saluto1bis)-1)],
	$salute1[rand(0,count($salute1)-1)]." ".$salute1bis[rand(0,count($salute1bis)-1)],
	$salute2[rand(0,count($salute2)-1)]." ".$salute2bis[rand(0,count($salute2bis)-1)],
	$salute3[rand(0,count($salute3)-1)]." ".$salute3bis[rand(0,count($salute3bis)-1)],
	$salute4[rand(0,count($salute4)-1)]." ".$salute4bis[rand(0,count($salute4bis)-1)],
	$saluto2[rand(0,count($saluto2)-1)]." ".$saluto2bis[rand(0,count($saluto2bis)-1)],
];

$risposte=[
	2=>"Benissimo",
	3=>"Piu' o meno",
	4=>"Male",
];
end($domande);
$ultimo=key($domande);
//------------------------- pagina ---------------------------//
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post stringa da form</title>
</head>
<body>
<?php
	$frase=isset($_POST['frase']) ? $_POST['frase']."<br>" : "";
	$indice=(isset($_POST['indice'])) ? $_POST['indice'] : 0;

	if(isset($_POST['salute']))
	{
		$indice=$_POST['salute'];
		$testo=$risposte[$indice];
	}
	else if(isset($_POST['testo']) && !empty($_POST['testo']))
		{
			$testo=ucfirst(strtolower($_POST['testo']));
	 		$indice=($indice<2) ? $indice+1 : 5;
		}
		else
		{
			$testo="";
			if($frase!="" && $testo=="")
				$frase.="-Server: ".$capito[rand(0,count($capito)-1)]."<br>";
		}

	if($indice==1 && $testo!="")
		$nome=$testo;
	else if(isset($_POST['nome']))
		{
			if(isset($indice))
				$nome=$_POST['nome'];
		}
		else 
		{
			$nome="Anonimo";
			$frase.=($frase!="") ? "-".$nome.": " : "";
		}

	$frase.=(isset($nome) && $frase!="") ? "-".$nome.": " : "";
	$frase.=$testo."<br>-Server: ";
	$frase.=($indice==1 || $indice==$ultimo) ? $nome : "";
	$frase.=$domande[$indice];

	echo "<span>".$frase."</span>";
?>
	<br/>
		<form method="post" action="">
			<?php 
			if($indice<$ultimo)
				echo "-".$nome.": ";
			switch($indice)
			{
				case 0:
				case 2:
				case 3:
				case 4:
					echo "<input type='text' name='testo' placeholder='Scrivi e poi premi Invia' />";
					break;
				case 1:
					echo "<select name='salute'>";
						foreach($risposte as $key=>$value)
							echo "<option value='".$key."' />".$value;
					echo "</select>";
					break;
			}
	
			echo "<input type='hidden' name='indice' value='".$indice."' />";
			if(isset($nome))
				echo "<input type='hidden' name='nome' value='".$nome."' />";
			echo "<input type='hidden' name='frase' value='".$frase."' />";
			if($indice<$ultimo)
				echo "<input type='submit' name='submit' value='Invia' />";
			?>
		</form>

</body>
</html>