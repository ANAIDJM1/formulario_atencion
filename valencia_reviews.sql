-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2020 a las 00:45:16
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `valencia_reviews`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `arrive` date NOT NULL,
  `departure` date NOT NULL,
  `predep_desc` varchar(200) NOT NULL,
  `predep_info` varchar(200) NOT NULL,
  `predep_efi` varchar(200) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `lima_a` varchar(200) NOT NULL,
  `lima_i` varchar(200) NOT NULL,
  `cusco_a` varchar(200) NOT NULL,
  `cusco_i` varchar(200) NOT NULL,
  `sacredv_a` varchar(200) NOT NULL,
  `sacredv_i` varchar(200) NOT NULL,
  `mpp_a` varchar(200) NOT NULL,
  `mpp_i` varchar(200) NOT NULL,
  `arqpa_a` varchar(200) NOT NULL,
  `arqpa_i` varchar(200) NOT NULL,
  `colca_a` varchar(200) NOT NULL,
  `colca_i` varchar(200) NOT NULL,
  `nazca_a` varchar(200) NOT NULL,
  `nazca_i` varchar(200) NOT NULL,
  `puertom_a` varchar(200) NOT NULL,
  `puertom_i` varchar(200) NOT NULL,
  `puno_a` varchar(200) NOT NULL,
  `puno_i` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
