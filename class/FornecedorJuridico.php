<?php

    class FornecedorJuridico extends Fornecedor {
        
        private $id_fornecedorJuridico;
        private $cnpj;
        
        public function getId_fornecedorJuridico() {
            return $this->id_fornecedorJuridico;
        }

        public function getCnpj() {
            return $this->cnpj;
        }

        public function setId_fornecedorJuridico($id_fornecedorJuridico) {
            $this->id_fornecedorJuridico = $id_fornecedorJuridico;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }


    }

?>