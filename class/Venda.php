<?php

    class Venda {
        
        private $id_venda;
        private $dataVenda;
        private $precoVenda;
        private $desconto;
        private $valorTotal;
        
        public function getId_venda() {
            return $this->id_venda;
        }

        public function getDataVenda() {
            return $this->dataVenda;
        }

        public function getPrecoVenda() {
            return $this->precoVenda;
        }

        public function getDesconto() {
            return $this->desconto;
        }

        public function getValorTotal() {
            return $this->valorTotal;
        }

        public function setId_venda($id_venda) {
            $this->id_venda = $id_venda;
        }

        public function setDataVenda($dataVenda) {
            $this->dataVenda = $dataVenda;
        }

        public function setPrecoVenda($precoVenda) {
            $this->precoVenda = $precoVenda;
        }

        public function setDesconto($desconto) {
            $this->desconto = $desconto;
        }

        public function setValorTotal($valorTotal) {
            $this->valorTotal = $valorTotal;
        }


    }

?>