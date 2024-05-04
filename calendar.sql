-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 01:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Date` date NOT NULL,
  `TIme` time NOT NULL,
  `Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Date`, `TIme`, `Name`) VALUES
('2024-04-12', '00:00:00', ''),
('2024-04-12', '00:00:00', ''),
('2024-04-12', '09:00:00', ''),
('2024-04-12', '09:00:00', ''),
('2024-04-11', '10:00:00', ''),
('2024-04-11', '10:00:00', ''),
('2024-02-20', '09:00:00', ''),
('2024-02-20', '09:00:00', ''),
('2024-04-11', '09:00:00', ''),
('2024-04-11', '09:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Name` varchar(1000) NOT NULL,
  `Book_Date` date NOT NULL,
  `Service` varchar(1000) NOT NULL,
  `Btime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `First_Name` varchar(250) NOT NULL,
  `Last_Name` varchar(250) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email_Add` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`First_Name`, `Last_Name`, `Username`, `Password`, `Email_Add`) VALUES
('Christian Miguel', 'Rodillas', 'we', '123', 'cmiguelrodillas@gmail.com'),
('Christian Miguel', 'Rodillas', 'zein', '123', 'cmiguelrodillas@gmail.com'),
('Christian Miguel', 'Rodillas', 'christian', '5344334', 'cmiguelrodillas@gmail.com'),
('Christian Miguel', 'Rodillas', 'christian', '5344334', 'cmiguelrodillas@gmail.com'),
('Christian Miguel', 'Rodillas', 'yes', '123', 'cmiguelrodillas@gmail.com'),
('rosemarie', 'coronejo', 'maamrose', '123', 'cmiguelrodillas@gmail.com'),
('Christian Miguel', 'Rodillas', '2323', '2323', 'cmiguelrodillas@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
