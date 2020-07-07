CREATE DATABASE  IF NOT EXISTS `scorpio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `scorpio`;
-- MySQL dump 10.13  Distrib 5.7.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: scorpio
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.16-MariaDB

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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `idbrands` int(11) NOT NULL,
  `name` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idbrands`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `image` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (17,'Remera Mujer AC/DC',300.00,'NPmbv6TRl2C3MVUaobxSKwYrMrc8zADRjIaHXD0F.webp','Lorem','RM'),(18,'Remera Mujer Bowie',270.00,'cjmHkwKPGC1GlxjaaLnRtrCYnBOrFo4SuXHFBp9a.webp','Lorem','RM'),(19,'Remera Mujer GnR',290.00,'SMRwhqKDz1NGobVm2SpYVYDE5VKhFU7kf7fyLfja.webp','Lorem','RM'),(20,'Remera Mujer Metallica',300.00,'tDmSVqXIFoDw0VKUh3dcVLx4VKlLm7qjEqWlXCCg.webp','Lorem','RM'),(21,'Remera Hombre Esqueleto',300.00,'BzbsDzGjVU3FLx6GsnVLwaihJI9wM3r4Vz6p6N5D.webp','Lorem','RM'),(22,'Remera Hombre PF',280.00,'xi1eAiVOEUgUOtJRgCCKyNdVwNZMfs8qGA16wqo1.webp','Lorem','RM'),(23,'Remera Hombre Kiss',280.00,'5OKMzSed8MxURkLX1U2aUYKCbx71tjLfkeL8OcIG.webp','Lorem','RM'),(24,'Remera Hombre Mötley',290.00,'sih4vSiH0KHHwrn0i7HHEUbOKJZ7iqVcb0mH0uDp.webp','Lorem','RM'),(25,'Remera Mujer Nirvana',280.00,'HhT2ZC7TbPdKCPZpuXHwJpmqaLoHDNTevJ4H00is.webp','Lorem','RM'),(26,'Remera Mujer Queen',290.00,'b25BhhcLiOcCKgcN5BS2iYxkmaplTvOyYLWhyiEh.webp','Lorem','RM'),(27,'Remera Mujer Ramones',270.00,'ls7zFx82uVo6BYPMpuak2O8jDpWlbJpI7Fqs78t2.webp','Lorem','RM'),(28,'Remera Mujer RS',270.00,'2xz0tl52tFRzRJQh8Y0x5b9d5LV0aLa3cTDhJVPe.webp','Lorem','RM'),(29,'Remera Hombre Nirvana',270.00,'GKriZqkwYXFqoK82yvEF0AFYK6IsZeOzAjVVeaF5.webp','Lorem','RM'),(30,'Remera Hombre Oasis',280.00,'TbR9bgMXP9QzrArtoErx0OdajwyuDpGfEHxzw6iL.webp','Lorem','RM'),(31,'Remera Hombre PJ',270.00,'7gLo6tVtGzdkALtq6TniS0GTQ6Z2O5TBbjY2XP74.webp','Lorem','RM'),(32,'Remera Hombre RHCP',290.00,'ulDjNjI1noPL7pGUNnkqSXsHRTPsNVlHc9SJfFHs.webp','Lorem','RM'),(33,'Remera Mujer Slayer',290.00,'jtvqxBnBH9HZ0jKINacLyd4J3aRyKQZBOWRNq3Nm.webp','Lorem','RM'),(34,'Remera Mujer WhiteSnake',280.00,'Jh15QSdImjyz4OafqaqfeSfnmW4UblQ0gg7SFZX7.webp','Lorem','RM'),(35,'Remera Hombre Rockstar',270.00,'808J1s4PQVj1km7ZDxo8k635UKIa2RjYZgsOxmDq.webp','Lorem','RM'),(36,'Remera Hombre U2',280.00,'DSpjn8klLH3zREjdXNq8qNzsjgU0dWQGKArgIbaa.webp','Lorem','RM'),(37,'Remera Hombre LZ',280.00,'FHD6DuO2bq8BsUPs7SKPgJb8wAYzo862KSRNYC2L.webp','Lorem','RM'),(38,'Remera Hombre Zero',270.00,'EiHWGV7lvkwg57le8EW1IymPOZid2uyCdXytmdn8.webp','Lorem','RM'),(39,'Jean Mujer Carmen',740.00,'EdclVp90jYlcwCTcknZtLIO9TSBMSrkBJku5m5bK.jpeg','Lorem','JN'),(40,'Jean Mujer CDYC',760.00,'lHJkOOZSmXq6WVv9EECWJbfxmLSJocPzXtzBjloo.jpeg','Lorem','JN'),(41,'Jean Mujer Denim',750.00,'979G3bjwlyRH4isayxHmLsuNP4WyltH2O6b5OQxI.jpeg','Lorem','JN'),(42,'Jean Mujer Jacqueline',280.00,'lEPvW02bYfioZ0XRJnZmFtHzJZcnvhz3GIG33tUH.jpeg','Lorem','JN'),(43,'Jean Hombre Breaker',750.00,'RXJ2bvSTyGr4bBd8eTtHBXjyaZVDDnA51yaGp0lJ.webp','Lorem','JN'),(44,'Jean Hombre Genou',740.00,'tUAK1hPu1TzSqkjasOZFWVLl4Pc3AMHvCxI75Ovt.webp','Lorem','JN'),(45,'Jean Hombre Lee Ridwer',770.00,'N4ciasAvZ0chqeog9qP4YGm94HpccwNPk4ZXHJIO.jpeg','Lorem','JN'),(46,'Jean Hombre Luke',730.00,'1DFw2iFvR9azIibJxmbiBeBIKudchSKAzd06XrMX.jpeg','Lorem','JN'),(47,'Jean Mujer Pepe',730.00,'V1F7DU30fDqfvrePCKIWT1b5QYOT47GxAsO4dG83.jpeg','Lorem','JN'),(48,'Jean Mujer Recto',770.00,'XMnTlMwianYvSH47xiSHJoSVgkNn9dNTAki3r3zW.jpeg','Lorem','JN'),(49,'Jean Mujer Reg',780.00,'SGavOxMBfQKrgEseQvmQ4iYvDdUQOuHAFxIOWnY5.jpeg','Lorem','JN'),(50,'Jean Hombre Member',750.00,'8RI0UkR0WSJYQ8p1i80Krwqe1OOLpPqaCuPeVPMl.jpeg','Lorem','JN'),(51,'Buzo Hombre AC/DC',1290.00,'h2pioRpuj6uumvrMFlX4kYLFoB5bn7zU843hVYOR.webp','Lorem','BZ'),(52,'Buzo Hombre Azul',1210.00,'90lyOcCzMeViAYzo7JqIr3QVFdXPHnjsAq79tjRX.webp','Lorem','BZ'),(53,'Buzo Hombre Bong',1260.00,'2ScPXEhrUtItZKRQJDUB4xTc4ZrYWttHu0UmVBzV.webp','Lorem','BZ'),(54,'Buzo Hombre Gris',1200.00,'F6JqvSq8yp90oDV1LXXwk6S4dVsCQtZiQ8SDiv6f.webp','Lorem','BZ'),(55,'Buzo Mujer Ariana Grande',1280.00,'imLNEAWDYiNDttsGqqDcogci8BWbzL0QGBG0ucSj.webp','Lorem','BZ'),(56,'Buzo Mujer Entallado',1290.00,'Nqhp1JKhoYXrDzh20wzmiLaTcAiFjXrbjNSte8bh.webp','Lorem','BZ'),(57,'Buzo Mujer Marilyn',1240.00,'3NJdAzeGAt8Zz7pDdRPKOxWeedwahpDQYzLrrQEy.webp','Lorem','BZ'),(58,'Buzo Mujer Naruto',1250.00,'BgB3zMZEL06pFNQEYJRtYidNDFBDRuaR5q9L365n.webp','Lorem','BZ'),(59,'Buzo Hombre Homero',1240.00,'OyOKp2nXy0tQBNUfn67xf6C9h94ZeAfhbtiAxCYu.webp','Lorem','BZ'),(60,'Buzo Hombre Nirvana',1250.00,'lYVSy1GLeXkG68AwNNNDN8PGvVnwUYRO7v2geNgg.webp','Lorem','BZ'),(61,'Buzo Hombre BS',1260.00,'O6t04FEAxaDHQfZaKRQMrjSPDufivaSSSrbPiWNj.webp','Lorem','BZ'),(62,'Buzo Hombre Thrasher',1250.00,'SFGlxhEmfOXgFvGaxu7Lf8rivnigH8V7MExPzT7y.webp','Lorem','BZ'),(63,'Buzo Mujer RS',1220.00,'FJiESNs5xBmypMwBtuz8yAIL3rM1q25MNmNeeiIU.webp','Lorem','BZ'),(64,'Buzo Mujer SS Serpents',1250.00,'XM9Hw6dw1llZaAp68LtfJ9B43cJav5rKiHg32a6i.webp','Lorem','BZ'),(65,'Buzo Mujer Stranger Things',1250.00,'ttkvhUxt0DMUJZLVdh4soAO54588SNx3nRnE8uUL.webp','Lorem','BZ'),(66,'Buzo Mujer Tøp Trench',1290.00,'sl6AfHcydXHccpXpKzfmodQxfbzygFQO7i4TRmw4.webp','Lorem','BZ'),(67,'Borcego Mujer Cuero Citadina',2200.00,'UH4EywgAF0Jy4nY72uhio1TOFHENnHHRMJn9xTV4.webp','Lorem','CL'),(68,'Borcego Mujer Cuero Vacuno',2300.00,'kNbII0FjdX2x3dINrb0T8g8WRdFxwqm9atic2uNi.webp','Lorem','CL'),(69,'Borcego Mujer Cuero Charol',2500.00,'Smxx7dg1hM7iNAuySdIxjsqSeOXPCLWKWnamxkbX.webp','Lorem','CL'),(70,'Borcego Hombre Bourbon Store',2200.00,'RXapwZSiZTGmz66XBHpRrwgkAYAMzv6vIWLeM9Sg.webp','Lorem','CL'),(71,'Borcego Hombre Manolo Tibay',2400.00,'sIxsJadWqqcXTktVEL9S9PVbNAwgkjjkSZ2E0ej5.webp','Lorem','CL'),(72,'Borcego Hombre Stork',2300.00,'tvsv7sdjw5U9h8kBonj9aKroyUfr6C01CgVPeL9t.webp','Lorem','CL'),(73,'Zapatillas Mujer Grises',600.00,'MMOlWqKFYEAKXcYaSks3yO31HawQbgxxr39gqqbO.webp','Lorem','CL'),(74,'Zapatillas Mujer Militares',800.00,'HZvA8gwo1by1l1XLNSoid41VKs2CZg5MTPu8QTZU.webp','Lorem','CL'),(75,'Zapatillas Mujer Rojas y Negras',700.00,'YxtXvdWKuksAumLD3xfPCuUEdYifZdr84eEqjsL0.webp','Lorem','CL'),(76,'Zapatillas Hombre Negras',600.00,'ErcwLfBY1vqzMbn1tcO5fi57RNJGMadPr8HcNbOq.webp','Lorem','CL'),(77,'Zapatillas Hombre Verde Claro',750.00,'4yMiQwru6C4qufm3VU6r1AYGQd35ZwEfriyVIITq.webp','Lorem','CL'),(78,'Zapatillas Hombre Verde Oscuro',750.00,'ks2ymkhq6hbFzBowRDZrF8B32v0cOm8tofszhmBw.webp','Lorem','CL');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Franco','fgt-1995@hotmail.com',NULL,'$2y$10$P5XzVwfsCZykGWSP85ImWeM4nolL1n4rzN7LDvsmqgrsYx9ELScU.',NULL,'2020-01-15 04:09:54','2020-01-15 04:09:54',9),(4,'Nicolas','nromano17@gmail.com',NULL,'$2y$10$4CQt.X28dKUij2ujpjihM.VIE0QKgybW7xILp/Iz7lZ12JbvG7IPu',NULL,'2020-01-15 05:12:03','2020-01-15 05:12:03',1),(5,'Magali','magaliguala_97@hotmail.com',NULL,'$2y$10$lISwIego0sg1KZDm8kuFnuIMeNgkvwH1NGvRn440N8sWrq2ROHXj6',NULL,'2020-01-15 22:22:44','2020-01-15 22:22:44',1);
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

-- Dump completed on 2020-01-19 17:24:27
