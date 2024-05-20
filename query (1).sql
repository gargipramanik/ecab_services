-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 08:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `query` varchar(500) NOT NULL,
  `reply` varchar(255) NOT NULL,
  `given` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `user_id`, `name`, `email`, `phone`, `query`, `reply`, `given`) VALUES
(1, 5, 'Misty Sen', 'misty@gmail.com', 1234567890, '  Cost for each drive?', 'The driver will take it', 'Admin'),
(5, 5, 'Misty Sen', 'misty@gmail.com', 1234567890, 'Send me my details please', 'I will send it later', 'Admin'),
(6, 5, 'Misty Sen', 'misty@gmail.com', 1234567890, 'Driver Charges Badly', 'Sorry. This won\'t happen again', 'Admin'),
(7, 8, 'Shweta Dey', 'shweta@gmail.com', 9812734560, 'Driver charges Badly', 'Sorry. This won\'t happen again', 'Admin'),
(8, 2, 'Manas Kar', 'manas@gmail.com', 7890766072, 'Demo', 'Demo', 'Admin'),
(9, 2, 'Manas Kar', 'manas@gmail.com', 7890766072, 'Demo', 'Demo2', 'Admin'),
(10, 0, 'Sukanya Sen', 'mistysen2003@gmail.com', 8981655779, 'How can I open my account', 'null', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
