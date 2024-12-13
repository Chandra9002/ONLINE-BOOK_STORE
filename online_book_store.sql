-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 03:59 AM
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
-- Database: `online_book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `id` int(11) NOT NULL,
  `Title` varchar(20) DEFAULT NULL,
  `Author` varchar(20) DEFAULT NULL,
  `price` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curdoperation`
--

CREATE TABLE `curdoperation` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` tinytext DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curdoperation`
--

INSERT INTO `curdoperation` (`ID`, `full_name`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'chandra', 'kadayatchandra@gmail.com', '9800674530', ' Doti', NULL),
(2, 'chandra', 'kadayatchandra@gmail.com', '9800674530', 'Doti', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `ContactNumber` varchar(40) DEFAULT NULL,
  `CreatedAT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `FirstName`, `LastName`, `Email`, `Address`, `ContactNumber`, `CreatedAT`) VALUES
(1, 'chandra', 'kadayat', 'kadayatchandra@gmail.com', 'DOTI', '98000006745', '2024-12-10 00:56:31'),
(2, 'sarmila', 'joshi', 'joshi@gmail.com', 'DOTI', '9800065312', '2024-12-10 10:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `course` varchar(10) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Id`, `Name`, `course`, `contact`) VALUES
(2147483647, 'java books 200price', '48', 50);

-- --------------------------------------------------------

--
-- Table structure for table `ul`
--

CREATE TABLE `ul` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `contact` int(100) DEFAULT NULL,
  `Address` varchar(12) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Contact` int(30) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curdoperation`
--
ALTER TABLE `curdoperation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ul`
--
ALTER TABLE `ul`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `curdoperation`
--
ALTER TABLE `curdoperation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
