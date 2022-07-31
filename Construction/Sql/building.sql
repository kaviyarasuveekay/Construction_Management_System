-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 07:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `building`
--

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE `attandance` (
  `att_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `attendance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`att_id`, `member_id`, `date`, `attendance`) VALUES
(141, 1, '2022-04-06', 'Present'),
(142, 2, '2022-04-06', 'Absent'),
(143, 3, '2022-04-06', 'Absent'),
(144, 20, '2022-04-06', 'Present'),
(145, 21, '2022-04-06', 'Present'),
(146, 22, '2022-04-06', 'Present'),
(147, 23, '2022-04-06', 'Present'),
(148, 24, '2022-04-06', 'Absent'),
(149, 1, '2022-04-09', 'Present'),
(150, 2, '2022-04-09', 'Absent'),
(151, 3, '2022-04-09', 'Absent'),
(152, 20, '2022-04-09', 'Absent'),
(153, 21, '2022-04-09', 'Present'),
(154, 22, '2022-04-09', 'Present'),
(155, 23, '2022-04-09', 'Present'),
(156, 24, '2022-04-09', 'Absent'),
(157, 1, '2022-04-24', 'Present'),
(158, 2, '2022-04-24', 'Absent'),
(159, 3, '2022-04-24', 'Absent'),
(160, 20, '2022-04-24', 'Present'),
(161, 21, '2022-04-24', 'Present'),
(162, 22, '2022-04-24', 'Present'),
(163, 23, '2022-04-24', 'Present'),
(164, 24, '2022-04-24', 'Present'),
(165, 25, '2022-04-24', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(10) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `midname` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pid` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ecode` varchar(10) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp(),
  `e_pic` varchar(100) NOT NULL,
  `io` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `lastname`, `firstname`, `midname`, `bday`, `contact_no`, `address`, `pid`, `status`, `gender`, `ecode`, `date_added`, `e_pic`, `io`) VALUES
(1, 'Administrator', 'Admin', '', '1987-06-23', '8098918598', 'Sample', 1, 'Single', 'Male', '78945', '0000-00-00', '9642_avatar.jpg', 1),
(2, 'Smith', 'John', '', '1993-06-23', '6789098765', 'Sample', 1, 'Single', 'Male', '78946', '2020-10-05', 'no_image.jpg', 1),
(3, 'Wilson', 'George', '', '1990-07-11', '9876543245', 'Sample', 2, 'Married', 'Male', '78947', '2020-10-05', 'no_image.jpg', 1),
(20, 'Kaviyarasu', 'V', 'No', '2000-10-18', '7639595078', 's.kattur \r\nmustakinathuppatti karur-639118', 1, 'Single', 'Male', '78948', '2022-03-21', '4039_Kavi_profile_photo.jpg', 1),
(21, 'Anvish', 'ram', 'no', '2005-03-03', '8767545678', 'vit vellore tamilnadu india.', 13, 'Single', 'Male', '78949', '2022-03-21', 'no_image.jpg', 2),
(22, 'ramya', 'r', 'nothing', '2004-05-22', '5289262782', 'salem', 6, 'Single', 'Female', '78950', '2022-03-22', 'no_image.jpg', 1),
(23, 'Babitha', 'n', 'Grade-2', '2001-03-01', '78654567890', 'Vit vellore, near railway station.', 5, 'Single', 'Female', '78951', '2022-03-22', 'no_image.jpg', 1),
(24, 'abc', 'abc', 'opph', '2016-03-03', '7867564534', 'hfwriifhesoihgfauu', 4, 'Single', 'Female', '78952', '2022-03-22', 'no_image.jpg', 1),
(25, 'sasi', 'karan', 'higher grade', '1986-01-28', '7867567678', 'near new bus stand Trichy.', 1, 'Single', 'Male', '78953', '2022-04-24', 'no_image.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `INVOICE_ID` int(11) NOT NULL,
  `NET_TOTAL` double NOT NULL DEFAULT 0,
  `INVOICE_DATE` date NOT NULL DEFAULT current_timestamp(),
  `CUSTOMER_ID` int(11) NOT NULL,
  `TOTAL_AMOUNT` double NOT NULL,
  `TOTAL_DISCOUNT` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`INVOICE_ID`, `NET_TOTAL`, `INVOICE_DATE`, `CUSTOMER_ID`, `TOTAL_AMOUNT`, `TOTAL_DISCOUNT`) VALUES
