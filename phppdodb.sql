-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 05:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppdodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdodemodata`
--

CREATE TABLE `pdodemodata` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdodemodata`
--

INSERT INTO `pdodemodata` (`id`, `name`, `number`, `email`) VALUES
(1, 'Abhishek Verma', '07039159675', 'av836225@gmail.com'),
(4, 'JohnJames', '766666550', 'mr.millionaire06@gmail.com'),
(5, 'Nitesh Yadav', '545654566', 'nteshxx@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` int(10) NOT NULL,
  `grno` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `subject1` varchar(50) NOT NULL,
  `subject2` varchar(50) NOT NULL,
  `subject3` varchar(50) NOT NULL,
  `subject4` varchar(50) NOT NULL,
  `subject5` varchar(50) NOT NULL,
  `subject6` varchar(50) NOT NULL,
  `process` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `grno`, `id`, `name`, `number`, `email`, `filename`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `process`) VALUES
(22, 'S125657889', 3, 'Aditya Planet', 80869555, 'mr.millionaire06@gmail.com', 'S316584445', 'DBMS', 'WDL', 'MP', 'AOA', 'CN', 'TCS', ''),
(45, 'S1256668', 6, 'Nitesh Singh', 2147483647, 'nteshxx@gmail.com', 'S316584445', 'DBMS', 'WDL', 'MP', 'AOA', 'CN', 'BCE', 'APPROVED'),
(45, 'S1256668', 7, 'Abhishek Verma', 2147483647, 'av836225@gmail.com', 'S316584445', 'computer', 'WDL', 'MP', 'AOA', 'CN', 'BCE', 'APPROVED'),
(19, 'S1256668', 8, 'Deeshant Singh', 2147483647, 'singhdeeshant2000@gmail.com', 'S316586985', 'DBMS', 'WDL', 'MP', 'AA', 'CN', 'BCE', 'APPROVED'),
(19, 'S1256668', 9, 'Abhishek Verma', 2147483647, 'av836221@gmail.com', 'S316586985', 'DBMS', 'computer', 'computer', 'AOA', 'CN', 'TCS', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdodemodata`
--
ALTER TABLE `pdodemodata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`,`number`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdodemodata`
--
ALTER TABLE `pdodemodata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
