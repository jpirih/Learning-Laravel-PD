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
-- Table structure for table `hikes`
--

DROP TABLE IF EXISTS `hikes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hikes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `altitude` int(11) NOT NULL,
  `difficulty_id` int(11) NOT NULL,
  `open_form` date NOT NULL,
  `open_to` date NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img_url` text COLLATE utf8_unicode_ci NOT NULL,
  `guide_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hikes`
--

LOCK TABLES `hikes` WRITE;
/*!40000 ALTER TABLE `hikes` DISABLE KEYS */;
INSERT INTO `hikes` VALUES (1,'Porezen',1630,1,'2016-01-01','2016-12-31','Porezen je 1630 m visoka gora, ki se nahaja med Davčo in Baško grapo. Z vrha, na katerem stoji velik spomenik NOB, se nam odpre lep razgled na Škofjeloško in Cerkljansko hribovje, Golake, Tržaški zaliv, Spodnje Bohinjske gore in Triglav, ter Karavanke in Kamniško Savinjske Alpe. Vrh ima vpisno skrinjico in žig.','http://www.sobe-simonic.si/images/attractions/16.jpg',1,'2016-03-08 11:08:21','2016-03-08 11:08:21'),(2,'Šmarna Gora',669,1,'2016-01-01','2016-12-31','Šmarna gora je 669 m visok vrh, ki se nahaja severozahodno od glavnega mesta Slovenije. Z vrha, na katerem se nahaja gostinski lokal ter cerkev, se nam odpre lep razgled na Gorenjsko, del Julijskih Alp, Karavank in Kamniško Savinjskih Alp.\r\n                            ','http://hribi.net/Gora/p4130100medium6mz.jpg',2,'2016-03-08 11:39:18','2016-03-08 11:39:18'),(3,'Triglav',2864,3,'2016-05-25','2016-09-15','\r\nTriglav je 2864 m visoka gora, ki se nahaja v osrčju Julijskih Alp. Z omenjeno višino je Triglav najvišja gora na ozemlju Slovenije, hkrati pa je tudi najvišja gora v Julijskih Alpah. Na vrhu stoji Aljažev stolp, katerega je leta 1895 postavil Jakob Aljaž, takratni župnik na Dovjem. V Aljaževem stolpu lahko v primeru nevihte vedri do 5 ljudi. Sicer pa je danes Aljažev stolp zaščiten kot kulturni spomenik in kot tak zelo pomemben pri ohranjanju kulturne dediščine.\r\nTriglav je svoj prvi obisk dočakal 26.8.1778, ko so se na vrh povzpeli štirje srčni možje, katerih spomenik stoji v Bohinju. Ti srčni možje so bili Luka Korošec, Matevž Kos, Štefan Rožič in Lovrenc Willomitzer.\r\nSicer pa se nam z vrha Triglava odpre lep razgled, ki seže vse od Jadranskega morja, prek Dolomitov in Visokih Tur do Karavank, Kamniško Savinjskih Alp, Pohorja, prek skoraj celotne Slovenije do najvišjih vrhov Julijskih Alp.\r\n                            ','http://www.slovenia.info/pictures/hiking/1/2006/triglav_88096.jpg',1,'2016-04-06 16:42:30','2016-04-06 16:42:30'),(4,'Blegoš',1562,1,'2016-01-01','2016-12-31','Blegoš je 1562 m visoka gora, ki se nahaja med Selško in Poljansko Soro. S travnatega vrha na katerem je žig in vpisna skrinjica, se nam odpre lep razgled na Polhograjsko hribovje, Golake, Kojco, Porezen, Julijske Alpe, Ratitovec, Koprivnik, Mladi in Stari vrh, ter Karavanke in Kamniško Savinjske Alpe.\r\n                            ','http://www.pd-skofjaloka.com/images/blegos_velika.jpg',2,'2016-04-06 16:49:49','2016-04-06 16:49:49');
/*!40000 ALTER TABLE `hikes` ENABLE KEYS */;
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
