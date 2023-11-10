-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 03:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h_933`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `ID_Cliente` int(5) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `login` varchar(40) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `fechasistema` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `celular` int(9) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `DNI` int(8) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`ID_Cliente`, `nombre`, `apellido`, `login`, `clave`, `direccion`, `fechanac`, `fechasistema`, `celular`, `correo`, `DNI`, `estado`) VALUES
(1, 'Maria', 'Colchado', 'maria1', '123456', 'av lima 33', '2001-03-01', '2023-10-29 00:18:47', 956219988, 'maria@gmail.com', 7777777, 'A'),
(2, 'Jorge', 'Ruiz', 'jorge1', '123456', 'Av. Venezuela 115', '2001-03-02', '2023-10-29 00:18:47', 938897752, 'jorge@gmail.com', 7777778, 'A'),
(3, 'Jesus', 'Huamani', 'jesus1', '123456', 'Av. Universitaria 556', '2002-03-03', '2023-10-29 00:18:47', 956218877, 'jesus@gmail.com', 7777775, 'A'),
(4, 'Romero', 'Dominguez', 'romero1', '123456', 'Av. Universitaria 440', '2001-02-02', '2023-10-29 00:18:47', 956228877, 'romero@gmail.com', 7777774, 'A'),
(5, 'Renato', 'Huamani', NULL, NULL, 'Jiron Galicia 356B - Pueblo Libre', '2001-07-19', '2023-10-29 00:21:48', 938897752, 'renato@gmail.com', 75393720, 'A'),
(6, 'Jaime', 'Gutierrez', NULL, NULL, 'Av. Lima 112', '2001-07-15', '2023-10-29 01:13:50', 938897750, 'jaime@gmail.com', 77552211, 'A'),
(7, 'Juan Carlos', 'Meza', NULL, NULL, 'Av. Las Acacias', '2003-07-15', '2023-10-29 01:13:58', 938895552, 'juanc@gmail.com', 88441122, 'A'),
(8, 'Kevin', 'Huamani', NULL, NULL, 'Av. Los Cedros 155', '1997-10-05', '2023-10-29 01:14:04', 956214455, 'kevin@gmail.com', 77552233, 'A'),
(9, 'Eduardo', 'Guerra', NULL, NULL, 'Av. San Luis 495', '1998-10-03', '2023-10-29 01:14:11', 956218855, 'eduardo@gmail.com', 77889966, 'A'),
(10, 'Diego', 'Hernandez', NULL, NULL, 'Av. Ica 485', '2002-05-06', '2023-10-29 01:18:14', 956884422, 'diego@gmail.com', 956223366, 'A'),
(11, 'James', 'Correa', NULL, NULL, 'Av. Colombia 152', '2001-03-05', '2023-10-29 01:18:20', 956221144, 'james@gmail.com', 77885520, 'A'),
(12, 'Miguel Angel', 'Herrnandez', NULL, NULL, 'Av. Universitaria 160', '1995-05-01', '2023-10-29 01:18:26', 956118899, 'angel@gmail.com', 88552211, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `cotizacion_servicio`
--

CREATE TABLE `cotizacion_servicio` (
  `ID_CServicio` int(5) NOT NULL,
  `ID_Cliente` int(5) DEFAULT NULL,
  `ID_Responsable` int(5) DEFAULT NULL,
  `Servicio` varchar(40) DEFAULT NULL,
  `Dirección de Partida` varchar(40) DEFAULT NULL,
  `fechasistema` timestamp NULL DEFAULT NULL,
  `Dirección de Llegada` varchar(40) DEFAULT NULL,
  `Fecha Límite` date DEFAULT NULL,
  `Descuento` int(10) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL,
  `Monto Total` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `descuentos_ofertas`
--

CREATE TABLE `descuentos_ofertas` (
  `ID_Oferta` int(5) NOT NULL,
  `Nombre_Oferta` varchar(30) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `Tipo_Oferta` varchar(1) DEFAULT NULL,
  `Servicio` varchar(40) DEFAULT NULL,
  `fechasistema` timestamp NULL DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_expiracion` date DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL,
  `Valor_Descuento` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devolucion_almacen`
--

CREATE TABLE `devolucion_almacen` (
  `ID_Devolucion` int(5) NOT NULL,
  `fecha` date DEFAULT NULL,
  `ID_Cliente` int(5) DEFAULT NULL,
  `Nombre del Cliente` varchar(40) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `Cantidad` int(10) DEFAULT NULL,
  `ID_ME` int(5) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL,
  `fechasistema` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devolucion_almacen`
--

