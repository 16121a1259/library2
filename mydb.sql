-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 11:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `adminid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`adminid`, `password`) VALUES
('admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` varchar(10) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `sname` varchar(40) NOT NULL,
  `gender` text NOT NULL,
  `degree` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `rollno`, `passwd`, `dob`, `sname`, `gender`, `degree`, `branch`, `status`) VALUES
('16121A1201', '16121A1201', '123456', '2018-07-10', 'G Uma Mahesh', 'Male', 'BTECH', 'CE', 'pending'),
('15121A1201', '15121A1201', 'demo123', '2018-07-18', 'geetha', 'Female', 'MTECH', 'VLSI', 'approved'),
('15121a1210', '15121a1210', '12345', '2018-07-07', 'chinni venkata yaswanth', 'Male', 'BTECH', 'it', 'pending'),
('15121a12b2', '15121a12b2', 'saisravan', '2018-07-09', 'sravan', 'Male', 'BTECH', 'it', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregister`
--
ALTER TABLE `adminregister`
  ADD PRIMARY KEY (`adminid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
