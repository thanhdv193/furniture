/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : admin_zarado

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-11-16 16:46:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for r_admin
-- ----------------------------
DROP TABLE IF EXISTS `r_admin`;
CREATE TABLE `r_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin_role` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `present_visit_date` datetime NOT NULL,
  `last_visit_date` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_admin_activity_log
-- ----------------------------
DROP TABLE IF EXISTS `r_admin_activity_log`;
CREATE TABLE `r_admin_activity_log` (
  `id_admin_log_history` int(15) NOT NULL AUTO_INCREMENT,
  `access_date` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `id_admin` int(11) NOT NULL DEFAULT '0',
  `page_accessed` varchar(80) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `page_parameters` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `page_url` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `action` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `ip_address` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id_admin_log_history`),
  KEY `idx_page_accessed_zen` (`page_accessed`),
  KEY `idx_access_date_zen` (`access_date`),
  KEY `idx_ip_zen` (`ip_address`)
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Table structure for r_admin_log_history
-- ----------------------------
DROP TABLE IF EXISTS `r_admin_log_history`;
CREATE TABLE `r_admin_log_history` (
  `id_log` int(15) NOT NULL AUTO_INCREMENT,
  `access_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_admin` int(11) NOT NULL DEFAULT '0',
  `page_accessed` varchar(80) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `page_url` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ip_address` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id_log`),
  KEY `idx_page_accessed_zen` (`page_accessed`),
  KEY `idx_access_date_zen` (`access_date`),
  KEY `idx_ip_zen` (`ip_address`)
) ENGINE=InnoDB AUTO_INCREMENT=3885 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for r_admin_permissions
-- ----------------------------
DROP TABLE IF EXISTS `r_admin_permissions`;
CREATE TABLE `r_admin_permissions` (
  `id_admin_permission` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin_role` int(11) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `view` char(1) NOT NULL,
  `add` char(1) NOT NULL,
  `edit` char(1) NOT NULL,
  `trash` char(1) NOT NULL,
  `file_sort_order` tinyint(1) NOT NULL,
  `module_sort_order` tinyint(4) NOT NULL,
  `menu_type` tinyint(4) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_admin_permission`)
) ENGINE=InnoDB AUTO_INCREMENT=488 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_admin_role
-- ----------------------------
DROP TABLE IF EXISTS `r_admin_role`;
CREATE TABLE `r_admin_role` (
  `id_admin_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_admin_role`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_attribute
-- ----------------------------
DROP TABLE IF EXISTS `r_attribute`;
CREATE TABLE `r_attribute` (
  `id_attribute` int(11) NOT NULL AUTO_INCREMENT,
  `id_attribute_group` int(11) NOT NULL,
  `sort_order` tinyint(3) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_attribute`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_attribute_description
-- ----------------------------
DROP TABLE IF EXISTS `r_attribute_description`;
CREATE TABLE `r_attribute_description` (
  `id_attribute` int(11) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_attribute_group` int(11) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_attribute`,`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_attribute_group
-- ----------------------------
DROP TABLE IF EXISTS `r_attribute_group`;
CREATE TABLE `r_attribute_group` (
  `id_attribute_group` int(11) NOT NULL AUTO_INCREMENT,
  `sort_order` tinyint(3) NOT NULL,
  `filter` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_attribute_group`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_attribute_group_description
-- ----------------------------
DROP TABLE IF EXISTS `r_attribute_group_description`;
CREATE TABLE `r_attribute_group_description` (
  `id_attribute_group` int(11) NOT NULL,
  `id_language` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id_attribute_group`,`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_banner
-- ----------------------------
DROP TABLE IF EXISTS `r_banner`;
CREATE TABLE `r_banner` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_banner_image
-- ----------------------------
DROP TABLE IF EXISTS `r_banner_image`;
CREATE TABLE `r_banner_image` (
  `id_banner_image` int(11) NOT NULL AUTO_INCREMENT,
  `id_banner` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_banner_image`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_banner_image_description
-- ----------------------------
DROP TABLE IF EXISTS `r_banner_image_description`;
CREATE TABLE `r_banner_image_description` (
  `id_banner_image` int(11) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_banner` int(11) NOT NULL,
  `title` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_banner_image`,`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_category
-- ----------------------------
DROP TABLE IF EXISTS `r_category`;
CREATE TABLE `r_category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(64) DEFAULT NULL,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `top` tinyint(1) NOT NULL,
  `column` int(3) NOT NULL,
  `sort_order` int(3) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `filter` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_category`),
  KEY `idx_categories_parent_id` (`id_parent`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_category_description
-- ----------------------------
DROP TABLE IF EXISTS `r_category_description`;
CREATE TABLE `r_category_description` (
  `id_category` int(11) NOT NULL DEFAULT '0',
  `id_language` int(11) NOT NULL DEFAULT '1',
  `name` varchar(32) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(500) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_category`,`id_language`),
  KEY `idx_categories_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_category_filter
-- ----------------------------
DROP TABLE IF EXISTS `r_category_filter`;
CREATE TABLE `r_category_filter` (
  `id_category_filter` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `id` int(11) NOT NULL COMMENT '0:price,1:brands,2:discount',
  `type` varchar(10) NOT NULL COMMENT 'general,option,attribute',
  `sort_order` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_category_filter`)
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_configuration
-- ----------------------------
DROP TABLE IF EXISTS `r_configuration`;
CREATE TABLE `r_configuration` (
  `id_configuration` int(11) NOT NULL AUTO_INCREMENT,
  `id_configuration_group` int(11) NOT NULL,
  `code` varchar(64) NOT NULL,
  `key` varchar(64) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id_configuration`)
) ENGINE=InnoDB AUTO_INCREMENT=464 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_configuration_group
-- ----------------------------
DROP TABLE IF EXISTS `r_configuration_group`;
CREATE TABLE `r_configuration_group` (
  `id_configuration_group` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(64) NOT NULL,
  `code` varchar(64) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_configuration_group`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_country
-- ----------------------------
DROP TABLE IF EXISTS `r_country`;
CREATE TABLE `r_country` (
  `id_country` int(11) NOT NULL AUTO_INCREMENT,
  `id_zone` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `call_prefix` int(10) DEFAULT NULL,
  `address_format` varchar(255) DEFAULT NULL COMMENT 'firstname,lastname,company,address_1,address_2,city,state,postcode,country',
  `iso_code_2` varchar(2) DEFAULT NULL,
  `iso_code_3` varchar(3) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB AUTO_INCREMENT=255 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_coupon
-- ----------------------------
DROP TABLE IF EXISTS `r_coupon`;
CREATE TABLE `r_coupon` (
  `id_coupon` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `code` varchar(10) COLLATE utf8_bin NOT NULL,
  `type` char(1) COLLATE utf8_bin NOT NULL,
  `discount` decimal(15,3) NOT NULL,
  `logged` tinyint(1) NOT NULL,
  `total` decimal(15,3) NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `uses_total` int(11) NOT NULL,
  `uses_customer` varchar(11) COLLATE utf8_bin NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_coupon`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_coupon_history
-- ----------------------------
DROP TABLE IF EXISTS `r_coupon_history`;
CREATE TABLE `r_coupon_history` (
  `id_coupon_history` int(11) NOT NULL AUTO_INCREMENT,
  `id_coupon` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id_coupon_history`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_coupon_product
-- ----------------------------
DROP TABLE IF EXISTS `r_coupon_product`;
CREATE TABLE `r_coupon_product` (
  `id_coupon_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_coupon` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id_coupon_product`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_currency
-- ----------------------------
DROP TABLE IF EXISTS `r_currency`;
CREATE TABLE `r_currency` (
  `id_currency` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `code` char(3) NOT NULL,
  `symbol` varchar(10) NOT NULL,
  `position` varchar(32) NOT NULL COMMENT 'LEFT,RIGHT',
  `decimal_separator` char(1) DEFAULT NULL,
  `thousand_separator` char(1) DEFAULT NULL,
  `decimals` tinyint(1) NOT NULL,
  `value` float(13,8) DEFAULT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_currency`),
  KEY `idx_currencies_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_customer
-- ----------------------------
DROP TABLE IF EXISTS `r_customer`;
CREATE TABLE `r_customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `gender` char(1) DEFAULT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `email` varchar(96) DEFAULT NULL,
  `id_customer_address_default` int(11) NOT NULL,
  `id_customer_group` int(11) NOT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `telephone` varchar(32) DEFAULT NULL,
  `cart` text,
  `wishlist` text,
  `password` char(255) DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL,
  `status` smallint(1) NOT NULL,
  `approved` tinyint(4) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_customer_address
-- ----------------------------
DROP TABLE IF EXISTS `r_customer_address`;
CREATE TABLE `r_customer_address` (
  `id_customer_address` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `company` varchar(100) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(150) NOT NULL,
  `id_state` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  PRIMARY KEY (`id_customer_address`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_customer_group
-- ----------------------------
DROP TABLE IF EXISTS `r_customer_group`;
CREATE TABLE `r_customer_group` (
  `id_customer_group` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_customer_group`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_customer_group_description
-- ----------------------------
DROP TABLE IF EXISTS `r_customer_group_description`;
CREATE TABLE `r_customer_group_description` (
  `id_customer_group` int(11) NOT NULL AUTO_INCREMENT,
  `id_language` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_customer_group`,`id_language`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_custom_url
-- ----------------------------
DROP TABLE IF EXISTS `r_custom_url`;
CREATE TABLE `r_custom_url` (
  `id_custom_url` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8_bin NOT NULL,
  `string` varchar(255) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_custom_url`),
  UNIQUE KEY `keyword` (`string`)
) ENGINE=InnoDB AUTO_INCREMENT=901 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_email_template
-- ----------------------------
DROP TABLE IF EXISTS `r_email_template`;
CREATE TABLE `r_email_template` (
  `id_email_template` int(11) NOT NULL AUTO_INCREMENT,
  `html` text,
  `keywords` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_email_template`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_email_template_description
-- ----------------------------
DROP TABLE IF EXISTS `r_email_template_description`;
CREATE TABLE `r_email_template_description` (
  `id_email_template` int(11) NOT NULL DEFAULT '0',
  `id_language` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_email_template`,`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_filter
-- ----------------------------
DROP TABLE IF EXISTS `r_filter`;
CREATE TABLE `r_filter` (
  `id_filter` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL COMMENT '0:price,1:brands,2:discount',
  `type` varchar(10) NOT NULL COMMENT 'general,option,attribute',
  `sort_order` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_filter`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_language
-- ----------------------------
DROP TABLE IF EXISTS `r_language`;
CREATE TABLE `r_language` (
  `id_language` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `code` char(2) NOT NULL,
  `sort_order` int(3) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_language`),
  KEY `IDX_LANGUAGES_NAME` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_length_class
-- ----------------------------
DROP TABLE IF EXISTS `r_length_class`;
CREATE TABLE `r_length_class` (
  `length_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `value` decimal(15,8) NOT NULL,
  PRIMARY KEY (`length_class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_length_class_description
-- ----------------------------
DROP TABLE IF EXISTS `r_length_class_description`;
CREATE TABLE `r_length_class_description` (
  `length_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL,
  `title` varchar(32) COLLATE utf8_bin NOT NULL,
  `unit` varchar(4) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`length_class_id`,`language_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_manufacturer
-- ----------------------------
DROP TABLE IF EXISTS `r_manufacturer`;
CREATE TABLE `r_manufacturer` (
  `id_manufacturer` int(10) NOT NULL AUTO_INCREMENT,
  `sort_order` tinyint(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id_manufacturer`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_manufacturer_description
-- ----------------------------
DROP TABLE IF EXISTS `r_manufacturer_description`;
CREATE TABLE `r_manufacturer_description` (
  `id_manufacturer_description` int(10) NOT NULL AUTO_INCREMENT,
  `id_manufacturer` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keywords` varchar(100) DEFAULT NULL,
  `meta_description` varchar(100) DEFAULT NULL,
  `id_language` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_manufacturer_description`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_newsletter_template
-- ----------------------------
DROP TABLE IF EXISTS `r_newsletter_template`;
CREATE TABLE `r_newsletter_template` (
  `newsletter_template_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `date_sent` datetime NOT NULL,
  `sent` tinyint(1) NOT NULL,
  PRIMARY KEY (`newsletter_template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_option
-- ----------------------------
DROP TABLE IF EXISTS `r_option`;
CREATE TABLE `r_option` (
  `id_option` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(32) COLLATE utf8_bin NOT NULL,
  `additional` varchar(255) COLLATE utf8_bin NOT NULL COMMENT 'offer,discount',
  `sort_order` int(3) NOT NULL,
  `dependent_option` tinyint(1) NOT NULL,
  `child` mediumint(9) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_option`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_option_description
-- ----------------------------
DROP TABLE IF EXISTS `r_option_description`;
CREATE TABLE `r_option_description` (
  `id_option` int(11) NOT NULL,
  `id_language` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_option`,`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_option_value
-- ----------------------------
DROP TABLE IF EXISTS `r_option_value`;
CREATE TABLE `r_option_value` (
  `id_option_value` int(11) NOT NULL AUTO_INCREMENT,
  `id_option` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL,
  `sort_order` int(3) NOT NULL,
  PRIMARY KEY (`id_option_value`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_option_value_description
-- ----------------------------
DROP TABLE IF EXISTS `r_option_value_description`;
CREATE TABLE `r_option_value_description` (
  `id_option_value` int(11) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_option` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_option_value`,`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_order
-- ----------------------------
DROP TABLE IF EXISTS `r_order`;
CREATE TABLE `r_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` int(11) NOT NULL,
  `invoice_prefix` varchar(30) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_customer_group` tinyint(4) NOT NULL,
  `customer_group` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email_address` varchar(150) NOT NULL,
  `message` varchar(500) NOT NULL,
  `delivery_firstname` varchar(100) NOT NULL,
  `delivery_lastname` varchar(100) NOT NULL,
  `delivery_company` varchar(100) DEFAULT NULL,
  `delivery_address_1` varchar(255) NOT NULL,
  `delivery_address_2` varchar(255) NOT NULL,
  `delivery_city` varchar(150) NOT NULL,
  `delivery_postcode` varchar(50) NOT NULL,
  `delivery_state` varchar(100) DEFAULT NULL,
  `id_state_delivery` int(11) NOT NULL,
  `delivery_country` varchar(100) NOT NULL,
  `id_country_delivery` tinyint(1) NOT NULL,
  `shipping_method` varchar(100) NOT NULL,
  `shipping_method_code` varchar(30) NOT NULL,
  `billing_firstname` varchar(100) NOT NULL,
  `billing_lastname` varchar(100) NOT NULL,
  `billing_company` varchar(100) DEFAULT NULL,
  `billing_address_1` varchar(255) NOT NULL,
  `billing_address_2` varchar(255) NOT NULL,
  `billing_city` varchar(100) NOT NULL,
  `billing_postcode` varchar(50) NOT NULL,
  `billing_state` varchar(100) NOT NULL,
  `billing_country` varchar(100) NOT NULL,
  `id_state_billing` int(11) NOT NULL,
  `id_country_billing` int(11) NOT NULL,
  `payment_method` varchar(150) NOT NULL,
  `payment_method_code` varchar(30) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_created` datetime DEFAULT NULL,
  `id_order_status` int(5) NOT NULL,
  `order_status_name` varchar(100) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `total` decimal(20,4) NOT NULL,
  `id_language` tinyint(4) NOT NULL,
  `language_code` char(4) NOT NULL,
  `currency` char(3) DEFAULT NULL,
  `currency_value` decimal(14,6) DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `idx_orders_customers_id` (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_order_history
-- ----------------------------
DROP TABLE IF EXISTS `r_order_history`;
CREATE TABLE `r_order_history` (
  `id_order_history` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_order_status` int(11) NOT NULL,
  `order_status_name` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `notified_by_customer` tinyint(1) DEFAULT '0',
  `message` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id_order_history`),
  KEY `idx_orders_status_history_orders_id` (`id_order`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_order_product
-- ----------------------------
DROP TABLE IF EXISTS `r_order_product`;
CREATE TABLE `r_order_product` (
  `id_order_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `model` varchar(30) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `unit_price` decimal(15,4) NOT NULL,
  `total` decimal(15,4) NOT NULL,
  `tax` decimal(15,4) NOT NULL,
  `quantity` int(2) NOT NULL,
  `has_download` tinyint(1) NOT NULL,
  `download_filename` varchar(100) NOT NULL,
  `download_mask` varchar(100) NOT NULL,
  `download_remaining_count` tinyint(4) NOT NULL,
  `download_expiry_date` date NOT NULL,
  PRIMARY KEY (`id_order_product`),
  KEY `idx_orders_products_orders_id` (`id_order`),
  KEY `idx_orders_products_products_id` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_order_product_option
-- ----------------------------
DROP TABLE IF EXISTS `r_order_product_option`;
CREATE TABLE `r_order_product_option` (
  `id_order_product_option` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_order_product` int(11) NOT NULL,
  `id_product_option` int(11) NOT NULL,
  `id_product_option_value` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `value` varchar(500) NOT NULL,
  `type` varchar(32) NOT NULL,
  PRIMARY KEY (`id_order_product_option`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_order_status
-- ----------------------------
DROP TABLE IF EXISTS `r_order_status`;
CREATE TABLE `r_order_status` (
  `id_order_status` int(11) NOT NULL AUTO_INCREMENT,
  `id_language` int(11) NOT NULL DEFAULT '1',
  `name` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  `id_email_template` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_order_status`,`id_language`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_order_total
-- ----------------------------
DROP TABLE IF EXISTS `r_order_total`;
CREATE TABLE `r_order_total` (
  `id_order_total` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `value` decimal(15,4) NOT NULL,
  `code` varchar(32) NOT NULL,
  `sort_order` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_order_total`),
  KEY `idx_orders_total_orders_id` (`id_order`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_page
-- ----------------------------
DROP TABLE IF EXISTS `r_page`;
CREATE TABLE `r_page` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) DEFAULT NULL,
  `sort_order` int(3) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_page_description
-- ----------------------------
DROP TABLE IF EXISTS `r_page_description`;
CREATE TABLE `r_page_description` (
  `id_page` int(11) NOT NULL DEFAULT '0',
  `title` varchar(150) DEFAULT NULL,
  `description` text,
  `meta_title` varchar(150) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `id_language` int(11) NOT NULL,
  PRIMARY KEY (`id_page`,`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_product
-- ----------------------------
DROP TABLE IF EXISTS `r_product`;
CREATE TABLE `r_product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(4) NOT NULL,
  `model` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `price` decimal(15,0) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `date_product_available` date DEFAULT NULL,
  `weight` decimal(15,8) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_tax_class` int(11) NOT NULL,
  `id_stock_status` int(11) NOT NULL,
  `id_manufacturer` int(11) DEFAULT NULL,
  `minimum_quantity` smallint(6) NOT NULL,
  `subtract_stock` tinyint(4) NOT NULL,
  `sku` varchar(64) NOT NULL,
  `shipping_required` tinyint(1) NOT NULL,
  `length` decimal(15,8) NOT NULL,
  `width` decimal(15,8) NOT NULL,
  `height` decimal(15,8) NOT NULL,
  `upc` varchar(12) NOT NULL,
  `download_status` tinyint(1) NOT NULL,
  `download_filename` varchar(100) CHARACTER SET utf16 NOT NULL,
  `download_mask` varchar(100) NOT NULL,
  `download_allowed_count` tinyint(4) NOT NULL,
  `download_allowed_days` tinyint(4) NOT NULL,
  `sort_order` tinyint(1) NOT NULL,
  `viewed` int(5) NOT NULL,
  PRIMARY KEY (`id_product`),
  KEY `idx_products_model` (`model`),
  KEY `idx_products_date_added` (`date_created`)
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_productinfo
-- ----------------------------
DROP TABLE IF EXISTS `r_productinfo`;
CREATE TABLE `r_productinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `model` varchar(20) NOT NULL,
  `date_added` date NOT NULL,
  `status` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_product_attribute
-- ----------------------------
DROP TABLE IF EXISTS `r_product_attribute`;
CREATE TABLE `r_product_attribute` (
  `id_product` int(11) NOT NULL,
  `id_attribute` int(11) NOT NULL,
  `id_language` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id_product`,`id_attribute`,`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_product_category
-- ----------------------------
DROP TABLE IF EXISTS `r_product_category`;
CREATE TABLE `r_product_category` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id_product`,`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_product_description
-- ----------------------------
DROP TABLE IF EXISTS `r_product_description`;
CREATE TABLE `r_product_description` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_language` int(11) NOT NULL DEFAULT '1',
  `name` varchar(64) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `description` text,
  `download_label` varchar(150) NOT NULL,
  PRIMARY KEY (`id_product`,`id_language`),
  KEY `products_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_product_group
-- ----------------------------
DROP TABLE IF EXISTS `r_product_group`;
CREATE TABLE `r_product_group` (
  `id_product_group` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `display_in_listing` tinyint(1) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `set_title` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_product_group`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_product_group_description
-- ----------------------------
DROP TABLE IF EXISTS `r_product_group_description`;
CREATE TABLE `r_product_group_description` (
  `id_product_group_description` int(11) NOT NULL AUTO_INCREMENT,
  `id_product_group` int(11) NOT NULL,
  `lable` varchar(255) NOT NULL,
  `id_language` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_product_group_description`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_product_group_list
-- ----------------------------
DROP TABLE IF EXISTS `r_product_group_list`;
CREATE TABLE `r_product_group_list` (
  `id_product_group` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_product_group_type
-- ----------------------------
DROP TABLE IF EXISTS `r_product_group_type`;
CREATE TABLE `r_product_group_type` (
  `id_product_group_type` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_product_group_type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_product_image
-- ----------------------------
DROP TABLE IF EXISTS `r_product_image`;
CREATE TABLE `r_product_image` (
  `id_product_image` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_product_option_value` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `htmlcontent` text,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id_product_image`),
  KEY `products_images_prodid` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=1082 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_product_option
-- ----------------------------
DROP TABLE IF EXISTS `r_product_option`;
CREATE TABLE `r_product_option` (
  `id_product_option` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_option` int(11) NOT NULL,
  `option_value` text COLLATE utf8_bin NOT NULL,
  `required` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_product_option`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_product_option_value
-- ----------------------------
DROP TABLE IF EXISTS `r_product_option_value`;
CREATE TABLE `r_product_option_value` (
  `id_product_option_value` int(11) NOT NULL AUTO_INCREMENT,
  `id_product_option` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_option` int(11) NOT NULL,
  `id_option_value` int(11) NOT NULL,
  `id_base_option_value` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `subtract` tinyint(1) NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `price_prefix` varchar(1) COLLATE utf8_bin NOT NULL,
  `points` int(8) NOT NULL,
  `points_prefix` varchar(1) COLLATE utf8_bin NOT NULL,
  `weight` decimal(15,8) NOT NULL,
  `weight_prefix` varchar(1) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_product_option_value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_product_review
-- ----------------------------
DROP TABLE IF EXISTS `r_product_review`;
CREATE TABLE `r_product_review` (
  `id_review` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `customer_name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `rating` int(1) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `read` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_review`),
  KEY `idx_reviews_products_id` (`id_product`),
  KEY `idx_reviews_customers_id` (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_product_reward
-- ----------------------------
DROP TABLE IF EXISTS `r_product_reward`;
CREATE TABLE `r_product_reward` (
  `id_product_reward` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL DEFAULT '0',
  `id_customer_group` int(11) NOT NULL DEFAULT '0',
  `points` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_product_reward`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_product_special
-- ----------------------------
DROP TABLE IF EXISTS `r_product_special`;
CREATE TABLE `r_product_special` (
  `id_product_special` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_customer_group` int(11) NOT NULL,
  `priority` int(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id_product_special`),
  KEY `idx_specials_products_id` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_region
-- ----------------------------
DROP TABLE IF EXISTS `r_region`;
CREATE TABLE `r_region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_region_list
-- ----------------------------
DROP TABLE IF EXISTS `r_region_list`;
CREATE TABLE `r_region_list` (
  `id_region_list` int(11) NOT NULL AUTO_INCREMENT,
  `id_region` int(11) DEFAULT NULL,
  `id_country` int(11) DEFAULT NULL,
  `id_state` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_region_list`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_search_keyword
-- ----------------------------
DROP TABLE IF EXISTS `r_search_keyword`;
CREATE TABLE `r_search_keyword` (
  `id_search_keyword` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_search_keyword`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_state
-- ----------------------------
DROP TABLE IF EXISTS `r_state`;
CREATE TABLE `r_state` (
  `id_state` int(11) NOT NULL AUTO_INCREMENT,
  `id_country` int(11) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `code` varchar(32) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_state`)
) ENGINE=InnoDB AUTO_INCREMENT=4056 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_stock_status
-- ----------------------------
DROP TABLE IF EXISTS `r_stock_status`;
CREATE TABLE `r_stock_status` (
  `id_stock_status` int(11) NOT NULL AUTO_INCREMENT,
  `id_language` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_bin NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_stock_status`,`id_language`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_tax_class
-- ----------------------------
DROP TABLE IF EXISTS `r_tax_class`;
CREATE TABLE `r_tax_class` (
  `id_tax_class` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `description` longtext,
  `status` tinyint(1) DEFAULT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tax_class`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_tax_class_rule
-- ----------------------------
DROP TABLE IF EXISTS `r_tax_class_rule`;
CREATE TABLE `r_tax_class_rule` (
  `id_tax_class_rule` int(11) NOT NULL AUTO_INCREMENT,
  `id_tax_class` int(11) DEFAULT NULL,
  `rate` varchar(32) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL COMMENT 'PERCENT:percent,FIXED:fixed',
  `based_on` varchar(100) DEFAULT NULL COMMENT 'SHIPPING_ADDR=shipping address,PAYMENT_ADDR=payment address,STORE_ADDR=store address',
  `id_region` int(11) NOT NULL,
  PRIMARY KEY (`id_tax_class_rule`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for r_tax_class_rule_description
-- ----------------------------
DROP TABLE IF EXISTS `r_tax_class_rule_description`;
CREATE TABLE `r_tax_class_rule_description` (
  `id_tax_class_rule` int(11) NOT NULL DEFAULT '0',
  `id_tax_class` int(11) NOT NULL,
  `id_language` int(11) NOT NULL DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_tax_class_rule`,`id_tax_class`,`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for r_voucher
-- ----------------------------
DROP TABLE IF EXISTS `r_voucher`;
CREATE TABLE `r_voucher` (
  `voucher_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8_bin NOT NULL,
  `from_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `from_email` varchar(96) COLLATE utf8_bin NOT NULL,
  `to_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `to_email` varchar(96) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `voucher_theme_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`voucher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_voucher_history
-- ----------------------------
DROP TABLE IF EXISTS `r_voucher_history`;
CREATE TABLE `r_voucher_history` (
  `voucher_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `voucher_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`voucher_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_voucher_theme
-- ----------------------------
DROP TABLE IF EXISTS `r_voucher_theme`;
CREATE TABLE `r_voucher_theme` (
  `voucher_theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`voucher_theme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_voucher_theme_description
-- ----------------------------
DROP TABLE IF EXISTS `r_voucher_theme_description`;
CREATE TABLE `r_voucher_theme_description` (
  `voucher_theme_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`voucher_theme_id`,`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for r_zone
-- ----------------------------
DROP TABLE IF EXISTS `r_zone`;
CREATE TABLE `r_zone` (
  `id_zone` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_zone`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
