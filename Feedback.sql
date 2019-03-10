-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2019 at 04:55 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept`, `total`) VALUES
(1, 'Computer Science', '2260');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `joining_date` date NOT NULL,
  `designation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `department`, `joining_date`, `designation`, `mobile`, `mail`, `userid`, `password`) VALUES
(1, '', '', '2019-01-02', '', '', '', '', ''),
(2, 'java', 'Chemistry', '2019-01-05', 'sdfa', '9159414383', 'vinfdf@gmail.com', '2313', ''),
(3, 'java', 'Chemistry', '2019-01-05', 'sdfa', '9159414383', 'vinfdf@gmail.com', '2313', ''),
(4, 'java', 'Chemistry', '2019-01-05', 'sdfa', '9159414383', 'vinfdf@gmail.com', '2313', ''),
(5, '', '', '2019-01-10', '', '', '', '', ''),
(6, 'me', 'Computer Science', '2019-02-10', 'sdfa', '9159414383', 'vinnu@gmail.com', '23', '22'),
(7, '3', 'Computer Science', '0003-03-23', '3', '3', '3@gmail.com', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `fdepartment`
--

CREATE TABLE `fdepartment` (
  `id` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdepartment`
--

INSERT INTO `fdepartment` (`id`, `dept`, `total`) VALUES
(1, 'Computer Science', '720');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `password`) VALUES
('feedbackadmin', '22');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `rollno`, `batch`, `department`, `mobile`, `mail`, `course`, `shift`, `password`) VALUES
(9, '1', '1', '1', 'Computer Science', '11', '1@gmail.com', '1', 'Morning Shift', '1'),
(10, '2', '2', '2', 'Computer Science', '2', '2@gmail.com', '2', 'Morning Shift', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fdepartment`
--
ALTER TABLE `fdepartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fdepartment`
--
ALTER TABLE `fdepartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
