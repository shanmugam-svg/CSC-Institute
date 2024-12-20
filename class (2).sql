-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 01:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `WORKER_REF_ID` int(11) DEFAULT NULL,
  `BONUS_AMOUNT` int(10) DEFAULT NULL,
  `BONUS_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bonus`
--

INSERT INTO `bonus` (`WORKER_REF_ID`, `BONUS_AMOUNT`, `BONUS_DATE`) VALUES
(1, 5000, '2016-02-20 00:00:00'),
(2, 3000, '2016-06-11 00:00:00'),
(3, 4000, '2016-02-20 00:00:00'),
(1, 4500, '2016-02-20 00:00:00'),
(2, 3500, '2016-06-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `enrollno` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `theory` tinyint(4) NOT NULL,
  `practical` tinyint(4) NOT NULL,
  `total` tinyint(4) NOT NULL,
  `result` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`enrollno`, `subject`, `theory`, `practical`, `total`, `result`) VALUES
(1301, 'word', 38, 36, 74, 'pass'),
(1304, 'word', 46, 32, 78, 'pass'),
(1303, 'tally', 29, 31, 60, 'pass'),
(1299, 'c', 40, 40, 80, 'pass'),
(1299, 'cpp', 43, 30, 73, 'pass'),
(1298, 'word', 39, 36, 75, 'pass'),
(1298, 'excel', 36, 30, 66, 'pass'),
(1306, 'word', 33, 34, 67, 'pass'),
(1298, 'c', 32, 36, 68, 'pass'),
(1302, 'word', 35, 36, 71, 'pass'),
(1302, 'excel', 46, 39, 85, 'pass'),
(1302, 'tally', 33, 30, 63, 'pass'),
(1305, 'word', 49, 39, 88, 'pass'),
(1306, 'word', 26, 34, 60, 'pass'),
(1300, 'word', 48, 39, 87, 'pass'),
(1300, 'excel', 39, 39, 78, 'pass'),
(1300, 'c', 32, 31, 63, 'pass'),
(1300, 'cpp', 46, 31, 77, 'pass'),
(1299, 'vb', 39, 30, 69, 'pass'),
(1299, 'sql', 44, 31, 75, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enrollno` int(11) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `course` varchar(5) DEFAULT 'DCA',
  `fees` int(11) NOT NULL DEFAULT '6000',
  `gender` varchar(6) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `area` varchar(20) NOT NULL,
  `dateofjoin` date NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrollno`, `studentname`, `course`, `fees`, `gender`, `mobileno`, `area`, `dateofjoin`, `password`) VALUES
(1298, 'anand', 'dcat', 9600, 'male', '9089786756', 'tnagar', '2018-09-12', '1234'),
(1299, 'jegan', 'dcat', 9600, 'male', '9764313265', 'tambaram', '2018-09-12', '1234'),
(1300, 'durga', 'dca', 12000, 'female', '9156895654', 'ambattur', '2018-09-12', '1234'),
(1301, 'louis', 'dca', 8500, 'male', '8922786756', 'tnagar', '2018-09-13', '1234'),
(1302, 'harini', 'dcat', 12000, 'female', '9933786756', 'avadi', '2018-09-13', '1234'),
(1303, 'baskar', 'dmo', 4000, 'male', '9636365252', '', '2018-09-13', '1234'),
(1304, 'Varun', 'dmo', 4600, 'male', '', 'vadapalani', '2018-09-13', '1234'),
(1305, 'lewis', 'dca', 8600, 'male', '', 'ambattur', '2018-09-15', '1234'),
(1306, 'ramya', 'dmo', 4600, 'female', '', 'madurai', '2018-09-15', '1234'),
(1307, 'Madan', 'dca', 7600, 'male', '', 'madurai', '2018-09-15', '1234'),
(1314, 'Dinesh', 'dmo', 4000, 'male', '9088776655', 'chennai', '2018-09-16', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `WORKER_ID` int(11) NOT NULL,
  `FIRST_NAME` char(25) DEFAULT NULL,
  `LAST_NAME` char(25) DEFAULT NULL,
  `SALARY` int(15) DEFAULT NULL,
  `JOINING_DATE` datetime DEFAULT NULL,
  `DEPARTMENT` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`WORKER_ID`, `FIRST_NAME`, `LAST_NAME`, `SALARY`, `JOINING_DATE`, `DEPARTMENT`) VALUES
