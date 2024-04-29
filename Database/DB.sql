CREATE DATABASE IF NOT EXISTS skin_care_db;

USE skin_care_db;

CREATE TABLE dados_cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    tipo_de_pele ENUM('o', 's', 'm', 'a') NOT NULL,
    rotinas_cuidados ENUM('sim', 'nao') NOT NULL,
    alergia ENUM('sim', 'nao') NOT NULL,
    alergia_informe VARCHAR(255),
    protetor_solar ENUM('sim', 'nao') NOT NULL,
    melasma_familia ENUM('sim', 'nao') NOT NULL,
    contraindicacao TEXT NOT NULL
);