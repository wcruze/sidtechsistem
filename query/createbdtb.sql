CREATE DATABASE dbempleos character set utf8;

-- Cambiar a la base de datos php2.
USE dbempleos;

-- Creación de la Tabla administradores.
CREATE TABLE `usadministradores` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`nombre` varchar(120) NOT NULL,
`pass` varchar(120) NOT NULL,
PRIMARY KEY (`id`))
ENGINE = InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;



-- Creación de la Tabla aspirantes.
CREATE TABLE `aspirantes` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`nombre` varchar(120) NOT NULL,
`apellido` varchar(120)  NOT NULL,
`correo` varchar(120) NOT NULL,
`area` varchar(120) NOT NULL,
`fecha` timestamp default localtime,
`ruta` varchar(120) NOT NULL,
PRIMARY KEY (`id`))
ENGINE = InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


-- Inserción de administrador en la tabla administradores
INSERT INTO `dbempleos`.`usadministradores`
(`nombre`,
`pass`)
VALUES
("admin",MD5("admin"));

