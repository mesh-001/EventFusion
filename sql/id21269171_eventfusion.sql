-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2023 at 01:16 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21269171_eventfusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventlist`
--

CREATE TABLE `eventlist` (
  `id` int(11) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Place` varchar(200) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `People` varchar(10000) NOT NULL,
  `Cost` varchar(10000) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `eventlist`
--

INSERT INTO `eventlist` (`id`, `Location`, `City`, `Place`, `Category`, `People`, `Cost`, `Contact`, `Date`, `Email`) VALUES
(7, 'Diamond Park Rd', 'Visakhapatnam', 'India', 'Workshops', '500', '10', '9983291122', '2023-11-24', 'festfirangi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE `participate` (
  `Username` varchar(200) NOT NULL,
  `Event` varchar(200) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Cost` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `participate`
--

INSERT INTO `participate` (`Username`, `Event`, `Date`, `Cost`) VALUES
('Likitha', 'Blood Donation Camp', '22/11/2023', '50');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `Email`, `Mobile`, `Address`, `Password`) VALUES
('Eekshita', 'eekshi@gmail.com', '7799174551', 'Vizag', '02baff0a2eb705010a8384f06a3f8620'),
('Harshitha', 'harshitha@gmail.com', '9969516585', 'Vizag', 'de13cb1183b1867b63fffd52537d3ebf'),
('hemanth', 'hemanth@gmail.com', '9573512371', 'vadali', '0d8034eec0730f63a0691011c9bf3bbc'),
('kumar', 'kumar@gmail.com', '987654321', 'tanuku', 'daf64104244fa26ce926609995a67328'),
('Likitha', 'likki@gmail.com', '9969516585', 'Vizag', 'eca0bc8000af628ae7168f5f6f17af23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventlist`
--
ALTER TABLE `eventlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventlist`
--
ALTER TABLE `eventlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
