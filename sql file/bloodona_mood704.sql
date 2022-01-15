-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 11:56 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `sno` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `password` varchar(60) NOT NULL,
  `address` varchar(600) NOT NULL,
  `city` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `blood_group` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`sno`, `name`, `mobile`, `password`, `address`, `city`, `email`, `blood_group`) VALUES
(18, 'chaitanya rai', '8435407793', '1234', 'bajrang kuti, madan mahal', 'Jabalpur', 'chaitanyarai19@gmail.com', 'A+'),
(19, 'mayank kumar', '9998887777', '123', 'lal mati', 'Jabalpur', 'mayank@gmail.com', 'a+'),
(27, 'Tripti Bhatia', '7987904899', 'noddy666', 'madan mahal', 'Jabalpur', 'triptibhatiag@gmail.com', 'o+'),
(28, 'saakshi jaiswal', '8964040811', '8964040811', 'FAFA jabalpur MP', 'Jabalpur', 'saakshi3098@gmail.com', 'o+'),
(29, 'Prajwal mishra', '7974205825', 'mishra05', 'Near shankar mandir patel mohalla bargi ', 'Jabalpur', 'prajwal.mishra17@gmail.com', 'a+'),
(30, 'deepak sharma', '8959352599', 'sharma1234', 'bedi nagar jabalpur', 'Jabalpur', 'deepaksharma@gamil.com', 'a-'),
(41, 'deepak sharma', '8899889988', '12345', 'bajrang kuti', 'Indore', 'deepaksharma@gamil.com', 'b+'),
(44, 'CR', '6677667788', '123456789', 'bajrang kuti', 'Jabalpur', 'chaitanyarai19@gmail.com', 'ab+'),
(45, 'Moulshri Singh', '8839828668', '123456', 'Purana Kila', 'Delhi', 'moulshri98phy@gmail.com', 'o+'),
(46, 'abhishek thakur', '7724077977', '123456789', 'Madan Mahal', 'Jabalpur', 'ahish1231@gmail.com', 'a+'),
(47, 'test', '8888888888', '74290473', 'addresss', 'Jabalpur', 'Test@gmail.com', 'b+');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `terms_and_condition` varchar(50) NOT NULL,
  `psw` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hno`, `name`, `city`, `email`, `phone_no`, `terms_and_condition`, `psw`) VALUES
(4, 'chaitanya rai', '', 'chaitanyarai19@gmail.com', '9998887777', '0', '1234'),
(16, 'Prajwal mishra', '', 'Prajwal.mishra17@gmail.com', '123abc', '7974205825', '1234'),
(20, 'City band', 'jabalpur', 'text@gmai.com', '9669706808', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `sno` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`sno`, `name`, `phone`, `email`, `address`, `pin`, `area`, `city`, `state`, `image`) VALUES
(1, 'Chaitanya Rai', '+918435407793', 'chaitanyarai19@gmail.com', 'bajrang kuti', '482002', 'Jabalpur', 'Jabalpur', 'Madhya Pradesh', 'download.jpg'),
(9, 'Subho', '7278406481', 'subhobiswas705971@gmail.com', 'Rbindrapally baghajatin', '700152', 'Jabalpur', 'Jabalpur', 'Madhya Pradesh', 'IMG_20200815_113201.jpg'),
(12, 'subho biswas', '07278406481', 'subhobiswas705971@gmail.com', 'narendrapur', '700152', 'Select', 'Jabalpur', 'Madhya Pradesh', ''),
(13, 'subho biswas', '07278406481', 'subhobiswas705971@gmail.com', 'narendrapur', '700152', 'Jabalpur', 'Jabalpur', 'Madhya Pradesh', ''),
(14, 'subho biswas', '07278406481', 'subhobiswas705971@gmail.com', 'narendrapur', '700152', 'Select', 'Jabalpur', 'Madhya Pradesh', ''),
(15, 'Chaitanya Rai', '+918435407793', 'chaitanyarai19@gmail.com', 'bajrang kuti', '482002', 'Jabalpur', 'Jabalpur', 'Madhya Pradesh', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('chaitanyarai19@gmail.com', '1234'),
('anant hospital', 'hospital1234567890'),
('chaitanyarai', '1234'),
('admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hno`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `password` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
