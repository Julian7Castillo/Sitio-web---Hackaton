CREATE DATABASE hackaton;

USE hackaton;

CREATE TABLE usuarios
    (usucc BIGINT NOT NULL PRIMARY KEY,
    usuNombre VARCHAR(30) NOT NULL,
    usuApellidos VARCHAR(50) NOT NULL,
    usuCorreo VARCHAR(50) NOT NULL,
    usuTelefono CHAR(15) NOT NULL,
    usuPassword VARCHAR(60) NOT NULL);

#prcedimientos
CREATE PROCEDURE insusu(cc BIGINT, nmb VARCHAR(30), apl VARCHAR(30),cor VARCHAR(50), cel CHAR(15), pasw VARCHAR(20))
INSERT INTO usuarios(usucc, usuNombre, usuApellidos, usuCorreo, usuTelefono, usuPassword)
VALUES (cc, nmb, apl, cor, cel, pasw);