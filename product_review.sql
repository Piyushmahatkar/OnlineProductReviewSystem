-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Apr 21, 2018 at 10:18 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PID` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `title`, `category`) VALUES
(1, 'game of thrones', 'books'),
(2, '50 shades of grey', 'books'),
(3, 'harry potter', 'books'),
(4, 'mist born', 'books'),
(5, 'kingkiller', 'books'),
(6, 'stormlight', 'books'),
(7, 'beats headphones', 'electronics'),
(8, 'galaxy S7', 'electronics'),
(9, 'galaxy S9', 'electronics'),
(10, 'iphone5', 'electronics'),
(11, 'iphone-x', 'electronics'),
(12, 'jbl speakers', 'electronics'),
(13, 'chair', 'home furniture'),
(14, 'showcase', 'home furniture'),
(15, 'study-table', 'home furniture'),
(16, 'table', 'home furniture'),
(17, 'tv-stand', 'home furniture'),
(18, 'african-outfits', 'mens'),
(19, 'fossil-watch', 'mens'),
(20, 'kurta', 'mens'),
(21, 'nike-shoes', 'mens'),
(22, 'ray ban-glasses', 'mens'),
(23, 'wingtip-dress-shoes', 'mens'),
(24, 'Kookaburra-Bat', 'sports'),
(25, 'NFL-jersey', 'sports'),
(26, 'puma-sports-shoes', 'sports'),
(27, 'sports-cycle', 'sports'),
(28, 'table-tennis-bat', 'sports'),
(29, 'tennis-racket', 'sports'),
(30, 'kurta', 'womens'),
(31, 'omega-womens-watch', 'womens'),
(32, 'Pumps-womens-shoes', 'womens'),
(33, 'ray-bans-glasses', 'womens'),
(34, 'skirt', 'womens');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `PID` int(5) NOT NULL,
  `UID` int(5) NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`PID`, `UID`, `review`, `rating`) VALUES
(1, 1, 'good', 3),
(1, 3, 'nice product', 4),
(2, 1, 'amazing', 3),
(2, 3, 'awesome', 5),
(3, 1, 'poor', 1),
(3, 4, 'likable', 2),
(4, 2, 'good', 3),
(4, 3, 'good', 4),
(5, 1, 'awesome', 5),
(5, 3, 'like', 5),
(6, 1, 'poor', 2),
(6, 2, 'good', 4),
(7, 1, 'very good', 3),
(7, 3, 'nice', 4),
(8, 1, 'good', 3),
(8, 3, 'amazing', 5),
(9, 1, 'ok', 3),
(9, 4, 'good', 3),
(10, 4, 'like', 4),
(11, 4, 'pass', 2),
(12, 1, 'awesome', 5),
(12, 2, 'good', 5),
(13, 1, 'good', 2),
(14, 1, 'good', 1),
(16, 3, 'good', 3),
(17, 1, 'good', 5),
(18, 3, 'good', 4),
(19, 2, 'good', 1),
(20, 4, 'good', 5),
(22, 3, 'good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UID` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `username`, `email`, `password`) VALUES
(1, 'saurabh', 'saurabh@gmail.com', 'saurabh01'),
(2, 'aadish', 'aadish@gmail.com', 'aadish01'),
(3, 'piyush', 'piyush@gmail.com', 'piyush01'),
(4, 'abhishek', 'abhishek@gmail.com', 'abhishek01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`PID`,`UID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `PID` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`),
  ADD CONSTRAINT `UID` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
