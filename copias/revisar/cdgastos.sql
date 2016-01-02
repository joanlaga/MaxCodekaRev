-- phpMyAdmin SQL Dump
-- version 4.0.10.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-10-2014 a las 13:47:00
-- Versión del servidor: 5.1.73
-- Versión de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cerra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cdgastos`
--

CREATE TABLE IF NOT EXISTS `cdgastos` (
  `id_cdgastos` bigint(20) NOT NULL,
  `empresa` bigint(20) NOT NULL,
  `operario` bigint(20) NOT NULL,
  `provedor` bigint(20) NOT NULL,
  `tipo` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `numero` text NOT NULL,
  `referencial` text NOT NULL,
  `concepto` text NOT NULL,
  `iponible` decimal(10,0) NOT NULL,
  `tiva` decimal(10,0) NOT NULL,
  `iva` decimal(10,0) NOT NULL,
  `importe` decimal(10,0) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `pagado` int(11) NOT NULL,
  `cif_nif` text NOT NULL,
  `nombre` text NOT NULL,
  `observacion` text NOT NULL,
  PRIMARY KEY (`id_cdgastos`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
