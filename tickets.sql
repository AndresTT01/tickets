-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2025 a las 20:50:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tickets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aoperativas`
--

CREATE TABLE `aoperativas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aoperativas`
--

INSERT INTO `aoperativas` (`id`, `nombre`) VALUES
(1, 'Archivo'),
(2, 'Informes'),
(3, 'Pagares'),
(4, 'Gerencia Adjunta'),
(5, 'Recursos Humanos'),
(6, 'Juridico'),
(7, 'Subgerencia de cobranza'),
(8, 'Salas'),
(9, 'Mercadotecnia'),
(10, 'Compras'),
(11, 'Almacen'),
(12, 'Riesgos'),
(13, 'Normatividad'),
(14, 'Coll center'),
(15, 'Contraloria'),
(16, 'Contabilidad'),
(17, 'Bodega'),
(18, 'Talleres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Admin'),
(5, 'Coordinador'),
(4, 'Gerente'),
(6, 'Operativo'),
(2, 'Second Admin'),
(3, 'Soporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `descripcion`) VALUES
(1, 'Activo'),
(2, 'Suspendido'),
(3, 'Desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id`, `nombre`, `direccion`, `fecha_creacion`) VALUES
(1, 'Operativo (Matriz)', 'C. Josefa Ortiz de Domínguez 3008, Libertad, 44750 Guadalajara, Jal.', '2024-09-06 08:27:28'),
(2, 'Matriz', 'C. Josefa Ortiz de Domínguez 3008, Libertad, 44750 Guadalajara, Jal.', '2024-09-07 10:53:12'),
(3, 'Zalatitan', 'Av. Zalatitan 370, Colonia Alamedas de Zalatitán, 45407 Tonalá, Jal.', '2024-09-10 10:22:57'),
(4, 'José María Iglesias', 'Av José María Iglesias 4026, Fraccionamiento San Francisco, 44750 Guadalajara, Jal.', '2024-11-05 21:19:09'),
(5, 'Zapopan', 'Calle Ramón Corona 340, La Villa, 45100 Zapopan, Jal.', '2024-11-09 23:42:42'),
(6, 'San Pedrito', 'Poza Rica 4932, San Pedrito, 45625 San Pedro Tlaquepaque, Jal.', '2024-11-09 23:44:03'),
(7, 'Santa Fe', 'Blvd. Colón 215, Hacienda Santa Fe, 45653 Hacienda Santa Fe, Jal.', '2024-11-09 23:47:31'),
(8, 'Chapala', 'Juarez 571, Chapala Centro, 45900 Chapala, Jal.', '2024-11-10 00:20:51'),
(9, 'Centro', 'Calz del Federalismo Nte 79, Zona Centro, 44100 Guadalajara, Jal.', '2024-11-10 00:23:55'),
(10, 'Obrero', 'Av Artesanos 1393, Colonia Oblatos, 44700 Guadalajara, Jal.', '2024-11-10 00:25:02'),
(11, 'Tonalá', 'Av Tonalá 50-local 7, Tonalá Centro, 45400 Tonalá, Jal.', '2024-11-10 00:25:43'),
(12, 'San José Del Castillo', 'Av. Hidalgo 131, El Castillo, 45680 San José del Castillo, Jal.', '2024-11-10 00:27:34'),
(13, 'Centro Sur', 'Anillo Perif. Sur Manuel Gómez Morín 7835-local 7 Nivel P, Santa María Tequepexpan, 45606 San Pedro Tlaquepaque, Jal.', '2024-11-10 00:30:37'),
(14, 'Tlaquepaque', 'C. 16 de Septiembre No. 9, Centro, 45500 San Pedro Tlaquepaque, Jal.', '2024-11-10 00:31:26'),
(15, 'Ocotlán', 'Calle Dr Delgadillo Araujo 214, Florida, 47820 Ocotlán, Jal.', '2024-11-10 00:36:04'),
(16, 'Plaza Aleira', 'Av. Juan Gil Preciado 2001, Parques Zapopan, 45134 Zapopan, Jal.', '2024-11-10 00:48:54'),
(17, 'Belisario Domínguez', 'Av. Belisario Domínguez 2323-interior 3, Colonia Belisario Domínguez, 44330 Guadalajara, Jal.', '2024-11-10 00:51:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `usuario_creador` varchar(255) DEFAULT NULL,
  `sucursal` varchar(255) DEFAULT NULL,
  `titulot` varchar(255) NOT NULL,
  `usuario_asignado` varchar(255) DEFAULT NULL,
  `extencion` varchar(255) DEFAULT NULL,
  `departamento` varchar(255) DEFAULT NULL,
  `categoriat` varchar(255) DEFAULT NULL,
  `tipo_dispositivo` varchar(255) DEFAULT NULL,
  `falla_fisica` varchar(255) DEFAULT NULL,
  `falla_software` varchar(255) DEFAULT NULL,
  `descripciont` text DEFAULT NULL,
  `prioridadt` enum('baja','media','alta') NOT NULL DEFAULT 'media',
  `fecha_creaciont` datetime NOT NULL DEFAULT current_timestamp(),
  `estadot` enum('abierto','pendiente','en camino','en progreso','cerrado') NOT NULL DEFAULT 'abierto',
  `fecha_cierret` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `sucursal_id` int(11) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_id` int(11) DEFAULT NULL,
  `areaoperativa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `ext`, `email`, `password`, `rol_id`, `sucursal_id`, `fecha_creacion`, `status_id`, `areaoperativa`) VALUES
