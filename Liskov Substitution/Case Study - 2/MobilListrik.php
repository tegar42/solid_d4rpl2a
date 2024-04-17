<?php
include_once("kendaraanListrik.php");

class MobilListrik implements kendaraanListrik
{
    public function Baterai(): void
    {
        echo "Mobil Listrik menggunakan baterai <br>";
    }
}
