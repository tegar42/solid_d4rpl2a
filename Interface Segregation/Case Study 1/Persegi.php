<?php
include_once("shape2D.php");

class rectangle implements shape2Dimension
{
    public function calculateArea(): void
    {
        echo "Calculate rectangle's Area";
    }
}
