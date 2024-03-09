-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2024 at 05:19 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `planpurchase`
--

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `dess` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `name`, `cost`, `dess`) VALUES
(1, 'Basic Plan', '$ 10', '$10/month'),
(2, 'Standard Plan', '$20', '$20/month'),
(3, 'Premium Plan', '$ 30', '$30 per month');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `plan` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `umail` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `tcost` varchar(50) NOT NULL,
  `dat` varchar(50) NOT NULL,
  `cnum` varchar(50) NOT NULL,
  `refno` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pid`, `pname`, `plan`, `month`, `umail`, `uname`, `tcost`, `dat`, `cnum`, `refno`) VALUES
(1, 'Basic Plan', '$ 10', '2', 'vk@gmail.com', 'vk', '20', '2024-03-07', '325346547545', 'ref5761349618');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mail`, `pwd`, `address`, `mobile`) VALUES
(3, 'vk', 'vk@gmail.com', 'vk', 'cbe', '9876543210'),
(4, 'test', 'test@gmail.com', 'test', 'cbe', '9876543210');
