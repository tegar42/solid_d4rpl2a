<?php
include_once("printerEntryLevel.php");
include_once("printerMidRange.php");
include_once("printerFlagShip.php");


echo "<h3 style='color: grey; font-family: sans-serif;'> Output Study Case 2 - Interface Segregation </h3>";
$prtEnt = new printerEntryLevel();
$prtMid = new printerMidRange();
$prtFs = new printerFlagShip();

echo "<h5 style='color: grey; font-family: sans-serif; margin-bottom: 0;'> Printer Entry Level </h5>";
$prtEnt->cetakKertas();

echo "<h5 style='color: grey; font-family: sans-serif; margin-bottom: 0;'> Printer Mid Range </h5>";
$prtMid->cetakKertas();
$prtMid->scanKertas();

echo "<h5 style='color: grey; font-family: sans-serif; margin-bottom: 0;'> Printer Flag Ship </h5>";
$prtFs->terimaFax();
$prtFs->cetakKertas();
$prtFs->scanKertas();
