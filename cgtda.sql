# Host: localhost  (Version 5.6.21)
# Date: 2017-12-19 12:35:36
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "articulo"
#

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE `articulo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `colaboradores` varchar(255) NOT NULL DEFAULT '',
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `introduccion` text NOT NULL,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `id_categoria` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "articulo"
#


#
# Structure for table "categoria"
#

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "categoria"
#

INSERT INTO `categoria` VALUES (1,'Prueba1'),(2,'Prueba2'),(3,'Prueba3'),(4,'Prueba 4');

#
# Structure for table "algoritmo"
#

DROP TABLE IF EXISTS `algoritmo`;
CREATE TABLE `algoritmo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `autores` varchar(255) NOT NULL DEFAULT '',
  `lenguaje` varchar(255) NOT NULL DEFAULT '',
  `introduccion` text NOT NULL,
  `id_categoria` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `id_categoria2` (`id_categoria`),
  CONSTRAINT `id_categoria2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "algoritmo"
#


#
# Structure for table "equipo"
#

DROP TABLE IF EXISTS `equipo`;
CREATE TABLE `equipo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `estudio` varchar(100) NOT NULL DEFAULT '',
  `correo` varchar(50) NOT NULL DEFAULT '',
  `informacion` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "equipo"
#


#
# Structure for table "inicio"
#

DROP TABLE IF EXISTS `inicio`;
CREATE TABLE `inicio` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL DEFAULT '',
  `introduccion` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "inicio"
#

INSERT INTO `inicio` VALUES (1,'CGTDA',''),(2,'CGTDA2','CGTDA2B'),(3,'CGTDA','bla\nbla\n');
