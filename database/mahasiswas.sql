-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2024 at 09:19 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int UNSIGNED NOT NULL,
  `namaMahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nimMahasiswa` int NOT NULL,
  `angkatanMahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulskripsiMahasiswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarMahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `namaMahasiswa`, `nimMahasiswa`, `angkatanMahasiswa`, `judulskripsiMahasiswa`, `pembimbing1`, `pembimbing2`, `gambarMahasiswa`, `created_at`, `updated_at`) VALUES
(2, 'Ranti', 11223344, '2012', 'Menjadi lebih tinggi', 'Sutomo', 'Sutarmi', '1722064653_avatar2.png', '2024-07-26 20:48:17', '2024-07-27 00:17:33'),
(8, 'Alan Dwi Kurniawan', 9080765, '2012', 'Mencoba Berlari lebih cepat', 'Sutomo', 'Sutarmi', '1722064662_avatar3.png', '2024-07-27 00:06:49', '2024-07-27 00:17:42'),
(9, 'AGUNG KUSUMA PRADANA', 21040040, '2014', 'TRANFORMASI PERIZINAN PERNIKAHAN DINI MENGINTEGRASIKAN TEKNOLOGI DALAM PROSES ADMINISTRASI', 'Sutomo', 'Sutarmi', '1722064840_avatar5.png', '2024-07-27 00:20:40', '2024-07-27 00:20:40'),
(10, 'REGINA SYIFA REVADIELLA', 20040097, '2015', 'SISTEM INFORMASI PENGOLAHAN DATA PENDUDUK BERBASIS WEBSITE PADA KELURAHAN PANGGUNG', 'Sutomo', 'Paramita', '1722064894_avatar4.png', '2024-07-27 00:21:34', '2024-07-27 00:21:34'),
(11, 'DIMAS FERLANDA ADITYA', 20041051, '2015', 'RANCANG BANGUN APLIKASI DAILY QUALITY REPORT (DQR) UNTUK MENGHITUNG OTOMATIS BARANG C-GRADE DI PT. RUBBER PAN JAVA', 'Sulasmoro', 'Paramita', '1722064937_avatar6.png', '2024-07-27 00:22:17', '2024-07-27 00:22:17'),
(12, 'ILHAM ADI WIJAYA', 21041016, '2014', 'RANCANG BANGUN SISTEM SEWA WIFI', 'Sulasmoro', 'Sutarmi', '1722065001_avatar7.png', '2024-07-27 00:23:21', '2024-07-27 00:23:21'),
(13, 'M. KHARIS SAEFUL ISLAM', 21040116, '2013', 'PERANCANGAN SISTEM INFORMASI POSYANDU BERBASIS WEB DI DESA KONOHA', 'Sulasmoro', 'Paramita', '1722065054_avatar8.png', '2024-07-27 00:24:14', '2024-07-27 00:24:14'),
(14, 'AKHMAD FAJRI SIDIQ', 21041088, '2015', 'SISTEM INFORMASI KEPENGURUSAN SURAT PENGANTAR KELURAHAN BERBASIS WABSITE DI DESA KONOHA', 'Sutomo', 'Paramita', '1722065105_avatar9.png', '2024-07-27 00:25:05', '2024-07-27 00:25:05'),
(15, 'MUHAMMAD AR-ROSYID', 21041047, '2012', 'SISTEM INFORMASI PELAYANAN JASA LAUNDRY PADA RUMAH CUCI UMI BERBASIS WEB', 'Sutomo', 'PAMBIDNO', '1722065153_avatar10.png', '2024-07-27 00:25:53', '2024-07-27 00:25:53'),
(16, 'ALFIN MAULANA', 21040142, '2013', 'SISTEM INFORMASI E-REGISTRASI KEPENDUDUKAN BERBASIS WEB DENGAN MENGGUNAKAN FRAMEWORK CODEIGNITER', 'Sulasmoro', 'PAMBIDNO', '1722065200_avatar2.png', '2024-07-27 00:26:40', '2024-07-27 00:26:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
