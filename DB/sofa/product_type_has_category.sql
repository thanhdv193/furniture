/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-02-23 17:21:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product_type_has_category
-- ----------------------------
DROP TABLE IF EXISTS `product_type_has_category`;
CREATE TABLE `product_type_has_category` (
  `product_type_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `olink` varchar(500) NOT NULL,
  `z_index` int(11) NOT NULL,
  PRIMARY KEY (`product_type_id`,`product_category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
