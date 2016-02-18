/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-02-18 13:13:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product_category
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `description` text,
  `link` varchar(250) DEFAULT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '0',
  `is_menu` tinyint(1) NOT NULL DEFAULT '0',
  `z_index` int(11) NOT NULL,
  `olink` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_description` varchar(250) DEFAULT NULL,
  `seo_keyword` varchar(250) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `create_date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
