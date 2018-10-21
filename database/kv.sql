-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 192.168.1.4
-- Generation Time: Oct 04, 2018 at 04:36 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kv`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_account`
--

CREATE TABLE IF NOT EXISTS `customer_account` (
  `account_Id` varchar(15) NOT NULL,
  `surName` varchar(35) NOT NULL,
  `name` varchar(45) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `motherTongue` varchar(15) NOT NULL,
  `status` varchar(9) NOT NULL,
  `ft_hgt` varchar(2) NOT NULL,
  `inch_hgt` varchar(2) NOT NULL,
  `highDegree` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `occType` varchar(25) NOT NULL,
  PRIMARY KEY (`account_Id`),
  KEY `account_Id` (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`account_Id`, `surName`, `name`, `gender`, `motherTongue`, `status`, `ft_hgt`, `inch_hgt`, `highDegree`, `occupation`, `occType`) VALUES
('CA1849587126147', 'Bhamidipati', 'Annapurna Madhulika', 'Female', 'Telugu', 'UnMarried', '5', '5', 'B.Tech in Computer Science Engineering', 'Manager at Airtel Operation Services', 'Private Company');

-- --------------------------------------------------------

--
-- Table structure for table `customer_birth`
--

CREATE TABLE IF NOT EXISTS `customer_birth` (
  `account_Id` varchar(15) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `birthCountry` varchar(25) NOT NULL,
  `birthState` varchar(25) NOT NULL,
  `birthLocation` varchar(25) NOT NULL,
  `birthLocality` varchar(25) NOT NULL,
  `shakha` varchar(60) NOT NULL,
  `upashakha` varchar(60) NOT NULL,
  `gothram` varchar(60) NOT NULL,
  `raasi` varchar(60) NOT NULL,
  `nakshatram` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`account_Id`),
  KEY `account_Id` (`account_Id`),
  KEY `account_Id_2` (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_birth`
--

INSERT INTO `customer_birth` (`account_Id`, `dob`, `birthCountry`, `birthState`, `birthLocation`, `birthLocality`, `shakha`, `upashakha`, `gothram`, `raasi`, `nakshatram`) VALUES
('CA1849587126147', '1993-05-03 02:15:00', 'India', 'Telangana', 'Hyderabad', 'Amberpet', 'Vaidika Brahmins', 'Dravidulu', 'Gargheyasa', 'Scorpio (Vruchika Raasi)', 'Anuradha Nakshatram 2nd Padam');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE IF NOT EXISTS `customer_contact` (
  `account_Id` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `minlocation` varchar(25) NOT NULL DEFAULT '',
  `mobile` varchar(10) NOT NULL,
  PRIMARY KEY (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_contact`
--

INSERT INTO `customer_contact` (`account_Id`, `address`, `country`, `state`, `location`, `minlocation`, `mobile`) VALUES
('CA1849587126147', '4-33', 'India', 'Kerala', 'Alappuzha', 'Alappuzha Region', '9052344403');

-- --------------------------------------------------------

--
-- Table structure for table `customer_family`
--

CREATE TABLE IF NOT EXISTS `customer_family` (
  `account_Id` varchar(15) NOT NULL,
  `fatherName` varchar(65) NOT NULL,
  `fatherOccupation` varchar(60) NOT NULL,
  `motherName` varchar(65) NOT NULL,
  `motherOccupation` varchar(60) NOT NULL,
  `NoOfBrothers` varchar(2) NOT NULL,
  `NoOfSisters` varchar(2) NOT NULL,
  PRIMARY KEY (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_family`
--

INSERT INTO `customer_family` (`account_Id`, `fatherName`, `fatherOccupation`, `motherName`, `motherOccupation`, `NoOfBrothers`, `NoOfSisters`) VALUES
('CA1849587126147', 'QWEWWW', 'Retired Employee', 'WWWW', 'HouseWife', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_preferences`
--

CREATE TABLE IF NOT EXISTS `customer_preferences` (
  `account_Id` varchar(15) NOT NULL,
  `exp_highDegree` varchar(60) NOT NULL,
  `exp_occupation` varchar(60) NOT NULL,
  `exp_occType` varchar(25) NOT NULL,
  `exp_motherTongue` varchar(15) NOT NULL,
  PRIMARY KEY (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_preferences`
--

INSERT INTO `customer_preferences` (`account_Id`, `exp_highDegree`, `exp_occupation`, `exp_occType`, `exp_motherTongue`) VALUES
('CA1849587126147', 'B.Tech in Any Degree', 'Software Engineer', 'Private Company', 'Telugu');

-- --------------------------------------------------------

--
-- Table structure for table `match_cart`
--

CREATE TABLE IF NOT EXISTS `match_cart` (
  `cart_Id` varchar(15) NOT NULL,
  `user_Id` varchar(15) NOT NULL,
  `cartProfile_Id` varchar(15) NOT NULL,
  `shoppingTS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `finalprice` float NOT NULL,
  PRIMARY KEY (`cart_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `match_fav`
--

CREATE TABLE IF NOT EXISTS `match_fav` (
  `fav_Id` varchar(15) NOT NULL,
  `user_Id` varchar(15) NOT NULL,
  `favProfile_Id` varchar(15) NOT NULL,
  `favOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fav_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `match_list`
--

CREATE TABLE IF NOT EXISTS `match_list` (
  `match_Id` varchar(15) NOT NULL,
  `maleUserId` varchar(15) NOT NULL,
  `femaleUserId` varchar(15) NOT NULL,
  `matchScore` float NOT NULL,
  `maleNotify` varchar(1) NOT NULL,
  `maleNotifyTS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `maleWatched` varchar(1) NOT NULL,
  `maleWatchedTS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `femaleNotify` varchar(1) NOT NULL,
  `femaleNotifyTS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `femaleWatched` varchar(1) NOT NULL,
  `femaleWatchedTS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`match_Id`),
  KEY `maleUserId` (`maleUserId`,`femaleUserId`),
  KEY `femaleUserId` (`femaleUserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `match_list`
--
ALTER TABLE `match_list`
  ADD CONSTRAINT `match_list_ibfk_1` FOREIGN KEY (`maleUserId`) REFERENCES `customer_account` (`account_Id`),
  ADD CONSTRAINT `match_list_ibfk_2` FOREIGN KEY (`femaleUserId`) REFERENCES `customer_account` (`account_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
