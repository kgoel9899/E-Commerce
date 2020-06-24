-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 24, 2020 at 09:32 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Nikon DSLR', 40000),
(3, 'Sony DSLR', 45000),
(4, 'Olympus DSLR', 50000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, '1', '1', 'c81e728d9d4c2f636f067f89cc14862c', '1', '1', '1'),
(2, 'a', 'a@s.com', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1', '1'),
(3, '11', '11', '6512bd43d9caa6e02c990b0a82652dca', '11', '11', '11'),
(4, '2', '2', 'c81e728d9d4c2f636f067f89cc14862c', '2', '2', '2'),
(5, '3', '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3', '3', '3'),
(6, '8', '8', 'c9f0f895fb98ab9159f51fd0297e236d', '8', '8', '8'),
(7, 'Kshitij', 'abc@abc.com', '299359fbfd331df294493f5b0746c5bd', '9999999999', 'asdf', 'asdf'),
(8, 'asdfvsdcx', 'asd@as.com', 'f28907fd1066889e593a1184605f7bd1', '9000000000', 'waesfdvcxz', 'wdesfsawe'),
(9, 'efsdaewfdaef', 'asfd@sdz.com', '27698e4dc6ad329004e6aff852f17558', '9999999999', 'frgfsgbvf', 'werafdsddfs'),
(10, 'werfd', 'aewrdfa@werfg.com', 'e13ab6ea9f21f372cc01cf786eec71bd', '9999999999', 'sdsadfv', '\'Nir\', 000'),
(11, 'abc asdf', 'asdfffss@sdf.com', '1d8a536bddf90fd8f749fcbe2eb737f4', '9999999999', 'desfvgbh', 'wearfd\'eardfg\''),
(12, 'Kshitij Goel', 'aedfgbghrew@wdfgg.com', 'dc02e1d306cac331fc764d2d306e55cc', '9999999999', 'NNNNN', 'Flat No'),
(13, 'Kshitij G', 'abcd123@abc.com', 'f72a6016e00b6628b5f2bf05bf7b4e87', '9999999999', 'abcd', 'abcd\'');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 4, 1, 'Added to cart'),
(8, 4, 1, 'Added to cart'),
(9, 4, 1, 'Added to cart'),
(18, 1, 3, 'Confirmed'),
(21, 1, 6, 'Confirmed'),
(25, 1, 10, 'Confirmed'),
(26, 1, 11, 'Confirmed'),
(27, 1, 12, 'Confirmed'),
(28, 1, 5, 'Confirmed'),
(29, 1, 9, 'Confirmed'),
(31, 1, 3, 'Confirmed'),
(32, 12, 2, 'Confirmed'),
(33, 12, 3, 'Confirmed'),
(34, 13, 2, 'Confirmed'),
(36, 13, 7, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
