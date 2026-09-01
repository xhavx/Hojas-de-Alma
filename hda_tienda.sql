-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2026 a las 00:35:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hda_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`) VALUES
(1, 'Gyuto occidental', 92400),
(2, 'Santoku Alveolado', 89250),
(3, 'Mondador', 47250),
(4, 'Deshuesador Curvo', 57750),
(5, 'Cuchillo de Pan', 42000),
(6, 'Cuchillo de Caza Bushcraft', 94500),
(7, 'Cuchillo Táctico de Supervivencia', 92400),
(8, 'Bowie de Caza', 102900),
(9, 'Cuchillo de cuello', 43050),
(10, 'Cuchillo de monte', 79800),
(11, 'De autor 1', 63000),
(12, 'De autor 2', 73500),
(13, 'De autor 3', 75600),
(14, 'De autor 4', 68250),
(15, 'De autor 5', 74550),
(16, 'De autor 6', 82950),
(17, 'De autor 7', 77700),
(18, 'De autor 8', 71400),
(19, 'De autor 9', 67200),
(20, 'De autor 10', 71400),
(21, 'Chef', 86100),
(22, 'Cuchillo de carnicero', 85050),
(23, 'Chef Sebatier', 110250),
(24, 'Bowie', 157500),
(25, 'Facon', 157500),
(26, 'Cuchillo Verijero', 71400),
(27, 'Deshuesador antiguo', 84000),
(28, 'De Caza', 102900),
(29, 'Filetero', 42000),
(30, 'De Campo', 78750);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
