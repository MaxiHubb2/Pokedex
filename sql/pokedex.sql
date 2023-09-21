-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-09-2023 a las 00:43:42
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

CREATE TABLE IF NOT EXISTS `pokemon` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identificador` int DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `tipo` int DEFAULT NULL,
  `descripcion` text,
  `vida` int DEFAULT NULL,
  `defensa` int DEFAULT NULL,
  `peso` int DEFAULT NULL,
  `velocidad` int DEFAULT NULL,
  `ataque` int DEFAULT NULL,
  `img` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identificador` (`identificador`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

ALTER TABLE `pokemon` ADD COLUMN `tipo_id` int DEFAULT NULL;
ALTER TABLE `tipos_pokemon` ADD `color_fondo` varchar(20) NOT NULL;

SELECT p.id, p.identificador, p.nombre, t.nombre as tipo_nombre, p.descripcion, p.vida, p.defensa, p.peso, p.velocidad, p.ataque, p.img
FROM pokemon p
JOIN tipos_pokemon t ON p.tipo_id = t.id;

-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `identificador`, `nombre`, `tipo`, `descripcion`, `vida`, `defensa`, `peso`, `velocidad`, `ataque`, `img`,`tipo_id`)
VALUES
	(11, 12, 'Pikachu', 4, 
  'Pikachu almacena una gran cantidad de electricidad en sus mejillas. 
  Estas parecen cargarse elÃ©ctricamente durante la noche mientras duerme. Las mejillas de Pikachu tambiÃ©n pueden ser recargadas mediante una descarga elÃ©ctrica, como se ha podido observar en algunos episodios del anime. 
  A veces suelta unas pequeÃ±as descargas cuando se acaba de despertar. Las mejillas son las que generan electricidad, pero esta es conducida y descargada por la punta de su cola produciendo descargas elÃ©ctricas, que aumentan de poder dependiendo del estado de Ã¡nimo de Pikachu. 
  Muchas veces, en las tormentas se juntan y absorben electricidad de los relÃ¡mpagos', 
  
  65, 65, 65, 65, 65, 'pikachu.jpg',4),
                          
    (12, 13, 'Bulbasaur', 3, 
    
    'Bulbasaur es un PokÃ©mon cuadrÃºpedo de color verde, posee manchas de una tonalidad mÃ¡s oscura del mismo color con distintas formas geomÃ©tricas. 
    Su cabeza representa cerca de un tercio de su cuerpo. En su frente se ubican tres manchas que pueden cambiar de posiciÃ³n, forma o lugar dependiendo del ejemplar. 
    Tiene como orejas muÃ±ones pequeÃ±os y puntiagudos. Sus ojos son grandes y de color rojo. Sus patas son cortas y posee tres garras en cada una. Este PokÃ©mon tiene plantado un bulbo en el lomo desde que nace, esta semilla crece y se desarrolla a lo largo del ciclo de vida de Bulbasaur a medida que suceden sus evoluciones. El bulbo absorbe y almacena la energÃ­a solar que Bulbasaur necesita para hacer florecer el bulbo de su lomo y evolucionar en Ivysaur. Dicen que cuanta mÃ¡s luz consuma la semilla, mÃ¡s rÃ¡pido crecerÃ¡ y brotarÃ¡, por lo que es muy comÃºn ver a este PokÃ©mon tumbado echÃ¡ndose una siesta en lugares donde los rayos del sol lleguen a plenitud. Por otro lado, gracias a los nutrientes que el bulbo almacena, puede pasar varios dÃ­as sin comer. Su cuerpo segÃºn a palabras de Ken Sugimori y Junichi Masuda en una entrevista, estÃ¡ basado en un anfibio (sapo o rana), al igual que toda su lÃ­nea evolutiva.3\r\n\r\nEl bulbo de Bulbasaur le ayuda a defenderse de los enemigos, y desde Ã©l puede disparar ataques tales como rayo solar y drenadoras entre otros movimientos.\r\n\r\nNo es muy raro encontrarlo en jardines y zonas cercanas a fuentes de agua. Se los puede atraer con el aroma de las flores. 
    SegÃºn el anime, una vez al aÃ±o, cuando estos PokÃ©mon estÃ¡n listos para evolucionar suelen reunirse en grandes cantidades en un JardÃ­n Misterioso mientras hacen un ritual a la luz de la luna junto a un gran Venusaur.', 
    
    60, 70, 70, 70, 70, 'bulbasaur.png',3),
    
     (13, 14, 'Blastoise', 1, 'Descripción de Blastoise...', 120, 40, 60, 80, 90, 'blastoise.png',1),
    (14, 15, 'Charizard', 2, 'Descripción de Charizard...', 160, 50, 60, 40, 30, 'charizard.png',2),
    (15, 16, 'Growlithe', 2, 'Descripción de Growlithe...', 70, 60, 30, 40, 20, 'growlithe.png',2),
    (16, 17, 'Ivysaur', 3, 'Descripción de Ivysaur...', 65, 70, 70, 70, 70, 'ivysaur.png',3),
    (17, 18, 'Vileplume', 3, 'Descripción de Vileplume...', 67, 70, 70, 70, 70, 'vileplume.png',3),
    (18, 19, 'Squirtle', 1, 'Descripción de Squirtle...', 62, 70, 70, 70, 70, 'squirtle.png',1),
    (19, 20, 'Psyduck', 1, 'Descripción de Psyduck...', 91, 70, 70, 70, 70, 'psyduck.png',1),
    (30, 21, 'Jolteon', 4, 'Descripción de Jolteon...', 95, 20, 10, 50, 80, 'jolteon.png',4);


-- --------------------------------------------------------



--
-- Estructura de tabla para la tabla `tipos_pokemon`

INSERT INTO `tipos_pokemon` (`id`, `nombre`, `descripcion`, `color_fondo`) 
VALUES
      (1, 'Agua', 'Tipo de Pokemon asociado con agua y habilidades acuáticas.','#3c8ce2'),
      (2, 'Fuego', 'Tipo de Pokemon asociado con fuego y habilidades relacionadas con el fuego.','#c7290d'),
      (3, 'Planta', 'Tipo de Pokemon asociado con plantas y habilidades relacionadas con la naturaleza.','#39b33f'),
      (4, 'Electrico', 'Tipo de Pokemon asociado con electricidad y habilidades eléctricas.','#c1db2b');
--

CREATE TABLE IF NOT EXISTS `tipos_pokemon` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;


--
-- Volcado de datos para la tabla `tipos_pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (

  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(4, 'usuario', 'test', 'poketest@mail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
