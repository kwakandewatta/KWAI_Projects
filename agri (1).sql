-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2020 at 03:44 PM
-- Server version: 5.6.35-1+deb.sury.org~trusty+0.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
  `bid` int(11) NOT NULL,
  `lotid` int(11) NOT NULL,
  `bprice` decimal(10,0) NOT NULL,
  `bdate` date NOT NULL,
  `bqty` double NOT NULL,
  `bstatus` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  PRIMARY KEY (`bid`,`lotid`),
  KEY `lotid` (`lotid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`bid`, `lotid`, `bprice`, `bdate`, `bqty`, `bstatus`) VALUES
(1, 1, 90, '2020-12-30', 800, 'Pending'),
(2, 1, 88, '2020-12-30', 1000, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `btype`
--

CREATE TABLE IF NOT EXISTS `btype` (
  `btid` int(11) NOT NULL AUTO_INCREMENT,
  `btype` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  PRIMARY KEY (`btid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `btype`
--

INSERT INTO `btype` (`btid`, `btype`) VALUES
(1, 'Wholesale'),
(2, 'Retail');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `bcity` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `bcontact` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `btid` int(11) NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `buyer_ibfk_1` (`btid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`bid`, `bname`, `bcity`, `bcontact`, `btid`) VALUES
(1, 'Saman', 'Padukka', '0713008883', 1),
(2, 'Nimal', 'Godagama', '0713009993', 2),
(3, 'Soma', 'Padukka', '0713008882', 1),
(4, 'Gerad', 'Godagama', '0713009992', 2);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `fcity` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `fcontact` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fid`, `fname`, `fcity`, `fcontact`) VALUES
(1, 'Samana', 'Padukka', '0713008880'),
(2, 'Nimala', 'Godagama', '0713009990'),
(3, 'Somalatha', 'Padukka', '0713008889'),
(4, 'Gerad Butler', 'Godagama', '0713009999');

-- --------------------------------------------------------

--
-- Table structure for table `harvest`
--

CREATE TABLE IF NOT EXISTS `harvest` (
  `lotid` int(11) NOT NULL AUTO_INCREMENT,
  `pprice` decimal(10,0) NOT NULL COMMENT 'Minimum bid price',
  `qty` double NOT NULL,
  `pdate` date NOT NULL,
  `bb4` date NOT NULL COMMENT 'Bid before',
  `iid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  PRIMARY KEY (`lotid`),
  KEY `harvest_ibfk_2` (`fid`),
  KEY `harvest_ibfk_1` (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `harvest`
--

INSERT INTO `harvest` (`lotid`, `pprice`, `qty`, `pdate`, `bb4`, `iid`, `fid`) VALUES
(1, 80, 1000, '2020-12-30', '2021-01-01', 1, 1),
(2, 100, 1200, '2020-12-30', '2021-01-02', 2, 2),
(3, 95, 500, '2020-12-30', '2021-01-01', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `htype`
--

CREATE TABLE IF NOT EXISTS `htype` (
  `htid` int(11) NOT NULL AUTO_INCREMENT,
  `htdesc` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  PRIMARY KEY (`htid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `htype`
--

INSERT INTO `htype` (`htid`, `htdesc`) VALUES
(1, 'Vegetable'),
(2, 'Fruit');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `idesc` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `htid` int(11) DEFAULT NULL,
  PRIMARY KEY (`iid`),
  KEY `item_ibfk_1` (`htid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`iid`, `idesc`, `htid`) VALUES
(1, 'Carrot', 1),
(2, 'Beans', 1),
(3, 'Mango', 2),
(4, 'Banana', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `buyer` (`bid`),
  ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`lotid`) REFERENCES `harvest` (`lotid`);

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`btid`) REFERENCES `btype` (`btid`);

--
-- Constraints for table `harvest`
--
ALTER TABLE `harvest`
  ADD CONSTRAINT `harvest_ibfk_1` FOREIGN KEY (`iid`) REFERENCES `item` (`iid`),
  ADD CONSTRAINT `harvest_ibfk_2` FOREIGN KEY (`fid`) REFERENCES `farmer` (`fid`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`htid`) REFERENCES `htype` (`htid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
