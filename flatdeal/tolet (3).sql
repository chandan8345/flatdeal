-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2018 at 09:53 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tolet`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(1, 'Flat | Apartment', NULL),
(2, 'Office Space', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `devisionid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `devisionid`, `status`) VALUES
(1, 'Dhaka', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `devision`
--

CREATE TABLE `devision` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devision`
--

INSERT INTO `devision` (`id`, `name`, `status`) VALUES
(1, 'Dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `size` varchar(20) DEFAULT NULL,
  `bed` int(11) DEFAULT NULL,
  `washroom` varchar(10) DEFAULT NULL,
  `floorno` varchar(10) DEFAULT NULL,
  `facing` varchar(10) DEFAULT NULL,
  `parking` int(11) DEFAULT NULL,
  `rent` varchar(100) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `condtn` varchar(20) DEFAULT NULL,
  `lift` varchar(10) DEFAULT NULL,
  `generator` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `kitchen` varchar(10) DEFAULT NULL,
  `toletfor` varchar(10) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `cityid` int(11) DEFAULT NULL,
  `areaid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subarea`
--

CREATE TABLE `subarea` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `cityid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subarea`
--

INSERT INTO `subarea` (`id`, `name`, `cityid`, `status`) VALUES
(1, 'Gulshan-1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dateofjoin` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `pass`, `email`, `dateofjoin`, `address`, `image`, `role`, `status`) VALUES
(1, 'chandan', '01762981976', '123', 'chandan8345@gmail.com', '2018-11-16', 'Dhaka', '', 0, 1),
(2, 'Dr Ashraf', '555', '123', 'sdf', '2018-11-01', 'Dhaka', '', 0, 1),
(18, 'Sanju', '01743661322', '123', 'lkjal', '20-11-2018', 'Dhaka', '01743661322.jpg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `devisionid` (`devisionid`);

--
-- Indexes for table `devision`
--
ALTER TABLE `devision`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `cityid` (`cityid`),
  ADD KEY `areaid` (`areaid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `subarea`
--
ALTER TABLE `subarea`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `devision`
--
ALTER TABLE `devision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subarea`
--
ALTER TABLE `subarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`devisionid`) REFERENCES `devision` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`cityid`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`areaid`) REFERENCES `subarea` (`id`),
  ADD CONSTRAINT `post_ibfk_4` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `subarea`
--
ALTER TABLE `subarea`
  ADD CONSTRAINT `subarea_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
