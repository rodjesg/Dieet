-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2014 at 10:43 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Dieet`
--

USE `Dieet`;

-- --------------------------------------------------------

--
-- Table structure for table `Card`
--

CREATE TABLE IF NOT EXISTS `Card` (
  ID int NOT NULL AUTO_INCREMENT,  
  `Dag` varchar (10) NOT NULL,
  `Datum` date NOT NULL,
  `Tijd` time NOT NULL,
  `Gewicht` varchar(11) NOT NULL,
    `BMI` varchar(11) NOT NULL,
    `Vet` varchar(11) NOT NULL,
    `Visceraalvet` varchar(11) NOT NULL,
    `Spiermassa` varchar(11) NOT NULL,
    `MO` varchar(11),
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Dumping data for table `Card` http://www.vetpercentagemeten.nl/
--

INSERT INTO `Card` (`Dag`, `Datum`, `Tijd`, `Gewicht`, `BMI`, `Vet`, `Visceraalvet`, `Spiermassa`, `MO`) VALUES
('Di', '2016-08-01', '12:15:00', 106.6,39.9,37.5,20,30.2,''),
('WO', '2016-09-21', '12:15:00', 104.7,38.9,36.4,20,30.2,''),
('VR', '2016-10-21', '12:15:00', 101.6,36.9,32.48,20,30.2,''),
('ZA', '2016-11-26', '12:15:00', 101.1,36.7,32.48,20,30.2,'');


-- --------------------------------------------------------
