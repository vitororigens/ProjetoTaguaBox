<?php 

    class Connection extends PDO {
        private $conn;

        public function __construct() {
            $this->conn = new PDO("mysql:dbname=db_acrilbox; host=localhost", "root", "");
        }

        public function query($rawQuery, $parameters = array()) {
        	$statement = $this->conn->prepare($rawQuery);

        	$this->setParameters($statement, $parameters);

        	$statement->execute();

        	return $statement;
        }

        public function setParameters($statement, $parameters = array()) {
        	foreach ($parameters as $key => $value) {
        		$this->setParam($statement, $key, $valor);
        	}
        }
        
        public function setParam($statement, $key, $valor) {
        	$statement->bindParam($key, $valor);
        }

        public function select($rawQuery, $parameters = array()) {
            $statement = $this->query($rawQuery, $parameters);

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }

?>