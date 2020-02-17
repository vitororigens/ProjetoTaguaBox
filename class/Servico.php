<?php

    class Servico {
        
        private $id_servico;
        private $nome;
        private $descricao;
        private $tipoServico;
        private $metragemQuadrada;
        private $metragemLinear;
        private $valorServico;
        
        public function getId_servico() {
            return $this->id_servico;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getTipoServico() {
            return $this->tipoServico;
        }

        public function getMetragemQuadrada() {
            return $this->metragemQuadrada;
        }

        public function getMetragemLinear() {
            return $this->metragemLinear;
        }

        public function getValorServico() {
            return $this->valorServico;
        }

        public function setId_servico($id_servico) {
            $this->id_servico = $id_servico;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function setTipoServico($tipoServico) {
            $this->tipoServico = $tipoServico;
        }

        public function setMetragemQuadrada($metragemQuadrada) {
            $this->metragemQuadrada = $metragemQuadrada;
        }

        public function setMetragemLinear($metragemLinear) {
            $this->metragemLinear = $metragemLinear;
        }

        public function setValorServico($valorServico) {
            $this->valorServico = $valorServico;
        }


    }

?>