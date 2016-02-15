/*
Navicat MySQL Data Transfer

Source Server         : shop
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-11-22 23:06:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for backend_menu
-- ----------------------------
DROP TABLE IF EXISTS `backend_menu`;
CREATE TABLE `backend_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(10) unsigned DEFAULT '0',
  `added_by_ext` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rbac_check` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `css_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `translation_category` varchar(120) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'app',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of backend_menu
-- ----------------------------
INSERT INTO `backend_menu` VALUES ('1', '0', 'Quản lý menu admin', 'http://localhost:803/backend-menu/', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('2', '1', 'Danh sách menu admin', 'http://localhost:803/backend-menu/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('3', '1', 'Thêm mới menu', 'http://localhost:803/backend-menu/create', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('4', '0', 'Quản lý sản phẩm', 'http://localhost:803/product', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('5', '0', 'Quản lý nhóm sản phẩm', 'http://localhost:803/product-group/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('6', '5', 'Danh sách nhóm sản phẩm', 'http://localhost:803//backend/product-group/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('7', '5', 'Thêm mới nhóm sản phẩm', 'http://localhost:803/product-group/create', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('8', '4', 'Danh sách sản phẩm', 'http://localhost:803/backend/product/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('50', '0', 'Menu Admin', 'backend/backend-menu', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('51', '0', 'Quản lý Banner', 'aaaa', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('52', '0', 'Quản lý sản phẩm', 'aaaaa', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('53', '50', 'Danh sách menu', 'http://localhost:803/index.php/backend/backend-menu/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('54', '50', 'Thêm menu', 'http://localhost:803/backend/backend-menu/create', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('55', '51', 'Thêm mới banner', 'http://localhost:803/backend/banner/create', null, '1', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('56', '51', 'Danh sách banner', 'http://localhost:803/backend/banner/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('57', '52', 'Thêm mới sản phẩm', 'http://localhost:803/backend/product/create', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('58', '52', 'Danh sách sản phẩm', 'http://localhost:803/backend/product/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('59', '0', 'Quản lý user', 'http://localhost:803/backend/user', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('60', '59', 'Danh sách user', 'http://localhost:803/backend/user/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('61', '59', 'Thêm mới user', 'http://localhost:803/backend/user/create', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('62', '0', 'Quản lý nhóm sản phẩm', 'http://localhost:803/1', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('64', '62', 'Danh sách nhóm sản phẩm', 'http://localhost:803/backend/product-group', null, '1', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('65', '0', 'Hệ Thống', 'http://localhost:803/bbbbb', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('66', '0', 'Trang chủ', 'http://localhost:803/home', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('67', '65', 'Quản lý ngôn ngữ', 'http://localhost:803/aaa', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('68', '0', 'Thông tin giới thiệu', 'http://localhost:803/b', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('69', '0', 'Thông tin liên hệ', 'http://localhost:803/b', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('70', '0', 'Quảng cáo', 'http://localhost:803/n', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('71', '70', 'Banner', 'http://localhost:803/j', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('72', '0', 'Tin tức', 'http://localhost:803/f', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('73', '72', 'Danh mục bài viết', 'http://localhost:803/j', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('74', '72', 'Bài viết', 'http://localhost:803/k', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('75', '0', 'Tư vấn', 'http://localhost:803/j', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('76', '75', 'Danh mục tư vấn', 'http://localhost:803/l', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('77', '75', 'Bài viết', 'http://localhost:803/k', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('78', '0', 'Showrooms', 'http://localhost:803/h', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('79', '78', 'Vùng miền', 'http://localhost:803/g', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('80', '78', 'Danh sách showroom', 'http://localhost:803/h', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('81', '0', 'Quản lý sản phẩm F', 'http://localhost:803/b', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('82', '81', 'Nhóm sản phẩm', 'http://localhost:803/b', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('83', '81', 'Loại sản phẩm', 'http://localhost:803/Loại sản phẩm', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('84', '81', 'Hãng sp', 'http://localhost:803/Hãng sp', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('85', '81', 'Gian hàng online', 'http://localhost:803/Gian hàng online', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('86', '0', 'Gian hàng online', 'http://localhost:803/Gian hàng online', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('87', '86', 'Khung giờ giảm giá', 'http://localhost:803/Khung giờ giảm giá', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('88', '0', 'Quản lý đơn hàng', 'http://localhost:803/Quản lý đơn hàng', null, '0', null, null, null, 'app');
