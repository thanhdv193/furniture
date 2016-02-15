/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-11-09 17:15:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `object_id` int(10) unsigned NOT NULL,
  `object_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) DEFAULT '0',
  `create_date` int(10) unsigned NOT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `temp_hash` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES ('9', '1', 'product', '1446012776_1445591303977721834.jpg', '0', '1446012776', 'upload/product/', '343a8d11fd5fea80cf4a2e7ce95a6b20');
INSERT INTO `image` VALUES ('10', '1', 'product', '1446012776_14455913141567886147.jpg', '0', '1446012776', 'upload/product/', '343a8d11fd5fea80cf4a2e7ce95a6b20');
INSERT INTO `image` VALUES ('13', '2', 'product', '1446013596_1445842528307974273.jpg', '0', '1446013596', 'upload/product/', '16adfd5963ed660b431063819fad52c5');
INSERT INTO `image` VALUES ('14', '2', 'product', '1446013596_14459180741984100533.jpg', '0', '1446013596', 'upload/product/', '16adfd5963ed660b431063819fad52c5');
INSERT INTO `image` VALUES ('15', '3', 'product', '1446013936_14364065203291249453.jpg', '0', '1446013936', 'upload/product/', '68a1a94ad3c0a98569cd0f587a5661d1');
INSERT INTO `image` VALUES ('16', '3', 'product', '1446013936_14364066219867260747.jpg', '0', '1446013936', 'upload/product/', '68a1a94ad3c0a98569cd0f587a5661d1');
INSERT INTO `image` VALUES ('18', '5', 'banner', '1446020835_slider1.png', '0', '1446020835', 'upload/banner/', '6b0fb33f9a45d7cef48d66e735c778f2');
INSERT INTO `image` VALUES ('19', '6', 'banner', '1446021212_slider2.jpg', '0', '1446021212', 'upload/banner/', '5df09f1f93611d5d67853d82ea467220');
INSERT INTO `image` VALUES ('20', '7', 'banner', '1446021226_slider3.jpg', '0', '1446021226', 'upload/banner/', 'fade2fd0c8c50aaa9000cd4268872571');
INSERT INTO `image` VALUES ('21', '8', 'banner', '1446021242_slider4.png', '0', '1446021242', 'upload/banner/', '0113be286a56df9d15b2dbefeba8b13a');
INSERT INTO `image` VALUES ('22', '4', 'product', '1446026674_14460236686444345463.jpg', '0', '1446026674', 'upload/product/', '03c401986abe49519f3aacd47f15c619');
INSERT INTO `image` VALUES ('23', '5', 'product', '1446026721_14455717897306674295.jpg', '0', '1446026721', 'upload/product/', '34ef24cdf0503e026768e842a9ffb811');
INSERT INTO `image` VALUES ('24', '6', 'product', '1446026767_1445419763149906884.jpg', '0', '1446026767', 'upload/product/', '6a37bde9b01befa19577cb91bd68218d');
INSERT INTO `image` VALUES ('25', '7', 'product', '1446027141_14454190006818893489.jpg', '0', '1446027141', 'upload/product/', 'ed7133f2229d3edac3dc440e91fbcd6f');
INSERT INTO `image` VALUES ('26', '8', 'product', '1446027272_14453220602538480202.jpg', '0', '1446027272', 'upload/product/', '0eb7167d81ca08694fd6836d2a611888');
INSERT INTO `image` VALUES ('27', '9', 'product', '1446027360_14434952941174681974.png', '0', '1446027360', 'upload/product/', '2e1ba246c41c224950846414dff10814');
INSERT INTO `image` VALUES ('28', '10', 'product', '1446106533_14347903952602605360.jpg', '0', '1446106533', 'upload/product/', 'f0499ea33cc59ac52a4d2e9ab35519a9');
INSERT INTO `image` VALUES ('29', '11', 'product', '1446106570_1434786367486155070.jpg', '0', '1446106570', 'upload/product/', '89d7961e1b54930e0240296972428125');
INSERT INTO `image` VALUES ('30', '12', 'product', '1446106599_14356374892102491369.jpg', '0', '1446106599', 'upload/product/', '468b6217982b83c8884b069cb43d27dc');
INSERT INTO `image` VALUES ('31', '13', 'product', '1446106626_14356367783668601723.jpg', '0', '1446106626', 'upload/product/', 'a2cb6ba5e13ee0da1b94150800fb4608');
INSERT INTO `image` VALUES ('32', '14', 'product', '1446106659_1442289520545444822.jpg', '0', '1446106659', 'upload/product/', 'b1b17c00f8dd2e191ac0b2cad5ccda5a');
INSERT INTO `image` VALUES ('33', '15', 'product', '1446106707_14423042130706440367.jpg', '0', '1446106707', 'upload/product/', '19848c29889b7eaaca418279155704de');
INSERT INTO `image` VALUES ('34', '16', 'product', '1446106745_14423076915171106748.jpg', '0', '1446106745', 'upload/product/', '6aa64d202631e9229623e95b50134d0c');
INSERT INTO `image` VALUES ('35', '17', 'product', '1446106774_1443748932583854523.jpg', '0', '1446106774', 'upload/product/', '4927977241d4ff1f24575207f6464ed3');
INSERT INTO `image` VALUES ('36', '18', 'product', '1447053815_1440138792452641177.jpg', '0', '1447053815', 'upload/product/', '9850abf5b829ae03bb42acfe15b54767');
INSERT INTO `image` VALUES ('37', '19', 'product', '1447053868_14449657559044332485.jpg', '0', '1447053868', 'upload/product/', 'c64939a2bf3c98aad9ab410001b61ec2');
INSERT INTO `image` VALUES ('38', '20', 'product', '1447053896_14449665331047495255.jpg', '0', '1447053896', 'upload/product/', '88b9da870e6fe2a15b0d07e1cfa8f735');
INSERT INTO `image` VALUES ('39', '21', 'product', '1447053927_14455900289007341396.jpg', '0', '1447053927', 'upload/product/', '46bcc1662ae3c7ada83a3eb58a3286bc');
INSERT INTO `image` VALUES ('40', '22', 'product', '1447053958_14455901697308363268.jpg', '0', '1447053958', 'upload/product/', 'b2316a71576335607394b490d2000582');
INSERT INTO `image` VALUES ('41', '23', 'product', '1447053990_14455901697308363268.jpg', '0', '1447053990', 'upload/product/', 'df5de6126b40cc5835998c19a03b464d');
INSERT INTO `image` VALUES ('42', '24', 'product', '1447054020_14254336226319250758.jpg', '0', '1447054020', 'upload/product/', 'e1d8c7ba51bc937b5c142f84a4eed6d3');
INSERT INTO `image` VALUES ('43', '25', 'product', '1447054063_1425439198562875268.jpg', '0', '1447054063', 'upload/product/', '782aa76a0a3139040417ba6e40871939');
INSERT INTO `image` VALUES ('44', '26', 'product', '1447054088_14308129155971620468.jpg', '0', '1447054088', 'upload/product/', '5df2c2c996a9d535299160b0da2cbd03');
INSERT INTO `image` VALUES ('45', '27', 'product', '1447054119_14308165024723103257.jpg', '0', '1447054119', 'upload/product/', 'a0bd254064e835a8a1e639369b4c720c');
INSERT INTO `image` VALUES ('46', '27', 'product', '1447054119_1430875074522852545.jpg', '0', '1447054119', 'upload/product/', 'a0bd254064e835a8a1e639369b4c720c');
