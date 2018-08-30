CREATE DATABASE  IF NOT EXISTS `cartola` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cartola`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: cartola
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `participacoes`
--

DROP TABLE IF EXISTS `participacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participacoes`
--

LOCK TABLES `participacoes` WRITE;
/*!40000 ALTER TABLE `participacoes` DISABLE KEYS */;
INSERT INTO `participacoes` VALUES (1,'LIGA',100),(2,'HAT-TRICK - RODADA 9º BRASILEIRO',5),(3,'CAMPEAO DO 1 TURNO',5);
/*!40000 ALTER TABLE `participacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `times`
--

DROP TABLE IF EXISTS `times`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `times` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participante` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cel` varchar(15) NOT NULL,
  `status_liga` int(11) DEFAULT NULL,
  `status_hattrick1` int(11) DEFAULT NULL,
  `status_turno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_liga` (`status_liga`),
  KEY `status_hattrick1` (`status_hattrick1`),
  KEY `status_turno` (`status_turno`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `times`
--

LOCK TABLES `times` WRITE;
/*!40000 ALTER TABLE `times` DISABLE KEYS */;
INSERT INTO `times` VALUES (1,'DiscontroleF.C','MARCOS','(11)98416-5080',1,2,NULL),(2,'drilualice','ADRIANO ALADIM','(11)98615-2377',NULL,2,NULL),(3,'Trimundial_35','ADRIANO BANFILME','(11)98287-2494',NULL,2,NULL),(4,'AVIP.FC esquadrão','ARLON','(11)94760-8561',NULL,2,NULL),(5,'CaiiDemarFC','CAIQUE','(11)95286-0799',NULL,2,NULL),(6,'AVENGERS CT','CLEONILDO','(11)99853-3910',NULL,NULL,NULL),(7,'loko doido malukãoo','DIMAS','(11)99627-4597',NULL,2,NULL),(8,'R:100FC','ANDERSON','(11)96068-5489',NULL,2,NULL),(9,'E.C.Carrasco','GIL','(54)98112-4303',1,2,3),(10,'ManuelaRF F C','GUILHERME','(11)98139-9174',NULL,2,NULL),(11,'L0UC0S F.C','IGOR','(11)96552-3442',NULL,2,NULL),(12,'bardufissimo','JEFFERSON','(11)94715-3136',NULL,2,NULL),(13,'Leilton Show','LEILTON','(11)98703-1543',NULL,NULL,NULL),(14,'Rock Estrela FC','RAFAEL BANFILME','(21)98391-5119',NULL,2,NULL),(15,'CRAI7','RAI','(11)94775-0419',NULL,2,NULL),(16,'Manchaster City Footbal','RAFAEL','(11)99368-2408',NULL,2,NULL),(17,'mikaiu','RUBENS','(11)98335-3859',NULL,2,NULL),(18,'lokoépokoFC','RUBENS','(11)96152-7900',NULL,2,NULL),(19,'SÓ TAPAA F.C','SAMARONY','(11)94821-3171',NULL,NULL,NULL),(20,'CN São Gabriel FC','TIAGO','(11)11111-1111',NULL,NULL,NULL),(21,'casa cheia','VAL','(11)96184-2337',NULL,2,NULL),(22,'InForce FC','VINYCIUS','(11)95792-7818',NULL,2,NULL),(23,'Tudo Certo F.C','WELLINGTON','(11)94766-4064',NULL,2,NULL),(24,'W-Henry12 FC','WEMERSON','(11)95465-2121',NULL,2,NULL),(25,'S.E Supinpa','GUILHERME OLIVEIRA','(54)98158-6164',NULL,2,NULL),(26,'play II f','VALDIR','(54)99920-3305',NULL,2,NULL),(27,'Esquadrão Torok','WILLIAM','(11)11111-1111',NULL,NULL,NULL);
/*!40000 ALTER TABLE `times` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-17 22:29:31
