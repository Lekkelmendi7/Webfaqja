-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 07:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `lname`, `subject`) VALUES
(1, 'enes', 'hetemi', 'hello12'),
(2, 'enen', 'hejej', 'Hello Hello'),
(3, 'edon', 'Hetemi', 'Hello'),
(6, 'Enes', 'hehehe', 'ejejjej'),
(9, 'enenr', 'hetererr', 'hello hello hello');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passwordC` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `lname`, `email`, `password`, `passwordC`, `role`) VALUES
(6, 'admin', 'selman', 'admin@gmail.com', '$2y$10$7e0gBzmd7h4YSTMyyAmfl.4pLZNzJwODjH2HqhEUUkuXmm4AAYXB.', '$2y$10$OLm3jYtyyplVd/D.v.gm5eVJ.zTIeLRZKbxQ1u6xaJGXsOgW15kT6', 'Admin'),
(7, 'Enes', 'Hetemi', 'enes@gmail.com', '$2y$10$95PywxKfgAwAKi76gpBqH.MX0pPnWIMLj34frmWSP2ryRpP/4wioG', '$2y$10$XwWbN8.4eAQTnSRFXtFs8.v0AnsMVykh1HhMdsjP4uZfMwXUUND8m', 'Admin'),
(8, 'Test', 'Tute', 'Test@gmail.com', '$2y$10$nSNxZvmEEZB0Ug.AUOPkyOftmTRN6AM7mHCqkBUWUgicmdKFtYpkS', '$2y$10$Q8F0Q0xZQNOPbEbROeJTH.Q7n/nGd5zBVmGkkX5gXSpmngnB4R4b2', 'User'),
(10, 'edon', 'Hetem', 'edon@gmail.com', '$2y$10$/TO1VvFMN6MMRC3pWtEYiecu3c5Kclg6MZBl3xL1eGd3mN8uO6Tj6', '$2y$10$.VqhLzCfhNVKwDtjRRDwPO6oluUlqlXX9hXCkBpEMVjv/iVp.fz9i', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;