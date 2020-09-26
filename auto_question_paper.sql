-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 04:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto_question_paper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(15) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Nikunj', 'Delavadiya', 'delvadiyanikunj1234@gmail.com', 'nikunj', '7777'),
(2, 'Nikunj', 'Delvadiya', 'delvadiyanikunj1234@gmail.com', 'nikunj', '7777'),
(3, 'Navdeep', 'Dadhania', 'navdeeppatel.1805@gmail.com', 'nawab', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `ID` int(15) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`ID`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Nikunj', 'Delavadiya', 'delvadiyanikunj1234@gmail.com', 'nikunj', '7777'),
(2, 'Nikunj', 'Delvadiya', 'delvadiyanikunj1234@gmail.com', ',bgugig', 'gkghvj'),
(4, 'Nik', 'patel', 'delvadiyanikunj1234@gmail.com', 'nik', '7777'),
(5, 'Nikunj', 'Delvadiya', 'delvadiyanikunj1234@gmail.com', 'dgssags', 'sdg'),
(6, 'Nikunj', 'Delvadiya', 'delvadiyanikunj1234@gmail.com', 'fejgbr', '48448496');

-- --------------------------------------------------------

--
-- Table structure for table `format_1`
--

CREATE TABLE `format_1` (
  `type` varchar(15) NOT NULL,
  `note` varchar(25) NOT NULL,
  `chapter` varchar(15) NOT NULL,
  `difficulty` varchar(15) NOT NULL,
  `marks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `question` varchar(35) NOT NULL,
  `chapter` varchar(20) NOT NULL,
  `difficulty` varchar(20) NOT NULL,
  `marks` int(10) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
