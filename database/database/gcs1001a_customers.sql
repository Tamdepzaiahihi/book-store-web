-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: gcs1001a
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `customerID` varchar(10) NOT NULL,
  `customerPass` varchar(200) NOT NULL,
  `customerFullname` varchar(100) NOT NULL,
  `customerAddress` varchar(100) DEFAULT NULL,
  `customerEmail` varchar(100) DEFAULT NULL,
  `customerPhoto` varchar(100) DEFAULT NULL,
  `customerPhone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES ('1khang1','khang30','khang30',NULL,NULL,NULL,NULL),('ddkhang','$2y$10$ISyuc2/7PdYICeMAWNqcYeR9uE7NWCxI5kWBpCBnHHrgHfMPi3XIu','khang23',NULL,NULL,NULL,NULL),('dkhang','khang22','khang25',NULL,NULL,NULL,NULL),('khang','khang1','khang1',NULL,NULL,NULL,NULL),('khang10','khang8','khang8',NULL,NULL,NULL,NULL),('khang11','$2y$10$hqRP0jQR57huSW9m1EmgOumTkPVxOXGVf9KyDIl.kmuYrBNY54s6G','khang11',NULL,NULL,NULL,NULL),('khang111','khang111','khang111',NULL,NULL,NULL,NULL),('khang15','$2y$10$wN.6XEUt8dvDM.TXhmqVTearOi9QmJ.v2ZzgaC5IKJqIZXWaAY8Ke','khang15',NULL,NULL,NULL,NULL),('khang1712','khanghaha','khanghihi',NULL,NULL,NULL,NULL),('khang2','khang3','khang3',NULL,NULL,NULL,NULL),('khang20','khang19','khang19',NULL,NULL,NULL,NULL),('khang5','$2y$10$hCbYhwYpZibF3/LDvPBA8.YVnNMIxjYkQFRZIMC.XWXPZdNPprrmi','khang5',NULL,NULL,NULL,NULL),('User Name','$2y$10$sjGJWVjT5.8AACwOyEtzm.PjdOnt9Sbacd7vsvXm5CPcTLvjhUclG','khang',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-23 14:19:58
