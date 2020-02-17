<?php 

	class Funcionario extends Pessoa {

		private $matricula_funcionario;
		private $cpf;
		private $rg;
		private $sexo;
		private $dtNascimento;
		private $login;
		private $senha;
		private $funcao;

		public function getMatricula() {
			return $this->matricula_funcionario;
		}

		public function setMatricula($matricula) {
			$this->matricula_funcionario = $matricula;
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

        public function getLogin() {
            return $this->login;
        }
        
        public function setLogin($login) {
            $this->login = $login;
        }

        public function getSenha() {
            return $this->senha;
        }
        
        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function getFuncao() {
            return $this->funcao;
        }

        public function setFuncao($funcao) {
            $this->funcao = $funcao;
        }
     	
     	public function CapturarTela() {
     		$dados = array(
     			"nomePessoa" => $_POST['nome']);
     		
     	}
     	public function CadastrarFunc() {
     	
     	}   
	}

 ?>