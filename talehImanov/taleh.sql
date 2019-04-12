-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 03:58 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `menu`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `abzas`
-- 

CREATE TABLE `abzas` (
  `id` int(50) NOT NULL auto_increment,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `abzas`
-- 

INSERT INTO `abzas` VALUES (2, 'Donec at libero id lectus porta dapibus eu in nibh. Cras id mauris sapien. Fusce viverra luctus urna ac rutrum. Duis semper elit eu mi facilisis eleifend. Donec semper, ipsum in malesuada congue, purus sem ullamcorper massa, sit amet lacinia nibh enim sed massa.');

-- --------------------------------------------------------

-- 
-- Table structure for table `social`
-- 

CREATE TABLE `social` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `social`
-- 

INSERT INTO `social` VALUES (1, 'Blog');
INSERT INTO `social` VALUES (2, 'Email');
INSERT INTO `social` VALUES (3, 'Newsletter');
INSERT INTO `social` VALUES (5, 'Twitter');
INSERT INTO `social` VALUES (6, 'Instagram');
INSERT INTO `social` VALUES (7, 'Dribble');
INSERT INTO `social` VALUES (8, 'Link One');
INSERT INTO `social` VALUES (9, 'Link Two');
INSERT INTO `social` VALUES (10, 'Link Three');
