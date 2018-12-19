-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2018 a las 15:49:20
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
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `contenido` text,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id`, `titulo`, `autor`, `contenido`, `created_at`, `updated_at`) VALUES
(1, 'fgg fds', 'fggd', 'ffg', '2018-12-13 19:02:04', '2018-12-13 20:03:13'),
(2, 'dsadsa', 'sadas', 'sa', '2018-12-13 19:02:54', '2018-12-13 19:02:54'),
(3, 'rtte', 'fdgfd', 'dfgfd', '2018-12-13 19:03:12', '2018-12-13 19:03:12'),
(4, 'fg', 'fd', 'gfd', '2018-12-14 13:19:07', '2018-12-14 13:19:07'),
(5, 'gf', 'fd', 'fgd', '2018-12-14 13:23:49', '2018-12-14 13:23:49'),
(6, 'sdf', 'vc', 'vcb', '2018-12-14 13:37:52', '2018-12-14 13:37:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `contenido` text,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `titulo`, `autor`, `contenido`, `created_at`, `updated_at`) VALUES
(40, 'asdasdsd asdd', 'asddasds', 'sdadasdssd', '2018-12-10 00:44:32', '2018-12-10 00:44:32'),
(41, 'asdasdsd asdd', 'asddasds', 'sdadasdssd', '2018-12-10 00:44:33', '2018-12-10 00:44:33'),
(42, 'asdasdsd asdd', 'asddasds', 'sdadasdssd', '2018-12-10 00:44:34', '2018-12-10 00:44:34'),
(43, 'asdasdsd asdd', 'asddasds', 'sdadasdssd', '2018-12-10 00:44:35', '2018-12-10 00:44:35'),
(44, 'asdasdsd asdd', 'asddasds', 'sdadasdssd', '2018-12-10 00:44:36', '2018-12-10 00:44:36'),
(45, 'asdasdsd asdd', 'asddasds', 'sdadasdssd', '2018-12-10 00:44:37', '2018-12-10 00:44:37');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_categoria`
--

CREATE TABLE `post_categoria` (
  `id_posts` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post_categoria`
--

INSERT INTO `post_categoria` (`id_posts`, `id_categoria`) VALUES
(38, 2),
(38, 3),
(40, 1),
(40, 2),
(41, 1),
(41, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `tipo`, `status`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$.jIqtRUvGzKw.1Y1./9SKeW7mudd6AlM4LdrJgGKLMEVFPDJJiwva', 'FI9SRJWVxdZXk5in8LWm8eEruuQUjEcObfTBfuhWbLxYg8aJAUXiVLF2WIYm', 1, 1, '2018-12-14 13:48:30', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
