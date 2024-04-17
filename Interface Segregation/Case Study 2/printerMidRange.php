<?php
include_once("fiturCetak.php");
include_once("fiturScan.php");

class printerMidRange implements fiturCetak, fiturScan
{
    public function cetakKertas(): void
    {
        echo "print Paper <br>";
    }

    public function scanKertas(): void
    {
        echo "Scanning paper <br>";
    }
}
