-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 01:48 PM
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
  `time_hour` varchar(255) DEFAULT NULL,
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
('mohammad', 'Me', '0789546321', '10:00 AM', '', '5', 54, '', 'mohammad@gmail.com', 70, 0, '2023-01-27');

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
('mohammedmostafa@email.com', 'Azazaz1212', 'DR.mohammad Mostafa', 'Ear Nose and Throat', 'Maan', 30, 2, '0794567891', 4, '../images/user.png', '30'),
('abdallmakahleh@gmail.com', 'Azazaz1212', 'DR.Abdalla Al-makahleh', 'Gynecology and Infertility', 'Maan', 20, 3, '0784567258', 4, '../images/user.png', '20'),
('osamamo@gmail.com', 'Azazaz1212', 'DR.osama malkawi', 'Ear Nose and Throat', 'Maan', 20, 4, '0784567457', 4, '../images/user.png', '30'),
('mousaalkhalid@gmail.com', 'Azazaz1212', 'DR.Mousa AL-khalid', 'Ear Nose and Throat', 'Irbid', 25, 5, '0785585222', 4, '../images/user.png', '20'),
('maheralmalik@gmail.com', 'Azazaz1212', 'DR.Maher AL-malik', 'Ear Nose and Throat', 'Irbid', 15, 6, '0785214547', 4, '../images/user.png', '30'),
('sawsanmo@gmail.com', 'Azazaz1212', 'DR.Sawsan Omar', 'Radiology', 'Irbid', 20, 7, '0794567587', 4, '../images/user.png', '30'),
('lailasa@gmail.com', 'Azazaz1212', 'DR.Laila Issa', 'Radiology', 'Irbid', 15, 8, '0785285022', 4, '../images/user.png', '30');

-- --------------------------------------------------------

--
-- Table structure for table `doc_time`
--

CREATE TABLE `doc_time` (
  `id` int(11) NOT NULL,
  `times_d` varchar(9) NOT NULL,
  `isBooking` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_time`
--

INSERT INTO `doc_time` (`id`, `times_d`, `isBooking`) VALUES
(5, '8:00 am', 0),
(5, '9:00 am', 0),
(5, '10:00 am', 0),
(5, '11:00 am', 0),
(5, '12:00 pm', 0),
(5, '1:00 pm', 0),
(5, '2:00 pm', 0),
(5, '3:00 pm', 0),
(5, '4:00 pm', 0),
(5, '6:00 pm', 0),
(5, '7:00 pm', 0),
(5, '8:00 pm', 0);

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
('mohammad ', '', 'Azazaz1212', '07867075222'),
('zaid almasarwa', 'almasarwazaid@gmail.com', 'Azazaz1212', '0786707010'),
('aya meqday', 'ayameq@gmail.com', 'Azazaz1212', '07867075555'),
('mohammad', 'mohammad@gmail.com', 'Azazaz1212', '07867075222'),
('obada emad', 'obadaemad@gmail.com', 'Azazaz1212', '0786808010');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
