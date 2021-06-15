-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: resimdb
-- ------------------------------------------------------
-- Server version	8.0.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `resim_gonderi`
--

DROP TABLE IF EXISTS `resim_gonderi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resim_gonderi` (
  `gonderi_id` int NOT NULL,
  `gonderi_pid` int NOT NULL,
  `gonderi_kid` int NOT NULL,
  `gonderi_url` varchar(255) NOT NULL,
  `gonderi_icerigi` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gonderi_tarihi` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resim_gonderi`
--

LOCK TABLES `resim_gonderi` WRITE;
/*!40000 ALTER TABLE `resim_gonderi` DISABLE KEYS */;
INSERT INTO `resim_gonderi` VALUES (65,360801381,2,'yeniyil.jpg\r\n','Yeni Yılınız mutlu olsun!','2022-01-22 21:36:48'),(66,720470828,3,'daglar.jpg\r\n','Gecenin karanlığı.','2022-01-22 21:38:10'),(67,326278351,3,'sehir.jpg\r\n','','2018-01-13 21:38:32'),(68,501577853,4,'yoga.jpg','Yoga!','2018-01-13 21:38:57'),(69,566247836,3,'denizsehir.jpg\r\n','','2018-01-13 21:44:35'),(70,109242425,3,'gemi.jpg\r\n','','2018-01-13 21:44:49'),(71,512919801,5,'doga.jpg\r\n','','2018-01-13 21:44:49');
/*!40000 ALTER TABLE `resim_gonderi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-15 11:23:18
