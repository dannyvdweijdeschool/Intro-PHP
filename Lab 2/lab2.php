<?php
	define(hello, "Hello world!");
	$hello = "Learing PHP";
	$hello2 = "Hello";
	$world = " world!";
	$arr = array("Hello", "world!")
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<title>Lab 2</title>
	<style type="text/css">
		footer{
			margin-top: 52vh;
		}
	</style>
</head>
<body>
	<?php include "../Opdracht 2/Header.html"; 
		  include "../Opdracht 2/Menu.html";
	?>
	<h1><?php echo "Hello world!";?></h1>
	<h1><?php echo hello;?></h1>
	<h1><?php echo $hello;?></h1>
	<?php $hello = "Hello world!" ?>
	<h1><?php echo $hello;?></h1>
	<h1><?php echo $hello2 . $world;?></h1>
	<h1><?php echo implode(" ", $arr);?></h1>
	<?php include "../Opdracht 2/Footer.html" ?>
</body>
</html>
