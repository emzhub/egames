-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2018 at 01:14 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.1.19-1+ubuntu17.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esurf_game`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `ip_address`, `email`, `password`, `isadmin`, `avatar`, `provider`, `provider_id`, `access_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kenny endowed', '1111', 'kenny endowed', '::1', 'kenneyg50@gmail.com', '', 'default', 'https://lh4.googleusercontent.com/-ffJdyUcOIAc/AAAAAAAAAAI/AAAAAAAAEMc/a9pWv2FjaXk/photo.jpg?sz=50', 'google', '111822519368451133167', 'ya29.Glw1BsrYTwIcYAsrTZz-1uud6xTcdZ2MtQxyaFUCOr2dxNvUzBmmGrpadqs0RT00OTGLOg_YD2Urwqhtae23jDTCAY1fBnXLtae7t3nY6kIQ3L0D1vjpMg6Y6vi5hQ', 'TbkFi6fRhmbMdGwLxrxkkWjXMU9XiDhWLhlndX66wzYpg13bpxuUTlZfTHB8', '2018-10-12 19:49:52', '2018-10-13 06:05:57'),
(2, 'Apartment Application', '1111', 'Apartment Application', '::1', 'applicationapartment@gmail.com', '', 'default', 'https://lh3.googleusercontent.com/-XHy9Uouyx2M/AAAAAAAAAAI/AAAAAAAAAAA/AAN31DV2l7Won_S7AVqBQg_1Fg-KRQBkqw/mo/photo.jpg?sz=50', 'google', '112739036808392317661', 'ya29.Gls1BmbRvW3Z2ucg_hCDYqy8tHG1dHtcoJz6TLN4CmwelqfVylhBrC7fa73GVIoCU3gYaMbQPOeoIvaBI5G_gG6yl3w-Do4Nx4CkEMHx15-TwFTLXw6V7SIY1O05', 'VE1GyztevLFLf7wU4q8wEaJkw6hfOO5VZjGcw3KeaiYE7BQgUcpWmRJHP3dT', '2018-10-12 23:24:33', '2018-10-12 23:24:33'),
(3, 'administrator', '0564564564', 'kennyendowed', '::1', 'kennyendowed@hotmail.com', '$2y$10$XgoX4vUOktvz47roMtGpCepu0fuogZV7T2MNPXruQkcfIlNX6UolC', 'default', NULL, NULL, NULL, NULL, NULL, '2018-10-12 23:55:26', '2018-10-12 23:55:26'),
(4, 'Godwin Igbokwe', '1111', 'Godwin Igbokwe', '::1', 'esurfonline@gmail.com', '', 'default', 'https://lh6.googleusercontent.com/-f2aD9-c_cqg/AAAAAAAAAAI/AAAAAAAAABw/dpY8GWbQzLA/photo.jpg?sz=50', 'google', '102379792876068981993', 'ya29.Gls1Bgz1yuQA-PPnyqcpfPJOlHbITckOt9JQBSM24e2y84q2vEVSARGgn5XKFGW0LQjpRwhZpdh6vOPFgYlYcM1mnN6qRop7Bz4Vu7UQlvCYAlHzlN53zimXxtgJ', 'mHj0y39qArQndgWY6L2KpWW349EZu6u8vqE7XdLOYBsDA9IMuAsxULbmKQ5A', '2018-10-13 03:49:14', '2018-10-13 03:49:14');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
