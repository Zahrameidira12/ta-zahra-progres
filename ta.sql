/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - ta
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ta` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `ta`;

/*Table structure for table `chats` */

DROP TABLE IF EXISTS `chats`;

CREATE TABLE `chats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `chats` */

insert  into `chats`(`id`,`question`,`answer`,`created_at`,`updated_at`) values 
(1,'halo','hai, ada yg bisa d bantu',NULL,NULL),
(2,'saya ingin bertanya','ya silahkan',NULL,NULL),
(3,'saya butuh bantuan','apa yang dapat saya bantu',NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(5,'2014_10_12_000000_create_users_table',1),
(6,'2014_10_12_100000_create_password_reset_tokens_table',1),
(7,'2019_08_19_000000_create_failed_jobs_table',1),
(8,'2019_12_14_000001_create_personal_access_tokens_table',1),
(9,'2024_04_20_162843_add_is_admin_user',2),
(10,'2024_04_20_162949_add_is_superadmin_user',3),
(11,'2024_04_20_163343_add_is_admin_user',4),
(12,'2024_04_24_013316_create_chats_table',5);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `nim` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `no_tlp` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT 'no-images.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `issuperadmin` tinyint(1) NOT NULL DEFAULT 0,
  `isadmin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nim_unique` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`nim`,`email`,`password`,`no_tlp`,`jurusan`,`prodi`,`kelas`,`alamat`,`gambar`,`email_verified_at`,`remember_token`,`created_at`,`updated_at`,`issuperadmin`,`isadmin`) values 
(1,'superadmin','2101092026','superadmin@gmail.com','$2y$10$AxDPrXKWam.aqUVEysfCXe0Wyv0JJU65PmBYcA6rW.ZP1PGQasTTa','098758979846936','Teknologi Informasi','D3-Manajemen Informatika','MI3C','Batang Gadang , kec. Ulakan Tapakis , kab. Padang Pariaman , prov. Sumatra Barat','1713630933.jpg',NULL,NULL,'2024-04-20 16:35:33','2024-04-20 16:35:33',2,0),
(3,'admin1','111111',NULL,'$2y$10$It0Ge1C6s3uPuHUnH8PNmOwXaK1E3MXxW89w6VTtnmf07/za/8F.e',NULL,NULL,NULL,NULL,NULL,'no-images.jpg',NULL,NULL,'2024-04-20 16:38:41','2024-04-20 16:38:41',0,1),
(4,'zahraa23','222222','zahra@gmail.com','$2y$10$CCM8tlE3u.k7NQnEtAHug.s.JSWViGnmcq4hk0fqEKCY5fJ1oMc7W','12414153','Teknologi Informasi','D3-Manajemen Informatika','MI3C','Batang Gadang , kec. Ulakan Tapakis , kab. Padang Pariaman , prov. Sumatra Barat','1713924628.jpg',NULL,NULL,'2024-04-20 16:51:18','2024-04-24 02:10:28',0,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
