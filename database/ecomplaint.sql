-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2019 at 08:01 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomplaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `comregister`
--

DROP TABLE IF EXISTS `comregister`;
CREATE TABLE IF NOT EXISTS `comregister` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `cdate` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comregister`
--

INSERT INTO `comregister` (`name`, `email`, `gender`, `district`, `dob`, `cdate`, `phone`, `place`, `address`, `discription`) VALUES
('akhil', 'akhilkanna045@gamil.com', 'Male', 'Palakkad', '2018-10-17', '2019-02-12', '9646466', 'ottapalam', 'jdosjodsihdi', 'kdishikdhihdc'),
('devan', 'dasdevan@gmail.com', 'Male', 'Palakkad', '1999-02-13', '2018-01-16', '9874563210', 'kulappuly', 'address illa', 'theppu'),
('sreeja c', 'sreejac1999@gmail.com', 'Female', 'Palakkad', '1999-02-04', '2019-01-21', '8606241358', '19th mile ottapalam', 'cholayil house \r\n19 th mile palappuram\r\nottapalam', '2 dangerous persons following me at 19th mile school road, they blackmailing me .'),
('annop', 'akhilkanna045@gamil.com', 'Male', 'Malapuram', '2019-02-06', '2019-02-06', '896326', 'ottapalam', 'hudchi', 'robery');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

DROP TABLE IF EXISTS `police`;
CREATE TABLE IF NOT EXISTS `police` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `jdate` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `station` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`id`, `name`, `jdate`, `email`, `phone`, `station`, `category`, `password`, `gender`, `district`) VALUES
(1, 'akhil', '2019-02-04', 'akhil@gmail.com', 5454545, 'ottapalm', 'si', '123', 'Male', 'Palakkad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `adhaarno` int(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `adhaarno` (`adhaarno`),
  UNIQUE KEY `username` (`username`,`email`,`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `adhaarno`, `email`, `phone`, `password`) VALUES
(5, 'jhgfkuf', 4, 'sreeja@gmil.com', 4, '4'),
(4, 'vishnu', 984, 'akhi45@gmail.com', 48494656, '123'),
(6, 'vishnu2', 266641, '3kakhi45@gmail.com', 2, '2'),
(7, 'abhay', 3454, 'abhay@gmail.com', 22, 'abhay'),
(8, 'rahul', 89562, 'rahulp@gmail.com', 4849465, 'rahul'),
(9, 'anoop', 45503650, 'rahulp@gmail.com', 989562, 'asd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
