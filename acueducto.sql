-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2022 a las 00:23:58
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acueducto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `email`, `password`, `fecha`) VALUES
(1, 'Katherin', 'katherin@gmail.com', '0123456789', '2022-09-12 20:41:06'),
(2, 'Luis carlos', 'juan@gmail.com', '0123456789', '2022-09-12 20:46:21'),
(3, 'Pedro', 'pedro@gmail.com', 'pedro@gmai', '2022-09-12 20:46:44'),
(4, 'Robert', 'Robertmontero846@gmail.com', '0123456789', '2022-09-12 21:06:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncias`
--

CREATE TABLE `denuncias` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `num_ident` int(20) NOT NULL,
  `tipo_ident` text NOT NULL,
  `ciudad` text NOT NULL,
  `direccion` text NOT NULL,
  `email` text NOT NULL,
  `celular` bigint(12) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `denuncias`
--

INSERT INTO `denuncias` (`id`, `nombres`, `apellidos`, `num_ident`, `tipo_ident`, `ciudad`, `direccion`, `email`, `celular`, `descripcion`, `fecha`) VALUES
(1, 'Robert David', 'Montero Garces', 1124062470, 'CC', 'maicao', 'calle 10 2e12', 'Robertmontero@gmail.com', 3005793702, 'Proceso Penal', '2022-09-07 14:47:12'),
(3, 'Jhilmar emilio', 'De Arcos', 1123786488, 'TI', 'Santa Marta', 'Calle 13 ', 'jhimardearcos@gmail.com', 301045024, 'Accion de tutela', '2022-09-07 15:04:29'),
(4, 'Agustin Segundo', 'Jimenez Salas', 12133716, 'CC', 'Maicao', 'calle 10 #4e70', 'aguntin@gmail.com', 3044616101, 'Accion de tutela', '2022-09-07 19:07:24'),
(5, 'Lucas', 'Modrid', 45890038, 'TI', 'Bogota', 'Calle 23', 'Lucas@gmail.com', 3005883333, 'Accion de tutela', '2022-09-12 19:18:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indices de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id`,`num_ident`),
  ADD UNIQUE KEY `num_ident` (`num_ident`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
