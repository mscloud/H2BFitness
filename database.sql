-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 08:47 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--
-- --------------------------------------------------------

--
-- Table structure for table `bookedclasses`
--

DROP TABLE IF EXISTS `bookedclasses`;
CREATE TABLE IF NOT EXISTS `bookedclasses` (
  `class` varchar(15) NOT NULL,
  `memno` int(11) NOT NULL,
  `day` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  UNIQUE KEY `memno` (`memno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookedclasses`
--

INSERT INTO `bookedclasses` (`class`, `memno`, `day`, `time`) VALUES
('bodypump', 486, 'monday', 'afternoon'),
('pilates', 488, 'monday', 'morning'),
('cxworx', 586, 'tuesday', 'morning'),
('pilates', 654, 'monday', 'morning'),
('bodypump', 846, 'monday', 'afternoob'),
('kettlebells', 965, 'friday', 'morning'),
('cxworx', 3448, 'tuesday', 'afternoon'),
('kettlebells', 4656, 'wednesday', 'afternoon'),
('cxworx', 4868, 'tuesday', 'morning'),
('kettlebells', 5385, 'monday', 'evening'),
('Bodypump', 5468, 'Friday', 'Evening'),
('kettlebells', 6446, 'thursday', 'morning'),
('bodypump', 7626, 'wednesday', 'morning'),
('cxworx', 7958, 'tuesday', 'afternoon'),
('Spinning', 7968, 'Tuesday', 'Evening'),
('kettlebells', 8468, 'monday', 'evening'),
('pilates', 8852, 'thursday', 'morning'),
('pilates', 15349, 'thursday', 'morning'),
('pilates', 15946, 'thursday', 'morning'),
('CXWORX', 35785, 'Wednesday', 'Evening'),
('spinning', 45138, 'thursday', 'afternoon'),
('Spinning', 45698, 'Tuesday', 'Evening'),
('kettlebells', 46615, 'friday', 'evening'),
('kettlebells', 56865, 'thursday', 'morning'),
('kettlebells', 66835, 'monday', 'morning'),
('bodypump', 75881, 'wednesday', 'afternoob'),
('CXWORX', 78455, 'Monday', 'Morning'),
('kettlebells', 78585, 'monday', 'morning'),
('spinning', 78967, 'wednesday', 'morning'),
('pilates', 456123, 'wednesday', 'afternoon');

-- --------------------------------------------------------

--
-- Table structure for table `callback`
--

DROP TABLE IF EXISTS `callback`;
CREATE TABLE IF NOT EXISTS `callback` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phonumber` int(11) NOT NULL,
  `callback` tinyint(1) DEFAULT '0',
  UNIQUE KEY `number` (`phonumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `callback`
--

INSERT INTO `callback` (`fname`, `lname`, `phonumber`, `callback`) VALUES
('Ray', 'Walsh', 831529556, 1),
('Jimmy', 'Smith', 861597537, 0),
('Malcom', 'Hayes', 867924992, 0),
('Henry', 'McLoughlin', 879461499, 0);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `page` varchar(1) NOT NULL DEFAULT '1',
  `content` mediumtext NOT NULL,
  UNIQUE KEY `page` (`page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`page`, `content`) VALUES
('1', '<p>Welcome to Hip 2 B Fit Fitness Center! We provide an excellent environment full of support to help along your journey. We provide a wide variety of classes to suit everyone''s needs. If you have any enquires you can phone us on (01) 4565789 or request a free callback by filling out the form on the memberships page.</p> <blockquote>"I think if you exercise, your state of mind - my state of mind - is usually more at ease, ready for more mental challenges. Once I get the physical stuff out of the way it always seems like I have more calmness and better self-esteem." Stone Gossard</blockquote>'),
('2', '<p>Our memberships plans shown below are competitively priced within the gym membership market and come with a range of benefits from our state of the art facilities to the top tier trainers which you can view on the ''Trainers'' page. For a one week trial please call us or request a callback below.'),
('3', 'If you have questions or if we can help in any way please feel free to drop in and a member of staff will happily assist you or request a callback and we''ll get back to you ASAP!');

-- --------------------------------------------------------

--
-- Table structure for table `content_page`
--

DROP TABLE IF EXISTS `content_page`;
CREATE TABLE IF NOT EXISTS `content_page` (
  `pageid` int(1) NOT NULL,
  `page` varchar(15) NOT NULL,
  PRIMARY KEY (`pageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_page`
--

INSERT INTO `content_page` (`pageid`, `page`) VALUES
(1, 'Home'),
(2, 'Memberships'),
(3, 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `memberno` int(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback` mediumtext NOT NULL,
  `display` tinyint(1) DEFAULT '0',
  UNIQUE KEY `memberno` (`memberno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fname`, `lname`, `memberno`, `email`, `feedback`, `display`) VALUES
('Ted', 'Cruz', 37, 'zodiac@killer.com', 'I am the zodiac killer!', 0),
('Katie', 'Madildo', 123, 'KtMad@gmail.com', 'Couldn''t be a better gym!', 1),
('John', 'Doe', 124, 'john@john.com', 'Great gym! Highly recommended.', 1),
('Jeb', 'Bush', 486, 'Jebush@gmail.com', 'terrible gym, avoid at all costs!!!', 0),
('Al', 'Gore', 789, 'Gorey@gmail.com', 'Staff are very friendly and helpful! Great environment to work out in!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `membernumber` int(6) NOT NULL AUTO_INCREMENT,
  `membership` int(1) NOT NULL DEFAULT '1',
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `joindate` datetime NOT NULL,
  PRIMARY KEY (`membernumber`)
) ENGINE=InnoDB AUTO_INCREMENT=8976 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`membernumber`, `membership`, `fname`, `lname`, `dob`, `gender`, `mobile`, `email`, `address`, `joindate`) VALUES
(1, 1, 'Katie', 'Madildo', '1996-01-16', 'f', 852349764, 'KtMad@gmail.com', '14 Madt Artane Road', '2016-04-16 21:26:43'),
(2, 1, 'Niamh', 'Hynes', '1995-05-23', 'f', 855234975, 'niamh@gmail.com', '96 Highstreet', '2016-04-16 19:28:57'),
(3, 3, 'Clodagh', 'Ginlet', '1996-03-21', 'f', 851529556, 'Clodz@hotmail.com', '4 Lucan Road', '2016-04-16 19:31:17'),
(4, 1, 'Steve', 'Kielemon', '1985-05-23', 'm', 851529556, 'Stevek@student.gcd.ie', '27 Grove Streetd', '2016-04-16 19:32:51'),
(5, 2, 'Carl', 'Johnson', '1997-04-01', 'm', 88916479, 'Johnny@ghostmail.com', '27 Grove Street', '2016-04-16 19:33:23'),
(6, 2, 'Jeb', 'Bush', '1946-12-23', 'm', 898913458, 'jebbush@gmail.com', '1A McKinnely Road', '2016-04-16 19:33:47'),
(11, 1, 'Bernie', 'Sanders', '1806-09-08', 'm', 86188168, 'Bernie@Sanders.com', '1600 Pennsylvania Avenue', '2016-04-17 19:36:50'),
(42, 3, 'Robert', 'Grey', '1995-05-06', 'm', 831591568, 'Rob@ghostmail.com', '813 Green Drive', '2016-04-17 19:31:43'),
(59, 1, 'Danielle', 'Red', '1997-02-02', 'f', 874625293, 'DannyR@gmail.com', '428 Crumlin Road', '2016-04-17 19:30:44'),
(97, 2, 'Jamie', 'Adenuga', '1985-04-04', 'm', 862252251, 'jme@bbk.com', '109 BBK Avenue', '2016-04-17 19:36:50'),
(143, 3, 'Madison', 'Koolkid', '1999-03-08', 'f', 82257548, 'MadiK@gmail.com', '26 Canada', '2016-04-17 19:22:48'),
(168, 1, 'Philip', 'Michaels', '1997-06-22', 'm', 891562541, 'PMichaels@soundcloud.com', '107 Yute Street', '2016-04-17 19:24:43'),
(654, 1, 'Tony', 'Mulls', '1970-04-09', 'm', 89632865, 'TMullz@gmail.com', '18 Leinster House', '2016-04-17 19:33:05'),
(4935, 1, 'Jessica', 'Higgins', '1996-07-06', 'f', 896545258, 'JessyF@hotmail.com', '49 Pearse Street', '2016-04-17 19:28:30'),
(6813, 2, 'Ciara', 'Fitzpatrick', '1996-06-21', 'f', 841259556, 'CiaraH@ghostmail.com', '29 Town Road', '2016-04-17 19:29:34'),
(8975, 1, 'Donald', 'Trump', '1946-06-14', 'f', 868141986, 'DonaldJTrump@pcrikmail.com', '1600 Pennsylvania Avenue', '2016-04-17 19:26:29');

--
-- Triggers `member`
--
DROP TRIGGER IF EXISTS `date_creation`;
DELIMITER $$
CREATE TRIGGER `date_creation` BEFORE INSERT ON `member` FOR EACH ROW SET NEW.joindate = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `memID` int(1) NOT NULL,
  `Membershipname` varchar(10) NOT NULL,
  PRIMARY KEY (`memID`),
  UNIQUE KEY `memID` (`memID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`memID`, `Membershipname`) VALUES
(1, 'Monthly'),
(2, 'Yearly'),
(3, 'Discount');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`username`, `password`, `admin`) VALUES
('admin', 'password', 1),
('Daniel', 'calmedge99', 0),
('Laura', 'palesnake37', 0),
('Neil', 'ickyraccoon63', 0),
('Sue', 'zanyhippo76', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
