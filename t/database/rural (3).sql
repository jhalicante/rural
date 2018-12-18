-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 03:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rural`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `Account_firstname` varchar(100) NOT NULL,
  `Account_middlename` varchar(100) NOT NULL,
  `Account_lastname` varchar(100) NOT NULL,
  `Baranggay` varchar(100) NOT NULL,
  `Number` varchar(100) NOT NULL,
  `Position` enum('Admin','Captain','MNAO','Midwife','DPO','BHW','BNS') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `approval` varchar(100) NOT NULL,
  `Purok1` varchar(100) NOT NULL,
  `Purok2` varchar(100) NOT NULL,
  `Purok3` varchar(100) NOT NULL,
  `Purok4` varchar(100) NOT NULL,
  `Purok5` varchar(100) NOT NULL,
  `Purok6` varchar(100) NOT NULL,
  `Purok7` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `Account_firstname`, `Account_middlename`, `Account_lastname`, `Baranggay`, `Number`, `Position`, `username`, `password`, `approval`, `Purok1`, `Purok2`, `Purok3`, `Purok4`, `Purok5`, `Purok6`, `Purok7`) VALUES
(551, 'Johnmark', 'Hugo', 'Alicante', 'Argao', '639666775314', 'Captain', 'inhans', 'rural', 'YES', 'Marupok', 'Matibag', 'Matibay', 'Malubag', 'Malibag', 'Malobig', 'Malibiog'),
(552, 'San Juan', 'De Letran', 'Dragon', 'Argao', '639666775314', '', 'bns1', 'bns1', 'YES', '', '', '', '', '', '', ''),
(553, '', '', '', '', '', 'Admin', 'Admin', 'Admin', 'YES', '', '', '', '', '', '', ''),
(555, 'Dyna', 'Larracas', 'Montalban', 'BalanacanA', '639663783193', 'Captain', 'INHANS1544946007', 'RURAL1544946007', 'YES', '', '', '', '', '', '', ''),
(558, 'ewq', 'e', 'we', 'Banto', '639666775314', 'Captain', 'INHANS1544945956', 'RURAL1544945956', 'YES', '', '', '', '', '', '', ''),
(559, 'e', 'e', 'e', 'Argao', '639666775314', 'Captain', 'INHANS1544946017', 'RURAL1544946017', 'YES', '', '', '', '', '', '', ''),
(560, 'e', 'e', 'e', 'BalanacanB', '639666775314', 'Captain', '', '', 'NO', '', '', '', '', '', '', ''),
(561, 'Dyna', 'Larracas', 'Montalban', 'Banto', '639663783193', 'Captain', '', '', 'NO', '', '', '', '', '', '', ''),
(562, '32', '3', '3', 'DulongBayan', '639666775314', 'Captain', 'INHANS1544955287', 'RURAL1544955287', 'YES', '', '', '', '', '', '', ''),
(564, 'Dyna', 'Larracas', 'Montalban', 'Paye', '639663783193', 'MNAO', 'INHANS1544954921', 'RURAL1544954921', 'YES', '', '', '', '', '', '', ''),
(565, 'Dyna', 'Larracas', 'Montalban', 'Paye', '639666775314', 'MNAO', 'INHANS1544954916', 'RURAL1544954916', 'YES', '', '', '', '', '', '', ''),
(566, 'Bartolome', 'Diaz', 'De letran', 'BalanacanA', '12345673', '', 'BNS', 'BNS', 'YES', '', '', '', '', '', '', ''),
(567, 'Draymond', 'Green', 'Blue', 'Argao', '31231', '', 'BNS1', 'BNS1', 'YES', '', '', '', '', '', '', ''),
(568, 'Domeng', 'Sinandomeng', 'Malupet', 'Argao', '1231', '', 'DYNAAA', 'DYNAAA', 'YES', 'Purok2', '', '', '', '', '', ''),
(569, 'Dyna', 'dyna', 'dyna', 'Argao', 'dyna', '', 'dy', 'dy', 'YES', 'Matibag', '', '', '', '', '', ''),
(570, 'ewq', 'e', 'e', 'Argao', 'e', '', 'eqw', 'ewq', 'YES', 'Marupok', '', '', '', '', '', ''),
(571, 'eqw', 'e', 'e', 'Argao', 'e', 'BNS', 'e', 'e', 'YES', 'Marupok', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `animal` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `action` varchar(100) NOT NULL,
  `vaccine` date NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `first_name`, `middle_name`, `last_name`, `animal`, `date`, `action`, `vaccine`, `brgy`, `month`) VALUES
(4, 'This is a test data', 'This is a test data', 'This is a test data', 'This is a test data', '0000-00-00', 'This is a test data', '0000-00-00', 'PAYE', ''),
(5, 'This is a test data', 'This is a test data', 'This is a test data', 'This is a test data', '2017-11-11', 'This is a test data', '2013-11-12', 'PAYE', ''),
(6, 'ewq', '', '', '', '0000-00-00', '', '0000-00-00', 'PAYE', ''),
(7, 'eqw', 'wqe', 'ewqe', 'eq', '0000-00-00', 'eqwew', '0000-00-00', 'PAYE', '12');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` text NOT NULL,
  `title2` text NOT NULL,
  `title3` text NOT NULL,
  `title4` text NOT NULL,
  `title5` text NOT NULL,
  `announcement1` text NOT NULL,
  `announcement2` text NOT NULL,
  `announcement3` text NOT NULL,
  `announcement4` text NOT NULL,
  `announcement5` text NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title1`, `title2`, `title3`, `title4`, `title5`, `announcement1`, `announcement2`, `announcement3`, `announcement4`, `announcement5`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(1, 'YAYAYA', 'weqeqw', 'Trash', 'Trash', 'EWQEWQEQWEQWEQW', 'YAYAYA	', 'ewqewqeqw	', 'Trash', 'Trash', 'EWQEQWEWQEQW	', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bhw`
