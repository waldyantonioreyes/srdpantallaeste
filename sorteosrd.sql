-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 17:19:36
-- Versión del servidor: 11.2.2-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sorteosrd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bankname` varchar(191) NOT NULL,
  `headercolor` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configurations`
--

INSERT INTO `configurations` (`id`, `user_id`, `bankname`, `headercolor`, `created_at`, `updated_at`) VALUES
(1, 1, 'Banca Gandoo', '#423d8a', '2024-04-17 03:19:02', '2024-04-18 05:02:56'),
(2, 7, 'banca waldy', '#31c47f', '2024-04-18 04:56:26', '2024-04-18 04:56:26'),
(3, 11, 'Banca Pepe', '#315dc4', '2024-04-28 11:24:38', '2024-04-28 11:24:38'),
(4, 14, 'BANCA JUANA EDITADA ', '#3b4f41', '2024-06-16 01:07:27', '2024-06-20 08:00:53'),
(5, 16, 'banca jose', '#31c45d', '2024-06-16 02:16:59', '2024-06-16 02:16:59'),
(6, 9, 'banca el polluelo ', '#5dc431', '2024-06-16 03:47:39', '2024-06-16 03:47:39'),
(7, 18, 'banca lorenzo ', '#433732', '2024-06-16 03:49:39', '2024-06-20 07:58:34'),
(8, 13, 'BANCA DANIEL', '#863919', '2024-06-20 08:06:51', '2024-06-20 08:06:51'),
(9, 19, 'BANCA DANIEL', '#f06124', '2024-06-20 08:09:52', '2024-06-20 08:09:52'),
(11, 21, 'BANCA VICTOR', '#cf3a3a', '2024-06-22 00:49:31', '2024-06-22 00:49:31'),
(12, 20, 'Banca  Anto', '#cf3a3a', '2024-06-22 04:51:42', '2024-06-22 04:51:42'),
(14, 22, 'BANCA CRISTINO', '#a258ca', '2024-06-22 16:47:23', '2024-06-22 16:47:23'),
(16, 23, '	WILKEIRY REYES', '#86dddf', '2024-06-22 17:11:00', '2024-06-23 00:39:54'),
(17, 24, 'PANTALLA DE PRUEBA', '#b13939', '2024-06-23 01:47:28', '2024-06-23 01:47:28'),
(18, 25, 'pr', '#613838', '2024-06-23 02:36:59', '2024-06-23 02:36:59'),
(19, 26, 'pr', '#613838', '2024-06-23 02:37:13', '2024-06-23 02:37:13'),
(20, 27, 'na', '#a12b2b', '2024-06-23 02:40:44', '2024-06-23 02:40:44'),
(21, 28, 'eer', '#993838', '2024-06-23 02:41:51', '2024-06-23 02:41:51'),
(22, 29, 'dasf', '#8c3b3b', '2024-06-23 02:44:20', '2024-06-23 02:44:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuels`
--

CREATE TABLE `fuels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `type` varchar(191) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fuels`
--

INSERT INTO `fuels` (`id`, `name`, `type`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Gasolina ', '500', 50.00, '2024-06-19 17:05:49', '2024-06-20 07:55:09'),
(2, 'glp', '200', 0.00, '2024-06-19 17:20:27', '2024-06-20 07:54:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `url` varchar(191) NOT NULL,
  `time` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `user_id`, `url`, `time`, `created_at`, `updated_at`) VALUES
(43, NULL, 'slides/VPcOtl6GUeJSIYlFh535dDxHUcV9K9uRI2Qy77Ht.jpg', NULL, '2024-06-18 00:28:34', '2024-06-18 00:28:34'),
(44, NULL, 'slides/6EfT7ZRGbdGE6j0AaoGP8EOk7KX0vkMmOUEcZevB.jpg', NULL, '2024-06-18 00:29:51', '2024-06-18 00:29:51'),
(45, NULL, 'slides/FgL363jl1oe4Ifj50Fl7iOa6q0XVWVkHCQbMmu3x.jpg', NULL, '2024-06-18 00:31:15', '2024-06-18 00:31:15'),
(46, NULL, 'slides/UjgtLcC3RYlxLBXQyhG1xkzVssZAADNw5zPIgayJ.jpg', NULL, '2024-06-20 07:21:13', '2024-06-20 07:21:13'),
(47, NULL, 'slides/dFILUwy1R2G3SjfAn6wn1bZbGStdD8L2FK9MVQhg.jpg', NULL, '2024-06-20 07:21:57', '2024-06-20 07:21:57'),
(48, NULL, 'slides/VU6OKHlDtclgteDdMw5aR5qogT9db4vz3oQ5fyOC.jpg', NULL, '2024-06-20 07:22:28', '2024-06-20 07:22:28'),
(50, NULL, 'slides/QO4JkpFV1zZhbhVs5UaX9JnmafdsS0L3fEV1iP55.jpg', NULL, '2024-06-20 07:31:09', '2024-06-20 07:31:09'),
(51, NULL, 'slides/czXo0BDmDpDS94x0wTWqhkZXoa2E0GvBE4055ukf.jpg', NULL, '2024-06-22 16:43:34', '2024-06-22 16:43:34'),
(52, NULL, 'slides/HxhUanLd0PB0IcUkA7kePD96otMbKWoYrlg1W1Fm.jpg', NULL, '2024-06-22 17:15:13', '2024-06-22 17:15:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loterias`
--

CREATE TABLE `loterias` (
  `id` int(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `timeday` varchar(50) NOT NULL,
  `tanda` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `loterias`
--

INSERT INTO `loterias` (`id`, `nombre`, `descripcion`, `timeday`, `tanda`, `created_at`, `updated_at`) VALUES
(1, 'real12pm', 'Loto Real 12:55 PM', '', 'Tarde', '2023-04-23 03:11:57', '2023-04-23 03:11:57'),
(2, 'nacional230', 'Loteria Nacional 2:30 PM Gana Más', '', 'Tarde', '2023-04-29 22:46:38', '2023-04-29 22:46:38'),
(3, 'nacional850pm', 'Loteria Nacional 8:50 PM', '', 'Noche', '2023-04-29 17:39:37', '2023-04-29 17:39:37'),
(4, 'kinglottery1230pm', 'King Lottery 12:30 PM', '', 'Tarde', '2023-04-29 21:11:43', '2023-04-29 21:11:43'),
(5, 'kinglottery730pm', 'King Lottery 7:30 PM', '', 'Noche', '2023-04-29 21:21:22', '2023-04-29 21:21:22'),
(6, 'leidsa', 'Quiniela Pale 8:55PM', '', 'Noche', '2023-04-29 23:04:46', '2023-04-29 23:04:46'),
(7, 'lotedom', 'Lotedom 1:55PM  Lun/Dom', '', 'Tarde', '2023-04-30 00:35:08', '2023-04-30 00:35:08'),
(8, 'primera12pm', 'La Primera 12:00PM', '', 'Tarde', '2023-04-30 05:28:12', '2023-04-30 05:29:02'),
(9, 'primera8pm', 'La Primera 8:00 PM', '', 'Noche', '2023-04-30 16:40:59', '2023-04-30 16:40:59'),
(10, 'loteka755pm', 'Loteka 7:55 PM', '', 'Noche', '2023-04-30 17:02:38', '2023-04-30 17:02:38'),
(11, 'lasuerte1230pm', 'La Suerte Dominicana 12:30PM', '', 'Tarde', '2023-04-30 18:13:05', '2023-04-30 18:13:05'),
(12, 'lasuerte6pm', 'La Suerte 6:00 PM', '', 'Noche', '2023-05-01 22:37:11', '2023-05-01 22:37:11'),
(13, 'newyork230pm', 'New York Lottery', '', 'Tarde', '2023-05-01 23:07:10', '2023-05-01 23:07:10'),
(14, 'newyork1030pm', 'New York Lottery 10:30 PM', '', 'Noche', '2023-05-01 23:38:07', '2023-05-01 23:38:07'),
(15, 'florida130pm', 'Florida Lottery 1:30 PM', '', 'Tarde', '2023-05-01 23:58:29', '2023-05-01 23:58:29'),
(16, 'florida940pm', 'Florida 9:40 PM', '', 'Noche', '2023-05-02 00:47:28', '2023-05-02 00:47:28'),
(18, 'lotopoolreal', 'Loto Pool Real', '', 'Tarde', '2023-05-09 00:24:28', '2023-05-09 00:24:28'),
(19, 'pega4real', 'Pega 4 Real', '', 'Tarde', '2023-05-09 02:42:14', '2023-05-09 02:42:14'),
(21, 'lotoreal', 'Loto Real', '', 'Tarde', '2023-05-09 04:04:39', '2023-05-09 04:04:39'),
(22, 'nuevayolreal', 'Nueva Yol Real', '', 'Tarde', '2023-05-09 23:20:19', '2023-05-09 23:20:19'),
(23, 'tufechareal', 'Tu Fecha Real', '', 'Tarde', '2023-05-09 23:24:19', '2023-05-09 23:20:19'),
(24, 'juegapega', 'Juega + Pega +', '', 'Tarde', '2023-05-10 23:33:32', '2023-05-10 23:33:32'),
(29, 'elquemaitomayor', 'El Quemaito Mayor', '', 'Tarde', '2023-05-11 07:03:34', '2023-05-11 07:03:34'),
(30, 'superpale', 'Super Pale', '', '', '2023-05-11 07:03:34', '2023-05-11 07:03:34'),
(31, 'agarra4', 'Agarra 4', '', 'Tarde', '2023-05-11 07:03:34', '2023-05-11 07:03:34'),
(32, 'pega3mas', 'Pega 3 Mas', '', '', '2023-05-11 07:03:34', '2023-05-11 07:03:34'),
(33, 'lotopool', 'Loto Pool Leidsa', '', '', '2023-05-11 07:03:34', '2023-05-11 07:03:34'),
(34, 'superkinotv', 'Super Kino Tv', '', '', '2023-05-11 21:12:35', '2023-05-11 21:12:35'),
(35, 'superlotomas', 'Super Loto Mas', '', '', '2023-05-11 21:12:35', '2023-05-11 21:12:35'),
(36, 'quinielalotedom', 'Quiniela LoteDom 1:55PM  Lun/Dom', '', '', '2023-05-11 21:12:35', '2023-05-11 21:12:35'),
(37, 'loto5', 'Loto 5 + Primera', '', '', '2023-05-11 21:12:35', '2023-05-11 21:12:35'),
(38, 'lotoloteka', 'Loto Loteka', '', '', '2023-05-11 21:12:35', '2023-05-11 21:12:35'),
(39, 'megachance', 'Mega Chance', '', '', '2023-05-17 04:28:58', '2023-05-17 04:28:58'),
(40, 'repartidera', 'Repartidera Megachance', '', '', '2023-05-17 04:59:00', '2023-05-17 04:59:00'),
(41, 'quinielaloteka', 'Quiniela Loteka', '', '', '2023-05-17 05:02:33', '2023-05-17 05:02:33'),
(42, 'toca3', 'Toca 3 Loteka', '', '', '2023-05-17 06:13:49', '2023-05-17 06:13:49'),
(43, 'philipsburgking1230', 'Philipsburg King Lottery 12:30 PM', '', '', '2023-05-23 03:06:54', '2023-05-23 03:06:54'),
(44, 'anguila9am', 'Anguila 9:00 AM Lun-Vie', '9:00 AM', '', '2023-07-07 21:23:28', '2023-07-07 21:23:28'),
(45, 'anguilac9am', 'Anguilla Cuarteta 9:00 AM', '9:00 AM', '', '2023-07-07 21:23:28', '2023-07-07 21:23:28'),
(46, 'anguila10am', 'Anguila 10:00 AM', '10:00 AM', '', '2024-02-05 20:15:26', '2024-02-05 20:15:26'),
(47, 'anguila11am', 'Anguila 11:00 AM', '11:00 AM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(48, 'anguila12pm', 'Anguila 12:00 PM', '12:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(49, 'anguila1pm', 'Anguila 1:00 PM', '1:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(50, 'anguila2pm', 'Anguila 2:00 PM', '2:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(51, 'anguila3pm', 'Anguila 3:00 PM', '3:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(52, 'anguila4pm', 'Anguila 4:00 PM', '4:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(53, 'anguila5pm', 'Anguila 5:00 PM', '5:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(54, 'anguila6pm', 'Anguila 6:00 PM', '6:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(55, 'anguila7pm', 'Anguila 7:00 PM', '7:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(56, 'anguila8pm', 'Anguila 8:00 PM', '8:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(57, 'anguila9pm', 'Anguila 9:00 PM', '9:00 PM', '', '2024-02-07 00:08:45', '2024-02-07 00:08:45'),
(58, 'anguilac10am', 'Anguila Cuarteta 10:00 AM', '10:00 AM', '', '2024-02-08 01:11:32', '2024-02-08 01:11:32'),
(59, 'anguilac11am', 'Anguila Cuarteta 11:00 AM', '11:00 AM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(60, 'anguilac12pm', 'Anguila Cuarteta 12:00 PM', '12:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(61, 'anguilac1pm', 'Anguila Cuarteta 1:00 PM', '1:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(62, 'anguilac2pm', 'Anguila Cuarteta 2:00 PM', '2:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(63, 'anguilac3pm', 'Anguila Cuarteta 3:00 PM', '3:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(64, 'anguilac4pm', 'Anguila Cuarteta 4:00 PM', '4:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(65, 'anguilac5pm', 'Anguila Cuarteta 5:00 PM', '5:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(66, 'anguilac6pm', 'Anguila Cuarteta 6:00 PM', '6:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(67, 'anguilac7pm', 'Anguila Cuarteta 7:00 PM', '7:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(68, 'anguilac8pm', 'Anguila Cuarteta 8:00 PM', '8:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(69, 'anguilac9pm', 'Anguila Cuarteta 9:00 PM', '9:00 PM', '', '2024-02-08 01:12:40', '2024-02-08 01:12:40'),
(70, 'philipsburgking730', 'Philipsburg King Lottery 7:30 PM', '7:30 PM', '', '2024-02-10 00:41:54', '2024-02-10 00:41:54'),
(71, 'lotopoolking1230', 'Lotto Pool King Lottery 12:30 PM', '12:30 PM', '', '2024-02-12 18:17:36', '2024-02-12 18:17:36'),
(72, 'lotopoolking730', 'Lotto Pool King Lottery 7:30 PM', '7:30 PM', '', '2024-02-12 18:17:36', '2024-02-12 18:17:36'),
(73, 'lotoreal', 'Sorteo del Loto Real', '', '', '2024-02-23 05:53:58', '2024-02-23 05:53:58'),
(74, 'billetenacional', 'Billete Loteria Nacional Domingos', '', '', '2024-02-23 05:54:32', '2024-02-23 05:54:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_22_233712_create_loterias_table', 1),
(6, '2023_04_23_002503_create_resultados_loterias_table', 2),
(7, '2023_04_23_003426_create_loterias_table', 3),
(8, '2023_06_27_001316_create_noticias_table', 4),
(9, '2014_10_12_200000_add_two_factor_columns_to_users_table', 5),
(10, '2024_01_31_021053_create_sessions_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Metro de Santiago Avanza', 'Se trata de cuatro nuevas estaciones en la Línea 2 y tres nuevas estaciones en la Línea 3, donde se verán beneficiadas las comunas de El Bosque, Cerrillos, San Bernardo y Quilicura. Así lo informaron desde CHV Noticias, donde entregaron la visión que tienen los vecinos de dichas comunidades al respecto.', 'https://fotos.lavozdemaipu.cl/wp-content/uploads/2023/05/01204716/PP53IZZJCZGT5GUVLHLW6CIV3U-1.jpg', '2023-06-27 07:45:08', '2023-07-05 08:14:30'),
(3, 'Lotedom premia empleados', 'La Lotería Electrónica Dominicana (LOTEDOM) informó que el abogado Ramón José Gómez Díaz, residente en Puerto Plata, resultó ganador de RD$25.0 millones del sorteo número 22-297, celebrado el miércoles 25 de octubre de este año.', 'https://diariosocialrd.com/wp-content/uploads/2022/11/Lotedom-.jpeg', '2023-07-05 08:40:26', '2023-07-05 08:40:26'),
(4, 'Cristian Casa Blanca acertó 3 números!', 'Indicó que eso se debe a que la producción de muchos programas son “ochentosos” y puso de ejemplo que con cinco minutos en El Show del Mediodía un “programa muerto y con horario inestable”.', 'https://2.bp.blogspot.com/-w2N1z6Vob-0/VBBUY3RCsYI/AAAAAAAAJFs/wHDIzC6otjQ/s1600/Cristian%2BCasablanca.jpg', '2023-07-05 08:43:10', '2023-07-05 08:43:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remittances`
--

CREATE TABLE `remittances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `buy` double(8,2) NOT NULL,
  `sell` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `remittances`
--

INSERT INTO `remittances` (`id`, `name`, `buy`, `sell`, `created_at`, `updated_at`) VALUES
(1, 'dollar', 55.00, 60.10, '2024-06-19 03:38:10', '2024-06-20 07:56:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados_loterias`
--

CREATE TABLE `resultados_loterias` (
  `id` int(20) NOT NULL,
  `id_loterias` int(11) NOT NULL,
  `num1` varchar(9) DEFAULT NULL,
  `num2` varchar(9) DEFAULT NULL,
  `num3` varchar(9) DEFAULT NULL,
  `num4` varchar(4) DEFAULT NULL,
  `num5` varchar(2) DEFAULT NULL,
  `num6` varchar(2) DEFAULT NULL,
  `num7` varchar(2) DEFAULT NULL,
  `num8` varchar(2) DEFAULT NULL,
  `num9` varchar(2) DEFAULT NULL,
  `num10` varchar(2) DEFAULT NULL,
  `num11` varchar(2) DEFAULT NULL,
  `num12` varchar(2) DEFAULT NULL,
  `num13` varchar(2) DEFAULT NULL,
  `num14` varchar(2) DEFAULT NULL,
  `num15` varchar(2) DEFAULT NULL,
  `num16` varchar(2) DEFAULT NULL,
  `num17` varchar(2) DEFAULT NULL,
  `num18` varchar(2) DEFAULT NULL,
  `num19` varchar(2) DEFAULT NULL,
  `num20` varchar(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `actualizo` varchar(55) DEFAULT NULL,
  `estatus` varchar(10) DEFAULT 'disabled',
  `extra` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `resultados_loterias`
--

INSERT INTO `resultados_loterias` (`id`, `id_loterias`, `num1`, `num2`, `num3`, `num4`, `num5`, `num6`, `num7`, `num8`, `num9`, `num10`, `num11`, `num12`, `num13`, `num14`, `num15`, `num16`, `num17`, `num18`, `num19`, `num20`, `created_at`, `updated_at`, `actualizo`, `estatus`, `extra`) VALUES
(181, 1, '20', '35', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(182, 2, '25', '84', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(183, 3, '29', '49', '68', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(184, 4, '61', '29', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(185, 5, '69', '89', '52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(186, 6, '65', '19', '74', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(187, 7, '48', '95', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(188, 8, '99', '17', '75', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(189, 9, '36', '97', '58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(190, 10, '52', '33', '59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(191, 11, '83', '76', '54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(192, 12, '45', '15', '69', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(193, 13, '68', '93', '51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(194, 14, '13', '74', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(195, 15, '62', '78', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(196, 16, '61', '67', '57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(197, 18, '14', '27', '58', '92', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(198, 19, '13', '97', '78', '74', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(199, 21, '26', '87', '34', '73', '11', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(200, 22, '56', '35', '23', '46', '16', '89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(201, 23, '45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(202, 24, '36', '44', '48', '16', '99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(203, 29, '83', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(204, 30, '79', '26', '94', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(205, 31, '17', '84', '58', '76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(206, 32, '71', '24', '96', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(207, 33, '76', '79', '30', '61', '18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(208, 34, '75', '83', '27', '99', '74', '27', '36', '59', '39', '37', '79', '37', '61', '44', '19', '14', '80', '38', '92', '62', '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(209, 35, '59', '36', '11', '96', '76', '58', '47', '96', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(210, 36, '29', '74', '74', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(211, 37, '57', '57', '65', '31', '51', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(212, 38, '10', '22', '18', '80', '70', '25', '91', '67', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(213, 39, '83', '49', '69', '43', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(214, 40, '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(215, 41, '10', '55', '36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(216, 42, '33', '28', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(217, 43, '18', '53', '73', '78', '83', '82', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(218, 44, '28', '23', '89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(219, 45, '86', '91', '61', '41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:37:29', '2023-07-08 05:37:29', 'Jose Luis Rodriguez', 'enabled', 0),
(242, 1, '8', '10', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-13 13:24:51', '2023-07-08 06:24:51', 'Jose', 'enabled', 0),
(243, 21, '6', '31', '8', '26', '15', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-31 13:24:51', '2023-07-08 06:24:51', 'Jose', 'enabled', 0),
(244, 1, '8', '10', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-13 13:24:56', '2023-07-08 06:24:56', 'Jose', 'enabled', 0),
(245, 21, '6', '31', '8', '26', '15', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-31 13:24:56', '2023-07-08 06:24:56', 'Jose', 'enabled', 0),
(246, 1, '84', '56', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(247, 2, '20', '22', '81', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(248, 3, '85', '21', '39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(249, 4, '44', '84', '91', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(250, 5, '62', '86', '54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(251, 6, '95', '60', '37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(252, 7, '51', '29', '86', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(253, 8, '40', '67', '43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-16 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(254, 9, '69', '61', '82', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(255, 10, '13', '12', '67', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(256, 11, '68', '41', '80', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(257, 12, '64', '56', '43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(258, 13, '77', '75', '45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(259, 14, '67', '41', '91', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(260, 15, '31', '54', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(261, 16, '56', '65', '89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(262, 18, '88', '89', '20', '28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(263, 19, '78', '51', '85', '75', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(264, 21, '23', '18', '89', '38', '18', '95', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(265, 22, '79', '87', '88', '99', '73', '36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(266, 23, '39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(267, 24, '16', '12', '97', '17', '59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(268, 29, '27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(269, 30, '48', '37', '61', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(270, 31, '15', '81', '38', '53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(271, 32, '93', '12', '53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(272, 33, '57', '21', '25', '25', '74', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(273, 34, '51', '54', '61', '94', '15', '69', '92', '21', '53', '14', '57', '41', '84', '87', '93', '49', '67', '45', '13', '94', '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(274, 35, '68', '26', '45', '83', '80', '59', '42', '74', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(275, 36, '75', '12', '19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(276, 37, '98', '39', '38', '10', '73', '83', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(277, 38, '23', '51', '83', '19', '15', '45', '61', '64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(278, 39, '98', '46', '41', '73', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(279, 40, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(280, 41, '39', '56', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(281, 42, '39', '54', '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(282, 43, '93', '31', '14', '37', '55', '58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:25:11', '2023-07-08 06:25:11', 'Jose Luis Rodriguez', 'enabled', 0),
(304, 44, '26', '31', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 21:56:22', '2023-09-09 21:56:22', 'Jose Luis Rodriguez', 'enabled', 0),
(305, 45, '26', '10', '11', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 21:56:53', '2023-09-09 21:56:53', 'Jose Luis Rodriguez', 'enabled', 0),
(306, 44, '26', '10', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:50:26', '2023-09-09 22:50:26', 'Jose Luis Rodriguez', 'enabled', 0),
(307, 45, '03', '44', '27', '58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:50:35', '2023-09-09 22:50:35', 'Jose Luis Rodriguez', 'enabled', 0),
(308, 45, '03', '44', '27', '58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:50:35', '2023-09-09 22:50:35', 'Jose Luis Rodriguez', 'enabled', 0),
(309, 44, '05', '33', '14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:51:29', '2023-09-09 22:51:29', 'Jose Luis Rodriguez', 'enabled', 0),
(310, 45, '10', '26', '33', '18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:51:44', '2023-09-09 22:51:44', 'Jose Luis Rodriguez', 'enabled', 0),
(311, 44, '08', '14', '89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:52:02', '2023-09-09 22:52:02', 'Jose Luis Rodriguez', 'enabled', 0),
(312, 45, '35', '69', '78', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:52:11', '2023-09-09 22:52:11', 'Jose Luis Rodriguez', 'enabled', 0),
(313, 44, '89', '45', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:52:31', '2023-09-09 22:52:31', 'Jose Luis Rodriguez', 'enabled', 0),
(314, 45, '26', '31', '22', '58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:52:39', '2023-09-09 22:52:39', 'Jose Luis Rodriguez', 'enabled', 0),
(315, 44, '66', '75', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:53:01', '2023-09-09 22:53:01', 'Jose Luis Rodriguez', 'enabled', 0),
(316, 45, '02', '13', '44', '89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:53:08', '2023-09-09 22:53:08', 'Jose Luis Rodriguez', 'enabled', 0),
(317, 44, '26', '47', '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:53:15', '2023-09-09 22:53:15', 'Jose Luis Rodriguez', 'enabled', 0),
(318, 45, '13', '57', '58', '63', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-09 22:53:24', '2023-09-09 22:53:24', 'Jose Luis Rodriguez', 'enabled', 0),
(319, 44, '25', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-10 19:37:40', '2023-09-10 19:37:40', 'Jose Luis Rodriguez', 'enabled', 0),
(320, 44, '08', '31', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-10 19:37:47', '2023-09-10 19:37:47', 'Jose Luis Rodriguez', 'enabled', 0),
(321, 44, '32', '05', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-10 19:37:53', '2023-09-10 19:37:53', 'Jose Luis Rodriguez', 'enabled', 0),
(322, 45, '55', '66', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11 17:10:58', '2023-09-11 17:10:58', 'Jose Luis Rodriguez', 'enabled', 0),
(323, 44, '05', '33', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11 20:09:45', '2023-09-11 20:09:45', 'Jose Luis Rodriguez', 'enabled', 0),
(324, 1, '05', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-13 20:19:55', '2023-09-13 20:19:55', 'Jose Luis Rodriguez', 'enabled', 0),
(325, 1, '05', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-13 20:19:57', '2023-09-13 20:19:57', 'Jose Luis Rodriguez', 'enabled', 0),
(326, 1, '20', '10', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-13 20:20:54', '2023-09-13 20:20:54', 'Jose Luis Rodriguez', 'enabled', 0),
(327, 1, '25', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-13 20:22:37', '2023-09-13 20:22:37', 'Jose Luis Rodriguez', 'enabled', 0),
(328, 44, '25', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-13 20:26:17', '2023-09-13 20:26:17', 'Jose Luis Rodriguez', 'enabled', 0),
(329, 44, '26', '10', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-13 20:34:50', '2023-09-13 20:34:50', 'Jose Luis Rodriguez', 'enabled', 0),
(330, 45, '04', '33', '26', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-13 20:35:10', '2023-09-13 20:35:10', 'Jose Luis Rodriguez', 'enabled', 0),
(331, 44, '31', '08', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-13 20:41:29', '2023-09-13 20:41:29', 'Jose Luis Rodriguez', 'enabled', 0),
(332, 7, '26', '05', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 01:51:02', '2023-09-14 01:51:02', 'Jose Luis Rodriguez', 'enabled', 0),
(333, 36, '26', '27', '28', '29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 02:09:31', '2023-09-14 02:09:31', 'Jose Luis Rodriguez', 'enabled', 0),
(334, 36, '31', '08', '90', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 02:19:22', '2023-09-14 02:19:22', 'Jose Luis Rodriguez', 'enabled', 0),
(335, 36, '25', '04', '33', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 02:21:32', '2023-09-14 02:21:32', 'Jose Luis Rodriguez', 'enabled', 0),
(336, 22, '05', '26', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 16:37:56', '2023-09-14 16:37:56', 'Jose Luis Rodriguez', 'enabled', 0),
(337, 22, '05', '33', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 16:49:03', '2023-09-14 16:49:03', 'Jose Luis Rodriguez', 'enabled', 3),
(338, 22, '33', '44', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:10:01', '2023-09-14 17:10:01', 'Jose Luis Rodriguez', 'enabled', NULL),
(339, 22, '26', '10', '01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:17:13', '2023-09-14 17:17:13', 'Jose Luis Rodriguez', 'enabled', NULL),
(340, 22, '05', '22', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:19:07', '2023-09-14 17:19:07', 'Jose Luis Rodriguez', 'enabled', 1),
(341, 22, '26', '10', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:19:35', '2023-09-14 17:19:35', 'Jose Luis Rodriguez', 'enabled', 1),
(342, 22, '15', '25', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:21:44', '2023-09-14 17:21:44', 'Jose Luis Rodriguez', 'enabled', 3),
(343, 22, '16', '28', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:22:07', '2023-09-14 17:22:07', 'Jose Luis Rodriguez', 'enabled', 2),
(344, 22, '26', '10', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:26:02', '2023-09-14 17:26:02', 'Jose Luis Rodriguez', 'enabled', 1),
(345, 22, '26', '10', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:27:13', '2023-09-14 17:27:13', 'Jose Luis Rodriguez', 'enabled', 1),
(346, 22, '13', '25', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:27:31', '2023-09-14 17:27:31', 'Jose Luis Rodriguez', 'enabled', 2),
(347, 22, '33', '44', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:27:52', '2023-09-14 17:27:52', 'Jose Luis Rodriguez', 'enabled', 3),
(348, 22, '25', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:37:28', '2023-09-14 17:37:28', 'Jose Luis Rodriguez', 'enabled', 2),
(349, 22, '33', '21', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:37:44', '2023-09-14 17:37:44', 'Jose Luis Rodriguez', 'enabled', 1),
(350, 22, '36', '88', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:38:03', '2023-09-14 17:38:03', 'Jose Luis Rodriguez', 'enabled', 3),
(351, 22, '55', '44', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:52:39', '2023-09-14 17:52:39', 'Jose Luis Rodriguez', 'enabled', 1),
(352, 22, '55', '44', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 17:54:50', '2023-09-14 17:54:50', 'Jose Luis Rodriguez', 'enabled', 2),
(356, 44, '05', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 16:02:27', '2023-09-18 16:02:27', 'Jose Luis Rodriguez', 'enabled', NULL),
(357, 45, '55', '44', '85', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 16:10:39', '2023-09-18 16:10:39', 'Jose Luis Rodriguez', 'enabled', NULL),
(358, 44, '33', '20', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 16:21:31', '2023-09-18 16:21:31', 'Jose Luis Rodriguez', 'enabled', NULL),
(359, 45, '58', '55', '44', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 16:21:39', '2023-09-18 16:21:39', 'Jose Luis Rodriguez', 'enabled', NULL),
(360, 44, '08', '31', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 16:22:49', '2023-09-18 16:22:49', 'Jose Luis Rodriguez', 'enabled', NULL),
(361, 36, '15', '26', '10', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-20 02:04:06', '2023-09-20 02:04:06', 'Jose Luis Rodriguez', 'enabled', NULL),
(362, 29, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-20 02:08:24', '2023-09-20 02:08:24', 'Jose Luis Rodriguez', 'enabled', NULL),
(363, 6, '26', '10', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-16 02:13:00', '2023-09-20 02:13:00', 'Jose Luis Rodriguez', 'enabled', NULL),
(391, 1, '11', '22', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-26 21:18:18', '2024-01-26 21:18:18', 'Jose Luis Rodriguez', 'enabled', NULL),
(392, 9, '08', '09', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-28 07:47:18', '2024-01-28 03:47:18', 'Jose Luis Rodriguez', 'enabled', NULL),
(393, 14, '08', '09', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-28 07:53:32', '2024-01-28 03:53:32', 'Jose Luis Rodriguez', 'enabled', NULL),
(394, 15, '09', '10', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-28 08:03:34', '2024-01-28 04:03:35', 'Jose Luis Rodriguez', 'enabled', NULL),
(395, 16, '23', '23', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-28 08:03:54', '2024-01-28 04:03:54', 'Jose Luis Rodriguez', 'enabled', NULL),
(396, 1, '05', '06', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 05:16:25', '2024-01-30 01:16:25', 'Jose Luis Rodriguez', 'enabled', NULL),
(397, 2, '11', '12', '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 12:37:49', '2024-01-30 08:37:49', 'Jose Luis Rodriguez', 'enabled', NULL),
(398, 1, '05', '26', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 23:05:39', '2024-01-30 19:05:39', 'Jose Luis Rodriguez', 'enabled', NULL),
(399, 1, '26', '12', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-02 23:46:18', '2024-02-02 19:46:18', 'Jose Luis Rodriguez', 'enabled', NULL),
(400, 2, '20', '10', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-02 23:47:39', '2024-02-02 19:47:39', 'Jose Luis Rodriguez', 'enabled', NULL),
(401, 1, '26', '15', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-02 23:56:56', '2024-02-02 19:56:57', 'Jose Luis Rodriguez', 'enabled', NULL),
(402, 2, '30', '15', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-02 23:57:07', '2024-02-02 19:57:07', 'Jose Luis Rodriguez', 'enabled', NULL),
(403, 1, '10', '15', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:10:45', '2024-02-02 20:10:45', 'Jose Luis Rodriguez', 'enabled', NULL),
(404, 2, '10', '30', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:10:55', '2024-02-02 20:10:55', 'Jose Luis Rodriguez', 'enabled', NULL),
(405, 1, '26', '10', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:16:04', '2024-02-02 20:16:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(406, 18, '3', '14', '55', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:16:15', '2024-02-02 20:16:15', 'Jose Luis Rodriguez', 'enabled', NULL),
(407, 19, '10', '12', '25', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:16:24', '2024-02-02 20:16:24', 'Jose Luis Rodriguez', 'enabled', NULL),
(408, 22, '33', '14', '28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:16:32', '2024-02-02 20:16:32', 'Jose Luis Rodriguez', 'enabled', 1),
(409, 23, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:16:37', '2024-02-02 20:16:37', 'Jose Luis Rodriguez', 'enabled', NULL),
(410, 2, '22', '55', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:16:44', '2024-02-02 20:16:44', 'Jose Luis Rodriguez', 'enabled', NULL),
(411, 3, '22', '44', '78', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:16:51', '2024-02-02 20:16:51', 'Jose Luis Rodriguez', 'enabled', NULL),
(412, 24, '10', '23', '12', '04', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:17:02', '2024-02-02 20:17:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(413, 44, '15', '12', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:22:09', '2024-02-02 20:22:09', 'Jose Luis Rodriguez', 'enabled', NULL),
(414, 1, '10', '20', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 00:35:12', '2024-02-02 20:35:12', 'Jose Luis Rodriguez', 'enabled', NULL),
(415, 1, '20', '03', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 02:14:13', '2024-02-02 22:14:13', 'Jose Luis Rodriguez', 'enabled', NULL),
(416, 1, '30', '30', '30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 02:16:00', '2024-02-02 22:16:00', 'Jose Luis Rodriguez', 'enabled', NULL),
(417, 1, '15', '23', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 02:17:16', '2024-02-02 22:17:16', 'Jose Luis Rodriguez', 'enabled', NULL),
(418, 1, '10', '15', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 02:22:50', '2024-02-02 22:22:50', 'Jose Luis Rodriguez', 'enabled', NULL),
(419, 1, '26', '10', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-03 02:25:02', '2024-02-02 22:25:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(420, 1, '26', '10', '30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:28:52', '2024-02-04 20:28:52', 'Jose Luis Rodriguez', 'enabled', NULL),
(421, 18, '55', '56', '66', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:29:01', '2024-02-04 20:29:01', 'Jose Luis Rodriguez', 'enabled', NULL),
(422, 19, '26', '30', '30', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:29:10', '2024-02-04 20:29:10', 'Jose Luis Rodriguez', 'enabled', NULL),
(423, 22, '33', '44', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:29:23', '2024-02-04 20:29:23', 'Jose Luis Rodriguez', 'enabled', 1),
(424, 23, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:29:29', '2024-02-04 20:29:29', 'Jose Luis Rodriguez', 'enabled', NULL),
(425, 1, '00', '00', '00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:30:17', '2024-02-04 20:30:17', 'Jose Luis Rodriguez', 'enabled', NULL),
(426, 1, '05', '33', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:35:39', '2024-02-04 20:35:39', 'Jose Luis Rodriguez', 'enabled', NULL),
(427, 18, '15', '20', '25', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:35:48', '2024-02-04 20:35:48', 'Jose Luis Rodriguez', 'enabled', NULL),
(428, 19, '80', '33', '44', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:35:57', '2024-02-04 20:35:57', 'Jose Luis Rodriguez', 'enabled', NULL),
(429, 1, '20', '15', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:40:10', '2024-02-04 20:40:10', 'Jose Luis Rodriguez', 'enabled', NULL),
(430, 1, '20', '10', '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:54:25', '2024-02-04 20:54:26', 'Jose Luis Rodriguez', 'enabled', NULL),
(431, 18, '10', '15', '35', '66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 00:54:34', '2024-02-04 20:54:34', 'Jose Luis Rodriguez', 'enabled', NULL),
(432, 1, '00', '00', '00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 20:04:16', '2024-02-05 16:04:16', 'Jose Luis Rodriguez', 'enabled', NULL),
(433, 1, '26', '10', '31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 21:10:28', '2024-02-05 17:10:28', 'Jose Luis Rodriguez', 'enabled', NULL),
(434, 1, '10', '5', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-05 21:11:33', '2024-02-05 17:11:33', 'Jose Luis Rodriguez', 'enabled', NULL),
(435, 18, '22', '33', '44', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06 05:43:29', '2024-02-06 01:43:30', 'Jose Luis Rodriguez', 'enabled', NULL),
(436, 1, '05', '20', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06 05:48:18', '2024-02-06 01:48:19', 'Jose Luis Rodriguez', 'enabled', NULL),
(437, 18, '33', '44', '55', '66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06 05:48:25', '2024-02-06 01:48:25', 'Jose Luis Rodriguez', 'enabled', NULL),
(444, 44, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:55:34', 'Jose Luis Rodriguez', 'enabled', NULL),
(445, 46, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(446, 47, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(447, 48, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(448, 49, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(449, 50, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(450, 51, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(451, 52, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(452, 53, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(453, 54, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(454, 55, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(455, 55, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(456, 56, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(457, 57, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 02:58:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(458, 44, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 06:59:16', '2024-02-07 02:59:16', 'Jose Luis Rodriguez', 'enabled', NULL),
(459, 44, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:07:47', '2024-02-07 03:07:47', 'Jose Luis Rodriguez', 'enabled', NULL),
(460, 46, '10', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:07:56', '2024-02-07 03:07:56', 'Jose Luis Rodriguez', 'enabled', NULL),
(461, 47, '11', '11', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:08:04', '2024-02-07 03:08:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(462, 48, '12', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:08:12', '2024-02-07 03:08:12', 'Jose Luis Rodriguez', 'enabled', NULL),
(463, 49, '01', '01', '01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:08:22', '2024-02-07 03:08:22', 'Jose Luis Rodriguez', 'enabled', NULL),
(464, 50, '02', '02', '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:08:29', '2024-02-07 03:08:29', 'Jose Luis Rodriguez', 'enabled', NULL),
(465, 51, '03', '03', '03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:08:41', '2024-02-07 03:08:41', 'Jose Luis Rodriguez', 'enabled', NULL),
(466, 52, '04', '04', '04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:08:48', '2024-02-07 03:08:48', 'Jose Luis Rodriguez', 'enabled', NULL),
(467, 53, '05', '05', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:08:58', '2024-02-07 03:08:58', 'Jose Luis Rodriguez', 'enabled', NULL),
(468, 54, '06', '06', '06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:09:07', '2024-02-07 03:09:07', 'Jose Luis Rodriguez', 'enabled', NULL),
(469, 55, '07', '07', '07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:09:15', '2024-02-07 03:09:15', 'Jose Luis Rodriguez', 'enabled', NULL),
(470, 56, '08', '08', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:09:23', '2024-02-07 03:09:23', 'Jose Luis Rodriguez', 'enabled', NULL),
(471, 57, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 07:09:35', '2024-02-07 03:09:35', 'Jose Luis Rodriguez', 'enabled', NULL),
(472, 44, '26', '10', '31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:25:55', '2024-02-07 05:25:55', 'Jose Luis Rodriguez', 'enabled', NULL),
(473, 46, '10', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:32:10', '2024-02-07 05:32:10', 'Jose Luis Rodriguez', 'enabled', NULL),
(474, 44, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:36:52', '2024-02-07 05:36:52', 'Jose Luis Rodriguez', 'enabled', NULL),
(475, 46, '10', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:37:41', '2024-02-07 05:37:41', 'Jose Luis Rodriguez', 'enabled', NULL),
(476, 47, '11', '11', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:44:16', '2024-02-07 05:44:16', 'Jose Luis Rodriguez', 'enabled', NULL),
(477, 48, '12', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:44:36', '2024-02-07 05:44:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(478, 49, '01', '01', '01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:44:57', '2024-02-07 05:44:57', 'Jose Luis Rodriguez', 'enabled', NULL),
(479, 50, '02', '02', '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:45:17', '2024-02-07 05:45:17', 'Jose Luis Rodriguez', 'enabled', NULL),
(480, 51, '03', '03', '03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:45:25', '2024-02-07 05:45:26', 'Jose Luis Rodriguez', 'enabled', NULL),
(481, 52, '04', '04', '04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:45:34', '2024-02-07 05:45:34', 'Jose Luis Rodriguez', 'enabled', NULL),
(482, 53, '05', '05', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:45:46', '2024-02-07 05:45:46', 'Jose Luis Rodriguez', 'enabled', NULL),
(483, 54, '06', '06', '06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:45:54', '2024-02-07 05:45:54', 'Jose Luis Rodriguez', 'enabled', NULL),
(484, 55, '07', '07', '07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:46:02', '2024-02-07 05:46:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(485, 56, '08', '08', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:48:17', '2024-02-07 05:48:17', 'Jose Luis Rodriguez', 'enabled', NULL),
(486, 57, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-07 09:48:27', '2024-02-07 05:48:27', 'Jose Luis Rodriguez', 'enabled', NULL),
(487, 45, '06', '06', '06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 06:55:01', '2024-02-08 02:55:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(488, 45, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:48:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(489, 45, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(490, 58, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(491, 59, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(492, 60, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(493, 61, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(494, 62, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL);
INSERT INTO `resultados_loterias` (`id`, `id_loterias`, `num1`, `num2`, `num3`, `num4`, `num5`, `num6`, `num7`, `num8`, `num9`, `num10`, `num11`, `num12`, `num13`, `num14`, `num15`, `num16`, `num17`, `num18`, `num19`, `num20`, `created_at`, `updated_at`, `actualizo`, `estatus`, `extra`) VALUES
(495, 63, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(496, 64, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(497, 65, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(498, 66, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(499, 67, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(500, 68, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(501, 69, '10', '15', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 03:51:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(502, 44, '9', '9', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:52:12', '2024-02-08 03:52:12', 'Jose Luis Rodriguez', 'enabled', NULL),
(503, 46, '10', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:52:22', '2024-02-08 03:52:22', 'Jose Luis Rodriguez', 'enabled', NULL),
(504, 47, '11', '11', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:52:30', '2024-02-08 03:52:30', 'Jose Luis Rodriguez', 'enabled', NULL),
(505, 48, '12', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:52:40', '2024-02-08 03:52:40', 'Jose Luis Rodriguez', 'enabled', NULL),
(506, 49, '01', '01', '01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:52:53', '2024-02-08 03:52:53', 'Jose Luis Rodriguez', 'enabled', NULL),
(507, 50, '02', '02', '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:53:02', '2024-02-08 03:53:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(508, 51, '03', '03', '03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:53:32', '2024-02-08 03:53:32', 'Jose Luis Rodriguez', 'enabled', NULL),
(509, 52, '04', '04', '04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:53:40', '2024-02-08 03:53:40', 'Jose Luis Rodriguez', 'enabled', NULL),
(510, 53, '05', '05', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:53:47', '2024-02-08 03:53:48', 'Jose Luis Rodriguez', 'enabled', NULL),
(511, 54, '06', '06', '06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:53:56', '2024-02-08 03:53:56', 'Jose Luis Rodriguez', 'enabled', NULL),
(512, 55, '07', '07', '07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:54:06', '2024-02-08 03:54:06', 'Jose Luis Rodriguez', 'enabled', NULL),
(515, 56, '08', '08', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:56:07', '2024-02-08 03:56:07', 'Jose Luis Rodriguez', 'enabled', NULL),
(516, 57, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 07:56:19', '2024-02-08 03:56:19', 'Jose Luis Rodriguez', 'enabled', NULL),
(517, 45, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:03:31', '2024-02-08 04:03:31', 'Jose Luis Rodriguez', 'enabled', NULL),
(519, 45, '09', '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:12:52', '2024-02-08 04:12:52', 'Jose Luis Rodriguez', 'enabled', NULL),
(520, 58, '10', '10', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:13:08', '2024-02-08 04:13:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(521, 59, '11', '11', '11', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:13:21', '2024-02-08 04:13:21', 'Jose Luis Rodriguez', 'enabled', NULL),
(522, 60, '12', '12', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:13:32', '2024-02-08 04:13:32', 'Jose Luis Rodriguez', 'enabled', NULL),
(523, 61, '01', '01', '01', '01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:13:44', '2024-02-08 04:13:44', 'Jose Luis Rodriguez', 'enabled', NULL),
(524, 62, '02', '02', '02', '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:15:35', '2024-02-08 04:15:35', 'Jose Luis Rodriguez', 'enabled', NULL),
(525, 63, '03', '03', '03', '03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:15:45', '2024-02-08 04:15:45', 'Jose Luis Rodriguez', 'enabled', NULL),
(526, 64, '04', '04', '04', '04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:15:55', '2024-02-08 04:15:55', 'Jose Luis Rodriguez', 'enabled', NULL),
(527, 65, '05', '05', '05', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:16:10', '2024-02-08 04:16:10', 'Jose Luis Rodriguez', 'enabled', NULL),
(528, 66, '06', '06', '06', '06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:16:18', '2024-02-08 04:16:18', 'Jose Luis Rodriguez', 'enabled', NULL),
(529, 67, '07', '07', '07', '07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:16:27', '2024-02-08 04:16:27', 'Jose Luis Rodriguez', 'enabled', NULL),
(530, 68, '08', '08', '08', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:16:36', '2024-02-08 04:16:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(531, 69, '09', '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:16:47', '2024-02-08 04:16:47', 'Jose Luis Rodriguez', 'enabled', NULL),
(532, 59, '11', '11', '11', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 08:20:34', '2024-02-08 04:20:34', 'Jose Luis Rodriguez', 'enabled', NULL),
(533, 43, '2546', '3225', '4585', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-10 00:42:15', '2024-02-09 20:42:15', 'Jose Luis Rodriguez', 'enabled', NULL),
(534, 70, '1525', '2536', '5855', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-10 06:53:39', '2024-02-10 02:53:39', 'Jose Luis Rodriguez', 'enabled', NULL),
(535, 70, '2610', '2610', '2610', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-10 06:54:26', '2024-02-10 02:54:26', 'Jose Luis Rodriguez', 'enabled', NULL),
(536, 70, '7070', '7070', '7070', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-10 07:20:56', '2024-02-10 03:20:56', 'Jose Luis Rodriguez', 'enabled', NULL),
(537, 43, '1212', '1212', '1212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-10 07:22:04', '2024-02-10 03:22:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(538, 43, '1212', '1212', '1212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-10 07:43:16', '2024-02-10 03:43:16', 'Jose Luis Rodriguez', 'enabled', NULL),
(539, 70, '7070', '7070', '7070', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-10 07:45:12', '2024-02-10 03:45:12', 'Jose Luis Rodriguez', 'enabled', NULL),
(540, 44, '05', '20', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 03:55:41', '2024-02-10 23:55:41', 'Jose Luis Rodriguez', 'enabled', NULL),
(541, 46, '20', '20', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:01:39', '2024-02-11 00:01:39', 'Jose Luis Rodriguez', 'enabled', NULL),
(542, 49, '05', '05', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:12:44', '2024-02-11 00:12:44', 'Jose Luis Rodriguez', 'enabled', NULL),
(543, 44, '05', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:13:16', '2024-02-11 00:13:16', 'Jose Luis Rodriguez', 'enabled', NULL),
(544, 44, '10', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:13:41', '2024-02-11 00:13:42', 'Jose Luis Rodriguez', 'enabled', NULL),
(545, 46, '04', '04', '04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:13:55', '2024-02-11 00:13:55', 'Jose Luis Rodriguez', 'enabled', NULL),
(546, 44, '10', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:14:03', '2024-02-11 00:14:03', 'Jose Luis Rodriguez', 'enabled', NULL),
(547, 47, '11', '11', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:14:17', '2024-02-11 00:14:17', 'Jose Luis Rodriguez', 'enabled', NULL),
(548, 48, '03', '03', '03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:14:34', '2024-02-11 00:14:34', 'Jose Luis Rodriguez', 'enabled', NULL),
(549, 49, '04', '04', '04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:14:48', '2024-02-11 00:14:48', 'Jose Luis Rodriguez', 'enabled', NULL),
(550, 50, '08', '08', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:14:59', '2024-02-11 00:14:59', 'Jose Luis Rodriguez', 'enabled', NULL),
(551, 51, '05', '03', '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:15:11', '2024-02-11 00:15:11', 'Jose Luis Rodriguez', 'enabled', NULL),
(552, 52, '03', '03', '03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:15:25', '2024-02-11 00:15:25', 'Jose Luis Rodriguez', 'enabled', NULL),
(553, 53, '05', '05', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:15:36', '2024-02-11 00:15:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(554, 54, '08', '08', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:15:46', '2024-02-11 00:15:46', 'Jose Luis Rodriguez', 'enabled', NULL),
(555, 55, '09', '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:15:56', '2024-02-11 00:15:56', 'Jose Luis Rodriguez', 'enabled', NULL),
(556, 56, '03', '03', '03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:16:04', '2024-02-11 00:16:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(557, 57, '06', '06', '06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:16:13', '2024-02-11 00:16:13', 'Jose Luis Rodriguez', 'enabled', NULL),
(558, 44, '10', '10', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:52:56', '2024-02-11 00:52:56', 'Jose Luis Rodriguez', 'enabled', NULL),
(559, 49, '25', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:53:19', '2024-02-11 00:53:19', 'Jose Luis Rodriguez', 'enabled', NULL),
(560, 47, '05', '05', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 04:53:46', '2024-02-11 00:53:46', 'Jose Luis Rodriguez', 'enabled', NULL),
(561, 71, '04', '05', '06', '07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-12 22:39:17', '2024-02-12 18:39:17', 'Jose Luis Rodriguez', 'enabled', NULL),
(562, 71, '04', '06', '07', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-12 23:01:26', '2024-02-12 19:01:26', 'Jose Luis Rodriguez', 'enabled', NULL),
(563, 72, '26', '26', '26', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-12 23:19:36', '2024-02-12 19:19:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(564, 29, '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-13 23:42:25', '2024-02-13 19:42:25', 'Jose Luis Rodriguez', 'enabled', NULL),
(565, 31, '26', '31', '08', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-13 23:42:55', '2024-02-13 19:42:55', 'Jose Luis Rodriguez', 'enabled', NULL),
(566, 36, '26', '31', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-13 23:43:33', '2024-02-13 19:43:33', 'Jose Luis Rodriguez', 'enabled', NULL),
(567, 71, '05', '26', '10', '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-14 01:37:42', '2024-02-13 21:37:42', 'Jose Luis Rodriguez', 'enabled', NULL),
(568, 19, '05', '08', '26', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 07:10:42', '2024-02-18 03:10:42', 'Jose Luis Rodriguez', 'enabled', NULL),
(569, 22, '05', '05', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 07:12:13', '2024-02-18 03:12:13', 'Jose Luis Rodriguez', 'enabled', 2),
(570, 23, '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 07:26:34', '2024-02-18 03:26:34', 'Jose Luis Rodriguez', 'enabled', NULL),
(571, 73, '02', '04', '05', '06', '07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-23 05:54:43', '2024-02-23 05:55:50', NULL, 'enabled', NULL),
(572, 74, '1234567', '1234567', '1234567', '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-23 07:51:34', '2024-02-23 06:25:43', NULL, 'enabled', NULL),
(573, 73, '08', '31', '26', '10', '05', '28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-23 10:26:26', '2024-02-23 06:26:26', 'Jose Luis Rodriguez', 'enabled', NULL),
(574, 74, '777777777', '666666666', '888888888', '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-23 12:21:11', '2024-02-23 08:21:11', 'Jose Luis Rodriguez', 'enabled', NULL),
(575, 4, '222', '33', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-26 19:41:43', '2024-02-26 15:41:43', 'Jose Luis Rodriguez', 'enabled', NULL),
(576, 4, '678', '10', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-26 19:54:56', '2024-02-26 15:54:56', 'Jose Luis Rodriguez', 'enabled', NULL),
(577, 5, '456', '22', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-26 20:04:00', '2024-02-26 16:04:00', 'Jose Luis Rodriguez', 'enabled', NULL),
(606, 11, '26', '10', '05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-08 23:47:12', '2024-03-08 19:47:12', 'Jose Luis Rodriguez', 'enabled', NULL),
(607, 42, '26', '10', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-09 00:33:08', '2024-03-08 20:33:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(608, 3, '26', '05', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-11 04:01:49', '2024-03-11 22:26:49', 'Jose Luis Rodriguez', 'enabled', NULL),
(609, 1, '08', '10', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-10 08:00:00', '2024-03-12 00:28:03', 'Jose Luis Rodriguez', 'enabled', NULL),
(612, 1, '08', '14', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-16 03:39:04', '2024-03-12 00:37:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(613, 15, '08', '26', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-12 03:52:58', '2024-03-12 00:52:58', 'Jose Luis Rodriguez', 'enabled', NULL),
(614, 2, '08', '08', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-16 03:56:31', '2024-03-12 00:54:31', 'Jose Luis Rodriguez', 'enabled', NULL),
(615, 4, '101', '55', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-11 04:06:04', '2024-03-12 01:04:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(616, 5, '266', '64', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-14 08:49:57', '2024-03-14 05:49:57', 'Jose Luis Rodriguez', 'enabled', NULL),
(618, 2, '26', '10', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-17 02:57:46', '2024-03-16 23:57:47', 'Jose Luis Rodriguez', 'enabled', NULL),
(619, 6, '31', '14', '16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-17 03:03:49', '2024-03-17 00:03:49', 'Jose Luis Rodriguez', 'enabled', NULL),
(620, 8, '05', '08', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-17 03:11:08', '2024-03-17 00:11:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(622, 1, '25', '25', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-20 23:29:50', '2024-03-20 20:29:50', 'Jose Luis Rodriguez', 'enabled', NULL),
(623, 46, '26', '10', '31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 20:58:27', '2024-03-26 17:58:27', 'Jose Luis Rodriguez', 'enabled', NULL),
(624, 47, '08', '14', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 21:13:48', '2024-03-26 18:13:48', 'Jose Luis Rodriguez', 'enabled', NULL),
(626, 54, '06', '06', '06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 22:01:02', '2024-03-26 19:01:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(627, 58, '10', '10', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 22:02:15', '2024-03-26 19:02:15', 'Jose Luis Rodriguez', 'enabled', NULL),
(628, 8, '12', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 22:03:27', '2024-03-26 19:03:27', 'Jose Luis Rodriguez', 'enabled', NULL),
(629, 43, '2020', '3030', '4040', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 22:17:40', '2024-03-26 19:17:40', 'Jose Luis Rodriguez', 'enabled', NULL),
(630, 36, '26', '10', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 22:44:42', '2024-03-26 19:44:42', 'Jose Luis Rodriguez', 'enabled', NULL),
(631, 7, '7', '7', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-01 20:10:31', '2023-12-01 21:10:31', NULL, 'enabled', NULL),
(632, 70, '7300', '2610', '4444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 04:11:45', '2024-03-27 01:11:45', 'Jose Luis Rodriguez', 'enabled', NULL),
(633, 71, '26', '31', '08', '66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 04:13:06', '2024-03-27 01:13:06', 'Jose Luis Rodriguez', 'enabled', NULL),
(634, 72, '66', '88', '77', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 04:17:02', '2024-03-27 01:17:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(635, 72, '08', '08', '08', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 04:18:40', '2024-03-27 01:18:40', 'Jose Luis Rodriguez', 'enabled', NULL),
(636, 4, '655', '12', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 04:59:56', '2024-03-27 01:59:57', 'Jose Luis Rodriguez', 'enabled', NULL),
(637, 4, '321', '26', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 05:01:43', '2024-03-27 02:01:43', 'Jose Luis Rodriguez', 'enabled', NULL),
(638, 5, '655', '33', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 05:02:22', '2024-03-27 02:02:22', 'Jose Luis Rodriguez', 'enabled', NULL),
(639, 38, '26', '27', '28', '29', '30', '31', '32', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 05:25:08', '2024-03-27 02:25:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(640, 37, '26', '27', '28', '29', '30', '31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 05:38:32', '2024-03-27 02:38:32', 'Jose Luis Rodriguez', 'enabled', NULL),
(641, 35, '05', '06', '07', '08', '09', '10', '11', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 05:42:39', '2024-03-27 02:42:39', 'Jose Luis Rodriguez', 'enabled', NULL),
(642, 29, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 05:48:28', '2024-03-27 02:48:28', 'Jose Luis Rodriguez', 'enabled', NULL),
(646, 1, '26', '10', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 06:54:24', '2024-03-27 03:54:24', 'Jose Luis Rodriguez', 'enabled', NULL),
(647, 1, '26', '10', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 06:54:38', '2024-03-27 03:54:38', 'Jose Luis Rodriguez', 'enabled', NULL),
(648, 1, '00', '00', '00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-01 23:18:05', '2024-04-01 20:18:05', 'Jose Luis Rodriguez', 'enabled', NULL),
(649, 1, '12', '11', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 20:56:53', '2024-04-12 20:56:53', 'Jose Luis Rodriguez', 'enabled', NULL),
(650, 1, '20', '20', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 21:00:19', '2024-04-12 21:00:19', 'Jose Luis Rodriguez', 'enabled', NULL),
(651, 1, '12', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 21:52:03', '2024-04-12 21:52:03', 'Jose Luis Rodriguez', 'enabled', NULL),
(652, 1, '44', '44', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 21:55:20', '2024-04-12 21:55:20', 'Jose Luis Rodriguez', 'enabled', NULL),
(653, 1, '11', '11', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 22:26:01', '2024-04-12 22:26:01', 'Jose Luis Rodriguez', 'enabled', NULL),
(654, 1, '33', '33', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 22:55:04', '2024-04-12 22:55:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(655, 4, '123', '44', '45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 23:27:45', '2024-04-12 23:27:45', 'Jose Luis Rodriguez', 'enabled', NULL),
(656, 2, '23', '34', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 23:54:39', '2024-04-12 23:54:40', 'Jose Luis Rodriguez', 'enabled', NULL),
(657, 3, '38', '89', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 23:55:05', '2024-04-12 23:55:05', 'Jose Luis Rodriguez', 'enabled', NULL),
(658, 5, '333', '33', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 23:56:14', '2024-04-12 23:56:14', 'Jose Luis Rodriguez', 'enabled', NULL),
(659, 43, '4444', '4444', '4444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 23:56:53', '2024-04-12 23:56:53', 'Jose Luis Rodriguez', 'enabled', NULL),
(660, 6, '33', '44', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 23:58:47', '2024-04-12 23:58:47', 'Jose Luis Rodriguez', 'enabled', NULL),
(661, 31, '77', '77', '77', '77', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 23:59:14', '2024-04-12 23:59:14', 'Jose Luis Rodriguez', 'enabled', NULL),
(662, 24, '05', '08', '09', '10', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 17:43:31', '2024-04-24 14:43:31', 'Jose Luis Rodriguez', 'enabled', NULL),
(663, 1, '05', '25', '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-25 08:34:31', '2024-04-25 05:34:31', 'Jose Luis Rodriguez', 'enabled', NULL),
(664, 23, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 02:37:02', '2024-04-25 23:37:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(665, 19, '6', '5', '4', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 02:38:43', '2024-04-25 23:38:43', 'Jose Luis Rodriguez', 'enabled', NULL),
(666, 13, '535', '45', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 02:42:34', '2024-04-25 23:42:34', 'Jose Luis Rodriguez', 'enabled', NULL),
(667, 14, '333', '25', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 02:43:20', '2024-04-25 23:43:20', 'Jose Luis Rodriguez', 'enabled', NULL),
(668, 1, '08', '31', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 03:05:10', '2024-04-26 00:05:10', 'Jose Luis Rodriguez', 'enabled', NULL),
(669, 15, '677', '55', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 03:19:21', '2024-04-26 00:19:21', 'Jose Luis Rodriguez', 'enabled', NULL),
(670, 16, '334', '55', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 03:19:53', '2024-04-26 00:19:53', 'Jose Luis Rodriguez', 'enabled', NULL),
(673, 1, '26', '31', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 06:24:43', '2024-04-28 03:24:43', 'Jose Luis Rodriguez', 'enabled', NULL),
(674, 24, '05', '06', '07', '08', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 06:26:47', '2024-04-28 03:26:47', 'Jose Luis Rodriguez', 'enabled', NULL),
(675, 2, '05', '33', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 06:28:07', '2024-04-28 03:28:07', 'Jose Luis Rodriguez', 'enabled', NULL),
(676, 15, '677', '22', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 07:01:04', '2024-04-28 04:01:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(677, 16, '877', '33', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 07:08:35', '2024-04-28 04:08:35', 'Jose Luis Rodriguez', 'enabled', NULL),
(678, 13, '655', '45', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 07:09:01', '2024-04-28 04:09:01', 'Jose Luis Rodriguez', 'enabled', NULL),
(679, 6, '32', '32', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-27 07:10:23', '2024-04-28 04:10:23', 'Jose Luis Rodriguez', 'enabled', NULL),
(680, 13, '766', '55', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 07:16:43', '2024-04-28 04:16:43', 'Jose Luis Rodriguez', 'enabled', NULL),
(681, 14, '877', '55', '66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 07:17:04', '2024-04-28 04:17:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(682, 15, '455', '55', '56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 07:17:24', '2024-04-28 04:17:24', 'Jose Luis Rodriguez', 'enabled', NULL),
(683, 16, '899', '66', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 07:17:42', '2024-04-28 04:17:42', 'Jose Luis Rodriguez', 'enabled', NULL),
(684, 23, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 07:19:55', '2024-04-28 04:19:55', 'Jose Luis Rodriguez', 'enabled', NULL),
(685, 19, '5', '7', '9', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 07:20:31', '2024-04-28 04:20:31', 'Jose Luis Rodriguez', 'enabled', NULL),
(686, 15, '589', '32', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-02 08:17:35', '2024-05-02 05:17:35', 'Jose Luis Rodriguez', 'enabled', NULL),
(687, 16, '261', '05', '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-02 08:43:43', '2024-05-02 05:43:43', 'Jose Luis Rodriguez', 'enabled', NULL),
(688, 23, '30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-02 23:08:34', '2024-05-02 20:08:34', 'Jose Luis Rodriguez', 'enabled', NULL),
(689, 13, '012', '56', '53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-03 08:02:03', '2024-05-03 05:02:03', 'Jose Luis Rodriguez', 'enabled', NULL),
(690, 1, '11', '11', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 21:53:03', '2024-05-08 21:53:03', 'Jose Luis Rodriguez', 'enabled', NULL),
(691, 2, '23', '34', '56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 23:14:06', '2024-05-08 23:14:06', 'Jose Luis Rodriguez', 'enabled', NULL),
(692, 16, '222', '22', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 23:33:45', '2024-05-08 23:33:45', 'Jose Luis Rodriguez', 'enabled', NULL),
(693, 15, '222', '22', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 23:35:13', '2024-05-08 23:35:13', 'Jose Luis Rodriguez', 'enabled', NULL),
(694, 37, '34', '34', '34', '34', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 23:35:45', '2024-05-08 23:35:45', 'Jose Luis Rodriguez', 'enabled', NULL),
(695, 8, '12', '22', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 23:36:01', '2024-05-08 23:36:01', 'Jose Luis Rodriguez', 'enabled', NULL),
(696, 9, '34', '45', '67', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 23:41:17', '2024-05-08 23:41:17', 'Jose Luis Rodriguez', 'enabled', NULL),
(697, 15, '234', '56', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 23:45:59', '2024-05-08 23:45:59', 'Jose Luis Rodriguez', 'enabled', NULL),
(698, 36, '22', '23', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 07:30:24', '2024-05-10 07:30:24', 'Jose Luis Rodriguez', 'enabled', NULL),
(699, 13, '232', '32', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 07:30:41', '2024-05-10 07:30:41', 'Jose Luis Rodriguez', 'enabled', NULL),
(700, 31, '45', '45', '45', '45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 07:31:06', '2024-05-10 07:31:06', 'Jose Luis Rodriguez', 'enabled', NULL),
(701, 36, '23', '23', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 07:34:53', '2024-05-10 07:34:53', 'Jose Luis Rodriguez', 'enabled', NULL),
(702, 8, '23', '45', '56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 07:35:30', '2024-05-10 07:35:31', 'Jose Luis Rodriguez', 'enabled', NULL),
(703, 14, '223', '34', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 07:35:56', '2024-05-10 07:35:56', 'Jose Luis Rodriguez', 'enabled', NULL),
(704, 31, '12', '23', '23', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 07:37:24', '2024-05-10 07:37:24', 'Jose Luis Rodriguez', 'enabled', NULL),
(705, 36, '23', '22', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 07:37:51', '2024-05-10 07:37:51', 'Jose Luis Rodriguez', 'enabled', NULL),
(706, 36, '33', '33', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 07:44:18', '2024-05-10 07:44:18', 'Jose Luis Rodriguez', 'enabled', NULL),
(707, 1, '77', '77', '77', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-11 04:07:31', '2024-05-11 04:07:31', 'Jose Luis Rodriguez', 'enabled', NULL),
(709, 1, '34', '43', '43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-15 23:27:33', '2024-06-15 23:27:33', 'Jose Luis Rodriguez', 'enabled', NULL),
(710, 2, '12', '22', '52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-16 15:35:35', '2024-06-16 15:35:35', 'Jose Luis Rodriguez', 'enabled', NULL),
(711, 3, '13', '45', '78', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-16 15:38:02', '2024-06-16 15:38:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(712, 6, '67', '88', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-16 15:41:55', '2024-06-16 15:41:55', 'Jose Luis Rodriguez', 'enabled', NULL),
(713, 1, '10', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 21:20:47', '2024-06-17 21:20:47', 'Jose Luis Rodriguez', 'enabled', NULL),
(714, 1, '02', '22', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 21:21:39', '2024-06-17 21:21:39', 'Jose Luis Rodriguez', 'enabled', NULL),
(715, 1, '33', '33', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 21:25:18', '2024-06-17 21:25:18', 'Jose Luis Rodriguez', 'enabled', NULL),
(716, 1, '21', '23', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 21:26:12', '2024-06-17 21:26:12', 'Jose Luis Rodriguez', 'enabled', NULL),
(717, 8, '12', '22', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 22:55:50', '2024-06-18 22:55:50', 'Jose Luis Rodriguez', 'enabled', NULL),
(718, 9, '15', '56', '65', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 22:56:10', '2024-06-18 22:56:10', 'Jose Luis Rodriguez', 'enabled', NULL),
(719, 11, '32', '45', '57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:02:25', '2024-06-18 23:02:25', 'Jose Luis Rodriguez', 'enabled', NULL),
(720, 12, '23', '34', '56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:02:44', '2024-06-18 23:02:44', 'Jose Luis Rodriguez', 'enabled', NULL),
(721, 12, '34', '45', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:03:38', '2024-06-18 23:03:38', 'Jose Luis Rodriguez', 'enabled', NULL),
(722, 11, '12', '21', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:04:02', '2024-06-18 23:04:02', 'Jose Luis Rodriguez', 'enabled', NULL),
(723, 11, '89', '09', '87', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:06:04', '2024-06-18 23:06:04', 'Jose Luis Rodriguez', 'enabled', NULL),
(724, 12, '46', '77', '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:06:20', '2024-06-18 23:06:20', 'Jose Luis Rodriguez', 'enabled', NULL),
(725, 10, '25', '58', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:09:15', '2024-06-18 23:09:15', 'Jose Luis Rodriguez', 'enabled', NULL),
(726, 36, '45', '67', '89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:13:51', '2024-06-18 23:13:51', 'Jose Luis Rodriguez', 'enabled', NULL),
(727, 1, '20', '98', '88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:16:22', '2024-06-18 23:16:22', 'Jose Luis Rodriguez', 'enabled', NULL),
(728, 36, '45', '67', '77', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:16:47', '2024-06-18 23:16:47', 'Jose Luis Rodriguez', 'enabled', NULL),
(729, 36, '22', '33', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:17:51', '2024-06-18 23:17:51', 'Jose Luis Rodriguez', 'enabled', NULL),
(730, 36, '22', '22', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:24:54', '2024-06-18 23:24:54', 'Jose Luis Rodriguez', 'enabled', NULL),
(731, 36, '22', '22', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:25:00', '2024-06-18 23:25:00', 'Jose Luis Rodriguez', 'enabled', NULL),
(732, 31, '45', '33', '89', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-18 23:25:33', '2024-06-18 23:25:33', 'Jose Luis Rodriguez', 'enabled', NULL),
(733, 1, '15', '08', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:48:23', '2024-06-20 03:48:23', 'Jose Luis Rodriguez', 'enabled', NULL),
(734, 2, '32', '45', '68', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:48:48', '2024-06-20 03:48:48', 'Jose Luis Rodriguez', 'enabled', NULL),
(735, 3, '56', '79', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:49:08', '2024-06-20 03:49:08', 'Jose Luis Rodriguez', 'enabled', NULL),
(736, 6, '33', '02', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:49:33', '2024-06-20 03:49:33', 'Jose Luis Rodriguez', 'enabled', NULL),
(737, 8, '99', '00', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:50:01', '2024-06-20 03:50:01', 'Jose Luis Rodriguez', 'enabled', NULL),
(738, 9, '32', '46', '74', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:50:27', '2024-06-20 03:50:27', 'Jose Luis Rodriguez', 'enabled', NULL),
(739, 11, '54', '64', '38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:50:56', '2024-06-20 03:50:56', 'Jose Luis Rodriguez', 'enabled', NULL),
(740, 12, '11', '22', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:51:18', '2024-06-20 03:51:18', 'Jose Luis Rodriguez', 'enabled', NULL),
(741, 10, '34', '52', '76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:52:51', '2024-06-20 03:52:51', 'Jose Luis Rodriguez', 'enabled', NULL),
(742, 36, '21', '36', '70', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 03:53:36', '2024-06-20 03:53:36', 'Jose Luis Rodriguez', 'enabled', NULL),
(743, 1, '12', '34', '57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-22 12:41:26', '2024-06-22 12:41:26', 'Jose Luis Rodriguez', 'enabled', NULL),
(744, 2, '76', '90', '00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-22 12:41:59', '2024-06-22 12:41:59', 'Jose Luis Rodriguez', 'enabled', NULL),
(745, 6, '22', '34', '67', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-22 12:49:38', '2024-06-22 12:49:38', 'Jose Luis Rodriguez', 'enabled', NULL),
(746, 1, '00', '23', '67', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-22 13:12:26', '2024-06-22 13:12:26', 'Jose Luis Rodriguez', 'disabled', NULL),
(747, 2, '23', '47', '89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-22 13:12:47', '2024-06-22 13:12:47', 'Jose Luis Rodriguez', 'disabled', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(25) DEFAULT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `token`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Jose Luis Rodriguez', 'jldsgns@gmail.com', NULL, '$2y$10$Yudvyfw6ynF3QK2sVAIm8.Uc.u9mb.7iEjM4jTcuPGcEXjZJKXMD6', 'wwwwweeeerrrr', NULL, NULL, NULL, 'N9aMLIYCTldDntq8oTi89Oftk5lFDIulHgagFk8cBLlRuVQ5J0FtVbXEcfzr', '2023-04-23 08:25:45', '2023-04-23 08:25:45', '1'),
(6, 'Miguel Rodriguez', 'miky@gmail.com', NULL, '$2y$10$tf9gmJGhvsxkNIxjNx1gnOiYSGzDhtCy2UJJzRumG6oUDidBzx8m.', NULL, NULL, NULL, NULL, NULL, '2023-06-02 11:59:55', '2023-06-02 11:59:55', ''),
(7, 'Waldy', 'waldyantonioreyes@gmail.com', NULL, '$2y$10$wSbzNi5/mI/8zySvpTaD/.N8Xcj5IRyYhhwCkqb4VLrHoOoJiJRzG', 'kljsdfjaks', NULL, NULL, NULL, NULL, '2024-04-17 04:40:36', '2024-04-17 04:40:36', ''),
(8, 'jkldasfjadfa;', 'jkdfkef@gmail.com', NULL, '$2y$10$P2WcEshGSHWTVhGGohIXBOawxOm7sa/CfJba3s3c37DR5UJXY58rC', 'XrCbqjLgQm', NULL, NULL, NULL, NULL, '2024-04-17 04:43:18', '2024-04-17 04:43:18', ''),
(9, 'rtutrffufgfuffu', 'prueba@gmail.com', NULL, '$2y$10$wu8Uu.s0.gvpficaoeipKOiyYEwBoYW6swfjtaujQLfqdbpexk6vy', 'YMsFTrBmDufhqq0jaMmK', NULL, NULL, NULL, NULL, '2024-04-18 04:35:32', '2024-04-18 04:35:32', ''),
(10, 'Yissel', 'yissel@gmail.com', NULL, '$2y$10$UfcNwWkEjs3zhiKlfL6mNOpi0pcdNkZSRWsJvV8yGRr43Fh0jAyZW', 'eP0ZyCmAHn9lFd07mXXT', NULL, NULL, NULL, NULL, '2024-04-20 22:38:59', '2024-04-20 22:38:59', ''),
(11, 'Pepe', 'pepe@gmail.com', NULL, '$2y$10$eWO2ou.23s8aOOGfBWK.TeiDlAKA070g7AuYlQrMWvqQKYWqUHOsW', 'JcYQ9WaaLFjRDsmaNpyg', NULL, NULL, NULL, NULL, '2024-04-28 11:23:39', '2024-04-28 11:23:39', NULL),
(12, 'daniel', 'daniel@gmail.com', NULL, '$2y$10$a3NqkvoPMNHsn/Wu.Qq0lObtUURjU5BMfDcPIy6.25YOqbLddlre2', 'EImCCmcAZCqG43VrwWfE', NULL, NULL, NULL, NULL, '2024-06-15 21:50:35', '2024-06-15 21:50:35', NULL),
(13, 'juan daniel', 'juandaniel@gmail.com', NULL, '$2y$10$n449pMJ1hC108PfaJssryeDGcsc5IRunOgXt.0JK2YeS1SkHLZAy2', NULL, NULL, NULL, NULL, NULL, '2024-06-16 00:07:58', '2024-06-16 00:07:58', NULL),
(14, 'juana santos ', 'juanasantos@gmail.com', NULL, '$2y$10$Mu/Wy9l8sWEZcWz.RWfCEe.JcPsbdKx5YCIuB9EgsQk6gCCqTVbOe', 'yjZDKWmnebYK1gXlAkTB', NULL, NULL, NULL, NULL, '2024-06-16 01:05:42', '2024-06-16 01:05:42', NULL),
(15, 'cristian', 'cristian@gmail.com', NULL, '$2y$10$ue7ttPIWiWm4gmEPD4bm3ut2LbrxTboSZBQl/ienFILLLLCbKOUV2', 'bCTm0yWKIAZy7FeYNkrA', NULL, NULL, NULL, NULL, '2024-06-16 01:14:54', '2024-06-16 01:14:54', NULL),
(16, 'prueba', 'prueba1@gmail.com', NULL, '$2y$10$bz/SMVDcfjOx9sEsxPnaz.lp03mmIvFC36.bJrhWAa1pH.N8YwsjK', 'hyVLb4onq0eXll8IBnYU', NULL, NULL, NULL, NULL, '2024-06-16 02:12:04', '2024-06-16 02:12:04', NULL),
(17, 'usuario de prueba 2', 'usuario2@gmail.com', NULL, '$2y$10$BNp7.hGXbH7Rzel86IGxDeH1K7VVqjDGlXcWFSbxmINTc65GIIOOa', 'fBR5TcKtHyY04mB528m9', NULL, NULL, NULL, NULL, '2024-06-16 02:57:33', '2024-06-16 02:57:33', NULL),
(18, 'cris', 'cris@gmail.com', NULL, '$2y$10$I8bCp3ivoS.qfRL0Vgh1CesKkFh1nfc2ziNiC/cKBBt/uSWKjR2mu', 'XNzSZfZRIMoSw9R8LoZm', NULL, NULL, NULL, NULL, '2024-06-16 03:16:52', '2024-06-16 03:16:52', NULL),
(19, 'daniel', 'daniel01@gmail.com', NULL, '$2y$10$5RDNgPaDEaMM62O7AkoBC.iSFbQ6umycAnCjGmB5BoAZUc67.U/Aq', '0EaDNVQMUz21ea5s16RM', NULL, NULL, NULL, NULL, '2024-06-20 08:08:48', '2024-06-20 08:08:48', NULL),
(20, 'Guadalupe Reyes', 'guadalupe@gmailcom', NULL, '$2y$10$lqrFI7E61gzwZejnn2p/KO79w1ugwXS7tlCu6LS2noyIhWK6FX/2O', 'vknAdNYCJVWTEHV4N63m', NULL, NULL, NULL, NULL, '2024-06-22 00:22:01', '2024-06-22 00:22:01', NULL),
(21, 'victor ', 'victor@gmail.com', NULL, '$2y$10$Mj0YEMx5eTrcqLhf9qLAzOHoYECKgiXcfyGiHx/LbENKGDBWbNMnC', 'Iw857dtTglcwuHVIr3qd', NULL, NULL, NULL, NULL, '2024-06-22 00:49:31', '2024-06-22 00:49:31', NULL),
(22, 'CRISTINO REYES', 'cristinoreyes@gmail.com', NULL, '$2y$10$NC.86/Z/6vUIR3Ec8feuK.CXQo4aY0K7BBN8t2Ka1p0T25KavocUe', 'gngCHk7ZYzP7KNFElJ52', NULL, NULL, NULL, NULL, '2024-06-22 16:38:24', '2024-06-22 16:38:24', NULL),
(23, 'WILKEIRY REYES', 'wilkeiryreyes@gmailcom', NULL, '$2y$10$MK45WzOWykzVywRqzBd4LOl2MCGTSFGQ7/9Q9yoj08c3xU5uJoUFK', 'JxJAiXwynvgNYYj5CTj8', NULL, NULL, NULL, NULL, '2024-06-22 17:09:08', '2024-06-22 17:09:08', NULL),
(24, 'usuario de prueba', 'usuariodeprueba@gmail.com', NULL, '$2y$10$09En78cX31wszYtcfkhObOh96JD.q8CYO1syH7KqitqJM/cJQ4u4O', 'UzAz9Q8dnXLyGb8FD7Ft', NULL, NULL, NULL, NULL, '2024-06-23 01:47:28', '2024-06-23 01:47:28', NULL),
(25, 'pr', 'pr@gmail.com', NULL, '$2y$10$E8NPpRebqwcrI8sT2GT0eO4V1Zh5Q7u9pBftl6Hf8KLyluCwRjC3G', 'rTLG9R62XY9vf9qzU85p', NULL, NULL, NULL, NULL, '2024-06-23 02:36:59', '2024-06-23 02:36:59', NULL),
(26, 'pr', 'pr2@gmail.com', NULL, '$2y$10$fLwitIUV01conthT9FYt..UssXMlN3klLtYMocVN9TogzmskiCc7O', 'e8zee5vTcX9Y7JlFcpBb', NULL, NULL, NULL, NULL, '2024-06-23 02:37:13', '2024-06-23 02:37:13', NULL),
(27, 'e', 'e@gmail.com', NULL, '$2y$10$mm/glNlupji80VxKpJF1Z.AJc7Fqcgu/fS1iW0C284z9UT4VkYL/6', 'NOlgwkW440C0fmrgQ6pL', NULL, NULL, NULL, NULL, '2024-06-23 02:40:44', '2024-06-23 02:40:44', NULL),
(28, 'e', 'ej@gmal.com', NULL, '$2y$10$wObTwdS6FGlDF8R.k7uE7.NXcR9ak5Hhi6LJOK0OIIEffjQAtUpOu', 'MK999BrapxqPDBVYSr3Z', NULL, NULL, NULL, NULL, '2024-06-23 02:41:51', '2024-06-23 02:41:51', NULL),
(29, 'dasf', 'sadfa@gmail.com', NULL, '$2y$10$CJulUbHwxg0cPIINILmmyOIvUSt2gt1k1Gek51./T.OPmw.s9Toj.', 't4sJqgOPf1d3tOzNIeRq', NULL, NULL, NULL, NULL, '2024-06-23 02:44:20', '2024-06-23 02:44:20', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userscreens`
--

CREATE TABLE `userscreens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `userscreens`
--

INSERT INTO `userscreens` (`id`, `username`, `password`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'prueba', '1234567890', 1, '2024-04-17 03:21:02', '2024-04-17 03:23:25'),
(2, 'banca papo ', 'wALDYANTONIO0330860714', 12, '2024-06-15 23:00:06', '2024-06-15 23:00:06'),
(3, 'waldyantonioreyes@gmail.com', '12345678', 13, '2024-06-16 00:12:58', '2024-06-16 00:12:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configurations_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `loterias`
--
ALTER TABLE `loterias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `remittances`
--
ALTER TABLE `remittances`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultados_loterias`
--
ALTER TABLE `resultados_loterias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loterias` (`id_loterias`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `userscreens`
--
ALTER TABLE `userscreens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userscreens_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `loterias`
--
ALTER TABLE `loterias`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `remittances`
--
ALTER TABLE `remittances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `resultados_loterias`
--
ALTER TABLE `resultados_loterias`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=748;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `userscreens`
--
ALTER TABLE `userscreens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `configurations`
--
ALTER TABLE `configurations`
  ADD CONSTRAINT `configurations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `resultados_loterias`
--
ALTER TABLE `resultados_loterias`
  ADD CONSTRAINT `resultados_loterias_ibfk_1` FOREIGN KEY (`id_loterias`) REFERENCES `loterias` (`id`);

--
-- Filtros para la tabla `userscreens`
--
ALTER TABLE `userscreens`
  ADD CONSTRAINT `userscreens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
