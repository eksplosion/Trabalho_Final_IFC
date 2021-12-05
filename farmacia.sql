CREATE DATABASE IF NOT EXISTS farmacia;
USE farmacia;

CREATE TABLE IF NOT EXISTS funcionario(
    id_funcionario INT auto_increment NOT NULL,
    nome VARCHAR(45),
    login VARCHAR(45) NOT NULL unique,
    senha CHAR(64) NOT NULL,
    acesso VARCHAR(45) NOT NULL,
    PRIMARY KEY(id_funcionario)
);

CREATE TABLE IF NOT EXISTS produto(
    cod_barras BIGINT UNSIGNED NOT NULL,
    nome VARCHAR(150),
    validade DATE NOT NULL,
    qtd INT,
    preco FLOAT,
    PRIMARY KEY(cod_barras)
);

CREATE TABLE IF NOT EXISTS venda(
    id_venda INT auto_increment NOT NULL,
    data_venda DATETIME,
    PRIMARY KEY(id_venda)
);

CREATE TABLE produtos_venda(
    id_produtos_venda INT auto_increment NOT NULL,
    id_venda INT,
    cod_barras BIGINT UNSIGNED,
    qtd_vendida INT,
    PRIMARY KEY(id_produtos_venda),
    FOREIGN KEY(id_venda) REFERENCES venda(id_venda),
    FOREIGN KEY(cod_barras) REFERENCES produto(cod_barras)
);

INSERT INTO funcionario(nome, login, senha, acesso) VALUES
("Tiago", "admin", "d82494f05d6917ba02f7aaa29689ccb444bb73f20380876cb05d1f37537b7892", "Administrador");
