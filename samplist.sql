-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?06 �?14 �?18:43
-- 服务器版本: 5.5.40
-- PHP 版本: 5.6.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `samplist`
--

-- --------------------------------------------------------

--
-- 表的结构 `servers`
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
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `servers`
--

INSERT INTO `servers` (`ID`, `IP`, `PORT`, `NAME`, `GAMEMODE`, `PCURRENT`, `RATE`, `PMAX`, `LASTCK`) VALUES
(1, 'justnowmovie.ddns.net', 7777, '', '', 0, 0, 0, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
