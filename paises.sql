-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 01:21:20
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paises`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `continentes_paises`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `continentes_paises` (
`idPais` int(11)
,`idContinente` int(11)
,`nombreContinente` varchar(245)
,`nombrePaises` varchar(45)
,`bandera` text
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_continente`
--

CREATE TABLE `t_continente` (
  `id_continente` int(11) NOT NULL,
  `nombre` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_continente`
--

INSERT INTO `t_continente` (`id_continente`, `nombre`) VALUES
(1, 'América'),
(2, 'Europa'),
(3, 'Asia'),
(4, 'África'),
(5, 'Oceanía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_paises`
--

CREATE TABLE `t_paises` (
  `id_paises` int(11) NOT NULL,
  `id_continente` int(11) DEFAULT NULL,
  `nombrePais` varchar(45) DEFAULT NULL,
  `banderas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_paises`
--

INSERT INTO `t_paises` (`id_paises`, `id_continente`, `nombrePais`, `banderas`) VALUES
(1, 1, 'México', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/1200px-Flag_of_Mexico.svg.png'),
(2, 1, 'Canada', 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Canada_%28Pantone%29.svg'),
(3, 1, 'Chile', 'https://upload.wikimedia.org/wikipedia/commons/7/78/Flag_of_Chile.svg'),
(4, 1, 'Argentina', 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Flag_of_Argentina.svg'),
(5, 1, 'Estados Unidos', 'https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg'),
(6, 2, 'España', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Bandera_de_Espa%C3%B1a_%28nuevo_dise%C3%B1o%29.svg/1200px-Bandera_de_Espa%C3%B1a_%28nuevo_dise%C3%B1o%29.svg.png'),
(7, 2, 'Francia', 'https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg'),
(8, 2, 'Italia', 'https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg'),
(9, 2, 'Polonia', 'https://upload.wikimedia.org/wikipedia/commons/1/12/Flag_of_Poland.svg'),
(10, 2, 'Grecia', 'https://www.rotuvall.es/wp-content/uploads/2019/07/Bandera-Grecia-ROTUVALL.jpg'),
(11, 3, 'Japón', 'https://upload.wikimedia.org/wikipedia/commons/9/9e/Flag_of_Japan.svg'),
(12, 3, 'China', 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Flag_of_the_People%27s_Republic_of_China.svg'),
(14, 3, 'Malasia', 'https://upload.wikimedia.org/wikipedia/commons/6/66/Flag_of_Malaysia.svg'),
(15, 3, 'Indonesia', 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg'),
(16, 4, 'Kenia', 'https://upload.wikimedia.org/wikipedia/commons/4/49/Flag_of_Kenya.svg'),
(17, 4, 'Marruecos', 'https://upload.wikimedia.org/wikipedia/commons/2/2c/Flag_of_Morocco.svg'),
(18, 4, 'Nigeria', 'https://upload.wikimedia.org/wikipedia/commons/7/79/Flag_of_Nigeria.svg'),
(19, 4, 'Senegal', 'https://upload.wikimedia.org/wikipedia/commons/f/fd/Flag_of_Senegal.svg'),
(20, 4, 'Malí', 'https://upload.wikimedia.org/wikipedia/commons/9/92/Flag_of_Mali.svg'),
(21, 5, 'Australia', 'https://upload.wikimedia.org/wikipedia/commons/8/88/Flag_of_Australia_%28converted%29.svg'),
(22, 5, 'Samoa', 'https://upload.wikimedia.org/wikipedia/commons/3/31/Flag_of_Samoa.svg'),
(23, 5, 'Nueva Zelanda', 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Flag_of_New_Zealand.svg'),
(24, 5, 'Tonga', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Tonga.svg'),
(25, 5, 'Palaos', 'https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Palau.svg'),
(26, 3, 'Corea del Sur', 'https://upload.wikimedia.org/wikipedia/commons/0/09/Flag_of_South_Korea.svg'),
(27, 2, 'Suiza', 'https://upload.wikimedia.org/wikipedia/commons/0/08/Flag_of_Switzerland_%28Pantone%29.svg'),
(28, 1, 'Colombia', 'https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg'),
(30, 1, 'Perú', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Flag_of_Peru_%28state%29.svg/800px-Flag_of_Peru_%28state%29.svg.png'),
(33, 5, 'Guam', 'https://upload.wikimedia.org/wikipedia/commons/0/07/Flag_of_Guam.svg');

-- --------------------------------------------------------

--
-- Estructura para la vista `continentes_paises`
--
DROP TABLE IF EXISTS `continentes_paises`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `continentes_paises`  AS SELECT `pais`.`id_paises` AS `idPais`, `continente`.`id_continente` AS `idContinente`, `continente`.`nombre` AS `nombreContinente`, `pais`.`nombrePais` AS `nombrePaises`, `pais`.`banderas` AS `bandera` FROM (`t_continente` `continente` join `t_paises` `pais` on(`continente`.`id_continente` = `pais`.`id_continente`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_continente`
--
ALTER TABLE `t_continente`
  ADD PRIMARY KEY (`id_continente`);

--
-- Indices de la tabla `t_paises`
--
ALTER TABLE `t_paises`
  ADD PRIMARY KEY (`id_paises`),
  ADD UNIQUE KEY `nombrePais_UNIQUE` (`nombrePais`),
  ADD KEY `fk_t_continentePais_idx` (`id_continente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_continente`
--
ALTER TABLE `t_continente`
  MODIFY `id_continente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_paises`
--
ALTER TABLE `t_paises`
  MODIFY `id_paises` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_paises`
--
ALTER TABLE `t_paises`
  ADD CONSTRAINT `fk_t_continentePais` FOREIGN KEY (`id_continente`) REFERENCES `t_continente` (`id_continente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
