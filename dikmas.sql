-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2020 at 02:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dikmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_29_161627_create_siswas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nama_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapel_pilihan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nisn`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nama_ortu`, `program`, `mapel_pilihan`, `created_at`, `updated_at`) VALUES
(5, 'qw', 'q', 'qw', '3', NULL, '4', '2', '4', '2020-01-30 03:09:47', '2020-01-30 03:09:47'),
(6, 'w', 'w', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:09:47', '2020-01-30 03:09:47'),
(7, 'w', 'qw', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:09:47', '2020-01-30 03:09:47'),
(8, '6', 'qw', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:09:47', '2020-01-30 03:09:47'),
(9, '7', 'w', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:09:47', '2020-01-30 03:09:47'),
(10, '8', 'w', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:09:47', '2020-01-30 03:09:47'),
(11, '9', 'w', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:09:47', '2020-01-30 03:09:47'),
(12, '2', 'rt', '3', '3', NULL, '4', '2', '4', '2020-01-30 03:09:47', '2020-01-30 03:09:47'),
(13, '1', 'q', '2', '3', NULL, '4', '2', '44', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(14, '2', 'q', 'q', '3', NULL, '4', '2', '4', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(15, 'qw', 'q', 'qw', '3', NULL, '4', '2', '4', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(16, 'w', 'w', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(17, 'w', 'qw', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(18, '6', 'qw', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(19, '7', 'w', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(20, '8', 'w', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(21, '9', 'w', 't', '3', NULL, '4', '2', '4', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(22, '2', 'rt', '3', '3', NULL, '4', '2', '4', '2020-01-30 03:10:19', '2020-01-30 03:10:19'),
(23, 'asasasas', 'asas', 'laki-laki', 'kudus', '1212-12-12', 'asas', 'IPS', 'Sosiologi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
