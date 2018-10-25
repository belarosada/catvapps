-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2018 at 07:43 AM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catv`
--

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

DROP TABLE IF EXISTS `box`;
CREATE TABLE IF NOT EXISTS `box` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_box` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran_box` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catv_channel`
--

DROP TABLE IF EXISTS `catv_channel`;
CREATE TABLE IF NOT EXISTS `catv_channel` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode_channel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frekuensi` double NOT NULL,
  `rf_level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catv_channel`
--

INSERT INTO `catv_channel` (`id`, `kode_channel`, `frekuensi`, `rf_level`, `created_at`, `updated_at`) VALUES
(1, 'S1', 105.25, 88, NULL, NULL),
(2, 'S2', 112.25, 89, NULL, NULL),
(3, 'S3', 119.25, 89, NULL, NULL),
(4, 'S4', 126.25, 89, NULL, NULL),
(5, 'S5', 133.25, 89, NULL, NULL),
(6, 'S7', 147.25, 90, NULL, NULL),
(7, 'S8', 168.25, 90, NULL, NULL),
(8, 'S10', 168.25, 91, NULL, NULL),
(9, '5', 175.25, 91, NULL, NULL),
(10, '6', 182.25, 91, NULL, NULL),
(11, '7', 189.25, 92, NULL, NULL),
(12, '8', 196.25, 92, NULL, NULL),
(13, '9', 203.25, 92, NULL, NULL),
(14, '10', 210.25, 93, NULL, NULL),
(15, '11', 217.25, 93, NULL, NULL),
(16, '12', 224.25, 93, NULL, NULL),
(17, 'S11', 231.25, 93, NULL, NULL),
(18, 'S12', 238.25, 94, NULL, NULL),
(19, 'S13', 245.25, 94, NULL, NULL),
(20, 'S14', 252.25, 94, NULL, NULL),
(21, 'S15', 259.25, 95, NULL, NULL),
(22, 'S16', 266.25, 95, NULL, NULL),
(23, 'S17', 273.25, 95, NULL, NULL),
(24, 'S18', 280.25, 95, NULL, NULL),
(25, 'S19', 287.25, 96, NULL, NULL),
(26, 'S20', 294.25, 96, NULL, NULL),
(27, 'S22', 311.25, 97, NULL, NULL),
(28, 'S23', 319.25, 97, NULL, NULL),
(29, 'S24', 327.25, 97, NULL, NULL),
(30, 'S25', 335.25, 98, NULL, NULL),
(31, 'S26', 343.25, 98, NULL, NULL),
(32, 'S27', 351.25, 98, NULL, NULL),
(33, 'S28', 359.25, 99, NULL, NULL),
(34, 'S29', 367.25, 99, NULL, NULL),
(35, 'S30', 375.25, 99, NULL, NULL),
(36, 'S31', 383.25, 99, NULL, NULL),
(37, 'S32', 391.25, 100, NULL, NULL),
(38, 'S33', 399.25, 100, NULL, NULL),
(39, 'S34', 407.25, 101, NULL, NULL),
(40, 'S35', 415.25, 101, NULL, NULL),
(41, 'S36', 423.25, 101, NULL, NULL),
(42, 'S37', 431.25, 101, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupler`
--

DROP TABLE IF EXISTS `coupler`;
CREATE TABLE IF NOT EXISTS `coupler` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_channel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_box` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnr_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `falcom_tx`
--

DROP TABLE IF EXISTS `falcom_tx`;
CREATE TABLE IF NOT EXISTS `falcom_tx` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_channel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_falcom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnr_falcom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_falcom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

DROP TABLE IF EXISTS `field`;
CREATE TABLE IF NOT EXISTS `field` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_channel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_box` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foxcom_tx`
--

DROP TABLE IF EXISTS `foxcom_tx`;
CREATE TABLE IF NOT EXISTS `foxcom_tx` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_channel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_foxcom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnr_foxcom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_foxcom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_material`
--

DROP TABLE IF EXISTS `jenis_material`;
CREATE TABLE IF NOT EXISTS `jenis_material` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_material`
--

INSERT INTO `jenis_material` (`id`, `id_material`, `jenis_material`, `created_at`, `updated_at`) VALUES
(1, '1', 'PCT', NULL, NULL),
(2, '1', 'Falcom', NULL, NULL),
(3, '2', 'EC-1071', NULL, NULL),
(4, '2', 'EC-1072', NULL, NULL),
(5, '2', 'EC-1074', NULL, NULL),
(6, '2', 'EC-1571', NULL, NULL),
(7, '2', 'EC-1572', NULL, NULL),
(8, '2', 'EC-1574', NULL, NULL),
(9, '2', 'EC-20171', NULL, NULL),
(10, '2', 'EC-20172', NULL, NULL),
(11, '2', 'EC-20174', NULL, NULL),
(12, '2', 'C-410', NULL, NULL),
(13, '3', 'ED-772', NULL, NULL),
(14, '3', 'ED-773', NULL, NULL),
(15, '3', 'ED-774', NULL, NULL),
(16, '3', 'D-408', NULL, NULL),
(17, '3', 'D-204', NULL, NULL),
(18, '3', 'DF', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_area`
--

