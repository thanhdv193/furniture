/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-02-23 17:20:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_type_link` varchar(250) NOT NULL,
  `news_category_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `seo_title` varchar(500) NOT NULL,
  `seo_keyword` varchar(500) NOT NULL,
  `seo_description` varchar(500) NOT NULL,
  `seo_photo_alt` varchar(250) NOT NULL,
  `create_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `z_index` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=289 DEFAULT CHARSET=utf8;
