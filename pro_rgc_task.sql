-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2018 a las 15:14:01
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pro_rgc_task`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historical`
--

CREATE TABLE `historical` (
  `id` int(11) NOT NULL,
  `timestamp_historical` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `task_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `timestamp_date` datetime DEFAULT NULL,
  `priority` int(11) NOT NULL,
  `phase` int(11) DEFAULT NULL,
  `phase_date` datetime DEFAULT NULL,
  `technician` int(11) DEFAULT NULL,
  `commitment_date` date DEFAULT NULL,
  `origin_task` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historical`
--

INSERT INTO `historical` (`id`, `timestamp_historical`, `task_id`, `description`, `timestamp_date`, `priority`, `phase`, `phase_date`, `technician`, `commitment_date`, `origin_task`) VALUES
(1, '2018-11-13 16:22:50', 1, 'Desarrollo proyecto task', '2018-11-13 16:22:50', 5, 1, '2018-11-13 00:00:00', 1, '2018-12-31', NULL),
(2, '2018-11-13 16:22:50', 2, 'Documento inicial', '2018-11-13 16:22:50', 5, 1, '2018-11-13 00:00:00', 1, '2018-12-31', 1),
(3, '2018-11-13 16:22:50', 3, 'Mockups', '2018-11-13 16:22:50', 5, 1, '2018-11-13 00:00:00', 2, '2018-12-31', 1),
(4, '2018-11-13 16:22:50', 4, 'Diagrama de Entidad/Interrelación', '2018-11-13 16:22:50', 5, 1, '2018-11-13 00:00:00', 2, '2018-12-31', 1),
(5, '2018-11-13 16:22:50', 5, 'Diagrama de Gantt', '2018-11-13 16:22:50', 5, 1, '2018-11-13 00:00:00', 2, '2018-12-31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phase`
--

CREATE TABLE `phase` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `phase`
--

INSERT INTO `phase` (`id`, `descripcion`) VALUES
(1, '010 Initial'),
(2, '020 Planification'),
(3, '030 Execution'),
(4, '040 Inspection'),
(5, '999 Close');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `timestamp_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `priority` int(11) NOT NULL,
  `phase` int(11) DEFAULT NULL,
  `phase_date` date DEFAULT NULL,
  `technician` int(11) DEFAULT NULL,
  `commitment_date` date DEFAULT NULL,
  `origin_task` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `description`, `timestamp_date`, `priority`, `phase`, `phase_date`, `technician`, `commitment_date`, `origin_task`) VALUES
(1, 'Desarrollo proyecto task', '2018-11-13 16:22:50', 5, 1, '2018-11-13', 1, '2018-12-31', NULL),
(2, 'Documento inicial', '2018-11-13 16:22:50', 5, 1, '2018-11-13', 1, '2018-12-31', 1),
(3, 'Mockups', '2018-11-13 16:22:50', 5, 1, '2018-11-13', 2, '2018-12-31', 1),
(4, 'Diagrama de Entidad/Interrelación', '2018-11-13 16:22:50', 5, 1, '2018-11-13', 2, '2018-12-31', 1),
(5, 'Diagrama de Gantt', '2018-11-13 16:22:50', 5, 1, '2018-11-13', 2, '2018-12-31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `technician`
--

CREATE TABLE `technician` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `technician`
--

INSERT INTO `technician` (`id`, `descripcion`) VALUES
(1, 'Alemán Alvarado Antonio'),
(2, 'Benítez Bermudez Bernardo'),
(3, 'Cerpa Cruz César'),
(4, 'Díaz Domínguez Dario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Usuario` varchar(25) NOT NULL,
  `Clave` varchar(25) NOT NULL,
  `TipoUsuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Usuario`, `Clave`, `TipoUsuario`) VALUES
(1, 'admin', '.', 'admin'),
(2, 'cliente', '.', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historical`
--
ALTER TABLE `historical`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_historical_phase` (`phase`),
  ADD KEY `fk_historical_technician` (`technician`);

--
-- Indices de la tabla `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_task_phase` (`phase`),
  ADD KEY `fk_task_technician` (`technician`);

--
-- Indices de la tabla `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historical`
--
ALTER TABLE `historical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `phase`
--
ALTER TABLE `phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historical`
--
ALTER TABLE `historical`
  ADD CONSTRAINT `fk_historical_phase` FOREIGN KEY (`phase`) REFERENCES `phase` (`id`),
  ADD CONSTRAINT `fk_historical_technician` FOREIGN KEY (`technician`) REFERENCES `technician` (`id`);

--
-- Filtros para la tabla `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `fk_task_phase` FOREIGN KEY (`phase`) REFERENCES `phase` (`id`),
  ADD CONSTRAINT `fk_task_technician` FOREIGN KEY (`technician`) REFERENCES `technician` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
