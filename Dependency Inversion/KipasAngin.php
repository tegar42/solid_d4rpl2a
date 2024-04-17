<?php
include_once("BarangElektronik.php");

class kipasAngin implements BarangElektronik
{
    public function beroperasi(): void
    {
        echo "Kipas Angin Aktif";
    }

    public function berhenti(): void
    {
        echo "Kipas Angin Berhenti";
    }
}
