-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2017 at 08:34 AM
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
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `cust_address1` varchar(50) NOT NULL,
  `PCK_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cust_address2` varchar(50) NOT NULL,
  `cust_city` char(30) NOT NULL,
  `cust_pincode` int(6) NOT NULL,
  `weight` int(3) NOT NULL,
  `order_date` date NOT NULL,
  `receiver_add1` varchar(50) NOT NULL,
  `receiver_add2` varchar(50) NOT NULL,
  `receiver_city` char(30) NOT NULL,
  `receiver_pincode` int(6) NOT NULL,
  `delivery_date` date NOT NULL,
  PRIMARY KEY (`PCK_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`cust_address1`, `PCK_ID`, `cust_address2`, `cust_city`, `cust_pincode`, `weight`, `order_date`, `receiver_add1`, `receiver_add2`, `receiver_city`, `receiver_pincode`, `delivery_date`) VALUES
('axdac', 15, '', 'Pune', 441047, 10, '2017-09-05', 'daf', '', 'Pune', 441107, '2017-09-10'),
('axdac', 16, '', 'Pune', 441047, 0, '2017-09-05', 'daf', '', 'Pune', 441107, '2017-09-10');
