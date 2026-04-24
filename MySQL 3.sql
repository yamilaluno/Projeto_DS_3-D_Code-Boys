CREATE DATABASE sistema_login;
USE sistema_login;

CREATE TABLE usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL
);

-- Inserir um usuario de teste
INSERT INTO usuarios (email, senha)
VALUES ('teste@email.com', '123456');
