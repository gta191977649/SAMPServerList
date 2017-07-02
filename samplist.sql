-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2017 at 12:07 PM
-- Server version: 5.5.40
-- PHP Version: 5.6.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `samplist`
--

-- --------------------------------------------------------

--
-- Table structure for table `serverlogs`
--

CREATE TABLE IF NOT EXISTS `serverlogs` (
  `ID` int(11) NOT NULL,
  `TIME` date NOT NULL,
  `PLAYER` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE IF NOT EXISTS `servers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` text NOT NULL,
  `PORT` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `GAMEMODE` text NOT NULL,
  `PCURRENT` int(11) NOT NULL,
  `RATE` int(2) NOT NULL,
  `PMAX` int(11) NOT NULL,
  `LASTCK` datetime NOT NULL,
  `SYNSTATE` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`ID`, `IP`, `PORT`, `NAME`, `GAMEMODE`, `PCURRENT`, `RATE`, `PMAX`, `LASTCK`, `SYNSTATE`) VALUES
(1, 'justnowmovie.ddns.net', 7777, '★拍摄现场★ - [v2.7.7]', 'SB小学生欢乐斗~', 9, 0, 0, '2017-07-01 21:21:07', 1),
(2, 'xdbgp.mcitygame.com', 7777, '星河游戏社区-新未来世界o(*￣▽￣*)ブ', '自由/赛车/特技/拍摄', 0, 0, 0, '2017-07-01 21:17:09', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
