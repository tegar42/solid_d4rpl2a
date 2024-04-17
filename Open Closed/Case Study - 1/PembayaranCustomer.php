<?php
include_once("TipePembayaran.php");

class PembayaranCustomer
{
    public function menerimaPembayaran(TipePembayaran $type): void
    {
        $type->memprosesPembayaran();
    }
}
