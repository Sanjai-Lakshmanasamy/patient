-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 01:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient details`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `regid` int(11) NOT NULL,
  `co` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `blood_group` text NOT NULL,
  `weight` int(11) NOT NULL,
  `address` text NOT NULL,
  `reason` text NOT NULL,
  `doctor` text NOT NULL,
  `visit date time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admit` text NOT NULL,
  `discharge` text NOT NULL,
  `prescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `regid`, `co`, `age`, `gender`, `mobile`, `blood_group`, `weight`, `address`, `reason`, `doctor`, `visit date time`, `admit`, `discharge`, `prescription`) VALUES
(1, 'Sanjai', 0, 'Lakshmanasamy', 20, 'Male', '9876543210', 'O+ve', 65, 'Cbe', 'Fever', 'Dr.Anbu', '2020-11-22 12:01:21', '22-11-2020', '25-11-2020', 'Dolo 650'),
(2, '', 0, '', 0, '', '', '', 0, '', '', '', '2020-11-22 12:02:08', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
