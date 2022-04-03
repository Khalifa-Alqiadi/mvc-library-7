-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 أبريل 2022 الساعة 11:51
-- إصدار الخادم: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elib`
--

-- --------------------------------------------------------

--
-- بنية الجدول `authors`
--

CREATE TABLE `authors` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(5) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `authors`
--

INSERT INTO `authors` (`id`, `name`, `phone`, `email`, `bio`, `created_at`, `updated_at`, `created_by`, `is_active`) VALUES
(4, 'خليفة القياضي', '86966587587545487', 'khalifa.alqiadi@gmail.com', 'كاتب ابحاث', '2022-04-01 17:25:06', '2022-04-01 17:25:06', 0, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL,
  `pages_number` int(2) NOT NULL,
  `category_id` int(3) NOT NULL,
  `author_id` int(3) NOT NULL,
  `publisher_id` int(3) NOT NULL,
  `quantity` int(2) NOT NULL,
  `format` varchar(255) NOT NULL,
  `created_by` int(3) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`bookid`, `title`, `image`, `price`, `description`, `pages_number`, `category_id`, `author_id`, `publisher_id`, `quantity`, `format`, `created_by`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'قصة حزينة', '6244c5386578a.jpg', 300, 'قصة جميلة', 200, 2, 1, 1, 3, 'pdf', 1, 1, '2022-03-30 21:01:44', '2022-03-30 21:01:44'),
(2, 'كتاب تعلم طبخ العصيد', 'نثتبمنهثستمنهسيءبرنةى', 10000, 'كمقنتسكخلمثتيخكلنمصثتحهكخملتص', 100, 3, 1, 1, 12, 'pdf', 1, 1, '2022-03-31 22:15:45', '2022-03-31 22:15:45'),
(3, 'تعلم طبخ السلتة', '624788d65b6b4.jpg', 300, 'كتاب يعلمك اتقان طبخ السلتة', 23, 1, 1, 1, 4, 'pdf', 1, 1, '2022-04-01 23:20:54', '2022-04-01 23:20:54'),
(4, 'تعلم طبخ السلتة', '6247893f4e380.jpg', 300, 'This Game Is Very Good And Vary Nice', 99, 3, 1, 1, 5, 'pdf', 1, 1, '2022-04-01 23:22:39', '2022-04-01 23:22:39'),
(5, 'تعلم طبخ السلتة', '6247896bd36e1.jpg', 300, 'this is the past electronics', 88, 3, 1, 1, 3, 'pdf', 1, 1, '2022-04-01 23:23:23', '2022-04-01 23:23:23'),
(6, 'قصة حزينة', '62478de720260.jpg', 300, 'This Game Is Very Good And Vary Nice', 33, 3, 1, 1, 5, 'pdf', 1, 1, '2022-04-01 23:42:31', '2022-04-01 23:42:31'),
(7, 'تعلم طبخ السلتة', '62478e171dddf.jpg', 300, 'this is the past electronics', 32, 3, 1, 1, 4, 'pdf', 1, 1, '2022-04-01 23:43:19', '2022-04-01 23:43:19');

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `is_active`, `created_at`, `upated_at`, `created_by`) VALUES
(1, 'lgbkj;lsrkjg;blrsbk', 'lwgjk;lwrjg;lwrjg;lg', 1, '2022-03-29 15:06:14', '2022-03-29 15:06:14', 1),
(2, 'دين', '62433b6034635.jpg', 1, '2022-03-29 17:01:20', '2022-03-29 17:01:20', 1),
(3, 'طبخ', '6244a75f1443e.jpg', 1, '2022-03-30 18:54:23', '2022-03-30 18:54:23', 1),
(4, 'طبخ', '6244a8766b2d6.jpg', 1, '2022-03-30 18:59:02', '2022-03-30 18:59:02', 1),
(5, 'طبخ', '6244a89a96c8b.jpg', 1, '2022-03-30 18:59:38', '2022-03-30 18:59:38', 1),
(6, 'سياسة', '6244aaa1cc872.jpg', 1, '2022-03-30 19:08:17', '2022-03-30 19:08:17', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `cities`
--

INSERT INTO `cities` (`id`, `name`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'تعز', 1, '2022-03-31 19:18:39', '2022-03-31 19:18:39', 1),
(2, 'صنعاء', 1, '2022-03-31 19:19:39', '2022-03-31 19:19:39', 1),
(3, 'حضرموت', 1, '2022-03-31 22:41:30', '2022-03-31 22:41:30', 1),
(4, 'حضرموت', 1, '2022-03-31 22:42:28', '2022-03-31 22:42:28', 1),
(5, 'تعز', 1, '2022-03-31 22:43:37', '2022-03-31 22:43:37', 1),
(6, 'صنعاء', 1, '2022-03-31 22:50:28', '2022-03-31 22:50:28', 1),
(7, 'صنعاء', 1, '2022-03-31 22:51:06', '2022-03-31 22:51:06', 1),
(8, 'صنعاء', 1, '2022-03-31 22:52:45', '2022-03-31 22:52:45', 1),
(9, 'صنعاء', 1, '2022-03-31 23:09:34', '2022-03-31 23:09:34', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discount` double NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `book_ids` varchar(255) DEFAULT NULL,
  `category_ids` varchar(255) DEFAULT NULL,
  `all_books` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `offers`
