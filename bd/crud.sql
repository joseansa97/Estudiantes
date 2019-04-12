CREATE DATABASE crud_google;

USE crud_google;

CREATE TABLE usuarios(ncontrol VARCHAR(10) PRIMARY KEY, nombre VARCHAR(30), apellido VARCHAR(50), correo VARCHAR(50), telefono VARCHAR(15));

CREATE TABLE libros (codigo VARCHAR(10) PRIMARY KEY, nombre VARCHAR(100), editorial VARCHAR(50), autor VARCHAR(50), edicion INT(20), numpage INT(20));
