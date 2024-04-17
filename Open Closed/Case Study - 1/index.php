<?php
include_once("PembayaranCustomer.php");
include_once("Debit.php");
include_once("Cash.php");
include_once("Credit.php");

echo "<h3 style='color: grey; font-family: sans-serif;'> Output Study Case 1 - Open Closed </h3>";
$debit = new Debit();
$cash = new Cash();
$kredit = new Credit();

$bayar = new PembayaranCustomer();

$bayar->menerimaPembayaran($debit);
$bayar->menerimaPembayaran($cash);
$bayar->menerimaPembayaran($kredit);
