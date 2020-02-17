<?php

    class Fornecedor extends Pessoa {
        
        private $id_fornecedor;
        
        public function getId_fornecedor() {
            return $this->id_fornecedor;
        }

        public function setId_fornecedor($id_fornecedor) {
            $this->id_fornecedor = $id_fornecedor;
        }


    }

?>