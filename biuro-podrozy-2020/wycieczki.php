<!DOCTYPE html>
<html>
<head>
	<title>Wycieczki i urlopy</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>
<div id="baner">
	<h1>BIURO PODRÓŻY</h1>
</div>
<div id="blok-lewy">
	<h2>KONTAKT</h2>
	<a href="biuro@wycieczki.pl">napisz do nas</a>
	<p>telefon: 555666777</p>
</div>
<div id="blok-srodkowy">
	<h2>GALERIA</h2>
	<?php

	$polaczenie = mysqli_connect("localhost", "root", "", "egzamin3");

	$sql = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;";

	$wynik = mysqli_query($polaczenie, $sql);

	while ($wiersz = mysqli_fetch_row($wynik)) {
		echo "<img src='$wiersz[0]' alt='$wiersz[1]'>"; 
	}

	mysqli_close($polaczenie);

	?>
</div>
<div id="blok-prawy">
	<h2>PROMOCJE</h2>
	<table>
		<tr>
			<td>Jesień</td>
			<td>Grupa 4+</td>
			<td>Grupa 10+</td>
		</tr>
		<tr>
			<td>5%</td>
			<td>10%</td>
			<td>15%</td>
		</tr>
	</table>
</div>
<div id="blok-dane">
	<h2>LISTA WYCIECZEK</h2>
	<?php

	$polaczenie = mysqli_connect("localhost", "root", "", "egzamin3");

	$sql = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna=1";

	$wynik = mysqli_query($polaczenie, $sql);

	while ($wiersz = mysqli_fetch_row($wynik)) {
		echo $wiersz[0].". ".$wiersz[1].", ".$wiersz[2].", cena: ".$wiersz[3]."<br>"; 
	}

	mysqli_close($polaczenie);

	?>
</div>
<div id="stopka">
	<p>Stronę wykonał: Błażej</p>
</div>
</body>
</html>