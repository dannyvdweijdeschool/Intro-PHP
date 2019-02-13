<?php 
	$time = date(G) + 1;
	if($time >= 6 && $time < 12){
		$image = "Aangeleverd/morning.png";
		$daytime = "morgen";
	}elseif ($time >= 12 && $time < 18){
		$image = "Aangeleverd/afternoon.png";
		$daytime = "middag";
	}elseif ($time >= 18 && $time < 23){
		$image = "Aangeleverd/evening.png";
		$daytime = "avond";
	}elseif ($time >= 0 && $time < 6){
		$image = "Aangeleverd/night.png";
		$daytime = "nacht";
	}
	date_default_timezone_set("Europe/Amsterdam");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
	<meta charset="utf-8">
	<title>Opdracht 1</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		#dag{
			background-image: url(<?php echo $image ?>);
			background-size: 98.9vw 85vh;
			background-repeat: no-repeat;
			height: 85vh;
		}
		#tijdstip{
			text-align: center;
			position: relative;
			top: 30vh;
			color: white;
			font-size: 60px;
			font-family: 'Charm', cursive;
		}
		#tijd{
			text-align: center;
			position: relative;
			top: 30vh;
			color: white;
			font-size: 40px;
			font-family: 'Charm', cursive;
		}
	</style>
</head>
<body>
	<?php include "../Opdracht 2/Header.html"; 
		  include "../Opdracht 2/Menu.html";
	?>
	<div id="dag">
		<h1 id="tijdstip">Goede <?php echo $daytime ?></h1>
		<p id="tijd">Het is nu <?php echo date("H:i") ?></p>
	</div>
	<?php include "../Opdracht 2/Footer.html" ?>
</body>
</html>