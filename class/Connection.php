<?php 

    class Connection extends PDO {
        private $conn;

        public function __construct() {
            $this->conn = new PDO("mysql:dbname=db_acrilbox; host=localhost", "root", "");
        }

        
    }

?>