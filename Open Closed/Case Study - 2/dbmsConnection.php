<?php

include_once("dbms.php");

class dbmsconnection {
    public function connect(dbms $db){
        $db->createConnection();
    }
}
