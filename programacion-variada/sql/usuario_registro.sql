CREATE DATABASE usuario_registro;

USE usuario_registro;

CREATE TABLE datos(
	email VARCHAR(50) NOT NULL,
	nombre VARCHAR(50) NOT NULL,
	usuario VARCHAR(50) NOT NULL,
	password VARCHAR(25) NOT NULL,
	f_nacimiento DATE NOT NULL,
	pais VARCHAR(30) NOT NULL,
	sexo CHAR(1) NOT NULL,
	PRIMARY KEY(email),
	FULLTEXT KEY buscador(usuario)
)ENGINE=MyISAM; 

CREATE TABLE pais(
	id_pais INT NOT NULL AUTO_INCREMENT,
	pais VARCHAR(30) NOT NULL,
	PRIMARY KEY(id_pais)
)ENGINE=MyISAM;

INSERT INTO pais (id_pais,pais) VALUES
(1,"Ecuador"),
(2,"Colombia"),
(3,"Guatemala"),
(4,"Espa&ntilde;a"),
(5,"Brazil"),
(6,"México"),
(7,"Uruguay"),
(8,"Chile"),
(9,"Argentina"),
(10,"Paraguay"),
(11,"Perú"),
(12,"Honduras"),
(13,"El Salvador"),
(14,"Nicaragua"),
(15,"Costa Rica"),
(16,"Panamá"),
(17,"Venezuela"),
(19,"Volivia"),
(20,"Estados Unidos"),
(21,"Groelandia"),
(22,"República Domininicana"),
(23,"Canadá"),
(24,"Haití"),
(25,"Cuba"),
(26,"Belice"),
(27,"Inglaterra"),
(28,"Francia"),
(29,"Alemania"),
(30,"Italia"),
(31,"Japón"),
(32,"China"),
(33,"Egipto"),
(34,"Sudafrica"),
(35,"Australia"),
(36,"Nueva Zelanda"),
(37,"Guinea"),
(38,"Filipinas"),
(39,"Suriname"),
(40,"Suiza"),
(41,"Rusia"),
(42,"Suecia");
