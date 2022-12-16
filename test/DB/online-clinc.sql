-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 06:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-clinc`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `FName` varchar(255) NOT NULL,
  `Realitive_Realation` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `history` time(6) DEFAULT NULL,
  `Place` varchar(255) NOT NULL,
  `clinic` varchar(255) NOT NULL,
  `patient_age` int(5) NOT NULL,
  `message_sent` int(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`FName`, `Realitive_Realation`, `phone`, `history`, `Place`, `clinic`, `patient_age`, `message_sent`, `email`) VALUES
('nmnkjkj', 'kjjnjkkkk', '5888888', NULL, '15', '8', 0, 0, ''),
('nmnkjkj', 'kjjnjkkkk', '5888888', NULL, '15', '8', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(15) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `location_Doc` varchar(15) NOT NULL,
  `Fees` int(10) NOT NULL,
  `id` int(20) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `evaluation` int(5) NOT NULL DEFAULT 4,
  `img` varchar(255) NOT NULL DEFAULT '../images/user.png',
  `Waiting_Time` varchar(20) NOT NULL DEFAULT '30'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Email`, `Pass`, `Name`, `specialty`, `location_Doc`, `Fees`, `id`, `Phone`, `evaluation`, `img`, `Waiting_Time`) VALUES
('ahmadalmasarwa@email.com', 'Azazaz1212', ' Ahmad Almasarwa', ' Dermatology and Venereology', 'Amman', 20, 1, '0784567891', 4, '../images/user.png', '30'),
('mohammedmostafa@email.com', 'Azazaz1212', 'mohammad Mostafa', 'sex', 'Maan', 300, 2, '0794567891', 4, '../images/user.png', '30');

-- --------------------------------------------------------

--
-- Table structure for table `make1`
--

CREATE TABLE `make1` (
  `Place` varchar(255) NOT NULL,
  `clinic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make1`
--

INSERT INTO `make1` (`Place`, `clinic`) VALUES
('3', 'clinic 13'),
('3', 'clinic 13'),
('Irbid', 'clinic 12'),
('Ajloun', 'clinic 8'),
('Irbid', 'clinic 2'),
('', ''),
('', ''),
('Jerash', 'clinic 15'),
('Jerash', 'clinic 15'),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `Doc_id` int(11) NOT NULL,
  `user_Email` varchar(255) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Pass`, `phone`) VALUES
('', '', '', ''),
('nmnkjkj', 'almasarw55azaid@gmail.com', 'ssSS12121', '8828828282'),
('zaid', 'almasarwazaid@gmail.com', 'Azazaz1212', '0786707010'),
('zaid almasarwa', 'mxcnkjncj@gmail.com', 'Azazaz1212', 'vdnkdvncb'),
('mncsjxcb', 'zaid0000@gmail.com', 'Azazaz1212', '07821152266');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
