-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2018 at 02:25 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

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
  `residency` varchar(25) NOT NULL,
  PRIMARY KEY (`account_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_account`
--


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
  PRIMARY KEY (`account_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_birth`
--


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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_contact`
--


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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_family`
--


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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_preferences`
--

