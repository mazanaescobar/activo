-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: activo
-- ------------------------------------------------------
-- Server version	5.5.49-0+deb7u1

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
-- Temporary table structure for view `activo_fojo`
--

DROP TABLE IF EXISTS `activo_fojo`;
/*!50001 DROP VIEW IF EXISTS `activo_fojo`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `activo_fojo` (
  `infra` tinyint NOT NULL,
  `bien` tinyint NOT NULL,
  `correlativo` tinyint NOT NULL,
  `marca` tinyint NOT NULL,
  `modelo` tinyint NOT NULL,
  `encargado` tinyint NOT NULL,
  `precio` tinyint NOT NULL,
  `fecha_compra` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articulos` (
  `idarticulo` int(4) NOT NULL AUTO_INCREMENT,
  `infraestructura` int(4) NOT NULL,
  `codigo_bien` int(4) NOT NULL,
  `correlativo` varchar(4) NOT NULL,
  `nombre` text NOT NULL,
  `marca` text NOT NULL,
  `modelo` text NOT NULL,
  `encargado` int(4) NOT NULL,
  `precio` float NOT NULL,
  `fecha_compra` date DEFAULT NULL,
  PRIMARY KEY (`idarticulo`),
  KEY `infraestructura` (`infraestructura`),
  KEY `codigo_bien` (`codigo_bien`),
  KEY `encargado` (`encargado`),
  CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`infraestructura`) REFERENCES `infraestructuras` (`idinfra`),
  CONSTRAINT `articulos_ibfk_2` FOREIGN KEY (`codigo_bien`) REFERENCES `bienes` (`idbienes`),
  CONSTRAINT `articulos_ibfk_3` FOREIGN KEY (`encargado`) REFERENCES `personas` (`idpersonas`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES (12,1000,100,'0001','computadora','HP','Ommi pro 110',1,400.25,'2016-05-14'),(14,1000,100,'0002','computadora','HP','Ommi pro 110',1,400.25,'2016-05-12'),(15,1000,100,'0003','computadora','HP','Ommi pro 110',1,100000,'2016-05-04'),(18,1000,101,'0001','celular','M4','SS1600',1,100,'2016-05-18'),(19,1000,101,'0002','celular','ALCATEL ','4035A',1,100,'2016-05-10'),(20,1001,101,'0005','computadora','HP','Ommi pro 110',5,4000,'2016-05-18'),(21,1001,101,'0003','celular','M4','SS1600',5,100,'2016-05-20'),(22,1001,101,'0004','celular','SONY xpery','arc',5,200,'2016-05-10'),(23,1000,100,'0006','computadora','HP','Ommi pro 110',5,4000,'2016-05-17'),(24,1001,102,'001','tablet','sony','dm2458',6,400,'2016-05-09');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bienes`
--

DROP TABLE IF EXISTS `bienes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bienes` (
  `idbienes` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `tipo_de_bien` text NOT NULL,
  PRIMARY KEY (`idbienes`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bienes`
--

LOCK TABLES `bienes` WRITE;
/*!40000 ALTER TABLE `bienes` DISABLE KEYS */;
INSERT INTO `bienes` VALUES (100,'Computadoras','equipo informaticos'),(101,'celular','telefono'),(102,'Tablet','uso docentes'),(103,'Laptop','Equipo informÃ¡tico portÃ¡til '),(104,'CaÃ±on','Equipo informÃ¡tico '),(105,'Impresora','Equipo de oficina '),(106,'Televisor','Equipo audio visual');
/*!40000 ALTER TABLE `bienes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infraestructuras`
--

DROP TABLE IF EXISTS `infraestructuras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infraestructuras` (
  `idinfra` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `ubicacion` text NOT NULL,
  PRIMARY KEY (`idinfra`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infraestructuras`
--

LOCK TABLES `infraestructuras` WRITE;
/*!40000 ALTER TABLE `infraestructuras` DISABLE KEYS */;
INSERT INTO `infraestructuras` VALUES (1000,'A1','frente a la fotocopiadora'),(1001,'A2','Frente al parqueo norte');
/*!40000 ALTER TABLE `infraestructuras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `password` varchar(5) NOT NULL,
  `email` varchar(70) NOT NULL,
  `pasadmin` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario_email_uk` (`email`),
  UNIQUE KEY `nombre_ad` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'manuel','','manuel@gmail.com','uls'),(2,'luis','uls','luis@gmail.com',''),(3,'carlos','uls','carlos@gmail.com',''),(4,'pedro','uls','pedro@gmail.com',''),(5,'locos','uls','loco@gmail.com',''),(6,'princesa','uls','princesa@gmail.com','');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `idpersonas` int(4) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(8) NOT NULL,
  `edificio` int(4) NOT NULL,
  PRIMARY KEY (`idpersonas`),
  KEY `edificio` (`edificio`),
  CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`edificio`) REFERENCES `infraestructuras` (`idinfra`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (1,'jefe de computo','Carlos','Molina','7777777',1000),(5,'programador','Jonatan','Mejia','78888888',1000),(6,'programador','Luis','Perez','78888888',1001),(7,'TÃ©cnico ','Jony','Jony','77888888',1001);
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedores` (
  `idproveedores` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` varchar(8) NOT NULL,
  `empresa` varchar(45) NOT NULL,
  `articulo` int(4) NOT NULL,
  PRIMARY KEY (`idproveedores`),
  KEY `articulo` (`articulo`),
  CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`articulo`) REFERENCES `articulos` (`idarticulo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES (1,'pedros','martines','25252525','HP.sa',12),(2,'CARLOS','escobar','74859645','HP.sa.de.cv',15);
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `reasignaciones`
--

DROP TABLE IF EXISTS `reasignaciones`;
/*!50001 DROP VIEW IF EXISTS `reasignaciones`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `reasignaciones` (
  `idreasignado` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `marca` tinyint NOT NULL,
  `modelo` tinyint NOT NULL,
  `infra` tinyint NOT NULL,
  `correlativo` tinyint NOT NULL,
  `antiguo` tinyint NOT NULL,
  `asunto` tinyint NOT NULL,
  `nuevo` tinyint NOT NULL,
  `fecha` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `reasignado`
--

DROP TABLE IF EXISTS `reasignado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reasignado` (
  `idreasignado` int(4) NOT NULL AUTO_INCREMENT,
  `antiguo` int(4) NOT NULL,
  `nuevo` int(4) NOT NULL,
  `articulo` int(4) NOT NULL,
  `asunto` text NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idreasignado`),
  KEY `antiguo` (`antiguo`),
  KEY `nuevo` (`nuevo`),
  KEY `articulo` (`articulo`),
  CONSTRAINT `reasignado_ibfk_1` FOREIGN KEY (`antiguo`) REFERENCES `personas` (`idpersonas`),
  CONSTRAINT `reasignado_ibfk_2` FOREIGN KEY (`nuevo`) REFERENCES `personas` (`idpersonas`),
  CONSTRAINT `reasignado_ibfk_3` FOREIGN KEY (`articulo`) REFERENCES `articulos` (`idarticulo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reasignado`
--

LOCK TABLES `reasignado` WRITE;
/*!40000 ALTER TABLE `reasignado` DISABLE KEYS */;
INSERT INTO `reasignado` VALUES (1,1,5,18,'cambio de puesto','2016-06-18'),(3,1,6,24,'uso en clases','2016-06-29'),(4,6,1,14,'ingreso de activo fijo','2016-06-06');
/*!40000 ALTER TABLE `reasignado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `activo_fojo`
--

/*!50001 DROP TABLE IF EXISTS `activo_fojo`*/;
/*!50001 DROP VIEW IF EXISTS `activo_fojo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `activo_fojo` AS select `i`.`nombre` AS `infra`,`b`.`nombre` AS `bien`,`a`.`correlativo` AS `correlativo`,`a`.`marca` AS `marca`,`a`.`modelo` AS `modelo`,concat(`p`.`nombre`,' ',`p`.`apellido`) AS `encargado`,`a`.`precio` AS `precio`,`a`.`fecha_compra` AS `fecha_compra` from (((`articulos` `a` join `bienes` `b`) join `infraestructuras` `i`) join `personas` `p`) where ((`b`.`idbienes` = `a`.`codigo_bien`) and (`i`.`idinfra` = `a`.`infraestructura`) and (`p`.`idpersonas` = `a`.`encargado`)) order by `a`.`codigo_bien`,`a`.`correlativo` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `reasignaciones`
--

/*!50001 DROP TABLE IF EXISTS `reasignaciones`*/;
/*!50001 DROP VIEW IF EXISTS `reasignaciones`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `reasignaciones` AS select `r`.`idreasignado` AS `idreasignado`,`a`.`nombre` AS `nombre`,`a`.`marca` AS `marca`,`a`.`modelo` AS `modelo`,`i`.`nombre` AS `infra`,`a`.`correlativo` AS `correlativo`,concat(`p`.`nombre`,' ',`p`.`apellido`) AS `antiguo`,`r`.`asunto` AS `asunto`,concat(`e`.`nombre`,' ',`e`.`apellido`) AS `nuevo`,`r`.`fecha` AS `fecha` from ((((`infraestructuras` `i` join `articulos` `a`) join `personas` `p`) join `reasignado` `r`) join `personas` `e`) where ((`r`.`articulo` = `a`.`idarticulo`) and (`a`.`infraestructura` = `i`.`idinfra`) and (`r`.`antiguo` = `p`.`idpersonas`) and (`r`.`nuevo` = `e`.`idpersonas`)) order by `a`.`codigo_bien`,`a`.`correlativo` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-05 15:15:50
