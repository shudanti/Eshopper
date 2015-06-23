-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2015 at 03:03 PM
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
  `category` text NOT NULL,
  `Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `Name`, `price`, `image`, `category`, `Detail`) VALUES
(1, 'Easy Polo Black Edition', 56, 'images/shop/product1.jpg', 'Samsung', 'Điện thoại thần thánh đến từ Samsung'),
(2, 'Easy-Care Stretch Poplin Shirt', 52, 'images/shop/product2.jpg', 'Samsung', ''),
(3, 'Top Flite Mens Polo Style Shirt ', 40, 'images/shop/product3.jpg', 'Samsung', ''),
(4, 'U.S. Polo Assn. Baby-Boys', 70, 'images/shop/product4.jpg', 'Samsung', ''),
(5, 'Embroidered Leaves Vest Shirt', 57, 'images/shop/product5.jpg', 'Sony', ''),
(6, 'Calvin Klein', 37, 'images/shop/product6.jpg', 'Sony', ''),
(7, 'Kenneth Cole New York', 62, 'images/shop/product7.jpg', 'Sony', ''),
(8, 'Wrangler Rigid Denim Work', 53, 'images/shop/product8.jpg', 'Sony', ''),
(9, 'Lakin McKey Basic Denim Work', 38, 'images/shop/product9.jpg', 'Sony', ''),
(10, 'Kenneth Cole Reaction', 44, 'images/shop/product10.jpg', 'Apple', ''),
(11, 'Denim Cutout Bigshirt', 30, 'images/shop/product11.jpg', 'Apple', ''),
(12, 'EXPRESS Mens Rocco Slim Fit', 72, 'images/shop/product12.jpg', 'Apple', ''),
(13, 'Slim Fit Jeans', 58, 'images/shop/product13.jpg', 'Apple', ''),
(14, 'Silver Jeans', 45, 'images/shop/product14.jpg', 'Apple', ''),
(15, 'LRG Men''s RC', 56, 'images/shop/product15.jpg', 'Apple', ''),
(16, 'LRG Men''s RC T', 76, 'images/shop/product16.jpg', 'Apple', ''),
(17, 'Dickies Big & Tall Long', 80, 'images/shop/product17.jpg', 'Apple', '');

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE IF NOT EXISTS `oder` (
  `ID` int(11) NOT NULL,
  `Total` int(11) DEFAULT NULL,
  `user` varchar(15) NOT NULL,
  `ispay` bit(1) NOT NULL,
  `sent` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`ID`, `Total`, `user`, `ispay`, `sent`) VALUES
(1, 15000, 'test', b'1', 0),
(2, 25000, 'David', b'0', 0),
(16, 56, 'test', b'0', 0),
(17, 37, 'test', b'0', 0),
(18, 56, 'test', b'0', 0),
(19, 56, 'test', b'0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oder_list_item`
--

CREATE TABLE IF NOT EXISTS `oder_list_item` (
  `ID_oder` int(11) NOT NULL,
  `ID_item` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oder_list_item`
--

INSERT INTO `oder_list_item` (`ID_oder`, `ID_item`, `number`) VALUES
(1, 2, 1),
(1, 14, 2),
(16, 1, 1),
(16, 3, 1),
(16, 5, 1),
(17, 3, 1),
(17, 6, 1),
(17, 12, 1),
(17, 14, 1),
(17, 15, 1),
(18, 1, 1),
(19, 1, 1),
(19, 11, 1),
(19, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(15) NOT NULL,
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
('David', '1234', 'shu@gmail.com', '0962154721', '32 Quận 5', 'TP.HCM', NULL),
('sada', '123', 'sdf@sdfdd', '', '', NULL, NULL),
('test', 'a', 'shudanti@gmail.com', '0945184265', '134 Nguyễn Du Quận 6', 'TP.HCM', 'Shion'),
('Vern', '1234', 's123@gmail.com', '', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `oder_list_item`
--
ALTER TABLE `oder_list_item`
  ADD PRIMARY KEY (`ID_oder`,`ID_item`), ADD KEY `ID_item` (`ID_item`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `oder_list_item`
--
ALTER TABLE `oder_list_item`
ADD CONSTRAINT `oder_list_item_ibfk_1` FOREIGN KEY (`ID_oder`) REFERENCES `oder` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `oder_list_item_ibfk_2` FOREIGN KEY (`ID_item`) REFERENCES `item` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