(3, 'Vishal', 'Singhal', 300000, '2014-02-20 09:00:00', 'HR'),
(4, 'Amitabh', 'Singh', 500000, '2014-02-20 09:00:00', 'Admin'),
(5, 'Vivek', 'Bhati', 500000, '2014-06-11 09:00:00', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `enno` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `course` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`enno`, `sname`, `course`) VALUES
(44, 'raja', 'dca'),
(45, 'ajay', 'csp'),
(44, 'raja', 'dca'),
(46, 'jai', 'dcat'),
(46, 'mohan', 'dca');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `WORKER_REF_ID` int(11) DEFAULT NULL,
  `WORKER_TITLE` char(25) DEFAULT NULL,
  `AFFECTED_FROM` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`WORKER_REF_ID`, `WORKER_TITLE`, `AFFECTED_FROM`) VALUES
(1, 'Manager', '2016-02-20 00:00:00'),
(2, 'Executive', '2016-06-11 00:00:00'),
(8, 'Executive', '2016-06-11 00:00:00'),
(5, 'Manager', '2016-06-11 00:00:00'),
(4, 'Asst. Manager', '2016-06-11 00:00:00'),
(7, 'Executive', '2016-06-11 00:00:00'),
(6, 'Lead', '2016-06-11 00:00:00'),
(3, 'Lead', '2016-06-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `WORKER_ID` int(11) NOT NULL,
  `FIRST_NAME` char(25) DEFAULT NULL,
  `LAST_NAME` char(25) DEFAULT NULL,
  `SALARY` int(15) DEFAULT NULL,
  `JOINING_DATE` datetime DEFAULT NULL,
  `DEPARTMENT` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`WORKER_ID`, `FIRST_NAME`, `LAST_NAME`, `SALARY`, `JOINING_DATE`, `DEPARTMENT`) VALUES
(1, 'raja', 'Arora', 100000, '2014-02-20 09:00:00', 'HR'),
(2, 'RAJESH', 'Verma', 80000, '2014-06-11 09:00:00', 'Admin'),
(3, 'Mr.  Vishal', 'Singhal', 300000, '2014-02-20 09:00:00', 'HR'),
(4, 'Mr.  Amitabh', 'Singh', 500000, '2014-02-20 09:00:00', 'Admin'),
(5, 'Mr.  Vivek', 'Bhati', 500000, '2014-06-11 09:00:00', 'Admin'),
(6, 'Mr.  Vipul', 'Diwan', 200000, '2014-06-11 09:00:00', 'Account'),
(7, 'Mr.  Satish', 'Kumar', 75000, '2014-01-20 09:00:00', 'Account'),
(8, 'Mr.  Geetika', 'Chauhan', 90000, '2014-04-11 09:00:00', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD KEY `WORKER_REF_ID` (`WORKER_REF_ID`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD KEY `i1` (`enrollno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enrollno`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`WORKER_ID`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD KEY `WORKER_REF_ID` (`WORKER_REF_ID`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`WORKER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `WORKER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `WORKER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bonus`
--
ALTER TABLE `bonus`
  ADD CONSTRAINT `bonus_ibfk_1` FOREIGN KEY (`WORKER_REF_ID`) REFERENCES `worker` (`WORKER_ID`) ON DELETE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `fkey1` FOREIGN KEY (`enrollno`) REFERENCES `student` (`enrollno`);

--
-- Constraints for table `title`
--
ALTER TABLE `title`
  ADD CONSTRAINT `title_ibfk_1` FOREIGN KEY (`WORKER_REF_ID`) REFERENCES `worker` (`WORKER_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
