/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-02-18 13:36:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_group_id` int(11) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `olink` varchar(250) DEFAULT NULL,
  `olink2` varchar(250) DEFAULT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `seo_title` varchar(500) DEFAULT NULL,
  `seo_keyword` varchar(500) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `seo_photo_alt` varchar(250) DEFAULT NULL,
  `is_hethang` tinyint(1) DEFAULT '0',
  `is_new` tinyint(1) DEFAULT '0',
  `is_top` tinyint(1) DEFAULT '0',
  `create_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `discount` float DEFAULT '0',
  `discount_bonus` varchar(250) DEFAULT NULL,
  `price` float NOT NULL DEFAULT '0',
  `time_left` bigint(20) DEFAULT '0',
  `z_index` int(11) DEFAULT '0',
  `code_product` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `origin` varchar(250) DEFAULT NULL,
  `tags` text,
  `old_price` float DEFAULT NULL,
  `quantity_current` int(10) DEFAULT NULL,
  `view_count` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3722 DEFAULT CHARSET=utf8;
