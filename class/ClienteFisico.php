<?php

    class ClienteFisico extends Cliente {
        
        private $id_clienteFisico;
        private $cpf;
        
        public function getId_clienteFisico() {
            return $this->id_clienteFisico;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setId_clienteFisico($id_clienteFisico) {
            $this->id_clienteFisico = $id_clienteFisico;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

    }

?>