-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2023 at 04:49 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cookinginstruction`
--

-- --------------------------------------------------------

--
-- Table structure for table `maghale`
--

CREATE TABLE IF NOT EXISTS `maghale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `content` varchar(120) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `creator` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `pic` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `date` date NOT NULL,
  `categuri` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `maghale`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `family` varchar(50) CHARACTER SET ucs2 DEFAULT NULL,
  `phon-number` varchar(50) DEFAULT NULL,
  `passwod` varchar(50) DEFAULT NULL,
  `email` varchar(50) CHARACTER SET ucs2 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `phon-number`, `passwod`, `email`) VALUES
(1, 'بینا', 'التبز', '03425325', '111', '1111'),
(2, 'Ù†Ø±Ú¯Ø³ ', 'Ø³ÙØ±ÛŒ', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'n@gmail.com'),
(3, 'Ù†Ø±Ú¯Ø³ ', 'Ø³ÙØ±ÛŒ', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'n@gmail.com'),
(4, 'نرگس ', 'سفری', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com'),
(5, 'safary', 'سفری', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'n@gmail.com'),
(6, 'مدیر باشگاه بدن سازی', 'ppp', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com');
