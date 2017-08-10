-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2017 at 09:43 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `UID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `IC` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `photolink` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UID`, `FirstName`, `LastName`, `IC`, `Phone`, `Address`, `Email`, `photolink`) VALUES
(1, 'Chong', 'Mien May', '870430055642', '0129002343', 'Taman Sri Serdang', 'mmchong87@gmail.com', 'profilepic/870430055642.jpg'),
(2, 'Lim', 'Jeat Kee', '1234', '123456', 'Taman Bahagia', 'may_chong87@yahoo.com', 'profilepic/1234.jpg'),
(3, 'May', 'Chong', '123456', '123456', 'Taman Sega', 'mienmay@hotmail.com', 'profilepic/123456.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UID`, `username`, `password`, `role`) VALUES
(1, 'mmchong87@gmail.com', '12345', 1),
(2, 'may_chong87@yahoo.com', '123', 1),
(3, 'mienmay@hotmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`IC`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
