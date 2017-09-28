CREATE DATABASE cursophp;

USE cursophp;

CREATE TABLE usuarios 
(
	id int unsigned not null auto_increment,
    nome varchar(64) not null,
    email varchar(64) not null,
    idade smallint not null,
    sexo varchar(1) not null,
    estado_civil varchar(64) not null,
    humanas tinyint not null,
    exatas tinyint not null,
    biologias tinyint not null,
    senha varchar(32) not null,
    PRIMARY KEY (id)
);

SELECT * FROM usuarios;



















