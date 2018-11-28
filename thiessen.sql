-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2018 at 07:14 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thiessen`
--

-- --------------------------------------------------------

--
-- Table structure for table `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_spanish_ci NOT NULL COMMENT 'venta, renta, vendido, rentado',
  `precio` double NOT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'casa, departamento, terreno',
  `areaTerreno` double NOT NULL,
  `areaConstruccion` double NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `banos` int(11) NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `longitud` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `latitud` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fotos` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'la ubicacion de fotografias en formato json',
  `detalles` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripcion detallada de la propiedad',
  `caracteristicas` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'alarma, aire acondicionado, estacionamiento, alberca, etc',
  `vendedor` int(11) NOT NULL,
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `personal` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'informacion personal',
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Puesto en la empresa: Agente de Ventas, Supervisor, Gerente, etc',
  `perfil` varchar(13) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Prioridades dentro del sistema: Admin, user, especial, etc',
  `foto` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'foto de perfil',
  `estado` varchar(1) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Activo/Inactivo',
  `ultimo_login` datetime NOT NULL COMMENT 'Ultima fecha de acceso al sistema',
  `fecha_nac` datetime NOT NULL COMMENT 'Fecha de Nacimiento',
  `sociales` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Links de las redes sociales en formato json'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
