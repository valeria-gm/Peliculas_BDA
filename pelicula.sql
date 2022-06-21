--- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)

--
-- Current Database: 'pelianalitic'
--

CREATE DATABASE IF NOT EXISTS pelianalitic DEFAULT CHARACTER SET utf8;

USE pelianalitic;

--
-- Table structure for table 'director'
--

CREATE TABLE director(
  director_id int NOT NULL AUTO_INCREMENT,
  nombre_director varchar(100) NOT NULL,
  apellidos_director varchar(100) NOT NULL,
  nacionalidad varchar(100),
  sexo char(1),
  PRIMARY KEY (director_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Table structure for 'genero'
--

CREATE TABLE genero (
  genero_id int NOT NULL AUTO_INCREMENT,
  nombre_genero varchar(500) NOT NULL,
  PRIMARY KEY (genero_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



--
-- Table structure for 'usuario'
--

CREATE TABLE usuario (
  usuario_id int NOT NULL AUTO_INCREMENT,
  nombre_usuario varchar(100) NOT NULL,
  apodo varchar(50) NOT NULL,
  email varchar(100),
  contrasena varchar(100),

  PRIMARY KEY (usuario_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



--
-- Table structure for table 'pelicula'
--

CREATE TABLE pelicula (
  pelicula_id int NOT NULL AUTO_INCREMENT,
  genero_id int NOT NULL,
  director_id int NOT NULL,
  
  poster_link TEXT NOT NULL,
  titulo varchar(70) NOT NULL,
  anio int NOT NULL,
  certificado varchar(20),
  duracion int NOT NULL,
  IMDB_raiting float,
  resumen text NOT NULL,
  calificacion_critica int,
  star1 varchar(50),
  star2 varchar(50),
  star3 varchar(50),
  star4 varchar(50),
  No_votos int,
  
 
  FOREIGN KEY (genero_id) REFERENCES genero(genero_id) ON DELETE CASCADE,
  FOREIGN KEY (director_id) REFERENCES director(director_id) ON DELETE CASCADE,

  PRIMARY KEY (pelicula_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Table structure for 'review'
--

CREATE TABLE review (
  review_id int NOT NULL AUTO_INCREMENT,
  
  usuario_id int NOT NULL,
  pelicula_id int NOT NULL,
  
  calificacion int NOT NULL,
  resena text NOT NULL,
  fecha date NOT NULL,

  PRIMARY KEY (review_id),
  
  FOREIGN KEY (usuario_id) REFERENCES usuario(usuario_id) ON DELETE CASCADE,
  FOREIGN KEY (pelicula_id) REFERENCES pelicula(pelicula_id) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

