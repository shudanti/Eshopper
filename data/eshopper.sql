-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2015 at 01:14 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('a', 'b'),
('test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `category` int(11) NOT NULL,
  `Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `Name`, `price`, `image`, `category`, `Detail`) VALUES
(1, 'Easy Polo Black Edition', 56000, 'images/shop/product1.jpg', 1, 'Điện thoại thần thánh đến từ Samsung'),
(2, 'Easy-Care Stretch Poplin Shirt', 52000, 'images/shop/product2.jpg', 1, ''),
(3, 'Top Flite Mens Polo Style Shirt ', 40000, 'images/shop/product3.jpg', 2, ''),
(4, 'U.S. Polo Assn. Baby-Boys', 70000, 'images/shop/product4.jpg', 1, ''),
(5, 'Embroidered Leaves Vest Shirt', 57000, 'images/shop/product5.jpg', 2, ''),
(6, 'Calvin Klein', 37000, 'images/shop/product6.jpg', 3, ''),
(7, 'Kenneth Cole New York', 62000, 'images/shop/product7.jpg', 1, ''),
(8, 'Wrangler Rigid Denim Work', 53000, 'images/shop/product8.jpg', 2, ''),
(9, 'Lakin McKey Basic Denim Work', 38000, 'images/shop/product9.jpg', 2, ''),
(10, 'Kenneth Cole Reaction', 44000, 'images/shop/product10.jpg', 2, ''),
(11, 'Denim Cutout Bigshirt', 30000, 'images/shop/product11.jpg', 1, ''),
(12, 'EXPRESS Mens Rocco Slim Fit', 72000, 'images/shop/product12.jpg', 3, ''),
(13, 'Slim Fit Jeans', 58000, 'images/shop/product13.jpg', 2, ''),
(14, 'Silver Jeans', 45000, 'images/shop/product14.jpg', 1, ''),
(15, 'LRG Men''s RC', 56000, 'images/shop/product15.jpg', 3, ''),
(16, 'LRG Men''s RC T', 76000, 'images/shop/product16.jpg', 2, ''),
(17, 'Dickies Big & Tall Long', 80000, 'images/shop/product17.jpg', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE IF NOT EXISTS `oder` (
  `ID` int(11) NOT NULL,
  `Total` int(11) DEFAULT NULL,
  `user` varchar(15) CHARACTER SET utf8 NOT NULL,
  `ispay` bit(1) NOT NULL,
  `sent` tinyint(1) NOT NULL,
  `realname` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `city` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `comment` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`ID`, `Total`, `user`, `ispay`, `sent`, `realname`, `email`, `phone`, `address`, `city`, `comment`, `time`) VALUES
(1, 15000, 'test', b'1', 0, NULL, NULL, NULL, NULL, NULL, '', ''),
(2, 25000, 'David', b'0', 0, NULL, NULL, NULL, NULL, NULL, '', ''),
(16, 56, 'test', b'0', 0, NULL, NULL, NULL, NULL, NULL, '', ''),
(17, 37, 'test', b'0', 0, NULL, NULL, NULL, NULL, NULL, '', ''),
(18, 56, 'test', b'0', 0, NULL, NULL, NULL, NULL, NULL, '', ''),
(19, 56, 'test', b'0', 0, NULL, NULL, NULL, NULL, NULL, '', ''),
(20, 56, 'test', b'0', 0, NULL, NULL, NULL, NULL, NULL, '', ''),
(21, 56000, 'test', b'1', 0, NULL, NULL, NULL, NULL, NULL, '', ''),
(22, 56, 'test', b'0', 0, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(23, 361, 'test', b'1', 0, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(24, 150, 'test', b'1', 0, 'Shion', 'shudanti@gmail.com', '0945184265', '134 Nguyễn Du Quận 6', '0945184265', 'gui tan nha', ''),
(25, 496, 'test', b'1', 0, 'Shion', 'shudanti@gmail.com', '0945184265', '134 Nguyễn Du Quận 6', '0945184265', '', 'Tue, 23 Jun 2015 22:30:30 +0000'),
(26, 119, 'test', b'1', 0, 'Shion', 'shudanti@gmail.com', '0945184265', '134 Nguyễn Du Quận 6', '0945184265', '', 'Tue, 23 Jun 2015 22:31:04 +0000'),
(27, 56000, 'test', b'0', 0, NULL, NULL, NULL, NULL, NULL, NULL, '');

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
(25, 3, 2),
(25, 4, 3),
(25, 7, 1),
(25, 12, 2),
(26, 5, 1),
(26, 7, 1),
(27, 1, 1);

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`), ADD KEY `category` (`category`);

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
  ADD PRIMARY KEY (`name`), ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `oder_list_item`
--
ALTER TABLE `oder_list_item`
ADD CONSTRAINT `oder_list_item_ibfk_1` FOREIGN KEY (`ID_oder`) REFERENCES `oder` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `oder_list_item_ibfk_2` FOREIGN KEY (`ID_item`) REFERENCES `item` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
