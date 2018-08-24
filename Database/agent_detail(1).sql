-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2017 at 04:30 AM
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
-- Table structure for table `agent_detail`
--

CREATE TABLE `agent_detail` (
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `it_pan` varchar(10) NOT NULL,
  `uid_adhar` varchar(12) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `perm_addr` varchar(80) NOT NULL,
  `local_addr` varchar(80) NOT NULL,
  `acc_no` varchar(30) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `alt_mobno` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `agent_added_date` date NOT NULL,
  `last_disabled_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_detail`
--

INSERT INTO `agent_detail` (`fname`, `mname`, `lname`, `mothername`, `dob`, `it_pan`, `uid_adhar`, `agent_id`, `perm_addr`, `local_addr`, `acc_no`, `mobno`, `alt_mobno`, `password`, `gender`, `email`, `agent_added_date`, `last_disabled_date`, `status`, `deleted`) VALUES
('Aditya', 'mohan', 'Shastri', 'Radhika', '1988-12-13', 'ABCDE2303F', '650032002133', 'AGN1710050003', 'yashwant nagar,nanded', 'yashwant nagar,nanded', '03846304600380', '9823924862', '', '12345678', 'male', 'aditya@mgmcen.ac.in', '2017-10-27', '2017-10-27', 0, 1),
('Akash', 'Pradip', 'Sharma', 'Gayatri', '1987-01-10', 'WERWD0925S', '130123320961', 'AGN1710040008', 'vasant nagar , nanded', 'vasant nagar , nanded', '11122111234134', '7766688899', '', 'pass@123', 'male', 'akash@abc.com', '2017-10-27', '2017-10-27', 0, 0),
('Ashwini', 'Gayalal', 'Ramapl', 'Geeta', '1990-03-15', 'MTSRT0839R', '120031442232', 'AGN1710040010', 'sharda nangar , nanded', 'sharda nangar , nanded', '01318484842121', '9981818283', '', 'abcd1234', 'female', 'ashwini@outlook.com', '2017-10-27', '2017-10-27', 1, 0),
('Asef', 'Latif', 'Shaikh', 'Usma', '1991-09-18', 'ERTYO9229E', '903276449830', 'AGN1710050002', 'baba nagar, nanded', '', '09358513681638', '8306923341', '', '123456789', 'male', 'asif@asif.com', '2017-10-25', '2017-10-26', 0, 0),
('Hanuman', 'Bapurao', 'karhale', 'Shitalabai', '1993-10-21', 'TRERD6529R', '302143028746', 'AGN1710040004', 'ananad nagar,nanded', '', '03121083592712', '9924611322', '', 'pass@123', 'male', 'hanumaan@google.com', '2017-10-19', '2017-10-20', 1, 0),
('Kunal', 'Anand', 'alandakar', 'Tulabai', '1990-10-19', 'TRARS6357Y', '308643983312', 'AGN1710040011', 'khushalsingh nagar,nanded', '', '08247292442435', '9928223322', '', 'kunal@123', 'male', 'kunal@hotmail.com', '2017-10-25', '2017-10-25', 0, 0),
('shreekrushna', 'Dewaji', 'lahoti', 'Priyanka', '1997-08-30', 'ABCTR3547U', '435770233412', 'AGN1710050004', 'shree nagar,nanded', '', '09364915835098', '9999888877', '', 'shree@123', 'male', 'lahoti@facebook.com', '2017-10-25', '2017-10-25', 0, 0),
('Pooja', 'Dewaji', 'Rawke', 'Shivani', '1997-10-19', 'ARTCD0922S', '903653223455', 'AGN1710040007', 'gokul nagar , nanded', '', '13435111432372', '8877665544', '', 'pooja123', 'female', 'pooja@abcd.ocm', '2017-10-25', '2017-10-25', 1, 0),
('Rahul', 'Ramlal', 'Sharman', 'Lata', '1993-04-03', 'ARTDS4820S', '302145338076', 'AGN1710040009', 'wasant nagar,nanded', '', '03323242899234', '8849223111', '', 'rahul@123', 'male', 'rahul@rahul.com', '2017-10-28', '2017-10-28', 1, 0),
('Sachin', 'Gopal', 'Dawane', 'Ramabai', '1993-06-10', 'TYREW3245A', '303245098834', 'AGN1710040012', 'anand nagar,nanded', '', '08484772372824', '7788383882', '', 'sachin@123', 'male', 'ram@gmail.com', '2017-10-28', '2017-10-28', 0, 0),
('shivdas', 'Maroti', 'Bachewar', 'Suman', '1992-09-19', 'MRSCV0294R', '859853445096', 'AGN1710040005', 'bhagya nagar , nanded', '', '30134713553435', '8837443212', '', 'shivdas@123', 'male', 'shivdas@abc.com', '2017-10-28', '2017-10-28', 1, 0),
('Rahul', 'Sudhir', 'Wagh', 'Vaishavi', '1990-10-10', 'BRSRT6430T', '304755234095', 'AGN1710050001', 'd-mart,nande', '', '89236496921265', '8886632212', '', 'rahul@123', 'male', 'ww@akhg.com', '2017-10-25', '2017-10-28', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_detail`
--
ALTER TABLE `agent_detail`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobno` (`mobno`),
  ADD UNIQUE KEY `agent_id` (`agent_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