--

INSERT INTO `offers` (`id`, `title`, `discount`, `start_date`, `end_date`, `book_ids`, `category_ids`, `all_books`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'lekjf;lewkj;vlfwejkv;owe', 200, '2022-03-31', '2022-04-13', '0', '3', NULL, 1, '2022-03-31 22:12:25', '2022-03-31 22:12:25', 1),
(2, 'juvfhukwjehfjkh', 200, '2022-04-07', '2022-04-18', '0', '3', NULL, 1, '2022-03-31 22:17:18', '2022-03-31 22:17:18', 1),
(3, 'juvfhukwjehfjkh', 200, '2022-04-07', '2022-04-18', '0', '3', NULL, 1, '2022-03-31 22:17:18', '2022-03-31 22:17:18', 1),
(4, 'juvfhukwjehfjkh', 200, '2022-04-07', '2022-04-18', '1', '3', NULL, 1, '2022-03-31 22:21:25', '2022-03-31 22:21:25', 1),
(5, 'juvfhukwjehfjkh', 200, '2022-04-07', '2022-04-18', '2', '3', NULL, 1, '2022-03-31 22:21:25', '2022-03-31 22:21:25', 1),
(6, 'fgbesrdrfbvaba', 200, '2022-03-29', '2022-03-29', '1', '2', NULL, 1, '2022-03-31 22:28:26', '2022-03-31 22:28:26', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `id` int(3) NOT NULL,
  `user_id` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `total` double NOT NULL,
  `discount` double NOT NULL,
  `net_total` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_method` int(2) DEFAULT NULL,
  `address_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `order_details`
--

CREATE TABLE `order_details` (
  `id` int(2) NOT NULL,
  `order_id` int(2) NOT NULL,
  `book_id` int(2) NOT NULL,
  `quantity` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `payements`
--

CREATE TABLE `payements` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `payements`
--

INSERT INTO `payements` (`id`, `name`, `image`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'payement', '6246398884c93.jpg', 1, '2022-03-31 23:30:16', '2022-03-31 23:30:16', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `publishers`
--

CREATE TABLE `publishers` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `alt_phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `phone`, `alt_phone`, `fax`, `email`, `address`, `country`, `image`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'دار النشر', '738843852', '738843852', '1234567', 'khalifa.alqiadi@gmail.com', 'شارع العدل', 'اليمن', '6244dccf3763e.jpg', 1, '2022-03-30 22:42:23', '2022-03-30 22:42:23', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp(1) NOT NULL DEFAULT current_timestamp(1),
  `updated_at` timestamp(1) NOT NULL DEFAULT current_timestamp(1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_active`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'khalifa alqiadi', 'khalifa.alqiadi@gmail.com', '2778cb15047b69e5e1e166cbb0d8c4323c9595c6', 1, 1, '2022-04-03 00:38:30.7', '2022-04-03 00:38:30.7');

-- --------------------------------------------------------

--
-- بنية الجدول `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `city_id` int(2) NOT NULL,
  `address` varbinary(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `user_payment_methods`
--

CREATE TABLE `user_payment_methods` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `payement_id` int(2) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user_payment_methods`
--

INSERT INTO `user_payment_methods` (`id`, `user_id`, `payement_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-03-31 23:57:57', '2022-03-31 23:57:57');

-- --------------------------------------------------------

--
-- بنية الجدول `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `user_tokens`
--

CREATE TABLE `user_tokens` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `country` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `book_category` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payements`
--
ALTER TABLE `payements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD UNIQUE KEY `user_is` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payements`
--
ALTER TABLE `payements`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `book_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
