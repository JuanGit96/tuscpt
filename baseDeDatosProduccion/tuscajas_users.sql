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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrador','grimorum@grimorum.com','$2y$10$mT/7pmS9tHu0GpXWU5Kx1.52CSgWgRCxBtb.vT9Je1bW8RL4jLNOy','EZ7JLbaNlTcUtJTDzJQs5yIY3iFgnSgHaDoEn3Lqc2h7ppCtw50jhZu5bmxt','2016-03-10 07:10:53','2019-06-07 01:17:29'),(2,'fj,fh,','fdyu,fyu,','',NULL,'2016-04-29 05:14:51','2016-04-29 05:14:51'),(3,'loiiu','DFJBLARBHLAHERB','',NULL,'2016-04-29 06:07:59','2016-04-29 06:07:59'),(4,'Ginna Paola Cabrera ','asesor4@c21sinergy.com','$2y$10$nzbLnZwBU7IjKuenpYXWNeaUhCoed7zVzNy7Q76yGRnu23p.EbG8K',NULL,'2016-10-19 22:50:16','2016-10-20 02:53:17'),(5,'Alexandra Carvajal ','asesor5@c21sinergy.com','$2y$10$I1Llgq4KmpYqMhaRZarP3.QHI1D2kPLkuPnAGLmaf7Uji3BfPv/ge',NULL,'2016-10-20 02:44:07','2016-10-20 02:53:02'),(6,'Ruth Colombia Mendoza Cantillo','asesor8@c21sinergy.com','$2y$10$G6i6FOWwtJtrjj4vpDZNm.IVlYLTuUP2ibNyaNS5ueUKYnAG.3rXK',NULL,'2016-10-20 03:06:40','2016-10-20 03:06:40'),(7,'Orlando Monroy','asesor9@c21sinergy.com','$2y$10$8NRYYaY0IRHWI4SEUSxt5unysB4I7Yxn6hLNK7p4Y/jnhUGia5ria',NULL,'2016-10-20 03:10:23','2016-10-20 03:10:23'),(8,'Leonardo Montoya ','asesor2@c21sinergy.com','$2y$10$81TsHHpDK9i.nlIaXE/b3eKUZpaF5Fm9EoHOTLbQfbpuMxFPWTfzC','qnBPWWsXeAN6sUyxZM9IkPhjhAHoAyE3ZmLcW5bFJBLb9lq26CdpIYMNgeHW','2016-10-20 03:15:49','2016-11-09 02:10:22'),(9,'Diana Marcela Morales Ussa','asesor1@c21sinergy.com','$2y$10$mHFI8OgTrv4aR/WRIeG2IuvphZn10tIzLqM46WH1pf66ZV1B8Eidi','dnrd4FGODcHOgnpvkTwiTHQGoUFg9ikQXDdFQYgw9Z0n56qfF5TNUGRDcr5y','2016-10-20 03:18:19','2016-11-09 07:06:37'),(10,'Jorge Enrique Ordonez Lega','asesor3@c21sinergy.com','$2y$10$Ln4BVrGQykssoMbeNDW8feO0qYxqbkAxX4MrA87J.AY2EHt8limpq','ZhthHyAEcz0yCi6RSPiINIPlHwkrkMLNk2TCZUGCuXl8v7SiHwMXVH8LqCxu','2016-10-20 03:22:00','2017-04-23 16:57:59'),(11,'John Rojas','asesor7@c21sinergy.com','$2y$10$MdXVbpvsjIg3PPvyXj1neuMOA2OQ3YJ0C.rmU1McZ7bR.Gj0Us0dC',NULL,'2016-10-20 03:26:07','2016-10-20 03:26:07'),(12,'Fernando Villegas Sanchez','asesor10@c21sinergy.com','$2y$10$9iE55uWOCY5THkj0w5kLA.GYaE5c0Q4qpx.GWrPWkb/ybUFc4kcra',NULL,'2016-10-20 03:28:41','2016-10-20 03:28:41'),(13,'Amparo Zapata','asesor6@c21sinergy.com','$2y$10$Mlbc0/zLhXFj75IGo4o1Ku9.OYPX.BLdr3Ihpl5KijGEU9R76nQv.','RVzX9UAz8waG68r0rd2TcuTyC67Rq7mfqkOlkufPV9NO6RPtLtg1DtHtHK57','2016-10-20 03:35:38','2016-10-20 03:44:31'),(14,'Alejandra Berdugo ','alejandra.berdugo@grimorum.com','$2y$10$n4yyZX1xx2hz80i4OkvgEOWs2.lieoli67K35snt9xE/NKJZT2sXe','nbLBqluEZnocJkHh6RljzthVsRbLuRCYCqVjUICOoGue1B0pyor5uit4hZrw','2016-10-20 03:45:19','2017-03-30 00:22:00'),(15,'Juliana Saiden','reparaciones@c21maxibienes.com','$2y$10$WiJHyr4bBNHyrNtVgtmIauHm9w7C3kbGaZR.Rodhy6duX9UvBrYO2',NULL,'2016-10-22 05:19:06','2016-10-22 05:19:06'),(16,'Marcela Bula ','gerencia@c21sinergy.com','$2y$10$UO.mUl7e07DFbxPH2YKWeuJJAnW87Hiwj9pBNPoTHZCM7JTwxfgJq',NULL,'2016-11-17 02:10:48','2016-11-17 02:10:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-07 11:13:57
