<?php

    class Vidro extends Produto {
        
        private $id_vidro;
        private $largura;
        private $altura;
        private $tipo;
        
        public function getId_vidro() {
            return $this->id_vidro;
        }

        public function getLargura() {
            return $this->largura;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setId_vidro($id_vidro) {
            $this->id_vidro = $id_vidro;
        }

        public function setLargura($largura) {
            $this->largura = $largura;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }


    }

?>