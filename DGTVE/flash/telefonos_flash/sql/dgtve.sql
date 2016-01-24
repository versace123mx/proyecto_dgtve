-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-07-2011 a las 01:11:59
-- Versión del servidor: 5.1.45
-- Versión de PHP: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dgtve`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general_tel`
--

CREATE TABLE IF NOT EXISTS `general_tel` (
  `id_empleado` int(4) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(30) NOT NULL,
  `appaterno` varchar(20) NOT NULL,
  `apmaterno` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `modelo` varchar(6) NOT NULL,
  `inventario` varchar(7) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `iptel` tinyint(3) unsigned NOT NULL,
  `mac` varchar(12) NOT NULL,
  `ext` int(6) unsigned NOT NULL,
  `core` tinyint(1) unsigned NOT NULL,
  `clan` varchar(5) NOT NULL,
  `vlan` tinyint(2) unsigned NOT NULL,
  `compañia` varchar(20) DEFAULT NULL,
  `foto` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `general_tel`
--

INSERT INTO `general_tel` (`id_empleado`, `nombres`, `appaterno`, `apmaterno`, `area`, `modelo`, `inventario`, `serie`, `iptel`, `mac`, `ext`, `core`, `clan`, `vlan`, `compañia`, `foto`) VALUES
(1, 'Gustavo Javier', 'Marchena', 'Bárcenas', 'Programacion', 'A123', '324JKDS', '43576FSF3FS46', 45, 'DD890923DFSE', 23453, 5, '12345', 17, 'Cisco', ''),
(2, 'Oscar', 'Placencia', 'Rojas', 'Produccion', 'B24', '454J3F4', '43576FSF3F345', 89, 'DD890923DFSE', 23473, 5, '3456', 18, 'Cisco', ''),
(3, 'Gariela', 'Marie', 'Lohmann', 'Produccion', '123de', '12wesd', 'wedf34', 126, '12qwaszxcder', 12321, 5, '23472', 16, 'Cisco', NULL),
(4, 'Francisco', 'Lechuga', 'Lechu', 'Telecom', 'A122', '324JKDD', '435763333FS46', 4, 'DD230923DFSE', 23454, 5, '3.192', 17, 'Avaya', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`) VALUES
(1, 'Alejandra', '12345'),
(2, 'gustavo', '12'),
(3, 'pedro', '1234'),
(4, 'Gabriela', ''),
(5, 'risitos', 'loves');
