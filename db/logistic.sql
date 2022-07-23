-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 12:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(25) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `password`, `pic`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin123@yopmail.com', '9988775545', '$2y$10$AVSGzOWC5TZROVkvm6khHOVtNyb0eGosBZywMBZsIpDTsGAzZ9fgy', '1658333917_IMG-20190311-WA0000.jpg', 0, '2022-06-21 05:05:28', '2022-07-20 13:58:45'),
(2, 'Test', 'test@test.com', NULL, '$2y$10$Pbjn9GhLI1fqz0uPtsbtHu0.SdJVDKDraoiS6THrKX1SuSPq.vI1e', NULL, 1, '2022-06-21 05:43:56', '2022-06-21 05:43:56'),
(3, 'drupal', 'drupal@gmail.com', NULL, '$2y$10$7KH1naW7LHCIMgXD9aBq7ulaQfMzhOVkozk7t9mSRN0tEw9nzn9.6', '1658253045_IMG-20180721-WA0000.jpg', 1, '2022-07-19 12:20:45', '2022-07-19 12:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE `carriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carriers`
--

INSERT INTO `carriers` (`id`, `name`, `email`, `mobile`, `password`, `pic`, `created_at`, `updated_at`) VALUES
(1, 'carrier', 'carrier@gmail.com', '8884441117', '$2y$10$xzw3aqGSWpVqBVIjUK6tvupi.Wza77Zo8ftq1Jzh1nOJpIP39/uSi', '1658250139_IMG_20140118_161710.jpg', '2022-07-06 20:23:11', '2022-07-19 11:32:19'),
(2, 'developer', 'developer1784@yopmail.com', '9999888815', '$2y$10$bt22xvhMpF590OFZuVJ/vucUczkFgGEmL2r6lNZUG0kNvfqo5j/Ii', NULL, '2022-07-06 20:26:26', '2022-07-15 00:14:37'),
(11, 'Raman', 'raman123@yopmail.com', '9988775545', '$2y$10$iLvrQN2EN4yuUCJQFRcgzuhN3RZJn1eml1xACBvMLg0w5WZVpFieK', NULL, '2022-07-11 19:40:14', '2022-07-15 01:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2022_06_21_093133_create_admins_table', 1),
(15, '2022_06_21_093536_create_carriers_table', 2),
(16, '2022_07_12_002916_create_trucks_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trucks`
--

CREATE TABLE `trucks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `truck_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dry_reefer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permit_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trucks`
--

INSERT INTO `trucks` (`id`, `company_name`, `postal_address`, `abn`, `contact_number`, `phone_number`, `email`, `key_contact`, `user_id`, `user_role`, `truck_type`, `dry_reefer`, `insurance_number`, `permit_type`, `created_at`, `updated_at`) VALUES
(1, 'Web info', 'Mohali', 'DGJ', '7896541235', '8956231478', 'raman1784@gmail.com', 'Phone', '11', 'carrier', '16-wheel', 'friend', '7896FGHT', 'All india', '2022-07-11 19:42:56', '2022-07-11 19:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `pic`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', '8884445789', NULL, '$2y$10$JApakk0vS3OYUSKavfONO.3npQn2oiwclamtOVtwFKb0nqRLus1bq', '1658252079_IMG-20190311-WA0000.jpg', NULL, '2022-06-21 05:04:06', '2022-07-19 12:04:39'),
(2, 'Test user', 'test@gmail.com', NULL, NULL, '$2y$10$pE6o0iDeffah/P/3q/3M6.vXmWmvcMRYzBjAn92MjQUFPTMVnWQNq', NULL, NULL, '2022-06-21 07:01:23', '2022-06-21 07:01:23'),
(3, 'Aditya Mehra', 'aditya.mehra800@gmail.com', NULL, NULL, '$2y$10$wi9gWCbcMBaBkp6pEKED4udfDggVnRTyoa4z3KOGqZrXphk1RXiVS', NULL, NULL, '2022-06-22 13:27:27', '2022-06-22 13:27:27'),
(4, 'sumitwalia', 'sumitwalia75@gmai.com', NULL, NULL, '$2y$10$u6/DdPLBwL.HkeDCH6gCsuYwaUp.9BKiz0oSU7KCcouXRYK1s.uUa', NULL, NULL, '2022-07-01 03:55:36', '2022-07-01 03:55:36'),
(5, 'sumit walia', 'sumitwalia75@gmail.com', NULL, NULL, '$2y$10$dIbc7kkL04hquxe8gQM8Hevr29kizVNNf8iGjeEAgitZrEkFjXRzS', NULL, NULL, '2022-07-01 07:30:38', '2022-07-01 07:30:38'),
(6, 'Demo', 'demo@gmail.com', NULL, NULL, '$2y$10$sxxa/1yWdxkgo6Qlt9mowOk1GEfm6XypQpQllESgijvHDgQ96StIy', NULL, NULL, '2022-07-05 22:18:29', '2022-07-05 22:18:29'),
(8, 'Test dev', 'deve12@yopmail.com', '8887779914', NULL, '$2y$10$u1yEx4nPEg3ptdNlDEgT1OkdgMobInlivGgd4okwQcMtFsPPEqvSG', NULL, NULL, '2022-07-11 16:09:56', '2022-07-15 01:26:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `carriers`
--
ALTER TABLE `carriers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carriers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `trucks`
--
ALTER TABLE `trucks`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trucks`
--
ALTER TABLE `trucks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
