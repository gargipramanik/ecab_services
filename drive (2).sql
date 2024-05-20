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
-- Table structure for table `drive`
--

CREATE TABLE `drive` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pick` varchar(255) NOT NULL,
  `drop_loc` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `action` varchar(30) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `driver_fname` varchar(50) NOT NULL,
  `driver_lname` varchar(50) NOT NULL,
  `driver_email` varchar(100) NOT NULL,
  `driver_phone` bigint(20) NOT NULL,
  `driver_gender` varchar(20) NOT NULL,
  `car_number` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL,
  `payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drive`
--

INSERT INTO `drive` (`id`, `user_id`, `fname`, `lname`, `phone`, `email`, `pick`, `drop_loc`, `date`, `time`, `action`, `driver_id`, `driver_fname`, `driver_lname`, `driver_email`, `driver_phone`, `driver_gender`, `car_number`, `capacity`, `payment`) VALUES
(1, 5, 'Misty', 'Sen', 1234567890, 'misty@gmail.com', 'Santragachi', 'Eco-Park', '2024-04-11', '2024-04-11 06:50:05', 'Confirmed', 2, 'Manas', 'Kar', 'manas@gmail.com', 7890766072, 'male', 'WET19-2301', 4, 'Paid'),
(2, 8, 'Shweta', 'Dey', 9812734560, 'shweta@gmail.com', 'Panskura', 'Bauria', '2024-04-12', '2024-04-11 21:00:00', 'Pending', 0, 'null', 'null', 'null', 0, 'null', 'null', 0, 'PENDING'),
(3, 8, 'Shweta', 'Dey', 9812734560, 'shweta@gmail.com', 'Sector-III', 'Ecospace', '2024-04-12', '2024-04-12 10:03:45', 'Confirmed', 1, 'Malay', 'Das', 'malay@gmail.com', 8742134890, 'male', 'ABC21-6537', 4, 'Paid'),
(4, 5, 'Misty', 'Sen', 1234567890, 'misty@gmail.com', 'SDF', 'Santragachi Station', '2024-04-15', '2024-04-15 09:49:49', 'Confirmed', 2, 'Manas', 'Kar', 'manas@gmail.com', 7890766073, 'male', 'WET19-2301', 6, 'Paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drive`
--
ALTER TABLE `drive`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drive`
--
ALTER TABLE `drive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
