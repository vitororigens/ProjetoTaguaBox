<?php

    class Aluminio extends Produto {
        
        private $id_aluminio;
        private $tipo;
        
        public function getId_aluminio() {
            return $this->id_aluminio;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setId_aluminio($id_aluminio) {
            $this->id_aluminio = $id_aluminio;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }


    }

?>