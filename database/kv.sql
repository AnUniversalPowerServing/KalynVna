-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2020 at 07:12 AM
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
-- Table structure for table `admin_accounts`
--

CREATE TABLE IF NOT EXISTS `admin_accounts` (
  `account_Id` varchar(15) NOT NULL,
  `surName` varchar(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(65) NOT NULL,
  `acc_pwd` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`account_Id`, `surName`, `name`, `email`, `acc_pwd`, `created_on`) VALUES
('USR123456789123', 'Kankipati', 'Naveen Kumar', 'naveenkanvasa@gmail.com', '91e7937eda013659dc45734ade22141e', '2018-11-01 10:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `admin_cal_panchga`
--

CREATE TABLE IF NOT EXISTS `admin_cal_panchga` (
  `stndTz` varchar(60) NOT NULL,
  `fromTs` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `toTs` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `weekDay` varchar(10) NOT NULL,
  `nakshatra` varchar(60) NOT NULL,
  `raasi` varchar(60) NOT NULL,
  `isMangalik` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_mrkt_promo`
--

CREATE TABLE IF NOT EXISTS `admin_mrkt_promo` (
  `mob_code` varchar(5) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `addedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL COMMENT 'REGISTERED/UNREGISTERED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`cart_Id`),
  KEY `user_Id` (`user_Id`),
  KEY `cartProfile_Id` (`cartProfile_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `match_fav`
--

CREATE TABLE IF NOT EXISTS `match_fav` (
  `fav_Id` varchar(15) NOT NULL,
  `mob_code` varchar(5) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `favProfile_Id` varchar(15) NOT NULL,
  `favOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fav_Id`),
  KEY `user_Id` (`mob_code`),
  KEY `favProfile_Id` (`favProfile_Id`)
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
  KEY `femaleUserId` (`femaleUserId`),
  KEY `maleUserId_2` (`maleUserId`),
  KEY `femaleUserId_2` (`femaleUserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pancha_table1`
--

CREATE TABLE IF NOT EXISTS `pancha_table1` (
  `date` date NOT NULL,
  `sid_time` time NOT NULL,
  `dur_w_prevtime` varchar(26) NOT NULL COMMENT 'Duration with Previous Time',
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pancha_table1`
--

INSERT INTO `pancha_table1` (`date`, `sid_time`, `dur_w_prevtime`) VALUES
('2001-01-01', '06:41:57', '- '),
('2001-01-02', '06:45:54', '1 day 3 minutes 57 seconds'),
('2001-01-03', '06:49:50', '1 day 3 minutes 56 seconds'),
('2001-01-04', '06:53:47', '1 day 3 minutes 57 seconds'),
('2001-01-05', '06:57:43', '1 day 3 minutes 56 seconds'),
('2001-01-06', '07:01:40', '1 day 3 minutes 57 seconds'),
('2001-01-07', '07:05:37', '1 day 3 minutes 57 seconds'),
('2001-01-08', '07:09:33', '1 day 3 minutes 56 seconds'),
('2001-01-09', '07:13:30', '1 day 3 minutes 57 seconds'),
('2001-01-10', '07:17:26', '1 day 3 minutes 56 seconds'),
('2001-01-11', '07:21:23', '1 day 3 minutes 57 seconds'),
('2001-01-12', '07:25:19', '1 day 3 minutes 56 seconds'),
('2001-01-13', '07:29:16', '1 day 3 minutes 57 seconds'),
('2001-01-14', '07:33:12', '1 day 3 minutes 56 seconds'),
('2001-01-15', '07:37:09', '1 day 3 minutes 57 seconds'),
('2001-01-16', '07:41:06', '1 day 3 minutes 57 seconds'),
('2001-01-17', '07:45:02', '1 day 3 minutes 56 seconds'),
('2001-01-18', '07:48:59', '1 day 3 minutes 57 seconds'),
('2001-01-19', '07:52:55', '1 day 3 minutes 56 seconds'),
('2001-01-20', '07:56:52', '1 day 3 minutes 57 seconds'),
('2001-01-21', '08:00:48', '1 day 3 minutes 56 seconds'),
('2001-01-22', '08:04:45', '1 day 3 minutes 57 seconds'),
('2001-01-23', '08:08:41', '1 day 3 minutes 56 seconds'),
('2001-01-24', '08:12:38', '1 day 3 minutes 57 seconds'),
('2001-01-25', '08:16:35', '1 day 3 minutes 57 seconds'),
('2001-01-26', '08:20:31', '1 day 3 minutes 56 seconds'),
('2001-01-27', '08:24:28', '1 day 3 minutes 57 seconds'),
('2001-01-28', '08:28:24', '1 day 3 minutes 56 seconds'),
('2001-01-29', '08:32:21', '1 day 3 minutes 57 seconds'),
('2001-01-30', '08:36:17', '1 day 3 minutes 56 seconds'),
('2001-01-31', '08:40:14', '1 day 3 minutes 57 seconds'),
('2001-02-01', '08:44:10', '1 day 3 minutes 56 seconds'),
('2001-02-02', '08:48:07', '1 day 3 minutes 57 seconds'),
('2001-02-03', '08:52:04', '1 day 3 minutes 57 seconds'),
('2001-02-04', '08:56:00', '1 day 3 minutes 56 seconds'),
('2001-02-05', '08:59:57', '1 day 3 minutes 57 seconds'),
('2001-02-06', '09:03:53', '1 day 3 minutes 56 seconds'),
('2001-02-07', '09:07:50', '1 day 3 minutes 57 seconds'),
('2001-02-08', '09:11:46', '1 day 3 minutes 56 seconds'),
('2001-02-09', '09:15:43', '1 day 3 minutes 57 seconds'),
('2001-02-10', '09:19:39', '1 day 3 minutes 56 seconds'),
('2001-02-11', '09:23:36', '1 day 3 minutes 57 seconds'),
('2001-02-12', '09:27:33', '1 day 3 minutes 57 seconds'),
('2001-02-13', '09:31:29', '1 day 3 minutes 56 seconds'),
('2001-02-14', '09:35:26', '1 day 3 minutes 57 seconds'),
('2001-02-15', '09:39:22', '1 day 3 minutes 56 seconds'),
('2001-02-16', '09:43:19', '1 day 3 minutes 57 seconds'),
('2001-02-17', '09:47:15', '1 day 3 minutes 56 seconds'),
('2001-02-18', '09:51:12', '1 day 3 minutes 57 seconds'),
('2001-02-19', '09:55:08', '1 day 3 minutes 56 seconds'),
('2001-02-20', '09:59:05', '1 day 3 minutes 57 seconds'),
('2001-02-21', '10:03:02', '1 day 3 minutes 57 seconds'),
('2001-02-22', '10:06:58', '1 day 3 minutes 56 seconds'),
('2001-02-23', '10:10:55', '1 day 3 minutes 57 seconds'),
('2001-02-24', '10:14:51', '1 day 3 minutes 56 seconds'),
('2001-02-25', '10:18:48', '1 day 3 minutes 57 seconds'),
('2001-02-26', '10:22:44', '1 day 3 minutes 56 seconds'),
('2001-02-27', '10:26:41', '1 day 3 minutes 57 seconds'),
('2001-02-28', '10:30:37', '1 day 3 minutes 56 seconds'),
('2001-03-01', '10:34:34', '1 day'),
('2001-03-02', '10:38:31', '1 day 3 minutes 57 seconds'),
('2001-03-03', '10:42:27', '1 day 3 minutes 56 seconds'),
('2001-03-04', '10:46:24', '1 day 3 minutes 57 seconds'),
('2001-03-05', '10:50:20', '1 day 3 minutes 56 seconds'),
('2001-03-06', '10:54:17', '1 day 3 minutes 57 seconds'),
('2001-03-07', '10:58:13', '1 day 3 minutes 56 seconds'),
('2001-03-08', '11:02:10', '1 day 3 minutes 57 seconds'),
('2001-03-09', '11:06:06', '1 day 3 minutes 56 seconds'),
('2001-03-10', '11:10:03', '1 day 3 minutes 57 seconds'),
('2001-03-11', '11:14:00', '1 day 3 minutes 57 seconds'),
('2001-03-12', '11:17:56', '1 day 3 minutes 56 seconds'),
('2001-03-13', '11:21:53', '1 day 3 minutes 57 seconds'),
('2001-03-14', '11:25:49', '1 day 3 minutes 56 seconds'),
('2001-03-15', '11:29:46', '1 day 3 minutes 57 seconds'),
('2001-03-16', '11:33:42', '1 day 3 minutes 56 seconds'),
('2001-03-17', '11:37:39', '1 day 3 minutes 57 seconds'),
('2001-03-18', '11:41:35', '1 day 3 minutes 56 seconds'),
('2001-03-19', '11:45:32', '1 day 3 minutes 57 seconds'),
('2001-03-20', '11:49:29', '1 day 3 minutes 57 seconds'),
('2001-03-21', '11:53:25', '1 day 3 minutes 56 seconds'),
('2001-03-22', '11:57:22', '1 day 3 minutes 57 seconds'),
('2001-03-23', '12:01:18', '1 day 3 minutes 56 seconds'),
('2001-03-24', '12:05:15', '1 day 3 minutes 57 seconds'),
('2001-03-25', '12:09:11', '1 day 3 minutes 56 seconds'),
('2001-03-26', '12:13:08', '1 day 3 minutes 57 seconds'),
('2001-03-27', '12:17:04', '1 day 3 minutes 56 seconds'),
('2001-03-28', '12:21:01', '1 day 3 minutes 57 seconds'),
('2001-03-29', '12:24:58', '1 day 3 minutes 57 seconds'),
('2001-03-30', '12:28:54', '1 day 3 minutes 56 seconds'),
('2001-03-31', '12:32:51', '1 day 3 minutes 57 seconds'),
('2001-04-01', '12:36:47', '1 day 3 minutes 56 seconds'),
('2001-04-02', '12:40:44', '1 day 3 minutes 57 seconds'),
('2001-04-03', '12:44:40', '1 day 3 minutes 56 seconds'),
('2001-04-04', '12:48:37', '1 day 3 minutes 57 seconds'),
('2001-04-05', '12:52:33', '1 day 3 minutes 56 seconds'),
('2001-04-06', '12:56:30', '1 day 3 minutes 57 seconds'),
('2001-04-07', '13:00:27', '1 day 3 minutes 57 seconds'),
('2001-04-08', '13:04:23', '1 day 3 minutes 56 seconds'),
('2001-04-09', '13:08:20', '1 day 3 minutes 57 seconds'),
('2001-04-10', '13:12:16', '1 day 3 minutes 56 seconds'),
('2001-04-11', '13:16:13', '1 day 3 minutes 57 seconds'),
('2001-04-12', '13:20:09', '1 day 3 minutes 56 seconds'),
('2001-04-13', '13:24:06', '1 day 3 minutes 57 seconds'),
('2001-04-14', '13:28:02', '1 day 3 minutes 56 seconds'),
('2001-04-15', '13:31:59', '1 day 3 minutes 57 seconds'),
('2001-04-16', '13:35:56', '1 day 3 minutes 57 seconds'),
('2001-04-17', '13:39:52', '1 day 3 minutes 56 seconds'),
('2001-04-18', '13:43:49', '1 day 3 minutes 57 seconds'),
('2001-04-19', '13:47:45', '1 day 3 minutes 56 seconds'),
('2001-04-20', '13:51:42', '1 day 3 minutes 57 seconds'),
('2001-04-21', '13:55:38', '1 day 3 minutes 56 seconds'),
('2001-04-22', '13:59:35', '1 day 3 minutes 57 seconds'),
('2001-04-23', '14:03:31', '1 day 3 minutes 56 seconds'),
('2001-04-24', '14:07:28', '1 day 3 minutes 57 seconds'),
('2001-04-25', '14:11:25', '1 day 3 minutes 57 seconds'),
('2001-04-26', '14:15:21', '1 day 3 minutes 56 seconds'),
('2001-04-27', '14:19:18', '1 day 3 minutes 57 seconds'),
('2001-04-28', '14:23:14', '1 day 3 minutes 56 seconds'),
('2001-04-29', '14:27:11', '1 day 3 minutes 57 seconds'),
('2001-04-30', '14:31:07', '1 day 3 minutes 56 seconds'),
('2001-05-01', '14:35:04', '1 day 3 minutes 57 seconds'),
('2001-05-02', '14:39:00', '1 day 3 minutes 56 seconds'),
('2001-05-03', '14:42:57', '1 day 3 minutes 57 seconds'),
('2001-05-04', '14:46:54', '1 day 3 minutes 57 seconds'),
('2001-05-05', '14:50:50', '1 day 3 minutes 56 seconds'),
('2001-05-06', '14:54:47', '1 day 3 minutes 57 seconds'),
('2001-05-07', '14:58:43', '1 day 3 minutes 56 seconds'),
('2001-05-08', '15:02:40', '1 day 3 minutes 57 seconds'),
('2001-05-09', '15:06:36', '1 day 3 minutes 56 seconds'),
('2001-05-10', '15:10:33', '1 day 3 minutes 57 seconds'),
('2001-05-11', '15:14:29', '1 day 3 minutes 56 seconds'),
('2001-05-12', '15:18:26', '1 day 3 minutes 57 seconds'),
('2001-05-13', '15:22:23', '1 day 3 minutes 57 seconds'),
('2001-05-14', '15:26:19', '1 day 3 minutes 56 seconds'),
('2001-05-15', '15:30:16', '1 day 3 minutes 57 seconds'),
('2001-05-16', '15:34:12', '1 day 3 minutes 56 seconds'),
('2001-05-17', '15:38:09', '1 day 3 minutes 57 seconds'),
('2001-05-18', '15:42:05', '1 day 3 minutes 56 seconds'),
('2001-05-19', '15:46:02', '1 day 3 minutes 57 seconds'),
('2001-05-20', '15:49:58', '1 day 3 minutes 56 seconds'),
('2001-05-21', '15:53:55', '1 day 3 minutes 57 seconds'),
('2001-05-22', '15:57:52', '1 day 3 minutes 57 seconds'),
('2001-05-23', '16:01:48', '1 day 3 minutes 56 seconds'),
('2001-05-24', '16:05:45', '1 day 3 minutes 57 seconds'),
('2001-05-25', '16:09:41', '1 day 3 minutes 56 seconds'),
('2001-05-26', '16:13:38', '1 day 3 minutes 57 seconds'),
('2001-05-27', '16:17:34', '1 day 3 minutes 56 seconds'),
('2001-05-28', '16:21:31', '1 day 3 minutes 57 seconds'),
('2001-05-29', '16:25:27', '1 day 3 minutes 56 seconds'),
('2001-05-30', '16:29:24', '1 day 3 minutes 57 seconds'),
('2001-05-31', '16:33:21', '1 day 3 minutes 57 seconds'),
('2001-06-01', '16:37:17', '1 day 3 minutes 56 seconds'),
('2001-06-02', '16:41:14', '1 day 3 minutes 57 seconds'),
('2001-06-03', '16:45:10', '1 day 3 minutes 56 seconds'),
('2001-06-04', '16:49:07', '1 day 3 minutes 57 seconds'),
('2001-06-05', '16:53:03', '1 day 3 minutes 56 seconds'),
('2001-06-06', '16:57:00', '1 day 3 minutes 57 seconds'),
('2001-06-07', '17:00:56', '1 day 3 minutes 56 seconds'),
('2001-06-08', '17:04:53', '1 day 3 minutes 57 seconds'),
('2001-06-09', '17:08:50', '1 day 3 minutes 57 seconds'),
('2001-06-10', '17:12:46', '1 day 3 minutes 56 seconds'),
('2001-06-11', '17:16:43', '1 day 3 minutes 57 seconds'),
('2001-06-12', '17:20:39', '1 day 3 minutes 56 seconds'),
('2001-06-13', '17:24:36', '1 day 3 minutes 57 seconds'),
('2001-06-14', '17:28:32', '1 day 3 minutes 56 seconds'),
('2001-06-15', '17:32:29', '1 day 3 minutes 57 seconds'),
('2001-06-16', '17:36:25', '1 day 3 minutes 56 seconds'),
('2001-06-17', '17:40:22', '1 day 3 minutes 57 seconds'),
('2001-06-18', '17:44:19', '1 day 3 minutes 57 seconds'),
('2001-06-19', '17:48:15', '1 day 3 minutes 56 seconds'),
('2001-06-20', '17:52:12', '1 day 3 minutes 57 seconds'),
('2001-06-21', '17:56:08', '1 day 3 minutes 56 seconds'),
('2001-06-22', '18:00:05', '1 day 3 minutes 57 seconds'),
('2001-06-23', '18:04:01', '1 day 3 minutes 56 seconds'),
('2001-06-24', '18:07:58', '1 day 3 minutes 57 seconds'),
('2001-06-25', '18:11:54', '1 day 3 minutes 56 seconds'),
('2001-06-26', '18:15:51', '1 day 3 minutes 57 seconds'),
('2001-06-27', '18:19:48', '1 day 3 minutes 57 seconds'),
('2001-06-28', '18:23:44', '1 day 3 minutes 56 seconds'),
('2001-06-29', '18:27:41', '1 day 3 minutes 57 seconds'),
('2001-06-30', '18:31:37', '1 day 3 minutes 56 seconds'),
('2001-07-01', '18:35:34', '1 day 3 minutes 57 seconds'),
('2001-07-02', '18:39:30', '1 day 3 minutes 56 seconds'),
('2001-07-03', '18:43:27', '1 day 3 minutes 57 seconds'),
('2001-07-04', '18:47:23', '1 day 3 minutes 56 seconds'),
('2001-07-05', '18:51:20', '1 day 3 minutes 57 seconds'),
('2001-07-06', '18:55:17', '1 day 3 minutes 57 seconds'),
('2001-07-07', '18:59:13', '1 day 3 minutes 56 seconds'),
('2001-07-08', '19:03:10', '1 day 3 minutes 57 seconds'),
('2001-07-09', '19:07:06', '1 day 3 minutes 56 seconds'),
('2001-07-10', '19:11:03', '1 day 3 minutes 57 seconds'),
('2001-07-11', '19:14:59', '1 day 3 minutes 56 seconds'),
('2001-07-12', '19:18:56', '1 day 3 minutes 57 seconds'),
('2001-07-13', '19:22:52', '1 day 3 minutes 56 seconds'),
('2001-07-14', '19:26:49', '1 day 3 minutes 57 seconds'),
('2001-07-15', '19:30:46', '1 day 3 minutes 57 seconds'),
('2001-07-16', '19:34:42', '1 day 3 minutes 56 seconds'),
('2001-07-17', '19:38:39', '1 day 3 minutes 57 seconds'),
('2001-07-18', '19:42:35', '1 day 3 minutes 56 seconds'),
('2001-07-19', '19:46:32', '1 day 3 minutes 57 seconds'),
('2001-07-20', '19:50:28', '1 day 3 minutes 56 seconds'),
('2001-07-21', '19:54:25', '1 day 3 minutes 57 seconds'),
('2001-07-22', '19:58:21', '1 day 3 minutes 56 seconds'),
('2001-07-23', '20:02:18', '1 day 3 minutes 57 seconds'),
('2001-07-24', '20:06:15', '1 day 3 minutes 57 seconds'),
('2001-07-25', '20:10:11', '1 day 3 minutes 56 seconds'),
('2001-07-26', '20:14:08', '1 day 3 minutes 57 seconds'),
('2001-07-27', '20:18:04', '1 day 3 minutes 56 seconds'),
('2001-07-28', '20:22:01', '1 day 3 minutes 57 seconds'),
('2001-07-29', '20:25:57', '1 day 3 minutes 56 seconds'),
('2001-07-30', '20:29:54', '1 day 3 minutes 57 seconds'),
('2001-07-31', '20:33:50', '1 day 3 minutes 56 seconds'),
('2001-08-01', '20:37:47', '1 day 3 minutes 57 seconds'),
('2001-08-02', '20:41:44', '1 day 3 minutes 57 seconds'),
('2001-08-03', '20:45:40', '1 day 3 minutes 56 seconds'),
('2001-08-04', '20:49:37', '1 day 3 minutes 57 seconds'),
('2001-08-05', '20:53:33', '1 day 3 minutes 56 seconds'),
('2001-08-06', '20:57:30', '1 day 3 minutes 57 seconds'),
('2001-08-07', '21:01:26', '1 day 3 minutes 56 seconds'),
('2001-08-08', '21:05:23', '1 day 3 minutes 57 seconds'),
('2001-08-09', '21:09:19', '1 day 3 minutes 56 seconds'),
('2001-08-10', '21:13:16', '1 day 3 minutes 57 seconds'),
('2001-08-11', '21:17:13', '1 day 3 minutes 57 seconds'),
('2001-08-12', '21:21:09', '1 day 3 minutes 56 seconds'),
('2001-08-13', '21:25:06', '1 day 3 minutes 57 seconds'),
('2001-08-14', '21:29:02', '1 day 3 minutes 56 seconds'),
('2001-08-15', '21:32:59', '1 day 3 minutes 57 seconds'),
('2001-08-16', '21:36:55', '1 day 3 minutes 56 seconds'),
('2001-08-17', '21:40:52', '1 day 3 minutes 57 seconds'),
('2001-08-18', '21:44:48', '1 day 3 minutes 56 seconds'),
('2001-08-19', '21:48:45', '1 day 3 minutes 57 seconds'),
('2001-08-20', '21:52:42', '1 day 3 minutes 57 seconds'),
('2001-08-21', '21:56:38', '1 day 3 minutes 56 seconds'),
('2001-08-22', '22:00:35', '1 day 3 minutes 57 seconds'),
('2001-08-23', '22:04:31', '1 day 3 minutes 56 seconds'),
('2001-08-24', '22:08:28', '1 day 3 minutes 57 seconds'),
('2001-08-25', '22:12:24', '1 day 3 minutes 56 seconds'),
('2001-08-26', '22:16:21', '1 day 3 minutes 57 seconds'),
('2001-08-27', '22:20:17', '1 day 3 minutes 56 seconds'),
('2001-08-28', '22:24:14', '1 day 3 minutes 57 seconds'),
('2001-08-29', '22:28:11', '1 day 3 minutes 57 seconds'),
('2001-08-30', '22:32:07', '1 day 3 minutes 56 seconds'),
('2001-08-31', '22:36:04', '1 day 3 minutes 57 seconds'),
('2001-09-01', '22:40:00', '1 day 3 minutes 56 seconds'),
('2001-09-02', '22:43:57', '1 day 3 minutes 57 seconds'),
('2001-09-03', '22:47:53', '1 day 3 minutes 56 seconds'),
('2001-09-04', '22:51:50', '1 day 3 minutes 57 seconds'),
('2001-09-05', '22:55:46', '1 day 3 minutes 56 seconds'),
('2001-09-06', '22:59:43', '1 day 3 minutes 57 seconds'),
('2001-09-07', '23:03:40', '1 day 3 minutes 57 seconds'),
('2001-09-08', '23:07:36', '1 day 3 minutes 56 seconds'),
('2001-09-09', '23:11:33', '1 day 3 minutes 57 seconds'),
('2001-09-10', '23:15:29', '1 day 3 minutes 56 seconds'),
('2001-09-11', '23:19:26', '1 day 3 minutes 57 seconds'),
('2001-09-12', '23:23:22', '1 day 3 minutes 56 seconds'),
('2001-09-13', '23:27:19', '1 day 3 minutes 57 seconds'),
('2001-09-14', '23:31:15', '1 day 3 minutes 56 seconds'),
('2001-09-15', '23:35:12', '1 day 3 minutes 57 seconds'),
('2001-09-16', '23:39:09', '1 day 3 minutes 57 seconds'),
('2001-09-17', '23:43:05', '1 day 3 minutes 56 seconds'),
('2001-09-18', '23:47:02', '1 day 3 minutes 57 seconds'),
('2001-09-19', '23:50:58', '1 day 3 minutes 56 seconds'),
('2001-09-20', '23:54:55', '1 day 3 minutes 57 seconds'),
('2001-09-21', '23:58:51', '1 day 3 minutes 56 seconds'),
('2001-09-22', '00:02:48', '1 day 3 minutes 57 seconds'),
('2001-09-23', '00:06:44', '1 day 3 minutes 56 seconds'),
('2001-09-24', '00:10:41', '1 day 3 minutes 57 seconds'),
('2001-09-25', '00:14:38', '1 day 3 minutes 57 seconds'),
('2001-09-26', '00:18:34', '1 day 3 minutes 56 seconds'),
('2001-09-27', '00:22:31', '1 day 3 minutes 57 seconds'),
('2001-09-28', '00:26:27', '1 day 3 minutes 56 seconds'),
('2001-09-29', '00:30:24', '1 day 3 minutes 57 seconds'),
('2001-09-30', '00:34:20', '1 day 3 minutes 56 seconds'),
('2001-10-01', '00:38:17', '1 day 3 minutes 57 seconds'),
('2001-10-02', '00:42:13', '1 day 3 minutes 56 seconds'),
('2001-10-03', '00:46:10', '1 day 3 minutes 57 seconds'),
('2001-10-04', '00:50:07', '1 day 3 minutes 57 seconds'),
('2001-10-05', '00:54:03', '1 day 3 minutes 56 seconds'),
('2001-10-06', '00:58:00', '1 day 3 minutes 57 seconds'),
('2001-10-07', '01:01:56', '1 day 3 minutes 56 seconds'),
('2001-10-08', '01:05:53', '1 day 3 minutes 57 seconds'),
('2001-10-09', '01:09:49', '1 day 3 minutes 56 seconds'),
('2001-10-10', '01:13:46', '1 day 3 minutes 57 seconds'),
('2001-10-11', '01:17:42', '1 day 3 minutes 56 seconds'),
('2001-10-12', '01:21:39', '1 day 3 minutes 57 seconds'),
('2001-10-13', '01:25:36', '1 day 3 minutes 57 seconds'),
('2001-10-14', '01:29:32', '1 day 3 minutes 56 seconds'),
('2001-10-15', '01:33:29', '1 day 3 minutes 57 seconds'),
('2001-10-16', '01:37:25', '1 day 3 minutes 56 seconds'),
('2001-10-17', '01:41:22', '1 day 3 minutes 57 seconds'),
('2001-10-18', '01:45:18', '1 day 3 minutes 56 seconds'),
('2001-10-19', '01:49:15', '1 day 3 minutes 57 seconds'),
('2001-10-20', '01:53:11', '1 day 3 minutes 56 seconds'),
('2001-10-21', '01:57:08', '1 day 3 minutes 57 seconds'),
('2001-10-22', '02:01:05', '1 day 3 minutes 57 seconds'),
('2001-10-23', '02:05:01', '1 day 3 minutes 56 seconds'),
('2001-10-24', '02:08:58', '1 day 3 minutes 57 seconds'),
('2001-10-25', '02:12:54', '1 day 3 minutes 56 seconds'),
('2001-10-26', '02:16:51', '1 day 3 minutes 57 seconds'),
('2001-10-27', '02:20:47', '1 day 3 minutes 56 seconds'),
('2001-10-28', '02:24:44', '1 day 3 minutes 57 seconds'),
('2001-10-29', '02:28:40', '1 day 3 minutes 56 seconds'),
('2001-10-30', '02:32:37', '1 day 3 minutes 57 seconds'),
('2001-10-31', '02:36:34', '1 day 3 minutes 57 seconds'),
('2001-11-01', '02:40:30', '1 day 3 minutes 56 seconds'),
('2001-11-02', '02:44:27', '1 day 3 minutes 57 seconds'),
('2001-11-03', '02:48:23', '1 day 3 minutes 56 seconds'),
('2001-11-04', '02:52:20', '1 day 3 minutes 57 seconds'),
('2001-11-05', '02:56:16', '1 day 3 minutes 56 seconds'),
('2001-11-06', '03:00:13', '1 day 3 minutes 57 seconds'),
('2001-11-07', '03:04:09', '1 day 3 minutes 56 seconds'),
('2001-11-08', '03:08:06', '1 day 3 minutes 57 seconds'),
('2001-11-09', '03:12:03', '1 day 3 minutes 57 seconds'),
('2001-11-10', '03:15:59', '1 day 3 minutes 56 seconds'),
('2001-11-11', '03:19:56', '1 day 3 minutes 57 seconds'),
('2001-11-12', '03:23:52', '1 day 3 minutes 56 seconds'),
('2001-11-13', '03:27:49', '1 day 3 minutes 57 seconds'),
('2001-11-14', '03:31:45', '1 day 3 minutes 56 seconds'),
('2001-11-15', '03:35:42', '1 day 3 minutes 57 seconds'),
('2001-11-16', '03:39:38', '1 day 3 minutes 56 seconds'),
('2001-11-17', '03:43:35', '1 day 3 minutes 57 seconds'),
('2001-11-18', '03:47:32', '1 day 3 minutes 57 seconds'),
('2001-11-19', '03:51:28', '1 day 3 minutes 56 seconds'),
('2001-11-20', '03:55:25', '1 day 3 minutes 57 seconds'),
('2001-11-21', '03:59:21', '1 day 3 minutes 56 seconds'),
('2001-11-22', '04:03:18', '1 day 3 minutes 57 seconds'),
('2001-11-23', '04:07:14', '1 day 3 minutes 56 seconds'),
('2001-11-24', '04:11:11', '1 day 3 minutes 57 seconds'),
('2001-11-25', '04:15:07', '1 day 3 minutes 56 seconds'),
('2001-11-26', '04:19:04', '1 day 3 minutes 57 seconds'),
('2001-11-27', '04:23:01', '1 day 3 minutes 57 seconds'),
('2001-11-28', '04:26:57', '1 day 3 minutes 56 seconds'),
('2001-11-29', '04:30:54', '1 day 3 minutes 57 seconds'),
('2001-11-30', '04:34:50', '1 day 3 minutes 56 seconds'),
('2001-12-01', '04:38:47', '1 day 3 minutes 57 seconds'),
('2001-12-02', '04:42:43', '1 day 3 minutes 56 seconds'),
('2001-12-03', '04:46:40', '1 day 3 minutes 57 seconds'),
('2001-12-04', '04:50:36', '1 day 3 minutes 56 seconds'),
('2001-12-05', '04:54:33', '1 day 3 minutes 57 seconds'),
('2001-12-06', '04:58:30', '1 day 3 minutes 57 seconds'),
('2001-12-07', '05:02:26', '1 day 3 minutes 56 seconds'),
('2001-12-08', '05:06:23', '1 day 3 minutes 57 seconds'),
('2001-12-09', '05:10:19', '1 day 3 minutes 56 seconds'),
('2001-12-10', '05:14:16', '1 day 3 minutes 57 seconds'),
('2001-12-11', '05:18:12', '1 day 3 minutes 56 seconds'),
('2001-12-12', '05:22:09', '1 day 3 minutes 57 seconds'),
('2001-12-13', '05:26:05', '1 day 3 minutes 56 seconds'),
('2001-12-14', '05:30:02', '1 day 3 minutes 57 seconds'),
('2001-12-15', '05:33:59', '1 day 3 minutes 57 seconds'),
('2001-12-16', '05:37:55', '1 day 3 minutes 56 seconds'),
('2001-12-17', '05:41:52', '1 day 3 minutes 57 seconds'),
('2001-12-18', '05:45:48', '1 day 3 minutes 56 seconds'),
('2001-12-19', '05:49:45', '1 day 3 minutes 57 seconds'),
('2001-12-20', '05:53:41', '1 day 3 minutes 56 seconds'),
('2001-12-21', '05:57:38', '1 day 3 minutes 57 seconds'),
('2001-12-22', '06:01:34', '1 day 3 minutes 56 seconds'),
('2001-12-23', '06:05:31', '1 day 3 minutes 57 seconds'),
('2001-12-24', '06:09:28', '1 day 3 minutes 57 seconds'),
('2001-12-25', '06:13:24', '1 day 3 minutes 56 seconds'),
('2001-12-26', '06:17:21', '1 day 3 minutes 57 seconds'),
('2001-12-27', '06:21:17', '1 day 3 minutes 56 seconds'),
('2001-12-28', '06:25:14', '1 day 3 minutes 57 seconds'),
('2001-12-29', '06:29:10', '1 day 3 minutes 56 seconds'),
('2001-12-30', '06:33:07', '1 day 3 minutes 57 seconds'),
('2001-12-31', '06:37:03', '1 day 3 minutes 56 seconds');

-- --------------------------------------------------------

--
-- Table structure for table `pancha_table2`
--

CREATE TABLE IF NOT EXISTS `pancha_table2` (
  `year` int(4) NOT NULL,
  `cor_time` varchar(8) NOT NULL COMMENT 'Correction Time',
  `apply` varchar(11) NOT NULL COMMENT 'For All or Only for JAN and FEB',
  PRIMARY KEY (`year`,`apply`),
  KEY `apply` (`apply`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pancha_table2`
--

INSERT INTO `pancha_table2` (`year`, `cor_time`, `apply`) VALUES
(1901, '-03:04', 'JAN-DEC'),
(1902, '-04:02', 'JAN-DEC'),
(1903, '-04:59', 'JAN-DEC'),
(1904, '-05:56', 'JAN-FEB'),
(1904, '-02:00', 'MAR-DEC'),
(1905, '-02:57', 'JAN-DEC'),
(1906, '-03:54', 'JAN-DEC'),
(1907, '-04:51', 'JAN-DEC'),
(1908, '-05:49', 'JAN-FEB'),
(1908, '-01:52', 'MAR-DEC'),
(1909, '-02:50', 'JAN-DEC'),
(1910, '-03:47', 'JAN-DEC'),
(1911, '-04:44', 'JAN-DEC'),
(1912, '-05:41', 'JAN-FEB'),
(1912, '-01:45', 'MAR-DEC'),
(1913, '-02:42', 'JAN-DEC'),
(1914, '-03:39', 'JAN-DEC'),
(1915, '-04:37', 'JAN-DEC'),
(1916, '-05:34', 'JAN-FEB'),
(1916, '-02:36', 'MAR-DEC'),
(1917, '-02:35', 'JAN-DEC'),
(1918, '-03:32', 'JAN-DEC'),
(1919, '-04:29', 'JAN-DEC'),
(1920, '-05:27', 'JAN-FEB'),
(1920, '-01:30', 'MAR-DEC'),
(1921, '-02:27', 'JAN-DEC'),
(1922, '-03:25', 'JAN-DEC'),
(1923, '-04:22', 'JAN-DEC'),
(1924, '-05:19', 'JAN-FEB'),
(1924, '-01:23', 'MAR-DEC'),
(1925, '-02:20', 'JAN-DEC'),
(1926, '-03:17', 'JAN-DEC'),
(1927, '-04:15', 'JAN-DEC'),
(1928, '-05:12', 'JAN-FEB'),
(1928, '-01:16', 'MAR-DEC'),
(1929, '-02:13', 'JAN-DEC'),
(1930, '-03:10', 'JAN-DEC'),
(1931, '-04:07', 'JAN-DEC'),
(1932, '-05:04', 'JAN-FEB'),
(1932, '-01:08', 'MAR-DEC'),
(1933, '-02:05', 'JAN-DEC'),
(1934, '-03:03', 'JAN-DEC'),
(1935, '-04:00', 'JAN-DEC'),
(1936, '-04:57', 'JAN-FEB'),
(1936, '-01:01', 'MAR-DEC'),
(1937, '-01:58', 'JAN-DEC'),
(1938, '-02:55', 'JAN-DEC'),
(1939, '-03:52', 'JAN-DEC'),
(1940, '-04:50', 'JAN-FEB'),
(1940, '-00:53', 'MAR-DEC'),
(1941, '-01:50', 'JAN-DEC'),
(1942, '-02:48', 'JAN-DEC'),
(1943, '-03:45', 'JAN-DEC'),
(1944, '-04:42', 'JAN-FEB'),
(1944, '-00:46', 'MAR-DEC'),
(1945, '-01:43', 'JAN-DEC'),
(1946, '-02:40', 'JAN-DEC'),
(1947, '-03:38', 'JAN-DEC'),
(1948, '-04:35', 'JAN-FEB'),
(1948, '-00:39', 'MAR-DEC'),
(1949, '-01:36', 'JAN-DEC'),
(1950, '-02:33', 'JAN-DEC'),
(1951, '-03:30', 'JAN-DEC'),
(1952, '-04:28', 'JAN-FEB'),
(1952, '-00:31', 'MAR-DEC'),
(1953, '-01:28', 'JAN-DEC'),
(1954, '-02:26', 'JAN-DEC'),
(1955, '-03:23', 'JAN-DEC'),
(1956, '-04:20', 'JAN-FEB'),
(1956, '-00:24', 'MAR-DEC'),
(1957, '-01:21', 'JAN-DEC'),
(1958, '-02:18', 'JAN-DEC'),
(1959, '-03:16', 'JAN-DEC'),
(1960, '-04:13', 'JAN-FEB'),
(1960, '-00:16', 'MAR-DEC'),
(1961, '-01:14', 'JAN-DEC'),
(1962, '-02:11', 'JAN-DEC'),
(1963, '-03:08', 'JAN-DEC'),
(1964, '-04:05', 'JAN-FEB'),
(1964, '-00:09', 'MAR-DEC'),
(1965, '-01:06', 'JAN-DEC'),
(1966, '-02:03', 'JAN-DEC'),
(1967, '-03:01', 'JAN-DEC'),
(1968, '-03:58', 'JAN-FEB'),
(1968, '-00:02', 'MAR-DEC'),
(1969, '-00:59', 'JAN-DEC'),
(1970, '-01:56', 'JAN-DEC'),
(1971, '-02:53', 'JAN-DEC'),
(1972, '-03:51', 'JAN-FEB'),
(1972, '+00:06', 'MAR-DEC'),
(1973, '-00:51', 'JAN-DEC'),
(1974, '-01:49', 'JAN-DEC'),
(1975, '-02:46', 'JAN-DEC'),
(1976, '-03:43', 'JAN-FEB'),
(1976, '+00:13', 'MAR-DEC'),
(1977, '-00:44', 'JAN-DEC'),
(1978, '-01:41', 'JAN-DEC'),
(1979, '-02:39', 'JAN-DEC'),
(1980, '-03:36', 'JAN-FEB'),
(1980, '+00:20', 'MAR-DEC'),
(1981, '-00:37', 'JAN-DEC'),
(1982, '-01:34', 'JAN-DEC'),
(1983, '-02:31', 'JAN-DEC'),
(1984, '-03:29', 'JAN-FEB'),
(1984, '+00:28', 'MAR-DEC'),
(1985, '-00:29', 'JAN-DEC'),
(1986, '-01:27', 'JAN-DEC'),
(1987, '-02:24', 'JAN-DEC'),
(1988, '-03:21', 'JAN-FEB'),
(1988, '+00:35', 'MAR-DEC'),
(1989, '-00:22', 'JAN-DEC'),
(1990, '-01:19', 'JAN-DEC'),
(1991, '-02:16', 'JAN-DEC'),
(1992, '-03:14', 'JAN-FEB'),
(1992, '+00:43', 'MAR-DEC'),
(1993, '-00:15', 'JAN-DEC'),
(1994, '-01:12', 'JAN-DEC'),
(1995, '-02:09', 'JAN-DEC'),
(1996, '-03:06', 'JAN-FEB'),
(1996, '+00:50', 'MAR-DEC'),
(1997, '-00:07', 'JAN-DEC'),
(1998, '-01:04', 'JAN-DEC'),
(1999, '-02:02', 'JAN-DEC'),
(2000, '-02:59', 'JAN-FEB'),
(2000, '+00:57', 'MAR-DEC'),
(2001, '+00:00', 'JAN-DEC'),
(2002, '-00:57', 'JAN-DEC'),
(2003, '-01:54', 'JAN-DEC'),
(2004, '-02:52', 'JAN-FEB'),
(2004, '+01:05', 'MAR-DEC'),
(2005, '+00:08', 'JAN-DEC'),
(2006, '-00:50', 'JAN-DEC'),
(2007, '-01:57', 'JAN-DEC'),
(2008, '-02:44', 'JAN-FEB'),
(2008, '+01:12', 'MAR-DEC'),
(2009, '+00:15', 'JAN-DEC'),
(2010, '-00:42', 'JAN-DEC'),
(2011, '-01:40', 'JAN-DEC'),
(2012, '-02:37', 'JAN-FEB'),
(2012, '+01:19', 'MAR-DEC'),
(2013, '+00:22', 'JAN-DEC'),
(2014, '-00:35', 'JAN-DEC'),
(2015, '-01:32', 'JAN-DEC'),
(2016, '-02:29', 'JAN-FEB'),
(2016, '+01:27', 'MAR-DEC'),
(2017, '+00:30', 'JAN-DEC'),
(2018, '-00:28', 'JAN-DEC'),
(2019, '-01:25', 'JAN-DEC'),
(2020, '-02:22', 'JAN-FEB'),
(2020, '+01:34', 'MAR-DEC'),
(2021, '+00:37', 'JAN-DEC'),
(2022, '-00:20', 'JAN-DEC'),
(2023, '-01:17', 'JAN-DEC'),
(2024, '-02:15', 'JAN-FEB'),
(2024, '+01:42', 'MAR-DEC'),
(2025, '+00:45', 'JAN-DEC'),
(2026, '-00:13', 'JAN-DEC'),
(2027, '-01:10', 'JAN-DEC'),
(2028, '-02:07', 'JAN-FEB'),
(2028, '+01:49', 'MAR-DEC'),
(2029, '+00:52', 'JAN-DEC'),
(2030, '-00:05', 'JAN-DEC'),
(2031, '-01:03', 'JAN-DEC'),
(2032, '-02:00', 'JAN-FEB'),
(2032, '+01:56', 'MAR-DEC'),
(2033, '+00:59', 'JAN-DEC'),
(2034, '+00:02', 'JAN-DEC'),
(2035, '-00:55', 'JAN-DEC'),
(2036, '-01:53', 'JAN-FEB'),
(2036, '+02:04', 'MAR-DEC'),
(2037, '+01:07', 'JAN-DEC'),
(2038, '+00:09', 'JAN-DEC'),
(2039, '-00:48', 'JAN-DEC'),
(2040, '-01:45', 'JAN-FEB'),
(2040, '+02:11', 'MAR-DEC'),
(2041, '+01:14', 'JAN-DEC'),
(2042, '+00:17', 'JAN-DEC'),
(2043, '-00:41', 'JAN-DEC'),
(2044, '-01:38', 'JAN-FEB'),
(2044, '+02:18', 'MAR-DEC'),
(2045, '+01:21', 'JAN-DEC'),
(2046, '+00:24', 'JAN-DEC'),
(2047, '-00:33', 'JAN-DEC'),
(2048, '-01:30', 'JAN-FEB'),
(2048, '+02:26', 'MAR-DEC'),
(2049, '+01:29', 'JAN-DEC'),
(2050, '+00:32', 'JAN-DEC'),
(2051, '-00:26', 'JAN-DEC'),
(2052, '-01:23', 'JAN-FEB'),
(2052, '+02:33', 'MAR-DEC'),
(2053, '+02:36', 'JAN-DEC'),
(2054, '+00:39', 'JAN-DEC'),
(2055, '-00:18', 'JAN-DEC'),
(2056, '-01:16', 'JAN-FEB'),
(2056, '+02:41', 'MAR-DEC'),
(2057, '+01:44', 'JAN-DEC'),
(2058, '+00:46', 'JAN-DEC'),
(2059, '-00:11', 'JAN-DEC'),
(2060, '-01:08', 'JAN-FEB'),
(2060, '+02:48', 'MAR-DEC'),
(2061, '+01:51', 'JAN-DEC'),
(2062, '+00:54', 'JAN-DEC'),
(2063, '-00:04', 'JAN-DEC'),
(2064, '-01:01', 'JAN-FEB'),
(2064, '+02:55', 'MAR-DEC'),
(2065, '+01:58', 'JAN-DEC'),
(2066, '+01:01', 'JAN-DEC'),
(2067, '+00:04', 'JAN-DEC'),
(2068, '-00:54', 'JAN-FEB'),
(2068, '+03:03', 'MAR-DEC'),
(2069, '+02:06', 'JAN-DEC'),
(2070, '+01:08', 'JAN-DEC'),
(2071, '+00:11', 'JAN-DEC'),
(2072, '-00:46', 'JAN-FEB'),
(2072, '+03:10', 'MAR-DEC'),
(2073, '+02:13', 'JAN-DEC'),
(2074, '+01:16', 'JAN-DEC'),
(2075, '+00:19', 'JAN-DEC'),
(2076, '-00:39', 'JAN-FEB'),
(2076, '+03:18', 'MAR-DEC'),
(2077, '+02:20', 'JAN-DEC'),
(2078, '+01:23', 'JAN-DEC'),
(2079, '+00:26', 'JAN-DEC'),
(2080, '-00:31', 'JAN-FEB'),
(2080, '+03:25', 'MAR-DEC'),
(2081, '+02:28', 'JAN-DEC'),
(2082, '+01:31', 'JAN-DEC'),
(2083, '+00:33', 'JAN-DEC'),
(2084, '-00:24', 'JAN-FEB'),
(2084, '+03:32', 'MAR-DEC'),
(2085, '+02:35', 'JAN-DEC'),
(2086, '+01:38', 'JAN-DEC'),
(2087, '+00:41', 'JAN-DEC'),
(2088, '-00:17', 'JAN-FEB'),
(2088, '+03:40', 'MAR-DEC'),
(2089, '+02:43', 'JAN-DEC'),
(2090, '+01:45', 'JAN-DEC'),
(2091, '+00:48', 'JAN-DEC'),
(2092, '-00:09', 'JAN-FEB'),
(2092, '+03:47', 'MAR-DEC'),
(2093, '+02:50', 'JAN-DEC'),
(2094, '+01:53', 'JAN-DEC'),
(2095, '+00:55', 'JAN-DEC'),
(2096, '-00:02', 'JAN-FEB'),
(2096, '+03:54', 'MAR-DEC'),
(2097, '+02:57', 'JAN-DEC'),
(2098, '+02:00', 'JAN-DEC'),
(2099, '+01:03', 'JAN-DEC');

-- --------------------------------------------------------

--
-- Table structure for table `pancha_table2_const`
--

CREATE TABLE IF NOT EXISTS `pancha_table2_const` (
  `mon` varchar(7) NOT NULL,
  `desc` varchar(20) NOT NULL,
  PRIMARY KEY (`mon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pancha_table2_const`
--

INSERT INTO `pancha_table2_const` (`mon`, `desc`) VALUES
('JAN-DEC', ''),
('JAN-FEB', ''),
('MAR-DEC', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile_brahmin_account`
--

CREATE TABLE IF NOT EXISTS `profile_brahmin_account` (
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
  `occType` varchar(60) NOT NULL,
  `living_status` varchar(20) NOT NULL,
  `profile_status` varchar(8) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_pic` varchar(250) NOT NULL,
  PRIMARY KEY (`account_Id`),
  KEY `account_Id` (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_brahmin_account`
--

INSERT INTO `profile_brahmin_account` (`account_Id`, `surName`, `name`, `gender`, `motherTongue`, `status`, `ft_hgt`, `inch_hgt`, `highDegree`, `occupation`, `occType`, `living_status`, `profile_status`, `added_on`, `profile_pic`) VALUES
('CA1121359175732', 'Talluri', 'Naga sai lakshmi sravya', 'Female', 'Telugu', 'UnMarried', '5', '3', 'B-TECH ', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-10-31 23:46:08', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA1218751586147', 'Durvasula', 'Rakesh', 'Male', 'Telugu', 'UnMarried', '5', '9', 'B-TECH ', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA1821625518261', 'Gunturi', 'Sai anasuya sravani', 'Female', 'Telugu', 'UnMarried', '5', '2', 'LLB, COMPANY SECRETARIES OF INDIA', 'Senior executive apollo group', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA2236428372158', 'Devarapally', 'Sri Harsha', 'Male', 'Telugu', 'UnMarried', '5', '7', 'MSC multimedia', 'Web designer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA2495945963999', 'Nellutla ', 'Venkata Kishore ', 'Male', 'Telugu', 'UnMarried', '5', '11', 'Btech', 'Software engineer ', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA2613864564948', 'Tadikonda', 'Naga mallikarjun', 'Male', 'Telugu', 'UnMarried', '5', '5', 'B. COM, MBA', 'Manager ICICI', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA2693899939725', 'Telakapally', 'Vinod kumar', 'Male', 'Telugu', 'UnMarried', '5', '11', 'MCA', '-', 'None of the Above', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA2936878582798', 'Sanidanam', 'NV. Lakshmi divya', 'Female', 'Telugu', 'UnMarried', '5', '3', 'MSC Organic chemistry', 'Private employee', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA2951796763315', 'Medoori', 'Venkatanagavalli prameela', 'Female', 'Telugu', 'UnMarried', '5', '5', ' M-TECH', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA3674777414977', 'Kandiraju', 'Anvitha', 'Female', 'Telugu', 'UnMarried', '5', '4', 'B-TECH MS [US]', 'Private employee', 'Private Company', 'Living in Abroad', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA4131974324277', 'Mallela', 'Srikanth', 'Male', 'Telugu', 'UnMarried', '5', '10', 'MCA', 'Project manager', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA4172848683513', 'Vavilala', 'Bhargavi', 'Female', 'Telugu', 'UnMarried', '5', '5', 'B-TECH ', 'Network specialist [ amazon ]', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA4367628234255', 'Vutukur', 'Arun', 'Male', 'Telugu', 'UnMarried', '5', '9', 'B-TECH ECE', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA5184632772399', 'Parimi', 'Sowjanya', 'Female', 'Telugu', 'UnMarried', '5', '2', 'B-TECH ', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA5395669319997', 'Kidambi', 'KARTHEEK', 'Male', 'Telugu', 'UnMarried', '5', '10', 'M SC PHYSICS. B ed', 'POWROHITHYAM', 'None of the Above', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA5611248492335', 'Chodavarapu', 'Himaja', 'Female', 'Telugu', 'UnMarried', '5', '', 'B-TECH ', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA5814825536174', 'Rallabhandi', 'VN. Sastry', 'Male', 'Telugu', 'UnMarried', '5', '5', 'B. COM, BL', 'Advocate', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA5828423896872', 'Sundaragiri', 'Santosh kumar', 'Male', 'Telugu', 'UnMarried', '6', '', 'CA', 'Auditor manager, TATA projects', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA6186255512876', 'Prahararaju', 'SIRISH', 'Male', 'Telugu', 'UnMarried', '5', '5', 'B. COM DIPLOMA IN MULTIMEDIA', 'Contract inwriter PAYTM', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA7532164938417', 'Edumudi', 'Venkata naga neela', 'Female', 'Telugu', 'UnMarried', '5', '1', 'B-TECH ECE', 'Tech support', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA7538746949171', 'Vempati', 'Padma haritha', 'Female', 'Telugu', 'UnMarried', '5', '', 'M. COM', 'Accountant', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA7746183883121', 'Lanka', 'Rajnikanth', 'Male', 'Telugu', 'UnMarried', '5', '11', 'B. Com MBA', 'ICSI HR Sr.  Officer ', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA7928272613315', 'Rampali', 'Ram pradyumna', 'Male', 'Telugu', 'UnMarried', '5', '11', 'B-TECH CSE', 'Sr. Develops technology', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA7935211162416', 'Chivukula', 'Shivakishore', 'Male', 'Telugu', 'UnMarried', '5', '8', 'B. COM [Computors]', 'Private employee', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA7994131175812', 'Avadhanula', 'Hari sai krishna', 'Male', 'Telugu', 'UnMarried', '5', '9', 'B-TECH, MBA, SAP', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA8296261296768', 'Maddaly', 'Sumasree', 'Female', 'Telugu', 'UnMarried', '5', '5', 'Homeo MD [PG]', 'Doing homeo MD [PG]', 'None of the Above', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA8465651172775', 'Tadepalli', 'Sarada', 'Female', 'Telugu', 'UnMarried', '5', '6', 'B-TECH CSE', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/women.jpg'),
('CA8482953799317', 'Challa', 'Dattatreya sharma', 'Male', 'Telugu', 'UnMarried', '5', '9', 'BSC, B.COM, MCA, multimedia ', 'Web designer', 'Business / Self Employeed', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA8485543295572', 'Vedham', 'Krishna mohan', 'Male', 'Telugu', 'UnMarried', '5', '9', 'MSC Bio Chemistry', 'Operations manager', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA8628242812631', 'Rallabhandi', 'Shiva kumar', 'Male', 'Telugu', 'UnMarried', '5', '6', 'MSC computors', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA8761615429762', 'Ippagunta', 'Sudheer', 'Male', 'Telugu', 'UnMarried', '5', '7', 'B-TECH ECE', 'Software engineer', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg'),
('CA9445232779294', 'Tangirala', 'Sai varaprasad', 'Male', 'Telugu', 'UnMarried', '5', '6', 'Bsc MCA', 'Adequareinfo', 'Private Company', 'Living in India', 'ACTIVE', '2018-11-01 13:12:12', 'http://localhost/KalynVna/website/images/men.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile_brahmin_birth`
--

CREATE TABLE IF NOT EXISTS `profile_brahmin_birth` (
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
  KEY `account_Id` (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_brahmin_birth`
--

INSERT INTO `profile_brahmin_birth` (`account_Id`, `dob`, `birthCountry`, `birthState`, `birthLocation`, `birthLocality`, `shakha`, `upashakha`, `gothram`, `raasi`, `nakshatram`) VALUES
('CA1218751586147', '1989-06-29 04:50:00', 'India', 'Andhra Pradesh', 'Kakinada', 'Kakinada City', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Srivatsa', 'Aries (Mesha Raasi)', 'Bharani Nakshatram 1st Padam'),
('CA1821625518261', '1992-06-07 15:54:00', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Srivatsa', 'Leo (Simha Raasi)', 'Pubbha Nakshatram 1st Padam'),
('CA2236428372158', '1986-10-31 16:00:00', 'India', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada Central', 'Niyogi Brahmins', 'Niyogi Pradamashakha', 'Atreya', 'Virgo (Kanya Raasi)', 'Hastha Nakshatram 2nd Padam'),
('CA2495945963999', '2012-08-06 20:44:00', 'India', 'Andhra Pradesh', 'Anakapalli', '', 'Niyogi Brahmins', 'Karanakamma Niyogi', 'Bhardwaj', 'Virgo (Kanya Raasi)', 'Hastha Nakshatram 1st Padam'),
('CA2613864564948', '1980-07-24 08:53:00', 'India', 'Telangana', 'Warangal', '', 'Niyogi Brahmins', 'Aruvela Niyogi', 'Bharadvajasa', 'Scorpio (Vruchika Raasi)', 'Jeshta Nakshatram 1st Padam'),
('CA2693899939725', '1986-02-11 22:00:00', 'India', 'Telangana', 'Mahbubnagar', 'Mahbubnagar', 'Vaidika Brahmins', 'Vaishnava', 'Sandilyasa', 'Aquarius (Khumbha Raasi)', 'Purvabhadhra Nakshatram 3rd Padam'),
('CA2936878582798', '1991-11-30 16:25:00', 'India', 'Andhra Pradesh', 'Eluru', 'Eluru Urban', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Haritasa', 'Virgo (Kanya Raasi)', 'Uthara Nakshatram 2nd Padam'),
('CA2951796763315', '1992-05-27 11:10:00', 'India', 'Andhra Pradesh', 'Ongole', 'Ongole', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Kashyapa', 'Pisces (Meena Raasi)', 'Utharabhadra Nakshatram 1st Padam'),
('CA3674777414977', '1991-11-29 17:00:00', 'India', 'Telangana', 'Warangal', 'Warangal West', 'Niyogi Brahmins', 'Aruvela Niyogi', 'Gautamasa', 'Leo (Simha Raasi)', 'Pubbha Nakshatram 1st Padam'),
('CA4131974324277', '1981-11-20 08:40:00', 'India', 'Andhra Pradesh', 'Guntur', 'Tenali', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Kaushika', 'Leo (Simha Raasi)', 'Pubbha Nakshatram 2nd Padam'),
('CA4172848683513', '1993-03-27 12:46:00', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', 'Vaidika Brahmins', 'Telaganyulu / Telaganadu Vaidikis', 'Haritasa', 'Aries (Mesha Raasi)', 'Bharani Nakshatram 4th Padam'),
('CA4367628234255', '1989-03-30 13:40:00', 'India', 'Telangana', 'Hyderabad', 'Nampally', 'Vaidika Brahmins', 'Madhvulu', 'Kashyapa', 'Saggitarius (Dhanur Raasi)', 'Purvashada Nakshatram 2nd Padam'),
('CA5184632772399', '1990-01-17 23:55:00', 'India', 'Andhra Pradesh', '', '', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Haritasa', 'Virgo (Kanya Raasi)', 'Hastha Nakshatram 1st Padam'),
('CA5395669319997', '1989-09-20 18:32:00', 'India', 'Andhra Pradesh', 'Chittoor', '', 'Vaidika Brahmins', 'Vaishnava', 'Atreya', 'Taurus (Vrushabha Raasi)', 'Kruthika Nakshatram 4th Padam'),
('CA5611248492335', '1992-06-05 21:26:00', 'India', 'Andhra Pradesh', 'Ongole', 'Ongole', 'Niyogi Brahmins', 'Aruvela Niyogi', 'Bharadvajasa', 'Cancer (Karkataka Raasi)', 'Aslesha Nakshatram 1st Padam'),
('CA5814825536174', '1976-07-22 21:30:00', 'India', 'Andhra Pradesh', 'Nellore', 'Nellore City', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Bharadvajasa', 'Taurus (Vrushabha Raasi)', 'Rohini Nakshatram 4th Padam'),
('CA5828423896872', '1982-02-15 05:44:00', 'India', 'Telangana', 'Warangal', 'Warangal West', 'Niyogi Brahmins', 'Aruvela Niyogi', 'Kashyapa', 'Libra (Thula Raasi)', 'Swathi Nakshatram 1st Padam'),
('CA6186255512876', '1980-09-18 08:40:00', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', 'Niyogi Brahmins', 'Niyogi Pradamashakha', 'Atreya', 'Saggitarius (Dhanur Raasi)', 'Moola Nakshatram 3rd Padam'),
('CA7532164938417', '1993-03-14 19:42:00', 'India', 'Andhra Pradesh', 'Guntur', 'Guntur East', 'Niyogi Brahmins', 'Aruvela Niyogi', 'Haritasa', 'Scorpio (Vruchika Raasi)', 'Anuradha Nakshatram 3rd Padam'),
('CA7538746949171', '1991-05-21 14:55:00', 'India', 'Telangana', 'Khammam', 'Kothagudem', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Haritasa', 'Leo (Simha Raasi)', 'Makha Nakshatram 1st Padam'),
('CA7746183883121', '1978-10-03 04:50:00', 'India', 'Telangana', 'Hyderabad', 'Sanathnagar', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Kaundinya', 'Virgo (Kanya Raasi)', 'Hastha Nakshatram 4th Padam'),
('CA7928272613315', '1990-03-05 10:33:00', 'India', 'Telangana', 'Hyderabad', 'Sanathnagar', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Kashyapa', 'Taurus (Vrushabha Raasi)', 'Mrugasira Nakshatram 2nd Padam'),
('CA7935211162416', '1982-11-28 07:08:00', 'India', 'Andhra Pradesh', 'Ongole', 'Ongole', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Bharadvajasa', 'Aries (Mesha Raasi)', 'Bharani Nakshatram 2nd Padam'),
('CA7994131175812', '1991-05-14 22:15:00', 'India', 'Telangana', 'Karimnagar', 'Karimnagar', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Atreya', 'Taurus (Vrushabha Raasi)', 'Kruthika Nakshatram 3rd Padam'),
('CA8296261296768', '1993-12-10 16:51:00', 'India', 'Telangana', 'Hyderabad', 'Amberpet', 'Niyogi Brahmins', 'Aruvela Niyogi', 'Kaundinya', 'Libra (Thula Raasi)', 'Swathi Nakshatram 2nd Padam'),
('CA8465651172775', '1994-06-09 12:25:00', 'India', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada Central', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Atreya', 'Taurus (Vrushabha Raasi)', 'Rohini Nakshatram 4th Padam'),
('CA8482953799317', '1982-08-07 16:15:00', 'India', 'Andhra Pradesh', 'Visakhapatnam', 'Visakhapatnam South', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Kaundinya', 'Aquarius (Khumbha Raasi)', 'Sathabisham Nakshatram 3rd Padam'),
('CA8485543295572', '1981-09-19 17:55:00', 'India', 'Andhra Pradesh', 'Nellore', 'Nellore City', 'Vaidika Brahmins', 'Dravidulu', 'Bharadvajasa', 'Taurus (Vrushabha Raasi)', 'Rohini Nakshatram 1st Padam'),
('CA8628242812631', '1980-08-29 21:30:00', 'India', 'Andhra Pradesh', 'Nellore', 'Nellore Rural', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Bharadvajasa', 'Pisces (Meena Raasi)', 'Revathi Nakshatram 4th Padam'),
('CA8761615429762', '1986-07-06 07:20:00', 'India', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada Central', 'Niyogi Brahmins', 'Aruvela Niyogi', 'Kashyapa', 'Gemini (Midhuna Raasi)', 'Aarudhra Nakshatram 4th Padam'),
('CA9445232779294', '1981-08-12 05:15:00', 'India', 'Andhra Pradesh', 'Guntur', 'Guntur West', 'Vaidika Brahmins', 'Velanati Vaidikulu', 'Srivatsa', 'Saggitarius (Dhanur Raasi)', 'Moola Nakshatram 1st Padam');

-- --------------------------------------------------------

--
-- Table structure for table `profile_brahmin_contact`
--

CREATE TABLE IF NOT EXISTS `profile_brahmin_contact` (
  `account_Id` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `minlocation` varchar(25) NOT NULL DEFAULT '',
  `mob_code` varchar(5) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  PRIMARY KEY (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_brahmin_contact`
--

INSERT INTO `profile_brahmin_contact` (`account_Id`, `address`, `country`, `state`, `location`, `minlocation`, `mob_code`, `mobile`) VALUES
('CA1218751586147', 'D no. 2-19-58/F, Kalyanapuri, Uppal, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '', '9949696161'),
('CA1821625518261', 'Plot no. 1-15/1/1, Surya nagar colony, Road no. 1, Near medchal tahsil office, kapra, ECIL post, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '', '9032029299'),
('CA2236428372158', 'B-1215, Behind RSS Grounds, Vanasthalipuram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Malakpet', '', '9989346567'),
('CA2495945963999', 'Hyderabad ', 'India', 'Andhra Pradesh', 'Anakapalli', 'Yelamanchili', '', '9948390094'),
('CA2613864564948', '403 Sharadha appartments, street no. 6, Nallakunta, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '', '9885716254'),
('CA2693899939725', '6-1-89/4/B, Ganesh nagar, Mahabubnagar, Telangana', 'India', 'Telangana', 'Mahbubnagar', 'Mahbubnagar', '', '9989555798'),
('CA2936878582798', 'D no. 9-116, Sriram nagar, Road no. 5, Gavaracheruvu, Senivarapu peta, Eluru, Andhra pradesh', 'India', 'Andhra Pradesh', 'Eluru', 'Eluru Urban', '', '7702837972'),
('CA2951796763315', '82/C-16, Sachivalaya nagar, Vanasthalipuram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Khairatabad', '', '9666420380'),
('CA3674777414977', 'H no. 2-5-260, Nakkala guta, Hanumakonda, Warangal, Telangana', 'India', 'Telangana', 'Warangal', 'Warangal East', '', '9866444026'),
('CA4131974324277', 'Flat no. 57, Goutaminagar, Road no. 11, Vanasthalipuram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Malakpet', '', '9293172474'),
('CA4172848683513', 'Flat no. F-12, Sri sai krishna apartments, H no. 10-5/3/a/14, Masab tank, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Jubilee Hills', '', '8008572424'),
('CA4367628234255', 'S-2 EXT,  Satyakalya apartments,  Reekminipuri colony,  Hyderabad ', 'India', 'Telangana', 'Hyderabad', 'Sanathnagar', '', '8184989385'),
('CA5184632772399', 'Plot no. 18, Vimanapuri colony, Near govt. high school, Qutubullapur, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Goshamahal', '', '9866984278'),
('CA5395669319997', '2-23, DIGUVAMATHYAM, V&P, THAVANAMPALLI MANDAL, KOTHAPALLIMITTA, CHITTOOR DIST', 'India', 'Andhra Pradesh', 'Chittoor', 'Chittoor Urban', '', '9490102102'),
('CA5611248492335', 'Plot no. 86, H no. 5-4-1380/2, Narasimha rao nagar, Vanasthalipuram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Nampally', '', '9492528828'),
('CA5814825536174', '28-3-160/1-33, Flat no. 102, Sairam comforts, Tarakanth colony, Saradanagar, JNTU Road, ', 'India', 'Andhra Pradesh', 'Anantapur', 'Anantapur Urban', '', '9000249604'),
('CA5828423896872', 'H no. 7-2-214/2, Ashok colony, Flat no. 301, Sanath nagar, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Sanathnagar', '', '9247983615'),
('CA6186255512876', 'FLAT NO 201, 2 nd FLOOR, 12-13-308/A, KRISHNAPRIYA APARTMENTS, STREET NO 19 TARNAKA BIG BAZAR, HYDERABAD.', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '', '9908346445'),
('CA7532164938417', 'H no. 37-93-311/1, Plot no, 35, 4th street, Madhura nagar, near vimukthi chruch, nearedmet X roads, Secundrabad, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '', '9618535928'),
('CA7538746949171', 'Flat no. 304, Block 2c, Modi paramount rescidence, Shilpa nagar, Nagaram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '', '9936929902'),
('CA7746183883121', 'Might 800, KPHB colony,  kukatpally,  Hyderabad ', 'India', 'Telangana', 'Hyderabad', 'Nampally', '', '9885989854'),
('CA7928272613315', 'Flat no. 204, Srinikethan enclave, Road no. 6, Nallakunta, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '', '8185002630'),
('CA7935211162416', 'FF-3, Pavansai Homes, Vijayawad, prasadampadu, Andhra pradesh, India', 'India', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada Central', '', '7207855325'),
('CA7994131175812', 'Flat no. 2054,Srineekethan enclave, Road no. 6, Nallakunta, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '', '8185002630'),
('CA8296261296768', 'Plot no. 44, H no. 27-10-5/6 Sri krishna nagar colony, RK Puram post, neredmet, Secundrabad, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '', '9440658500'),
('CA8465651172775', 'H no. 42-3/1-95, FF1 Ayyapa towers, Raghunadha rao street, Ramakrishna puram, Vijayawada', 'India', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada Central', '', '9848661576'),
('CA8482953799317', 'MVP colony, Visakhapatnam, D no. 2-29-17, Sector-6', 'India', 'Andhra Pradesh', 'Visakhapatnam', 'Visakhapatnam South', '', '9848581550'),
('CA8485543295572', 'H no. 16-11-741/3, Flat no. 102, Lakshmi kumar, RK Heights, moosarambagh, Dilsukhnagar, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Malakpet', '', '9440782151'),
('CA8628242812631', '28-3-160/1-33, Flat no. 102, Sairam comforts, Tarakanth colony, Saradanagar, JNTU, Anathapur', 'India', 'Andhra Pradesh', 'Anantapur', 'Anantapur Urban', '', '9000249604'),
('CA8761615429762', '404 Singh nagar, Vijayawad, Andhra pradesh, India', 'India', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada Central', '', '9032069883'),
('CA9445232779294', 'D no. 5-61-38 G1 Varalakshmi Towers,2/18 Brodipet Guntur', 'India', 'Andhra Pradesh', 'Guntur', 'Guntur West', '', '9581523180');

-- --------------------------------------------------------

--
-- Table structure for table `profile_brahmin_family`
--

CREATE TABLE IF NOT EXISTS `profile_brahmin_family` (
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
-- Dumping data for table `profile_brahmin_family`
--

INSERT INTO `profile_brahmin_family` (`account_Id`, `fatherName`, `fatherOccupation`, `motherName`, `motherOccupation`, `NoOfBrothers`, `NoOfSisters`) VALUES
('CA1218751586147', 'Madhava rao', ' Govt. emplopyee', 'Rama lakshmi', 'House wife', '', '1'),
('CA1821625518261', 'GVK. Murthy', 'HR Consultancy', 'G. Rama', 'House wife', '1', ''),
('CA2236428372158', 'DSSVR. Prasad', 'Retired govt. employee', 'DV. Nirmala', 'House wife', '1', ''),
('CA2495945963999', '', '', '', '', '', ''),
('CA2613864564948', 'TDM. Rao', 'Retired employee', 'TVB. Lakshmi', 'House wife', '1', '2'),
('CA2693899939725', 'T. Krishna murthy', 'Private employee', 'Sreedevi', 'House wife', '1', ''),
('CA2936878582798', 'SSRNV. Satyanarayana', 'Real estate', 'Anasuyadevi', 'House wife', '1', '1'),
('CA2951796763315', 'M. Venkata ramana ', 'Govt teacher', 'Kameshwari', '', '', '1'),
('CA3674777414977', 'K. Krishna kumar', 'Retired job', 'K. Vijay lakshmi', 'Retired principal', '1', ''),
('CA4131974324277', 'M. Shiva kumar', 'Retired high court employee', 'Shiva kamasundhari', 'House wife', '', '2'),
('CA4172848683513', 'V. Appaiah sastry', 'Retired employee', 'V. Sujatha', 'House wife', '', '1'),
('CA4367628234255', 'V.  Krishna murthy', 'Assistant professor ', 'VM.  Vani', 'House wife', '', '2'),
('CA5184632772399', 'P. Kameshwar rao', 'Retired state govt. job', '', '', '', '1'),
('CA5395669319997', 'KIDAMBI MURALIDHAR', 'POWROHITHYAM', 'KIDAMBI PADMAVATHY', 'House wife', '1', ''),
('CA5611248492335', 'CSV. Lakshmi narayana', 'Cheif manager', 'Swathi', 'House wife', '1', ''),
('CA5814825536174', 'Dr. R. Narashimham', 'Doctor', 'R. Nagamani', 'House wife', '1', '2'),
('CA5828423896872', 'SS. Prasad', 'Retired employee', 'Jayasree', 'House wife', '', '2'),
('CA6186255512876', '[LATE] P.KRISHNA MURTHY', '', '[LATE] P.MAHALAKSHMI', '', '4', ''),
('CA7532164938417', 'E. Naga raju', 'railway clerk', 'Parvathi', 'House wife', '1', ''),
('CA7538746949171', 'V. Satyanarayana', 'Retired central govt. employee', 'V, Nagaraja kumari', 'House wife', '', ''),
('CA7746183883121', 'LLLN. Sastry', 'Lawyer', 'L. Annapoorna', 'House wife', '1', '1'),
('CA7928272613315', 'R. Vaman rao', 'Retired employee', 'R. Savitha', 'Superintendent for ministrial staff', '1', ''),
('CA7935211162416', 'Chivukula perubhotlu', '', 'CH. Suvarchala', 'House wife', '', '2'),
('CA7994131175812', 'A. Srinivas', 'lecturer', 'A. Kalaradha', 'lecturer', '', '1'),
('CA8296261296768', 'M. Sri ram', 'Private employee', 'M. Satya priya', 'House wife', '1', '1'),
('CA8465651172775', 'T. Satyanarayana prasad', 'Govt teacher', 'T. Sudha', 'lecturer', '1', ''),
('CA8482953799317', 'CH. Suryanarayana murthy', 'Retired employee', 'CH. Raja Rajeshwaja', 'House wife', '', '2'),
('CA8485543295572', '', '', 'V. Sita lakshmi', '', '1', ''),
('CA8628242812631', 'Dr. R. Narashimam', 'Doctor', 'R. Nagamani', 'House wife', '1', '2'),
('CA8761615429762', 'Shiva prasad', 'Retired employee', 'Ramani', 'House wife', '', '1'),
('CA9445232779294', 'T.Suryanarayana', 'Retired employee', 'Mahalakshmi', 'House wife', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `profile_brahmin_preferences`
--

CREATE TABLE IF NOT EXISTS `profile_brahmin_preferences` (
  `account_Id` varchar(15) NOT NULL,
  `exp_highDegree` varchar(60) NOT NULL,
  `exp_occupation` varchar(60) NOT NULL,
  `exp_occType` varchar(60) NOT NULL,
  `exp_motherTongue` varchar(15) NOT NULL,
  `exp_living_status` varchar(20) NOT NULL,
  PRIMARY KEY (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_brahmin_preferences`
--

INSERT INTO `profile_brahmin_preferences` (`account_Id`, `exp_highDegree`, `exp_occupation`, `exp_occType`, `exp_motherTongue`, `exp_living_status`) VALUES
('CA1218751586147', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer ', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA1821625518261', 'B-TECH / CA', 'Software engineer', 'Private Company', 'Telugu', 'Living in India'),
('CA2236428372158', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA2495945963999', 'Btech', 'Software engineer', 'Private Company', 'Telugu', 'Living in India'),
('CA2613864564948', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA2693899939725', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer ', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA2936878582798', 'B-TECH / M-TECH', 'Software engineer', 'Private Company', 'Telugu', 'Living in India'),
('CA2951796763315', 'B-TECH ', 'Software engineer', 'Private Company', 'Telugu', 'Living in India'),
('CA3674777414977', 'MS and above', 'Software engineer', 'Private Company', 'Telugu', 'Living in Abroad'),
('CA4131974324277', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA4172848683513', 'B-TECH / M-TECH / MCA / MBA', 'Software engineer govt. jobs', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA4367628234255', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA5184632772399', 'B-TECH / M-TECH', 'Software engineer', 'Private Company', 'Telugu', 'Living in India'),
('CA5395669319997', 'GRADUATE,POST GRADUATE', 'NO NEED TO WORK', 'None of the Above', 'Telugu', 'Living in India'),
('CA5611248492335', ' M-TECH', 'Software engineer', 'Private Company', 'Telugu', 'Living in India'),
('CA5814825536174', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA5828423896872', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA6186255512876', 'GRADUATE', 'Private employee', 'Private Company', 'Telugu', 'Living in India'),
('CA7532164938417', 'B-TECH / M-TECH / MCA / MBA', 'Software engineer', 'Private Company', 'Telugu', 'Living in India'),
('CA7538746949171', 'B-TECH / M-TECH / MCA  MBA', 'Software engineer, Govt. emplopyee', 'Private Company', 'Telugu', 'Living in India'),
('CA7746183883121', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA7928272613315', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA7935211162416', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA7994131175812', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer ', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA8296261296768', 'MBBS / MD / BHMS', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA8465651172775', 'B-TECH / M-TECH / MS', ' Govt. emplopyee / Software engineer ', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA8482953799317', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA8485543295572', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA8628242812631', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA8761615429762', 'B-TECH / M-TECH / MCA / MBA', 'Software engineer', 'Government / Public Secto', 'Telugu', 'Living in India'),
('CA9445232779294', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer / Doctor', 'Government / Public Secto', 'Telugu', 'Living in India');

-- --------------------------------------------------------

--
-- Table structure for table `profile_brahmin_views`
--

CREATE TABLE IF NOT EXISTS `profile_brahmin_views` (
  `view_Id` varchar(15) NOT NULL,
  `mob_code` varchar(5) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `user_Id` varchar(15) NOT NULL,
  `account_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`view_Id`),
  KEY `account_Id` (`mob_code`),
  KEY `useer_Id` (`user_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts_auth`
--

CREATE TABLE IF NOT EXISTS `user_accounts_auth` (
  `account_Id` int(11) NOT NULL AUTO_INCREMENT,
  `mob_code` varchar(5) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mob_val` varchar(1) NOT NULL,
  `surName` varchar(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `acc_pwd` varchar(100) NOT NULL,
  `q1` int(11) NOT NULL,
  `a1` varchar(60) NOT NULL,
  `q2` int(11) NOT NULL,
  `a2` varchar(60) NOT NULL,
  `q3` int(11) NOT NULL,
  `a3` varchar(60) NOT NULL,
  `acc_active` varchar(1) NOT NULL,
  PRIMARY KEY (`account_Id`),
  KEY `q1` (`q1`),
  KEY `q2` (`q2`),
  KEY `q3` (`q3`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `user_accounts_auth`
--

INSERT INTO `user_accounts_auth` (`account_Id`, `mob_code`, `mobile`, `mob_val`, `surName`, `name`, `gender`, `acc_pwd`, `q1`, `a1`, `q2`, `a2`, `q3`, `a3`, `acc_active`) VALUES
(2, '+1', 'AR37139692', 'Y', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, '', 2, '', 3, '', ''),
(3, 'passw', 'AR37139692', 'Y', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, '', 2, '', 3, '', ''),
(4, 'passw', 'AR37139692', 'Y', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, '', 2, '', 3, '', ''),
(5, 'passw', 'AR37139692', 'Y', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, '', 2, '', 3, '', 'a'),
(6, 'passw', 'AR37139692', 'Y', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, '', 2, '', 3, '', 'Y'),
(7, '+91', '9160869337', 'Y', 'Nellutla', 'L N Rao', 'MALE', 'cc09745c464ebe35057d019a9778345f', 1, 'dwed', 2, 'wdwe', 3, 'wdwd', 'Y'),
(8, '+91', '', 'Y', 'qwf', 'fwefw', 'MALE', '28b8822eafc1e58a8d0d7972197bf2b2', 1, 'wefwe', 3, 'efwefwe', 4, 'wefwefwe', 'Y'),
(9, '+91', '', 'Y', 'wfwefew', 'fewfew', 'MALE', 'fdb21855522565271fd52fcf55f73a05', 1, 'ewfwe', 2, 'wedq', 4, 'ewffwewe', 'Y'),
(10, '+91', '', 'Y', 'Nellutla', 'L N Rao', 'MALE', '553501692703f81e92ba2df8ddeee012', 2, 'ssdwefew', 1, 'wefwe', 3, 'wefwe', 'Y'),
(11, '+91', '', 'Y', 'afa', 'sse', 'MALE', '5e0542f964858f96ae7194fb2a7dd365', 1, 'efwefwe', 4, 'fwrwefwr', 7, 'wrw44', 'Y'),
(12, '+91', '', 'Y', 'Nellutla', 'L N Rao', 'MALE', '07f5796330e5f5353e4b329b21d6677b', 1, '12345', 2, '2e232', 3, '232432', 'Y'),
(13, '+91', '', 'Y', 'dsfr', 'efr', 'MALE', 'b7faaa73a366df03fe46883927de4ad9', 1, 'fwerw', 2, 'wqwqew', 8, 'eqe3', 'Y'),
(14, '+91', '', 'Y', 'Anup', 'Chakravarthi', 'MALE', '2baddf737dc4ee3af3cf1aeefe64f8ca', 1, 'Dish', 2, 'India', 3, 'I am', 'Y'),
(15, '+91', '', 'Y', 'qwwe', '34t54``', 'MALE', 'ac1d2d940cacadb1a60dd79fc6684922', 1, 'WWEWFWE', 3, 'WWED', 2, 'W22', 'Y'),
(16, '+91', '9169869337', 'Y', 'QWERT', 'SAFDD', 'MALE', '63157ec36ea28fc3c65ddcd4067e6b11', 1, 'Pulihora', 3, 'Dosa', 2, 'India', 'Y'),
(22, '+91', '9666555444', 'Y', 'Nellutla', 'L N Rao', 'MALE', '25d55ad283aa400af464c76d713c07ad', 1, 'Pulihora', 12, 'Tiger Shroff', 26, 'Jaquar', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts_sq`
--

CREATE TABLE IF NOT EXISTS `user_accounts_sq` (
  `sQ_Id` int(11) NOT NULL AUTO_INCREMENT,
  `sQ` varchar(100) NOT NULL,
  PRIMARY KEY (`sQ_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `user_accounts_sq`
--

INSERT INTO `user_accounts_sq` (`sQ_Id`, `sQ`) VALUES
(1, 'Which is your favourite food?'),
(2, 'Which is your dream country, you would like to visit?'),
(3, 'Who is your favourite Teacher?'),
(4, 'Which is your favourite Car?'),
(5, 'At which place, you were born?'),
(6, 'What is your favourite Movie?'),
(7, 'What is your favourite Color?'),
(8, 'What is your Mother Surname?'),
(9, 'Who is your favourite actor, musician or artist?'),
(10, 'What is your favourite pet Animal?'),
(11, 'What is the name of the Bank, you opened saving Account for the first time?'),
(12, 'Who is your favourite Actor?'),
(13, 'In which year, you bought your New Car?'),
(14, 'In which month, you have born?'),
(15, 'What is your favourite Game?'),
(16, 'Who is your Childhood''s Best Friend?'),
(17, 'Where you do shopping mostly in online?'),
(18, 'What is your all time favourite Song?'),
(19, 'Mention a significant Date in your life (YYYYMMDD)'),
(20, 'What is your favourite TV Show?'),
(21, 'What is your favourite flavour of ice-cream?'),
(22, 'What is the name of the politician for the first time, you refuse to vote?'),
(23, 'Who is your favourite Actress?'),
(24, 'Which is your favourite place for vacation?'),
(25, 'What''s your dream Job?'),
(26, 'What is the name of your first Car?'),
(27, 'Which is your favourite Costume?'),
(28, 'If you won a million dollars, what could you purchase?'),
(29, 'In which year, you bought your New Bike?'),
(30, 'What was the name of your first pet?');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `match_cart`
--
ALTER TABLE `match_cart`
  ADD CONSTRAINT `match_cart_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `profile_brahmin_account` (`account_Id`);

--
-- Constraints for table `match_fav`
--
ALTER TABLE `match_fav`
  ADD CONSTRAINT `match_fav_ibfk_2` FOREIGN KEY (`favProfile_Id`) REFERENCES `profile_brahmin_account` (`account_Id`);

--
-- Constraints for table `match_list`
--
ALTER TABLE `match_list`
  ADD CONSTRAINT `match_list_ibfk_1` FOREIGN KEY (`maleUserId`) REFERENCES `profile_brahmin_account` (`account_Id`),
  ADD CONSTRAINT `match_list_ibfk_2` FOREIGN KEY (`femaleUserId`) REFERENCES `profile_brahmin_account` (`account_Id`);

--
-- Constraints for table `pancha_table2`
--
ALTER TABLE `pancha_table2`
  ADD CONSTRAINT `pancha_table2_ibfk_1` FOREIGN KEY (`apply`) REFERENCES `pancha_table2_const` (`mon`);

--
-- Constraints for table `profile_brahmin_birth`
--
ALTER TABLE `profile_brahmin_birth`
  ADD CONSTRAINT `profile_brahmin_birth_ibfk_1` FOREIGN KEY (`account_Id`) REFERENCES `profile_brahmin_account` (`account_Id`);

--
-- Constraints for table `profile_brahmin_contact`
--
ALTER TABLE `profile_brahmin_contact`
  ADD CONSTRAINT `profile_brahmin_contact_ibfk_1` FOREIGN KEY (`account_Id`) REFERENCES `profile_brahmin_account` (`account_Id`);

--
-- Constraints for table `profile_brahmin_family`
--
ALTER TABLE `profile_brahmin_family`
  ADD CONSTRAINT `profile_brahmin_family_ibfk_1` FOREIGN KEY (`account_Id`) REFERENCES `profile_brahmin_account` (`account_Id`);

--
-- Constraints for table `profile_brahmin_preferences`
--
ALTER TABLE `profile_brahmin_preferences`
  ADD CONSTRAINT `profile_brahmin_preferences_ibfk_1` FOREIGN KEY (`account_Id`) REFERENCES `profile_brahmin_account` (`account_Id`);

--
-- Constraints for table `profile_brahmin_views`
--
ALTER TABLE `profile_brahmin_views`
  ADD CONSTRAINT `profile_brahmin_views_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `profile_brahmin_account` (`account_Id`);

--
-- Constraints for table `user_accounts_auth`
--
ALTER TABLE `user_accounts_auth`
  ADD CONSTRAINT `user_accounts_auth_ibfk_1` FOREIGN KEY (`q1`) REFERENCES `user_accounts_sq` (`sQ_Id`),
  ADD CONSTRAINT `user_accounts_auth_ibfk_2` FOREIGN KEY (`q2`) REFERENCES `user_accounts_sq` (`sQ_Id`),
  ADD CONSTRAINT `user_accounts_auth_ibfk_3` FOREIGN KEY (`q3`) REFERENCES `user_accounts_sq` (`sQ_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
