-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-09-2023 a las 02:20:49
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
  `img` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identificador` (`identificador`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `identificador`, `nombre`, `tipo`, `descripcion`, `vida`, `defensa`, `peso`, `velocidad`, `ataque`, `img`) VALUES
(7, 1, 'Bulbasaur', 3, 'A Bulbasaur es facil de verle echandose una siesta al sol. La semilla que tiene en el lomo va creciendo cada vez mas a medida que absorbe los rayos del sol ', 80, 80, 7, 3, 3, '7.gif'),
(8, 25, 'Pikachu', 4, 'Cada vez que un Pikachu se encuentra con algo nuevo, le lanza una descarga electrica.Cuando se ve alguna baya chamuscada, es muy probable que sea obra de un Pikachu, ya que a veces no controlan la intensidad de la descarga', 435, 67, 5, 90, 55, '8.gif'),
(9, 143, 'Snorlax', 4, 'Snorlax es un Pokemon corpulento y dormilón. Se caracteriza por su gran tamaño y su pelaje azul verdoso. Es conocido por su amor por el sueño y su apetito voraz. A menudo, bloquea caminos y carreteras al dormir profundamente en medio de la ruta, lo que lo convierte en un obstáculo molesto para los entrenadores. A pesar de su naturaleza tranquila, cuando se enfurece o es despertado, puede convertirse en un poderoso oponente en batallas. Es un Pokemon Normal de gran resistencia y potencia.', 160, 65, 460, 30, 110, '9.gif'),
(10, 4, 'Charmender', 2, 'La llama que tiene en la punta de la cola arde segun sus sentimientos. Llamea levemente cuando está alegre y arde vigorosamente cuando esta enfadado', 39, 43, 9, 65, 52, '10.gif');

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
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(4, 'usuario', 'test', 'poketest@mail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
