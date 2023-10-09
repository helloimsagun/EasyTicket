-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2023 at 12:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyticket`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_db`
--

CREATE TABLE `movie_db` (
  `movieId` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieName` varchar(100) NOT NULL,
  `movieGenre` varchar(100) NOT NULL,
  `movieDuration` varchar(100) NOT NULL,
  `movieRel` date NOT NULL,
  `movieDirector` varchar(100) NOT NULL,
  `movieActors` varchar(100) NOT NULL,
  `movieDescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_db`
--

INSERT INTO `movie_db` (`movieId`, `movieImg`, `movieName`, `movieGenre`, `movieDuration`, `movieRel`, `movieDirector`, `movieActors`, `movieDescription`) VALUES
(29, 'img/liger.jpg', 'Liger', 'Action, Drama, Romace', '140', '2022-09-06', 'Puri Jagannadh', 'Mike Tyson, Vijay Deverakonda, Ananya Panday', 'A story about martial arts, dreams and star crossed lovers. Liger is an MMA fighter who trains hard and rises up the ranks with one goal in mind, to fight like his idol, world renowned MMA fighter Mark Anderson and get noticed by him.'),
(30, 'img/Prakash.jpg', 'Prakash', 'Drama', '125', '2022-09-04', ' Dinesh Raut', 'Pradeep Khadka, Deeya Maskey, Renu Yogi', 'An educated young boy from remote Nepal who dreams of becoming a teacher in a government school, the story of his struggle to fulfill his dream amid st economic hardships.'),
(31, 'img/karthikeya-2.jpg', 'Karthikeya 2', 'Action, Adventure, Fantasy', '150', '2022-09-04', ' Chandoo Mondeti', 'Nikhil Siddharth, Harsha Chemudu, Darbha, Appaji Ambarisha', 'A sequel to mystic thriller Karthikeya, which deals with the personal problems of Karthik and how he comes out of them. His pursuit of the truth leads him to find out the power of Indian ancient system and Tatva of Lord Sri Krishna.'),
(32, 'img/Structured-approach-to-SDLC-Waterfall-Model.png', 'hhhh', 'sss', '9911', '2022-09-04', 'me', 'test2', 'qqqq');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`) VALUES
(1, 'test1', 'test1@gmail.com', '987654321', '$2y$10$nMOID2iDePLEA5R.828zYOmCkuJOWMLBxt1QWVCW0qnTTleWjxHpG', '$2y$10$Zve24m99yo8YYPOg3zlxme0OoQoApI6vhIIxmHUMvwOGgxHo80kTS'),
(3, 'demo', 'demo@gmail.com', '987654321', '$2y$10$SwuMjtB5kU0gLfFvdiQmHewOFYcHtmsV0NiKuRc9WU9YjAzWIeqwu', '$2y$10$yCxOjenL8ynu1PvydeNWFuZ2wRQ6KJMptQVl5SGGWuBQMfsxSXOrG'),
(5, 'nischalraz', 'nischalrzbsnt0@gmail.com', '9869117848', '$2y$10$A7sehiItq5aFjYOUwVpNV.6lw.6vYMhoSOVBh5l53QekpH0FXxO9.', '$2y$10$PR.t1eW/K/TdkG75ADABwurPNwGRjIzmsDT2EeEHEpdgmolGPu1tm'),
(7, 'nccs', 'userme@gmail.com', 'kkkk', '$2y$10$N/OZ9dgzvjbsDRCCS3aHae/qAX5m6aKYkuqZoR35Zt6pB1Iiq13Ji', '$2y$10$71lM.nPpXgtaht6rsvQyjuKmSNLB2oCahUGtlC.yeIQI/nri.ivm6'),
(8, 'hhhh', 'loonknight@gmail.com', 'hhhhh', '$2y$10$JXMb/BKw/Flka9DNQbiFhOtufNXPvCXJaxWZSPjkPULulevU7UXFm', '$2y$10$BG2NNigOwA4wOypiXGJD1e0L7Y4uJY1udUJAVoZq6CqFDSyV7ilkm'),
(9, 'test', 'test@test.com', 'test', '$2y$10$z1No/nT/oKwvjTpZAKuGHOPVqssoMR4uf/quGl6GxUZjuaryCPize', '$2y$10$VRijODvB/xxGybueQjr9SuKiZFmy9Yel0iY999WBIeixchPfAP3vi'),
(10, 'tst2', 'test2@gmail.com', '9876543210', '$2y$10$AuV8eiUEq3E19kmbmghtNO.pVEVhuEcQMdaASYJHyDzqsem7DmXvW', '$2y$10$kjsHbLQo6OlhVDMNBsdVVuT10ggz7ePp7F0S3bhkz5IVVUZTyff6m'),
(11, 'nisha', 'nisha@gmail.com', '9845678765', '$2y$10$dAVdoUSZcKR3yEVZhuTOeeMy40Zh32qUvVHIYsqAjQQJLFtShVGPC', '$2y$10$nxy0L5R.9cIkP5jVFVONzuQZ9JCMGwDhdsXKSoDjFtaa.G8Z8/6.S');

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
-- Indexes for table `movie_db`
--
ALTER TABLE `movie_db`
  ADD PRIMARY KEY (`movieId`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movie_db`
--
ALTER TABLE `movie_db`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
