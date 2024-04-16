-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 09:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedp`
--

-- --------------------------------------------------------

--
-- Table structure for table `wedp`
--

CREATE TABLE `wedp` (
  `id` int(11) NOT NULL COMMENT '1',
  `name` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedp`
--

INSERT INTO `wedp` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(14, 'anmol', 'anmol6@gmail.com', '9823332132', '123'),
(15, 'Ashish', 'ashish456@gmail.com', '9821567699', '122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wedp`
--
ALTER TABLE `wedp`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wedp`
--
ALTER TABLE `wedp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
