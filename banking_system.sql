-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 07:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Current Balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Name`, `Email`, `Current Balance`) VALUES
(1, 'Sneha Das Karmakar', 'snehadaskarmakar@gmail.com', 1256900),
(2, 'Debjeet Ash', 'ashdebjeet@gmail.com', 3425600),
(3, 'Titas Maity', 'maitytitas34@gmail.com', 34567289),
(4, 'Sudeshna Das Karmakar', 'daskarmakarsudeshna@gmail.com', 45231870),
(5, 'Mayukh Banerjee', 'mayukhbanerjee@gmail.com', 43216732),
(6, 'Maloy Ganguly', 'maloyganguli@gmail.com', 56329083),
(7, 'Abhijeet Chatterjee', 'iamabhi@gmail.com', 4567210),
(8, 'Swagata Pal', 'sagatapal1890@gmail.com', 345672890),
(9, 'Subhadeep Roy', 'roysubhadeep@gmail.com', 8753265100),
(10, 'Sayan Banerjee', 'sayanbanerjee@gmail.com', 34128900);

-- --------------------------------------------------------

--
-- Table structure for table `receiver details`
--

CREATE TABLE `receiver details` (
  `Receiver Id` int(100) NOT NULL,
  `Receiver Account No.` int(100) NOT NULL,
  `Receiver Name` varchar(255) NOT NULL,
  `Account Type` varchar(255) NOT NULL,
  `Bank Name` varchar(255) NOT NULL,
  `Branch Name` varchar(100) NOT NULL,
  `IFSC Code` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver details`
--

INSERT INTO `receiver details` (`Receiver Id`, `Receiver Account No.`, `Receiver Name`, `Account Type`, `Bank Name`, `Branch Name`, `IFSC Code`) VALUES
(1, 6782319, 'Debjeet Ash', ' Current', 'IDBI', ' IDBI Purulia', 7890),
(2, 3126784, 'Arjun Sengupta', ' Savings', 'SBI', ' Purulia SBI', 3428),
(3, 4312678, 'Abhijeet Chatterjee', ' Savings', 'SBI', ' Purulia SBI', 3469);

-- --------------------------------------------------------

--
-- Table structure for table `sender details`
--

CREATE TABLE `sender details` (
  `Sender Id` int(100) NOT NULL,
  `Sender Account No.` int(100) NOT NULL,
  `Sender Name` varchar(255) NOT NULL,
  `INR` bigint(20) NOT NULL,
  `Purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sender details`
--

INSERT INTO `sender details` (`Sender Id`, `Sender Account No.`, `Sender Name`, `INR`, `Purpose`) VALUES
(1, 234517, 'Sneha Das Karmakar', 1000, 'Tuition Fees'),
(2, 2345610, 'Subham Roy', 3420, 'Buying product'),
(3, 34562, 'Sneha Das Karmakar', 2345, 'Buying product');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver details`
--
ALTER TABLE `receiver details`
  ADD PRIMARY KEY (`Receiver Id`);

--
-- Indexes for table `sender details`
--
ALTER TABLE `sender details`
  ADD PRIMARY KEY (`Sender Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `receiver details`
--
ALTER TABLE `receiver details`
  MODIFY `Receiver Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sender details`
--
ALTER TABLE `sender details`
  MODIFY `Sender Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
