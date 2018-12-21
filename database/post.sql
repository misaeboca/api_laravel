-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2018 a las 19:38:47
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


INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Tecnologia'),
(2, 'Artes');
(3, 'Musica'),
(4, 'Deporte');
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
(1, 'Titulo de Prueba', 'Prof. Charlie Labadie III', 'Contenido de Prueba', '2018-12-19 23:12:41', '2018-12-19 23:12:41'),
(2, 'Titulo de Prueba', 'Josianne Jacobs', 'Contenido de Prueba', '2018-12-19 23:12:41', '2018-12-19 23:12:41'),
(3, 'Titulo de Prueba', 'Amparo Miller', 'Contenido de Prueba', '2018-12-19 23:12:41', '2018-12-19 23:12:41'),
(4, 'Titulo de Prueba', 'Cullen Beer II', 'Contenido de Prueba', '2018-12-19 23:12:41', '2018-12-19 23:12:41'),
(5, 'Titulo de Prueba', 'Candice Crist Jr.', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(6, 'Titulo de Prueba', 'Dr. Dustin Schuppe II', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(7, 'Titulo de Prueba', 'Christ Schuster', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(8, 'Titulo de Prueba', 'Daphney Steuber', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(9, 'Titulo de Prueba', 'Susie Zieme', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(10, 'Titulo de Prueba', 'Annie Greenfelder', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(11, 'Titulo de Prueba', 'Rigoberto Schowalter V', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(12, 'Titulo de Prueba', 'Vernie Cremin', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(13, 'Titulo de Prueba', 'Miss Lyda Smith', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(14, 'Titulo de Prueba', 'Ms. Alison Kohler IV', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(15, 'Titulo de Prueba', 'Scotty Bogisich', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(16, 'Titulo de Prueba', 'Elliot Vandervort', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(17, 'Titulo de Prueba', 'Mrs. Telly Stracke V', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(18, 'Titulo de Prueba', 'Daniela Brown V', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(19, 'Titulo de Prueba', 'Jasper Zemlak', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(20, 'Titulo de Prueba', 'Estell Leffler', 'Contenido de Prueba', '2018-12-19 23:12:42', '2018-12-19 23:12:42'),
(21, 'fgdh', 'gfh', 'gh', '2018-12-21 20:06:51', '2018-12-21 20:06:51'),
(22, 'Est quaerat quo distinctio.', 'Nestor Baumbach', 'Ullam laborum nam accusantium rerum aut nam. Libero atque provident debitis iusto. Nam sunt aliquid reiciendis sed odit exercitationem. Delectus impedit ut voluptates eos temporibus quibusdam atque.', '2018-12-08 19:14:35', '2018-12-13 15:44:56'),
(23, 'Consectetur voluptas est nesciunt.', 'Mr. Hans Sauer', 'Laudantium cumque quasi cumque ipsa aut libero. Voluptatibus quis consequatur dolorem dolorem similique explicabo. Animi laudantium quas quia tenetur.', '2018-12-20 07:40:10', '2018-12-12 11:39:41'),
(24, 'Corporis aut delectus consequatur saepe.', 'Willard Cormier', 'Ut et enim sed fugit sit quos. Distinctio est in necessitatibus et vel laborum. Animi voluptatem molestias laboriosam sint magni.', '2018-12-07 16:36:31', '2018-12-17 13:13:19'),
(25, 'Nam nemo possimus.', 'Mertie Hermiston', 'Magnam non eos ut voluptate quas modi aut. Aperiam pariatur ratione impedit voluptas.', '2018-12-04 20:16:50', '2018-11-28 20:29:02'),
(26, 'Nihil porro quae laboriosam.', 'Abbey Reichel', 'Officiis molestiae dolorem sapiente aut. Esse nulla doloremque dicta et a omnis. Est autem dicta vel ut cupiditate facilis nihil.', '2018-12-13 03:00:50', '2018-12-15 17:57:59'),
(27, 'Quia pariatur et qui maxime.', 'Valerie Russel IV', 'Ea quis reprehenderit dignissimos rerum et ex quia. Optio quod perspiciatis enim saepe enim ut veniam. Hic expedita in unde quos velit et modi. Veniam sed enim eligendi quo laboriosam voluptatibus.', '2018-12-08 05:16:55', '2018-12-08 22:02:33'),
(28, 'Veritatis omnis eos sed.', 'Lily Weimann Jr.', 'Repellat quia sequi asperiores ea minima ratione. Ipsa earum deleniti ut sunt ullam. Sapiente expedita praesentium aut autem velit sint.', '2018-12-02 00:49:34', '2018-11-24 16:56:14'),
(29, 'Laborum et est.', 'Marco Dibbert', 'Aut suscipit sit quasi temporibus. Tempora et suscipit explicabo fugit sit. In est non voluptas error. Maxime aliquid exercitationem aut.', '2018-11-27 12:03:57', '2018-12-20 04:37:30'),
(30, 'Aut omnis velit qui iure.', 'Rickey Crona', 'Facilis magni perferendis sit sunt quod voluptatibus quam. Sed voluptate veniam veritatis inventore voluptatem sed error.', '2018-11-27 21:25:29', '2018-12-06 08:33:25'),
(31, 'Facilis possimus aut ad.', 'Devin Fahey', 'Eaque nulla fugit vero deleniti facere in dicta. Expedita quia ex corrupti minima soluta. Ea qui deserunt accusamus harum.', '2018-12-13 17:46:01', '2018-12-11 14:53:18'),
(32, 'Et fugiat quo dolorem.', 'Hunter Gleichner', 'Quas ea doloribus recusandae sit vel non tenetur maxime. Vitae qui id sed et suscipit. Aspernatur perspiciatis quibusdam similique eligendi possimus.', '2018-11-27 08:24:51', '2018-12-16 21:45:56'),
(33, 'Accusantium possimus alias est.', 'Chyna Zemlak', 'Similique molestiae aut aspernatur neque vel dolorem amet. Ratione vero veritatis veritatis. Mollitia atque sed voluptates aut et. Doloribus hic occaecati aut reiciendis in eligendi.', '2018-12-09 12:38:15', '2018-12-05 13:48:45'),
(34, 'Omnis earum et similique.', 'Prof. Sonia O\'Kon', 'Sunt autem cumque qui expedita. Quidem qui est aut minus ut sed. Qui placeat qui rerum quam.', '2018-12-01 22:45:01', '2018-11-24 09:54:18'),
(35, 'Autem exercitationem adipisci.', 'Kane Langworth', 'Suscipit sit quaerat aspernatur et consequatur. Fugit temporibus rem porro iste sunt a officiis in. Enim fugit exercitationem magnam culpa et. Consequuntur facere molestiae alias molestiae.', '2018-12-06 23:34:02', '2018-12-04 01:38:55'),
(36, 'Itaque perferendis asperiores.', 'Walter Lindgren', 'Asperiores dolorum ipsam voluptas et. Quas quisquam repellat dolor sapiente explicabo. Eveniet voluptas officiis quia. Nam fugit labore ad consequatur eum et.', '2018-12-14 06:02:19', '2018-12-16 22:07:21'),
(37, 'Vero sapiente repudiandae magni ex.', 'Maxie Koch', 'Aut cumque odio aut iusto ut. Et et numquam numquam quia quas eos similique. Porro amet consectetur ut veritatis.', '2018-11-30 13:09:17', '2018-11-30 02:46:25'),
(38, 'Consequuntur blanditiis possimus et.', 'Estella Kovacek', 'Exercitationem at molestiae consequuntur minus animi velit ut. Assumenda ducimus quia consequatur dolore sit et reprehenderit. Mollitia dolores vitae consequatur culpa mollitia.', '2018-12-08 01:45:21', '2018-12-15 18:20:43'),
(39, 'Ipsum impedit reprehenderit.', 'Walter Kemmer Jr.', 'Nihil laboriosam voluptates atque velit vel. Et itaque cupiditate repellat sed ullam blanditiis. Incidunt velit ut qui assumenda.', '2018-12-11 04:20:22', '2018-11-23 10:12:32'),
(40, 'Nostrum inventore ut.', 'Ms. Deborah Harber PhD', 'Omnis perspiciatis qui error. Consequatur et ut consequatur ipsum quo consequuntur ut. Doloribus quae qui harum dolores recusandae.', '2018-11-26 14:58:34', '2018-12-17 10:45:03'),
(41, 'Quo eligendi in.', 'Blanca Frami', 'Maxime eius eaque corporis dolor occaecati numquam. Aperiam quae doloribus et possimus omnis veritatis et. Doloremque distinctio et repellendus occaecati. Hic alias ullam itaque enim id eum deleniti.', '2018-12-03 15:32:39', '2018-11-29 13:37:53');

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
(47, 'Saepe libero consequatur vero.', 'Toney Gutmann', 'Aut unde inventore sed cum a nisi eum. Sint minus est fugiat itaque id itaque optio. Autem sint dolorum culpa et provident maxime.', '2018-11-25 20:04:17', '2018-12-18 11:59:34'),
(48, 'Magni consequuntur dolorum.', 'Dr. Lorenza Nicolas', 'Commodi rerum ipsum nihil est qui nihil enim non. Nobis quo libero voluptas non. Laborum sit porro doloribus.', '2018-12-16 08:23:42', '2018-11-29 06:02:33'),
(49, 'Eaque possimus quia.', 'Dr. Rosendo Lowe II', 'Nam ducimus unde inventore adipisci. Quis saepe quam dolores molestiae sapiente reiciendis.', '2018-12-10 01:19:01', '2018-12-03 06:00:41'),
(50, 'Ut qui enim et.', 'Stefanie Zemlak', 'Omnis non asperiores sed qui eveniet earum necessitatibus. Labore ut assumenda reiciendis atque quasi ducimus eos. Et consequatur perspiciatis repudiandae rerum. Hic fugit sed deleniti quasi modi et.', '2018-12-01 19:47:59', '2018-12-18 04:52:52'),
(51, 'Porro consequatur et atque.', 'Guadalupe Stiedemann V', 'Doloribus sapiente numquam dolores dolore. Similique ullam voluptatem voluptatem officia neque. Quae omnis est itaque minima numquam amet architecto.', '2018-12-14 16:06:26', '2018-12-21 18:17:13'),
(52, 'Asperiores ullam.', 'Ara Beahan', 'Qui quia sed et ab et. Officia esse cum tenetur ut et. Voluptatem dolorem saepe aliquam.', '2018-12-20 10:35:50', '2018-12-10 04:06:07'),
(53, 'Harum aliquid itaque.', 'Nikita Tromp', 'Repellat molestiae aut dolorem alias nisi nobis praesentium. Quam adipisci suscipit consequatur praesentium ut. Doloribus porro ea id aut sapiente est nobis. Praesentium id aut iusto.', '2018-12-17 00:40:08', '2018-12-03 07:05:17'),
(54, 'Quia impedit laboriosam.', 'Mr. Chase Feeney IV', 'Exercitationem accusamus ut illum dolorem dolor veniam. Expedita nihil voluptas sapiente.', '2018-12-17 17:04:09', '2018-12-04 02:03:26'),
(55, 'Consequatur qui distinctio.', 'Ayana Grady', 'Illo totam odit incidunt. Deserunt laudantium fugiat sint ut sit. Ipsa corporis ipsa consectetur necessitatibus.', '2018-11-29 22:31:44', '2018-11-29 20:59:49'),
(56, 'Repudiandae sit id aut.', 'Randi Cartwright', 'Voluptas facilis quisquam occaecati deserunt. Voluptatem iure blanditiis dolorem magni eveniet dolores iste. Ullam odit autem quia et consequatur atque recusandae.', '2018-12-06 14:46:28', '2018-11-21 23:02:49'),
(57, 'Nisi et aliquam dicta.', 'Dr. Matteo McClure II', 'Nisi maxime facere sit dolorem perferendis dignissimos. Quam suscipit omnis fugiat asperiores quae ipsum est. Incidunt pariatur deserunt ipsum quos. Suscipit sed alias non voluptatem recusandae.', '2018-11-23 04:18:11', '2018-12-19 04:41:36'),
(58, 'Eveniet accusamus harum fuga.', 'Zelma Jakubowski', 'Nihil ducimus sed quasi nisi assumenda sit voluptatem. Quaerat placeat mollitia sed eaque maiores quo. Quis nemo iusto quos.', '2018-12-17 01:16:59', '2018-12-01 20:22:22'),
(59, 'Voluptatum ipsum.', 'Miss Lisette Cassin IV', 'Ut soluta et veniam assumenda ullam et qui. Voluptatem veritatis sed qui. Facilis illum voluptatem est. Placeat minus quidem facilis aut aliquid voluptatem laudantium.', '2018-12-04 22:09:49', '2018-12-06 14:39:53'),
(60, 'Vel odio amet.', 'Emmanuel Bartell', 'Pariatur sit possimus necessitatibus eum sequi at non. Qui similique molestias ut perspiciatis. Eligendi tempora qui harum et.', '2018-11-25 05:37:01', '2018-12-16 02:15:37'),
(61, 'Quam laudantium est.', 'Mr. Kameron Yundt MD', 'Eum eos similique commodi laborum. Aut quia aperiam qui quia iste qui enim asperiores. Quisquam maxime minus eaque animi aut hic.', '2018-11-29 03:33:55', '2018-12-05 20:53:26'),
(62, 'Cumque quisquam eaque.', 'Ora Lind', 'Quaerat quia molestias incidunt nobis suscipit. Quos natus praesentium placeat iure velit illo qui repellendus. Exercitationem nesciunt quos enim.', '2018-12-09 04:50:47', '2018-12-14 13:42:58'),
(63, 'Sint doloremque illo.', 'Dr. Kacey Bednar', 'Adipisci adipisci rerum eius. Natus excepturi sed officia odio porro ducimus. Est fuga aut repellendus impedit. Aut nihil laborum veritatis aut et iure eius. Fugiat vitae dicta deleniti et.', '2018-12-17 03:23:49', '2018-12-10 11:57:10'),
(64, 'Dolorem et impedit aut.', 'Casimir Hahn', 'Autem quae quis ab consequatur. Assumenda saepe cumque ut non sint autem nam. Exercitationem ullam nihil velit ducimus est id ullam quia. Eveniet harum beatae a voluptas et blanditiis.', '2018-12-15 15:57:51', '2018-11-29 07:57:36'),
(65, 'Est est voluptatem in.', 'Mr. Mervin Mayert I', 'Eveniet enim autem voluptates ad. Suscipit rerum doloribus necessitatibus dicta. Placeat pariatur quo libero est. Ab officia modi ut.', '2018-12-12 16:13:51', '2018-11-24 00:19:14'),
(66, 'Fugit optio tenetur dolorum.', 'Mrs. Name Dickens IV', 'Non reiciendis impedit sunt magnam voluptate accusantium. Nemo deserunt dolorem vitae earum quia. Rerum quis maxime architecto sit qui qui. Asperiores voluptatem fugiat ipsum ea ea voluptas.', '2018-12-06 23:37:25', '2018-11-29 12:47:59');

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
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
