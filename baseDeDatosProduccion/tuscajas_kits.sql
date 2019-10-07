-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: tuscajas
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `kits`
--

DROP TABLE IF EXISTS `kits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `contents` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `state` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kits`
--

LOCK TABLES `kits` WRITE;
/*!40000 ALTER TABLE `kits` DISABLE KEYS */;
INSERT INTO `kits` VALUES (1,'Kit  para apartaestudios','apartaestudios','img_1548254779.png','<p>Hasta 50 m2.</p>\r\n','<p>12 Cajas Medianas, 1 Cinta industrial ; 8 mts de pl&aacute;stico de burbuja , 4 Bolsas industriales, 1 marcador.</p>\r\n',144000.00,'','','2016-03-10 12:49:07','2019-01-23 19:47:23'),(2,'Kit para apartamentos','apartamentos','','Hasta 140 m2','18 Cajas Medianas , 1 Cinta industrial, 15 metros de Plástico de burbuja ,8 Bolsas industriales.',206000.00,'act','tra','2016-03-10 14:23:47','2016-05-11 09:49:13'),(4,'Kit para casas','casas','','Entre 180 m2 y 300 m2.\n','34 Cajas Medianas , 1 Cinta industrial, 30 metros de Plástico de burbuja , 12 Bolsas industriales.',315000.00,'act','tra','2016-03-10 14:25:40','2016-05-14 06:45:11'),(5,'kit de oficina pequeña','pequena','','Hasta 150m2','18 Cajas medianas\r\n10 Cajas grandes\r\n4 Cajas extra-grandes\r\n2 Cinta industrial\r\n6 Metros de plástico de burbuja\r\n2 Bisturís industriales\r\n2 Marcadores',262990.00,'act','tra','2017-02-08 14:00:00','2017-02-08 15:00:00'),(6,'Kit de oficina mediana','mediano','','Hasta 400m2','36 Cajas medianas\r\n20 Cajas grandes\r\n8 Cajas extra-grandes\r\n5 Cinta industrial\r\n1 Dispensador de cinta\r\n12 Metros de plástico de burbuja\r\n3 Bisturís industriales\r\n3 Marcadores',540260.00,'act','tra',NULL,NULL),(7,'Kit de oficina grande','grande','','Hasta 800m2','72 Cajas medianas\r\n40 Cajas grandes\r\n16 Cajas extra-grandes\r\n9 Cinta industrial\r\n1 Dispensador de cinta\r\n24 Metros de plástico de burbuja\r\n7 Bisturís industriales\r\n7 Marcadores',999999.99,'act','tra',NULL,NULL),(99,'Arma tu Kit','A convenir','','Cualquier tamalo','A eleccion',0.00,'act','tra','2019-03-12 14:00:00','2019-03-12 14:00:00');
/*!40000 ALTER TABLE `kits` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-07 11:14:13
