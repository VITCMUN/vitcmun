-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 05:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitcmun`
--

-- --------------------------------------------------------

--
-- Table structure for table `del`
--

CREATE TABLE `del` (
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `City` varchar(200) NOT NULL,
  `college` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `delegate_experience` varchar(5000) NOT NULL,
  `EB_experience` varchar(5000) NOT NULL,
  `committe_1` varchar(200) NOT NULL,
  `c11` varchar(200) NOT NULL,
  `c12` varchar(200) NOT NULL,
  `c13` varchar(200) NOT NULL,
  `committee_2` varchar(200) NOT NULL,
  `c21` varchar(200) NOT NULL,
  `c22` varchar(200) NOT NULL,
  `c23` varchar(200) NOT NULL,
  `Accomodation` varchar(100) NOT NULL,
  `food` varchar(10) NOT NULL,
  `sc_name` varchar(200) NOT NULL,
  `sc_email` varchar(200) NOT NULL,
  `sc_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
