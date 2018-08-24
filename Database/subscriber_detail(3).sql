-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2017 at 04:34 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_cash_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_detail`
--

CREATE TABLE `subscriber_detail` (
  `agent_id` varchar(16) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `address` varchar(40) NOT NULL,
  `subscriber_id` varchar(20) NOT NULL,
  `acc_no` varchar(30) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `alt_mobno` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subsc_added_date` date NOT NULL,
  `last_disabled_date` date NOT NULL,
  `min_saving` bigint(6) NOT NULL,
  `mod_of_payment` varchar(6) NOT NULL DEFAULT 'CASH',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber_detail`
--

INSERT INTO `subscriber_detail` (`agent_id`, `full_name`, `address`, `subscriber_id`, `acc_no`, `mobno`, `alt_mobno`, `gender`, `email`, `subsc_added_date`, `last_disabled_date`, `min_saving`, `mod_of_payment`, `status`, `deleted`) VALUES
('AGN1710050003', 'Ram Janardhan Godle', 'vidyut nagar,nanded', 'CN1710270003', '3208849500032', '9988880099', '', 'male', 'pall@google.com', '2017-10-27', '2017-10-27', 100, 'CASH', 0, 0),
('AGN1710040008', 'Sweta Prakash Kandhare', 'anand nagar,nanded', 'CN1710270004', '3200483244095', '9888888888', '', 'female', 'sweta_pK@gmail.com', '2017-10-27', '2017-10-27', 100, 'CASH', 0, 0),
('AGN1710040008', 'Nandeeta Anand Gadhe', 'vidyut nagar, nanded', 'CN1710270005', '3208663566253', '7878785656', '', 'female', 'nandeeni123@yahoo.com', '2017-10-27', '2017-10-27', 100, 'CASH', 0, 0),
('AGN1710040008', 'Sugat Bhimanad Kambale', 'chaitanya nagar, nanded', 'CN1710270006', '3206455372530', '7788998888', '', 'male', 'K_sugat@gmail.com', '2017-10-27', '2017-10-27', 100, 'CASH', 0, 0),
('AGN1710040008', 'Laxam Ashok Ambore', 'paras nagar, nanded', 'CN1710270007', '3209973455237', '7444334433', '', 'male', 'lakk9920@gmail.com', '2017-10-27', '2017-10-27', 100, 'CASH', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscriber_detail`
--
ALTER TABLE `subscriber_detail`
  ADD PRIMARY KEY (`subscriber_id`),
  ADD UNIQUE KEY `client_id` (`subscriber_id`),
  ADD UNIQUE KEY `mobno` (`mobno`),
  ADD UNIQUE KEY `s_acc` (`acc_no`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
