# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: Localhost (MySQL 5.6.30)
# Database: lmkdb
# Generation Time: 2018-01-25 10:48:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table attendees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `attendees`;

CREATE TABLE `attendees` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `participant_id` int(100) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `time` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `attendees` WRITE;
/*!40000 ALTER TABLE `attendees` DISABLE KEYS */;

INSERT INTO `attendees` (`id`, `participant_id`, `date`, `time`, `status`, `created`)
VALUES
	(1,1,'2018-01-11','14.00  -  14.30',1,'2018-01-23 13:18:05'),
	(2,1,'2018-01-11','14.00  -  14.30',1,'2018-01-23 15:05:08'),
	(3,2,'17.01.2018','15.00 - 15.30',1,'2018-01-25 11:33:31'),
	(4,3,'20.01.2018','14.00  -  14.30',1,'2018-01-25 11:33:41'),
	(5,1,'16.01.2018','14.00  -  14.30',1,'2018-01-25 12:04:39'),
	(6,2,'16.01.2018','14.00  -  14.30',1,'2018-01-25 15:06:07'),
	(7,3,'21.01.2018','Select your time slot',1,'2018-01-25 15:13:23'),
	(8,NULL,'16.01.2018','Select your time slot',1,'2018-01-25 15:30:38'),
	(9,2,'17.01.2018','14.00  -  14.30',1,'2018-01-25 15:30:49'),
	(10,NULL,'16.01.2018','Select your time slot',1,'2018-01-25 15:31:47');

/*!40000 ALTER TABLE `attendees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `name`, `created`)
VALUES
	(1,'Admin','2018-01-23 13:13:18'),
	(2,'Users','2018-01-23 13:13:25');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table participants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `participants`;

CREATE TABLE `participants` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `applicantid` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `participants` WRITE;
/*!40000 ALTER TABLE `participants` DISABLE KEYS */;

INSERT INTO `participants` (`id`, `name`, `phone`, `applicantid`, `status`, `created`)
VALUES
	(1,'Kasun Wijesekara','755646830','0789',1,'2018-01-25 15:19:35'),
	(2,'Dinuka Bawwa','755646830','089',0,'2018-01-25 15:30:49'),
	(3,'Marina Bawwa','755646830','003',1,'2018-01-25 15:19:42');

/*!40000 ALTER TABLE `participants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table timeslots
# ------------------------------------------------------------

DROP TABLE IF EXISTS `timeslots`;

CREATE TABLE `timeslots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `timeslots` WRITE;
/*!40000 ALTER TABLE `timeslots` DISABLE KEYS */;

INSERT INTO `timeslots` (`id`, `time`, `status`, `created`)
VALUES
	(1,'14.00  -  14.30',1,'2018-01-23 13:14:15'),
	(2,'15.00 - 15.30',1,'2018-01-23 13:15:48');

/*!40000 ALTER TABLE `timeslots` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `lastname` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `group_id` int(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `lastname`, `password`, `group_id`, `status`, `created`)
VALUES
	(1,'Kasun','Wijesekara','$2y$10$kfy.lzrgW/STgrah/BjAPOmcIi0G6qpxejnjrLh9mRwnuz6IdLXN2',1,1,'2018-01-23 13:33:15');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
