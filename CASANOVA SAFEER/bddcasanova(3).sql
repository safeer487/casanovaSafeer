-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2014 a las 23:25:04
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bddcasanova`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garajes`
--

CREATE TABLE IF NOT EXISTS `garajes` (
  `id_ref` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(165) NOT NULL,
  `foto_ficha` varchar(700) NOT NULL,
  `precio` float NOT NULL,
  `img_1` varchar(700) NOT NULL,
  `img_2` varchar(700) NOT NULL,
  `img_3` varchar(700) NOT NULL,
  `img_4` varchar(700) NOT NULL,
  `img_5` varchar(700) NOT NULL,
  `img_6` varchar(700) NOT NULL,
  `img_7` varchar(700) NOT NULL,
  `img_8` varchar(700) NOT NULL,
  `img_9` varchar(700) NOT NULL,
  `img_10` varchar(700) NOT NULL,
  `metros` int(5) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `acceso_minusvalido` varchar(100) NOT NULL,
  `garaje_incluido` varchar(100) NOT NULL,
  `altura` varchar(100) NOT NULL,
  `ascensor` varchar(100) NOT NULL,
  `balcon` varchar(100) NOT NULL,
  `edad_finca` varchar(20) NOT NULL,
  `certificado_energetico` varchar(100) NOT NULL,
  `mapa` varchar(2500) NOT NULL,
  `habitaciones` varchar(100) NOT NULL,
  `terraza` varchar(100) NOT NULL,
  `descripcion_ficha_mini` varchar(165) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL,
  `extra_4` varchar(100) NOT NULL,
  `extra_5` varchar(100) NOT NULL,
  `extra_6` varchar(100) NOT NULL,
  `extra_7` varchar(100) NOT NULL,
  `extra_8` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `garajes`
--

INSERT INTO `garajes` (`id_ref`, `titulo`, `descripcion`, `foto_ficha`, `precio`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `img_9`, `img_10`, `metros`, `localidad`, `acceso_minusvalido`, `garaje_incluido`, `altura`, `ascensor`, `balcon`, `edad_finca`, `certificado_energetico`, `mapa`, `habitaciones`, `terraza`, `descripcion_ficha_mini`, `extra_1`, `extra_2`, `extra_3`, `extra_4`, `extra_5`, `extra_6`, `extra_7`, `extra_8`) VALUES
(1, 'GARAGE EN FONTANARES', 'Una plaza de garaje amplia', 'img/140682856602.jpg', 8000, 'img/img_galeria/garaje1.jpg', 'img/img_galeria/garaje1.jpg', 'img/img_galeria/garaje1.jpg', 'img/img_galeria/garaje1.jpg', 'img/img_galeria/garaje1.jpg', 'img/img_galeria/garaje1.jpg', 'img/img_galeria/garaje1.jpg', 'img/img_galeria/garaje1.jpg', 'img/img_galeria/garaje1.jpg', 'img/img_galeria/garaje1.jpg', 10, 'valencia', 'si', '', '', '', '', '20', '', 'frame', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garajes_alquiler`
--

CREATE TABLE IF NOT EXISTS `garajes_alquiler` (
  `id_ref` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(165) NOT NULL,
  `foto_ficha` varchar(700) NOT NULL,
  `precio` float NOT NULL,
  `img_1` varchar(700) NOT NULL,
  `img_2` varchar(700) NOT NULL,
  `img_3` varchar(700) NOT NULL,
  `img_4` varchar(700) NOT NULL,
  `img_5` varchar(700) NOT NULL,
  `img_6` varchar(700) NOT NULL,
  `img_7` varchar(700) NOT NULL,
  `img_8` varchar(700) NOT NULL,
  `img_9` varchar(700) NOT NULL,
  `img_10` varchar(700) NOT NULL,
  `metros` int(5) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `acceso_minusvalido` varchar(20) NOT NULL,
  `garaje_incluido` varchar(100) NOT NULL,
  `altura` varchar(100) NOT NULL,
  `ascensor` varchar(100) NOT NULL,
  `balcon` varchar(100) NOT NULL,
  `edad_finca` varchar(20) NOT NULL,
  `certificado_energetico` varchar(20) NOT NULL,
  `mapa` varchar(2500) NOT NULL,
  `habitaciones` varchar(100) NOT NULL,
  `terraza` varchar(100) NOT NULL,
  `descripcion_ficha_imin` varchar(165) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL,
  `extra_4` varchar(100) NOT NULL,
  `extra_5` varchar(100) NOT NULL,
  `extra_6` varchar(100) NOT NULL,
  `extra_7` varchar(100) NOT NULL,
  `extra_8` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `garajes_alquiler`
--

INSERT INTO `garajes_alquiler` (`id_ref`, `titulo`, `descripcion`, `foto_ficha`, `precio`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `img_9`, `img_10`, `metros`, `localidad`, `acceso_minusvalido`, `garaje_incluido`, `altura`, `ascensor`, `balcon`, `edad_finca`, `certificado_energetico`, `mapa`, `habitaciones`, `terraza`, `descripcion_ficha_imin`, `extra_1`, `extra_2`, `extra_3`, `extra_4`, `extra_5`, `extra_6`, `extra_7`, `extra_8`) VALUES
(1, 'SE ALQUILA GARAJE EN PATRAIX', 'Una plaza de garaje amplia', '../web/img/img_galeria/garaje1.jpg', 300, '', '', '', '', '', '', '', '', '', '', 80, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles_comerciales`
--

CREATE TABLE IF NOT EXISTS `inmuebles_comerciales` (
  `id_ref` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(22) NOT NULL,
  `descripcion` varchar(165) NOT NULL,
  `foto_ficha` varchar(700) NOT NULL,
  `precio` float NOT NULL,
  `img_1` varchar(700) NOT NULL,
  `img_2` varchar(700) NOT NULL,
  `img_3` varchar(700) NOT NULL,
  `img_4` varchar(700) NOT NULL,
  `img_5` varchar(700) NOT NULL,
  `img_6` varchar(700) NOT NULL,
  `img_7` varchar(700) NOT NULL,
  `img_8` varchar(700) NOT NULL,
  `img_9` varchar(700) NOT NULL,
  `img_10` varchar(700) NOT NULL,
  `metros` int(5) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `acceso_minusvalido` varchar(4) NOT NULL,
  `garaje_incluido` varchar(100) NOT NULL,
  `altura` varchar(100) NOT NULL,
  `ascensor` varchar(100) NOT NULL,
  `balcon` varchar(100) NOT NULL,
  `edad_finca` varchar(50) NOT NULL,
  `certificado_energetico` varchar(15) NOT NULL,
  `mapa` varchar(5000) NOT NULL,
  `habitaciones` varchar(100) NOT NULL,
  `terraza` varchar(100) NOT NULL,
  `descripcion_ficha_mini` varchar(165) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL,
  `extra_4` varchar(100) NOT NULL,
  `extra_5` varchar(100) NOT NULL,
  `extra_6` varchar(100) NOT NULL,
  `extra_7` varchar(100) NOT NULL,
  `extra_8` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `inmuebles_comerciales`
--

INSERT INTO `inmuebles_comerciales` (`id_ref`, `titulo`, `descripcion`, `foto_ficha`, `precio`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `img_9`, `img_10`, `metros`, `localidad`, `acceso_minusvalido`, `garaje_incluido`, `altura`, `ascensor`, `balcon`, `edad_finca`, `certificado_energetico`, `mapa`, `habitaciones`, `terraza`, `descripcion_ficha_mini`, `extra_1`, `extra_2`, `extra_3`, `extra_4`, `extra_5`, `extra_6`, `extra_7`, `extra_8`) VALUES
(1, 'Local ', 'Local comercial de 100m2', 'img/14080464001407431248CIMG4793.png', 1, 'img/foto_ficha/local_1_img.jpg', 'img/foto_ficha/local_1_img.jpg', 'img/img_galeria/modificadas/140681752604.jpg', 'img/img_galeria/modificadas/140681747103.jpg', 'img/img_galeria/modificadas/140681753904.jpg', 'img/img_galeria/modificadas/140681755703.jpg', 'img/img_galeria/modificadas/1406817569local_alquila.jpg', 'img/img_galeria/modificadas/140681758003.jpg', '', '', 1, '', '1', '22', '1', '122', '1', '20', 'si', 'frame', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, 'PISO EN CENTRO', 'xxxx', 'img/foto_ficha/140683772801.jpg', 11, 'img/img_galeria/insertadasimg_galeria/insertadas140683772802.jpg', 'img/img_galeria/insertadas140683772803.jpg', 'img/img_galeria/insertadas140683772802.jpg', 'img/img_galeria/insertadas1406837728local_alquila.jpg', 'img/img_galeria/insertadas140683772803.jpg', 'img/img_galeria/insertadas140683772804.jpg', 'img/img_galeria/insertadas140683772804.jpg', 'img/img_galeria/insertadas140683772804.jpg', 'img/img_galeria/insertadas140683772805.jpg', 'img/img_galeria/insertadas140683772802.jpg', 11, 'valencia', '11', '', '', '', '', '11', '11', '11', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles_comerciales_alquiler`
--

CREATE TABLE IF NOT EXISTS `inmuebles_comerciales_alquiler` (
  `id_ref` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(165) NOT NULL,
  `foto_ficha` varchar(700) NOT NULL,
  `precio` varchar(11) NOT NULL,
  `img_1` varchar(700) NOT NULL,
  `img_2` varchar(700) NOT NULL,
  `img_3` varchar(700) NOT NULL,
  `img_4` varchar(700) NOT NULL,
  `img_5` varchar(700) NOT NULL,
  `img_6` varchar(700) NOT NULL,
  `img_7` varchar(700) NOT NULL,
  `img_8` varchar(700) NOT NULL,
  `img_9` varchar(700) NOT NULL,
  `img_10` varchar(700) NOT NULL,
  `metros` int(5) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `acceso_minusvalido` varchar(20) NOT NULL,
  `garaje_incluido` varchar(100) NOT NULL,
  `altura` varchar(100) NOT NULL,
  `ascensor` varchar(100) NOT NULL,
  `balcon` int(11) NOT NULL,
  `edad_finca` varchar(10) NOT NULL,
  `certificado_energetico` varchar(20) NOT NULL,
  `mapa` varchar(2500) NOT NULL,
  `habitaciones` varchar(100) NOT NULL,
  `terraza` varchar(100) NOT NULL,
  `descripcion_ficha_mini` varchar(165) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL,
  `extra_4` varchar(100) NOT NULL,
  `extra_5` varchar(100) NOT NULL,
  `extra_6` varchar(100) NOT NULL,
  `extra_7` varchar(100) NOT NULL,
  `extra_8` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `inmuebles_comerciales_alquiler`
--

INSERT INTO `inmuebles_comerciales_alquiler` (`id_ref`, `titulo`, `descripcion`, `foto_ficha`, `precio`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `img_9`, `img_10`, `metros`, `localidad`, `acceso_minusvalido`, `garaje_incluido`, `altura`, `ascensor`, `balcon`, `edad_finca`, `certificado_energetico`, `mapa`, `habitaciones`, `terraza`, `descripcion_ficha_mini`, `extra_1`, `extra_2`, `extra_3`, `extra_4`, `extra_5`, `extra_6`, `extra_7`, `extra_8`) VALUES
(1, 'C/ FONTANARES', 'Local de 1000 m2 ', '../web/img/img_galeria/local_alquila.jpg', '1500', '', '', '', '', '', '', '', '', '', '', 150, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos_alquiler`
--

CREATE TABLE IF NOT EXISTS `pisos_alquiler` (
  `id_ref` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(165) NOT NULL,
  `foto_ficha` varchar(700) NOT NULL,
  `precio` varchar(11) NOT NULL,
  `img_1` varchar(700) NOT NULL,
  `img_2` varchar(700) NOT NULL,
  `img_3` varchar(700) NOT NULL,
  `img_4` varchar(700) NOT NULL,
  `img_5` varchar(700) NOT NULL,
  `img_6` varchar(700) NOT NULL,
  `img_7` varchar(700) NOT NULL,
  `img_8` varchar(700) NOT NULL,
  `img_9` varchar(700) NOT NULL,
  `img_10` varchar(700) NOT NULL,
  `metros` int(5) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `acceso_minusvalido` varchar(20) NOT NULL,
  `garaje_incluido` varchar(10) NOT NULL,
  `altura` varchar(20) NOT NULL,
  `ascensor` varchar(15) NOT NULL,
  `balcon` varchar(15) NOT NULL,
  `edad_finca` varchar(100) NOT NULL,
  `certificado_energetico` varchar(20) NOT NULL,
  `mapa` varchar(2500) NOT NULL,
  `habitaciones` varchar(10) NOT NULL,
  `terraza` varchar(20) NOT NULL,
  `descripcion_ficha_mini` varchar(165) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL,
  `extra_4` varchar(100) NOT NULL,
  `extra_5` varchar(100) NOT NULL,
  `extra_6` varchar(100) NOT NULL,
  `extra_7` varchar(100) NOT NULL,
  `extra_8` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pisos_alquiler`
--

INSERT INTO `pisos_alquiler` (`id_ref`, `titulo`, `descripcion`, `foto_ficha`, `precio`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `img_9`, `img_10`, `metros`, `localidad`, `acceso_minusvalido`, `garaje_incluido`, `altura`, `ascensor`, `balcon`, `edad_finca`, `certificado_energetico`, `mapa`, `habitaciones`, `terraza`, `descripcion_ficha_mini`, `extra_1`, `extra_2`, `extra_3`, `extra_4`, `extra_5`, `extra_6`, `extra_7`, `extra_8`) VALUES
(1, 'titulo piso lquiler', 'piso alquiler', 'img/1.png', '500', 'img/1.png', '0', '0', '0', '0', '0', '0', '0', '0', '0', 60, 'valencia', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'ttt', 'ttttt', 'img/1407781896', 'tt', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 'VALENCIA', 't', 'tt', 't', 't', 't', 't', 't', 'tt', 'tt', 'tt', 't', 't', 't', 't', 't', 't', 't', 'tt', 'tt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos_venta`
--

CREATE TABLE IF NOT EXISTS `pisos_venta` (
  `id_ref` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `foto_ficha` varchar(700) NOT NULL,
  `precio` varchar(11) NOT NULL,
  `img_1` varchar(500) NOT NULL,
  `img_2` varchar(500) NOT NULL,
  `img_3` varchar(500) NOT NULL,
  `img_4` varchar(500) NOT NULL,
  `img_5` varchar(500) NOT NULL,
  `img_6` varchar(500) NOT NULL,
  `img_7` varchar(500) NOT NULL,
  `img_8` varchar(500) NOT NULL,
  `img_9` varchar(500) NOT NULL,
  `img_10` varchar(500) NOT NULL,
  `metros` varchar(20) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `acceso_minusvalido` varchar(10) NOT NULL,
  `garaje_incluido` varchar(15) NOT NULL,
  `altura` varchar(20) NOT NULL,
  `ascensor` varchar(15) NOT NULL,
  `balcon` varchar(15) NOT NULL,
  `edad_finca` varchar(100) NOT NULL,
  `certificado_energetico` varchar(100) NOT NULL,
  `mapa` varchar(2000) NOT NULL,
  `habitaciones` varchar(20) NOT NULL,
  `terraza` varchar(20) NOT NULL,
  `descripcion_ficha_mini` varchar(165) NOT NULL,
  `extra_1` varchar(100) NOT NULL,
  `extra_2` varchar(100) NOT NULL,
  `extra_3` varchar(100) NOT NULL,
  `extra_4` varchar(100) NOT NULL,
  `extra_5` varchar(100) NOT NULL,
  `extra_6` varchar(100) NOT NULL,
  `extra_7` varchar(100) NOT NULL,
  `extra_8` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `pisos_venta`
--

INSERT INTO `pisos_venta` (`id_ref`, `titulo`, `descripcion`, `foto_ficha`, `precio`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `img_9`, `img_10`, `metros`, `localidad`, `acceso_minusvalido`, `garaje_incluido`, `altura`, `ascensor`, `balcon`, `edad_finca`, `certificado_energetico`, `mapa`, `habitaciones`, `terraza`, `descripcion_ficha_mini`, `extra_1`, `extra_2`, `extra_3`, `extra_4`, `extra_5`, `extra_6`, `extra_7`, `extra_8`) VALUES
(40, 'C/ Roger de Flor ', 'Bajo vivienda en finca en proceso de rehabilitaciÃ³n, fachada, escalera, bajantes, instalaciones de suministros. posibiliadad de comprar completamente reformado.', 'img/14074345252014-05-23-11.png', '83.000', 'img/14074345252014-05-23-11.png', 'img/14074345252014-05-23-11.593.png', 'img/14074345252014-05-28-2.png', 'img/14074345252014-05-23-12.003.png', 'img/14074345252014-05-23-11.593.png', 'img/1407434525NoImg.png', 'img/1407434525NoImg.png', 'img/1407434525NoImg.png', 'img/1407434525NoImg.png', 'img/1407434525NoImg.png', '79', 'VALENCIA', '-', 'NO', 'BAJO', '-', '-', '-', 'EN TRAMITE', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.8970644702836!2d-0.3810707999999916!3d39.47165409999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f4ee8463c15%3A0xd19b2a4c0307c8ba!2sCarrer+de+Roger+de+Flor%2C+46001+Val%C3%A8ncia%2C+Valencia!5e0!3m2!1ses!2ses!4v1407434455205" width="400" height="300" frameborder="0" style="border:0"></iframe>', '-', '-', 'Bajo vivienda en finca en proceso de rehabilitaciÃ³n, fachada, escalera, bajantes, instalaciones de suministros. posibiliadad de comprar completamente reformado.', '-', '-', '-', '-', '-', '-', '-', '-'),
(41, 'C/ Mirasol  ', 'Piso cercano al centro y estaciÃ³n AVE. BaÃ±o  con ducha y columna hidromasaje,. REFORMADOPiso cercano al centro y estaciÃ³n AVE. BaÃ±o  con ducha y columna hidromasaje,. REFORMADOPiso cercano al centro y estaciÃ³n AVE. BaÃ±o  con ducha y columna ', 'img/1407434887CIMG4804.png', '66.000', 'img/1407434887CIMG4804.png', 'img/1407434887CIMG4794.png', 'img/1407434887CIMG4785.png', 'img/1407434887CIMG4786.png', 'img/1407434887CIMG4793.png', 'img/1407434887NoImg.png', 'img/1407434887NoImg.png', 'img/1407434887NoImg.png', 'img/1407434887NoImg.png', 'img/1407434887NoImg.png', '55', 'VALENCIA', '-', 'NO', '4', 'SI', 'SI', '-', 'EN TRAMITE', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3079.160774289533!2d-0.39294949999999995!3d39.48828410000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6045f527991807%3A0xeb0cb41487380900!2sCarrer+de+Mirasol%2C+46035+Val%C3%A8ncia%2C+Valencia!5e0!3m2!1ses!2ses!4v1407434821019" width="400" height="300" frameborder="0" style="border:0"></iframe>', '2', '-', 'Bajo vivienda en finca en proceso de rehabilitaciÃ³n, fachada, escalera, bajantes, instalaciones de suministros. posibiliadad de comprar completamente reformado.', 'suelos de paquet', 'a/a a estrenar', 'trastero inlcuido', '-', 'puertas blindadas', 'vrntanas de climlitx', 'calefaccion, central', 'vistas al paqrque'),
(42, 'C/ Manuel  Simo', 'Salon, cocina y 2 baÃ±os completos. a/a canalizado por conductos, suelo de marmol, ventanas de climalit. Trastero Incluido.', 'img/14074354972014-06-23-13.262.png', '155.000', 'img/14074354972014-06-23-13.262.png', 'img/14074354972014-06-23-13.17.png', 'img/14074354972014-06-23-13.19.png', 'img/14074354972014-06-23-13.21.png', 'img/1407435497NoImg.png', 'img/1407435497NoImg.png', 'img/1407435497NoImg.png', 'img/1407435497NoImg.png', 'img/1407435497NoImg.png', 'img/1407435497NoImg.png', '112', 'VALENCIA', '-', 'SI', '-', 'SI', 'SI', '10 AÃ‘OS', 'EN TRAMITE', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3080.405727903046!2d-0.39194199999999996!3d39.46016189999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f3e79ebee15%3A0xe557cf8b769393d4!2sCarrer+de+Manuel+Sim%C3%B3%2C+Val%C3%A8ncia%2C+Valencia!5e0!3m2!1ses!2ses!4v1407435423795" width="400" height="300" frameborder="0" style="border:0"></iframe>', '3', '-', 'Salon, cocina y 2 baÃ±os completos. a/a canalizado por conductos, suelo de marmol, ventanas de climalit. Trastero Incluido.', '-', '-', '-', '-', '-', '-', '-', '-'),
(43, 'C/ San Vicente M.', 'Piso cercano al centro y estaciÃ³n AVE. BaÃ±o  con ducha y columna hidromasaje,. REFORMADO', 'img/1407436079CIMG4680.png', '155.000', 'img/1407436079CIMG4680.png', 'img/1407436079CIMG4687.png', 'img/1407436079CIMG4693.png', 'img/1407436079CIMG4682.png', 'img/1407436079NoImg.png', 'img/1407436079NoImg.png', 'img/1407436079NoImg.png', 'img/1407436079NoImg.png', 'img/1407436079NoImg.png', 'img/1407436079NoImg.png', '95', 'VALENCIA', '-', 'SI', '7', 'SI', 'SI', '-', 'EN TRAMITE', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6160.912090094399!2d-0.38563897082708176!3d39.459024935823535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f30e2fbeb3f%3A0xb4af3348fff8fcc2!2sCarrer+de+Sant+Vicent+M%C3%A0rtir%2C+Val%C3%A8ncia%2C+Valencia!5e0!3m2!1ses!2ses!4v1407436007068" width="400" height="300" frameborder="0" style="border:0"></iframe>', '3', '-', '', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `mail`, `password`) VALUES
(1, 'admin@a.com', 'casanova2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
