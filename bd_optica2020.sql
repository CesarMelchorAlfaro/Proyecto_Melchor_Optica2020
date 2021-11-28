-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 06:50:56
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_optica2020`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `IDarticulo` int(25) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Marca` varchar(25) NOT NULL,
  `Clasificacion` varchar(25) NOT NULL,
  `Precio` varchar(25) NOT NULL,
  `Talla` varchar(25) NOT NULL,
  `Color` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`IDarticulo`, `Nombre`, `Marca`, `Clasificacion`, `Precio`, `Talla`, `Color`) VALUES
(1, 'Lentes Aesthic', 'Calvin Klein', 'Deportivos', '499', 'S', 'Azul'),
(2, 'Lentes Vision', 'BenchMark', 'Solares', '199', 'L', 'Amarillo'),
(3, 'Lentes Aviator', 'ReyBan', 'Graduados', '999', 'M', 'Negro'),
(4, 'Lentes Oftalminicos', 'eLentes', 'Casuales', '699', 'M', 'Blanco'),
(5, 'Lentes Stone', 'Calvin Klein', 'Deportivos', '899', 'S', 'Gris');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `DNI` int(25) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Edad` varchar(25) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Direccion` varchar(25) NOT NULL,
  `Telefono` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`DNI`, `Nombre`, `Apellido`, `Edad`, `Correo`, `Direccion`, `Telefono`) VALUES
(1, 'Cesar', 'Melchor Alfaro', '17', 'CesarMelchor@gmail.com', 'Fracc. Portales', '6561778908'),
(2, 'Javier', 'Martinez', '17', 'Javi@gmail.com', 'Col. Ramacoi', '6565789012'),
(3, 'Saul', 'Carreon', '19', 'Saul@hotmail.com', 'Col. Mora', '6568907654'),
(4, 'Francisco', 'Macias', '20', 'Francisco@outlook.com', 'Fracc. Buenavista', '6564320912'),
(5, 'Blas', 'Mejia', '15', 'Mejia@hotmail.com', 'Fracc. Avitia', '6567658934');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `RFC` int(25) NOT NULL,
  `Producto` varchar(25) NOT NULL,
  `NombreCliente` varchar(25) NOT NULL,
  `Fecha` date NOT NULL,
  `Precio` varchar(25) NOT NULL,
  `Clasificacion` varchar(25) NOT NULL,
  `Empresa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`RFC`, `Producto`, `NombreCliente`, `Fecha`, `Precio`, `Clasificacion`, `Empresa`) VALUES
(1, 'Lentes', 'Cesar Melchor', '2021-11-27', '499', 'Deportivos', 'Optica2020'),
(2, 'Estuche', 'Javier Matinez', '2021-12-24', '99', 'Accesorio', 'Optica2020'),
(3, 'Lentes de Contacto', 'Saul Carreon', '2019-09-10', '699', 'Extras', 'Optica2020'),
(4, 'Limpiador', 'Francisco Macias', '2020-08-14', '199', 'Limpieza', 'Optica2020'),
(5, 'Lentes', 'Blas Mejia', '2021-11-27', '1299', 'Solares', 'Optica2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `NumSucursal` int(25) NOT NULL,
  `Direccion` varchar(25) NOT NULL,
  `Tipo` varchar(25) NOT NULL,
  `Localidad` varchar(25) NOT NULL,
  `Estado` varchar(25) NOT NULL,
  `Gerente` varchar(25) NOT NULL,
  `Capacidad` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`NumSucursal`, `Direccion`, `Tipo`, `Localidad`, `Estado`, `Gerente`, `Capacidad`) VALUES
(1, 'Av. Pinocelli', 'Grande', 'Juarez', 'Chihuahua', 'Cesar Melchor', '10000'),
(2, 'Av. Zaragoza', 'Mediana', 'Torreon', 'Coahuila', 'Saul Carreon', '5000'),
(3, 'Av. Militar', 'Mediana', 'Monterrey', 'Nuevo Leon', 'Javier Martinez', '7000'),
(4, 'Av. Morelos', 'Grande', 'Mazatlan', 'Sinaloa', 'Francisco Macias', '10000'),
(5, 'Av. Vista', 'Chica', 'Juarez', 'Chihuahua', 'Luis Enrique', '500');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`IDarticulo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`RFC`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`NumSucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `IDarticulo` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `DNI` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `RFC` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `NumSucursal` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
