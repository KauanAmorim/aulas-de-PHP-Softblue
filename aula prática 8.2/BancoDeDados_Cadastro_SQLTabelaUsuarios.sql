USE cursophp;

CREATE TABLE usuarios 
(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(64) NOT NULL,
	email VARCHAR(64) NOT NULL,
	idade SMALLINT NULL,
	sexo VARCHAR(1) NULL,
	estado_civil VARCHAR(16) NULL,
	humanas TINYINT NULL,
	exatas TINYINT NULL,
	biologicas TINYINT NULL,
	senha VARCHAR(32) NULL,
	PRIMARY KEY (id)
);
