-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 22:26:18
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `novogusto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `numpedido` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `nombre`, `precio`, `numpedido`) VALUES
(57, '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `imagen`, `descripcion`, `precio`) VALUES
(1, 'Salchichas', '../img/tiendaonline/salchichas.jpg', 'texto', 12),
(2, 'Hamburguesas', '../img/tiendaonline/hamburguesas.png', 'texto', 12),
(3, 'Jamón', '../img/tiendaonline/jamon.jpg', 'texto', 15),
(4, 'Carne picada', '../img/tiendaonline/picada.jpg', 'texto', 52),
(5, 'Boquerón', '../img/tiendaonline/boqueron.jpg', 'texto', 112),
(6, 'Bacalao', '../img/tiendaonline/bacalao.jpg', 'texto', 1),
(7, 'Sardinas', '../img/tiendaonline/sardinas.jpg', 'texto', 12),
(8, 'Salmón', '../img/tiendaonline/salmon.jpg', 'texto', 13),
(9, 'Cigalas', '../img/tiendaonline/cigalas.jpg', 'texto', 8),
(10, 'Langostinos', '../img/tiendaonline/langostinos.jpg', 'texto', 14),
(11, 'Gambas', '../img/tiendaonline/gambas.jpg', 'texto', 12),
(12, 'Carabineros', '../img/tiendaonline/carabineros.jpg', 'texto', 11);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
