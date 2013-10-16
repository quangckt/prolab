-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2013 at 04:51 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prolabnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `rec_aggregatesales`
--

CREATE TABLE IF NOT EXISTS `rec_aggregatesales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `rec_aggregatesales`
--

INSERT INTO `rec_aggregatesales` (`id`, `name`) VALUES
(1, 'Lab'),
(2, 'Lambda'),
(3, 'Xerox'),
(4, 'Inkjet UV'),
(5, 'Inkjet mực dầu'),
(6, 'Inkjet mực nước'),
(7, 'Dịch vụ'),
(8, 'GC Album'),
(9, 'Ép gỗ'),
(10, 'Khung hình'),
(11, 'Hàng hóa'),
(12, 'GC Album tặng'),
(13, 'Hình in gia công'),
(14, 'Inkjet gia công'),
(15, 'Thuế VAT'),
(16, 'Tạm ứng khách hàng'),
(17, 'Khác'),
(18, 'Inkjet'),
(19, 'Giấy ảnh');

-- --------------------------------------------------------

--
-- Table structure for table `rec_appellation`
--

CREATE TABLE IF NOT EXISTS `rec_appellation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rec_appellation`
--


-- --------------------------------------------------------

--
-- Table structure for table `rec_area`
--

CREATE TABLE IF NOT EXISTS `rec_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `rec_area`
--

INSERT INTO `rec_area` (`id`, `name`) VALUES
(1, 'Miền Tây'),
(2, 'Miền Đông'),
(3, 'Chợ Lớn'),
(4, 'Bình Thạnh'),
(5, 'Sài Gòn'),
(6, 'Quận 1'),
(28, 'Trần Minh Quang'),
(29, 'Trần Minh Hùng'),
(30, 'Trần Thị Thiên Hương'),
(31, 'Trần Phạm Trường Giang'),
(32, 'Tí lùn'),
(39, 'Sóc mập'),
(40, 'Sóc gầy'),
(41, 'alô');

-- --------------------------------------------------------

--
-- Table structure for table `rec_companyofcustomer`
--

CREATE TABLE IF NOT EXISTS `rec_companyofcustomer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `taxcode` varchar(255) DEFAULT NULL,
  `note` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rec_companyofcustomer`
--

