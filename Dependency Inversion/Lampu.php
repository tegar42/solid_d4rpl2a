<?php
include_once("BarangElektronik.php");

class lampu implements BarangElektronik
{
    public function beroperasi(): void
    {
        echo "Lampu Menyala";
    }

    public function berhenti(): void
    {
        echo "Lampu padam";
    }
}
