<?php
include_once("persegi.php");
include_once("perhitunganPersegi.php");

echo "<h3 style='color: grey; font-family: sans-serif;'> Output Study Case 1 - Single Responsibility </h3>";
$kotak = new persegi(5);

$calculator = new PenghitungPersegi();
$luaspersegi = $calculator->hitungLuas($kotak);
echo "Luas Persegi = " . $luaspersegi;
