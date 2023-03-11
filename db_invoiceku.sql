-- MariaDB dump 10.19  Distrib 10.10.3-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: db_invoiceku
-- ------------------------------------------------------
-- Server version	10.10.3-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `invoice_details`
--

-- DROP TABLE IF EXISTS `invoice_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice_details` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `detail_date` datetime NOT NULL,
  `flight` varchar(100) NOT NULL,
  `booking` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(19,2) NOT NULL,
  `total_details` decimal(19,2) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice_details`
--

LOCK TABLES `invoice_details` WRITE;
/*!40000 ALTER TABLE `invoice_details` DISABLE KEYS */;
INSERT INTO `invoice_details` VALUES
(1,1,'Test','2023-03-07 00:00:00','Garuda','PX987',1,1540000.00,1540000.00,'2023-03-07 03:28:53'),
(2,1,'tersds','2023-03-02 00:00:00','Garuda','PX987',2,1540000.00,3080000.00,'2023-03-07 03:28:53'),
(3,2,'tesrr','2023-03-07 00:00:00','Garuda','PX987',1,1540000.00,1540000.00,'2023-03-07 03:30:31'),
(4,3,'asdasd','2023-03-02 00:00:00','Garuda','PX987',2,154000.00,308000.00,'2023-03-07 03:36:40');
/*!40000 ALTER TABLE `invoice_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoices` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `from` text NOT NULL,
  `billto` text NOT NULL,
  `invoice_date` datetime NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `total_invoice` decimal(19,2) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'NOT PAID',
  `payment` varchar(100) DEFAULT NULL,
  `tax` decimal(19,2) NOT NULL,
  `service` decimal(19,2) NOT NULL,
  `note` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
INSERT INTO `invoices` VALUES
(1,'PT.BERSAMA MENITI NUR\r\nRUKO BATAVIA BLOK LC 8 NO.23 KELAPA GADING JAKARTA 14240\r\nIndonesia 021-56515461 (0812389980932)\r\nbersamamenitinur@gmail.com\r\nPT.BERSAMA MENITI NUR','PT ESLINE SUMBER ENERGI\r\nRUKO BATAVIA BLOK LC 10 NO 12 KELAPA GADING JAKARTA 14240\r\nINDONESIA','2023-03-07 00:00:00','1',4620000.00,'NOT PAID',NULL,508200.00,231000.00,'','2023-03-07 03:28:53'),
(2,'PT.BERSAMA MENITI NUR\r\nRUKO BATAVIA BLOK LC 8 NO.23 KELAPA GADING JAKARTA 14240\r\nIndonesia 021-56515461 (0812389980932)\r\nbersamamenitinur@gmail.com\r\nPT.BERSAMA MENITI NUR','PT ESLINE SUMBER ENERGI\r\nRUKO BATAVIA BLOK LC 10 NO 12 KELAPA GADING JAKARTA 14240\r\nINDONESIA','2023-03-07 00:00:00','2',1540000.00,'NOT PAID',NULL,0.00,0.00,'','2023-03-07 03:30:31'),
(3,'PT.BERSAMA MENITI NUR\r\nRUKO BATAVIA BLOK LC 8 NO.23 KELAPA GADING JAKARTA 14240\r\nIndonesia 021-56515461 (0812389980932)\r\nbersamamenitinur@gmail.com\r\nPT.BERSAMA MENITI NUR','PT ESLINE SUMBER ENERGI\r\nRUKO BATAVIA BLOK LC 10 NO 12 KELAPA GADING JAKARTA 14240\r\nINDONESIA','2023-03-02 00:00:00','3',308000.00,'PAID','MANDIRI',33880.00,0.00,'An. Rohim Muhamad','2023-03-07 03:36:40');
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(15,'2023-03-04-155530','App\\Database\\Migrations\\CreateTableInvoice','default','App',1678133817,1),
(16,'2023-03-04-155533','App\\Database\\Migrations\\CreateTableInvoiceDetail','default','App',1678133817,1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-07  3:48:47
