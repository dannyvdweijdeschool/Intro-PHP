<?php
	include "../Opdracht 2/Header.html"; 
    include "../Opdracht 2/Menu.html";

	define("spel", "Schaken");
	define("jaofnee", "ja");
	define("getal", "5");

	if (spel == "Yathzee") {
		if (jaofnee == "ja"){
			if (getal > 15 && getal < 30){
				echo "Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd.";
			}elseif (getal < 15 || getal > 30){ 
				echo "Je wilt Yathzee spelen want dat vind je gewoon leuk.";
			}
		}elseif (jaofnee == "nee"){
			if (getal > 100){
				echo "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien.";
			}elseif (getal <= 100){
				echo "Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen.";
			}
		}
	}elseif (spel == "Monopoly"){
		if (jaofnee == "ja"){
			if (getal == 1){
				echo "Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg.";
			}elseif (getal > 1){ 
				echo "Je wilt Monopoly spelen want je houd er van om iedereen blut te maken.";
			}
		}elseif (jaofnee == "nee"){
			if (getal == 2 || getal > 120){
				echo "Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur.";
			}else{
				echo "Je wilt geen Monopoly spelen want je houd niet van hotels.";
			}
		}
	}elseif (spel == "Schaken"){
		if (jaofnee == "ja"){
			if (getal == 2){
				echo "Je wilt Schaken want je vindt zwart en wit leuk.";
			}elseif (getal <> 2){ 
				echo "Je wilt Schaken want je denk slimmer dan mij te zijn.";
			}
		}elseif (jaofnee == "nee"){
			if (getal == -1){
				echo "Je wilt echt niet Schaken.";
			}else{
				echo "Je wilt gewoon niet Schaken.";
			}
		}
	}

	include "../Opdracht 2/Footer.html";
	//1: ja je zou arrays met de antwoorden kunnen maken 
	//2: een var maken met alle antwoorden er in en dan inplaats van de echo met het antwoord er het nummer plaatsen van het antwoord dat je nodig hebt. Dit doorsturen naar een functie en hem naar laten echoen.
	//3: Het kan wel alleen zou het meer werk zijn en het minder goed leesbaar maken.
	?>

	<style type="text/css">
		footer{
			margin-top: 80vh;
		}
	</style>