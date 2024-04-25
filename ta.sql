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
  `question` varchar(1000) NOT NULL,
  `answer` mediumtext NOT NULL,
  `topic` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `chats` */

insert  into `chats`(`id`,`question`,`answer`,`topic`,`created_at`,`updated_at`) values 
(1,'halo','hai, ada yg bisa d bantu','',NULL,NULL),
(2,'saya ingin bertanya','ya silahkan','',NULL,NULL),
(3,'saya butuh bantuan','apa yang dapat saya bantu','butuh,bantuan',NULL,NULL),
(4,'Bagaimana cara menjaga keseimbangan antara kehidupan akademik dan kesehatan mental?','Menjaga keseimbangan antara kehidupan akademik dan kesehatan mental melalui manajemen waktu yang efektif, mengambil waktu istirahat yang cukup, dan menyediakan waktu untuk aktivitas rekreasi dan relaksasi.','mental, keseimbangangan,kehidupan,akademik, kesehatan mental',NULL,NULL),
(5,'Bagaimana cara menjaga kesehatan mental di tengah tekanan tugas akademik dan sosial?','Menetapkan batas waktu, menjaga keseimbangan antara kegiatan akademik dan rekreasi, mendapatkan dukungan sosial, dan beristirahat yang cukup.','kesehatan, mental, tekanan, tugas, akademik, kerja',NULL,NULL),
(6,'bagaimana cara mengetahui kita sedang stress?','Mengenali tanda-tanda stres penting untuk mengatasinya. Secara fisik, Anda mungkin merasa tegang, mengalami gangguan tidur, atau sakit kepala. Emosi Anda bisa dipengaruhi dengan merasa cemas, sedih, atau kehilangan minat. Dari segi perilaku, Anda mungkin mengubah pola makan, menghindari tanggung jawab, atau menggunakan obat atau alkohol sebagai pelarian. Jika Anda mengalami tanda-tanda ini dan merasa terganggu, sebaiknya cari bantuan profesional untuk mengelola stres Anda.','stress,tanda',NULL,NULL),
(7,'hai','hai, ada yang bisa dibantu','bantu',NULL,NULL),
(8,'saya merasa stress','kamu mugkin bisa istirahat untuk sementara waktu dan mulai lah menenangkan diri dari semua kagiatan','stress',NULL,NULL),
(9,'apa itu kesehatan mental','Kesehatan mental merujuk pada kondisi kesejahteraan emosional, psikologis, dan sosial seseorang. Ini mempengaruhi bagaimana individu berpikir, merasa, bertindak, dan berinteraksi dengan orang lain. Kesehatan mental penting untuk setiap individu, karena berdampak pada kualitas hidup mereka sehari-hari, hubungan dengan orang lain, serta kemampuan mereka untuk menangani stres, mengambil keputusan, dan mengatasi tantangan hidup.','apa mental, jelaskan ,kesehatan',NULL,NULL),
(10,'bagaimana cara mengatasi tidak percaya diri','Rasa tidak percaya diri adalah hal yang umum dan bisa dialami oleh siapa saja. Berikut beberapa tips yang mungkin membantu Anda meningkatkan rasa percaya diri:\r\n\r\n1. Kenali Diri Anda: Cari tahu apa yang membuat Anda merasa tidak percaya diri. Apakah ada pengalaman atau kejadian tertentu yang mempengaruhi? Mengidentifikasi akar masalah adalah langkah pertama untuk mengatasinya.\r\n\r\n2. Fokus pada Kelebihan: Ingatlah kelebihan dan prestasi Anda. Fokus pada hal-hal positif ini dapat membantu meningkatkan rasa percaya diri Anda.\r\n\r\n3. Buat Tujuan yang Realistis: Tentukan tujuan yang dapat Anda capai dan kerjakan untuk mencapainya. Mencapai tujuan-tujuan kecil dapat membantu Anda merasa lebih kompeten dan percaya diri.\r\n\r\n4. Tetapkan Batasan yang Sehat: Pelajari cara mengatakan \"tidak\" dan batasi diri Anda dari situasi atau orang-orang yang membuat Anda merasa tidak percaya diri.\r\n\r\n5. Tetapkan Prioritas: Prioritaskan diri Anda dan kebutuhan Anda. Luangkan waktu untuk diri sendiri dan lakukan aktivitas yang Anda nikmati.\r\n\r\n6. Tingkatkan Keterampilan: Pendidikan dan pelatihan dapat meningkatkan kepercayaan diri Anda. Pertimbangkan untuk mengikuti kursus atau pelatihan untuk meningkatkan keterampilan Anda.\r\n\r\n7. Hindari Perbandingan yang Tidak Sehat: Setiap orang memiliki perjalanan dan kecepatan masing-masing. Hindari membandingkan diri Anda dengan orang lain dan fokuslah pada perkembangan pribadi Anda.\r\n\r\n8. Jaga Kesehatan Mental dan Fisik: Pola makan yang sehat, olahraga, dan istirahat yang cukup dapat mempengaruhi mood dan kepercayaan diri Anda.\r\n\r\n9. Cari Dukungan: Berbicara dengan teman, keluarga, atau profesional kesehatan mental dapat memberikan perspektif baru dan dukungan yang Anda butuhkan.\r\n\r\n10. Praktikkan Harga Diri Positif: Setiap hari, luangkan waktu untuk mengakui dan menghargai diri Anda sendiri. Ucapkan kata-kata positif dan pujian kepada diri Anda.\r\n\r\nMengembangkan rasa percaya diri adalah proses yang memerlukan waktu dan usaha. Jangan terlalu keras pada diri sendiri jika Anda merasa perubahan berjalan lambat. Setiap langkah kecil yang Anda ambil adalah progres menuju membangun rasa percaya diri yang lebih kuat. Jika rasa tidak percaya diri Anda berlarut-larut dan mengganggu kualitas hidup Anda, pertimbangkan untuk mencari bantuan dari profesional kesehatan mental.','tidak percaya diri,gugup,orang banyak',NULL,NULL),
(11,'bagaimana agar kita percaya diri berbicara di depan orang','Untuk meningkatkan rasa percaya diri saat berbicara di depan banyak orang, persiapkan materi dengan baik, lakukan latihan presentasi, dan gunakan teknik pernapasan untuk menenangkan diri. Pikir positif tentang kekuatan dan keunikan Anda. Berbicara dengan cara yang otentik dan alami akan membuat Anda terlihat percaya diri. Jangan takut melakukan kesalahan, karena itu bagian dari belajar. Mulailah dengan berbicara di depan kelompok kecil sebelum audiens yang lebih besar. Dengan praktik, Anda akan merasa lebih nyaman dan percaya diri saat berbicara di depan banyak orang.','percaya diri,meningkatkan,berbicara',NULL,NULL),
(12,'Apa saja penyebab umum dari gangguan kesehatan mental?','Penyebabnya bisa bervariasi, mulai dari genetik, faktor lingkungan, stres berlebihan, hingga perubahan hormon.','penyebab,gangguan,kesehatan,mental',NULL,NULL),
(13,'Bagaimana tanda-tanda gangguan kesehatan mental?','Tanda-tandanya bisa beragam, termasuk perubahan mood, perasaan sedih atau cemas yang berkepanjangan, perubahan pola tidur dan makan, serta perubahan perilaku.','tanda-tanda,gangguan, kesehatan mental',NULL,NULL),
(14,'cara mengatasi stress','Mengatasi stres memerlukan pendekatan yang beragam, tergantung pada penyebab dan intensitas stres yang Anda alami. Anda butuh Konsultasi offline yang lebih dalam','cara,mengatasi,stress',NULL,NULL),
(15,'saya merasa malas selama seminggu dan kegiatan saya ','Sering merasa malas bisa menjadi tanda dari berbagai hal, termasuk stres, kelelahan, atau kurangnya motivasi. Berikut beberapa langkah yang bisa Anda coba untuk mengatasi rasa malas tersebut:\r\n\r\n1. **Identifikasi Penyebab**: Coba pikirkan apa yang mungkin menyebabkan Anda merasa malas. Apakah ini karena kelelahan fisik, stres, atau mungkin kurangnya kejelasan tentang apa yang ingin Anda capai?\r\n\r\n2. **Atur Prioritas**: Buatlah daftar tugas yang perlu Anda selesaikan dan prioritaskan yang paling penting. Dengan mengatur prioritas, Anda bisa fokus pada tugas yang benar-benar penting dan mendesak.\r\n\r\n3. **Buat Rencana Harian**: Buatlah jadwal harian yang terstruktur untuk memotivasi diri. Menyelesaikan tugas-tugas kecil dapat membantu meningkatkan produktivitas dan merasa lebih baik tentang diri Anda.\r\n\r\n4. **Beristirahat dengan Cukup**: Pastikan Anda mendapatkan istirahat yang cukup setiap malam. Kurang tidur dapat menyebabkan kelelahan dan menurunkan motivasi.\r\n\r\n5. **Olahraga**: Aktivitas fisik bisa membantu meningkatkan energi dan mood. Cobalah untuk melakukan aktivitas fisik ringan seperti berjalan-jalan, bersepeda, atau yoga.\r\n\r\n6. **Hindari Prokrastinasi**: Jika Anda merasa cenderung menunda-nunda, coba hadapi tugas-tugas yang Anda hindari secepat mungkin. Mulai dengan tugas yang paling sulit atau yang paling tidak Anda sukai terlebih dahulu.\r\n\r\n7. **Cari Inspirasi**: Temukan sumber motivasi atau inspirasi, baik dari buku, podcast, atau video motivasi. Mendengarkan kisah sukses orang lain bisa menjadi dorongan yang baik.\r\n\r\n8. **Pantau Pola Pikir Anda**: Jaga agar pola pikir Anda positif dan optimis. Hindari pemikiran negatif atau keraguan diri yang bisa menghambat motivasi Anda.\r\n\r\n9. **Cari Dukungan**: Berbicara dengan teman, keluarga, atau profesional kesehatan mental bisa membantu. Mendapatkan perspektif baru atau mendengar pendapat orang lain bisa memberikan dorongan motivasi.\r\n\r\n10. **Jangan Terlalu Keras pada Diri Sendiri**: Ingatlah bahwa semua orang memiliki hari-hari ketika mereka merasa malas. Jangan terlalu keras pada diri sendiri jika Anda tidak bisa melakukan semua yang Anda rencanakan. Ambil langkah kecil dan rayakan kemajuan Anda.\r\n\r\nJika Anda terus merasa malas tanpa alasan yang jelas atau jika rasa malas ini berlarut-larut dan mengganggu kualitas hidup Anda, pertimbangkan untuk berkonsultasi dengan profesional kesehatan mental untuk mendapatkan bantuan lebih lanjut.','malas,kegiatan',NULL,NULL),
(16,'terimakasih','sama-sama:)..senang membantu anda','terimakasih',NULL,NULL),
(17,'baiklah','senang membantu anda :)','baik',NULL,NULL),
(18,'bagaimana mengatasi cemas berlebihan','Cemas berlebihan bisa sangat mengganggu dan mempengaruhi kualitas hidup seseorang. Berikut beberapa tips untuk mengatasi cemas berlebihan:\r\n\r\n1. Pahami Penyebabnya: Cari tahu apa yang membuat Anda cemas. Mengidentifikasi penyebabnya dapat membantu Anda menghadapinya dengan lebih efektif.\r\n\r\n2. Pikirkan Positif: Alih-alih fokus pada pikiran negatif, coba untuk mengalihkan perhatian Anda ke hal-hal positif. Latihan memposisikan diri dalam situasi yang lebih optimis dapat membantu mengurangi kecemasan.\r\n\r\n3. Teknik Relaksasi: Cobalah teknik relaksasi seperti meditasi, pernapasan dalam, atau yoga untuk menenangkan pikiran Anda dan meredakan gejala cemas.\r\n\r\n4. Olahraga Teratur: Aktivitas fisik dapat membantu mengurangi tingkat stres dan kecemasan dengan melepaskan endorfin, yang bertindak sebagai alami penghilang rasa sakit dan penenang.\r\n\r\n5. Atur Pola Makan dan Tidur: Pola makan yang seimbang dan tidur yang cukup berperan penting dalam kesejahteraan mental. Hindari kafein dan makanan berlemak serta pastikan Anda mendapatkan istirahat yang cukup.\r\n\r\n6. Batasi Konsumsi Media Sosial: Berlebihan mengonsumsi media sosial dapat meningkatkan rasa cemas. Kurangi waktu Anda online dan fokus pada aktivitas yang memberikan kedamaian.\r\n\r\n7. Persetujuan: Bicarakan perasaan Anda dengan teman atau keluarga yang dipercaya. Terkadang, hanya berbicara tentang apa yang Anda rasakan dapat membuat Anda merasa lebih baik.\r\n\r\n8. Konsultasi Profesional: Jika cemas berlebihan mengganggu aktivitas sehari-hari Anda, pertimbangkan untuk berkonsultasi dengan profesional kesehatan mental. Terapi kognitif perilaku dan obat-obatan tertentu mungkin diperlukan dalam beberapa kasus.\r\n\r\n9. Atur Prioritas: Tentukan apa yang benar-benar penting dan fokuskan energi Anda pada hal-hal yang dapat Anda kontrol. Cobalah untuk tidak terlalu khawatir tentang hal-hal yang di luar kendali Anda.\r\n\r\n10. Hindari Prokrastinasi: Menunda-nunda tugas-tugas dapat meningkatkan tingkat stres. Membuat daftar tugas dan menyelesaikannya satu per satu dapat membantu mengurangi cemas.\r\n\r\nMengatasi cemas berlebihan memerlukan kesabaran dan dedikasi. Tidak ada solusi instan, tetapi dengan pendekatan yang tepat, Anda dapat membangun strategi yang efektif untuk mengelola dan mengurangi rasa cemas Anda. Jika Anda merasa kesulitan mengatasi cemas atau merasa terjebak dalam siklus cemas yang berkepanjangan, jangan ragu untuk mencari bantuan profesional.','cemas,mengatasi,menghilangkan',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`nim`,`email`,`password`,`no_tlp`,`jurusan`,`prodi`,`kelas`,`alamat`,`gambar`,`email_verified_at`,`remember_token`,`created_at`,`updated_at`,`issuperadmin`,`isadmin`) values 
(1,'superadmin','2101092026','superadmin@gmail.com','$2y$10$AxDPrXKWam.aqUVEysfCXe0Wyv0JJU65PmBYcA6rW.ZP1PGQasTTa','098758979846936','Teknologi Informasi','D3-Manajemen Informatika','MI3C','Batang Gadang , kec. Ulakan Tapakis , kab. Padang Pariaman , prov. Sumatra Barat','1713630933.jpg',NULL,NULL,'2024-04-20 16:35:33','2024-04-20 16:35:33',2,0),
(4,'zahraa23','222222','zahra@gmail.com','$2y$10$CCM8tlE3u.k7NQnEtAHug.s.JSWViGnmcq4hk0fqEKCY5fJ1oMc7W','12414153','Teknologi Informasi','D3-Manajemen Informatika','MI3C','Batang Gadang , kec. Ulakan Tapakis , kab. Padang Pariaman , prov. Sumatra Barat','1713924628.jpg',NULL,NULL,'2024-04-20 16:51:18','2024-04-24 02:10:28',0,0),
(6,'admin','111111',NULL,'$2y$10$FsQIPb7b2M.jH.12G7PoresE16tuvcL7BkND7zyL7PJ2g760KjHSS',NULL,NULL,NULL,NULL,NULL,'C:\\xampp\\tmp\\php3DD0.tmp',NULL,NULL,'2024-04-25 04:08:22','2024-04-25 04:08:22',0,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
