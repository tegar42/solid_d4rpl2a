<?php
include_once("TipePembayaran.php");

class Credit implements TipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Pembayaran dilakukan secara Credit <br>";
    }
}
