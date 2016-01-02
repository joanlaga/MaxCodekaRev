-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: maxcodeka
-- ------------------------------------------------------
-- Server version	5.1.73

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
  `codalbaran` int(11) NOT NULL DEFAULT '0',
  `numlinea` int(4) NOT NULL AUTO_INCREMENT,
  `codfamilia` int(3) DEFAULT NULL,
  `codigo` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `cantidad` decimal(19,2) NOT NULL DEFAULT '0.00',
  `precio` decimal(19,2) NOT NULL DEFAULT '0.00',
  `importe` decimal(19,2) NOT NULL DEFAULT '0.00',
  `dcto` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codalbaran`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albalinea`
--

LOCK TABLES `albalinea` WRITE;
/*!40000 ALTER TABLE `albalinea` DISABLE KEYS */;
INSERT INTO `albalinea` VALUES (2,1,61,'49','1.00','60.00','60.00',0),(3,2,61,'83','1.00','3.00','3.00',0),(3,1,61,'49','1.00','60.00','60.00',0),(4,1,61,'49','1.00','60.00','60.00',0),(5,1,61,'83','1.00','3.00','3.00',0);
/*!40000 ALTER TABLE `albalinea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albalineap`
--

DROP TABLE IF EXISTS `albalineap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albalineap` (
  `codalbaran` varchar(20) NOT NULL DEFAULT '0',
  `codproveedor` int(5) NOT NULL DEFAULT '0',
  `numlinea` int(4) NOT NULL AUTO_INCREMENT,
  `codfamilia` int(3) DEFAULT NULL,
  `codigo` varchar(15) DEFAULT NULL,
  `cantidad` decimal(10,2) NOT NULL DEFAULT '0.00',
  `precio` decimal(19,2) NOT NULL DEFAULT '0.00',
  `importe` decimal(19,2) NOT NULL DEFAULT '0.00',
  `dcto` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codalbaran`,`codproveedor`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albalineap`
--

LOCK TABLES `albalineap` WRITE;
/*!40000 ALTER TABLE `albalineap` DISABLE KEYS */;
INSERT INTO `albalineap` VALUES ('1110',13,1,61,'83','1.00','2.00','2.00',0),('1110',13,2,61,'83','1.00','2.00','2.00',0),('11595',13,1,61,'83','1.00','2.00','2.00',0);
/*!40000 ALTER TABLE `albalineap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albalineaptmp`
--

DROP TABLE IF EXISTS `albalineaptmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albalineaptmp` (
  `codalbaran` int(11) NOT NULL DEFAULT '0',
  `numlinea` int(4) NOT NULL AUTO_INCREMENT,
  `codfamilia` int(3) DEFAULT NULL,
  `codigo` varchar(15) DEFAULT NULL,
  `cantidad` decimal(19,2) NOT NULL DEFAULT '0.00',
  `precio` decimal(19,2) NOT NULL DEFAULT '0.00',
  `importe` decimal(19,2) NOT NULL DEFAULT '0.00',
  `dcto` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codalbaran`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albalineaptmp`
--

LOCK TABLES `albalineaptmp` WRITE;
/*!40000 ALTER TABLE `albalineaptmp` DISABLE KEYS */;
INSERT INTO `albalineaptmp` VALUES (1,1,61,'83','1.00','4.00','4.00',0),(2,1,61,'83','1.00','2.00','2.00',0),(2,2,61,'83','1.00','2.00','2.00',0),(3,1,61,'83','1.00','2.00','2.00',0);
/*!40000 ALTER TABLE `albalineaptmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albalineatmp`
--

DROP TABLE IF EXISTS `albalineatmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albalineatmp` (
  `codalbaran` int(11) NOT NULL DEFAULT '0',
  `numlinea` int(4) NOT NULL AUTO_INCREMENT,
  `codfamilia` int(3) DEFAULT NULL,
  `codigo` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `cantidad` decimal(19,2) NOT NULL DEFAULT '0.00',
  `precio` decimal(19,2) NOT NULL DEFAULT '0.00',
  `importe` decimal(19,2) NOT NULL DEFAULT '0.00',
  `dcto` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codalbaran`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albalineatmp`
--

LOCK TABLES `albalineatmp` WRITE;
/*!40000 ALTER TABLE `albalineatmp` DISABLE KEYS */;
INSERT INTO `albalineatmp` VALUES (1,1,61,'49','1.00','60.00','60.00',0),(2,1,61,'49','1.00','60.00','60.00',0),(2,2,61,'83','1.00','3.00','3.00',0),(3,1,61,'49','1.00','60.00','60.00',0),(4,1,61,'49','1.00','60.00','60.00',0),(5,1,61,'49','1.00','60.00','60.00',0),(5,2,61,'83','1.00','3.00','3.00',0),(6,1,61,'83','1.00','3.00','3.00',0);
/*!40000 ALTER TABLE `albalineatmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albaranes`
--

DROP TABLE IF EXISTS `albaranes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albaranes` (
  `codalbaran` int(11) NOT NULL AUTO_INCREMENT,
  `codfactura` int(11) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `iva` tinyint(4) NOT NULL DEFAULT '0',
  `codcliente` int(5) DEFAULT '0',
  `estado` varchar(1) CHARACTER SET utf8 DEFAULT '1',
  `totalalbaran` decimal(19,2) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codalbaran`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albaranes`
--

LOCK TABLES `albaranes` WRITE;
/*!40000 ALTER TABLE `albaranes` DISABLE KEYS */;
INSERT INTO `albaranes` VALUES (2,2062,'2011-03-06',19,18,'2','71.40','0'),(3,2060,'2014-10-27',19,20,'2','74.97','0'),(4,2061,'2014-10-27',19,16,'2','71.40','0'),(5,0,'2014-10-27',19,23,'1','3.57','0');
/*!40000 ALTER TABLE `albaranes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albaranesp`
--

DROP TABLE IF EXISTS `albaranesp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albaranesp` (
  `codalbaran` varchar(20) NOT NULL DEFAULT '0',
  `codproveedor` int(5) NOT NULL DEFAULT '0',
  `codfactura` varchar(20) DEFAULT NULL,
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `iva` tinyint(4) NOT NULL DEFAULT '0',
  `estado` varchar(1) DEFAULT '1',
  `totalalbaran` decimal(19,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`codalbaran`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albaranesp`
--

LOCK TABLES `albaranesp` WRITE;
/*!40000 ALTER TABLE `albaranesp` DISABLE KEYS */;
INSERT INTO `albaranesp` VALUES ('1110',13,'0','2014-10-27',19,'1','4.76'),('11595',13,'0','2014-10-27',19,'1','2.38');
/*!40000 ALTER TABLE `albaranesp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albaranesptmp`
--

DROP TABLE IF EXISTS `albaranesptmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albaranesptmp` (
  `codalbaran` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`codalbaran`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Temporal de albaranes de proveedores para controlar acceso s';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albaranesptmp`
--

LOCK TABLES `albaranesptmp` WRITE;
/*!40000 ALTER TABLE `albaranesptmp` DISABLE KEYS */;
INSERT INTO `albaranesptmp` VALUES (1,'2014-10-27'),(2,'2014-10-27'),(3,'2014-10-27');
/*!40000 ALTER TABLE `albaranesptmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albaranestmp`
--

DROP TABLE IF EXISTS `albaranestmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albaranestmp` (
  `codalbaran` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`codalbaran`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Temporal de albaranes para controlar acceso simultaneo';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albaranestmp`
--

LOCK TABLES `albaranestmp` WRITE;
/*!40000 ALTER TABLE `albaranestmp` DISABLE KEYS */;
INSERT INTO `albaranestmp` VALUES (1,'2014-10-27'),(2,'2014-10-27'),(3,'2014-10-27'),(4,'2014-10-27'),(5,'2014-10-27'),(6,'2014-10-27');
/*!40000 ALTER TABLE `albaranestmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articulos` (
  `codarticulo` int(10) NOT NULL AUTO_INCREMENT,
  `codfamilia` int(5) NOT NULL,
  `referencia` varchar(35) NOT NULL,
  `descripcion` varchar(35) NOT NULL,
  `impuesto` float NOT NULL,
  `codproveedor1` int(5) NOT NULL DEFAULT '1',
  `codproveedor2` int(5) NOT NULL,
  `descripcion_corta` varchar(35) NOT NULL,
  `codubicacion` int(3) NOT NULL,
  `stock` int(10) NOT NULL,
  `stock_minimo` int(8) NOT NULL,
  `aviso_minimo` varchar(1) NOT NULL DEFAULT '0',
  `datos_producto` varchar(200) NOT NULL,
  `fecha_alta` date NOT NULL DEFAULT '0000-00-00',
  `codembalaje` int(3) NOT NULL,
  `unidades_caja` int(8) NOT NULL,
  `precio_ticket` varchar(1) NOT NULL DEFAULT '0',
  `modificar_ticket` varchar(1) NOT NULL DEFAULT '0',
  `observaciones` text NOT NULL,
  `precio_compra` decimal(19,2) DEFAULT NULL,
  `precio_almacen` decimal(19,2) DEFAULT NULL,
  `precio_tienda` decimal(19,2) DEFAULT NULL,
  `precio_pvp` decimal(19,2) DEFAULT NULL,
  `precio_iva` decimal(19,2) DEFAULT NULL,
  `codigobarras` varchar(15) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codarticulo`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COMMENT='Articulos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES (11,18,'21023525674','Computador portatil bell',19,4,5,'computador bell',1,-38,2,'1','','2010-03-07',3,12,'1','1','','120.00','140.00','180.00',NULL,'240.00','5600000000113','foto11.jpg','1'),(12,18,'21078945631','Computador portatil Cannon ',19,4,5,'computador portatil   cannon',4,-52,3,'1','','2010-03-07',3,1,'1','1','','124.00','126.00','137.00',NULL,'167.00','8400000000123','foto12.jpg','1'),(13,19,'21089696314','Escritorio para notebook ',19,5,6,'escritorio',1,-13,1,'1','','2010-03-08',3,1,'1','0','','234.00','257.00','567.00',NULL,'456.00','8400000000130','foto13.jpg','1'),(34,25,'21078952345','Tornillos caja computadores',19,7,0,'TORNILLOS  1 \"',5,25,18,'1','Tornillos de 1\"','2010-10-15',3,1,'0','','Tornillos de hierro dulce','0.54','0.65','0.70',NULL,'1.00','8400000000345','foto34.jpg','1'),(39,66,'21096314789','COOLER PARA CASE DE 12cm',19,15,0,'COOLER PARA CASE DE 12 cm',3,39,1,'1','COOLER EVER GREEN FAN EVERCOOL DE 12cm','2010-11-06',7,1,'1','0','Modelo Nro EGF-12','14.32','17.04','19.50',NULL,'24.99','8400000001119','foto39.jpg','1'),(40,66,'21096385248','Cooler MARTECH de 5cm',19,12,0,'COOLER  MARTECH de 5cm',5,-28,1,'0','Cooler para case MARTECH de 5cm color negro','2010-11-06',5,1,'1','0','Hecho en China','4.00','4.76','5.52',NULL,'7.14','8400000000406','foto40.jpg','1'),(41,66,'20412896324','Personal computer Air Cond',19,12,0,'AIRE ACONDICIONADO PARA PC',5,213,1,'1','Color: Azul con plateado / Dimensi','2010-11-06',7,1,'1','0','S','18.27','24.80','25.00',NULL,'21.74','8400000000879','foto41.jpg','0'),(42,40,'21012385296','TARJETA DE RED INALAMBRICA TP-LINK ',19,16,0,'NIC INALAMBR TP-LINK TL-WN551',5,-15195,1,'1','Para Slot PCI / Rango 4x / seguridad WEB/WPA/WPA2/ f','2010-11-06',1,1,'1','0','CON ANTENA OMNIDIRECCIONAL DESMONTABLE.','36.54','49.80','50.00',NULL,'43.49','8400000000420','foto42.jpg','1'),(49,61,'21036985215','CARTUCHO DE TINTA CANON CL-31 TRICO',19,12,0,'CARTUCHO CANON CL-31 TRICOLOR',5,866,1,'1','PARA IMPRESORAS SERIE PIXMA: IP1800/IP1900/IP2500/IP2600/MP140/MP190/MP210/MP220/MP470/MX300 & MX310','2010-11-12',1,1,'1','0','CARTUCHO TRICOLOR DE 3ml x 3ml = 9ml','47.13','60.00','64.50',NULL,'56.08','013803078411','foto49.jpg','0'),(50,69,'21078996326','BATERIA PARA PC - SONY CR2032',19,13,0,'BATERIA  SONY CR2032',5,-201,1,'1','PARA COMPUTADORAS Y OTROS DISPOSITIVOS QUE UTILICEN ESTE MODELO DE BATERIAS','2010-11-12',1,100,'1','0','producto muy vrsatil','85.00','83.00','115.00',NULL,'101.15','56000324562','foto50.jpg','1'),(83,61,'75022223804','Disco Compacto sin grabar',19,17,16,'CD grabable',5,548,20,'1','','2010-12-18',1,500,'1','0','No','2.00','3.00','5.00',NULL,'8.20','7502222380494','foto83.jpg','0'),(89,72,'12324578789','Balanza',19,0,0,'Balanza Iris 2 Kg.',5,10,7,'1','vvmbnmvmn','2010-10-22',8,0,'0','0','hjjhkbkjk','123.00','89.00','789.00',NULL,'789631.00','5600000000892','foto89.jpg','0'),(90,72,'45636985274','Balanza americana 3 kilos',19,12,0,'Balanza Huneus 3 kilos',5,-12,1,'1','','2010-10-06',8,12,'1','0','','123.00','123.00','123.00','563.00','2233.00','5600000000908','foto90.jpg','0'),(91,73,'1112','gjhgjg',19,13,13,'jjljljlj',5,10,1,'1','kjlkjljkfgfghfghfg','2014-10-25',1,12,'1','0','bnmbmnbmbmnbmbmn','10.00','11.00','13.00',NULL,'0.00','5600000000915','foto91.jpg','0');
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
  `precio` decimal(19,2) NOT NULL,
  PRIMARY KEY (`codarticulo`,`codfamilia`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artpro`
--

LOCK TABLES `artpro` WRITE;
/*!40000 ALTER TABLE `artpro` DISABLE KEYS */;
INSERT INTO `artpro` VALUES ('13',18,4,'234.00'),('16',18,7,'114802.00'),('16',18,8,'12352.00'),('34',25,7,'0.54'),('42',40,12,'36.54'),('39',66,15,'14.32'),('42',40,17,'36.54'),('82',63,17,'95.00'),('50',69,20,'85.00'),('40',66,12,'5.00'),('83',61,13,'2.00'),('83',61,17,'4.00'),('',0,13,'0.00');
/*!40000 ALTER TABLE `artpro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authteam`
--

DROP TABLE IF EXISTS `authteam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authteam` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `teamname` varchar(25) NOT NULL DEFAULT '',
  `teamlead` varchar(25) NOT NULL DEFAULT '',
  `status` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `teamname` (`teamname`,`teamlead`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authteam`
--

LOCK TABLES `authteam` WRITE;
/*!40000 ALTER TABLE `authteam` DISABLE KEYS */;
INSERT INTO `authteam` VALUES (1,'Ungrouped','sa','active'),(2,'Admin','sa','active'),(3,'Temporary','sa','active'),(7,'Group 1','sa','active'),(8,'Group 2','test','active'),(9,'Group 3','admin','active');
/*!40000 ALTER TABLE `authteam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authuser`
--

DROP TABLE IF EXISTS `authuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `team` varchar(25) NOT NULL DEFAULT '',
  `level` int(4) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT '',
  `lastlogin` datetime DEFAULT NULL,
  `logincount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authuser`
--

LOCK TABLES `authuser` WRITE;
/*!40000 ALTER TABLE `authuser` DISABLE KEYS */;
INSERT INTO `authuser` VALUES (1,'sa','9df3b01c60df20d13843841ff0d4482c','Admin',1,'active','2010-06-26 11:29:28',12),(2,'admin','9df3b01c60df20d13843841ff0d4482c','Admin',1,'active','2010-06-22 18:30:24',21),(3,'test','9df3b01c60df20d13843841ff0d4482c','Temporary',999,'active','2003-04-03 00:00:34',0),(11,'G1-0001','9df3b01c60df20d13843841ff0d4482c','Group 1',5,'active','2003-04-04 10:59:02',0),(12,'G1-0002','9df3b01c60df20d13843841ff0d4482c','Group 1',2,'active','0000-00-00 00:00:00',0),(13,'G2-0001','9df3b01c60df20d13843841ff0d4482c','Group 2',5,'active','2003-04-03 00:46:20',0),(14,'G2-0002','9df3b01c60df20d13843841ff0d4482c','Group 2',6,'active','2003-04-03 00:48:04',0),(15,'G2-0003','9df3b01c60df20d13843841ff0d4482c','Group 2',3,'active','2003-04-04 10:31:16',0),(16,'G3-0001','9df3b01c60df20d13843841ff0d4482c','Group 3',10,'active','0000-00-00 00:00:00',0),(17,'G3-0002','9df3b01c60df20d13843841ff0d4482c','Group 3',4,'active','0000-00-00 00:00:00',0),(20,'arturo','34facb611d63077b415e7e4ae92845a2','Group 2',4,'active','0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `authuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `codcliente` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `nif` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `codprovincia` int(2) NOT NULL DEFAULT '0',
  `localidad` varchar(35) NOT NULL,
  `codformapago` int(2) NOT NULL DEFAULT '0',
  `codentidad` int(2) NOT NULL DEFAULT '0',
  `cuentabancaria` varchar(20) NOT NULL,
  `codpostal` varchar(5) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `movil` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `web` varchar(45) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codcliente`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COMMENT='Clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Cliente Mostrador','NA','NA',0,'',0,0,'','','','','','','1'),(6,'Compueasy','HEJS821008 KQ4','Avda, Juan Aldama n',16,'Tlaquiltenango',1,4,'','62983','3421574','','compueasy@mail.com','','1'),(16,'CORPORACION TECNICA INTERNACIONAL DE SER','20479950602','CAL. 7 DE ENERO NRO. 1241 ',9,'Xochilmilco',3,15,'352-851-78','074','896132','','','','0'),(17,'INSTITUTO ALMA MATER SAC','20438264095','CAL. ALFONSO UGARTE NRO. 670',9,'Xochilmilco',2,15,'632-897-85','0745','227312','','','','0'),(18,'PERALES HUANCARUNA S.A.C.','20131495006','CAR. PANAMERICANA NORTE NRO. 3.5',9,'Milpa Alto',3,15,'963-125-56','074','459126','','','','0'),(21,'TANK\'S 105 SERVICIOS GENERALES S.R.L.','20482006729','CAL. LOS ALUMNOS NRO. 198',9,'Benito Juarez',3,12,'897-859-96','0743','876965','','','','0'),(19,'TUME GONZALES WALTER ENRIQUE','10805858953','CAL. ANTONIO RAYMONDI NRO. 466 INT. B URB. EL',0,'CHICLAYO',3,0,'','','','','','','1'),(20,'APILADORA MARIA DEL PILAR S.C.R.L','20479653063','CAR. PANAMERICANA NORTE NRO. K783 ',9,'Xochilmilco',3,15,'321-963-42','074','941365','','','','0'),(22,'TAI LOY S.A.','20100049181','CAL. ALFREDO LAPOINT NRO. 8704',9,'Benito Juarez',3,15,'785-785-89','0743','986452','','','','0'),(23,'CORPORACION EDUCATIVA CESAR Y DAVID CORN','20480510497','AV. MANUEL MARIA IZAGA NRO. 866',9,'Benito Juarez',3,15,'961-752-96','','153957','','','','0'),(24,'REPUESTOS ZAMORA S.R.LTDA.','20171776482','AV. LUIS GONZALES NRO. 1272 ',9,'Benito Juarez',3,12,'987-362-78','9874','796452','','','','0'),(25,'JERPIMED S.A.C.','20535558966','AV. JAVIER PRADO ESTE NRO. 499 ',9,'Xochilmilco',3,13,'965-758-23','015','986785','','','','0'),(26,'MUNICIPALIDAD DISTRITAL DE XOCHIMILCO','20162368703','CAL. TUPAC AMARU NRO. 0531 ',9,'Xochimilco',2,0,'563-458-74','074','789632','','','','0'),(27,'GONZALES YAIPEN GABRIEL','10166530925','CAL. VICENTE DE LA VEGA NRO. 936',9,'Benito Juarez',3,16,'748-965-78','074','987632','','','','0'),(28,'COMPUTROCK E.I.R.L.','20480632410','CAL. ALFREDO LAPOINT NRO. 945 CENTRO',11,'Xochilmilco',2,13,'961-789-23','074','789325','','','','0'),(29,'RODRIGUEZ DE QUIROZ, JULIA MERCEDES','10166743074','CAL. VALDIVIEZO MZA. C LOTE. 02 ',9,'Benito Juarez',3,12,'987-965-78','0741','320727','','','','0'),(30,'LORENROSE SRL','20480799110','CAL. ALFREDO LAPOINT NRO. 1210',9,'Xochimilco',3,16,'654-852-89','7896','984563','','','','0'),(31,'CONSTRUCCION Y ADMINISTRACION S.A.','20109565017','AV. JAVIER PRADO ESTE NRO. 4109 ',9,'Benito Juarez',3,12,'782-782-89','01','611393 ','','admin@rivanet.com.ar','','0'),(32,'GLOBETECH CIX S.R.L.','20487455637','CAL. LAPOINT NRO. 654 ',9,'Milpa Alto',3,13,'965-785-89','074','437086','9560131','','','0'),(33,'DEIBBIE JAVIER YARLAQU','45489110451','FEDERICO VILLARREAL 733',9,'Xochilmilco',2,12,'879-632-45','0741','789632','978741036','deibi16_1_89@hotmail.com','','0'),(34,'karla Garcia Casta','GCK681221k52','Rio Caletiano 226',19,'Monterrey',5,0,'','64859','854656231','894535412','karla@me.com','','1'),(38,'asd ','','',0,'',0,0,'','','','','','','1'),(39,'aldico','20480632410','Norte 10 No. 97',13,'Benito Juarez',0,0,'4564648798','55080','456456','464','admin@rivanet.com.ar','Norte 10 No. 97','0'),(40,'CONSTRUCCION Y ADMINISTRACION S.A. fd','20480632410','Norte 10 No. 97',0,'Ecatepec de Morelos',0,0,'4564648798','074','456456','454545','joanlaga@hotmail.com','Norte 10 No. 97','0'),(41,'Almastur gfg','20480632410','AV. JAVIER PRADO ESTE NRO. 4109 ',0,'Benito Juarez',6,13,'456456','55080','45646465','798464','admin@rivanet.com.ar','Norte 10 No. 97','0'),(42,'CONSTRUCCION Y ADMINISTRACION S.A.','20109565017','AV. JAVIER PRADO ESTE NRO. 4109 ',2,'456456',3,13,'782-782-89','55080','45646465','798464','admin@rivanet.com.ar','Norte 10 No. 97','0');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cobradores`
--

DROP TABLE IF EXISTS `cobradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cobradores` (
  `codcobrador` int(2) NOT NULL AUTO_INCREMENT,
  `nombrecobrador` varchar(40) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codcobrador`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Cobradores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cobradores`
--

LOCK TABLES `cobradores` WRITE;
/*!40000 ALTER TABLE `cobradores` DISABLE KEYS */;
INSERT INTO `cobradores` VALUES (1,'ernesto  perez ','1'),(2,'juan gacitua','0'),(4,'irene perez','0'),(5,'xccxcxc','1'),(6,'jbbbb','1'),(7,'vbxfzf','1'),(8,'asd','1'),(9,'4447887','1'),(10,'555','1');
/*!40000 ALTER TABLE `cobradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cobros`
--

DROP TABLE IF EXISTS `cobros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cobros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codfactura` int(11) NOT NULL,
  `codcliente` int(5) NOT NULL,
  `importe` decimal(19,2) NOT NULL,
  `codformapago` int(2) NOT NULL,
  `numdocumento` varchar(30) NOT NULL,
  `fechacobro` date NOT NULL DEFAULT '0000-00-00',
  `observaciones` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='Cobros de facturas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cobros`
--

LOCK TABLES `cobros` WRITE;
/*!40000 ALTER TABLE `cobros` DISABLE KEYS */;
INSERT INTO `cobros` VALUES (1,1,1,'192.42',1,'7896321456','2011-02-22',''),(2,3,1,'20.00',3,'1234','2011-02-28','primer pago'),(3,3,1,'35.68',7,'3456','2011-02-22','cheq'),(4,5,1,'82.47',6,'7896325621','2011-02-23',''),(5,10,16,'153.51',3,'','2011-02-23',''),(6,13,1,'59.50',1,'','2011-02-23',''),(7,4,18,'5.00',3,'','2011-02-25',''),(8,2007,17,'7.10',7,'896321','2011-02-26',''),(9,2000,1,'190.16',3,'33','2011-03-05',''),(10,2020,1,'29.75',1,'','2011-03-06',''),(11,2021,16,'20.00',3,'123','2011-03-06',''),(12,2021,16,'51.40',3,'456','2011-03-06',''),(13,2022,22,'55.10',3,'345','2011-03-06','cheque banco machala'),(14,2018,16,'50.00',3,'','2011-03-06','1er abono'),(15,2024,1,'76.76',3,'','2011-03-07',''),(16,2025,1,'59.50',3,'','2011-03-07',''),(17,2028,1,'938.91',1,'456321','2011-03-07',''),(18,2029,1,'146.37',6,'12364','2011-03-07',''),(19,2031,1,'29.75',3,'','2011-03-09',''),(20,2038,16,'938.91',1,'','2011-03-30',''),(21,2036,16,'26.00',7,'','2014-10-27','');
/*!40000 ALTER TABLE `cobros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (4,'codekamx@gmail.com');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `embalajes`
--

DROP TABLE IF EXISTS `embalajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `embalajes` (
  `codembalaje` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codembalaje`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Embalajes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `embalajes`
--

LOCK TABLES `embalajes` WRITE;
/*!40000 ALTER TABLE `embalajes` DISABLE KEYS */;
INSERT INTO `embalajes` VALUES (1,'Caja','0'),(2,'resma','0'),(3,'unidad','0'),(4,'No aplica','0'),(7,'Blister','0'),(8,'kilos','0'),(9,'m2','0'),(10,'5555','1');
/*!40000 ALTER TABLE `embalajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entidades`
--

DROP TABLE IF EXISTS `entidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entidades` (
  `codentidad` int(2) NOT NULL AUTO_INCREMENT,
  `nombreentidad` varchar(50) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codentidad`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='Entidades Bancarias';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entidades`
--

LOCK TABLES `entidades` WRITE;
/*!40000 ALTER TABLE `entidades` DISABLE KEYS */;
INSERT INTO `entidades` VALUES (12,'BANCO DE COMERCIO','0'),(13,'BANCO DE CREDITO ','0'),(15,'BANCO FINANCIERO','0'),(16,'BANCO INTERAMERICANO DE FINANZAS','0'),(17,'BANCO RIPLEY S.A.','0'),(19,'BBVA BANCO CONTINENTAL','0'),(22,'INTERBANK','0'),(23,'MIBANCO, BANCO DE LA MICROEMPRESA','0'),(25,'CITI','0'),(26,'asd','1'),(27,'456456456','0');
/*!40000 ALTER TABLE `entidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventcal`
--

DROP TABLE IF EXISTS `eventcal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventcal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `eventDate` date DEFAULT NULL,
  `eventTitle` varchar(100) DEFAULT NULL,
  `eventContent` text,
  `borrado` varchar(1) CHARACTER SET cp850 NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventcal`
--

LOCK TABLES `eventcal` WRITE;
/*!40000 ALTER TABLE `eventcal` DISABLE KEYS */;
INSERT INTO `eventcal` VALUES (1,'2010-09-28','ivas','pagar','1'),(2,'2010-09-30','Cumplea?o Maria Ines','Nos reuniremos a almorzar con la jefatura en el Casino Royal. Cancela la Empresa','1'),(3,'2010-10-05','despedida soltero','nos vamos pa la costa','1'),(4,'2010-10-14','fiesta','en rancagua','0'),(5,'2010-10-08','buenas noticias','seran aumentados los sueldos bases en un 25 % para todos aquellos que logren su titulo de Master en informatica antes del 30 de Diciembre de este a?o.','1'),(6,'2010-12-09','test','test de evento','1'),(7,'2010-12-31','xasas','asasas','1'),(8,'2010-12-30','carlos','no hay mas','1'),(9,'2010-12-27','cotiz<acxnes pendientes','ganancia $ 110.00 cada cotizacion','1');
/*!40000 ALTER TABLE `eventcal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `eventID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `eventDate` date DEFAULT NULL,
  `eventContent` longtext,
  `langCode` varchar(20) DEFAULT 'en',
  PRIMARY KEY (`eventID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'2010-09-23','this is my first ','en'),(2,'2010-09-30','this is my second event','en'),(3,'2010-09-30','&#2351;&#2361; &#2350;&#2375;&#2352;&#2366; &#2346;&#2361;&#2354;&#2366; &#2360;&#2306;&#2342;&#2375;&#2358; &#2361;&#2376;','hi'),(4,'2010-09-29','This is new event','en'),(5,'2005-03-29','This is new event','en'),(6,'2005-03-29','This is new event','en'),(7,'2005-04-15','This is new event','en'),(8,'2005-04-15','This is new event','en'),(9,'2005-04-17','This is updated third event','en');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factulinea`
--

DROP TABLE IF EXISTS `factulinea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factulinea` (
  `codfactura` int(11) NOT NULL,
  `numlinea` int(4) NOT NULL AUTO_INCREMENT,
  `codfamilia` int(3) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cantidad` decimal(19,2) NOT NULL,
  `precio` decimal(19,2) NOT NULL,
  `importe` decimal(19,2) NOT NULL,
  `dcto` tinyint(4) NOT NULL,
  PRIMARY KEY (`codfactura`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='lineas de facturas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factulinea`
--

LOCK TABLES `factulinea` WRITE;
/*!40000 ALTER TABLE `factulinea` DISABLE KEYS */;
INSERT INTO `factulinea` VALUES (1,1,40,'42','1.00','50.00','49.00',2),(1,2,69,'50','1.00','115.00','112.70',2),(2,1,61,'49','1.00','60.00','52.80',12),(2,2,66,'41','1.00','24.80','24.80',0),(3,1,40,'42','4.00','12.00','48.00',0),(4,1,61,'83','3.00','3.00','9.00',0),(5,1,61,'83','1.00','5.00','4.80',4),(5,2,61,'49','1.00','64.50','64.50',0),(6,1,66,'41','1.00','25.00','25.00',0),(7,1,61,'83','1.00','5.00','5.00',0),(8,1,40,'42','1.00','49.80','49.80',0),(9,1,40,'42','1.00','50.00','50.00',0),(10,1,61,'49','2.00','64.50','129.00',0),(11,1,40,'42','1.00','50.00','50.00',0),(11,2,61,'49','1.00','64.50','64.50',0),(12,1,69,'50','1.00','115.00','115.00',0),(13,1,40,'42','1.00','50.00','50.00',0),(14,1,40,'42','1.00','50.00','50.00',0),(14,2,69,'50','1.00','115.00','115.00',0),(15,1,40,'42','1.00','49.80','49.80',0),(16,1,69,'50','1.00','83.00','83.00',0),(2000,1,40,'42','1.00','49.80','49.80',0),(2001,1,61,'83','1.00','3.00','3.00',0),(2000,2,61,'49','1.00','60.00','60.00',0),(2002,1,61,'49','1.00','60.00','60.00',0),(2003,3,69,'50','1.00','83.00','83.00',0),(2003,2,61,'83','1.00','3.00','3.00',0),(2003,1,40,'42','1.00','49.80','49.80',0),(2004,1,40,'42','1.00','90.00','90.00',0),(2004,2,66,'41','1.00','44.00','44.00',0),(2000,3,40,'42','1.00','50.00','50.00',0),(2007,2,61,'83','10.00','3.00','30.00',0),(2007,1,61,'49','1.00','60.00','60.00',0),(2008,1,61,'49','1.00','64.50','64.50',0),(2009,1,61,'83','10.00','5.00','50.00',0),(2010,1,61,'83','1.00','5.00','4.90',2),(2011,1,61,'83','1.00','5.00','5.00',0),(2012,1,61,'83','1.00','5.00','5.00',0),(2013,1,61,'49','1.00','60.00','60.00',0),(2014,1,61,'49','10.00','60.00','600.00',0),(2015,1,66,'41','1.00','24.80','24.80',0),(2015,2,61,'49','20.00','60.00','1200.00',0),(2017,1,66,'41','1.00','24.80','24.80',0),(2018,1,61,'49','1.00','60.00','60.00',0),(2020,1,66,'41','1.00','25.00','25.00',0),(2021,1,61,'49','1.00','60.00','60.00',0),(2022,1,66,'41','10.00','5.00','47.50',5),(2023,1,72,'90','15.00','123.00','1845.00',0),(2024,1,61,'49','1.00','64.50','64.50',0),(2025,1,61,'49','1.00','64.50','64.50',0),(2025,2,61,'83','1.00','5.00','5.00',0),(2026,1,61,'49','1.00','60.00','90.00',0),(2026,2,61,'49','1.00','60.00','78.00',0),(2027,1,72,'90','1.00','123.00','123.00',0),(2028,1,72,'89','1.00','789.00','789.00',0),(2029,1,72,'90','1.00','123.00','123.00',0),(2031,1,61,'83','5.00','5.00','25.00',0),(2032,1,61,'49','4.00','64.50','258.00',0),(2033,1,61,'83','10.00','5.00','50.00',0),(2034,1,61,'49','2.00','64.50','129.00',0),(2035,1,61,'83','6.00','5.00','30.00',0),(2036,1,72,'90','1.00','123.00','123.00',0),(2038,1,72,'89','1.00','789.00','789.00',0),(2039,1,66,'41','3.00','25.00','75.00',0),(2040,1,66,'41','3.00','25.00','75.00',0),(2041,1,66,'41','3.00','25.00','75.00',0),(2042,1,61,'83','2.00','5.00','10.00',0),(2043,1,72,'90','1.00','123.00','123.00',0),(2044,1,61,'83','1.00','5.00','4.75',5),(2045,1,72,'90','1.00','123.00','98.40',20),(2046,1,61,'49','1.00','64.50','64.50',0),(2047,1,66,'41','1.00','25.00','25.00',0),(2047,2,72,'90','2.00','123.00','246.00',0),(2050,1,66,'41','1.00','25.00','25.00',0),(2050,2,72,'90','1.00','123.00','123.00',0),(2050,3,61,'49','1.00','64.50','64.50',0),(2051,1,61,'83','1.00','5.00','5.00',0),(2051,2,61,'83','1.00','5.00','5.00',0),(2052,5,73,'91','1.00','13.00','13.00',0),(2052,4,73,'91','1.00','13.00','13.00',0),(2052,3,61,'83','1.00','5.00','5.00',0),(2052,2,66,'41','1.00','25.00','25.00',0),(2052,1,66,'41','1.00','25.00','25.00',0),(2053,1,66,'41','1.00','25.00','25.00',0),(2053,2,72,'90','1.00','123.00','123.00',0),(2053,3,61,'49','1.00','64.50','64.50',0),(2054,1,72,'89','1.00','789.00','789.00',0),(2056,2,61,'83','1.00','5.00','5.00',0),(2056,1,72,'89','1.00','789.00','789.00',0),(2057,1,61,'83','1.00','5.00','5.00',0),(2057,2,72,'90','1.00','123.00','123.00',0),(2058,1,66,'41','1.00','24.80','24.80',0),(2058,2,61,'83','1.00','3.00','3.00',0),(2059,1,66,'41','1.00','24.80','24.80',0),(2059,2,61,'83','1.00','3.00','3.00',0),(2059,3,61,'49','1.00','60.00','60.00',0),(2060,1,61,'49','1.00','60.00','60.00',0),(2060,2,61,'83','1.00','3.00','3.00',0),(2061,1,61,'49','1.00','60.00','60.00',0),(2062,1,61,'49','1.00','60.00','60.00',0);
/*!40000 ALTER TABLE `factulinea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factulineap`
--

DROP TABLE IF EXISTS `factulineap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factulineap` (
  `codfactura` varchar(20) NOT NULL DEFAULT '',
  `codproveedor` int(5) NOT NULL,
  `numlinea` int(4) NOT NULL AUTO_INCREMENT,
  `codfamilia` int(3) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cantidad` decimal(19,2) NOT NULL,
  `precio` decimal(19,2) NOT NULL,
  `importe` decimal(19,2) NOT NULL,
  `dcto` tinyint(4) NOT NULL,
  PRIMARY KEY (`codfactura`,`codproveedor`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='lineas de facturas de proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factulineap`
--

LOCK TABLES `factulineap` WRITE;
/*!40000 ALTER TABLE `factulineap` DISABLE KEYS */;
INSERT INTO `factulineap` VALUES ('0002',17,1,61,'83','1.00','2.00','2.00',0),('0002',17,2,61,'83','4.00','4.00','16.00',0),('0003',17,1,61,'83','1.00','4.00','4.00',0),('0004',17,1,61,'83','2.00','4.00','8.00',0),('11101',13,1,0,'','0.00','0.00','0.00',0),('11101',13,2,0,'','0.00','0.00','0.00',0),('11101',13,3,61,'83','1.00','2.00','2.00',0),('11101',13,4,61,'83','1.00','2.00','2.00',0),('11101',13,5,61,'83','1.00','2.00','2.00',0);
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
  `numlinea` int(4) NOT NULL AUTO_INCREMENT,
  `codfamilia` int(3) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cantidad` decimal(19,2) NOT NULL,
  `precio` decimal(19,2) NOT NULL,
  `importe` decimal(19,2) NOT NULL,
  `dcto` tinyint(4) NOT NULL,
  PRIMARY KEY (`codfactura`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='lineas de facturas de proveedores temporal';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factulineaptmp`
--

LOCK TABLES `factulineaptmp` WRITE;
/*!40000 ALTER TABLE `factulineaptmp` DISABLE KEYS */;
INSERT INTO `factulineaptmp` VALUES (1,1,0,'','0.00','0.00','0.00',0),(1,2,0,'','0.00','0.00','0.00',0),(1,3,61,'83','1.00','2.00','2.00',0),(1,4,61,'83','1.00','2.00','2.00',0),(1,5,61,'83','1.00','2.00','2.00',0),(2,1,0,'','0.00','0.00','0.00',0),(2,2,0,'','0.00','0.00','0.00',0),(2,3,61,'83','1.00','2.00','2.00',0),(2,4,61,'83','1.00','2.00','2.00',0),(2,5,61,'83','1.00','2.00','2.00',0),(3,1,61,'83','2.00','4.00','8.00',0),(4,1,61,'83','1.00','4.00','4.00',0);
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
  `numlinea` int(4) NOT NULL AUTO_INCREMENT,
  `codfamilia` int(3) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cantidad` decimal(19,2) NOT NULL,
  `precio` decimal(19,2) NOT NULL,
  `importe` decimal(19,2) NOT NULL,
  `dcto` tinyint(4) NOT NULL,
  PRIMARY KEY (`codfactura`,`numlinea`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Temporal de linea de facturas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factulineatmp`
--

LOCK TABLES `factulineatmp` WRITE;
/*!40000 ALTER TABLE `factulineatmp` DISABLE KEYS */;
INSERT INTO `factulineatmp` VALUES (2230,1,72,'90','1.00','123.00','98.40',20),(2232,1,66,'41','1.00','25.00','25.00',0),(2236,1,66,'41','1.00','25.00','25.00',0),(2238,1,61,'83','1.00','5.00','5.00',0),(2239,1,72,'89','1.00','789.00','789.00',0),(2240,1,66,'41','1.00','25.00','25.00',0),(2241,1,66,'41','1.00','25.00','25.00',0),(2242,1,72,'90','1.00','123.00','98.40',20),(2243,1,72,'89','1.00','789.00','789.00',0),(2244,1,72,'89','1.00','789.00','789.00',0),(2247,1,66,'41','1.00','25.00','25.00',0),(2247,2,61,'83','1.00','5.00','5.00',0),(2248,1,72,'89','1.00','789.00','789.00',0),(2249,1,72,'89','1.00','789.00','789.00',0),(2250,1,72,'89','1.00','789.00','789.00',0),(2251,1,66,'41','1.00','25.00','25.00',0),(2251,2,72,'90','1.00','123.00','123.00',0),(2251,3,61,'49','1.00','64.50','64.50',0),(2255,1,72,'89','1.00','789.00','789.00',0),(2256,1,72,'89','1.00','789.00','789.00',0),(2257,1,66,'41','1.00','25.00','25.00',0),(2258,1,66,'41','1.00','25.00','25.00',0),(2267,1,66,'41','1.00','25.00','25.00',0),(2270,1,72,'89','1.00','789.00','789.00',0),(2271,1,66,'41','1.00','25.00','25.00',0),(2272,1,66,'41','1.00','25.00','25.00',0),(2272,2,66,'41','1.00','25.00','25.00',0),(2272,3,61,'83','1.00','5.00','5.00',0),(2267,2,61,'83','1.00','5.00','5.00',0),(2267,3,61,'49','1.00','64.50','64.50',0),(2267,4,61,'49','1.00','64.50','64.50',0),(2273,1,66,'41','1.00','25.00','25.00',0),(2274,1,66,'41','1.00','25.00','25.00',0),(2274,2,61,'83','1.00','5.00','5.00',0),(2274,3,61,'49','1.00','64.50','64.50',0),(2275,1,61,'49','1.00','64.50','64.50',0),(2275,2,66,'41','1.00','25.00','25.00',0),(2272,4,73,'91','1.00','13.00','13.00',0),(2272,5,73,'91','1.00','13.00','13.00',0),(2276,1,61,'83','1.00','5.00','5.00',0),(2276,2,61,'83','1.00','5.00','5.00',0),(2277,1,66,'41','1.00','25.00','25.00',0),(2277,2,72,'90','1.00','123.00','123.00',0),(2277,3,61,'49','1.00','64.50','64.50',0),(2280,1,72,'89','1.00','789.00','789.00',0),(2282,1,72,'89','1.00','789.00','789.00',0),(2282,2,61,'83','1.00','5.00','5.00',0),(2285,1,61,'83','1.00','5.00','5.00',0),(2285,2,72,'90','1.00','123.00','123.00',0),(2288,1,66,'41','1.00','25.00','25.00',0),(2288,2,66,'41','1.00','25.00','25.00',0),(2288,3,61,'83','1.00','5.00','5.00',0),(2288,4,73,'91','1.00','13.00','13.00',0),(2288,5,73,'91','1.00','13.00','13.00',0),(2289,1,72,'89','1.00','789.00','789.00',0),(2291,1,72,'89','1.00','789.00','789.00',0),(2291,2,61,'83','1.00','5.00','5.00',0),(2292,1,72,'89','1.00','789.00','789.00',0),(2292,2,61,'83','1.00','5.00','5.00',0),(2293,1,66,'41','1.00','25.00','25.00',0),(2293,2,66,'41','1.00','25.00','25.00',0),(2293,3,61,'83','1.00','5.00','5.00',0),(2293,4,73,'91','1.00','13.00','13.00',0),(2293,5,73,'91','1.00','13.00','13.00',0),(2295,1,72,'89','1.00','789.00','789.00',0),(2296,1,72,'89','1.00','789.00','789.00',0),(2296,2,61,'83','1.00','5.00','5.00',0),(2297,1,66,'41','1.00','24.80','24.80',0),(2297,2,61,'83','1.00','3.00','3.00',0),(2298,1,66,'41','1.00','24.80','24.80',0),(2298,2,61,'83','1.00','3.00','3.00',0),(2298,3,61,'49','1.00','60.00','60.00',0);
/*!40000 ALTER TABLE `factulineatmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturas` (
  `codfactura` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `iva` tinyint(4) NOT NULL,
  `codcliente` int(5) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '0',
  `totalfactura` decimal(19,2) NOT NULL,
  `fechavencimiento` date NOT NULL DEFAULT '0000-00-00',
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  `remito` varchar(20) NOT NULL,
  `numfactura` varchar(20) NOT NULL,
  PRIMARY KEY (`codfactura`)
) ENGINE=MyISAM AUTO_INCREMENT=2063 DEFAULT CHARSET=utf8 COMMENT='facturas de ventas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (1,'2011-02-22',19,1,'2','192.42','0000-00-00','1','',''),(2,'2011-02-22',19,27,'1','92.34','0000-00-00','0','',''),(3,'2011-02-22',19,1,'1','55.68','0000-00-00','0','',''),(4,'2011-02-22',19,18,'1','10.44','0000-00-00','0','',''),(5,'2011-02-23',19,1,'2','82.47','0000-00-00','0','',''),(6,'2011-02-23',19,1,'1','29.75','0000-00-00','0','',''),(7,'2011-02-23',19,1,'1','5.95','0000-00-00','0','',''),(8,'2011-02-23',19,16,'1','59.26','0000-00-00','0','',''),(9,'2011-02-23',19,1,'1','59.50','0000-00-00','0','',''),(10,'2011-02-23',19,16,'2','153.51','0000-00-00','0','',''),(11,'2011-02-23',19,1,'1','136.26','0000-00-00','0','',''),(12,'2011-02-23',19,1,'1','136.85','0000-00-00','0','',''),(13,'2011-02-23',19,1,'2','59.50','0000-00-00','0','',''),(14,'2011-02-23',19,1,'1','196.35','0000-00-00','0','',''),(15,'2011-02-23',16,16,'1','57.77','0000-00-00','0','',''),(16,'2011-02-23',16,17,'1','96.28','0000-00-00','0','',''),(2000,'2011-02-23',19,16,'2','89.25','0000-00-00','0','',''),(2001,'2011-02-23',19,18,'1','3.57','0000-00-00','0','',''),(2002,'2011-02-23',19,27,'1','71.40','0000-00-00','0','',''),(2003,'2011-02-24',19,26,'1','161.60','0000-00-00','0','',''),(2004,'2011-02-24',16,1,'1','155.44','0000-00-00','0','',''),(2005,'2011-02-24',16,1,'1','0.00','0000-00-00','0','',''),(2006,'2011-02-25',19,1,'1','0.00','0000-00-00','0','',''),(2007,'2011-02-26',19,17,'1','107.10','0000-00-00','0','',''),(2008,'2011-03-01',19,1,'1','76.76','0000-00-00','0','',''),(2009,'2011-03-01',19,1,'1','59.50','0000-00-00','0','',''),(2010,'2011-03-01',19,1,'1','5.83','0000-00-00','0','',''),(2011,'2011-03-01',19,1,'1','5.95','0000-00-00','0','',''),(2012,'2011-03-01',12,16,'1','5.60','2011-03-02','0','',''),(2013,'2011-03-03',19,16,'1','71.40','0000-00-00','0','',''),(2014,'2011-03-04',16,29,'1','696.00','0000-00-00','0','',''),(2015,'2011-03-04',16,29,'2','1420.77','0000-00-00','0','',''),(2016,'2011-03-05',19,1,'1','0.00','0000-00-00','0','',''),(2017,'2011-03-05',19,22,'1','29.51','0000-00-00','0','',''),(2018,'2011-03-05',19,16,'1','71.40','0000-00-00','0','',''),(2019,'2011-03-05',19,27,'1','0.00','0000-00-00','0','',''),(2020,'2011-03-06',19,1,'2','29.75','0000-00-00','0','',''),(2021,'2011-03-06',19,16,'2','71.40','0000-00-00','0','',''),(2022,'2011-03-06',16,22,'2','55.10','0000-00-00','0','',''),(2023,'2011-03-06',19,16,'1','2195.55','0000-00-00','0','',''),(2024,'2011-03-07',19,1,'2','76.76','0000-00-00','0','',''),(2025,'2011-03-07',0,1,'2','69.50','0000-00-00','0','',''),(2026,'2011-03-07',19,32,'1','199.92','0000-00-00','0','',''),(2027,'2011-03-07',19,1,'1','146.37','0000-00-00','0','',''),(2028,'2011-03-07',19,1,'2','938.91','0000-00-00','0','',''),(2029,'2011-03-07',19,1,'2','146.37','0000-00-00','0','',''),(2030,'2011-03-09',19,1,'1','0.00','0000-00-00','0','',''),(2031,'2011-03-09',19,1,'2','29.75','0000-00-00','0','',''),(2032,'2011-03-29',19,22,'1','307.02','0000-00-00','0','',''),(2033,'2011-03-29',19,20,'1','59.50','0000-00-00','0','',''),(2034,'2011-03-30',21,27,'1','156.09','0000-00-00','0','',''),(2035,'2011-03-30',19,20,'1','35.70','0000-00-00','0','',''),(2036,'2011-03-30',19,16,'1','146.37','2014-10-30','0','',''),(2037,'2011-03-30',19,1,'1','0.00','0000-00-00','0','',''),(2038,'2011-03-30',19,16,'2','938.91','0000-00-00','0','',''),(2039,'2011-03-30',19,16,'1','89.25','0000-00-00','0','',''),(2040,'2011-03-30',19,1,'1','89.25','0000-00-00','0','',''),(2041,'2011-03-30',19,1,'1','89.25','0000-00-00','0','',''),(2042,'2011-03-30',19,16,'1','11.90','0000-00-00','0','',''),(2043,'2011-03-30',19,16,'1','146.37','0000-00-00','0','',''),(2044,'2011-04-04',19,1,'1','5.65','0000-00-00','0','',''),(2045,'2011-04-04',19,1,'1','117.10','0000-00-00','0','',''),(2046,'2011-04-04',19,1,'1','76.76','0000-00-00','0','4444','3333'),(2047,'2011-04-04',19,28,'1','322.49','0000-00-00','0','',''),(2048,'2014-10-26',19,1,'1','0.00','0000-00-00','0','',''),(2049,'2014-10-26',19,1,'1','0.00','0000-00-00','0','1001',''),(2050,'2014-10-26',19,28,'1','252.88','0000-00-00','0','',''),(2051,'2014-10-26',19,1,'1','11.90','0000-00-00','0','',''),(2052,'2014-10-26',19,31,'1','96.39','0000-00-00','0','<?=$remito?>','<?=$numfactura?>'),(2053,'2014-10-26',19,1,'1','252.88','0000-00-00','1','',''),(2054,'2014-10-26',19,1,'1','938.91','0000-00-00','1','',''),(2055,'2014-10-26',19,1,'1','0.00','0000-00-00','1','',''),(2056,'2014-10-26',19,1,'1','944.86','0000-00-00','1','',''),(2057,'2014-10-26',19,1,'1','152.32','0000-00-00','0','',''),(2058,'2014-10-26',19,22,'1','33.08','0000-00-00','0','',''),(2059,'2014-10-26',19,22,'1','104.48','0000-00-00','1','',''),(2060,'2014-10-27',19,20,'1','74.97','0000-00-00','0','',''),(2061,'2014-10-27',19,16,'1','71.40','0000-00-00','0','',''),(2062,'2011-03-06',19,18,'1','71.40','0000-00-00','0','','');
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturasp`
--

DROP TABLE IF EXISTS `facturasp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturasp` (
  `codfactura` varchar(20) NOT NULL DEFAULT '',
  `codproveedor` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `iva` tinyint(4) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '0',
  `totalfactura` decimal(19,2) NOT NULL,
  `fechapago` date NOT NULL DEFAULT '0000-00-00',
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codfactura`,`codproveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='facturas de compras a proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturasp`
--

LOCK TABLES `facturasp` WRITE;
/*!40000 ALTER TABLE `facturasp` DISABLE KEYS */;
INSERT INTO `facturasp` VALUES ('0002',17,'2011-02-26',19,'2','21.42','0000-00-00','0'),('0003',17,'2011-02-26',19,'1','4.76','0000-00-00','0'),('0004',17,'2011-02-26',19,'1','9.52','2011-02-25','0'),('11101',13,'2014-10-27',19,'1','7.14','0000-00-00','0');
/*!40000 ALTER TABLE `facturasp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturasptmp`
--

DROP TABLE IF EXISTS `facturasptmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturasptmp` (
  `codfactura` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codfactura`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='temporal de facturas de proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturasptmp`
--

LOCK TABLES `facturasptmp` WRITE;
/*!40000 ALTER TABLE `facturasptmp` DISABLE KEYS */;
INSERT INTO `facturasptmp` VALUES (1,'2014-10-27'),(2,'2014-10-27'),(3,'2014-10-27'),(4,'2014-10-27');
/*!40000 ALTER TABLE `facturasptmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturastmp`
--

DROP TABLE IF EXISTS `facturastmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturastmp` (
  `codfactura` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codfactura`)
) ENGINE=MyISAM AUTO_INCREMENT=2299 DEFAULT CHARSET=utf8 COMMENT='temporal de facturas a clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturastmp`
--

LOCK TABLES `facturastmp` WRITE;
/*!40000 ALTER TABLE `facturastmp` DISABLE KEYS */;
INSERT INTO `facturastmp` VALUES (2229,'2014-10-25'),(2230,'2014-10-25'),(2231,'2014-10-25'),(2232,'2014-10-25'),(2233,'2014-10-25'),(2234,'2014-10-25'),(2235,'2014-10-25'),(2236,'2014-10-25'),(2237,'2014-10-25'),(2238,'2014-10-25'),(2239,'2014-10-25'),(2240,'2014-10-25'),(2241,'2014-10-25'),(2242,'2014-10-25'),(2243,'2014-10-26'),(2244,'2014-10-26'),(2245,'2014-10-26'),(2246,'2014-10-26'),(2247,'2014-10-26'),(2248,'2014-10-26'),(2249,'2014-10-26'),(2250,'2014-10-26'),(2251,'2014-10-26'),(2252,'2014-10-26'),(2253,'2014-10-26'),(2254,'2014-10-26'),(2255,'2014-10-26'),(2256,'2014-10-26'),(2257,'2014-10-26'),(2258,'2014-10-26'),(2259,'2014-10-26'),(2260,'2014-10-26'),(2261,'2014-10-26'),(2262,'2014-10-26'),(2263,'2014-10-26'),(2264,'2014-10-26'),(2265,'2014-10-26'),(2266,'2014-10-26'),(2267,'2014-10-26'),(2268,'2014-10-26'),(2269,'2014-10-26'),(2270,'2014-10-26'),(2271,'2014-10-26'),(2272,'2014-10-26'),(2273,'2014-10-26'),(2274,'2014-10-26'),(2275,'2014-10-26'),(2276,'2014-10-26'),(2277,'2014-10-26'),(2278,'2014-10-26'),(2279,'2014-10-26'),(2280,'2014-10-26'),(2281,'2014-10-26'),(2282,'2014-10-26'),(2283,'2014-10-26'),(2284,'2014-10-26'),(2285,'2014-10-26'),(2286,'2014-10-26'),(2287,'2014-10-26'),(2288,'2014-10-26'),(2289,'2014-10-26'),(2290,'2014-10-26'),(2291,'2014-10-26'),(2292,'2014-10-26'),(2293,'2014-10-26'),(2294,'2014-10-26'),(2295,'2014-10-26'),(2296,'2014-10-26'),(2297,'2014-10-26'),(2298,'2014-10-26');
/*!40000 ALTER TABLE `facturastmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `familias`
--

DROP TABLE IF EXISTS `familias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `familias` (
  `codfamilia` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) DEFAULT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codfamilia`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COMMENT='familia de articulos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `familias`
--

LOCK TABLES `familias` WRITE;
/*!40000 ALTER TABLE `familias` DISABLE KEYS */;
INSERT INTO `familias` VALUES (28,'ACCESORIOS DE NOTEBO','1'),(29,'ACCESORIOS PARA CASE','1'),(30,'CABLES DIVERSOS','1'),(31,'CARD READERS / WRITER','0'),(32,'CASES (GABINETES)','0'),(33,'COOLERS PARA MICROPROCESADORES','1'),(34,'DISCOS DUROS EXTERNO','0'),(35,'DISCOS DUROS INTERNO','0'),(36,'DISP. DE ALMACENAMIENTO','1'),(37,'DISP. DE IMAGENES','1'),(38,'DISP. OPTICOS DE L/E','1'),(39,'DISP. PARA REDES CAB','1'),(40,'DISP. PARA REDES WIF','0'),(41,'ESTABILIZADORES','0'),(42,'FUENTES DE PODER','0'),(43,'IMPRESORAS','0'),(44,'MAINBOARDS','0'),(45,'MEMORIAS','0'),(46,'MEMORIAS DIGITALES,U','0'),(47,'MICROPROCESADORES','1'),(48,'MICROPROCESADORES','0'),(49,'MONITORES','0'),(50,'MOUSE, TRACKBALL, PU','0'),(51,'NOTEBOOKS, LAPTOPS','0'),(52,'OTRAS TARJETAS CONTR','0'),(53,'PARLANTES / SUBWOOFER','0'),(54,'PCS DE MARCA','0'),(55,'PCS ENSAMBLADAS','0'),(56,'PRINT SERVER','0'),(57,'PRODUCTOS PARA VOIP','0'),(58,'REPUESTOS DE NOTEBOOK','0'),(59,'SERVIDORES','1'),(60,'SOFTWARE','0'),(61,'SUMINISTROS','0'),(62,'SUPERMULTI DVD & BLU','0'),(63,'TARJETAS DE VIDEO','0'),(64,'TECLADOS','0'),(65,'UPS Y DISP. DE PROTE','1'),(66,'COOLERS PARA CASES','0'),(67,'OTROS DISPOSITIVOS','0'),(69,'BATERIAS','1'),(70,'Aromatizantes','1'),(71,'RESISTENCIAS','0'),(72,'BASCULAS','0'),(73,'servicio','0'),(74,'aaaaa','1'),(75,'llll','0'),(76,'sdsdsd','0');
/*!40000 ALTER TABLE `familias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formapago`
--

DROP TABLE IF EXISTS `formapago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formapago` (
  `codformapago` int(2) NOT NULL AUTO_INCREMENT,
  `nombrefp` varchar(40) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codformapago`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Forma de pago';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formapago`
--

LOCK TABLES `formapago` WRITE;
/*!40000 ALTER TABLE `formapago` DISABLE KEYS */;
INSERT INTO `formapago` VALUES (1,'Tarjeta de cr','0'),(2,'Cr','0'),(3,'Contado/Efectivo','0'),(6,'Cheque al dia','0'),(7,'Cheque 30 dias','0'),(8,'Nota de Credito','0'),(9,'asd','1'),(10,'4564654','1');
/*!40000 ALTER TABLE `formapago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impuestos`
--

DROP TABLE IF EXISTS `impuestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `impuestos` (
  `codimpuesto` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `valor` decimal(19,1) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codimpuesto`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='tipos de impuestos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impuestos`
--

LOCK TABLES `impuestos` WRITE;
/*!40000 ALTER TABLE `impuestos` DISABLE KEYS */;
INSERT INTO `impuestos` VALUES (5,'IVA','19.0','0'),(7,'Exento','0.0','0'),(13,'asd','12.0','1'),(14,'ggg','3.0','0');
/*!40000 ALTER TABLE `impuestos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `librodiario`
--

DROP TABLE IF EXISTS `librodiario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `librodiario` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `tipodocumento` varchar(1) NOT NULL,
  `coddocumento` varchar(20) NOT NULL,
  `codcomercial` int(5) NOT NULL,
  `codformapago` int(2) NOT NULL,
  `numpago` varchar(30) NOT NULL,
  `total` decimal(19,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='Movimientos diarios';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `librodiario`
--

LOCK TABLES `librodiario` WRITE;
/*!40000 ALTER TABLE `librodiario` DISABLE KEYS */;
INSERT INTO `librodiario` VALUES (1,'2011-02-22','2','1',1,1,'7896321456','192.42'),(2,'2011-02-28','2','3',1,3,'1234','20.00'),(3,'2011-02-22','2','3',1,7,'3456','35.68'),(4,'2011-02-10','1','2342',13,2,'34567','256.00'),(5,'2011-02-23','2','5',1,6,'7896325621','82.47'),(6,'2011-02-23','2','10',16,3,'','153.51'),(7,'2011-02-23','2','13',1,1,'','59.50'),(8,'2011-02-25','2','4',18,3,'','5.00'),(9,'2011-02-26','1','0002',17,3,'2','22.00'),(10,'2011-02-26','2','2007',17,7,'896321','7.10'),(11,'0000-00-00','2','2007',0,0,'','-7.10'),(12,'0000-00-00','2','2007',0,0,'','-7.10'),(13,'2011-02-26','1','0004',17,7,'896321','0.52'),(14,'0000-00-00','1','0002',0,0,'','-22.00'),(15,'0000-00-00','1','0002',0,0,'','-22.00'),(16,'0000-00-00','1','0002',0,0,'','-22.00'),(17,'2011-02-26','1','0002',17,6,'nc/1234','0.58'),(18,'2011-02-26','1','0002',17,6,'NC/2345','-1.16'),(19,'2011-02-26','1','0002',17,6,'','0.00'),(20,'0000-00-00','1','0002',0,0,'','0.00'),(21,'2011-02-26','1','0004',17,8,'NC/7862','8.00'),(22,'2011-03-05','2','2000',1,3,'33','190.16'),(23,'2011-03-06','2','2020',1,1,'','29.75'),(24,'2011-03-06','2','2021',16,3,'123','20.00'),(25,'2011-03-06','2','2021',16,3,'456','51.40'),(26,'2011-03-06','2','2022',22,3,'345','55.10'),(27,'2011-03-06','2','2018',16,3,'','50.00'),(28,'2011-03-07','2','2024',1,3,'','76.76'),(29,'2011-03-07','2','2025',1,3,'','59.50'),(30,'2011-03-07','2','2028',1,1,'456321','938.91'),(31,'2011-03-07','2','2029',1,6,'12364','146.37'),(32,'2011-03-09','2','2031',1,3,'','29.75'),(33,'2011-03-30','2','2038',16,1,'','938.91'),(34,'2014-10-27','2','2036',16,7,'','26.00'),(35,'2014-10-27','1','0004',17,2,'101','12.00');
/*!40000 ALTER TABLE `librodiario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagos`
--

DROP TABLE IF EXISTS `pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codfactura` varchar(20) NOT NULL,
  `codproveedor` int(5) NOT NULL,
  `importe` decimal(19,2) NOT NULL,
  `codformapago` int(2) NOT NULL,
  `numdocumento` varchar(30) NOT NULL,
  `fechapago` date DEFAULT '0000-00-00',
  `observaciones` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Pagos de facturas a proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos`
--

LOCK TABLES `pagos` WRITE;
/*!40000 ALTER TABLE `pagos` DISABLE KEYS */;
INSERT INTO `pagos` VALUES (1,'2342',13,'256.00',2,'34567','2011-02-10','ret'),(2,'0002',17,'22.00',3,'2','2011-02-26','pago 22 pesos'),(3,'0004',17,'0.52',7,'896321','2011-02-26',''),(4,'0002',17,'0.58',6,'nc/1234','2011-02-26','seentrega nota de credito'),(5,'0002',17,'-1.16',6,'NC/2345','2011-02-26','se entrega nota credito 5643'),(6,'0002',17,'0.00',6,'','2011-02-26',''),(7,'0004',17,'8.00',8,'NC/7862','2011-02-26','nota credito 7851'),(8,'0004',17,'12.00',2,'101','2014-10-27','hjhuiyuiyui');
/*!40000 ALTER TABLE `pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametros`
--

DROP TABLE IF EXISTS `parametros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parametros` (
  `indice` int(1) NOT NULL DEFAULT '0',
  `usuario` varchar(10) DEFAULT NULL,
  `clave` varchar(10) DEFAULT NULL,
  `servidor` varchar(20) DEFAULT NULL,
  `basedatos` varchar(20) DEFAULT NULL,
  `numeracionfactura` decimal(10,0) DEFAULT NULL,
  `setnumfac` decimal(1,0) DEFAULT NULL,
  `fondofac` text,
  `imagenfac` varchar(30) DEFAULT NULL,
  `fondoguia` text,
  `imagenguia` varchar(30) DEFAULT NULL,
  `filasdetallefactura` int(2) DEFAULT NULL,
  `ivaimp` decimal(2,0) DEFAULT NULL,
  `nombremoneda` varchar(20) DEFAULT NULL,
  `simbolomoneda` varchar(20) DEFAULT NULL,
  `codigomoneda` varchar(10) DEFAULT NULL,
  `nomempresa` tinytext,
  `giro` varchar(50) DEFAULT NULL,
  `fonos` varchar(30) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `comuna` varchar(30) DEFAULT NULL,
  `ciudadactual` varchar(30) DEFAULT NULL,
  `numerofiscal` varchar(20) DEFAULT NULL,
  `resolucionsii` varchar(50) DEFAULT NULL,
  `rutempresa` varchar(20) DEFAULT NULL,
  `giro2` varchar(50) DEFAULT NULL,
  `logoempresa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`indice`),
  KEY `indice` (`indice`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametros`
--

LOCK TABLES `parametros` WRITE;
/*!40000 ALTER TABLE `parametros` DISABLE KEYS */;
INSERT INTO `parametros` VALUES (1,'','','','','20010','1','SI','Factura v3.jpg','SI','logo.jpg',20,'19','pesos','$','$','ROBOTEC','Equipos de Computo','051- 44 94 8 363562','CC PRIMAVERA ESTAND E4','CENTRO','XOCHIMILCO','12345','789654','R.F.C. 544544544','Telecomunicaciones','');
/*!40000 ALTER TABLE `parametros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petroleo`
--

DROP TABLE IF EXISTS `petroleo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petroleo` (
  `mes` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
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
  `codproveedor` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
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
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codproveedor`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='Proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES (12,'GRUPO DELTRON S.A.','20212331377','AV. SALAVERRY 580 URB. PATAZCA',9,'Benito Juarez',12,'193-0076989-1','074','591061','','','WWW.deltron.com.mx','0'),(13,'GRUPO IGARASHI S.R.L.','20252011910','PJ. ARTEMIA WOYKE Nro 135 INT. 202',9,'Milpa Alto',22,'123-4569-89','074','231994','','','www.grupoigarashi.com','0'),(14,'HALION INTERNACIONAL S.A.','20505970323','C. ALFREDO LAPOINT Nro 149 INT. B.',9,'Benito Juarez',15,'123-897-96','074','456963','','','www.delux.com.mx','0'),(15,'IMPULSO INFORMATICO S.A.','20422561537 ','CAL. ALFREDO LAPOINT NRO. 337 ',9,'Xochilmilco',19,'789-1236-78','074','421388 ','','','www.impulso.com.mx','0'),(16,'MAXIMA INTERNACIONAL S.A','20505970323','Av. Siesquicentenario 528 Urb. Santa Victoria',9,'Benito Juarez',12,'456-785-52','074','207010','','','www.maximainternacional.com.mx','0'),(17,'PCLINK S.A.C','20469317855','Calle Tacna nro 623-625',17,'Xochimilco',12,'782-456-23','074','270531','','','www.pclink.com.mx','0'),(18,'TECHDATA S.A.C.','20267163228','C. MANUEL ARTEAGA N? 520 Urb. Los Parques',0,'CHICLAYO',13,'','074','270550','','','www.techdata.com.pe','1'),(20,'Prueba','01','01',2,'01',14,'01','01','114','10','','','1'),(21,'JUAN SOTO GARAY','456321456','Chantupec   123',2,'chantupec',15,'7896321','78963','78-96321','','juan@gmail.com','','0'),(22,'asd','','',0,'',0,'','','','','','','1'),(23,'DESCAFECOL SA cd','4564','4565',0,'45656',0,'546456','45623','4546565465','546546456','45453','456456','0'),(24,'CONSTRUCCION Y ADMINISTRACION S.A.','20480632410','AV. JAVIER PRADO ESTE NRO. 4109 ',2,'Ecatepec de Morelos',16,'4564648798','01','456456','454545','admin@rivanet.com.ar','Norte 10 No. 97','0');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincias`
--

DROP TABLE IF EXISTS `provincias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provincias` (
  `codprovincia` int(2) NOT NULL AUTO_INCREMENT,
  `nombreprovincia` varchar(40) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codprovincia`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COMMENT='Provincias';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincias`
--

LOCK TABLES `provincias` WRITE;
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
INSERT INTO `provincias` VALUES (1,'Aguascalientes','0'),(2,'Baja California Norte','0'),(3,'Baja California Sur','0'),(4,'Chihuahua','0'),(5,'Colima','0'),(6,'Campeche','0'),(7,'Coahuila','0'),(8,'Chiapas','0'),(9,'Distrito Federal','0'),(10,'Durango','0'),(11,'Guerrero','0'),(12,'Guanajuato','0'),(13,'Hidalgo','0'),(14,'Jalisco','0'),(15,'Michoac','0'),(16,'Morelos','0'),(17,'Estado de M','0'),(18,'Nayarit','0'),(19,'Nuevo Le','0'),(20,'Oaxaca','0'),(21,'Puebla','0'),(22,'Quintana Roo','0'),(23,'Quer','0'),(24,'Sinaloa','0'),(25,'San Luis Potos','0'),(26,'Sonora','0'),(27,'Tabasco','0'),(28,'Tlaxcala','0'),(29,'Tamaulipas','0'),(30,'Veracruz','0'),(31,'Yucat','0'),(32,'Zacatecas','0'),(37,'asd','1'),(38,'444','0'),(39,'132','0'),(40,'999','0');
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabbackup`
--

DROP TABLE IF EXISTS `tabbackup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabbackup` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `archivo` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabbackup`
--

LOCK TABLES `tabbackup` WRITE;
/*!40000 ALTER TABLE `tabbackup` DISABLE KEYS */;
INSERT INTO `tabbackup` VALUES (1,'RP220220111755','2011-02-22','17:55:26','../copias/copia1.sql'),(2,'yioyukluilululu','2011-02-23','02:15:18','../copias/copia2.sql'),(3,'JJJ','2011-02-25','16:00:00','../copias/copia3.sql'),(4,'JAZMIN','2011-02-26','13:22:22','../copias/copia4.sql'),(5,'uuu','2011-02-26','13:23:51','../copias/copia5.sql'),(6,'111','2014-10-27','23:52:40','../copias/copia6.sql');
/*!40000 ALTER TABLE `tabbackup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicaciones`
--

DROP TABLE IF EXISTS `ubicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicaciones` (
  `codubicacion` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codubicacion`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='Ubicaciones';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicaciones`
--

LOCK TABLES `ubicaciones` WRITE;
/*!40000 ALTER TABLE `ubicaciones` DISABLE KEYS */;
INSERT INTO `ubicaciones` VALUES (3,'PV Robotec - Juan Cuglievan','0'),(5,'PV Robotec - Alfredo Lapoint','0'),(12,'a-1-1','1'),(13,'asd','1'),(14,'777','1'),(15,'123','1');
/*!40000 ALTER TABLE `ubicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uf`
--

DROP TABLE IF EXISTS `uf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uf` (
  `Fecha` varchar(20) DEFAULT NULL,
  `Valor` int(11) DEFAULT NULL
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
-- Table structure for table `useronline`
--

DROP TABLE IF EXISTS `useronline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useronline` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `timestamp` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=268 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useronline`
--

LOCK TABLES `useronline` WRITE;
/*!40000 ALTER TABLE `useronline` DISABLE KEYS */;
INSERT INTO `useronline` VALUES (267,'190.90.91.2','1299481161');
/*!40000 ALTER TABLE `useronline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_pwd` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_email` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `activation_code` int(10) NOT NULL DEFAULT '0',
  `joined` date NOT NULL DEFAULT '0000-00-00',
  `country` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_activated` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `codvendedor` int(5) NOT NULL AUTO_INCREMENT,
  `nombrevendedor` varchar(45) NOT NULL,
  `movil` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `borrado` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codvendedor`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='Clientes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendedores`
--

LOCK TABLES `vendedores` WRITE;
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` VALUES (8,'Juan Espinoza ','','','0'),(10,'Maria Espinoza','','','0'),(11,'Carlos Jorquera','','','0'),(12,'132123','','','1');
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

-- Dump completed on 2014-10-28  0:02:44
