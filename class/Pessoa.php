<?php

    class Pessoa {
        private $id_pessoa;
        private $nomePessoa;
        private $email;
        private $telefone;
        private $id_endereco;


        public function getId_pessoa() {
            return $this->id_pessoa;
        }

        public function setId_pessoa($id_pessoa) {
            $this->id_pessoa = $id_pessoa;
        }
        
        public function getNomePessoa() {
            return $this->nomePessoa;
        }

        public function setNomePessoa($nomePessoa) {
            $this->nomePessoa = $nomePessoa;
        }
        
        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
        
        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        
        
    }

?>