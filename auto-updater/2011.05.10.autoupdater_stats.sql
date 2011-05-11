-- phpMyAdmin SQL Dump
-- version 2.11.9.6
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 10, 2011 at 08:38 PM
-- Server version: 5.0.77
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tomchapindotmedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `autoupdater_stats`
--

CREATE TABLE IF NOT EXISTS `autoupdater_stats` (
  `userscripts_id` int(16) NOT NULL,
  `script_name` varchar(255) default NULL,
  `downloads` int(16) NOT NULL default '0',
  PRIMARY KEY  (`userscripts_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
