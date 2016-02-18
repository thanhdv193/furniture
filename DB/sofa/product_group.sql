/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-02-18 13:13:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product_group
-- ----------------------------
DROP TABLE IF EXISTS `product_group`;
CREATE TABLE `product_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `z_index` int(11) DEFAULT NULL,
  `create_date` int(10) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
