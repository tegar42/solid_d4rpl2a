<?php
include_once("Mahasiswa.php");
include_once("MahasiswaView.php");

echo "<h3 style='color: grey; font-family: sans-serif;'> Output Study Case 2 - Single Responsibility </h3>";
$roku = new Mahasiswa("220502", "roku");
$data = new MahasiswaView();
echo $data->showMahasiswa($roku);
