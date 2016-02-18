/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-02-18 13:13:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product_type
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text,
  `link` varchar(250) DEFAULT NULL,
  `z_index` int(11) NOT NULL DEFAULT '0',
  `is_menu` tinyint(1) DEFAULT '0',
  `olink` varchar(250) DEFAULT NULL,
  `create_date` int(10) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;
