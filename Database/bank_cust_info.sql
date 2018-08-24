-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2017 at 02:13 PM
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
-- Table structure for table `bank_cust_info`
--

CREATE TABLE `bank_cust_info` (
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `it_pan` varchar(10) NOT NULL,
  `uid_adhar` bigint(12) NOT NULL,
  `local_addr` varchar(80) NOT NULL,
  `perm_addr` varchar(80) NOT NULL,
  `acc_no` varchar(30) NOT NULL,
  `mobno` varchar(13) NOT NULL,
  `alt_mobno` varchar(13) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
