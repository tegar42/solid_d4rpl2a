<?php

include_once("persegi.php");

class PenghitungPersegi
{
    public function hitungLuas(persegi $persegi)
    {
        $sisi = $persegi->getSisi();
        $luas = $sisi * $sisi;
        return $luas;
    }
}
