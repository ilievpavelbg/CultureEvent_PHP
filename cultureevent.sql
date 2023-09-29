-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 03:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cultureevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventplaceanddate`
--

CREATE TABLE `eventplaceanddate` (
  `id` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventplaceanddate`
--

INSERT INTO `eventplaceanddate` (`id`, `StartDate`, `EndDate`, `Location`) VALUES
(1, '2023-11-24', '2023-11-25', 'Grand Hotel Milennium Sofia');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_menu`
--

CREATE TABLE `navigation_menu` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navigation_menu`
--

INSERT INTO `navigation_menu` (`id`, `label`, `link`) VALUES
(1, 'ЗА ФОРУМА', 'zaForuma.php'),
(2, 'КЪДЕ И КОГА', 'datelocation.php'),
(3, 'ЗАКУПИ БИЛЕТ', 'buyTicket.php'),
(4, 'КАК ДА СТИГНЕТЕ ДО НАС', 'weAreHere.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FullName` varchar(250) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `CosmeticCenter` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `Phone`, `CosmeticCenter`, `Address`, `Email`) VALUES
(1, 'Pavel Iliev', '0886662603', 'Test', 'Mladost 2', 'pesho@abv.bg'),
(27, 'Pavel Iliev', '', '', 'Mladost 2', ''),
(28, 'Ivan Ivanov', '123213123213', 'Test333', 'Mladost 22', 'pesho@abv.bg'),
(29, 'Ivan Ivanov', '12312321321', 'Test333', 'wefewrrtdfreqwewe', 'test@abv.bg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventplaceanddate`
--
ALTER TABLE `eventplaceanddate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
