/*
Navicat MySQL Data Transfer

Source Server         : lod
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : bahk

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-07-18 17:10:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ba_admin
-- ----------------------------
DROP TABLE IF EXISTS `ba_admin`;
CREATE TABLE `ba_admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ba_admin
-- ----------------------------
INSERT INTO `ba_admin` VALUES ('0', 'ranck', 'admin');

-- ----------------------------
-- Table structure for ba_article
-- ----------------------------
DROP TABLE IF EXISTS `ba_article`;
CREATE TABLE `ba_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `text` text,
  `views` int(11) unsigned zerofill DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ba_article
-- ----------------------------

-- ----------------------------
-- Table structure for ba_blacklist
-- ----------------------------
DROP TABLE IF EXISTS `ba_blacklist`;
CREATE TABLE `ba_blacklist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blackid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ba_blacklist
-- ----------------------------

-- ----------------------------
-- Table structure for ba_commit
-- ----------------------------
DROP TABLE IF EXISTS `ba_commit`;
CREATE TABLE `ba_commit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `text` text NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ba_commit
-- ----------------------------

-- ----------------------------
-- Table structure for ba_commit_article
-- ----------------------------
DROP TABLE IF EXISTS `ba_commit_article`;
CREATE TABLE `ba_commit_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commitid` int(11) DEFAULT NULL,
  `articleid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ba_commit_article
-- ----------------------------
