/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-02-18 16:17:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product_photo
-- ----------------------------
DROP TABLE IF EXISTS `product_photo`;
CREATE TABLE `product_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `z_index` int(11) DEFAULT NULL,
  `create_date` int(10) DEFAULT NULL,
  `image_path` varchar(250) DEFAULT NULL,
  `temp_hash` varchar(50) DEFAULT NULL,
  `is_avatar` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
