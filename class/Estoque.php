<?php

    class Estoque {
        
        private $id_estoque;
        private $qtdMinima;
        private $qtdMaxima;
        private $qtdAtual_Disponivel;
        private $real;
        
        public function getId_estoque() {
            return $this->id_estoque;
        }

        public function getQtdMinima() {
            return $this->qtdMinima;
        }

        public function getQtdMaxima() {
            return $this->qtdMaxima;
        }

        public function getQtdAtual_Disponivel() {
            return $this->qtdAtual_Disponivel;
        }

        public function getReal() {
            return $this->real;
        }

        public function setId_estoque($id_estoque) {
            $this->id_estoque = $id_estoque;
        }

        public function setQtdMinima($qtdMinima) {
            $this->qtdMinima = $qtdMinima;
        }

        public function setQtdMaxima($qtdMaxima) {
            $this->qtdMaxima = $qtdMaxima;
        }

        public function setQtdAtual_Disponivel($qtdAtual_Disponivel) {
            $this->qtdAtual_Disponivel = $qtdAtual_Disponivel;
        }

        public function setReal($real) {
            $this->real = $real;
        }


    }

?>