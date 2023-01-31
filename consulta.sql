CREATE DATABASE Rick_y_Morti DEFAULT CHARACTER SET UTF8MB4;


USE Rick_y_Morti;

DROP TABLE IF EXISTS personajes;
CREATE TABLE personajes (
  ID int NOT NULL,
  nombre VARCHAR(35) NOT NULL DEFAULT '',
  estado VARCHAR(30),
  especie VARCHAR(50),
  genero VARCHAR(30),
  localizacion VARCHAR(100),
  imagen VARCHAR(500),
  PRIMARY KEY (ID)
);
