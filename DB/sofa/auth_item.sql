/*
Navicat MySQL Data Transfer

Source Server         : home
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-03-01 21:25:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `alias` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('about', '1', null, null, null, '1456756813', '1456756813', '9', 'Quản lý about');
INSERT INTO `auth_item` VALUES ('about_create', '2', null, null, null, '1456757543', '1456757543', '9', 'Quản lý thêm mới about');
INSERT INTO `auth_item` VALUES ('about_delete', '2', null, null, null, '1456757563', '1456757563', '9', 'Quản lý xóa about');
INSERT INTO `auth_item` VALUES ('about_index', '2', null, null, null, '1456757519', '1456757519', '9', 'Quản lý about index');
INSERT INTO `auth_item` VALUES ('about_update', '2', null, null, null, '1456757556', '1456757556', '9', 'Quản lý sửa about');
INSERT INTO `auth_item` VALUES ('about_view', '2', null, null, null, '1456757529', '1456757529', '9', 'Quản lý about xem chi tiết');
INSERT INTO `auth_item` VALUES ('authassignment', '1', null, null, null, '1456757684', '1456757684', '7', 'Quản lý phân quyền user');
INSERT INTO `auth_item` VALUES ('authassignment_index', '2', null, null, null, '1456757695', '1456757695', '7', 'Quản lý phân quyền user index');
INSERT INTO `auth_item` VALUES ('authassignment_view', '2', null, null, null, '1456757704', '1456757704', '7', 'Quản lý phân quyền user chi tiết');
INSERT INTO `auth_item` VALUES ('menu', '1', null, null, null, '1456842239', '1456842239', '8', 'Quản lý menu');
INSERT INTO `auth_item` VALUES ('menu_create', '2', null, null, null, '1456842243', '1456842243', '8', 'Thêm mới menu');
INSERT INTO `auth_item` VALUES ('menu_delete', '2', null, null, null, '1456842247', '1456842247', '8', 'Xóa menu');
INSERT INTO `auth_item` VALUES ('menu_index', '2', null, null, null, '1456842241', '1456842241', '8', 'Danh sách menu');
INSERT INTO `auth_item` VALUES ('menu_update', '2', null, null, null, '1456842245', '1456842245', '8', 'Sửa menu');
INSERT INTO `auth_item` VALUES ('menu_view', '2', null, null, null, '1456842242', '1456842242', '8', 'Chi tiết menu');
INSERT INTO `auth_item` VALUES ('orders', '1', null, null, null, '1456842177', '1456842177', '8', 'Quản lý đơn hàng');
INSERT INTO `auth_item` VALUES ('orders_create', '2', null, null, null, '1456842183', '1456842183', '8', 'Thêm mới đơn hàng');
INSERT INTO `auth_item` VALUES ('orders_delete', '2', null, null, null, '1456842186', '1456842186', '8', 'Xóa đơn hàng');
INSERT INTO `auth_item` VALUES ('orders_index', '2', null, null, null, '1456842179', '1456842179', '8', 'Danh sách đơn hàng');
INSERT INTO `auth_item` VALUES ('orders_update', '2', null, null, null, '1456842184', '1456842184', '8', 'Sửa đơn hàng');
INSERT INTO `auth_item` VALUES ('orders_view', '2', null, null, null, '1456842181', '1456842181', '8', 'Chi tiết đơn hàng');
INSERT INTO `auth_item` VALUES ('product', '1', null, null, null, '1456842045', '1456842045', '8', 'Quản lý sản phẩm');
INSERT INTO `auth_item` VALUES ('producttype', '1', null, null, null, '1456841977', '1456841977', '8', 'Quản lý loại sản phẩm');
INSERT INTO `auth_item` VALUES ('producttype_create', '2', null, null, null, '1456841984', '1456841984', '8', 'Thêm mới loại sản phẩm');
INSERT INTO `auth_item` VALUES ('producttype_delete', '2', null, null, null, '1456841988', '1456841988', '8', 'Xóa loại sản phẩm');
INSERT INTO `auth_item` VALUES ('producttype_index', '2', null, null, null, '1456841979', '1456841979', '8', 'Danh sách loại sản phẩm');
INSERT INTO `auth_item` VALUES ('producttype_update', '2', null, null, null, '1456841986', '1456841986', '8', 'Sửa loại sản phẩm');
INSERT INTO `auth_item` VALUES ('producttype_view', '2', null, null, null, '1456841982', '1456841982', '8', 'Chi tiết loại sản phẩm');
INSERT INTO `auth_item` VALUES ('product_create', '2', null, null, null, '1456842054', '1456842054', '8', 'Thêm mới sản phẩm');
INSERT INTO `auth_item` VALUES ('product_delete', '2', null, null, null, '1456842058', '1456842058', '8', 'Xóa sản phẩm');
INSERT INTO `auth_item` VALUES ('product_index', '2', null, null, null, '1456842048', '1456842048', '8', 'Danh sách sản phẩm');
INSERT INTO `auth_item` VALUES ('product_update', '2', null, null, null, '1456842055', '1456842055', '8', 'Sửa sản phẩm');
INSERT INTO `auth_item` VALUES ('product_view', '2', null, null, null, '1456842052', '1456842052', '8', 'Chi tiết sản phẩm');
INSERT INTO `auth_item` VALUES ('user', '1', null, null, null, '1456841298', '1456841298', '7', 'Quản lý người dùng');
INSERT INTO `auth_item` VALUES ('user_create', '2', null, null, null, '1456841290', '1456841915', '7', 'Thêm mới người dùng');
INSERT INTO `auth_item` VALUES ('user_delete', '2', null, null, null, '1456841284', '1456841919', '7', 'Xóa người dùng');
INSERT INTO `auth_item` VALUES ('user_index', '2', null, null, null, '1456841293', '1456841902', '7', 'Danh sách người dùng');
INSERT INTO `auth_item` VALUES ('user_update', '2', null, null, null, '1456841287', '1456841916', '7', 'Sửa người dùng');
INSERT INTO `auth_item` VALUES ('user_view', '2', null, null, null, '1456841292', '1456841913', '7', 'Xem chi tiết người dùng');
