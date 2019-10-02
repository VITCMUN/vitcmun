-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 10:55 AM
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
-- Table structure for table `unsc`
--

CREATE TABLE `unsc` (
  `country` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unsc`
--

INSERT INTO `unsc` (`country`) VALUES
('Afghanistan'),
('Arab Republic of Egypt'),
('Australia'),
('Bolivia'),
('Brazil'),
('China'),
('France'),
('Germany'),
('Iraq'),
('Islamic Republic of Iran'),
('Israel'),
('Japan'),
('Kuwait'),
('Moldova'),
('Netherlands'),
('Republic of Cuba'),
('Republic of India'),
('Russian Federation'),
('Saudi Arabia'),
('Sweden'),
('Ukraine'),
('United Kingdom'),
('United States of America'),
('Yemen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
