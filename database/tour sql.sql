-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2020 at 08:40 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `message` int(50) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('prashant', 'as@yahoo.com', 2147483647, 0),
('', '', 0, 0),
('prashant', 'ravi@gmail.com', 2147483647, 0),
('ravi', 'pk@gmail.com', 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `JOINED` varchar(12) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHONE` varchar(13) NOT NULL,
  `DOB` datetime NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `COMMENT` varchar(300) NOT NULL,
  `ID PROOF` varchar(100) NOT NULL,
  UNIQUE KEY `EMAIL` (`EMAIL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`JOINED`, `NAME`, `ADDRESS`, `EMAIL`, `PHONE`, `DOB`, `GENDER`, `COMMENT`, `ID PROOF`) VALUES
('option1', 'prashant', 'mathura', 'pankaj@gmail.com', '', '2020-12-19 23:56:00', 'option1', 'i am here', 'tour.sql'),
('option1', 'prashant', 'mathura', 'pankajkrr@gmail.com', '', '2020-12-19 23:56:00', 'option1', 'i am here', 'tour.sql');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  ` First Name` varchar(12) NOT NULL,
  `Last Name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `gender` varchar(8) NOT NULL,
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (` First Name`, `Last Name`, `Email`, `Password`, `gender`) VALUES
('prashant', '', 'as@yahoo.com', '', 'option1'),
('prashant', '', 'pankaj@gmail.com', '', 'option1'),
('prashant', '', 'pk@gmail.com', '', 'option1'),
('prashant', '', 'ravi@gmail.com', '', 'option1'),
('komal', '', 'kbc@gmail.com', '', 'option2'),
('rakhi', '', 'rakhi@gmail.com', '', 'option2'),
('kushagra', '', 'ksg@gmail.com', '', 'option1'),
('prashant', '', '', '', '');
