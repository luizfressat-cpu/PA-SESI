CREATE DATABASE aula_sesi;
USE aula_sesi;
CREATE TABLE aluno(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, # o auto_increment adiciona 1 a cada registro. Exemplo: (id: 1, nome:luiz), (id:2, nome:gustavo) AUTO_INCREMENT;
nome VARCHAR(50) NOT NULL,
serie INT NOT NULL,
turma char(1)
);

DROP TABLE aluno;

SELECT * from aluno;