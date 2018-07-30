-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2018 at 04:40 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SAAhealthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `apt`
--

CREATE TABLE `apt` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `order_time` time NOT NULL,
  `email` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `message` varchar(168) NOT NULL,
  `datee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apt`
--

INSERT INTO `apt` (`id`, `name`, `contact`, `order_time`, `email`, `service`, `message`, `datee`) VALUES
(1, 'King Kong', '09194855427', '00:00:00', 'shoixshoix@gmail.com', 'Psychiatry', 'Trouble sleeping', '2018-03-29'),
(2, 'King Kong', '09194855427', '00:00:00', 'shoixshoix@gmail.com', 'General & Vascular Ultrasound', 'Trouble eating	', '2018-03-30'),
(3, 'Chow chow', '1234567', '00:00:00', 'chowchow@something.com', 'Rehabilitation Medicine (Physical Therapy)', 'Hirap makatulog..', '2018-03-22'),
(4, 'Ejay', '1234567', '00:00:00', 'ejayjacob@gmail.com', 'Fully Automated Laboratory', 'ap	', '2018-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(168) NOT NULL,
  `password` char(64) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `id`) VALUES
('admin', 'd4c6bc78e047d205ef4c1f2abe6ce1e432ad1744845ed051b2faca73d84dacda', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apt`
--
ALTER TABLE `apt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apt`
--
ALTER TABLE `apt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
