-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2015 at 12:21 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `mark` int(1) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `student_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mark`, `subject_name`, `student_id`) VALUES
(5, 'English', 2),
(4, 'Geography', 2),
(6, 'History', 2),
(6, 'English', 1),
(6, 'English', 1),
(6, 'Maths', 1),
(6, 'Maths', 1),
(4, 'History', 1),
(4, 'History', 1),
(6, 'Math', 2),
(4, 'History', 1),
(6, 'Math', 2),
(4, 'History', 1),
(6, 'Math', 2),
(4, 'History', 1),
(6, 'Math', 2),
(4, 'History', 1),
(6, 'Math', 2),
(4, 'History', 1),
(6, 'Math', 2),
(4, 'History', 1),
(6, 'Math', 2),
(4, 'History', 1),
(6, 'Math', 2),
(4, 'English', 2),
(6, 'Chemistry', 3),
(6, 'English', 4),
(6, 'Chemistry', 3),
(6, 'English', 4),
(3, 'Literature', 5),
(5, 'Literature', 5),
(3, 'Literature', 5),
(5, 'Literature', 5),
(6, 'English', 3),
(6, 'English', 4),
(6, 'English', 3),
(6, 'English', 4),
(6, 'Literature', 3),
(6, 'English', 4),
(5, 'Ecology', 3),
(6, 'Literature', 3),
(5, 'Ecology', 3),
(6, 'Literature', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `unit_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_phone`, `unit_name`) VALUES
(1, 'student1', '11111111', '5A'),
(2, 'Student2', '222222', '5A'),
(3, 'Student3', '33-33-33', '5A'),
(4, 'Student4', '44-44-44', '5A'),
(5, 'Student5', '55-55-55', '3A');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_name` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_name`, `teacher_id`) VALUES
('Math', 1),
('Math', 2),
('Math', 1),
('Math', 2),
('English', 1),
('History', 2),
('Literature', 5),
('Ecology', 4),
('Chemistry', 3),
('Chemistry', 3),
('English', 5),
('English', 3),
('English', 5),
('English', 3),
('Math', 5),
('Math', 6),
('Math', 5),
('Math', 6);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `phone`, `subject_name`) VALUES
(3, 'First Teacher', '00-00-00', 'English'),
(4, 'Third Teacher', '00-00-00', 'English'),
(5, 'Fourth Teacher', '00-00-00', 'History'),
(6, 'Second Teacher', '00-00-00', 'History');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `unit_name` varchar(100) NOT NULL,
  `teacher_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_name`, `teacher_id`) VALUES
('5A', 3),
('5A', 4),
('5A', 5),
('5A', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_name` (`subject_name`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_name` (`unit_name`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD KEY `subject_name` (`subject_name`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_name` (`subject_name`) USING BTREE;

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD KEY `unit_name` (`unit_name`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
