-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2015 a las 20:49:58
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_santa_maria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_area`
--

CREATE TABLE IF NOT EXISTS `tb_area` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tb_area`
--

INSERT INTO `tb_area` (`id`, `nombre`) VALUES
(1, 'Seguridad Industrial'),
(2, 'Herramientas Electricas'),
(3, 'Herramientas Manuales'),
(4, 'Autogena'),
(5, 'Medicinal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_autogena`
--

CREATE TABLE IF NOT EXISTS `tb_autogena` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(100) NOT NULL,
  `id_marca` int(100) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `detalles` varchar(5000) NOT NULL DEFAULT 'vacio',
  `nom_img` varchar(500) NOT NULL DEFAULT 'no_disponible.png',
  `nom_img_2` varchar(500) NOT NULL DEFAULT 'no_disponible.png',
  `nom_img_3` varchar(500) NOT NULL DEFAULT 'no_disponible.png',
  `ficha` varchar(500) NOT NULL DEFAULT 'vacio',
  `estado` int(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tb_autogena`
--

INSERT INTO `tb_autogena` (`id`, `id_categoria`, `id_marca`, `nombre`, `detalles`, `nom_img`, `nom_img_2`, `nom_img_3`, `ficha`, `estado`) VALUES
(5, 31, 5, 'PRODUCTO 002', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto 2  </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto  3</p> </LI>\r\n <LI> <p id="cont1"> Aqui va su texto  4</p> </LI>\r\n', 'ima_2_a.png', 'ima_2_b.png', 'no_disponible.png', 'TEMARIO del examen parcial.docx', 1),
(4, 28, 5, 'PRODUCTO 002_corte', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto 2  </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto  3</p> </LI>\r\n', 'ima_2_a.png', 'ima_2_b.png', 'no_disponible.png', 'TEMARIO del examen parcial.docx', 1),
(1, 34, 4, 'accesorio 01', 'vacio', 'no_disponible.png', 'no_disponible.png', 'no_disponible.png', 'vacio', 1),
(2, 0, 0, '', ' ', 'no', 'no', 'no_disponible.png', '', 0),
(3, 31, 5, 'PRODUCTO 002_soldar', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto 2  </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto  3</p> </LI>\r\n', 'ima_2_a.png', 'ima_2_b.png', 'no_disponible.png', 'TEMARIO del examen parcial.docx', 1),
(6, 31, 5, 'PRODUCTO 003', 'vacio', 'ima_2_a.png', 'ima_2_b.png', 'no_disponible.png', '', 1),
(7, 0, 0, 'prodducto 005', 'vacio', 'no_disponible.png', 'no_disponible.png', 'no_disponible.png', 'vacio', 1),
(8, 29, 0, 'prodducto 006', '<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n', 'no_disponible.png', 'no_disponible.png', 'no_disponible.png', 'vacio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categoria`
--

CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `id_categoria` int(100) NOT NULL AUTO_INCREMENT,
  `nom_categoria` varchar(50) NOT NULL,
  `id_area` int(100) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `imagen` varchar(50) NOT NULL DEFAULT 'no_disponible.jpg',
  `estado` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `tb_categoria`
--

INSERT INTO `tb_categoria` (`id_categoria`, `nom_categoria`, `id_area`, `descripcion`, `link`, `imagen`, `estado`) VALUES
(1, 'Protección respiratoria', 1, 'Proteccion respiratoria de alta calidad , Cumple la Norma NIOSH 42 CFR 84', NULL, 'respiratoria-1 (1).jpg', 1),
(2, 'Calzado', 1, 'Proteccion para sus pies , Cumple Normas ASTM ANSI Z41, EN ISO 20344/NBR', NULL, 'calzado-3.jpg', 1),
(3, 'Guantes', 1, 'Su seguridad nº1 para sus manos , Cumple la Norma en 388', NULL, 'manos-3.jpg', 1),
(4, 'Protección visual', 1, 'La mejor calidad y proteccion para sus ojos', NULL, 'visual-2.jpg', 1),
(5, 'Protección cabeza', 1, 'Cumple Normas ANSI Z89.1, 1997 Clases E,G,C Aprobación OSHA y Certificado SEI', NULL, 'Prot_cabeza_2.png', 1),
(6, 'Protección facial', 1, 'ProteccciÓn para su rostro , Cumple Normas ANSI Z87.1+', NULL, 'Proteccion_Facial.png', 1),
(7, 'Protección auditiva', 1, 'El mejor cuidado para sus oidos , Cumple La Norma ANSI S3.19-1974', NULL, 'Proteccion_auditiva.png', 1),
(8, 'Tráfico reflectivo Y señalizaciones', 1, 'Seguridad para el tráfico y carretera, cintas,conos y señalizaciones', NULL, 'Senalicacion.png', 1),
(9, 'TALADRO INALAMBRICO', 2, NULL, NULL, '', 1),
(10, 'TALADRO CON CABLE', 2, NULL, NULL, '', 1),
(11, 'MARTILLOS', 2, NULL, NULL, '', 1),
(12, 'ATORNILLADRES', 2, NULL, NULL, '', 1),
(13, 'LIJADORAS', 2, NULL, NULL, '', 1),
(14, 'CEPILLOS', 2, NULL, NULL, '', 1),
(15, 'SIERRA CALADORA', 2, NULL, NULL, '', 1),
(16, 'SIERRA CIRCULAR', 2, NULL, NULL, '', 1),
(17, 'HERRAMIENTAS DE BANCO', 2, NULL, NULL, '', 1),
(18, 'AMOLADORA ANGULAR', 2, NULL, NULL, '', 1),
(19, 'PULIDORA', 2, NULL, NULL, '', 1),
(20, 'SIERRA SABLE', 2, NULL, NULL, '', 1),
(21, 'FRESADORA', 2, NULL, NULL, '', 1),
(22, 'PISTOLA DE CALOR', 2, NULL, NULL, '', 1),
(23, 'prueba', 4, NULL, NULL, '', 0),
(24, 'CATEGORIA X', 3, NULL, NULL, '', 0),
(25, 'PRUEBA 2', 3, NULL, NULL, '', 0),
(26, 'PRUEBA 3', 3, NULL, NULL, '', 0),
(27, 'PRUEBA 4_', 3, NULL, NULL, '', 1),
(28, 'PRUEBA 3_', 3, NULL, NULL, '', 1),
(29, 'PRUEBA 4_', 3, NULL, NULL, '', 1),
(30, 'Protección soldador', 1, NULL, NULL, 'no_disponible.jpg', 1),
(31, 'EQUIPO OXICORTE', 4, NULL, NULL, 'no_disponible.jpg', 1),
(32, 'REGULADORES Y MANOMETROS', 4, NULL, NULL, 'no_disponible.jpg', 1),
(33, 'SOPLETE DE SOLDAR', 4, NULL, NULL, 'no_disponible.jpg', 1),
(34, 'ACCESORIOS', 4, NULL, NULL, 'no_disponible.jpg', 1),
(35, 'CATEGORIA I', 3, NULL, NULL, 'no_disponible.jpg', 1),
(36, 'CATEGORIA II', 3, NULL, NULL, 'no_disponible.jpg', 1),
(37, 'CATEGORIA II', 3, NULL, NULL, 'no_disponible.jpg', 1),
(38, 'SOPLETE DE CORTAR', 4, NULL, NULL, 'no_disponible.jpg', 1),
(39, 'BOQUILLAS', 4, NULL, NULL, 'no_disponible.jpg', 1),
(40, 'Protección corporal', 1, NULL, NULL, 'no_disponible.jpg', 1),
(41, 'REGULADORES', 5, NULL, NULL, 'no_disponible.jpg', 1),
(42, 'ACCESORIOS', 5, NULL, NULL, 'no_disponible.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_herramientas_electricas`
--

CREATE TABLE IF NOT EXISTS `tb_herramientas_electricas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `id_marca` int(100) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `potencia` varchar(50) CHARACTER SET utf8 NOT NULL,
  `detalles` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'no',
  `nom_img` varchar(100) NOT NULL DEFAULT 'no',
  `estado` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `tb_herramientas_electricas`
--

INSERT INTO `tb_herramientas_electricas` (`id`, `id_categoria`, `id_marca`, `nombre`, `potencia`, `detalles`, `nom_img`, `estado`) VALUES
(1, 18, 3, 'amoaldora k2', '500', 'agagaga', '6660.jpg', 1),
(2, 13, 1, 'HERRAMIENTA 02', '300 W', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', 'img_he2.png', 1),
(3, 13, 1, 'HERRAMIENTA 02', '300 W', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', 'img_he2.png', 1),
(4, 13, 1, 'HERRAMIENTA 02', '300 W', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', 'img_he2.png', 1),
(5, 13, 1, 'HERRAMIENTA 02', '300 W', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', 'img_he2.png', 1),
(6, 13, 1, 'HERRAMIENTA 02', '300 W', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', 'img_he2.png', 1),
(7, 13, 1, 'HERRAMIENTA 02', '300 W', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', 'img_he2.png', 1),
(8, 13, 1, 'HERRAMIENTA 02', '300 W', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', 'img_he2.png', 1),
(9, 13, 1, 'HERRAMIENTA 02', '300 W', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', 'img_he2.png', 1),
(10, 13, 1, 'HERRAMIENTA 02', '300 W', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', 'img_he2.png', 1),
(11, 12, 3, 'H_ELECTRICA_002', '1200 W', ' ', 'h_electrica.png', 1),
(12, 12, 3, 'H_ELECTRICA_002', '1200 W', ' ', 'h_electrica.png', 1),
(13, 12, 3, 'H_ELECTRICA_002', '1200 W', ' ', 'h_electrica.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_herramienta_manuales`
--

CREATE TABLE IF NOT EXISTS `tb_herramienta_manuales` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(100) NOT NULL,
  `id_marca` int(100) NOT NULL,
  `nombre` varchar(500) CHARACTER SET utf8 NOT NULL,
  `detalles` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'no',
  `nom_img` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT 'no_disponible.jpg',
  `estado` int(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tb_herramienta_manuales`
--

INSERT INTO `tb_herramienta_manuales` (`id`, `id_categoria`, `id_marca`, `nombre`, `detalles`, `nom_img`, `estado`) VALUES
(1, 24, 1, 'MANUAL 1', ' ', 'manual_img.jpg', 1),
(2, 25, 1, 'MANUAL 3', ' ', 'manual2.png', 1),
(3, 25, 2, 'MANUALES 2', ' ', 'manual2.png', 1),
(4, 24, 2, 'ABC', 'no', 'no_disponible.jpg', 1),
(5, 25, 1, 'QWE', 'no', 'no_disponible.jpg', 1),
(6, 27, 5, 'PRODUCTO_M_001', ' ', '.png', 1),
(7, 27, 5, 'PRODUCTO_M_001', ' ', '.png', 1),
(8, 27, 5, 'PRODUCTO_M_001', ' ', '.png', 1),
(9, 27, 5, 'PRODUCTO_M_001', ' ', '.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_marca`
--

CREATE TABLE IF NOT EXISTS `tb_marca` (
  `id_marca` int(100) NOT NULL AUTO_INCREMENT,
  `nom_marca` varchar(50) NOT NULL,
  `nom_img` varchar(100) NOT NULL DEFAULT 'no_disponible.jpg',
  PRIMARY KEY (`id_marca`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tb_marca`
--

INSERT INTO `tb_marca` (`id_marca`, `nom_marca`, `nom_img`) VALUES
(1, 'Clute', 'no_disponible.jpg'),
(2, '3M', 'no_disponible.jpg'),
(3, 'SKIL', 'no_disponible.jpg'),
(4, 'NORTON', 'no_disponible.jpg'),
(5, 'NACIONAL', 'no_disponible.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_medicinal`
--

CREATE TABLE IF NOT EXISTS `tb_medicinal` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(100) NOT NULL,
  `id_marca` int(100) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `detalles` varchar(5000) NOT NULL DEFAULT 'vacio',
  `nom_img` varchar(500) NOT NULL DEFAULT 'no_disponible.png',
  `nom_img_2` varchar(500) NOT NULL DEFAULT 'no_disponible.png',
  `nom_img_3` varchar(500) NOT NULL DEFAULT 'no_disponible.png',
  `ficha` varchar(500) NOT NULL,
  `estado` int(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tb_medicinal`
--

INSERT INTO `tb_medicinal` (`id`, `id_categoria`, `id_marca`, `nombre`, `detalles`, `nom_img`, `nom_img_2`, `nom_img_3`, `ficha`, `estado`) VALUES
(1, 41, 2, 'regulador Ab01', ' <LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>', 'no_disponible.png', 'no_disponible.png', 'no_disponible.png', 'no', 1),
(2, 42, 3, 'Regulador Accesorio abc', ' vacio', 'no_disponible.png', 'no_disponible.png', 'no_disponible.png', 'no', 1),
(3, 41, 4, 'PRODUCTO 001', ' <LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>', 'ima_2_a.png', 'no_disponible.png', 'no_disponible.png', '', 1),
(4, 42, 2, 'PRODUCTO 002', ' vacio', 'donna.png', 'no_disponible.png', 'no_disponible.png', '', 1),
(5, 42, 0, 'PRODUCTO 0032', ' vacio', 'buzo_gen_pro.png', 'no_disponible.png', 'no_disponible.png', '', 1),
(6, 42, 0, 'PRODUCTO 0032', ' vacio', 'buzo_gen_pro.png', 'no_disponible.png', 'no_disponible.png', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_seguridad_industrial`
--

CREATE TABLE IF NOT EXISTS `tb_seguridad_industrial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_producto` varchar(50) NOT NULL,
  `desc_mini` varchar(500) NOT NULL,
  `desc_full` varchar(500) NOT NULL,
  `detalles` varchar(1000) DEFAULT NULL,
  `ficha` varchar(500) DEFAULT NULL,
  `id_categoria` int(100) NOT NULL,
  `id_subcategoria` int(100) DEFAULT NULL,
  `id_marca` int(100) NOT NULL,
  `estado` int(2) NOT NULL,
  `img_large1` varchar(50) DEFAULT NULL,
  `img_small1` varchar(50) DEFAULT NULL,
  `img_large2` varchar(50) DEFAULT NULL,
  `img_small2` varchar(50) DEFAULT NULL,
  `img_large3` varchar(50) DEFAULT NULL,
  `img_small3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=115 ;

--
-- Volcado de datos para la tabla `tb_seguridad_industrial`
--

INSERT INTO `tb_seguridad_industrial` (`id`, `nom_producto`, `desc_mini`, `desc_full`, `detalles`, `ficha`, `id_categoria`, `id_subcategoria`, `id_marca`, `estado`, `img_large1`, `img_small1`, `img_large2`, `img_small2`, `img_large3`, `img_small3`) VALUES
(84, 'PRODUCTO 2015_', '', ' aafafa', ' <LI> <p id="cont1"> babababa </p> </LI>\r\n <LI> <p id="cont1"> babababa </p> </LI>', 'Rio-ficha 2014.pdf', 3, 3, 4, 1, 'ima_2.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(83, 'PRODUCTO 2015', '', ' aafafa', ' <LI> <p id="cont1"> babababa </p> </LI>\r\n <LI> <p id="cont1"> babababa </p> </LI>', 'Rio-ficha 2014.pdf', 3, 3, 4, 1, 'ima_2.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(73, 'PRODUCTO 12', 'd', ' descripcion', '  <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui va su texto </p> </LI>', '', 3, 3, 1, 1, 'imagen_1.jpg', 'NULL', 'imagen_2.png', 'NULL', 'no', 'NULL'),
(3, 'SPLIT', 'Fabricados en 100% nylon, conrevestimiento de poliuretano blanco en la palma y dedos, ofrece un máximo agarre sin deslizamiento en humedo y seco, resiste a la abrasión , corte; y proteje las manos contra los residuos químicos. ', 'Fabricados en 100% nylon, conrevestimiento de poliuretano blanco en la palma y dedos, ofrece un máximo agarre sin deslizamiento en humedo y seco, resiste a la abrasión , corte; y proteje las manos contra los residuos químicos.', '<LI><p id="cont1">Estos guantes con costura ofrece la máxima sensibilidad al tacto gracias a la galga 15.</p></LI>\r\n<LI><p id="cont1">El soporte de nylon, no desprende pelusillas y ofrece un máximo confort, ligereza y maneabilidad mientras que mantienen las manos frescas.</p></LI>\r\n<LI><p id="cont1">Son lavables a 40 Cº con detergentes neutros, reutilizables y puedan ser descontaminados para su utilización en salas blancas.</p></LI>\r\n', 'Guantes SPLIT.pdf', 3, 3, 1, 1, 'split-large.jpg', NULL, '', NULL, '', NULL),
(4, 'SUPER FLEX NYLON', 'Los guantes de protección SUPER FLEX de CLUTE recubiertos con látex corrugado, son los guantes de protección industrial de uso general, ideales para proteger a las personas de los procesos ofreciendo un excelente nivel de agarre, destreza y...', 'Los guantes de protección SUPER FLEX de CLUTE recubiertos con látex corrugado, son los guantes de protección industrial de uso general, ideales para proteger a las personas de los procesos ofreciendo un excelente nivel de agarre, destreza y comodidad.', '<LI><p id="cont1">Diseño ergonómico asegura una máxima comodidad y minimiza la fatiga de la mano.</p></LI>\r\n<LI><p id="cont1">Posee un excelente agarre en cualquier situación húmeda y seca. </p></LI>\r\n<LI><p id="cont1">Resistencia a los aceites y grasas industriales.</p></LI>\r\n<LI><p id="cont1">Recubrimiento de látex libre de silicona, otorga una resistencia mínima de corte de nivel 1.</p></LI>\r\n<LI><p id="cont1">Lavable para facilitar su uso y otorgarle mayor productividad y durabilidad.</p></LI>\r\n<LI><p id="cont1">Revestimiento resistente al rasgado.</p></LI>\r\n<LI><p id="cont1">Excelente en la manipulación que requiera un tacto elevado.</p></LI>', 'Guantes Super-Flex Nylon CLUTE.pdf', 3, 1, 1, 1, 'super flex nylon-large.jpg', NULL, '78-508-large.jpg', '', '', NULL),
(5, 'VIPER', 'Fabricados en 40% de algodón y 60% polyester, con revestimiento de látex natural liso en la palma y dedos.', 'Fabricados en 40% de algodón y 60% polyester, con revestimiento de látex natural liso en la palma y dedos.', '<LI><p id="cont1">Puño elástico, color azul/negro.</p></LI>\r\n<LI><p id="cont1">Acabado rugoso en toda la superficie, forma anatómica y tejido sin costuras.</p></LI>\r\n<LI><p id="cont1">Guante flexible y cómodo, ofrece una gran destreza y resistencia frente a la abrasión y corte.</p></LI>\r\n<LI><p id="cont1">Su superficie garantiza una mayor sensibilidad y agarre.</p></LI>', 'Guantes VIPER.pdf', 3, 1, 1, 1, 'viper-large.jpg', NULL, NULL, NULL, '', NULL),
(6, 'NANTERRE', 'Botín elaborado en cuero crupón.', 'Botín elaborado en cuero crupón.', '<LI><p id="cont1">Botín elaborado en cuero crupón.</p></LI>\n<LI><p id="cont1">Categoría S1P.</p></LI>\n<LI><p id="cont1">Punta de acero, y plantilla de acero.</p></LI>\n<LI><p id="cont1">Suela inyectada de PU Bi – Densidad.</p></LI>\n<LI><p id="cont1">Suela resistente a hidrocarburos, grasas y aceites.</p></LI>\n<LI><p id="cont1">Talón con absorción de energía.</p></LI>\n<LI><p id="cont1"> antifatiga en la suela.</p></LI>\n<LI><p id="cont1">Máxima resistencia resbalones en suelos lisos y grasos.</p></LI>\n<LI><p id="cont1">Protección contra riesgos de lesiones por golpes.</p></LI>\n<LI><p id="cont1">Resistencia de hasta 200 Joules.</p></LI>\n<LI><p id="cont1">Nivel de protección máxima contra riesgos de aplastamiento 1100KN.</p></LI>\n<LI><p id="cont1">Resistencia dieléctrica 14 KV.</p></LI>', 'Bota_Nanterre.pdf', 2, 6, 1, 1, 'Bota_Nanterre.jpg', NULL, NULL, NULL, NULL, NULL),
(7, 'Respirador media cara (Silicona 7500 - 3M)', 'Respirador media cara (Silicona 7500 - 3M).', 'Respirador media cara (Silicona 7500 - 3M).', NULL, NULL, 1, 4, 2, 1, 'respirador_media_cara_silicona7500_3M.png', NULL, NULL, NULL, NULL, NULL),
(8, 'Respirador Máscara Completa Reutilizable Serie 600', 'Este respirador de cara completa reutilizable ofrece confort ligero y facilidad de uso. Combinar con los filtros para partículas o los cartuchos 3M™ apropiados para ayudar a proporcionar protección respiratoria contra partículas y/o una amplia variedad de gases y vapores.', 'Este respirador de cara completa reutilizable ofrece confort ligero y facilidad de uso. Combinar con los filtros para partículas o los cartuchos 3M™ apropiados para ayudar a proporcionar protección respiratoria contra partículas y/o una amplia variedad de gases y vapores.', '<LI><p id="cont1">Respirador de media cara.</p></LI>\r\n<LI><p id="cont1">Lentes grandes para amplio campo de visión.</p></LI>\r\n<LI><p id="cont1">Diseño ligero, equilibrado.</p></LI>\r\n<LI><p id="cont1">Sellado de silicona para mayor comodidad y durabilidad.</p></LI>\r\n', '', 1, 4, 2, 1, '3M_Respirador_Completa_Reutilizable_Serie_6000.png', NULL, NULL, NULL, NULL, NULL),
(9, 'Filtro para partículas 207 2078, P95.', 'Aprobado por NISH para ambientes con ciertas partículas aceitosas y no aceitosas. Recomendado por 3M para el alivio de molestias por niveles de vapor orgánico/gases ácido y para protección de ozono de hasta 10 veces el OSHA PEL.', '\r\nUsar con respiradores 3M de la series 5000 o cartuchos 3m serie 6000 con adaptador 3M 502 o máscaras medias y completas 3M serie 6000, 7000 y FF-400 con soporte de filtro para bayoneta. Cuando esté ajustado correctamente, usar en una variedad de aplicaciones incluidas polvo, soldadura, vertido de metales y ciertas operaciones de acabado para concentraciones de hasta 10 veces el límite de exposición permisible (PEL) con medias máscaras o 50 veces el PEL con máscaras completas. También ofrece al', '<LI><p id="cont1">Filtro para partículas P95.</p></LI>\r\n<LI><p id="cont1">Alivio de las molestias por Vapor Orgánico.</p></LI>\r\n<LI><p id="cont1">Usar con respiradores reutilizables 3M.</p></LI>', NULL, 1, 5, 2, 1, 'Filtro_3M_2078.png', NULL, NULL, NULL, NULL, NULL),
(10, 'Filtro para Partículas 2097/07184(AAD)', 'Aprobado por NIOSH para ambientes que contengan ciertas partículas aceitosas y no aceitosas. Recomendado por 3M para el alivio de los niveles de molestias por vapores orgánicos y para protección contra el ozono hasta 10 veces el OSHA PEL.', 'Usar con respiradores 3M de la series 5000 o cartuchos 3m serie 6000 con adaptador 3M 502 o máscaras medias y completas 3M serie 6000, 7000 y FF-400 con soporte de filtro para bayoneta. Cuando esté ajustado correctamente, usar en una variedad de aplicaciones incluyendo soldadura, corte con soplete, vertido de metal y exposición al plomo, asbesto, cadmio, arsénico y MDA para concentraciones hasta 10 veces superiores al límite de exposición permisible (PEL) con media máscara o 50 veces el PEL con ', '<LI><p id="cont1">Filtros para partículas P100.</p></LI>\r\n<LI><p id="cont1">Niveles de molestia por vapor orgánico.</p></LI>', NULL, 1, 5, 2, 1, 'Filtro_2097_07184.png', NULL, NULL, NULL, NULL, NULL),
(72, 'PRODUCTO 125', 'dd', ' descripcion', '  <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui va su texto </p> </LI>', '', 3, 3, 1, 1, 'imagen_1.jpg', 'NULL', 'androidyoda.png', 'NULL', 'no', 'NULL'),
(12, 'VE702PG', ' guante 100% poliester, impregnacion de poliuretano en palma y punta de los dedos GALGA 13.', ' ', ' <LI> <p id="cont1"> manipulación de objetos manchados. </p> </LI>\r\n<LI> <p id="cont1"> tejido de punto sin costura </p> </LI>\r\n<LI> <p id="cont1"> más confort </p> </LI>\r\n<LI> <p id="cont1"> elasticidad al maniobrar en área de  trabajo </p> </LI>', '', 3, 1, 1, 1, '702pg-venitex.jpg', 'null', 'null', '', '', ''),
(82, 'PRODUCTO 2015', '', ' aafafa', ' <LI> <p id="cont1"> babababa </p> </LI>\r\n <LI> <p id="cont1"> babababa </p> </LI>', 'Rio-ficha 2014.pdf', 3, 3, 4, 1, 'ima_2.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(81, 'PRODUCTO 2015', '', ' aafafa', ' <LI> <p id="cont1"> babababa </p> </LI>\r\n <LI> <p id="cont1"> babababa </p> </LI>', 'Rio-ficha 2014.pdf', 3, 3, 4, 1, 'ima_2.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(79, 'AAA', '', ' protecto para soldador lentes', ' ', '', 30, 0, 2, 1, 'aa.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(80, 'AAA', '', ' protecto para soldador lentes', ' ', '', 30, 0, 2, 1, 'aa.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(78, 'AUDITIVA 1', '', ' aaadsd', ' <LI> <p id="cont1"> Aqui va su s</p> </LI>\r\n<LI> <p id="cont1"> Aqui va su e4334</p> </LI>\r\n<LI> <p id="cont1"> Aqui va su s</p> </LI>', '', 7, 1, 2, 1, '.png', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(76, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(77, 'VISUAL 1', '', ' haha', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', '', 6, 0, 2, 1, '.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(75, 'PRODUCTO 11', '', ' descripcion', '  <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui va su texto </p> </LI>', '', 3, 3, 1, 1, 'imagen_1.jpg', 'NULL', 'imagen_2.png', 'NULL', 'no', 'NULL'),
(74, 'PRODUCTO 1', '', ' descripcion', '  <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui va su texto </p> </LI>', '', 3, 3, 1, 0, 'imagen_1.jpg', 'NULL', 'imagen_2.png', 'NULL', 'no', 'NULL'),
(85, 'DONNA', '', ' ', '<LI> <p id="cont1"> Luna de policarbonato de curva base 8, diseño envolvente con protección lateral</p> </LI>\r\n<LI> <p id="cont1"> Marco completo de policarbonato </p> </LI>\r\n<LI> <p id="cont1"> Puente nasal universal de policarbonato integrado al marco </p> </LI>\r\n<LI> <p id="cont1">Tornillos de acero inoxidable. </p> </LI>\r\n\r\n', '', 4, 8, 1, 1, 'donna.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(86, 'CORDON SUJETADOR', '', ' ', ' ', '', 4, 10, 2, 1, 'cordon_sujetador.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(87, 'GOGGLES CARRERA', '', ' ', 'NULL', '', 4, 9, 1, 1, 'g_carrera.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(88, 'LENTES2', '', ' ', ' <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui va su texto </p> </LI>', '', 4, 8, 1, 1, 'lentes2.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(89, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(90, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(91, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(92, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(93, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(94, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(95, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(96, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(97, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(98, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(99, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(100, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(101, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(102, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(103, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(104, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(105, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(106, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(107, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(108, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(109, 'PRODUCTO 001', '', ' ', '  <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n', '', 5, 0, 2, 1, 'simbolo.png', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(110, 'PRODUCTO 001', '', ' ', '  <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n <LI> <p id="cont1"> Aqui va su texto </p> </LI>\r\n', '', 5, 0, 2, 1, 'simbolo.png', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(111, '', '', '', 'NULL', '', 0, 0, 0, 1, 'no', 'NULL', 'no', 'NULL', 'no', 'NULL'),
(112, 'ropa trabajo 1', '', '', '<LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>', NULL, 40, 11, 3, 1, 'no_disponible.png', NULL, 'no_disponible.png', NULL, NULL, NULL),
(113, 'ropa industrial', '', '', '<LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>', NULL, 40, 12, 3, 1, 'no_disponible.png', NULL, 'no_disponible.png', NULL, NULL, NULL),
(114, 'ROPA DESECHABLE', '', ' ', ' <LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>\r\n<LI> <p id="cont1"> Aqui_va_su_texto </p> </LI>', '', 40, 13, 4, 1, 'buzo_gen_pro.jpg', 'NULL', 'no', 'NULL', 'no', 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_subcategoria`
--

CREATE TABLE IF NOT EXISTS `tb_subcategoria` (
  `id_subcategoria` int(100) NOT NULL AUTO_INCREMENT,
  `nom_subcategoria` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `estado` int(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_subcategoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `tb_subcategoria`
--

INSERT INTO `tb_subcategoria` (`id_subcategoria`, `nom_subcategoria`, `id_categoria`, `estado`) VALUES
(1, 'Tejido', 3, 1),
(2, 'Cuero y Carnaza', 3, 1),
(3, 'Sintéticos', 3, 1),
(4, 'Respiradores y Filtros', 1, 1),
(5, 'Mascarillas Desechables', 1, 1),
(6, 'Botines de Cuero', 2, 1),
(7, 'Botas PVC', 2, 1),
(8, 'Lentes', 4, 1),
(9, 'Goggles', 4, 1),
(10, 'Accesorios', 4, 1),
(11, 'Ropa de Trabajo', 40, 1),
(12, 'Ropa Industrial', 40, 1),
(13, 'Ropa Desechable', 40, 1),
(14, 'Fajas Lumbares', 40, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nick`, `password`) VALUES
(1, 'uyuz', 'qwe'),
(2, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
