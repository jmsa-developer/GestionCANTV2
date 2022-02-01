-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2022 a las 16:27:57
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academiacreativa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `estado` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `fecha_nacimiento`, `estado`) VALUES
(1, '13515087', 'Pedro', 'Diaz', 'URBANIZACION DEL ESTE', NULL, 'pedro@gmail.com', NULL, 1),
(3, '28397000', 'Lina Rin', 'Lee', 'Ruiz pineda', '04261235611', 'linalee@gmail.com', '2002-02-01', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_contrato` date DEFAULT NULL,
  `horario` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `estado` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `fecha_nacimiento`, `fecha_contrato`, `horario`, `rol`, `estado`) VALUES
(1, '22121212', 'Luz', 'Fernandez', 'Cabudare', '04260001112', 'luz@gmail.com', NULL, NULL, 'Mañana', 'Gerente', 1),
(2, '1440211', 'Angel', 'Timaure', 'Quibor', '04260001111', 'angel@hotmail.com', '1992-01-01', '2021-11-01', 'Mañana', 'Asistente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `usuario`, `email`, `clave`, `rol`, `nombre`, `apellido`, `estado`) VALUES
(1, '1000000', 'Administrador', 'admin@gmail.com', '12345678', 'Administrador', 'Admin', 'Admin', 1),
(2, '20000000', 'Maria', 'maria@gmail.com', '12345678', 'Administrador', 'Maria', 'Valles', 1),
(3, '28397627', '04264535222', 'linalee@gmail.com', '12345678', 'Administrador', 'Lina', 'Lee', 1),
(7, '3000001', 'luisa00', 'luisa00@gmail.com', '12345678', 'Administrador', 'Luisa', 'García Perez', 1),
(8, '00000000', 'cristian', 'cristian@gmail.com', '12345678', 'Administrador', 'Cristian', 'Noguera', 1),
(10, '22200333', 'maria01', 'maria000@gmail.com', '33333333', 'Administrador', 'Maria', 'Perez', 1),
(11, '4000000', 'Lina', 'lina@gmail.com', '12345678', 'Administrador', 'Lina', 'Linarez', 1),
(12, '3333', 'ramon', 'ramon@gmail.com', '12345678', 'Usuario', 'Ramon', 'Baes', 1),
(13, '2020202', 'Raul', 'raul@gmail.com', '12345678', 'Usuario', 'Raul', 'Jimenez', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
