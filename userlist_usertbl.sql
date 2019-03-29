CREATE DATABASE  IF NOT EXISTS `userlist` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `userlist`;
-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: userlist
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `usertbl`
--

DROP TABLE IF EXISTS `usertbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usertbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Surname` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `BTH_date` date DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertbl`
--

LOCK TABLES `usertbl` WRITE;
/*!40000 ALTER TABLE `usertbl` DISABLE KEYS */;
INSERT INTO `usertbl` VALUES (1,'nastya','anastassiyatik@gmail.com','Nastya','Yfcnz1987','2019-01-02',NULL),(2,'Alexey Tikhonov','alextik@gmail.com','','llll','2019-01-02',NULL),(3,'','kkkk@gmail.com','kkkk','fa7f08233358e9b466effa1328168527','2019-01-02',NULL),(4,'','jjjjj@gmisl.com','alextik@gmail.com','cb42e130d1471239a27fca6228094f0e','2019-01-02',NULL),(5,'','djdjd@gmail.com','dldld','fa7f08233358e9b466effa1328168527','2019-01-02',NULL),(6,'','jjj@gmil.com','jjjj','cb42e130d1471239a27fca6228094f0e','2019-01-02',NULL),(7,'','jjj@gmail.con','jjj','2af54305f183778d87de0c70c591fae4','2019-01-02',NULL),(8,'lll','vvv@gmail.com','vvv','2af54305f183778d87de0c70c591fae4','2019-01-02',NULL),(9,'ddd','ddd@gmial.com','ddd','698d51a19d8a121ce581499d7b701668','2019-01-02',NULL),(10,'ana','ana@gmail.com','ana','698d51a19d8a121ce581499d7b701668','2019-01-02',NULL),(11,'kl','kl@gmail.com','kl','698d51a19d8a121ce581499d7b701668','2019-01-02',NULL),(12,'jsjdj','mmm@gmail.com','mmmm','698d51a19d8a121ce581499d7b701668','2019-01-02',NULL),(13,'gghfh','aaa@gmail.com','aaa','698d51a19d8a121ce581499d7b701668','2019-01-02',NULL),(14,'asaa','Kkw@gmial.com','aaaa','6512bd43d9caa6e02c990b0a82652dca','2019-01-02',NULL),(15,'hhhH','jbb@gmail.com','hhhh','310dcbbf4cce62f762a2aaa148d556bd','2019-01-02',NULL),(16,'Nastya','ooo','ooo@gmail.com','28dd2c7955ce926456240b2ff0100bde','2019-01-02',2),(17,'Nastya','aa','aa@gmail.com','6512bd43d9caa6e02c990b0a82652dca','2019-01-02',2),(18,'Alexey','Tikhonov','alex@gmail.com','c4ca4238a0b923820dcc509a6f75849b','2019-01-02',1),(19,'a','a','a@ggg','c4ca4238a0b923820dcc509a6f75849b','1993-12-24',2),(20,'ll','ll','ll@gmail.com','c4ca4238a0b923820dcc509a6f75849b','1993-12-29',1),(110,'nnn','','kakak','','2019-01-14',NULL),(111,'awdfWD','jgjkg','hvgf@gmail.com','c4ca4238a0b923820dcc509a6f75849b','1996-01-29',1),(112,'ff','ff','ff@gmail.com','c4ca4238a0b923820dcc509a6f75849b','1993-12-29',1),(113,'k','k','k@gmail.com','e4da3b7fbbce2345d7772b0674a318d5','1998-12-22',1);
/*!40000 ALTER TABLE `usertbl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-25 18:42:38
