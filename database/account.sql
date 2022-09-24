-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 12:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `forsignup`
--

CREATE TABLE `forsignup` (
  `s.no` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forsignup`
--

INSERT INTO `forsignup` (`s.no`, `username`, `email`, `password`) VALUES
(1, 'prakhar', 'prakhar@gmail.com', 'prakhar'),
(2 'asd', 'asd@gmail.com', '456798'),
(3, 'q', 'q@gmail.com', '1'),
(4, 'chetan', 'chetan@chetan.com', '        '),
(5, '12', 'q2@gmail.com', '12'),
(6, '1', '1@gmail.com', '1'),
(7, 'q3', 'q3@gmail.com', 'q3'),
(8, 'q4', 'q4@gmail.com', 'q4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forsignup`
--
ALTER TABLE `forsignup`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forsignup`
--
ALTER TABLE `forsignup`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
