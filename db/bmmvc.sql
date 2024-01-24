-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 06:27 PM
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
-- Database: `bmmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`) VALUES
(3, 'php basic', '2024-01-18 15:55:31'),
(4, 'php intermediate', '2024-01-18 15:55:41'),
(5, 'php advanced', '2024-01-18 15:55:48'),
(6, 'javascript', '2024-01-18 15:56:01'),
(7, 'laravel', '2024-01-18 15:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Aung Myo Oo', 'aungmyooo@gmail.com', '$2y$10$R2EdJqZr3Y/c.f9deslCNefIy7Xh1YHS5F86h578h/CZhmUfzCSES', '2024-01-14 16:24:23'),
(2, 'Pann Nu', 'pannu@gmail.com', '$2y$10$AXx9HULDggItBo2HTaOAnuszBP4ZUloi/AXzPjfdT5j0vLuIaXZsK', '2024-01-14 16:32:49'),
(3, 'Pann Nu', 'pannu@gmail.com', '$2y$10$/3TTqwuDANyCqGFcfhYcfOS8YNXuBTTJZc7hhcqBBUHIJrqKl1h/O', '2024-01-14 16:33:31'),
(4, 'Pann Nu', 'pannu@gmail.com', '$2y$10$MPQjK3VgTbJKSaa98nxzp.CNFtflVTO3DS99AdxAEtO1Mt4wle8fu', '2024-01-14 16:34:21'),
(5, 'test', 'test@gmail.com', '$2y$10$w9AdjEcekbDq2hP9J1TYMOCgWhsby6iyZqjn8M7quKcHee1KqQQ9m', '2024-01-14 16:35:01'),
(6, 'test', 'test@gmail.com', '$2y$10$kyH5F6RUhGghDppi0wzvgeZT2CPkwSYa5p.yTuM1ClMYb6lvKreJG', '2024-01-14 16:35:29'),
(7, 'test', 'test@gmail.com', '$2y$10$kmFP321nSr6EzuS0aXsnN.vKiVXfzmj0i/Yz9Qb4X3OpkB64m6u2y', '2024-01-14 16:36:17'),
(8, 'test', 'test@gmail.com', '$2y$10$9N81dKdAcHgIvpTdeblLXOYOhJIkjp6LWWvS9kj3jZKEJBfPYXj9m', '2024-01-14 16:36:51'),
(9, 'tester', 'tester@gmail.com', '$2y$10$5BkX045vkenQpWKUIpRb..JWSn.9cLYJzKEhD9.VjzAojVICh.3pe', '2024-01-15 15:33:26'),
(10, 'amo', 'amo@gmail.com', '$2y$10$WaMafyLtvqI4HDwoYYfZ1u18q3Hv2S6MSt8N7ZuBNBV.p6WecFdWy', '2024-01-15 15:34:10'),
(11, 'amo', 'amo@gmail.com', '$2y$10$Vbb8r91Jj1see0QveeYsYOQWgeycp/336wsAVnZ.SClKr8VBX4NJW', '2024-01-15 15:37:52'),
(12, 'aung', 'aung@gmail.com', '$2y$10$1d1bq2udJMI4l0YK5dBGJ.BNNBAFEdfrsnTL.ITWhqb8HpTIXk9MC', '2024-01-15 16:03:55'),
(13, 'koko', 'koko@gmail.com', '$2y$10$.8wqzdTxmG2aduxsMsTDEexmQ4NRqx5/wIfx/YPPvIND0YtwUng9S', '2024-01-15 16:22:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
