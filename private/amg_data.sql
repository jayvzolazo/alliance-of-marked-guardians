-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: guardians
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.12.04.1

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
-- Table structure for table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chapters` (
  `chapter_id` int(11) NOT NULL AUTO_INCREMENT,
  `chapter_name` varchar(500) NOT NULL,
  PRIMARY KEY (`chapter_id`),
  UNIQUE KEY `chapter_id` (`chapter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chapters`
--

LOCK TABLES `chapters` WRITE;
/*!40000 ALTER TABLE `chapters` DISABLE KEYS */;
/*!40000 ALTER TABLE `chapters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member_chapter_position`
--

DROP TABLE IF EXISTS `member_chapter_position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member_chapter_position` (
  `mcp_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `position` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`mcp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_chapter_position`
--

LOCK TABLES `member_chapter_position` WRITE;
/*!40000 ALTER TABLE `member_chapter_position` DISABLE KEYS */;
/*!40000 ALTER TABLE `member_chapter_position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `pseudonym` varchar(30) NOT NULL,
  `chapter_position` varchar(45) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `facebook_account` varchar(100) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `tin` int(15) DEFAULT NULL,
  `bloodtype` char(3) DEFAULT NULL,
  `gsis_sss` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `nationality` char(15) DEFAULT NULL,
  `place_of_birth` varchar(45) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `gender` char(6) NOT NULL,
  `marital_status` char(10) NOT NULL,
  `spouse_name` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `creation_date` datetime NOT NULL,
  `fathers_name` varchar(100) DEFAULT NULL,
  `fathers_age` int(3) DEFAULT NULL,
  `mothers_name` varchar(100) DEFAULT NULL,
  `mothers_age` int(3) DEFAULT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `mem_info_number` varchar(10) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `company_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `psuedonym_UNIQUE` (`pseudonym`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members_children`
--

DROP TABLE IF EXISTS `members_children`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members_children` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `child_name` varchar(100) NOT NULL,
  `child_age` int(2) DEFAULT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members_children`
--

LOCK TABLES `members_children` WRITE;
/*!40000 ALTER TABLE `members_children` DISABLE KEYS */;
/*!40000 ALTER TABLE `members_children` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members_other_info`
--

DROP TABLE IF EXISTS `members_other_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members_other_info` (
  `me_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `emergency_person` varchar(100) DEFAULT NULL,
  `emergency_address` varchar(100) DEFAULT NULL,
  `emergency_contact` int(15) DEFAULT NULL,
  `emergency_relation` char(15) DEFAULT NULL,
  `voters_id_number` varchar(30) DEFAULT NULL,
  `precinct_number` varchar(10) DEFAULT NULL,
  `polling_place` varchar(45) DEFAULT NULL,
  `primary_school` varchar(200) DEFAULT NULL,
  `primary_year_grad` tinyint(4) DEFAULT NULL,
  `secondary_school` varchar(200) DEFAULT NULL,
  `secondary_year_grad` tinyint(4) DEFAULT NULL,
  `college_vocational_course` varchar(200) DEFAULT NULL,
  `college_year_grad` tinyint(4) DEFAULT NULL,
  `postgrad_course` varchar(200) DEFAULT NULL,
  `post_year_grad` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`me_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members_other_info`
--

LOCK TABLES `members_other_info` WRITE;
/*!40000 ALTER TABLE `members_other_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `members_other_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rank`
--

DROP TABLE IF EXISTS `rank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rank` (
  `rank_id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`rank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rank`
--

LOCK TABLES `rank` WRITE;
/*!40000 ALTER TABLE `rank` DISABLE KEYS */;
/*!40000 ALTER TABLE `rank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(88) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usertype` tinyint(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'bertolazo','dfe74cac7654a17b5b717091daec8b2693fe03e1','Bert Olazo','email@domain.com',1,'2014-05-25 00:00:00',1);
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

-- Dump completed on 2014-05-30 10:40:59
