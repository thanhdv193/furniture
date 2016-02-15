/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-11-09 14:51:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_category_id` int(10) unsigned NOT NULL,
  `product_group_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view_count` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `announce` text COLLATE utf8_unicode_ci,
  `sort_order` int(11) DEFAULT '0',
  `active` tinyint(4) DEFAULT '1',
  `price` float unsigned DEFAULT '0',
  `old_price` float unsigned DEFAULT '0',
  `quantity_current` int(10) unsigned DEFAULT NULL,
  `create_date` int(10) NOT NULL,
  `image` int(10) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', '2', '0', 'Đầm nữ DTFY.141S  ', 'váy nữ', null, 'váy nữ', '0', '<p><span style=\"font-family:tahoma; font-size:11px\">M&atilde; sản phẩm: DTFY.141S&nbsp;</span><br />\r\n<span style=\"font-family:tahoma; font-size:11px\">- Đầm nữ kh&ocirc;ng tay, cổ tr&ograve;n,&nbsp;</span><br />\r\n<span style=\"font-family:tahoma; font-size:11px\">- Chất thun tho&aacute;ng m&aacute;t,&nbsp;</span><br />\r\n<span style=\"font-family:tahoma; font-size:11px\">- Họa tiết kẻ nổi bật, dễ phối đồ&nbsp;</span><br />\r\n<span style=\"font-family:tahoma; font-size:11px\">- Kiểu d&aacute;ng trẻ trung năng động</span></p>\r\n', null, '0', '1', '10000', '999', '100', '1446012776', '0');
INSERT INTO `product` VALUES ('2', '2', '0', 'Váy gấm dáng xuông tay lỡ', 'váy nữ', null, 'váy nữ', '0', '<p><span style=\"font-family:tahoma; font-size:11px\">- Kiểu d&aacute;ng: v&aacute;y d&aacute;ng xu&ocirc;ng trẻ trung v&agrave; thoải m&aacute;i&nbsp;</span><br />\r\n<span style=\"font-family:tahoma; font-size:11px\">- Chất liệu: gấm hoa mềm mại, sang trọng&nbsp;</span><br />\r\n<span style=\"font-family:tahoma; font-size:11px\">- Trang phục trẻ trung, năng động, ph&ugrave; hợp đi chơi, đi l&agrave;m, đi học</span></p>\r\n', null, '0', '1', '10000', '1200', '100', '1446013596', '0');
INSERT INTO `product` VALUES ('3', '2', '0', 'Áo sơ mi SS243', 'áo nữ', null, 'áo nữ', '0', '<p><span style=\"font-family:tahoma; font-size:11px\">M&agrave;u neon đang l&agrave; gam m&agrave;u đ&igrave;nh đ&aacute;m tr&ecirc;n c&aacute;c s&agrave;n diễn thời trang.Tại HeraDG, n&oacute; xuất hiện trong kiểu &aacute;o sơ mi d&aacute;ng d&agrave;i, với điểm nhấn ở phần cổ đ&uacute;p độc đ&aacute;o v&agrave; mới lạ.</span></p>\r\n', null, '0', '1', '2000', '1000', '100', '1446013936', '0');
INSERT INTO `product` VALUES ('4', '1', '4', 'Đồng hồ đeo tay chính hãng Olympianus 130 10MLWWH ', 'Đồng hồ đeo tay chính hãng Olympianus 130 10MLWWH ', null, 'Đồng hồ đeo tay chính hãng Olympianus 130 10MLWWH ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đồng hồ đeo tay ch&iacute;nh h&atilde;ng Olympianus 130 10MLWWH </span></p>\r\n', null, '0', '1', '2000000', '1000000', '10', '1446026674', '0');
INSERT INTO `product` VALUES ('5', '1', '4', 'Đồng hồ đeo tay chính hãng Ogival OG358 61AMLIWWH  ', 'Đồng hồ đeo tay chính hãng Ogival OG358 61AMLIWWH  ', null, 'Đồng hồ đeo tay chính hãng Ogival OG358 61AMLIWWH  ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đồng hồ đeo tay ch&iacute;nh h&atilde;ng Ogival OG358 61AMLIWWH </span></p>\r\n', null, '0', '1', '23000000', '12000000', '12', '1446026721', '0');
INSERT INTO `product` VALUES ('6', '1', '4', 'Đồng hồ đeo tay chính hãng Ogival OG358 ', 'Đồng hồ đeo tay chính hãng Ogival OG358 61AMLIWWH  ', null, 'Đồng hồ đeo tay chính hãng Ogival OG358 61AMLIWWH  ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đồng hồ đeo tay ch&iacute;nh h&atilde;ng Ogival OG358 61AMLIWWH </span></p>\r\n', null, '0', '1', '1000000', '2000000', '23', '1446026767', '0');
INSERT INTO `product` VALUES ('7', '1', '4', 'Đồng hồ Casio G Shock GA 110SG 4A	 ', 'Đồng hồ Casio G Shock GA 110SG 4A	 ', null, 'Đồng hồ Casio G Shock GA 110SG 4A	 ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đồng hồ Casio G Shock GA 110SG 4A </span></p>\r\n', null, '0', '1', '4000000', '4500000', '50', '1446027141', '0');
INSERT INTO `product` VALUES ('8', '1', '4', 'Đồng hồ Candino Nam C4559/3   ', 'Đồng hồ Candino Nam C4559/3   ', null, 'Đồng hồ Candino Nam C4559/3   ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đồng hồ Candino Nam C4559/3 </span></p>\r\n', null, '0', '1', '1000000', '2000000', '10', '1446027272', '0');
INSERT INTO `product` VALUES ('9', '1', '4', 'Đồng hồ Quartz chạy pin C4372/9 ', 'Đồng hồ Quartz chạy pin C4372/9 ', null, 'Đồng hồ Quartz chạy pin C4372/9 ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đồng hồ Quartz chạy pin C4372/9 </span></p>\r\n', null, '0', '1', '4000000', '20000000', '40', '1446027360', '0');
INSERT INTO `product` VALUES ('10', '1', '1', 'Giày Đá Banh Đinh Nhỏ AT1 Đỏ Bọc Đô ', 'Giày Đá Banh Đinh Nhỏ AT1 Đỏ Bọc Đô ', null, 'Giày Đá Banh Đinh Nhỏ AT1 Đỏ Bọc Đô ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Gi&agrave;y Đ&aacute; Banh Đinh Nhỏ AT1 Đỏ Bọc Đ&ocirc; </span></p>\r\n', null, '0', '1', '4200000', '5000000', '100', '1446106533', '0');
INSERT INTO `product` VALUES ('11', '1', '1', 'Giày Đá Banh Sân Cỏ Nhân Tạo Đinh Nhỏ FA Vàng Chanh  ', 'Giày Đá Banh Sân Cỏ Nhân Tạo Đinh Nhỏ FA Vàng Chanh  ', null, 'Giày Đá Banh Sân Cỏ Nhân Tạo Đinh Nhỏ FA Vàng Chanh  ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Gi&agrave;y Đ&aacute; Banh S&acirc;n Cỏ Nh&acirc;n Tạo Đinh Nhỏ FA V&agrave;ng Chanh </span></p>\r\n', null, '0', '1', '998000', '2000000', '100', '1446106570', '0');
INSERT INTO `product` VALUES ('12', '1', '1', 'Giày nam màu trắng HH7135     ', 'Giày nam màu trắng HH7135     ', null, 'Giày nam màu trắng HH7135     ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Gi&agrave;y nam m&agrave;u trắng HH7135 </span></p>\r\n', null, '0', '1', '4000000', '2000000', '10', '1446106599', '0');
INSERT INTO `product` VALUES ('13', '1', '1', 'Giày nam màu trắng HH7135     ', 'Giày nam màu trắng HH7135     ', null, 'Giày nam màu trắng HH7135     ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Gi&agrave;y nam m&agrave;u trắng HH7135 </span></p>\r\n', null, '0', '1', '1000000', '2000000', '10', '1446106626', '0');
INSERT INTO `product` VALUES ('14', '1', '0', 'Ví màu trắng HH7135     ', 'Ví màu trắng HH7135     ', null, 'Ví màu trắng HH7135     ', '0', '<p>V&iacute; m&agrave;u trắng HH7135 &nbsp; &nbsp;&nbsp;</p>\r\n', null, '0', '1', '4000000', '5000000', '100', '1446106659', '0');
INSERT INTO `product` VALUES ('15', '1', '1', 'Dây nịt nam da đà điểu màu đen HH4401    ', 'Dây nịt nam da đà điểu màu đen HH4401    ', null, 'Dây nịt nam da đà điểu màu đen HH4401    ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">D&acirc;y nịt nam da đ&agrave; điểu m&agrave;u đen HH4401 </span></p>\r\n', null, '0', '1', '5000000', '6000000', '100', '1446106707', '0');
INSERT INTO `product` VALUES ('16', '1', '1', 'Thắt lưng nam da Cá Sấu DaH2 DL0001    ', 'Thắt lưng nam da Cá Sấu DaH2 DL0001    ', null, 'Thắt lưng nam da Cá Sấu DaH2 DL0001    ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Thắt lưng nam da Cá S&acirc;́u DaH2 DL0001 </span></p>\r\n', null, '0', '1', '800000', '900000', '100', '1446106745', '0');
INSERT INTO `product` VALUES ('17', '1', '1', 'Balo nam da Cá Sấu DaH2 DL0001    ', 'Balo nam da Cá Sấu DaH2 DL0001    ', null, 'Balo nam da Cá Sấu DaH2 DL0001    ', '0', '<p>Balo nam da Cá S&acirc;́u DaH2 DL0001 &nbsp; &nbsp;</p>\r\n', null, '0', '1', '200000', '400000', '100', '1446106774', '0');
INSERT INTO `product` VALUES ('18', '2', '0', 'Váy tapta dáng xuông tay lỡ    ', 'Váy tapta dáng xuông tay lỡ    ', null, 'Váy tapta dáng xuông tay lỡ    ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y tapta d&aacute;ng xu&ocirc;ng tay lỡ </span></p>\r\n\r\n<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y tapta d&aacute;ng xu&ocirc;ng tay lỡ </span></p>\r\n\r\n<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y tapta d&aacute;ng xu&ocirc;ng tay lỡ </span></p>\r\n\r\n<p>&nbsp;</p>\r\n', null, '0', '1', '120154', '250124', '100', '1447053816', '0');
INSERT INTO `product` VALUES ('19', '2', '0', 'Đầm nữ DTFN.068S    ', 'Đầm nữ DTFN.068S    ', null, 'Đầm nữ DTFN.068S    ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đầm nữ DTFN.068S </span><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đầm nữ DTFN.068S </span><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đầm nữ DTFN.068S </span></p>\r\n', null, '0', '1', '4000000', '2000000', '100', '1447053868', '0');
INSERT INTO `product` VALUES ('20', '2', '0', 'Đầm nữ DTFN.068S    ', 'Đầm nữ DTFN.068S    ', null, 'Đầm nữ DTFN.068S    ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đầm nữ DTFN.068S </span></p>\r\n\r\n<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đầm nữ DTFN.068S </span></p>\r\n\r\n<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đầm nữ DTFN.068S </span></p>\r\n\r\n<p>&nbsp;</p>\r\n', null, '0', '1', '1000000', '5000000', '100', '1447053896', '0');
INSERT INTO `product` VALUES ('21', '2', '0', 'Váy tapta xòe xếp ly     ', 'Váy tapta xòe xếp ly     ', null, 'Váy tapta xòe xếp ly     ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y tapta x&ograve;e xếp ly </span></p>\r\n\r\n<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y tapta x&ograve;e xếp ly </span></p>\r\n', null, '0', '1', '998000', '5000000', '10', '1447053927', '0');
INSERT INTO `product` VALUES ('22', '2', '0', 'Váy pink shirt dress with pockets tbw50600669  ', 'Váy pink shirt dress with pockets tbw50600669  ', null, 'Váy pink shirt dress with pockets tbw50600669  ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y pink shirt dress with pockets tbw50600669 </span></p>\r\n', null, '0', '1', '1000000', '900000', '12', '1447053958', '0');
INSERT INTO `product` VALUES ('23', '2', '0', 'Váy Beach Calling Dress TBW50600942  ', 'Váy Beach Calling Dress TBW50600942  ', null, 'Váy Beach Calling Dress TBW50600942  ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y Beach Calling Dress TBW50600942 </span></p>\r\n', null, '0', '1', '998000', '2000000', '23', '1447053990', '0');
INSERT INTO `product` VALUES ('24', '2', '0', 'Váy Beach Calling Dress TBW50600942  ', 'Váy Beach Calling Dress TBW50600942  ', null, 'Váy Beach Calling Dress TBW50600942  ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y Beach Calling Dress TBW50600942 </span></p>\r\n', null, '0', '1', '4000000', '2000000', '10', '1447054020', '0');
INSERT INTO `product` VALUES ('25', '2', '0', 'Váy cổ tròn đáp da xốp con chim ghi VCTDD1.2015  ', 'Váy cổ tròn đáp da xốp con chim ghi VCTDD1.2015  ', null, 'Váy cổ tròn đáp da xốp con chim ghi VCTDD1.2015  ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y cổ tr&ograve;n đ&aacute;p da xốp con chim ghi VCTDD1.2015 </span></p>\r\n', null, '0', '1', '1000000', '2000000', '100', '1447054063', '0');
INSERT INTO `product` VALUES ('26', '2', '0', 'Váy cổ tròn đáp da xốp con chim ghi VCTDD1.2015  ', 'Váy cổ tròn đáp da xốp con chim ghi VCTDD1.2015  ', null, 'Váy cổ tròn đáp da xốp con chim ghi VCTDD1.2015  ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">V&aacute;y cổ tr&ograve;n đ&aacute;p da xốp con chim ghi VCTDD1.2015 </span></p>\r\n', null, '0', '1', '4000000', '2000000', '100', '1447054088', '0');
INSERT INTO `product` VALUES ('27', '2', '0', 'Đầm Crepe Gấu Ren Xẻ Sườn ', 'Đầm Crepe Gấu Ren Xẻ Sườn ', null, 'Đầm Crepe Gấu Ren Xẻ Sườn ', '0', '<p><span style=\"color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px\">Đầm Crepe Gấu Ren Xẻ Sườn </span></p>\r\n', null, '0', '1', '1000000', '5000000', '100', '1447054119', '0');
