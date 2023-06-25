-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 07:33 AM
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
-- Database: `tabulating_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `tQPs0y` int(100) NOT NULL,
  `fn` varchar(50) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`tQPs0y`, `fn`, `ln`, `uname`, `pword`) VALUES
(7, 'Elwienne Lloyd James', 'petiluna', 'pet123456', '$2y$10$GkfKRskGGqNe2pmm7l2vjelZebFuJb61utjC9I6dUmJJFGhpvABsO'),
(9, 'Maria ', 'Amore', 'Amore', '$2y$10$C3eUyVmaXMph.c8uBE0Sc.SW/tSOyzVSfyzgZgRMXfSY.6KYIXMq.'),
(20, 'Danz ', 'Antiquenia', 'Danz1234', '$2y$10$BFTnxtj1d8iLChHvhMm9suuCYsUa58BLscRPw/zkI5QTSF2TR1ITi');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `vADq6R` int(100) NOT NULL,
  `can_no` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dept` varchar(250) NOT NULL,
  `pGQneg` int(100) DEFAULT NULL,
  `cat` varchar(25) NOT NULL,
  `percentage` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`vADq6R`, `can_no`, `name`, `dept`, `pGQneg`, `cat`, `percentage`) VALUES
(26, 1, 'Elwienne Lloyd James Petiluna', 'BSCOE', 35, 'male', 50),
(27, 2, 'Danz Andrew Antiquenia', 'BSCOE', 35, 'male', 0),
(28, 3, 'Rumzy Orcullo', 'BSCOE', 35, 'male', 3.0625),
(29, 1, 'Liza Soberano', 'BSCOE', 35, 'female', 2.4375),
(30, 2, 'Nadine Lustre', 'BSCOE', 35, 'female', 3.125),
(32, 3, 'Lalisa Manobal', 'BSCOE', 35, 'female', 2.78125),
(36, 4, 'James Reid', 'BSCOE', 35, 'male', 1.5625),
(37, 4, 'Maria Amore Dayot', 'BSCOE III', 35, 'female', 1.7500000000000002);

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `TzTcDB` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `maxval` int(100) NOT NULL,
  `pGQneg` int(100) DEFAULT NULL,
  `percent` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`TzTcDB`, `name`, `maxval`, `pGQneg`, `percent`) VALUES
(37, 'Audience impact', 100, 35, 25),
(38, 'Appearance', 100, 35, 25),
(39, 'Stage Presence', 100, 35, 25),
(40, 'Intelligence', 100, 35, 25);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `pGQneg` int(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `edate` varchar(100) NOT NULL,
  `tQPs0y` int(100) DEFAULT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`pGQneg`, `ename`, `edate`, `tQPs0y`, `location`) VALUES
