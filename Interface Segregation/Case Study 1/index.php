<?php
include_once("Kubus.php");
include_once("Persegi.php");

echo "<h3 style='color: grey; font-family: sans-serif;'> Output Study Case 1 - Interface Segregation </h3>";
$box = new Kubus();
$rect = new rectangle();

echo "<h5 style='color: grey; font-family: sans-serif; margin-bottom: 0;'> Kubus </h5>";
$box->calculateVolume();
$box->calculateArea();

echo "<h5 style='color: grey; font-family: sans-serif; margin-bottom: 0;'> Persegi </h5>";
$rect->calculateArea();
