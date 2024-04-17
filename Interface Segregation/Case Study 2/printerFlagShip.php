<?php
include_once("fiturFax.php");
include_once("fiturCetak.php");
include_once("fiturScan.php");

class printerFlagShip implements fiturFax, fiturCetak, fiturScan
{
    public function terimaFax(): void
    {
        echo "Recieve Fax <br>";
    }

    public function cetakKertas(): void
    {
        echo "Print paper <br>";
    }

    public function scanKertas(): void
    {
        echo "Scanning paper <br>";
    }
}
