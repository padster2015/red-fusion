-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2016 at 03:01 AM
-- Server version: 5.5.44-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redfusion_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Business_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Facebook_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Twitter_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Googleplus_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SnapChat_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pinterest_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Affiliate_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PaidSearch_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Youtube_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Deals_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GA_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `Business_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `Facebook_api`, `Twitter_api`, `Googleplus_api`, `linkedin_api`, `SnapChat_api`, `Pinterest_api`, `Email_api`, `Affiliate_api`, `PaidSearch_api`, `Youtube_api`, `Deals_api`, `GA_api`) VALUES
(1, 'Patrick', 'Fit Awards', 'hello@patrickhenry.co.uk', '$2y$10$NFHTonva3LJmVFmYyWTGhu8COrlmAIBECP.3vqabs.nDAiv.BY0im', '4nT31UDGCrLyIeyXowXIP4ZM6FzIQ9RUV4C7OrLZ8e3TgCKCykIinnqfsvzo', '2016-01-06 09:47:44', '2016-01-06 14:47:44', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_business_name_unique` (`Business_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
