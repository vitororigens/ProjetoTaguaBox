<?php 

	class Endereco {

		private $id_endereco;
		private $logradouro;
        private $cidade;
        private $estado;
        private $cep;
        private $numero;
        private $complemento;

        public function getId_endereco() {
            return $this->id_endereco;
        }

        public function getLogradouro() {
            return $this->logradouro;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function getEstado() {
            return $this->estado;
        }

        public function getCep() {
            return $this->cep;
        }

        public function getNumero() {
            return $this->numero;
        }

        public function getComplemento() {
            return $this->complemento;
        }

        public function setId_endereco($id_endereco) {
            $this->id_endereco = $id_endereco;
        }

        public function setLogradouro($logradouro) {
            $this->logradouro = $logradouro;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }

        public function setCep($cep) {
            $this->cep = $cep;
        }

        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function setComplemento($complemento) {
            $this->complemento = $complemento;
        }
    }

 ?>