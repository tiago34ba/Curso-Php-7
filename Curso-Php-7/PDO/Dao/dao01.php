<?php

class sql extends PDO {

    private $conn;

    public function __construct() {
        $this->conn = new PDO("mysql:host=localhost;dbname=cursophp7");
    }

    private function setParams($statment, $parameters= array()){
        foreach ($params as key => $value) {
            $this-> setParam($key ,$value )
            
            $stmt->bindParam($key, $value);
        }
    }
    
    private function setParam($statment,$key,$value)

    public function query($ramQuery, $aprams) {

        $stmt = $this->conn->prepare(ramquery);
    }

}
