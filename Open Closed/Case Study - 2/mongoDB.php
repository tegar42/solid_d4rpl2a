<?php

include_once("dbms.php");

class MongoDB implements dbms
{
    public function createConnection(): void
    {
        echo "Building Connection with mongoDB <br>";
    }
}
