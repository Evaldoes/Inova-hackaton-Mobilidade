-- SCRIP PARA CRIAÇÃO DA BASE DE DADOS
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-04:00";

CREATE DATABASE reportransito;

USE reportransito;

-- CLASSE USUARIOS
CREATE TABLE Usuarios (
    nome varchar(300) NOT NULL,
    senha varchar(300),
    email varchar(500) NOT NULL,
    telefone varchar(30),
    PRIMARY KEY (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
    