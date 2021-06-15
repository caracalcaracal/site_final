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
-- Table structure for table `resim_ayarlar`
--

DROP TABLE IF EXISTS `resim_ayarlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resim_ayarlar` (
  `id` int NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lang` varchar(3) NOT NULL,
  `themes` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `case` varchar(1) NOT NULL,
  `sponsored` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `theme_color` varchar(50) NOT NULL,
  `google_analytics` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `theme_photo` varchar(255) NOT NULL,
  `theme_logo` varchar(255) NOT NULL,
  `theme_favicon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resim_ayarlar`
--

LOCK TABLES `resim_ayarlar` WRITE;
/*!40000 ALTER TABLE `resim_ayarlar` DISABLE KEYS */;
INSERT INTO `resim_ayarlar` VALUES (1,'$site_url','$site_name','$site_content','kurumsal shop, sosyal ağ, fotoğraf paylaşımı','en','default','','1','<img src=\"http://\".$site_url.\"/assets/images/sponsored.png\">','$theme_color','','http://\".$site_url.\"/assets/images/wall/bursa.jpg','http://\".$site_url.\"/assets/images/logos/logo.png','http://\".$site_url.\"/assets/images/logos/favicon.ico');
/*!40000 ALTER TABLE `resim_ayarlar` ENABLE KEYS */;
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
