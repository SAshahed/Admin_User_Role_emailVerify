-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 09:12 PM
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
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(1000) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not delete,1:delete',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `title`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'প্রচ্ছদ', 'prcchd', 'Home page', 'প্রচ্ছদ,homepage', '', 'homepage', 1, 0, '2024-10-09 20:30:22', '2024-10-09 20:30:22'),
(2, 'দেশজুড়ে', 'desjude', 'দেশজুড়ে', 'দেশজুড়ে', '', '', 1, 0, '2024-10-09 20:34:04', '2024-10-09 20:34:04'),
(3, 'বিশ্বজুড়ে', 'biswjure', 'বিশ্বজুড়ে', 'বিশ্বজুড়ে', '', '', 1, 0, '2024-10-09 20:34:38', '2024-10-09 20:34:38'),
(4, 'রাজনীতি', 'rajneeti', 'রাজনীতি', 'রাজনীতি', '', '', 1, 0, '2024-10-09 20:35:28', '2024-10-09 20:35:28'),
(5, 'বাণিজ্য', 'banijz', 'বাণিজ্য', 'বাণিজ্য', '', '', 1, 0, '2024-10-09 20:35:49', '2024-10-09 20:35:49'),
(6, 'খেলা', 'khela', 'খেলা', 'play,খেলা', '', '', 1, 0, '2024-10-09 20:38:03', '2024-10-09 20:38:03'),
(7, 'বিনোদন', 'binodn', 'বিনোদন', 'বিনোদন', '', '', 1, 0, '2024-10-09 20:38:24', '2024-10-09 20:38:24'),
(8, 'মতামত', 'mtamt', 'মতামত', 'মতামত', '', '', 1, 0, '2024-10-09 20:38:46', '2024-10-09 20:38:46'),
(9, 'রাজধানী', 'rajdhanee', 'রাজধানী', 'রাজধানী', '', '', 1, 0, '2024-10-09 20:39:06', '2024-10-09 20:39:06'),
(10, 'চট্টগ্রাম', 'cttgram', 'চট্টগ্রাম', 'চট্টগ্রাম', '', '', 1, 0, '2024-10-09 20:39:32', '2024-10-09 20:39:32'),
(11, 'আইন-আদালত', 'ain-adalt', 'আইন-আদালত', 'আইন-আদালত', '', '', 1, 0, '2024-10-09 20:40:04', '2024-10-09 20:40:04'),
(12, 'সংগঠন', 'snggthn', 'সংগঠন', 'সংগঠন', '', '', 1, 0, '2024-10-09 20:40:30', '2024-10-09 20:40:30'),
(13, 'তথ্য ও প্রযুক্তি', 'tthz-oo-przukti', 'তথ্য ও প্রযুক্তি', 'তথ্য ও প্রযুক্তি', '', '', 1, 0, '2024-10-09 20:41:25', '2024-10-09 20:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_file` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `meta_keywords` varchar(500) DEFAULT NULL,
  `is_publish` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `slug`, `category_id`, `image_file`, `description`, `meta_description`, `meta_keywords`, `is_publish`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 'hello bangladesh', 'hello-bangladesh', 1, 'hello-bangladesh.jpg', '<p>hello bangladesh hello bangladesh hello bangladesh hello bangladesh&nbsp;</p>', 'hello bd', '', 1, 1, 0, '2024-10-10 22:07:43', '2024-10-10 22:07:43'),
