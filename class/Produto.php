<?php

    class Produto {
        private $cod_produto;
        private $nomeProduto;
        private $codigoBarra;
        private $corProduto;
        private $NotaFiscal;
        
        public function getCod_produto() {
            return $this->cod_produto;
        }

        public function getNomeProduto() {
            return $this->nomeProduto;
        }

        public function getCodigoBarra() {
            return $this->codigoBarra;
        }

        public function getCorProduto() {
            return $this->corProduto;
        }

        public function getNotaFiscal() {
            return $this->NotaFiscal;
        }

        public function setCod_produto($cod_produto) {
            $this->cod_produto = $cod_produto;
        }

        public function setNomeProduto($nomeProduto) {
            $this->nomeProduto = $nomeProduto;
        }

        public function setCodigoBarra($codigoBarra) {
            $this->codigoBarra = $codigoBarra;
        }

        public function setCorProduto($corProduto) {
            $this->corProduto = $corProduto;
        }

        public function setNotaFiscal($NotaFiscal) {
            $this->NotaFiscal = $NotaFiscal;
        }


    }

?>