<?php
include_once("MobilListrik.php");
include_once("Mobil.php");

echo "<h3 style='color: grey; font-family: sans-serif;'> Output Study Case 2 - Liskov Substitution </h3>";
$emobil = new MobilListrik();
$mobil = new Mobil();

$emobil->Baterai();
$mobil->BBM();
