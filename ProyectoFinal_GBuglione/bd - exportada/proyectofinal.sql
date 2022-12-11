-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2022 a las 21:37:44
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
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `extracto` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `texto` text NOT NULL,
  `thumb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Titulo del Primero', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error optio, facilis tenetur incidunt fuga iure obcaecati quasi beatae odit harum modi natus ex dolore quam nulla. Cupiditate adipisci repella', '2022-12-09 22:34:55', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error optio, facilis tenetur incidunt fuga iure obcaecati quasi beatae odit harum modi natus ex dolore quam nulla. Cupiditate adipisci repellat commodi.', '1.png'),
(2, 'Titulo del Segundo', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla facere omnis enim quas, nostrum natus sed cumque eveniet, soluta animi consequatur ullam optio est asperiores quibusdam commodi cum fugi', '2022-12-09 22:38:30', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla facere omnis enim quas, nostrum natus sed cumque eveniet, soluta animi consequatur ullam optio est asperiores quibusdam commodi cum fugiat? Tempora!\r\nAmet consectetur, repudiandae magnam nemo velit explicabo quas excepturi commodi quia dolore fuga accusantium eius temporibus. Officia quia veniam porro, cupiditate a corrupti. Praesentium doloremque, velit ea laboriosam sint esse!', '2.png'),
(3, 'Titulo del Tercero', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla facere omnis enim quas, nostrum natus sed cumque eveniet, soluta animi consequatur ullam optio est asperiores quibusdam commodi cum fugi', '2022-12-09 22:39:22', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla facere omnis enim quas, nostrum natus sed cumque eveniet, soluta animi consequatur ullam optio est asperiores quibusdam commodi cum fugiat? Tempora!\r\nAmet consectetur, repudiandae magnam nemo velit explicabo quas excepturi commodi quia dolore fuga accusantium eius temporibus.', '3.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