DROP TABLE IF EXISTS `lokasi_area`;
CREATE TABLE IF NOT EXISTS `lokasi_area` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasi_area`
--

INSERT INTO `lokasi_area` (`id`, `nama_area`, `created_at`, `updated_at`) VALUES
(1, 'PC.3 Lama', NULL, NULL),
(2, 'PC.3A Manager', NULL, NULL),
(3, 'PC.3B Manager', NULL, NULL),
(4, 'PC.4 Area 9', NULL, NULL),
(5, 'PC.4 Lama', NULL, NULL),
(6, 'PC.5 Lama', NULL, NULL),
(7, 'PC.6 Project', NULL, NULL),
(8, 'PC.6 Lama', NULL, NULL),
(9, 'PC.6 Millenium', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `nama_material`, `created_at`, `updated_at`) VALUES
(1, 'Amplifier', NULL, NULL),
(2, 'Coupler', NULL, NULL),
(3, 'Splitter', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(74, '2014_10_12_000000_create_users_table', 2),
(75, '2014_10_12_100000_create_password_resets_table', 2),
(76, '2018_10_02_154803_create_catv_channel_table', 2),
(13, '2018_10_03_015701_create_program_table', 1),
(77, '2018_10_03_144629_create_program_table', 2),
(78, '2018_10_03_144928_create_lokasi_area_table', 2),
(79, '2018_10_03_152702_create_box_table', 2),
(80, '2018_10_04_000139_create_material_tabel', 2),
(81, '2018_10_04_001831_create_jenis_material_tabel', 2),
(82, '2018_10_04_013857_create_test_result_table', 2),
(83, '2018_10_13_092418_create_falcom_tx_table', 2),
(84, '2018_10_14_094405_create_foxcom_tx_table', 2),
(85, '2018_10_14_144717_create_coupler_table', 3),
(86, '2018_10_21_135440_create_field_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE IF NOT EXISTS `program` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_channel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `id_channel`, `program`, `created_at`, `updated_at`) VALUES
(1, '1', 'NET TV', NULL, NULL),
(2, '2', 'AN TV', NULL, NULL),
(3, '3', 'METRO TV', NULL, NULL),
(4, '4', 'RCTI', NULL, NULL),
(5, '5', 'SCTV', NULL, NULL),
(6, '6', 'MNC TV', NULL, NULL),
(7, '7', 'TVRI', NULL, NULL),
(8, '8', 'INDOSIAR', NULL, NULL),
(9, '9', 'TRANS TV', NULL, NULL),
(10, '10', 'TRANS 7', NULL, NULL),
(11, '11', 'TV ONE', NULL, NULL),
(12, '12', 'GLOBAL TV', NULL, NULL),
(13, '13', 'LNG TV', NULL, NULL),
(14, '14', 'FOX SPORT', NULL, NULL),
(15, '15', 'BEIN 1', NULL, NULL),
(16, '16', 'HBO HITS', NULL, NULL),
(17, '17', 'CINEMAX', NULL, NULL),
(18, '18', 'AXN', NULL, NULL),
(19, '19', 'DISNEY', NULL, NULL),
(20, '20', 'NAT GEO WILD', NULL, NULL),
(21, '21', 'BABY FIRST', NULL, NULL),
(22, '22', 'NAT. GEOGRAFIC', NULL, NULL),
(23, '23', 'CNN', NULL, NULL),
(24, '24', 'NHK', NULL, NULL),
(25, '25', 'SAUDI TV', NULL, NULL),
(26, '26', 'RODJA TV', NULL, NULL),
(27, '27', 'DIVA', NULL, NULL),
(28, '28', 'JTV', NULL, NULL),
(29, '29', 'FOX MOVIE', NULL, NULL),
(30, '30', 'HBO', NULL, NULL),
(31, '31', 'Tv. Edukasi', NULL, NULL),
(32, '32', 'FYI', NULL, NULL),
(33, '33', 'NICK JUNIOR', NULL, NULL),
(34, '34', 'GOLF', NULL, NULL),
(35, '35', 'K+', NULL, NULL),
(36, '36', 'AL JAZEERA', NULL, NULL),
(37, '37', 'NAT GEO PEOPLE', NULL, NULL),
(38, '38', 'KOMPAS TV', NULL, NULL),
(39, '39', 'BEIN.3', NULL, NULL),
(40, '40', 'FOX SPORT 2', NULL, NULL),
(41, '41', 'MUI', NULL, NULL),
(42, '42', 'INEWS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_result`
--

DROP TABLE IF EXISTS `test_result`;
CREATE TABLE IF NOT EXISTS `test_result` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_channel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnr_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
