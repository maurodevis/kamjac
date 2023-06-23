-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2023 a las 06:11:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kamjac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorio`
--

CREATE TABLE `accesorio` (
  `Id_accesorio` int(10) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorio_mueble`
--

CREATE TABLE `accesorio_mueble` (
  `Id_accesorio_mueble` int(10) NOT NULL,
  `idaccesorio` int(10) DEFAULT NULL,
  `idmueble` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro_de_compra`
--

CREATE TABLE `carro_de_compra` (
  `Id_carro_compra` int(10) NOT NULL,
  `idfactura` int(10) DEFAULT NULL,
  `cantidad` decimal(10,0) DEFAULT NULL,
  `precio_unitario` decimal(10,0) DEFAULT NULL,
  `precio_total` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id_categoria` int(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `Id_cotizacion` int(10) NOT NULL,
  `fecha_cotizacion` date DEFAULT NULL,
  `idusuario` int(10) DEFAULT NULL,
  `total_cotizacion` decimal(10,0) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `Id_detalle_factura` int(10) NOT NULL,
  `idfactura` int(10) DEFAULT NULL,
  `idmueble` int(10) DEFAULT NULL,
  `cantidad` decimal(10,0) DEFAULT NULL,
  `subtotal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Id_factura` int(10) NOT NULL,
  `fecha_venta` date DEFAULT NULL,
  `total_factura` decimal(10,0) DEFAULT NULL,
  `idusuario` int(10) DEFAULT NULL,
  `idcotizacion` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `Id_material` int(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mueble`
--

CREATE TABLE `mueble` (
  `Id_mueble` int(10) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `idcategoria` int(10) DEFAULT NULL,
  `medidas` decimal(10,0) DEFAULT NULL,
  `color` varchar(15) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mueble_cotizacion`
--

CREATE TABLE `mueble_cotizacion` (
  `Id_mueble_cotizacion` int(10) NOT NULL,
  `idcotizacion` int(10) DEFAULT NULL,
  `idmueble` int(10) DEFAULT NULL,
  `cantidad` decimal(10,0) DEFAULT NULL,
  `precio_unitario` decimal(10,0) DEFAULT NULL,
  `total_contizacion` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mueble_material`
--

CREATE TABLE `mueble_material` (
  `Id_mueble_material` int(10) NOT NULL,
  `idmueble` int(10) DEFAULT NULL,
  `idmaterial` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id_rol` int(10) NOT NULL,
  `nombre_rol` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `Id_rol_usuario` int(10) NOT NULL,
  `idrol` int(10) DEFAULT NULL,
  `idusuario` int(10) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_documento`
--

CREATE TABLE `tipo_de_documento` (
  `Id_documento` int(10) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usuario` int(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `id_documento` int(10) DEFAULT NULL,
  `numero_documento` int(10) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo_e` varchar(40) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorio`
--
ALTER TABLE `accesorio`
  ADD PRIMARY KEY (`Id_accesorio`);

--
-- Indices de la tabla `accesorio_mueble`
--
ALTER TABLE `accesorio_mueble`
  ADD PRIMARY KEY (`Id_accesorio_mueble`),
  ADD KEY `idaccesorio` (`idaccesorio`),
  ADD KEY `idmueble` (`idmueble`);

--
-- Indices de la tabla `carro_de_compra`
--
ALTER TABLE `carro_de_compra`
  ADD PRIMARY KEY (`Id_carro_compra`),
  ADD KEY `idfactura` (`idfactura`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_categoria`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`Id_cotizacion`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`Id_detalle_factura`),
  ADD KEY `idfactura` (`idfactura`),
  ADD KEY `idmueble` (`idmueble`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Id_factura`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idcotizacion` (`idcotizacion`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`Id_material`);

--
-- Indices de la tabla `mueble`
--
ALTER TABLE `mueble`
  ADD PRIMARY KEY (`Id_mueble`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- Indices de la tabla `mueble_cotizacion`
--
ALTER TABLE `mueble_cotizacion`
  ADD PRIMARY KEY (`Id_mueble_cotizacion`),
  ADD KEY `idmueble` (`idmueble`),
  ADD KEY `idcotizacion` (`idcotizacion`);

--
-- Indices de la tabla `mueble_material`
--
ALTER TABLE `mueble_material`
  ADD PRIMARY KEY (`Id_mueble_material`),
  ADD KEY `idmueble` (`idmueble`),
  ADD KEY `idmaterial` (`idmaterial`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id_rol`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`Id_rol_usuario`),
  ADD KEY `idrol` (`idrol`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `tipo_de_documento`
--
ALTER TABLE `tipo_de_documento`
  ADD PRIMARY KEY (`Id_documento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD KEY `id_documento` (`id_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorio_mueble`
--
ALTER TABLE `accesorio_mueble`
  MODIFY `Id_accesorio_mueble` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mueble_material`
--
ALTER TABLE `mueble_material`
  MODIFY `Id_mueble_material` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesorio_mueble`
--
ALTER TABLE `accesorio_mueble`
  ADD CONSTRAINT `accesorio_mueble_ibfk_1` FOREIGN KEY (`idaccesorio`) REFERENCES `accesorio` (`Id_accesorio`),
  ADD CONSTRAINT `accesorio_mueble_ibfk_2` FOREIGN KEY (`idmueble`) REFERENCES `mueble` (`Id_mueble`);

--
-- Filtros para la tabla `carro_de_compra`
--
ALTER TABLE `carro_de_compra`
  ADD CONSTRAINT `carro_de_compra_ibfk_1` FOREIGN KEY (`idfactura`) REFERENCES `factura` (`Id_factura`);

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`Id_usuario`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`idfactura`) REFERENCES `factura` (`Id_factura`),
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`idmueble`) REFERENCES `mueble` (`Id_mueble`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`Id_usuario`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`idcotizacion`) REFERENCES `cotizacion` (`Id_cotizacion`);

--
-- Filtros para la tabla `mueble`
--
ALTER TABLE `mueble`
  ADD CONSTRAINT `mueble_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`Id_categoria`);

--
-- Filtros para la tabla `mueble_cotizacion`
--
ALTER TABLE `mueble_cotizacion`
  ADD CONSTRAINT `mueble_cotizacion_ibfk_1` FOREIGN KEY (`idmueble`) REFERENCES `mueble` (`Id_mueble`),
  ADD CONSTRAINT `mueble_cotizacion_ibfk_2` FOREIGN KEY (`idcotizacion`) REFERENCES `cotizacion` (`Id_cotizacion`);

--
-- Filtros para la tabla `mueble_material`
--
ALTER TABLE `mueble_material`
  ADD CONSTRAINT `mueble_material_ibfk_1` FOREIGN KEY (`idmueble`) REFERENCES `mueble` (`Id_mueble`),
  ADD CONSTRAINT `mueble_material_ibfk_2` FOREIGN KEY (`idmaterial`) REFERENCES `material` (`Id_material`);

--
-- Filtros para la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD CONSTRAINT `rol_usuario_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`Id_rol`),
  ADD CONSTRAINT `rol_usuario_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`Id_usuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `tipo_de_documento` (`Id_documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
