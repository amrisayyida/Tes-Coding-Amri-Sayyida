-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2025 at 11:02 AM
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
(2, '2025_03_13_100030_create_siswas_table', 1),
(3, '2025_03_13_100031_create_tipekelas_table', 1),
(4, '2025_03_13_100032_create_kelas_table', 1),
(5, '2025_03_13_100033_create_siswa_kelas_table', 1),
(6, '2025_03_13_100241_create_gurus_table', 1);

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
('xXrofHZ5xAr6ij4DTHAczAvkVVnUZnTeHrdEvDib', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36 Edg/134.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiakNJV0NxOG90UmRHMms0YVZ6UTFpM3dUUHFLanlxUDBZNmhDMFdzSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zaXN3YSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1742032619);

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

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(6, 'VII', '2025-03-15 00:33:52', '2025-03-15 00:33:52'),
(7, 'VIII', '2025-03-15 00:34:06', '2025-03-15 00:34:06'),
(8, 'IX', '2025-03-15 00:34:17', '2025-03-15 00:34:17');

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
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `foto_siswa` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nis`, `nama_siswa`, `nohp_siswa`, `jenkel`, `tgl_lahir`, `tempat_lahir`, `nama_ayah`, `nama_ibu`, `foto_siswa`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '1234', 'Amri Sayyida Faqihuddin', '087717326567', 'laki - laki', '2000-05-21', 'Pekalongan', 'Ibrahim', 'Ani Yuniati', '1741963940.jpg', 'Jl Kyai klidin no 2 Pringrejo  rt 01 rw 19 pekalongan barat Kota pekalongan jawa tengah 51117', '2025-03-14 07:52:20', '2025-03-14 07:52:20'),
(2, '123456', 'Rani', '098754345678', 'perempuan', '2222-02-02', '-', '-', '-', '1741971774.jpg', '-', '2025-03-14 10:02:54', '2025-03-14 10:02:54'),
(3, '0', '-', '0', 'laki - laki', '0001-01-01', '-', '-', '-', '1741972791.jpg', '-', '2025-03-14 10:19:51', '2025-03-14 10:19:51'),
(4, '3', '3', '3', 'perempuan', '0001-01-01', '0', '0', '0', '1741973256.png', '0', '2025-03-14 10:27:36', '2025-03-14 10:27:36'),
(10, '9999', 'anis saifti', '222233335555', 'perempuan', '1997-01-03', 'Pekalongan', 'Ibrahim', 'Ani Yuniati', '1742004708.jpg', 'Jl Kyai klidin no 2 Pringrejo  rt 01 rw 19 pekalongan barat Kota pekalongan jawa tengah 51117', '2025-03-14 19:11:48', '2025-03-14 19:11:48'),
(11, '17199', 'Achmad Syathir Royan', '222233335555', 'laki - laki', '0001-01-01', 'Pekalongan', 'Ibrahim', 'Ani Yuniati', '1742032277.jpg', 'Jl Kyai klidin no 2 Pringrejo  rt 01 rw 19 pekalongan barat Kota pekalongan jawa tengah 51117', '2025-03-15 02:51:17', '2025-03-15 02:51:17'),
(12, '17200', 'Ailsa Syawalin Ristiah Putri', '222233335555', 'perempuan', '0001-01-01', 'Pekalongan', '-', '-', '1742032324.jpg', '-', '2025-03-15 02:52:04', '2025-03-15 02:52:04'),
(13, '17201', 'Annisa Berliana Rahmani', '11111111111', 'perempuan', '0001-01-01', '-', '-', '-', '1742032405.jpg', '-', '2025-03-15 02:53:25', '2025-03-15 02:53:25'),
(14, '17232', 'Bima Putra Djatmika', '0', 'laki - laki', '0001-01-11', '-', '-', '-', '1742032506.jpg', '-', '2025-03-15 02:55:06', '2025-03-15 02:55:06'),
(15, '17240', 'Efraemm Dikba Kudampa', '0', 'laki - laki', '0009-01-02', '-', '-', '-', '1742032577.jpg', '-', '2025-03-15 02:56:17', '2025-03-15 02:56:17'),
(16, '17265', 'Affan Rizky Fahreza', '0', 'laki - laki', '0009-09-09', '-', '-', '-', '1742032618.jpg', '-', '2025-03-15 02:56:58', '2025-03-15 02:56:58');

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

--
-- Dumping data for table `tbl_tipekelas`
--

INSERT INTO `tbl_tipekelas` (`id`, `nama_tipekelas`, `created_at`, `updated_at`) VALUES
(1, 'A', '2025-03-15 00:16:03', '2025-03-15 00:16:03'),
(2, 'B', '2025-03-15 00:17:38', '2025-03-15 00:17:38'),
(3, 'C', '2025-03-15 00:17:46', '2025-03-15 00:17:46');

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
(1, '1234', 'Admin', '087717326567', 'Laki - Laki', 'admin@gmail.com', '$2y$12$8sjt2QC.xkmg6w4cFarv1.7pgQDK5CL7nUxyx7E.v6MXSvAkGELSK', 'Admin', NULL, NULL, NULL),
(4, '1111', 'Bambang', '123123123123', 'Laki - Laki', 'bambang@gmail.com', '$2y$12$NVb6sY7LWV5o.S9ZJBzggOueW0CgNezoNcUcO.zFjIRa7I/is/yly', 'Guru', '1742009871.jpg', '2025-03-14 20:37:51', '2025-03-14 21:19:09'),
(5, '123', 'Admin2', '333333444555', 'Laki - Laki', 'admin2@gmail.com', '$2y$12$HF.m6bEA5AuP0uk9Zn4Huuc78OsGEkS/g3U83BOZUJMDk3HoI19M.', 'Admin', '1742012418.jpg', '2025-03-14 21:20:18', '2025-03-14 21:20:18');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_siswakelas`
--
ALTER TABLE `tbl_siswakelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tipekelas`
--
ALTER TABLE `tbl_tipekelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
