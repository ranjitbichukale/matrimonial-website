-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 05:09 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matromani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `eid` int(5) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `currentadd` varchar(50) NOT NULL,
  `permaddress` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hoobies` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL,
  `adharno` bigint(30) NOT NULL,
  `regi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`eid`, `fname`, `mname`, `lname`, `currentadd`, `permaddress`, `gender`, `mob`, `username`, `password`, `hoobies`, `job`, `adharno`, `regi`) VALUES
(1, 'jabbar', 'lalasaheb', 'shaikh', ' kop', ' kop', 'male', 123, 'Jabbarshaikh', 'jabbar.123', ' teaching', 'director', 123456, '');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `cid` int(5) NOT NULL,
  `profile` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `cast` varchar(20) NOT NULL,
  `family` varchar(20) NOT NULL,
  `edu` varchar(30) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `aincome` bigint(10) NOT NULL,
  `property` varchar(30) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `address` varchar(35) NOT NULL,
  `state` varchar(20) NOT NULL,
  `dis` varchar(20) NOT NULL,
  `look` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `regidate` date NOT NULL,
  `phfirst` text NOT NULL,
  `phsecond` text NOT NULL,
  `phthird` text NOT NULL,
  `phfour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`cid`, `profile`, `fname`, `mname`, `lname`, `dob`, `religion`, `country`, `username`, `password`, `age`, `gender`, `bg`, `cast`, `family`, `edu`, `profession`, `aincome`, `property`, `mob`, `address`, `state`, `dis`, `look`, `color`, `image`, `regidate`, `phfirst`, `phsecond`, `phthird`, `phfour`) VALUES
(1, 'self', 'saba', 'jabbar', 'shaikh', '11-sep-96', 'muslin', 'india', 'Sabashaikh', 'saba123', 0, 'female', '', '', '', '', '', 0, '', 0, '', '', '', '', '', 'p1.jpg', '0000-00-00', '2.jpg', 'p4.jpg', 'p5.jpg', 'p2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `eid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
