-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2018 a las 20:17:16
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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Tecnologia'),
(2, 'Artes'),
(3, 'Musica'),
(4, 'Deportes'),
(5, 'Economia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2018_12_19_185142_create_table_post', 1),
(4, '2018_12_19_185208_create_table_pagina', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id`, `titulo`, `autor`, `contenido`, `created_at`, `updated_at`) VALUES
(82, 'Sed ab quo.', 'Dr. Antonietta Schumm Jr.', 'Possimus.', '2018-12-18 06:10:29', '2018-11-25 22:08:46'),
(83, 'Labore voluptates.', 'Alessandro Runolfsson', 'Ad.', '2018-11-25 14:16:06', '2018-11-24 15:30:42'),
(84, 'Unde dolor.', 'Mr. Kobe Altenwerth', 'Porro ut.', '2018-12-10 10:29:20', '2018-12-17 20:36:59'),
(85, 'Vitae in.', 'Deborah Kuhlman', 'Rerum.', '2018-12-16 23:44:25', '2018-12-17 05:07:31'),
(86, 'Totam amet officia.', 'Rene Bode', 'Inventore.', '2018-12-06 09:28:16', '2018-12-04 09:00:20'),
(87, 'Molestiae quae non.', 'Trevion Rowe', 'Ut ut.', '2018-12-05 00:53:38', '2018-12-05 01:58:19'),
(88, 'Enim recusandae quibusdam.', 'Amina Ernser', 'Suscipit.', '2018-12-05 03:45:53', '2018-11-28 21:57:56'),
(89, 'Sunt numquam aperiam.', 'Prof. Major Hoeger DDS', 'Deleniti.', '2018-12-12 12:17:53', '2018-12-13 19:10:33'),
(90, 'Veritatis nostrum esse.', 'Bradley Osinski', 'Veniam.', '2018-12-18 08:36:45', '2018-12-11 00:17:13'),
(91, 'Id vel.', 'Retha Greenfelder', 'Velit.', '2018-11-29 12:22:44', '2018-11-26 12:09:28'),
(92, 'Eos dignissimos voluptate.', 'Boris McClure', 'Maxime.', '2018-12-13 05:09:18', '2018-12-04 10:42:40'),
(93, 'Distinctio explicabo est.', 'Lilla Klocko', 'In ut.', '2018-12-19 15:36:18', '2018-11-27 02:15:18'),
(94, 'Voluptatem cumque.', 'Hilda Grady', 'Provident.', '2018-11-25 17:45:00', '2018-12-17 07:22:08'),
(95, 'Voluptatem consequatur ducimus.', 'Dr. Garrett Runte', 'Quos.', '2018-12-10 17:21:42', '2018-12-08 02:17:20'),
(96, 'Deleniti enim.', 'Eloisa Funk V', 'Magni et.', '2018-12-07 16:41:16', '2018-11-23 08:37:58'),
(97, 'Nulla autem.', 'Prof. Samir Schultz', 'Nostrum.', '2018-12-03 07:35:20', '2018-11-24 02:20:41'),
(98, 'Inventore quam.', 'Joey Bernhard', 'Itaque.', '2018-12-07 10:16:09', '2018-12-15 05:44:41'),
(99, 'Qui eius.', 'Dr. Madilyn Johnston', 'Non.', '2018-11-22 04:15:05', '2018-12-07 15:16:58'),
(100, 'Et ut et.', 'Cicero Pfeffer', 'Velit.', '2018-12-21 18:10:55', '2018-11-23 09:35:54'),
(101, 'Veniam quam.', 'Jo Zieme I', 'Non.', '2018-12-02 19:44:36', '2018-12-18 04:05:50'),
(102, 'fdsf', 'fsd', 'fsd', '2018-12-27 20:07:31', '2018-12-27 20:07:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `titulo`, `autor`, `contenido`, `created_at`, `updated_at`) VALUES
(88, 'Illo dolorem provident.', 'Walton Pollich', 'Officia.', '2018-12-03 18:21:40', '2018-12-15 05:37:18'),
(89, 'Assumenda ut itaque.', 'Miss Jaida Feeney V', 'Quos.', '2018-12-21 13:24:04', '2018-11-29 01:43:08'),
(90, 'Quas quae quia.', 'Andres Frami', 'Voluptas.', '2018-12-05 21:19:11', '2018-11-29 19:24:00'),
(91, 'Itaque amet.', 'Mr. Irwin Heaney', 'Qui est.', '2018-12-04 02:12:14', '2018-12-11 07:21:51'),
(92, 'Eos consequatur expedita.', 'Mr. Ewald Heaney', 'Nulla.', '2018-12-07 05:46:45', '2018-12-15 18:50:43'),
(93, 'Quia consequuntur eos.', 'Daphnee Waelchi', 'Ducimus.', '2018-12-16 06:32:30', '2018-11-24 06:54:28'),
(94, 'Recusandae illo.', 'Ignatius Kris', 'Molestiae.', '2018-12-20 03:43:12', '2018-12-20 11:16:43'),
(95, 'Consequatur et.', 'Marquise Bruen PhD', 'Dolorem.', '2018-12-09 14:04:42', '2018-11-27 05:58:36'),
(96, 'Iste velit labore.', 'Dr. Daniela Stanton III', 'Ab.', '2018-11-24 01:44:41', '2018-11-26 19:32:55'),
(98, 'Sapiente qui aut.', 'Mr. Joany Larson II', 'Ex omnis.', '2018-11-27 00:47:28', '2018-12-20 22:21:56'),
(99, 'Aut voluptatem vitae.', 'Brandy Wisoky MD', 'Dolorum.', '2018-12-11 23:22:09', '2018-12-16 01:09:48'),
(100, 'Ut voluptatem dolores.', 'Prof. Aurelie Price IV', 'Impedit.', '2018-12-11 04:08:51', '2018-12-21 08:13:29'),
(101, 'Non aut.', 'Marlin Ward', 'Aut.', '2018-12-02 09:22:21', '2018-11-22 09:40:52'),
(102, 'Et excepturi enim.', 'Mr. Reed Baumbach PhD', 'Omnis.', '2018-12-12 15:56:12', '2018-11-23 15:35:24'),
(103, 'Fugiat et.', 'Karson Wiza', 'Tempora.', '2018-12-09 11:47:02', '2018-11-23 13:46:12'),
(104, 'Recusandae dolores dicta.', 'Oceane Bernhard', 'Et.', '2018-12-12 16:05:22', '2018-12-08 20:08:14'),
(105, 'Error esse mollitia.', 'Leola O\'Connell DVM', 'Nam ipsum.', '2018-12-13 06:34:16', '2018-11-23 19:23:19'),
(106, 'Ut placeat.', 'Mr. Frank Fritsch', 'Neque.', '2018-12-10 00:55:09', '2018-12-17 21:33:11'),
(107, 'gfdsg', 'fdgdf', 'fg', '2018-12-27 16:28:33', '2018-12-27 16:28:33'),
(108, 'fgg', 'fdgfd', 'fgdg', '2018-12-27 20:06:45', '2018-12-27 20:06:45');

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
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(107, 2),
(87, 1),
(108, 1),
(108, 2),
(88, 1);

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
(2, 'admin', 'admin@gmail.com', '$2y$10$.jIqtRUvGzKw.1Y1./9SKeW7mudd6AlM4LdrJgGKLMEVFPDJJiwva', '2QxZ4CAAmgozx9qR2dg6L5ljn42tCsR24W5W1OWo9PwcIEJDXRGnbLjCyGio', 1, 1, '2018-12-27 18:36:10', '0000-00-00 00:00:00'),
(3, 'usuario', 'u@gmail.com', '$2y$10$.jIqtRUvGzKw.1Y1./9SKeW7mudd6AlM4LdrJgGKLMEVFPDJJiwva', 'nmCKn3UbqYmYPzb1TakQHOj4c5ewPqporSPGVz9hmwTotu9k3Ox6L7isPwsv', 2, 1, '2018-12-27 16:16:29', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
