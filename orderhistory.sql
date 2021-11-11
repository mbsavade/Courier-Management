-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2017 at 08:33 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE IF NOT EXISTS `orderhistory` (
  `PCK_ID` int(11) NOT NULL,
  `cust_name` char(20) NOT NULL,
  `cust_contact` int(10) NOT NULL,
  `receiver_name` char(20) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `weight` int(3) NOT NULL,
  `status` char(20) NOT NULL,
  PRIMARY KEY (`PCK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`PCK_ID`, `cust_name`, `cust_contact`, `receiver_name`, `order_date`, `delivery_date`, `weight`, `status`) VALUES
(14, 'asad ac', 2147483647, 'ada dswd', '2017-09-05', '2017-09-10', 10, 'cancelled'),
(15, 'asad ac', 2147483647, 'ada dswd', '2017-09-05', '2017-09-10', 10, 'cancelled');
