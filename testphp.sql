-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2021 at 10:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employ`
--

CREATE TABLE `employ` (
  `id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_lastname` varchar(50) NOT NULL,
  `e_tel` int(11) NOT NULL,
  `e_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employ`
--

INSERT INTO `employ` (`id`, `role`, `e_name`, `e_lastname`, `e_tel`, `e_address`) VALUES
(1, 'eee', 'ee', 'eee', 22, 'ddd'),
(2, 'gbf', 'sdfdsf', 'sss', 22, 'ddd'),
(3, 'gbf', 'sdfdsf', 'sss', 22, 'ddd'),
(4, 'rr', 'rrr', 'rr', 3333, 'rrr'),
(5, 'rr', 'rrr', 'rr', 3333, 'rrr'),
(6, 'rr', 'rrr', 'rr', 3333, 'rrr'),
(7, 'rr', 'rrr', 'rr', 3333, 'rrr'),
(8, 'rr', 'rrr', 'rr', 3333, 'rrr'),
(9, 'rr', 'rrr', 'rr', 3333, 'rrr'),
(10, 'rr', 'rrr', 'rr', 3333, 'rrr'),
(11, 'rr', 'rrr', 'rr', 3333, 'rrr'),
(12, '', 'ww', 'ww', 3333, 'ww'),
(13, '', 'ww', 'ww', 3333, 'ww'),
(14, '', '', 'ww', 3333, 'ww'),
(15, '', '', 'ww', 3333, 'ww'),
(16, '', '', 'ww', 3333, 'ww'),
(17, '', 'qer', 'qwer', 333, '33'),
(18, '', 'ssss', 'sss', 333, 'aa'),
(19, '', 'sss', 'sss', 333, 'ssss'),
(20, '', 'eee', 'www', 389897, 'fdgh'),
(21, 'employee', '1111', '111', 111, '111');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `name`, `lastname`, `tel`, `address`) VALUES
(8, 'eee', 'eee', 222, 'eee'),
(9, 'eee', 'eee', 222, 'eee'),
(10, 'www', 'ww', 22, '2ww'),
(11, 'ss', 'www', 1, 'padppdjjfjfj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employ`
--
ALTER TABLE `employ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employ`
--
ALTER TABLE `employ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
