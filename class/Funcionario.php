<?php

    class Funcionario {
        private $matricula;
        private $nome;
        private $cpf;
        private $rg;
        private $funcao;
        private $email;
        private $endereco;
        private $cidade;
        private $estado;
        private $cep;
        private $telefone;
        private $sexo;
        private $dtNascimento;

        public function getMatricula() {
            return $this->matricula;
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }
        
        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        
        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }
        
        public function getRg() {
            return $this->rg;
        }

        public function setRg($rg) {
            $this->rg = $rg;
        }
        
        public function getFuncao() {
            return $this->funcao;
        }

        public function setFuncao($funcao) {
            $this->funcao = $funcao;
        }
        
        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
        
        public function getEndereco() {
            return $this->endereco;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
        
        public function getEstado() {
            return $this->estado;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }
        
        public function getCidade() {
            return $this->cidade;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }
        
        public function getCep() {
            return $this->cep;
        }

        public function setCep($cep) {
            $this->cep = $cep;
        }
        
        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        
        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }
        
        public function getDtNascimento() {
            return $this->dtNascimento;
        }

        public function setDtNascimento($dtNascimento) {
            $this->dtNascimento = $dtNascimento;
        }
        
    }

?>