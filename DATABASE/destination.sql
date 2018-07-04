-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2018 at 03:37 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destination`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahmedabad`
--

DROP TABLE IF EXISTS `ahmedabad`;
CREATE TABLE IF NOT EXISTS `ahmedabad` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahmedabad`
--

INSERT INTO `ahmedabad` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('40124', 'Double Decker', '18:00', '21:21', 'Detail', 'Detail', 'Detail', '1245', '876', '256', '450'),
('29863', 'Karnawati', '17:40', '21:00', 'Detail', 'Detail', 'Detail', '789', '509', '346', '312'),
('16843', 'Rajdhani', '16:40', '23:45', 'Detail', 'Detail', 'Detail', '2789', '1209', '646', '412'),
('3213', 'Shatabdi', '9:40', '12:45', 'Detail', 'Detail', 'Detail', '1789', '809', '346', '398'),
('23573', 'Surat Jamnagar Intercity', '13:31', '17:45', 'Detail', 'Detail', 'Detail', '2312', '1209', '416', '408');

-- --------------------------------------------------------

--
-- Table structure for table `bhopal`
--

DROP TABLE IF EXISTS `bhopal`;
CREATE TABLE IF NOT EXISTS `bhopal` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bhopal`
--

INSERT INTO `bhopal` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('22034', 'Chambal Express', '10:20', '20:11', 'Detail', 'Detail', 'Detail', '1500', '678', '345', '400'),
('21140', 'Amrawati Express', '4:56', '18:21', 'Detail', 'Detail', 'Detail', '1978', '876', '456', '415'),
('41180', 'Gomti Express', '12:56', '20:34', 'Detail', 'Detail', 'Detail', '2110', '876', '456', '405'),
('29543', 'Gyan Ganga Express', '5:56', '17:21', 'Detail', 'Detail', 'Detail', '1500', '415', '230', '450'),
('40567', 'Hirakud Express', '7:56', '23:21', 'Detail', 'Detail', 'Detail', '1998', '765', '356', '415');

-- --------------------------------------------------------

--
-- Table structure for table `chennai`
--

DROP TABLE IF EXISTS `chennai`;
CREATE TABLE IF NOT EXISTS `chennai` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chennai`
--

INSERT INTO `chennai` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('41234', 'East Cost Express', '9:50', '12:21', 'Detail', 'Detail', 'Detail', '1234', '678', '356', '415'),
('23457', 'Vishakapatnam Express', '5:50', '20:21', 'Detail', 'Detail', 'Detail', '4533', '1278', '856', '405'),
('21874', 'Samta Express', '8:50', '18:21', 'Detail', 'Detail', 'Detail', '1874', '778', '356', '415'),
('48764', 'Rockfort Express', '10:50', '22:21', 'Detail', 'Detail', 'Detail', '2234', '1278', '6456', '415'),
('48764', 'Rantanchal Express', '2:50', '11:21', 'Detail', 'Detail', 'Detail', '1234', '778', '256', '415');

-- --------------------------------------------------------

--
-- Table structure for table `delhi`
--

DROP TABLE IF EXISTS `delhi`;
CREATE TABLE IF NOT EXISTS `delhi` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delhi`
--

INSERT INTO `delhi` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('36450', 'Rajdhani Express', '19:00', '5:00', 'Detail', 'Detail', 'Detail', '2000', '1500', '1200', '400'),
('36550', 'Shatabadi Express', '21:00', '8:00', 'Detail', 'Detail', 'Detail', '1500', '1200', '1000', '400'),
('36545', 'DEE Garibrath Express', '23:00', '6:00', 'Detail', 'Detail', 'Detail', '1800', '1350', '1100', '400'),
('36665', 'Haridwar Express', '18:00', '7:00', 'Detail', 'Detail', 'Detail', '2000', '1550', '1100', '400'),
('36265', 'Paschim Express', '7:00', '21:00', 'Detail', 'Detail', 'Detail', '2500', '1850', '1200', '400');

-- --------------------------------------------------------

--
-- Table structure for table `guwahati`
--

DROP TABLE IF EXISTS `guwahati`;
CREATE TABLE IF NOT EXISTS `guwahati` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guwahati`
--

INSERT INTO `guwahati` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('15401', 'Guwahati Exp', '12:45', '17:58', 'Detail', 'Detail', 'Detail', '1690', '1200', '300', '400'),
('15402', 'Yoga Exp', '11:45', '16:58', 'Detail', 'Detail', 'Detail', '1780', '1400', '500', '400'),
('15403', 'Vikram Sheela', '10:45', '12:51', 'Detail', 'Detail', 'Detail', '1900', '1400', '400', '400'),
('15404', 'TeaGarden Exp', '10:45', '17:58', 'Detail', 'Detail', 'Detail', '1890', '1300', '500', '400'),
('15405', 'FalakNuma Exp', '6:45', '12:58', 'Detail', 'Detail', 'Detail', '1780', '1400', '600', '400');

-- --------------------------------------------------------

--
-- Table structure for table `hyderabad`
--

DROP TABLE IF EXISTS `hyderabad`;
CREATE TABLE IF NOT EXISTS `hyderabad` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hyderabad`
--

