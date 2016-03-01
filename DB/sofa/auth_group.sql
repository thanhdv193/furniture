/*
Navicat MySQL Data Transfer

Source Server         : home
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-03-01 21:25:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_group
-- ----------------------------
DROP TABLE IF EXISTS `auth_group`;
CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(250) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `description` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_group
-- ----------------------------
INSERT INTO `auth_group` VALUES ('7', 'Hệ thống', '1456752794', '1456752794', '1', 'Quyền hệ thống', '1');
INSERT INTO `auth_group` VALUES ('8', 'admin', '1456752859', '1456752859', '1', 'Quyền quản trị', '1');
INSERT INTO `auth_group` VALUES ('9', 'Quản lý tin tức', '1456752911', '1456752911', '1', 'Quản lý tin tức', '1');
