<?php

include_once("dbms.php");

class MySQL implements dbms
{
    public function createConnection(): void
    {
        echo "Building Connection with MySQL <br>";
    }
}
