<?php

    class Acessorio extends Produto {
        
        private $id_acessorio;
        private $tipo;
        private $cor;
        
        public function getId_acessorio() {
            return $this->id_acessorio;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function getCor() {
            return $this->cor;
        }

        public function setId_acessorio($id_acessorio) {
            $this->id_acessorio = $id_acessorio;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function setCor($cor) {
            $this->cor = $cor;
        }


    }

?>