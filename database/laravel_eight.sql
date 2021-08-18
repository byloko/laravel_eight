-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 03:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_eight`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `orders_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `orders_name`, `created_at`, `updated_at`) VALUES
(1, 6, 'Pani Puri', '2021-08-12 11:00:12', '2021-08-12 05:54:22'),
(2, 5, 'Bhajiya', '2021-08-12 02:51:12', '2021-08-12 04:57:30'),
(3, 5, 'Samosha', '2021-08-12 06:59:28', '2021-08-12 07:14:37'),
(4, 8, 'Gotalo', '2021-08-12 11:14:25', '2021-08-12 11:14:24'),
(5, 4, 'Dabeli', '2021-08-12 11:15:22', '2021-08-12 03:51:21'),
(6, 9, 'Sav Tameta', '2021-08-12 11:15:32', '2021-08-12 11:00:48');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_role` tinyint(4) NOT NULL DEFAULT 4 COMMENT '1 Superadmin, 2 Admin, 3 School, 4 Teacher',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Pending, 1:Approve',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admins', 'admi0n@gmail.com', NULL, '$2y$10$DU0hOo0HhHLlTemaQj9IGu4wDn7ic4uvK9nKQwlskY/xMTFFRfdPu', 'NTtJC5JDfFbRBHforQyAfn44rI0DzydKuVXu309B3PAPRHspExJLxIzLpl1d', 4, 0, '2021-08-12 03:30:31', '2021-08-12 03:30:31'),
(2, 'Superadmin', 'superadmin@gmail.com', NULL, '$2y$10$aJUXNsWtYjkCSQgTV3W85eBlgsHaiLtt.5DwbTK7yMylSPc6WYpqi', '2b7S439X6CvYZQLQtpvpTPe5dzXmV3teKbZK0uNBwKmB2izDbAjJ8E0PWhMp', 1, 1, '2021-08-12 03:32:18', '2021-08-12 03:32:18'),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$z0Y7DZWm8nHAxVThvFIEU.sHc3ej4Hph/ywRApV4OadQaazbpfSSa', 'kG0qx356e4Y7pa2C48nNKFdrJfzvzHYpfmpCCtwLsAtJqMszVqWPGHs41yyc', 2, 1, '2021-08-12 03:44:02', '2021-08-12 03:44:02'),
(4, 'School', 'school@gmail.com', NULL, '$2y$10$jrpytevHCyB2pp2TRJAy9eegeQxgJSs.hi1JjZSFLJxuEdVLBfg7u', 'wSOKKexhX4P2MVkKpvfOpmtqzfgDoXaT5tnzjxVivejCy2On0y19NLDrn80G', 3, 1, '2021-08-12 03:55:20', '2021-08-12 03:55:20'),
(5, 'Teacher', 'teacher@gmail.com', NULL, '$2y$10$1GCVG5idpxqD1uobB9xEfuZlI8C0vCKbxXgau6iMOmYXEN.ULx3ja', 'AmlYbl5ICfj5ZXTpJPeEtiWwfBbaB2kKtQL88UkBEHTQczoNvsBB0D8lzl5z', 4, 1, '2021-08-12 03:56:00', '2021-08-12 03:56:00'),
(6, 'HelloVipil', 'admin99@gmail.com', NULL, '$2y$10$8dolBoNInHJmYNnkAuA4oeUtFAvkKZVYOHNwNSPD1gQXkyrUpgTjC', 'xqKWfOCbnf4HfAM7F5luotdxmbboBZZ3g7nz3uD6JiXABzgxKAH3y4ybEJ86', 3, 1, '2021-08-12 04:00:44', '2021-08-12 04:00:44'),
(7, 'Briansss', 'admin565@gmail.com', NULL, '$2y$10$m6QKAJ.Q6i3sRvKkYZ1Y/uc2NkEN2HvkpXYoWb8DkB17WgKd1gj2.', '7gTy3l7scHgO4Z8qYyz8NhIEqEA6gq0oIdS1E6HbMGta3N2bCJ', 4, 1, '2021-08-12 04:01:55', '2021-08-12 04:01:55'),
(8, 'Adminsssss', 'ad5min99@gmail.com', NULL, '$2y$10$bXtvCN/vacP4u9WCK52UneinFRhDVVzeXXgWV01vb/3ndGJ0mR07a', 'rDSBkveARNDA9uBuhZ94Vyw9LqAuX4ni6FVHnUPbO0kj7zIWYahlnCEz6AST', 4, 1, '2021-08-12 04:46:33', '2021-08-12 04:47:10'),
(9, 'laravel_p9roject', 'ad134151min@gmail.com', NULL, '$2y$10$FrX/ZBMo1pHSFBKq9FW1leGJekfothk5Me9LoICk6v//IlUiIFpeG', 'cpVhmpX5jCsNzX0PxVW1M2yxPH5Gtkx3vo3CFdYxsSsxMaEMD2J4LFpJJXXQ', 4, 1, '2021-08-12 04:49:36', '2021-08-12 22:29:42');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
