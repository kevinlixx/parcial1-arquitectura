
CREATE DATABASE gapVotacion;

USE gapVotacion;

CREATE TABLE admin (
    id INT PRIMARY KEY AUTO_INCREMENT,
    correo VARCHAR(255),
    contrasena VARCHAR(255)
);

CREATE TABLE candidato (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    apellido VARCHAR(20),
    Votos INT(20)
);

CREATE TABLE estudiante (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    grado VARCHAR(255)
);



