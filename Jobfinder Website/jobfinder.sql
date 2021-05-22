-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 10:39 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Title` varchar(60) DEFAULT NULL,
  `Job_Category` varchar(50) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Working_Hours` varchar(10) DEFAULT NULL,
  `Employer` varchar(20) DEFAULT NULL,
  `Cantact_Number` char(10) DEFAULT NULL,
  `Adress` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Vacations` varchar(60) DEFAULT NULL,
  `Descriptions` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`Title`, `Job_Category`, `Salary`, `Working_Hours`, `Employer`, `Cantact_Number`, `Adress`, `Email`, `Vacations`, `Descriptions`) VALUES
('asdfghj', 'volvo', 1234, '23', 'gfd', '00000000', 'cxvfgh', 'aaaaaaa@gmail.com', 'dfgh', 'fds'),
('asdfghj', 'volvo', 1234, '23', 'gfd', '00000000', 'cxvfgh', 'aaaaaaa@gmail.com', 'dfgh', 'fds'),
('ngfds', 'saab', 444444, '233', 'wesert', '0222222', 'sdfghj', 'jhgfd@gmail.com', 'jhgfd', 'hgfds'),
('hbgfeds', 'mercedes', 5555, '3', 'gfds', '3456789', 'kjhgfdsa', 'fds', 'hgfd', 'hgfd'),
('mmm', 'Software', 2222, '22', 'lkjhcxz', '2222222222', 'lknbjvc', 'jbhvcx', 'hvgcx', 'jhvgcx'),
('ppppp', 'Electrician', 88888, '77', 'ooooo', '8888888888', 'llllllllllllll', 'lll', 'lllllllnnn', 'nnnnnnnnnnnnn'),
('qqw', 'Marketing', 12345, '23', 'tttt', '655533', 'uuuuuu', 'fggnhng', 'khjhgj', 'gfddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `entryID` int(100) NOT NULL,
  `quection01` int(100) NOT NULL,
  `answer01` varchar(100) NOT NULL,
  `quection02` int(100) NOT NULL,
  `answer02` varchar(100) NOT NULL,
  `quection03` int(100) NOT NULL,
  `answer03` varchar(100) NOT NULL,
  `quection04` int(100) NOT NULL,
  `answer04` varchar(100) NOT NULL,
  `quection05` int(100) NOT NULL,
  `answer05` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`entryID`, `quection01`, `answer01`, `quection02`, `answer02`, `quection03`, `answer03`, `quection04`, `answer04`, `quection05`, `answer05`) VALUES
(1, 1, 'YES', 2, 'From a leaflet', 3, 'YES', 4, 'YES', 5, 'aaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Uname` varchar(50) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Uname`, `Password`, `Email`) VALUES
('ff', '$2y$10$Q/Sm9dJ7OOWPo', 'vfv@gmail.com'),
('ff', '$2y$10$9TCOFs9WQaX0Z', 'vfv@gmail.com'),
('ff', '$2y$10$h/E1WSoSY45yo', 'vfv@gmail.com'),
('123ew', '$2y$10$zGRvhKXfpRPJk', 'vfvqq@gmail.com'),
('564yt', '$2y$10$5hFg7tK25wMWx', 'vfvqqq@gmail.com'),
('564yt2', '$2y$10$32pYTmEI6IBoJ', 'vfwwwvqqq@gmail.com'),
('qwe12', '$2y$10$XN9EhB0BeH7Kt', 'qwe@gmail.com'),
('qwe123', '123', 'qwe1@gmail.com'),
('qqq1', '123', 'aaaaaaa@gmail.com'),
('ew', '11', 'fdghjk@gmail.com'),
('kk', '33', 'kk@gmail.com'),
('asdf', 'asdf', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`entryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `entryID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
