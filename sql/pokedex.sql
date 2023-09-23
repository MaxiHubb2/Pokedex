-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-09-2023 a las 00:34:05
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `identificador`, `nombre`, `tipo`, `descripcion`, `vida`, `defensa`, `peso`, `velocidad`, `ataque`, `img`) VALUES
(11, 7, 'Squirtle', 1, 'Squirtle tiene forma de una tortuga semiacuÃ¡tica de una tonalidad azulada, su caparazÃ³n es color cafÃ©, las placas perifÃ©ricas de color blanco y finalmente su plastrÃ³n de una tonalidad crema. Posee una cola con la punta enrollada, ademÃ¡s de tres dedos en cada una de sus extremidades, una boca con una punta en forma de pico caracterÃ­stico de las tortugas y unos grandes ojos de tonalidad rojiza. Al nacer, su espalda se va hinchando hasta formarse un caparazÃ³n. Al principio es blando y elÃ¡stico; si lo golpeas, este rebotarÃ¡. Pero conforme pasa el tiempo, se irÃ¡ endureciendo para resistir los ataques de cualquier amenaza, ocultÃ¡ndose dentro de Ã©l cuando siente peligro. Estando escondido, puede lanzar una enorme presiÃ³n de agua desde su interior cuando tiene la oportunidad. Igualmente, retrae su cabeza y extremidades mientras duerme para sentirse seguro. A veces se puede llegar a ver cÃ³mo se mece su caparazÃ³n entre sueÃ±os. Su caparazÃ³n no solo le sirve de protecciÃ³n Ãºnicamente; con su forma redondeada y las hendiduras que posee, le sirven para reducir su resistencia en el agua y asÃ­ poder nadar a enormes velocidades. AdemÃ¡s de lanzar con gran precisiÃ³n chorros de agua a presiÃ³n por la boca, tambiÃ©n puede lanzar espuma y usar su duro caparazÃ³n para atacar. Siempre se lo ve cerca del agua, ya sea dulce o salada.', 72, 3, 9, 3, 379, '11.gif'),
(7, 1, 'Bulbasaur', 3, 'A Bulbasaur es facil de verle echandose una siesta al sol. La semilla que tiene en el lomo va creciendo cada vez mas a medida que absorbe los rayos del sol ', 80, 80, 7, 3, 3, '7.gif'),
(8, 25, 'Pikachu', 4, 'Cada vez que un Pikachu se encuentra con algo nuevo, le lanza una descarga electrica.Cuando se ve alguna baya chamuscada, es muy probable que sea obra de un Pikachu, ya que a veces no controlan la intensidad de la descarga', 435, 67, 5, 90, 55, '8.gif'),
(9, 143, 'Snorlax', 4, 'Su cuerpo es grande y redondeado, con una piel de color azul verdoso y una panza blanca. Tiene orejas pequeÃ±as, ojos cerrados y una expresiÃ³n tranquila y adormilada en su rostro. Snorlax es famoso por bloquear caminos y senderos debido a su constante sueÃ±o profundo.\r\n\r\nA pesar de su naturaleza apacible y tranquila, Snorlax posee una fuerza impresionante en la batalla cuando se despierta. TambiÃ©n es conocido por su apetito insaciable, siendo capaz de comer grandes cantidades de comida en un solo festÃ­n antes de volver a dormir. Este PokÃ©mon es querido por muchos seguidores de la franquicia por su encanto peculiar y su comportamiento relajado.\r\n\r\n\r\n\r\n\r\n\r\n', 160, 65, 460, 30, 110, '9.gif'),
(10, 4, 'Charmender', 2, 'La llama que tiene en la punta de la cola arde segÃºn sus sentimientos. Llamea levemente cuando estÃ¡ alegre y arde vigorosamente cuando esta enfadado', 39, 43, 9, 65, 52, '10.gif');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_pokemon`
--

INSERT INTO `tipos_pokemon` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Agua', 'Tipo de Pokemon asociado con agua y habilidades acuaticas.'),
(2, 'Fuego', 'Tipo de Pokemon asociado con fuego y habilidades relacionadas con el fuego.'),
(3, 'Planta', 'Tipo de Pokemon asociado con plantas y habilidades relacionadas con la naturaleza.'),
(4, 'Electrico', 'Tipo de Pokemon asociado con electricidad y habilidades eléctricas.'),
(5, 'Piedra', 'Tipo relacionado con elementos rocosos y resistentes.'),
(6, 'Volador', 'Tipo asociado con Pokémon que tienen la habilidad de volar o flotar en el aire.');


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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(4, 'usuario', 'test', 'poketest@mail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
