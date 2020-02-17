<?php

    class ItemComprado {
        
        private $id_itemComprado;
        private $precoCompra;
        private $quantidade;
        
        public function getId_itemComprado() {
            return $this->id_itemComprado;
        }

        public function setId_itemComprado($id_itemComprado) {
            $this->id_itemComprado = $id_itemComprado;
        }

        public function getPrecoCompra() {
            return $this->precoCompra;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function setPrecoCompra($precoCompra) {
            $this->precoCompra = $precoCompra;
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }


    }

?>