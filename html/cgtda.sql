# Host: localhost  (Version 5.5.5-10.1.28-MariaDB)
# Date: 2017-11-27 23:01:48
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "algoritmos"
#

DROP TABLE IF EXISTS `algoritmos`;
CREATE TABLE `algoritmos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `algoritmo` bit(1) NOT NULL DEFAULT b'0',
  `colaboradores` text NOT NULL,
  `lenguaje` varchar(25) NOT NULL DEFAULT '',
  `introduccion` text NOT NULL,
  `categoria` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "algoritmos"
#


#
# Structure for table "articulos"
#

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE `articulos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `articulo` bit(1) DEFAULT NULL,
  `colaboradores` text NOT NULL,
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `introduccion` text NOT NULL,
  `categoria` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "articulos"
#


#
# Structure for table "equipo"
#

DROP TABLE IF EXISTS `equipo`;
CREATE TABLE `equipo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL DEFAULT '',
  `estudio` varchar(100) NOT NULL DEFAULT '',
  `correo` varchar(50) NOT NULL DEFAULT '',
  `informacion` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "equipo"
#


#
# Structure for table "index"
#

DROP TABLE IF EXISTS `index`;
CREATE TABLE `index` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL DEFAULT '',
  `introduccion` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "index"
#

INSERT INTO `index` VALUES (1,'CGTDA','bla\nbla');
