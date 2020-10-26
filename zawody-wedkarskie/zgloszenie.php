<?php

$polaczenie = mysqli_connect("localhost", "root", "", "wedkarstwo");

$lowisko = $_POST["lowisko"];
$data_zawodow = $_POST["data"];
$sedzia = $POST["sedzia"];

$sql = "INSERT INTO zawody_wedkarskie(Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES ('0', '$lowisko', '$data_zawodow', '$sedzia');";

$wynik = mysqli_query($polaczenie, $sql);

mysqli_close();

?>