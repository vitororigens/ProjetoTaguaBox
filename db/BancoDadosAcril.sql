-- MySQL Script generated by MySQL Workbench
-- Sat Feb 15 18:43:32 2020
-- Model: AcrilBox    Version: 1.0
-- MySQL Workbench Forward Engineering

-- -----------------------------------------------------
-- Schema db_acrilbox
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS db_acrilbox ;

-- -----------------------------------------------------
-- Schema db_acrilbox
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS db_acrilbox DEFAULT CHARACTER SET utf8 ;
USE db_acrilbox ;

-- -----------------------------------------------------
-- Table tb_endereco
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_endereco ;

CREATE TABLE IF NOT EXISTS tb_endereco (
  id_endereco INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  logradouro VARCHAR(45) NOT NULL,
  cidade VARCHAR(45) NOT NULL,
  estado VARCHAR(2) NOT NULL,
  cep VARCHAR(9) NOT NULL,
  numero INT NOT NULL,
  complemento VARCHAR(30) NULL
);

-- -----------------------------------------------------
-- Table tb_pessoa
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_pessoa ;

CREATE TABLE IF NOT EXISTS tb_pessoa (
  id_pessoa INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nomePessoa VARCHAR(45) NOT NULL,
  email VARCHAR(45) NULL,
  telefone VARCHAR(11) NOT NULL,
  id_endereco INT NOT NULL,
  FOREIGN KEY (id_endereco) REFERENCES tb_endereco (id_endereco)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

-- -----------------------------------------------------
-- Table tb_funcao
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_funcao ;

CREATE TABLE IF NOT EXISTS tb_funcao (
  id_funcao INT NOT NULL PRIMARY KEY,
  nomeFuncao VARCHAR(45) NOT NULL,
  descricaoFuncao VARCHAR(100) NOT NULL
);

-- -----------------------------------------------------
-- Table tb_funcionario
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_funcionario ;

CREATE TABLE IF NOT EXISTS tb_funcionario (
  matricula_funcionario INT NOT NULL PRIMARY KEY,
  cpf VARCHAR(11) NOT NULL,
  rg VARCHAR(12) NOT NULL,
  sexo ENUM('M', 'F') NOT NULL,
  dtNascimento DATE NOT NULL,
  login VARCHAR(20) NOT NULL,
  senha VARCHAR(256) NOT NULL,
  id_funcao INT NOT NULL,
  id_pessoa INT NOT NULL,
  FOREIGN KEY (id_funcao) REFERENCES tb_funcao (id_funcao)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  FOREIGN KEY (id_pessoa) REFERENCES tb_pessoa (id_pessoa)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_fornecedor
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_fornecedor ;

CREATE TABLE IF NOT EXISTS tb_fornecedor (
  id_fornecedor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_pessoa INT NOT NULL,
  FOREIGN KEY (id_pessoa) REFERENCES tb_pessoa (id_pessoa)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_fornecedorJuridico
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_fornecedorJuridico ;

CREATE TABLE IF NOT EXISTS tb_fornecedorJuridico (
  id_fornecedorJuridico INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cnpj VARCHAR(20) NOT NULL,
  id_fornecedor INT NOT NULL,
  FOREIGN KEY (id_fornecedor) REFERENCES tb_fornecedor (id_fornecedor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_cliente
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_cliente ;

CREATE TABLE IF NOT EXISTS tb_cliente (
  id_cliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  saldo DOUBLE NULL,
  id_pessoa INT NOT NULL,
  FOREIGN KEY (id_pessoa) REFERENCES tb_pessoa (id_pessoa)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_clienteFisico
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_clienteFisico ;

CREATE TABLE IF NOT EXISTS tb_clienteFisico (
  id_clienteFisico INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cpf VARCHAR(11) NOT NULL,
  id_cliente INT NOT NULL,
  FOREIGN KEY (id_cliente) REFERENCES tb_cliente (id_cliente)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_clienteJuridico
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_clienteJuridico ;

CREATE TABLE IF NOT EXISTS tb_clienteJuridico (
  id_clienteJuridico INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cnpj VARCHAR(20) NOT NULL,
  id_cliente INT NOT NULL,
  FOREIGN KEY (id_cliente) REFERENCES tb_cliente (id_cliente)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_fornecedorFisico
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_fornecedorFisico ;

CREATE TABLE IF NOT EXISTS tb_fornecedorFisico (
  id_fornecedorFisico INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cpf VARCHAR(11) NOT NULL,
  id_fornecedor INT NOT NULL,
  FOREIGN KEY (id_fornecedor) REFERENCES tb_fornecedor (id_fornecedor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_servico
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_servico ;

CREATE TABLE IF NOT EXISTS tb_servico (
  id_servico INT NOT NULL PRIMARY KEY,
  nome VARCHAR(45) NULL,
  descricao VARCHAR(45) NULL,
  tipoServico VARCHAR(45) NULL,
  metragemQuadrada VARCHAR(45) NULL,
  metragemLinear VARCHAR(45) NULL,
  valorServico DOUBLE NULL
);

-- -----------------------------------------------------
-- Table tb_venda
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_venda ;

CREATE TABLE IF NOT EXISTS tb_venda (
  id_venda INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  dataVenda DATE NOT NULL,
  precoVenda DOUBLE NOT NULL,
  desconto DOUBLE NULL,
  valorTotal DOUBLE NOT NULL,
  id_funcionario INT NOT NULL,
  id_cliente INT NOT NULL,
  id_servico INT NOT NULL,
  FOREIGN KEY (id_funcionario) REFERENCES tb_funcionario (matricula_funcionario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  FOREIGN KEY (id_cliente) REFERENCES tb_cliente (id_cliente)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  FOREIGN KEY (id_servico) REFERENCES tb_servico (id_servico)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_compra
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_compra ;

CREATE TABLE IF NOT EXISTS tb_compra (
  id_compra INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  dataCompra DATE NOT NULL,
  valorCompra DOUBLE NOT NULL,
  id_funcionario INT NOT NULL,
  id_fornecedor INT NOT NULL,
  FOREIGN KEY (id_funcionario) REFERENCES tb_funcionario (matricula_funcionario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT id_fornecedor FOREIGN KEY (id_fornecedor) REFERENCES tb_fornecedor (id_fornecedor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_produto
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_produto ;

CREATE TABLE IF NOT EXISTS tb_produto (
  cod_produto INT NOT NULL PRIMARY KEY,
  nomeProduto VARCHAR(45) NOT NULL,
  codigoBarra VARCHAR(45) NOT NULL,
  corProduto VARCHAR(45) NOT NULL,
  notaFiscal VARCHAR(45) NULL
  );

-- -----------------------------------------------------
-- Table tb_itemVendido
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_itemVendido ;

CREATE TABLE IF NOT EXISTS tb_itemVendido (
  id_itemVendido INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  precoVenda DOUBLE NOT NULL,
  quantidadeVenda INT NOT NULL,
  id_venda INT NOT NULL,
  cod_produto INT NOT NULL,
  FOREIGN KEY (id_venda) REFERENCES tb_venda (id_venda)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  FOREIGN KEY (cod_produto) REFERENCES tb_produto (cod_produto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_itemComprado
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_itemComprado ;

CREATE TABLE IF NOT EXISTS tb_itemComprado (
  id_itemComprado INT NOT NULL PRIMARY KEY,
  precoCompra DOUBLE NOT NULL,
  quantidade INT NOT NULL,
  id_compra INT NOT NULL,
  cod_produto INT NOT NULL,
  FOREIGN KEY (id_compra) REFERENCES tb_compra (id_compra)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  FOREIGN KEY (cod_produto) REFERENCES tb_produto (cod_produto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_estoque
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_estoque ;

CREATE TABLE IF NOT EXISTS tb_estoque (
  id_estoque INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cod_produto INT NOT NULL,
  qtdMinima INT NOT NULL,
  qtdMaxima INT NOT NULL,
  qtdAtual_Disponivel INT NOT NULL,
  qtdReal INT NOT NULL,
  FOREIGN KEY (cod_produto) REFERENCES tb_produto (cod_produto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_acessorio
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_acessorio ;

CREATE TABLE IF NOT EXISTS tb_acessorio (
  id_acessorio INT NOT NULL PRIMARY KEY,
  tipo VARCHAR(45) NOT NULL,
  cor VARCHAR(45) NULL,
  cod_produto INT NOT NULL,
  FOREIGN KEY (cod_produto) REFERENCES tb_produto (cod_produto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_vidro
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_vidro ;

CREATE TABLE IF NOT EXISTS tb_vidro (
  id_vidro INT NOT NULL PRIMARY KEY,
  largura VARCHAR(45) NULL,
  altura VARCHAR(45) NULL,
  tipo VARCHAR(45) NULL,
  cod_produto INT NOT NULL,
  FOREIGN KEY (cod_produto) REFERENCES tb_produto (cod_produto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table tb_aluminio
-- -----------------------------------------------------
DROP TABLE IF EXISTS tb_aluminio ;

CREATE TABLE IF NOT EXISTS tb_aluminio (
  id_aluminio INT NOT NULL PRIMARY KEY,
  tipo VARCHAR(45) NULL,
  cod_produto INT NOT NULL,
  FOREIGN KEY (cod_produto) REFERENCES tb_produto (cod_produto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);
