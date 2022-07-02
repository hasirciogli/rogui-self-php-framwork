<?php

class Database{
    private function ___database___(){
        @$conn = new PDO("mysql:host=".ConfigClass::DATABASE["database_host"].";dbname=".ConfigClass::DATABASE["database_name"], ConfigClass::DATABASE["database_username"], ConfigClass::DATABASE["database_password"]);
        if (!$conn) {
           die("Connection error");
        }

        return $conn;
    }

    public function CallSql($sql){
        $db = $this->___database___();
        return $db->prepare($sql);
    }
}


?>