(2, 1, 'আপাতত দলীয় ব্যানারে কর্মসূচি করবে না বিএনপি', 'apatt-dleey-bzanare-krmsuuci-krbe-na-bienpi', 4, 'apatt-dleey-bzanare-krmsuuci-krbe-na-bienpi.jpg', '<p>কোটা সংস্কার আন্দোলন ঘিরে সারা দেশে নেতা-কর্মীদের গণগ্রেপ্তারসহ নানামুখী নিপীড়নের মধ্যে আপাতত দলীয় ব্যানারে কর্মসূচি করবে না বিএনপি। কারফিউ বলবৎ থাকাসহ গ্রেপ্তার অভিযানের এই সময়টাতে দলের কর্মী-সমর্থকেরা যুগপৎ আন্দোলনের শরিক দলগুলোর কর্মসূচিতে সক্রিয় থাকবেন। ...</p>', 'বিএনপি', 'বিএনপি', 1, 1, 0, '2024-10-10 22:44:28', '2024-10-11 08:07:57'),
(3, 1, 'র‍্যাংগস ই-মার্ট এনেছে এলজির নতুন ‘ওএলইডি সি থ্রি সিরিজ12', 'rzanggs-i-mart-eneche-eljir-ntun-ooelidi-si-thri-sirij', 5, 'rzanggs-i-mart-eneche-eljir-ntun-ooelidi-si-thri-sirij.jpg', '<p>এলজি ব্র্যান্ডের সর্বশেষ ওএলইডি সি থ্রি সিরিজের টিভি বাজারে এনেছে র&zwj;্যাংগস ই-মার্ট। ৩ জুলাই ঢাকার র&zwj;্যাংগস ই-মার্টের গুলশান-২-এর শোরুমে এক অনুষ্ঠানে এই নতুন মডেলের টিভি প্রদর্শিত হয়। অনুষ্ঠানে উপস্থিত ছিলেন র&zwj;্যানকন হোল্ডিংস লিমিটেডের ব্যবস্থাপনা পরিচালক ফারহানা করিম, এলজি ...12</p>', 'business123', 'business12', 0, 1, 0, '2024-10-11 07:54:21', '2024-10-11 08:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('B7D4avaOyqoYwPTHstfKcQnjieuhAJkE5VLNTLf4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiODFoRlFBV0pLRjJNbmxHMUVnYWxXempXN0Jjb1VOdjRKeGFZUkFubiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjEvYWJhYmlsbmV3cy9wYW5lbC9uZXdzL2VkaXQvMiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1728634139),
('k4XCcHgwdD4wYFjEsyc2Z80RA0wtB4HYpeH3t0UD', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSU5Hank1dTRWd2l0c3pKMVc3SnBjREhnV0VxbWJ4S3NwcWhsVGFUYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjEvYWJhYmlsbmV3cy9wYW5lbC9uZXdzL2VkaXQvMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1728609456);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `retype_password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 : user, 1 : admin',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: not verified, 1: verified',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not deleted,1:deleted',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `retype_password`, `is_admin`, `status`, `is_delete`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 1919164310, '2024-10-03 13:37:57', '$2y$12$3CpWKjTVO9WDVLVnJwfBLeMwhtndAKI74by9DPaIFspqAKjj9kmqC', '$2y$12$9sE4k36xGvGu8Nc0UtMLCe6siQWmzhhALKE3tgyzWSl1dOu8ooXE6', 1, 0, 0, 'kzzLk6azQ1eQB46uVBtMo7WfCyb8naV7gta4aZPRHlZdNIOVCFVEga6tgFgi', '2024-10-02 12:46:30', '2024-10-03 13:37:57'),
(2, 'user', 'user@gmail.com', 1919164310, NULL, '$2y$12$KhioMI4/uzlZ/rHjQBcMn.q8zn4Mmfqe6NebRm8/4hHOtyB9qit2W', '$2y$12$DDqLhNVNAR6MFmVUegB3f.aqX9QVnUOT7uWmMc1hCJmTpg8ke0hcK', 0, 0, 1, NULL, '2024-10-02 12:53:34', '2024-10-09 13:32:07'),
(4, 'admin', 'nanodecode1@gmail.com', 1919164313, NULL, '$2y$12$Pvmtq5co3dAc/nE0lPlRB.7EK75OuzuHfaupfhwvf.8QwIE3xU2W6', '$2y$12$1lVTzRvhUTDBzAZIi5vUa.QZO025TOgC12lY8JL0rLECOgK9xHEKG', 0, 0, 0, NULL, '2024-10-02 13:32:46', '2024-10-02 13:32:46'),
(5, 'test', 'test@gmail.com', 6666777, '2024-10-06 12:04:16', '$2y$12$zsGC2qac70VXLIL23qc6CO66VRZpIkS7D/V4yicmy6YOfzEU/agEq', '$2y$12$YYZ1K3HBVIwObeiGIzhFWOqHI13f07ZbUDbXmxP2.iTIRPhSoC2dm', 0, 0, 1, '694JT63qWYhL4FWoFckqX0kaMVfmQrENDMzZQDS8', '2024-10-02 13:41:03', '2024-10-06 12:04:16'),
(6, 'Md.Shahed Alam', 'nanodecode@gmail.com', 1919164314, NULL, '$2y$12$EXLCu0Jz20VTWXzL3kyOQeANc8DJX5TZhdNsQXaCEe2ddgikx9TWS', '$2y$12$nV4KIk9GWcSxBc8QR5f1uu7OBxA2goKh.QownAcv/rFTHdwg2IyKW', 0, 0, 0, 'roUap8ibi4O2bv6kuBCk9h52eUMDxWdgFZ2RadxL', '2024-10-02 14:38:34', '2024-10-02 14:38:34'),
(7, 'test12', 'test12@gmail.com', 98987874, NULL, '$2y$12$ehwVoCkP57Z0UlxMFCDaBOsQQUqvJGJ43VDxTo.Fw4ktcQ.F0fW6W', '$2y$12$qW4gY1n9JbgXMRsKkOiagOQGC.etuFBLx4xqmajMVvvreEV4mll7u', 0, 1, 1, 'xNtONde9E5NZYWxOjxv00rPdPD5IN6TlsRQiRMS0', '2024-10-03 02:23:03', '2024-10-05 13:08:49'),
(8, 'Hasin1223', 'hasin@gmail.com', 1524164310, NULL, '$2y$12$MjGCd3UbzUoGFhnDWI.tXu/QIDDrLN/BhR77.tLGcVgOA93ssoPHe', '$2y$12$aDzy/GcEnyf/GiR6CWl4Yu/UIOvevllTCuapOQEdVfy6YTt3Nhg9S', 0, 1, 0, 'vmBZvgiS2Wms439qsFHmE3VcRuCg530pvH6p4SX7', '2024-10-03 02:50:12', '2024-10-06 11:52:18'),
(9, 'Umair', 'umair@gmail.com', 9987678, '2024-10-03 03:42:02', '$2y$12$1E3ngi/GsvOoNkReJnfrv.CuQLRXkL7x4b6EMDwKZ9LI.hfF5XOZe', '$2y$12$aEvM3ThnZorNQn.SRCh2uOvNlTq/JhfhqibG4qihf20pWOrpVGfJK', 0, 0, 0, 'W3VG6UW485Ftuck9sJMuMEpcZS81VKSs0jOvgpZV', '2024-10-03 03:15:05', '2024-10-03 03:42:02'),
(10, 'Ruma Sultana', 'ruma@gmail.com', 123445667, NULL, '$2y$12$S5n4ohWLKRs/QRGtwnz4pOz4KCzwLk.xyY8V1XC45cxzOEHgdy/wS', '$2y$12$g.pRe9AiZYEp0tAABuFRG.jE7/jT.5gK1xXvrWPT0u3Qpn8w9fla.', 0, 1, 0, NULL, '2024-10-05 12:07:19', '2024-10-05 12:07:19'),
(11, 'Kazi Azad', 'azad@gmail.com', 1828000030, NULL, '$2y$12$TO1Xq1BSGu6SXuPOD8.Ck.03IrikOmEP/yMqsyjorEak/YB9YDcLS', '$2y$12$s/JjHUyQEMx/8.q8.1IRleaL9kVUDWvKMl/L2DNT0IwU.EjLSjkFG', 0, 1, 0, NULL, '2024-10-05 12:11:50', '2024-10-05 12:11:50'),
(12, 'kazi Mizan', 'mizan@gmail.com', 97743773, NULL, '$2y$12$nLLF4rV0RXnSQOl2v.9c1OyiShgOdCNt8trO/CRzJsBgCmJ1PFHDS', '$2y$12$t6IyG6lH8NAEkDtr4IjgYeMFoMVBV2Qe8FClkcJgCnzGGelRYgSgC', 0, 1, 1, NULL, '2024-10-05 13:32:46', '2024-10-08 15:35:59'),
(13, 'Test3', 'test3@gmail.com', 22334456, '2024-10-06 12:04:30', '$2y$12$cQsU3BxfhR.1eJEoJ7AIfOapGrkWqhPScjLitsISqjr2BrA99c5pO', '$2y$12$CdAX/UIWGP8BjN4n2ywE6.aaEG7DOlPQbBbsVlQgJT9J0wLkCAOXi', 0, 0, 1, 'pdczSKBipL1emfwbyGU9MFjE9d6vuxBHPjMNbCou', '2024-10-06 12:02:09', '2024-10-08 15:35:44'),
(14, 'test4', 'test4@gmail.com', 44332255, NULL, '$2y$12$TGy/Jpd9VzirDt6iIVA84O3U9.QeXjuyEPhlNdEC.dFxe.Mobcdhq', '$2y$12$2Rcabk2JQT0OboB1xjCOzO0TxlqxubV0Pnkk0tg1F8823.quRs2Ue', 0, 1, 1, NULL, '2024-10-06 12:05:24', '2024-10-08 15:35:39'),
(15, 'test5', 'test5@gmail.com', 6655777, NULL, '$2y$12$.qh4Zr9zOct5TKJNHbiYzewav6aOt7PbWbSz8nit6R81yCIm8UQ5K', '$2y$12$574.sG8.7A/PoNX6X9INpOKBjEbmqcvc5cPcJkuMwGTs1nchV2k96', 0, 1, 1, NULL, '2024-10-06 12:06:10', '2024-10-06 12:17:52'),
(16, 'test6', 'test6@gmail.com', 223311444, NULL, '$2y$12$owmNVnPodEeBAmPzSNQjueAUUJYaQagZLY9zn32gsY95nSYHTO7iu', '$2y$12$gruCFXc4kvYwxhK8O5mLpuUJmJPjegeD4VV6ozNU7ftzTfDGnlr/i', 0, 1, 1, NULL, '2024-10-06 12:06:55', '2024-10-06 12:17:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
