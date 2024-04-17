<?php
include_once("kendaraanBBM.php");

class Mobil implements kendaraanBBM
{
    public function BBM(): void
    {
        echo "Mobil menggunakan BBM <br>";
    }
}
