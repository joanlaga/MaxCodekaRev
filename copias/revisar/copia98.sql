-- MySQL dump 10.11
--
-- Host: localhost    Database: arayaper_codekamx
-- ------------------------------------------------------
-- Server version	5.0.90-community

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `albalinea`
--

DROP TABLE IF EXISTS `albalinea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albalinea` (
  `codalbaran` int(11) NOT NULL default '0',
  `numlinea` int(4) NOT NULL auto_increment,
  `codfamilia` int(3) default NULL,
  `codigo` varchar(15) character set utf8 default NULL,
  `cantidad` decimal(19,4) NOT NULL default '0.0000',
  `precio` decimal(19,4) NOT NULL default '0.0000',
  `importe` decimal(19,4) NOT NULL default '0.0000',
  `dcto` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`codalbaran`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albalinea`
--

LOCK TABLES `albalinea` WRITE;
/*!40000 ALTER TABLE `albalinea` DISABLE KEYS */;
INSERT INTO `albalinea` VALUES (4,1,18,'13','1.0000','257.0000','257.0000',0),(5,1,18,'13','1.0000','257.0000','257.0000',0),(6,1,18,'13','1.0000','257.0000','257.0000',0),(7,1,18,'12','1.0000','126.0000','126.0000',0),(7,2,18,'11','1.0000','140.0000','140.0000',0),(7,3,18,'11','1.0000','140.0000','119.0000',15);
/*!40000 ALTER TABLE `albalinea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albalineap`
--

DROP TABLE IF EXISTS `albalineap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albalineap` (
  `codalbaran` varchar(20) NOT NULL default '0',
  `codproveedor` int(5) NOT NULL default '0',
  `numlinea` int(4) NOT NULL auto_increment,
  `codfamilia` int(3) default NULL,
  `codigo` varchar(15) default NULL,
  `cantidad` decimal(10,0) NOT NULL default '0',
  `precio` decimal(19,4) NOT NULL default '0.0000',
  `importe` decimal(19,4) NOT NULL default '0.0000',
  `dcto` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`codalbaran`,`codproveedor`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albalineap`
--

LOCK TABLES `albalineap` WRITE;
/*!40000 ALTER TABLE `albalineap` DISABLE KEYS */;
/*!40000 ALTER TABLE `albalineap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albalineaptmp`
--

DROP TABLE IF EXISTS `albalineaptmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albalineaptmp` (
  `codalbaran` int(11) NOT NULL default '0',
  `numlinea` int(4) NOT NULL auto_increment,
  `codfamilia` int(3) default NULL,
  `codigo` varchar(15) default NULL,
  `cantidad` decimal(19,4) NOT NULL default '0.0000',
  `precio` decimal(19,4) NOT NULL default '0.0000',
  `importe` decimal(19,4) NOT NULL default '0.0000',
  `dcto` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`codalbaran`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albalineaptmp`
--

LOCK TABLES `albalineaptmp` WRITE;
/*!40000 ALTER TABLE `albalineaptmp` DISABLE KEYS */;
/*!40000 ALTER TABLE `albalineaptmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albalineatmp`
--

DROP TABLE IF EXISTS `albalineatmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albalineatmp` (
  `codalbaran` int(11) NOT NULL default '0',
  `numlinea` int(4) NOT NULL auto_increment,
  `codfamilia` int(3) default NULL,
  `codigo` varchar(15) character set utf8 default NULL,
  `cantidad` decimal(19,4) NOT NULL default '0.0000',
  `precio` decimal(19,4) NOT NULL default '0.0000',
  `importe` decimal(19,4) NOT NULL default '0.0000',
  `dcto` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`codalbaran`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albalineatmp`
--

LOCK TABLES `albalineatmp` WRITE;
/*!40000 ALTER TABLE `albalineatmp` DISABLE KEYS */;
/*!40000 ALTER TABLE `albalineatmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albaranes`
--

DROP TABLE IF EXISTS `albaranes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albaranes` (
  `codalbaran` int(11) NOT NULL auto_increment,
  `codfactura` int(11) NOT NULL default '0',
  `fecha` date NOT NULL default '0000-00-00',
  `iva` tinyint(4) NOT NULL default '0',
  `codcliente` int(5) default '0',
  `estado` varchar(1) character set utf8 default '1',
  `totalalbaran` decimal(19,4) NOT NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codalbaran`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albaranes`
--

LOCK TABLES `albaranes` WRITE;
/*!40000 ALTER TABLE `albaranes` DISABLE KEYS */;
INSERT INTO `albaranes` VALUES (4,124,'2010-03-10',16,1,'2','298.1200','0'),(5,126,'2010-03-11',16,1,'2','298.1200','0'),(6,0,'2010-03-11',16,1,'1','298.1200','0'),(7,125,'2010-03-11',16,1,'2','446.6000','0');
/*!40000 ALTER TABLE `albaranes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albaranesp`
--

DROP TABLE IF EXISTS `albaranesp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albaranesp` (
  `codalbaran` varchar(20) NOT NULL default '0',
  `codproveedor` int(5) NOT NULL default '0',
  `codfactura` varchar(20) default NULL,
  `fecha` date NOT NULL default '0000-00-00',
  `iva` tinyint(4) NOT NULL default '0',
  `estado` varchar(1) default '1',
  `totalalbaran` decimal(19,4) NOT NULL default '0.0000',
  PRIMARY KEY  (`codalbaran`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albaranesp`
--

LOCK TABLES `albaranesp` WRITE;
/*!40000 ALTER TABLE `albaranesp` DISABLE KEYS */;
/*!40000 ALTER TABLE `albaranesp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albaranesptmp`
--

DROP TABLE IF EXISTS `albaranesptmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albaranesptmp` (
  `codalbaran` int(11) NOT NULL auto_increment,
  `fecha` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`codalbaran`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COMMENT='Temporal de albaranes de proveedores para controlar acceso s';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albaranesptmp`
--

LOCK TABLES `albaranesptmp` WRITE;
/*!40000 ALTER TABLE `albaranesptmp` DISABLE KEYS */;
/*!40000 ALTER TABLE `albaranesptmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albaranestmp`
--

DROP TABLE IF EXISTS `albaranestmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albaranestmp` (
  `codalbaran` int(11) NOT NULL auto_increment,
  `fecha` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`codalbaran`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1 COMMENT='Temporal de albaranes para controlar acceso simultaneo';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albaranestmp`
--

LOCK TABLES `albaranestmp` WRITE;
/*!40000 ALTER TABLE `albaranestmp` DISABLE KEYS */;
/*!40000 ALTER TABLE `albaranestmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articulos` (
  `codarticulo` int(10) NOT NULL auto_increment,
  `codfamilia` int(5) NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `impuesto` float NOT NULL,
  `codproveedor1` int(5) NOT NULL default '1',
  `codproveedor2` int(5) NOT NULL,
  `descripcion_corta` varchar(30) NOT NULL,
  `codubicacion` int(3) NOT NULL,
  `stock` int(10) NOT NULL,
  `stock_minimo` int(8) NOT NULL,
  `aviso_minimo` varchar(1) NOT NULL default '0',
  `datos_producto` varchar(200) NOT NULL,
  `fecha_alta` date NOT NULL default '0000-00-00',
  `codembalaje` int(3) NOT NULL,
  `unidades_caja` int(8) NOT NULL,
  `precio_ticket` varchar(1) NOT NULL default '0',
  `modificar_ticket` varchar(1) NOT NULL default '0',
  `observaciones` text NOT NULL,
  `precio_compra` decimal(19,4) default NULL,
  `precio_almacen` decimal(19,4) default NULL,
  `precio_tienda` decimal(19,4) default NULL,
  `precio_pvp` decimal(19,4) default NULL,
  `precio_iva` decimal(19,4) default NULL,
  `codigobarras` varchar(15) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codarticulo`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='Articulos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES (11,18,'netbook toshiva 234-','computador portatil peso 300 gramos ',15,4,5,'net6book toshiva',1,-2,2,'1','','2010-03-07',3,12,'1','1','dsdsds','120.0000','140.0000','180.0000',NULL,'240.0000','5600000000113','foto11.jpg','0'),(12,18,'notbook canon a-1345','computador portatil canon ',15,4,5,'computador portatil  ',4,-12,3,'1','','2010-03-07',3,1,'1','1','','124.0000','126.0000','137.0000',NULL,'167.0000','8400000000123','foto12.jpg','0'),(13,19,'escritorio notebook ','escritorio para notebook acero y madera',15,5,6,'escritorio',1,2,1,'1','','2010-03-08',3,1,'1','0','fgfgfg','234.0000','257.0000','567.0000',NULL,'456.0000','8400000000130','foto13.jpg','0'),(14,18,'arturo','xcxccxxcz',15,4,0,'xczxczczx',4,12,2,'0','a','2010-05-13',1,1,'0','','ASDASDASD','0.0000','0.0000','0.0000',NULL,'0.0000','8400000000147','foto14.jpg','0');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artpro`
--

DROP TABLE IF EXISTS `artpro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artpro` (
  `codarticulo` varchar(15) NOT NULL,
  `codfamilia` int(3) NOT NULL,
  `codproveedor` int(5) NOT NULL,
  `precio` decimal(19,4) NOT NULL,
  PRIMARY KEY  (`codarticulo`,`codfamilia`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artpro`
--

LOCK TABLES `artpro` WRITE;
/*!40000 ALTER TABLE `artpro` DISABLE KEYS */;
INSERT INTO `artpro` VALUES ('13',18,4,'234.0000');
/*!40000 ALTER TABLE `artpro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `codcliente` int(5) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `nif` varchar(13) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `codprovincia` int(2) NOT NULL default '0',
  `localidad` varchar(35) NOT NULL,
  `codformapago` int(2) NOT NULL default '0',
  `codentidad` int(2) NOT NULL default '0',
  `cuentabancaria` varchar(20) NOT NULL,
  `codpostal` varchar(5) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `movil` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `web` varchar(45) NOT NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codcliente`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Cliente Mostrador','NA','NA',0,'',0,0,'','','','','','','0'),(5,'Cliente02','02','rto. Valle Nuevo',2,'San Salvador',3,4,'789','503','3232','232','tino@gmail.com','www.rd.com','0');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cobros`
--

DROP TABLE IF EXISTS `cobros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cobros` (
  `id` int(11) NOT NULL auto_increment,
  `codfactura` int(11) NOT NULL,
  `codcliente` int(5) NOT NULL,
  `importe` decimal(19,4) NOT NULL,
  `codformapago` int(2) NOT NULL,
  `numdocumento` varchar(30) NOT NULL,
  `fechacobro` date NOT NULL default '0000-00-00',
  `observaciones` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='Cobros de facturas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cobros`
--

LOCK TABLES `cobros` WRITE;
/*!40000 ALTER TABLE `cobros` DISABLE KEYS */;
INSERT INTO `cobros` VALUES (24,122,1,'13.2200',1,'','2010-03-09',''),(25,123,1,'644.5656',1,'','2010-03-09',''),(26,127,5,'158.9200',1,'520','2010-03-23',''),(27,133,1,'158.9200',1,'','2010-06-03',''),(28,135,1,'208.8000',1,'45243481','2010-06-10',''),(29,136,1,'208.8000',1,'','2010-06-10',''),(30,131,1,'208.8000',1,'12345678','2010-06-11','');
/*!40000 ALTER TABLE `cobros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `embalajes`
--

DROP TABLE IF EXISTS `embalajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `embalajes` (
  `codembalaje` int(3) NOT NULL auto_increment,
  `nombre` varchar(30) default NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codembalaje`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Embalajes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `embalajes`
--

LOCK TABLES `embalajes` WRITE;
/*!40000 ALTER TABLE `embalajes` DISABLE KEYS */;
INSERT INTO `embalajes` VALUES (1,'Caja','0'),(2,'resma','0'),(3,'unidad','0');
/*!40000 ALTER TABLE `embalajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entidades`
--

DROP TABLE IF EXISTS `entidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entidades` (
  `codentidad` int(2) NOT NULL auto_increment,
  `nombreentidad` varchar(50) NOT NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codentidad`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='Entidades Bancarias';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entidades`
--

LOCK TABLES `entidades` WRITE;
/*!40000 ALTER TABLE `entidades` DISABLE KEYS */;
INSERT INTO `entidades` VALUES (3,'Banamex','0'),(4,'Banco Azteca','0'),(5,'Santander','0'),(6,'BBVA Bancomer','0'),(7,'HSBC','0'),(8,'ScotiaBank','1'),(9,'Banorte','0');
/*!40000 ALTER TABLE `entidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factulinea`
--

DROP TABLE IF EXISTS `factulinea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factulinea` (
  `codfactura` int(11) NOT NULL,
  `numlinea` int(4) NOT NULL auto_increment,
  `codfamilia` int(3) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cantidad` decimal(19,4) NOT NULL,
  `precio` decimal(19,4) NOT NULL,
  `importe` decimal(19,4) NOT NULL,
  `dcto` tinyint(4) NOT NULL,
  PRIMARY KEY  (`codfactura`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='lineas de facturas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factulinea`
--

LOCK TABLES `factulinea` WRITE;
/*!40000 ALTER TABLE `factulinea` DISABLE KEYS */;
INSERT INTO `factulinea` VALUES (122,1,18,'13','1.0000','12.0000','11.4000',5),(123,1,18,'13','1.0000','567.0000','555.6600',2),(124,1,18,'13','1.0000','257.0000','257.0000',0),(125,1,18,'12','1.0000','126.0000','126.0000',0),(125,2,18,'11','1.0000','140.0000','140.0000',0),(125,3,18,'11','1.0000','140.0000','119.0000',15),(126,1,18,'13','1.0000','257.0000','257.0000',0),(127,1,18,'12','1.0000','137.0000','137.0000',0),(128,1,18,'11','1.0000','180.0000','180.0000',0),(128,2,18,'12','1.0000','126.0000','126.0000',0),(128,3,18,'12','1.0000','126.0000','126.0000',0),(129,1,18,'12','1.0000','137.0000','137.0000',0),(130,1,18,'12','1.0000','200.0000','200.0000',0),(130,2,18,'12','10.0000','126.0000','945.0000',25),(131,1,18,'11','1.0000','180.0000','180.0000',0),(132,1,18,'11','1.0000','180.0000','180.0000',0),(133,1,18,'12','1.0000','137.0000','137.0000',0),(134,1,18,'12','1.0000','126.0000','126.0000',0),(135,1,18,'11','1.0000','180.0000','180.0000',0),(136,1,18,'11','1.0000','180.0000','180.0000',0),(137,1,18,'12','1.0000','126.0000','126.0000',0);
/*!40000 ALTER TABLE `factulinea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factulineap`
--

DROP TABLE IF EXISTS `factulineap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factulineap` (
  `codfactura` varchar(20) NOT NULL default '',
  `codproveedor` int(5) NOT NULL,
  `numlinea` int(4) NOT NULL auto_increment,
  `codfamilia` int(3) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cantidad` decimal(19,4) NOT NULL,
  `precio` decimal(19,4) NOT NULL,
  `importe` decimal(19,4) NOT NULL,
  `dcto` tinyint(4) NOT NULL,
  PRIMARY KEY  (`codfactura`,`codproveedor`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='lineas de facturas de proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factulineap`
--

LOCK TABLES `factulineap` WRITE;
/*!40000 ALTER TABLE `factulineap` DISABLE KEYS */;
INSERT INTO `factulineap` VALUES ('12345',4,1,18,'13','1.0000','234.0000','210.6000',10);
/*!40000 ALTER TABLE `factulineap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factulineaptmp`
--

DROP TABLE IF EXISTS `factulineaptmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factulineaptmp` (
  `codfactura` int(11) NOT NULL,
  `numlinea` int(4) NOT NULL auto_increment,
  `codfamilia` int(3) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cantidad` decimal(19,4) NOT NULL,
  `precio` decimal(19,4) NOT NULL,
  `importe` decimal(19,4) NOT NULL,
  `dcto` tinyint(4) NOT NULL,
  PRIMARY KEY  (`codfactura`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='lineas de facturas de proveedores temporal';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factulineaptmp`
--

LOCK TABLES `factulineaptmp` WRITE;
/*!40000 ALTER TABLE `factulineaptmp` DISABLE KEYS */;
/*!40000 ALTER TABLE `factulineaptmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factulineatmp`
--

DROP TABLE IF EXISTS `factulineatmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factulineatmp` (
  `codfactura` int(11) NOT NULL,
  `numlinea` int(4) NOT NULL auto_increment,
  `codfamilia` int(3) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cantidad` decimal(19,4) NOT NULL,
  `precio` decimal(19,4) NOT NULL,
  `importe` decimal(19,4) NOT NULL,
  `dcto` tinyint(4) NOT NULL,
  PRIMARY KEY  (`codfactura`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Temporal de linea de facturas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factulineatmp`
--

LOCK TABLES `factulineatmp` WRITE;
/*!40000 ALTER TABLE `factulineatmp` DISABLE KEYS */;
/*!40000 ALTER TABLE `factulineatmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturas` (
  `codfactura` int(11) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  `iva` tinyint(4) NOT NULL,
  `codcliente` int(5) NOT NULL,
  `estado` varchar(1) NOT NULL default '0',
  `totalfactura` decimal(19,4) NOT NULL,
  `fechavencimiento` date NOT NULL default '0000-00-00',
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codfactura`)
) ENGINE=MyISAM AUTO_INCREMENT=138 DEFAULT CHARSET=utf8 COMMENT='facturas de ventas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (122,'2010-03-09',16,1,'2','13.2240','0000-00-00','0'),(123,'2010-03-09',16,1,'2','644.5656','0000-00-00','0'),(124,'2010-03-10',16,1,'1','298.1200','0000-00-00','0'),(125,'2010-03-11',16,1,'1','446.6000','0000-00-00','0'),(126,'2010-03-11',16,1,'1','298.1200','0000-00-00','0'),(127,'2010-03-23',16,5,'2','158.9200','0000-00-00','0'),(128,'2010-03-23',16,1,'1','501.1200','0000-00-00','0'),(129,'2010-04-06',16,1,'1','158.9200','0000-00-00','0'),(130,'2010-04-07',16,1,'1','1328.2000','0000-00-00','0'),(131,'2010-06-02',16,1,'1','208.8000','2010-06-10','0'),(132,'2010-06-03',16,1,'1','208.8000','0000-00-00','0'),(133,'2010-06-03',16,1,'2','158.9200','0000-00-00','0'),(134,'2010-06-09',16,5,'1','146.1600','0000-00-00','0'),(135,'2010-06-10',16,1,'2','208.8000','0000-00-00','0'),(136,'2010-06-10',16,1,'2','208.8000','0000-00-00','0'),(137,'2010-06-10',19,1,'1','149.9400','0000-00-00','0');
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturasp`
--

DROP TABLE IF EXISTS `facturasp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturasp` (
  `codfactura` varchar(20) NOT NULL default '',
  `codproveedor` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `iva` tinyint(4) NOT NULL,
  `estado` varchar(1) NOT NULL default '0',
  `totalfactura` decimal(19,4) NOT NULL,
  `fechapago` date NOT NULL default '0000-00-00',
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codfactura`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='facturas de compras a proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturasp`
--

LOCK TABLES `facturasp` WRITE;
/*!40000 ALTER TABLE `facturasp` DISABLE KEYS */;
INSERT INTO `facturasp` VALUES ('12345',4,'2010-03-09',16,'1','244.2960','0000-00-00','0');
/*!40000 ALTER TABLE `facturasp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturasptmp`
--

DROP TABLE IF EXISTS `facturasptmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturasptmp` (
  `codfactura` int(11) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  PRIMARY KEY  (`codfactura`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COMMENT='temporal de facturas de proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturasptmp`
--

LOCK TABLES `facturasptmp` WRITE;
/*!40000 ALTER TABLE `facturasptmp` DISABLE KEYS */;
/*!40000 ALTER TABLE `facturasptmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturastmp`
--

DROP TABLE IF EXISTS `facturastmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturastmp` (
  `codfactura` int(11) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  PRIMARY KEY  (`codfactura`)
) ENGINE=MyISAM AUTO_INCREMENT=365 DEFAULT CHARSET=utf8 COMMENT='temporal de facturas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturastmp`
--

LOCK TABLES `facturastmp` WRITE;
/*!40000 ALTER TABLE `facturastmp` DISABLE KEYS */;
/*!40000 ALTER TABLE `facturastmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `familias`
--

DROP TABLE IF EXISTS `familias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `familias` (
  `codfamilia` int(5) NOT NULL auto_increment,
  `nombre` varchar(20) default NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codfamilia`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='familia de articulos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `familias`
--

LOCK TABLES `familias` WRITE;
/*!40000 ALTER TABLE `familias` DISABLE KEYS */;
INSERT INTO `familias` VALUES (18,'computadores','0'),(19,'escritorios','0');
/*!40000 ALTER TABLE `familias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formapago`
--

DROP TABLE IF EXISTS `formapago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formapago` (
  `codformapago` int(2) NOT NULL auto_increment,
  `nombrefp` varchar(40) NOT NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codformapago`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Forma de pago';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formapago`
--

LOCK TABLES `formapago` WRITE;
/*!40000 ALTER TABLE `formapago` DISABLE KEYS */;
INSERT INTO `formapago` VALUES (1,'Contado Efectivo','0'),(2,'Contado Cheque','0'),(3,'Cheque 30 y 60 ','0'),(4,'Tarjeta de Credito','1');
/*!40000 ALTER TABLE `formapago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impuestos`
--

DROP TABLE IF EXISTS `impuestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `impuestos` (
  `codimpuesto` int(3) NOT NULL auto_increment,
  `nombre` varchar(20) default NULL,
  `valor` decimal(19,4) NOT NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codimpuesto`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='tipos de impuestos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impuestos`
--

LOCK TABLES `impuestos` WRITE;
/*!40000 ALTER TABLE `impuestos` DISABLE KEYS */;
INSERT INTO `impuestos` VALUES (5,'IVA','15.0000','0');
/*!40000 ALTER TABLE `impuestos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `librodiario`
--

DROP TABLE IF EXISTS `librodiario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `librodiario` (
  `id` int(8) NOT NULL auto_increment,
  `fecha` date NOT NULL default '0000-00-00',
  `tipodocumento` varchar(1) NOT NULL,
  `coddocumento` varchar(20) NOT NULL,
  `codcomercial` int(5) NOT NULL,
  `codformapago` int(2) NOT NULL,
  `numpago` varchar(30) NOT NULL,
  `total` decimal(19,4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COMMENT='Movimientos diarios';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `librodiario`
--

LOCK TABLES `librodiario` WRITE;
/*!40000 ALTER TABLE `librodiario` DISABLE KEYS */;
INSERT INTO `librodiario` VALUES (33,'2010-03-09','2','122',1,1,'','13.2200'),(34,'2010-03-09','2','123',1,1,'','644.5656'),(35,'2010-03-23','2','127',5,1,'520','158.9200'),(36,'2010-06-03','2','133',1,1,'','158.9200'),(37,'2010-06-10','2','135',1,1,'45243481','208.8000'),(38,'2010-06-10','2','136',1,1,'','208.8000'),(39,'2010-06-11','2','131',1,1,'12345678','208.8000');
/*!40000 ALTER TABLE `librodiario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagos`
--

DROP TABLE IF EXISTS `pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagos` (
  `id` int(11) NOT NULL auto_increment,
  `codfactura` varchar(20) NOT NULL,
  `codproveedor` int(5) NOT NULL,
  `importe` decimal(19,4) NOT NULL,
  `codformapago` int(2) NOT NULL,
  `numdocumento` varchar(30) NOT NULL,
  `fechapago` date default '0000-00-00',
  `observaciones` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Pagos de facturas a proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos`
--

LOCK TABLES `pagos` WRITE;
/*!40000 ALTER TABLE `pagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametros`
--

DROP TABLE IF EXISTS `parametros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parametros` (
  `indice` int(1) default NULL,
  `usuario` varchar(10) default NULL,
  `clave` varchar(10) default NULL,
  `servidor` varchar(20) default NULL,
  `basedatos` varchar(20) default NULL,
  `numeracionfactura` decimal(10,0) default NULL,
  `setnumfac` decimal(1,0) default NULL,
  `fondofac` text,
  `imagenfac` varchar(30) default NULL,
  `fondoguia` text,
  `imagenguia` varchar(30) default NULL,
  `filasdetallefactura` int(2) default NULL,
  `ivaimp` decimal(2,0) default NULL,
  `nombremoneda` varchar(20) default NULL,
  `simbolomoneda` varchar(20) default NULL,
  `codigomoneda` varchar(10) default NULL,
  `nomempresa` tinytext,
  `giro` varchar(50) default NULL,
  `fonos` varchar(30) default NULL,
  `direccion` varchar(30) default NULL,
  `comuna` varchar(30) default NULL,
  `ciudadactual` varchar(30) default NULL,
  `numerofiscal` varchar(20) default NULL,
  `resolucionsii` varchar(50) default NULL,
  `rutempresa` varchar(20) default NULL,
  `giro2` varchar(50) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametros`
--

LOCK TABLES `parametros` WRITE;
/*!40000 ALTER TABLE `parametros` DISABLE KEYS */;
INSERT INTO `parametros` VALUES (1,'','','','','126','0','SI','Factura v3.jpg','SI','logo.jpg',24,'19','SOLES','s/.','S/.','PELUCHES ABASHAMME','PELUCHES Y REGALOS','051 44 94 8 363562','CC PRIMAVERA ESTAND E4','CENTRO','TRUJILLO',NULL,NULL,'R.F.C. 544544544',NULL);
/*!40000 ALTER TABLE `parametros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petroleo`
--

DROP TABLE IF EXISTS `petroleo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petroleo` (
  `mes` int(11) default NULL,
  `precio` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petroleo`
--

LOCK TABLES `petroleo` WRITE;
/*!40000 ALTER TABLE `petroleo` DISABLE KEYS */;
/*!40000 ALTER TABLE `petroleo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedores` (
  `codproveedor` int(5) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `nif` varchar(12) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `codprovincia` int(2) NOT NULL,
  `localidad` varchar(35) NOT NULL,
  `codentidad` int(2) NOT NULL,
  `cuentabancaria` varchar(20) NOT NULL,
  `codpostal` varchar(5) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `movil` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `web` varchar(45) NOT NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codproveedor`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES (4,'ernesto perez','123456','chutalpetec   234',8,'Chamullo ',4,'10-2345-9876543','2345','3456783','','asdf@hotmail.con','','0'),(5,'proveedor2','787','rto. Valle Nuevo',1,'San Salvador',3,'000123','503','2323232','23232','tino@gmail.com','dsds','0'),(6,'proveedor3','4546','sdadasd',2,'sdadas',4,'21321','503','311','21321','w','www.rd.com','0'),(7,'123','123','123',1,'123',3,'23131231','1222','23213','23312','2312','231232131','0');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincias`
--

DROP TABLE IF EXISTS `provincias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provincias` (
  `codprovincia` int(2) NOT NULL auto_increment,
  `nombreprovincia` varchar(40) NOT NULL,
  PRIMARY KEY  (`codprovincia`)
) ENGINE=MyISAM AUTO_INCREMENT=16406 DEFAULT CHARSET=utf8 COMMENT='Provincias';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincias`
--

LOCK TABLES `provincias` WRITE;
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
INSERT INTO `provincias` VALUES (1,'Aguascalientes'),(2,'Baja California Norte'),(3,'Baja California Sur'),(4,'Chihuahua'),(5,'Colima'),(6,'Campeche'),(7,'Coahuila'),(8,'Chiapas'),(9,'Distrito Federal'),(10,'Durango'),(11,'Guerrero'),(12,'Guanajuato'),(13,'Hidalgo'),(14,'Jalisco'),(15,'Michoacán'),(16,'Morelos'),(17,'Estado de México'),(18,'Nayarit'),(19,'Nuevo León'),(20,'Oaxaca'),(21,'Puebla'),(22,'Quintana Roo'),(23,'Querétaro'),(24,'Sinaloa'),(25,'San Luis Potosí'),(26,'Sonora'),(27,'Tabasco'),(28,'Tlaxcala'),(29,'Tamaulipas'),(30,'Veracruz'),(31,'Yucatán'),(32,'Zacatecas');
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicaciones`
--

DROP TABLE IF EXISTS `ubicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicaciones` (
  `codubicacion` int(3) NOT NULL auto_increment,
  `nombre` varchar(50) NOT NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codubicacion`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Ubicaciones';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicaciones`
--

LOCK TABLES `ubicaciones` WRITE;
/*!40000 ALTER TABLE `ubicaciones` DISABLE KEYS */;
INSERT INTO `ubicaciones` VALUES (1,'bodega Central','0'),(2,'bodega tumbes','0'),(3,'bodega yucatan','0'),(4,'bodega Bellavista','0');
/*!40000 ALTER TABLE `ubicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uf`
--

DROP TABLE IF EXISTS `uf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uf` (
  `Fecha` varchar(20) default NULL,
  `Valor` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uf`
--

LOCK TABLES `uf` WRITE;
/*!40000 ALTER TABLE `uf` DISABLE KEYS */;
/*!40000 ALTER TABLE `uf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(20) NOT NULL auto_increment,
  `full_name` varchar(200) character set latin1 collate latin1_general_ci NOT NULL default '',
  `user_name` varchar(200) character set latin1 collate latin1_general_ci NOT NULL default '',
  `user_pwd` varchar(200) character set latin1 collate latin1_general_ci NOT NULL default '',
  `user_email` varchar(200) character set latin1 collate latin1_general_ci NOT NULL default '',
  `activation_code` int(10) NOT NULL default '0',
  `joined` date NOT NULL default '0000-00-00',
  `country` varchar(100) character set latin1 collate latin1_general_ci NOT NULL default '',
  `user_activated` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendedores`
--

DROP TABLE IF EXISTS `vendedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendedores` (
  `codvendedor` int(5) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `nif` varchar(12) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `codprovincia` int(2) NOT NULL default '0',
  `localidad` varchar(35) NOT NULL,
  `codpostal` varchar(5) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `movil` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `borrado` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`codvendedor`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendedores`
--

LOCK TABLES `vendedores` WRITE;
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-06-18 15:23:15
