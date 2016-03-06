/*
Navicat MySQL Data Transfer

Source Server         : home
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : furniture

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-03-03 22:41:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for about
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES ('1', 'SOFA TUONG VI', '<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>DEM.VN</strong>&nbsp;l&agrave; hệ thống si&ecirc;u thị chăn ga gối đệm lớn nhất Việt Nam, với tổng số 27&nbsp;showrooms tr&ecirc;n to&agrave;n quốc. DEM.VN chuy&ecirc;n ph&acirc;n phối sản phẩm của c&aacute;c thương hiệu nổi tiếng trong v&agrave; ngo&agrave;i nước như: Permaflex (Italia),&nbsp;GoodNite (Malaysia), Dunlopillo (Anh Quốc), Amando, Canada, Everon, Goodnight, Li&ecirc;n &Aacute;, Tuấn Anh,&nbsp;Doona, Dreamland... Với phương ch&acirc;m hoạt động&nbsp;<strong>&ldquo; Chăm s&oacute;c sức khỏe giấc ngủ gia đ&igrave;nh Việt&rdquo;</strong>, DEM.VN lu&ocirc;n đặt chất lượng sản phẩm l&ecirc;n h&agrave;ng đầu.&nbsp;</span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-family: arial !important; color: rgb(0, 0, 255);\"><strong>TẦM NH&Igrave;N - SỨ MỆNH</strong></span></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>&nbsp;- Sứ mệnh:</strong>&nbsp;Sứ mệnh của ch&uacute;ng t&ocirc;i l&agrave; đem đến cho tất cả kh&aacute;ch h&agrave;ng giải ph&aacute;p ho&agrave;n hảo về giấc ngủ.</span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>&nbsp;- Tầm nh&igrave;n:</strong>&nbsp;Kh&aacute;ch h&agrave;ng tr&ecirc;n to&agrave;n quốc c&oacute; thể mua cho m&igrave;nh c&aacute;c sản phẩm&nbsp;mền,nệm,gối,drap ưng &yacute;, hợp t&uacute;i tiền tại hệ thống trực tuyến ngay website vuanem.com hoặc vuanem.vn&nbsp;m&agrave; kh&ocirc;ng cần phải ra khỏi nh&agrave;.</span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>&nbsp;- Mục ti&ecirc;u:&nbsp;</strong>Đưa phương thức b&aacute;n h&agrave;ng trực tuyến trở th&agrave;nh phương thức b&aacute;n h&agrave;ng ch&iacute;nh.&nbsp;Cung cấp sản phẩm cho kh&aacute;ch h&agrave;ng tại tất cả c&aacute;c tỉnh, th&agrave;nh phố tr&ecirc;n to&agrave;n quốc.</span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-family: arial !important; color: rgb(0, 0, 255);\"><strong>DEM.VN&nbsp;CAM KẾT MANG LẠI CHO KH&Aacute;CH H&Agrave;NG C&Aacute;C GI&Aacute; TRỊ:</strong></span></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><em><strong><span style=\"font-family: arial !important; color: rgb(0, 0, 0);\">&nbsp;- Sản phẩm ch&iacute;nh h&atilde;ng 100%;</span></strong></em></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><em><strong>&nbsp;-&nbsp;Mức gi&aacute; cạnh tranh nhất tr&ecirc;n thị trường;</strong></em></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><em><strong>&nbsp;- Dịch vụ tư vấn sản phẩm bởi c&aacute;c chuy&ecirc;n gia sức khỏe v&agrave; giấc ngủ, từ đ&oacute; lựa chọn được chiếc nệm ph&ugrave; hợp nhất;</strong></em></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><em><strong>&nbsp;- Vận chuyển miễn ph&iacute; tại 15 Tỉnh Th&agrave;nh c&oacute; showroom v&agrave; Hỗ trợ 50% tại c&aacute;c Tỉnh Th&agrave;nh kh&aacute;c;</strong></em></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><em><strong>&nbsp;- Miễn ph&iacute; đổi trả h&agrave;nh trong v&ograve;ng 7 ng&agrave;y;</strong></em></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><em><strong>&nbsp;-&nbsp;Bảo h&agrave;nh đ&uacute;ng quy định nh&agrave; sản xuất;</strong></em></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><em><strong>-&nbsp;Chuyển h&agrave;ng ngay trong ng&agrave;y (với c&aacute;c đơn h&agrave;ng k&iacute;ch thước chuẩn);</strong></em></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-family: arial !important; color: rgb(0, 0, 255);\"><strong>HỆ THỐNG SHOWROOM DEM.VN&nbsp;TR&Ecirc;N TO&Agrave;N QUỐC</strong></span></span></span></p>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại H&agrave; Nội:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">408 X&atilde; Đ&agrave;n, Đống Đa&nbsp; - Điện thoại: 043 573 7721 / 04 35 73 7979</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">41 Nguyễn Phong Sắc, Cầu Giấy - Điện thoại: 046 269 3610</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Đường 4, d&atilde;y 9, TTTM Vincom MegaMall Times City, 458 Minh Khai, Hai B&agrave; Trưng - Điện thoại: 043 200 2518</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">406 Lạc Long Qu&acirc;n, T&acirc;y Hồ - Điện thoại: 04 22 605 605</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">234 Quang Trung, H&agrave; Đ&ocirc;ng - Điện thoại: 043 351 3384</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">115 Ng&ocirc; Gia Tự, Long Bi&ecirc;n - Điện thoại: 043 652 7030</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">93-95 Tổ 7, Thị Trấn Đ&ocirc;ng Anh - Điện thoại: 043 965 0695</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Hồ Ch&iacute; Minh</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">220 Nguyễn Thị Thập, Khu Phố 4, P.B&igrave;nhThuận, Quận 7 - Điện thoại: 08 37 75 27 13</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">583 Sư Vạn Hạnh, Quận 10 - Điện thoại: 08 3862 3629</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">492 Trường Chinh, Phường 13, Quận T&acirc;n B&igrave;nh - Điện thoại: 08 6292 5860</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">2 Bis Nguyễn Thị Minh Khai, P.Đakao, Quận 1 - Điện thoại: 08 3910 3609</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Hải Ph&ograve;ng:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">265 T&ocirc; Hiệu, Q. L&ecirc; Ch&acirc;n - Điện thoại: 0313 710 368</span></span></li>\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">302 &ndash; 304 Lạch Tray, Q. Ng&ocirc; Quyền - Điện thoại: 0313 728 179</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Th&aacute;i Nguy&ecirc;n:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">249 Ho&agrave;ng Văn Thụ, Tổ 4, Phường Đồng Quang - Điện thoại: 0280 384 0861</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Quảng Ninh:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">267 Quang Trung, Tp U&ocirc;ng B&iacute;, Quảng Ninh - Điện thoại: 0333 567 570</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Hải Dương:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">188 L&ecirc; Thanh Nghị, TP. Hải Dương - Điện thoại: 0320 383 1616</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Ph&uacute; Thọ:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">1606 H&ugrave;ng Vương, Tp Việt Tr&igrave; - Điện thoại: 0210 3818 168</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Thanh H&oacute;a:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">329 &ndash; 331 Trần Ph&uacute;, P.Ba Đ&igrave;nh, TP. Thanh H&oacute;a - Điện thoại: 0373 755 685</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Nghệ An:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">314 Nguyễn Văn Cừ, P. Hưng Ph&uacute;c, TP. Vinh - Điện thoại: 0383 999 926</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Đ&agrave; Nẵng:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">469 Điện Bi&ecirc;n Phủ, TP. Đ&agrave; Nẵng - Điện thoại: 0511 399 0213</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Cần Thơ:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">226, Đường 3/2, Hưng Lợi, Q. Ninh Kiều - Điện thoại: 0710 3762 566</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại B&igrave;nh Dương:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">273 Đại lộ B&igrave;nh Duơng, Tổ 6, Khu 12, P. Ch&aacute;nh Nghĩa, TP. Thủ Dầu Một - Điện thoại: 0650 3689 368</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Ki&ecirc;n Giang:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">643 Nguyễn Trung Trực, P. An H&ograve;a, TP. Rạch Gi&aacute; - Điện thoại: 0773 666 688</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại An Giang:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">43/13A Trần Hưng Đạo, P. Mỹ Thới, TP. Long Xuy&ecirc;n - Điện thoại: 0763 85 21 86</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; text-align: justify;\">\r\n	<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Tại Vũng T&agrave;u:</strong></span></span></p>\r\n<ul style=\"padding-right: 0px; padding-left: 0px; margin: 0px 0px 10px 25px; color: rgb(51, 51, 51); font-family: \'Roboto Condensed\', sans-serif; font-size: 15px; line-height: 20px; list-style-type: square;\">\r\n	<li style=\"list-style: none; margin: 0px; padding: 0px; text-align: justify;\">\r\n		<span style=\"font-family: arial !important; font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">287-289 đường Thống Nhất mới, Phường 8, Tp. Vũng T&agrave;u - Điện thoại: 064 3612 379</span></span></li>\r\n</ul>\r\n', 'logo.png');

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('about_create', '1', '1457014356');
INSERT INTO `auth_assignment` VALUES ('about_delete', '1', '1457014356');
INSERT INTO `auth_assignment` VALUES ('about_index', '1', '1457014356');
INSERT INTO `auth_assignment` VALUES ('about_update', '1', '1457014356');
INSERT INTO `auth_assignment` VALUES ('about_view', '1', '1457014356');
INSERT INTO `auth_assignment` VALUES ('authassignment_index', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('authassignment_view', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('menu_create', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('menu_delete', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('menu_index', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('menu_update', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('menu_view', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('orders_create', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('orders_delete', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('orders_index', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('orders_update', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('orders_view', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('producttype_create', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('producttype_delete', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('producttype_index', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('producttype_update', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('producttype_view', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('product_create', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('product_delete', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('product_index', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('product_update', '1', '1457014355');
INSERT INTO `auth_assignment` VALUES ('product_view', '1', '1457014356');
INSERT INTO `auth_assignment` VALUES ('user_create', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('user_delete', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('user_index', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('user_update', '1', '1457014354');
INSERT INTO `auth_assignment` VALUES ('user_view', '1', '1457014354');

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

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for banner_slide
-- ----------------------------
DROP TABLE IF EXISTS `banner_slide`;
CREATE TABLE `banner_slide` (
  `banner_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  `sort_order` int(11) DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `active` tinyint(4) DEFAULT '1',
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of banner_slide
-- ----------------------------
INSERT INTO `banner_slide` VALUES ('2', 'upload/banner/1456567260_11181912_1670183783219546_8738314218140077739_n.jpg', '1456567260', '1', '8', '0', '<p>1111ảnh</p>\r\n');
INSERT INTO `banner_slide` VALUES ('3', 'upload/banner/1456568075_1435569308_0_1.jpg', '1456568075', '1', '8', '1', '<p>&lt;h3 style=&quot;font:italic 2rem/1 Lora,Helvetica Neue, Helvetica, Arial, sans-serif;margin-bottom:1.7rem;&quot;&gt;High Fashion Collection 2015&lt;/h3&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h1 style=&quot;font:700 6rem/1 Raleway,Helvetica Neue, Helvetica, Arial, sans-serif; &nbsp;margin-bottom: 3rem;&quot; class=&quot;em-text-upercase&quot;&gt;em stores&lt;/h1&gt; &lt;a href=&quot;#&quot; class=&quot;button-link first&quot;&gt;&lt;span&gt;purchase now&lt;/span&gt;&lt;/a&gt; &lt;a href=&quot;#&quot; class=&quot;button-link&quot;&gt;&lt;span&gt;shop now&lt;/span&gt;&lt;/a&gt;</p>\r\n');
INSERT INTO `banner_slide` VALUES ('5', 'upload/banner/1456568355_1435569308_1_2.jpg', '1456568355', '2', '8', '1', '<p>&lt;h4 style=&quot;font:italic 3rem/1 Lora,Helvetica Neue, Helvetica, Arial, sans-serif; &nbsp;margin-bottom: 3.5rem;&quot;&gt;Hot discounts of the week&lt;/h4&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h2 style=&quot;font:700 6rem/1 Raleway,Helvetica Neue, Helvetica, Arial, sans-serif; &nbsp;margin-bottom: 3rem;&quot; class=&quot;em-text-upercase&quot;&gt;sale up 70% off&lt;/h2&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h4 class=&quot;em-text-upercase&quot; style=&quot;font:500 2rem/1 Lato,Helvetica Neue, Helvetica, Arial, sans-serif;&quot;&gt;only over oders on $99.99&lt;/h4&gt;</p>\r\n');
INSERT INTO `banner_slide` VALUES ('6', 'upload/banner/1456568381_1436500083_0_slideshow3.jpg', '1456568381', '3', '8', '1', '<p>&lt;h3 style=&quot;font:italic 2rem/1 Lora,Helvetica Neue, Helvetica, Arial, sans-serif;margin-bottom:1.7rem;&quot;&gt;Long Weekend Sale Off&lt;/h3&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h1 style=&quot;font:700 6rem/1 Raleway,Helvetica Neue, Helvetica, Arial, sans-serif; margin-bottom: 3rem;&quot; class=&quot;em-text-upercase&quot;&gt;couple shop&lt;/h1&gt; &lt;a href=&quot;#&quot; class=&quot;button-link first&quot;&gt;&lt;span&gt;purchase now&lt;/span&gt;&lt;/a&gt; &lt;a href=&quot;#&quot; class=&quot;button-link&quot;&gt;&lt;span&gt;shop now&lt;/span&gt;&lt;/a&gt;</p>\r\n');

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cart_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(10) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('1', '3725', '8', 'mrthanh', '1456666446', '1');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `info` text NOT NULL,
  `map` text NOT NULL,
  `support` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'Công Ty SOFA TUONG VI', '<p>\r\n	Cu Chi</p>\r\n', '', '<p>\r\n	User hỗ trợ <a border=\"0\" href=\"ymsgr:sendim?demvn_sale2\"><img src=\"http://opi.yahoo.com/online?u=demvn_sale2&amp;t=1\" /></a></p>\r\n<p>\r\n	User hỗ trợ <a border=\"0\" href=\"ymsgr:sendim?demvn_sale3\"><img src=\"http://opi.yahoo.com/online?u=demvn_sale3&amp;t=1\" /></a></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n');

-- ----------------------------
-- Table structure for log_history
-- ----------------------------
DROP TABLE IF EXISTS `log_history`;
CREATE TABLE `log_history` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of log_history
-- ----------------------------
INSERT INTO `log_history` VALUES ('5', '0', 'index', '/index.php/backend/user', '::1', '1456019385');
INSERT INTO `log_history` VALUES ('6', '0', 'index', '/index.php/backend/user', '::1', '1456020906');
INSERT INTO `log_history` VALUES ('7', '6', 'create', '/index.php/backend/user/create', '::1', '1456021116');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1424250460');
INSERT INTO `migration` VALUES ('m150220_102734_add_description_to_user_table', '1424429317');
INSERT INTO `migration` VALUES ('m150220_144624_create_usesr_table', '1424448170');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) NOT NULL,
  `create_date` int(11) NOT NULL,
  `cust_note` varchar(250) NOT NULL,
  `is_process` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=231 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('228', '0', 'Đỗ Văn Thanh', 'Thanh xuân - hà nội', '123@gmail.com', '123456', '1456488618', '1', '0');
INSERT INTO `orders` VALUES ('229', '0', 'Trần văn tuân', 'Từ liêm - hà nội', '123@gmail.com', '234234', '1456491965', '1', '0');
INSERT INTO `orders` VALUES ('230', '8', 'Đỗ văn Thanh', '1', '123@gmail.com', '123', '1456563255', '1', '0');

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` float NOT NULL,
  `size` varchar(250) NOT NULL,
  `is_timegold` tinyint(1) NOT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_detail
-- ----------------------------
INSERT INTO `order_detail` VALUES ('228', '3722', '1', '1', '1', '0', '0', '125');
INSERT INTO `order_detail` VALUES ('228', '3725', '1000000', '2', '1', '0', '0', '126');
INSERT INTO `order_detail` VALUES ('228', '3726', '1000000', '1', '1', '0', '0', '126');
INSERT INTO `order_detail` VALUES ('229', '3722', '1', '1', '1', '0', '0', '125');
INSERT INTO `order_detail` VALUES ('229', '3725', '1000000', '12', '1', '0', '0', '126');
INSERT INTO `order_detail` VALUES ('230', '3725', '1000000', '2', '1', '0', '0', '126');

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
  `create_date` int(10) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3729 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('3722', '11', '125', '1', 'sản phẩm 1', null, null, null, '<p>1</p>\r\n', '<p>1</p>\r\n', 'd4db178a2a9e249ed5a110c80d0f76fc', '', '', '', '', '1', '0', '0', '1455800150', '1', '0', null, '1', '0', '0', null, '', null, null, null, null, null);
INSERT INTO `product` VALUES ('3723', '11', '125', '1', 'sản phẩm 2', null, null, null, '<p>1</p>\r\n', '<p>1</p>\r\n', '14399d91814d4cfec349e4c8612c16c7', '', '', '', '', '1', '0', '0', '1455800150', '1', '0', null, '1', '0', '0', null, '', null, null, null, null, null);
INSERT INTO `product` VALUES ('3724', '11', '125', '1', 'sản phẩm 3', null, null, null, '<p>1</p>\r\n', '<p>1</p>\r\n', 'bc321d85af135b76503bbe5aa4a35843', '', '', '', '', '1', '0', '0', '1455800150', '1', '0', null, '1', '0', '0', null, '', null, null, null, null, null);
INSERT INTO `product` VALUES ('3725', '11', '126', '1', 'Chăn lông vũ 1', null, null, null, '<p>chăn l&ocirc;ng vũ rất đẹp</p>\r\n', '<p>chăn l&ocirc;ng vũ rất đẹp</p>\r\n', '6a97bc1fd854e41cef471794e3cf6fb0', '', '', '', '', '1', '0', '0', '1455982780', '1', '0', null, '1000000', '0', '0', null, '', null, null, '2000000', null, null);
INSERT INTO `product` VALUES ('3726', '11', '126', '1', 'sản phẩm 3', null, null, null, '<p>chăn l&ocirc;ng vũ rất đẹp</p>\r\n', '<p>chăn l&ocirc;ng vũ rất đẹp</p>\r\n', '41dae7c50401f2a5d7be99109126911d', '', '', '', '', '1', '0', '0', '1455982833', '1', '0', null, '1000000', '0', '0', null, '', null, null, '2000000', null, null);
INSERT INTO `product` VALUES ('3727', '11', '126', '2', 'chăn lông vũ 2016', null, null, null, '<p>chăn l&ocirc;ng vũ mặc si&ecirc;u ấm</p>\r\n', '<p>chăn l&ocirc;ng vũ mặc si&ecirc;u ấm</p>\r\n', '6ef62b9d68d8a98bbdddcaa9b0a86624', '', '', '', '', '1', '0', '0', '1455985368', '1', '0', null, '200000', '0', '0', null, '', null, null, '300000', null, null);
INSERT INTO `product` VALUES ('3728', '11', '125', '2', 'chăn lông cừu ấm năm 2016', null, null, null, '<p>chăn l&ocirc;ng cừu</p>\r\n', '<p>chăn l&ocirc;ng cừu</p>\r\n', '5b37a383149b260603e9e38553e06348', '', '', '', '', '1', '0', '0', '1455985650', '1', '0', null, '1000000', '0', '0', null, '', null, null, '2000000', null, null);

-- ----------------------------
-- Table structure for product_category
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `description` text,
  `link` varchar(250) DEFAULT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '0',
  `is_menu` tinyint(1) NOT NULL DEFAULT '0',
  `z_index` int(11) NOT NULL,
  `olink` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_description` varchar(250) DEFAULT NULL,
  `seo_keyword` varchar(250) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `create_date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_category
-- ----------------------------

-- ----------------------------
-- Table structure for product_group
-- ----------------------------
DROP TABLE IF EXISTS `product_group`;
CREATE TABLE `product_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `z_index` int(11) DEFAULT NULL,
  `create_date` int(10) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_group
-- ----------------------------
INSERT INTO `product_group` VALUES ('11', 'Hàng mới về', '0', '1455800198', '1');
INSERT INTO `product_group` VALUES ('12', 'Hàng bán chạy', '0', '1455800209', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_photo
-- ----------------------------
INSERT INTO `product_photo` VALUES ('6', '3724', '1455800972_12620790_158327664540206_59286779_o.jpg', 'product', '0', '1455800972', 'upload/product/', 'bc321d85af135b76503bbe5aa4a35843', '0');
INSERT INTO `product_photo` VALUES ('7', '3724', '1455800974_11181912_1670183783219546_8738314218140077739_n.jpg', 'product', '0', '1455800974', 'upload/product/', 'bc321d85af135b76503bbe5aa4a35843', '0');
INSERT INTO `product_photo` VALUES ('8', '3725', '1455982717_11181912_1670183783219546_8738314218140077739_n.jpg', 'product', '0', '1455982717', 'upload/product/', '6a97bc1fd854e41cef471794e3cf6fb0', '0');
INSERT INTO `product_photo` VALUES ('9', '3726', '1455982831_12644901_1670183999886191_4062514771268725793_n.jpg', 'product', '0', '1455982831', 'upload/product/', '41dae7c50401f2a5d7be99109126911d', '0');
INSERT INTO `product_photo` VALUES ('10', '3727', '1455985340_ve-que-an-tet.jpg', 'product', '0', '1455985340', 'upload/product/', '6ef62b9d68d8a98bbdddcaa9b0a86624', '0');
INSERT INTO `product_photo` VALUES ('11', '3728', '1455985635_581634_412784405407488_100000277952457_1558014_1110809949_n.jpg', 'product', '0', '1455985635', 'upload/product/', '5b37a383149b260603e9e38553e06348', '0');

-- ----------------------------
-- Table structure for product_type
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text,
  `link` varchar(250) DEFAULT NULL,
  `z_index` int(11) NOT NULL DEFAULT '0',
  `is_menu` tinyint(1) DEFAULT '0',
  `olink` varchar(250) DEFAULT NULL,
  `create_date` int(10) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_type
-- ----------------------------
INSERT INTO `product_type` VALUES ('125', '0', 'Chăn lông cừu', 'chăn lông cừu rất đẹp', null, '0', '0', null, '1455800150', '1');
INSERT INTO `product_type` VALUES ('126', '0', 'Chăn lông vũ', 'Chăn lông vũ rất đẹp', null, '0', '0', null, '1455800173', '1');
INSERT INTO `product_type` VALUES ('127', '125', 'chăn lông cừu loại 1', 'chăn lông cừu loại 1', null, '0', '0', null, '1455886555', '1');
INSERT INTO `product_type` VALUES ('128', '125', 'chăn lông cừu loại 2', 'chăn lông cừu loại 2', null, '0', '0', null, '1455886574', '1');
INSERT INTO `product_type` VALUES ('129', '126', 'chăn lông vũ loại 1', 'chăn lông vũ loại 1', null, '0', '0', null, '1455960430', '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `group` tinyint(4) DEFAULT NULL,
  `gender` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` int(11) DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '', '$2y$13$3h/NrOJ.mkLZBGfWDWnK2eWs15cQrziPLsKuyd3Y6bpEIf6ZYtfLm', null, 'admin@gmail.com', '10', '1425304449', '1456146569', '10', '1', 'nam', '641858400', 'upload/avatar/1456146569_4b17d20355f5086914resize.jpg', 'admin', 'admin', 'Hà nội', '1');
INSERT INTO `user` VALUES ('7', 'thanh', '', '$2y$13$J6EPR9FHETuupxugLnZKzOR.R8.x3zgKwIrRYCTVPuM6v01SPHAkW', null, 'thanh@gmail.com', '10', '1456068824', '1456068824', '10', '0', null, null, 'upload/avatar/1456146569_4b17d20355f5086914resize.jpg', null, null, null, null);
INSERT INTO `user` VALUES ('8', 'mrthanh', '', '$2y$13$Ug9QQYqfYjGKLKUawBAC3ewWBoZo8yIVAokrqA56jvNR/nfBepF/S', null, 'thanh@gmail.com', '10', '1456070093', '1456070093', '10', '0', 'nam', '1', 'upload/avatar/1456146569_4b17d20355f5086914resize.jpg', 'Đỗ văn', 'Thanh', '1', '1');
INSERT INTO `user` VALUES ('9', 'canboso', '', '$2y$13$R1pOrXgO9EAo9sJZbPfPAuzA67kYy3HTU4LmLxdYyjkN7BQue19gi', null, 'canboso@gmail.com', '10', '1456070651', '1456070651', '10', '0', 'Nu', '1', 'upload/avatar/1456146569_4b17d20355f5086914resize.jpg', 'canbo', 'so', '1', '1');
