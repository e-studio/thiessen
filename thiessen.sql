-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2018 a las 19:33:03
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `thiessen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre de la propiedad en el sistema',
  `status` varchar(10) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Venta, Renta, Vendido, Rentado',
  `precio` double NOT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Casa, Departamento, Terreno',
  `areaTerreno` double NOT NULL,
  `areaConstruccion` double NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `banos` decimal(10,0) NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `latitud` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `longitud` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fotos` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Se graba la ubicacion de hasta 5 Fotografias en formato JSON',
  `detalles` text COLLATE utf8_spanish_ci NOT NULL,
  `caracteristicas` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Aqui se graban caracteristicas de la propiedad. Ej. Calefaccion, Aire Acondicionado, piscina, erc',
  `vendedor` int(11) NOT NULL COMMENT 'id del vendedor ',
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `personal` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Informacion personal del usuario que sera mostrada en el perfil de usuario',
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Titulo que tiene en la empresa. ej. Gerente, Agente de ventas, etc',
  `perfil` varchar(13) COLLATE utf8_spanish_ci NOT NULL COMMENT 'El tipo de acceso que tiene en el sistema ej. Administrador, usuario, etc',
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(1) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Activo / Inactivo',
  `ultimoLogin` datetime NOT NULL,
  `fechaNac` date NOT NULL,
  `sociales` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Los diferentes links a las redes sociales del usuario para ser contactado por los clientes.  En formato JSON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
