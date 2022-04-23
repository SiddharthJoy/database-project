-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 11:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `NID` int(20) NOT NULL,
  `Area` text NOT NULL,
  `Block` varchar(5) NOT NULL,
  `House_number` varchar(5) NOT NULL,
  `Cell_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`NID`, `Area`, `Block`, `House_number`, `Cell_number`) VALUES
(1001, 'Narinda', 'A', '12', 1781993274),
(1002, 'Gulistan', 'D', '14', 1833004345),
(1003, 'Mirpur', 'D', '9', 1547445875),
(1005, 'Narinda', 'B', '8', 1833554541),
(1009, 'Wari', 'A', '23', 1833004345),
(1010, 'Dashpara', 'A', '12', 1772869027),
(2001, 'Narinda', 'A', '12', 1521554587),
(2002, 'Gulistan', 'D', '14', 1845124545);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserName`, `Password`) VALUES
('joy8', 'joy123'),
('rifat09', '12345'),
('salim', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `NID` int(20) NOT NULL,
  `Name` text NOT NULL,
  `Gender` text NOT NULL,
  `Age` int(20) NOT NULL,
  `Maritial_status` text NOT NULL,
  `Spouse_ID` int(20) NOT NULL,
  `prof_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`NID`, `Name`, `Gender`, `Age`, `Maritial_status`, `Spouse_ID`, `prof_ID`) VALUES
(1001, 'Selim', 'Male', 22, 'Married', 2001, 'A001'),
(2001, 'Sharmin', 'Female', 20, 'Married', 1001, 'B001'),
(1003, 'Adil', 'Male', 22, 'Unmarried', 0, 'A003'),
(1002, 'Rifat', 'Male', 21, 'Married', 2002, 'A002'),
(2002, 'Rimi', 'Female', 19, 'Married', 1002, 'A003'),
(1005, 'Rahat', 'Male', 22, 'Unmarried', 0, 'P12121'),
(1010, 'Tahmid Ahmed', 'Male', 23, 'Married', 0, '1111'),
(1009, 'Jihad', 'Male', 22, 'Unmarried', 0, '1111');

-- --------------------------------------------------------

--
-- Table structure for table `registered_proffessions`
--

CREATE TABLE `registered_proffessions` (
  `prof` text NOT NULL,
  `prof_ID` varchar(10) NOT NULL,
  `Grade` text NOT NULL,
  `Work_place` text NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_proffessions`
--

INSERT INTO `registered_proffessions` (`prof`, `prof_ID`, `Grade`, `Work_place`, `Address`) VALUES
('Defender', '1111', 'F', 'Shurjoprovat', 'NGC'),
('Lecturer', 'A001', 'A', 'Jagannath University', 'Sadarghat'),
('Doctor', 'A002', 'A', 'BSMRMU', 'Shabagh'),
('Officer', 'A003', 'A', 'Home Ministry', 'Paltan'),
('Nurse', 'B001', 'B', 'Dhaka Medical', 'DMC'),
('Clerk', 'P12121', 'D', 'JnU', 'Sadarghat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD KEY `NID` (`NID`),
  ADD KEY `NID_2` (`NID`),
  ADD KEY `NID_3` (`NID`),
  ADD KEY `NID_4` (`NID`,`prof_ID`),
  ADD KEY `prof_ID` (`prof_ID`);

--
-- Indexes for table `registered_proffessions`
--
ALTER TABLE `registered_proffessions`
  ADD PRIMARY KEY (`prof_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citizens`
--
ALTER TABLE `citizens`
  ADD CONSTRAINT `citizens_ibfk_1` FOREIGN KEY (`prof_ID`) REFERENCES `registered_proffessions` (`prof_ID`),
  ADD CONSTRAINT `citizens_ibfk_2` FOREIGN KEY (`NID`) REFERENCES `address` (`NID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
