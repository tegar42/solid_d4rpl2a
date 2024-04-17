<?php
include_once("KipasAngin.php");
include_once("Lampu.php");
include_once("Saklar.php");

echo "<h3 style='color: grey; font-family: sans-serif;'> Output Study Case - Dependency Inversion </h3>";
$gmc = new kipasAngin();
$gmcBtn = new Saklar($gmc);

$lamp = new lampu();
$lampBtn = new Saklar($lamp);

$gmcBtn->berubah();
echo "<br>";
$lampBtn->berubah();
