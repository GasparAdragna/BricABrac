-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2019 a las 18:13:25
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bricabrac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Cristaleros y Vajilleros'),
(2, 'Cómodas'),
(3, 'Consolas y Dressoires'),
(4, 'Escritorios'),
(5, 'Mesas de luz'),
(6, 'Sillones'),
(7, 'Mecedora'),
(8, 'Banquetas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muebles`
--

CREATE TABLE `muebles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `categorias_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `muebles`
--

INSERT INTO `muebles` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `foto`, `categorias_id`, `created_at`, `updated_at`) VALUES
(1, 'Comoda De Diseño Americano', 'Comoda americana\r\n\r\n \r\n\r\nMadera de petiribi\r\nMadera lavada, sin lustre \r\n3 cajones  \r\nTirantes en bronce\r\nPuntera de bronce\r\nDescripcion corresponde a la comoda de arriba\r\n\r\nMedida\r\n\r\nalto: 72cm\r\n\r\nancho: 1,51 cm\r\n\r\nprofundidad: 47 cm', '6600.00', 1, 'comoda.jpg', 2, '2019-02-25 23:34:56', '0000-00-00 00:00:00'),
(2, 'Vajillero Aparador De Diseño Escandinavo', 'Vajillero americano\r\n\r\n \r\n\r\nMadera maciza y enchapada de petiribi \r\nMadera lavada\r\n3 estantes con 2 puertas \r\n3 cajones\r\nbar con espejo\r\nTirantes en bronce\r\n \r\nMedida\r\n\r\nalto: 1,50 cm\r\n\r\nancho: 1,20 cm\r\n\r\nprofundidad: 50 cm\r\n\r\n ', '7000.00', 0, 'vajillero.jpg', 1, '2019-02-25 23:37:36', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `muebles`
--
ALTER TABLE `muebles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `muebles`
--
ALTER TABLE `muebles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
