-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2024 at 01:27 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Wilton Pagac Jr.', '2023-11-18 12:16:40', '2023-09-30 13:22:21'),
(2, 'Ivory Waelchi', '2023-05-15 04:24:18', '2023-05-29 18:53:44'),
(3, 'Parker Thompson', '2023-12-22 11:26:51', '2023-08-27 17:42:59'),
(4, 'Stephon Bogan', '2023-06-16 16:45:14', '2023-04-16 08:32:39'),
(5, 'Cooper Nicolas', '2023-10-04 09:28:28', '2023-07-03 16:26:52'),
(6, 'Marisol Romaguera I', '2023-03-30 09:56:06', '2023-12-05 19:19:16'),
(7, 'Mr. Dereck Bernier', '2023-12-19 17:19:32', '2023-07-18 01:12:06'),
(8, 'Prof. Harvey Schoen II', '2023-10-24 04:39:10', '2023-01-31 19:07:47'),
(9, 'Alize Kiehn', '2023-02-25 07:08:24', '2023-11-05 01:48:42'),
(10, 'Alexa Mueller Jr.', '2023-07-02 16:03:16', '2023-07-21 09:55:27'),
(11, 'Juston Konopelski I', '2023-02-19 21:57:30', '2023-05-12 18:22:53'),
(12, 'Maddison Brekke', '2023-12-23 14:36:03', '2023-07-06 02:32:02'),
(13, 'David Koss II', '2023-07-12 12:29:04', '2024-01-02 04:24:07'),
(14, 'Brenda Jerde', '2023-06-26 03:40:10', '2023-03-28 05:21:05'),
(15, 'Adonis Bins', '2023-08-10 22:23:49', '2023-04-29 12:25:19'),
(16, 'Prof. Terry Kertzmann', '2023-11-01 04:18:17', '2023-11-29 02:57:18'),
(17, 'Antone Morar', '2023-11-16 14:05:45', '2023-07-19 20:33:42'),
(18, 'Lonny Sporer', '2023-05-31 05:48:21', '2023-04-08 23:44:31'),
(19, 'Mr. Buck Upton IV', '2023-05-26 09:58:41', '2023-12-18 07:17:12'),
(20, 'Eloise Friesen I', '2023-10-20 03:26:10', '2023-10-30 06:32:52'),
(21, 'Pablo Littel', '2023-10-11 00:09:44', '2023-07-24 12:45:34'),
(22, 'Dovie Dickinson', '2023-01-27 00:25:03', '2023-05-25 01:05:52'),
(23, 'Nellie Rosenbaum', '2023-10-02 17:06:34', '2023-08-20 15:22:02'),
(24, 'Rey Crist', '2023-08-17 05:09:23', '2023-06-21 07:56:02'),
(25, 'Kristofer McCullough', '2023-09-22 01:30:14', '2024-01-01 23:51:03'),
(26, 'Farhan', '2024-01-05 06:25:59', '2024-01-05 06:25:59'),
(27, 'set a', '2024-01-05 06:28:06', '2024-01-05 06:36:05');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_04_152916_create_categories_table', 1),
(6, '2024_01_04_152930_create_sub_categories_table', 1),
(7, '2024_01_04_153117_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` decimal(10,2) NOT NULL,
  `new_price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `name`, `slug`, `sku`, `quantity`, `image`, `old_price`, `new_price`, `description`, `created_at`, `updated_at`) VALUES
(42, 2, 16, 'Platinum Sherwani', 'platinum-sherwani', '238806', 100, 'WFmVO0zkhmVhstYdb8DBNjNInxvO6VLTp2Fca8JJ.png', '20000.00', '17450.00', 'The Platinum Collection comprises sophisticated designs that reflect a refinement of taste and culture.', '2024-01-05 07:22:26', '2024-01-05 07:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 12, 'Dr. Macey Lockman', '2023-11-04 04:13:46', '2023-06-10 07:15:19'),
(2, 5, 'Mr. Jay Metz', '2023-05-03 19:43:04', '2023-04-14 23:22:11'),
(3, 5, 'Darryl Reynolds IV', '2023-11-01 19:36:04', '2023-09-06 13:28:19'),
(4, 8, 'Rasheed Schroeder', '2023-10-28 11:27:47', '2023-06-26 23:19:17'),
(5, 13, 'Prof. Tobin Schneider', '2023-09-13 22:38:48', '2023-05-03 20:09:31'),
(6, 10, 'Crawford Wolf', '2023-04-09 12:55:03', '2023-11-18 10:21:44'),
(7, 20, 'Dr. Izaiah Dibbert', '2023-08-06 08:15:35', '2023-06-04 12:35:08'),
(8, 5, 'Prof. Karina Walter DVM', '2023-09-12 07:11:25', '2023-05-13 21:52:30'),
(9, 16, 'Zetta Gusikowski', '2023-03-03 17:12:16', '2023-04-27 07:40:54'),
(10, 5, 'Bobby Runolfsson', '2023-06-08 20:15:16', '2023-06-11 13:22:30'),
(11, 11, 'Amir Cremin', '2023-02-14 18:33:40', '2023-11-05 15:50:09'),
(12, 1, 'Oswaldo Padberg', '2023-03-29 07:11:10', '2023-06-01 16:24:52'),
(14, 8, 'Mayra Gutmann PhD', '2023-07-29 02:24:01', '2023-03-20 14:01:29'),
(15, 23, 'Margie Waters I', '2023-06-12 12:01:31', '2023-09-09 15:52:40'),
(16, 2, 'Adrain Corwin Sr.', '2023-06-02 22:58:09', '2023-05-21 15:53:35'),
(17, 7, 'Jeramie Champlin', '2023-08-27 05:47:53', '2023-09-20 15:55:38'),
(18, 25, 'Tevin Beier II', '2023-03-08 15:17:39', '2023-11-01 10:39:55'),
(20, 15, 'Prof. Zane Champlin DVM', '2023-07-05 21:39:54', '2023-03-04 00:54:39'),
(21, 12, 'Mr. Einar Gislason', '2023-11-18 00:23:39', '2023-06-13 19:35:50'),
(22, 4, 'Dr. Jalen Pfannerstill IV', '2023-01-15 11:54:09', '2023-05-26 10:28:14'),
(23, 9, 'Sedrick Gislason V', '2023-07-07 15:38:34', '2023-03-09 10:05:47'),
(24, 20, 'Richard Carter IV', '2023-04-25 16:11:29', '2023-11-24 11:02:43'),
(25, 23, 'Burdette Watsica', '2023-09-05 17:54:30', '2023-09-09 01:32:42'),
(26, 7, 'dadfada', '2024-01-05 06:48:49', '2024-01-05 07:05:07');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
