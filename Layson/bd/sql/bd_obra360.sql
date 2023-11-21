CREATE DATABASE obra360 CHARACTER SET utf8
COLLATE utf8_general_ci;

USE obra360;

CREATE TABLE funcionarios_construtora (
id_func_const INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
email_func_const VARCHAR(100) NOT NULL,
senha_func_const VARCHAR(155) NOT NULL
);

CREATE TABLE clientes (
id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
email_cliente VARCHAR(100) NOT NULL,
senha_cliente VARCHAR(155) NOT NULL
);

INSERT INTO funcionarios_construtora (email_func_const, senha_func_const) VALUES ('layson@gmail.com','123');
INSERT INTO clientes (email_cliente, senha_cliente) VALUES ('felipe@gmail.com','321');
SELECT * from funcionarios_construtora;
SELECT * from clientes;





 