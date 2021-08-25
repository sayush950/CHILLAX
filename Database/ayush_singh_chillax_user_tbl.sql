-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 05:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayush_singh_chillax`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayush_singh_chillax_user_tbl`
--

CREATE TABLE `ayush_singh_chillax_user_tbl` (
  `id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ayush_singh_chillax_user_tbl`
--

INSERT INTO `ayush_singh_chillax_user_tbl` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Ayush', 'Singh', 'sayush950@gmail.com', '1234'),
(2, 'killer', 'mrb', 'as@m.com', 'abcd1234'),
(3, 'Aarju', 'Singh', 'sayush950@gmail.com', '1234'),
(4, 'a', 'mrb', 'sayush950@gmail.com', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayush_singh_chillax_user_tbl`
--
ALTER TABLE `ayush_singh_chillax_user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayush_singh_chillax_user_tbl`
--
ALTER TABLE `ayush_singh_chillax_user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