--

CREATE TABLE `bhw` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `bmi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `waist` varchar(100) NOT NULL,
  `whr` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bhw`
--

INSERT INTO `bhw` (`id`, `first_name`, `middle_name`, `last_name`, `age`, `height`, `weight`, `bmi`, `status`, `waist`, `whr`, `brgy`, `month`) VALUES
(79, 'eqw', 'eqw', 'eqw', 'eqw', '159', '53', 'underweight', 'Underweight', '3', '2', 'PAYE', '12'),
(80, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'PAYE', '12');

-- --------------------------------------------------------

--
-- Table structure for table `bns`
--

CREATE TABLE `bns` (
  `id` int(11) NOT NULL,
  `baranggay` varchar(100) NOT NULL,
  `bns_purok` varchar(100) NOT NULL,
  `no_of_family` int(100) NOT NULL,
  `head_firstname` varchar(100) NOT NULL,
  `head_middlename` varchar(100) NOT NULL,
  `head_lastname` varchar(100) NOT NULL,
  `head_age` varchar(100) NOT NULL,
  `member_details` varchar(100) NOT NULL,
  `dwelling_units` varchar(100) NOT NULL,
  `water_supply` varchar(100) NOT NULL,
  `electric_services` varchar(100) NOT NULL,
  `toilet` varchar(100) NOT NULL,
  `garden` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bns`
--

INSERT INTO `bns` (`id`, `baranggay`, `bns_purok`, `no_of_family`, `head_firstname`, `head_middlename`, `head_lastname`, `head_age`, `member_details`, `dwelling_units`, `water_supply`, `electric_services`, `toilet`, `garden`) VALUES
(59, 'WEW', 'Purok 2', 3, 'Ricky Michael', 'Morales', 'Oliva', '17', '', 'Semi-Concrete', 'Open Dug Well', 'Electricity', 'Artificial', 'Yes'),
(65, 'WEW', 'Purok 1', 0, '1', '1', '1', '1', '', 'Concrete', 'Open Dug Well', '', '', ''),
(69, 'WEW', 'Purok 1', 0, '', '', '', '1', '', '', '', '', '', ''),
(73, 'WEW', 'Purok 2', 3, 'ewq', '1', '1', '1', '', 'Semi-Concrete', '', '', '', ''),
(265, 'WEW', 'Purok 1', 3, 'Ricky Michael', 'Morales', 'Oliva', '17', '', 'Concrete', 'Spring', 'Telephone', 'Artificial', 'Yes'),
(519, 'WEW', 'Purok 2', 5, 'Kim Ira', 'Licos', 'Montalban', '22', '', 'Concrete', 'Spring', 'Telephone', 'Water sealed bowl', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `breastexam`
--

CREATE TABLE `breastexam` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `birth` int(100) NOT NULL,
  `date` date NOT NULL,
  `taught` varchar(100) NOT NULL,
  `finish` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breastexam`
--

INSERT INTO `breastexam` (`id`, `first_name`, `last_name`, `birth`, `date`, `taught`, `finish`, `brgy`, `month`) VALUES
(8, 'Test Data', 'Test Data', 11, '0000-00-00', '2013-10-08', '2013-10-08', 'PAYE', ''),
(9, 'Test Data', 'Test Data', 18, '0000-00-00', '2013-01-01', '2013-10-08', 'PAYE', ''),
(10, 'Test Data', 'Test Data', 12, '0000-00-00', '2014-20-12', '2014-20-11', 'PAYE', '');

-- --------------------------------------------------------

--
-- Table structure for table `brgyprofile1`
--

CREATE TABLE `brgyprofile1` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Baranggay` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `A1` varchar(100) NOT NULL,
  `A2` varchar(100) NOT NULL,
  `AA1` varchar(100) NOT NULL,
  `AA2` varchar(100) NOT NULL,
  `AA3` varchar(100) NOT NULL,
  `B1A` varchar(100) NOT NULL,
  `B1B` varchar(100) NOT NULL,
  `B1C` varchar(100) NOT NULL,
  `B1D` varchar(100) NOT NULL,
  `B1E` varchar(100) NOT NULL,
  `B2A` varchar(100) NOT NULL,
  `B2B` varchar(100) NOT NULL,
  `B2C` varchar(100) NOT NULL,
  `B2D` varchar(100) NOT NULL,
  `B2E` varchar(100) NOT NULL,
  `B3A` varchar(100) NOT NULL,
  `B3B` varchar(100) NOT NULL,
  `B3C` varchar(100) NOT NULL,
  `B3D` varchar(100) NOT NULL,
  `B3E` varchar(100) NOT NULL,
  `B3F` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brgyprofile1`
--

INSERT INTO `brgyprofile1` (`ID`, `Baranggay`, `Year`, `A1`, `A2`, `AA1`, `AA2`, `AA3`, `B1A`, `B1B`, `B1C`, `B1D`, `B1E`, `B2A`, `B2B`, `B2C`, `B2D`, `B2E`, `B3A`, `B3B`, `B3C`, `B3D`, `B3E`, `B3F`) VALUES
(13, 'paye', '', 'Within City/Poblacion', 'Plain', 'Cono', 'National (Constructed by NIA)', 'Goverment Operated', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(14, 'paye', '', 'Within City/Poblacion', 'Plain', 'Cono', 'National (Constructed by NIA)', 'Goverment Operated', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(15, 'Malayak', '', 'Within City/Poblacion', 'Plain', 'Cono', 'National (Constructed by NIA)', 'Goverment Operated', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brgyprofile2`
--

CREATE TABLE `brgyprofile2` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `SA1` varchar(100) NOT NULL,
  `SA2` varchar(100) NOT NULL,
  `SA3` varchar(100) NOT NULL,
  `SA4` varchar(100) NOT NULL,
  `SB1` varchar(100) NOT NULL,
  `SB2` varchar(100) NOT NULL,
  `SB3` varchar(100) NOT NULL,
  `SB4` varchar(100) NOT NULL,
  `SB5` varchar(100) NOT NULL,
  `SB6` varchar(100) NOT NULL,
  `SC1` varchar(100) NOT NULL,
  `SC2` varchar(100) NOT NULL,
  `SC3` varchar(100) NOT NULL,
  `SC4` varchar(100) NOT NULL,
  `SC5` varchar(100) NOT NULL,
  `SD1` varchar(100) NOT NULL,
  `SD2` varchar(100) NOT NULL,
  `SD3` varchar(100) NOT NULL,
  `SE1` varchar(100) NOT NULL,
  `SE2` varchar(100) NOT NULL,
  `SF1` varchar(100) NOT NULL,
  `SF2` varchar(100) NOT NULL,
  `SG1` varchar(100) NOT NULL,
  `SG2` varchar(100) NOT NULL,
  `SG3` varchar(100) NOT NULL,
  `SG4` varchar(100) NOT NULL,
  `SH1` varchar(100) NOT NULL,
  `SH2` varchar(100) NOT NULL,
  `SH3` varchar(100) NOT NULL,
  `SH4` varchar(100) NOT NULL,
  `SH5` varchar(100) NOT NULL,
  `SH6` varchar(100) NOT NULL,
  `SI1` varchar(100) NOT NULL,
  `SI2` varchar(100) NOT NULL,
  `SI3` varchar(100) NOT NULL,
  `SI4` varchar(100) NOT NULL,
  `SJ1` varchar(100) NOT NULL,
  `SJ2` varchar(100) NOT NULL,
  `SJ3` varchar(100) NOT NULL,
  `SJ4` varchar(100) NOT NULL,
  `SJ5` varchar(100) NOT NULL,
  `SK1` varchar(100) NOT NULL,
  `SK2` varchar(100) NOT NULL,
  `SK3` varchar(100) NOT NULL,
  `SK4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brgyprofile2`
--

INSERT INTO `brgyprofile2` (`ID`, `SA1`, `SA2`, `SA3`, `SA4`, `SB1`, `SB2`, `SB3`, `SB4`, `SB5`, `SB6`, `SC1`, `SC2`, `SC3`, `SC4`, `SC5`, `SD1`, `SD2`, `SD3`, `SE1`, `SE2`, `SF1`, `SF2`, `SG1`, `SG2`, `SG3`, `SG4`, `SH1`, `SH2`, `SH3`, `SH4`, `SH5`, `SH6`, `SI1`, `SI2`, `SI3`, `SI4`, `SJ1`, `SJ2`, `SJ3`, `SJ4`, `SJ5`, `SK1`, `SK2`, `SK3`, `SK4`) VALUES
(13, 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'yes', 'yes', 'yes', 'yes', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Pre-school', 'Pre-school', 'Barangay Health Station', 'Dental Clinic', '1', '11', '1', '1', 'NEAR', 'ALONG', 'ALONG', 'ALONG', 'ALONG', 'ALONG', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(15, '', '', '', '', '1', '2', '', '1', '1', '1', '1', '1', '1', '2', '1', '', '', '', 'Pre-school', 'Pre-school', 'Barangay Health Station', 'Dental Clinic', '', '', '', '', 'ALONG', 'ALONG', 'ALONG', 'ALONG', 'ALONG', 'ALONG', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`) VALUES
(945);

-- --------------------------------------------------------

--
-- Table structure for table `diabetese`
--

CREATE TABLE `diabetese` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diabetese`
--

INSERT INTO `diabetese` (`id`, `first_name`, `middle_name`, `last_name`, `age`, `method`, `date`, `brgy`, `month`) VALUES
(56, 'Test Data', 'Test Data', 'Test Data', 'Test Data', '', '0000-00-00', 'PAYE', ''),
(57, 'Test Data', 'Test Data', 'Test Data', 'Test Data', 'Test Data', '0000-00-00', 'PAYE', ''),
(58, 'Test Data', 'Test Data', 'Test Data', 'Test Data', 'langgam method', '0000-00-00', 'PAYE', ''),
(62, '', '', '', '', 'langgam method', '0000-00-00', 'PAYE', '');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `disease` varchar(1000) NOT NULL,
  `breathing` varchar(100) NOT NULL,
  `action` varchar(1000) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `first_name`, `middle_name`, `last_name`, `age`, `disease`, `breathing`, `action`, `brgy`, `month`) VALUES
(4, 'Test Data', 'Test Data', 'Test Data', 3, 'Test Data', 'Test Data', 'Test Data', 'PAYE', ''),
(5, 'Test Data', 'Test Data', 'Test Data', 2, 'Test Data', 'Test Data', 'Test Data', 'PAYE', '');

-- --------------------------------------------------------

--
-- Table structure for table `ecd`
--

CREATE TABLE `ecd` (
  `id` int(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecd`
--

INSERT INTO `ecd` (`id`, `last_name`, `middle_name`, `first_name`, `date`, `brgy`, `month`) VALUES
(1, 'ewq', 'ewq', 'eqw', '0000-00-00', 'PAYE', '');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `id` int(100) NOT NULL,
  `fatherfirstname` varchar(100) NOT NULL,
  `fathersurname` varchar(100) NOT NULL,
  `fatherage` int(100) NOT NULL,
  `motherfirstname` varchar(100) NOT NULL,
  `mothersurname` varchar(100) NOT NULL,
  `motherage` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`id`, `fatherfirstname`, `fathersurname`, `fatherage`, `motherfirstname`, `mothersurname`, `motherage`, `status`, `method`, `brgy`, `month`) VALUES
(8, 'Test Data', 'Test Data', 23, 'Test Data', 'Test Data', 27, 'NEW ACCEPTOR', 'PILLS', 'PAYE', ''),
(9, 'Test Data', 'Test Data', 24, 'Test Data', 'Test Data', 41, 'NEW ACCEPTOR', 'IUD', 'PAYE', ''),
(10, 'Test Data', 'Test Data', 29, 'Test Data', 'Test Data', 61, 'NEW ACCEPTOR', 'IUD', 'PAYE', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `serial` bigint(20) UNSIGNED NOT NULL,
  `id` int(100) NOT NULL,
  `member_firstname` varchar(100) NOT NULL,
  `member_middlename` varchar(100) NOT NULL,
  `member_lastname` varchar(100) NOT NULL,
  `age` varchar(190) NOT NULL,
  `member_position` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `disable` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weightstatus` varchar(100) NOT NULL,
  `dateweight` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`serial`, `id`, `member_firstname`, `member_middlename`, `member_lastname`, `age`, `member_position`, `status`, `disable`, `weight`, `height`, `weightstatus`, `dateweight`, `disability`) VALUES
(11, 519, 'Dyna Marie', 'Maano', 'Larracas', '19', 'Daughter', 'No', 'No', '', '', '', '', ''),
(12, 519, ' Camille', ' Maming', 'Montalban', ' 20', 'Mother', 'Lactating', 'No', '', '', '', '', ''),
(13, 519, 'Kate', 'Seno', 'Maapoy', '  22', 'Daughter', 'Preschool', 'No', '  61', '  158', 'Obese', '  20130212', ''),
(14, 535, ' 312', ' 312', ' 321', '  321', 'Mother', '', '', ' 157', ' 132', 'Underweight', ' 2013-04-32', '  BINGOT	');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `date` date NOT NULL,
  `blood` int(100) NOT NULL,
  `pressure` int(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`first_name`, `middle_name`, `last_name`, `age`, `date`, `blood`, `pressure`, `brgy`, `remarks`, `id`, `month`) VALUES
('Test Data', 'Test Data', 'Test Data', 0, '0000-00-00', 0, 0, 'PAYE', 'NORMAL', 47, ''),
('Test Data', 'Test Data', 'Test Data', 21, '0000-00-00', 231, 231, 'PAYE', 'HIGH BLOOD', 48, ''),
('Test Data', 'Test Data', 'Test Data', 23, '0000-00-00', 123, 523, 'PAYE', 'LOW BLOOD', 49, '');

-- --------------------------------------------------------

--
-- Table structure for table `ozekimessagein`
--

CREATE TABLE `ozekimessagein` (
  `id` int(11) NOT NULL,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT NULL,
  `msg` text,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT NULL,
  `operator` varchar(100) DEFAULT NULL,
  `msgtype` varchar(160) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ozekimessagein`
--

INSERT INTO `ozekimessagein` (`id`, `sender`, `receiver`, `msg`, `senttime`, `receivedtime`, `operator`, `msgtype`, `reference`) VALUES
(1, 'SMART', '+441234567', '2/3 Share your 200MB data to your friends & family with PASADATA! To pass your data MB just text PASADATA<space>11 DIGIT NO<space>AMOUNT<MB> to 808', '2018-12-16 01:37:41', '2018-12-16 01:40:36', 'GSMMODEM1', 'SMS:TEXT', NULL),
(2, 'SMART', '+441234567', '3/3 Ex. text PASADATA 09181234567 50MB to 808. Minimum pasa amount is 50MB. P1 charge/transaction. For more info, visit smart.com.ph/prepaid/pasadata', '2018-12-16 01:37:41', '2018-12-16 01:40:48', 'GSMMODEM1', 'SMS:TEXT', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ozekimessageout`
--

CREATE TABLE `ozekimessageout` (
  `id` int(11) NOT NULL,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT NULL,
  `msg` text,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `msgtype` varchar(160) DEFAULT NULL,
  `operator` varchar(100) DEFAULT NULL,
  `errormsg` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ozekimessageout`
--

INSERT INTO `ozekimessageout` (`id`, `sender`, `receiver`, `msg`, `senttime`, `receivedtime`, `reference`, `status`, `msgtype`, `operator`, `errormsg`) VALUES
(1, 'Rural', '09278977591', 'its now working', '2018-12-16 01:58:39', NULL, NULL, 'sent', NULL, NULL, NULL),
(2, 'Rural', '09666775314', 'its now working', '2018-12-16 02:02:36', NULL, NULL, 'sent', NULL, NULL, NULL),
(3, '09666775314', '09666775314', 'Welcome to rural.This is a free text', '2018-12-16 02:21:34', '', '', 'sent', '', '', ''),
(4, '09666775314', '09666775314', 'Testing 101', '2018-12-16 02:22:03', '', '', 'sent', '', '', ''),
(5, 'SenderName', '09666775314', 'Welcome to rurwewal.This is a free text', '2018-12-16 02:23:14', '', '', 'sent', '', '', ''),
(6, 'SenderName', '09666775314', 'Welcome to rurwewal.This is a free text', '', '', '', 'notsent', '', '', ''),
(7, 'SenderName', '639666775314', 'Testing', '2018-12-16 02:30:27', '', '', 'sent', '', '', ''),
(8, 'SenderName', '639666775314', 'Good day MNAO Mr/Ms Ricky Michael. Your Username is INHANS 1544898803 and password is INHANS 1544898803. You may now log in!', '2018-12-16 02:36:52', '', '', 'sent', '', '', ''),
(9, 'SenderName', '639666775314', 'Good day MNAO Mr/Ms Ricky Michael Your Username is INHANS 1544898909 and password is RURAL 1544898909 You may now log in!', '2018-12-16 02:35:34', '', '', 'sent', '', '', ''),
(10, 'SenderName', '639666775314', 'Good day DPO Mr/Ms Ricky Michael Your Username is INHANS 1544899182 and password is RURAL 1544899182 You may now log in!', '', '', '', 'notsent', '', '', ''),
(11, 'SenderName', '639666775314', 'Good day Captain Mr/Ms Ricky Michael Your Username is INHANS 1544899281 and password is RURAL 1544899281 You may now log in!', '2018-12-16 02:41:29', '', '', 'sent', '', '', ''),
(12, 'SenderName', '639666775314', 'Good day DPO Mr/Ms Ricky Michael Your Username is INHANS1544899362 and password is RURAL1544899362 You may now log in!', '', '', '', 'notsent', '', '', ''),
(13, 'SenderName', '639666775314', 'Good day Captain Mr/Ms eqw Your Username is INHANS1544899748 and password is RURAL1544899748 You may now log in!', '2018-12-16 02:49:19', '', '', 'sent', '', '', ''),
(14, 'SenderName', '639666775314', 'Good day! Your Username is  and password is  You may now log in!', '2018-12-16 11:20:45', '', '', 'sent', '', '', ''),
(15, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544930457 and password is RURAL1544930457 You may now log in!', '2018-12-16 11:21:05', '', '', 'sent', '', '', ''),
(16, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544930604 and password is RURAL1544930604 You may now log in!', '2018-12-16 11:23:35', '', '', 'sent', '', '', ''),
(17, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544930606 and password is RURAL1544930606 You may now log in!', '2018-12-16 11:23:40', '', '', 'sent', '', '', ''),
(18, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544930674 and password is RURAL1544930674 You may now log in!', '2018-12-16 11:24:46', '', '', 'sent', '', '', ''),
(19, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544930812 and password is RURAL1544930812 You may now log in!', '2018-12-16 11:27:07', '', '', 'sent', '', '', ''),
(20, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544930964 and password is RURAL1544930964 You may now log in!', '2018-12-16 11:29:38', '', '', 'sent', '', '', ''),
(21, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931516 and password is RURAL1544931516 You may now log in!', '2018-12-16 11:38:52', '', '', 'sent', '', '', ''),
(22, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931557 and password is RURAL1544931557 You may now log in!', '2018-12-16 11:39:32', '', '', 'sent', '', '', ''),
(23, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931591 and password is RURAL1544931591 You may now log in!', '2018-12-16 11:40:03', '', '', 'sent', '', '', ''),
(24, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931609 and password is RURAL1544931609 You may now log in!', '2018-12-16 11:40:22', '', '', 'sent', '', '', ''),
(25, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931667 and password is RURAL1544931667 You may now log in!', '2018-12-16 11:41:24', '', '', 'sent', '', '', ''),
(26, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931668 and password is RURAL1544931668 You may now log in!', '2018-12-16 11:41:28', '', '', 'sent', '', '', ''),
(27, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931669 and password is RURAL1544931669 You may now log in!', '2018-12-16 11:41:36', '', '', 'sent', '', '', ''),
(28, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931670 and password is RURAL1544931670 You may now log in!', '2018-12-16 11:41:41', '', '', 'sent', '', '', ''),
(29, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931682 and password is RURAL1544931682 You may now log in!', '2018-12-16 11:41:48', '', '', 'sent', '', '', ''),
(30, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931682 and password is RURAL1544931682 You may now log in!', '2018-12-16 11:41:53', '', '', 'sent', '', '', ''),
(31, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931683 and password is RURAL1544931683 You may now log in!', '2018-12-16 11:41:59', '', '', 'sent', '', '', ''),
(32, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931684 and password is RURAL1544931684 You may now log in!', '2018-12-16 11:42:05', '', '', 'sent', '', '', ''),
(33, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931685 and password is RURAL1544931685 You may now log in!', '2018-12-16 11:42:11', '', '', 'sent', '', '', ''),
(34, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931686 and password is RURAL1544931686 You may now log in!', '2018-12-16 11:42:17', '', '', 'sent', '', '', ''),
(35, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931686 and password is RURAL1544931686 You may now log in!', '2018-12-16 11:42:24', '', '', 'sent', '', '', ''),
(36, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931686 and password is RURAL1544931686 You may now log in!', '2018-12-16 11:42:31', '', '', 'sent', '', '', ''),
(37, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931686 and password is RURAL1544931686 You may now log in!', '2018-12-16 11:42:36', '', '', 'sent', '', '', ''),
(38, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544931702 and password is RURAL1544931702 You may now log in!', '2018-12-16 11:42:43', '', '', 'sent', '', '', ''),
(39, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544932047 and password is RURAL1544932047 You may now log in!', '2018-12-16 11:47:36', '', '', 'sent', '', '', ''),
(40, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544932052 and password is RURAL1544932052 You may now log in!', '2018-12-16 11:47:46', '', '', 'sent', '', '', ''),
(41, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544932137 and password is RURAL1544932137 You may now log in!', '2018-12-16 11:49:07', '', '', 'sent', '', '', ''),
(42, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544932215 and password is RURAL1544932215 You may now log in!', '2018-12-16 11:50:27', '', '', 'sent', '', '', ''),
(43, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544945537 and password is RURAL1544945537 You may now log in!', '2018-12-16 15:32:31', '', '', 'sent', '', '', ''),
(44, 'SenderName', '639666775314', 'Good day Captain Mr/Ms Ricky! Your Username is INHANS1544945604 and password is RURAL1544945604 You may now log in!', '2018-12-16 15:33:31', '', '', 'sent', '', '', ''),
(45, 'SenderName', '639663783193', 'Good day MNAO Dyna of Baranggay Paye! Your Username is INHANS1544945668 and password is RURAL1544945668 You may now log in!', '2018-12-16 15:34:41', '', '', 'sent', '', '', ''),
(46, 'SenderName', '639666775314', 'Good day MNAO Dyna of Baranggay Paye! Your Username is INHANS1544945680 and password is RURAL1544945680 You may now log in!', '2018-12-16 15:34:52', '', '', 'sent', '', '', ''),
(47, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544945956 and password is RURAL1544945956 You may now log in!', '2018-12-16 15:39:23', '', '', 'sent', '', '', ''),
(48, 'SenderName', '639663783193', 'Good day! Your Username is INHANS1544946007 and password is RURAL1544946007 You may now log in!', '2018-12-16 15:40:14', '', '', 'sent', '', '', ''),
(49, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544946017 and password is RURAL1544946017 You may now log in!', '2018-12-16 15:40:24', '', '', 'sent', '', '', ''),
(50, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544954916 and password is RURAL1544954916 You may now log in!', '2018-12-16 18:08:51', '', '', 'sent', '', '', ''),
(51, 'SenderName', '639663783193', 'Good day! Your Username is INHANS1544954921 and password is RURAL1544954921 You may now log in!', '2018-12-16 18:08:56', '', '', 'sent', '', '', ''),
(52, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544954925 and password is RURAL1544954925 You may now log in!', '2018-12-16 18:09:03', '', '', 'sent', '', '', ''),
(53, 'SenderName', '639666775314', 'Good day! Your Username is INHANS1544955287 and password is RURAL1544955287 You may now log in!', '2018-12-16 18:14:54', '', '', 'sent', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `purok`
--

CREATE TABLE `purok` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Purok1` varchar(100) NOT NULL,
  `Purok2` varchar(100) NOT NULL,
  `Purok3` varchar(100) NOT NULL,
  `Purok4` varchar(100) NOT NULL,
  `Purok5` varchar(100) NOT NULL,
  `Purok6` varchar(100) NOT NULL,
  `Purok7` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `redcough`
--

CREATE TABLE `redcough` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `date` date NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redcough`
--

INSERT INTO `redcough` (`id`, `first_name`, `middle_name`, `last_name`, `age`, `date`, `remarks`, `brgy`, `month`) VALUES
(31, 'Test Data', 'Test Data', 'Test Data', 21, '2017-00-02', 'POSITIVE', 'PAYE', ''),
(32, 'Test Data', 'Test Data', 'Test Data', 23, '2018-02-13', 'NEGATIVE', 'PAYE', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `bhw`
--
ALTER TABLE `bhw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breastexam`
--
ALTER TABLE `breastexam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgyprofile1`
--
ALTER TABLE `brgyprofile1`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `brgyprofile2`
--
ALTER TABLE `brgyprofile2`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `diabetese`
--
ALTER TABLE `diabetese`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecd`
--
ALTER TABLE `ecd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ozekimessagein`
--
ALTER TABLE `ozekimessagein`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ozekimessageout`
--
ALTER TABLE `ozekimessageout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `purok`
--
ALTER TABLE `purok`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `redcough`
--
ALTER TABLE `redcough`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=572;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bhw`
--
ALTER TABLE `bhw`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `breastexam`
--
ALTER TABLE `breastexam`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brgyprofile1`
--
ALTER TABLE `brgyprofile1`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brgyprofile2`
--
ALTER TABLE `brgyprofile2`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `diabetese`
--
ALTER TABLE `diabetese`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ecd`
--
ALTER TABLE `ecd`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ozekimessagein`
--
ALTER TABLE `ozekimessagein`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ozekimessageout`
--
ALTER TABLE `ozekimessageout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `purok`
--
ALTER TABLE `purok`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redcough`
--
ALTER TABLE `redcough`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
