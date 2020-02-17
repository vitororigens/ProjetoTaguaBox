<?php

    class FornecedorFisico extends Fornecedor {
        
        private $id_fornecedorFisico;
        private $cpf;
        
        public function getId_fornecedorFisico() {
            return $this->id_fornecedorFisico;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setId_fornecedorFisico($id_fornecedorFisico) {
            $this->id_fornecedorFisico = $id_fornecedorFisico;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }


    }

?>