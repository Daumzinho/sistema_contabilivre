# Banco de Dados - Sistema Contabilivre
CREATE DATABASE contabilivre;

CREATE TABLE usuarios (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    idade INT(3) NOT NULL,
    data_nascimento DATE NOT NULL,
    foto VARCHAR(255) DEFAULT NULL,
    genero ENUM('Masculino', 'Feminino', 'Outro') NOT NULL,
    termos TINYINT(1) NOT NULL,
    observacoes TEXT
);


