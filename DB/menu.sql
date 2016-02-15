/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-11-09 17:16:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(10) unsigned DEFAULT '0',
  `added_by_ext` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rbac_check` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `css_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `translation_category` varchar(120) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'app',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '0', 'Thời trang', 'b', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('2', '1', 'Thời trang nữ', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('3', '1', 'Thời trang nam', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('4', '2', 'Quần nữ', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('5', '2', 'Áo nữ', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('6', '2', 'Giày nữ', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('7', '3', 'Quần nam', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('8', '3', 'Áo nam', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('9', '3', 'Giày nam', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('10', '0', 'Điện máy', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('11', '10', 'Điện thoại', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('12', '10', 'Máy tính', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('13', '10', 'Laptop', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('14', '11', 'Iphone', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('15', '11', 'Samsung', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('16', '13', 'Laptop dell', 'n', 'menu', '', null, '', '', '', '');
INSERT INTO `menu` VALUES ('17', '13', 'Laptop Asus', 'n', 'menu', '', null, '', '', '', '');
