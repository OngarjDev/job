-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 04:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `amphurs`
--

CREATE TABLE `amphurs` (
  `amphur_id` int(11) NOT NULL,
  `amphur_name` varchar(255) NOT NULL,
  `province_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amphurs`
--

INSERT INTO `amphurs` (`amphur_id`, `amphur_name`, `province_id`) VALUES
(1, 'เมืองสมุทรปราการ', 1),
(2, 'พระประแดง', 2);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `amphur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `district_name`, `amphur_id`) VALUES
(1, 'ลาดกระบัง', 1),
(2, 'พระสาทนิคร', 2);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`province_id`, `province_name`) VALUES
(1, 'กรุงเทพมหานคร'),
(2, 'เชียงใหม่');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `address` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `amphoe` varchar(255) NOT NULL,
  `districts` varchar(255) NOT NULL,
  `number` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `cpassword`, `role`, `address`, `province`, `amphoe`, `districts`, `number`, `img`) VALUES
(2, 'd', 'd@gmail.com', '$2y$10$xWEqEfraSs80uRF9UlbSzukuqIkL2qhnN0uHCaTC1Xc6eKDi0nORe', '', 'admin', '', '', '', '', '', ''),
(10, 'asdasd', 'sa@gmail.com', '123', '', 'user', ' asd', '1', '2', 'ตำบล', '', ''),
(11, 'fd', 'gf@gmail.com', '123', '', 'user', ' fd', '2', '1', '1', '', ''),
(12, 'asd', 'g@gmail.com', '456', '', 'user', ' sdf', '1', '2', '1', '', ''),
(13, 'lll', 'h@gmail.com', '$2y$10$UUSM4jPznSfFqAg0QXrrOOmV1DsJppm4keEfpoH9u8GwMxBiv3lZ.', '', 'user', ' gfhjgh', '1', '2', '1', '', 'http://yourdomain.com/uploads/185ba2fcd8f81db4ac91ab956dda409d.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amphurs`
--
ALTER TABLE `amphurs`
  ADD PRIMARY KEY (`amphur_id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`),
  ADD KEY `amphur_id` (`amphur_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amphurs`
--
ALTER TABLE `amphurs`
  MODIFY `amphur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amphurs`
--
ALTER TABLE `amphurs`
  ADD CONSTRAINT `amphurs_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`province_id`);

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`amphur_id`) REFERENCES `amphurs` (`amphur_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
