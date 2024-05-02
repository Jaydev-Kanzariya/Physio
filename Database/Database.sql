-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 08:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `physio`
--
DROP DATABASE IF EXISTS `physio`;
CREATE DATABASE IF NOT EXISTS `physio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `physio`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `appointment_date` datetime NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `phone`, `doctor_name`, `gender`, `email`, `dob`, `appointment_date`, `state`, `city`, `message`) VALUES
(111, 'dishen', 9865473215, 'Dr. Dishen', 'Male', 'dishen@gmail.com', '2005-04-09', '2024-04-30 17:30:00', 'Gujarat', 'Jamnagar', 'hy i am jaydev '),
(112, 'ankur', 9865741235, 'Dr. Dishen', 'Male', 'ankur@gmail.com', '2005-04-01', '2024-04-29 17:32:00', 'Gujarat', 'Rajkot', 'this is proud of matva village'),
(113, 'rutvik', 9874563215, 'Dr.Jaydev', 'Male', 'rutvik@gmail.com', '2005-02-28', '2024-04-29 17:34:00', 'Gujarat', 'Surendranagar', 'this is proud of matva village'),
(117, 'aashish', 9874562315, 'Dr.Jaydev', 'Male', 'darshil@gmail.com', '2005-03-01', '2024-04-30 16:30:00', 'Gujarat', 'Jamnagar', 'frechured'),
(118, 'ankur bhanderi', 9874563212, 'Dr.Jaydev', 'Male', 'ankur@gmail.com', '2005-02-28', '2024-04-29 17:30:00', 'Gujarat', 'Rajkot', 'frechured in both hand'),
(119, 'darshil dabhi', 9499835771, 'Dr.Jaydev', 'Male', 'darshil@gmail.com', '2005-02-12', '2024-04-27 16:30:00', 'Gujarat', 'Surendranagar', ''),
(120, 'darshil', 0, 'Dr.Jaydev', 'Male', 'darshil@gmail.com', '2005-02-12', '0000-00-00 00:00:00', 'Gujarat', '', ''),
(121, 'darshil dabhi', 1111111111, 'Dr.Jaydev', 'Male', 'darshil@gmail.com', '2005-02-12', '2024-04-30 10:30:00', 'Gujarat', 'Rajkot', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_master`
--

DROP TABLE IF EXISTS `doctor_master`;
CREATE TABLE `doctor_master` (
  `id` int(255) NOT NULL,
  `Full_name` varchar(255) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_master`
--

INSERT INTO `doctor_master` (`id`, `Full_name`, `Phone`, `Email`, `password`) VALUES
(60, 'Dr.Jaydev', 9409639496, 'jaydev@gamail.com', '2004'),
(62, 'Dr. Dishen', 9499835771, 'dishen@gmail.com', '2005');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `gender`, `email`, `phone`, `password`) VALUES
(14, 'jaydev', 'Male', 'jaydev@gmail.com', 9409639496, '25896'),
(15, 'darshil dabhi', 'Male', 'darshil@gmail.com', 9499835771, '2005');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_master`
--
ALTER TABLE `doctor_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `doctor_master`
--
ALTER TABLE `doctor_master`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