INSERT INTO `rec_companyofcustomer` (`id`, `code`, `name`, `address`, `taxcode`, `note`) VALUES
(1, '0303719675', 'Công ty TNHH Tư vấn - Xây dựng Nguyên Việt', '12 đường 6 kp1 p Hiệp phú Q 9', '0303719675', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rec_customer`
--

CREATE TABLE IF NOT EXISTS `rec_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `rec_appellation_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `company` varchar(300) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `manager` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `rec_area_id` int(11) DEFAULT NULL,
  `rec_produce_id` int(11) DEFAULT NULL,
  `otherInfo` varchar(300) DEFAULT NULL,
  `rec_delivergroup_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `rec_customer`
--

INSERT INTO `rec_customer` (`id`, `code`, `rec_appellation_id`, `name`, `company`, `tel`, `phone`, `manager`, `email`, `address`, `rec_area_id`, `rec_produce_id`, `otherInfo`, `rec_delivergroup_id`, `emp_id`) VALUES
(1, 'TBSV', NULL, 'Trần Bích Sen Việt', 'Công ty Tnhh Tư Vấn - Xây dựng Nguyên Việt', '0837306766', '0918873586', 'Nguyễn Sĩ Tấn', 'si.tan@yahoo.com.vn', '12 đường 6 KP 1 HP Quận 9', 1, 1, NULL, 1, 20),
(2, 'MTCL', NULL, 'Minh Tâm Chợ Lớn', 'Công ty Tnhh Tư Vấn - Xây dựng Nguyên Việt', '0837306766', '0918873586', 'Nguyễn Sĩ Tấn', 'si.tan@yahoo.com.vn', '12 đường 6 KP 1 HP Quận 9', 2, 2, NULL, 2, 12),
(3, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(4, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(5, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(6, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(7, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(8, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(9, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(10, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(11, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(12, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(13, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(14, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(15, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(16, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(17, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(18, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(19, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(20, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(21, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(22, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1),
(23, 'TMQ', 0, 'Trần Minh Quang', 'Minh Tâm Prolab', '0837306766', '01998247407', 'Trần Văn Dương', 'quangckt@gmail.com', '13 NL1 Tân Phú ĐN', 2, 2, '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rec_detailscustomer`
--

CREATE TABLE IF NOT EXISTS `rec_detailscustomer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_comp_id` int(11) DEFAULT NULL,
  `rec_cus_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rec_comp_id` (`rec_comp_id`),
  KEY `rec_cus_id` (`rec_cus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rec_detailscustomer`
--

INSERT INTO `rec_detailscustomer` (`id`, `rec_comp_id`, `rec_cus_id`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rec_detailssales`
--

CREATE TABLE IF NOT EXISTS `rec_detailssales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `rec_aggreSale_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`rec_aggreSale_id`),
  KEY `rec_aggreSale_id` (`rec_aggreSale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `rec_detailssales`
--

INSERT INTO `rec_detailssales` (`id`, `name`, `rec_aggreSale_id`) VALUES
(30, 'Album cuốn', 11),
(14, 'Album cuốn tặng', 19),
(31, 'Bìa mica', 11),
(12, 'Design album', 19),
(13, 'Design album cuốn', 19),
(44, 'Dịch vụ', 7),
(26, 'Ép gỗ bóng', 11),
(25, 'Ép gỗ mờ', 11),
(27, 'Ép gỗ sần', 11),
(34, 'Ép lụa', 11),
(53, 'FIle', 19),
(9, 'File Album', 19),
(10, 'File Album cuốn', 19),
(11, 'File Album du lịch', 19),
(15, 'File album tặng', 19),
(7, 'File Lab', 19),
(8, 'File Lambda', 19),
(23, 'GC album ruột mica', 11),
(21, 'GC album ruột trắng', 11),
(22, 'GC album ruột đen', 11),
(24, 'GC album tặng', 11),
(35, 'Hàng hóa khác', 11),
(16, 'Hình in gia công', 19),
(17, 'Hình in lại', 19),
(51, 'Inkjet mực dầu', 18),
(52, 'Inkjet mực nước', 18),
(20, 'Khác', 19),
(50, 'Khác UV', 18),
(28, 'Khung ảnh cao cấp', 11),
(29, 'Khung ảnh thường', 11),
(49, 'Mực UV', 18),
(32, 'Nắp album', 11),
(19, 'Tạm ứng khách hàng', 19),
(18, 'Thuế VAT', 19),
(46, 'Vật liệu cứng', 18),
(48, 'Vật liệu khách cứng', 18),
(47, 'Vật liệu khách mềm', 18),
(45, 'Vật liệu mềm', 18),
(41, 'Xerox album', 3),
(37, 'Xerox in danh thiếp', 3),
(36, 'Xerox in nhanh', 3),
(39, 'Xerox in sách', 3),
(42, 'Xerox in sách ảnh', 3),
(43, 'Xerox khác', 3),
(40, 'Xerox khuyến mãi', 3),
(38, 'Xerox lịch', 3),
(54, 'Xử lý', 19),
(33, 'Đóng cây', 11);

-- --------------------------------------------------------

--
-- Table structure for table `rec_detailsworkreceive`
--

CREATE TABLE IF NOT EXISTS `rec_detailsworkreceive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_workreceive_id` int(11) DEFAULT NULL,
  `rec_worklist_id` int(11) DEFAULT NULL,
  `rec_imagesize_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rec_workreceive_id` (`rec_workreceive_id`),
  KEY `rec_worklist_id` (`rec_worklist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rec_detailsworkreceive`
--


-- --------------------------------------------------------

--
-- Table structure for table `rec_godelivergroup`
--

CREATE TABLE IF NOT EXISTS `rec_godelivergroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `rec_godelivergroup`
--

INSERT INTO `rec_godelivergroup` (`id`, `name`) VALUES
(1, 'Miền Tây'),
(2, 'Miền Đông'),
(3, 'Chợ Lớn'),
(4, 'Sài Gòn'),
(5, 'Tân Bình'),
(6, 'Thủ Đức'),
(7, 'Quận 9'),
(8, 'adasdasf'),
(9, 'dilllllllll');

-- --------------------------------------------------------

--
-- Table structure for table `rec_grouprevenue`
--

CREATE TABLE IF NOT EXISTS `rec_grouprevenue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `rec_grouprevenue`
--

INSERT INTO `rec_grouprevenue` (`id`, `name`) VALUES
(2, 'Hàng hóa'),
(3, 'Hình'),
(4, 'Ikjet UV'),
(5, 'Ikjet dầu'),
(6, 'Ikjet nước'),
(7, 'Xerox'),
(8, 'Bán hàng hóa'),
(9, 'Tạm ứng khách'),
(10, 'Thuế VAT'),
(11, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `rec_imagesize`
--

CREATE TABLE IF NOT EXISTS `rec_imagesize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rec_imagesize`
--


-- --------------------------------------------------------

--
-- Table structure for table `rec_materialproduction`
--

CREATE TABLE IF NOT EXISTS `rec_materialproduction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `rec_materialproduction`
--

INSERT INTO `rec_materialproduction` (`id`, `name`) VALUES
(2, 'Giấy ảnh'),
(3, 'Xerox'),
(4, 'Inkjet UV'),
(5, 'Inkjet dầu'),
(6, 'Inkjet nước'),
(7, 'SX Album');

-- --------------------------------------------------------

--
-- Table structure for table `rec_processes`
--

CREATE TABLE IF NOT EXISTS `rec_processes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `distribute` bit(1) DEFAULT NULL,
  `scan` bit(1) DEFAULT NULL,
  `process` bit(1) DEFAULT NULL,
  `printImage` bit(1) DEFAULT NULL,
  `productGC` bit(1) DEFAULT NULL,
  `printPayment` bit(1) DEFAULT NULL,
  `deliverStails` bit(1) DEFAULT NULL,
  `deliverCustomer` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `rec_processes`
--

INSERT INTO `rec_processes` (`id`, `code`, `distribute`, `scan`, `process`, `printImage`, `productGC`, `printPayment`, `deliverStails`, `deliverCustomer`) VALUES
(3, '1', b'0', b'0', b'0', b'0', b'0', b'1', b'1', b'1'),
(4, '6A', b'1', b'1', b'1', b'1', b'0', b'1', b'1', b'0'),
(5, '3A', b'0', b'0', b'0', b'0', b'1', b'1', b'1', b'0'),
(6, '8', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'0'),
(7, '7', b'1', b'0', b'1', b'1', b'1', b'1', b'1', b'0'),
(8, '6', b'1', b'0', b'1', b'1', b'0', b'1', b'1', b'0'),
(9, '5', b'1', b'0', b'1', b'0', b'0', b'1', b'1', b'0'),
(10, '4', b'0', b'0', b'0', b'1', b'1', b'1', b'1', b'0'),
(11, '3', b'0', b'0', b'0', b'1', b'0', b'1', b'1', b'0'),
(12, '2', b'0', b'0', b'0', b'0', b'0', b'1', b'1', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `rec_produce`
--

CREATE TABLE IF NOT EXISTS `rec_produce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `rec_produce`
--

INSERT INTO `rec_produce` (`id`, `name`) VALUES
(1, 'Lab'),
(2, 'Photo'),
(3, 'Studio'),
(4, 'Áo cưới'),
(5, 'Quảng cáo'),
(6, 'Cty tổ chức sự kiện'),
(7, 'Studio Áo cưới'),
(8, 'NSNA'),
(10, 'In ấn thành phẩm'),
(11, 'savfdsfdhydfjdfj');

-- --------------------------------------------------------

--
-- Table structure for table `rec_waycalcprice`
--

CREATE TABLE IF NOT EXISTS `rec_waycalcprice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `rec_waycalcprice`
--

INSERT INTO `rec_waycalcprice` (`id`, `name`) VALUES
(4, 'Đơn giá'),
(5, 'Kích thước'),
(6, 'Kích thước hình'),
(7, 'Kích thước Album'),
(8, 'Kích thước Album Sản xuất'),
(9, 'Kích thước Album cuốn'),
(10, 'Mét'),
(11, 'Chu vi'),
(12, 'Chu vi + HS'),
(13, 'M2'),
(14, 'Xerox'),
(15, 'Xerox cuốn'),
(16, 'Trên doanh số'),
(17, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `rec_worklist`
--

CREATE TABLE IF NOT EXISTS `rec_worklist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `product_uom_id` int(11) DEFAULT NULL,
  `rec_waycallprice_id` int(11) DEFAULT NULL,
  `rec_aggregatesale_id` int(11) DEFAULT NULL,
  `rec_detailsale_id` int(11) DEFAULT NULL,
  `rec_grouprevenue_id` int(11) DEFAULT NULL,
  `rec_process_id` int(11) DEFAULT NULL,
  `rec_materiproduct_id` int(11) DEFAULT NULL,
  `productout` varchar(255) DEFAULT NULL,
  `materilogical1` varchar(255) DEFAULT NULL,
  `materilogical2` varchar(255) DEFAULT NULL,
  `materilogical3` varchar(255) DEFAULT NULL,
  `notmateri` bit(1) DEFAULT NULL,
  `notvalue` bit(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_uom_id` (`product_uom_id`),
  KEY `rec_waycallprice_id` (`rec_waycallprice_id`),
  KEY `rec_aggregatesale_id` (`rec_aggregatesale_id`),
  KEY `rec_detailsale_id` (`rec_detailsale_id`),
  KEY `rec_grouprevenue_id` (`rec_grouprevenue_id`),
  KEY `rec_process_id` (`rec_process_id`),
  KEY `rec_materiproduct_id` (`rec_materiproduct_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rec_worklist`
--

INSERT INTO `rec_worklist` (`id`, `code`, `name`, `product_uom_id`, `rec_waycallprice_id`, `rec_aggregatesale_id`, `rec_detailsale_id`, `rec_grouprevenue_id`, `rec_process_id`, `rec_materiproduct_id`, `productout`, `materilogical1`, `materilogical2`, `materilogical3`, `notmateri`, `notvalue`, `user_id`, `type`) VALUES
(1, 'File', 'Xuất file', 174, 6, 19, 53, 3, 11, 2, '', '', '', '', b'0', b'0', 1, 1),
(2, 'FKC', 'Xuất file không chỉnh màu', 174, 6, 19, 53, 3, 11, 2, '', '', '', '', b'0', b'0', 1, 1),
(3, 'P', 'File xử lý', 174, 6, 19, 54, 3, 8, 2, '', '', '', '', b'0', b'0', 1, 1),
(5, 'A', 'Ảnh xử lý', 174, 6, 19, 54, 3, 4, 2, '', '', '', '', b'0', b'0', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rec_workreceive`
--

CREATE TABLE IF NOT EXISTS `rec_workreceive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_id2` int(11) DEFAULT NULL,
  `datereceive` datetime DEFAULT NULL,
  `datedeliver` datetime DEFAULT NULL,
  `godeliver` varchar(255) DEFAULT NULL,
  `receiveonline` bit(1) DEFAULT NULL,
  `note` varchar(300) DEFAULT NULL,
  `VAT` bit(1) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cus_id` (`cus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rec_workreceive`
--

INSERT INTO `rec_workreceive` (`id`, `code`, `user_id`, `user_id2`, `datereceive`, `datedeliver`, `godeliver`, `receiveonline`, `note`, `VAT`, `cus_id`) VALUES
(1, '0813-00001', 1, NULL, '2013-08-21 00:00:00', '2013-08-24 01:11:14', '1', b'1', 'Làm gấp', b'1', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rec_customer`
--
ALTER TABLE `rec_customer`
  ADD CONSTRAINT `rec_customer_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`);

--
-- Constraints for table `rec_detailscustomer`
--
ALTER TABLE `rec_detailscustomer`
  ADD CONSTRAINT `rec_detailscustomer_ibfk_1` FOREIGN KEY (`rec_comp_id`) REFERENCES `rec_companyofcustomer` (`id`),
  ADD CONSTRAINT `rec_detailscustomer_ibfk_2` FOREIGN KEY (`rec_cus_id`) REFERENCES `rec_customer` (`id`);

--
-- Constraints for table `rec_detailssales`
--
ALTER TABLE `rec_detailssales`
  ADD CONSTRAINT `rec_detailssales_ibfk_1` FOREIGN KEY (`rec_aggreSale_id`) REFERENCES `rec_aggregatesales` (`id`);

--
-- Constraints for table `rec_detailsworkreceive`
--
ALTER TABLE `rec_detailsworkreceive`
  ADD CONSTRAINT `rec_detailsworkreceive_ibfk_1` FOREIGN KEY (`rec_workreceive_id`) REFERENCES `rec_workreceive` (`id`),
  ADD CONSTRAINT `rec_detailsworkreceive_ibfk_2` FOREIGN KEY (`rec_worklist_id`) REFERENCES `rec_worklist` (`id`);

--
-- Constraints for table `rec_worklist`
--
ALTER TABLE `rec_worklist`
  ADD CONSTRAINT `rec_worklist_ibfk_1` FOREIGN KEY (`product_uom_id`) REFERENCES `product_uom` (`id`),
  ADD CONSTRAINT `rec_worklist_ibfk_2` FOREIGN KEY (`rec_waycallprice_id`) REFERENCES `rec_waycalcprice` (`id`),
  ADD CONSTRAINT `rec_worklist_ibfk_3` FOREIGN KEY (`rec_aggregatesale_id`) REFERENCES `rec_aggregatesales` (`id`),
  ADD CONSTRAINT `rec_worklist_ibfk_4` FOREIGN KEY (`rec_detailsale_id`) REFERENCES `rec_detailssales` (`id`),
  ADD CONSTRAINT `rec_worklist_ibfk_5` FOREIGN KEY (`rec_grouprevenue_id`) REFERENCES `rec_grouprevenue` (`id`),
  ADD CONSTRAINT `rec_worklist_ibfk_6` FOREIGN KEY (`rec_process_id`) REFERENCES `rec_processes` (`id`),
  ADD CONSTRAINT `rec_worklist_ibfk_7` FOREIGN KEY (`rec_materiproduct_id`) REFERENCES `rec_materialproduction` (`id`),
  ADD CONSTRAINT `rec_worklist_ibfk_8` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `rec_workreceive`
--
ALTER TABLE `rec_workreceive`
  ADD CONSTRAINT `rec_workreceive_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `rec_customer` (`id`);
