-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2015 at 09:41 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emailing`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `message_title` varchar(255) NOT NULL,
  `message_content` text NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_read` varchar(255) NOT NULL DEFAULT 'unread',
  `date_deleted` date DEFAULT NULL,
  `email_to` text NOT NULL,
  `from_user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_title`, `message_content`, `date_sent`, `is_read`, `date_deleted`, `email_to`, `from_user_id`) VALUES
(1, 'hi', 'hi hi', '2015-11-04 18:43:47', 'unread', '0000-00-00', 'kokolina18@abv.bg', 1),
(2, 'bye ', 'bye bye', '2015-11-04 18:43:47', 'unread', '2015-11-07', 'ippa1@abv.bg', 1),
(3, 'here', 'here there and everywhere', '2015-11-04 18:44:38', 'unread', NULL, 'kokolina1888@gmail.com', 2),
(4, 'one', 'one one one', '2015-11-04 18:44:38', 'unread', NULL, 'kokolina18@abv.bg', 2),
(5, 'title', 'title title', '2015-11-06 14:50:48', 'unread', NULL, 'kokolina188@abv.bg', 1),
(6, 'to milena', 'milena milena', '2015-11-06 14:51:57', 'unread', NULL, 'kokolina18@abv.bg', 2),
(7, 'monika e prase', 'prase prase', '2015-11-07 19:36:34', 'unread', NULL, 'kokolina18@abv.bg', 0),
(8, 'just a message', 'message message message', '2015-11-07 19:42:57', 'unread', NULL, 'kokolina18@abv.bg', 1),
(9, 'messages', 'the message', '2015-11-07 19:53:57', 'unread', NULL, 'kokolina18@abv.bg', 1),
(10, 'messages', 'the message', '2015-11-07 19:59:24', 'unread', NULL, 'kokolina18@abv.bg', 1),
(11, 'email', 'kokolina18@abv.bg', '2015-11-07 20:04:06', 'unread', NULL, 'kokolina18@abv.bg', 1),
(12, '1', '2', '2015-11-07 20:05:46', 'unread', NULL, 'kokolina18@abv.bg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `first_name`, `last_name`, `password`) VALUES
(1, 'monika', 'monika', 'tomova', '0'),
(2, 'milena', 'milena', 'tomova', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_user_id` (`from_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
