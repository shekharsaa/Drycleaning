-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 02:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`id`, `email`, `pass`) VALUES
(2, 'admin@gmail.com', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `mid` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`id`, `name`, `mobile`, `email`, `msg`, `mid`, `services`, `date`, `time`) VALUES
(13, 'kamal', '2147483647', 'kamal@gmail.com', 'jamsher', '', 'Dry Cleaning', '2020-02-02', '9.00AM to 12.00PM'),
(14, 'Anjali ', '2147483647', 'anjali@gmail.com', 'h.no 208 GGS Nagar Jalandhar', 'harris@gmail.com', 'Laundary', '2020-06-26', '3.00PM to 6.00PM'),
(15, 'akash', '2147483647', 'ak@gmail.com', 'Nakoder Model town', '16', 'Esteem Press', '2020-07-10', '12.00PM to 3.00PM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `msg`) VALUES
(1, ' chander shekhar', 'Shekhar@gmail.com', '2147483647', 'hlo everyone '),
(2, ' ', '', '0', ''),
(3, ' Akash', 'ak@gmail.com', '9875485987', 'Hlo i am merchant');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_details`
--

CREATE TABLE `merchant_details` (
  `id` int(11) NOT NULL,
  `first_name1` varchar(25) NOT NULL,
  `last_name1` varchar(25) NOT NULL,
  `dob1` date NOT NULL,
  `email1` varchar(50) NOT NULL,
  `mobile1` varchar(20) NOT NULL,
  `file1` varchar(100) NOT NULL,
  `cpass1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchant_details`
--

INSERT INTO `merchant_details` (`id`, `first_name1`, `last_name1`, `dob1`, `email1`, `mobile1`, `file1`, `cpass1`) VALUES
(15, 'arjun', '', '1998-05-20', 'arjun@gmail.com', '2147483647', 'merchants/star_dry-cleaner.jpg', 'Arjun@123'),
(16, 'Tip Top ', 'Dry Cleaners', '2020-06-04', 'tip_top@gmail.com', '2147483647', 'merchants/tip_top.jpg', 'Tip_top@1'),
(17, 'Harris', 'Dry cleaner', '1990-05-05', 'harris@gmail.com', '2147483647', 'merchants/harris.jpg', 'Harris@12'),
(18, 'Kwality', 'Dry Cleaner', '2020-06-17', 'kwality@gmail.com', '9874565896', 'merchants/kwality.jpg', 'Kwality@12');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `cpass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `first_name`, `last_name`, `dob`, `email`, `mobile`, `cpass`) VALUES
(35, 'chander ', 'shekhar', '2020-01-29', 'shekharsaa@gmal.com', '896874377', '1234'),
(36, 'akash ', 'a', '2020-05-12', 'abc@gmail.com', '8966666', 'Abcd#123'),
(38, '1112', '111', '2222-02-12', 'ffff@gmail.com', '9875878968', '2133'),
(43, 'abc', 'cd', '2020-02-02', 'awe@gmail.com', '8967447', 'Awed@123'),
(44, 'chander', 'lal', '2020-05-08', 'aed@gmail.com', '874564565', '321'),
(45, 'addasad', 'saad', '2220-02-20', 'ade@gmail.com', '9875454859', '123'),
(46, 'kamal', 'pal', '2004-05-05', 'kamal@gmail.com', '98756555', 'Kamal#12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_detail`
--
ALTER TABLE `admin_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_details`
--
ALTER TABLE `merchant_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email1` (`email1`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_detail`
--
ALTER TABLE `admin_detail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `merchant_details`
--
ALTER TABLE `merchant_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
