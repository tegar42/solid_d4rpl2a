<?php
include_once("shape3D.php");
include_once("shape2D.php");

class Kubus implements shape3Dimension, shape2Dimension
{
    public function calculateArea(): void
    {
        echo "Calculate Box's Area <br>";
    }

    public function calculateVolume(): void
    {
        echo "Calculate Box's Volume <br>";
    }
}
