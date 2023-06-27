-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 07:45 PM
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
(21, 'Elwienne Lloyd James', 'Petiluna', 'Petiluna', '$2y$10$gqhc00P1xnwBNB0fuEXFD.TrxN4Qgdhx8ZPQBbzFlshRjibJII1wq'),
(22, 'Maria', 'Amore', 'Amore', '$2y$10$hbxFpxrbEkY.53e71I4AnulHjlmOSC1kuEwupqqemn1Em394hnUMe');

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
(38, 1, 'Elwienne Lloyd James Petiluna', 'BSCOE', 38, 'male', 25),
(39, 1, 'Liza Soberano', 'BSCOE III', 38, 'female', 24.8125),
(40, 2, 'Danz Andrew Antiquenia', 'BSCOE', 38, 'male', 12.5),
(41, 2, 'Nadine Lustre', 'BSCOE', 38, 'female', 22.9375),
(42, 3, 'Rumzy Orcullo', 'BSCOE', 38, 'male', 0),
(43, 3, 'Lalisa Manobal', 'BSCOE III', 38, 'female', 0),
(44, 4, 'James Reid', 'BSCOE', 38, 'male', 0),
(45, 4, 'Maria Amore Dayot', 'BSCOE III', 38, 'female', 0);

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
(41, 'Audience impact', 100, 38, 25),
(42, 'Stage Presence', 100, 38, 25),
(43, 'Appearance', 100, 38, 25),
(44, 'Posture', 100, 38, 25);

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
(38, 'Mr and Miss COEE 2024', '2023-06-14', 21, 'NORSU MCII, Bjumpandan Dumaguete Negros Oriental');

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
(24, 'approved', 38, 22);

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
(18, 'Introduction', 38),
(19, 'Swimwear Competition', 38),
(20, 'Talent Portion', 38),
(21, 'Costume Attire', 38);

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
(356, 100, 38, 41, 22, 38, 18),
(357, 100, 38, 42, 22, 38, 18),
(358, 100, 38, 43, 22, 38, 18),
(359, 100, 38, 44, 22, 38, 18),
(360, 90, 38, 41, 22, 41, 18),
(361, 99, 38, 42, 22, 41, 18),
(362, 78, 38, 43, 22, 41, 18),
(363, 100, 38, 44, 22, 41, 18),
(364, 50, 38, 41, 22, 40, 18),
(365, 50, 38, 42, 22, 40, 18),
(366, 50, 38, 43, 22, 40, 18),
(367, 50, 38, 44, 22, 40, 18),
(368, 100, 38, 41, 22, 39, 21),
(369, 100, 38, 42, 22, 39, 21),
(370, 98, 38, 43, 22, 39, 21),
(371, 99, 38, 44, 22, 39, 21);

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
  MODIFY `tQPs0y` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `vADq6R` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `TzTcDB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `pGQneg` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `joined_event`
--
ALTER TABLE `joined_event`
  MODIFY `8KflR6` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `portion`
--
ALTER TABLE `portion`
  MODIFY `gdSWLv` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `4nAx3D` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=372;

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
