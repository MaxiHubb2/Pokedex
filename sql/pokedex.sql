-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-09-2023 a las 00:54:57
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokedex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE IF NOT EXISTS `pokemon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` int(11) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `descripcion` text,
  `vida` int(11) DEFAULT NULL,
  `defensa` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `velocidad` int(11) DEFAULT NULL,
  `ataque` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identificador` (`identificador`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_pokemon`
--

DROP TABLE IF EXISTS `tipos_pokemon`;
CREATE TABLE IF NOT EXISTS `tipos_pokemon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_pokemon`
--

INSERT INTO `tipos_pokemon` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Agua', 'Tipo de Pokemon asociado con agua y habilidades acuáticas.'),
(2, 'Fuego', 'Tipo de Pokemon asociado con fuego y habilidades relacionadas con el fuego.'),
(3, 'Planta', 'Tipo de Pokemon asociado con plantas y habilidades relacionadas con la naturaleza.'),
(4, 'Electrico', 'Tipo de Pokemon asociado con electricidad y habilidades eléctricas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
