-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 10:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gain`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Book_id` int(5) NOT NULL,
  `User_id` varchar(5) NOT NULL,
  `Pack_id` varchar(5) NOT NULL,
  `Book_date` date NOT NULL,
  `No_of_persons` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `DURATION` int(10) NOT NULL,
  `Price` int(20) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Book_id`, `User_id`, `Pack_id`, `Book_date`, `No_of_persons`, `address`, `DURATION`, `Price`, `Status`) VALUES
(1, '1', '3', '2020-09-12', 7, 'malabe', 5, 0, 'pending'),
(5, '1', '3', '2020-09-19', 7, 'vavuniya', 10, 0, 'confirmed'),
(7, '1', '3', '2020-09-19', 7, 'jaffna', 10, 0, 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Pack_id` int(10) NOT NULL,
  `Pack_Name` varchar(30) NOT NULL,
  `No_of_days` int(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Accommodation` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Pack_id`, `Pack_Name`, `No_of_days`, `Location`, `Price`, `Accommodation`, `Description`) VALUES
(1, 'srilanka', 3, 'colombo', '1500.00', 'home', 'big pack'),
(3, 'jaffna', 3, 'jaffna', '1000.00', 'home', 'big pack');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_id` int(10) NOT NULL,
  `Book_id` int(5) DEFAULT NULL,
  `User_id` int(10) DEFAULT NULL,
  `Pay_Type` varchar(30) DEFAULT NULL,
  `Pay_date` date DEFAULT NULL,
  `Pay_amount` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_id`, `Book_id`, `User_id`, `Pay_Type`, `Pay_date`, `Pay_amount`) VALUES
(1, 1, 1, 'debit', '2020-09-09', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Age` int(100) NOT NULL,
  `Mobileno` int(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `FirstName`, `LastName`, `Age`, `Mobileno`, `Email`, `Address`, `UserName`, `Password`) VALUES
(1, 'anojan', 'ano', 21, 11223345, 'anano@gmail.com', 'anoaddress', 'ano', 'ano'),
(4, '', '', 21, 12152, '', '', 'Admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Book_id`),
  ADD KEY `User_id` (`User_id`,`Pack_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Pack_id`),
  ADD UNIQUE KEY `Pack_Name` (`Pack_Name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_id`),
  ADD KEY `Book_id` (`Book_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Book_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Pack_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Book_id`) REFERENCES `booking` (`Book_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
