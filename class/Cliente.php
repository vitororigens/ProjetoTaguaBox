<?php
    
    class Cliente extends Pessoa{
        
        private $id_cliente;
        private $saldo;
        
        public function getId_cliente() {
            return $this->id_cliente;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setId_cliente($id_cliente) {
            $this->id_cliente = $id_cliente;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }


    }

?>