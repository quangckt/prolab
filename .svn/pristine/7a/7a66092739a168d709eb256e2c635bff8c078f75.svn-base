-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2012 at 08:07 AM
-- Server version: 5.0.51b-community-nt-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prolab`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `proTest`(IN `test` int)
BEGIN

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `testpro`(var1 varchar(64))
BEGIN 
SELECT  product_item.code,product_item.name  FROM product_item
WHERE product_item.type_id=var1;
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `testpro1`(var1 varchar(64))
BEGIN 
SELECT  p.code,p.name  FROM product_item p
WHERE p.type_id=var1;
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `testpro11`(var1 varchar(64))
BEGIN 
SELECT  * FROM product_item p
WHERE p.type_id=var1;
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hr_batch`
--

CREATE TABLE IF NOT EXISTS `hr_batch` (
  `id` int(11) NOT NULL auto_increment,
  `code` varchar(255) default NULL,
  `name` varchar(255) default NULL,
  `date` date default NULL,
  `qty` decimal(10,0) default NULL,
  `amt` decimal(10,0) default NULL,
  `note` varchar(255) default NULL,
  `dateloan` date default NULL,
  `monthloan` decimal(10,0) default NULL,
  `type` tinyint(4) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `hr_batch`
--

INSERT INTO `hr_batch` (`id`, `code`, `name`, `date`, `qty`, `amt`, `note`, `dateloan`, `monthloan`, `type`) VALUES
(9, NULL, NULL, '2012-11-16', NULL, '4000000000', 'Vốn điều lệ', NULL, NULL, 0),
(25, 'CP12/2012', 'Đợt 12', '2012-12-05', '750000', '1500000000', 'Phát hành cổ phần tháng 12 năm 2012', NULL, NULL, NULL),
(28, NULL, NULL, '2012-12-12', '75000', '150000000', 'Mua máy mới phát triển công tác', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hr_employee`
--

CREATE TABLE IF NOT EXISTS `hr_employee` (
  `id` int(11) NOT NULL auto_increment,
  `code` varchar(11) character set utf8 NOT NULL COMMENT 'Short, human-readable name for employee. This value is kept synchronized with usr_username and salesrep_number, and so is unique across all three tables emp, usr, and salesrep.',
  `number` varchar(255) character set utf8 default NULL COMMENT 'Official employee number. This might be used for ID badges, payroll accounting, or other purposes.',
  `firstname` varchar(255) character set utf8 NOT NULL,
  `middlename` varchar(255) character set utf8 NOT NULL,
  `lastname` varchar(255) character set utf8 NOT NULL,
  `birthday` date NOT NULL,
  `plate_of_birth` varchar(255) character set utf8 NOT NULL,
  `home_phone` varchar(20) character set utf8 default NULL,
  `mobile_phone` varchar(20) character set utf8 NOT NULL,
  `sex` bit(1) NOT NULL,
  `email` varchar(50) character set utf8 default NULL,
  `identification` int(10) NOT NULL COMMENT 'Số chứng minh nhân dân',
  `identification_plate` varchar(50) character set utf8 NOT NULL,
  `identification_date` date NOT NULL,
  `image` varchar(255) character set utf8 default NULL,
  `job_id` int(11) default NULL,
  `official_register_date` date default NULL COMMENT 'ngày làm chính thức',
  `address` varchar(255) character set utf8 default NULL COMMENT 'địa chỉ thường trú',
  `address_tmp` varchar(255) character set utf8 default NULL COMMENT 'địa chỉ bán trú',
  `district_id` int(11) default NULL,
  `district_tmp_id` int(11) default NULL,
  `city_id` int(11) default NULL,
  `city_tmp_id` int(11) default NULL,
  `type` int(1) default NULL COMMENT 'lao động(trực tiếp or gián tiếp)',
  `shop_id` int(11) default NULL,
  `probationary_date` date default NULL COMMENT 'Ngày thử việc',
  `cumulative` decimal(19,0) default '0',
  `status` bit(1) default NULL,
  `organization_id` int(11) default NULL,
  `department_id` int(11) default NULL,
  `manager_id` int(11) default NULL,
  `description` text character set utf8,
  `description_layoff` varchar(255) character set utf8 default NULL,
  `date_layoff` date default NULL,
  `levelofedu_id` tinyint(4) default NULL,
  `field_edu` varchar(255) character set utf8 default NULL,
  `rateOfStock` decimal(19,2) default NULL,
  `qtyOfStock` decimal(19,0) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `code` USING BTREE (`code`),
  UNIQUE KEY `number` USING BTREE (`number`),
  KEY `shop_id` USING BTREE (`shop_id`),
  KEY `position_id` USING BTREE (`job_id`),
  KEY `manager_id` USING BTREE (`manager_id`),
  KEY `department_id` USING BTREE (`department_id`),
  KEY `hr_employee_ibfk_9` USING BTREE (`city_tmp_id`),
  KEY `hr_employee_ibfk_6` USING BTREE (`district_id`),
  KEY `hr_employee_ibfk_7` USING BTREE (`city_id`),
  KEY `hr_employee_ibfk_8` USING BTREE (`district_tmp_id`),
  KEY `hr_employee_ibfk_10` USING BTREE (`levelofedu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `hr_employee`
--

INSERT INTO `hr_employee` (`id`, `code`, `number`, `firstname`, `middlename`, `lastname`, `birthday`, `plate_of_birth`, `home_phone`, `mobile_phone`, `sex`, `email`, `identification`, `identification_plate`, `identification_date`, `image`, `job_id`, `official_register_date`, `address`, `address_tmp`, `district_id`, `district_tmp_id`, `city_id`, `city_tmp_id`, `type`, `shop_id`, `probationary_date`, `cumulative`, `status`, `organization_id`, `department_id`, `manager_id`, `description`, `description_layoff`, `date_layoff`, `levelofedu_id`, `field_edu`, `rateOfStock`, `qtyOfStock`) VALUES
(1, '158', '1', 'Mai', 'Thanh', 'Lan', '1981-10-02', 'Sài Gòn', '213265', '0123456789', b'1', 'minhtuana1@yahoo.com', 250595229, 'CA Ngh? An', '2010-03-03', '1.jpg', 3, '2006-10-01', '4/7 Tô Hiến Thành', '', 1, NULL, 2, NULL, 1, 1, '2010-02-09', '0', b'0', NULL, 4, NULL, 'UBND tỉnh Bình Dương ban hành quy định: “Cán bộ, công chức (CBCC), viên chức và thân nhân của CBCC, viên chức khi từ trần, các cơ quan, đoàn thể, CBCC không mang theo vòng hoa khi đi viếng đám tang”. Ông Nguyễn Khoa Hải, Phó Giám đốc Sở Văn hóa - Thể thao và Du lịch tỉnh Bình Dương khẳng định không viếng bằng vòng hoa để hạn chế phô trương.\r\n\r\nThưa ông, với quy định này, trong trường hợp lãnh đạo Sở Văn hóa - Thể thao và Du lịch (VH-TT-DL) có người thân qua đời, chẳng lẽ công chức của sở đi viếng tang mà không mang vòng hoa?\r\n\r\nÔng Nguyễn Khoa Hải: Phải gương mẫu từ trên xuống dưới, từ trong ra ngoài, từ trước ra sau! Sở đã tham mưu để UBND tỉnh ra quy định này thì cán bộ lãnh đạo sở phải thực hiện. Mình đưa ra mà mình không thực hiện thì nói ai nghe?\r\n\r\nKhông phô trương, lãng phí trong tiệc cưới, đám tang là chủ trương, chỉ đạo có từ nhiều năm trước của Bộ Chính trị, của Chính phủ, của Bộ VH-TT-DL. Nhưng đây là vấn đề nhạy cảm. Các địa phương khác có thể không quan tâm đến chuyện này, nhưng tỉnh Bình Dương muốn thực hiện nên cụ thể hóa để làm tốt chủ trương chung. CBCC, viên chức phải là người thực hiện đầu tiên. Chẳng lẽ trong một khu phố có 2 đám tang: đám tang của người thân cán bộ thì la liệt vòng hoa; đám tang của dân thường lại thực hiện đúng chủ trương. Như thế rất mâu thuẫn.', '', '2012-09-02', 5, 'kế toán', '11.78', '244375'),
(3, '159', NULL, 'Lê ', 'Thị Bích', 'Loan', '2012-10-03', 'Quảng Ngãi', '', '0123589654', b'1', '', 250595228, 'Long An', '2012-09-04', '3.jpg', 1, '2006-02-01', '123 Tr?n Phú', '', 1, NULL, 2, NULL, 1, 1, '2012-09-05', '0', b'0', NULL, 4, NULL, 'nhảm nhí quá ông tuấn ơi', 'tttttttttttttttttttttttttttttttttttt', '1970-01-15', 5, NULL, '5.00', '103750'),
(4, '114', NULL, 'Tran', 'Thị Quỳnh', 'Như', '1982-10-30', 'Đà Lạt', '0633587895', '0903030924', b'1', 'yummy21vn@yahoo.com', 250564875, 'CA Lâm ??ng', '1999-09-04', '4.jpg', 1, '2008-12-01', '113 ?inh Tiên Hoàng', '', 1, NULL, 2, NULL, 0, 1, '2012-09-03', '0', b'0', NULL, 5, NULL, 'sdfsdfsdfsd', '', '2012-09-02', 5, 'kế toán', '7.50', '155625'),
(5, '115', NULL, 'Vũ', 'Thị ', 'Oanh', '1975-10-17', 'Nam Định', '', '0987546854', b'1', '', 658954652, 'CA Long An', '2010-09-03', '5.jpg', 1, '1995-12-01', '124 B?c H?i', '', 1, NULL, 2, NULL, 0, 1, '2012-09-01', '0', b'1', NULL, 5, NULL, 'sdfsdfsdfsd', 'cfbgxdfbvx', '2012-09-02', 5, NULL, NULL, NULL),
(6, '116', NULL, 'Phạm ', 'Thị Thùy', 'Trang', '1982-10-01', 'Gò Công ', '', '0906875245', b'1', '', 98754256, 'CA Lào Cai', '2005-09-03', '6.jpg', 2, '2004-07-01', '', '', NULL, NULL, NULL, NULL, 1, 1, '2012-09-04', '0', b'0', NULL, 4, NULL, 'cvbfcvbxcbxcv', 'dfgsdgwetwetw', '1970-01-01', 5, 'Kinh tế', '3.75', '77813'),
(8, '117', NULL, 'Phạm ', 'Thị Hoài', 'Thương', '1984-10-01', 'Kiên Giang', '', '0907854568', b'1', '', 250595254, 'CA Hu?', '2000-09-04', '8.jpg', 1, '2004-05-01', '124 B?c H?i', '', 1, NULL, 2, NULL, 0, 2, '2012-09-06', '0', b'1', NULL, 3, NULL, 'regtdfgdfgdfgdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2012-10-08', 5, NULL, NULL, NULL),
(9, '118', NULL, 'Nguyễn', 'Thị Hương', 'Trinh', '1964-09-08', 'Gò Vấp', '', '0122584758', b'1', '', 2147483647, 'CA H? Chí Minh', '2012-09-06', NULL, 1, '1997-09-01', '123 Tr?n Phú', '', 1, NULL, 2, NULL, 1, 1, '2012-09-11', '0', b'0', NULL, 3, NULL, NULL, NULL, '2012-09-02', 4, NULL, '2.25', '46688'),
(10, '119', NULL, 'Tô', 'Thị Kim ', 'Thanh', '1984-09-08', 'Sài Gòn', '', '0988655455', b'1', '', 15489658, 'CA Hà N?i', '1980-09-06', '10.jpg', 2, '2012-10-01', '121, H? Bá Ki?n', '', NULL, NULL, 1, NULL, 1, 1, '2012-08-07', '0', b'0', NULL, 3, NULL, '', '', NULL, 4, 'kế toán', '6.50', '134875'),
(11, '120', NULL, 'Phan ', 'Khắc ', 'Hiếu', '1990-09-08', 'Trà Vinh', '', '0256897548', b'0', '', 50858456, 'CA H? Chí Minh', '2000-09-07', NULL, 1, '2012-10-01', '4/7 Tô Hi?n Thành', '', 1, NULL, 2, NULL, 0, 1, '2012-09-11', '0', b'0', NULL, 7, NULL, NULL, 'buon`', '2012-10-13', 4, NULL, NULL, NULL),
(12, '123', NULL, 'Trần ', 'Giang ', 'Phong', '1975-09-09', 'Gò Vấp ', '0633681020', '0949555821', b'0', '', 250595229, 'Ca lam dong', '2012-09-01', '12.jpg', 1, '1997-08-01', 'dau do', 'sdfsafdas', 1, 1, 2, 2, 0, 1, '2012-09-01', '0', b'0', NULL, 4, NULL, '', 'ban chuyen gia dinh', '2012-09-28', 4, NULL, NULL, NULL),
(13, '148', NULL, 'Huỳnh', 'Dân ', 'Trình', '1968-11-06', 'Vĩnh Long', '0633821025', '09068552121', b'0', 'myhuyen93@yahoo.com', 250568698, 'Ca lam dong', '2000-08-09', '13.jpg', 1, '1994-06-01', '121, H? Bá Ki?n', '', 1, NULL, 2, NULL, 1, 1, '2005-11-04', '0', b'0', NULL, 3, NULL, '', '', NULL, 4, 'kế toán', NULL, NULL),
(14, '124', NULL, 'Trần ', 'Xuân ', 'Đường', '1977-11-06', 'Cần Thơ', '', '0123456784', b'0', '', 250595257, 'CA Hồ Chí Minh', '2005-09-03', NULL, 1, '2004-05-01', '124 Bắc Hải', '', 1, NULL, 2, NULL, 1, 1, '2012-09-11', '0', b'0', NULL, 6, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(15, '555', NULL, 'Lê ', 'Hoàng', 'Giang', '1983-11-16', 'Bến Tre ', '', '0123456789', b'0', '', 3416546, 'Ca lam dong', '2012-09-07', '15.jpg', 2, '2006-07-01', '', '', NULL, NULL, NULL, NULL, 0, 1, NULL, '0', b'0', NULL, 4, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(16, '6455', NULL, 'Nguyễn', 'Khánh ', 'Duy', '1986-11-08', 'Phú Yên', '', '0123456789', b'0', '', 3416546, 'dfgdfgdfgdf', '2012-09-05', '16.jpg', 1, '2007-07-01', '', '', NULL, NULL, NULL, NULL, 0, 1, '2012-09-05', '0', b'0', NULL, 3, NULL, NULL, NULL, '2012-09-02', 3, NULL, NULL, NULL),
(17, '111111', NULL, 'Dương ', 'Hải ', 'Quan', '1984-11-04', 'Sài Gòn', '', '0123456', b'0', '', 123456789, 'afafsg', '2012-09-11', '17.jpg', 3, '2005-10-01', '', '', NULL, NULL, NULL, NULL, 0, 1, NULL, '0', b'0', NULL, 5, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(18, 'gjgjgjgj', NULL, 'Phan ', 'Tấn ', 'Huy', '1988-12-15', 'Sài Gon', '', '0123456', b'0', 'minhtuan@sdfsadas.dfgd', 123456789, 'afafaf', '1970-01-01', '18.jpg', 2, '2012-07-01', '', '', NULL, NULL, NULL, NULL, 0, 1, NULL, '0', b'0', NULL, 4, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(19, 'test', NULL, 'Nguyễn', 'Thành ', 'Văn', '1987-10-01', 'Hà Nội', '', '253534343', b'0', '', 123456789, 'adfaf', '2012-09-11', '19.jpg', 2, '2009-06-01', '', '', NULL, NULL, NULL, NULL, 0, 1, NULL, '0', b'0', NULL, 3, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(20, 'test2', NULL, 'Dương', ' Hoàng Bảo', 'Châu', '1982-10-26', 'Sài Gòn', '', '535435353', b'1', '', 123456789, 'afafaf', '1970-01-01', '20.jpg', 1, '2003-11-01', '', '', NULL, NULL, NULL, NULL, 0, 2, NULL, '0', b'0', NULL, 5, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(24, '7sdfsf', NULL, 'Đào', 'Thị Thu ', 'Huệ', '1970-10-26', 'Sài Gòn', '0393568957', '13213', b'1', 'yummy21vn@yahoo.com', 3416546, 'dfgdfgdfgdf', '1970-01-01', '24.jpg', 1, '2004-05-01', '', '', NULL, NULL, NULL, NULL, 0, 1, '1970-01-01', '0', b'0', NULL, 3, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(25, '3213fgf', NULL, 'Hà ', 'Ngọc ', 'Thiện', '1990-10-10', 'Sài Gòn', '', '13213', b'0', '', 3416546, 'CA Huế', '1970-01-01', '25.jpg', 1, '2012-01-01', '', '', NULL, NULL, NULL, NULL, 0, 1, '1970-01-01', '0', b'0', NULL, 3, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(26, '3213', NULL, 'Phạm', 'Thanh ', 'Sơn', '1983-10-13', 'Nam Định', '', '0123456789', b'0', '', 1313, 'CA Huế', '1970-01-01', '26.jpg', 1, '2008-06-01', '', '', NULL, NULL, NULL, NULL, 0, 1, '1970-01-01', '0', b'0', NULL, 4, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(27, ' dkjfhbskd', NULL, 'Trần ', 'Lê Thanh', 'Thảo', '1976-10-18', 'Thanh Hóa', '', '316365', b'0', '', 250595229, 'Ca lam dong', '1970-01-01', '27.jpg', 3, '2000-10-01', '', '', NULL, NULL, NULL, NULL, 0, 1, '1970-01-01', '0', b'0', NULL, 4, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL),
(30, '3213dfgdfgs', NULL, 'Trần', 'Thị', 'Tơ', '1976-10-22', 'Sài Gòn', '', '0123456789', b'1', 'dfcxcsacszx@yahoo.com', 3416546, 'dfgdfgdfgdf', '1970-01-01', '30.jpg', 2, '1997-10-01', '', '', NULL, NULL, NULL, NULL, 0, 2, '1970-01-01', '0', b'0', NULL, 4, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL),
(32, '7', NULL, 'Lê ', 'Văn', 'Trí', '1976-11-15', 'Sài Gòn', '', '0123456789', b'0', '', 3416546, 'Ca lam dong', '1970-01-01', '32.jpg', 2, '2000-06-01', '', '', NULL, NULL, NULL, NULL, 0, 1, NULL, '0', b'0', NULL, 3, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL),
(35, 'afafag', NULL, 'Trần', 'Xuân', 'Hòa', '1990-09-13', 'Cần Thơ ', '', '423434343', b'0', '', 3416546, 'adad', '1970-01-01', '35.jpg', 2, '2011-01-01', '', '', NULL, NULL, NULL, NULL, 0, 1, NULL, '0', b'0', NULL, 5, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL),
(38, '1sdjlkfjsl', NULL, 'Trần ', 'Nghiệp', 'Tân', '1971-09-08', 'Sài Gòn', '', '316365', b'0', '', 3416546, 'dfgdfgdfgdf', '2012-09-14', '', 1, '2007-09-01', '', '', NULL, NULL, NULL, NULL, 0, 1, NULL, '0', b'0', NULL, 4, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL),
(39, '123456sdasa', NULL, 'Trần', 'Quốc', 'Huy', '1986-09-25', 'Bà Rịa Vũng Tàu', '', '0122584758', b'0', 'myhuyen93@yahoo.com', 1313, 'dfgdfgdfgdf', '2012-09-03', '', 1, '2008-02-01', '', '', NULL, NULL, NULL, NULL, 1, 1, NULL, '0', b'0', NULL, 4, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL),
(42, '3213145', NULL, 'Lê', 'Văn', 'Nhật', '1975-11-05', 'Sài Gòn', '', '13213', b'0', '', 1313, 'dfgdfgdfgdf', '2012-09-06', '42.jpg', 2, '2011-02-01', '', '', NULL, NULL, NULL, NULL, 0, 1, '2012-09-05', '0', b'0', NULL, 3, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL),
(43, '32134879', NULL, 'Nguyễn', 'Văn ', 'Trí', '1993-11-22', 'Sài Gòn', '0393568957', '13213', b'0', '', 3416546, 'Ca lam dong', '2012-09-04', '', 1, '2012-11-01', '', '', NULL, NULL, NULL, NULL, 0, 1, '2012-09-01', '0', b'0', NULL, 4, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL),
(44, 'new', NULL, 'Trần ', 'Minh', 'Tấn', '1966-11-24', 'Đà Lạt', '', '0123456789', b'0', '', 3416546, 'adfaf', '1970-01-01', '44.jpg', 1, '2005-01-01', '', '', NULL, NULL, NULL, NULL, 0, 1, NULL, '0', b'0', NULL, 5, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL),
(46, 'NEW NEW NEW', NULL, 'Nguyễn ', 'Văn', 'Viện', '1989-11-13', 'Đà Lạt', '', '0123456789', b'0', '', 3416546, 'adfaf', '1970-01-01', '46.jpg', 1, '2007-08-01', '', '', NULL, NULL, NULL, NULL, 0, 1, NULL, '0', b'0', NULL, 5, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL),
(47, '154', NULL, 'nguy', 'Văn', 'Cường', '1985-10-01', 'Hồ Chí MInh', '0633681020', '0123456789', b'0', 'myhuyen93@yahoo.com', 1313, 'Ca lam dong', '2010-10-03', '47.jpg', 1, '2012-10-01', '', '', NULL, NULL, NULL, NULL, 1, 1, '2012-10-01', '0', b'0', NULL, 4, NULL, 'xyz abc', '', NULL, 1, 'kế toán', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hr_payment`
--

CREATE TABLE IF NOT EXISTS `hr_payment` (
  `id` int(11) NOT NULL auto_increment,
  `date` date default NULL,
  `type` tinyint(4) default NULL COMMENT '1:mua co phan,2:bán co phan, 3:trả lãi',
  `emp_id` int(11) default NULL,
  `batch_id` int(11) default NULL,
  `note` varchar(255) default NULL,
  `amt` decimal(19,0) default '0',
  `type1` tinyint(4) default NULL,
  `tran_id` int(11) default NULL,
  `period_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `batch_id` USING BTREE (`batch_id`),
  KEY `emp_id` USING BTREE (`emp_id`),
  KEY `tran_id` USING BTREE (`tran_id`),
  KEY `period_id` USING BTREE (`period_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `hr_payment`
--

INSERT INTO `hr_payment` (`id`, `date`, `type`, `emp_id`, `batch_id`, `note`, `amt`, `type1`, `tran_id`, `period_id`) VALUES
(13, '2012-12-12', 0, 4, 25, 'Tiền mặt', '300000000', NULL, 18, NULL),
(14, '2012-12-12', 0, 9, 25, 'Tiền mặt', '50000000', NULL, 20, NULL),
(15, '2012-12-12', 0, 1, 25, 'Tiền mặt', '350000000', NULL, 16, NULL),
(16, '2012-12-12', 0, 1, 28, 'Tiền mặt', '15000000', 0, 22, NULL),
(17, '2012-12-12', 0, 3, 28, 'Tiền mặt', '7500000', 0, 23, NULL),
(18, '2012-12-12', 0, 4, 28, 'Tiền mặt', '11250000', 0, 24, NULL),
(19, '2012-12-12', 0, 6, 28, 'Tiền mặt', '5625000', 0, 25, NULL),
(20, '2012-12-12', 0, 9, 28, 'Tiền mặt', '3375000', 0, 26, NULL),
(21, '2012-12-12', 0, 10, 28, 'Tiền mặt', '9750000', 0, 27, NULL),
(22, '2012-12-12', 1, 1, NULL, '1', '30000000', NULL, 28, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hr_profit`
--

CREATE TABLE IF NOT EXISTS `hr_profit` (
  `id` int(11) NOT NULL auto_increment,
  `date` date default NULL,
  `amt` decimal(19,0) default NULL,
  `rateLoan` float(19,0) default NULL,
  `amtdebit` decimal(19,0) default NULL,
  `note` varchar(255) default NULL,
  `type` tinyint(4) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hr_profit`
--

INSERT INTO `hr_profit` (`id`, `date`, `amt`, `rateLoan`, `amtdebit`, `note`, `type`) VALUES
(3, '2012-12-14', '10000000', NULL, NULL, '', 0),
(4, '2012-12-15', '20000000', NULL, NULL, '', 0),
(5, '2012-12-16', '30000000', NULL, NULL, '', 0),
(6, '2012-12-17', '40000000', NULL, NULL, '', 0),
(8, '2012-12-15', '500000000', NULL, NULL, 'Chi cổ đông ngày 15-12-2012', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hr_profit_detail`
--

CREATE TABLE IF NOT EXISTS `hr_profit_detail` (
  `id` int(11) NOT NULL auto_increment,
  `profit_id` int(11) default NULL,
  `emp_id` int(11) NOT NULL,
  `amt` decimal(19,0) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `emp_id` USING BTREE (`emp_id`),
  KEY `profit_id` USING BTREE (`profit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `hr_profit_detail`
--

INSERT INTO `hr_profit_detail` (`id`, `profit_id`, `emp_id`, `amt`, `type`, `date`) VALUES
(13, 3, 1, '1177711', 0, '2012-12-14'),
(14, 3, 3, '500000', 0, '2012-12-14'),
(15, 3, 4, '750000', 0, '2012-12-14'),
(16, 3, 6, '375002', 0, '2012-12-14'),
(17, 3, 9, '225002', 0, '2012-12-14'),
(18, 3, 10, '650000', 0, '2012-12-14'),
(19, 4, 1, '2355422', 0, '2012-12-15'),
(20, 4, 3, '1000000', 0, '2012-12-15'),
(21, 4, 4, '1500000', 0, '2012-12-15'),
(22, 4, 6, '750005', 0, '2012-12-15'),
(23, 4, 9, '450005', 0, '2012-12-15'),
(24, 4, 10, '1300000', 0, '2012-12-15'),
(25, 5, 1, '3533133', 0, '2012-12-16'),
(26, 5, 3, '1500000', 0, '2012-12-16'),
(27, 5, 4, '2250000', 0, '2012-12-16'),
(28, 5, 6, '1125007', 0, '2012-12-16'),
(29, 5, 9, '675007', 0, '2012-12-16'),
(30, 5, 10, '1950000', 0, '2012-12-16'),
(31, 6, 1, '4710843', 0, '2012-12-17'),
(32, 6, 3, '2000000', 0, '2012-12-17'),
(33, 6, 4, '3000000', 0, '2012-12-17'),
(34, 6, 6, '1500010', 0, '2012-12-17'),
(35, 6, 9, '900010', 0, '2012-12-17'),
(36, 6, 10, '2600000', 0, '2012-12-17'),
(38, NULL, 1, '2500000', 1, '2012-12-14'),
(39, NULL, 3, '1000000', 1, '2012-12-14'),
(40, NULL, 4, '2500000', 1, '2012-12-14'),
(41, NULL, 6, '1400000', 1, '2012-12-14'),
(42, NULL, 9, '500000', 1, '2012-12-14'),
(43, NULL, 10, '1800000', 1, '2012-12-14'),
(50, 8, 1, '58885542', 2, '2012-12-15'),
(51, 8, 3, '25000000', 2, '2012-12-15'),
(52, 8, 4, '37500000', 2, '2012-12-15'),
(53, 8, 6, '18750120', 2, '2012-12-15'),
(54, 8, 9, '11250120', 2, '2012-12-15'),
(55, 8, 10, '32500000', 2, '2012-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `hr_share`
--

CREATE TABLE IF NOT EXISTS `hr_share` (
  `id` int(11) NOT NULL auto_increment,
  `valueofstock` decimal(10,0) default NULL,
  `totalassets` decimal(10,0) default NULL,
  `note` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hr_share`
--

INSERT INTO `hr_share` (`id`, `valueofstock`, `totalassets`, `note`) VALUES
(1, '2000', '4150000000', 'Tổng tài sản');

-- --------------------------------------------------------

--
-- Table structure for table `hr_transaction`
--

CREATE TABLE IF NOT EXISTS `hr_transaction` (
  `id` int(11) NOT NULL auto_increment,
  `date` date default NULL,
  `emp_id` int(11) default NULL,
  `qty` decimal(19,0) default NULL,
  `amt` decimal(19,0) default NULL,
  `batch_id` int(11) default NULL,
  `note` varchar(255) default NULL,
  `type` tinyint(1) default '1',
  PRIMARY KEY  (`id`),
  KEY `batch_id` USING BTREE (`batch_id`),
  KEY `emp_id` USING BTREE (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `hr_transaction`
--

INSERT INTO `hr_transaction` (`id`, `date`, `emp_id`, `qty`, `amt`, `batch_id`, `note`, `type`) VALUES
(16, '2012-12-12', 1, '250000', '500000000', 25, NULL, NULL),
(17, '2012-12-12', 3, '100000', '200000000', 25, NULL, NULL),
(18, '2012-12-12', 4, '150000', '300000000', 25, NULL, NULL),
(19, '2012-12-12', 6, '75000', '150000000', 25, NULL, NULL),
(20, '2012-12-12', 9, '45000', '90000000', 25, NULL, NULL),
(21, '2012-12-12', 10, '130000', '260000000', 25, NULL, NULL),
(22, '2012-12-12', 1, '9375', '18750000', 28, 'Tăng vốn cổ phần', 1),
(23, '2012-12-12', 3, '3750', '7500000', 28, 'Tăng vốn cổ phần', 1),
(24, '2012-12-12', 4, '5625', '11250000', 28, 'Tăng vốn cổ phần', 1),
(25, '2012-12-12', 6, '2813', '5625000', 28, 'Tăng vốn cổ phần', 1),
(26, '2012-12-12', 9, '1688', '3375000', 28, 'Tăng vốn cổ phần', 1),
(27, '2012-12-12', 10, '4875', '9750000', 28, 'Tăng vốn cổ phần', 1),
(28, '2012-12-12', 1, '15000', '30000000', NULL, '1', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hr_employee`
--
ALTER TABLE `hr_employee`
  ADD CONSTRAINT `hr_employee_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `hr_shop` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hr_employee_ibfk_2` FOREIGN KEY (`levelofedu_id`) REFERENCES `hr_levelofedu` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hr_employee_ibfk_3` FOREIGN KEY (`manager_id`) REFERENCES `hr_employee` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hr_employee_ibfk_4` FOREIGN KEY (`department_id`) REFERENCES `hr_department` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hr_employee_ibfk_5` FOREIGN KEY (`job_id`) REFERENCES `hr_job` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hr_employee_ibfk_6` FOREIGN KEY (`district_id`) REFERENCES `hr_district` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hr_employee_ibfk_7` FOREIGN KEY (`city_id`) REFERENCES `hr_city` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hr_employee_ibfk_8` FOREIGN KEY (`district_tmp_id`) REFERENCES `hr_district` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hr_employee_ibfk_9` FOREIGN KEY (`city_tmp_id`) REFERENCES `hr_city` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `hr_payment`
--
ALTER TABLE `hr_payment`
  ADD CONSTRAINT `hr_payment_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `hr_batch` (`id`),
  ADD CONSTRAINT `hr_payment_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  ADD CONSTRAINT `hr_payment_ibfk_3` FOREIGN KEY (`tran_id`) REFERENCES `hr_transaction` (`id`),
  ADD CONSTRAINT `hr_payment_ibfk_4` FOREIGN KEY (`period_id`) REFERENCES `hr_payperiod` (`id`);

--
-- Constraints for table `hr_profit_detail`
--
ALTER TABLE `hr_profit_detail`
  ADD CONSTRAINT `hr_profit_detail_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  ADD CONSTRAINT `hr_profit_detail_ibfk_2` FOREIGN KEY (`profit_id`) REFERENCES `hr_profit` (`id`);

--
-- Constraints for table `hr_transaction`
--
ALTER TABLE `hr_transaction`
  ADD CONSTRAINT `hr_transaction_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `hr_batch` (`id`),
  ADD CONSTRAINT `hr_transaction_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
