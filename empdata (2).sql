-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 06:43 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `empdata`
--

CREATE TABLE `empdata` (
  `SlNo` bigint(20) NOT NULL,
  `TaskName` varchar(20) NOT NULL,
  `StartDate&Time` date NOT NULL,
  `EndDate&Time` date NOT NULL,
  `Priority` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Not yet'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empdata`
--

INSERT INTO `empdata` (`SlNo`, `TaskName`, `StartDate&Time`, `EndDate&Time`, `Priority`, `Status`) VALUES
(21, 'Project101', '2022-06-02', '2022-06-03', 'Medium', 'Completed'),
(22, 'react', '2022-06-05', '2022-07-08', 'Medium', 'Completed'),
(23, 'Angular', '2022-06-02', '2022-07-05', 'Medium', 'InProgress'),
(24, 'Add', '2022-06-30', '2022-07-02', 'Low', 'InProgress'),
(25, 'Front', '2022-06-30', '2022-07-07', 'High', 'InProgress'),
(26, 'Back-End', '2022-06-16', '2022-07-08', 'Medium', 'Not yet'),
(27, 'Server Connect', '2022-06-30', '2022-07-10', 'Low', 'Not yet'),
(28, 'Server', '2022-06-02', '2022-06-14', 'Medium', 'Completed'),
(29, 'Button Error', '2022-06-23', '2022-07-01', 'Low', 'Not yet'),
(30, 'Front End Developmen', '2022-06-10', '2022-06-26', 'Low', 'Completed'),
(31, 'Angular', '2022-06-08', '2022-07-10', 'Medium', 'InProgress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empdata`
--
ALTER TABLE `empdata`
  ADD PRIMARY KEY (`SlNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empdata`
--
ALTER TABLE `empdata`
  MODIFY `SlNo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
