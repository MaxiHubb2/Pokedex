-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-09-2023 a las 21:34:57
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `identificador`, `nombre`, `tipo`, `descripcion`, `vida`, `defensa`, `peso`, `velocidad`, `ataque`, `img`) VALUES
(1, 1, 'Pikachu', 4, 'Pikachu almacena una gran cantidad de electricidad en sus mejillas. Estas parecen cargarse elÃ©ctricamente durante la noche mientras duerme. Las mejillas de Pikachu tambiÃ©n pueden ser recargadas mediante una descarga elÃ©ctrica, como se ha podido observar en algunos episodios del anime. A veces suelta unas pequeÃ±as descargas cuando se acaba de despertar. Las mejillas son las que generan electricidad, pero esta es conducida y descargada por la punta de su cola produciendo descargas elÃ©ctricas, que aumentan de poder dependiendo del estado de Ã¡nimo de Pikachu. Muchas veces, en las tormentas se juntan y absorben electricidad de los relÃ¡mpagos.', 65, 65, 65, 65, 65, '1.gif'),
(6, 2, 'bulbasaur', 3, 'Bulbasaur es un PokÃ©mon cuadrÃºpedo de color verde, posee manchas de una tonalidad mÃ¡s oscura del mismo color con distintas formas geomÃ©tricas. Su cabeza representa cerca de un tercio de su cuerpo. En su frente se ubican tres manchas que pueden cambiar de posiciÃ³n, forma o lugar dependiendo del ejemplar. Tiene como orejas muÃ±ones pequeÃ±os y puntiagudos. Sus ojos son grandes y de color rojo. Sus patas son cortas y posee tres garras en cada una. Este PokÃ©mon tiene plantado un bulbo en el lomo desde que nace, esta semilla crece y se desarrolla a lo largo del ciclo de vida de Bulbasaur a medida que suceden sus evoluciones. El bulbo absorbe y almacena la energÃ­a solar que Bulbasaur necesita para hacer florecer el bulbo de su lomo y evolucionar en Ivysaur. Dicen que cuanta mÃ¡s luz consuma la semilla, mÃ¡s rÃ¡pido crecerÃ¡ y brotarÃ¡, por lo que es muy comÃºn ver a este PokÃ©mon tumbado echÃ¡ndose una siesta en lugares donde los rayos del sol lleguen a plenitud. Por otro lado, gracias a los nutrientes que el bulbo almacena, puede pasar varios dÃ­as sin comer. Su cuerpo segÃºn a palabras de Ken Sugimori y Junichi Masuda en una entrevista, estÃ¡ basado en un anfibio (sapo o rana), al igual que toda su lÃ­nea evolutiva.3\r\n\r\nEl bulbo de Bulbasaur le ayuda a defenderse de los enemigos, y desde Ã©l puede disparar ataques tales como rayo solar y drenadoras entre otros movimientos.\r\n\r\nNo es muy raro encontrarlo en jardines y zonas cercanas a fuentes de agua. Se los puede atraer con el aroma de las flores. SegÃºn el anime, una vez al aÃ±o, cuando estos PokÃ©mon estÃ¡n listos para evolucionar suelen reunirse en grandes cantidades en un JardÃ­n Misterioso mientras hacen un ritual a la luz de la luna junto a un gran Venusaur.\r\nEste contenido proviene de wikidex.net, y debe darse atribuciÃ³n a sus autores, tal como especifica la licencia.\r\nSe prohÃ­be su uso a PlagioDex (el wiki de FANDOOM), por copiar reiteradamente sin dar atribuciÃ³n', 50, 25, 15, 15, 25, '6.png');

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
