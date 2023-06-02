-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 05:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinepropertysalessystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `sellerregistration`
--

CREATE TABLE `sellerregistration` (
  `MemberID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `NIC` double NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `Address` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerregistration`
--

INSERT INTO `sellerregistration` (`MemberID`, `FirstName`, `LastName`, `NIC`, `PhoneNo`, `Address`, `Email`, `Password`, `Gender`) VALUES
(1, 'sakila', 'athapaththu', 200116404223, 714782241, 'kurunegala', 'sakila@gmail.com', '1234', 'Male'),
(10, 'sul', 'pul', 120746, 767284732, 'colombo', 'sukasons@gmail.com', '123', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `userreport`
--

CREATE TABLE `userreport` (
  `ReportID` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `Date` date NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreport`
--

INSERT INTO `userreport` (`ReportID`, `FullName`, `Email`, `Date`, `Message`) VALUES
(1, 'sakila', 'sakila@gmail.com', '2023-06-02', 'ufauyaicbabscansk'),
(3, '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellerregistration`
--
ALTER TABLE `sellerregistration`
  ADD PRIMARY KEY (`MemberID`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `userreport`
--
ALTER TABLE `userreport`
  ADD PRIMARY KEY (`ReportID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellerregistration`
--
ALTER TABLE `sellerregistration`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userreport`
--
ALTER TABLE `userreport`
  MODIFY `ReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
