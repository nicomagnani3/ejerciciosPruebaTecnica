-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: ejercicio3
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alquilar`
--
DROP TABLE IF EXISTS `alquilar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alquilar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bici_electrica_id` int DEFAULT NULL,
  `cliente_id` int DEFAULT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `es_base` tinyint(1) DEFAULT NULL,
  `bici_normal_id` int DEFAULT NULL,
  `bici_antigua_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_137283D177116B6` (`bici_normal_id`),
  KEY `IDX_137283D508D312A` (`bici_antigua_id`),
  KEY `IDX_137283DD53FE40B` (`bici_electrica_id`),
  KEY `IDX_137283DDE734E51` (`cliente_id`),
  CONSTRAINT `FK_137283D177116B6` FOREIGN KEY (`bici_normal_id`) REFERENCES `bici_normal` (`id`),
  CONSTRAINT `FK_137283D508D312A` FOREIGN KEY (`bici_antigua_id`) REFERENCES `bici_antigua` (`id`),
  CONSTRAINT `FK_137283DD53FE40B` FOREIGN KEY (`bici_electrica_id`) REFERENCES `bici_electrica` (`id`),
  CONSTRAINT `FK_137283DDE734E51` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alquilar`
--

LOCK TABLES `alquilar` WRITE;
/*!40000 ALTER TABLE `alquilar` DISABLE KEYS */;
/*!40000 ALTER TABLE `alquilar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bici_antigua`
--

DROP TABLE IF EXISTS `bici_antigua`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bici_antigua` (
  `id` int NOT NULL AUTO_INCREMENT,
  `puntaje` int DEFAULT '1',
  `precio_base` decimal(19,4) DEFAULT '10.0000',
  `precio_premium` decimal(19,4) NOT NULL DEFAULT '30.0000',
  `pack_dias` int DEFAULT '5',
  `disponible` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bici_antigua`
--

LOCK TABLES `bici_antigua` WRITE;
/*!40000 ALTER TABLE `bici_antigua` DISABLE KEYS */;
INSERT INTO `bici_antigua` VALUES (1,0,10.0000,30.0000,0,0),(2,0,10.0000,30.0000,0,0);
/*!40000 ALTER TABLE `bici_antigua` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bici_electrica`
--

DROP TABLE IF EXISTS `bici_electrica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bici_electrica` (
  `id` int NOT NULL AUTO_INCREMENT,
  `puntaje` int DEFAULT '1',
  `precio_base` decimal(19,4) DEFAULT '10.0000',
  `precio_premium` decimal(19,4) NOT NULL DEFAULT '30.0000',
  `disponible` tinyint(1) DEFAULT '1',
  `pack_dias` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bici_electrica`
--

LOCK TABLES `bici_electrica` WRITE;
/*!40000 ALTER TABLE `bici_electrica` DISABLE KEYS */;
INSERT INTO `bici_electrica` VALUES (1,0,10.0000,30.0000,0,0),(2,0,10.0000,30.0000,0,NULL),(3,1,10.0000,30.0000,1,0);
/*!40000 ALTER TABLE `bici_electrica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bici_normal`
--

DROP TABLE IF EXISTS `bici_normal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bici_normal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `puntaje` int DEFAULT '1',
  `precio_base` decimal(19,4) DEFAULT '10.0000',
  `precio_premium` decimal(19,4) NOT NULL DEFAULT '30.0000',
  `pack_dias` int DEFAULT '3',
  `disponible` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bici_normal`
--

LOCK TABLES `bici_normal` WRITE;
/*!40000 ALTER TABLE `bici_normal` DISABLE KEYS */;
INSERT INTO `bici_normal` VALUES (3,0,10.0000,30.0000,3,0),(4,0,10.0000,30.0000,3,0),(5,0,10.0000,30.0000,3,0),(6,0,10.0000,30.0000,3,0),(7,0,10.0000,30.0000,3,0),(8,0,10.0000,30.0000,3,0),(9,0,10.0000,30.0000,3,0),(10,0,10.0000,30.0000,3,0),(11,0,10.0000,30.0000,3,0);
/*!40000 ALTER TABLE `bici_normal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `puntaje` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,2,'Nicolas','Magnani',3767341);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220130064153','2022-01-30 03:42:01',314),('DoctrineMigrations\\Version20220130072550','2022-01-30 04:25:57',67),('DoctrineMigrations\\Version20220130072919','2022-01-30 04:29:26',217),('DoctrineMigrations\\Version20220131011929','2022-01-30 22:19:39',450),('DoctrineMigrations\\Version20220131020313','2022-01-30 23:03:21',186),('DoctrineMigrations\\Version20220131045248','2022-01-31 01:52:55',63);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-31  5:21:44
