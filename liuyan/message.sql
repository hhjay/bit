-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 10 月 08 日 10:20
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `message`
--
CREATE DATABASE IF NOT EXISTS `message` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `message`;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` tinytext,
  `main` text,
  `mail` tinytext,
  `time` int(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `author`, `main`, `mail`, `time`) VALUES
(1, 'a', 'a', 'a', 1405220696),
(2, 'saasdsd', 'aaaaa', 'aaaa', 1405220995),
(3, 'saasdsd', 'aaaaa', 'aaaa', 1405221042),
(4, 'saasdsd', 'aaaaa', 'aaaa', 1405221095),
(5, 'saasdsd', 'aaaaa', 'aaaa', 1405221147),
(6, 'adsad', 'asfddsfsdf', 'asdasfd', 1405221222),
(7, '', '', 'f', 1405221539),
(8, 'a', 'asddda', '', 1405228457),
(9, 'a', 'asddda', '', 1405228493),
(10, 'asdasd', 'asdadsad', 'a@a.com', 1405228503),
(11, 'asdasd', 'asfdasfasdfasd', 'a@a.com', 1405228522),
(12, 'asdad', 'asfdasd', 'a@a.com', 1405228527),
(13, 'asdasda', 'asdasdad', 'aa@a.com', 1405228532),
(14, 'asdasda', 'asdasdad', 'aa@a.com', 1405228583),
(15, 'asdasda', 'asdasdad', 'aa@a.com', 1405228647),
(16, 'å•Šå“ˆå“ˆåˆ°', 'ajkshdjashdlkasdlsnd', 'a@a.com', 1405236519),
(17, 'asdasd', 'asdasdé˜¿å¤§å£°é“', 'a@asd.com', 1405236545),
(18, 'asdasd', 'asdasdé˜¿å¤§å£°é“', 'a@asd.com', 1405236600),
(19, 'lll', 'æˆ‘å±…ç„¶ä¸æ˜¯ç¬¬ä¸€ä¸ªç”¨æˆ·\r\nï¼Œtmd', 'l@a.com', 1405253104),
(20, 'asdasdaaaaa', 'ggggggggggggggggggggggggggggg', 'aa@a.com', 1405254972),
(21, 'ahhhhhh', 'afsdsdfsdgfhfhdfdfd', 'h@q.com', 1405577144),
(22, 'assasadadad', 'asdadadadadadasd', 'asdadad@qq.com', 1411988904);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
