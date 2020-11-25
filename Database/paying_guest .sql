-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 03:06 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paying_guest`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `email` varchar(50) NOT NULL,
  `check_in` varchar(50) NOT NULL,
  `check_out` varchar(50) NOT NULL,
  `no_of_guest` int(11) NOT NULL,
  `no_of_rooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`email`, `check_in`, `check_out`, `no_of_guest`, `no_of_rooms`) VALUES
('meenakshi@gmail.com', '5 june', '8 june', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `home_register`
--

CREATE TABLE `home_register` (
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `family` int(11) NOT NULL,
  `girls` int(11) NOT NULL,
  `boys` int(11) NOT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `ac_service` int(11) NOT NULL,
  `food_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_register`
--

INSERT INTO `home_register` (`email`, `address`, `city`, `state`, `family`, `girls`, `boys`, `no_of_rooms`, `price`, `ac_service`, `food_service`) VALUES
('hardikdua08@gmail.com', '# 74,Barnala Road', 'Sirsa', 'Haryana', 0, 1, 0, 8, 5000, 1, 0),
('jatin@gmail.com', '#174,SECTOR-20', 'FARIDABAD', 'HARYANA', 0, 0, 1, 50, 4000, 1, 0),
('jitu@gmail.com', '236, Sector 8', 'Kurukshetra', 'Haryana', 1, 0, 1, 2, 1050, 1, 0),
('kanu@gmail.com', '236, Sector 8', 'Kurukshetra', 'Haryana', 1, 1, 1, 5, 1000, 1, 1),
('meenakshi@gmail.com', '89 sector 17', 'Kurukshetra', 'Haryana', 1, 0, 1, 2, 4500, 1, 0),
('nikhilmittal@gmail.com', '#116, BHAMASHAH NAGAR', 'HISAR', 'HARYANA', 0, 1, 1, 200, 70000, 1, 1),
('ramanik@gmail.com', '#42, Sector-3', 'Kurukshetra', 'Haryana', 0, 1, 1, 40, 1000, 0, 1),
('saket.garg@gmail.com', '1886 sector 8', 'Kurukshetra', 'Haryana', 1, 0, 1, 2, 2000, 1, 0),
('tarsem@gmail.com', '692 sector 13', 'Kurukshetra', 'Haryana', 0, 0, 1, 2, 3000, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `person_register`
--

CREATE TABLE `person_register` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_register`
--

INSERT INTO `person_register` (`email`, `name`, `mobile`, `password`) VALUES
('hardikdua08@gmail.com', 'hardikdua', '9053410252', 'hardik0899'),
('jatin@gmail.com', 'Jatin', '9650325327', 'jatin123'),
('jitu@gmail.com', 'jitender', '8889996665', 'jitu'),
('kanu@gmail.com', 'kanu', '9466420188', 'kanu'),
('meenakshi@gmail.com', 'meenakshi', '8888888888', 'meenakshi'),
('nikhilmittal@gmail.com', 'Nikhil', '9896868303', 'nikhil123'),
('ramanik@gmail.com', 'Raman', '9672741025', 'raman123'),
('saket.garg@gmail.com', 'saket garg', '8930606703', 'saket'),
('shruti.g@carwale.com', 'shruti', '9464480781', 'Pass@123'),
('tarsem@gmail.com', 'Tarsem', '9467803662', 'tarsem');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `no_of_visitors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`no_of_visitors`) VALUES
(25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_register`
--
ALTER TABLE `home_register`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `person_register`
--
ALTER TABLE `person_register`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