INSERT INTO `devolucion_almacen` (`ID_Devolucion`, `fecha`, `ID_Cliente`, `Nombre del Cliente`, `Descripcion`, `Cantidad`, `ID_ME`, `Estado`, `fechasistema`) VALUES
(1, '2023-10-10', 1, 'Maria', 'Muebles', 5, 1, 'F', '2023-10-29 01:34:57'),
(5, '2023-10-10', 2, 'Jorge', 'Mesa', 5, 2, 'F', '2023-10-29 01:35:56'),
(6, '2023-10-10', 3, 'Jesus', 'Puertas', 2, 3, 'F', '2023-10-29 01:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `encuesta`
--

CREATE TABLE `encuesta` (
  `ID_Encuesta` int(5) NOT NULL,
  `Nombre_Encuesta` varchar(40) DEFAULT NULL,
  `Tipo_Encuesta` varchar(1) DEFAULT NULL,
  `Link_Encuesta` varchar(100) DEFAULT NULL,
  `Canal_Distribucion` varchar(25) DEFAULT NULL,
  `fechasistema` timestamp NULL DEFAULT NULL,
  `Activacion_Alertas` varchar(2) DEFAULT NULL,
  `Fecha_Envio` date DEFAULT NULL,
  `Fecha_Cierre` date DEFAULT NULL,
  `Comentario` varchar(50) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gestion_almacen`
--

CREATE TABLE `gestion_almacen` (
  `ID_ME` int(5) NOT NULL,
  `fecha` date DEFAULT NULL,
  `ID_Cliente` int(5) DEFAULT NULL,
  `Nombre de Cliente` varchar(40) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `Cantidad` int(10) DEFAULT NULL,
  `Ubicacion en Almacen` varchar(50) DEFAULT NULL,
  `fecha limite` date DEFAULT NULL,
  `fechasistema` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gestion_almacen`
--

INSERT INTO `gestion_almacen` (`ID_ME`, `fecha`, `ID_Cliente`, `Nombre de Cliente`, `Descripcion`, `Cantidad`, `Ubicacion en Almacen`, `fecha limite`, `fechasistema`) VALUES
(1, '2023-10-01', 1, 'Maria', 'Mesas', 3, 'Entrada', '2023-10-24', '2023-10-29 01:34:14'),
(2, '2023-10-01', 2, 'Jorge', 'Sofa', 3, 'Entrada', '2023-10-24', '2023-10-29 01:34:20'),
(3, '2023-10-10', 3, 'Jesus', 'Sofá', 5, 'Entrada', '2023-11-11', '2023-10-29 01:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `modalidad_pago`
--

CREATE TABLE `modalidad_pago` (
  `ID_Modalidad` int(5) NOT NULL,
  `Servicio` varchar(40) DEFAULT NULL,
  `Modalidad_Servicio` varchar(40) DEFAULT NULL,
  `Producto` varchar(40) DEFAULT NULL,
  `Modalidad_Producto` varchar(40) DEFAULT NULL,
  `fechasistema` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordenes_de_cotizacion`
--

CREATE TABLE `ordenes_de_cotizacion` (
  `ID_Cotizacion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `ID_Cliente` int(5) DEFAULT NULL,
  `Nombre del Cliente` varchar(30) DEFAULT NULL,
  `Servicio` varchar(30) DEFAULT NULL,
  `Producto` varchar(40) DEFAULT NULL,
  `Cargo` int(15) DEFAULT NULL,
  `ID_Responsable` int(5) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL,
  `fechasistema` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordenes_de_cotizacion`
--

INSERT INTO `ordenes_de_cotizacion` (`ID_Cotizacion`, `fecha`, `ID_Cliente`, `Nombre del Cliente`, `Servicio`, `Producto`, `Cargo`, `ID_Responsable`, `Estado`, `fechasistema`) VALUES
(55442, '2023-10-10', 1, 'Maria', 'Mudanza', 'Cintas de Embalaje', 1500, 88113, 'F', '2023-10-29 01:02:04'),
(77885, '2023-10-11', 2, 'Jorge', 'Mudanza', '-', 900, 11995, 'F', '2023-10-29 01:02:22'),
(88117, '2023-10-12', 3, 'Jesus', 'Almacén', '-', 400, 88113, 'P', '2023-10-29 01:02:33'),
(88332, '2023-10-11', 4, 'Romero', 'Mudanza', 'Bolsas de cojín', 600, 77223, 'F', '2023-10-29 01:02:46'),
(99113, '2023-10-12', 5, 'Renato', 'Mudanza', '-', 650, 88113, 'F', '2023-10-29 01:03:00'),
(99663, '2023-10-11', 6, 'Jaime', 'Embalaje', 'Cinta de Embalaje', 70, 66331, 'F', '2023-10-29 01:03:33'),
(99885, '2023-10-10', 7, 'Juan Carlos', 'Empaquetado', 'Cajas de carton', 120, 66223, 'F', '2023-10-29 01:03:40'),
(99887, '2023-10-02', 8, 'Kevin', 'Mudanza', '-', 500, 55662, 'P', '2023-10-29 01:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `ordenes_de_venta`
--

CREATE TABLE `ordenes_de_venta` (
  `ID_Ordenventa` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ID_Cliente` int(5) NOT NULL,
  `Nombre del Cliente` varchar(30) NOT NULL,
  `Servicio` varchar(40) NOT NULL,
  `Producto` varchar(40) NOT NULL,
  `Tipo de Venta` varchar(1) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Estado` varchar(1) NOT NULL,
  `fechasistema` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordenes_de_venta`
--

INSERT INTO `ordenes_de_venta` (`ID_Ordenventa`, `fecha`, `ID_Cliente`, `Nombre del Cliente`, `Servicio`, `Producto`, `Tipo de Venta`, `Cargo`, `Estado`, `fechasistema`) VALUES
(10, '2023-10-05', 1, 'Maria', 'Mudanza', '-', 'C', 1200, 'F', '2023-11-09 01:33:31'),
(14, '2023-10-02', 2, 'Jorge', 'Empaquetado', 'Cajas de carton', 'C', 5000, 'F', '2023-10-29 01:04:23'),
(15, '2023-10-02', 3, 'Jesus', 'Mudanza', '-', 'C', 500, 'F', '2023-10-29 01:04:34'),
(16, '2023-10-03', 4, 'Romero', 'Mudanza', '-', 'C', 1000, 'F', '2023-10-29 01:04:45'),
(17, '2023-10-03', 5, 'Renato', '-', 'Cajas de Carton', 'D', 50, 'F', '2023-10-29 01:04:59'),
(18, '2023-10-01', 6, 'Jaime', '-', 'Bolsas de Burbujas', 'D', 20, 'F', '2023-10-29 01:05:13'),
(19, '2023-10-01', 7, 'Juan Carlos', 'Almacén', '-', 'C', 1500, 'P', '2023-10-29 01:05:25'),
(20, '2023-10-01', 8, 'Kevin', 'Embalaje', '-', 'C', 90, 'F', '2023-10-29 01:05:37'),
(21, '2023-10-03', 9, 'Eduardo', 'Empaquetado', '-', 'C', 70, 'F', '2023-10-29 01:05:48'),
(22, '2023-10-02', 10, 'Diego', 'Mudanza', '-', 'C', 500, 'F', '2023-10-29 01:06:03'),
(23, '2023-10-02', 11, 'James', 'Mudanza', '-', 'C', 500, 'F', '2023-10-29 01:06:17'),
(25, '2023-10-02', 12, 'Miguel Angel', 'Mudanza', 'Cajas', 'C', 600, 'F', '2023-11-09 01:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `ID_Proveedor` int(5) NOT NULL,
  `nombre_compañia` varchar(30) DEFAULT NULL,
  `Ciudad` varchar(30) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `celular` int(9) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registro_venta`
--

CREATE TABLE `registro_venta` (
  `ID_Ordenventa` int(5) NOT NULL,
  `ID_Cotizacion` int(5) DEFAULT NULL,
  `ID_Responsable` int(5) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `Tipo_Comprobante` varchar(1) DEFAULT NULL,
  `fechasistema` timestamp NULL DEFAULT NULL,
  `Servicio` varchar(40) DEFAULT NULL,
  `Producto` varchar(40) DEFAULT NULL,
  `ID_Cliente` int(5) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL,
  `Modalidad_Pago` varchar(40) DEFAULT NULL,
  `Monto_total` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registro_venta`
--

INSERT INTO `registro_venta` (`ID_Ordenventa`, `ID_Cotizacion`, `ID_Responsable`, `fecha`, `Tipo_Comprobante`, `fechasistema`, `Servicio`, `Producto`, `ID_Cliente`, `Estado`, `Modalidad_Pago`, `Monto_total`) VALUES
(0, 0, 0, '0000-00-00', '', NULL, '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(5) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `login` varchar(40) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `fechasistema` timestamp NULL DEFAULT NULL,
  `celular` int(9) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `nombre`, `apellido`, `login`, `clave`, `direccion`, `fechanac`, `fechasistema`, `celular`, `correo`, `estado`) VALUES
(1, 'Miguel', 'Hernandez', 'miguel123', '123456', 'Av. Lima 159', '2000-03-01', NULL, 956211122, 'miguel123@gmail.com', 'A'),
(2, 'Daniel', 'Correa', 'daniel123', '123456', 'Av. Venezuela 123', '2000-03-02', NULL, 956212233, 'daniel123@gmail.com', 'A'),
(3, 'Fernanda', 'Arteaga', 'fernanda123', '123456', 'Av. Universitaria 123', '2000-03-04', NULL, 956213344, 'fernanda123@gmail.com', 'A'),
(4, 'Juan Diego', 'Mamani', 'juandiego123', '123456', 'Av. Venezuela 112', '2000-03-06', NULL, 956214455, 'juandiego123@gmail.com', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indexes for table `cotizacion_servicio`
--
ALTER TABLE `cotizacion_servicio`
  ADD PRIMARY KEY (`ID_CServicio`);

--
-- Indexes for table `descuentos_ofertas`
--
ALTER TABLE `descuentos_ofertas`
  ADD PRIMARY KEY (`ID_Oferta`);

--
-- Indexes for table `devolucion_almacen`
--
ALTER TABLE `devolucion_almacen`
  ADD PRIMARY KEY (`ID_Devolucion`),
  ADD KEY `fk_cliente_devolucion` (`ID_Cliente`),
  ADD KEY `fk_gestion_devolucion` (`ID_ME`);

--
-- Indexes for table `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`ID_Encuesta`);

--
-- Indexes for table `gestion_almacen`
--
ALTER TABLE `gestion_almacen`
  ADD PRIMARY KEY (`ID_ME`),
  ADD KEY `fk_cliente_gestion` (`ID_Cliente`);

--
-- Indexes for table `modalidad_pago`
--
ALTER TABLE `modalidad_pago`
  ADD PRIMARY KEY (`ID_Modalidad`);

--
-- Indexes for table `ordenes_de_cotizacion`
--
ALTER TABLE `ordenes_de_cotizacion`
  ADD PRIMARY KEY (`ID_Cotizacion`),
  ADD KEY `fk_cliente_ordenes` (`ID_Cliente`);

--
-- Indexes for table `ordenes_de_venta`
--
ALTER TABLE `ordenes_de_venta`
  ADD PRIMARY KEY (`ID_Ordenventa`),
  ADD KEY `fk_cliente_ordenes_de_venta` (`ID_Cliente`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_Proveedor`);

--
-- Indexes for table `registro_venta`
--
ALTER TABLE `registro_venta`
  ADD PRIMARY KEY (`ID_Ordenventa`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_Cliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `devolucion_almacen`
--
ALTER TABLE `devolucion_almacen`
  MODIFY `ID_Devolucion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gestion_almacen`
--
ALTER TABLE `gestion_almacen`
  MODIFY `ID_ME` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55448;

--
-- AUTO_INCREMENT for table `ordenes_de_cotizacion`
--
ALTER TABLE `ordenes_de_cotizacion`
  MODIFY `ID_Cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99888;

--
-- AUTO_INCREMENT for table `ordenes_de_venta`
--
ALTER TABLE `ordenes_de_venta`
  MODIFY `ID_Ordenventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `devolucion_almacen`
--
ALTER TABLE `devolucion_almacen`
  ADD CONSTRAINT `fk_cliente_devolucion` FOREIGN KEY (`ID_Cliente`) REFERENCES `cliente` (`ID_Cliente`),
  ADD CONSTRAINT `fk_gestion_devolucion` FOREIGN KEY (`ID_ME`) REFERENCES `gestion_almacen` (`ID_ME`);

--
-- Constraints for table `gestion_almacen`
--
ALTER TABLE `gestion_almacen`
  ADD CONSTRAINT `fk_cliente_gestion` FOREIGN KEY (`ID_Cliente`) REFERENCES `cliente` (`ID_Cliente`);

--
-- Constraints for table `ordenes_de_cotizacion`
--
ALTER TABLE `ordenes_de_cotizacion`
  ADD CONSTRAINT `fk_cliente_ordenes` FOREIGN KEY (`ID_Cliente`) REFERENCES `cliente` (`ID_Cliente`);

--
-- Constraints for table `ordenes_de_venta`
--
ALTER TABLE `ordenes_de_venta`
  ADD CONSTRAINT `fk_cliente_ordenes_de_venta` FOREIGN KEY (`ID_Cliente`) REFERENCES `cliente` (`ID_Cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
