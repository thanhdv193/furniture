/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-02-23 17:21:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product_online
-- ----------------------------
DROP TABLE IF EXISTS `product_online`;
CREATE TABLE `product_online` (
  `product_id` int(11) NOT NULL,
  `event_online_id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`event_online_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
