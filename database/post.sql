-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2018 a las 18:24:12
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
