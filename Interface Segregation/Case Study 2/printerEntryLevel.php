<?php
include_once("fiturCetak.php");

class printerEntryLevel implements fiturCetak
{
    public function cetakKertas(): void
    {
        echo "Print Paper <br>";
    }
}
