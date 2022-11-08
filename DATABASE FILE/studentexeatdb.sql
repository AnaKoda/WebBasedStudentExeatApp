-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 12:05 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentexeatdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `fullname`, `email`, `updationDate`) VALUES
(1, 'admin', 'd00f5d5217896fb7fd601412cb890830', 'Liam Moore', 'admin@mail.com', '2022-02-09 15:15:46'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Peter Atanga Joshua', 'atanga@gmail.com', '2022-05-05 21:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblexeats`
--

CREATE TABLE `tblexeats` (
  `id` int(11) NOT NULL,
  `ExeatType` varchar(110) NOT NULL,
  `FromDate` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5),
  `ToDate` varchar(50) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Overstayed` int(11) NOT NULL,
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `stdid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexeats`
--

INSERT INTO `tblexeats` (`id`, `ExeatType`, `FromDate`, `ToDate`, `Description`, `PostingDate`, `Overstayed`, `AdminRemark`, `AdminRemarkDate`, `Status`, `IsRead`, `stdid`) VALUES
(22, 'Emergency', '2022-10-04 17:14:41.74845', '2020-03-18 00:00:00.00000', 'i have an emergency call from the house', '2022-05-05 22:34:52', 0, 'ok', '2022-05-07 0:06:51 ', 1, 1, 10),
(47, 'financial or monetary', '2022-08-22 00:00:00.00000', '2022-08-23 00:00:00.00000', 'eee', '2022-08-23 16:22:25', 0, 'dd', '2022-08-23 18:24:03 ', 1, 1, 14),
(48, 'financial or monetary', '2022-10-04 17:03:32.93287', '2022-09-22 00:00:00.00000', 'sick', '2022-09-22 14:49:22', 0, 'ALRIGHT', '2022-10-04 19:03:32 ', 1, 1, 14),
(49, 'Emergency', '2022-10-04 16:55:39.59018', '2022-09-22 00:00:00.00000', 'sick', '2022-09-22 14:50:36', 0, 'hello', '2022-10-04 18:55:39 ', 1, 1, 14),
(50, 'Emergency', '2022-10-04 16:36:01.32563', '2022-09-30', 'bbb', '2022-09-28 22:49:19', 0, 'hii', '2022-10-04 18:36:01 ', 1, 1, 14),
(51, 'Medical or health', '2022-10-04 16:31:59.17513', '2022-09-29', 'sic', '2022-09-28 23:09:36', 0, 'hii', '2022-10-04 18:31:59 ', 1, 1, 14),
(52, 'Medical or health', '2022-10-04 16:26:29.94642', '2022-09-29', 'sic', '2022-09-28 23:10:32', 0, 'hii', '2022-10-04 18:26:29 ', 1, 1, 14),
(53, 'Emergency', '2022-10-04 16:17:23.24365', '2022-09-29', 'nn', '2022-09-29 01:16:09', 0, 'hi', '2022-10-04 18:17:23 ', 1, 1, 14),
(54, 'Emergency', '2022-10-04 15:50:25.20530', '2022-09-29', 'nn', '2022-09-29 01:17:03', 0, 'hello', '2022-10-04 17:50:25 ', 1, 1, 14),
(55, 'Emergency', '2022-10-05 14:17:26.76475', '2022-10-04', 'hhhh', '2022-10-04 14:01:05', 0, 'test', '2022-10-05 16:17:26 ', 1, 1, 16),
(56, 'Medical or health', '2022-10-04 18:43:41.92872', '2022-10-04', 'hello', '2022-10-04 15:19:35', 0, 'hi', '2022-10-04 20:43:41 ', 1, 1, 17),
(57, 'Emergency', '2022-10-04 17:36:13.58373', '2022-10-06', 'sir am sick', '2022-10-04 16:05:12', 0, 'hi', '2022-10-04 19:36:13 ', 1, 1, 17),
(58, 'Emergency', '2022-10-04 17:20:42.02169', '2022-10-04', 'SICK', '2022-10-04 17:09:18', 0, 'approved', '2022-10-04 19:20:42 ', 1, 1, 17),
(59, 'financial or monetary', '2022-10-04 18:01:35.96603', '2022-10-05', 'pls grant access', '2022-10-04 17:38:56', 0, 'hello', '2022-10-04 20:01:35 ', 1, 1, 17),
(60, 'Medical or health', '2022-10-04 17:41:13.38860', '2022-10-07', 'am going home', '2022-10-04 17:39:50', 0, 'hello', '2022-10-04 19:41:13 ', 1, 1, 17),
(61, 'Medical or health', '2022-10-06 23:00:00.00000', '2022-10-05', 'sick', '2022-10-05 16:26:13', 0, NULL, NULL, 0, 0, 17),
(62, 'Emergency', '2022-10-07 23:00:00.00000', '2022-10-05', 'sick', '2022-10-05 16:26:42', 0, NULL, NULL, 0, 0, 17),
(63, 'Emergency', '2022-10-05 16:36:27.91197', '2022-10-05', 'sick', '2022-10-05 16:27:15', 0, NULL, NULL, 0, 1, 17),
(64, 'financial or monetary', '2022-10-05 16:41:10.47597', '2022-10-05', 'Cash', '2022-10-05 16:39:08', 0, 'sick', '2022-10-05 18:41:10 ', 1, 1, 17),
(65, 'financial or monetary', '2022-10-07 23:00:00.00000', '2022-10-05', 'for', '2022-10-05 16:39:27', 0, NULL, NULL, 0, 0, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tblexeattype`
--

CREATE TABLE `tblexeattype` (
  `id` int(11) NOT NULL,
  `ExeatType` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexeattype`
--

INSERT INTO `tblexeattype` (`id`, `ExeatType`, `Description`, `CreationDate`) VALUES
(14, 'Medical or health', 'medical conditions', '2022-05-05 22:29:25'),
(15, 'Emergency', 'emergency', '2022-05-05 22:31:25'),
(16, 'financial or monetary', 'Going for money', '2022-05-05 22:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblhouses`
--

CREATE TABLE `tblhouses` (
  `id` int(11) NOT NULL,
  `HouseName` varchar(150) DEFAULT NULL,
  `HouseShortName` varchar(100) NOT NULL,
  `HouseCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhouses`
--

INSERT INTO `tblhouses` (`id`, `HouseName`, `HouseShortName`, `HouseCode`, `CreationDate`) VALUES
(9, 'Nkrumah house', 'nk', 'ooo1', '2022-05-05 22:20:04'),
(11, 'madela ', 'made', 'm001', '2022-08-23 16:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(11) NOT NULL,
  `StdId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `House` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Region` varchar(150) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `StudentImage` varchar(255) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `StdId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `House`, `Address`, `City`, `Region`, `Phonenumber`, `Status`, `StudentImage`, `RegDate`) VALUES
(11, '20220002', 'Ama Ben', 'Adama', 'ama@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Female', '2008-01-05', 'Mandela house', 'E BLK U RT0009', 'Tanaso', 'Ashanti', '11122222', 0, '', '2022-05-05 22:28:41'),
(12, '20220003', 'joshua', 'peter', 'peter@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Male', '2022-08-17', 'Mandela house', 'E block', 'tamale', 'north', '0201111111', 1, '', '2022-05-06 22:13:05'),
(13, '0000989', 'koko', 'lama', 'lama@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Male', '2022-05-18', 'Nkrumah house', 'E Blk U 900', 'Tamale', 'North', '00000', 1, '', '2022-05-07 13:27:28'),
(14, '005', 'joshua', 'peter', 'peter@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2022-08-17', 'Mandela house', 'E block', 'tamale', 'north', '0201111111', 1, '', '2022-08-05 12:16:48'),
(15, '2022', 'Ama', 'John', 'ama@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', '2008-08-23', 'Nkrumah house', 'Eblock A005', 'tamale', 'islam', '0241122333', 1, '', '2022-08-17 15:16:02'),
(16, '0001', 'Kumah ', 'AMA', 'ama@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', '2022-10-15', 'madela ', 'E-Block 12', 'Kumasi', 'Ahante', '0201747290', 1, '633c3c4cf24623.52965759.jpg', '2022-10-04 13:59:41'),
(17, '1234', 'eric', 'anane', 'anane2020@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male', '2022-10-20', 'Nkrumah house', 'POST OFFICE BOX 28', 'ACCRA', 'Ash', '23359620710', 1, '633c4d9a53c731.72268687.jpg', '2022-10-04 15:13:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblexeats`
--
ALTER TABLE `tblexeats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserEmail` (`stdid`);

--
-- Indexes for table `tblexeattype`
--
ALTER TABLE `tblexeattype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhouses`
--
ALTER TABLE `tblhouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblexeats`
--
ALTER TABLE `tblexeats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tblexeattype`
--
ALTER TABLE `tblexeattype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblhouses`
--
ALTER TABLE `tblhouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
