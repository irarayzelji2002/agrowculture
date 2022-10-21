-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 06:03 PM
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
-- Database: `agrowculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(30) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(80) NOT NULL,
  `birth_month` int(20) NOT NULL,
  `birth_day` int(20) NOT NULL,
  `birth_year` int(20) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(70) NOT NULL,
  `region` varchar(70) NOT NULL,
  `zip` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `first_name`, `last_name`, `email`, `password`, `birth_month`, `birth_day`, `birth_year`, `user_type`, `phone_number`, `address`, `city`, `region`, `zip`) VALUES
(4, 'jul', 'pascua', 'jul21@gmail.com', '9cc892a13ab565e8b3fe353e0efbeca1', 4, 1, 1985, 'Buyer', '09167039061', 'Km. 38 A Banca Banca Pulong Buhangin Santa Maria ', 'Bulacan', 'region3', 1234),
(5, 'Aliah', 'Esteban', 'Ae@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 10, 1, 2005, 'Buyer', '91235', '0', 'bulacan', 'idk', 1234),
(6, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0, '', '0', '0', '', '', 0),
(7, 'julia', 'pascua', 'jtpascua@student.apc.edu.ph', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1, 1985, 'Seller', '4234', '7978 TEKA ST SAN ANTONIO VILLAGE MAKATI', 'MAKTI', 'NCR', 2134);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
