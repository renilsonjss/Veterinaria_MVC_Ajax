CREATE DATABASE sistemaVeterinario;
USE sistemaVeterinario;
CREATE TABLE usuarios(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(200),
email VARCHAR(200),
cpf VARCHAR(14),
senha VARCHAR(32),
sobreNome VARCHAR(200),
pais VARCHAR(200),
sexo VARCHAR(200),
nascimento VARCHAR(200)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE veterinarios(
id_veterinario INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(200),
email VARCHAR(200),
cpf VARCHAR(14),
crmv VARCHAR(50),
senha VARCHAR(32)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE agendamento(
CONSTRAINT usuario_agenda_fk FOREIGN KEY (id_pessoa) REFERENCES usuario (id_usuario),
data_agendamento VARCHAR(20),
horario VARCHAR(20),
vacina VARCHAR(10)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;