<?php 
	$random1 = rand(1,10);
	$random2 = rand(1,10);
	$randomawnser = array($random1 * $random2 , $random1 + $random2, $random1 - $random2, $random1 / $random2);
	$zes = 6;
	$getallen = array(3,5,8,12);
 ?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<title>Lab 3</title>
</head>
<body>
	<?php 

	include "../Opdracht 2/Header.html"; 
	include "../Opdracht 2/Menu.html";

	echo $random1 . " x " . $random2 . " = " . $randomawnser[0];
	?>
	</br>
	<?php  
	echo $random1 . " + " . $random2 . " = " . $randomawnser[1];
	?>
	</br>
	<?php  
	echo $random1 . " - " . $random2 . " = " . $randomawnser[2];
	?>
	</br>
	<?php  
	echo $random1 . " : " . $random2 . " = " . $randomawnser[3];
	?>
	</br></br>
	<?php
		for($i = 1; $i <= 10; $i++){
			echo $i . " x 6 = " . $i * 6 . "</br>";
		}
	?>
	</br></br>
	<?php
	function tafel($getalzes){
		for($i = 1; $i <= 10; $i++){
			echo $i . " x " . $getalzes . " = " . $i * $getalzes . "</br>";
		}echo "</br>";
	}
	function tafels($tafelgetallen){
		foreach($tafelgetallen as $value){
			for($i = 1; $i <= 10; $i++){
				echo $i . " x " . $value . " = " . $i * $value . "</br>";
			}echo "</br>";
		}
	}
	tafel($zes);
	tafels($getallen);
	include "../Opdracht 2/Footer.html" 
	?>
</body>
</html>