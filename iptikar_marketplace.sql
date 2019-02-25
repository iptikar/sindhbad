-- MySQL dump 10.13  Distrib 5.6.33, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: iptikar-marketplace
-- ------------------------------------------------------
-- Server version	5.6.33-0ubuntu0.14.04.1

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
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `firstname` varchar(32) DEFAULT NULL COMMENT 'User First Name',
  `lastname` varchar(32) DEFAULT NULL COMMENT 'User Last Name',
  `email` varchar(128) DEFAULT NULL COMMENT 'User Email',
  `username` varchar(40) DEFAULT NULL COMMENT 'User Login',
  `password` varchar(255) NOT NULL COMMENT 'User Password',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'User Created Time',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'User Modified Time',
  `logdate` timestamp NULL DEFAULT NULL COMMENT 'User Last Login Time',
  `lognum` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'User Login Number',
  `reload_acl_flag` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Reload ACL',
  `is_active` smallint(6) NOT NULL DEFAULT '0' COMMENT 'User Is Active',
  `extra` text COMMENT 'User Extra Data',
  `rp_token` text COMMENT 'Reset Password Link Token',
  `rp_token_created_at` timestamp NULL DEFAULT NULL COMMENT 'Reset Password Link Token Creation Date',
  `interface_locale` varchar(16) NOT NULL DEFAULT 'en_US' COMMENT 'Backend interface locale',
  `failures_num` smallint(6) DEFAULT '0' COMMENT 'Failure Number',
  `first_failure` timestamp NULL DEFAULT NULL COMMENT 'First Failure',
  `lock_expires` timestamp NULL DEFAULT NULL COMMENT 'Expiration Lock Dates',
  `refresh_token` text COMMENT 'Email connector refresh token',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `ADMIN_USER_USERNAME` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Admin User Table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_user`
--

LOCK TABLES `admin_user` WRITE;
/*!40000 ALTER TABLE `admin_user` DISABLE KEYS */;
INSERT INTO `admin_user` VALUES (1,'sindhbad','sindhbad','admin@sindhbad.com','sindhbad','$2y$10$T5q6f.HzmwlNl/JqFkRQfO0CJ7UHEOeEkmzIKzv6ff519Pm989YVi','2018-09-16 06:19:04','2018-09-30 05:44:27','2018-09-30 05:44:27',5,0,1,NULL,NULL,NULL,'en_US',0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `admin_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`,`body`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'MySQL Tutorial','DBMS stands for DataBase ...'),(2,'How To Use MySQL Well','After you went through a ...'),(3,'Optimizing MySQL','In this tutorial we will show ...'),(4,'1001 MySQL Tricks','1. Never run mysqld as root. 2. ...'),(5,'MySQL vs. YourSQL','In the following database comparison ...'),(6,'MySQL Security','When configured properly, MySQL ...');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buyer`
--

DROP TABLE IF EXISTS `buyer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyer` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `website` varchar(16) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `group_id` smallint(5) DEFAULT NULL,
  `store_id` smallint(5) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `prifix` varchar(40) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `customer_entitycol` varchar(45) NOT NULL,
  `customer_type` varchar(20) NOT NULL,
  `suffix` varchar(225) NOT NULL,
  `DOB` datetime DEFAULT NULL,
  `password_hash` varchar(128) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rp_token` varchar(128) DEFAULT NULL,
  `rp_token_created_at` datetime DEFAULT NULL,
  `default_shipping` varchar(225) NOT NULL,
  `default_billing` varchar(225) NOT NULL,
  `verified` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyer`
--

