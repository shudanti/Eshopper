-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 06:50 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`) VALUES
(1, 'Samsung'),
(2, 'Apple'),
(3, 'Sony');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `Name`, `price`, `image`, `category`) VALUES
(1, 'Easy Polo Black Edition', 56, 'images/shop/product1.jpg', 'Samsung'),
(2, 'Easy-Care Stretch Poplin Shirt', 52, 'images/shop/product2.jpg', 'Samsung'),
(3, 'Top Flite Mens Polo Style Shirt ', 40, 'images/shop/product3.jpg', 'Samsung'),
(4, 'U.S. Polo Assn. Baby-Boys', 70, 'images/shop/product4.jpg', 'Samsung'),
(5, 'Embroidered Leaves Vest Shirt', 57, 'images/shop/product5.jpg', 'Sony'),
(6, 'Calvin Klein', 37, 'images/shop/product6.jpg', 'Sony'),
(7, 'Kenneth Cole New York', 62, 'images/shop/product7.jpg', 'Sony'),
(8, 'Wrangler Rigid Denim Work', 53, 'images/shop/product8.jpg', 'Sony'),
(9, 'Lakin McKey Basic Denim Work', 38, 'images/shop/product9.jpg', 'Sony'),
(10, 'Kenneth Cole Reaction', 44, 'images/shop/product10.jpg', 'Apple'),
(11, 'Denim Cutout Bigshirt', 30, 'images/shop/product11.jpg', 'Apple'),
(12, 'EXPRESS Mens Rocco Slim Fit', 72, 'images/shop/product12.jpg', 'Apple'),
(13, 'Slim Fit Jeans', 58, 'images/shop/product13.jpg', 'Apple'),
(14, 'Silver Jeans', 45, 'images/shop/product14.jpg', 'Apple'),
(15, 'LRG Men''s RC', 56, 'images/shop/product15.jpg', 'Apple'),
(16, 'LRG Men''s RC T', 76, 'images/shop/product16.jpg', 'Apple'),
(17, 'Dickies Big & Tall Long', 80, 'images/shop/product17.jpg', 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `realname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `email`, `phone`, `address`, `city`, `realname`) VALUES
('das', 'asdasd', 'da@dd', '096512425', '123 Quận 1', 'TP.HCM', NULL),
('David', '1234', 'shudanti@gmail.com', '0962154721', '32 Quận 5', 'TP.HCM', NULL),
('s', 'a', 'mrsa@gmail.com', '0945184265', '134 Nguyễn Du Quận 6', 'TP.HCM', 'Shion'),
('sada', '123', 'sdf@sdfdd', '', '', NULL, NULL),
('Vern', '1234', 's123@gmail.com', '', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
