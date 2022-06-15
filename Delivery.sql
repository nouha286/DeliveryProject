-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: delivery
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(256) NOT NULL,
  `Nom_business` varchar(256) NOT NULL,
  `Type_business` varchar(256) NOT NULL,
  `Numero` varchar(256) NOT NULL,
  `Ville` varchar(256) NOT NULL,
  `Adresse` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (10,'khadija','kadichenne','Auto-entrepreneur','0666778899','youssoufiaa','JBOURAT','nouhailaelaalami286@gmail.com','2cffcdc7f8dfe1b3a4c0f4a0e42738ed'),(11,'salmaelaalami','alami','E-commerce','0631399659','Marrakech','hey iziki','salma@gmail.com','cd4f274ecf05ad73486b37488130321f');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colis`
--

DROP TABLE IF EXISTS `colis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Destinataire` varchar(256) NOT NULL,
  `Statut` varchar(256) NOT NULL,
  `Telephone_Des` varchar(256) NOT NULL,
  `Ville_Des` varchar(256) NOT NULL,
  `adresse_Des` varchar(256) NOT NULL,
  `Disponibilite_Des` datetime NOT NULL,
  `Produit` varchar(256) NOT NULL,
  `Poids` int NOT NULL,
  `Prix` int NOT NULL,
  `Date_création` varchar(256) NOT NULL,
  `Etat` varchar(256) NOT NULL,
  `id_client` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`),
  CONSTRAINT `id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colis`
--

LOCK TABLES `colis` WRITE;
/*!40000 ALTER TABLE `colis` DISABLE KEYS */;
INSERT INTO `colis` VALUES (13,'salmaelaalami','Ramassé','0631399659','Marrakech','hey iziki','2022-06-24 00:00:00','jeans',4,77,'Thursday 16 June 2022, 01:05','Retour',10),(14,'Nouhaila ELaalami','Ramassé','+212628578248','Marrakech','ahhhh','2022-06-17 00:00:00','jellaba',1,60,'Thursday 16 June 2022, 01:18','Livré',11);
/*!40000 ALTER TABLE `colis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colis_a_rammasser`
--

DROP TABLE IF EXISTS `colis_a_rammasser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colis_a_rammasser` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_colis` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_colis` (`id_colis`),
  CONSTRAINT `id_colis` FOREIGN KEY (`id_colis`) REFERENCES `colis` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colis_a_rammasser`
--

LOCK TABLES `colis_a_rammasser` WRITE;
/*!40000 ALTER TABLE `colis_a_rammasser` DISABLE KEYS */;
INSERT INTO `colis_a_rammasser` VALUES (13,13),(14,14);
/*!40000 ALTER TABLE `colis_a_rammasser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `identifecateur`
--

DROP TABLE IF EXISTS `identifecateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `identifecateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Identifecateur` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `identifecateur`
--

LOCK TABLES `identifecateur` WRITE;
/*!40000 ALTER TABLE `identifecateur` DISABLE KEYS */;
INSERT INTO `identifecateur` VALUES (2,'DeliveryStaf2018');
/*!40000 ALTER TABLE `identifecateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscription_admin`
--

DROP TABLE IF EXISTS `inscription_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inscription_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscription_admin`
--

LOCK TABLES `inscription_admin` WRITE;
/*!40000 ALTER TABLE `inscription_admin` DISABLE KEYS */;
INSERT INTO `inscription_admin` VALUES (1,'Nouhaila ELaalami','nouhailaelaalami286@gmail.com','2cffcdc7f8dfe1b3a4c0f4a0e42738ed');
/*!40000 ALTER TABLE `inscription_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscription_client`
--

DROP TABLE IF EXISTS `inscription_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inscription_client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(256) NOT NULL,
  `Nom_business` varchar(256) NOT NULL,
  `Type_business` varchar(256) NOT NULL,
  `Numero` varchar(256) NOT NULL,
  `Ville` varchar(256) NOT NULL,
  `Adresse` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscription_client`
--

LOCK TABLES `inscription_client` WRITE;
/*!40000 ALTER TABLE `inscription_client` DISABLE KEYS */;
/*!40000 ALTER TABLE `inscription_client` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-16  0:49:37