(34, 116.4, '2021-09-22', 22, 120, 3.6),
(35, 160, '2021-11-22', 24, 160, 0),
(36, 50, '2021-11-22', 23, 50, 0),
(37, 18, '2021-10-22', 22, 18, 0),
(38, 9, '2021-11-22', 25, 9, 0),
(39, 16, '2021-11-06', 24, 16, 0),
(40, 20, '2021-11-23', 26, 20, 0),
(41, 100, '2021-11-10', 23, 100, 0),
(42, 1615, '2021-11-23', 27, 1615, 0),
(43, 150, '2021-11-23', 25, 150, 0),
(44, 27.44, '2021-11-25', 22, 28, 0.56),
(45, 9, '2022-01-19', 22, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `PACKING` varchar(20) COLLATE utf16_bin NOT NULL,
  `REMARKS` varchar(100) COLLATE utf16_bin NOT NULL,
  `SUPPLIER_NAME` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`ID`, `NAME`, `PACKING`, `REMARKS`, `SUPPLIER_NAME`) VALUES
(43, 'Cement', '1', 'No', 'Arunraj'),
(44, 'Bricks', '100', 'Nope', 'Ramya'),
(45, 'Steel', '10', 'Expire This Month', 'Kaviyarasu'),
(46, 'M-Sand', '4', 'Low Quantity', 'Kaviyarasu');

-- --------------------------------------------------------

--
-- Table structure for table `materials_stock`
--

CREATE TABLE `materials_stock` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `BATCH_ID` varchar(20) COLLATE utf16_bin NOT NULL,
  `EXPIRY_DATE` varchar(10) COLLATE utf16_bin NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `MRP` double NOT NULL,
  `RATE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `materials_stock`
--

INSERT INTO `materials_stock` (`ID`, `NAME`, `BATCH_ID`, `EXPIRY_DATE`, `QUANTITY`, `MRP`, `RATE`) VALUES
(35, 'Cement', 'CE21', '04/22', 50, 250, 250),
(36, 'Bricks', '453', '03/22', 1000, 15, 12),
(37, 'Steel', 'ST10', '04/22', 10, 2000, 1500),
(38, 'M-Sand', 'MS10', '04/22', 3, 1400, 900),
(39, 'Bricks', 'BRC100', '06/22', 20, 300, 200);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `pid` int(10) NOT NULL,
  `position` varchar(100) NOT NULL,
  `p_type` varchar(15) NOT NULL,
  `daily_rate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`pid`, `position`, `p_type`, `daily_rate`) VALUES
(1, 'Foreman', 'Senior', '1500'),
(2, 'Mason', 'Senior', '1500'),
(3, 'Engineer', 'Grade-1', '500'),
(4, 'Men_helper', 'Greade-2', '450'),
(5, 'Women_helper', 'Senior', '350'),
(6, 'Painter', 'Grade-1', '500'),
(7, 'Electrician', 'Grae-2', '450'),
(13, 'Developer', 'Tester_Full Tim', '400'),
(14, 'painter', 'grade1', '400'),
(15, 'tteg', 'rges', '12431'),
(16, 'Mason', 'Grade 1', '700');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(10) NOT NULL,
  `project` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `overall_cost` varchar(10) NOT NULL,
  `start_date` date NOT NULL,
  `deadline` date NOT NULL,
  `site_pic` varchar(100) NOT NULL,
  `tid` int(10) NOT NULL,
  `proposed_project` int(5) NOT NULL,
  `date_added` date NOT NULL,
  `io` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project`, `location`, `overall_cost`, `start_date`, `deadline`, `site_pic`, `tid`, `proposed_project`, `date_added`, `io`) VALUES
(4, 'Sample Project', 'Sample', '30000000', '2019-02-05', '2020-10-12', '8842_blank.jpg', 1, 1, '2020-10-05', 1),
(5, 'ww', 'ww', 'ww', '2022-02-25', '2022-02-27', 'no_image.jpg', 1, 3, '2022-02-26', 1),
(6, 'wdf', 'hj', '78', '2022-02-25', '2022-02-26', 'no_image.jpg', 1, 1, '2022-02-26', 1),
(7, 'wdf', 'sd', '123', '2022-02-24', '2022-03-12', 'no_image.jpg', 2, 2, '2022-02-28', 1),
(8, 'wdf', 'sd', '123', '2022-02-24', '2022-03-12', 'no_image.jpg', 2, 2, '2022-02-28', 1),
(9, 'wdf', 'sd', '123', '2022-02-24', '2022-03-12', 'no_image.jpg', 2, 2, '2022-02-28', 1),
(10, 'aa', 'aa', '123', '2022-02-09', '2022-02-23', 'no_image.jpg', 1, 3, '2022-02-28', 1),
(11, 'aa', 'aa', '123', '2022-02-09', '2022-02-23', 'no_image.jpg', 1, 3, '2022-02-28', 1),
(12, 'aa', 'aa', '123', '2022-02-09', '2022-02-23', 'no_image.jpg', 1, 3, '2022-02-28', 1),
(13, 'sdf', 'sdf', '345', '2022-02-26', '2022-03-10', 'no_image.jpg', 3, 4, '2022-02-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_division`
--

