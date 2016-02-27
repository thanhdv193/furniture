/*
Navicat MySQL Data Transfer

Source Server         : home
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-02-27 19:20:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for banner_slide
-- ----------------------------
DROP TABLE IF EXISTS `banner_slide`;
CREATE TABLE `banner_slide` (
  `banner_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  `sort_order` int(11) DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `active` tinyint(4) DEFAULT '1',
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
