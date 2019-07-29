# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: kmeans
# Generation Time: 2019-07-29 04:47:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_07_03_042937_create_roads_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table roads
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roads`;

CREATE TABLE `roads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speed` double NOT NULL,
  `activity` double NOT NULL,
  `lane` double NOT NULL,
  `first_latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long` double NOT NULL,
  `width` double NOT NULL,
  `time` double NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roads` WRITE;
/*!40000 ALTER TABLE `roads` DISABLE KEYS */;

INSERT INTO `roads` (`id`, `name`, `speed`, `activity`, `lane`, `first_latitude`, `first_longitude`, `second_latitude`, `second_longitude`, `long`, `width`, `time`, `type`, `created_at`, `updated_at`)
VALUES
	(1,' Jl. RE. Martadinata',8.088235294,45,1.37,'-7.569413','110.831307','-7.570006','110.833212',0.28,7,0.034,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(2,' Jl. Pasar Gede Utara',38.33333333,45,1.37,'-7.569104','110.833354','-7.568471','110.831164',0.23,10,0.006,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(3,' Jl. Mayor  Sunaryo',22.35294118,45,2.74,'-7.572571','110.829634','-7.573551','110.832771',0.38,9,0.017,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(4,' Jl. Pattimura',44.18604651,20,1.37,'-7.587698','110.818223','-7.579413','110.810828',1.9,4,0.043,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(5,' Jl. Supit Urang',4.915912031,35,1.37,'-7.576037','110.829054','-7.575647','110.827851',0.38,4,0.0773,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(6,' Jl. Paku Buwono',18.13471503,35,1.37,'-7.572607','110.829449','-7.574037','110.829869',0.35,8.5,0.0193,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(7,' Jl. Alun Alun utara',9.302325581,35,2.74,'-7.574095','110.829899','-7.573604','110.828204',0.2,5,0.0215,'24jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(8,' Jl. KH Hasyim Ashari',14.0625,45,2.74,'-7.575603','110.825764','-7.574954','110.825969',0.45,6,0.032,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(9,' Jl. Dr. Rajiman 1',8.413461538,45,2.74,'-7.575423','110.827776','-7.573769','110.820919',1.05,7,0.1248,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(10,' Jl. Dr. Rajiman 2',29.31034483,45,4.11,'-7.573736','110.820739','-7.571562','110.810357',0.85,9,0.029,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(11,' Jl. Dr. Rajiman 3',21.64948454,35,2.74,'-7.571556','110.810077','-7568313','110.791952',2.1,8,0.097,'contra flow ','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(12,' Jl. Dr. Wahidin',28.07017544,35,2.74,'-7.568798','110.805457','-7.565411','110.806004',0.64,7,0.0228,'contra flow','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(13,' Jl. Perintis Kemerdekaan',32.40740741,20,2.74,'-7.563486','110.799302','-7.569729','110.797373',0.7,6,0.0216,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(14,' Jl. Brigjen Slamet Riyadi',20.99644128,35,4.11,'-7.565419','110.806098','-7.572476','110.829342',2.95,14,0.1405,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(15,' Jl. Brigjen Slamet Riyadi 2',20.65404475,45,2.74,'-7.561921','110.794876','-7.565368','110.805956',1.2,14,0.0581,'contra flow','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(16,'Jl. Agus Salim ',36.19909502,35,4.11,'-7.568208','110.791922','-7.562315','110.795572',0.8,9,0.0221,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(17,' Jl. Prof Dr. Suharso',63.63636364,35,2.74,'-7.558911','110.785791','-7.550288','110.788276',1.4,7,0.022,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(18,' Jl. Hasanudin',18.0156658,45,1.37,'-7.558151','110.814165','-7.558624','110.820211',0.69,7,0.0383,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(19,' Jl. Worawari',20.83333333,20,1.37,'-7.565075','110.814395','-7.564224','110.809971',0.5,6,0.024,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(20,' Jl. Ronggowarsito',24.44444444,35,2.74,'-7.570618','110.829865','-7.565084','110.814447',1.76,9,0.072,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(21,' Jl. Samsu Rizal',28.57142857,45,2.74,'-7.557883','110.824389','-7.559691','110.825878',0.2,6,0.007,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(22,' Jl. Enggano',52.77777778,20,2.74,'-7.561124','110.827025','-7.561039','110.825771',0.19,6,0.0036,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(23,' Jl. Monumen 45',29.85074627,20,2.74,'-7.560921','110.825717','-7.561092','110.827041',0.6,6,0.0201,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(24,' Jl. Sabang ',9.230769231,45,2.74,'-7.558426','110.824672','-7.561635','110.824939',0.36,5,0.039,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(25,' Jl. Sutan Syahrir',32.34323432,45,2.74,'-7.563505','110.823635','-7.564209','110.821855',0.98,18,0.0303,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(26,' Jl. Suryo Pranoto',26.92307692,45,1.37,'-7.569184','110.831159','-7.565851','110.831537',0.35,7,0.013,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(27,' Jl. Sugijo Pranoto',24.11764706,20,1.37,'-7.568516','110.830111','-7.567485','110.826198',0.41,7,0.017,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(28,' Jl. Teuku Umar',42.62295082,35,2.74,'-7.566076','110.824443','-7.568364','110.823829',0.26,6,0.0061,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(29,' Jl. Teuku Umar 2',31.57894737,35,1.37,'-7.570459','110.823219','-7.568462','110.823782',0.24,6,0.0076,'06.00 - 18.01','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(30,' Jl. KH A Dahlan',27.84810127,35,2.74,'-7.568873','110.825017','-7.570846','110.824419',0.22,6,0.0079,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(31,' Jl. Gatot Subroto',27.05882353,45,2.74,'-7.573689','110.820894','-7.570245','110.821898',0.46,8,0.017,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(32,' Jl. Kalilarangan',23.24324324,45,1.37,'-7.573061','110.816498','-7.575271','110.822581',0.86,6,0.037,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(33,' Jl. Honggowongso',18.85964912,45,2.74,'-7.568803','110.817286','-7.572673','110.816562',0.43,10,0.0228,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(34,' Jl. MR Much. Yamin',43.33333333,20,2.74,'-7.578093','110.821662','-7.577387','110.819556',0.26,6,0.006,'06.00 - 22.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(35,' Jl. Kol. K.S. Tubun',39.74358974,35,1.37,'-7.555398','110.802941','-7.552889','110.803757',0.31,7,0.0078,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(36,' Jl. Kalitan',19.92031873,35,1.37,'-7.565092','110.809855','-7.564311','110.806297',0.5,5,0.0251,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(37,' Jl. S Parman',19.13875598,45,2.74,'-7.564877','110.823141','-7.557884','110.824265',0.8,9,0.0418,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(38,' Jl. Arifin',53.5483871,20,2.74,'-7.566721','110.830065','-7.559078','110.831681',0.83,6,0.0155,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(39,' Jl. Sahardjo, SH',26.31578947,20,1.37,'-7.565853','110.826551','-7.566763','110.829967',0.4,4,0.0152,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(40,' Jl. Sahardjo, SH 2',39.28571429,20,1.37,'-7.565813','110.826449','-7.566073','110.824485',0.22,4,0.0056,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(41,' Jl. Kusumoyudan',18.95734597,45,1.37,'-7.562313','110.826345','-7.565764','110.826492',0.4,5,0.0211,'06.00 - 18.00','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(42,' Jl. RM. Said',72.34042553,35,2.74,'-7.564251','110.821865','-7.566035','110.824428',0.34,7,0.0047,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(43,' Jl. Kartini',80.55555556,35,2.74,'-7.567326','110.820885','-7.564325','110.821889',0.58,7,0.0072,'24 jam','2019-07-11 15:55:37','2019-07-11 15:55:37'),
	(46,'Jl. Veteran No.28',23,0.23,4.11,'-7.19293','110.345','-7.345','110.34',0.28,8,0.023,'24 jam','2019-07-12 03:59:56','2019-07-12 07:58:53');

/*!40000 ALTER TABLE `roads` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Admin','admin@example.com',NULL,'$2y$10$zh5dVXeYhGCFQiPuVdeW4Oq/FFMvr5eXTR5PNFk6/1Ju9Viaz9pwW',NULL,'2019-07-11 15:55:37','2019-07-11 15:55:37');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
