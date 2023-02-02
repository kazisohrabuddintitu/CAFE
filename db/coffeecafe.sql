-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2014 at 05:00 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coffeecafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE IF NOT EXISTS `beverages` (
  `b_id` int(255) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(255) NOT NULL DEFAULT '',
  `product` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`b_id`, `menu_type`, `product`, `image`, `price`) VALUES
(2, '1', 'VANILLA CAPPUCCINO', 'b1.PNG', '110'),
(3, '1', 'CAPPUCCINO', 'b2.PNG', '140'),
(4, '1', 'CAFE MOCHA', 'b3.PNG', '180'),
(5, '1', 'MACCHIA TO', 'b4.PNG', '80'),
(6, '2', 'DEVIS OWN', 'b5.PNG', '250'),
(7, '2', 'ICED ESKIMO', 'b6.PNG', '200'),
(8, '2', 'KAPPI NIRVANA', 'b7.PNG', '300'),
(9, '2', 'VEGAN SHAKE', 'b8.PNG', '130'),
(10, '3', 'CRUNCHY VANILLA FRAPE', 'b9.PNG', '180'),
(11, '3', 'CRUNCHY FRAPPE', 'b10.PNG', '160'),
(12, '3', 'BLUSHBERRY FRAPPE', 'b11.PNG', '190'),
(13, '3', 'CHOCO FRAPPE', 'b12.PNG', '220'),
(14, '4', 'PROMEGRANATE LEMON', 'b13.PNG', '130'),
(15, '4', 'CUCUMBER LEMON', 'b14.PNG', '170'),
(16, '2', 'CHOCOLATE FANTASY CAKE( 300)', '', ''),
(17, '2', 'ICED ESKIMO', 'b6.PNG', '200');

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE IF NOT EXISTS `combo` (
  `c_id` int(255) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(255) NOT NULL DEFAULT '',
  `product` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`c_id`, `menu_type`, `product`, `image`, `price`) VALUES
(2, '1', 'COMBO-CHOCO DONUT', 'c51.PNG', '350'),
(3, '1', 'COMBO-EGG WRAP', 'c52.PNG', '400'),
(4, '1', 'COMBOCHILLI CHESE TOASTIZZA', 'c53.PNG', '250'),
(5, '1', 'CUP SLICE COMBO', 'c54.PNG', '380'),
(6, '1', 'CLASSIC VEG', 'c55.PNG', '290'),
(7, '1', 'CHILLER VEG', 'c56.PNG', '320'),
(8, '1', 'combowrap', '50.PNG', '400');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `mail` varchar(255) NOT NULL DEFAULT '',
  `phn` varchar(255) NOT NULL DEFAULT '',
  `msg` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `mail`, `phn`, `msg`) VALUES
(1, 'ajay120', '01723214', '14343', '0'),
(2, 'ajay120', '01723214', '14343', '0'),
(3, 'ajay120', '01723214', '14343', '0'),
(4, 'ajay120', '01723214', '14343', '0'),
(5, 'ajay120', '01723214', '14343', '0'),
(6, 'ajay120', '01723214', '14343', '0'),
(7, 'ajay120', '01723214', '14343', '0'),
(8, 'ajay120', '01723214', '14343', '0'),
(9, 'ajay120', '01723214', '14343', '0'),
(10, 'ajay120', '01723214', '14343', '0'),
(11, 'ajay120', '01723214', '14343', '0'),
(12, 'ajay120', '01723214', '14343', '0'),
(13, 'ajay120', '01723214', '14343', '0'),
(14, 'ajay120', '01723214', '14343', '0'),
(15, 'ajay120', '01723214', '14343', '0'),
(16, 'ajay120', '01723214', '14343', '0'),
(17, 'ajay120', '01723214', '14343', '0'),
(18, 'ajay120', '01723214', '14343', '0'),
(19, 'ajay120', '01723214', '14343', '0'),
(20, 'ajay120', '01723214', '14343', '0'),
(21, 'ajay120', '01723214', '14343', '0'),
(22, '', '', '', ''),
(23, 'suhil', 'raveh', '54363653', 'hi'),
(24, '', '', '', ''),
(25, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(255) NOT NULL DEFAULT '',
  `product` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `price` int(11) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`f_id`, `menu_type`, `product`, `image`, `price`) VALUES
(32, '1', 'EGG WRAP', 'c14.PNG', 100),
(33, '1', 'FRENCH CROISSANT', 'c15.PNG', 45),
(34, '1', 'CREAMY CHOCO DONUT', 'c15.PNG', 65),
(35, '1', 'CHILLI CHEESE TOASTIZZA', 'c18.PNG', 150),
(36, '1', 'VEG SAMOSA', 'c19.PNG', 30),
(37, '1', 'HOT "N" SPICY VEG PUFF', 'c20.PNG', 35),
(38, '2', 'CHESSY VEG CROISSANT', 'c26.PNG', 100),
(40, '2', 'SMOKED CHICKEN SANDWIH', 'c28.PNG', 70),
(41, '2', 'CHICKEN 65 SANDWICH', 'c24.PNG', 65),
(42, '2', 'TANDOORI CHICKEN SANDWICH', 'c29.PNG', 80),
(44, '2', 'TEX-MEX- VEG CHESSE SANDWICH', 'c31.PNG', 65),
(45, '3', 'CHOC-HOLA', 'c38.PNG', 150),
(46, '3', 'DARK PASSION', 'c39.PNG', 130),
(48, '3', 'VANILLA ICE CREAM', 'c41.PNG', 120),
(49, '3', 'CHOCOLATE ICE CREAM', 'c44.PNG', 135),
(50, '3', 'SIZZLE DAZZLE BROWNIE', 'c40.PNG', 200),
(51, '4', 'CHOCOLATE FANTASY CAKE', 'c45.PNG', 300),
(52, '4', 'HEZELNUT KARAT CELEBRATION CAKE', 'c46.PNG', 450),
(53, '4', 'CHOCO INDULGENCE CELBRATION CAKE', 'c47.PNG', 500),
(54, '5', 'MANGO SHOT', 'C48.PNG', 250),
(55, '5', 'BELGIAN CHOCO SHOT', 'C49.PNG', 250),
(56, '1', 'chicken', '', 0),
(57, '1', 'CHOCOLATE FANTASY CAKE( 300)', '', 500),
(58, '1', 'egg wrap', '', 100),
(59, '1', 'egg wrap', 'c14.PNG', 100),
(60, '1', 'veg samosa', 'c19.PNG', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `pwd`) VALUES
(16, 'disha', 'a@gmail.com', 'adc'),
(17, 'disha', 'a@gmail.com', 'adc'),
(18, 'disha', 'riya@gmail.com', 'adc'),
(19, 'disha', 'riya@gmail.com', 'adc'),
(20, 'disha', 'riya@gmail.com', 'adc'),
(21, 'disha', 'riya@gmail.com', 'adc'),
(22, 'man', 'man@gmail.com', '555'),
(23, 'disha', 'hh', '66'),
(24, 'neha', 'asda', 'adc'),
(25, 'shwea', 'disha@gmail.com', 'sdc'),
(26, 'n', 'n@gmail.com', '66'),
(27, 'man', 'M@gmail.com', '666'),
(28, 'priya', 'y@gmail.com', '777'),
(29, 'chhavi', 'c@gmail.com', 'disha');
