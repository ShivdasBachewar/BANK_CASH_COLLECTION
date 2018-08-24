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
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `agent_id` varchar(14) NOT NULL,
  `subscriber_acc_no` bigint(15) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `mod_of_payment` varchar(10) NOT NULL DEFAULT 'CASH'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`agent_id`, `subscriber_acc_no`, `amount`, `date`, `mod_of_payment`) VALUES
('AGN1710040008', 3200483244095, 100, '2017-10-30', 'CASH'),
('AGN1710040008', 3208663566253, 100, '2017-10-30', 'CASH'),
('AGN1710040008', 3206455372530, 100, '2017-10-30', 'CASH'),
('AGN1710040008', 3209973455237, 100, '2017-10-30', 'CASH'),
('AGN1710050003', 3208849500032, 100, '2017-10-28', 'CASH'),
('AGN1710050003', 3208849500032, 100, '2017-10-29', 'CASH'),
('AGN1710050003', 3208849500032, 100, '2017-10-30', 'CASH'),
('AGN1710050003', 3208849500032, 100, '2017-10-31', 'CASH');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
