<?php

class Sql extends PDO {

    private $conn;

    public function _construct() {
        $this->conn = new PDO("mysql:host=localhost;dbname=cursophp7", "root", "");
    }

    private function setParams($statment, $parameters = array()) {
        foreach ($parameters as $key => $value) {

            $this->setParam($key, $value);
        }
    }

    private function setParam($key, $value) {
        $statment->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array()) {
        $stmt = $this->conn->prepare($RawQuery);

        foreach ($params as $key => $value) {
            $stmt->execute();
            return $stmt;
            
        }


        public function select($rawQuery, $params = []) {
            $stmt = $this->query($rawQuery, $params);
            $stmt->fetchAll();
        }

    }

}