(34, 'Mr and Miss COEECE 2017', '2023-06-13', 7, 'NORSU MCII, Bjumpandan Dumaguete Negros Oriental Philippines'),
(35, 'Mr and Miss COEE 2024', '2023-06-20', 7, 'NORSU MCII, Bjumpandan Dumaguete Negros Oriental Philippines'),
(36, 'Mr and Miss PHS 2019', '2023-06-01', 9, 'MCII'),
(37, 'Mr and Miss COEECE 25', '2023-06-15', 7, 'NORSU MCII, Bjumpandan Dumaguete Negros Oriental Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `joined_event`
--

CREATE TABLE `joined_event` (
  `8KflR6` int(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pGQneg` int(100) DEFAULT NULL,
  `tQPs0y` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joined_event`
--

INSERT INTO `joined_event` (`8KflR6`, `status`, `pGQneg`, `tQPs0y`) VALUES
(13, 'approved', 34, 9),
(18, 'approved', 36, 7),
(20, 'pending', 37, 9),
(22, 'approved', 35, 9),
(23, 'approved', 35, 20);

-- --------------------------------------------------------

--
-- Table structure for table `portion`
--

CREATE TABLE `portion` (
  `gdSWLv` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `pGQneg` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portion`
--

INSERT INTO `portion` (`gdSWLv`, `name`, `pGQneg`) VALUES
(14, 'Introduction', 35),
(15, 'Swimwear Competition', 35),
(16, 'Question & Answer Portion', 35),
(17, 'Cultural Costume Competition', 35);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `4nAx3D` int(100) NOT NULL,
  `score` int(100) NOT NULL,
  `pGQneg` int(100) DEFAULT NULL,
  `TzTcDB` int(100) DEFAULT NULL,
  `tQPs0y` int(100) DEFAULT NULL,
  `vADq6R` int(100) DEFAULT NULL,
  `gdSWLv` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`4nAx3D`, `score`, `pGQneg`, `TzTcDB`, `tQPs0y`, `vADq6R`, `gdSWLv`) VALUES
(191, 100, 35, 37, 9, 26, 14),
(192, 100, 35, 38, 9, 26, 14),
(193, 100, 35, 39, 9, 26, 14),
(194, 100, 35, 40, 9, 26, 14),
(195, 100, 35, 37, 9, 26, 15),
(196, 100, 35, 38, 9, 26, 15),
(197, 100, 35, 39, 9, 26, 15),
(198, 100, 35, 40, 9, 26, 15),
(199, 100, 35, 37, 9, 26, 16),
(200, 100, 35, 38, 9, 26, 16),
(201, 100, 35, 39, 9, 26, 16),
(202, 100, 35, 40, 9, 26, 16),
(203, 100, 35, 37, 9, 26, 17),
(204, 100, 35, 38, 9, 26, 17),
(205, 100, 35, 39, 9, 26, 17),
(206, 100, 35, 40, 9, 26, 17),
(207, 100, 35, 37, 9, 30, 14),
(208, 98, 35, 37, 9, 28, 14),
(209, 89, 35, 37, 9, 32, 14),
(210, 50, 35, 37, 9, 36, 14),
(211, 56, 35, 37, 9, 37, 14),
(212, 78, 35, 37, 9, 29, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`tQPs0y`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`vADq6R`),
  ADD KEY `pGQneg` (`pGQneg`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`TzTcDB`),
  ADD KEY `pGQneg` (`pGQneg`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`pGQneg`),
  ADD KEY `tQPs0y` (`tQPs0y`);

--
-- Indexes for table `joined_event`
--
ALTER TABLE `joined_event`
  ADD PRIMARY KEY (`8KflR6`),
  ADD KEY `pGQneg` (`pGQneg`),
  ADD KEY `tQPs0y` (`tQPs0y`);

--
-- Indexes for table `portion`
--
ALTER TABLE `portion`
  ADD PRIMARY KEY (`gdSWLv`),
  ADD KEY `pGQneg` (`pGQneg`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`4nAx3D`),
  ADD KEY `pGQneg` (`pGQneg`),
  ADD KEY `TzTcDB` (`TzTcDB`),
  ADD KEY `tQPs0y` (`tQPs0y`),
  ADD KEY `vADq6R` (`vADq6R`),
  ADD KEY `gdSWLv` (`gdSWLv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `tQPs0y` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `vADq6R` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `TzTcDB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `pGQneg` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `joined_event`
--
ALTER TABLE `joined_event`
  MODIFY `8KflR6` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `portion`
--
ALTER TABLE `portion`
  MODIFY `gdSWLv` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `4nAx3D` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`pGQneg`) REFERENCES `event` (`pGQneg`);

--
-- Constraints for table `criteria`
--
ALTER TABLE `criteria`
  ADD CONSTRAINT `criteria_ibfk_1` FOREIGN KEY (`pGQneg`) REFERENCES `event` (`pGQneg`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`tQPs0y`) REFERENCES `account` (`tQPs0y`);

--
-- Constraints for table `joined_event`
--
ALTER TABLE `joined_event`
  ADD CONSTRAINT `joined_event_ibfk_1` FOREIGN KEY (`pGQneg`) REFERENCES `event` (`pGQneg`),
  ADD CONSTRAINT `joined_event_ibfk_2` FOREIGN KEY (`tQPs0y`) REFERENCES `account` (`tQPs0y`);

--
-- Constraints for table `portion`
--
ALTER TABLE `portion`
  ADD CONSTRAINT `portion_ibfk_1` FOREIGN KEY (`pGQneg`) REFERENCES `event` (`pGQneg`);

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`pGQneg`) REFERENCES `event` (`pGQneg`),
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`TzTcDB`) REFERENCES `criteria` (`TzTcDB`),
  ADD CONSTRAINT `score_ibfk_3` FOREIGN KEY (`tQPs0y`) REFERENCES `account` (`tQPs0y`),
  ADD CONSTRAINT `score_ibfk_4` FOREIGN KEY (`vADq6R`) REFERENCES `candidate` (`vADq6R`),
  ADD CONSTRAINT `score_ibfk_5` FOREIGN KEY (`gdSWLv`) REFERENCES `portion` (`gdSWLv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
