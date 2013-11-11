-- MySQL dump 10.13  Distrib 5.1.47, for pc-linux-gnu (i686)
--
-- Host: localhost    Database: brophp
-- ------------------------------------------------------
-- Server version	5.1.47

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
-- Table structure for table `bro_categroy`
--

DROP TABLE IF EXISTS `bro_categroy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bro_categroy` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `cname` char(50) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bro_categroy`
--

LOCK TABLES `bro_categroy` WRITE;
/*!40000 ALTER TABLE `bro_categroy` DISABLE KEYS */;
/*!40000 ALTER TABLE `bro_categroy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bro_columns`
--

DROP TABLE IF EXISTS `bro_columns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bro_columns` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `cname` char(50) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bro_columns`
--

LOCK TABLES `bro_columns` WRITE;
/*!40000 ALTER TABLE `bro_columns` DISABLE KEYS */;
/*!40000 ALTER TABLE `bro_columns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bro_links`
--

DROP TABLE IF EXISTS `bro_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bro_links` (
  `lid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL,
  `url` char(100) NOT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `author` char(50) DEFAULT NULL,
  `expire` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bro_links`
--

LOCK TABLES `bro_links` WRITE;
/*!40000 ALTER TABLE `bro_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `bro_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bro_news`
--

DROP TABLE IF EXISTS `bro_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bro_news` (
  `nid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL,
  `descr` text,
  `content` text,
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bro_news`
--

LOCK TABLES `bro_news` WRITE;
/*!40000 ALTER TABLE `bro_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `bro_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bro_products`
--

DROP TABLE IF EXISTS `bro_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bro_products` (
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` char(100) NOT NULL,
  `descr` text,
  `content` text,
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bro_products`
--

LOCK TABLES `bro_products` WRITE;
/*!40000 ALTER TABLE `bro_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `bro_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bro_users`
--

DROP TABLE IF EXISTS `bro_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bro_users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uname` char(50) NOT NULL,
  `passwd` char(32) NOT NULL,
  `lastip` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bro_users`
--

LOCK TABLES `bro_users` WRITE;
/*!40000 ALTER TABLE `bro_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `bro_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-11 14:09:44
