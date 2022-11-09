-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 09:24 AM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(30) NOT NULL,
  `user_ID` int(100) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `user_ID`, `seller_name`, `category`, `product_name`, `product_price`, `product_image`, `product_desc`, `product_status`) VALUES
(4, 16, 'Julia Pascua', 'Vegetables', 'Carrots', '30', '1667197366_9905.png', 'Carrots', ''),
(6, 12, 'Myoui Myoui', 'DairyorEggs', 'Milk', '40', '1667485592_4618.png', 'milk ', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(100) NOT NULL,
  `transaction_status` char(255) NOT NULL,
  `product_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `business_name` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `v_image` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `first_name`, `last_name`, `email`, `password`, `business_name`, `user_type`, `phone_number`, `address`, `v_image`, `profile`) VALUES
(12, 'Myoui', 'Myoui', 'myoui@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ASDHAS', 'Seller', '09152234111', '37A Juan Luna UP Diliman', '', ''),
(16, 'Julia', 'Pascua', 'jp@gmail.com', '01cfcd4f6b8770febfb40cb906715822', 'KAHIT ANO', 'Seller', '432', 'hjehe', '1666539948_6425.', ''),
(19, 'Nayeon2', 'Twice', 'nayeon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'TWICE', 'Buyer', '09256427033', 'QUEZON CITY', '', ''),
(20, 'Niall', 'Horan', 'Nh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ONE D', 'Buyer', '09256427033', 'VILLAGE MAKATI CIT', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
