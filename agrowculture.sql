-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 08:19 AM
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
(18, 98, 'Joe Mata', 'Fruits', 'Avocado', '120', '1669357292_8977.png', 'Fresh Pick Avocado (ONHAND)'),
(19, 98, 'Joe Mata', 'DairyorEggs', 'Fresh Milk', '100', '1669357345_8464.png', 'Fresh Cow Milk (ONHAND)'),
(20, 99, 'Louisse Pasban', 'Fruits', 'Banana', '75', '1669357422_3977.png', 'Fresh Bananas from Laguna'),
(21, 99, 'Louisse Pasban', 'DairyorEggs', 'Pineapple', '100', '1669357470_5765.png', 'Pineapple (NEW STOCK)'),
(22, 99, 'Louisse Pasban', 'DairyorEggs', 'Tomato', '35', '1669357508_6649.png', 'Fresh pick tomato');

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
(97, 'Ellaine', 'Santorce', 'esantorce@gmail.com', '0192023a7bbd73250516f069df18b500', 'E-Fresh', 'Buyer', '09457066598', 'Plaza Libertad, Iloilo City', '1669356876_2834.png', '1669358495_9283.png', '1669356876_8562.'),
(98, 'Joe', 'Mata', 'joemata@gmail.com', '202cb962ac59075b964b07152d234b70', 'Farmed Goods', 'Seller', '09393554310', 'Cabalaoangan Norte, Rosales, Pampanga', '1669357118_5328.png', '1669358037_3068.png', '1669357118_5788.'),
(99, 'Louisse', 'Pasban', 'louisse@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Glow Farms', 'Seller', '09123499791', 'Batasan Hills, Quezon City', '1669357233_9732.png', '1669357233_9732.png', '1669357233_5848.');

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
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