INSERT INTO `hyderabad` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('49840', 'Char Minar Express', '2:56', '11:21', 'Detail', 'Detail', 'Detail', '1978', '876', '456', '415'),
('29854', 'Dakshin Express', '7:56', '21:31', 'Detail', 'Detail', 'Detail', '2978', '654', '256', '415'),
('45093', 'East Cost Express', '6:11', '15:34', 'Detail', 'Detail', 'Detail', '1487', '876', '346', '405'),
('29840', 'Godavri Express', '6:56', '14:21', 'Detail', 'Detail', 'Detail', '2258', '876', '372', '398'),
('29840', 'Geetanjali Express', '6:56', '14:21', 'Detail', 'Detail', 'Detail', '1978', '876', '456', '415');

-- --------------------------------------------------------

--
-- Table structure for table `jaipur`
--

DROP TABLE IF EXISTS `jaipur`;
CREATE TABLE IF NOT EXISTS `jaipur` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaipur`
--

INSERT INTO `jaipur` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('36825', 'Marwar Express', '21:00', '5:00', 'Detail', 'Detail', 'Detail', '1800', '1550', '1200', '400'),
('36845', 'Aravali Express', '22:00', '5:00', 'Detail', 'Detail', 'Detail', '2500', '1850', '1000', '400'),
('36885', 'Rajdhani Express', '18:00', '8:00', 'Detail', 'Detail', 'Detail', '2380', '1650', '1300', '400'),
('34895', 'Falak-Numa Express', '20:00', '10:00', 'Detail', 'Detail', 'Detail', '1580', '1250', '1050', '400'),
('39695', 'Ajmer Special Express', '13:00', '23:00', 'Detail', 'Detail', 'Detail', '1880', '1550', '1250', '400');

-- --------------------------------------------------------

--
-- Table structure for table `kochi`
--

DROP TABLE IF EXISTS `kochi`;
CREATE TABLE IF NOT EXISTS `kochi` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kochi`
--

INSERT INTO `kochi` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('29864', 'Swarnajayanti Express', '7:50', '15:21', 'Detail', 'Detail', 'Detail', '3234', '1878', '656', '420'),
('45678', 'Yercaud Express', '8:56', '18:21', 'Detail', 'Detail', 'Detail', '1978', '876', '456', '415'),
('25678', 'Tapasvini Mail', '16:56', '1:31', 'Detail', 'Detail', 'Detail', '2378', '1276', '656', '415'),
('21876', 'warangal', '14:56', '5:11', 'Detail', 'Detail', 'Detail', '3378', '1276', '456', '450'),
('21876', 'Ahilya Nagri', '00:56', '7:11', 'Detail', 'Detail', 'Detail', '2378', '1098', '566', '403');

-- --------------------------------------------------------

--
-- Table structure for table `kolkata`
--

DROP TABLE IF EXISTS `kolkata`;
CREATE TABLE IF NOT EXISTS `kolkata` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kolkata`
--

INSERT INTO `kolkata` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('13401', 'GangaKaveri', '11:23', '17:23', 'Detail', 'Detail', 'Detail', '2000', '1780', '700', '400'),
('13402', 'Howrah', '12:24', '18:22', 'Detail', 'Detail', 'Detail', '2050', '1480', '400', '400'),
('13403', 'Black Diamond', '4:56', '18:21', 'Detail', 'Detail', 'Detail', '1978', '876', '456', '415'),
('13404', 'Dakshin', '10:23', '15:23', 'Detail', 'Detail', 'Detail', '2070', '1580', '500', '400'),
('13405', 'Devgiri Express', '9:23', '15:23', 'Detail', 'Detail', 'Detail', '1500', '1080', '400', '400');

-- --------------------------------------------------------

--
-- Table structure for table `mumbai`
--

DROP TABLE IF EXISTS `mumbai`;
CREATE TABLE IF NOT EXISTS `mumbai` (
  `Tno` varchar(100) NOT NULL,
  `Tname` varchar(100) NOT NULL,
  `Artime` varchar(100) NOT NULL,
  `Rtime` varchar(100) NOT NULL,
  `1A` varchar(100) NOT NULL,
  `2A` varchar(100) NOT NULL,
  `Sl` varchar(100) NOT NULL,
  `1Ar` varchar(100) NOT NULL,
  `2Ar` varchar(100) NOT NULL,
  `Slr` varchar(100) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mumbai`
--

INSERT INTO `mumbai` (`Tno`, `Tname`, `Artime`, `Rtime`, `1A`, `2A`, `Sl`, `1Ar`, `2Ar`, `Slr`, `Avail`) VALUES
('33695', 'Flying Ranee Express', '13:00', '21:00', 'Detail', 'Detail', 'Detail', '2100', '1850', '1500', '400'),
('33435', 'Rajdhani Express', '12:00', '7:00', 'Detail', 'Detail', 'Detail', '2250', '1950', '1540', '400'),
('33536', 'Surat-Jamnagar Intercity', '21:00', '9:00', 'Detail', 'Detail', 'Detail', '1950', '1530', '1040', '400'),
('33938', 'Double-Decker', '22:00', '11:00', 'Detail', 'Detail', 'Detail', '1850', '1230', '940', '400'),
('33948', 'Karnavati Express', '19:00', '12:00', 'Detail', 'Detail', 'Detail', '2000', '1630', '840', '400');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
