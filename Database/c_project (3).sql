-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 10:27 AM
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
-- Database: `c_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust_data`
--

CREATE TABLE `cust_data` (
  `id` int(50) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(200) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_age` int(10) NOT NULL,
  `p_gen` varchar(20) NOT NULL,
  `con_no` bigint(20) NOT NULL,
  `p_addr` varchar(200) NOT NULL,
  `p_pin` int(10) NOT NULL,
  `rel_pat` varchar(100) NOT NULL,
  `dr_name` varchar(200) NOT NULL,
  `hos_name` varchar(250) NOT NULL,
  `helth_iss` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_data`
--

INSERT INTO `cust_data` (`id`, `date`, `name`, `p_name`, `p_age`, `p_gen`, `con_no`, `p_addr`, `p_pin`, `rel_pat`, `dr_name`, `hos_name`, `helth_iss`) VALUES
(30, '2022-04-14', 'demo', 'demo', 12, 'Male', 77777777, 'lko', 226010, 'fr', 'man', 'd', 'k'),
(34, '2022-05-19', 'Demo', 'Demo', 19, 'Male', 6305415465, 'ahdfkjzhfxbjsdhxb', 271502, 'self', 'Demo', 'Demo', 'Demo'),
(35, '2022-05-10', 'Mann Gupta', 'Mann Gupta', 19, 'Male', 6306836770, 'Near BBD University, Faizabad Road, Lucknow ', 226028, 'Self', 'Dr. Rishi Kumar Shrivastava', 'KGMU', 'Fever');

-- --------------------------------------------------------

--
-- Table structure for table `followup_data`
--

CREATE TABLE `followup_data` (
  `id` int(11) NOT NULL,
  `cust_id` int(50) NOT NULL,
  `followup_type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `followup_data`
--

INSERT INTO `followup_data` (`id`, `cust_id`, `followup_type`, `date`, `time`, `remark`) VALUES
(1, 30, 'By Call', '2022-05-10', '12:00:00', 'Nothing'),
(2, 30, 'By Message', '2022-05-12', '13:20:00', 'Responded                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `lead_data`
--

CREATE TABLE `lead_data` (
  `id` int(11) NOT NULL,
  `cust_id` int(50) NOT NULL,
  `interest_in` varchar(200) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `lead_source` int(30) NOT NULL,
  `status` tinyint(2) NOT NULL COMMENT '0 = New/Prospect, 1 = Working, 2 = Opportunity, 3 = Not a Target, 4 = Opportunity Lost, 5 = Inactive;'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lead_data`
--

INSERT INTO `lead_data` (`id`, `cust_id`, `interest_in`, `remark`, `lead_source`, `status`) VALUES
(5, 30, 'k', 'k', 1, 0),
(9, 34, 'Demo', 'Demo', 4, 2),
(10, 35, 'Monthly Subscription ', 'Regular Buying Products', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes_data`
--

CREATE TABLE `notes_data` (
  `id` int(11) NOT NULL,
  `cust_id` int(50) NOT NULL,
  `notes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes_data`
--

INSERT INTO `notes_data` (`id`, `cust_id`, `notes`) VALUES
(1, 30, '                                                hi');

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

CREATE TABLE `source` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `discription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`id`, `name`, `discription`) VALUES
(1, 'Facebook Ad', 'Leads from the Facebook Advertisments.'),
(2, 'Company Website', 'Leads from company website'),
(3, 'Google Ads', 'Leads form Google Ads'),
(4, 'Instagram', 'Through Instagram post'),
(5, 'Referral', 'Leads from referrals'),
(6, 'Other Sources', 'Leads that are from unlisted sources.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `pwd`) VALUES
(1, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust_data`
--
ALTER TABLE `cust_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followup_data`
--
ALTER TABLE `followup_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `lead_data`
--
ALTER TABLE `lead_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `lead_source` (`lead_source`);

--
-- Indexes for table `notes_data`
--
ALTER TABLE `notes_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust_data`
--
ALTER TABLE `cust_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `followup_data`
--
ALTER TABLE `followup_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `lead_data`
--
ALTER TABLE `lead_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notes_data`
--
ALTER TABLE `notes_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `followup_data`
--
ALTER TABLE `followup_data`
  ADD CONSTRAINT `followup_data_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `cust_data` (`id`);

--
-- Constraints for table `lead_data`
--
ALTER TABLE `lead_data`
  ADD CONSTRAINT `lead_data_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `cust_data` (`id`),
  ADD CONSTRAINT `lead_data_ibfk_2` FOREIGN KEY (`lead_source`) REFERENCES `source` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notes_data`
--
ALTER TABLE `notes_data`
  ADD CONSTRAINT `notes_data_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `cust_data` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
