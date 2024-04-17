<?php
include_once("dbmsConnection.php");
include_once("mongoDB.php");
include_once("mysql.php");

echo "<h3 style='color: grey; font-family: sans-serif;'> Output Study Case 2 - Open Closed </h3>";
$mysql = new MySQL();
$mongodb = new MongoDB();


$conn = new dbmsConnection();

$conn->connect($mysql);
$conn->connect($mongodb);
