-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-04-2017 a las 00:09:29
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ropa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`dni`, `nombre`, `apellido`, `direccion`, `telefono`, `deleted`, `email`) VALUES
(34915890, 'Federico', 'Castiglione', 'Barrio sarmiento 355 este rawson, San juan', '2645317435', 0, 'feder102@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_cuentas`
--

CREATE TABLE `cliente_cuentas` (
  `dni_cliente` int(11) NOT NULL,
  `importe` float DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente_cuentas`
--

INSERT INTO `cliente_cuentas` (`dni_cliente`, `importe`, `deleted`) VALUES
(34915890, 1130, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cli_cta_ventas`
--

CREATE TABLE `cli_cta_ventas` (
  `id_cliente_cuenta` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depositos`
--

CREATE TABLE `depositos` (
  `id_cuenta_clie` int(11) DEFAULT NULL,
  `importe` float DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `depositos`
--

INSERT INTO `depositos` (`id_cuenta_clie`, `importe`, `created`, `id`) VALUES
(34915890, 100, '17-04-2017 23:54:45', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_devoluciones`
--

CREATE TABLE `item_devoluciones` (
  `id` int(11) NOT NULL,
  `id_item_venta` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_ventas`
--

CREATE TABLE `item_ventas` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `id_prenda` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `importe` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `nombre` varchar(45) DEFAULT NULL,
  `porcentaje` float DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prendas`
--

CREATE TABLE `prendas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `id_color` int(11) DEFAULT NULL,
  `id_talle` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `pcosto` float DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda_lista`
--

CREATE TABLE `prenda_lista` (
  `id_prenda` int(11) NOT NULL,
  `id_lista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE `talles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_venta`
--

CREATE TABLE `tipo_venta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `importe_final` float DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `id_cliente` int(11) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL,
  `id_tipo_venta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `cliente_cuentas`
--
ALTER TABLE `cliente_cuentas`
  ADD PRIMARY KEY (`dni_cliente`),
  ADD KEY `fk_cliente_cuentas_1_idx` (`dni_cliente`);

--
-- Indices de la tabla `cli_cta_ventas`
--
ALTER TABLE `cli_cta_ventas`
  ADD PRIMARY KEY (`id_cliente_cuenta`,`id_venta`,`fecha`),
  ADD KEY `fk_cli_cta_venta_1_idx` (`id_cliente_cuenta`),
  ADD KEY `fk_cli_cta_venta_2_idx` (`id_venta`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_depositos_1_idx` (`id_cuenta_clie`);

--
-- Indices de la tabla `item_devoluciones`
--
ALTER TABLE `item_devoluciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item_devoluciones_1_idx` (`id_item_venta`);

--
-- Indices de la tabla `item_ventas`
--
ALTER TABLE `item_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item_ventas_venta_idx` (`id_venta`),
  ADD KEY `fk_item_ventas_prenda_idx` (`id_prenda`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prendas_talle_idx` (`id_talle`),
  ADD KEY `fk_prendas_color_idx` (`id_color`);

--
-- Indices de la tabla `prenda_lista`
--
ALTER TABLE `prenda_lista`
  ADD KEY `fk_prenda_lista_prenda_idx` (`id_prenda`),
  ADD KEY `fk_prenda_lista_listas_idx` (`id_lista`);

--
-- Indices de la tabla `talles`
--
ALTER TABLE `talles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_venta`
--
ALTER TABLE `tipo_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ventas_cliente_idx` (`id_cliente`),
  ADD KEY `fk_ventas_tipo_idx` (`id_tipo_venta`),
  ADD KEY `fk_ventas_vendedor_idx` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `depositos`
--
ALTER TABLE `depositos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `item_devoluciones`
--
ALTER TABLE `item_devoluciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `item_ventas`
--
ALTER TABLE `item_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prendas`
--
ALTER TABLE `prendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `talles`
--
ALTER TABLE `talles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_venta`
--
ALTER TABLE `tipo_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_cuentas`
--
ALTER TABLE `cliente_cuentas`
  ADD CONSTRAINT `fk_cliente_cuentas_1` FOREIGN KEY (`dni_cliente`) REFERENCES `clientes` (`dni`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cli_cta_ventas`
--
ALTER TABLE `cli_cta_ventas`
  ADD CONSTRAINT `fk_cli_cta_venta_1` FOREIGN KEY (`id_cliente_cuenta`) REFERENCES `cliente_cuentas` (`dni_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cli_cta_venta_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD CONSTRAINT `fk_depositos_1` FOREIGN KEY (`id_cuenta_clie`) REFERENCES `cliente_cuentas` (`dni_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `item_devoluciones`
--
ALTER TABLE `item_devoluciones`
  ADD CONSTRAINT `fk_item_devoluciones_1` FOREIGN KEY (`id_item_venta`) REFERENCES `item_ventas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `item_ventas`
--
ALTER TABLE `item_ventas`
  ADD CONSTRAINT `fk_item_ventas_prenda` FOREIGN KEY (`id_prenda`) REFERENCES `prendas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_item_ventas_venta` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD CONSTRAINT `fk_prendas_color` FOREIGN KEY (`id_color`) REFERENCES `colores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prendas_talle` FOREIGN KEY (`id_talle`) REFERENCES `talles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prenda_lista`
--
ALTER TABLE `prenda_lista`
  ADD CONSTRAINT `fk_prenda_lista_listas` FOREIGN KEY (`id_lista`) REFERENCES `listas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prenda_lista_prenda` FOREIGN KEY (`id_prenda`) REFERENCES `prendas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_ventas_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ventas_tipo` FOREIGN KEY (`id_tipo_venta`) REFERENCES `tipo_venta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ventas_vendedor` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedores` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
