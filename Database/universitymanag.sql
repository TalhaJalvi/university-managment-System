-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 01:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitymanag`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'Haider Ali', '67673df3ccb2193148617528fac991'),
(3, 'Talha', 'ddd'),
(11, 'admin', 'admin'),
(12, 'bursary', 'bursary');

-- --------------------------------------------------------

--
-- Table structure for table `examtimetable`
--

CREATE TABLE `examtimetable` (
  `Id` int(4) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examtimetable`
--

INSERT INTO `examtimetable` (`Id`, `address`, `date`) VALUES
(15, 'upload/Points.txt', '10-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `mentorlist`
--

CREATE TABLE `mentorlist` (
  `id` int(4) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentorlist`
--

INSERT INTO `mentorlist` (`id`, `address`, `date`) VALUES
(3, 'upload/Article.docx', '10-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `progressionplan`
--

CREATE TABLE `progressionplan` (
  `id` int(4) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progressionplan`
--

INSERT INTO `progressionplan` (`id`, `address`, `date`) VALUES
(5, 'upload/archivetempInstructions for Report .pdf', '10-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sregno` varchar(30) NOT NULL,
  `spassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sregno`, `spassword`) VALUES
('8', 'h'),
('esgja', 'h'),
('h', 'h'),
('jjj', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourses`
--

CREATE TABLE `studentcourses` (
  `id` int(4) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Studentname` varchar(50) NOT NULL,
  `sid` varchar(30) NOT NULL,
  `icpassportno` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `pno` varchar(30) NOT NULL,
  `intake` varchar(40) NOT NULL,
  `examdate` varchar(50) NOT NULL,
  `awardtype` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `courseintak` varchar(1000) NOT NULL,
  `courses` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentcourses`
--

INSERT INTO `studentcourses` (`id`, `Email`, `Studentname`, `sid`, `icpassportno`, `address`, `pno`, `intake`, `examdate`, `awardtype`, `specialization`, `courseintak`, `courses`) VALUES
(25, 'ss', 'ss', 'jjj', 'ss', 'ss', 'ssss', 'ss', 's', 's', 's', '', 's'),
(26, 'haider@gmail.com', 'ali', 'h', 'd', 'l', '3', '1st Year', '3', ' Double Award', 'Software Engineering', ' intake,retake,intake,', 'TCS3133 INTRODUCTION TO IOT,TCS3053 INTRODUCTION TO NETWORKS GROUP A : Intake Oct 2020, Feb 2021,TCS3053 INTRODUCTION TO NETWORKS GROUP B : Intake May 2020, June 2020,');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(4) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `Hobbies` varchar(200) NOT NULL,
  `cprogram` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `regno`, `fname`, `lname`, `DOB`, `email`, `gender`, `address`, `city`, `pincode`, `state`, `country`, `Hobbies`, `cprogram`) VALUES
(1, 'h', 'ali', 'rana', '0009-09-09', 'haider@gmail.com', 'Male', 'l', 'lk', '700', 'k', 'o', 'j', 'o'),
(2, '8', 'fnamevar', 'lnamevar', 'dobvar', 'emailvar', 'gendervar', 'addressvar', 'cityvar', 'pincode', 'statevar', 'countryvar', 'Drawing', 'cprogramvar'),
(3, 'jjj', 'Usmann', 'Abbasn', '224n', 'n', 'Female', 'Lahoree', 'Lahoree', '123455', 'Pakistan45', 'Pakistana', 'Cricketcc', 'BSCSee');

-- --------------------------------------------------------

--
-- Table structure for table `studentdocket`
--

CREATE TABLE `studentdocket` (
  `id` int(4) NOT NULL,
  `sregno` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdocket`
--

INSERT INTO `studentdocket` (`id`, `sregno`, `address`, `date`) VALUES
(3, 'h', ' upload/researchpaper format.pdf', '10-03-21'),
(4, 'jjj', ' upload/researchpaper format.pdf', '10-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `studentresult`
--

CREATE TABLE `studentresult` (
  `id` int(4) NOT NULL,
  `sregno` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentresult`
--

INSERT INTO `studentresult` (`id`, `sregno`, `address`) VALUES
(3, '3', '3'),
(4, '', ' upload/Solution pdf.pdf'),
(5, '', ' upload/Solution pdf.pdf'),
(6, '8', ' upload/Query.pdf'),
(7, 'jjj', ' upload/Question.pdf'),
(10, 'h', ' upload/Task Statement.pdf'),
(11, 'h', ' upload/helping material.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examtimetable`
--
ALTER TABLE `examtimetable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mentorlist`
--
ALTER TABLE `mentorlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progressionplan`
--
ALTER TABLE `progressionplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sregno`);

--
-- Indexes for table `studentcourses`
--
ALTER TABLE `studentcourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regno` (`regno`);

--
-- Indexes for table `studentdocket`
--
ALTER TABLE `studentdocket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sregno` (`sregno`);

--
-- Indexes for table `studentresult`
--
ALTER TABLE `studentresult`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `examtimetable`
--
ALTER TABLE `examtimetable`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mentorlist`
--
ALTER TABLE `mentorlist`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `progressionplan`
--
ALTER TABLE `progressionplan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentcourses`
--
ALTER TABLE `studentcourses`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentdocket`
--
ALTER TABLE `studentdocket`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentresult`
--
ALTER TABLE `studentresult`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentcourses`
--
ALTER TABLE `studentcourses`
  ADD CONSTRAINT `studentcourses_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sregno`);

--
-- Constraints for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD CONSTRAINT `studentdetails_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `student` (`sregno`);

--
-- Constraints for table `studentdocket`
--
ALTER TABLE `studentdocket`
  ADD CONSTRAINT `studentdocket_ibfk_1` FOREIGN KEY (`sregno`) REFERENCES `student` (`sregno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
