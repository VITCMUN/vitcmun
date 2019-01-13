-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 05:17 PM
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
-- Table structure for table `whsr`
--

CREATE TABLE `whsr` (
  `country` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whsr`
--

INSERT INTO `whsr` (`country`) VALUES
('Tulsi Gabbard, Secretary of State'),
('Robert Gates, Secretary of Defence'),
('Janet Napolitano, Secretary of Homeland Security'),
('Michael Hayden, Director- CIA'),
('James Comey, Director- FBI'),
('Jeff Prescott, National Security Advisor to the President'),
('Charles Frank Bolden, NASA Administrator'),
('GEN Mark A. Milley, Chief of Staff- Army'),
('ADM John M. Richardson, Chief of Naval Operations'),
('Gen David L. Goldfein, Chief of Staff- Air Force'),
('Joseph Francis Dunford Jr., Chairman- Joint Chiefs of Staff'),
('Gen Joseph Votel, Commander USCENTCOM'),
('GEN Paul M. Nakasone, Commander US Cyber COM'),
('Eric Shinseki, Director, National Security Agency'),
('LTG Richard D. Clarke, Commander, US Special Operations Command'),
('Brett McGurk, US Special Envoy in Syria');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
