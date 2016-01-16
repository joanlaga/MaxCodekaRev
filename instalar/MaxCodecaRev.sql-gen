-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-05-2008 a las 12:10:02
-- Versión del servidor: 5.0.41
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `factusyn`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `albalinea`
-- 

CREATE TABLE `albalinea` (
  `codalbaran` int(11) NOT NULL default '0',
  `numlinea` tinyint(4) NOT NULL auto_increment,
  `codfamilia` text character set latin1 NOT NULL,
  `codsubfamilia` text character set latin1 NOT NULL,
  `codigo` text character set latin1 NOT NULL,
  `cantidad` float NOT NULL default '0',
  `precio` float NOT NULL default '0',
  `importe` float NOT NULL default '0',
  `dcto` tinyint(4) NOT NULL default '0',
  `descripcion` tinytext character set latin1 NOT NULL,
  `dias` int(11) NOT NULL default '0',
  `iva` float NOT NULL default '0',
  `importeiva` float NOT NULL default '0',
  PRIMARY KEY  (`codalbaran`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `albalinea`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `albalineap`
-- 

CREATE TABLE `albalineap` (
  `codalbaran` varchar(12) character set latin1 NOT NULL default '',
  `codproveedor` int(11) NOT NULL default '0',
  `numlinea` tinyint(4) NOT NULL auto_increment,
  `codfamilia` text character set latin1 NOT NULL,
  `codsubfamilia` text character set latin1 NOT NULL,
  `codigo` text character set latin1 NOT NULL,
  `descripcion` tinytext collate utf8_spanish_ci NOT NULL,
  `cantidad` float NOT NULL default '0',
  `precio` float NOT NULL default '0',
  `importe` float NOT NULL default '0',
  `dcto` float NOT NULL default '0',
  `iva` float NOT NULL default '0',
  `importeiva` float NOT NULL default '0',
  PRIMARY KEY  (`codalbaran`,`numlinea`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `albalineap`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `albaranes`
-- 

CREATE TABLE `albaranes` (
  `codalbaran` int(11) NOT NULL auto_increment,
  `codfactura` int(6) unsigned zerofill NOT NULL default '000000',
  `fecha` date NOT NULL default '0000-00-00',
  `iva` float NOT NULL default '0',
  `codcliente` int(11) NOT NULL default '0',
  `anyo` int(11) NOT NULL default '0',
  `observaciones` text collate utf8_spanish_ci NOT NULL,
  `anulado` tinyint(1) NOT NULL default '0',
  `quien` tinyint(4) NOT NULL default '0',
  `cosa` text collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`codalbaran`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `albaranes`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `albaranesp`
-- 

CREATE TABLE `albaranesp` (
  `codalbaran` varchar(12) collate utf8_spanish_ci NOT NULL default '',
  `codfactura` varchar(12) collate utf8_spanish_ci NOT NULL default '0',
  `fecha` date NOT NULL default '0000-00-00',
  `iva` float NOT NULL default '0',
  `codproveedor` int(11) NOT NULL default '0',
  `anyo` int(11) NOT NULL default '0',
  `observaciones` text collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`codalbaran`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `albaranesp`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `articulos`
-- 

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL auto_increment,
  `codfamilia` text character set latin1 NOT NULL,
  `codsubfamilia` text character set latin1 NOT NULL,
  `codigo` text character set latin1 NOT NULL,
  `descripcion` text collate utf8_spanish_ci NOT NULL,
  `detalles` longtext collate utf8_spanish_ci,
  `pvp` float NOT NULL default '0',
  `foto` text character set latin1,
  `stock` float NOT NULL default '0',
  `bajominimo` float NOT NULL default '0',
  `mostrweb` text character set latin1 NOT NULL,
  `oferta` text character set latin1 NOT NULL,
  `codbarras` tinytext collate utf8_spanish_ci NOT NULL,
  `iva` tinytext collate utf8_spanish_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `articulos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `artpro`
-- 

CREATE TABLE `artpro` (
  `idarticulo` int(11) NOT NULL default '0',
  `idproveedor` int(11) NOT NULL default '0',
  `precio` float NOT NULL default '0',
  KEY `idarticulo` (`idarticulo`,`idproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `artpro`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `artprotmp`
-- 

CREATE TABLE `artprotmp` (
  `idproveedor` int(11) NOT NULL default '0',
  `codfact` varchar(12) character set latin1 NOT NULL default '',
  `codalb` varchar(12) character set latin1 NOT NULL default '',
  `idarticulo` int(11) NOT NULL default '0',
  `precio` float NOT NULL default '0',
  PRIMARY KEY  (`idproveedor`,`codfact`,`codalb`,`idarticulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `artprotmp`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `clientes`
-- 

CREATE TABLE `clientes` (
  `codcliente` int(11) NOT NULL auto_increment,
  `nombre` tinytext character set latin1 NOT NULL,
  `nif` tinytext character set latin1 NOT NULL,
  `fechaalta` date NOT NULL default '0000-00-00',
  `direccion` tinytext character set latin1 NOT NULL,
  `localidad` tinytext character set latin1 NOT NULL,
  `cp` tinytext character set latin1 NOT NULL,
  `codprovincia` tinyint(4) NOT NULL default '0',
  `telefono` tinytext character set latin1 NOT NULL,
  `fax` tinytext character set latin1 NOT NULL,
  `movil` tinytext character set latin1 NOT NULL,
  `web` tinytext character set latin1 NOT NULL,
  `email` tinytext character set latin1 NOT NULL,
  `cuenta` mediumtext character set latin1 NOT NULL,
  `observaciones` text character set latin1 NOT NULL,
  `codfp` tinyint(4) NOT NULL default '0',
  `descuento` tinytext character set latin1 NOT NULL,
  `accesso` varchar(11) character set latin1 NOT NULL default '',
  `passwor` tinytext character set latin1 NOT NULL,
  `documentacion` tinytext character set latin1 NOT NULL,
  `tipo` tinytext character set latin1 NOT NULL,
  `retencion` tinytext character set latin1 collate latin1_spanish_ci NOT NULL,
  `afoto` tinytext character set latin1 NOT NULL,
  PRIMARY KEY  (`codcliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='clientes' AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `clientes`
-- 

INSERT INTO `clientes` VALUES (1, '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `descuento`
-- 

CREATE TABLE `descuento` (
  `id` int(11) NOT NULL auto_increment,
  `tiempo` tinyint(111) NOT NULL default '0',
  `descuento` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `descuento`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `docalbaran`
-- 

CREATE TABLE `docalbaran` (
  `color` tinytext character set latin1 NOT NULL,
  `marcagua` tinytext character set latin1 NOT NULL,
  `marcaguay` tinytext character set latin1 NOT NULL,
  `marcaguax` tinytext character set latin1 NOT NULL,
  `marcaguatam` tinytext character set latin1 NOT NULL,
  `tamanologo` tinytext character set latin1 NOT NULL,
  `logoy` tinytext character set latin1 NOT NULL,
  `logox` tinytext character set latin1 NOT NULL,
  `condiciones` tinytext character set latin1 NOT NULL,
  `condifont` tinytext character set latin1 NOT NULL,
  `conditam` varchar(11) character set latin1 NOT NULL default '',
  `moneda` tinytext character set latin1 NOT NULL,
  `impuestos` tinytext character set latin1 NOT NULL,
  `albaran` tinytext character set latin1 NOT NULL,
  `alineacion` tinytext character set latin1 collate latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `docalbaran`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `docfactura`
-- 

CREATE TABLE `docfactura` (
  `color` tinytext character set latin1 NOT NULL,
  `marcagua` tinytext character set latin1 NOT NULL,
  `marcaguay` tinytext character set latin1 NOT NULL,
  `marcaguax` tinytext character set latin1 NOT NULL,
  `marcaguatam` tinytext character set latin1 NOT NULL,
  `tamanologo` tinytext character set latin1 NOT NULL,
  `logoy` tinytext character set latin1 NOT NULL,
  `logox` tinytext character set latin1 NOT NULL,
  `condiciones` tinytext character set latin1 NOT NULL,
  `condifont` tinytext character set latin1 NOT NULL,
  `conditam` varchar(11) character set latin1 NOT NULL default '',
  `moneda` tinytext character set latin1 NOT NULL,
  `impuestos` tinytext character set latin1 NOT NULL,
  `registropos` tinytext character set latin1 NOT NULL,
  `alineacion` tinytext character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `docfactura`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `doclistado`
-- 

CREATE TABLE `doclistado` (
  `color` tinytext character set latin1 NOT NULL,
  `marcagua` tinytext character set latin1 NOT NULL,
  `marcaguay` tinytext character set latin1 NOT NULL,
  `marcaguax` tinytext character set latin1 NOT NULL,
  `marcaguatam` tinytext character set latin1 NOT NULL,
  `tamanologo` tinytext character set latin1 NOT NULL,
  `logoy` tinytext character set latin1 NOT NULL,
  `logox` tinytext character set latin1 NOT NULL,
  `condiciones` tinytext character set latin1 NOT NULL,
  `condifont` tinytext character set latin1 NOT NULL,
  `conditam` varchar(11) character set latin1 NOT NULL default '',
  `moneda` tinytext character set latin1 collate latin1_spanish_ci NOT NULL,
  `impuestos` tinytext character set latin1 collate latin1_spanish_ci NOT NULL,
  `alineacion` tinytext character set latin1 collate latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `doclistado`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `docparte`
-- 

CREATE TABLE `docparte` (
  `color` tinytext character set latin1 NOT NULL,
  `marcagua` tinytext character set latin1 NOT NULL,
  `marcaguay` tinytext character set latin1 NOT NULL,
  `marcaguax` tinytext character set latin1 NOT NULL,
  `marcaguatam` tinytext character set latin1 NOT NULL,
  `tamanologo` tinytext character set latin1 NOT NULL,
  `logoy` tinytext character set latin1 NOT NULL,
  `logox` tinytext character set latin1 NOT NULL,
  `condiciones` tinytext character set latin1 NOT NULL,
  `condifont` tinytext character set latin1 NOT NULL,
  `conditam` varchar(11) character set latin1 NOT NULL default '',
  `moneda` tinytext character set latin1 NOT NULL,
  `impuestos` tinytext character set latin1 NOT NULL,
  `alineacion` tinytext character set latin1 collate latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `docparte`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `docpresupuesto`
-- 

CREATE TABLE `docpresupuesto` (
  `color` tinytext character set latin1 NOT NULL,
  `marcagua` tinytext character set latin1 NOT NULL,
  `marcaguay` tinytext character set latin1 NOT NULL,
  `marcaguax` tinytext character set latin1 NOT NULL,
  `marcaguatam` tinytext character set latin1 NOT NULL,
  `tamanologo` tinytext character set latin1 NOT NULL,
  `logoy` tinytext character set latin1 NOT NULL,
  `logox` tinytext character set latin1 NOT NULL,
  `condiciones` tinytext character set latin1 NOT NULL,
  `condifont` tinytext character set latin1 NOT NULL,
  `conditam` varchar(11) character set latin1 NOT NULL default '',
  `moneda` tinytext character set latin1 NOT NULL,
  `impuestos` tinytext character set latin1 NOT NULL,
  `alineacion` tinytext character set latin1 collate latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `docpresupuesto`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `empresa`
-- 

CREATE TABLE `empresa` (
  `id` tinyint(4) NOT NULL default '0',
  `nombre` tinytext character set latin1 NOT NULL,
  `cif` tinytext character set latin1 NOT NULL,
  `registro` tinytext character set latin1 NOT NULL,
  `direccion` tinytext character set latin1 NOT NULL,
  `localidad` tinytext character set latin1 NOT NULL,
  `codprovincia` tinyint(11) NOT NULL default '0',
  `telefono` tinytext character set latin1 NOT NULL,
  `movil` tinytext character set latin1 NOT NULL,
  `fax` tinytext character set latin1 NOT NULL,
  `cp` tinytext character set latin1 NOT NULL,
  `logo` tinytext character set latin1 NOT NULL,
  `web` tinytext character set latin1 NOT NULL,
  `email` tinytext character set latin1 NOT NULL,
  `cuentabanc` tinytext character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `empresa`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `factulinea`
-- 

CREATE TABLE `factulinea` (
  `codfactura` int(11) NOT NULL default '0',
  `numlinea` tinyint(4) NOT NULL auto_increment,
  `codfamilia` tinytext character set latin1 NOT NULL,
  `codsubfamilia` tinytext character set latin1 NOT NULL,
  `codigo` tinytext character set latin1 NOT NULL,
  `descripcion` tinytext character set latin1 NOT NULL,
  `cantidad` float NOT NULL default '0',
  `precio` float NOT NULL default '0',
  `importe` float NOT NULL default '0',
  `dcto` tinyint(4) NOT NULL default '0',
  `dias` int(111) NOT NULL default '0',
  `iva` float NOT NULL default '0',
  `importeiva` float NOT NULL default '0',
  PRIMARY KEY  (`codfactura`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `factulinea`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `factulineap`
-- 

CREATE TABLE `factulineap` (
  `codfactura` varchar(12) character set latin1 NOT NULL default '0',
  `codproveedor` int(11) NOT NULL default '0',
  `numlinea` tinyint(4) NOT NULL auto_increment,
  `codfamilia` tinytext character set latin1 NOT NULL,
  `codsubfamilia` tinytext character set latin1 NOT NULL,
  `codigo` tinytext character set latin1 NOT NULL,
  `descripcion` tinytext character set latin1 NOT NULL,
  `numserie` tinytext character set latin1 NOT NULL,
  `cantidad` float NOT NULL default '0',
  `precio` float NOT NULL default '0',
  `importe` float NOT NULL default '0',
  `dcto` float NOT NULL default '0',
  `iva` float NOT NULL default '0',
  `importeiva` float NOT NULL default '0',
  PRIMARY KEY  (`codfactura`,`codproveedor`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `factulineap`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `factulineaperiod`
-- 

CREATE TABLE `factulineaperiod` (
  `codfactura` int(11) NOT NULL default '0',
  `numlinea` tinyint(4) NOT NULL auto_increment,
  `codfamilia` tinytext character set latin1 NOT NULL,
  `codsubfamilia` tinytext character set latin1 NOT NULL,
  `codigo` tinytext character set latin1 NOT NULL,
  `descripcion` tinytext character set latin1 NOT NULL,
  `cantidad` float NOT NULL default '0',
  `precio` float NOT NULL default '0',
  `importe` float NOT NULL default '0',
  `dcto` tinyint(4) NOT NULL default '0',
  `iva` float NOT NULL default '0',
  `importeiva` float NOT NULL default '0',
  PRIMARY KEY  (`codfactura`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `factulineaperiod`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `facturas`
-- 

CREATE TABLE `facturas` (
  `codfactura` int(6) unsigned zerofill NOT NULL auto_increment,
  `fecha` date NOT NULL default '0000-00-00',
  `iva` float NOT NULL default '0',
  `codcliente` int(11) NOT NULL default '0',
  `nombrecli` tinytext collate utf8_spanish_ci NOT NULL,
  `cifcli` tinytext collate utf8_spanish_ci NOT NULL,
  `direccli` tinytext collate utf8_spanish_ci NOT NULL,
  `cpcli` tinytext collate utf8_spanish_ci NOT NULL,
  `anyo` int(11) NOT NULL default '0',
  `observaciones` text collate utf8_spanish_ci NOT NULL,
  `codfp` tinyint(4) NOT NULL default '0',
  `estado` tinyint(4) NOT NULL default '0',
  `fechacobro` date NOT NULL default '0000-00-00',
  `serie` tinytext collate utf8_spanish_ci NOT NULL,
  `retencion` tinytext collate utf8_spanish_ci NOT NULL,
  `quien` int(11) NOT NULL default '0',
  PRIMARY KEY  (`codfactura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `facturas`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `facturasp`
-- 

CREATE TABLE `facturasp` (
  `codfactura` varchar(12) character set latin1 NOT NULL default '0',
  `fecha` date NOT NULL default '0000-00-00',
  `iva` float NOT NULL default '0',
  `codproveedor` int(11) NOT NULL default '0',
  `anyo` int(11) NOT NULL default '0',
  `observaciones` text character set latin1 NOT NULL,
  `codfp` tinyint(4) NOT NULL default '0',
  `estado` tinyint(4) NOT NULL default '0',
  `fechapago` date NOT NULL default '0000-00-00',
  `retencion` tinytext character set latin1 NOT NULL,
  PRIMARY KEY  (`codfactura`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `facturasp`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `facturasperiod`
-- 

CREATE TABLE `facturasperiod` (
  `codfactura` int(4) unsigned zerofill NOT NULL auto_increment,
  `fecha` date NOT NULL default '0000-00-00',
  `iva` tinyint(4) NOT NULL default '0',
  `codcliente` int(11) NOT NULL default '0',
  `anyo` int(11) NOT NULL default '0',
  `observaciones` text character set latin1 NOT NULL,
  `codfp` tinyint(4) NOT NULL default '0',
  `fechacobro` date NOT NULL default '0000-00-00',
  `periodo` tinytext character set latin1 NOT NULL,
  `proxima` date NOT NULL default '0000-00-00',
  `retencion` int(11) NOT NULL default '0',
  `quien` int(11) NOT NULL default '0',
  PRIMARY KEY  (`codfactura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `facturasperiod`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `familia`
-- 

CREATE TABLE `familia` (
  `id` int(11) NOT NULL auto_increment,
  `codigo` text character set latin1 NOT NULL,
  `familia` text character set latin1 NOT NULL,
  `web` tinytext character set latin1 NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `familia`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `formapago`
-- 

CREATE TABLE `formapago` (
  `codfp` tinyint(4) NOT NULL auto_increment,
  `denfp` tinytext character set latin1 NOT NULL,
  `observaciones` text character set latin1 NOT NULL,
  PRIMARY KEY  (`codfp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='formas de pago' AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `formapago`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `gastos`
-- 

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL default '0',
  `codigo` text collate utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL default '0000-00-00',
  `proveedor` text collate utf8_spanish_ci NOT NULL,
  `tipo` tinyint(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `gastos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `gastoslinea`
-- 

CREATE TABLE `gastoslinea` (
  `codigo` text collate utf8_spanish_ci NOT NULL,
  `descripcion` text collate utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL default '0',
  `precio` int(11) NOT NULL default '0',
  `descuento` tinyint(4) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `gastoslinea`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mail`
-- 

CREATE TABLE `mail` (
  `forenvio` tinytext character set latin1 NOT NULL,
  `asunto` tinytext character set latin1 NOT NULL,
  `texto` tinytext character set latin1 NOT NULL,
  `host` tinytext character set latin1 NOT NULL,
  `autentifica` tinytext character set latin1 NOT NULL,
  `usuario` tinytext character set latin1 NOT NULL,
  `contrasena` tinytext character set latin1 NOT NULL,
  `nombre` tinytext character set latin1 NOT NULL,
  `espera` tinytext character set latin1 NOT NULL,
  `email` tinytext character set latin1 NOT NULL,
  `puerto` varchar(111) character set latin1 NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `mail`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mailenviados`
-- 

CREATE TABLE `mailenviados` (
  `id` int(11) NOT NULL auto_increment,
  `para` tinytext character set latin1 collate latin1_spanish_ci NOT NULL,
  `desde` tinytext character set latin1 collate latin1_spanish_ci NOT NULL,
  `asunto` tinytext character set latin1 collate latin1_spanish_ci NOT NULL,
  `texto` tinytext character set latin1 collate latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL default '0000-00-00',
  `codcliente` tinyint(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `mailenviados`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `nivel`
-- 

CREATE TABLE `nivel` (
  `usuario` tinyint(4) NOT NULL default '0',
  `familia` tinyint(4) NOT NULL default '0',
  `subfamilia` tinyint(4) NOT NULL default '0',
  `listados` tinyint(4) NOT NULL default '0',
  `articulos` tinyint(4) NOT NULL default '0',
  `proveedores` tinyint(4) NOT NULL default '0',
  `estadisticas` tinyint(4) NOT NULL default '0',
  `configuraciones` tinyint(4) NOT NULL default '0',
  `calendario` tinyint(4) NOT NULL default '0',
  `clasico` tinyint(4) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `nivel`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `operarios`
-- 

CREATE TABLE `operarios` (
  `codoperario` tinyint(4) NOT NULL,
  `nombre` tinytext collate utf8_spanish_ci NOT NULL,
  `nif` tinytext collate utf8_spanish_ci NOT NULL,
  `telefono` tinytext collate utf8_spanish_ci NOT NULL,
  `movil` tinytext collate utf8_spanish_ci NOT NULL,
  `direccion` tinytext collate utf8_spanish_ci NOT NULL,
  `observaciones` tinytext collate utf8_spanish_ci NOT NULL,
  `afoto` tinytext collate utf8_spanish_ci NOT NULL,
  `mail` tinytext collate utf8_spanish_ci NOT NULL,
  `apellidos` tinytext collate utf8_spanish_ci NOT NULL,
  `localidad` text collate utf8_spanish_ci NOT NULL,
  `cp` tinyint(4) NOT NULL,
  `comision` int(11) NOT NULL,
  `provincia` text collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`codoperario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `operarios`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `partelinea`
-- 

CREATE TABLE `partelinea` (
  `codparte` int(11) NOT NULL default '0',
  `numlinea` tinyint(4) NOT NULL auto_increment,
  `codfamilia` text character set latin1 NOT NULL,
  `codsubfamilia` text character set latin1 NOT NULL,
  `codigo` text character set latin1 NOT NULL,
  `cantidad` float NOT NULL default '0',
  `precio` float NOT NULL default '0',
  `importe` float NOT NULL default '0',
  `dcto` tinyint(4) NOT NULL default '0',
  `descripcion` tinytext character set latin1 NOT NULL,
  `codoper` tinyint(11) NOT NULL default '0',
  `observa` text collate utf8_spanish_ci NOT NULL,
  `iva` float NOT NULL default '0',
  `importeiva` float NOT NULL default '0',
  PRIMARY KEY  (`codparte`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `partelinea`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `partes`
-- 

CREATE TABLE `partes` (
  `codparte` int(11) NOT NULL auto_increment,
  `fecha` date NOT NULL default '0000-00-00',
  `iva` float NOT NULL default '0',
  `codcliente` int(11) NOT NULL default '0',
  `anyo` int(11) NOT NULL default '0',
  `observaciones` text character set latin1 NOT NULL,
  `codfactura` int(11) NOT NULL default '0',
  `anulado` tinyint(1) NOT NULL default '0',
  `quien` int(11) NOT NULL default '0',
  `cosa` tinytext collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`codparte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `partes`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pedidos`
-- 

CREATE TABLE `pedidos` (
  `codpedido` varchar(12) character set latin1 collate latin1_spanish_ci NOT NULL default '0',
  `fecha` date NOT NULL default '0000-00-00',
  `iva` tinyint(4) NOT NULL default '0',
  `codproveedor` int(11) NOT NULL default '0',
  `anyo` int(11) NOT NULL default '0',
  `observaciones` text character set latin1 collate latin1_spanish_ci NOT NULL,
  `codfp` tinyint(4) NOT NULL default '0',
  `estado` tinyint(4) NOT NULL default '0',
  `fechapago` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`codpedido`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `pedidos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pedidoslinea`
-- 

CREATE TABLE `pedidoslinea` (
  `codpedido` varchar(12) character set latin1 collate latin1_spanish_ci NOT NULL default '0',
  `codproveedor` int(11) NOT NULL default '0',
  `numlinea` tinyint(4) NOT NULL auto_increment,
  `codfamilia` tinytext character set latin1 NOT NULL,
  `codsubfamilia` tinytext character set latin1 NOT NULL,
  `codigo` tinytext character set latin1 NOT NULL,
  `descripcion` tinytext character set latin1 NOT NULL,
  `cantidad` float NOT NULL default '0',
  `precio` float NOT NULL default '0',
  `importe` float NOT NULL default '0',
  `dcto` float NOT NULL default '0',
  PRIMARY KEY  (`codpedido`,`codproveedor`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `pedidoslinea`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `presupuestolinea`
-- 

CREATE TABLE `presupuestolinea` (
  `codpresupuesto` int(11) NOT NULL default '0',
  `numlinea` tinyint(4) NOT NULL auto_increment,
  `codfamilia` text character set latin1 NOT NULL,
  `codsubfamilia` text character set latin1 NOT NULL,
  `codigo` text character set latin1 NOT NULL,
  `cantidad` float NOT NULL default '0',
  `precio` float NOT NULL default '0',
  `importe` float NOT NULL default '0',
  `dcto` tinyint(4) NOT NULL default '0',
  `descripcion` tinytext character set latin1 NOT NULL,
  `dias` int(11) NOT NULL default '0',
  `iva` float NOT NULL default '0',
  `importeiva` float NOT NULL default '0',
  PRIMARY KEY  (`codpresupuesto`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `presupuestolinea`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `presupuestos`
-- 

CREATE TABLE `presupuestos` (
  `codpresupuesto` int(11) NOT NULL auto_increment,
  `quien` int(11) NOT NULL default '0',
  `fecha` date NOT NULL default '0000-00-00',
  `iva` float NOT NULL default '0',
  `codcliente` int(11) NOT NULL default '0',
  `anyo` int(11) NOT NULL default '0',
  `observaciones` text collate utf8_spanish_ci NOT NULL,
  `nombr` text collate utf8_spanish_ci NOT NULL,
  `codcosa` int(6) unsigned zerofill NOT NULL default '000000',
  `anulado` tinyint(1) NOT NULL default '0',
  `cosa` tinytext collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`codpresupuesto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `presupuestos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `proveedores`
-- 

CREATE TABLE `proveedores` (
  `codproveedor` int(11) NOT NULL auto_increment,
  `nombre` tinytext character set latin1 NOT NULL,
  `nif` tinytext character set latin1 NOT NULL,
  `fechaalta` date NOT NULL default '0000-00-00',
  `direccion` tinytext character set latin1 NOT NULL,
  `localidad` tinytext character set latin1 NOT NULL,
  `cp` tinytext character set latin1 NOT NULL,
  `codprovincia` tinyint(4) NOT NULL default '0',
  `telefono` tinytext character set latin1 NOT NULL,
  `fax` tinytext character set latin1 NOT NULL,
  `movil` tinytext character set latin1 NOT NULL,
  `web` tinytext character set latin1 NOT NULL,
  `email` tinytext character set latin1 NOT NULL,
  `persona` text character set latin1 NOT NULL,
  `cargo` text character set latin1 NOT NULL,
  `observaciones` longtext character set latin1 NOT NULL,
  `logo` tinytext character set latin1 NOT NULL,
  `retencion` tinyint(111) NOT NULL default '0',
  PRIMARY KEY  (`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='proveedores' AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `proveedores`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `provincias`
-- 

CREATE TABLE `provincias` (
  `codprovincia` int(4) NOT NULL auto_increment,
  `denprovincia` tinytext character set latin1 NOT NULL,
  PRIMARY KEY  (`codprovincia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `provincias`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `series`
-- 

CREATE TABLE `series` (
  `codser` tinyint(4) NOT NULL auto_increment,
  `serie` tinytext character set latin1 NOT NULL,
  `observaciones` text character set latin1 NOT NULL,
  PRIMARY KEY  (`codser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `series`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `subfamilia`
-- 

CREATE TABLE `subfamilia` (
  `id` int(11) NOT NULL auto_increment,
  `idfamilia` text character set latin1 NOT NULL,
  `codigo` text character set latin1 NOT NULL,
  `subfamilia` text character set latin1 NOT NULL,
  `beneficios` tinytext character set latin1 NOT NULL,
  `mostweb` text character set latin1 NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `subfamilia`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tempartpro`
-- 

CREATE TABLE `tempartpro` (
  `id` int(11) NOT NULL auto_increment,
  `articulo` int(11) NOT NULL default '0',
  `proveedor` int(11) NOT NULL default '0',
  `precio` float NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tempartpro`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `temporales`
-- 

CREATE TABLE `temporales` (
  `codigocosa` int(11) NOT NULL auto_increment,
  `documento` tinytext collate utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL default '0000-00-00',
  `iva` float NOT NULL default '0',
  `codcliente` int(11) NOT NULL default '0',
  `anyo` int(11) NOT NULL default '0',
  `observaciones` text collate utf8_spanish_ci NOT NULL,
  `quien` text collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`codigocosa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `temporales`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `temporaleslinea`
-- 

CREATE TABLE `temporaleslinea` (
  `codigocosa` int(11) NOT NULL default '0',
  `numlinea` tinyint(4) NOT NULL auto_increment,
  `codfamilia` text collate utf8_spanish_ci NOT NULL,
  `codsubfamilia` text character set latin1 NOT NULL,
  `codigo` text character set latin1 NOT NULL,
  `cantidad` float NOT NULL default '0',
  `precio` float NOT NULL default '0',
  `importe` float NOT NULL default '0',
  `dcto` tinyint(4) NOT NULL default '0',
  `descripcion` tinytext character set latin1 NOT NULL,
  `codcli` tinyint(11) NOT NULL default '0',
  `codoper` tinyint(11) NOT NULL default '0',
  `observa` text collate utf8_spanish_ci NOT NULL,
  `dias` int(111) NOT NULL default '0',
  `iva` float NOT NULL default '0',
  `importeiva` float NOT NULL default '0',
  PRIMARY KEY  (`codigocosa`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `temporaleslinea`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tiendainfo`
-- 

CREATE TABLE `tiendainfo` (
  `id` int(111) NOT NULL auto_increment,
  `alto` text character set latin1 NOT NULL,
  `bajo` text character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tiendainfo`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tiendanoti`
-- 

CREATE TABLE `tiendanoti` (
  `id` int(11) NOT NULL auto_increment,
  `texto` text character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tiendanoti`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tiendarecu`
-- 

CREATE TABLE `tiendarecu` (
  `id` int(111) NOT NULL auto_increment,
  `alto` text character set latin1 NOT NULL,
  `bajo` text character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tiendarecu`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `user_list`
-- 

CREATE TABLE `user_list` (
  `ID` smallint(6) unsigned NOT NULL auto_increment,
  `usuario` tinytext collate utf8_spanish_ci NOT NULL,
  `pass` tinytext collate utf8_spanish_ci NOT NULL,
  `nivel_acceso` smallint(4) unsigned NOT NULL default '0',
  `escritorio` text collate utf8_spanish_ci NOT NULL,
  `ventanas` text collate utf8_spanish_ci NOT NULL,
  `dock` text collate utf8_spanish_ci NOT NULL,
  `entrada` tinytext collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=45 ;

-- 
-- Volcar la base de datos para la tabla `user_list`
-- 

INSERT INTO `user_list` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 'vista.jpg', 'vista_glass', '1', 'clasico');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_asst`
-- 

CREATE TABLE `webcal_asst` (
  `cal_boss` varchar(25) NOT NULL default '',
  `cal_assistant` varchar(25) NOT NULL default '',
  PRIMARY KEY  (`cal_boss`,`cal_assistant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_asst`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_categories`
-- 

CREATE TABLE `webcal_categories` (
  `cat_id` int(11) NOT NULL default '0',
  `cat_owner` varchar(25) default NULL,
  `cat_name` varchar(80) NOT NULL default '',
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_categories`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_config`
-- 

CREATE TABLE `webcal_config` (
  `cal_setting` varchar(50) NOT NULL default '',
  `cal_value` varchar(100) default NULL,
  PRIMARY KEY  (`cal_setting`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_config`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_entry`
-- 

CREATE TABLE `webcal_entry` (
  `cal_id` int(11) NOT NULL default '0',
  `cal_group_id` int(11) default NULL,
  `cal_ext_for_id` int(11) default NULL,
  `cal_create_by` varchar(25) NOT NULL default '',
  `cal_date` int(11) NOT NULL default '0',
  `cal_time` int(11) default NULL,
  `cal_mod_date` int(11) default NULL,
  `cal_mod_time` int(11) default NULL,
  `cal_duration` int(11) NOT NULL default '0',
  `cal_priority` int(11) default '2',
  `cal_type` char(1) default 'E',
  `cal_access` char(1) default 'P',
  `cal_name` varchar(80) NOT NULL default '',
  `cal_description` text,
  PRIMARY KEY  (`cal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_entry`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_entry_ext_user`
-- 

CREATE TABLE `webcal_entry_ext_user` (
  `cal_id` int(11) NOT NULL default '0',
  `cal_fullname` varchar(50) NOT NULL default '',
  `cal_email` varchar(75) default NULL,
  PRIMARY KEY  (`cal_id`,`cal_fullname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_entry_ext_user`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_entry_log`
-- 

CREATE TABLE `webcal_entry_log` (
  `cal_log_id` int(11) NOT NULL default '0',
  `cal_entry_id` int(11) NOT NULL default '0',
  `cal_login` varchar(25) NOT NULL default '',
  `cal_user_cal` varchar(25) default NULL,
  `cal_type` char(1) NOT NULL default '',
  `cal_date` int(11) NOT NULL default '0',
  `cal_time` int(11) default NULL,
  `cal_text` text,
  PRIMARY KEY  (`cal_log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_entry_log`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_entry_repeats`
-- 

CREATE TABLE `webcal_entry_repeats` (
  `cal_id` int(11) NOT NULL default '0',
  `cal_type` varchar(20) default NULL,
  `cal_end` int(11) default NULL,
  `cal_frequency` int(11) default '1',
  `cal_days` varchar(7) default NULL,
  PRIMARY KEY  (`cal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_entry_repeats`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_entry_repeats_not`
-- 

CREATE TABLE `webcal_entry_repeats_not` (
  `cal_id` int(11) NOT NULL default '0',
  `cal_date` int(11) NOT NULL default '0',
  PRIMARY KEY  (`cal_id`,`cal_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_entry_repeats_not`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_entry_user`
-- 

CREATE TABLE `webcal_entry_user` (
  `cal_id` int(11) NOT NULL default '0',
  `cal_login` varchar(25) NOT NULL default '',
  `cal_status` char(1) default 'A',
  `cal_category` int(11) default NULL,
  PRIMARY KEY  (`cal_id`,`cal_login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_entry_user`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_group`
-- 

CREATE TABLE `webcal_group` (
  `cal_group_id` int(11) NOT NULL default '0',
  `cal_owner` varchar(25) default NULL,
  `cal_name` varchar(50) NOT NULL default '',
  `cal_last_update` int(11) NOT NULL default '0',
  PRIMARY KEY  (`cal_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_group`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_group_user`
-- 

CREATE TABLE `webcal_group_user` (
  `cal_group_id` int(11) NOT NULL default '0',
  `cal_login` varchar(25) NOT NULL default '',
  PRIMARY KEY  (`cal_group_id`,`cal_login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_group_user`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_import`
-- 

CREATE TABLE `webcal_import` (
  `cal_import_id` int(11) NOT NULL default '0',
  `cal_name` varchar(50) default NULL,
  `cal_date` int(11) NOT NULL default '0',
  `cal_type` varchar(10) NOT NULL default '',
  `cal_login` varchar(25) default NULL,
  PRIMARY KEY  (`cal_import_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_import`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_import_data`
-- 

CREATE TABLE `webcal_import_data` (
  `cal_import_id` int(11) NOT NULL default '0',
  `cal_id` int(11) NOT NULL default '0',
  `cal_login` varchar(25) NOT NULL default '',
  `cal_import_type` varchar(15) NOT NULL default '',
  `cal_external_id` varchar(200) default NULL,
  PRIMARY KEY  (`cal_id`,`cal_login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_import_data`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_nonuser_cals`
-- 

CREATE TABLE `webcal_nonuser_cals` (
  `cal_login` varchar(25) NOT NULL default '',
  `cal_lastname` varchar(25) default NULL,
  `cal_firstname` varchar(25) default NULL,
  `cal_admin` varchar(25) NOT NULL default '',
  PRIMARY KEY  (`cal_login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_nonuser_cals`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_reminder_log`
-- 

CREATE TABLE `webcal_reminder_log` (
  `cal_id` int(11) NOT NULL default '0',
  `cal_name` varchar(25) NOT NULL default '',
  `cal_event_date` int(11) NOT NULL default '0',
  `cal_last_sent` int(11) NOT NULL default '0',
  PRIMARY KEY  (`cal_id`,`cal_name`,`cal_event_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_reminder_log`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_report`
-- 

CREATE TABLE `webcal_report` (
  `cal_login` varchar(25) NOT NULL default '',
  `cal_report_id` int(11) NOT NULL default '0',
  `cal_is_global` char(1) NOT NULL default 'N',
  `cal_report_type` varchar(20) NOT NULL default '',
  `cal_include_header` char(1) NOT NULL default 'Y',
  `cal_report_name` varchar(50) NOT NULL default '',
  `cal_time_range` int(11) NOT NULL default '0',
  `cal_user` varchar(25) default NULL,
  `cal_allow_nav` char(1) default 'Y',
  `cal_cat_id` int(11) default NULL,
  `cal_include_empty` char(1) default 'N',
  `cal_show_in_trailer` char(1) default 'N',
  `cal_update_date` int(11) NOT NULL default '0',
  PRIMARY KEY  (`cal_report_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_report`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_report_template`
-- 

CREATE TABLE `webcal_report_template` (
  `cal_report_id` int(11) NOT NULL default '0',
  `cal_template_type` char(1) NOT NULL default '',
  `cal_template_text` text,
  PRIMARY KEY  (`cal_report_id`,`cal_template_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_report_template`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_site_extras`
-- 

CREATE TABLE `webcal_site_extras` (
  `cal_id` int(11) NOT NULL default '0',
  `cal_name` varchar(25) NOT NULL default '',
  `cal_type` int(11) NOT NULL default '0',
  `cal_date` int(11) default '0',
  `cal_remind` int(11) default '0',
  `cal_data` text,
  PRIMARY KEY  (`cal_id`,`cal_name`,`cal_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_site_extras`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_user`
-- 

CREATE TABLE `webcal_user` (
  `cal_login` varchar(25) NOT NULL default '',
  `cal_passwd` varchar(32) default NULL,
  `cal_lastname` varchar(25) default NULL,
  `cal_firstname` varchar(25) default NULL,
  `cal_is_admin` char(1) default 'N',
  `cal_email` varchar(75) default NULL,
  PRIMARY KEY  (`cal_login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_user`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_user_layers`
-- 

CREATE TABLE `webcal_user_layers` (
  `cal_layerid` int(11) NOT NULL default '0',
  `cal_login` varchar(25) NOT NULL default '',
  `cal_layeruser` varchar(25) NOT NULL default '',
  `cal_color` varchar(25) default NULL,
  `cal_dups` char(1) default 'N',
  PRIMARY KEY  (`cal_login`,`cal_layeruser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_user_layers`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_user_pref`
-- 

CREATE TABLE `webcal_user_pref` (
  `cal_login` varchar(25) NOT NULL default '',
  `cal_setting` varchar(25) NOT NULL default '',
  `cal_value` varchar(100) default NULL,
  PRIMARY KEY  (`cal_login`,`cal_setting`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_user_pref`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_view`
-- 

CREATE TABLE `webcal_view` (
  `cal_view_id` int(11) NOT NULL default '0',
  `cal_owner` varchar(25) NOT NULL default '',
  `cal_name` varchar(50) NOT NULL default '',
  `cal_view_type` char(1) default NULL,
  `cal_is_global` char(1) NOT NULL default 'N',
  PRIMARY KEY  (`cal_view_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_view`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `webcal_view_user`
-- 

CREATE TABLE `webcal_view_user` (
  `cal_view_id` int(11) NOT NULL default '0',
  `cal_login` varchar(25) NOT NULL default '',
  PRIMARY KEY  (`cal_view_id`,`cal_login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `webcal_view_user`
-- 