(1, 'Andres de Jesus', 'Tolosa Tapia', '', 'andres.tolosa124@gmail.com', '$2b$12$KTrkrK0ZIxbVDRAZyWw1Eey8Of.1hyQQ3/98T4HupegexEfAZ1Lc.', 1, 1, '2024-09-06 02:35:45', 1, NULL),
(2, 'sdsdsd', 'asdas', '1234', 'sadas@gmail.com', '$2y$10$6ig.OWHQXk.BXnmz9NCrUuAgBQwku.mdLJVnrb9EzvL7tha7QXa3e', 3, 1, '2024-09-07 01:13:19', 1, 17),
(3, 'pdsdsdsdsdw', 'p', '2222', 'ppppp@gmail.com', '$2b$12$K0Mf7cecre4HWrqHrnioFud7fheJ4R2t1Yq7a9mRuRZ1MHWPU7vWS', 5, 14, '2024-09-07 05:08:30', 1, NULL),
(4, 'DOminos', 'piza', '1111', 'dominos2@gmail.com', '$2y$10$sO5KgLvw4N3dkXC0gawdh.bgKS11ojpOAxJATvTns0kKtG9yAZQUS', 3, 4, '2024-09-08 04:43:09', 2, NULL),
(5, 'liitle', 'pizaa', '0', 'little@pizzagmail.com', '$2b$12$KTrkrK0ZIxbVDRAZyWw1Eey8Of.1hyQQ3/98T4HupegexEfAZ1Lc.', 3, 1, '2024-09-10 01:32:04', 1, NULL),
(6, 'Andres de jesus ', 'AAAAAAAAAA', '1212', 'SGSDG@DSFSDF.COM', '$2y$10$w..StXIHU7GWw2hlUhuRdelbuy.dAHQ0OYhg8wC70I9fZ56LCY/P.', 4, 6, '2024-11-04 18:14:29', 3, NULL),
(8, 'PRUEBA', 'AAAAAAAAAA', '4542', 'andres.tolosa@124gmail.com', '$2y$10$dECEiqN/V29pX2LrUF.48eH0LOtaacOG5QQL7tDuiJx.AzpF53FSW', 5, 7, '2024-11-04 18:34:17', 1, NULL),
(9, 'aaa', 'Aa', '1254', 'as@gmail.com', '$2y$10$yiJzbWKZdqwXebOQv0t0H.NUkcCMKY4gN/rp/.7UxytEXp/KxtfaG', 5, 8, '2024-11-04 18:37:48', 1, NULL),
(11, 'jtghtgh', 'gfhdfhdfh', '1414', 'ahmhms@gmail.com', '$2y$10$IoFULgNi2ZkLIg44MdT46.8oTP8InPDs0BnYutC1Ydq4lmUqwWnjS', 4, 16, '2024-11-11 15:12:18', 1, NULL),
(12, 'GDFG', 'AAAAAAAA', '1245', 'arrrrrs@gmail.com', '$2y$10$IAiEQnL78jQlGLKggEDZ6.A7gl3m/wq4u1z72uCQ6IXKO/4pKR6ce', 5, 17, '2024-11-11 15:33:12', 1, NULL),
(13, 'PRUEBA', 'AAAAAAAA', '2222', 'aspppp@gmail.com', '$2y$10$5f9a4zd5ZFwvAG//9MuB7.b2ur0K7ZR1kVoIUyR08CriJtwYf/18y', 3, 1, '2024-11-11 18:54:06', NULL, NULL),
(16, 'htefgdfgfd', 'gfdgdfg', '1', 'hkjhjgh@gmail.com', '$2y$10$j2mvORJh1fHZudWjxawEHOd49u2x30xiMLjHZFqIqJ.BYkorv98Km', 3, 5, '2024-11-11 19:04:32', 2, 17),
(17, 'aaa', 'AAAAAAAAAA', '1414', 'PRUEVA1@GMAIL.COM', '$2y$10$8higTBxzGurwK5R9tRqpveyiRrv2Ox0AFksN4v.JtYc.yHkO.Qn/u', 6, 1, '2024-11-11 19:07:23', 1, 18),
(18, 'hectr', 'sss', '1254', 'hh@gmail.com', '$2y$10$Rv0tbFa4CuYOiXSF3u0xSu/Kbip15YQVLmC2Wv1ZmmALxvo/qaa6G', 4, 11, '2024-12-04 21:53:08', 1, NULL),
(19, 'PRUEBA1', 'Tolosa tapia', '5464', 'andra@124gmail.com', '$2y$10$CI.XPUtaOs8Qc.gp.SO28eZpIMH1dqb7s.aBYLIgTqGexVYseRCUq', 5, 13, '2024-12-04 21:56:10', 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aoperativas`
--
ALTER TABLE `aoperativas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_id` (`ticket_id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `sucursal_id` (`sucursal_id`),
  ADD KEY `fk_status` (`status_id`),
  ADD KEY `fk_areaoperativa` (`areaoperativa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aoperativas`
--
ALTER TABLE `aoperativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_areaoperativa` FOREIGN KEY (`areaoperativa`) REFERENCES `aoperativas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
