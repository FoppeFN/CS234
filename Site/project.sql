-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 03, 2024 at 06:32 AM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `goaliestats`
--

CREATE TABLE `goaliestats` (
  `name` varchar(255) NOT NULL,
  `gamesplayed` int(255) DEFAULT NULL,
  `goalssavedaboveexpected` varchar(255) DEFAULT NULL,
  `GAA` varchar(255) DEFAULT NULL,
  `savepercentage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goaliestats`
--

INSERT INTO `goaliestats` (`name`, `gamesplayed`, `goalssavedaboveexpected`, `GAA`, `savepercentage`) VALUES
('Joel Hofer', 7, '-3.8', '3.23', '.899'),
('Jordan Binnington', 17, '-3.7', '3.04', '.891');

-- --------------------------------------------------------

--
-- Table structure for table `linestats`
--

CREATE TABLE `linestats` (
  `linepair` varchar(255) NOT NULL,
  `minutes` int(255) DEFAULT NULL,
  `xgoalspct` varchar(255) DEFAULT NULL,
  `xgoalsfor` varchar(255) DEFAULT NULL,
  `xgoalsagainst` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `linestats`
--

INSERT INTO `linestats` (`linepair`, `minutes`, `xgoalspct`, `xgoalsfor`, `xgoalsagainst`) VALUES
('Broberg-Faulk', 193, '41.8%', '6.1', '8.5'),
('Buchnevich-Thomas-Kyrou', 57, '66.7%', '3.2', '1.6'),
('Joseph-Faulk', 88, '32.5', '2.5', '5.2'),
('Joseph-Kessel', 85, '44.6%', '2.9', '3.6'),
('Leddy-Parayko', 67, '47.5%', '2.9', '3.2'),
('Neighbours-Buchnevich-Kyrou', 53, '41.7%', '2', '2.8'),
('Perunovich-Faulk', 99, '59.8%', '4.9', '3.3'),
('Perunovich-Kessel', 60, '45.8%', '2.2', '2.6'),
('Saad-Schenn-Neighbours', 58, '41.9%', '1.8', '2.5'),
('Suter-Parayko', 391, '43.2%', '12.3', '16.2'),
('Walker-Faksa-Toropchenko', 135, '40.7%', '3.5', '5.1');

-- --------------------------------------------------------

--
-- Table structure for table `skaterstats`
--

CREATE TABLE `skaterstats` (
  `name` varchar(255) NOT NULL,
  `gamesplayed` int(255) DEFAULT NULL,
  `xG` varchar(255) DEFAULT NULL,
  `goals` int(255) DEFAULT NULL,
  `assists` int(255) DEFAULT NULL,
  `points` int(255) DEFAULT NULL,
  `shootingpct` varchar(255) DEFAULT NULL,
  `corsi` varchar(255) DEFAULT NULL,
  `onicegoalspct` varchar(255) DEFAULT NULL,
  `onicegoaldiff` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skaterstats`
--

INSERT INTO `skaterstats` (`name`, `gamesplayed`, `xG`, `goals`, `assists`, `points`, `shootingpct`, `corsi`, `onicegoalspct`, `onicegoaldiff`) VALUES
('Alexandre Texier', 13, '1.4', 1, 1, 2, '5%', '41%', '28.6%', -6),
('Alexey Toropchenko', 23, '2.2', 1, 3, 4, '4.8%', '44%', '43.8%', -2),
('Brandon Saad', 22, '3.7', 4, 3, 7, '11.4%', '46%', '45.8%', -2),
('Brayden Schenn', 25, '3.5', 0, 8, 8, '0%', '46%', '38.7%', -7),
('Colton Parayko', 25, '2.6', 4, 5, 9, '10.5%', '46%', '41.9%', -7),
('Corey Schueneman', 4, '.1', 0, 0, 0, '0%', '57%', '50%', 0),
('Dylan Holloway', 25, '3.7', 4, 5, 9, '8.7%', '52%', '60%', 5),
('Jake Neighbours', 25, '4.6', 4, 4, 8, '10.8%', '46%', '35.7%', -8),
('Jordan Kyrou', 23, '4.4', 6, 9, 15, '11.8%', '49%', '58.6', 5),
('Justin Faulk', 25, '1.3', 0, 2, 2, '0%', '46%', '42.3%', -4),
('Mathieu Joseph', 16, '2.3', 2, 2, 4, '10.5%', '50%', '33.3%', -5),
('Matthew Kessel', 21, '.5', 0, 3, 3, '0%', '55%', '43.5%', -3),
('Nathan Walker', 19, '2.2', 3, 2, 5, '14.3%', '48%', '47.1%', -1),
('Nick Leddy', 4, '.2', 0, 0, 0, '0%', '52%', '28.6%', -3),
('Oskar Sundqvist', 16, '1.4', 1, 0, 1, '14.3%', '46%', '30.8%', -5),
('Pavel Buchnevich', 24, '3.1', 3, 6, 9, '9.4%', '48%', '46.9%', -2),
('Phillip Broberg', 13, '.3', 2, 5, 7, '15.4%', '47%', '63.6%', 3),
('Pierre-Olivier Joseph', 18, '.5', 0, 2, 2, '0%', '48%', '31.8%', -8),
('Radek Faksa', 25, '1.6', 2, 4, 6, '10%', '48%', '40%', -4),
('Robert Thomas', 13, '3.1', 2, 3, 5, '9.1%', '53%', '50%', 0),
('Ryan Suter', 25, '.9', 1, 3, 4, '4.5%', '45%', '46%', -4),
('Scott Perunovich', 15, '.4', 2, 1, 3, '40%', '52%', '50%', 0),
('Zack Bolduc', 19, '1.8', 2, 5, 7, '11.1%', '52%', '61.1%', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(34, 'admin', '$2y$10$/yqAAEH2WYvImES9bkKMPegbT/yjPr6BJSCWPiAeV9iLj82wbkxnm'),
(42, 'chase', '$2y$10$0bPIJGsxvM.0ABfa4u8sLuPciXLAQgzPmscX4KvHFTzVXicXYdiE2'),
(47, 'nick', '$2y$10$fQys1XH8jn14LQwk7axWMek4Gyson04G/s8E5A4FeHGwdXmaTGQVm'),
(49, 'foppe', '$2y$10$hMSMi8447oXNlLJ5IQI0S.iybwWJiD7swYmzTxsGmfYWjvWAPY7UW'),
(51, 'Fish', '$2y$10$V/KQTawR9zMqzaxRxfw8oO0dvWXhtA4WWAzmYUiVrYhwfeW.NBOpK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goaliestats`
--
ALTER TABLE `goaliestats`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `linestats`
--
ALTER TABLE `linestats`
  ADD PRIMARY KEY (`linepair`);

--
-- Indexes for table `skaterstats`
--
ALTER TABLE `skaterstats`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
