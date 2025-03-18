-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 06:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '2025_03_18_000001_create_wali_siswas_table', 1),
(3, '2025_03_18_100030_create_siswas_table', 1),
(4, '2025_03_18_100031_create_tipekelas_table', 1),
(5, '2025_03_18_100032_create_kelas_table', 1),
(6, '2025_03_18_100033_create_siswa_kelas_table', 1),
(7, '2025_03_18_100241_create_gurus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Qs2vy7hvBlxrUG5Gkn3ThRyW9VebMTzh6e5MLyXB', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36 Edg/134.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTTE0YUlqRjc4Zll6aU9XVXgzV3FRTDZjS3h2UHNMTWV1V3lsbUJwYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zaXN3YS9zd2VldGFsZXJ0Mi5taW4uY3NzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1742277470);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_tipekelas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `nohp_siswa` varchar(20) DEFAULT NULL,
  `jenkel` enum('laki - laki','perempuan') DEFAULT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `id_walisiswa` bigint(20) UNSIGNED NOT NULL,
  `foto_siswa` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nis`, `nama_siswa`, `nohp_siswa`, `jenkel`, `tgl_lahir`, `tempat_lahir`, `id_walisiswa`, `foto_siswa`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '123', 'Rizka', '0', 'perempuan', '0001-01-01', '-', 1, '20250318042822.jpg', '-', '2025-03-17 21:28:22', '2025-03-17 22:40:58'),
(2, '124', 'Andi', '0', 'laki - laki', '0001-01-01', '-', 2, '20250318043909.jpg', '-', '2025-03-17 21:39:09', '2025-03-17 21:39:09'),
(3, '125', 'Agus', '0', 'laki - laki', '0001-01-01', '-', 3, '20250318054403.jpg', '-', '2025-03-17 22:44:03', '2025-03-17 22:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswakelas`
--

CREATE TABLE `tbl_siswakelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_tipekelas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipekelas`
--

CREATE TABLE `tbl_tipekelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tipekelas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_walisiwa`
--

CREATE TABLE `tbl_walisiwa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `nohp_wali` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_walisiwa`
--

INSERT INTO `tbl_walisiwa` (`id`, `nama_wali`, `nohp_wali`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Wali Rizka', '0', '-', '2025-03-17 21:16:24', '2025-03-17 21:16:24'),
(2, 'Wali Andi', '0', '-', '2025-03-17 21:38:41', '2025-03-17 21:38:41'),
(3, 'Wali Agus', '0', '-', '2025-03-17 22:43:35', '2025-03-17 22:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `jenkel` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Guru') DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nip`, `name`, `nohp`, `jenkel`, `email`, `password`, `role`, `foto`, `created_at`, `updated_at`) VALUES
(1, '1234', 'Admin', '087717326567', 'Laki - Laki', 'admin@gmail.com', '$2y$12$R/Up93pu3vHic25X9HUAvuJeI6QZUbpxxmnJsiIFHlIBfwdVlGxXO', 'Admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_guru_id_guru_index` (`id_guru`),
  ADD KEY `tbl_guru_id_kelas_index` (`id_kelas`),
  ADD KEY `tbl_guru_id_tipekelas_index` (`id_tipekelas`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_siswa_id_walisiswa_foreign` (`id_walisiswa`);

--
-- Indexes for table `tbl_siswakelas`
--
ALTER TABLE `tbl_siswakelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_siswakelas_id_siswa_index` (`id_siswa`),
  ADD KEY `tbl_siswakelas_id_kelas_index` (`id_kelas`),
  ADD KEY `tbl_siswakelas_id_tipekelas_index` (`id_tipekelas`);

--
-- Indexes for table `tbl_tipekelas`
--
ALTER TABLE `tbl_tipekelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_walisiwa`
--
ALTER TABLE `tbl_walisiwa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_siswakelas`
--
ALTER TABLE `tbl_siswakelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tipekelas`
--
ALTER TABLE `tbl_tipekelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_walisiwa`
--
ALTER TABLE `tbl_walisiwa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD CONSTRAINT `tbl_guru_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_guru_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_guru_id_tipekelas_foreign` FOREIGN KEY (`id_tipekelas`) REFERENCES `tbl_tipekelas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_id_walisiswa_foreign` FOREIGN KEY (`id_walisiswa`) REFERENCES `tbl_walisiwa` (`id`);

--
-- Constraints for table `tbl_siswakelas`
--
ALTER TABLE `tbl_siswakelas`
  ADD CONSTRAINT `tbl_siswakelas_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_siswakelas_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_siswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_siswakelas_id_tipekelas_foreign` FOREIGN KEY (`id_tipekelas`) REFERENCES `tbl_tipekelas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
