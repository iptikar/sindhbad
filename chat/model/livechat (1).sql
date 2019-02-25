-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2018 at 11:32 PM
-- Server version: 5.5.60-0ubuntu0.14.04.1
-- PHP Version: 7.0.30-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `livechat`
--

CREATE TABLE IF NOT EXISTS `livechat` (
  `id` int(13) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `fingerprint` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `chat_date` datetime NOT NULL,
  `phpsessid` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livechat`
--

INSERT INTO `livechat` (`id`, `sender`, `receiver`, `fingerprint`, `message`, `chat_date`, `phpsessid`) VALUES
(0, '1009294932', 'server', '1009294932', 'Really bed', '2018-07-01 22:58:27', '167ibq6j6viqihgbs755o9hcq3'),
(0, 'server', '1009294932', '1009294932', 'i dont understand', '2018-07-01 16:58:40', ''),
(0, '1009294932', 'server', '1009294932', 'really bed', '2018-07-01 22:59:43', '167ibq6j6viqihgbs755o9hcq3'),
(0, 'server', '1009294932', '1009294932', 'no exactly', '2018-07-01 16:59:55', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
