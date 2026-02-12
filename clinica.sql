CREATE DATABASE IF NOT EXISTS clinica;
USE clinica;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    nome_pet VARCHAR(100) NOT NULL
);

INSERT INTO clientes (nome_cliente, telefone, nome_pet) VALUES
('Ana Beatriz', '1199999-0001', 'Bidu'),
('Carlos Alberto', '1199999-0002', 'Luna'),
('Fernanda Silva', '1199999-0003', 'Thor');