CREATE TABLE `project_division` (
  `pd_id` int(11) NOT NULL,
  `division` varchar(100) NOT NULL,
  `project_type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_division`
--

INSERT INTO `project_division` (`pd_id`, `division`, `project_type`) VALUES
(1, 'Layout', 1),
(2, 'Floor', 1),
(3, 'Roof', 1),
(4, 'windows', 1),
(5, 'Sample', 1),
(6, 'Final ', 3),
(7, 'Lane', 3),
(8, 'grands', 4),
(9, 'concrete', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_partition`
--

CREATE TABLE `project_partition` (
  `pp_id` int(10) NOT NULL,
  `project_id` int(10) NOT NULL,
  `pd_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_partition`
--

INSERT INTO `project_partition` (`pp_id`, `project_id`, `pd_id`) VALUES
(1, 2, 5),
(2, 3, 2),
(3, 3, 1),
(4, 4, 2),
(5, 3, 3),
(6, 4, 1),
(7, 4, 3),
(8, 3, 5),
(9, 4, 5),
(10, 3, 4),
(11, 4, 4),
(12, 5, 2),
(13, 5, 1),
(14, 5, 3),
(15, 5, 5),
(16, 5, 4),
(17, 6, 1),
(18, 6, 4),
(19, 8, 0),
(20, 9, 2),
(21, 9, 5),
(22, 9, 4),
(23, 9, 0),
(24, 10, 2),
(25, 10, 1),
(26, 10, 3),
(27, 10, 5),
(28, 10, 4),
(29, 13, 6),
(30, 13, 7),
(31, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_team`
--

CREATE TABLE `project_team` (
  `tid` int(10) NOT NULL,
  `date_added` date NOT NULL,
  `eid` int(10) NOT NULL,
  `pio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_team`
--

INSERT INTO `project_team` (`tid`, `date_added`, `eid`, `pio`) VALUES
(7, '2022-03-21', 20, 1),
(8, '2022-03-22', 2, 1),
(9, '2022-04-09', 3, 0),
(10, '2022-04-24', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `SUPPLIER_NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `INVOICE_NUMBER` int(11) NOT NULL,
  `VOUCHER_NUMBER` int(11) NOT NULL,
  `PURCHASE_DATE` varchar(10) COLLATE utf16_bin NOT NULL,
  `TOTAL_AMOUNT` double NOT NULL,
  `PAYMENT_STATUS` varchar(20) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`SUPPLIER_NAME`, `INVOICE_NUMBER`, `VOUCHER_NUMBER`, `PURCHASE_DATE`, `TOTAL_AMOUNT`, `PAYMENT_STATUS`) VALUES
('Arunraj', 91, 48, '2022-03-21', 12500, 'DUE'),
('Ramya', 93, 49, '2022-03-03', 12000, 'DUE'),
('Kaviyarasu', 90, 50, '2022-04-08', 15000, 'PAID'),
('Kaviyarasu', 92, 51, '2022-04-08', 2700, 'PAID'),
('Arivukarasu', 101, 52, '2022-03-30', 4000, 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `sallary`
--

CREATE TABLE `sallary` (
  `id` int(20) NOT NULL,
  `member_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sallary`
--

INSERT INTO `sallary` (`id`, `member_id`, `name`, `date`, `status`) VALUES
(74, 1, 'Administrator', '2022-04-06', 'Not Paid'),
(75, 2, 'Smith', '2022-04-06', 'Paid'),
(76, 3, 'Wilson', '2022-04-06', 'Paid'),
(77, 20, 'Kaviyarasu', '2022-04-06', 'Paid'),
(78, 21, 'Anvish', '2022-04-06', 'Paid'),
(79, 22, 'ramya', '2022-04-06', 'Not Paid'),
(80, 23, 'Babitha', '2022-04-06', 'Not Paid'),
(81, 24, 'abc', '2022-04-06', 'Not Paid');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `EMAIL` varchar(100) COLLATE utf16_bin NOT NULL,
  `CONTACT_NUMBER` varchar(10) COLLATE utf16_bin NOT NULL,
  `ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL,
  `gender` varchar(50) COLLATE utf16_bin NOT NULL,
  `role` varchar(50) COLLATE utf16_bin NOT NULL,
  `status` varchar(50) COLLATE utf16_bin NOT NULL,
  `date` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`ID`, `NAME`, `EMAIL`, `CONTACT_NUMBER`, `ADDRESS`, `gender`, `role`, `status`, `date`) VALUES
(32, 'Kaviyarasu', 'kavi@gmail.com', '7658976006', 'Nehru Streetnear Old BustandKarur.', '', '', '', ''),
(33, 'Sasi', 'sasi@gmail.com', '6754345987', 'Kalai Nagarnear Parktrichy', '', '', '', ''),
(34, 'Arunraj', 'arun@gmail.com', '7658790876', 'Sk Nagarold Roadkarur', '', '', '', ''),
(38, 'Jeeva', 'jeva@gmail.com', '7867589076', 'New Bustandkarur', '', '', '', ''),
(39, 'Priya', 'priya@gmail.com', '8098786523', 'Aks Nagarnear Avs Hotelsalem', '', '', '', ''),
(40, 'Alice', 'alice@hmail.com', '7890876546', '23,ghandhi Street,near Avs Tower,trichy.', '', '', '', ''),
(71, 'Ramya', 'ramya123@gmail.com', '4679178911', '17/3,salem', '', '', '', ''),
(72, 'Fgfsgds', 'dfsz@jfgt.com', '6768746754', 'Biufkuyfuyufu', '', '', '', ''),
(73, 'Kavi', 'kavi2gmail.com', '9876778888', 'Chennat4fgg4fg4tg4tytiu33', '', '', '', ''),
(74, 'Arivukarasu', 'arivu@gmail.com', '9789876789', '23/89, Opposite To The Salem Airport. Salem.', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `tm_id` int(10) NOT NULL,
  `tid` int(10) NOT NULL,
  `eid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`tm_id`, `tid`, `eid`) VALUES
(2, 2, 3),
(3, 3, 7),
(4, 3, 6),
(6, 4, 10),
(7, 3, 7),
(8, 3, 6),
(13, 1, 6),
(14, 5, 8),
(15, 6, 8),
(16, 7, 2),
(17, 8, 21),
(19, 9, 0),
(20, 9, 21),
(21, 10, 20),
(22, 10, 21),
(23, 10, 23),
(24, 10, 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `eid` int(5) NOT NULL,
  `user_type` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `io` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `eid`, `user_type`, `username`, `password`, `email`, `io`) VALUES
(1, 1, 1, 'admin', 'admin', 'admin@gmail.com', 1),
(2, 1, 1, 'kaviv', 'Kaviyarasu', 'kavi@gmail.com', 1),
(3, 1, 1, 'deepan', 'deep', 'kaviarasuv22@gmail.com', 2),
(4, 23, 1, 'babitha', '123', '', 2),
(5, 20, 1, 'kavi', 'kavi', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attandance`
--
ALTER TABLE `attandance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`INVOICE_ID`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `materials_stock`
--
ALTER TABLE `materials_stock`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `BATCH_ID` (`BATCH_ID`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_division`
--
ALTER TABLE `project_division`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `project_partition`
--
ALTER TABLE `project_partition`
  ADD PRIMARY KEY (`pp_id`);

--
-- Indexes for table `project_team`
--
ALTER TABLE `project_team`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`VOUCHER_NUMBER`);

--
-- Indexes for table `sallary`
--
ALTER TABLE `sallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`tm_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attandance`
--
ALTER TABLE `attandance`
  MODIFY `att_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `INVOICE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `materials_stock`
--
ALTER TABLE `materials_stock`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project_division`
--
ALTER TABLE `project_division`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project_partition`
--
ALTER TABLE `project_partition`
  MODIFY `pp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `project_team`
--
ALTER TABLE `project_team`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `VOUCHER_NUMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sallary`
--
ALTER TABLE `sallary`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `tm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
