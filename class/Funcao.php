<?php

    class Funcao {
        
        private $id_funcao;
        private $nomeFuncao;
        private $descricaoFuncao;
        
        public function getId_funcao() {
            return $this->id_funcao;
        }

        public function getNomeFuncao() {
            return $this->nomeFuncao;
        }

        public function getDescricaoFuncao() {
            return $this->descricaoFuncao;
        }

        public function setId_funcao($id_funcao) {
            $this->id_funcao = $id_funcao;
        }

        public function setNomeFuncao($nomeFuncao) {
            $this->nomeFuncao = $nomeFuncao;
        }

        public function setDescricaoFuncao($descricaoFuncao) {
            $this->descricaoFuncao = $descricaoFuncao;
        }


    }

?>