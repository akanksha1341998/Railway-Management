-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2018 at 03:38 PM
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
-- Database: `signinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `Name` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `UserName`, `Password`, `EmailAddress`, `gender`, `bday`) VALUES
('Akanksha', 'bean', '1234', '', 'female', '2017-11-19'),
('Akanksha', 'bean', '1234', '', 'female', '2017-11-19'),
('Akanksha', 'bean', '1234', '', 'female', '2017-11-19'),
('Akanksha', 'bean', '12345', 'aka@gmail.com', 'female', '2017-11-19'),
('Akanksha', 'hallowean', '123456', 'aka@gmail.com', 'female', '2017-11-19'),
('Sameer', 'sammy13', 'xyz', 'sam@gmail.com', 'female', '1999-04-13'),
('Sameer', 'sammy13', 'xyz', 'sam@gmail.com', 'female', '1999-04-13'),
('Pratibha', 'pratu', '1234', 'pratu@gmail.com', 'female', '2014-07-15'),
('Sameer Mandloi', 'sammy', '6789', 'sam1@gmail.com', 'male', '2017-11-19'),
('Akanksha', 'hjkh', '1234', 'aka@gmail.com', 'female', '2017-11-19'),
('Akanksha', 'hjkh', '1234', 'aka@gmail.com', 'female', '2017-11-19'),
('Akanksha', 'hjkh', '12', 'aka@gmail.com', '', ''),
('Akanksha', 'hjkh', '33', 'aka@gmail.com', '', ''),
('Akanksha', 'hjkh', 'xx', 'aka@gmail.com', 'male', ''),
('Akanksha', 'hjkh', 'ee', 'aka@gmail.com', '', ''),
('Akanksha', 'hjkh', 'qw', 'aka@gmail.com', 'female', '2017-11-19'),
('Akanksha', 'hjkh', '45', 'aka@gmail.com', 'female', '2017-11-19'),
('Akanksha', 'hjkh', '23', 'aka@gmail.com', 'female', '2017-11-19'),
('Sameer Mandloi', 'potter', '6789', 'sam1@gmail.com', 'male', '2019-02-23'),
('Akanksha', 'hjkh', '098', 'aka@gmail.com', 'female', '2017-11-19'),
('Sameer Mandloi', 'jiji', '123', 'aka@gmail.com', 'female', '2017-11-19'),
('Sameer Mandloi', 'jkj', '88', 'aka@gmail.com', 'female', '2017-11-19'),
('Pratibha', ',kl', '11', 'aka@gmail.com', 'female', '2017-11-19'),
('swati', 'swati3101', '1234', 'chaudharyswati3101@gmail.com', 'female', '2017-11-20'),
('Rahul', 'rahul12', 'sexy', 'rahul12@gmail.com', 'male', '1998-06-06'),
('parth', 'parthk', '12345', 'parthkalani.parth@gmail.com', 'male', '1998-09-22'),
('radha', 'u13', '0987', 'radha@gamil.com', 'female', '23.9.1998'),
('Jay', 'jj23', '1345', 'jj@gmail.com', 'male', '3-6-1998'),
('veer', 'fr45', '7654', 'veer@yahoo.com', 'male', '3.7.1995');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
