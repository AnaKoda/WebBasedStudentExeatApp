-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
--

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
  `updationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `fullname`, `email`, `updationDate`) VALUES
(1, 'admin', 'd00f5d5217896fb7fd601412cb890830', 'Atanga', 'admin@mail.com', '2022-02-09 15:15:46'),
(2, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Adam Abu', 'admin@mail.com', '2022-02-09 15:15:50'),
(3, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Agyemang Romeo', 'admin@mail.com', '2022-02-09 15:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblHouses`
--

CREATE TABLE `tblhouses` (
  `id` int(11) NOT NULL,
  `HouseName` varchar(150) DEFAULT NULL,
  `HouseShortName` varchar(100) NOT NULL,
  `HouseCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhouses`
--

INSERT INTO `tblhouses` (`id`, `HouseName`, `HouseShortName`, `HouseCode`, `CreationDate`) VALUES
(1, 'Opoku Ware', 'HR', 'HR160', '2020-11-01 07:16:25'),
(2, 'Opoku Ware', 'IT', 'IT807', '2020-11-01 07:19:37'),
(3, 'Opoku Ware', 'OP', 'OP640', '2020-12-02 21:28:56'),
(4, 'Opoku Ware', 'VL', 'VL9696', '2021-03-03 08:27:52'),
(5, 'Opoku Ware', 'MK', 'MK369', '2021-03-03 10:53:52'),
(6, 'Opoku Ware', 'FI', 'FI123', '2021-03-03 10:54:27'),
(7, 'Opoku Ware', 'SS', 'SS469', '2021-03-03 10:55:24'),
(8, 'Opoku Ware', 'RS', 'RS666', '2021-03-03 16:39:03');

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
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `StdId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `House`, `Address`, `City`, `Region`, `Phonenumber`, `Status`, `RegDate`) VALUES
(1, '0001', 'Johnny', 'Mark', 'mark@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male', '1996-06-12', 'Opoku Ware', '49 Arron Smith Drive', 'Honolulu', 'US', '7854785477', 1, '2020-11-10 11:29:59'),
(2, '0002', 'Milton', 'Yaw', 'yaw@mail.com', 'f925916e2754e5e03f75dd58a5733251', 'Male', '1990-02-02', 'Opoku Ware', '15 Kincheloe Road', 'Salem', 'US', '8587944255', 1, '2020-11-10 13:40:02'),
(3, '0003', 'Shawn', 'Den', 'Shawnden@mail.com', '3b87c97d15e8eb11e51aa25e9a5770e9', 'Male', '1995-03-22', 'Opoku Ware', '239 Desert Court', 'Wayne', 'US', '7458887169', 1, '2021-03-03 07:24:17'),
(4, '0004', 'Carol', 'Abu', 'carol@mail.com', '723e1489a45d2cbaefec82eee410abd5', 'Female', '1989-03-23', 'Opoku Ware', 'Demo Address', 'Demo City', 'Demo Country', '7854448550', 1, '2021-03-03 10:44:13'),
(5, '0005', 'Danny', 'Adam', 'danny@mail.com', 'b7bee6b36bd35b773132d4e3a74c2bb5', 'Male', '1986-03-12', 'Opoku Ware', '11 Rardin Drive', 'San Francisco', 'US', '4587777744', 1, '2021-03-04 17:14:48'),
(6, '0006', 'Shawn', 'Martin', 'shawn@mail.com', 'a3cceba83235dc95f750108d22c14731', 'Male', '1992-08-28', 'Opoku Ware', '3259 Ray Court', 'Wilmington', 'US', '8520259670', 1, '2021-03-04 17:46:02'),
(7, '0007', 'Jennifer', 'Ama', 'jennifer@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Female', '1992-12-11', 'Opoku Ware', '977 Smithfield Avenue', 'Elkins', 'US', '7401256696', 1, '2022-02-09 15:29:00'),
(8, '0008', 'Will', 'Kojo', 'williams@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male', '1992-02-15', 'Opoku Ware', '366 Cemetery Street', 'Houston', 'US', '7854000065', 1, '2022-02-10 15:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblexeats`
--

CREATE TABLE `tblexeats` (
  `id` int(11) NOT NULL,
  `ExeatType` varchar(110) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `stdid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllexeats`
--

INSERT INTO `tblexeats` (`id`, `ExeatType`, `ToDate`, `FromDate`, `Description`, `PostingDate`, `AdminRemark`, `AdminRemarkDate`, `Status`, `IsRead`, `stdid`) VALUES
(7, 'fees', '30/11/2020', '29/10/2020', 'Test Test Demo Test Test Demo Test Test Demo', '2020-11-19 13:11:21', 'A demo Admin Remarks for Testing!', '2020-12-02 23:26:27 ', 2, 1, 1),
(8, 'hospital', '21/10/2020', '25/10/2020', 'Test Test Demo Test Test Demo Test Test Demo Test Test Demo', '2020-11-20 11:14:14', 'A demo Admin Remarks for Testing!', '2020-12-02 23:24:39 ', 1, 1, 1),
(9, 'hospital', '08/12/2020', '12/12/2020', 'This is a demo description for testing purpose', '2020-12-02 18:26:01', 'All good make your time and hope you\'ll be fine and get back to work asap! Best Regards, Admin.', '2021-03-03 11:19:29 ', 1, 1, 2),
(10, 'hospital', '25/12/2020', '25/12/2020', 'This is a demo description for testing purpose', '2020-12-03 08:29:07', 'A demo Admin Remarks for Testing!', '2020-12-03 14:06:12 ', 1, 1, 1),
(11, 'hospital', '02/12/2020', '06/12/2020', 'This is a demo description for testing purpose', '2020-04-29 15:01:14', 'A demo Admin Remarks for Testing!', '2020-04-29 20:33:21 ', 1, 1, 1),
(12, 'hospital', '02/02/2020', '03/03/2020', 'This is a demo description for testing purpose', '2020-07-03 08:11:11', 'A demo Admin Remarks for Testing!', '2020-07-03 13:42:05 ', 1, 1, 1),
(14, 'hospital', '2020-03-05', '2020-06-05', 'This is a demo description for testing purpose', '2021-03-02 09:31:01', NULL, NULL, 0, 1, 2),
(15, 'hospital', '2021-03-15', '2021-03-05', 'None, Testing', '2021-03-02 09:32:42', 'casual leave not allowed for a week, the company\'s gotta huge project which should be completed within this week.', '2021-03-03 11:47:33 ', 2, 1, 1),
(17, 'hospital', '2021-03-03', '2021-03-10', 'Being a father i\'ve got to look after my new borns and spend some time with my families too!', '2021-03-03 10:58:18', NULL, NULL, 0, 1, 3),
(18, 'emergency', '2021-03-04', '2021-03-05', 'i\'ve to go for my body checkup. got an appointment for tommorow', '2021-03-03 12:09:44', 'No comments on it.', '2021-03-04 22:56:24 ', 1, 1, 4),
(19, 'Fees', '2021-03-05', '2021-03-06', 'been working over time since last night, so i\'d like a day off', '2021-03-03 12:24:15', NULL, NULL, 0, 1, 1),
(20, 'sick', '2022-02-09', '2022-02-12', 'None, Test Mode', '2022-02-09 15:31:15', NULL, NULL, 0, 0, 7),
(21, 'hospital', '2022-02-11', '2022-02-18', 'This is just a demo condition for testing purpose!!', '2022-02-10 16:05:30', 'No comments!!', '2022-02-10 21:37:15 ', 1, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tblexeattype`
--

CREATE TABLE `tblexeattype` (
  `id` int(11) NOT NULL,
  `ExeatType` varchar(200) DEFAULT NULL,
  `Description` mediumtext,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexeattype`
--

INSERT INTO `tblexeattype` (`id`, `ExeatType`, `Description`, `CreationDate`) VALUES
(1, 'Casual Exeat', 'Provided for urgent or unforeseen matters to the employees.', '2020-11-01 12:07:56'),
(2, 'Medical Exeat', 'Related to Health Problems of Employee', '2020-11-06 13:16:09'),
(3, 'Restricted Exeat', 'Holiday that is optional', '2020-11-06 13:16:38'),
(5, 'Paternity Exeat', 'To take care of newborns', '2021-03-03 10:46:31'),
(6, 'Bereavement Exeat', 'Grieve their loss of losing loved ones', '2021-03-03 10:47:48'),
(7, 'Compensatory Exeat', 'For Overtime workers', '2021-03-03 10:48:37'),
(8, 'Maternity Exeat', 'Taking care of newborn ,recoveries', '2021-03-03 10:50:17'),
(9, 'Religious Exeat', 'Based on employee\'s followed religion', '2021-03-03 10:51:26'),
(10, 'Adverse Weather Exeat', 'In terms of extreme weather conditions', '2021-03-03 13:18:26'),
(11, 'Voting Exeat', 'For official election day', '2021-03-03 13:19:06'),
(12, 'Self-Quarantine Exeat', 'Related to COVID-19 issues', '2021-03-03 13:19:48'),
(13, 'Personal Time Off', 'To manage some private matters', '2021-03-03 13:21:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblhouses`
--
ALTER TABLE `tblhouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblexeats`
--
ALTER TABLE `tblexeats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tblexeattype`
--
ALTER TABLE `tblexeattype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
