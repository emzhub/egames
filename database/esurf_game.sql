-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2018 at 07:26 AM
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
-- Table structure for table `account_settings`
--

CREATE TABLE `account_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `mobile_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xbox_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_settings`
--

INSERT INTO `account_settings` (`id`, `user_id`, `mobile_id`, `psn_name`, `xbox_name`, `zip`, `gender`, `country`, `state`, `city`, `created_at`, `updated_at`) VALUES
(1, 5, NULL, NULL, 'rose_7812334ttght', 240454, 'Female', 'nigeria', 'lagos', 'lagos', '2018-11-08 12:15:30', '2018-11-08 12:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `game_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `game_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 9919836, 'WWE RAW', '2018-10-22 00:03:44', '2018-10-22 00:03:44'),
(2, 21450562, 'FIFA 18', '2018-10-22 00:03:44', '2018-10-22 00:03:44');

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
(3, '2018_10_19_122927_create_newgames_table', 2),
(4, '2018_10_22_004358_create_games_table', 3),
(5, '2018_10_22_010634_create_teams_table', 4),
(8, '2018_10_26_110940_create_newmatches_table', 6),
(10, '2018_10_26_111922_create_newtournaments_table', 7),
(12, '2018_11_07_084358_create_account_settings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `newgames`
--

CREATE TABLE `newgames` (
  `id` int(10) UNSIGNED NOT NULL,
  `console_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newgames`
--

INSERT INTO `newgames` (`id`, `console_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 56704299, 'Xboxone', '2018-10-21 23:18:47', '2018-10-21 23:18:47'),
(2, 9321769, 'Ps4', '2018-10-21 23:18:47', '2018-10-21 23:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `newmatches`
--

CREATE TABLE `newmatches` (
  `id` int(10) UNSIGNED NOT NULL,
  `match_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `challange` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `console` int(11) NOT NULL,
  `games` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` int(11) NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legacy_defending` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newmatches`
--

INSERT INTO `newmatches` (`id`, `match_id`, `user_id`, `challange`, `console`, `games`, `price`, `level`, `team`, `time`, `legacy_defending`, `status`, `created_at`, `updated_at`) VALUES
(1, 59772238, 5, 'Open challange', 56704299, 9919836, '$10', '3.5', 52335257, '5 minutes', 0, 0, '2018-11-03 06:45:23', '2018-11-03 06:45:23'),
(2, 80230995, 5, 'Direct challenge', 9321769, 21450562, '$6', '4.5', 33025297, '5 minutes', 1, 0, '2018-11-03 06:52:34', '2018-11-03 06:52:34'),
(3, 359339, 5, 'Open challange', 9321769, 21450562, '$10', '0', 0, '0', 0, 0, '2018-11-03 09:06:19', '2018-11-03 09:06:19'),
(4, 12699619, 5, 'Direct challenge', 9321769, 21450562, '$10', '4.5', 34142248, '7 minutes', 1, 0, '2018-11-03 09:07:00', '2018-11-03 09:07:00'),
(5, 39115855, 5, 'Direct challenge', 9321769, 9919836, '$10', '0', 0, '0', 0, 0, '2018-11-03 09:10:02', '2018-11-03 09:10:02'),
(6, 93341371, 5, 'Open challange', 9321769, 9919836, '$10', '0', 0, '0', 0, 0, '2018-11-03 09:18:25', '2018-11-03 09:18:25'),
(7, 24891624, 5, 'Open challange', 9321769, 9919836, '$5', '0', 0, '0', 0, 0, '2018-11-03 09:23:41', '2018-11-03 09:23:41'),
(8, 26574373, 5, 'Open challange', 9321769, 21450562, '$8', '4', 52335257, '5 minutes', 0, 0, '2018-11-03 09:24:24', '2018-11-03 09:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `newtournaments`
--

CREATE TABLE `newtournaments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tournament_id` int(11) NOT NULL,
  `no_players` int(11) NOT NULL,
  `martch_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newtournaments`
--

INSERT INTO `newtournaments` (`id`, `user_id`, `tournament_id`, `no_players`, `martch_time`, `title`, `created_at`, `updated_at`) VALUES
(1, 5, 33301748, 4, '48 hours', 'cup log', '2018-11-05 19:44:52', '2018-11-05 19:44:52');

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 31848156, 'Club', '2018-10-22 00:13:41', '2018-10-22 00:13:41'),
(2, 52335257, 'Ultimate', '2018-10-22 00:13:42', '2018-10-22 00:13:42'),
(3, 40398933, 'EPL', '2018-10-22 00:13:42', '2018-10-22 00:13:42'),
(4, 6016706, 'La Liga', '2018-10-22 00:13:42', '2018-10-22 00:13:42'),
(5, 2471132, 'Bundesliga', '2018-10-22 00:13:42', '2018-10-22 00:13:42'),
(6, 34142248, 'Liga MX', '2018-10-22 00:13:42', '2018-10-22 00:13:42'),
(7, 52545378, 'MLS', '2018-10-22 00:13:42', '2018-10-22 00:13:42'),
(8, 33025297, 'Women\'s Team', '2018-10-22 00:13:42', '2018-10-22 00:13:42'),
(9, 39080903, 'Internatonal', '2018-10-22 00:13:42', '2018-10-22 00:13:42');

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
(1, 'kenny endowed', '1111', 'kenny endowed', '::1', 'kenneyg50@gmail.com', '', 'default', 'https://lh4.googleusercontent.com/-ffJdyUcOIAc/AAAAAAAAAAI/AAAAAAAAEMc/a9pWv2FjaXk/photo.jpg?sz=50', 'google', '111822519368451133167', 'ya29.Glw8Bi4ey4IpQ_Hsut4rxjCG_oaeWv96tkaZtrMwEglIwzm3iFy5TZejSQlVj2UbildVkXqZAkkw4msXUO0ee6NtUyD49YyC8J5ZX7fo8Nid3shgKsSiYrVv5FX3Wg', 'L35LsSJj7ojSmGQTza0Wwxwe18o0HaR37uEIWnxZMV0crfaQnhLHjYA3zHvY', '2018-10-12 19:49:52', '2018-10-20 13:29:02'),
(2, 'Apartment Application', '1111', 'Apartment Application', '::1', 'applicationapartment@gmail.com', '', 'default', 'https://lh3.googleusercontent.com/-XHy9Uouyx2M/AAAAAAAAAAI/AAAAAAAAAAA/AAN31DV2l7Won_S7AVqBQg_1Fg-KRQBkqw/mo/photo.jpg?sz=50', 'google', '112739036808392317661', 'ya29.Gls1BmbRvW3Z2ucg_hCDYqy8tHG1dHtcoJz6TLN4CmwelqfVylhBrC7fa73GVIoCU3gYaMbQPOeoIvaBI5G_gG6yl3w-Do4Nx4CkEMHx15-TwFTLXw6V7SIY1O05', 'VE1GyztevLFLf7wU4q8wEaJkw6hfOO5VZjGcw3KeaiYE7BQgUcpWmRJHP3dT', '2018-10-12 23:24:33', '2018-10-12 23:24:33'),
(3, 'administrator', '0564564564', 'kennyendowed', '::1', 'kennyendowed@hotmail.com', '$2y$10$XgoX4vUOktvz47roMtGpCepu0fuogZV7T2MNPXruQkcfIlNX6UolC', 'admin', NULL, NULL, NULL, NULL, 'FpHRi2GyWGarTWRrV39BbQ1bGhFbIYddYIbXIKZhD8dgV1sC9Dg7NJT1Auc9', '2018-10-12 23:55:26', '2018-10-12 23:55:26'),
(4, 'Godwin Igbokwe', '1111', 'Godwin Igbokwe', '::1', 'esurfonline@gmail.com', '', 'default', 'https://lh6.googleusercontent.com/-f2aD9-c_cqg/AAAAAAAAAAI/AAAAAAAAABw/dpY8GWbQzLA/photo.jpg?sz=50', 'google', '102379792876068981993', 'ya29.Gls7BrjuPz88qm3a5RlYZM0AJhBmdf-V5U-5bQ3uesLcePRX8C7VAVFawdr34aiOsJZSWw-iLJmZG3RopSP8flLfLHLTUy-fws-5xyyhAP23xEwm9LhP-WIqYSkv', 'mHj0y39qArQndgWY6L2KpWW349EZu6u8vqE7XdLOYBsDA9IMuAsxULbmKQ5A', '2018-10-13 03:49:14', '2018-10-19 11:35:15'),
(5, 'peace akpan', '0564564564', 'emi', '::1', 'kenny@gmail.com', '$2y$10$33v3yXQMtvgRrJSYK7X/4uTI/i22iHh8QmzBy456S47u6oqKRMS.K', 'default', NULL, NULL, NULL, NULL, 'fgCrLqPUaQomvhq55vzH683akwid2RucIzUq6myTPR5MOMFBzhnUuKqp2nhj', '2018-10-15 18:22:29', '2018-11-08 13:25:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_settings`
--
ALTER TABLE `account_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newgames`
--
ALTER TABLE `newgames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newmatches`
--
ALTER TABLE `newmatches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newtournaments`
--
ALTER TABLE `newtournaments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `account_settings`
--
ALTER TABLE `account_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `newgames`
--
ALTER TABLE `newgames`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newmatches`
--
ALTER TABLE `newmatches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `newtournaments`
--
ALTER TABLE `newtournaments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
