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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hike_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `price` double(8,2) NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,2,'2016-03-26 07:00:00','2016-03-26 21:00:00',15.00,'Zberemo se ob 7-ih zjutraj na glavni avtobusni postaji pred trafiko. Cena 15 € vklujčuje prevoz do izhodišča v Tacunu in nazaj in čaj na vrhu \r\n\r\nObvezna je primerna pohodna obutev in obleka primerna vremenu in letnemu času \r\n                            ','2016-03-08 16:32:34','2016-03-08 16:32:34'),(2,1,'2016-04-23 07:00:00','2016-04-23 21:00:00',10.00,'Izlet peš iz Cerknega na Porezen zberemo se ob 7:00 zjutraj pred trgovino kmetijske zadruge. Cena za izlet vključuje hrano in en čaj v koči Prijavi se čim prej \r\n                            ','2016-04-07 09:55:31','2016-04-07 09:55:31'),(3,4,'2016-04-16 06:00:00','2016-04-16 20:00:00',5.00,'Izlet na Blegoš s Črnega  Kala  Cena 5 € vkluučuje avtobusni prevoz  na Črni Kal. Odhod je iz avtobusne postaje ob 6:00 zjutraj  Več nas bo bolj bo luštno \r\n                            ','2016-04-07 10:13:56','2016-04-07 10:13:56'),(4,4,'2016-05-08 07:00:00','2016-05-08 20:00:00',5.00,'Izlet na Blegoš iz Leskovice pridružili se bomo ostalim pohodnikom v okviru tradicionalnega pohoda na Blegoš Cena 5 € vključuje prevoz. Odhod je ob 7:00 zjutraj iz avtobusne postaje.\r\n                            ','2016-04-07 13:29:29','2016-04-07 13:29:29');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-07 20:33:36
