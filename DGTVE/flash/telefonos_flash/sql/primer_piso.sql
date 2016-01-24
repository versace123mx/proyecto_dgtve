-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-07-2011 a las 23:57:19
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
-- Estructura de tabla para la tabla `primer_piso`
--

CREATE TABLE IF NOT EXISTS `primer_piso` (
  `nombres` varchar(30) NOT NULL,
  `appaterno` varchar(20) NOT NULL,
  `apmaterno` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `modelo` varchar(10) NOT NULL,
  `inventario` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `iptel` tinyint(3) unsigned NOT NULL,
  `mac` varchar(12) NOT NULL,
  `ext` int(6) unsigned NOT NULL,
  `core` tinyint(1) unsigned NOT NULL,
  `clan` varchar(5) NOT NULL,
  `vlan` tinyint(2) unsigned NOT NULL,
  `compañia` varchar(20) DEFAULT NULL,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `foto` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`,`mac`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `primer_piso`
--

INSERT INTO `primer_piso` (`nombres`, `appaterno`, `apmaterno`, `area`, `modelo`, `inventario`, `serie`, `iptel`, `mac`, `ext`, `core`, `clan`, `vlan`, `compañia`, `id`, `foto`) VALUES
('Gustavo Javier', 'Marchena', 'Bárcenas', 'Telecom', 'A123', '324JKDS', '43576FSF3FS46', 45, 'DD890923DFSE', 23453, 5, '3.192', 17, 'Cisco', 1, NULL),
('Francisco', 'Lechuga', 'Hernandez', 'Telecom', 'A123', '324J3F4S', '43576FSF3F345', 89, 'DD890923DFSE', 23473, 5, '3.197', 17, 'Cisco', 2, NULL);