LOCK TABLES `buyer` WRITE;
/*!40000 ALTER TABLE `buyer` DISABLE KEYS */;
INSERT INTO `buyer` VALUES (1,'','bharatrose1@gmail.com',NULL,0,NULL,NULL,'','Bharat Kumar','','shah','','','','',NULL,'$2y$10$GN1VazUt/UQLV6UCYNMDB.t3sLENydeZutAWzifdRCcCnnJZ7flwq','thisismylife',NULL,NULL,'','','1'),(2,'','james@gmail.com',NULL,0,NULL,NULL,'','James','','Blunt','','','','',NULL,'$2y$10$.nuKOQPolYF4CwCJYwdJA.urRt.SgrgsRqj9gvgFLY0L7mY6Ho9ra','thisismylife',NULL,NULL,'','','0'),(3,'','main@gmail.com',NULL,0,NULL,NULL,'','Main','','Brand','','','','',NULL,'$2y$10$QESYsjwAeRmf074BAa4dC.1l4s1.tekzRytWW11nFYhmvh1dxghR2','thisismylife',NULL,NULL,'','','0'),(4,'','team@gmail.com',NULL,0,NULL,NULL,'','Team','','branch','','','','',NULL,'$2y$10$jjTG9eKy31GWajJtxsNZsO/dfMSWa1RRdLnQ1nrTuMoWQD2Rfmzoe','thisismylife',NULL,NULL,'','','0'),(5,'','taran@gmail.com',NULL,0,NULL,NULL,'','Taran','','Ben','','','','',NULL,'$2y$10$cHvO0zhcky4uTf6xnagXS.cLd0jN7YV7/wOXJnvCTiNlV1qrBO0va','thisismylife',NULL,NULL,'','','0'),(6,'','games@gmail.com',NULL,0,NULL,NULL,'','James','','Blunt','','','','',NULL,'$2y$10$C0hS7DzfGXXc6ZkeEeSuQerq4nkR8/NLL1ma2qaQNZtBSVJYg0LS6','thisismylife',NULL,NULL,'','','0'),(7,'','benmark@gmail.com',NULL,0,NULL,NULL,'','ben','','mark','','','','',NULL,'$2y$10$7TXeJ8flsUB7Fex5rrceEeD9pnbT1wTbRlUEUtJgaAx40ZtUfAgZO','thisismylife',NULL,NULL,'','','0'),(8,'','john@gmail.com',NULL,0,NULL,NULL,'','john','','maean','','','','',NULL,'$2y$10$5jvdbwkG5.uojvp8E1YKGexreiuB6uFQJq.RpckV6mdCogDcwFvaq','thisismylife',NULL,NULL,'','','0'),(9,'','blun@gmail.com',NULL,0,NULL,NULL,'','James','','bliunt','','','','',NULL,'$2y$10$Y/6g0puciIugI3Vv/sdsm.w9QgWb96ftq5JIfGaJ7NKK7GQ3Wq022','thisismylife',NULL,NULL,'','','0'),(10,'','bhenm@gmail.com',NULL,0,NULL,NULL,'','ben','','mark','','','','',NULL,'$2y$10$gsJfe5sIYLMUHffg7TiWcuAHMH32wlLacfSJWJGlESW4XyDoh6DQa','thisismylife',NULL,NULL,'','','0'),(11,'','men@gmail.com',NULL,0,NULL,NULL,'','james','','blunt','','','','',NULL,'$2y$10$0ik5pCvjEjZC/IESLVvmheAqvvzAabF.5CM2kzaEUhFjaUQtZvzmy','thisismylife123',NULL,NULL,'','','0'),(12,'','mark@gmail.com',NULL,0,NULL,NULL,'','mark','','bn','','','','',NULL,'$2y$10$9t3IvsfSm/zV3QCa18pZy.4HuJPqaHugGn9g.MIIiSNZSq/0W58ua','thisismylife',NULL,NULL,'','','0'),(13,'','sdfmen@gmail.com',NULL,0,NULL,NULL,'','men','','ben','','','','',NULL,'$2y$10$.OoV06kF4Z41ib9Ru22o3ug6FW6i1oRPSR2t7kUu4L9Mop4zcxU/2','thisismylife',NULL,NULL,'','','0');
/*!40000 ALTER TABLE `buyer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buyer_address`
--

DROP TABLE IF EXISTS `buyer_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyer_address` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `verified` enum('0','1') DEFAULT '0',
  `city` varchar(50) NOT NULL,
  `contry_id` varchar(25) NOT NULL,
  `fax` varchar(225) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `postcode` varchar(225) NOT NULL,
  `prefix` varchar(45) NOT NULL,
  `region` varchar(45) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `street` text NOT NULL,
  `suffix` varchar(225) NOT NULL,
  `telephone` varchar(150) NOT NULL,
  `customer_address_entitycol` varchar(45) NOT NULL,
  `customer_address_entitycol1` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `buyer_address_ibfk_1` FOREIGN KEY (`id`) REFERENCES `buyer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyer_address`
--

LOCK TABLES `buyer_address` WRITE;
/*!40000 ALTER TABLE `buyer_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `buyer_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buyer_address_details`
--

DROP TABLE IF EXISTS `buyer_address_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyer_address_details` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(45) NOT NULL,
  `city` char(40) NOT NULL,
  `email` varchar(45) NOT NULL,
  `area` varchar(80) DEFAULT NULL,
  `street_no` char(100) NOT NULL,
  `building_no` varchar(45) NOT NULL,
  `floor_no` char(45) NOT NULL,
  `landmark` varchar(150) NOT NULL,
  `location_type` char(30) NOT NULL,
  `mobile_no` char(18) NOT NULL,
  `land_line_no` int(25) DEFAULT NULL,
  `latitude` float NOT NULL,
  `longititude` float NOT NULL,
  `shipping_note` text,
  `document_link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `buyer_address_details_ibfk_1` FOREIGN KEY (`id`) REFERENCES `buyer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyer_address_details`
--

LOCK TABLES `buyer_address_details` WRITE;
/*!40000 ALTER TABLE `buyer_address_details` DISABLE KEYS */;
INSERT INTO `buyer_address_details` VALUES (1,'AE','Abu Dhabi','bharatrose1@gmail.com','Al Falah Street','Al Falah Street','','Falah Street','Habibi Bank','home','0565973854',0,0,0,'Hello orld',NULL),(2,'AE','abhu dhbai','james@gmail.com','Al falah','Al Falah Street','Al Qusaily Tower','M3','Habibi Bank','home','0565973854',0,0,0,'Nothing else matter ',NULL),(3,'AE','Abhu dhbai','main@gmail.com','Al falah','Al Falah Street','Al Qusaily Tower','M3','Habibi Bank','home','0565973854',0,0,0,'Hello World ',NULL),(4,'AE','Abhu dhbai','team@gmail.com','Al falah street ','Al Falah Street','M3','N3','Habibi Bank','home','0565973854',0,0,0,'Nothing else matter.',NULL),(5,'AE','Abhu dhbai','taran@gmail.com','Al falah','Al Falah Street','Al Qusaily Tower','M3','Habibi Bank','home','0565973854',0,0,0,'Hello World This is Tarren ',NULL),(6,'AE','Abu dhabai','games@gmail.com','James','Blunt','Al Qusaily Tower','Hello','Habib Bank','home','0522365241',0,0,0,'Do not bring this product to me.',NULL),(7,'AE','Abu dhabai','benmark@gmail.com','James','Blunt','Al Qusaily Tower','Hello','Habib Bank','home','0522365241',0,0,0,'Please bring all the copy of the paper ',NULL),(8,'AE','Abu dhbai','john@gmail.com','None','31 Street','Al Falah','20','Habib Bank','home','0525652123',0,0,0,'Do not wann buy this product ',NULL),(9,'AE','Hello','blun@gmail.com','World','Al Fal','Quasaily','M3','Habib Bank','home','0565973854',0,0,0,'I love that',NULL),(10,'AE','Hello','bhenm@gmail.com','World','Al Fal','Quasaily','M3','Habib Bank','home','0565973854',0,0,0,'',NULL),(11,'AE','Hello','men@gmail.com','World','Al Fal','Quasaily','M3','Habib Bank','home','0565973854',0,0,0,'Hello World',NULL),(12,'AE','abu dhab','mark@gmail.com','non','noe','no','20','habib bank','business','0522365236',0,0,0,'Noht',NULL),(13,'AD','asdfasdf','sdfmen@gmail.com','asdfa','asdf','asdf','asdf','sdf','business','0522365236',0,0,0,'sdf',NULL);
/*!40000 ALTER TABLE `buyer_address_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat_message`
--

DROP TABLE IF EXISTS `chat_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(225) NOT NULL,
  `receiver` varchar(225) NOT NULL,
  `receiver_type` tinyint(4) NOT NULL,
  `sender_type` tinyint(4) NOT NULL,
  `message_date` datetime DEFAULT NULL,
  `sku` varchar(150) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `seen` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_message`
--

LOCK TABLES `chat_message` WRITE;
/*!40000 ALTER TABLE `chat_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(150) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `seller_email` varchar(50) NOT NULL,
  `sku` char(100) NOT NULL,
  `product_id` int(50) NOT NULL,
  `prodct_name` varchar(200) NOT NULL,
  `qty` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `totalamount` int(100) NOT NULL,
  `images` varchar(225) NOT NULL,
  `discount` int(50) NOT NULL,
  `discount_percentage` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderdetails`
--

LOCK TABLES `orderdetails` WRITE;
/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
INSERT INTO `orderdetails` VALUES (1,'201812182427',NULL,NULL,'','YmhhcmF0cm9zZTFAZ21haWwuY29t','ADFDF59598',1,'Unlocked Original Samsung Galaxy S8 G950 US V',2,3000,6000,'http://localhost/img/product-images/152878752620919.jpg',0,NULL),(2,'201812182427',NULL,NULL,'','am9obkBnbWFpbC5jb20=','asdfasdfasdf',18,'Original Unlocked Samsung Galaxy S8 Plus 4G R',1,2000,2000,'http://localhost/img/product-images/154495371318896.jpg',0,NULL),(3,'201812182427',NULL,NULL,'','YWthc2hjaGU3MkBnbWFpbC5jb20=','656sdfsdf',19,'Original Samsung Galaxy Note 5 N920A mobile p',1,5000,5000,'http://localhost/img/product-images/154513208276044.jpg',0,NULL),(4,'201812191FDF',NULL,NULL,'','YWthc2hjaGU3MkBnbWFpbC5jb20=','656sdfsdf',19,'Original Samsung Galaxy Note 5 N920A mobile p',1,5000,5000,'http://localhost/img/product-images/154513208276044.jpg',0,NULL),(5,'201812191FDF',NULL,NULL,'','am9obkBnbWFpbC5jb20=','asdfasdfasdf',18,'Original Unlocked Samsung Galaxy S8 Plus 4G R',1,2000,2000,'http://localhost/img/product-images/154495371318896.jpg',0,NULL),(6,'201812191FDF',NULL,NULL,'','YmhhcmF0cm9zZTFAZ21haWwuY29t','SDFSD5F656',13,'adidas Originals Trefoil Gym Bag',1,70,70,'http://localhost/img/product-images/152879225817334.jpg',0,NULL),(7,'20190112CD11',NULL,NULL,'','YmhhcmF0cm9zZTFAZ21haWwuY29t','ADFDF59598',1,'Unlocked Original Samsung Galaxy S8 G950 US V',2,3000,6000,'http://localhost/img/product-images/152878752620919.jpg',0,NULL),(8,'201901123E18',NULL,NULL,'','am9obkBnbWFpbC5jb20=','asdfasdfasdf',18,'Original Unlocked Samsung Galaxy S8 Plus 4G R',1,2000,2000,'http://localhost/img/product-images/154495371318896.jpg',0,NULL);
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(15) NOT NULL,
  `order_id` varchar(150) DEFAULT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `ipv4_address` int(10) unsigned NOT NULL,
  `ipv6_address` binary(16) DEFAULT NULL,
  `tax_amount` int(11) NOT NULL,
  `tax_persentage` decimal(10,0) DEFAULT NULL,
  `discount_percentage` decimal(10,0) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `totalqty` int(100) NOT NULL,
  `totalamount` int(11) NOT NULL,
  `currency` char(10) NOT NULL,
  `shipping_cost` varchar(100) NOT NULL,
  `status` char(20) NOT NULL,
  `shipping_address` text NOT NULL,
  `billing_address` text NOT NULL,
  `purchase_date` datetime DEFAULT NULL,
  `purchase_point` char(200) NOT NULL,
  `customer_notes` text,
  `payment` char(50) NOT NULL,
  `seen` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,0,'201812182427','bharatrose1@gmail.com',2130706433,NULL,650,5,NULL,NULL,4,13650,'AED','0','item_picked','{\"area\":\"Al Falah Street\",\"street_no\":\"Al Falah Street\",\"building_no\":\"\",\"floor_no\":\"Falah Street\",\"landmark\":\"Habibi Bank\",\"location_type\":\"home\",\"mobile_no\":\"0565973854\",\"land_line_no\":\"0\",\"latitude\":\"0\",\"longititude\":\"0\",\"shipping_note\":\"Hello orld\",\"document_link\":null,\"country\":\"AE\",\"city\":\"Abu Dhabi\",\"firstname\":\"Bharat Kumar\",\"lastname\":\"shah\"}','{\"area\":\"Al Falah Street\",\"street_no\":\"Al Falah Street\",\"building_no\":\"\",\"floor_no\":\"Falah Street\",\"landmark\":\"Habibi Bank\",\"location_type\":\"home\",\"mobile_no\":\"0565973854\",\"land_line_no\":\"0\",\"latitude\":\"0\",\"longititude\":\"0\",\"shipping_note\":\"Hello orld\",\"document_link\":null,\"country\":\"AE\",\"city\":\"Abu Dhabi\",\"firstname\":\"Bharat Kumar\",\"lastname\":\"shah\"}','2018-12-18 16:20:40','sindhbad','Hello orld','pbcod','0'),(2,0,'201812191FDF','bharatrose1@gmail.com',2130706433,NULL,354,5,NULL,NULL,3,7424,'AED','0','inprocess','{\"area\":\"Al Falah Street\",\"street_no\":\"Al Falah Street\",\"building_no\":\"\",\"floor_no\":\"Falah Street\",\"landmark\":\"Habibi Bank\",\"location_type\":\"home\",\"mobile_no\":\"0565973854\",\"land_line_no\":\"0\",\"latitude\":\"0\",\"longititude\":\"0\",\"shipping_note\":\"Hello orld\",\"document_link\":null,\"country\":\"AE\",\"city\":\"Abu Dhabi\",\"firstname\":\"Bharat Kumar\",\"lastname\":\"shah\"}','','2018-12-19 15:25:27','sindhbad','Hello orld','cod','0'),(3,0,'20190112CD11','mark@gmail.com',2130706433,NULL,300,5,NULL,NULL,2,6300,'AED','0','created','{\"firstname\":\"mark\",\"lastname\":\"bn\",\"country1\":\"\",\"city\":\"abu dhab\",\"AddressArea\":\"\",\"country\":\"AE\",\"area\":\"non\",\"street\":\"noe\",\"building\":\"no\",\"floor-no\":\"20\",\"apartment-no\":\"20\",\"landmark\":\"habib bank\",\"locationtype\":\"business\",\"mobile_no\":\"0522365236\",\"landline-no\":\"\",\"shipping-note\":\"Noht\"}','','2019-01-12 15:57:03','sindhbad','','cod','0'),(4,0,'201901123E18','sdfmen@gmail.com',2130706433,NULL,100,5,NULL,NULL,1,2100,'AED','0','processing','{\"firstname\":\"men\",\"lastname\":\"ben\",\"country1\":\"\",\"city\":\"asdfasdf\",\"AddressArea\":\"\",\"country\":\"AD\",\"area\":\"asdfa\",\"street\":\"asdf\",\"building\":\"asdf\",\"floor-no\":\"asdf\",\"apartment-no\":\"asdf\",\"landmark\":\"sdf\",\"locationtype\":\"business\",\"mobile_no\":\"0522365236\",\"landline-no\":\"\",\"shipping-note\":\"sdf\"}','','2019-01-12 16:09:44','sindhbad','','cod','0');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderstatus`
--

DROP TABLE IF EXISTS `orderstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderstatus` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `status` char(25) NOT NULL,
  `order_id` varchar(150) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `comments` text,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `orderstatus_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderstatus`
--

LOCK TABLES `orderstatus` WRITE;
/*!40000 ALTER TABLE `orderstatus` DISABLE KEYS */;
INSERT INTO `orderstatus` VALUES (1,'pending','201812182427','2019-01-09 14:07:10','2019-01-09 14:09:55','asdfasdf'),(2,'frad','201812182427','2019-01-09 14:10:12','2019-01-09 14:12:20','asdasdf'),(3,'processing','201812182427','2019-01-09 15:02:54','2019-01-12 16:11:00','We are processing'),(4,'confirmed','201812182427','2019-01-12 15:44:14','2019-01-12 15:44:14','The order was cancancled'),(5,'item_picked','201812182427','2019-01-12 15:44:53','2019-01-12 15:44:53','The order was cancancled'),(6,'created','20190112CD11','2019-01-12 15:59:43','2019-01-12 15:59:43','asdf'),(7,'created','201901123E18','2019-01-12 16:09:44','2019-01-12 16:09:44','');
/*!40000 ALTER TABLE `orderstatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_catalogs`
--

DROP TABLE IF EXISTS `product_catalogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_catalogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seller_email` varchar(225) NOT NULL,
  `name` varchar(45) NOT NULL,
  `sku` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `category_id` int(70) NOT NULL,
  `sub_category` varchar(45) NOT NULL,
  `discription` text NOT NULL,
  `short_discription` text NOT NULL,
  `avaibility_from` datetime DEFAULT NULL,
  `avaibility_to` datetime DEFAULT NULL,
  `regular_price` double NOT NULL,
  `special_price` double NOT NULL,
  `product_condition` tinytext NOT NULL,
  `items_available` int(225) NOT NULL,
  `avaibility` varchar(50) NOT NULL,
  `supplier_sku` varchar(150) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `published` enum('0','1') DEFAULT '0',
  `phonenumber` varchar(45) NOT NULL,
  `seller_type` tinytext NOT NULL,
  `product_unite` tinytext NOT NULL,
  `unite_amount` tinytext NOT NULL,
  `size` tinytext NOT NULL,
  `delivery_servic` varchar(25) NOT NULL,
  `delivery_period` varchar(50) NOT NULL,
  `seller_id` varchar(225) DEFAULT NULL,
  `shipping_cost` varchar(225) DEFAULT NULL,
  `seller_note` text,
  `warranty` varchar(45) NOT NULL,
  `specifications_key` text,
  `specifications_value` text,
  `product_article_html` text,
  `pryority` int(50) DEFAULT NULL,
  `meta_title` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `images` varchar(225) NOT NULL,
  `minimun_order` char(225) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `seller_email` (`seller_email`),
  FULLTEXT KEY `name` (`name`),
  CONSTRAINT `product_catalogs_ibfk_1` FOREIGN KEY (`seller_email`) REFERENCES `seller` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_catalogs`
--

LOCK TABLES `product_catalogs` WRITE;
/*!40000 ALTER TABLE `product_catalogs` DISABLE KEYS */;
INSERT INTO `product_catalogs` VALUES (1,'bharatrose1@gmail.com','Unlocked Original Samsung Galaxy S8 G950 US V','ADFDF59598','Dual SIM Card',314,'','Unlocked Original Samsung Galaxy S8 G950 US Version Mobile phone 4G LTE 64GB 5.8 Inch Single Sim 12MP,Free DHL-EMS shipping','Unlocked Original Samsung Galaxy S8 G950 US Version Mobile phone 4G LTE 64GB 5.8 Inch Single Sim 12MP,Free DHL-EMS shipping','2018-08-26 00:00:00','2019-02-08 00:00:00',3000,3000,'brandnew',100,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','0522365265','retails','grams','1','','sindbad','5 days',NULL,'Free Shipping ',NULL,'1 years ','[&quot;Samsung Model&quot;,&quot;Recording Definition&quot;,&quot;Samsung Model&quot;,&quot;Recording Definition&quot;,&quot;Recording Definition&quot;,&quot;Samsung Model&quot;,&quot;Samsung Model&quot;]','[&quot;S8 Plus&quot;,&quot;1080P&quot;,&quot;S8 Plus&quot;,&quot;1080P&quot;,&quot;S8 Plus&quot;,&quot;1080P&quot;,&quot;1080P&quot;]','&lt;div class=&quot;description-content&quot;&gt;\r\n&lt;div class=&quot;origin-part&quot;&gt;\r\n&lt;p&gt;&lt;img alt=&quot;s8 (13)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1W05OKuySBuNjy1zdq6xPxFXae.jpg&quot; style=&quot;height:924px; width:750px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;s8 (14)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1Auw0KXGWBuNjy0Fbq6z4sXXaf.jpg&quot; style=&quot;height:500px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (18)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1qxeNKr1YBuNjSszeq6yblFXaQ.jpg&quot; style=&quot;height:500px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (5)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1aFhCKuuSBuNjSsplq6ze8pXaB.jpg&quot; style=&quot;height:500px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (4)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB17JTBdjfguuRjSspkq6xchpXap.jpg&quot; style=&quot;height:500px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (9)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1vGwqKhSYBuNjSsphq6zGvVXa8.jpg&quot; style=&quot;height:500px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (11)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1FWxBKuuSBuNjy1Xcq6AYjFXaM.jpg&quot; style=&quot;height:500px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (8)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1Z0pTxbArBKNjSZFLq6A_dVXaC.jpg&quot; style=&quot;height:500px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (1)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1Oa.LB2iSBuNkSnhJq6zDcpXaU.jpg&quot; style=&quot;height:516px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (7)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1B92Yd8gXBuNjt_hNq6yEiFXa1.jpg&quot; style=&quot;height:500px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (15)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1icbBdjfguuRjSspaq6yXVXXa3.jpg&quot; style=&quot;height:500px; width:750px&quot; /&gt;&lt;img alt=&quot;s8 (12)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB17FnnKr9YBuNjy0Fgq6AxcXXac.jpg&quot; style=&quot;height:800px; width:800px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;s8 (3)&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1Z6YSdjfguuRjy1zeq6z0KFXa0.jpg&quot; style=&quot;height:458px; width:750px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;div style=&quot;clear:both&quot;&gt;\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#ff00ff&quot;&gt;&lt;span style=&quot;font-size:16.0px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;background-color:#c0c0c0&quot;&gt;Packing Accessories:&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-size:16.0px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-size:16.0px&quot;&gt;1*&amp;nbsp;Original &amp;nbsp;mobile phone(Unlocked)&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-size:16.0px&quot;&gt;1* Charger&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-size:16.0px&quot;&gt;(we will send the correct charger that suitable for your country)&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-size:16.0px&quot;&gt;1* Manual book&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-size:16.0px&quot;&gt;1* Earphone&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-size:16.0px&quot;&gt;1* Data cable&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#ff00ff&quot;&gt;&lt;span style=&quot;font-size:18.0px&quot;&gt;&lt;span style=&quot;color:#ff6600&quot;&gt;PS: If you want to know&amp;nbsp; more information ,welcome contact us anytime. Thank &lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#ff00ff&quot;&gt;&lt;span style=&quot;font-size:18.0px&quot;&gt;&lt;span style=&quot;color:#ff6600&quot;&gt;you in advance!&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin-left:0.0px; margin-right:0.0px&quot;&gt;&lt;img alt=&quot;11&quot; src=&quot;https://ae01.alicdn.com/kf/UT85LaxXa8aXXagOFbXT/200286470/UT85LaxXa8aXXagOFbXT.jpg&quot; style=&quot;height:653px; width:1000px&quot; /&gt;&lt;img alt=&quot;22&quot; src=&quot;https://ae01.alicdn.com/kf/UT8G3uxXaRaXXagOFbXr/200286470/UT8G3uxXaRaXXagOFbXr.jpg&quot; style=&quot;height:467px; width:599px&quot; /&gt;&lt;img alt=&quot;33&quot; src=&quot;https://ae01.alicdn.com/kf/UT8XS5wXfpcXXagOFbXR/200286470/UT8XS5wXfpcXXagOFbXR.jpg&quot; style=&quot;height:511px; width:613px&quot; /&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n',NULL,'','','','[\"152878752620919.jpg\",\"152878752628483.jpg\",\"152878752642392.jpg\",\"15439994446106.jpg\",\"154399945462542.jpg\"]','1'),(4,'bharatrose1@gmail.com','Unlocked Samsung Galaxy S8 5.8-inch screen 4G','SDFSDF522','Dual SIM Card',314,'','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot. ','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot. ','2018-06-12 11:00:00','2018-10-18 11:35:00',2800,2800,'brandnew',100,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','0522012325','retails','Pices','1','','sindbad','2 days',NULL,'Free Shipping',NULL,'1 Year','[&quot;Samsung Model&quot;,&quot;Samsung Model&quot;,&quot;Recording Definition&quot;,&quot;Recording Definition&quot;,&quot;Samsung Model&quot;]','[&quot;1080P&quot;,&quot;1080P&quot;,&quot;1080P&quot;,&quot;S8 Plus&quot;,&quot;1080P&quot;]','&lt;div class=&quot;columns product-details small-12&quot;&gt;\r\n&lt;h3&gt;PRODUCT INFORMATION&lt;/h3&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&amp;nbsp;\r\n	&lt;h4&gt;Specifications&lt;/h4&gt;\r\n\r\n	&lt;div id=&quot;specs-short&quot;&gt;\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;p&gt;Brand&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung&lt;/p&gt;\r\n\r\n	&lt;p&gt;Operating System Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Android&lt;/p&gt;\r\n\r\n	&lt;p&gt;Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;529 ppi&lt;/p&gt;\r\n\r\n	&lt;p&gt;Storage Capacity&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;hide&quot; id=&quot;specs-full&quot;&gt;\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Image quality&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Audio&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Display&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Connectivity&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Camera&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Camera&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Color&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Power Management&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Technical Information&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;p&gt;Brand&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung&lt;/p&gt;\r\n\r\n	&lt;p&gt;Operating System Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Android&lt;/p&gt;\r\n\r\n	&lt;p&gt;Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;529 ppi&lt;/p&gt;\r\n\r\n	&lt;p&gt;Storage Capacity&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n\r\n	&lt;p&gt;Number Of SIM&lt;/p&gt;\r\n\r\n	&lt;p&gt;Dual SIM&lt;/p&gt;\r\n\r\n	&lt;p&gt;Mobile Phone Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Smartphone&lt;/p&gt;\r\n\r\n	&lt;p&gt;Cellular Network Technology&lt;/p&gt;\r\n\r\n	&lt;p&gt;4G LTE&lt;/p&gt;\r\n\r\n	&lt;p&gt;Chipset manufacturer&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung Exynos&lt;/p&gt;\r\n\r\n	&lt;p&gt;Model Number&lt;/p&gt;\r\n\r\n	&lt;p&gt;SM-G960FZADKSA&lt;/p&gt;\r\n\r\n	&lt;p&gt;Battery Capacity in mAh&lt;/p&gt;\r\n\r\n	&lt;p&gt;3000 - 4000 mAH&lt;/p&gt;\r\n\r\n	&lt;p&gt;Item EAN&lt;/p&gt;\r\n\r\n	&lt;p&gt;2724573314484&lt;/p&gt;\r\n\r\n	&lt;p&gt;Rear Camera Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;12 MP&lt;/p&gt;\r\n\r\n	&lt;p&gt;3.5 mm Audio Jack&lt;/p&gt;\r\n\r\n	&lt;p&gt;Display Size (Inch)&lt;/p&gt;\r\n\r\n	&lt;p&gt;5.8 Inch&lt;/p&gt;\r\n\r\n	&lt;p&gt;NFC&lt;/p&gt;\r\n\r\n	&lt;p&gt;Front Camera&lt;/p&gt;\r\n\r\n	&lt;p&gt;8 MP&lt;/p&gt;\r\n\r\n	&lt;p&gt;Front Flash&lt;/p&gt;\r\n\r\n	&lt;p&gt;Color&lt;/p&gt;\r\n\r\n	&lt;p&gt;Titanium Grey&lt;/p&gt;\r\n\r\n	&lt;p&gt;Fast Charge&lt;/p&gt;\r\n\r\n	&lt;p&gt;Memory RAM&lt;/p&gt;\r\n\r\n	&lt;p&gt;4 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;a class=&quot;expand readmore specs&quot; href=&quot;javascript:void(0);&quot;&gt;Read more&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;\r\n	&lt;h4&gt;Description:&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;hide&quot; id=&quot;description-short&quot;&gt;\r\n	&lt;div class=&quot;columns container&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;p&gt;Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div id=&quot;description-full&quot;&gt;\r\n	&lt;div class=&quot;columns container&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;p&gt;Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot. This Samsung smartphone features a Samsung exynos 9810 Octa-Core processor and 4GB RAM that makes multitasking swift and fluid. The S9 has a 12MP rear camera with a dual-aperture design that adapts to the varying lighting conditions just like the human eye. It even includes an 8MP front camera with Intelligent Scan for easy unlocking of the phone even in the dark. The Galaxy S9 has a 5.8-inch Super AMOLED Infinity Display with a resolution of 2960 x 1440 pixels, a pixel density of 570ppi, and an aspect ratio of 18.5:9. The 3000mAh battery of the Galaxy S9 features adaptive fast charging, and it also supports WPC and PMA wireless charging. The S9 flaunts a polished aluminum frame in a gray finish with an IP68-certified body for water and dust resistance.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;h4&gt;&lt;strong&gt;Key Features&lt;/strong&gt;&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;kf-en row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-6 small-12&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;4 GB RAM&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;12 MP Rear Camera / 8 MP Front Camera&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns large-6 medium-6 small-12&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;5.8 Inch Screen&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;3000 mAh&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-30 row&quot;&gt;\r\n	&lt;h4&gt;Beautiful Photos in Any Light&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; class=&quot;lazy-loaded&quot; src=&quot;https://souqcms.s3.amazonaws.com/spring/images/2018/samsung/Galaxy-S9-Dual-Sim/2-Galaxy-S9-Dual-Sim-grey.jpg&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;Take photos without thinking twice when you have the Samsung Galaxy S9. The 12MP rear camera features two f-stop modes and a category-defining dual aperture design that adapts to bright light and super dim light automatically, just like the human eye. With the f/1.5 aperture mode, you can capture your nighttime adventures with stunning clarity. The rear camera has multi-frame noise reduction, so every photo you click in the dark comes out clear and bright, without any fine-tuning. The Samsung Galaxy S9 boasts of a super slow-mo mode that records videos at 960 frames per second. Show off your cinematography skills by adding slow motion bursts to highlight epic moments. It even features motion detection, so it starts to record in slow-mo only when the sensor detects movement. That&amp;rsquo;s not all, the camera also has optical image stabilization, which ensures your photos are sharp even when you&amp;rsquo;re on a bumpy ride. The S9 also has an 8MP front camera that you can use to click stunning selfies.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Turn Selfies into Emojis&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;Messaging comes alive on the Samsung Galaxy S9. It lets you create an animated version of yourself to show off the inner you. Then you can add a personal touch to your message with the emoji, which detects and mimics your movements. The AR emojis let you strut your personal style with customization options ranging from clothes to hairstyles. The animated AR emojis lets you put your emotion in motion. You can record videos with the emoji talking, singing, or whatever you feel like doing. Sometimes words can&amp;rsquo;t express your wide range of emotions. With the Samsung Galaxy S9, expressing your feelings on chat is not a problem as it features 18 AR emoji stickers. Add a human touch to messaging with your very own expressive emojis.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;See More and Hold Less with Infinity Display&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The Galaxy S9 opens up your view with its grand, edge-to-edge, 5.8-inch display. The S9 with its near bezel-less design fits comfortably in your hand despite its large size. It has curves on the sides that provide a sight that is boundless with minimal visual distractions of the bezel. The screen has an 18.5:9 aspect ratio that gives you a cinematic view. It features Advanced Contrast Enhancement that lets you view photos as they were meant to be seen.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Speed Is All That Matters&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The Samsung Galaxy S9 features a Samsung exynos 9810 Octa-Core processor and 4GB RAM. It lets you switch apps and multitask in a snap. Get your game on, watch videos, or text while you stream videos; whatever you do, the S9 performs quickly and fluidly. Moreover, with LTE speeds up to 1.2Gbps, the Galaxy S9 lets you download swiftly and stream instantly.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Forget What It Is Like to Run Out of Space&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The S9 has an incredible storage capacity of 128GB. It even includes an expandable microSD slot that supports cards up to 400GB. It also lets you store your photos on Google Photos with unlimited storage. Lack of space? What&amp;rsquo;s that? Is what you will say when you have the Galaxy S9 in your pocket.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;a class=&quot;readmore description collapsed&quot; href=&quot;javascript:void(0);&quot;&gt;Read less&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;\r\n',NULL,'','','','[\"152878936595243.jpg\",\"152878936524350.jpg\",\"152878936572284.jpg\",\"152878936522314.jpg\",\"152878936596819.jpg\",\"152878936521980.jpg\"]',''),(5,'bharatrose1@gmail.com','Samsung Galaxy S8 SM-G950F 4G LTE Mobile phon','SDF5222','Dual SIM Card',314,'','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.','2018-06-12 11:40:00','2018-10-18 11:40:00',500,450,'brandnew',100,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','0523365241','retails','Pices','1','','pick up','2 days',NULL,'Free Shipping',NULL,'1 year','[&quot;Samsung Model&quot;,&quot;Recording Definition&quot;,&quot;Recording Definition&quot;]','[&quot;1080P&quot;,&quot;1080P&quot;,&quot;1080P&quot;]','&lt;div class=&quot;columns product-details small-12&quot;&gt;\r\n&lt;h3&gt;PRODUCT INFORMATION&lt;/h3&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&amp;nbsp;\r\n	&lt;h4&gt;Specifications&lt;/h4&gt;\r\n\r\n	&lt;div id=&quot;specs-short&quot;&gt;\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;p&gt;Brand&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung&lt;/p&gt;\r\n\r\n	&lt;p&gt;Operating System Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Android&lt;/p&gt;\r\n\r\n	&lt;p&gt;Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;529 ppi&lt;/p&gt;\r\n\r\n	&lt;p&gt;Storage Capacity&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;hide&quot; id=&quot;specs-full&quot;&gt;\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Image quality&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Audio&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Display&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Connectivity&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Camera&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Camera&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Color&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Power Management&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Technical Information&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;p&gt;Brand&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung&lt;/p&gt;\r\n\r\n	&lt;p&gt;Operating System Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Android&lt;/p&gt;\r\n\r\n	&lt;p&gt;Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;529 ppi&lt;/p&gt;\r\n\r\n	&lt;p&gt;Storage Capacity&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n\r\n	&lt;p&gt;Number Of SIM&lt;/p&gt;\r\n\r\n	&lt;p&gt;Dual SIM&lt;/p&gt;\r\n\r\n	&lt;p&gt;Mobile Phone Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Smartphone&lt;/p&gt;\r\n\r\n	&lt;p&gt;Cellular Network Technology&lt;/p&gt;\r\n\r\n	&lt;p&gt;4G LTE&lt;/p&gt;\r\n\r\n	&lt;p&gt;Chipset manufacturer&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung Exynos&lt;/p&gt;\r\n\r\n	&lt;p&gt;Model Number&lt;/p&gt;\r\n\r\n	&lt;p&gt;SM-G960FZADKSA&lt;/p&gt;\r\n\r\n	&lt;p&gt;Battery Capacity in mAh&lt;/p&gt;\r\n\r\n	&lt;p&gt;3000 - 4000 mAH&lt;/p&gt;\r\n\r\n	&lt;p&gt;Item EAN&lt;/p&gt;\r\n\r\n	&lt;p&gt;2724573314484&lt;/p&gt;\r\n\r\n	&lt;p&gt;Rear Camera Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;12 MP&lt;/p&gt;\r\n\r\n	&lt;p&gt;3.5 mm Audio Jack&lt;/p&gt;\r\n\r\n	&lt;p&gt;Display Size (Inch)&lt;/p&gt;\r\n\r\n	&lt;p&gt;5.8 Inch&lt;/p&gt;\r\n\r\n	&lt;p&gt;NFC&lt;/p&gt;\r\n\r\n	&lt;p&gt;Front Camera&lt;/p&gt;\r\n\r\n	&lt;p&gt;8 MP&lt;/p&gt;\r\n\r\n	&lt;p&gt;Front Flash&lt;/p&gt;\r\n\r\n	&lt;p&gt;Color&lt;/p&gt;\r\n\r\n	&lt;p&gt;Titanium Grey&lt;/p&gt;\r\n\r\n	&lt;p&gt;Fast Charge&lt;/p&gt;\r\n\r\n	&lt;p&gt;Memory RAM&lt;/p&gt;\r\n\r\n	&lt;p&gt;4 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;a class=&quot;expand readmore specs&quot; href=&quot;javascript:void(0);&quot;&gt;Read more&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;\r\n	&lt;h4&gt;Description:&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;hide&quot; id=&quot;description-short&quot;&gt;\r\n	&lt;div class=&quot;columns container&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;p&gt;Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div id=&quot;description-full&quot;&gt;\r\n	&lt;div class=&quot;columns container&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;p&gt;Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot. This Samsung smartphone features a Samsung exynos 9810 Octa-Core processor and 4GB RAM that makes multitasking swift and fluid. The S9 has a 12MP rear camera with a dual-aperture design that adapts to the varying lighting conditions just like the human eye. It even includes an 8MP front camera with Intelligent Scan for easy unlocking of the phone even in the dark. The Galaxy S9 has a 5.8-inch Super AMOLED Infinity Display with a resolution of 2960 x 1440 pixels, a pixel density of 570ppi, and an aspect ratio of 18.5:9. The 3000mAh battery of the Galaxy S9 features adaptive fast charging, and it also supports WPC and PMA wireless charging. The S9 flaunts a polished aluminum frame in a gray finish with an IP68-certified body for water and dust resistance.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;h4&gt;&lt;strong&gt;Key Features&lt;/strong&gt;&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;kf-en row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-6 small-12&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;4 GB RAM&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;12 MP Rear Camera / 8 MP Front Camera&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns large-6 medium-6 small-12&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;5.8 Inch Screen&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;3000 mAh&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-30 row&quot;&gt;\r\n	&lt;h4&gt;Beautiful Photos in Any Light&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; class=&quot;lazy-loaded&quot; src=&quot;https://souqcms.s3.amazonaws.com/spring/images/2018/samsung/Galaxy-S9-Dual-Sim/2-Galaxy-S9-Dual-Sim-grey.jpg&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;Take photos without thinking twice when you have the Samsung Galaxy S9. The 12MP rear camera features two f-stop modes and a category-defining dual aperture design that adapts to bright light and super dim light automatically, just like the human eye. With the f/1.5 aperture mode, you can capture your nighttime adventures with stunning clarity. The rear camera has multi-frame noise reduction, so every photo you click in the dark comes out clear and bright, without any fine-tuning. The Samsung Galaxy S9 boasts of a super slow-mo mode that records videos at 960 frames per second. Show off your cinematography skills by adding slow motion bursts to highlight epic moments. It even features motion detection, so it starts to record in slow-mo only when the sensor detects movement. That&amp;rsquo;s not all, the camera also has optical image stabilization, which ensures your photos are sharp even when you&amp;rsquo;re on a bumpy ride. The S9 also has an 8MP front camera that you can use to click stunning selfies.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Turn Selfies into Emojis&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;Messaging comes alive on the Samsung Galaxy S9. It lets you create an animated version of yourself to show off the inner you. Then you can add a personal touch to your message with the emoji, which detects and mimics your movements. The AR emojis let you strut your personal style with customization options ranging from clothes to hairstyles. The animated AR emojis lets you put your emotion in motion. You can record videos with the emoji talking, singing, or whatever you feel like doing. Sometimes words can&amp;rsquo;t express your wide range of emotions. With the Samsung Galaxy S9, expressing your feelings on chat is not a problem as it features 18 AR emoji stickers. Add a human touch to messaging with your very own expressive emojis.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;See More and Hold Less with Infinity Display&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The Galaxy S9 opens up your view with its grand, edge-to-edge, 5.8-inch display. The S9 with its near bezel-less design fits comfortably in your hand despite its large size. It has curves on the sides that provide a sight that is boundless with minimal visual distractions of the bezel. The screen has an 18.5:9 aspect ratio that gives you a cinematic view. It features Advanced Contrast Enhancement that lets you view photos as they were meant to be seen.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Speed Is All That Matters&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The Samsung Galaxy S9 features a Samsung exynos 9810 Octa-Core processor and 4GB RAM. It lets you switch apps and multitask in a snap. Get your game on, watch videos, or text while you stream videos; whatever you do, the S9 performs quickly and fluidly. Moreover, with LTE speeds up to 1.2Gbps, the Galaxy S9 lets you download swiftly and stream instantly.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Forget What It Is Like to Run Out of Space&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The S9 has an incredible storage capacity of 128GB. It even includes an expandable microSD slot that supports cards up to 400GB. It also lets you store your photos on Google Photos with unlimited storage. Lack of space? What&amp;rsquo;s that? Is what you will say when you have the Galaxy S9 in your pocket.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;a class=&quot;readmore description collapsed&quot; href=&quot;javascript:void(0);&quot;&gt;Read less&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;\r\n',NULL,'','','','[\"152878963233961.jpg\",\"152878963224483.jpg\",\"152878963280243.jpg\",\"152878963217308.jpg\",\"152878963230166.jpg\",\"152878963248230.jpg\"]',''),(6,'bharatrose1@gmail.com','Samsung Galaxy S8 Plus 4G LTE Mobile Phone Oc','SDFDF5200','Dual SIM Card',314,'','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.','2018-06-12 02:00:00','2018-10-11 11:45:00',1000,1000,'likenew',100,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','0522123565','retails','Pices','1','','sindbad','2 days',NULL,'Free Shipping',NULL,'1 Years ','[&quot;Samsung Model&quot;,&quot;Recording Definition&quot;,&quot;Recording Definition&quot;,&quot;Recording Definition&quot;,&quot;Recording Definition&quot;,&quot;Samsung Model&quot;,&quot;Recording Definition&quot;]','[&quot;1080P&quot;,&quot;1080P&quot;,&quot;S8 Plus&quot;,&quot;1080P&quot;,&quot;S8 Plus&quot;,&quot;S8 Plus&quot;,&quot;1080P&quot;]','&lt;div class=&quot;columns product-details small-12&quot;&gt;\r\n&lt;h3&gt;PRODUCT INFORMATION&lt;/h3&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&amp;nbsp;\r\n	&lt;h4&gt;Specifications&lt;/h4&gt;\r\n\r\n	&lt;div id=&quot;specs-short&quot;&gt;\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;p&gt;Brand&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung&lt;/p&gt;\r\n\r\n	&lt;p&gt;Operating System Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Android&lt;/p&gt;\r\n\r\n	&lt;p&gt;Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;529 ppi&lt;/p&gt;\r\n\r\n	&lt;p&gt;Storage Capacity&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;hide&quot; id=&quot;specs-full&quot;&gt;\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Image quality&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Audio&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Display&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Connectivity&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Camera&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Camera&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Color&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Power Management&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Technical Information&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;p&gt;Brand&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung&lt;/p&gt;\r\n\r\n	&lt;p&gt;Operating System Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Android&lt;/p&gt;\r\n\r\n	&lt;p&gt;Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;529 ppi&lt;/p&gt;\r\n\r\n	&lt;p&gt;Storage Capacity&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n\r\n	&lt;p&gt;Number Of SIM&lt;/p&gt;\r\n\r\n	&lt;p&gt;Dual SIM&lt;/p&gt;\r\n\r\n	&lt;p&gt;Mobile Phone Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Smartphone&lt;/p&gt;\r\n\r\n	&lt;p&gt;Cellular Network Technology&lt;/p&gt;\r\n\r\n	&lt;p&gt;4G LTE&lt;/p&gt;\r\n\r\n	&lt;p&gt;Chipset manufacturer&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung Exynos&lt;/p&gt;\r\n\r\n	&lt;p&gt;Model Number&lt;/p&gt;\r\n\r\n	&lt;p&gt;SM-G960FZADKSA&lt;/p&gt;\r\n\r\n	&lt;p&gt;Battery Capacity in mAh&lt;/p&gt;\r\n\r\n	&lt;p&gt;3000 - 4000 mAH&lt;/p&gt;\r\n\r\n	&lt;p&gt;Item EAN&lt;/p&gt;\r\n\r\n	&lt;p&gt;2724573314484&lt;/p&gt;\r\n\r\n	&lt;p&gt;Rear Camera Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;12 MP&lt;/p&gt;\r\n\r\n	&lt;p&gt;3.5 mm Audio Jack&lt;/p&gt;\r\n\r\n	&lt;p&gt;Display Size (Inch)&lt;/p&gt;\r\n\r\n	&lt;p&gt;5.8 Inch&lt;/p&gt;\r\n\r\n	&lt;p&gt;NFC&lt;/p&gt;\r\n\r\n	&lt;p&gt;Front Camera&lt;/p&gt;\r\n\r\n	&lt;p&gt;8 MP&lt;/p&gt;\r\n\r\n	&lt;p&gt;Front Flash&lt;/p&gt;\r\n\r\n	&lt;p&gt;Color&lt;/p&gt;\r\n\r\n	&lt;p&gt;Titanium Grey&lt;/p&gt;\r\n\r\n	&lt;p&gt;Fast Charge&lt;/p&gt;\r\n\r\n	&lt;p&gt;Memory RAM&lt;/p&gt;\r\n\r\n	&lt;p&gt;4 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;a class=&quot;expand readmore specs&quot; href=&quot;javascript:void(0);&quot;&gt;Read more&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;\r\n	&lt;h4&gt;Description:&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;hide&quot; id=&quot;description-short&quot;&gt;\r\n	&lt;div class=&quot;columns container&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;p&gt;Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div id=&quot;description-full&quot;&gt;\r\n	&lt;div class=&quot;columns container&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;p&gt;Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot. This Samsung smartphone features a Samsung exynos 9810 Octa-Core processor and 4GB RAM that makes multitasking swift and fluid. The S9 has a 12MP rear camera with a dual-aperture design that adapts to the varying lighting conditions just like the human eye. It even includes an 8MP front camera with Intelligent Scan for easy unlocking of the phone even in the dark. The Galaxy S9 has a 5.8-inch Super AMOLED Infinity Display with a resolution of 2960 x 1440 pixels, a pixel density of 570ppi, and an aspect ratio of 18.5:9. The 3000mAh battery of the Galaxy S9 features adaptive fast charging, and it also supports WPC and PMA wireless charging. The S9 flaunts a polished aluminum frame in a gray finish with an IP68-certified body for water and dust resistance.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;h4&gt;&lt;strong&gt;Key Features&lt;/strong&gt;&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;kf-en row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-6 small-12&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;4 GB RAM&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;12 MP Rear Camera / 8 MP Front Camera&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns large-6 medium-6 small-12&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;5.8 Inch Screen&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;3000 mAh&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-30 row&quot;&gt;\r\n	&lt;h4&gt;Beautiful Photos in Any Light&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; class=&quot;lazy-loaded&quot; src=&quot;https://souqcms.s3.amazonaws.com/spring/images/2018/samsung/Galaxy-S9-Dual-Sim/2-Galaxy-S9-Dual-Sim-grey.jpg&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;Take photos without thinking twice when you have the Samsung Galaxy S9. The 12MP rear camera features two f-stop modes and a category-defining dual aperture design that adapts to bright light and super dim light automatically, just like the human eye. With the f/1.5 aperture mode, you can capture your nighttime adventures with stunning clarity. The rear camera has multi-frame noise reduction, so every photo you click in the dark comes out clear and bright, without any fine-tuning. The Samsung Galaxy S9 boasts of a super slow-mo mode that records videos at 960 frames per second. Show off your cinematography skills by adding slow motion bursts to highlight epic moments. It even features motion detection, so it starts to record in slow-mo only when the sensor detects movement. That&amp;rsquo;s not all, the camera also has optical image stabilization, which ensures your photos are sharp even when you&amp;rsquo;re on a bumpy ride. The S9 also has an 8MP front camera that you can use to click stunning selfies.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Turn Selfies into Emojis&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;Messaging comes alive on the Samsung Galaxy S9. It lets you create an animated version of yourself to show off the inner you. Then you can add a personal touch to your message with the emoji, which detects and mimics your movements. The AR emojis let you strut your personal style with customization options ranging from clothes to hairstyles. The animated AR emojis lets you put your emotion in motion. You can record videos with the emoji talking, singing, or whatever you feel like doing. Sometimes words can&amp;rsquo;t express your wide range of emotions. With the Samsung Galaxy S9, expressing your feelings on chat is not a problem as it features 18 AR emoji stickers. Add a human touch to messaging with your very own expressive emojis.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;See More and Hold Less with Infinity Display&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The Galaxy S9 opens up your view with its grand, edge-to-edge, 5.8-inch display. The S9 with its near bezel-less design fits comfortably in your hand despite its large size. It has curves on the sides that provide a sight that is boundless with minimal visual distractions of the bezel. The screen has an 18.5:9 aspect ratio that gives you a cinematic view. It features Advanced Contrast Enhancement that lets you view photos as they were meant to be seen.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Speed Is All That Matters&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The Samsung Galaxy S9 features a Samsung exynos 9810 Octa-Core processor and 4GB RAM. It lets you switch apps and multitask in a snap. Get your game on, watch videos, or text while you stream videos; whatever you do, the S9 performs quickly and fluidly. Moreover, with LTE speeds up to 1.2Gbps, the Galaxy S9 lets you download swiftly and stream instantly.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Forget What It Is Like to Run Out of Space&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The S9 has an incredible storage capacity of 128GB. It even includes an expandable microSD slot that supports cards up to 400GB. It also lets you store your photos on Google Photos with unlimited storage. Lack of space? What&amp;rsquo;s that? Is what you will say when you have the Galaxy S9 in your pocket.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;a class=&quot;readmore description collapsed&quot; href=&quot;javascript:void(0);&quot;&gt;Read less&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;\r\n',NULL,'','','','[\"152879007060031.jpg\",\"152879007015507.jpg\",\"15287900701728.jpg\",\"152879007069799.jpg\",\"152879007021529.jpg\",\"152879007096922.jpg\"]',''),(8,'bharatrose1@gmail.com','Free Knight 60L Waterproof Climbing Hiking Ra','SDFSDDF852','Cosmetic Bags & Cases',52,'','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.','2018-06-12 12:00:00','2018-11-13 12:05:00',100,90,'likenew',1000,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','052365236','whole-sale','Pices','1','','sindbad','2 days',NULL,'Free Shipping ',NULL,'1 years','[&quot;Samsung Model&quot;,&quot;Samsung Model&quot;,&quot;Recording Definition&quot;,&quot;Recording Definition&quot;]','[&quot;1080P&quot;,&quot;1080P&quot;,&quot;S8 Plus&quot;,&quot;S8 Plus&quot;]','&lt;div class=&quot;columns product-details small-12&quot;&gt;\r\n&lt;h3&gt;PRODUCT INFORMATION&lt;/h3&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&amp;nbsp;\r\n	&lt;h4&gt;Specifications&lt;/h4&gt;\r\n\r\n	&lt;div id=&quot;specs-short&quot;&gt;\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;p&gt;Brand&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung&lt;/p&gt;\r\n\r\n	&lt;p&gt;Operating System Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Android&lt;/p&gt;\r\n\r\n	&lt;p&gt;Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;529 ppi&lt;/p&gt;\r\n\r\n	&lt;p&gt;Storage Capacity&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;hide&quot; id=&quot;specs-full&quot;&gt;\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Image quality&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Audio&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Display&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Connectivity&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Camera&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Camera&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Color&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Power Management&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;h5&gt;Technical Information&lt;/h5&gt;\r\n\r\n	&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;p&gt;Brand&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung&lt;/p&gt;\r\n\r\n	&lt;p&gt;Operating System Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Android&lt;/p&gt;\r\n\r\n	&lt;p&gt;Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;529 ppi&lt;/p&gt;\r\n\r\n	&lt;p&gt;Storage Capacity&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n\r\n	&lt;p&gt;Number Of SIM&lt;/p&gt;\r\n\r\n	&lt;p&gt;Dual SIM&lt;/p&gt;\r\n\r\n	&lt;p&gt;Mobile Phone Type&lt;/p&gt;\r\n\r\n	&lt;p&gt;Smartphone&lt;/p&gt;\r\n\r\n	&lt;p&gt;Cellular Network Technology&lt;/p&gt;\r\n\r\n	&lt;p&gt;4G LTE&lt;/p&gt;\r\n\r\n	&lt;p&gt;Chipset manufacturer&lt;/p&gt;\r\n\r\n	&lt;p&gt;Samsung Exynos&lt;/p&gt;\r\n\r\n	&lt;p&gt;Model Number&lt;/p&gt;\r\n\r\n	&lt;p&gt;SM-G960FZADKSA&lt;/p&gt;\r\n\r\n	&lt;p&gt;Battery Capacity in mAh&lt;/p&gt;\r\n\r\n	&lt;p&gt;3000 - 4000 mAH&lt;/p&gt;\r\n\r\n	&lt;p&gt;Item EAN&lt;/p&gt;\r\n\r\n	&lt;p&gt;2724573314484&lt;/p&gt;\r\n\r\n	&lt;p&gt;Rear Camera Resolution&lt;/p&gt;\r\n\r\n	&lt;p&gt;12 MP&lt;/p&gt;\r\n\r\n	&lt;p&gt;3.5 mm Audio Jack&lt;/p&gt;\r\n\r\n	&lt;p&gt;Display Size (Inch)&lt;/p&gt;\r\n\r\n	&lt;p&gt;5.8 Inch&lt;/p&gt;\r\n\r\n	&lt;p&gt;NFC&lt;/p&gt;\r\n\r\n	&lt;p&gt;Front Camera&lt;/p&gt;\r\n\r\n	&lt;p&gt;8 MP&lt;/p&gt;\r\n\r\n	&lt;p&gt;Front Flash&lt;/p&gt;\r\n\r\n	&lt;p&gt;Color&lt;/p&gt;\r\n\r\n	&lt;p&gt;Titanium Grey&lt;/p&gt;\r\n\r\n	&lt;p&gt;Fast Charge&lt;/p&gt;\r\n\r\n	&lt;p&gt;Memory RAM&lt;/p&gt;\r\n\r\n	&lt;p&gt;4 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;a class=&quot;expand readmore specs&quot; href=&quot;javascript:void(0);&quot;&gt;Read more&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;\r\n	&lt;h4&gt;Description:&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;hide&quot; id=&quot;description-short&quot;&gt;\r\n	&lt;div class=&quot;columns container&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;p&gt;Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div id=&quot;description-full&quot;&gt;\r\n	&lt;div class=&quot;columns container&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;p&gt;Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot. This Samsung smartphone features a Samsung exynos 9810 Octa-Core processor and 4GB RAM that makes multitasking swift and fluid. The S9 has a 12MP rear camera with a dual-aperture design that adapts to the varying lighting conditions just like the human eye. It even includes an 8MP front camera with Intelligent Scan for easy unlocking of the phone even in the dark. The Galaxy S9 has a 5.8-inch Super AMOLED Infinity Display with a resolution of 2960 x 1440 pixels, a pixel density of 570ppi, and an aspect ratio of 18.5:9. The 3000mAh battery of the Galaxy S9 features adaptive fast charging, and it also supports WPC and PMA wireless charging. The S9 flaunts a polished aluminum frame in a gray finish with an IP68-certified body for water and dust resistance.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;\r\n	&lt;h4&gt;&lt;strong&gt;Key Features&lt;/strong&gt;&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;kf-en row&quot;&gt;\r\n	&lt;div class=&quot;columns medium-6 small-12&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;64 GB&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;4 GB RAM&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;12 MP Rear Camera / 8 MP Front Camera&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns large-6 medium-6 small-12&quot;&gt;\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;5.8 Inch Screen&lt;/p&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;row&quot;&gt;\r\n	&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n	&lt;p&gt;3000 mAh&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-30 row&quot;&gt;\r\n	&lt;h4&gt;Beautiful Photos in Any Light&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; class=&quot;lazy-loaded&quot; src=&quot;https://souqcms.s3.amazonaws.com/spring/images/2018/samsung/Galaxy-S9-Dual-Sim/2-Galaxy-S9-Dual-Sim-grey.jpg&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;Take photos without thinking twice when you have the Samsung Galaxy S9. The 12MP rear camera features two f-stop modes and a category-defining dual aperture design that adapts to bright light and super dim light automatically, just like the human eye. With the f/1.5 aperture mode, you can capture your nighttime adventures with stunning clarity. The rear camera has multi-frame noise reduction, so every photo you click in the dark comes out clear and bright, without any fine-tuning. The Samsung Galaxy S9 boasts of a super slow-mo mode that records videos at 960 frames per second. Show off your cinematography skills by adding slow motion bursts to highlight epic moments. It even features motion detection, so it starts to record in slow-mo only when the sensor detects movement. That&amp;rsquo;s not all, the camera also has optical image stabilization, which ensures your photos are sharp even when you&amp;rsquo;re on a bumpy ride. The S9 also has an 8MP front camera that you can use to click stunning selfies.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Turn Selfies into Emojis&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;Messaging comes alive on the Samsung Galaxy S9. It lets you create an animated version of yourself to show off the inner you. Then you can add a personal touch to your message with the emoji, which detects and mimics your movements. The AR emojis let you strut your personal style with customization options ranging from clothes to hairstyles. The animated AR emojis lets you put your emotion in motion. You can record videos with the emoji talking, singing, or whatever you feel like doing. Sometimes words can&amp;rsquo;t express your wide range of emotions. With the Samsung Galaxy S9, expressing your feelings on chat is not a problem as it features 18 AR emoji stickers. Add a human touch to messaging with your very own expressive emojis.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;See More and Hold Less with Infinity Display&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The Galaxy S9 opens up your view with its grand, edge-to-edge, 5.8-inch display. The S9 with its near bezel-less design fits comfortably in your hand despite its large size. It has curves on the sides that provide a sight that is boundless with minimal visual distractions of the bezel. The screen has an 18.5:9 aspect ratio that gives you a cinematic view. It features Advanced Contrast Enhancement that lets you view photos as they were meant to be seen.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Speed Is All That Matters&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The Samsung Galaxy S9 features a Samsung exynos 9810 Octa-Core processor and 4GB RAM. It lets you switch apps and multitask in a snap. Get your game on, watch videos, or text while you stream videos; whatever you do, the S9 performs quickly and fluidly. Moreover, with LTE speeds up to 1.2Gbps, the Galaxy S9 lets you download swiftly and stream instantly.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;mart-10 row&quot;&gt;\r\n	&lt;h4&gt;Forget What It Is Like to Run Out of Space&lt;/h4&gt;\r\n\r\n	&lt;div class=&quot;columns medium-12&quot;&gt;&lt;img alt=&quot;Samsung Galaxy S9&quot; src=&quot;https://cf1.s3.souqcdn.com/static/ltr/en/images/lazy.png&quot; /&gt;&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;columns mart-10 medium-12 text-center&quot;&gt;\r\n	&lt;p&gt;The S9 has an incredible storage capacity of 128GB. It even includes an expandable microSD slot that supports cards up to 400GB. It also lets you store your photos on Google Photos with unlimited storage. Lack of space? What&amp;rsquo;s that? Is what you will say when you have the Galaxy S9 in your pocket.&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;a class=&quot;readmore description collapsed&quot; href=&quot;javascript:void(0);&quot;&gt;Read less&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;\r\n',NULL,'','','','[\"152879081247642.jpg\",\"152879081258129.jpg\",\"152879081276960.jpg\",\"152879081286095.jpg\",\"154341123028235.jpg\"]',''),(10,'bharatrose1@gmail.com','Temp Hotel','SDF6565656','Dresses',111,'','Temp hotel','Temp hotel','2018-09-02 00:00:00','2019-04-11 00:00:00',150,150,'brandnew',150,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','0505236522','whole-sale','Pices','1','','sindbad','10 days',NULL,'Free Shipping',NULL,'100 years warranty','[&quot;Samsung Model&quot;,&quot;Recording Definition&quot;,&quot;i will&quot;,&quot;i will go&quot;]','[&quot;1080P&quot;,&quot;1080P&quot;,&quot;go&quot;,&quot;go&quot;]','&lt;div class=&quot;product-description-main ui-box&quot; id=&quot;j-product-description&quot;&gt;\r\n&lt;div class=&quot;ui-box-title&quot;&gt;Product Description&lt;/div&gt;\r\n\r\n&lt;div class=&quot;ui-box-body&quot;&gt;\r\n&lt;div class=&quot;description-content&quot;&gt;\r\n&lt;div class=&quot;origin-part&quot;&gt;\r\n&lt;div style=&quot;clear:both&quot;&gt;\r\n&lt;p&gt;&lt;a href=&quot;https://cingo.aliexpress.com/store/1110648?spm=2114.12010615.nav-home.1.69cf59a15Y9SkQ&quot;&gt;&lt;img src=&quot;https://cbu01.alicdn.com/img/ibank/2018/117/230/9629032711_520944385.jpg&quot; style=&quot;height:300px; width:1000px&quot; /&gt;&lt;img src=&quot;https://cbu01.alicdn.com/img/ibank/2017/826/669/7800966628_368689377.jpg&quot; style=&quot;float:left; height:342px; width:960px&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;height:100%&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;\r\n			&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n			&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;div style=&quot;color:#ecf0e0; font-size:0.0px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px&quot;&gt;\r\n&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;font-size:0&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\nhttps://www.aliexpress.com/store/product/Original-Samsung-Galaxy-S8-SM-G950F-4G-LTE-Mobile-phone-64GB-5-8-Inch-Single-Sim/1110648_32846412268.html?spm=2114.10010108.1000023.2.7615&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;height:100%&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n&lt;a href=&quot;https://www.aliexpress.com/store/product/Original-Samsung-Galaxy-S8-SM-G950F-4G-LTE-Mobile-phone-64GB-5-8-Inch-Single-Sim/1110648_32846412268.html?spm=2114.12010615.8148356.1.1ccf1888FBvrrA&quot;&gt;&lt;img src=&quot;https://cbu01.alicdn.com/img/ibank/2018/852/049/9271940258_520944385.jpg&quot; style=&quot;height:298px; width:930px&quot; /&gt;&lt;/a&gt; &lt;a href=&quot;https://www.aliexpress.com/item/Original-Apple-iPhone-8-2GB-RAM-64GB-256GB-Hexa-core-IOS-3D-Touch-ID-LTE-12/32908704960.html?spm=2114.12010608.0.0.27061529CapGis&amp;amp;ws_ab_test=searchweb0_0,searchweb201602_4_10152_10065_10151_10344_10068_10342_10325_10343_10546_10340_10059_10341_10548_10696_100031_10084_10083_10103_10618_10307_10624_10623_10622_10621_10620,searchweb201603_1,ppcSwitch_5&amp;amp;algo_expid=3c672c0d-3c44-4770-91cd-55f2e72991fa-3&amp;amp;algo_pvid=3c672c0d-3c44-4770-91cd-55f2e72991fa&amp;amp;priceBeautifyAB=0&quot;&gt;&lt;img src=&quot;http://cbu01.alicdn.com/img/ibank/2018/364/148/9271841463_520944385.jpg&quot; style=&quot;height:300px; width:465px&quot; /&gt;&lt;/a&gt; &lt;a href=&quot;https://www.aliexpress.com/store/product/Original-unlocked-Apple-iPhone-7-iPhone-7-plus-4-7-12-0MP-Camera-Quad-Core-2GB/1110648_32730973173.html?spm=2114.10010108.1000023.4.229555d9r0xGYJ&quot;&gt;&lt;img src=&quot;http://cbu01.alicdn.com/img/ibank/2018/759/898/9252898957_520944385.jpg&quot; style=&quot;height:300px; width:465px&quot; /&gt;&lt;/a&gt; &lt;a href=&quot;http://www.aliexpress.com/store/product/Original-Unlocked-Apple-iPhone-6s-Plus-2GB-RAM-16-32-64-128GB-ROM-Cell-Phone-IOS/1110648_32754215847.html?spm=2114.12010108.1000023.3.78741bb6aI1VbV&quot;&gt;&lt;img src=&quot;http://cbu01.alicdn.com/img/ibank/2018/633/388/9271883336_520944385.jpg&quot; style=&quot;height:300px; width:465px&quot; /&gt;&lt;/a&gt; &lt;a href=&quot;https://www.aliexpress.com/store/product/Unlocked-Apple-iPhone-6-1GB-RAM-4-7-inch-IOS-Dual-Core-1-4GHz-16-64/1110648_32831607745.html?spm=2114.10010108.1000023.6.229555d9pmUxKS&quot;&gt;&lt;img src=&quot;http://cbu01.alicdn.com/img/ibank/2018/286/551/9229155682_520944385.jpg&quot; style=&quot;height:300px; width:465px&quot; /&gt;&lt;/a&gt;\r\n\r\n&lt;p&gt;516654&lt;a href=&quot;https://www.aliexpress.com/store/product/Original-Samsung-Galaxy-Note-8-6-3-inch-Octa-Core-6GB-RAM-64GB-ROM-Dual-Back/1110648_32880090268.html?spm=2114.12010615.8148356.1.7fef3f01jfGRoY&quot;&gt;5&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;fafafaaaa_01&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1xsJeotbJ8KJjy1zjq6yqapXam.jpg&quot; style=&quot;color:#333333; font-size:12.0px&quot; /&gt; &lt;img alt=&quot;fafafaaaa_02&quot; src=&quot;https://ae01.alicdn.com/kf/HTB13Mu1ox6I8KJjy0Fgq6xXzVXaC.jpg&quot; style=&quot;color:#333333; font-size:12.0px&quot; /&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;s8_01&quot; src=&quot;https://ae01.alicdn.com/kf/HTB15OVddBLN8KJjSZPhq6A.spXav.jpg&quot; /&gt;&lt;img alt=&quot;s8_02&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1_b7sjv6H8KJjSspmq6z2WXXaN.jpg&quot; /&gt;&lt;img alt=&quot;s8_03&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1ehf4jxrI8KJjy0Fpq6z5hVXaP.jpg&quot; /&gt;&lt;img alt=&quot;s8_04&quot; src=&quot;https://ae01.alicdn.com/kf/HTB17BY2c2Qs8KJjSZFEq6A9RpXa7.jpg&quot; /&gt;&lt;img alt=&quot;s8_05&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1n.4YdqLN8KJjSZFvq6xW8VXaE.jpg&quot; /&gt;&lt;img alt=&quot;s8_06&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1J_x3dvjM8KJjSZFyq6xdzVXaB.jpg&quot; /&gt;&lt;img alt=&quot;s8_07&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1v.tjcPgy_uJjSZKbq6xXkXXa4.jpg&quot; /&gt;&lt;img alt=&quot;s8_08&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1WFjzjtzJ8KJjSspkq6zF7VXaS.jpg&quot; /&gt;&lt;img alt=&quot;s8_09&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1uf_DjtfJ8KJjy0Feq6xKEXXaC.jpg&quot; /&gt;&lt;img alt=&quot;s8_10&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1_rLFjDnI8KJjSszgq6A8ApXa4.jpg&quot; /&gt;&lt;img alt=&quot;s8_11&quot; src=&quot;https://ae01.alicdn.com/kf/HTB13KYQjtrJ8KJjSspaq6xuKpXat.jpg&quot; /&gt;&lt;img alt=&quot;s8_13&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1QRrWjsjI8KJjSsppq6xbyVXaO.jpg&quot; /&gt;&lt;img alt=&quot;s8_14&quot; src=&quot;https://ae01.alicdn.com/kf/HTB17Ob4jxrI8KJjy0Fpq6z5hVXat.jpg&quot; /&gt;&lt;img alt=&quot;s8_15&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1gr_qjCYH8KJjSspdq6ARgVXai.jpg&quot; /&gt;&lt;img alt=&quot;s8_16&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1ULR6dwjN8KJjSZFCq6z3GpXaR.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;div style=&quot;clear:both&quot;&gt;\r\n&lt;div style=&quot;background-color:#ffffff; border:2.0px dashed #ffffff; font-family:sans-serif; font-size:12.0px; height:100.0%; width:98.0%&quot;&gt;\r\n&lt;div style=&quot;font-size:12.0px; height:100.0%&quot;&gt;\r\n&lt;div&gt;\r\n&lt;div style=&quot;font-size:0&quot;&gt;Apple iphone 6, Apple iphone 7, Apple iphone 8, Apple iphone x, Apple iphone 6s, Apple iphone 6s Plus, Apple iphone 6 Plus, Apple iphone 7 Plus, Apple iphone 8 Plus, SAMSUNG, LG, HTC, SONY, MOTOROLA, IPHONE, NOKIA, Moblie Phone, Sma&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;http://cbu01.alicdn.com/img/ibank/2018/265/818/8315818562_368689377.jpg&quot; style=&quot;height:330px; width:960px&quot; /&gt;&lt;img alt=&quot;fa&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1JU29dStYBeNjSspkq6zU8VXay.jpg&quot; style=&quot;height:426px; width:960px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img src=&quot;https://cbu01.alicdn.com/img/ibank/2018/033/926/9270629330_520944385.jpg&quot; style=&quot;height:591px; width:960px&quot; /&gt;&lt;img src=&quot;https://cbu01.alicdn.com/img/ibank/2018/077/956/9251659770_520944385.jpg&quot; style=&quot;height:591px; width:960px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;height:100%&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&lt;a href=&quot;http://www.aliexpress.com/store/product/Shipment/1110648_32557180501.html&quot;&gt;&lt;img src=&quot;https://ae01.alicdn.com/kf/HTB183.aXKOSBuNjy0Fdq6zDnVXa6.jpg&quot; /&gt;&lt;/a&gt;&lt;/td&gt;\r\n			&lt;td&gt;&lt;a href=&quot;http://www.aliexpress.com/store/product/FAQ/1110648_32557584481.html&quot;&gt;&lt;img src=&quot;https://ae01.alicdn.com/kf/HTB1o7MaXL5TBuNjSspmq6yDRVXaV.jpg&quot; /&gt;&lt;/a&gt;&lt;/td&gt;\r\n			&lt;td&gt;&lt;a href=&quot;http://www.aliexpress.com/store/product/Payment/1110648_32557592928.html?&quot;&gt;&lt;img src=&quot;https://ae01.alicdn.com/kf/HTB1o7gXXHSYBuNjSspfq6AZCpXaS.jpg&quot; /&gt;&lt;/a&gt;&lt;/td&gt;\r\n			&lt;td&gt;&lt;a href=&quot;https://www.aliexpress.com/store/product/Warranty/1110648_32557600608.html&quot;&gt;&lt;img src=&quot;https://ae01.alicdn.com/kf/HTB1R4T.XQyWBuNjy0Fpq6yssXXaO.jpg&quot; /&gt;&lt;/a&gt;&lt;/td&gt;\r\n			&lt;td&gt;&lt;a href=&quot;http://www.aliexpress.com/store/product/Is-the-mobile-phone-original/1110648_32853170248.html&quot;&gt;&lt;img src=&quot;https://ae01.alicdn.com/kf/HTB1c9.XXN9YBuNjy0Ffq6xIsVXaa.jpg&quot; /&gt;&lt;/a&gt;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n',NULL,'','','','[\"152879161649360.jpg\",\"152879161658721.jpg\",\"154391597324504.jpg\",\"154391638636304.jpg\"]','1'),(11,'bharatrose1@gmail.com','Crossbody Bags for Women 2018 Female 13x19cm ','SDFSDF5656','Cosmetic Bags & Cases',52,'','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.','Samsung Galaxy S9 has a 3000mAh battery that supports wireless charging. The Galaxy S9 boasts a rear camera with a revolutionary dual-aperture design.The Samsung Galaxy S9 features a 64GB ROM for storage, and the internal storage capacity can be expanded up to 400GB via the microSD slot.','2018-06-12 02:20:00','2019-01-16 12:50:00',200,200,'brandnew',150,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','0523652365','retails','Pices','1','','sindbad','5 days',NULL,'Free shipping',NULL,'1 Year','[&quot;Samsung Model&quot;,&quot;Recording Definition&quot;]','[&quot;1080P&quot;,&quot;S8 Plus&quot;]','',NULL,'','','','[\"152879176957646.jpg\",\"152879176993823.jpg\",\"152879176938516.jpg\",\"152879176949440.jpg\",\"152879176953901.jpg\"]',''),(13,'bharatrose1@gmail.com','adidas Originals Trefoil Gym Bag','SDFSD5F656','Cosmetic Bags & Cases',52,'','With a soft, unstructured shape, this gym bag is extra versatile. A side zip pocket keeps small items at your fingertips. The sack shows off a large Trefoil logo on the front.','With a soft, unstructured shape, this gym bag is extra versatile. A side zip pocket keeps small items at your fingertips. The sack shows off a large Trefoil logo on the front.','2018-06-12 01:05:00','2019-03-15 12:25:00',70,70,'brandnew',5,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','052236524','retails','Pices','1','','sindbad','2 days',NULL,'Free Shipping',NULL,'1 years','[&quot;Recording Definition&quot;,&quot;Samsung Model&quot;,&quot;Samsung Model&quot;,&quot;Samsung Model&quot;]','[&quot;1080P&quot;,&quot;1080P&quot;,&quot;1080P&quot;,&quot;S8 Plus&quot;]','',NULL,'','','','[\"152879225817334.jpg\",\"152879225816800.jpg\",\"152879225834705.jpg\",\"152879225875117.jpg\",\"15287922585183.jpg\"]',''),(15,'bharatrose1@gmail.com','Original Samsung Galaxy Note 8 6GB RAM 64GB R','DFS26562','Smart Phone',315,'','Original Samsung Galaxy Note 8 6GB RAM 64GB ROM 6.3 inch Octa Core Dual Back Camera 12MP 3300mAh Unlocked Smart Mobile Phone','                                                      \r\n                                                      Original Samsung Galaxy Note 8 6GB RAM 64GB ROM 6.3 inch Octa Core Dual Back Camera 12MP 3300mAh Unlocked Smart Mobile Phone                                                      \r\n                                                      ','2018-07-17 15:55:00','2019-02-21 15:55:00',100,100,'likenew',100,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','0522365212','retails','Pices','1','','sindbad','2 days',NULL,'YES',NULL,'1 year','[&quot;Hard disk&quot;]','[&quot;500 GB&quot;]','&lt;div class=&quot;description-content&quot;&gt;\r\n&lt;div style=&quot;clear:both&quot;&gt;\r\n&lt;p&gt;&lt;a href=&quot;https://www.aliexpress.com/store/sale-items/1417031.html?spm=2114.12010108.0.0.qaolee&quot;&gt;&lt;img alt=&quot;0&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1PXL9OpXXXXa6aXXXq6xXFXXXm/221599445/HTB1PXL9OpXXXXa6aXXXq6xXFXXXm.jpg?size=44139&amp;amp;height=115&amp;amp;width=960&amp;amp;hash=53a510d27a95bac21741fb3770a1e7fc&quot; /&gt;&lt;/a&gt;&lt;img alt=&quot;&quot; src=&quot;https://ae01.alicdn.com/aecbu/img/ibank/2018/101/500/8851005101_787281355.jpg&quot; style=&quot;height:260px; width:960px&quot; /&gt;&lt;img alt=&quot;1&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1027yOXXXXXaaaFXXq6xXFXXXG/221599445/HTB1027yOXXXXXaaaFXXq6xXFXXXG.jpg?size=9475&amp;amp;height=39&amp;amp;width=960&amp;amp;hash=d4e912704c1f395ea25505eccba820ec&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.aliexpress.com/store/product/Original-Unlocked-Apple-iPhone-7-2GB-RAM-32-128GB-256GB-ROM-IOS-10-Quad-Core-4G/1417031_32783490100.html?spm=2114.12010108.1000023.2.6cc058eb4c9epV&quot;&gt;&lt;img alt=&quot;1&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1jMkegrwrBKNjSZPcq6xpapXaA.jpg&quot; style=&quot;float:left; height:250px; width:465px&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;a href=&quot;https://www.aliexpress.com/store/product/Original-Unlocked-Apple-iPhone-6s-iOS-Dual-Core-2GB-RAM-16GB-64GB-128GB-ROM-4-7/1417031_32845218617.html?spm=2114.12010108.1000023.3.6cc058eb4c9epV&quot;&gt;&lt;img alt=&quot;2&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1B389truWBuNjSszgq6z8jVXad.jpg&quot; style=&quot;float:right; height:250px; width:465px&quot; /&gt;&lt;/a&gt;&lt;a href=&quot;https://www.aliexpress.com/store/product/Original-Sony-Xperia-Z5-E6653-Unlocked-RAM-3GB-ROM-32GB-GSM-WCDMA-4G-LTE-Android/1417031_32850126352.html?spm=2114.12010108.1000023.4.6cc058eb4c9epV&quot;&gt;&lt;img alt=&quot;3&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1cTB_gOQnBKNjSZFmq6AApVXaV.jpg&quot; style=&quot;float:left; height:250px; width:465px&quot; /&gt;&lt;/a&gt;&lt;a href=&quot;https://www.aliexpress.com/store/product/Original-Apple-iPhone-X-Face-ID-64GB-256GB-ROM-5-8-inch-3GB-RAM-12MP-Hexa/1417031_32842019319.html?spm=2114.12010108.1000023.5.6cc058eb4c9epV&quot;&gt;&lt;img alt=&quot;4&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1wzVstpmWBuNjSspdq6zugXXal.jpg&quot; style=&quot;float:right; height:250px; width:465px&quot; /&gt;&lt;/a&gt;&lt;img alt=&quot;&quot; src=&quot;https://cbu01.alicdn.com/img/ibank/2017/162/857/6165758261_787281355.jpg&quot; style=&quot;float:left; height:677px; width:960px&quot; /&gt;&lt;img alt=&quot;5&quot; src=&quot;https://ae01.alicdn.com/kf/HTB1rrRTPVXXXXaGXFXXq6xXFXXXy/221599445/HTB1rrRTPVXXXXaGXFXXq6xXFXXXy.jpg?size=45158&amp;amp;height=283&amp;amp;width=960&amp;amp;hash=272ee9776f43b2ee115fbde8dd791bd4&quot; /&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;TIM20180525163007&quot; src=&quot;http://ae01.alicdn.com/kf/HTB11aMGgBnTBKNjSZPfq6zf1XXab.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;note8_02&quot; src=&quot;http://ae01.alicdn.com/kf/HTB1EEmztA9WBuNjSspeq6yz5VXa7.jpg&quot; /&gt;&lt;img alt=&quot;note8_03&quot; src=&quot;http://ae01.alicdn.com/kf/HTB10HNBtwmTBuNjy1Xbq6yMrVXaf.jpg&quot; /&gt;&lt;img alt=&quot;note8_04&quot; src=&quot;http://ae01.alicdn.com/kf/HTB1KgrQgsIrBKNjSZK9q6ygoVXau.jpg&quot; /&gt;&lt;img alt=&quot;note8_05&quot; src=&quot;http://ae01.alicdn.com/kf/HTB17lCYtxGYBuNjy0Fnq6x5lpXad.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;div style=&quot;clear:both&quot;&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;span style=&quot;font-family:arial,helvetica,sans-serif&quot;&gt;Dear&amp;nbsp;buyer&amp;nbsp;.If&amp;nbsp;you&amp;nbsp;need&amp;nbsp;suitable&amp;nbsp;Plug&amp;nbsp;Adapter&amp;nbsp;,&amp;nbsp;please&amp;nbsp;tell&amp;nbsp;us&amp;nbsp;in&amp;nbsp;the&amp;nbsp;order&amp;nbsp;,then&amp;nbsp;we&amp;nbsp;will&amp;nbsp;prepare&amp;nbsp;right&amp;nbsp;Plug&amp;nbsp;Adapter&amp;nbsp;for&amp;nbsp;you:&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;span style=&quot;font-family:arial,helvetica,sans-serif&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;https://ae01.alicdn.com/aecbu/img/ibank/2017/858/686/6194686858_787281355.jpg&quot; style=&quot;float:left; height:500px; width:960px&quot; /&gt;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;h3&gt;&amp;nbsp;&lt;/h3&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-family:\'comic sans ms\'&quot;&gt;&lt;span style=&quot;font-size:20px&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;About&amp;nbsp;customs tax:&lt;/span&gt;&lt;/strong&gt;It is buyer duty to pay for customs tax. Normally ,we will declare the lower price on the package/bill/invoice ,also you can tell me how to declare if you know how to avoid customs&lt;/span&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-family:\'comic sans ms\'&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;About warranty:&lt;/span&gt;&lt;/strong&gt;We provide 6 months warranty (upon date of purchase) for all products except accessories. The warranty would failed if you fix or disassemble the item without our agreement. Please show us clearly video include the imei if you need after-service.&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-family:\'comic sans ms\'&quot;&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;strong&gt;About empty parcel:&lt;/strong&gt;&lt;/span&gt;Please open the parcel in post officer&amp;rsquo;s presence ,please check the package and make sure it is intact before you sign. if the parcel is damaged or empty (stolen),please ask the post office to provide official documents. especially the claim request paper.&lt;/span&gt;&lt;img alt=&quot;8&quot; src=&quot;https://ae01.alicdn.com/kf/HTB11m3hOpXXXXXMXXXXq6xXFXXX7/221599445/HTB11m3hOpXXXXXMXXXXq6xXFXXX7.jpg?size=57356&amp;amp;height=222&amp;amp;width=960&amp;amp;hash=965e141406d716adfbb1254ced2ecaa5&quot; /&gt;&lt;a href=&quot;https://www.aliexpress.com/store/product/FAQ/1417031_32480932725.html&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;https://ae01.alicdn.com/aecbu/img/ibank/2015/275/286/2506682572_1310651197.jpg&quot; style=&quot;height:79px; width:231px&quot; /&gt;&lt;/a&gt;&lt;a href=&quot;http://www.aliexpress.com/store/product/Shipment/1417031_32478805644.html&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;https://ae01.alicdn.com/aecbu/img/ibank/2015/462/196/2506691264_1310651197.jpg&quot; style=&quot;height:79px; width:230px&quot; /&gt;&lt;/a&gt;&lt;a href=&quot;http://www.aliexpress.com/store/product/Payment/1417031_32478777325.html&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;https://ae01.alicdn.com/aecbu/img/ibank/2015/847/976/2506679748_1310651197.jpg&quot; style=&quot;height:79px; width:231px&quot; /&gt;&lt;/a&gt;&lt;a href=&quot;http://www.aliexpress.com/store/product/Warranty/1417031_32479423034.html&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;https://ae01.alicdn.com/aecbu/img/ibank/2015/071/720/2503027170_1310651197.jpg&quot; style=&quot;height:79px; width:230px&quot; /&gt;&lt;/a&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://cbu01.alicdn.com/img/ibank/2017/497/021/4097120794_1753266133.jpg&quot; style=&quot;height:329px; width:960px&quot; /&gt;&lt;a href=&quot;https://www.aliexpress.com/store/1417031&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;https://ae01.alicdn.com/aecbu/img/ibank/2017/577/711/4097117775_1753266133.jpg&quot; style=&quot;height:200px; width:960px&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n',NULL,'','','','[\"153182917523260.jpg\",\"153182917597022.jpg\",\"153182917564189.jpg\",\"153182917546888.jpg\",\"153182917525509.jpg\"]',''),(16,'bharatrose1@gmail.com','Global Version Xiaomi Redmi Note 5 4GB 64GB 5','SDF565656','Smart Phone',315,'','Global Version Xiaomi Redmi Note 5 4GB 64GB 5.99&quot; Full Screen Dual Camera Mobile Phone Note5 Snapdragon 636 Octa Core 4000mAh','                                                      \r\n                                                                                                            \r\n                                   Global Version Xiaomi Redmi Note 5 4GB 64GB 5.99&quot; Full Screen Dual Camera Mobile Phone Note5 Snapdragon 636 Octa Core 4000mAh                   ','2018-07-17 16:20:00','2019-01-23 16:20:00',100,100,'brandnew',100,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','0522365212','whole-sale','Pices','1','','pick up','2 days',NULL,'YES',NULL,'1 year','[&quot;Hard disk&quot;]','[&quot;500 GB&quot;]','&lt;h1&gt;Hello World&lt;/h1&gt;\r\n',NULL,'','','','[\"153183025299455.jpg\",\"153183025212726.jpg\",\"153183025295739.jpg\"]',''),(17,'bharatrose1@gmail.com','test','SDFSDF565656','Smart Phone',315,'','test','test','2018-06-10 15:40:00','2018-11-13 15:40:00',5000,5000,'brandnew',100,'0','bharatrose1@gmail.com','bharatrose1@gmail.com','0','0522365212','retails','Pices','1','','sindbad','2 DAYS',NULL,'free',NULL,'1 YEAR ','[&quot;SDF&quot;]','[&quot;DF&quot;]','&lt;p&gt;HELLO&lt;/p&gt;\r\n',NULL,'','','','[\"153225999830025.jpg\",\"153225999897629.jpg\"]',''),(18,'john@gmail.com','Original Unlocked Samsung Galaxy S8 Plus 4G R','asdfasdfasdf','Dual SIM Card',314,'','Original Unlocked Samsung Galaxy S8 Plus 4G R','                                                     Original Unlocked Samsung Galaxy S8 Plus 4G R                                         ','2018-10-02 00:00:00','2019-05-03 00:00:00',2000,2000,'brandnew',100,'0','john@gmail.com','john@gmail.com','0','','','Pices','1','','pick up','asdf',NULL,'free ',NULL,'sadfa','[&quot;asdf&quot;]','[&quot;asdf&quot;]','',NULL,'','','','[\"154495371318896.jpg\",\"154495371368889.jpg\",\"154495371317808.jpg\",\"154495371371696.jpg\"]','1'),(19,'akashche72@gmail.com','Original Samsung Galaxy Note 5 N920A mobile p','656sdfsdf','Dual SIM Card',314,'','Original Samsung Galaxy Note 5 N920A mobile phone 4GB RAM 16MP 5.7 \'\' single sim card 4G LTE ,Free DHL-EMS Shipping','                                                      \r\n                                  Original Samsung Galaxy Note 5 N920A mobile phone 4GB RAM 16MP 5.7 \'\' single sim card 4G LTE ,Free DHL-EMS Shipping                    ','2018-07-29 00:00:00','2019-07-18 00:00:00',5000,5000,'brandnew',1000,'0','akashche72@gmail.com','akashche72@gmail.com','0','','','litter','1','','pick up','2 days',NULL,'free',NULL,'1 year','[&quot;Hell&quot;]','[&quot;World&quot;]','&lt;p&gt;Hello&lt;/p&gt;\r\n',NULL,'','','','[\"154513208276044.jpg\",\"154513208269942.jpg\"]','1');
/*!40000 ALTER TABLE `product_catalogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categlog_attributes`
--

DROP TABLE IF EXISTS `product_categlog_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_categlog_attributes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `reviews` text,
  `tag` varchar(225) DEFAULT NULL,
  `youtube_link` varchar(225) DEFAULT NULL,
  `facebook_link` varchar(225) DEFAULT NULL,
  `web_link` varchar(225) DEFAULT NULL,
  `rate` int(10) DEFAULT NULL,
  `location_latitude` float NOT NULL,
  `location_longititude` float NOT NULL,
  `images` varchar(225) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `product_id` (`product_id`),
  CONSTRAINT `product_categlog_attributes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product_catalogs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categlog_attributes`
--

LOCK TABLES `product_categlog_attributes` WRITE;
/*!40000 ALTER TABLE `product_categlog_attributes` DISABLE KEYS */;
INSERT INTO `product_categlog_attributes` VALUES (1,1,NULL,NULL,'https://www.aliexpress.com/item/Unlocked-Original-Samsung-Galaxy-S8-G950-US-Version-Mobile-phone-4G-LTE-64GB-5-8-Inch/32920918153.html?spm=2114.search0104.3.68.5c854d502Np6DH&amp;ws_ab_test=searchweb0_0,searchweb201602_1_5729','https://www.aliexpress.com/item/Unlocked-Original-Samsung-Galaxy-S8-G950-US-Version-Mobile-phone-4G-LTE-64GB-5-8-Inch/32920918153.html?spm=2114.search0104.3.68.5c854d502Np6DH&amp;ws_ab_test=searchweb0_0,searchweb201602_1_5729','https://www.aliexpress.com/item/Unlocked-Original-Samsung-Galaxy-S8-G950-US-Version-Mobile-phone-4G-LTE-64GB-5-8-Inch/32920918153.html?spm=2114.search0104.3.68.5c854d502Np6DH&amp;ws_ab_test=searchweb0_0,searchweb201602_1_5729',NULL,0,0,'[\"152878752642392.jpg\",\"15287875266099.jpg\",\"152878752677508.jpg\",\"152878752620919.jpg\",\"152878752628483.jpg\",\"152878752691779.jpg\"]'),(4,4,NULL,NULL,'https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_',NULL,65.965,-138.245,'[\"152878936595243.jpg\",\"152878936524350.jpg\",\"152878936572284.jpg\",\"152878936522314.jpg\",\"152878936596819.jpg\",\"152878936521980.jpg\"]'),(5,5,NULL,NULL,'https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_',NULL,65.965,-138.245,'[\"152878963233961.jpg\",\"152878963224483.jpg\",\"152878963280243.jpg\",\"152878963217308.jpg\",\"152878963230166.jpg\",\"152878963248230.jpg\"]'),(6,6,NULL,NULL,'https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_',NULL,65.965,-138.245,'[\"152879007060031.jpg\",\"152879007015507.jpg\",\"15287900701728.jpg\",\"152879007069799.jpg\",\"152879007021529.jpg\",\"152879007096922.jpg\"]'),(8,8,NULL,NULL,'https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_',NULL,65.965,-138.245,'[\"152879109699032.jpg\",\"152879109624719.jpg\",\"152879109628069.jpg\",\"152879109677880.jpg\"]'),(10,10,NULL,NULL,'http://php.net/manual/en/mysqli-stmt.affected-rows.php','http://php.net/manual/en/mysqli-stmt.affected-rows.php','http://php.net/manual/en/mysqli-stmt.affected-rows.php',NULL,0,0,'[\"152879161694715.jpg\",\"152879161649360.jpg\",\"152879161658721.jpg\",\"152879161663025.jpg\"]'),(11,11,NULL,NULL,'https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_',NULL,65.965,-138.245,'[\"152879176957646.jpg\",\"152879176993823.jpg\",\"152879176938516.jpg\",\"152879176949440.jpg\",\"152879176953901.jpg\"]'),(13,13,NULL,NULL,'https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_','https://www.aliexpress.com/item/Original-Unlocked-Samsung-Galaxy-S8-Plus-4G-RAM-64G-ROM-6-2-inch-Qualcomm-Octa-Core/32817292090.html?spm=2114.search0604.3.16.757c4d50iVXEcx&amp;s=p&amp;ws_ab_test=searchweb0_0,searchweb201602_',NULL,65.965,-138.245,'[\"152879225817334.jpg\",\"152879225816800.jpg\",\"152879225834705.jpg\",\"152879225875117.jpg\",\"15287922585183.jpg\"]'),(15,15,NULL,NULL,'https://www.aliexpress.com/item/Original-Samsung-Galaxy-Note-8-6GB-RAM-64GB-ROM-6-3-inch-Octa-Core-Dual-Back/32878533743.html?spm=2114.search0104.3.1.d57ce145ufb0Qk&amp;ws_ab_test=searchweb0_0,searchweb201602_4_10152_10065_10','https://www.aliexpress.com/item/Original-Samsung-Galaxy-Note-8-6GB-RAM-64GB-ROM-6-3-inch-Octa-Core-Dual-Back/32878533743.html?spm=2114.search0104.3.1.d57ce145ufb0Qk&amp;ws_ab_test=searchweb0_0,searchweb201602_4_10152_10065_10','https://www.aliexpress.com/item/Original-Samsung-Galaxy-Note-8-6GB-RAM-64GB-ROM-6-3-inch-Octa-Core-Dual-Back/32878533743.html?spm=2114.search0104.3.1.d57ce145ufb0Qk&amp;ws_ab_test=searchweb0_0,searchweb201602_4_10152_10065_10',NULL,-50.8952,5.31875,'[\"153182917523260.jpg\",\"153182917597022.jpg\",\"153182917564189.jpg\",\"153182917546888.jpg\",\"153182917525509.jpg\"]'),(16,16,NULL,NULL,'','','',NULL,-50.8952,5.31875,'[\"153183025299455.jpg\",\"153183025212726.jpg\",\"153183025295739.jpg\"]'),(17,17,NULL,NULL,'','','',NULL,-50.8952,5.31875,'[\"153225999830025.jpg\",\"153225999897629.jpg\"]');
/*!40000 ALTER TABLE `product_categlog_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recently_viewed_product`
--

DROP TABLE IF EXISTS `recently_viewed_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recently_viewed_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) DEFAULT NULL,
  `seen` datetime NOT NULL,
  `product_sku` char(150) NOT NULL,
  `product_category_id` int(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `email` (`email`),
  CONSTRAINT `recently_viewed_product_ibfk_1` FOREIGN KEY (`email`) REFERENCES `buyer` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recently_viewed_product`
--

LOCK TABLES `recently_viewed_product` WRITE;
/*!40000 ALTER TABLE `recently_viewed_product` DISABLE KEYS */;
INSERT INTO `recently_viewed_product` VALUES (12,'bharatrose1@gmail.com','2018-09-27 13:05:11','SDFSDF956',52),(21,'bharatrose1@gmail.com','2018-07-31 16:13:35','SDF6565656',52),(22,'bharatrose1@gmail.com','2018-07-31 16:13:42','SDFSDF253',52),(23,'bharatrose1@gmail.com','2018-12-17 12:59:34','SDFSDF5656',52),(24,'bharatrose1@gmail.com','2018-10-01 12:38:09','SDFSDF215545',52),(25,'bharatrose1@gmail.com','2018-10-01 12:38:23','SDFSDDF852',52),(35,'akashche72@gmail.com','2018-09-26 13:48:30','589SDFDF',314),(36,'akashche72@gmail.com','2018-08-01 15:21:48','SDFSDF8956263',314),(37,'akashche72@gmail.com','2018-09-22 12:45:33','SDFSDF522',314),(38,'akashche72@gmail.com','2018-09-25 13:56:41','ADFDF59598',314),(39,'akashche72@gmail.com','2018-09-10 16:21:02','SDFSDF956',52),(40,'akashche72@gmail.com','2018-09-22 12:45:45','SDFSDDF852',52),(41,'akashche72@gmail.com','2018-09-19 13:36:08','SSDF65656',314),(42,'akashche72@gmail.com','2018-09-24 13:25:22','SDF6565656',52),(43,'bharatrose1@gmail.com','2018-12-18 15:28:46','ADFDF59598',314),(44,'bharatrose1@gmail.com','2018-11-03 15:56:05','589SDFDF',314),(45,'bharatrose1@gmail.com','2018-10-01 12:38:58','SDFSDF8956263',314),(46,'bharatrose1@gmail.com','2018-10-01 12:40:01','SDFDF5200',314),(47,'taran@gmail.com','2018-10-02 12:09:30','589SDFDF',314),(48,'taran@gmail.com','2018-10-01 12:43:46','SDFSDF522',314),(49,'taran@gmail.com','2018-10-01 12:44:15','ADFDF59598',314),(50,'bharatrose1@gmail.com','2018-12-18 15:39:52','asdfasdfasdf',314),(51,'bharatrose1@gmail.com','2018-12-18 15:40:02','656sdfsdf',314);
/*!40000 ALTER TABLE `recently_viewed_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `review_id` char(50) NOT NULL,
  `buyer_email` varchar(225) DEFAULT NULL,
  `create_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `review_id` (`review_id`),
  KEY `buyer_email` (`buyer_email`),
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`buyer_email`) REFERENCES `buyer` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (1,'15448779575c14f7855836a','bharatrose1@gmail.com','2018-12-15','2018-12-15'),(2,'15450470875c178c2f18593','bharatrose1@gmail.com','2018-12-17','2018-12-17'),(3,'15450471715c178c83efe54','bharatrose1@gmail.com','2018-12-17','2018-12-17'),(4,'15450472615c178cddd0609','bharatrose1@gmail.com','2018-12-17','2018-12-17'),(5,'15450473155c178d13aba9e','bharatrose1@gmail.com','2018-12-17','2018-12-17'),(6,'15450473885c178d5c5fc75','bharatrose1@gmail.com','2018-12-17','2018-12-17');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_details`
--

DROP TABLE IF EXISTS `review_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_details` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `review_id` char(50) NOT NULL,
  `title` varchar(225) NOT NULL,
  `good` text NOT NULL,
  `bad` text NOT NULL,
  `details` text NOT NULL,
  `sku` varchar(45) NOT NULL,
  `seller_email` varchar(225) DEFAULT NULL,
  `buyer_email` varchar(225) DEFAULT NULL,
  `recomanded` enum('0','1') DEFAULT '0',
  `stars` int(10) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `review_id` (`review_id`),
  KEY `product_id` (`product_id`),
  KEY `seller_email` (`seller_email`),
  CONSTRAINT `review_details_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `review` (`review_id`),
  CONSTRAINT `review_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_catalogs` (`id`),
  CONSTRAINT `review_details_ibfk_3` FOREIGN KEY (`seller_email`) REFERENCES `seller` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_details`
--

LOCK TABLES `review_details` WRITE;
/*!40000 ALTER TABLE `review_details` DISABLE KEYS */;
INSERT INTO `review_details` VALUES (1,1,'15448779575c14f7855836a','','adfadf','asdfasdf','','ADFDF59598',NULL,'bharatrose1@gmail.com','',3,'2018-12-15','2018-12-15'),(2,18,'15450470875c178c2f18593','','Really nice Product','I relly do not need ','','asdfasdfasdf',NULL,'bharatrose1@gmail.com','',3,'2018-12-17','2018-12-17'),(3,18,'15450471715c178c83efe54','','I will buy another','yes really ','','asdfasdfasdf',NULL,'bharatrose1@gmail.com','',4,'2018-12-17','2018-12-17'),(4,18,'15450472615c178cddd0609','','Thank you for the product','nothing','','asdfasdfasdf',NULL,'bharatrose1@gmail.com','',5,'2018-12-17','2018-12-17'),(5,18,'15450473155c178d13aba9e','','Naina','thak le gan','Hello woorld','asdfasdfasdf',NULL,'bharatrose1@gmail.com','',4,'2018-12-17','2018-12-17'),(6,18,'15450473885c178d5c5fc75','','whole l','sdf','','asdfasdfasdf',NULL,'bharatrose1@gmail.com','',3,'2018-12-17','2018-12-17');
/*!40000 ALTER TABLE `review_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `website` varchar(16) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `group_id` smallint(5) DEFAULT NULL,
  `store_id` varchar(150) NOT NULL,
  `seller_id` varchar(150) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `prifix` varchar(40) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `customer_entitycol` varchar(45) NOT NULL,
  `customer_type` varchar(20) NOT NULL,
  `suffix` varchar(225) NOT NULL,
  `DOB` datetime DEFAULT NULL,
  `seller_type` varchar(45) NOT NULL,
  `password_hash` varchar(128) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rp_token` varchar(128) DEFAULT NULL,
  `rp_token_created_at` datetime DEFAULT NULL,
  `default_shipping` varchar(225) NOT NULL,
  `default_billing` varchar(225) NOT NULL,
  `tax_vat_number` varchar(150) DEFAULT NULL,
  `verified` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller`
--

LOCK TABLES `seller` WRITE;
/*!40000 ALTER TABLE `seller` DISABLE KEYS */;
INSERT INTO `seller` VALUES (1,'','bharatrose1@gmail.com',NULL,'1421344913e512097cea79bc62a28db7ab884fa0','','2018-07-15 13:27:18',NULL,'','bharrat','','shah','','','1','',NULL,'','$2y$10$wq9Bk0mLkOC4j52iCRbpHe4tYJ.92KoTBUASdPt5k71pUh.LPjvZK','ThisIsMyLife123',NULL,NULL,'','',NULL,'1'),(2,'','akashche72@gmail.com',NULL,'8927ebc4b295f4ee723add7e34d284d709577def','','2018-07-15 13:29:09',NULL,'','akashche','','chec','','','1','',NULL,'','$2y$10$2pVm29cxkqbJdmfNBx1x6.GqC.FeWApwYQGv5pMzFPuY2LUw0/KYu','ThisIsMyLife123',NULL,NULL,'','',NULL,'1'),(3,'','bharatrose1@yahoo.com',NULL,'63b8cd49b6853ab9e01eeaa47e4c873e705c1cd5','','2018-11-21 13:22:02',NULL,'','Ron','','John','','','1','',NULL,'','$2y$10$axvmeQey4UtIBwrkrWntK.H0U9vsDQXVoaxahBH3bM9v2SvAzn9SG','ThisIsMyLife123',NULL,NULL,'','',NULL,'1'),(4,'','john@gmail.com',NULL,'3ed1f057a04454b379301dee844f753f8b6c673b','','2018-11-21 13:39:02',NULL,'','Hello','','world','','','1','',NULL,'','$2y$10$wq9Bk0mLkOC4j52iCRbpHe4tYJ.92KoTBUASdPt5k71pUh.LPjvZK','ThisIsMyLife123',NULL,NULL,'','',NULL,'1'),(5,'','bharatrose2@gmail.com',NULL,'7d04cec20b701944820614085271ecf644a8ca13','','2018-11-21 16:47:43',NULL,'','new','','client','','','1','',NULL,'','$2y$10$B2keayf/y2EYYsVI1kqeuuAqw3UaSGWHRzS6AY7QNk88YFtPstpxy','ThisIsMyLife123',NULL,NULL,'','',NULL,'1'),(6,'','hello@gmail.com',NULL,'426735e0c3ee1e5b05a5584ee7a2ad0ffcdd7e4f','','2018-11-24 13:41:22',NULL,'','Hello','','World','','','1','',NULL,'','$2y$10$Vs0MRhCKUCRdt9e7kE4VlOpAXS3Rxj/rKX72U/tW6PwVstcTu3/Y2','ThisIsMyLife123',NULL,NULL,'','',NULL,'1');
/*!40000 ALTER TABLE `seller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller_address`
--

DROP TABLE IF EXISTS `seller_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller_address` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `verified` enum('0','1') DEFAULT '0',
  `city` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `contry_id` varchar(25) NOT NULL,
  `fax` varchar(225) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `postcode` varchar(225) NOT NULL,
  `prefix` varchar(45) NOT NULL,
  `region` varchar(45) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `street` text NOT NULL,
  `suffix` varchar(225) NOT NULL,
  `telephone` varchar(150) NOT NULL,
  `customer_address_entitycol` varchar(45) NOT NULL,
  `customer_address_entitycol1` varchar(45) NOT NULL,
  `TRN` varchar(150) NOT NULL,
  `vat_id` varchar(225) NOT NULL,
  `vat_is_valid` enum('0','1') DEFAULT '0',
  `vat_request_id` varchar(225) NOT NULL,
  `vat_request_success` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `seller_address_ibfk_1` FOREIGN KEY (`id`) REFERENCES `seller` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller_address`
--

LOCK TABLES `seller_address` WRITE;
/*!40000 ALTER TABLE `seller_address` DISABLE KEYS */;
INSERT INTO `seller_address` VALUES (1,0,'2018-07-15 13:27:18',NULL,'0','','','','','bharrat','','shah','','','',NULL,'','','','','','','','0','',NULL),(2,0,'2018-07-15 13:29:09',NULL,'0','','','','','akashche','','chec','','','',NULL,'','','','','','','','0','',NULL);
/*!40000 ALTER TABLE `seller_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller_address_details`
--

DROP TABLE IF EXISTS `seller_address_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller_address_details` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(45) NOT NULL,
  `city` char(40) NOT NULL,
  `email` varchar(45) NOT NULL,
  `area` varchar(80) DEFAULT NULL,
  `street_no` char(100) NOT NULL,
  `building_no` varchar(45) NOT NULL,
  `floor_no` char(45) NOT NULL,
  `landmark` varchar(150) NOT NULL,
  `location_type` char(30) NOT NULL,
  `mobile_no` int(25) NOT NULL,
  `land_line_no` int(25) DEFAULT NULL,
  `latitude` float NOT NULL,
  `longititude` float NOT NULL,
  `shipping_note` text,
  `document_link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `seller_address_details_ibfk_1` FOREIGN KEY (`id`) REFERENCES `seller` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller_address_details`
--

LOCK TABLES `seller_address_details` WRITE;
/*!40000 ALTER TABLE `seller_address_details` DISABLE KEYS */;
INSERT INTO `seller_address_details` VALUES (1,'','','john@gmail.com',NULL,'','','','','',0,NULL,0,0,NULL,NULL),(2,'','','bharatrose2@gmail.com',NULL,'','','','','',0,NULL,0,0,NULL,NULL),(3,'','','hello@gmail.com',NULL,'','','','','',0,NULL,0,0,NULL,NULL);
/*!40000 ALTER TABLE `seller_address_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller_as_company`
--

DROP TABLE IF EXISTS `seller_as_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller_as_company` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `business_name` char(225) NOT NULL,
  `legal_form` char(150) NOT NULL,
  `nationality` char(50) NOT NULL,
  `established` date NOT NULL,
  `expiry_date` date NOT NULL,
  `company_type` char(50) NOT NULL,
  `tax_no` char(75) NOT NULL,
  `registration_no` char(75) DEFAULT NULL,
  `country` char(40) NOT NULL,
  `city` char(40) NOT NULL,
  `telephone` char(50) NOT NULL,
  `mobile_no` char(50) NOT NULL,
  `po_box` int(20) NOT NULL,
  `fax` char(25) NOT NULL,
  `website` varchar(75) NOT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `address` varchar(150) NOT NULL,
  `unique_business_id` char(50) NOT NULL,
  `seller_type` char(50) NOT NULL,
  `document` char(50) DEFAULT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `seller_email` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_business_id` (`unique_business_id`),
  UNIQUE KEY `seller_email` (`seller_email`),
  CONSTRAINT `seller_as_company_ibfk_1` FOREIGN KEY (`seller_email`) REFERENCES `seller` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller_as_company`
--

LOCK TABLES `seller_as_company` WRITE;
/*!40000 ALTER TABLE `seller_as_company` DISABLE KEYS */;
INSERT INTO `seller_as_company` VALUES (1,'Iptikar Distribution','Legal','Emirati','2018-10-31','2018-11-14','Single','56565656','5656565','AS','Abu Dhabi','+971502365236','+971502365236',5656,'','http://www.iptikar.com/',50.89519900,5.31875000,'Al Falsh Street, Abu Dhbai, UAE','Iptikar123','retails',NULL,'2018-11-20','2018-11-21','akashche72@gmail.com'),(2,'Icon Advertising','Legal','Jordian','2018-07-09','2019-04-17','Advertising','2565656','5565656','AT','Abu Dhabi','+971656565656','+97105223652',5622,'','http://www.icon-ad.com',-50.89519900,5.31875000,'Silicon osis dubai','Icon-ad','retails',NULL,'2018-11-21','2018-11-21','bharatrose1@yahoo.com'),(3,'Dihead Advertising LLC','Legal','Jordian','2018-09-02','2019-07-20','FMGC','123456789','123456789','AE','Al Ain','+97155656560','+97155656560',59895,'78550','http://www.icon-ad.com',5.58989900,5.58989900,'Al Falah Street','iconad','retails',NULL,'2018-11-21','2018-11-21','john@gmail.com'),(4,'Iptikar Distribution','Legal','Emirati','2018-10-31','2018-12-20','Single','56565656','5656565','AX','Abu Dhabi','+97150236523','+97150236523',5656,'595656','http://www.soqu.com/',50.89519900,5.31875000,'Al Falsh Street, Abu Dhbai, UAE','asdfasdfasdf','retails',NULL,'2018-11-21','2018-11-21','bharatrose2@gmail.com');
/*!40000 ALTER TABLE `seller_as_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller_as_individual`
--

DROP TABLE IF EXISTS `seller_as_individual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller_as_individual` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `country` char(50) NOT NULL,
  `city` char(50) NOT NULL,
  `state_region_province` char(50) NOT NULL,
  `post_zip_code` int(20) NOT NULL,
  `land_line_no` char(20) DEFAULT NULL,
  `mobile_no` char(50) NOT NULL,
  `nationality` char(30) NOT NULL,
  `emirate_id_no` char(50) NOT NULL,
  `unique_business_id` char(50) NOT NULL,
  `seller_type` char(50) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `address` varchar(225) NOT NULL,
  `document` char(50) NOT NULL,
  `seller_email` varchar(225) DEFAULT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `seller_email` (`seller_email`),
  CONSTRAINT `seller_as_individual_ibfk_1` FOREIGN KEY (`seller_email`) REFERENCES `seller` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller_as_individual`
--

LOCK TABLES `seller_as_individual` WRITE;
/*!40000 ALTER TABLE `seller_as_individual` DISABLE KEYS */;
INSERT INTO `seller_as_individual` VALUES (1,'AR','Abu Dhabi','Abu dhabi',50023,'+971565973855','+971565973855','angolan','598598685656','Iptikar123','retails','http://www.soqu.com/','Al Falsh Street, Abu Dhbai, UAE','','bharatrose1@gmail.com','2018-11-19','2018-11-21');
/*!40000 ALTER TABLE `seller_as_individual` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-13 13:01:44
