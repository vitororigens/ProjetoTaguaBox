<?php

    class ItemVendido {
        
        private $id_itemVendido;
        private $precoVenda;
        private $quantidadeVenda;
        
        public function getId_itemVendido() {
            return $this->id_itemVendido;
        }

        public function getPrecoVenda() {
            return $this->precoVenda;
        }

        public function getQuantidadeVenda() {
            return $this->quantidadeVenda;
        }

        public function setId_itemVendido($id_itemVendido) {
            $this->id_itemVendido = $id_itemVendido;
        }

        public function setPrecoVenda($precoVenda) {
            $this->precoVenda = $precoVenda;
        }

        public function setQuantidadeVenda($quantidadeVenda) {
            $this->quantidadeVenda = $quantidadeVenda;
        }


    }

?>