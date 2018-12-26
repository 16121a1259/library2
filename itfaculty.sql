-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2018 at 09:50 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itfaculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE IF NOT EXISTS `adminregister` (
  `adminid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`adminid`, `password`) VALUES
('admin', 'svecit@123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `ayear` varchar(20) NOT NULL,
  `program` varchar(20) NOT NULL,
  `department` varchar(40) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `regulation` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `midsemfb` float NOT NULL,
  `endsemfb` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ayear`, `program`, `department`, `year`, `sem`, `section`, `regulation`, `subject`, `faculty`, `midsemfb`, `endsemfb`) VALUES
('2017-18', 'B.Tech', 'IT', 'III', 'II', 'B', 'SVEC-14', 'Web Programming Lab', 'svecit44', 75, 79.22);

-- --------------------------------------------------------

--
-- Table structure for table `overallresults`
--

CREATE TABLE IF NOT EXISTS `overallresults` (
  `ayear` varchar(20) NOT NULL,
  `program` varchar(20) NOT NULL,
  `department` varchar(40) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `regulation` varchar(20) NOT NULL,
  `appeared` int(10) NOT NULL,
  `passed` int(10) NOT NULL,
  `failed` int(10) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overallresults`
--

INSERT INTO `overallresults` (`ayear`, `program`, `department`, `year`, `sem`, `section`, `regulation`, `appeared`, `passed`, `failed`, `percentage`) VALUES
('2017-18', 'B.Tech', 'IT', 'III', 'II', 'A', 'SVEC-16', 60, 55, 5, 92),
('2017-18', 'B.Tech', 'IT', 'III', 'II', 'B', 'SVEC-16', 58, 52, 6, 90),
('2017-18', 'B.Tech', 'IT', 'I', 'II', 'A', 'SVEC-16', 60, 48, 12, 80),
('2017-18', 'B.Tech', 'IT', 'I', 'II', 'B', 'SVEC-16', 58, 53, 5, 91);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `userid` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `doj` date NOT NULL,
  `qual` varchar(30) NOT NULL,
  `des` varchar(30) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `passwd`, `fname`, `doj`, `qual`, `des`, `mob`, `mail`, `status`) VALUES
('svecit45', 'uma@1234', 'Mr.G.M.Chanakya', '2010-06-29', 'M.Tech', 'Asst Professor', '9959458976', 'umamaheshg.it@gmail.com', 'approved'),
('svecit44', 'uma@1234', 'G.Uma Mahesh', '2011-06-27', 'M.Tech(Ph.D)', 'Asst Professor', '9959458976', 'umamaheshg.it@gmail.com', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `regsubjects`
--

CREATE TABLE IF NOT EXISTS `regsubjects` (
  `userid` varchar(20) NOT NULL,
  `ayear` varchar(20) NOT NULL,
  `program` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `regulation` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regsubjects`
--

INSERT INTO `regsubjects` (`userid`, `ayear`, `program`, `department`, `year`, `sem`, `section`, `regulation`, `subject`) VALUES
('svecit45', '2017-18', 'B.Tech', 'IT', 'III', 'II', 'Elective', 'SVEC-14', 'Cyber Security and Laws'),
('svecit44', '2017-18', 'B.Tech', 'IT', 'III', 'II', 'B', 'SVEC-14', 'Web Programming Lab'),
('svecit45', '2017-18', 'B.Tech', 'IT', 'III', 'II', 'B', 'SVEC-14', 'Web Programming Lab');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `ayear` varchar(20) NOT NULL,
  `program` varchar(20) NOT NULL,
  `department` varchar(40) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `regulation` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `appeared` int(10) NOT NULL,
  `passed` int(10) NOT NULL,
  `failed` int(10) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ayear`, `program`, `department`, `year`, `sem`, `section`, `regulation`, `subject`, `faculty`, `appeared`, `passed`, `failed`, `percentage`) VALUES
('2017-18', 'B.Tech', 'IT', 'III', 'II', 'B', 'SVEC-14', 'Web Programming Lab', 'svecit45', 55, 52, 3, 94.55),
('2017-18', 'B.Tech', 'IT', 'III', 'II', 'B', 'SVEC-14', 'Web Programming Lab', 'svecit44', 55, 53, 2, 96.36),
('2017-18', 'B.Tech', 'IT', 'III', 'II', 'A', 'SVEC-14', 'Managerial Economics and Principles of Accountancy', 'Dr.Venkata Ratnam', 55, 51, 4, 92.73),
('2017-18', 'B.Tech', 'IT', 'III', 'II', 'B', 'SVEC-14', 'Web Programming', 'svecit45', 55, 53, 2, 96.36);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `program` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `regulation` varchar(30) NOT NULL,
  `subject` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`program`, `department`, `year`, `sem`, `regulation`, `subject`) VALUES
('B.Tech', 'IT', 'I', 'I', 'SVEC-16', 'Programming in C'),
('B.Tech', 'IT', 'I', 'I', 'SVEC-16', 'Programming in C Lab'),
('B.Tech', 'IT', 'I', 'II', 'SVEC-16', 'Object Oriented Programming through CPP '),
('B.Tech', 'IT', 'I', 'II', 'SVEC-16', 'Digital Logic Design'),
('B.Tech', 'IT', 'I', 'II', 'SVEC-16', 'IT Workshop'),
('B.Tech', 'IT', 'I', 'II', 'SVEC-16', 'Object Oriented Programming Lab (CPP)'),
('B.Tech', 'IT', 'II', 'II', 'SVEC-16', 'Environmental Studies'),
('B.Tech', 'IT', 'II', 'I', 'SVEC-16', 'Computer Organization'),
('B.Tech', 'IT', 'II', 'I', 'SVEC-16', 'Data Structures'),
('B.Tech', 'IT', 'II', 'I', 'SVEC-16', 'Discrete Mathematical Structures'),
('B.Tech', 'IT', 'II', 'I', 'SVEC-16', 'Linux Programming'),
('B.Tech', 'IT', 'II', 'I', 'SVEC-16', 'Operating Systems'),
('B.Tech', 'IT', 'II', 'I', 'SVEC-16', 'Data Structures Lab '),
('B.Tech', 'IT', 'II', 'I', 'SVEC-16', 'Linux Programming Lab'),
('B.Tech', 'IT', 'II', 'I', 'SVEC-16', 'Operating Systems Lab'),
('B.Tech', 'IT', 'II', 'I', 'SVEC-16', 'Probability Distributions and Statistical Methods'),
('B.Tech', 'IT', 'II', 'II', 'SVEC-16', 'Theory of Computation'),
('B.Tech', 'IT', 'II', 'II', 'SVEC-16', 'Database Management Systems'),
('B.Tech', 'IT', 'II', 'II', 'SVEC-16', 'Design and Analysis of Algorithms'),
('B.Tech', 'IT', 'II', 'II', 'SVEC-16', 'Java Programming'),
('B.Tech', 'IT', 'II', 'II', 'SVEC-16', 'Software Engineering'),
('B.Tech', 'IT', 'II', 'II', 'SVEC-16', 'Database Management Systems Lab'),
('B.Tech', 'IT', 'II', 'II', 'SVEC-16', 'Java Programming Lab'),
('B.Tech', 'IT', 'II', 'II', 'SVEC-16', 'Soft Skills Lab'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'Computer Graphics and Multimedia'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'Computer Networks'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'Compiler Design'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'Object Oriented Analysis and Design'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'Web Technologies'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'Image Processing'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'Wireless Networks'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'CASE Tools and Computer Networks Lab'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'CG and Multimedia Lab'),
('B.Tech', 'IT', 'III', 'I', 'SVEC-16', 'Web Technologies Lab'),
('B.Tech', 'IT', 'III', 'II', 'SVEC-14', 'Managerial Economics and Principles of Accountancy'),
('B.Tech', 'IT', 'III', 'II', 'SVEC-14', 'Data Warehousing and Data Mining'),
('B.Tech', 'IT', 'III', 'II', 'SVEC-14', 'Web Programming'),
('B.Tech', 'IT', 'III', 'II', 'SVEC-14', 'Design and Analysis of Algorithms'),
('B.Tech', 'IT', 'III', 'II', 'SVEC-14', 'Object Oriented Analysis and Design'),
('B.Tech', 'IT', 'III', 'II', 'SVEC-14', 'OOAD & Data Mining Lab'),
('B.Tech', 'IT', 'III', 'II', 'SVEC-14', 'Web Programming Lab'),
('B.Tech', 'IT', 'III', 'II', 'SVEC-14', 'Cyber Security and Laws'),
('B.Tech', 'IT', 'IV', 'II', 'SVEC-14', 'Cloud Computing'),
('B.Tech', 'IT', 'IV', 'II', 'SVEC-14', 'Cryptography and Network Security'),
('B.Tech', 'IT', 'IV', 'II', 'SVEC-14', '.Net Technologies'),
('B.Tech', 'IT', 'IV', 'II', 'SVEC-14', 'Ad-hoc and Wireless Sensor Networks'),
('B.Tech', 'IT', 'IV', 'II', 'SVEC-14', 'Big Data'),
('B.Tech', 'IT', 'IV', 'II', 'SVEC-14', 'Software Project Management'),
('B.Tech', 'EEE', 'I', 'I', 'SVEC-16', 'Programming in C');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
