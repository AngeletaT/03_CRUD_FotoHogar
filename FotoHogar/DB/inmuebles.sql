-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2024 a las 19:08:11
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
-- Base de datos: `fotohogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id` int(6) UNSIGNED NOT NULL,
  `id_ref` varchar(5) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `opcion` varchar(30) NOT NULL,
  `m2` int(50) NOT NULL,
  `precio` int(50) NOT NULL,
  `habs` int(50) NOT NULL,
  `banyos` int(50) NOT NULL,
  `ascensor` tinyint(4) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `extras` varchar(100) DEFAULT NULL,
  `gastos` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id`, `id_ref`, `descripcion`, `tipo`, `opcion`, `m2`, `precio`, `habs`, `banyos`, `ascensor`, `fecha`, `extras`, `gastos`) VALUES
(1, '1526A', 'Chalet en Madrid', 'Piso', 'Venta:', 120, 90000, 4, 2, 1, '10/12/2023', 'Piscina:Jardin:', 'Luz:Agua:Vado:'),
(2, '1527A', 'Piso en Barcelona', 'Casa', 'Alquiler:', 150, 150000, 5, 3, 0, '11/12/2023', 'Jardin:Trastero:', 'Luz:Agua:'),
(3, '1528A', 'Casa en Valencia', 'Casa', 'Alquiler:Nueva:', 100, 120000, 3, 2, 0, '10/12/2023', 'Jardin:Trastero:', 'Luz:Agua:Vado:'),
(4, '1523C', 'Local en Valencia', 'Local', 'Venta:', 250, 350000, 1, 1, 0, '15/12/2023', 'Calefaccion:', 'Luz:Agua:'),
(5, '5555A', 'Terreno en Madrid', 'Terreno', 'Compartir:', 1500, 75000, 0, 1, 0, '12/12/2022', 'Piscina:', 'Agua:'),
(6, '2356F', 'Chalet en Ontinyent', 'Casa', 'Alquiler:', 150, 360000, 4, 2, 0, '15/01/2024', 'Trastero:Calefaccion:', 'Luz:Agua:Vado:'),
(7, '5687J', 'Piso en Alcoy', 'Piso', 'Compartir:', 90, 500, 3, 2, 1, '14/01/2024', 'Calefaccion:', 'Agua:Basura:'),
(8, '8564M', 'Local en Ontinyent', 'Local', 'Venta:', 250, 35000, 1, 1, 0, '21/01/2024', 'Jardin:Calefaccion:', 'Luz:Agua:'),
(9, '6543K', 'Garaje en Valencia', 'Garaje', 'Venta:', 10, 30000, 0, 0, 1, '07/01/2024', 'Trastero:', 'Vado:');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_ref` (`id_ref`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
