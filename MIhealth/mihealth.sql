-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 07:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mihealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `full_name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `full_name`, `email`, `password`) VALUES
(1, 'ingabire delphine', 'dephaingabire@gmail.com', 'IRAdu@12'),
(2, 'ingabire delphine', 'dephaingabire@gmail.com', 'IRAdu@12'),
(3, 'ewdsasd', 'dephaingabire@gmail.com', '123'),
(4, 'ewr', 'dephaingabire@gmail.com', '456'),
(5, 'MUNEZA Diane', 'diane@gmail.com', '2211'),
(6, 'RUKUNDO Ibrahim', 'ibra@gmail.com', '22115'),
(7, 'MUNEZA joselyne', 'jose@gmail.com', '1234'),
(8, 'ALINE', 'dephaingabire@gmail.com', '123'),
(9, 'ingabire delphine', 'ibra@gmail.com', '567'),
(10, 'ingabire delphine', 'ibra@gmail.com', '567'),
(11, 'ingabire delphine', 'ibra@gmail.com', '567'),
(12, 'ingabire delphine', 'ibra@gmail.com', '567'),
(13, 'ingabire delphine', 'jose@gmail.com', '890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
C:\Users\Depha\Downloads\local disk c\htdocs\MIhealth\diseases.css