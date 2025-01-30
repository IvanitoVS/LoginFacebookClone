
-- Crear y acceder a la base de datos

CREATE DATABASE FacebookClone;
USE FacebookClone;

-- Crear Tabla Usuarios y sus atributos

CREATE TABLE usuarios (
    id INT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    fechaCumple DATE NOT NULL,
    genero VARCHAR(50) NOT NULL
);

-- Clave Primeria
ALTER TABLE usuarios
ADD PRIMARY KEY (id);

-- Convertir el ID en autoincrementable
ALTER TABLE usuarios
MODIFY id INT AUTO_INCREMENT

ALTER TABLE usuarios
ADD password VARCHAR(16) NOT NULL;
-- INSERT

INSERT INTO usuarios (nombre, apellido, email, fechaCumple, genero)
VALUES ("Ivan", "Villena", "ivan@mail.com", "2000-07-04", "hombre");