<?php

    class ClienteJuridica extends Cliente {
        
        private $id_clienteJuridico;
        private $cnpj;
        
        public function getId_clienteJuridico() {
            return $this->id_clienteJuridico;
        }

        public function getCnpj() {
            return $this->cnpj;
        }

        public function setId_clienteJuridico($id_clienteJuridico) {
            $this->id_clienteJuridico = $id_clienteJuridico;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }


    }

?>