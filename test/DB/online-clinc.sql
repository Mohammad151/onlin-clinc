-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 12:35 AM
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
  `time_hour` varchar(6) DEFAULT NULL,
  `Place` varchar(255) NOT NULL,
  `clinic` varchar(255) NOT NULL,
  `patient_age` int(5) NOT NULL,
  `message_sent` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `time_appointment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`FName`, `Realitive_Realation`, `phone`, `time_hour`, `Place`, `clinic`, `patient_age`, `message_sent`, `email`, `id`, `status`, `time_appointment`) VALUES
('zaid almasarwa', 'child', '07867075222', '21:58:', '', '1', 20, '0', 'almasarwazaid@gmail.com', 1, 0, ''),
('zaid almasarwa', 'child', '07867075222', '22:02:', '', '1', 20, '0', 'almasarwazaid@gmail.com', 2, 0, ''),
('Qusai', 'Hamdan', '077843448454', '22:46:', '', '1', 19, '0', 'almasarwazaid@gmail.com', 3, 0, '2022-12-22'),
('Qusai', 'Hamdan', '077843448454', '22:46:', '', '1', 19, '0', 'almasarwazaid@gmail.com', 4, 0, '2022-12-22'),
('Qusai', 'Hamdan', '047946994', '22:48:', '', '1', 20, '0', 'almasarwazaid@gmail.com', 5, 0, '2022-12-30'),
('Qusai', 'Hamdan', '077843448454', '22:52:', '', '1', 19, '0', 'almasarwazaid@gmail.com', 6, 0, '2022-12-22'),
('Qusai', 'Hamdan', '077843448454', '22:52:', '', '1', 19, '0', 'almasarwazaid@gmail.com', 7, 0, '2022-12-22'),
('qusai', 'child', '5876', '22:53:', '', '1', 20, '0', 'almasarwazaid@gmail.com', 8, 0, '2023-03-04'),
('Qusai', 'Hamdan', '0777777777', '15:00', '', '1', 25, '0', 'almasarwazaid@gmail.com', 9, 0, '2023-03-31'),
('zaid almasarwa', 'ss', '0789999999999', '19:00', '', '1', 95, '0', 'almasarwazaid@gmail.com', 10, 0, '2022-12-20'),
('zaid almasarwa', 'ss', '0789999999999', '19:00', '', '1', 95, '0', 'almasarwazaid@gmail.com', 11, 0, '2022-12-20'),
('QUSAIhamdan', 'childd', '077797977', '22:15', '', '1', 42, '0', 'almasarwazaid@gmail.com', 12, 0, '2022-02-22'),
('ZAID MASARWAH', 'CHILDEDD', '07779797', '22:00', '', '1', 50, '0', 'almasarwazaid@gmail.com', 13, 0, '2023-02-22'),
('uuuuu', '', '68789798', '10 AM', '', '1', 88, '0', 'almasarwazaid@gmail.com', 14, 0, '2023-11-22'),
('uuuuu', '', '68789798', '10 AM', '', '1', 88, 'Helllooo', 'almasarwazaid@gmail.com', 15, 0, '2023-11-22'),
('zaid', '', '2222222', '1 PM', '', '1', 15, 'ooooo', 'almasarwazaid@gmail.com', 16, 0, '2022-12-23'),
('nmnkjkj', 'Brother', '077979797', '3 PM', '', '1', 100, 'jgjhgj', 'almasarwazaid@gmail.com', 17, 0, '0069-05-29');

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
('ahmadalmasarwa@email.com', 'Azazaz1212', 'DR.Ahmad Almasarwa', 'Ear Nose and Throat', 'Amman', 20, 1, '0784567891', 4, '../images/user.png', '30'),
('mohammedmostafa@email.com', 'Azazaz1212', 'DR.mohammad Mostafa', 'Ear Nose and Throat', 'Maan', 300, 2, '0794567891', 4, '../images/user.png', '30'),
('zaidallabadi@gmail.com ', 'Azazaz1212', 'DR.Abdalla Al-makahleh', 'Gynecology and Infertility', 'Maan', 20, 3, '0784567258', 4, '../images/user.png', '20'),
('osamamo@gmail.com', 'Azazaz1212', 'DR.osama malkawi', 'Ear Nose and Throat', 'Maan', 20, 4, '0784567457', 4, '../images/user.png', '30');

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
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
