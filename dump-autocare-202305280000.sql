-- MySQL dump 10.13  Distrib 5.7.23, for macos10.13 (x86_64)
--
-- Host: 127.0.0.1    Database: autocare
-- ------------------------------------------------------
-- Server version	5.7.23

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
-- Table structure for table `appointment_activity`
--

DROP TABLE IF EXISTS `appointment_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointment_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment_activity`
--

LOCK TABLES `appointment_activity` WRITE;
/*!40000 ALTER TABLE `appointment_activity` DISABLE KEYS */;
INSERT INTO `appointment_activity` VALUES (14,16,3,'<p>fwafawfawfasf</p>','/public/project_acticivity_images/14/Hakeem647225f0c3a81.jpg','2023-05-27 10:16:56','2023-05-27 10:16:56'),(15,16,3,'<p>VEWFWFW</p>','/public/project_acticivity_images/15/Hakeem64722b08bedd6.jpg','2023-05-27 10:38:40','2023-05-27 10:38:40'),(16,16,3,'<p>TODAY ADDED COMPLE OF THINGS</p>','/public/project_acticivity_images/16/Hakeem64722b2cd8125.jpg','2023-05-27 10:39:16','2023-05-27 10:39:16');
/*!40000 ALTER TABLE `appointment_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `vehicle_id` bigint(20) unsigned NOT NULL,
  `status` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `appointment_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointments_customer_id_foreign` (`customer_id`),
  KEY `appointments_vehicle_id_foreign` (`vehicle_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (1,1,1,'pending','0','2023-05-07 18:57:00','2023-05-01 08:01:37','2023-05-01 08:01:37'),(3,1,1,'pending','0','2023-05-02 19:07:00','2023-05-01 08:07:37','2023-05-01 08:07:37'),(4,5,1,'pending','0','2023-05-08 19:10:00','2023-05-01 08:38:23','2023-05-01 08:38:23'),(5,5,1,'pending','0','2023-05-08 19:10:00','2023-05-01 08:39:46','2023-05-01 08:39:46'),(6,5,1,'pending','0','2023-05-08 19:10:00','2023-05-01 08:40:28','2023-05-01 08:40:28'),(7,1,7,'pending','0','2023-05-17 22:29:00','2023-05-01 11:30:10','2023-05-01 11:30:10'),(8,1,7,'pending','0','2023-05-17 22:29:00','2023-05-01 11:33:10','2023-05-01 11:33:10'),(9,1,7,'pending','0','2023-05-17 22:29:00','2023-05-01 11:33:42','2023-05-01 11:33:42'),(10,1,7,'pending','0','2023-05-17 22:29:00','2023-05-01 11:33:46','2023-05-01 11:33:46'),(11,7,11,'pending','0','2023-05-18 22:35:00','2023-05-01 11:36:35','2023-05-01 11:36:35'),(12,7,11,'pending','0','2023-05-18 22:35:00','2023-05-01 11:37:09','2023-05-01 11:37:09'),(13,1,4,'pending','0','2023-05-14 17:19:00','2023-05-03 06:21:54','2023-05-03 06:21:54'),(14,0,0,'beatae','0','2020-05-05 21:04:24','2023-05-03 10:16:18','2023-05-03 10:16:18'),(15,1,4,'pending','0','2023-05-19 17:19:00','2023-05-27 06:22:20','2023-05-27 06:22:20'),(16,1,4,'in_percentage','25','2023-05-19 17:19:00','2023-05-27 06:22:40','2023-05-27 10:38:58');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `current_status_images`
--

DROP TABLE IF EXISTS `current_status_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `current_status_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `repair_id` bigint(20) unsigned NOT NULL,
  `path` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) unsigned NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `current_status_images_repair_id_foreign` (`repair_id`),
  KEY `current_status_images_employee_id_foreign` (`employee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `current_status_images`
--

LOCK TABLES `current_status_images` WRITE;
/*!40000 ALTER TABLE `current_status_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `current_status_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,3,'Hakeem','hakeem@gmail.com','01077154546','1831  Derek Drive','2023-05-27 06:09:28','2023-05-27 06:09:28');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('employee','manager') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Nibras','Nibras@gmail.com','Welcome1','Watadeniya','0776920820','manager',NULL,'2023-04-30 11:53:53','2023-04-30 11:53:53'),(2,'John Doe','john.doe@autocare.com','$2y$10$K.B6H33cz8WkDukUuZ7GCOgyX84vQ8WxPdTYllGkfn72.wul80v2m','123 Main St, Anytown USA','555-1234','employee',NULL,'2023-04-30 17:29:52','2023-04-30 17:29:52'),(3,'Jane Doe','jane.doe@autocare.com','$2y$10$K.B6H33cz8WkDukUuZ7GCOgyX84vQ8WxPdTYllGkfn72.wul80v2m','456 Oak St, Anytown USA','555-5678','employee',NULL,'2023-04-30 17:29:52','2023-04-30 17:29:52'),(4,'Bob Smith','bob.smith@autocare.com','$2y$10$K.B6H33cz8WkDukUuZ7GCOgyX84vQ8WxPdTYllGkfn72.wul80v2m','789 Elm St, Anytown USA','555-9012','employee',NULL,'2023-04-30 17:29:52','2023-04-30 17:29:52'),(5,'Sue Smith','sue.smith@autocare.com','$2y$10$K.B6H33cz8WkDukUuZ7GCOgyX84vQ8WxPdTYllGkfn72.wul80v2m','1011 Pine St, Anytown USA','555-3456','employee',NULL,'2023-04-30 17:29:52','2023-04-30 17:29:52'),(6,'Mike Johnson','mike.johnson@autocare.com','$2y$10$K.B6H33cz8WkDukUuZ7GCOgyX84vQ8WxPdTYllGkfn72.wul80v2m','1213 Cedar St, Anytown USA','555-7890','employee',NULL,'2023-04-30 17:29:52','2023-04-30 17:29:52'),(7,'Emily Johnson','emily.johnson@autocare.com','$2y$10$K.B6H33cz8WkDukUuZ7GCOgyX84vQ8WxPdTYllGkfn72.wul80v2m','1415 Maple St, Anytown USA','555-2345','employee',NULL,'2023-04-30 17:29:52','2023-04-30 17:29:52'),(8,'Tom Brown','tom.brown@autocare.com','$2y$10$K.B6H33cz8WkDukUuZ7GCOgyX84vQ8WxPdTYllGkfn72.wul80v2m','1617 Oak St, Anytown USA','555-6789','employee',NULL,'2023-04-30 17:29:52','2023-04-30 17:29:52'),(9,'Lisa Brown','lisa.brown@autocare.com','$2y$10$K.B6H33cz8WkDukUuZ7GCOgyX84vQ8WxPdTYllGkfn72.wul80v2m','1819 Pine St, Anytown USA','555-1234','employee',NULL,'2023-04-30 17:29:52','2023-04-30 17:29:52');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financials`
--

DROP TABLE IF EXISTS `financials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `financials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `repair_id` int(11) NOT NULL DEFAULT '0',
  `amount` double(8,2) NOT NULL,
  `transaction_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financials`
--

LOCK TABLES `financials` WRITE;
/*!40000 ALTER TABLE `financials` DISABLE KEYS */;
/*!40000 ALTER TABLE `financials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `spare_part_id` bigint(20) unsigned NOT NULL,
  `quantity_on_hand` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inventory_spare_part_id_foreign` (`spare_part_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory`
--

LOCK TABLES `inventory` WRITE;
/*!40000 ALTER TABLE `inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturers`
--

DROP TABLE IF EXISTS `manufacturers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacturers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturers`
--

LOCK TABLES `manufacturers` WRITE;
/*!40000 ALTER TABLE `manufacturers` DISABLE KEYS */;
INSERT INTO `manufacturers` VALUES (1,'Toyota'),(2,'Ford'),(3,'Honda'),(4,'Chevrolet'),(5,'Nissan'),(6,'Hyundai'),(7,'Kia'),(8,'Volkswagen'),(9,'BMW'),(10,'Mercedes-Benz');
/*!40000 ALTER TABLE `manufacturers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (5,'2023_01_24_144343_create_vehicles_table',1),(6,'2023_01_25_100458_create_suppliers_table',1),(7,'2023_01_25_103741_create_spareparts_table',1),(8,'2023_01_25_135527_create_current_status_images_table',1),(9,'2023_01_25_135643_create_customers_table',1),(10,'2023_01_25_135707_create_employees_table',1),(11,'2023_01_25_135736_create_financials_table',1),(12,'2023_01_25_135831_create_inventory_table',1),(13,'2023_01_25_135920_create_orders_table',1),(14,'2023_01_25_135954_create_repair_updates_table',1),(15,'2023_01_25_140130_create_repair_images_table',1),(16,'2023_01_25_140212_create_repair_details_table',1),(17,'2023_01_25_140231_create_repairs_table',1),(18,'2023_01_25_140259_create_repair_types_table',1),(19,'2023_01_25_140433_create_supplierinventory_table',1),(20,'2023_01_25_140529_create_todo_list_table',1),(21,'2023_01_25_140648_create_appointments_table',1),(22,'2023_01_26_144944_create_manufacturer_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `spare_part_id` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` enum('ordered','on-process','shipped') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_customer_id_foreign` (`customer_id`),
  KEY `orders_spare_part_id_foreign` (`spare_part_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,25,5,'ordered','2023-05-01 06:04:36','2023-05-01 06:04:36');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair_details`
--

DROP TABLE IF EXISTS `repair_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `repair_id` bigint(20) DEFAULT NULL,
  `repair_type_id` bigint(20) unsigned NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimated_cost` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `repair_details_repair_type_id_foreign` (`repair_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_details`
--

LOCK TABLES `repair_details` WRITE;
/*!40000 ALTER TABLE `repair_details` DISABLE KEYS */;
INSERT INTO `repair_details` VALUES (1,28,1,'Oil Change',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(2,28,2,'Brake Service',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(3,28,3,'Battery Replacement',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(4,28,4,'Tire Rotation',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(5,28,5,'Air Conditioning Repair',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(6,28,10,'Fuel System Repair',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(7,28,12,'Exhaust System Repair',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(8,28,13,'Engine Repair',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(9,28,14,'Cooling System Repair',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(10,28,16,'Windshield Replacement',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(11,28,18,'Diagnostic Service',500.00,'2023-05-01 08:40:28','2023-05-01 08:40:28'),(12,28,1,'Oil Change',500.00,'2023-05-01 11:37:09','2023-05-01 11:37:09'),(13,NULL,2,'Brake Service',500.00,'2023-05-01 11:37:09','2023-05-01 11:37:09'),(14,NULL,1,'Oil Change',500.00,'2023-05-03 06:21:54','2023-05-03 06:21:54'),(15,NULL,2,'Brake Service',500.00,'2023-05-03 06:21:54','2023-05-03 06:21:54'),(16,NULL,3,'Battery Replacement',500.00,'2023-05-03 06:21:54','2023-05-03 06:21:54'),(17,NULL,4,'Tire Rotation',500.00,'2023-05-03 06:21:54','2023-05-03 06:21:54'),(18,NULL,5,'Air Conditioning Repair',500.00,'2023-05-03 06:21:54','2023-05-03 06:21:54'),(19,NULL,6,'Suspension Repair',500.00,'2023-05-03 06:21:54','2023-05-03 06:21:54'),(20,NULL,7,'Transmission Repair',500.00,'2023-05-03 06:21:54','2023-05-03 06:21:54'),(21,NULL,1,'Oil Change',500.00,'2023-05-27 06:22:41','2023-05-27 06:22:41'),(22,NULL,2,'Brake Service',500.00,'2023-05-27 06:22:41','2023-05-27 06:22:41'),(23,NULL,3,'Battery Replacement',500.00,'2023-05-27 06:22:41','2023-05-27 06:22:41'),(24,NULL,4,'Tire Rotation',500.00,'2023-05-27 06:22:41','2023-05-27 06:22:41');
/*!40000 ALTER TABLE `repair_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair_images`
--

DROP TABLE IF EXISTS `repair_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `repair_id` bigint(20) unsigned NOT NULL,
  `path` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `repair_images_repair_id_foreign` (`repair_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_images`
--

LOCK TABLES `repair_images` WRITE;
/*!40000 ALTER TABLE `repair_images` DISABLE KEYS */;
INSERT INTO `repair_images` VALUES (1,3,'/storage/images/repair_images/1682950228.png','2023-05-01 08:40:28','2023-05-01 08:40:28'),(2,9,'/storage/1682960829.png','2023-05-01 11:37:09','2023-05-01 11:37:09'),(3,26,'/storage/images/repair_images/LJClafAR3mIGXcDSd7lCeY2VpyxlDmOZUKEktAuy.jpg','2023-05-03 06:21:54','2023-05-03 06:21:54'),(4,28,'/storage/images/repair_images/y8YY8PvTgPs9vOT1tpwz3wI6Jl7qWxkmlZD59PpD.jpg','2023-05-27 06:22:41','2023-05-27 06:22:41');
/*!40000 ALTER TABLE `repair_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair_types`
--

DROP TABLE IF EXISTS `repair_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_types`
--

LOCK TABLES `repair_types` WRITE;
/*!40000 ALTER TABLE `repair_types` DISABLE KEYS */;
INSERT INTO `repair_types` VALUES (1,'Oil Change','Replacing old engine oil with new engine oil.',NULL,NULL),(2,'Brake Service','Replacing brake pads, brake rotors, and calipers as necessary.',NULL,NULL),(3,'Battery Replacement','Replacing an old or failing battery with a new one.',NULL,NULL),(4,'Tire Rotation','Moving tires from one position to another, promoting even tire wear.',NULL,NULL),(5,'Air Conditioning Repair','Diagnosing and fixing issues with the vehicle\'s air conditioning system.',NULL,NULL),(6,'Suspension Repair','Repairing or replacing suspension components, such as shocks and struts.',NULL,NULL),(7,'Transmission Repair','Diagnosing and fixing issues with the vehicle\'s transmission.',NULL,NULL),(8,'Body Work','Repairing damage to the body of the vehicle, such as dents or scratches.',NULL,NULL),(9,'Wheel Alignment','Aligning the wheels of the vehicle to prevent uneven tire wear.',NULL,NULL),(10,'Fuel System Repair','Diagnosing and fixing issues with the vehicle\'s fuel system.',NULL,NULL),(11,'Electrical Repair','Diagnosing and fixing issues with the vehicle\'s electrical system.',NULL,NULL),(12,'Exhaust System Repair','Repairing or replacing exhaust system components, such as the muffler.',NULL,NULL),(13,'Engine Repair','Diagnosing and fixing issues with the vehicle\'s engine.',NULL,NULL),(14,'Cooling System Repair','Diagnosing and fixing issues with the vehicle\'s cooling system.',NULL,NULL),(15,'Steering System Repair','Repairing or replacing steering system components, such as the power steering pump.',NULL,NULL),(16,'Windshield Replacement','Replacing a cracked or broken windshield with a new one.',NULL,NULL),(17,'Interior Repair','Repairing or replacing interior components, such as the seats or dashboard.',NULL,NULL),(18,'Diagnostic Service','Diagnosing issues with the vehicle that are causing it to perform poorly.',NULL,NULL),(19,'Car Wash','Cleaning the exterior of the vehicle to remove dirt and grime.',NULL,NULL),(20,'Detailing Service','Cleaning both the interior and exterior of the vehicle to restore its original appearance.',NULL,NULL),(21,'quaerat','facilis','2023-05-03 10:14:32','2023-05-03 10:14:32'),(22,'tenetur','deserunt','2017-03-12 22:14:25','2006-01-31 06:59:12'),(23,'eveniet','tempora','2008-10-23 06:38:36','2023-05-03 10:14:32');
/*!40000 ALTER TABLE `repair_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair_updates`
--

DROP TABLE IF EXISTS `repair_updates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair_updates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `repair_id` bigint(20) unsigned NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimated_cost` double(8,2) NOT NULL,
  `employee_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `repair_updates_repair_id_foreign` (`repair_id`),
  KEY `repair_updates_employee_id_foreign` (`employee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_updates`
--

LOCK TABLES `repair_updates` WRITE;
/*!40000 ALTER TABLE `repair_updates` DISABLE KEYS */;
/*!40000 ALTER TABLE `repair_updates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repairs`
--

DROP TABLE IF EXISTS `repairs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repairs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `appointment_id` bigint(20) unsigned NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `repairs_appointment_id_foreign` (`appointment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repairs`
--

LOCK TABLES `repairs` WRITE;
/*!40000 ALTER TABLE `repairs` DISABLE KEYS */;
INSERT INTO `repairs` VALUES (1,4,'Full Repair','Overall Repair',100.00,'2023-05-01 08:38:23','2023-05-01 08:38:23'),(2,5,'Full Repair','Overall Repair',100.00,'2023-05-01 08:39:46','2023-05-01 08:39:46'),(23,6,'eum','voluptatem',628.08,'1991-11-18 02:05:42','2011-11-28 03:19:20'),(4,7,'Paint Job','Rusted Parts has to be painted',50000.00,'2023-05-01 11:30:10','2023-05-01 11:30:10'),(5,8,'Paint Job','Rusted Parts has to be painted',50000.00,'2023-05-01 11:33:10','2023-05-01 11:33:10'),(6,9,'Paint Job','Rusted Parts has to be painted',50000.00,'2023-05-01 11:33:42','2023-05-01 11:33:42'),(7,10,'Paint Job','Rusted Parts has to be painted',50000.00,'2023-05-01 11:33:46','2023-05-01 11:33:46'),(8,11,'Full Paint','full paint',500.00,'2023-05-01 11:36:35','2023-05-01 11:36:35'),(22,1684,'architecto','possimus',447.58,'2023-05-02 12:50:00','2023-05-02 12:50:00'),(10,0,'voluptatem','officia',9.00,'2023-05-02 07:57:13','2023-05-02 07:57:13'),(11,0,'ut','expedita',4.00,'2023-05-02 07:58:50','2023-05-02 07:58:50'),(12,53,'maxime','et',709.34,'2023-05-02 08:43:54','2023-05-02 08:43:54'),(13,35,'sed','alias',46.96,'1994-10-03 03:14:16','1989-04-25 04:28:08'),(14,79,'eos','aliquid',955.62,'2023-05-02 08:44:35','2023-05-02 08:44:35'),(15,25,'similique','ab',399.08,'2004-04-13 18:08:54','1988-12-28 20:31:41'),(16,71,'dolorem','quia',439.08,'2023-05-02 08:45:02','2023-05-02 08:45:02'),(17,12,'ea','sed',289.45,'1998-10-11 05:44:00','2011-09-04 08:38:13'),(18,471,'et','blanditiis',475.57,'2023-05-02 08:45:19','2023-05-02 08:45:19'),(19,662857,'optio','distinctio',357.52,'2012-11-03 12:06:29','1999-03-19 15:33:47'),(20,5152410,'tempore','dolorem',738.49,'1989-03-04 12:45:51','2023-05-02 08:45:19'),(24,7,'mollitia','placeat',883.34,'1993-01-04 00:07:40','2023-05-02 12:50:00'),(26,13,'Full Body Repair','Major Colliton Repair',500000.00,'2023-05-03 06:21:54','2023-05-03 06:21:54'),(27,15,'Test','wdqwd',313.00,'2023-05-27 06:22:20','2023-05-27 06:22:20'),(28,16,'Test','wdqwd',313.00,'2023-05-27 06:22:40','2023-05-27 06:22:40');
/*!40000 ALTER TABLE `repairs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spareparts`
--

DROP TABLE IF EXISTS `spareparts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spareparts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_number` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('body','engine','interior') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'body',
  `vehicle_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `spareparts_vehicle_id_foreign` (`vehicle_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spareparts`
--

LOCK TABLES `spareparts` WRITE;
/*!40000 ALTER TABLE `spareparts` DISABLE KEYS */;
INSERT INTO `spareparts` VALUES (1,'Front Bumper','TOY001-BP-FR','body',1,NULL,NULL),(2,'Rear Bumper','TOY001-BP-RE','body',1,NULL,NULL),(3,'Engine Oil Filter','TOY001-FIL-EO','engine',1,NULL,NULL),(4,'Air Filter','TOY001-FIL-AI','engine',1,NULL,NULL),(5,'Spark Plug','TOY001-SPK','engine',1,NULL,NULL),(6,'Brake Pad','TOY001-BRK-PD','interior',1,NULL,NULL),(7,'Floor Mat','TOY001-INT-MT','interior',1,NULL,NULL),(8,'Dashboard Cover','TOY001-INT-DC','interior',1,NULL,NULL),(9,'Seat Cover','TOY001-INT-SC','interior',1,NULL,NULL),(10,'Steering Wheel Cover','TOY001-INT-SW','interior',1,NULL,NULL),(11,'Front Windshield','TOY002-GLS-FR','body',2,NULL,NULL),(12,'Rear Windshield','TOY002-GLS-RE','body',2,NULL,NULL),(13,'Air Filter','TOY002-FIL-AI','engine',2,NULL,NULL),(14,'Fuel Filter','TOY002-FIL-FL','engine',2,NULL,NULL),(15,'Alternator','TOY002-ALT','engine',2,NULL,NULL),(16,'Brake Shoe','TOY002-BRK-SH','interior',2,NULL,NULL),(17,'Seat Cover','TOY002-INT-SC','interior',2,NULL,NULL),(18,'Sun Visor','TOY002-INT-SV','interior',2,NULL,NULL),(19,'Dashboard Cover','TOY002-INT-DC','interior',2,NULL,NULL),(20,'Nissan Altima Front Bumper','NSN-ALT-FB-001','body',11,NULL,NULL),(21,'Nissan Altima Rear Bumper','NSN-ALT-RB-001','body',11,NULL,NULL),(22,'Nissan Altima Engine Oil Filter','NSN-ALT-EOF-001','engine',11,NULL,NULL),(23,'Nissan Altima Air Filter','NSN-ALT-AF-001','engine',11,NULL,NULL),(24,'Nissan Altima Power Window Switch','NSN-ALT-PWS-001','interior',11,NULL,NULL),(25,'Nissan Sentra Front Bumper','NSN-SEN-FB-001','body',12,NULL,NULL),(26,'Nissan Sentra Rear Bumper','NSN-SEN-RB-001','body',12,NULL,NULL),(27,'Nissan Sentra Spark Plug','NSN-SEN-SP-001','engine',12,NULL,NULL),(28,'Nissan Sentra Alternator','NSN-SEN-AL-001','engine',12,NULL,NULL),(29,'Nissan Sentra Floor Mats','NSN-SEN-FM-001','interior',12,NULL,NULL),(30,'Nissan Rogue Front Bumper','NSN-ROG-FB-001','body',13,NULL,NULL),(31,'Nissan Rogue Rear Bumper','NSN-ROG-RB-001','body',13,NULL,NULL),(32,'Nissan Rogue Cabin Air Filter','NSN-ROG-CAF-001','engine',13,NULL,NULL),(33,'Nissan Rogue Engine Air Filter','NSN-ROG-EAF-001','engine',13,NULL,NULL),(34,'Nissan Rogue Floor Mats','NSN-ROG-FM-001','interior',13,NULL,NULL),(35,'Nissan Pathfinder Front Bumper','NSN-PAT-FB-001','body',14,NULL,NULL),(36,'Nissan Pathfinder Rear Bumper','NSN-PAT-RB-001','body',14,NULL,NULL),(37,'Nissan Pathfinder Brake Pads','NSN-PAT-BP-001','engine',14,NULL,NULL),(38,'Nissan Pathfinder Radiator','NSN-PAT-RAD-001','engine',14,NULL,NULL),(39,'Nissan Pathfinder Seat Covers','NSN-PAT-SC-001','interior',14,NULL,NULL);
/*!40000 ALTER TABLE `spareparts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_inventory`
--

DROP TABLE IF EXISTS `supplier_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier_inventory` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quantity_on_hand` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `supplier_id` bigint(20) NOT NULL,
  `spare_part_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_inventory`
--

LOCK TABLES `supplier_inventory` WRITE;
/*!40000 ALTER TABLE `supplier_inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `suppliers_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,'ABC Spare Parts','abcspareparts@gmail.com','0112345678','No.123, Main Street, Colombo, Sri Lanka',NULL,NULL),(2,'XYZ Auto Parts','xyzautoparts@gmail.com','0713456789','No.456, Galle Road, Kandy, Sri Lanka',NULL,NULL),(3,'Sri Lanka Auto Parts','slautoparts@gmail.com','0314567890','No.789, Negombo Road, Negombo, Sri Lanka',NULL,NULL),(4,'Lanka Auto Spares','lankaautospares@gmail.com','0771234567','No.456, Main Street, Kurunegala, Sri Lanka',NULL,NULL),(5,'Auto Parts Center','autopartscenter@gmail.com','0812345678','No.567, Trincomalee Road, Batticaloa, Sri Lanka',NULL,NULL),(6,'Supreme Auto Parts','supremeautoparts@gmail.com','0712345678','No.234, Main Street, Gampaha, Sri Lanka',NULL,NULL),(7,'Sri Lanka Auto Accessories','slautoaccessories@gmail.com','0113456789','No.567, Colombo Road, Kalutara, Sri Lanka',NULL,NULL),(8,'Lanka Auto Garage','lankaautogarage@gmail.com','0712345678','No.345, Negombo Road, Ja-Ela, Sri Lanka',NULL,NULL),(9,'Auto Parts Lanka','autopartslanka@gmail.com','0773456789','No.678, Galle Road, Matara, Sri Lanka',NULL,NULL),(10,'Sri Lanka Auto Mart','slautomart@gmail.com','0312345678','No.123, Kandy Road, Kurunegala, Sri Lanka',NULL,NULL);
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todo_list`
--

DROP TABLE IF EXISTS `todo_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todo_list` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `repair_id` bigint(20) unsigned NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimated_cost` double(8,2) NOT NULL,
  `status` enum('pending','in_progress','completed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `todo_list_repair_id_foreign` (`repair_id`),
  KEY `todo_list_employee_id_foreign` (`employee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todo_list`
--

LOCK TABLES `todo_list` WRITE;
/*!40000 ALTER TABLE `todo_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `todo_list` ENABLE KEYS */;
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
  `role` enum('admin','manager','customer') COLLATE utf8mb4_unicode_ci DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','Admin@gmail.com',NULL,'$2y$10$Mm9ctXot7bKkzAX7PkZHcetUAs9LI4A1fxm5VFGS2GfzF8ENmM2Ta','w7b65UIkQrKqtW8HaOdtfJsEgT39JNq2ByoKRMljBQ6Y384Mu9amsBcsu5jN','2023-05-02 09:39:05','2023-05-02 09:39:05','admin'),(2,'Nibras','Nibras@gmail.com',NULL,'$2y$10$cKk28scLFsYtJcqiNh7mzuURgcrOF3AS5QCqVdLqLB6zFwnm/7HYy',NULL,'2023-05-03 06:25:58','2023-05-03 06:25:58','customer'),(3,'Hakeem','hakeem@gmail.com',NULL,'$2y$10$Jm29eBAl.OLtv/SkwrfPBO3BNszwzqTAH2fMpN4q7ElpOSyrKx89q',NULL,'2023-05-27 06:09:28','2023-05-27 06:09:28','customer');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('van','car','suv','heavy','un_specified') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'un_specified',
  `manufacturer_id` bigint(20) unsigned NOT NULL,
  `year` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicles_manufacturer_id_foreign` (`manufacturer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles`
--

LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` VALUES (1,'Corolla','car',1,2022,NULL,NULL),(2,'Fortuner','suv',1,2022,NULL,NULL),(3,'Hilux','heavy',1,2022,NULL,NULL),(4,'Ranger','heavy',2,2022,NULL,NULL),(5,'Mustang','car',2,2022,NULL,NULL),(6,'Civic','car',3,2022,NULL,NULL),(7,'CR-V','suv',3,2022,NULL,NULL),(8,'Tahoe','suv',4,2022,NULL,NULL),(9,'Silverado','heavy',4,2022,NULL,NULL),(10,'Altima','car',5,2022,NULL,NULL),(11,'Sentra','car',5,2022,NULL,NULL),(12,'Elantra','car',6,2022,NULL,NULL),(13,'Rouge','suv',6,2022,NULL,NULL),(14,'Sorento','suv',7,2022,NULL,NULL),(15,'Seltos','suv',7,2022,NULL,NULL),(16,'Jetta','car',8,2022,NULL,NULL),(17,'Atlas','suv',8,2022,NULL,NULL),(18,'X3','car',9,2022,NULL,NULL),(19,'X5','suv',9,2022,NULL,NULL),(20,'C-Class','car',10,2022,NULL,NULL);
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'autocare'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-28  0:00:43
