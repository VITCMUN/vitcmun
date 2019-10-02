-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 04:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `agenda_1ec` int(10) DEFAULT NULL,
  `agenda_2ec` int(10) DEFAULT NULL,
  `agenda_3ec` int(10) DEFAULT NULL,
  `agenda_1unscw` int(10) DEFAULT NULL,
  `agenda_2unscw` int(10) DEFAULT NULL,
  `agenda_3unscw` int(10) DEFAULT NULL,
  `agenda_1aippm` int(10) DEFAULT NULL,
  `agenda_2aippm` int(10) DEFAULT NULL,
  `agenda_3aippm` int(10) DEFAULT NULL,
  `agenda_1disec` int(10) DEFAULT NULL,
  `agenda_2disec` int(10) DEFAULT NULL,
  `agenda_3disec` int(10) DEFAULT NULL,
  `agenda_1whsw` int(10) DEFAULT NULL,
  `agenda_2whsw` int(10) DEFAULT NULL,
  `agenda_3whsw` int(10) DEFAULT NULL,
  `agenda_1sc` int(10) DEFAULT NULL,
  `agenda_2sc` int(10) DEFAULT NULL,
  `agenda_3sc` int(10) DEFAULT NULL,
  `agenda_1ip` int(10) DEFAULT NULL,
  `agenda_2ip` int(10) DEFAULT NULL,
  `agenda_3ip` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`agenda_1ec`, `agenda_2ec`, `agenda_3ec`, `agenda_1unscw`, `agenda_2unscw`, `agenda_3unscw`, `agenda_1aippm`, `agenda_2aippm`, `agenda_3aippm`, `agenda_1disec`, `agenda_2disec`, `agenda_3disec`, `agenda_1whsw`, `agenda_2whsw`, `agenda_3whsw`, `agenda_1sc`, `agenda_2sc`, `agenda_3sc`, `agenda_1ip`, `agenda_2ip`, `agenda_3ip`) VALUES
(2, 1, 0, 3, 0, 0, 3, 0, 0, 3, 0, 0, 3, 0, 0, 3, 0, 0, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testresponse`
--

CREATE TABLE `testresponse` (
  `email` varchar(30) NOT NULL,
  `council1` varchar(30) NOT NULL,
  `council2` varchar(30) NOT NULL,
  `council3` varchar(30) NOT NULL,
  `council4` varchar(30) NOT NULL,
  `council5` varchar(30) NOT NULL,
  `council6` varchar(30) NOT NULL,
  `council7` varchar(30) NOT NULL,
  `response` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testresponse`
--

INSERT INTO `testresponse` (`email`, `council1`, `council2`, `council3`, `council4`, `council5`, `council6`, `council7`, `response`) VALUES
('abc@gmail.com', 'Agenda 1EC', 'Agenda 1UNSCW', 'Agenda 1AIPPM', 'Agenda 1DISEC', 'Agenda 1WHSW', 'Agenda 1SC', 'Agenda 1IP', 0),
('abc123@gmail.com', 'Agenda 2EC', 'Agenda 1UNSCW', 'Agenda 1AIPPM', 'Agenda 1DISEC', 'Agenda 1WHSW', 'Agenda 1SC', 'Agenda 1IP', 0),
('gauravdemo@gmail.com', 'Agenda 1EC', 'Agenda 1UNSCW', 'Agenda 1AIPPM', 'Agenda 1DISEC', 'Agenda 1WHSW', 'Agenda 1SC', 'Agenda 1IP', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
