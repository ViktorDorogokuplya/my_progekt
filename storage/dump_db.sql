-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: my_db
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

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
-- Table structure for table `resume_data`
--

DROP TABLE IF EXISTS `resume_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resume_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(60) NOT NULL,
  `mobile-tel` varchar(60) DEFAULT NULL,
  `contacts-email` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `social` varchar(60) DEFAULT NULL,
  `education` varchar(300) DEFAULT NULL,
  `skills` varchar(300) DEFAULT NULL,
  `about_my` varchar(600) DEFAULT NULL,
  `position` varchar(60) DEFAULT NULL,
  `companyName` varchar(60) DEFAULT NULL,
  `profExperience` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resume_data`
--

LOCK TABLES `resume_data` WRITE;
/*!40000 ALTER TABLE `resume_data` DISABLE KEYS */;
INSERT INTO `resume_data` VALUES (31,'default','+380990400081','viktordorogokuplya@gmail.com','Dnepr','Linked','High scool','php js','Hello! I am a beginner developer. I began to learn this profession on my own. At this stage, I am studying at PixelTeh, where I would very much like to stay in the future. I consider this work to be the most promising and highly paid area. I am ready to make every effort to achieve this goal.','TECHNOLOGIST, MASTER OF PRODUCTION','\"Agroproinvest 08\" faktorу | Vilnyansk, Matrocova str.','control of technological equipment\r\ncontrol of the technological process of processing\r\nquality control of manufactured products\r\nassignment of tasks to shift personnel\r\nmaintenance of technical documentation'),(96,'editable','+380990400081','viktordorogokuplya@gmail.com','Dnepr','Linked','High scool','php js','Hello! I am a beginner developer. I began to learn this profession on my own. At this stage, I am studying at PixelTeh, where I would very much like to stay in the future. I consider this work to be the most promising and highly paid area. I am ready to make every effort to achieve this goal.','TECHNOLOGIST, MASTER OF PRODUCTION','&#34;Agroproinvest 08&#34; faktorу','Control of technological equipment. Control of the technological process of processing. Quality control of manufactured products. Assignment of tasks to shift personnel.Maintenance of technical documentation.');
/*!40000 ALTER TABLE `resume_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (8,'viktor','    viktordorogokuplya@gmail.com','44e9186ec2c196e76d8917637cc01a53'),(9,'olga','    olga_dorogokuplya@gmail.com','f63e252d65bc112c01ad610c5eae40b4'),(10,'alina','    alina_dorogokuplya@gmail.com','4ab4c150b0f102ee6e3b5130f31598f4'),(11,'rostislav','    rostislavDorogokuplya@gmail.com','bd5fc22dc2bc3bc7725d26f990cb90c1'),(12,'marina','    marina@gmail.com','e807f1fcf82d132f9bb018ca6738a19f'),(13,'marina','    marina@gmail.com','e807f1fcf82d132f9bb018ca6738a19f'),(14,'viktor','    olga_dorogokuplya@gmail.com','fcea920f7412b5da7be0cf42b8c93759'),(15,'fudgt','    marina@gmail.com','02c75fb22c75b23dc963c7eb91a062cc'),(16,'goga','    gogogo@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4'),(17,'grisha','    olga_dorogokuplya@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4'),(18,'elena','    mihnenko@gmail.com','d4503d421cdc97c38ea3ef26e9a5c67f'),(19,'katya','    mihova@gmail.com','ea01c0003c0e83c67cbcd1d1cf06b288'),(20,'sonya','    sonya_mihova@gmail.com','fcea920f7412b5da7be0cf42b8c93759');
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

-- Dump completed on 2021-06-04 14:36:31
