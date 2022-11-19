-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 08:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `user_ID`, `seller_name`, `category`, `product_name`, `product_price`, `product_image`, `product_desc`) VALUES
(15, 91, 'Rance Zoleta', 'Fruits', 'Avocado', '125', '1668702058_3376.png', 'Fresh Avocado');

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
  `profile` varchar(500) NOT NULL,
  `v2_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `first_name`, `last_name`, `email`, `password`, `business_name`, `user_type`, `phone_number`, `address`, `v_image`, `profile`, `v2_image`) VALUES
(90, 'Janaya', 'Cruz', 'jcruz@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', 'Jcookie', 'Buyer', '09393554310', 'Km. 40 A Santa Maria Bulacan', '1668701789_2371.jpg', '1668702082_8686.png', '1668701789_7548.'),
(91, 'Rance', 'Zoleta', 'rance123@gmail.com', '5e8667a439c68f5145dd2fcbecf02209', 'Fresh Pick', 'Seller', '09876543890', '1233 Quiricada Street Sta. Cruz, Manila', '1668701876_7687.jpg', '1668843029_9047.png', '1668701876_6558.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
