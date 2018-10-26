-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2018 at 09:28 AM
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
  `living_status` varchar(20) NOT NULL,
  PRIMARY KEY (`account_Id`),
  KEY `account_Id` (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`account_Id`, `surName`, `name`, `gender`, `motherTongue`, `status`, `ft_hgt`, `inch_hgt`, `highDegree`, `occupation`, `occType`, `living_status`) VALUES
('CA1121359175732', 'Talluri', 'Naga sai lakshmi sravya', 'Female', 'Telugu', 'UnMarried', '5', '3', 'B-TECH ', 'Software engineer', 'Private Company', 'Living in India'),
('CA1218751586147', 'Durvasula', 'Rakesh', 'Male', 'Telugu', 'UnMarried', '5', '9', 'B-TECH ', 'Software engineer', 'Private Company', 'Living in India'),
('CA1821625518261', 'Gunturi', 'Sai anasuya sravani', 'Female', 'Telugu', 'UnMarried', '5', '2', 'LLB, COMPANY SECRETARIES OF INDIA', 'Senior executive apollo group', 'Private Company', 'Living in India'),
('CA2236428372158', 'Devarapally', 'Sri Harsha', 'Male', 'Telugu', 'UnMarried', '5', '7', 'MSC multimedia', 'Web designer', 'Private Company', 'Living in India'),
('CA2495945963999', 'Nellutla ', 'Venkata Kishore ', 'Male', 'Telugu', 'UnMarried', '5', '11', 'Btech', 'Software engineer ', 'Private Company', 'Living in India'),
('CA2613864564948', 'Tadikonda', 'Naga mallikarjun', 'Male', 'Telugu', 'UnMarried', '5', '5', 'B. COM, MBA', 'Manager ICICI', 'Private Company', 'Living in India'),
('CA2693899939725', 'Telakapally', 'Vinod kumar', 'Male', 'Telugu', 'UnMarried', '5', '11', 'MCA', '-', 'None of the Above', 'Living in India'),
('CA2936878582798', 'Sanidanam', 'NV. Lakshmi divya', 'Female', 'Telugu', 'UnMarried', '5', '3', 'MSC Organic chemistry', 'Private employee', 'Private Company', 'Living in India'),
('CA2951796763315', 'Medoori', 'Venkatanagavalli prameela', 'Female', 'Telugu', 'UnMarried', '5', '5', ' M-TECH', 'Software engineer', 'Private Company', 'Living in India'),
('CA3674777414977', 'Kandiraju', 'Anvitha', 'Female', 'Telugu', 'UnMarried', '5', '4', 'B-TECH MS [US]', 'Private employee', 'Private Company', 'Living in Abroad'),
('CA4131974324277', 'Mallela', 'Srikanth', 'Male', 'Telugu', 'UnMarried', '5', '10', 'MCA', 'Project manager', 'Private Company', 'Living in India'),
('CA4172848683513', 'Vavilala', 'Bhargavi', 'Female', 'Telugu', 'UnMarried', '5', '5', 'B-TECH ', 'Network specialist [ amazon ]', 'Private Company', 'Living in India'),
('CA4367628234255', 'Vutukur', 'Arun', 'Male', 'Telugu', 'UnMarried', '5', '9', 'B-TECH ECE', 'Software engineer', 'Private Company', 'Living in India'),
('CA5184632772399', 'Parimi', 'Sowjanya', 'Female', 'Telugu', 'UnMarried', '5', '2', 'B-TECH ', 'Software engineer', 'Private Company', 'Living in India'),
('CA5395669319997', 'Kidambi', 'KARTHEEK', 'Male', 'Telugu', 'UnMarried', '5', '10', 'M SC PHYSICS. B ed', 'POWROHITHYAM', 'None of the Above', 'Living in India'),
('CA5611248492335', 'Chodavarapu', 'Himaja', 'Female', 'Telugu', 'UnMarried', '5', '', 'B-TECH ', 'Software engineer', 'Private Company', 'Living in India'),
('CA5814825536174', 'Rallabhandi', 'VN. Sastry', 'Male', 'Telugu', 'UnMarried', '5', '5', 'B. COM, BL', 'Advocate', 'Private Company', 'Living in India'),
('CA5828423896872', 'Sundaragiri', 'Santosh kumar', 'Male', 'Telugu', 'UnMarried', '6', '', 'CA', 'Auditor manager, TATA projects', 'Private Company', 'Living in India'),
('CA6186255512876', 'Prahararaju', 'SIRISH', 'Male', 'Telugu', 'UnMarried', '5', '5', 'B. COM DIPLOMA IN MULTIMEDIA', 'Contract inwriter PAYTM', 'Private Company', 'Living in India'),
('CA7532164938417', 'Edumudi', 'Venkata naga neela', 'Female', 'Telugu', 'UnMarried', '5', '1', 'B-TECH ECE', 'Tech support', 'Private Company', 'Living in India'),
('CA7538746949171', 'Vempati', 'Padma haritha', 'Female', 'Telugu', 'UnMarried', '5', '', 'M. COM', 'Accountant', 'Private Company', 'Living in India'),
('CA7746183883121', 'Lanka', 'Rajnikanth', 'Male', 'Telugu', 'UnMarried', '5', '11', 'B. Com MBA', 'ICSI HR Sr.  Officer ', 'Private Company', 'Living in India'),
('CA7928272613315', 'Rampali', 'Ram pradyumna', 'Male', 'Telugu', 'UnMarried', '5', '11', 'B-TECH CSE', 'Sr. Develops technology', 'Private Company', 'Living in India'),
('CA7935211162416', 'Chivukula', 'Shivakishore', 'Male', 'Telugu', 'UnMarried', '5', '8', 'B. COM [Computors]', 'Private employee', 'Private Company', 'Living in India'),
('CA7994131175812', 'Avadhanula', 'Hari sai krishna', 'Male', 'Telugu', 'UnMarried', '5', '9', 'B-TECH, MBA, SAP', 'Software engineer', 'Private Company', 'Living in India'),
('CA8296261296768', 'Maddaly', 'Sumasree', 'Female', 'Telugu', 'UnMarried', '5', '5', 'Homeo MD [PG]', 'Doing homeo MD [PG]', 'None of the Above', 'Living in India'),
('CA8465651172775', 'Tadepalli', 'Sarada', 'Female', 'Telugu', 'UnMarried', '5', '6', 'B-TECH CSE', 'Software engineer', 'Private Company', 'Living in India'),
('CA8482953799317', 'Challa', 'Dattatreya sharma', 'Male', 'Telugu', 'UnMarried', '5', '9', 'BSC, B.COM, MCA, multimedia ', 'Web designer', 'Business / Self Employeed', 'Living in India'),
('CA8485543295572', 'Vedham', 'Krishna mohan', 'Male', 'Telugu', 'UnMarried', '5', '9', 'MSC Bio Chemistry', 'Operations manager', 'Private Company', 'Living in India'),
('CA8628242812631', 'Rallabhandi', 'Shiva kumar', 'Male', 'Telugu', 'UnMarried', '5', '6', 'MSC computors', 'Software engineer', 'Private Company', 'Living in India'),
('CA8761615429762', 'Ippagunta', 'Sudheer', 'Male', 'Telugu', 'UnMarried', '5', '7', 'B-TECH ECE', 'Software engineer', 'Private Company', 'Living in India'),
('CA9445232779294', 'Tangirala', 'Sai varaprasad', 'Male', 'Telugu', 'UnMarried', '5', '6', 'Bsc MCA', 'Adequareinfo', 'Private Company', 'Living in India');

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
  KEY `account_Id` (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_birth`
--

INSERT INTO `customer_birth` (`account_Id`, `dob`, `birthCountry`, `birthState`, `birthLocation`, `birthLocality`, `shakha`, `upashakha`, `gothram`, `raasi`, `nakshatram`) VALUES
('CA1121359175732', '1995-06-16 21:45:00', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', 'Niyogi Brahmins', 'Aruvela Niyogi', 'Srivatsa', 'Capricorn (Makara Raasi)', 'Shravana Nakshatram 1st Padam'),
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
('CA1121359175732', 'H no. 1-7-44[new] opposite chaitanya highb school, Chaitanyapuri colony, Hyuderabad', 'India', 'Telangana', 'Hyderabad', 'Malakpet', '9441263569'),
('CA1218751586147', 'D no. 2-19-58/F, Kalyanapuri, Uppal, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '9949696161'),
('CA1821625518261', 'Plot no. 1-15/1/1, Surya nagar colony, Road no. 1, Near medchal tahsil office, kapra, ECIL post, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '9032029299'),
('CA2236428372158', 'B-1215, Behind RSS Grounds, Vanasthalipuram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Malakpet', '9989346567'),
('CA2495945963999', 'Hyderabad ', 'India', 'Andhra Pradesh', 'Anakapalli', 'Yelamanchili', '9948390094'),
('CA2613864564948', '403 Sharadha appartments, street no. 6, Nallakunta, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '9885716254'),
('CA2693899939725', '6-1-89/4/B, Ganesh nagar, Mahabubnagar, Telangana', 'India', 'Telangana', 'Mahbubnagar', 'Mahbubnagar', '9989555798'),
('CA2936878582798', 'D no. 9-116, Sriram nagar, Road no. 5, Gavaracheruvu, Senivarapu peta, Eluru, Andhra pradesh', 'India', 'Andhra Pradesh', 'Eluru', 'Eluru Urban', '7702837972'),
('CA2951796763315', '82/C-16, Sachivalaya nagar, Vanasthalipuram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Khairatabad', '9666420380'),
('CA3674777414977', 'H no. 2-5-260, Nakkala guta, Hanumakonda, Warangal, Telangana', 'India', 'Telangana', 'Warangal', 'Warangal East', '9866444026'),
('CA4131974324277', 'Flat no. 57, Goutaminagar, Road no. 11, Vanasthalipuram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Malakpet', '9293172474'),
('CA4172848683513', 'Flat no. F-12, Sri sai krishna apartments, H no. 10-5/3/a/14, Masab tank, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Jubilee Hills', '8008572424'),
('CA4367628234255', 'S-2 EXT,  Satyakalya apartments,  Reekminipuri colony,  Hyderabad ', 'India', 'Telangana', 'Hyderabad', 'Sanathnagar', '8184989385'),
('CA5184632772399', 'Plot no. 18, Vimanapuri colony, Near govt. high school, Qutubullapur, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Goshamahal', '9866984278'),
('CA5395669319997', '2-23, DIGUVAMATHYAM, V&P, THAVANAMPALLI MANDAL, KOTHAPALLIMITTA, CHITTOOR DIST', 'India', 'Andhra Pradesh', 'Chittoor', 'Chittoor Urban', '9490102102'),
('CA5611248492335', 'Plot no. 86, H no. 5-4-1380/2, Narasimha rao nagar, Vanasthalipuram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Nampally', '9492528828'),
('CA5814825536174', '28-3-160/1-33, Flat no. 102, Sairam comforts, Tarakanth colony, Saradanagar, JNTU Road, ', 'India', 'Andhra Pradesh', 'Anantapur', 'Anantapur Urban', '9000249604'),
('CA5828423896872', 'H no. 7-2-214/2, Ashok colony, Flat no. 301, Sanath nagar, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Sanathnagar', '9247983615'),
('CA6186255512876', 'FLAT NO 201, 2 nd FLOOR, 12-13-308/A, KRISHNAPRIYA APARTMENTS, STREET NO 19 TARNAKA BIG BAZAR, HYDERABAD.', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '9908346445'),
('CA7532164938417', 'H no. 37-93-311/1, Plot no, 35, 4th street, Madhura nagar, near vimukthi chruch, nearedmet X roads, Secundrabad, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '9618535928'),
('CA7538746949171', 'Flat no. 304, Block 2c, Modi paramount rescidence, Shilpa nagar, Nagaram, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '9936929902'),
('CA7746183883121', 'Might 800, KPHB colony,  kukatpally,  Hyderabad ', 'India', 'Telangana', 'Hyderabad', 'Nampally', '9885989854'),
('CA7928272613315', 'Flat no. 204, Srinikethan enclave, Road no. 6, Nallakunta, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '8185002630'),
('CA7935211162416', 'FF-3, Pavansai Homes, Vijayawad, prasadampadu, Andhra pradesh, India', 'India', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada Central', '7207855325'),
('CA7994131175812', 'Flat no. 2054,Srineekethan enclave, Road no. 6, Nallakunta, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '8185002630'),
('CA8296261296768', 'Plot no. 44, H no. 27-10-5/6 Sri krishna nagar colony, RK Puram post, neredmet, Secundrabad, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Secunderabad', '9440658500'),
('CA8465651172775', 'H no. 42-3/1-95, FF1 Ayyapa towers, Raghunadha rao street, Ramakrishna puram, Vijayawada', 'India', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada Central', '9848661576'),
('CA8482953799317', 'MVP colony, Visakhapatnam, D no. 2-29-17, Sector-6', 'India', 'Andhra Pradesh', 'Visakhapatnam', 'Visakhapatnam South', '9848581550'),
('CA8485543295572', 'H no. 16-11-741/3, Flat no. 102, Lakshmi kumar, RK Heights, moosarambagh, Dilsukhnagar, Hyderabad', 'India', 'Telangana', 'Hyderabad', 'Malakpet', '9440782151'),
('CA8628242812631', '28-3-160/1-33, Flat no. 102, Sairam comforts, Tarakanth colony, Saradanagar, JNTU, Anathapur', 'India', 'Andhra Pradesh', 'Anantapur', 'Anantapur Urban', '9000249604'),
('CA8761615429762', '404 Singh nagar, Vijayawad, Andhra pradesh, India', 'India', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada Central', '9032069883'),
('CA9445232779294', 'D no. 5-61-38 G1 Varalakshmi Towers,2/18 Brodipet Guntur', 'India', 'Andhra Pradesh', 'Guntur', 'Guntur West', '9581523180');

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
('CA1121359175732', 'T. Chandra shekar', 'PF Office emoployee', 'T. Padma', ' state govt. job', '', '1'),
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
-- Table structure for table `customer_preferences`
--

CREATE TABLE IF NOT EXISTS `customer_preferences` (
  `account_Id` varchar(15) NOT NULL,
  `exp_highDegree` varchar(60) NOT NULL,
  `exp_occupation` varchar(60) NOT NULL,
  `exp_occType` varchar(25) NOT NULL,
  `exp_motherTongue` varchar(15) NOT NULL,
  `exp_living_status` varchar(20) NOT NULL,
  PRIMARY KEY (`account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_preferences`
--

INSERT INTO `customer_preferences` (`account_Id`, `exp_highDegree`, `exp_occupation`, `exp_occType`, `exp_motherTongue`, `exp_living_status`) VALUES
('CA1121359175732', 'B-TECH / M-TECH / MCA / MBA', ' Govt. emplopyee / Software engineer ', 'Government / Public Secto', 'Telugu', 'Living in India'),
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
  `user_Id` varchar(15) NOT NULL,
  `favProfile_Id` varchar(15) NOT NULL,
  `favOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fav_Id`),
  KEY `user_Id` (`user_Id`),
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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_birth`
--
ALTER TABLE `customer_birth`
  ADD CONSTRAINT `customer_birth_ibfk_1` FOREIGN KEY (`account_Id`) REFERENCES `customer_account` (`account_Id`);

--
-- Constraints for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD CONSTRAINT `customer_contact_ibfk_1` FOREIGN KEY (`account_Id`) REFERENCES `customer_account` (`account_Id`);

--
-- Constraints for table `customer_family`
--
ALTER TABLE `customer_family`
  ADD CONSTRAINT `customer_family_ibfk_1` FOREIGN KEY (`account_Id`) REFERENCES `customer_account` (`account_Id`);

--
-- Constraints for table `customer_preferences`
--
ALTER TABLE `customer_preferences`
  ADD CONSTRAINT `customer_preferences_ibfk_1` FOREIGN KEY (`account_Id`) REFERENCES `customer_account` (`account_Id`);

--
-- Constraints for table `match_cart`
--
ALTER TABLE `match_cart`
  ADD CONSTRAINT `match_cart_ibfk_2` FOREIGN KEY (`cartProfile_Id`) REFERENCES `customer_account` (`account_Id`),
  ADD CONSTRAINT `match_cart_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `customer_account` (`account_Id`);

--
-- Constraints for table `match_fav`
--
ALTER TABLE `match_fav`
  ADD CONSTRAINT `match_fav_ibfk_2` FOREIGN KEY (`favProfile_Id`) REFERENCES `customer_account` (`account_Id`),
  ADD CONSTRAINT `match_fav_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `customer_account` (`account_Id`);

--
-- Constraints for table `match_list`
--
ALTER TABLE `match_list`
  ADD CONSTRAINT `match_list_ibfk_1` FOREIGN KEY (`maleUserId`) REFERENCES `customer_account` (`account_Id`),
  ADD CONSTRAINT `match_list_ibfk_2` FOREIGN KEY (`femaleUserId`) REFERENCES `customer_account` (`account_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
