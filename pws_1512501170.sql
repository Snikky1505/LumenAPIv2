# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-05-18 15:28:45
# Generator: MySQL-Front 6.0  (Build 2.20)

create database if not exists pws_1512501170;
use pws_1512501170;
#
# Structure for table "books"
#

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categories_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_release` date NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_number` int(11) NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "books"
#

INSERT INTO `books` VALUES (1,2,'judullagi','2019-09-09','pengarang',90,'Gramedia','2018-05-18 09:19:34','2018-05-18 15:27:37',NULL),(2,0,'Yang Tersadar','1996-12-21','Chairil Anwar',20,'Erlangga','2018-05-18 09:20:29','2018-05-18 09:20:29',NULL),(3,0,'hehe','1996-01-01','heheheeheheheh',90,'hehehepenerbit','2018-05-18 09:45:06','2018-05-18 09:45:06',NULL),(4,2,'hehe','1996-01-01','heheheeheheheh',90,'hehehepenerbit','2018-05-18 09:46:51','2018-05-18 09:46:51',NULL),(5,2,'buku apaan','1992-01-01','suneo',20,'nobita','2018-05-18 14:54:33','2018-05-18 14:54:33',NULL),(6,2,'judullagihehehe','2019-09-09','pengarang',90,'Gramedia','2018-05-18 15:28:04','2018-05-18 15:28:04',NULL);

#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,'Buku Fiksi','2018-05-17 10:28:24','2018-05-17 10:28:24',NULL),(2,'Buku Romance','2018-05-17 10:28:44','2018-05-17 10:28:44',NULL),(3,'Buku Misteri','2018-05-17 10:29:06','2018-05-17 10:29:06',NULL),(4,'Buku Serem Banget','2018-05-18 13:57:08','2018-05-18 13:58:08','2018-05-18 13:58:08');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2018_05_18_013541_books',1);
