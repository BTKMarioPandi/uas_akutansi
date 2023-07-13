-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_uas_akuntansi
CREATE DATABASE IF NOT EXISTS `db_uas_akuntansi` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_uas_akuntansi`;

-- membuang struktur untuk table db_uas_akuntansi.mario_induk_user
CREATE TABLE IF NOT EXISTS `mario_induk_user` (
  `id_user` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=1004 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_uas_akuntansi.mario_induk_user: ~3 rows (lebih kurang)
INSERT INTO `mario_induk_user` (`id_user`, `nama_lengkap`, `alamat`, `telepon`, `email`, `divisi`) VALUES
	(1001, 'Abdul Bari', 'Pekanbaru', '0812345678902', 'abdulbarihtp@gmail.com', 'Maintenance'),
	(1002, 'Abdul Hamid', 'Pekanbaru', '081234567890', 'abdul.hamid@gmail.com', 'Keuangan'),
	(1003, 'Abdullah', 'Simpang Baru', '0213400234', 'abdull321@yahoo.com', 'HRD');

-- membuang struktur untuk table db_uas_akuntansi.mario_jurnal
CREATE TABLE IF NOT EXISTS `mario_jurnal` (
  `id_jurnal` bigint NOT NULL AUTO_INCREMENT,
  `nama_akun` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jns_jurnal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_jurnal`)
) ENGINE=InnoDB AUTO_INCREMENT=4235 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_uas_akuntansi.mario_jurnal: ~0 rows (lebih kurang)
INSERT INTO `mario_jurnal` (`id_jurnal`, `nama_akun`, `jns_jurnal`, `tanggal`, `created_at`, `updated_at`) VALUES
	(1001, 'Modal', 'Jurnal Keluar', '2023-07-12', NULL, NULL),
	(2001, 'Peralatan', 'Jurnal Masuk', '2023-07-12', NULL, NULL),
	(2002, 'Perlengkapan', 'Jurnal Masuk', '2023-07-13', NULL, NULL);

-- membuang struktur untuk table db_uas_akuntansi.mario_master_akun
CREATE TABLE IF NOT EXISTS `mario_master_akun` (
  `nomor_akun` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_akun` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `induk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_uas_akuntansi.mario_master_akun: ~3 rows (lebih kurang)
INSERT INTO `mario_master_akun` (`nomor_akun`, `nama_akun`, `tipe`, `induk`, `level`, `kelompok`) VALUES
	('001', 'Kas', 'Kas', 'Kas', '1', 'Debet'),
	('002', 'Peralatan', 'Peralatan', 'Peralatan', '1', 'Debet'),
	('002', 'Modal', 'Modal', 'Modal', '1', 'Kredit');

-- membuang struktur untuk table db_uas_akuntansi.mario_user
CREATE TABLE IF NOT EXISTS `mario_user` (
  `id_user` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=1004 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_uas_akuntansi.mario_user: ~3 rows (lebih kurang)
INSERT INTO `mario_user` (`id_user`, `user_name`, `password`, `level`) VALUES
	(1001, 'abdulbari#', 'abdulbari#', '1'),
	(1002, 'abdhamid7', 'abdhamid7', '1'),
	(1003, 'dulahaja', 'dulahaja', '1');

-- membuang struktur untuk table db_uas_akuntansi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_uas_akuntansi.failed_jobs: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_uas_akuntansi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_uas_akuntansi.migrations: ~0 rows (lebih kurang)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_07_11_145915_create_mario_master_akun_table', 1),
	(6, '2023_07_11_145917_create_mario_t_user_table', 1),
	(7, '2023_07_12_071732_create_mario_induk_user', 1),
	(8, '2023_07_12_233356_create_mario_jurnal', 2);

-- membuang struktur untuk table db_uas_akuntansi.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_uas_akuntansi.password_reset_tokens: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_uas_akuntansi.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_uas_akuntansi.personal_access_tokens: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_uas_akuntansi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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

-- Membuang data untuk tabel db_uas_akuntansi.users: ~0 rows (lebih kurang)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
