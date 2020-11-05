-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 03:47 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `station` varchar(255) NOT NULL,
  `totime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `station`, `totime`) VALUES
(1, 'กรุงเทพฯ', '14:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `huayrach`
--

CREATE TABLE `huayrach` (
  `id` int(11) NOT NULL,
  `to` time NOT NULL,
  `out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `huayrach`
--

INSERT INTO `huayrach` (`id`, `to`, `out`) VALUES
(1, '05:53:00', '05:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `id` int(11) NOT NULL,
  `station` varchar(255) NOT NULL,
  `timeout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`id`, `station`, `timeout`) VALUES
(1, 'สุรินทร์', '05:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `procession`
--

CREATE TABLE `procession` (
  `id` int(11) NOT NULL,
  `id_train` int(11) NOT NULL,
  `report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `procession`
--

INSERT INTO `procession` (`id`, `id_train`, `report`) VALUES
(1, 234, 'รถธรรมดา');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `huayrach`
--
ALTER TABLE `huayrach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `origin`
--
ALTER TABLE `origin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procession`
--
ALTER TABLE `procession`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `huayrach`
--
ALTER TABLE `huayrach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `origin`
--
ALTER TABLE `origin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `procession`
--
ALTER TABLE `procession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
