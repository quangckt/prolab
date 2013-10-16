/*
Navicat MySQL Data Transfer

Source Server         : nguyenvanan
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : prolab

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2012-12-11 09:21:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hr_employee`
-- ----------------------------
DROP TABLE IF EXISTS `hr_employee`;
CREATE TABLE `hr_employee` (
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
  `rateOfStock` decimal(19,0) default NULL,
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
  KEY `hr_employee_ibfk_10` USING BTREE (`levelofedu_id`),
  CONSTRAINT `hr_employee_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `hr_shop` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_employee_ibfk_2` FOREIGN KEY (`levelofedu_id`) REFERENCES `hr_levelofedu` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_employee_ibfk_3` FOREIGN KEY (`manager_id`) REFERENCES `hr_employee` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_employee_ibfk_4` FOREIGN KEY (`department_id`) REFERENCES `hr_department` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_employee_ibfk_5` FOREIGN KEY (`job_id`) REFERENCES `hr_job` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_employee_ibfk_6` FOREIGN KEY (`district_id`) REFERENCES `hr_district` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_employee_ibfk_7` FOREIGN KEY (`city_id`) REFERENCES `hr_city` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_employee_ibfk_8` FOREIGN KEY (`district_tmp_id`) REFERENCES `hr_district` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_employee_ibfk_9` FOREIGN KEY (`city_tmp_id`) REFERENCES `hr_city` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_employee
-- ----------------------------
INSERT INTO `hr_employee` VALUES ('1', '158', '1', 'Mai', 'Thanh', 'Lan', '1981-10-02', 'Sài Gòn', '213265', '0123456789', '', 'minhtuana1@yahoo.com', '250595229', 'CA Ngh? An', '2010-03-03', '1.jpg', '3', '2006-10-01', '4/7 Tô Hiến Thành', '', '1', null, '2', null, '1', '1', '2010-02-09', '0', '', null, '4', null, 'UBND tỉnh Bình Dương ban hành quy định: “Cán bộ, công chức (CBCC), viên chức và thân nhân của CBCC, viên chức khi từ trần, các cơ quan, đoàn thể, CBCC không mang theo vòng hoa khi đi viếng đám tang”. Ông Nguyễn Khoa Hải, Phó Giám đốc Sở Văn hóa - Thể thao và Du lịch tỉnh Bình Dương khẳng định không viếng bằng vòng hoa để hạn chế phô trương.\r\n\r\nThưa ông, với quy định này, trong trường hợp lãnh đạo Sở Văn hóa - Thể thao và Du lịch (VH-TT-DL) có người thân qua đời, chẳng lẽ công chức của sở đi viếng tang mà không mang vòng hoa?\r\n\r\nÔng Nguyễn Khoa Hải: Phải gương mẫu từ trên xuống dưới, từ trong ra ngoài, từ trước ra sau! Sở đã tham mưu để UBND tỉnh ra quy định này thì cán bộ lãnh đạo sở phải thực hiện. Mình đưa ra mà mình không thực hiện thì nói ai nghe?\r\n\r\nKhông phô trương, lãng phí trong tiệc cưới, đám tang là chủ trương, chỉ đạo có từ nhiều năm trước của Bộ Chính trị, của Chính phủ, của Bộ VH-TT-DL. Nhưng đây là vấn đề nhạy cảm. Các địa phương khác có thể không quan tâm đến chuyện này, nhưng tỉnh Bình Dương muốn thực hiện nên cụ thể hóa để làm tốt chủ trương chung. CBCC, viên chức phải là người thực hiện đầu tiên. Chẳng lẽ trong một khu phố có 2 đám tang: đám tang của người thân cán bộ thì la liệt vòng hoa; đám tang của dân thường lại thực hiện đúng chủ trương. Như thế rất mâu thuẫn.', '', '2012-09-02', '5', 'kế toán', '1250', '259375');
INSERT INTO `hr_employee` VALUES ('3', '159', null, 'Lê ', 'Thị Bích', 'Loan', '2012-10-03', 'Quảng Ngãi', '', '0123589654', '', '', '250595228', 'Long An', '2012-09-04', '3.jpg', '1', '2006-02-01', '123 Tr?n Phú', '', '1', null, '2', null, '1', '1', '2012-09-05', '0', '', null, '4', null, 'nhảm nhí quá ông tuấn ơi', 'tttttttttttttttttttttttttttttttttttt', '1970-01-15', '5', null, '500', '103750');
INSERT INTO `hr_employee` VALUES ('4', '114', null, 'Tran', 'Thị Quỳnh', 'Như', '1982-10-30', 'Đà Lạt', '0633587895', '0903030924', '', 'yummy21vn@yahoo.com', '250564875', 'CA Lâm ??ng', '1999-09-04', '4.jpg', '1', '2008-12-01', '113 ?inh Tiên Hoàng', '', '1', null, '2', null, '0', '1', '2012-09-03', '0', '', null, '5', null, 'sdfsdfsdfsd', '', '2012-09-02', '5', 'kế toán', '375', '77813');
INSERT INTO `hr_employee` VALUES ('5', '115', null, 'Vũ', 'Thị ', 'Oanh', '1975-10-17', 'Nam Định', '', '0987546854', '', '', '658954652', 'CA Long An', '2010-09-03', '5.jpg', '1', '1995-12-01', '124 B?c H?i', '', '1', null, '2', null, '0', '1', '2012-09-01', '0', '', null, '5', null, 'sdfsdfsdfsd', 'cfbgxdfbvx', '2012-09-02', '5', null, null, null);
INSERT INTO `hr_employee` VALUES ('6', '116', null, 'Phạm ', 'Thị Thùy', 'Trang', '1982-10-01', 'Gò Công ', '', '0906875245', '', '', '98754256', 'CA Lào Cai', '2005-09-03', '6.jpg', '2', '2004-07-01', '', '', null, null, null, null, '1', '1', '2012-09-04', '0', '', null, '4', null, 'cvbfcvbxcbxcv', 'dfgsdgwetwetw', '1970-01-01', '5', 'Kinh tế', '750', '155625');
INSERT INTO `hr_employee` VALUES ('8', '117', null, 'Phạm ', 'Thị Hoài', 'Thương', '1984-10-01', 'Kiên Giang', '', '0907854568', '', '', '250595254', 'CA Hu?', '2000-09-04', '8.jpg', '1', '2004-05-01', '124 B?c H?i', '', '1', null, '2', null, '0', '2', '2012-09-06', '0', '', null, '3', null, 'regtdfgdfgdfgdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2012-10-08', '5', null, null, null);
INSERT INTO `hr_employee` VALUES ('9', '118', null, 'Nguyễn', 'Thị Hương', 'Trinh', '1964-09-08', 'Gò Vấp', '', '0122584758', '', '', '2147483647', 'CA H? Chí Minh', '2012-09-06', null, '1', '1997-09-01', '123 Tr?n Phú', '', '1', null, '2', null, '1', '1', '2012-09-11', '0', '', null, '3', null, null, null, '2012-09-02', '4', null, '750', '155625');
INSERT INTO `hr_employee` VALUES ('10', '119', null, 'Tô', 'Thị Kim ', 'Thanh', '1984-09-08', 'Sài Gòn', '', '0988655455', '', '', '15489658', 'CA Hà N?i', '1980-09-06', '10.jpg', '2', '2012-10-01', '121, H? Bá Ki?n', '', null, null, '1', null, '1', '1', '2012-08-07', '0', '', null, '3', null, '', '', null, '4', 'kế toán', '125', '25938');
INSERT INTO `hr_employee` VALUES ('11', '120', null, 'Phan ', 'Khắc ', 'Hiếu', '1990-09-08', 'Trà Vinh', '', '0256897548', '', '', '50858456', 'CA H? Chí Minh', '2000-09-07', null, '1', '2012-10-01', '4/7 Tô Hi?n Thành', '', '1', null, '2', null, '0', '1', '2012-09-11', '0', '', null, '7', null, null, 'buon`', '2012-10-13', '4', null, null, null);
INSERT INTO `hr_employee` VALUES ('12', '123', null, 'Trần ', 'Giang ', 'Phong', '1975-09-09', 'Gò Vấp ', '0633681020', '0949555821', '', '', '250595229', 'Ca lam dong', '2012-09-01', '12.jpg', '1', '1997-08-01', 'dau do', 'sdfsafdas', '1', '1', '2', '2', '0', '1', '2012-09-01', '0', '', null, '4', null, '', 'ban chuyen gia dinh', '2012-09-28', '4', null, null, null);
INSERT INTO `hr_employee` VALUES ('13', '148', null, 'Huỳnh', 'Dân ', 'Trình', '1968-11-06', 'Vĩnh Long', '0633821025', '09068552121', '', 'myhuyen93@yahoo.com', '250568698', 'Ca lam dong', '2000-08-09', '13.jpg', '1', '1994-06-01', '121, H? Bá Ki?n', '', '1', null, '2', null, '1', '1', '2005-11-04', '0', '', null, '3', null, '', '', null, '4', 'kế toán', null, null);
INSERT INTO `hr_employee` VALUES ('14', '124', null, 'Trần ', 'Xuân ', 'Đường', '1977-11-06', 'Cần Thơ', '', '0123456784', '', '', '250595257', 'CA Hồ Chí Minh', '2005-09-03', null, '1', '2004-05-01', '124 Bắc Hải', '', '1', null, '2', null, '1', '1', '2012-09-11', '0', '', null, '6', null, null, null, null, '3', null, null, null);
INSERT INTO `hr_employee` VALUES ('15', '555', null, 'Lê ', 'Hoàng', 'Giang', '1983-11-16', 'Bến Tre ', '', '0123456789', '', '', '3416546', 'Ca lam dong', '2012-09-07', '15.jpg', '2', '2006-07-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '4', null, null, null, null, '3', null, null, null);
INSERT INTO `hr_employee` VALUES ('16', '6455', null, 'Nguyễn', 'Khánh ', 'Duy', '1986-11-08', 'Phú Yên', '', '0123456789', '', '', '3416546', 'dfgdfgdfgdf', '2012-09-05', '16.jpg', '1', '2007-07-01', '', '', null, null, null, null, '0', '1', '2012-09-05', '0', '', null, '3', null, null, null, '2012-09-02', '3', null, null, null);
INSERT INTO `hr_employee` VALUES ('17', '111111', null, 'Dương ', 'Hải ', 'Quan', '1984-11-04', 'Sài Gòn', '', '0123456', '', '', '123456789', 'afafsg', '2012-09-11', '17.jpg', '3', '2005-10-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '5', null, null, null, null, '3', null, null, null);
INSERT INTO `hr_employee` VALUES ('18', 'gjgjgjgj', null, 'Phan ', 'Tấn ', 'Huy', '1988-12-15', 'Sài Gon', '', '0123456', '', 'minhtuan@sdfsadas.dfgd', '123456789', 'afafaf', '1970-01-01', '18.jpg', '2', '2012-07-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '4', null, null, null, null, '3', null, null, null);
INSERT INTO `hr_employee` VALUES ('19', 'test', null, 'Nguyễn', 'Thành ', 'Văn', '1987-10-01', 'Hà Nội', '', '253534343', '', '', '123456789', 'adfaf', '2012-09-11', '19.jpg', '2', '2009-06-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '3', null, null, null, null, '1', null, null, null);
INSERT INTO `hr_employee` VALUES ('20', 'test2', null, 'Dương', ' Hoàng Bảo', 'Châu', '1982-10-26', 'Sài Gòn', '', '535435353', '', '', '123456789', 'afafaf', '1970-01-01', '20.jpg', '1', '2003-11-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '5', null, null, null, null, '1', null, null, null);
INSERT INTO `hr_employee` VALUES ('24', '7sdfsf', null, 'Đào', 'Thị Thu ', 'Huệ', '1970-10-26', 'Sài Gòn', '0393568957', '13213', '', 'yummy21vn@yahoo.com', '3416546', 'dfgdfgdfgdf', '1970-01-01', '24.jpg', '1', '2004-05-01', '', '', null, null, null, null, '0', '1', '1970-01-01', '0', '', null, '3', null, null, null, null, '1', null, null, null);
INSERT INTO `hr_employee` VALUES ('25', '3213fgf', null, 'Hà ', 'Ngọc ', 'Thiện', '1990-10-10', 'Sài Gòn', '', '13213', '', '', '3416546', 'CA Huế', '1970-01-01', '25.jpg', '1', '2012-01-01', '', '', null, null, null, null, '0', '1', '1970-01-01', '0', '', null, '3', null, null, null, null, '1', null, null, null);
INSERT INTO `hr_employee` VALUES ('26', '3213', null, 'Phạm', 'Thanh ', 'Sơn', '1983-10-13', 'Nam Định', '', '0123456789', '', '', '1313', 'CA Huế', '1970-01-01', '26.jpg', '1', '2008-06-01', '', '', null, null, null, null, '0', '1', '1970-01-01', '0', '', null, '4', null, null, null, null, '1', null, null, null);
INSERT INTO `hr_employee` VALUES ('27', ' dkjfhbskd', null, 'Trần ', 'Lê Thanh', 'Thảo', '1976-10-18', 'Thanh Hóa', '', '316365', '', '', '250595229', 'Ca lam dong', '1970-01-01', '27.jpg', '3', '2000-10-01', '', '', null, null, null, null, '0', '1', '1970-01-01', '0', '', null, '4', null, null, null, null, '2', null, null, null);
INSERT INTO `hr_employee` VALUES ('30', '3213dfgdfgs', null, 'Trần', 'Thị', 'Tơ', '1976-10-22', 'Sài Gòn', '', '0123456789', '', 'dfcxcsacszx@yahoo.com', '3416546', 'dfgdfgdfgdf', '1970-01-01', '30.jpg', '2', '1997-10-01', '', '', null, null, null, null, '0', '2', '1970-01-01', '0', '', null, '4', null, null, null, null, '2', null, null, null);
INSERT INTO `hr_employee` VALUES ('32', '7', null, 'Lê ', 'Văn', 'Trí', '1976-11-15', 'Sài Gòn', '', '0123456789', '', '', '3416546', 'Ca lam dong', '1970-01-01', '32.jpg', '2', '2000-06-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '3', null, null, null, null, '2', null, null, null);
INSERT INTO `hr_employee` VALUES ('35', 'afafag', null, 'Trần', 'Xuân', 'Hòa', '1990-09-13', 'Cần Thơ ', '', '423434343', '', '', '3416546', 'adad', '1970-01-01', '35.jpg', '2', '2011-01-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '5', null, null, null, null, '2', null, null, null);
INSERT INTO `hr_employee` VALUES ('38', '1sdjlkfjsl', null, 'Trần ', 'Nghiệp', 'Tân', '1971-09-08', 'Sài Gòn', '', '316365', '', '', '3416546', 'dfgdfgdfgdf', '2012-09-14', '', '1', '2007-09-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '4', null, null, null, null, '6', null, null, null);
INSERT INTO `hr_employee` VALUES ('39', '123456sdasa', null, 'Trần', 'Quốc', 'Huy', '1986-09-25', 'Bà Rịa Vũng Tàu', '', '0122584758', '', 'myhuyen93@yahoo.com', '1313', 'dfgdfgdfgdf', '2012-09-03', '', '1', '2008-02-01', '', '', null, null, null, null, '1', '1', null, '0', '', null, '4', null, null, null, null, '6', null, null, null);
INSERT INTO `hr_employee` VALUES ('42', '3213145', null, 'Lê', 'Văn', 'Nhật', '1975-11-05', 'Sài Gòn', '', '13213', '', '', '1313', 'dfgdfgdfgdf', '2012-09-06', '42.jpg', '2', '2011-02-01', '', '', null, null, null, null, '0', '1', '2012-09-05', '0', '', null, '3', null, null, null, null, '6', null, null, null);
INSERT INTO `hr_employee` VALUES ('43', '32134879', null, 'Nguyễn', 'Văn ', 'Trí', '1993-11-22', 'Sài Gòn', '0393568957', '13213', '', '', '3416546', 'Ca lam dong', '2012-09-04', '', '1', '2012-11-01', '', '', null, null, null, null, '0', '1', '2012-09-01', '0', '', null, '4', null, null, null, null, '6', null, null, null);
INSERT INTO `hr_employee` VALUES ('44', 'new', null, 'Trần ', 'Minh', 'Tấn', '1966-11-24', 'Đà Lạt', '', '0123456789', '', '', '3416546', 'adfaf', '1970-01-01', '44.jpg', '1', '2005-01-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '5', null, null, null, null, '6', null, null, null);
INSERT INTO `hr_employee` VALUES ('46', 'NEW NEW NEW', null, 'Nguyễn ', 'Văn', 'Viện', '1989-11-13', 'Đà Lạt', '', '0123456789', '', '', '3416546', 'adfaf', '1970-01-01', '46.jpg', '1', '2007-08-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '5', null, null, null, null, '6', null, null, null);
INSERT INTO `hr_employee` VALUES ('47', '154', null, 'nguy', 'Văn', 'Cường', '1985-10-01', 'Hồ Chí MInh', '0633681020', '0123456789', '', 'myhuyen93@yahoo.com', '1313', 'Ca lam dong', '2010-10-03', '47.jpg', '1', '2012-10-01', '', '', null, null, null, null, '1', '1', '2012-10-01', '0', '', null, '4', null, 'xyz abc', '', null, '1', 'kế toán', null, null);
