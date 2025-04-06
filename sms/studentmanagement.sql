-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 04:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `email`, `phone`) VALUES
(1, 'jack', 'jack@gmail.com', 1905648243),
(3, 'bob', 'bob@gmail.com', 1278455847),
(4, 'shamp', 'otter@gmail.com', 1927486648);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(11) NOT NULL,
  `course_code` varchar(15) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `department` varchar(40) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `course_code`, `name`, `department`, `description`, `image`) VALUES
(3, 'CSE370', 'Database System', 'CSE', 'You will work with database languages and popular ', 'image/Database System.jpeg'),
(6, 'BUS201', 'Business and Human Communication', 'BSS', 'This course aims to teach the theory and process of communication; including barriers to effective communication; communication skills;', 'image/bss1.webp'),
(7, 'MAT120', 'Integral Calculus and Differential Equat', 'MNS', 'Definitions of integration. Integration by the method of substitution. Integration by parts. Standard integrals. Integration by method of successive reduction', 'image/Integral Calculus.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `course_assign`
--

CREATE TABLE `course_assign` (
  `assign_id` int(11) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `c_code` varchar(15) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_assign`
--

INSERT INTO `course_assign` (`assign_id`, `student_id`, `c_code`, `semester`) VALUES
(9, 'edward cullen', 'BUS201', 'fall2023'),
(10, 'mahesh', 'CSE370', 'summer2023'),
(11, 'mikasa', 'MAT120', 'summer2023'),
(12, 'shamp', 'MAT120', 'summer2023'),
(13, 'shamp', 'CSE370', 'summer2023'),
(14, 'shamp', 'BUS201', 'fall2023');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'admin', 1948328279, 'admin01@gmail.com', 'admin', '1234'),
(3, 'teacher1', 1820558237, 'teacher1chad@gmail.com', 'teacher', '4538'),
(4, 'staff1', 1345628211, 'staff01@gmail.com', 'staff', '1234'),
(6, 'edward cullen', 1574862286, 'edwardc@gmail.com', 'student', '3465'),
(7, 'mahesh', 1646382341, 'maheshdalle@gmail.com', 'student', '5539'),
(8, 'kaeya', 1287956293, 'kaeyaalb@gmail.com', 'student', '1234'),
(9, 'teacher2', 193725473, 'dave@gmail.com', 'teacher', '1234'),
(11, 'staff2', 1376815592, 'hamudstaff@gmial.com', 'staff', '1867'),
(12, 'staff4', 1836475832, 'henrystaff@gmail.com', 'staff', '1234'),
(14, 'mikasa', 1633642856, 'sasageyo@gmail.com', 'student', '1234'),
(15, 'shamp', 1936478234, 'otter@gmail.com', 'student', '1385');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `course_assign`
--
ALTER TABLE `course_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_assign`
--
ALTER TABLE `course_assign`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
