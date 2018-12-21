-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2018 a las 13:44:34
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `post`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fecha_publicacion` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `fecha_publicacion`) VALUES
(1, 'prueba de sistemas', '2018-10-11'),
(2, 'prueba dos', '2018-10-12'),
(3, 'prueba de sistemas', '2018-10-11'),
(4, 'prueba dos', '2018-10-12'),
(5, 'prueba de sistemas', '2018-10-11'),
(6, 'prueba dos', '2018-10-12'),
(7, 'prueba de sistemas', '2018-10-11'),
(8, 'prueba dos', '2018-10-12'),
(9, 'prueba de sistemas', '2018-10-11'),
(10, 'prueba dos', '2018-10-12'),
(11, 'prueba de sistemas', '2018-10-11'),
(12, 'prueba dos', '2018-10-12'),
(13, 'prueba de sistemas', '2018-10-11'),
(14, 'prueba dos', '2018-10-12'),
(15, 'prueba de sistemas', '2018-10-11'),
(16, 'prueba dos', '2018-10-12'),
(17, 'prueba de sistemas', '2018-10-11'),
(18, 'prueba dos', '2018-10-12'),
(19, 'prueba de sistemas', '2018-10-11'),
(20, 'prueba dos', '2018-10-12'),
(21, 'prueba de sistemas', '2018-10-11'),
(22, 'prueba dos', '2018-10-12'),
(23, 'prueba de sistemas', '2018-10-11'),
(24, 'prueba dos', '2018-10-12'),
(25, 'prueba de sistemas', '2018-10-11'),
(26, 'prueba dos', '2018-10-12'),
(27, 'prueba de sistemas', '2018-10-11'),
(28, 'prueba dos', '2018-10-12'),
(29, 'prueba de sistemas', '2018-10-11'),
(30, 'prueba dos', '2018-10-12'),
(31, 'prueba de sistemas', '2018-10-11'),
(32, 'prueba dos', '2018-10-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
