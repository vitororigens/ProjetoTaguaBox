<?php

    class Compra {
        
        private $id_compra;
        private $dataCompra;
        private $valorCompra;
        
        public function getId_compra() {
            return $this->id_compra;
        }

        public function getDataCompra() {
            return $this->dataCompra;
        }

        public function getValorCompra() {
            return $this->valorCompra;
        }

        public function setId_compra($id_compra) {
            $this->id_compra = $id_compra;
        }

        public function setDataCompra($dataCompra) {
            $this->dataCompra = $dataCompra;
        }

        public function setValorCompra($valorCompra) {
            $this->valorCompra = $valorCompra;
        }


    }

?>