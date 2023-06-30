-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2023 at 11:24 AM
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
-- Table structure for table `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `idpost` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `isfavorit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `username`, `idpost`, `iduser`, `isfavorit`) VALUES
(1, '', 10, 0, 1),
(2, '', 10, 0, 1),
(3, 'a@gmail.com', 10, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `maghale`
--

CREATE TABLE IF NOT EXISTS `maghale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `content` varchar(120) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `creator` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `pic` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `categuri` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `maghale`
--

INSERT INTO `maghale` (`id`, `titel`, `content`, `creator`, `pic`, `date`, `categuri`) VALUES
(9, 'foood', 'rtyujyju', 'narjes.safary@gmail.com', '../../assets/img/maghale/new.jpg', '2023-06-08', 'ایرانی'),
(10, 'تخم مرغ', 'روش تهیه تخم مرغ\r\nابتدا تخم مرغ را برمیداریم سپس ', 'narjes.safary@gmail.com', '../../assets/img/maghale/fried-egg-.jpg', '2023-06-08', 'ایرانی'),
(11, 'شیرینی لطیفه', ' آرد سفید: ۳/۴ لیوان دسته‌دار فرانسوی\r\n• نشاسته ذرت: ۳ قاشق غذاخوری سرصاف\r\n• شکر: ۳/۴ لیوان دسته‌دار فرانسوی\r\n• تخم مرغ:', 'narjes.safary@gmail.com', '../../assets/img/maghale/latifeh.jpg', '2023-06-08', 'فرنگی'),
(12, 'پاستا', 'نام ماده غذایی	مقدار مورد نیاز\r\nقارچ	۲۰۰ گرم\r\nسینه مرغ	۲۰۰ گرم\r\nشیر	۱ فنجان\r\nسیر	۱ حبه\r\nآب مرغ	۱ لیوان\r\nآرد سفید	۲ قاشق ', 'narjes.safary@gmail.com', '../../assets/img/maghale/spa.jpg', '2023-06-08', 'فرنگی');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `phon-number`, `passwod`, `email`) VALUES
(1, 'بینا', 'التبز', '03425325', '111', '1111'),
(2, 'Ù†Ø±Ú¯Ø³ ', 'Ø³ÙØ±ÛŒ', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'n@gmail.com'),
(3, 'Ù†Ø±Ú¯Ø³ ', 'Ø³ÙØ±ÛŒ', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'n@gmail.com'),
(4, 'نرگس ', 'سفری', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com'),
(5, 'safary', 'سفری', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'n@gmail.com'),
(7, 'نرگس ', 'سفری', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com'),
(8, 'نرگس ', 'سفری', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com'),
(9, 'safary', 'ppp', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com'),
(10, 'safary', 'ppp', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com'),
(11, 'safary', 'ppp', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com'),
(12, 'safary', 'ppp', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com'),
(13, 'narjessafary', '2263', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'narjes.safary@gmail.com'),
(14, 'narjessafary', '2263', '09136599739', 'c6f057b86584942e415435ffb1fa93d4', 'a@gmail.com');
