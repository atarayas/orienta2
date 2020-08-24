-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-08-2018 a las 15:16:04
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `orienta_registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

DROP TABLE IF EXISTS `datos`;
CREATE TABLE IF NOT EXISTS `datos` (
  `cedula` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Identificación el tamaño es de 9 para costarricense y 12 para extranjeros',
  `sexo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci COMMENT 'Los valores, femenino y masculino, se refiere al sexo de nacimiento',
  `fecha_nacimiento` date DEFAULT NULL COMMENT 'Se refiere a la fecha de nacimiento del usuario, se valida sea menor a la fecha actual',
  `modalidad` text COLLATE utf8_spanish2_ci COMMENT 'Se refiere a la modalidad de estudio: Educación Abierta y modalidades, o Educación Formal y sus modalidades',
  `provincia` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Almacena nombre de la provincia de Costa Rica donde vive',
  `canton` text COLLATE utf8_spanish2_ci COMMENT 'Almacena el nombre del cantón de Costa Rica, en el cual reside',
  `tipo` varchar(256) CHARACTER SET utf8 DEFAULT NULL COMMENT 'tipo de usuario: docente, estudiante, padre de familia',
  `autonum` int(11) NOT NULL AUTO_INCREMENT COMMENT 'incrementar el registro',
  PRIMARY KEY (`autonum`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`cedula`, `sexo`, `fecha_nacimiento`, `modalidad`, `provincia`, `canton`, `tipo`, `autonum`) VALUES
('0401420162', 'Femenino', '2018-07-05', 'Bachillerato por Madurez - Educación abierta', 'Limón', 'Matina', 'docente', 1),
('101230123', 'Femenino', '2018-08-02', 'Educación formal técnica nocturna', 'Alajuela', 'Atenas ', '', 2),
('102340234', 'Femenino', '2018-07-30', 'Bachillerato por Madurez - Educación abierta', 'San José', 'San Sebastián', 'Profesional en Orientación', 3),
('0301110222', 'Masculino', '2018-07-31', 'Educación Diversificada a Distancia - Educación Abierta', 'Guanacaste', 'Hojancha', 'Profesional en Orientación', 6),
('0601230456', 'Femenino', '2018-08-03', 'Educación formal diurna', 'Puntarenas', 'Garabito', 'Familia', 7),
('0501230456', 'Masculino', '2012-04-02', 'Educación Diversificada a Distancia - Educación Abierta', 'Guanacaste', 'Santa Cruz', 'Profesorado', 8),
('0102220111', 'Femenino', '2018-07-31', 'Educación formal técnica nocturna', 'Puntarenas', 'Parrita', 'Profesional en Orientación', 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
