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
INSERT INTO `times` VALUES (1,'MARCOS SOUSA','DISCONTROLEF.C','11984165080',1,NULL,NULL),(2,'drilualice','ADRIANO ALADIM','(11)98615-2377',NULL,NULL,NULL),(3,'Trimundial_35','ADRIANO BANFILME','(11)98287-2494',NULL,NULL,NULL),(4,'AVIP.FC esquadrão','ARLON','(11)11111-1111',NULL,NULL,NULL),(5,'CaiiDemarFC','CAIQUE','(11)11111-1111',NULL,NULL,NULL),(6,'AVENGERS CT','CLEONILDO','(11)11111-1111',NULL,NULL,NULL),(7,'loko doido malukãoo','DIMAS','(11)11111-1111',NULL,NULL,NULL),(8,'R:100FC','ANDERSON','(11)11111-1111',NULL,NULL,NULL),(9,'E.C.Carrasco','GIL','(11)11111-1111',NULL,NULL,NULL),(10,'ManuelaRF F C','GUILHERME','(11)11111-1111',NULL,NULL,NULL),(11,'L0UC0S F.C','IGOR','(11)11111-1111',NULL,NULL,NULL),(12,'bardufissimo','JEFFERSON','(11)11111-1111',NULL,NULL,NULL),(13,'Leilton Show','LEILTON','(11)11111-1111',NULL,NULL,NULL),(14,'Rock Estrela FC','RAFAEL BANFILME','(11)11111-1111',NULL,NULL,NULL),(15,'CRAI7','RAI','(11)11111-1111',NULL,NULL,NULL),(16,'Manchaster City Footbal','RAFAEL','(11)11111-1111',NULL,NULL,NULL),(17,'mikaiu','RUBENS','(11)11111-1111',NULL,NULL,NULL),(18,'lokoépokoFC','RUBENS','(11)11111-1111',NULL,NULL,NULL),(19,'SÓ TAPAA F.C','SAMARONY','(11)11111-1111',NULL,NULL,NULL),(20,'CN São Gabriel FC','TIAGO','(11)11111-1111',NULL,NULL,NULL),(21,'casa cheia','VAL','(11)11111-1111',NULL,NULL,NULL),(22,'InForce FC','VINYCIUS','(11)11111-1111',NULL,NULL,NULL),(23,'Tudo Certo F.C','WELLINGTON','(11)11111-1111',NULL,NULL,NULL),(24,'W-Henry12 FC','WEMERSON','(11)11111-1111',NULL,NULL,NULL),(25,'S.E Supinpa','GUILHERME OLIVEIRA','(11)11111-1111',NULL,NULL,NULL),(26,'play II f','VALDIR','(11)11111-1111',NULL,NULL,NULL),(27,'Esquadrão Torok','WILLIAM','(11)11111-1111',NULL,NULL,NULL);
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

-- Dump completed on 2018-08-15 22:15:39
