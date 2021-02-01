-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 10:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `datebirth` varchar(25) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `country` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zipcode` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `code_phonenum` varchar(25) NOT NULL,
  `phonenum` varchar(25) NOT NULL,
  `use_library` varchar(250) NOT NULL,
  `sec_access` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `firstname`, `lastname`, `datebirth`, `address1`, `address2`, `country`, `city`, `state`, `zipcode`, `email`, `code_phonenum`, `phonenum`, `use_library`, `sec_access`) VALUES
(1, 'Anisah', 'Anuar', '13-09-1996', 'Lot 3600A, Jalan Batu 7 Sijangkang', '', 'Malaysia', 'Selangor', 'Selangor', '42500', 'anisah.anuar09@gmail.com', '019', '9805233', 'reference', 'magazine'),
(31, 'Atsilah ', 'Anuar', '23-07-1999', 'No. 18 Jalan Sri Sarawak 12 Andalas', '', 'Malaysia', 'Selangor', 'Selangor', '41200', 'atslh.nr@gmail.com', '019', '3709550', 'reference,in-house reading', 'non-fiction,electronic'),
(32, 'Ahmad', 'Alif', '31-01-2001', 'No. 17 Oxford Street', '', 'Belgium', 'Asses', 'Asses', 'E15', 'alif99@gmail.com', '14', '6381292', 'reference,in-house reading', 'magazine,non-fiction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
