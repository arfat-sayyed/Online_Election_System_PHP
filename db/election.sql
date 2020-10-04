-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 10:59 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `adminname` varchar(10) NOT NULL,
  `adminpassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`adminname`, `adminpassword`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `ID` int(100) NOT NULL,
  `cname` char(100) NOT NULL,
  `age` int(11) NOT NULL,
  `party` char(50) NOT NULL,
  `states` char(50) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `photo` blob NOT NULL,
  `gender` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`ID`, `cname`, `age`, `party`, `states`, `experience`, `photo`, `gender`) VALUES
(1, 'Pravin Chorbole', 55, 'Bharatia Janata Party', 'Maharashtra', '<=20', 0x50, 'Male'),
(2, 'Anusaya Chavan', 52, 'Indian National Congress Party', 'Maharashtra', '<=15', '', 'Female'),
(3, 'Shrikant Bhimale', 58, 'Maharashtra Navnrman Sena', 'Maharashtra', '<=15', '', 'Male'),
(5, 'Shrikant Bhimale', 58, 'Maharashtra Navnrman Sena', 'Maharashtra', '<=15', '', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `votenumbers`
--

CREATE TABLE `votenumbers` (
  `countno` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votenumbers`
--

INSERT INTO `votenumbers` (`countno`) VALUES
(1),
(2),
(3),
(2),
(3),
(2),
(3),
(2),
(2),
(2),
(1),
(1),
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `FullName` char(100) NOT NULL,
  `FatherName` char(100) NOT NULL,
  `AdharNo` text NOT NULL,
  `mobile` text NOT NULL,
  `birthYear` int(11) NOT NULL,
  `VoterId` varchar(10) NOT NULL,
  `States` char(50) NOT NULL,
  `yearSince` varchar(50) NOT NULL,
  `gender` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`FullName`, `FatherName`, `AdharNo`, `mobile`, `birthYear`, `VoterId`, `States`, `yearSince`, `gender`) VALUES
('Sadeka Javeed Shaikh', 'Ayyub Pathan', '798798456623', '9123456780', 1981, 'MHP786687', 'Maharashtra', '20', 'Female'),
('Mahima Bachhav', 'Hiraman Bachhav', '864246896073', '9213456789', 2000, 'MHPN456166', 'Maharashtra', '0', 'Female'),
('Swati Mundlik', 'Vishnu Mundlik', '985678541254', '9822616558', 1999, 'MHPN907856', 'Maharashtra', '0', 'Female'),
('Mohammadi Shaikh', 'Javeed Shaikh', '345668797812', '7020111364', 2000, 'MHPN965321', 'Maharshtra', '0', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `voters1`
--

CREATE TABLE `voters1` (
  `ID` int(10) NOT NULL,
  `VoterId` varchar(10) NOT NULL,
  `AdharNo` text NOT NULL,
  `mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters1`
--

INSERT INTO `voters1` (`ID`, `VoterId`, `AdharNo`, `mobile`) VALUES
(1, 'MHPN907856', '985678541254', '9822616558');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`VoterId`);

--
-- Indexes for table `voters1`
--
ALTER TABLE `voters1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `voters1`
--
ALTER TABLE `voters1`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
