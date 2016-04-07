-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pohod
-- ------------------------------------------------------
-- Server version	5.7.10

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
-- Table structure for table `hikers`
--

DROP TABLE IF EXISTS `hikers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hikers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hiker_type_id` int(11) NOT NULL,
  `name` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hikers`
--

LOCK TABLES `hikers` WRITE;
/*!40000 ALTER TABLE `hikers` DISABLE KEYS */;
INSERT INTO `hikers` VALUES (1,3,'Ivan','Hadalin','040-588-885','ivan.hadalin@gmail.com','1965-06-10','2016-03-08 11:06:05','2016-04-07 14:48:52'),(2,3,'Janez','Kranjski','051-260-360','j.kranjski@gmail.com','1964-03-07','2016-03-08 11:32:44','2016-03-08 11:32:44'),(3,1,'Gregor','Kekec','031-855-588','g.kekec@gmail.com','1988-02-23','2016-03-09 12:51:59','2016-03-09 12:51:59'),(4,1,'Ana','Drev','051-445-588','a.drev@gamil.com','1985-08-06','2016-03-10 08:08:09','2016-03-10 08:08:09'),(5,1,'Katarina','Lavtar','031-445-668','k.lavtar@gamil.com','1988-02-23','2016-03-10 08:13:37','2016-04-07 14:44:39'),(6,1,'Mojca','Pokraculja','040-255-552','mojca.pokraculja@gmail.com','1992-07-22','2016-04-07 14:28:17','2016-04-07 14:28:17'),(7,1,'Saša','Brezovnik','051-442-224','s.brezovnik@gmail.com','1995-05-04','2016-04-07 17:33:01','2016-04-07 17:33:01');
/*!40000 ALTER TABLE `hikers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-07 20:33:35
