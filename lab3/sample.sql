-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2013 at 11:18 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE IF NOT EXISTS `available` (
  `tno` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `class` varchar(10) NOT NULL,
  `no` int(11) NOT NULL,
  PRIMARY KEY (`tno`,`date`,`class`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available`
--


-- --------------------------------------------------------

--
-- Table structure for table `pgrs`
--

CREATE TABLE IF NOT EXISTS `pgrs` (
  `uid` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`uid`,`pname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pgrs`
--

INSERT INTO `pgrs` (`uid`, `pname`, `gender`, `age`) VALUES
('ilam', 'Ilambharathi Kanniah', 'M', 21),
('ilam', 'K Kanniah', 'M', 55),
('manik', 'Manik Gode', 'M', 21),
('manik', 'Rama', 'F', 25),
('sathish', 'Sathish GP', 'M', 20),
('sathish', 'Panneerselvam', 'M', 51),
('sri', 'Sridhar Reddy', 'M', 20),
('sri', 'Ramya Reddy', 'F', 20);

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE IF NOT EXISTS `total` (
  `tno` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `no` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`tno`,`class`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`tno`, `class`, `no`) VALUES
('16107', 'SL', 3),
('16107', '2A', 3),
('16107', '3A', 3),
('16017', '2S', 3);

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE IF NOT EXISTS `trains` (
  `tno` varchar(10) NOT NULL,
  `sc` varchar(10) NOT NULL,
  `pr` int(11) NOT NULL,
  PRIMARY KEY (`tno`,`sc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`tno`, `sc`, `pr`) VALUES
('16107', 'MS', 0),
('16107', 'TBM', 1),
('16107', 'KKDI', 2),
('16107', 'ERM', 3),
('16107', 'POE', 4),
('16107', 'JMY', 5),
('12615', 'MS', 0),
('12615', 'TBM', 1),
('12615', 'NGP', 2),
('12615', 'GWL', 3),
('12615', 'NDLS', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ts`
--

CREATE TABLE IF NOT EXISTS `ts` (
  `sc` varchar(7) NOT NULL,
  `sname` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts`
--

INSERT INTO `ts` (`sc`, `sname`) VALUES
('ms', 'Chennai Egmore'),
('tbm', 'Tambaram');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `pass`, `uname`) VALUES
('ilam', '827ccb0eea8a706c4c34a16891f84e7b', 'Ilambharathi Kanniah'),
('manik', '827ccb0eea8a706c4c34a16891f84e7b', 'Manik Gode'),
('sathish', '827ccb0eea8a706c4c34a16891f84e7b', 'Sathish GP'),
('sri', '827ccb0eea8a706c4c34a16891f84e7b', 'Sridhar Reddy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
