-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2013 at 04:46 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cis`
--
CREATE DATABASE IF NOT EXISTS `cis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cis`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `username` varchar(40) NOT NULL,
  `courseName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`username`, `courseName`) VALUES
('teacher1', 'Biology'),
('teacher1', 'Chemistry'),
('teacher1', 'History'),
('student1', 'Biology'),
('student1', 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `courseName` varchar(40) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT 'Untitled.txt',
  `mime` varchar(50) NOT NULL DEFAULT 'text/plain',
  `size` bigint(20) unsigned NOT NULL DEFAULT '0',
  `data` mediumblob NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentresponse`
--

CREATE TABLE IF NOT EXISTS `studentresponse` (
  `courseName` varchar(40) NOT NULL,
  `topicName` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `feedback` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `dateAndTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentresponse`
--

INSERT INTO `studentresponse` (`courseName`, `topicName`, `username`, `feedback`, `comment`, `dateAndTime`) VALUES
('Biology', 'RNA', 'student1', 2, 'Enter your comments here.', '2013-11-20 18:41:28'),
('Biology', 'Cell', 'student1', 3, 'Enter your comments here.', '2013-11-20 18:42:51'),
('Biology', 'RNA', 'student1', 3, 'Done!', '2013-11-20 18:43:23'),
('Biology', 'RNA', 'student1', 1, 'Enter your comments here.', '2013-11-20 22:00:56'),
('Biology', 'Cell', 'student1', 3, 'Enter your comments here.', '2013-11-20 22:03:20'),
('Biology', 'Cell', 'student1', 2, 'Enter your comments here.', '2013-11-20 22:04:12'),
('Biology', 'RNA', 'student1', 1, 'Enter your comments here.', '2013-11-20 22:05:20'),
('Biology', 'Cell', 'student1', 3, 'Enter your comments here.', '2013-11-20 22:06:34'),
('Biology', 'RNA', 'student1', 2, 'Enter your comments here.', '2013-11-20 22:09:00'),
('Biology', 'Copper', 'student1', 5, 'Enter your comments here.', '2013-11-20 22:09:32'),
('Biology', 'Cell', 'student1', 1, 'Hello.', '2013-11-21 23:54:56'),
('Biology', 'RNA', 'student1', 3, 'World', '2013-11-21 23:55:17'),
('Biology', 'Cell', 'student1', 4, 'hi', '2013-11-21 23:55:33'),
('Biology', 'Cell', 'student1', 5, 'Terrible', '2013-11-22 00:16:35'),
('Biology', 'Cell', 'student1', 3, 'Try again', '2013-11-22 00:17:09'),
('Biology', 'Cell', 'student1', 1, 'whatever', '2013-11-22 00:20:34'),
('Biology', 'RNA', 'student1', 4, 'Elaborate', '2013-11-22 00:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `courseName` varchar(40) NOT NULL,
  `topicName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`courseName`, `topicName`) VALUES
('Biology', 'Cell Division'),
('Biology', 'RNA'),
('', 'Base pairs'),
('', 'Base pairs'),
('', 'DNA'),
('Chemistry', 'Acid'),
('Chemistry', 'bombs'),
('Biology', 'Copper');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL DEFAULT 'csc546',
  `email` varchar(40) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `cellPhoneProvider` varchar(80) NOT NULL,
  `isInstructor` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `telephone`, `cellPhoneProvider`, `isInstructor`) VALUES
('teacher1', 'e38ad214943daad1d64c102faec29de4afe9da3d', 'quang.vo31@gmail.com', '7146614832', '@vmobl.com', 1),
('student1', 'e38ad214943daad1d64c102faec29de4afe9da3d', 'quang.vo31@gmail.com', '7146614832', '@vmobl.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
