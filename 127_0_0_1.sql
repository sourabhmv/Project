-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 10:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--
CREATE DATABASE IF NOT EXISTS `signup` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `signup`;

-- --------------------------------------------------------

--
-- Table structure for table `photo_tb`
--

CREATE TABLE `photo_tb` (
  `id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_tb`
--

INSERT INTO `photo_tb` (`id`, `cat`, `image`) VALUES
(1, 'Animal', 'photo/an_1.jpg'),
(2, 'Animal', 'photo/an_2.jpg'),
(3, 'Animal', 'photo/an_3.jpg'),
(4, 'Animal', 'photo/an_4.jpg'),
(5, 'Animal', 'photo/an_6.jpg'),
(6, 'Animal', 'photo/an_7.jpg'),
(7, 'Animal', 'photo/an_9.jpg'),
(8, 'Animal', 'photo/an_10.jpg'),
(9, 'Animal', 'photo/an_11.jpg'),
(10, 'Animal', 'photo/an_14.jpg'),
(11, 'Animal', 'photo/an_15.jpg'),
(12, 'Animal', 'photo/an_12.jpg'),
(13, 'Actors', 'photo/m1.jpg'),
(14, 'Actors', 'photo/m2.jpg'),
(15, 'Actors', 'photo/m3.jpg'),
(16, 'Actors', 'photo/m4.jpg'),
(17, 'Actors', 'photo/m5.jpg'),
(18, 'Actors', 'photo/m6.jpg'),
(19, 'Actors', 'photo/m7.jpg'),
(20, 'Actors', 'photo/m8.jpg'),
(21, 'Actors', 'photo/m9.jpg'),
(22, 'Actors', 'photo/m10.jpg'),
(23, 'Actors', 'photo/m11.jpg'),
(24, 'Actors', 'photo/m12.jpg'),
(27, 'Sports', 'photo/ss_2.jpg'),
(28, 'Sports', 'photo/ss_3.jpg'),
(29, 'Sports', 'photo/ss_4.jpg'),
(30, 'Sports', 'photo/ss_5.jpg'),
(31, 'Sports', 'photo/ss_6.jpg'),
(32, 'Sports', 'photo/ss_7.jpg'),
(33, 'Sports', 'photo/ss_8.jpg'),
(34, 'Sports', 'photo/ss_9.jpg'),
(35, 'Sports', 'photo/ss_10.jpg'),
(36, 'Sports', 'photo/ss_11.jpg'),
(37, 'Sports', 'photo/ss_1.jpg'),
(38, 'Sports', 'photo/ss_12.jpg'),
(39, 'Friend', 'photo/wwe_1.jpg'),
(40, 'Friend', 'photo/wwe_2.jpg'),
(41, 'Friend', 'photo/wwe_3.jpg'),
(42, 'Friend', 'photo/wwe_4.jpg'),
(43, 'Friend', 'photo/wwe_5.jpg'),
(44, 'Friend', 'photo/wwe_6.jpg'),
(45, 'Friend', 'photo/wwe_7.jpg'),
(46, 'Friend', 'photo/wwe_8.jpg'),
(47, 'Friend', 'photo/wwe_9.jpg'),
(48, 'Friend', 'photo/wwe_10.jpg'),
(49, 'Friend', 'photo/wwe_11.jpg'),
(50, 'Friend', 'photo/wwe_12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup_tb`
--

CREATE TABLE `signup_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_tb`
--

INSERT INTO `signup_tb` (`id`, `name`, `phone`, `email`, `username`, `password`) VALUES
(16, 'sourabh', '9497754152', 'sourabhmvmo@gmail.com', '', '1316');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo_tb`
--
ALTER TABLE `photo_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_tb`
--
ALTER TABLE `signup_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photo_tb`
--
ALTER TABLE `photo_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `signup_tb`
--
ALTER TABLE `signup_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
