# Banco de Dados - Sistema Contabilivre
CREATE DATABASE contabilivre;

USE contabilivre;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    idade INT(11) DEFAULT NULL,
    data_nascimento DATE DEFAULT NULL,
    genero ENUM('M', 'F', 'O') DEFAULT NULL,
    descricao TEXT DEFAULT NULL,
    foto VARCHAR(255) DEFAULT NULL,
    termos TINYINT(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
);

INSERT INTO usuarios (nome, email, idade, data_nascimento, genero, descricao, foto, termos)
VALUES
('Admin', 'admin@example.com', 30, '1995-01-01', 'M', 'Usuário administrador.', NULL, 1);
