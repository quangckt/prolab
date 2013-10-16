/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : prolab

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-01-08 11:06:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `authassignment`
-- ----------------------------
DROP TABLE IF EXISTS `authassignment`;
CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of authassignment
-- ----------------------------
INSERT INTO `authassignment` VALUES ('Admin', '1', null, 'N;');
INSERT INTO `authassignment` VALUES ('Admin', '2', null, 'N;');
INSERT INTO `authassignment` VALUES ('Authenticated', '2', null, 'N;');
INSERT INTO `authassignment` VALUES ('Guest', '2', null, 'N;');
INSERT INTO `authassignment` VALUES ('Hr.Default.*', '2', null, 'N;');

-- ----------------------------
-- Table structure for `authitem`
-- ----------------------------
DROP TABLE IF EXISTS `authitem`;
CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of authitem
-- ----------------------------
INSERT INTO `authitem` VALUES ('Admin', '2', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Authenticated', '2', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Guest', '2', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Default.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Default.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.*', '1', 'Phòng ban', null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Contact', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Error', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Login', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Logout', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Activation.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Activation.Activation', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Admin.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Admin.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Admin.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Admin.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Admin.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Admin.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Default.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Default.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Login.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Login.Login', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Logout.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Logout.Logout', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Profile.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Profile.Changepassword', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Profile.Edit', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Profile.Profile', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.ProfileField.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.ProfileField.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.ProfileField.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.ProfileField.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.ProfileField.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.ProfileField.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Recovery.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Recovery.Recovery', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Registration.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.Registration.Registration', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.User.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.User.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('User.User.View', '0', null, null, 'N;');

-- ----------------------------
-- Table structure for `authitemchild`
-- ----------------------------
DROP TABLE IF EXISTS `authitemchild`;
CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of authitemchild
-- ----------------------------

-- ----------------------------
-- Table structure for `eventcalendar`
-- ----------------------------
DROP TABLE IF EXISTS `eventcalendar`;
CREATE TABLE `eventcalendar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `assignedTo` varchar(20) DEFAULT NULL,
  `calendarId` int(11) DEFAULT NULL,
  `description` text,
  `visibility` int(11) DEFAULT NULL,
  `associationId` int(11) DEFAULT NULL,
  `associationType` tinyint(4) NOT NULL,
  `associationName` varchar(100) DEFAULT NULL,
  `startDate` bigint(20) DEFAULT NULL,
  `startTime` varchar(20) DEFAULT NULL,
  `dueDate` bigint(20) DEFAULT NULL,
  `endTime` varchar(20) DEFAULT NULL,
  `showTime` tinyint(4) DEFAULT '0',
  `priority` varchar(10) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `createDate` bigint(20) DEFAULT NULL,
  `complete` varchar(5) DEFAULT 'No',
  `reminder` varchar(5) DEFAULT NULL,
  `completedBy` varchar(20) DEFAULT NULL,
  `completeDate` bigint(20) DEFAULT NULL,
  `lastUpdated` bigint(20) DEFAULT NULL,
  `updatedBy` varchar(20) DEFAULT NULL,
  `workflowId` int(10) unsigned DEFAULT NULL,
  `stageNumber` int(10) unsigned DEFAULT NULL,
  `allDay` tinyint(4) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `syncGoogleCalendarEventId` text,
  PRIMARY KEY (`id`),
  KEY `assignedTo` (`assignedTo`),
  KEY `type` (`type`),
  KEY `associationType` (`associationType`,`associationId`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `eventcalendar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eventcalendar
-- ----------------------------
INSERT INTO `eventcalendar` VALUES ('2', '1', 'chames', null, 'Comment test', '1', '1', '0', 'Trade-in 2006 R1200G', null, null, '1335493846', null, '0', 'Low', '', '1335493846', 'Yes', 'No', 'chames', '1335493846', '1335493846', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('3', '1', 'chames', null, 'Follow up on 10 user opportunity.', '1', '6', '0', 'Joseph Jacobs', null, null, '1336746413', null, '0', 'Medium', '', '1335494170', 'No', 'Yes', '', null, '1335494170', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('4', '1', 'chames', null, 'Schedule demo for local team', '1', '8', '0', 'Chase Harvey', null, null, '1337092013', null, '0', 'Low', '', '1335499539', 'No', 'Yes', '', null, '1335499539', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('5', '1', 'chames', null, 'Call next week', '1', '7', '0', 'Kara Warren', null, null, '1335882413', null, '0', 'Medium', '', '1335499250', 'No', 'Yes', '', null, '1335499250', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('6', '1', 'chames', null, 'Answer questions regarding volume discounts', '1', '10', '0', 'William Firth', null, '', '1336746413', '', '0', 'Medium', '', '1335501401', 'No', 'Yes', '', null, '1335501401', 'chames', null, null, null, '', null);
INSERT INTO `eventcalendar` VALUES ('7', '1', 'chames', null, 'Send 2 tickets to Fall Rodeo.', '1', '11', '0', 'Adam Davies', null, null, '1336573613', null, '0', 'Low', '', '1335501658', 'No', 'Yes', '', null, '1335501658', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('8', '1', 'chames', null, 'Provide update on everyone at DDC that has seen demo', '1', '12', '0', 'Darla Whey', null, null, '1336055213', null, '0', 'Low', '', '1335501926', 'No', 'Yes', '', null, '1335501926', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('221', '1', null, null, 'thế nào đây ta', '1', null, '0', null, '1350036840', null, null, null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '0', 'blue', null);
INSERT INTO `eventcalendar` VALUES ('226', '1', null, null, 'hello word', null, null, '0', null, '1350353820', null, null, null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '0', 'red', null);
INSERT INTO `eventcalendar` VALUES ('227', '1', null, null, 'Nghỉ lễ quốc khánh 2-9, chúc anh em công ty vui vẻ với gia đình nhé.', null, null, '1', null, '1346518800', null, '1346518800', null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '1', null, null);
INSERT INTO `eventcalendar` VALUES ('229', '1', null, null, 'test ngày tháng năm', '1', null, '0', null, '1350320400', null, null, null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '1', 'blue', null);
INSERT INTO `eventcalendar` VALUES ('230', '1', null, null, 'Nghỉ tết dương lịch 1-1', null, null, '1', null, '1325350800', null, '1325350800', null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '1', null, null);
INSERT INTO `eventcalendar` VALUES ('231', '1', null, null, 'Nghỉ tết trung thu', null, null, '1', null, '1350320400', '0:0', null, null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '0', null, null);
INSERT INTO `eventcalendar` VALUES ('232', '1', null, null, 'Nghỉ tết giữa năm nào anh em', null, null, '1', null, '1350320400', '0:0', null, null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '0', null, null);
INSERT INTO `eventcalendar` VALUES ('233', '1', null, null, 'Nghỉ lễ 30-04', null, null, '1', null, '1335718800', null, null, null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '1', null, null);
INSERT INTO `eventcalendar` VALUES ('234', '1', null, null, 'Nghỉ lễ giáng sinh 25-12', null, null, '1', null, '1356368400', null, null, null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '1', null, null);
INSERT INTO `eventcalendar` VALUES ('246', '1', null, null, 'test 1', '0', null, '0', null, '1351011600', '6:10', '1351011600', '13:55', '0', null, null, null, 'No', null, null, null, null, null, null, null, '0', '#c9ccf7', null);
INSERT INTO `eventcalendar` VALUES ('247', '1', null, null, 'test sáng chiều', '0', null, '0', null, '1351616400', '2:20', '1351702800', '2:20', '0', null, null, null, 'No', null, null, null, null, null, null, null, '0', '#f70000', '1');

-- ----------------------------
-- Table structure for `events`
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `allDay` smallint(5) unsigned NOT NULL DEFAULT '0',
  `start` int(10) unsigned DEFAULT NULL,
  `end` int(10) unsigned DEFAULT NULL,
  `editable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('20', '1', 'sfsgsgsgsg', '0', '1349137800', '1349137800', '0');
INSERT INTO `events` VALUES ('21', '1', 'fgfdgfdg', '0', '1349316000', '1349326800', '1');
INSERT INTO `events` VALUES ('22', '1', 'fgfdgdf', '0', '1348968600', '1348974000', '1');
INSERT INTO `events` VALUES ('23', '1', 'fgfdgfdg', '0', '1349060400', '1349067600', '1');
INSERT INTO `events` VALUES ('24', '1', 'test event 2', '0', '1348986600', '1348995600', '1');
INSERT INTO `events` VALUES ('25', '1', 'aaaaaaaaaa tttttttttt', '0', '1350261000', '1350261000', '0');
INSERT INTO `events` VALUES ('26', '1', 'test', '0', '1350261000', '1350261000', '0');
INSERT INTO `events` VALUES ('27', '1', 'aaaaaaaaaattttttttttttttttttttttt', '0', '1350433800', '1350433800', '0');
INSERT INTO `events` VALUES ('28', '1', 'test event 1', '0', '1352077200', '1352080800', '1');
INSERT INTO `events` VALUES ('29', '1', 'fgdfgdfgfdgdf', '0', '1351992600', '1351996200', '1');
INSERT INTO `events` VALUES ('30', '1', 'fgfdgfdg', '0', '1352336400', '1352340000', '1');
INSERT INTO `events` VALUES ('31', '1', 'sdsd', '0', '1349326800', '1349337600', '1');
INSERT INTO `events` VALUES ('32', '1', 'sdsd', '0', '1348965000', '1348968600', '1');
INSERT INTO `events` VALUES ('33', '1', 'sdsd', '0', '1349067600', '1349076600', '1');
INSERT INTO `events` VALUES ('34', '1', 'ssss', '0', '1349490600', '1349501400', '1');
INSERT INTO `events` VALUES ('35', '1', 'fgfdgdf', '1', '1367082000', '1367085600', '1');

-- ----------------------------
-- Table structure for `events_helper`
-- ----------------------------
DROP TABLE IF EXISTS `events_helper`;
CREATE TABLE `events_helper` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events_helper
-- ----------------------------
INSERT INTO `events_helper` VALUES ('1', '1', 'test event 1');
INSERT INTO `events_helper` VALUES ('2', '1', 'test event 2');
INSERT INTO `events_helper` VALUES ('4', '1', 'fgfdgfdg');
INSERT INTO `events_helper` VALUES ('5', '1', 'fgfdgdf');
INSERT INTO `events_helper` VALUES ('6', '1', 'fgdfgdfgfdgdf');

-- ----------------------------
-- Table structure for `events_user_preference`
-- ----------------------------
DROP TABLE IF EXISTS `events_user_preference`;
CREATE TABLE `events_user_preference` (
  `user_id` int(10) unsigned NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `mobile_alert` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(40) DEFAULT NULL,
  `email_alert` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events_user_preference
-- ----------------------------
INSERT INTO `events_user_preference` VALUES ('1', '', '0', '', '0');
INSERT INTO `events_user_preference` VALUES ('2', null, '0', null, '0');

-- ----------------------------
-- Table structure for `hr_batch`
-- ----------------------------
DROP TABLE IF EXISTS `hr_batch`;
CREATE TABLE `hr_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `qty` decimal(10,0) DEFAULT NULL,
  `amt` decimal(10,0) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `dateloan` date DEFAULT NULL,
  `monthloan` decimal(10,0) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_batch
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_city`
-- ----------------------------
DROP TABLE IF EXISTS `hr_city`;
CREATE TABLE `hr_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `code_city` varchar(11) DEFAULT NULL COMMENT 'mã tỉnh',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_city
-- ----------------------------
INSERT INTO `hr_city` VALUES ('1', 'Hà Nội', '029');
INSERT INTO `hr_city` VALUES ('2', 'Hồ Chí Minh', '083');

-- ----------------------------
-- Table structure for `hr_department`
-- ----------------------------
DROP TABLE IF EXISTS `hr_department`;
CREATE TABLE `hr_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_department
-- ----------------------------
INSERT INTO `hr_department` VALUES ('3', 'Quầy', null);
INSERT INTO `hr_department` VALUES ('4', 'Quản lý', null);
INSERT INTO `hr_department` VALUES ('5', 'In rọi', null);
INSERT INTO `hr_department` VALUES ('6', 'Album', null);
INSERT INTO `hr_department` VALUES ('7', 'Thiết kế', null);
INSERT INTO `hr_department` VALUES ('8', 'In thanh toán', null);

-- ----------------------------
-- Table structure for `hr_district`
-- ----------------------------
DROP TABLE IF EXISTS `hr_district`;
CREATE TABLE `hr_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `hr_district_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `hr_city` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_district
-- ----------------------------
INSERT INTO `hr_district` VALUES ('1', 'Quận 1', '2');
INSERT INTO `hr_district` VALUES ('4', 'Quận 3', '2');
INSERT INTO `hr_district` VALUES ('7', 'Quận 4', '2');
INSERT INTO `hr_district` VALUES ('8', 'Quận 2', '2');
INSERT INTO `hr_district` VALUES ('9', 'Quận 5', '2');
INSERT INTO `hr_district` VALUES ('10', 'Quận 6', '2');
INSERT INTO `hr_district` VALUES ('11', 'Quận 7', '2');
INSERT INTO `hr_district` VALUES ('12', 'Quận 8', '2');
INSERT INTO `hr_district` VALUES ('13', 'Quận 9', '2');
INSERT INTO `hr_district` VALUES ('14', 'Quận 10', '2');
INSERT INTO `hr_district` VALUES ('15', 'Quận 11', '2');
INSERT INTO `hr_district` VALUES ('16', 'Quận 12', '2');

-- ----------------------------
-- Table structure for `hr_education`
-- ----------------------------
DROP TABLE IF EXISTS `hr_education`;
CREATE TABLE `hr_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `study_at` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `study_long` tinyint(4) DEFAULT NULL,
  `study_field` tinyint(4) DEFAULT NULL,
  `levelofedu` tinyint(4) DEFAULT NULL,
  `finished_year` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`emp_id`),
  KEY `study_field` (`study_field`),
  KEY `levelofedu` (`levelofedu`),
  CONSTRAINT `hr_education_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_education_ibfk_2` FOREIGN KEY (`levelofedu`) REFERENCES `hr_levelofedu` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_education_ibfk_3` FOREIGN KEY (`study_field`) REFERENCES `hr_study_field` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_education
-- ----------------------------
INSERT INTO `hr_education` VALUES ('1', '11', 'kinh te', '4', '2', '5', '2010');
INSERT INTO `hr_education` VALUES ('2', '1', 'kinh te', '4', '2', '3', '2010');
INSERT INTO `hr_education` VALUES ('3', '12', 'kinh te', '4', '2', '5', '2010');
INSERT INTO `hr_education` VALUES ('4', '3', 'fsdsdfs', '4', '3', '5', '7');
INSERT INTO `hr_education` VALUES ('5', '4', 'sadasd', '3', '3', '5', '2015');
INSERT INTO `hr_education` VALUES ('9', '9', '', null, null, null, null);
INSERT INTO `hr_education` VALUES ('10', '10', 'kinh te', '4', '2', '5', '2014');
INSERT INTO `hr_education` VALUES ('11', '13', 'Kinh T?', '4', '2', '5', '2005');
INSERT INTO `hr_education` VALUES ('13', '14', 'THCS Trần Phú', '4', '5', '1', '2000');
INSERT INTO `hr_education` VALUES ('14', '14', 'THPT Đức Trọng', '3', '5', '2', '2003');
INSERT INTO `hr_education` VALUES ('15', '14', 'Aptech', '2', '2', '3', '2005');
INSERT INTO `hr_education` VALUES ('16', '14', 'công nghiệp 4', '2', '2', '4', '2007');
INSERT INTO `hr_education` VALUES ('17', '14', 'kinh tế', '2', '2', '5', '2009');
INSERT INTO `hr_education` VALUES ('18', '15', 'kinh te', '4', '2', '5', '2014');
INSERT INTO `hr_education` VALUES ('19', '16', 'kinh te', '4', '2', '5', '2014');
INSERT INTO `hr_education` VALUES ('20', '17', 'sdgdsgs', null, null, '4', null);
INSERT INTO `hr_education` VALUES ('21', '18', '', null, null, '3', null);
INSERT INTO `hr_education` VALUES ('22', '19', '', null, null, '5', null);
INSERT INTO `hr_education` VALUES ('23', '20', '', null, null, '1', null);
INSERT INTO `hr_education` VALUES ('24', '5', 'kinh te', '4', '2', '5', '2014');
INSERT INTO `hr_education` VALUES ('25', '24', 'kinh te', '4', '2', '4', '2014');
INSERT INTO `hr_education` VALUES ('26', '25', 'kinh te', '4', '2', '5', '2014');
INSERT INTO `hr_education` VALUES ('27', '26', 'kinh te', '4', '3', '5', '2014');
INSERT INTO `hr_education` VALUES ('28', '27', 'kinh te', '4', '2', '5', '2014');
INSERT INTO `hr_education` VALUES ('29', '38', 'kinh te', '4', '2', '4', '2014');
INSERT INTO `hr_education` VALUES ('30', '42', 'kinh te', '4', '2', '5', null);
INSERT INTO `hr_education` VALUES ('31', '43', 'kinh te', '4', '2', '5', '2014');
INSERT INTO `hr_education` VALUES ('32', '46', '6574', '127', '2', '1', '47474');
INSERT INTO `hr_education` VALUES ('33', '6', '1212', '127', '3', '5', '121212');
INSERT INTO `hr_education` VALUES ('34', '47', 'kinh te', '4', '2', '3', '2014');

-- ----------------------------
-- Table structure for `hr_employee`
-- ----------------------------
DROP TABLE IF EXISTS `hr_employee`;
CREATE TABLE `hr_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT 'Short, human-readable name for employee. This value is kept synchronized with usr_username and salesrep_number, and so is unique across all three tables emp, usr, and salesrep.',
  `number` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Official employee number. This might be used for ID badges, payroll accounting, or other purposes.',
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `middlename` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `birthday` date NOT NULL,
  `plate_of_birth` varchar(255) CHARACTER SET utf8 NOT NULL,
  `home_phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `mobile_phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sex` bit(1) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `identification` int(10) NOT NULL COMMENT 'Số chứng minh nhân dân',
  `identification_plate` varchar(50) CHARACTER SET utf8 NOT NULL,
  `identification_date` date NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `official_register_date` date DEFAULT NULL COMMENT 'ngày làm chính thức',
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'địa chỉ thường trú',
  `address_tmp` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'địa chỉ bán trú',
  `district_id` int(11) DEFAULT NULL,
  `district_tmp_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `city_tmp_id` int(11) DEFAULT NULL,
  `type` int(1) DEFAULT NULL COMMENT 'lao động(trực tiếp or gián tiếp)',
  `shop_id` int(11) DEFAULT NULL,
  `probationary_date` date DEFAULT NULL COMMENT 'Ngày thử việc',
  `cumulative` decimal(19,0) DEFAULT '0',
  `status` bit(1) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `description_layoff` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `date_layoff` date DEFAULT NULL,
  `levelofedu_id` tinyint(4) DEFAULT NULL,
  `field_edu` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  UNIQUE KEY `number` (`number`),
  KEY `shop_id` (`shop_id`),
  KEY `position_id` (`job_id`),
  KEY `manager_id` (`manager_id`),
  KEY `department_id` (`department_id`),
  KEY `hr_employee_ibfk_9` (`city_tmp_id`),
  KEY `hr_employee_ibfk_6` (`district_id`),
  KEY `hr_employee_ibfk_7` (`city_id`),
  KEY `hr_employee_ibfk_8` (`district_tmp_id`),
  KEY `hr_employee_ibfk_10` (`levelofedu_id`),
  CONSTRAINT `hr_employee_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `hr_shop` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hr_employee_ibfk_10` FOREIGN KEY (`levelofedu_id`) REFERENCES `hr_levelofedu` (`id`) ON UPDATE CASCADE,
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
INSERT INTO `hr_employee` VALUES ('1', '158', '1', 'Mai', 'Thanh', 'Lan', '1981-10-02', 'Sài Gòn', '213265', '0123456789', '', 'minhtuana1@yahoo.com', '250595229', 'CA Ngh? An', '2010-03-03', '1.jpg', '2', '2006-10-01', '4/7 Tô Hiến Thành', '', '1', null, '2', null, '1', '1', '2010-02-09', '0', '', null, '4', null, 'UBND tỉnh Bình Dương ban hành quy định: “Cán bộ, công chức (CBCC), viên chức và thân nhân của CBCC, viên chức khi từ trần, các cơ quan, đoàn thể, CBCC không mang theo vòng hoa khi đi viếng đám tang”. Ông Nguyễn Khoa Hải, Phó Giám đốc Sở Văn hóa - Thể thao và Du lịch tỉnh Bình Dương khẳng định không viếng bằng vòng hoa để hạn chế phô trương.\r\n\r\nThưa ông, với quy định này, trong trường hợp lãnh đạo Sở Văn hóa - Thể thao và Du lịch (VH-TT-DL) có người thân qua đời, chẳng lẽ công chức của sở đi viếng tang mà không mang vòng hoa?\r\n\r\nÔng Nguyễn Khoa Hải: Phải gương mẫu từ trên xuống dưới, từ trong ra ngoài, từ trước ra sau! Sở đã tham mưu để UBND tỉnh ra quy định này thì cán bộ lãnh đạo sở phải thực hiện. Mình đưa ra mà mình không thực hiện thì nói ai nghe?\r\n\r\nKhông phô trương, lãng phí trong tiệc cưới, đám tang là chủ trương, chỉ đạo có từ nhiều năm trước của Bộ Chính trị, của Chính phủ, của Bộ VH-TT-DL. Nhưng đây là vấn đề nhạy cảm. Các địa phương khác có thể không quan tâm đến chuyện này, nhưng tỉnh Bình Dương muốn thực hiện nên cụ thể hóa để làm tốt chủ trương chung. CBCC, viên chức phải là người thực hiện đầu tiên. Chẳng lẽ trong một khu phố có 2 đám tang: đám tang của người thân cán bộ thì la liệt vòng hoa; đám tang của dân thường lại thực hiện đúng chủ trương. Như thế rất mâu thuẫn.', '', '2012-09-02', '5', null);
INSERT INTO `hr_employee` VALUES ('3', '112', null, 'Lê ', 'Thị Bích', 'Loan', '2012-10-03', 'Quảng Ngãi', '', '0123589654', '', '', '250595228', 'Long An', '2012-09-04', '3.jpg', '1', '2006-02-01', '123 Tr?n Phú', '', '1', null, '2', null, '1', '1', '2012-09-05', '0', '', null, '4', null, 'nhảm nhí quá ông tuấn ơi', 'tttttttttttttttttttttttttttttttttttt', '1970-01-01', '5', null);
INSERT INTO `hr_employee` VALUES ('4', '114', null, 'Nguyễn', 'Thị Quỳnh', 'Như', '1982-10-30', 'Đà Lạt', '0633587895', '0903030924', '', 'yummy21vn@yahoo.com', '250564875', 'CA Lâm ??ng', '1999-09-04', '4.jpg', '1', '2008-12-01', '113 ?inh Tiên Hoàng', '', '1', null, '2', null, '0', '1', '2012-09-03', '0', '', null, '5', null, 'sdfsdfsdfsd', null, '2012-09-02', '5', null);
INSERT INTO `hr_employee` VALUES ('5', '115', null, 'Vũ', 'Thị ', 'Oanh', '1975-10-17', 'Nam Định', '', '0987546854', '', '', '658954652', 'CA Long An', '2010-09-03', '5.jpg', '1', '1995-12-01', '124 B?c H?i', '', '1', null, '2', null, '0', '1', '2012-09-01', '0', '', null, '5', null, 'sdfsdfsdfsd', 'cfbgxdfbvx', '2012-09-02', '5', null);
INSERT INTO `hr_employee` VALUES ('6', '116', null, 'Phạm ', 'Thị Thùy', 'Trang', '1982-10-01', 'Gò Công ', '', '0906875245', '', '', '98754256', 'CA Lào Cai', '2005-09-03', '6.jpg', '2', '2004-07-01', '', '', null, null, null, null, '1', '1', '2012-09-04', '0', '', null, '4', null, 'cvbfcvbxcbxcv', 'dfgsdgwetwetw', '1970-01-01', '5', 'Kinh tế');
INSERT INTO `hr_employee` VALUES ('8', '117', null, 'Phạm ', 'Thị Hoài', 'Thương', '1984-10-01', 'Kiên Giang', '', '0907854568', '', '', '250595254', 'CA Hu?', '2000-09-04', '8.jpg', '1', '2004-05-01', '124 B?c H?i', '', '1', null, '2', null, '0', '2', '2012-09-06', '0', '', null, '6', null, 'regtdfgdfgdfgdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', '1970-01-01', '5', null);
INSERT INTO `hr_employee` VALUES ('9', '118', null, 'Nguyễn', 'Thị Hương', 'Trinh', '1964-09-08', 'Gò Vấp', '', '0122584758', '', '', '2147483647', 'CA H? Chí Minh', '2012-09-06', null, '1', '1997-09-01', '123 Tr?n Phú', '', '1', null, '2', null, '1', '1', '2012-09-11', '0', '', null, '3', null, null, null, '2012-09-02', '4', null);
INSERT INTO `hr_employee` VALUES ('10', '119', null, 'Tô', 'Thị Kim ', 'Thanh', '1984-09-08', 'Sài Gòn', '', '0988655455', '', '', '15489658', 'CA Hà N?i', '1980-09-06', '10.jpg', '2', '2012-10-01', '121, H? Bá Ki?n', '', null, null, '1', null, '1', '1', '2012-08-07', '0', '', null, '3', null, '', '', null, '4', 'kế toán');
INSERT INTO `hr_employee` VALUES ('11', '120', null, 'Phan ', 'Khắc ', 'Hiếu', '1990-09-08', 'Trà Vinh', '', '0256897548', '', '', '50858456', 'CA H? Chí Minh', '2000-09-07', null, '1', '2012-10-01', '4/7 Tô Hi?n Thành', '', '1', null, '2', null, '0', '1', '2012-09-11', '0', '', null, '7', null, null, null, null, '4', null);
INSERT INTO `hr_employee` VALUES ('12', '123', null, 'Trần ', 'Giang ', 'Phong', '1975-09-09', 'Gò Vấp ', '0633681020', '0949555821', '', '', '250595229', 'Ca lam dong', '2012-09-01', '12.jpg', '1', '1997-08-01', 'dau do', 'sdfsafdas', '1', '1', '2', '2', '0', '1', '2012-09-01', '0', '', null, '4', null, '', 'ban chuyen gia dinh', '2012-09-28', '4', null);
INSERT INTO `hr_employee` VALUES ('13', '148', null, 'Huỳnh', 'Dân ', 'Trình', '1968-11-06', 'Vĩnh Long', '0633821025', '09068552121', '', 'myhuyen93@yahoo.com', '250568698', 'Ca lam dong', '2000-08-09', '13.jpg', '1', '1994-06-01', '121, H? Bá Ki?n', '', '1', null, '2', null, '1', '1', '2005-11-04', '0', '', null, '3', null, '', '', null, '4', 'kế toán');
INSERT INTO `hr_employee` VALUES ('14', '124', null, 'Trần ', 'Xuân ', 'Đường', '1977-11-06', 'Cần Thơ', '', '0123456784', '', '', '250595257', 'CA Hồ Chí Minh', '2005-09-03', null, '1', '2004-05-01', '124 Bắc Hải', '', '1', null, '2', null, '1', '1', '2012-09-11', '0', '', null, '6', null, null, null, null, '3', null);
INSERT INTO `hr_employee` VALUES ('15', '555', null, 'Lê ', 'Hoàng', 'Giang', '1983-11-16', 'Bến Tre ', '', '0123456789', '', '', '3416546', 'Ca lam dong', '2012-09-07', '15.jpg', '2', '2006-07-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '4', null, null, null, null, '3', null);
INSERT INTO `hr_employee` VALUES ('16', '6455', null, 'Nguyễn', 'Khánh ', 'Duy', '1986-11-08', 'Phú Yên', '', '0123456789', '', '', '3416546', 'dfgdfgdfgdf', '2012-09-05', '16.jpg', '1', '2007-07-01', '', '', null, null, null, null, '0', '1', '2012-09-05', '0', '', null, '3', null, null, null, '2012-09-02', '3', null);
INSERT INTO `hr_employee` VALUES ('17', '111111', null, 'Dương ', 'Hải ', 'Quan', '1984-11-04', 'Sài Gòn', '', '0123456', '', '', '123456789', 'afafsg', '2012-09-11', '17.jpg', '3', '2005-10-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '5', null, null, null, null, '3', null);
INSERT INTO `hr_employee` VALUES ('18', 'gjgjgjgj', null, 'Phan ', 'Tấn ', 'Huy', '1988-12-15', 'Sài Gon', '', '0123456', '', 'minhtuan@sdfsadas.dfgd', '123456789', 'afafaf', '1970-01-01', '18.jpg', '2', '2012-07-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '4', null, null, null, null, '3', null);
INSERT INTO `hr_employee` VALUES ('19', 'test', null, 'Nguyễn', 'Thành ', 'Văn', '1987-10-01', 'Hà Nội', '', '253534343', '', '', '123456789', 'adfaf', '2012-09-11', '19.jpg', '2', '2009-06-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '3', null, null, null, null, '1', null);
INSERT INTO `hr_employee` VALUES ('20', 'test2', null, 'Dương', ' Hoàng Bảo', 'Châu', '1982-10-26', 'Sài Gòn', '', '535435353', '', '', '123456789', 'afafaf', '1970-01-01', '20.jpg', '1', '2003-11-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '5', null, null, null, null, '1', null);
INSERT INTO `hr_employee` VALUES ('24', '7sdfsf', null, 'Đào', 'Thị Thu ', 'Huệ', '1970-10-26', 'Sài Gòn', '0393568957', '13213', '', 'yummy21vn@yahoo.com', '3416546', 'dfgdfgdfgdf', '1970-01-01', '24.jpg', '1', '2004-05-01', '', '', null, null, null, null, '0', '1', '1970-01-01', '0', '', null, '3', null, null, null, null, '1', null);
INSERT INTO `hr_employee` VALUES ('25', '3213fgf', null, 'Hà ', 'Ngọc ', 'Thiện', '1990-10-10', 'Sài Gòn', '', '13213', '', '', '3416546', 'CA Huế', '1970-01-01', '25.jpg', '1', '2012-01-01', '', '', null, null, null, null, '0', '1', '1970-01-01', '0', '', null, '3', null, null, null, null, '1', null);
INSERT INTO `hr_employee` VALUES ('26', '3213', null, 'Phạm', 'Thanh ', 'Sơn', '1983-10-13', 'Nam Định', '', '0123456789', '', '', '1313', 'CA Huế', '1970-01-01', '26.jpg', '1', '2008-06-01', '', '', null, null, null, null, '0', '1', '1970-01-01', '0', '', null, '4', null, null, null, null, '1', null);
INSERT INTO `hr_employee` VALUES ('27', ' dkjfhbskd', null, 'Trần ', 'Lê Thanh', 'Thảo', '1976-10-18', 'Thanh Hóa', '', '316365', '', '', '250595229', 'Ca lam dong', '1970-01-01', '27.jpg', '3', '2000-10-01', '', '', null, null, null, null, '0', '1', '1970-01-01', '0', '', null, '4', null, null, null, null, '2', null);
INSERT INTO `hr_employee` VALUES ('30', '3213dfgdfgs', null, 'Trần', 'Thị', 'Tơ', '1976-10-22', 'Sài Gòn', '', '0123456789', '', 'dfcxcsacszx@yahoo.com', '3416546', 'dfgdfgdfgdf', '1970-01-01', '30.jpg', '2', '1997-10-01', '', '', null, null, null, null, '0', '2', '1970-01-01', '0', '', null, '4', null, null, null, null, '2', null);
INSERT INTO `hr_employee` VALUES ('32', '7', null, 'Lê ', 'Văn', 'Trí', '1976-11-15', 'Sài Gòn', '', '0123456789', '', '', '3416546', 'Ca lam dong', '1970-01-01', '32.jpg', '2', '2000-06-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '3', null, null, null, null, '2', null);
INSERT INTO `hr_employee` VALUES ('35', 'afafag', null, 'Trần', 'Xuân', 'Hòa', '1990-09-13', 'Cần Thơ ', '', '423434343', '', '', '3416546', 'adad', '1970-01-01', '35.jpg', '2', '2011-01-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '5', null, null, null, null, '2', null);
INSERT INTO `hr_employee` VALUES ('38', '1sdjlkfjsl', null, 'Trần ', 'Nghiệp', 'Tân', '1971-09-08', 'Sài Gòn', '', '316365', '', '', '3416546', 'dfgdfgdfgdf', '2012-09-14', '', '1', '2007-09-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '4', null, null, null, null, '6', null);
INSERT INTO `hr_employee` VALUES ('39', '123456sdasa', null, 'Trần', 'Quốc', 'Huy', '1986-09-25', 'Bà Rịa Vũng Tàu', '', '0122584758', '', 'myhuyen93@yahoo.com', '1313', 'dfgdfgdfgdf', '2012-09-03', '', '1', '2008-02-01', '', '', null, null, null, null, '1', '1', null, '0', '', null, '4', null, null, null, null, '6', null);
INSERT INTO `hr_employee` VALUES ('42', '3213145', null, 'Lê', 'Văn', 'Nhật', '1975-11-05', 'Sài Gòn', '', '13213', '', '', '1313', 'dfgdfgdfgdf', '2012-09-06', '42.jpg', '2', '2011-02-01', '', '', null, null, null, null, '0', '1', '2012-09-05', '0', '', null, '3', null, null, null, null, '6', null);
INSERT INTO `hr_employee` VALUES ('43', '32134879', null, 'Nguyễn', 'Văn ', 'Trí', '1993-11-22', 'Sài Gòn', '0393568957', '13213', '', '', '3416546', 'Ca lam dong', '2012-09-04', '', '1', '2012-11-01', '', '', null, null, null, null, '0', '1', '2012-09-01', '0', '', null, '4', null, null, null, null, '6', null);
INSERT INTO `hr_employee` VALUES ('44', 'new', null, 'Trần ', 'Minh', 'Tấn', '1966-11-24', 'Đà Lạt', '', '0123456789', '', '', '3416546', 'adfaf', '1970-01-01', '44.jpg', '1', '2005-01-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '5', null, null, null, null, '6', null);
INSERT INTO `hr_employee` VALUES ('46', 'NEW NEW NEW', null, 'Nguyễn ', 'Văn', 'Viện', '1989-11-13', 'Đà Lạt', '', '0123456789', '', '', '3416546', 'adfaf', '1970-01-01', '46.jpg', '1', '2007-08-01', '', '', null, null, null, null, '0', '1', null, '0', '', null, '5', null, null, null, null, '6', null);
INSERT INTO `hr_employee` VALUES ('47', '154', null, 'nguy', 'Văn', 'Cường', '1985-10-01', 'Hồ Chí MInh', '0633681020', '0123456789', '', 'myhuyen93@yahoo.com', '1313', 'Ca lam dong', '2010-10-03', '47.jpg', '1', '2012-10-01', '', '', null, null, null, null, '1', '1', '2012-10-01', '0', '', null, '4', null, 'xyz abc', '', null, '1', 'kế toán');

-- ----------------------------
-- Table structure for `hr_experience`
-- ----------------------------
DROP TABLE IF EXISTS `hr_experience`;
CREATE TABLE `hr_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `description` text,
  `todate` date DEFAULT NULL,
  `fromdate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hr_experience_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_experience
-- ----------------------------
INSERT INTO `hr_experience` VALUES ('1', '11', 'dfgdfgdfgdf', 'asdasdasd', '2012-09-03', '2012-09-05');
INSERT INTO `hr_experience` VALUES ('2', '1', 'dfgdfgdfgdf', 'asdasdasd', '2012-09-04', '2012-09-05');

-- ----------------------------
-- Table structure for `hr_history`
-- ----------------------------
DROP TABLE IF EXISTS `hr_history`;
CREATE TABLE `hr_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `fromdate` date DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hr_history_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_history
-- ----------------------------
INSERT INTO `hr_history` VALUES ('1', '11', '1', '2012-09-03', '2012-09-05', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('3', '12', '1', '2012-09-04', '2012-09-07', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('4', '3', '2', '2012-09-07', '2012-09-06', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('5', '4', null, null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('6', '5', null, null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('7', '6', null, null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('8', '8', null, null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('9', '9', null, null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('11', '13', '1', '2012-10-02', '2012-10-04', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('13', '14', '1', '2000-09-05', '2003-09-07', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('14', '14', '1', '2005-09-15', '2008-09-08', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('15', '14', '4', '2008-04-04', '2010-09-15', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('17', '1', '1', null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('18', '1', '1', null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('19', '1', '1', null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('21', '15', '1', '2012-09-08', '2012-09-07', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('22', '16', '2', null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('23', '17', '1', null, null, 'sdgsdg', null);
INSERT INTO `hr_history` VALUES ('24', '18', '1', null, null, 'afaf', null);
INSERT INTO `hr_history` VALUES ('25', '19', '1', null, null, 'sdgsdg', null);
INSERT INTO `hr_history` VALUES ('26', '20', '1', null, null, 'sdgsdg', null);
INSERT INTO `hr_history` VALUES ('27', '24', '1', '2012-09-08', '2012-09-02', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('28', '25', '2', '2012-09-07', '2012-09-12', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('29', '26', '2', '2012-09-07', '2012-09-09', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('30', '27', '2', '2012-09-06', '2012-09-08', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('31', '38', '1', '2012-09-08', '2012-09-15', 'hkj', null);
INSERT INTO `hr_history` VALUES ('32', '42', '1', null, null, 'minh tam', null);
INSERT INTO `hr_history` VALUES ('33', '43', '1', '2012-09-06', '2012-09-02', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('34', '46', '1', '2012-09-12', '2012-09-12', 'xbxb', null);
INSERT INTO `hr_history` VALUES ('44', '10', '1', '2012-10-02', '2012-10-10', 'Minh Tâm', 'aaaaaaaaaaaaaaaaaaaaaaaaa');
INSERT INTO `hr_history` VALUES ('47', '47', '1', '2012-10-01', '2012-10-02', 'minh tam', null);
INSERT INTO `hr_history` VALUES ('48', '10', '3', '2012-10-02', '2012-10-17', 'Minh Tâm', 'aaaaaaaaaaaaaaaaaaaaaaaaa');
INSERT INTO `hr_history` VALUES ('55', '10', '2', '2012-10-02', '2012-10-04', 'Minh Tâm', 'aaaaaaaaaaaaaaaaaaaaaaaaa');
INSERT INTO `hr_history` VALUES ('65', '10', '2', null, '2012-10-07', 'Minh Tâm', 'sdfsdlfsdfsd');
INSERT INTO `hr_history` VALUES ('66', '1', '1', null, '2012-10-09', 'Minh Tâm', 'fdsdfsdfsd');
INSERT INTO `hr_history` VALUES ('67', '1', '2', null, '1970-01-01', 'Minh Tâm', 'aaaaaaaaaaaa');

-- ----------------------------
-- Table structure for `hr_job`
-- ----------------------------
DROP TABLE IF EXISTS `hr_job`;
CREATE TABLE `hr_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_job
-- ----------------------------
INSERT INTO `hr_job` VALUES ('1', ' Nhân Viên');
INSERT INTO `hr_job` VALUES ('2', 'Chủ Doanh Nghiệp');
INSERT INTO `hr_job` VALUES ('3', 'Trưởng phòng');
INSERT INTO `hr_job` VALUES ('4', 'Phó Phòng');

-- ----------------------------
-- Table structure for `hr_levelofedu`
-- ----------------------------
DROP TABLE IF EXISTS `hr_levelofedu`;
CREATE TABLE `hr_levelofedu` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_levelofedu
-- ----------------------------
INSERT INTO `hr_levelofedu` VALUES ('1', '9/12');
INSERT INTO `hr_levelofedu` VALUES ('2', '12/12');
INSERT INTO `hr_levelofedu` VALUES ('3', 'Trung Cấp');
INSERT INTO `hr_levelofedu` VALUES ('4', 'Cao Đẳng');
INSERT INTO `hr_levelofedu` VALUES ('5', 'Đại Học');
INSERT INTO `hr_levelofedu` VALUES ('6', 'Trên Đại Học');

-- ----------------------------
-- Table structure for `hr_payment`
-- ----------------------------
DROP TABLE IF EXISTS `hr_payment`;
CREATE TABLE `hr_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL COMMENT '1:mua co phan,2:bán co phan, 3:trả lãi',
  `emp_id` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `amt` decimal(19,0) DEFAULT '0',
  `tran_id` int(11) DEFAULT NULL,
  `period_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `batch_id` (`batch_id`),
  KEY `emp_id` (`emp_id`),
  KEY `tran_id` (`tran_id`),
  KEY `period_id` (`period_id`),
  CONSTRAINT `hr_payment_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `hr_batch` (`id`),
  CONSTRAINT `hr_payment_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_payment_ibfk_3` FOREIGN KEY (`tran_id`) REFERENCES `hr_transaction` (`id`),
  CONSTRAINT `hr_payment_ibfk_4` FOREIGN KEY (`period_id`) REFERENCES `hr_payperiod` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_payment
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_payperiod`
-- ----------------------------
DROP TABLE IF EXISTS `hr_payperiod`;
CREATE TABLE `hr_payperiod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `rateloan` decimal(19,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_payperiod
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_position`
-- ----------------------------
DROP TABLE IF EXISTS `hr_position`;
CREATE TABLE `hr_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_position
-- ----------------------------
INSERT INTO `hr_position` VALUES ('1', ' Nhân Viên');

-- ----------------------------
-- Table structure for `hr_profit`
-- ----------------------------
DROP TABLE IF EXISTS `hr_profit`;
CREATE TABLE `hr_profit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `amt` decimal(19,0) DEFAULT NULL,
  `amtdebit` decimal(19,0) DEFAULT NULL,
  `note` varchar(0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_profit
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_profit_detail`
-- ----------------------------
DROP TABLE IF EXISTS `hr_profit_detail`;
CREATE TABLE `hr_profit_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profit_id` int(11) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `amt` decimal(19,0) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`),
  KEY `profit_id` (`profit_id`),
  CONSTRAINT `hr_profit_detail_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_profit_detail_ibfk_2` FOREIGN KEY (`profit_id`) REFERENCES `hr_profit` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_profit_detail
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_relation`
-- ----------------------------
DROP TABLE IF EXISTS `hr_relation`;
CREATE TABLE `hr_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `type_relation` tinyint(4) DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `weddingday` date DEFAULT NULL,
  `numofbrothers` tinyint(4) DEFAULT NULL,
  `numofsiters` tinyint(4) DEFAULT NULL,
  `notes` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_relation` (`type_relation`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hr_relation_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_relation
-- ----------------------------
INSERT INTO `hr_relation` VALUES ('1', '3', '1', 'Ph?m Gia Th?t', '1965-04-09', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('2', '4', '1', 'Bùi V?n M?nh', '1955-01-01', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('3', '5', '1', 'Hoàng Ng?c T??ng', '1962-09-06', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('4', '6', '1', 'Nguy?n Duy NH?t', '1962-09-14', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('5', '8', '1', 'Tr?n V?n Kh?e', '1954-09-05', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('6', '9', '1', 'Tr?n Kh??ng H??ng', '1950-01-01', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('7', '10', '1', ' Nguy?n Th? Th?m', '1944-01-01', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('8', '11', '1', 'Tr?n Tru?ng', '1966-04-09', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('12', '1', '1', 'fgdfgdfdf', '2012-09-10', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('13', '12', '1', 'tran cao thang', '2012-09-06', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('15', '13', '1', 'Nguy?n T?n D?ng', '1959-02-02', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('17', '14', '1', 'Phạm Công', '1970-12-01', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('19', '14', '3', 'Trương Tòng', '1987-09-06', '2012-09-04', null, null, null);
INSERT INTO `hr_relation` VALUES ('20', '14', '4', 'Trương Hoa', '2011-10-19', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('21', '15', '1', 'Tran Cao', '2012-09-14', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('22', '16', '1', 'Tran Cao', '2012-09-07', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('23', '17', '3', 'adaf', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('24', '18', '1', 'adaf', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('25', '19', '3', '', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('26', '20', '5', '', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('27', '24', '1', 'Phạm Thị Thương', '2000-03-02', '2012-09-08', null, null, null);
INSERT INTO `hr_relation` VALUES ('28', '25', '3', 'Phạm Thị Thương', '2012-09-14', '2012-09-08', null, null, null);
INSERT INTO `hr_relation` VALUES ('29', '26', '1', 'Phạm Thị Thương', '2012-09-08', '2012-09-07', null, null, null);
INSERT INTO `hr_relation` VALUES ('30', '27', '3', 'Phạm Thị Thương', '2012-09-08', '2012-09-09', null, null, null);
INSERT INTO `hr_relation` VALUES ('31', '27', '3', 'dgdg', '2012-09-14', '2012-09-18', null, null, null);
INSERT INTO `hr_relation` VALUES ('32', '38', '3', 'Tran Cao', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('33', '42', '1', '', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('34', '43', '1', 'Tran Cao', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('35', '5', '3', 'Trương Tòng', '2012-09-06', '2012-09-06', null, null, null);
INSERT INTO `hr_relation` VALUES ('36', '1', '5', 'Thuy Hoa', '2012-09-01', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('37', '46', '1', '', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('38', '47', '1', 'Tran Cao', '2012-09-07', '2012-09-09', null, null, null);

-- ----------------------------
-- Table structure for `hr_relation_type`
-- ----------------------------
DROP TABLE IF EXISTS `hr_relation_type`;
CREATE TABLE `hr_relation_type` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `isShowWeddingDay` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_relation_type
-- ----------------------------
INSERT INTO `hr_relation_type` VALUES ('1', 'Cha', '');
INSERT INTO `hr_relation_type` VALUES ('3', 'Chồng/Vợ', '');
INSERT INTO `hr_relation_type` VALUES ('4', 'Con', '');
INSERT INTO `hr_relation_type` VALUES ('5', 'Me', '');

-- ----------------------------
-- Table structure for `hr_share`
-- ----------------------------
DROP TABLE IF EXISTS `hr_share`;
CREATE TABLE `hr_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valueofstock` decimal(10,0) DEFAULT NULL,
  `totalassets` decimal(10,0) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_share
-- ----------------------------
INSERT INTO `hr_share` VALUES ('6', '2000', '3887256000', 'Vốn điều lệ');

-- ----------------------------
-- Table structure for `hr_shift`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift`;
CREATE TABLE `hr_shift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `isovernight` bit(1) DEFAULT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `shift_plan_id` int(11) DEFAULT NULL,
  `colorEvent` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`,`shift_plan_id`),
  KEY `shift_plan_id` (`shift_plan_id`),
  CONSTRAINT `hr_shift_ibfk_1` FOREIGN KEY (`shift_plan_id`) REFERENCES `hr_shift_plan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift
-- ----------------------------
INSERT INTO `hr_shift` VALUES ('37', 'C1Q', 'ca1', '', '07:45:00', '17:00:00', '', null, '36', '#358575');
INSERT INTO `hr_shift` VALUES ('38', 'C2Q', 'ca2', '', '08:00:00', '21:00:00', '', null, '36', '#bdbf75');
INSERT INTO `hr_shift` VALUES ('39', 'C3Q', 'ca3', '', '10:00:00', '22:30:00', '', null, '36', '#c9ccf7');
INSERT INTO `hr_shift` VALUES ('40', 'C4Q', 'ca4', '', '13:00:00', '22:30:00', '', null, '36', '#918c03');
INSERT INTO `hr_shift` VALUES ('41', 'C5Q', 'ca5', '', '13:00:00', '17:00:00', '', null, '36', '#08f56f');
INSERT INTO `hr_shift` VALUES ('42', 'C6Q', 'ca6', '', '13:00:00', '21:00:00', '', null, '36', '#054d69');
INSERT INTO `hr_shift` VALUES ('43', 'C7Q', 'ca7', '', '08:00:00', '17:00:00', '', null, '36', '#a899f2');
INSERT INTO `hr_shift` VALUES ('51', 'C1Q', 'ca1', '', '07:45:00', '17:00:00', '', null, '38', '#358575');
INSERT INTO `hr_shift` VALUES ('52', 'C2Q', 'ca2', '', '08:00:00', '21:00:00', '', null, '38', '#bdbf75');
INSERT INTO `hr_shift` VALUES ('53', 'C3Q', 'ca3', '', '10:00:00', '22:30:00', '', null, '38', '#c9ccf7');
INSERT INTO `hr_shift` VALUES ('54', 'C4Q', 'ca4', '', '13:00:00', '22:30:00', '', null, '38', '#918c03');
INSERT INTO `hr_shift` VALUES ('55', 'C5Q', 'ca5', '', '13:00:00', '17:00:00', '', null, '38', '#08f56f');
INSERT INTO `hr_shift` VALUES ('56', 'C6Q', 'ca6', '', '13:00:00', '21:00:00', '', null, '38', '#054d69');
INSERT INTO `hr_shift` VALUES ('57', 'C7Q', 'ca7', '', '08:00:00', '17:00:00', '', null, '38', '#a899f2');

-- ----------------------------
-- Table structure for `hr_shift_change`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_change`;
CREATE TABLE `hr_shift_change` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` varchar(255) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `form_id` (`form_id`),
  KEY `to_id` (`to_id`),
  CONSTRAINT `hr_shift_change_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `hr_shift_detail` (`id`),
  CONSTRAINT `hr_shift_change_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `hr_shift_detail` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_change
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_shift_detail`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_detail`;
CREATE TABLE `hr_shift_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shift_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `shift_change_id` int(11) DEFAULT NULL,
  `ischanged` bit(1) DEFAULT b'0',
  `hasreplace` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk` (`shift_id`,`date`,`emp_id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hr_shift_detail_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_shift_detail_ibfk_3` FOREIGN KEY (`shift_id`) REFERENCES `hr_shift` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1046 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_detail
-- ----------------------------
INSERT INTO `hr_shift_detail` VALUES ('1021', '37', '2012-09-18', '1', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1022', '37', '2012-09-18', '9', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1023', '37', '2012-09-18', '10', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1024', '37', '2012-09-18', '13', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1025', '37', '2012-09-18', '16', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1026', '37', '2012-09-18', '19', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1027', '37', '2012-09-18', '24', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1028', '37', '2012-09-18', '25', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1029', '37', '2012-09-18', '32', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1030', '37', '2012-09-18', '42', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1032', '40', '2012-09-20', '1', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1033', '40', '2012-09-20', '9', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1034', '40', '2012-09-20', '10', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1035', '40', '2012-09-20', '13', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1036', '40', '2012-09-20', '16', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1037', '40', '2012-09-20', '19', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1038', '40', '2012-09-20', '24', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1039', '40', '2012-09-20', '25', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1040', '40', '2012-09-20', '32', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1041', '40', '2012-09-20', '42', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1043', '41', '2012-09-18', '1', null, '', '');
INSERT INTO `hr_shift_detail` VALUES ('1045', '43', '2012-09-20', '1', null, '', '');

-- ----------------------------
-- Table structure for `hr_shift_plan`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_plan`;
CREATE TABLE `hr_shift_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '2',
  `note` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `earlylatetime` tinyint(4) DEFAULT '0' COMMENT 'the time to defind who go to early or late',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk` (`department_id`,`startdate`,`enddate`) USING BTREE,
  CONSTRAINT `hr_shift_plan_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `hr_department` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_plan
-- ----------------------------
INSERT INTO `hr_shift_plan` VALUES ('36', '3', '2012-09-02', '2012-10-13', '0', '', 'quay12012', '0');
INSERT INTO `hr_shift_plan` VALUES ('38', '3', '2012-10-14', '2012-11-24', '0', null, 'quay12012', '0');

-- ----------------------------
-- Table structure for `hr_shift_replace`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_replace`;
CREATE TABLE `hr_shift_replace` (
  `ref_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  KEY `hr_shift_replace_ibfk_1` (`ref_id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hr_shift_replace_ibfk_1` FOREIGN KEY (`ref_id`) REFERENCES `hr_shift_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hr_shift_replace_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_replace
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_shop`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shop`;
CREATE TABLE `hr_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_shop
-- ----------------------------
INSERT INTO `hr_shop` VALUES ('1', 'Chợ Lớn', '40', '38228599', 'minhtamcl@minhtamprolab.com.vn');
INSERT INTO `hr_shop` VALUES ('2', 'Sài Gòn', '26 Châu Văn Liêm', '38536374', 'minhtamsg@minhtamprolab.com.vn');

-- ----------------------------
-- Table structure for `hr_study_field`
-- ----------------------------
DROP TABLE IF EXISTS `hr_study_field`;
CREATE TABLE `hr_study_field` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_study_field
-- ----------------------------
INSERT INTO `hr_study_field` VALUES ('2', 'Kế Toán');
INSERT INTO `hr_study_field` VALUES ('3', 'Quản Trị Kinh Doanh');
INSERT INTO `hr_study_field` VALUES ('4', 'In Ấn');
INSERT INTO `hr_study_field` VALUES ('5', 'Phổ Thông');

-- ----------------------------
-- Table structure for `hr_transaction`
-- ----------------------------
DROP TABLE IF EXISTS `hr_transaction`;
CREATE TABLE `hr_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `qty` decimal(19,0) DEFAULT NULL,
  `amt` decimal(19,0) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `batch_id` (`batch_id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hr_transaction_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `hr_batch` (`id`),
  CONSTRAINT `hr_transaction_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_transaction
-- ----------------------------

-- ----------------------------
-- Table structure for `inv_check_inventory`
-- ----------------------------
DROP TABLE IF EXISTS `inv_check_inventory`;
CREATE TABLE `inv_check_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `create_uid` int(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `whcheck_id` int(11) NOT NULL,
  `whout_id` int(11) DEFAULT NULL,
  `create_date` datetime NOT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `branch_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `check_num` (`num`),
  KEY `whcheck_id` (`whcheck_id`),
  KEY `whout_id` (`whout_id`),
  CONSTRAINT `inv_check_inventory_ibfk_1` FOREIGN KEY (`whcheck_id`) REFERENCES `inv_warehouse` (`id`),
  CONSTRAINT `inv_check_inventory_ibfk_2` FOREIGN KEY (`whout_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_check_inventory
-- ----------------------------
INSERT INTO `inv_check_inventory` VALUES ('1', 'KCT1212-001', '2012-12-29', '1', '', '81', '70', '2012-12-29 10:51:29', '1', '2013-01-07 18:30:31', '1', '1');
INSERT INTO `inv_check_inventory` VALUES ('2', 'KCT1112-001', '2012-11-30', '1', '', '81', '70', '2012-12-29 19:13:40', '1', '2013-01-02 15:32:45', '-1', '1');
INSERT INTO `inv_check_inventory` VALUES ('3', 'KCT1112-002', '2012-11-30', '1', '', '81', '70', '2012-12-29 19:19:40', '1', '2013-01-02 15:32:40', '-1', '1');
INSERT INTO `inv_check_inventory` VALUES ('5', 'KCT1112-003', '2012-11-30', '1', '', '81', '70', '2012-12-30 10:27:37', '1', '2013-01-02 15:32:35', '-1', '1');
INSERT INTO `inv_check_inventory` VALUES ('6', 'KCT0113-001', '2013-01-01', '1', '', '81', '70', '2013-01-07 18:27:32', '1', '2013-01-07 18:27:32', '0', '1');

-- ----------------------------
-- Table structure for `inv_check_inventorydetails`
-- ----------------------------
DROP TABLE IF EXISTS `inv_check_inventorydetails`;
CREATE TABLE `inv_check_inventorydetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty` decimal(20,5) NOT NULL,
  `check_inventory_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `uom_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `radio` decimal(20,9) DEFAULT NULL,
  `qtystd` decimal(20,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `inv_check_inventorydetails_ibfk_1` (`check_inventory_id`),
  CONSTRAINT `inv_check_inventorydetails_ibfk_1` FOREIGN KEY (`check_inventory_id`) REFERENCES `inv_check_inventory` (`id`),
  CONSTRAINT `inv_check_inventorydetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_check_inventorydetails
-- ----------------------------
INSERT INTO `inv_check_inventorydetails` VALUES ('1', '20.00000', '1', '18', '5', '24 in Fuji Ty 80 láng 50 m', '0.020000000', '0.40000');
INSERT INTO `inv_check_inventorydetails` VALUES ('2', '23.40000', '2', '4', '175', '5 in Fuji láng 186 m', '0.042337003', '0.99069');
INSERT INTO `inv_check_inventorydetails` VALUES ('3', '12.20000', '3', '5', '175', '5 in Fuji lụa 186 m', '0.042337003', '0.51651');
INSERT INTO `inv_check_inventorydetails` VALUES ('4', '21.90000', '5', '7', '175', '6 in Fuji láng 186 m', '0.035373187', '0.77467');
INSERT INTO `inv_check_inventorydetails` VALUES ('5', '0.20000', '5', '8', '175', '6 in Fuji lụa 186 m', '0.035373187', '0.00707');
INSERT INTO `inv_check_inventorydetails` VALUES ('6', '6.10000', '6', '9', '175', '8 in Fuji láng 90 m', '0.054734537', '0.33388');

-- ----------------------------
-- Table structure for `inv_inventory`
-- ----------------------------
DROP TABLE IF EXISTS `inv_inventory`;
CREATE TABLE `inv_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `wh_id` int(11) DEFAULT NULL,
  `qty` decimal(19,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`,`wh_id`),
  KEY `wh_id` (`wh_id`),
  CONSTRAINT `inv_inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_inventory_ibfk_2` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_inventory
-- ----------------------------
INSERT INTO `inv_inventory` VALUES ('17', '4', '70', '2.00');
INSERT INTO `inv_inventory` VALUES ('18', '5', '70', '0.00');
INSERT INTO `inv_inventory` VALUES ('19', '7', '70', '0.00');
INSERT INTO `inv_inventory` VALUES ('20', '8', '70', '0.00');
INSERT INTO `inv_inventory` VALUES ('21', '18', '70', '30.00');
INSERT INTO `inv_inventory` VALUES ('22', '4', '69', '42.00');
INSERT INTO `inv_inventory` VALUES ('23', '5', '69', '0.00');
INSERT INTO `inv_inventory` VALUES ('24', '7', '69', '26.00');
INSERT INTO `inv_inventory` VALUES ('25', '8', '69', '48.00');
INSERT INTO `inv_inventory` VALUES ('26', '9', '69', '8.00');
INSERT INTO `inv_inventory` VALUES ('27', '13', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('28', '15', '70', '2.00');
INSERT INTO `inv_inventory` VALUES ('29', '16', '70', '3.00');
INSERT INTO `inv_inventory` VALUES ('30', '21', '70', '0.00');
INSERT INTO `inv_inventory` VALUES ('31', '29', '70', '10.00');
INSERT INTO `inv_inventory` VALUES ('32', '22', '70', '28.00');
INSERT INTO `inv_inventory` VALUES ('33', '23', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('34', '14', '69', '24.00');
INSERT INTO `inv_inventory` VALUES ('35', '18', '69', '111.00');
INSERT INTO `inv_inventory` VALUES ('36', '29', '69', '0.00');
INSERT INTO `inv_inventory` VALUES ('37', '24', '70', '23.00');
INSERT INTO `inv_inventory` VALUES ('38', '31', '70', '24.00');
INSERT INTO `inv_inventory` VALUES ('39', '24', '69', '30.00');
INSERT INTO `inv_inventory` VALUES ('40', '31', '69', '30.00');
INSERT INTO `inv_inventory` VALUES ('41', '22', '69', '70.00');
INSERT INTO `inv_inventory` VALUES ('42', '32', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('43', '33', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('44', '35', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('45', '34', '70', '2.00');
INSERT INTO `inv_inventory` VALUES ('46', '39', '70', '0.00');
INSERT INTO `inv_inventory` VALUES ('47', '38', '69', '1.00');
INSERT INTO `inv_inventory` VALUES ('48', '36', '69', '2.00');
INSERT INTO `inv_inventory` VALUES ('49', '37', '69', '2.00');
INSERT INTO `inv_inventory` VALUES ('50', '42', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('51', '41', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('52', '44', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('53', '50', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('54', '49', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('55', '51', '70', '4.00');
INSERT INTO `inv_inventory` VALUES ('56', '36', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('57', '4', '80', '30.00');
INSERT INTO `inv_inventory` VALUES ('58', '7', '80', '40.00');
INSERT INTO `inv_inventory` VALUES ('59', '14', '80', '2.00');
INSERT INTO `inv_inventory` VALUES ('60', '8', '80', '4.00');
INSERT INTO `inv_inventory` VALUES ('61', '5', '80', '2.00');
INSERT INTO `inv_inventory` VALUES ('62', '9', '70', '0.00');
INSERT INTO `inv_inventory` VALUES ('63', '14', '70', '0.00');
INSERT INTO `inv_inventory` VALUES ('64', '38', '70', '0.00');
INSERT INTO `inv_inventory` VALUES ('65', '39', '69', '2.00');
INSERT INTO `inv_inventory` VALUES ('66', '40', '69', '2.00');
INSERT INTO `inv_inventory` VALUES ('67', '40', '70', '0.00');
INSERT INTO `inv_inventory` VALUES ('68', '32', '69', '1.00');
INSERT INTO `inv_inventory` VALUES ('69', '33', '69', '2.00');
INSERT INTO `inv_inventory` VALUES ('70', '35', '69', '1.00');
INSERT INTO `inv_inventory` VALUES ('71', '34', '69', '2.00');
INSERT INTO `inv_inventory` VALUES ('72', '53', '69', '1.00');
INSERT INTO `inv_inventory` VALUES ('73', '55', '69', '1.00');
INSERT INTO `inv_inventory` VALUES ('74', '54', '69', '1.00');
INSERT INTO `inv_inventory` VALUES ('75', '52', '69', '0.00');
INSERT INTO `inv_inventory` VALUES ('76', '52', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('77', '41', '69', '8.00');
INSERT INTO `inv_inventory` VALUES ('78', '42', '69', '4.00');
INSERT INTO `inv_inventory` VALUES ('79', '43', '69', '4.00');
INSERT INTO `inv_inventory` VALUES ('80', '43', '70', '1.00');
INSERT INTO `inv_inventory` VALUES ('81', '25', '69', '0.00');
INSERT INTO `inv_inventory` VALUES ('82', '56', '69', '0.00');
INSERT INTO `inv_inventory` VALUES ('83', '25', '70', '5.00');
INSERT INTO `inv_inventory` VALUES ('84', '56', '70', '2.00');
INSERT INTO `inv_inventory` VALUES ('85', '7', '81', '0.77');
INSERT INTO `inv_inventory` VALUES ('86', '8', '81', '0.01');
INSERT INTO `inv_inventory` VALUES ('87', '9', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('88', '18', '81', '0.40');
INSERT INTO `inv_inventory` VALUES ('89', '22', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('90', '24', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('91', '29', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('92', '31', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('93', '4', '81', '2.97');
INSERT INTO `inv_inventory` VALUES ('94', '5', '81', '1.04');
INSERT INTO `inv_inventory` VALUES ('95', '14', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('96', '13', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('97', '15', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('98', '16', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('99', '21', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('100', '23', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('101', '32', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('102', '33', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('103', '35', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('104', '38', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('105', '39', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('106', '40', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('107', '42', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('108', '43', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('109', '49', '81', '0.00');
INSERT INTO `inv_inventory` VALUES ('110', '29', '80', '20.00');
INSERT INTO `inv_inventory` VALUES ('111', '24', '80', '4.00');

-- ----------------------------
-- Table structure for `inv_inventorylog`
-- ----------------------------
DROP TABLE IF EXISTS `inv_inventorylog`;
CREATE TABLE `inv_inventorylog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) NOT NULL,
  `reftype` tinyint(4) NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `refdate` date DEFAULT NULL,
  `date` date NOT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `branch_id` tinyint(4) DEFAULT NULL,
  `refnum` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=309 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_inventorylog
-- ----------------------------
INSERT INTO `inv_inventorylog` VALUES ('30', '6', '1', 'Nhập kho', '2012-11-01', '2012-11-12', '1', '2012-11-12 16:11:55', '1', 'NVT1112-001');
INSERT INTO `inv_inventorylog` VALUES ('31', '7', '1', 'Nhập kho', '2012-11-01', '2012-11-12', '1', '2012-11-12 16:11:56', '1', 'NVT1112-002');
INSERT INTO `inv_inventorylog` VALUES ('32', '8', '1', 'Nhập kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 11:06:43', '1', 'NVT1112-003');
INSERT INTO `inv_inventorylog` VALUES ('33', '9', '1', 'Nhập kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 11:33:16', '1', 'NVT1112-004');
INSERT INTO `inv_inventorylog` VALUES ('34', '10', '1', 'Nhập kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 11:33:16', '1', 'NVT1112-005');
INSERT INTO `inv_inventorylog` VALUES ('35', '11', '1', 'Nhập kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 11:46:36', '1', 'NVT1112-006');
INSERT INTO `inv_inventorylog` VALUES ('36', '12', '1', 'Nhập kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 11:46:36', '1', 'NVT1112-007');
INSERT INTO `inv_inventorylog` VALUES ('37', '13', '1', 'Nhập kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 16:13:09', '1', 'NVT1112-008');
INSERT INTO `inv_inventorylog` VALUES ('38', '14', '1', 'Nhập kho', '2012-11-10', '2012-11-14', '1', '2012-11-14 16:22:59', '1', 'NVT1112-009');
INSERT INTO `inv_inventorylog` VALUES ('39', '2', '2', 'Xuất kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 16:53:48', '1', 'XVT1112-001');
INSERT INTO `inv_inventorylog` VALUES ('40', '3', '2', 'Xuất kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 16:53:49', '1', 'XVT1112-002');
INSERT INTO `inv_inventorylog` VALUES ('41', '16', '1', 'Nhập kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 17:07:49', '1', 'NVT1112-011');
INSERT INTO `inv_inventorylog` VALUES ('42', '17', '1', 'Nhập kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 17:07:49', '1', 'NVT1112-012');
INSERT INTO `inv_inventorylog` VALUES ('43', '15', '1', 'Nhập kho', '2012-11-12', '2012-11-14', '1', '2012-11-14 17:08:10', '1', 'NVT1112-010');
INSERT INTO `inv_inventorylog` VALUES ('44', '18', '1', 'Nhập kho', '2012-11-01', '2012-11-14', '1', '2012-11-14 17:39:41', '1', 'NVT1112-013');
INSERT INTO `inv_inventorylog` VALUES ('45', '4', '2', 'Xuất kho', '2012-11-05', '2012-11-14', '1', '2012-11-14 17:41:15', '1', 'XVT1112-003');
INSERT INTO `inv_inventorylog` VALUES ('46', '19', '1', 'Nhập kho', '2012-11-01', '2012-11-16', '1', '2012-11-16 10:39:50', '1', 'NVT1112-014');
INSERT INTO `inv_inventorylog` VALUES ('47', '20', '1', 'Nhập kho', '2012-11-01', '2012-11-16', '1', '2012-11-16 10:49:19', '1', 'NVT1112-015');
INSERT INTO `inv_inventorylog` VALUES ('48', '21', '1', 'Nhập kho', '2012-11-01', '2012-11-16', '1', '2012-11-16 10:49:19', '1', 'NVT1112-016');
INSERT INTO `inv_inventorylog` VALUES ('49', '22', '1', 'Nhập kho', '2012-11-01', '2012-11-16', '1', '2012-11-16 11:45:44', '1', 'NVT1112-017');
INSERT INTO `inv_inventorylog` VALUES ('50', '23', '1', 'Nhập kho', '2012-11-01', '2012-11-16', '1', '2012-11-16 11:45:45', '1', 'NVT1112-018');
INSERT INTO `inv_inventorylog` VALUES ('51', '24', '1', 'Nhập kho', '2012-11-01', '2012-11-16', '1', '2012-11-16 11:45:45', '1', 'NVT1112-019');
INSERT INTO `inv_inventorylog` VALUES ('52', '25', '1', 'Nhập kho', '2012-11-01', '2012-11-16', '1', '2012-11-16 11:45:45', '1', 'NVT1112-020');
INSERT INTO `inv_inventorylog` VALUES ('53', '2', '3', 'Chuyển kho', '2012-11-01', '2012-11-16', '1', '2012-11-16 11:50:11', '1', 'CVT1112-001');
INSERT INTO `inv_inventorylog` VALUES ('54', '3', '3', 'Chuyển kho', '2012-11-16', '2012-11-16', '1', '2012-11-16 11:58:20', '1', 'CVT1112-001');
INSERT INTO `inv_inventorylog` VALUES ('55', '4', '3', 'Chuyển kho', '2012-11-01', '2012-11-25', '1', '2012-11-25 09:33:13', '1', 'CVT1112-002');
INSERT INTO `inv_inventorylog` VALUES ('56', '5', '3', 'Chuyển kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 09:37:48', '1', 'CVT1112-003');
INSERT INTO `inv_inventorylog` VALUES ('57', '6', '3', 'Chuyển kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 09:39:01', '1', 'CVT1112-004');
INSERT INTO `inv_inventorylog` VALUES ('58', '7', '3', 'Chuyển kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 09:40:35', '1', 'CVT1112-005');
INSERT INTO `inv_inventorylog` VALUES ('59', '8', '3', 'Chuyển kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 09:41:32', '1', 'CVT1112-006');
INSERT INTO `inv_inventorylog` VALUES ('60', '9', '3', 'Chuyển kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 09:42:39', '1', 'CVT1112-007');
INSERT INTO `inv_inventorylog` VALUES ('61', '10', '3', 'Chuyển kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 09:43:35', '1', 'CVT1112-008');
INSERT INTO `inv_inventorylog` VALUES ('62', '11', '3', 'Chuyển kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 09:51:00', '1', 'CVT1112-009');
INSERT INTO `inv_inventorylog` VALUES ('63', '26', '1', 'Nhập kho', '2012-11-01', '2012-11-25', '1', '2012-11-25 09:57:04', '1', 'NVT1112-021');
INSERT INTO `inv_inventorylog` VALUES ('64', '26', '4', 'Hủy nhập kho', '2012-11-01', '2012-11-25', '1', '2012-11-25 10:03:35', '1', 'NVT1112-021');
INSERT INTO `inv_inventorylog` VALUES ('65', '27', '1', 'Nhập kho', '2012-11-01', '2012-11-25', '1', '2012-11-25 10:11:09', '1', 'NVT1112-022');
INSERT INTO `inv_inventorylog` VALUES ('66', '5', '2', 'Xuất kho', '2012-11-08', '2012-11-25', '1', '2012-11-25 10:15:01', '1', 'XVT1112-004');
INSERT INTO `inv_inventorylog` VALUES ('67', '12', '3', 'Chuyển kho', '2012-11-14', '2012-11-25', '1', '2012-11-25 10:24:04', '1', 'CVT1112-010');
INSERT INTO `inv_inventorylog` VALUES ('68', '6', '2', 'Xuất kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 10:31:12', '1', 'XVT1112-005');
INSERT INTO `inv_inventorylog` VALUES ('69', '7', '2', 'Xuất kho', '2012-11-22', '2012-11-25', '1', '2012-11-25 10:34:49', '1', 'XVT1112-006');
INSERT INTO `inv_inventorylog` VALUES ('70', '28', '1', 'Nhập kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 10:42:18', '1', 'NVT1112-023');
INSERT INTO `inv_inventorylog` VALUES ('71', '28', '4', 'Hủy nhập kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 10:43:10', '1', 'NVT1112-023');
INSERT INTO `inv_inventorylog` VALUES ('72', '29', '1', 'Nhập kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 10:43:55', '1', 'NVT1112-024');
INSERT INTO `inv_inventorylog` VALUES ('73', '13', '3', 'Chuyển kho', '2012-11-22', '2012-11-25', '1', '2012-11-25 10:52:04', '1', 'CVT1112-011');
INSERT INTO `inv_inventorylog` VALUES ('74', '8', '2', 'Xuất kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 14:49:41', '1', 'XVT1112-007');
INSERT INTO `inv_inventorylog` VALUES ('75', '30', '1', 'Nhập kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 14:55:05', '1', 'NVT1112-025');
INSERT INTO `inv_inventorylog` VALUES ('76', '9', '2', 'Xuất kho', '2012-11-28', '2012-11-25', '1', '2012-11-25 15:00:12', '1', 'XVT1112-008');
INSERT INTO `inv_inventorylog` VALUES ('77', '14', '3', 'Chuyển kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 15:02:06', '1', 'CVT1112-012');
INSERT INTO `inv_inventorylog` VALUES ('78', '11', '2', 'Xuất kho', '2012-11-25', '2012-11-25', '1', '2012-11-25 15:23:50', '1', 'XVT1112-010');
INSERT INTO `inv_inventorylog` VALUES ('79', '10', '2', 'Xuất kho', '2012-11-25', '2012-11-29', '1', '2012-11-29 15:36:46', '1', 'XVT1112-009');
INSERT INTO `inv_inventorylog` VALUES ('80', '31', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 15:43:29', '1', 'NVT1112-026');
INSERT INTO `inv_inventorylog` VALUES ('81', '15', '3', 'Chuyển kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 15:45:44', '1', 'CVT1112-013');
INSERT INTO `inv_inventorylog` VALUES ('82', '32', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 15:47:45', '1', 'NVT1112-027');
INSERT INTO `inv_inventorylog` VALUES ('83', '16', '3', 'Chuyển kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 15:49:45', '1', 'CVT1112-014');
INSERT INTO `inv_inventorylog` VALUES ('84', '17', '3', 'Chuyển kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 15:51:20', '1', 'CVT1112-015');
INSERT INTO `inv_inventorylog` VALUES ('85', '18', '3', 'Chuyển kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 15:54:23', '1', 'CVT1112-016');
INSERT INTO `inv_inventorylog` VALUES ('86', '12', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 17:49:01', '1', 'XVT1112-011');
INSERT INTO `inv_inventorylog` VALUES ('87', '13', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 17:50:18', '1', 'XVT1112-012');
INSERT INTO `inv_inventorylog` VALUES ('88', '14', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 17:51:44', '1', 'XVT1112-013');
INSERT INTO `inv_inventorylog` VALUES ('89', '15', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 17:53:59', '1', 'XVT1112-014');
INSERT INTO `inv_inventorylog` VALUES ('90', '16', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 17:55:19', '1', 'XVT1112-015');
INSERT INTO `inv_inventorylog` VALUES ('91', '17', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 17:56:26', '1', 'XVT1112-016');
INSERT INTO `inv_inventorylog` VALUES ('92', '18', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 17:57:22', '1', 'XVT1112-017');
INSERT INTO `inv_inventorylog` VALUES ('93', '33', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 17:59:28', '1', 'NVT1112-028');
INSERT INTO `inv_inventorylog` VALUES ('94', '19', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:00:31', '1', 'XVT1112-018');
INSERT INTO `inv_inventorylog` VALUES ('95', '20', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:02:29', '1', 'XVT1112-019');
INSERT INTO `inv_inventorylog` VALUES ('96', '21', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:03:26', '1', 'XVT1112-020');
INSERT INTO `inv_inventorylog` VALUES ('97', '22', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:05:13', '1', 'XVT1112-021');
INSERT INTO `inv_inventorylog` VALUES ('98', '34', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:07:42', '1', 'NVT1112-029');
INSERT INTO `inv_inventorylog` VALUES ('99', '35', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:08:00', '1', 'NVT1112-030');
INSERT INTO `inv_inventorylog` VALUES ('100', '23', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:09:10', '1', 'XVT1112-022');
INSERT INTO `inv_inventorylog` VALUES ('101', '36', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:10:49', '1', 'NVT1112-031');
INSERT INTO `inv_inventorylog` VALUES ('102', '24', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:11:44', '1', 'XVT1112-023');
INSERT INTO `inv_inventorylog` VALUES ('103', '19', '3', 'Chuyển kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:14:12', '1', 'CVT1112-017');
INSERT INTO `inv_inventorylog` VALUES ('104', '25', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:15:41', '1', 'XVT1112-024');
INSERT INTO `inv_inventorylog` VALUES ('105', '37', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:17:44', '1', 'NVT1112-032');
INSERT INTO `inv_inventorylog` VALUES ('106', '38', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:18:41', '1', 'NVT1112-033');
INSERT INTO `inv_inventorylog` VALUES ('107', '26', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:19:50', '1', 'XVT1112-025');
INSERT INTO `inv_inventorylog` VALUES ('108', '39', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:20:49', '1', 'NVT1112-034');
INSERT INTO `inv_inventorylog` VALUES ('109', '40', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:22:56', '1', 'NVT1112-035');
INSERT INTO `inv_inventorylog` VALUES ('110', '20', '3', 'Chuyển kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:25:15', '1', 'CVT1112-018');
INSERT INTO `inv_inventorylog` VALUES ('111', '27', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:26:07', '1', 'XVT1112-026');
INSERT INTO `inv_inventorylog` VALUES ('112', '28', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:28:57', '1', 'XVT1112-027');
INSERT INTO `inv_inventorylog` VALUES ('113', '41', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:30:35', '1', 'NVT1112-036');
INSERT INTO `inv_inventorylog` VALUES ('114', '42', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:32:14', '1', 'NVT1112-037');
INSERT INTO `inv_inventorylog` VALUES ('115', '29', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:33:05', '1', 'XVT1112-028');
INSERT INTO `inv_inventorylog` VALUES ('116', '43', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:35:18', '1', 'NVT1112-038');
INSERT INTO `inv_inventorylog` VALUES ('117', '44', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:39:48', '1', 'NVT1112-039');
INSERT INTO `inv_inventorylog` VALUES ('118', '21', '3', 'Chuyển kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:40:40', '1', 'CVT1112-019');
INSERT INTO `inv_inventorylog` VALUES ('119', '30', '2', 'Xuất kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:41:49', '1', 'XVT1112-029');
INSERT INTO `inv_inventorylog` VALUES ('120', '45', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:44:32', '1', 'NVT1112-040');
INSERT INTO `inv_inventorylog` VALUES ('121', '46', '1', 'Nhập kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:57:47', '1', 'NVT1112-041');
INSERT INTO `inv_inventorylog` VALUES ('122', '22', '3', 'Chuyển kho', '2012-11-29', '2012-11-29', '1', '2012-11-29 18:59:43', '1', 'CVT1112-020');
INSERT INTO `inv_inventorylog` VALUES ('123', '23', '3', 'Chuyển kho', '2012-11-30', '2012-11-30', '1', '2012-11-30 10:58:15', '1', 'CVT1112-021');
INSERT INTO `inv_inventorylog` VALUES ('124', '31', '2', 'Xuất kho', '2012-11-29', '2012-11-30', '1', '2012-11-30 11:00:32', '1', 'XVT1112-030');
INSERT INTO `inv_inventorylog` VALUES ('125', '47', '1', 'Nhập kho', '2012-11-01', '2012-11-30', '1', '2012-11-30 11:07:24', '1', 'NVT1112-042');
INSERT INTO `inv_inventorylog` VALUES ('126', '24', '3', 'Chuyển kho', '2012-11-30', '2012-11-30', '1', '2012-11-30 11:43:46', '1', 'CVT1112-022');
INSERT INTO `inv_inventorylog` VALUES ('127', '32', '2', 'Xuất kho', '2012-11-30', '2012-11-30', '1', '2012-11-30 11:44:28', '1', 'XVT1112-031');
INSERT INTO `inv_inventorylog` VALUES ('128', '48', '1', 'Nhập kho', '2012-11-30', '2012-11-30', '1', '2012-11-30 11:58:18', '1', 'NVT1112-043');
INSERT INTO `inv_inventorylog` VALUES ('129', '25', '3', 'Chuyển kho', '2012-11-30', '2012-11-30', '1', '2012-11-30 11:59:07', '1', 'CVT1112-023');
INSERT INTO `inv_inventorylog` VALUES ('130', '33', '2', 'Xuất kho', '2012-11-30', '2012-11-30', '1', '2012-11-30 12:02:29', '1', 'XVT1112-032');
INSERT INTO `inv_inventorylog` VALUES ('131', '34', '2', 'Xuất kho', '2012-11-30', '2012-11-30', '1', '2012-11-30 14:50:58', '1', 'XVT1112-033');
INSERT INTO `inv_inventorylog` VALUES ('132', '35', '2', 'Xuất kho', '2012-11-30', '2012-11-30', '1', '2012-11-30 14:50:58', '1', 'XVT1112-034');
INSERT INTO `inv_inventorylog` VALUES ('133', '26', '3', 'Chuyển kho', '2012-11-30', '2012-12-01', '1', '2012-12-01 10:26:18', '1', 'CVT1112-024');
INSERT INTO `inv_inventorylog` VALUES ('134', '36', '2', 'Xuất kho', '2012-11-30', '2012-12-01', '1', '2012-12-01 19:33:30', '1', 'XVT1112-035');
INSERT INTO `inv_inventorylog` VALUES ('137', '49', '1', 'Nhập kho', '2012-11-20', '2012-12-25', '1', '2012-12-25 17:06:39', '1', 'NVT1112-044');
INSERT INTO `inv_inventorylog` VALUES ('138', '50', '1', 'Nhập kho', '2012-11-29', '2012-12-25', '1', '2012-12-25 17:12:25', '1', 'NVT1112-045');
INSERT INTO `inv_inventorylog` VALUES ('139', '28', '3', 'Chuyển kho Từ: Kho chính đến Kho cửa hàng', '2012-11-30', '2012-12-25', '1', '2012-12-25 17:13:44', '1', 'CVT1112-025');
INSERT INTO `inv_inventorylog` VALUES ('140', '51', '1', 'Nhập kho', '2012-11-30', '2012-12-25', '1', '2012-12-25 17:18:02', '1', 'NVT1112-046');
INSERT INTO `inv_inventorylog` VALUES ('254', '27', '3', 'Chuyển kho Từ: Kho chính đến Kho cửa hàng', '2012-12-01', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'CVT1212-001');
INSERT INTO `inv_inventorylog` VALUES ('255', '37', '2', 'Xuất kho', '2012-12-01', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'XVT1212-001');
INSERT INTO `inv_inventorylog` VALUES ('256', '58', '1', 'Nhập kho', '2012-12-11', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-007');
INSERT INTO `inv_inventorylog` VALUES ('257', '59', '1', 'Nhập kho', '2012-12-11', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-008');
INSERT INTO `inv_inventorylog` VALUES ('258', '60', '1', 'Nhập kho', '2012-12-11', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-009');
INSERT INTO `inv_inventorylog` VALUES ('259', '56', '1', 'Nhập kho', '2012-12-11', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-005');
INSERT INTO `inv_inventorylog` VALUES ('260', '62', '1', 'Nhập kho', '2012-12-11', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-011');
INSERT INTO `inv_inventorylog` VALUES ('261', '63', '1', 'Nhập kho', '2012-12-11', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-012');
INSERT INTO `inv_inventorylog` VALUES ('262', '55', '1', 'Nhập kho', '2012-12-18', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-004');
INSERT INTO `inv_inventorylog` VALUES ('263', '57', '1', 'Nhập kho', '2012-12-18', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-006');
INSERT INTO `inv_inventorylog` VALUES ('264', '54', '1', 'Nhập kho', '2012-12-20', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-003');
INSERT INTO `inv_inventorylog` VALUES ('265', '52', '1', 'Nhập kho', '2012-12-20', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-001');
INSERT INTO `inv_inventorylog` VALUES ('266', '53', '1', 'Nhập kho', '2012-12-20', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'NVT1212-002');
INSERT INTO `inv_inventorylog` VALUES ('267', '42', '2', 'Xuất kho', '2012-12-22', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'XVT1212-005');
INSERT INTO `inv_inventorylog` VALUES ('268', '38', '2', 'Xuất kho', '2012-12-24', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'XVT1212-002');
INSERT INTO `inv_inventorylog` VALUES ('269', '39', '2', 'Xuất kho', '2012-12-24', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'XVT1212-003');
INSERT INTO `inv_inventorylog` VALUES ('270', '41', '2', 'Xuất kho', '2012-12-24', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'XVT1212-004');
INSERT INTO `inv_inventorylog` VALUES ('271', '29', '3', 'Chuyển kho Từ: Kho chính đến Kho cửa hàng', '2012-12-25', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'CVT1212-002');
INSERT INTO `inv_inventorylog` VALUES ('272', '43', '2', 'Xuất kho', '2012-12-25', '2012-12-30', '1', '2012-12-30 10:01:58', '1', 'XVT1212-006');
INSERT INTO `inv_inventorylog` VALUES ('273', '44', '2', 'Xuất kho', '2012-12-25', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-007');
INSERT INTO `inv_inventorylog` VALUES ('274', '30', '3', 'Chuyển kho Từ: Kho chính đến Kho cửa hàng', '2012-12-26', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'CVT1212-003');
INSERT INTO `inv_inventorylog` VALUES ('275', '45', '2', 'Xuất kho', '2012-12-26', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-008');
INSERT INTO `inv_inventorylog` VALUES ('276', '32', '3', 'Chuyển kho Từ: Kho chính đến Kho cửa hàng', '2012-12-26', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'CVT1212-005');
INSERT INTO `inv_inventorylog` VALUES ('277', '33', '3', 'Chuyển kho Từ: Kho chính đến Kho cửa hàng', '2012-12-27', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'CVT1212-006');
INSERT INTO `inv_inventorylog` VALUES ('278', '47', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-010');
INSERT INTO `inv_inventorylog` VALUES ('279', '52', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-015');
INSERT INTO `inv_inventorylog` VALUES ('280', '48', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-011');
INSERT INTO `inv_inventorylog` VALUES ('281', '53', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-016');
INSERT INTO `inv_inventorylog` VALUES ('282', '49', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-012');
INSERT INTO `inv_inventorylog` VALUES ('283', '54', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-017');
INSERT INTO `inv_inventorylog` VALUES ('284', '31', '3', 'Chuyển kho Từ: Kho chính đến Kho cửa hàng', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'CVT1212-004');
INSERT INTO `inv_inventorylog` VALUES ('285', '50', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-013');
INSERT INTO `inv_inventorylog` VALUES ('286', '46', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-009');
INSERT INTO `inv_inventorylog` VALUES ('287', '51', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-014');
INSERT INTO `inv_inventorylog` VALUES ('288', '57', '2', 'Xuất kho', '2012-12-30', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-020');
INSERT INTO `inv_inventorylog` VALUES ('289', '55', '2', 'Xuất kho', '2012-12-30', '2012-12-30', '1', '2012-12-30 10:01:59', '1', 'XVT1212-018');
INSERT INTO `inv_inventorylog` VALUES ('290', '56', '2', 'Xuất kho', '2012-12-30', '2012-12-30', '1', '2012-12-30 10:02:00', '1', 'XVT1212-019');
INSERT INTO `inv_inventorylog` VALUES ('291', '59', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:02:59', '1', 'XVT1212-021');
INSERT INTO `inv_inventorylog` VALUES ('292', '60', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:04:11', '1', 'XVT1212-022');
INSERT INTO `inv_inventorylog` VALUES ('293', '61', '2', 'Xuất kho', '2012-12-29', '2012-12-30', '1', '2012-12-30 10:06:07', '1', 'XVT1212-023');
INSERT INTO `inv_inventorylog` VALUES ('294', '62', '2', 'Xuất kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 16:47:22', '1', 'XVT1212-024');
INSERT INTO `inv_inventorylog` VALUES ('295', '63', '2', 'Xuất kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 16:49:54', '1', 'XVT1212-025');
INSERT INTO `inv_inventorylog` VALUES ('296', '64', '2', 'Xuất kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 16:51:42', '1', 'XVT1212-026');
INSERT INTO `inv_inventorylog` VALUES ('297', '65', '2', 'Xuất kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 16:55:38', '1', 'XVT1212-027');
INSERT INTO `inv_inventorylog` VALUES ('298', '66', '2', 'Xuất kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 16:58:32', '1', 'XVT1212-028');
INSERT INTO `inv_inventorylog` VALUES ('299', '64', '1', 'Nhập kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 17:01:09', '1', 'NVT1212-013');
INSERT INTO `inv_inventorylog` VALUES ('300', '67', '2', 'Xuất kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 17:03:09', '1', 'XVT1212-029');
INSERT INTO `inv_inventorylog` VALUES ('301', '35', '3', 'Chuyển kho Từ: Kho chính đến Kho cửa hàng', '2012-12-31', '2013-01-07', '1', '2013-01-07 17:05:43', '1', 'CVT1212-008');
INSERT INTO `inv_inventorylog` VALUES ('302', '36', '3', 'Chuyển kho Từ: Kho chính đến Kho Chợ Lớn', '2012-12-31', '2013-01-07', '1', '2013-01-07 17:07:23', '1', 'CVT1212-009');
INSERT INTO `inv_inventorylog` VALUES ('303', '68', '2', 'Xuất kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 17:09:23', '1', 'XVT1212-030');
INSERT INTO `inv_inventorylog` VALUES ('304', '65', '1', 'Nhập kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 17:38:28', '1', 'NVT1212-014');
INSERT INTO `inv_inventorylog` VALUES ('305', '66', '1', 'Nhập kho', '2013-01-31', '2013-01-07', '1', '2013-01-07 17:40:32', '1', 'NVT0113-001');
INSERT INTO `inv_inventorylog` VALUES ('306', '37', '3', 'Chuyển kho Từ: Kho cửa hàng đến Kho Chợ Lớn', '2012-12-31', '2013-01-07', '1', '2013-01-07 17:50:06', '1', 'CVT1212-010');
INSERT INTO `inv_inventorylog` VALUES ('307', '69', '2', 'Xuất kho', '2012-12-31', '2013-01-07', '1', '2013-01-07 17:59:24', '1', 'XVT1212-031');
INSERT INTO `inv_inventorylog` VALUES ('308', '1', '4', 'Điều chỉnh kiểm kho', '2012-12-29', '2013-01-07', '1', '2013-01-07 18:30:27', '1', 'KCT1212-001');

-- ----------------------------
-- Table structure for `inv_inventorylogdetail`
-- ----------------------------
DROP TABLE IF EXISTS `inv_inventorylogdetail`;
CREATE TABLE `inv_inventorylogdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inventorylog_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `uom_id` int(11) DEFAULT NULL,
  `qty` decimal(19,5) DEFAULT '1.00000',
  `wh_id` int(11) DEFAULT NULL COMMENT 'from wh',
  `cost` decimal(19,2) DEFAULT '0.00',
  `before_cost` decimal(19,5) DEFAULT '0.00000',
  `after_cost` decimal(19,2) DEFAULT '0.00',
  `costmethod` tinyint(4) DEFAULT '1',
  `subtotal` decimal(19,2) DEFAULT '0.00',
  `before_qty` decimal(19,5) DEFAULT '0.00000',
  `after_qty` decimal(19,5) DEFAULT '0.00000',
  PRIMARY KEY (`id`),
  KEY `stock_inventorylogdetail_ibfk_1` (`inventorylog_id`),
  KEY `product_id` (`product_id`),
  KEY `wh_id` (`wh_id`),
  CONSTRAINT `inv_inventorylogdetail_ibfk_1` FOREIGN KEY (`inventorylog_id`) REFERENCES `inv_inventorylog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_inventorylogdetail_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_inventorylogdetail_ibfk_5` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=683 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_inventorylogdetail
-- ----------------------------
INSERT INTO `inv_inventorylogdetail` VALUES ('31', '30', '4', '5 in Fuji láng 186 m', '3', '1.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('32', '30', '5', '5 in Fuji lụa 186 m', '3', '4.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '0.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('33', '30', '7', '6 in Fuji láng 186 m', '3', '1.00000', '70', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('34', '30', '8', '6 in Fuji lụa 186 m', '3', '3.00000', '70', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '0.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('35', '30', '18', '24 in Fuji Ty 80 láng 50 m', '3', '23.00000', '70', '1770000.00', '1770000.00000', '1770000.00', '1', '0.00', '0.00000', '23.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('36', '31', '4', '5 in Fuji láng 186 m', '3', '102.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '0.00000', '102.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('37', '31', '5', '5 in Fuji lụa 186 m', '3', '28.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '0.00000', '28.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('38', '32', '7', '6 in Fuji láng 186 m', '3', '66.00000', '69', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '0.00000', '66.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('39', '32', '8', '6 in Fuji lụa 186 m', '3', '60.00000', '69', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '0.00000', '60.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('40', '32', '9', '8 in Fuji láng 90 m', '3', '14.00000', '69', '1096000.00', '0.00000', '1096000.00', '1', '0.00', '0.00000', '14.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('41', '33', '13', ' 8 in Patinum lụa 90 m  ', '3', '4.00000', '70', '650000.00', '0.00000', '650000.00', '1', '0.00', '0.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('42', '33', '15', '10 in Patinum lụa 90 m', '3', '2.00000', '70', '1000000.00', '0.00000', '1000000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('43', '34', '16', '12 in giấy ngọc trai', '3', '5.00000', '70', '1500000.00', '0.00000', '1500000.00', '1', '0.00', '0.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('44', '35', '21', '30 in Fuji Ty 80 lụa  50 m', '3', '1.00000', '70', '2286000.00', '0.00000', '2286000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('45', '35', '29', '30 In Ty 80 láng 75 mét', '3', '1.00000', '70', '3185000.00', '0.00000', '3185000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('46', '36', '22', '50 in Fuji Ty 80 láng 50 m', '3', '23.00000', '70', '3556000.00', '0.00000', '3556000.00', '1', '0.00', '0.00000', '23.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('47', '36', '23', '50 in Fuji Ty 80 lụa  50 m', '3', '1.00000', '70', '3556000.00', '0.00000', '3556000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('48', '37', '14', '10 in Fuji láng 90 m', '3', '30.00000', '69', '1257000.00', '0.00000', '1257000.00', '1', '0.00', '0.00000', '30.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('49', '37', '18', '24 in Fuji Ty 80 láng 50 m', '3', '62.00000', '69', '1770000.00', '1770000.00000', '1770000.00', '1', '0.00', '0.00000', '62.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('50', '37', '29', '30 In Ty 80 láng 75 mét', '3', '55.00000', '69', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '0.00000', '55.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('51', '38', '18', '24 in Fuji Ty 80 láng 50 m', '3', '30.00000', '70', '1711000.00', '1770000.00000', '1754608.70', '1', '0.00', '23.00000', '53.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('52', '39', '4', '5 in Fuji láng 186 m', '3', '-1.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('53', '39', '8', '6 in Fuji lụa 186 m', '3', '-1.00000', '70', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '3.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('54', '39', '13', ' 8 in Patinum lụa 90 m  ', '3', '-1.00000', '70', '650000.00', '650000.00000', '650000.00', '1', '0.00', '4.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('55', '39', '15', '10 in Patinum lụa 90 m', '3', '-1.00000', '70', '1000000.00', '1000000.00000', '1000000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('56', '40', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-3.00000', '70', '1754608.70', '1754608.70000', '1754608.70', '1', '0.00', '53.00000', '50.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('57', '40', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-1.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '23.00000', '22.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('58', '41', '24', 'P1 Pro 40 lít', '4', '6.00000', '70', '790000.00', '0.00000', '790000.00', '1', '0.00', '0.00000', '6.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('59', '41', '31', 'P2 Pro 40 lít', '4', '4.00000', '70', '493000.00', '0.00000', '493000.00', '1', '0.00', '0.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('60', '42', '24', 'P1 Pro 40 lít', '4', '30.00000', '69', '790000.00', '790000.00000', '790000.00', '1', '0.00', '0.00000', '30.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('61', '42', '31', 'P2 Pro 40 lít', '4', '25.00000', '69', '493000.00', '493000.00000', '493000.00', '1', '0.00', '0.00000', '25.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('62', '43', '18', '24 in Fuji Ty 80 láng 50 m', '3', '120.00000', '69', '1711000.00', '1754608.70000', '1732052.47', '1', '0.00', '62.00000', '182.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('63', '43', '22', '50 in Fuji Ty 80 láng 50 m', '3', '100.00000', '69', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '0.00000', '100.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('64', '44', '32', 'Mực đỏ Xerox', '173', '2.00000', '70', '8035000.00', '0.00000', '8035000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('65', '45', '32', 'Mực đỏ Xerox', '173', '-1.00000', '70', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('66', '46', '33', 'Mực xanh Xerox', '173', '2.00000', '70', '2530000.00', '0.00000', '2530000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('67', '46', '35', 'Mực vàng Xerox', '173', '1.00000', '70', '2530000.00', '0.00000', '2530000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('68', '46', '34', 'Mực đen Xerox', '173', '2.00000', '70', '1320000.00', '0.00000', '1320000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('69', '47', '39', 'Mực đen in phẳng', '173', '1.00000', '70', '8035000.00', '0.00000', '8035000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('70', '48', '38', 'Mực xanh in phẳng', '173', '2.00000', '69', '8035000.00', '0.00000', '8035000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('71', '48', '36', 'Mực đỏ in phẳng', '173', '2.00000', '69', '8035000.00', '0.00000', '8035000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('72', '48', '37', 'Mực vàng in phẳng', '173', '1.00000', '69', '8035000.00', '0.00000', '8035000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('73', '49', '42', 'Baclit film 127 x 30', '3', '1.00000', '70', '3394000.00', '0.00000', '3394000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('74', '49', '41', 'Baclit film 107 x 30', '3', '1.00000', '70', '2860000.00', '0.00000', '2860000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('75', '50', '44', 'Nhựa PP 107 x 30 có keo', '3', '1.00000', '70', '873000.00', '0.00000', '873000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('76', '51', '50', 'Film trong IZ75 161 x 20', '3', '1.00000', '70', '750000.00', '0.00000', '750000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('77', '52', '49', 'Canvas 152 x 18', '3', '2.00000', '70', '1314000.00', '0.00000', '1314000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('78', '52', '51', 'Canvas 91 x 18', '3', '4.00000', '70', '673000.00', '0.00000', '673000.00', '1', '0.00', '0.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('79', '53', '4', '5 in Fuji láng 186 m', '3', '-2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '102.00000', '100.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('80', '53', '4', '5 in Fuji láng 186 m', '3', '2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('81', '53', '29', '30 In Ty 80 láng 75 mét', '3', '-3.00000', '69', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '55.00000', '52.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('82', '53', '29', '30 In Ty 80 láng 75 mét', '3', '3.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '1.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('83', '53', '36', 'Mực đỏ in phẳng', '173', '-1.00000', '69', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('84', '53', '36', 'Mực đỏ in phẳng', '173', '1.00000', '70', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('85', '54', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-32.00000', '69', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '100.00000', '68.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('86', '54', '22', '50 in Fuji Ty 80 láng 50 m', '3', '32.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '22.00000', '54.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('87', '55', '4', '5 in Fuji láng 186 m', '3', '-30.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '100.00000', '70.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('88', '55', '4', '5 in Fuji láng 186 m', '3', '30.00000', '80', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '0.00000', '30.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('89', '55', '7', '6 in Fuji láng 186 m', '3', '-40.00000', '69', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '66.00000', '26.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('90', '55', '7', '6 in Fuji láng 186 m', '3', '40.00000', '80', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '0.00000', '40.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('91', '55', '14', '10 in Fuji láng 90 m', '3', '-2.00000', '69', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '30.00000', '28.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('92', '55', '14', '10 in Fuji láng 90 m', '3', '2.00000', '80', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('93', '55', '8', '6 in Fuji lụa 186 m', '3', '-4.00000', '69', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '60.00000', '56.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('94', '55', '8', '6 in Fuji lụa 186 m', '3', '4.00000', '80', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '0.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('95', '55', '5', '5 in Fuji lụa 186 m', '3', '-2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '28.00000', '26.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('96', '55', '5', '5 in Fuji lụa 186 m', '3', '2.00000', '80', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('97', '56', '4', '5 in Fuji láng 186 m', '3', '-24.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '70.00000', '46.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('98', '56', '4', '5 in Fuji láng 186 m', '3', '24.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '2.00000', '26.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('99', '57', '5', '5 in Fuji lụa 186 m', '3', '-20.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '26.00000', '6.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('100', '57', '5', '5 in Fuji lụa 186 m', '3', '20.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '4.00000', '24.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('101', '58', '7', '6 in Fuji láng 186 m', '3', '-8.00000', '69', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '26.00000', '18.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('102', '58', '7', '6 in Fuji láng 186 m', '3', '8.00000', '70', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '1.00000', '9.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('103', '59', '8', '6 in Fuji lụa 186 m', '3', '-2.00000', '69', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '56.00000', '54.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('104', '59', '8', '6 in Fuji lụa 186 m', '3', '2.00000', '70', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '2.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('105', '60', '9', '8 in Fuji láng 90 m', '3', '-4.00000', '69', '1096000.00', '1096000.00000', '1096000.00', '1', '0.00', '14.00000', '10.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('106', '60', '9', '8 in Fuji láng 90 m', '3', '4.00000', '70', '1096000.00', '1096000.00000', '1096000.00', '1', '0.00', '0.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('107', '61', '9', '8 in Fuji láng 90 m', '3', '-2.00000', '69', '1096000.00', '1096000.00000', '1096000.00', '1', '0.00', '10.00000', '8.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('108', '61', '9', '8 in Fuji láng 90 m', '3', '2.00000', '70', '1096000.00', '1096000.00000', '1096000.00', '1', '0.00', '4.00000', '6.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('109', '62', '14', '10 in Fuji láng 90 m', '3', '-4.00000', '69', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '28.00000', '24.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('110', '62', '14', '10 in Fuji láng 90 m', '3', '4.00000', '70', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '0.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('111', '63', '15', '10 in Patinum lụa 90 m', '3', '4.00000', '70', '1200000.00', '1000000.00000', '1160000.00', '1', '0.00', '1.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('112', '64', '15', '10 in Patinum lụa 90 m', '3', '-4.00000', '70', '1160000.00', '1160000.00000', '1160000.00', '1', '0.00', '5.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('113', '65', '15', '10 in Patinum lụa 90 m', '3', '2.00000', '70', '1000000.00', '1160000.00000', '1053333.33', '1', '0.00', '1.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('114', '66', '15', '10 in Patinum lụa 90 m', '3', '-1.00000', '70', '1053333.33', '1053333.33000', '1053333.33', '1', '0.00', '3.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('115', '67', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-33.00000', '69', '1732052.47', '1732052.47000', '1732052.47', '1', '0.00', '182.00000', '149.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('116', '67', '18', '24 in Fuji Ty 80 láng 50 m', '3', '33.00000', '70', '1732052.47', '1732052.47000', '1732052.47', '1', '0.00', '50.00000', '83.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('117', '68', '21', '30 in Fuji Ty 80 lụa  50 m', '3', '-1.00000', '70', '2286000.00', '2286000.00000', '2286000.00', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('118', '69', '23', '50 in Fuji Ty 80 lụa  50 m', '3', '-1.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('119', '70', '31', 'P2 Pro 40 lít', '4', '10.00000', '69', '493000.00', '493000.00000', '493000.00', '1', '0.00', '25.00000', '35.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('120', '71', '31', 'P2 Pro 40 lít', '4', '-10.00000', '69', '493000.00', '493000.00000', '493000.00', '1', '0.00', '35.00000', '25.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('121', '72', '31', 'P2 Pro 40 lít', '4', '5.00000', '69', '493000.00', '493000.00000', '493000.00', '1', '0.00', '25.00000', '30.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('122', '73', '29', '30 In Ty 80 láng 75 mét', '3', '-16.00000', '69', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '52.00000', '36.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('123', '73', '29', '30 In Ty 80 láng 75 mét', '3', '16.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '4.00000', '20.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('124', '74', '4', '5 in Fuji láng 186 m', '3', '-21.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '26.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('125', '75', '4', '5 in Fuji láng 186 m', '3', '2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '46.00000', '48.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('126', '76', '4', '5 in Fuji láng 186 m', '3', '-2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '5.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('127', '77', '4', '5 in Fuji láng 186 m', '3', '-2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '48.00000', '46.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('128', '77', '4', '5 in Fuji láng 186 m', '3', '2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '3.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('129', '78', '5', '5 in Fuji lụa 186 m', '3', '-19.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '24.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('130', '79', '5', '5 in Fuji lụa 186 m', '3', '-2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '5.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('131', '80', '4', '5 in Fuji láng 186 m', '3', '2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '46.00000', '48.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('132', '81', '5', '5 in Fuji lụa 186 m', '3', '-2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '6.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('133', '81', '5', '5 in Fuji lụa 186 m', '3', '2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '3.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('134', '82', '7', '6 in Fuji láng 186 m', '3', '8.00000', '69', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '18.00000', '26.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('135', '83', '8', '6 in Fuji lụa 186 m', '3', '-6.00000', '69', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '54.00000', '48.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('136', '83', '8', '6 in Fuji lụa 186 m', '3', '6.00000', '70', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '4.00000', '10.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('137', '84', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-22.00000', '69', '1732052.47', '1732052.47000', '1732052.47', '1', '0.00', '149.00000', '127.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('138', '84', '18', '24 in Fuji Ty 80 láng 50 m', '3', '22.00000', '70', '1732052.47', '1732052.47000', '1732052.47', '1', '0.00', '83.00000', '105.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('139', '85', '29', '30 In Ty 80 láng 75 mét', '3', '-4.00000', '69', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '36.00000', '32.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('140', '85', '29', '30 In Ty 80 láng 75 mét', '3', '4.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '20.00000', '24.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('141', '86', '4', '5 in Fuji láng 186 m', '3', '-3.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '5.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('142', '87', '5', '5 in Fuji lụa 186 m', '3', '-3.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '5.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('143', '88', '7', '6 in Fuji láng 186 m', '3', '-7.00000', '70', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '9.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('144', '89', '8', '6 in Fuji lụa 186 m', '3', '-9.00000', '70', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '10.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('145', '90', '9', '8 in Fuji láng 90 m', '3', '-5.00000', '70', '1096000.00', '1096000.00000', '1096000.00', '1', '0.00', '6.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('146', '91', '13', ' 8 in Patinum lụa 90 m  ', '3', '-1.00000', '70', '650000.00', '650000.00000', '650000.00', '1', '0.00', '3.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('147', '92', '14', '10 in Fuji láng 90 m', '3', '-2.00000', '70', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '4.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('148', '93', '15', '10 in Patinum lụa 90 m', '3', '1.00000', '70', '1000000.00', '1053333.33000', '1035555.56', '1', '0.00', '2.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('149', '94', '16', '12 in giấy ngọc trai', '3', '-4.00000', '70', '1500000.00', '1500000.00000', '1500000.00', '1', '0.00', '5.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('150', '95', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-101.00000', '70', '1732052.47', '1732052.47000', '1732052.47', '1', '0.00', '105.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('151', '96', '29', '30 In Ty 80 láng 75 mét', '3', '-20.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '24.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('152', '97', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-46.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '54.00000', '8.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('153', '98', '24', 'P1 Pro 40 lít', '4', '20.00000', '70', '790000.00', '790000.00000', '790000.00', '1', '0.00', '6.00000', '26.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('154', '99', '31', 'P2 Pro 40 lít', '4', '20.00000', '70', '493000.00', '493000.00000', '493000.00', '1', '0.00', '4.00000', '24.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('155', '100', '24', 'P1 Pro 40 lít', '4', '-4.00000', '70', '790000.00', '790000.00000', '790000.00', '1', '0.00', '26.00000', '22.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('156', '101', '31', 'P2 Pro 40 lít', '4', '10.00000', '70', '493000.00', '493000.00000', '493000.00', '1', '0.00', '24.00000', '34.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('157', '102', '31', 'P2 Pro 40 lít', '4', '-8.00000', '70', '493000.00', '493000.00000', '493000.00', '1', '0.00', '34.00000', '26.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('158', '103', '38', 'Mực xanh in phẳng', '173', '-1.00000', '69', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('159', '103', '38', 'Mực xanh in phẳng', '173', '1.00000', '70', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('160', '104', '38', 'Mực xanh in phẳng', '173', '-1.00000', '70', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('161', '105', '36', 'Mực đỏ in phẳng', '173', '1.00000', '69', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '1.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('162', '106', '37', 'Mực vàng in phẳng', '173', '1.00000', '69', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '1.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('163', '107', '39', 'Mực đen in phẳng', '173', '-1.00000', '70', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('164', '108', '39', 'Mực đen in phẳng', '173', '2.00000', '69', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('165', '109', '40', 'Mực trắng in phẳng', '173', '3.00000', '69', '5510000.00', '0.00000', '5510000.00', '1', '0.00', '0.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('166', '110', '40', 'Mực trắng in phẳng', '173', '-1.00000', '69', '5510000.00', '5510000.00000', '5510000.00', '1', '0.00', '3.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('167', '110', '40', 'Mực trắng in phẳng', '173', '1.00000', '70', '5510000.00', '5510000.00000', '5510000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('168', '111', '40', 'Mực trắng in phẳng', '173', '-1.00000', '70', '5510000.00', '5510000.00000', '5510000.00', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('169', '112', '33', 'Mực xanh Xerox', '173', '-1.00000', '70', '2530000.00', '2530000.00000', '2530000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('170', '113', '32', 'Mực đỏ Xerox', '173', '1.00000', '69', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('171', '114', '32', 'Mực đỏ Xerox', '173', '1.00000', '70', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '1.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('172', '115', '32', 'Mực đỏ Xerox', '173', '-1.00000', '70', '8035000.00', '8035000.00000', '8035000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('173', '116', '33', 'Mực xanh Xerox', '173', '2.00000', '69', '2530000.00', '2530000.00000', '2530000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('174', '117', '35', 'Mực vàng Xerox', '173', '2.00000', '69', '2530000.00', '2530000.00000', '2530000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('175', '118', '35', 'Mực vàng Xerox', '173', '-1.00000', '69', '2530000.00', '2530000.00000', '2530000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('176', '118', '35', 'Mực vàng Xerox', '173', '1.00000', '70', '2530000.00', '2530000.00000', '2530000.00', '1', '0.00', '1.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('177', '119', '35', 'Mực vàng Xerox', '173', '-1.00000', '70', '2530000.00', '2530000.00000', '2530000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('178', '120', '34', 'Mực đen Xerox', '173', '2.00000', '69', '1320000.00', '1320000.00000', '1320000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('179', '121', '53', 'Drum vàng', '173', '1.00000', '69', '5174000.00', '0.00000', '5174000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('180', '121', '55', 'Drum xanh', '173', '1.00000', '69', '5174000.00', '0.00000', '5174000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('181', '121', '54', 'Drum đỏ', '173', '1.00000', '69', '5174000.00', '0.00000', '5174000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('182', '121', '52', 'Drum đen', '173', '1.00000', '69', '6930000.00', '0.00000', '6930000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('183', '122', '52', 'Drum đen', '173', '-1.00000', '69', '6930000.00', '6930000.00000', '6930000.00', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('184', '122', '52', 'Drum đen', '173', '1.00000', '70', '6930000.00', '6930000.00000', '6930000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('185', '123', '4', '5 in Fuji láng 186 m', '3', '-2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '48.00000', '46.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('186', '123', '4', '5 in Fuji láng 186 m', '3', '2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '2.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('187', '123', '5', '5 in Fuji lụa 186 m', '3', '-2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '4.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('188', '123', '5', '5 in Fuji lụa 186 m', '3', '2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '2.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('189', '123', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-4.00000', '69', '1732052.47', '1732052.47000', '1732052.47', '1', '0.00', '127.00000', '123.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('190', '123', '18', '24 in Fuji Ty 80 láng 50 m', '3', '4.00000', '70', '1732052.47', '1732052.47000', '1732052.47', '1', '0.00', '4.00000', '8.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('191', '124', '4', '5 in Fuji láng 186 m', '3', '-2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '4.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('192', '124', '5', '5 in Fuji lụa 186 m', '3', '-1.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '4.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('193', '125', '41', 'Baclit film 107 x 30', '3', '8.00000', '69', '2889000.00', '2860000.00000', '2885777.78', '1', '0.00', '0.00000', '8.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('194', '125', '42', 'Baclit film 127 x 30', '3', '5.00000', '69', '3429000.00', '3394000.00000', '3423166.67', '1', '0.00', '0.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('195', '125', '43', 'Baclit film 152 x 30', '3', '6.00000', '69', '4104000.00', '0.00000', '4104000.00', '1', '0.00', '0.00000', '6.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('196', '126', '42', 'Baclit film 127 x 30', '3', '-1.00000', '69', '3423166.67', '3423166.67000', '3423166.67', '1', '0.00', '5.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('197', '126', '42', 'Baclit film 127 x 30', '3', '1.00000', '70', '3423166.67', '3423166.67000', '3423166.67', '1', '0.00', '1.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('198', '126', '43', 'Baclit film 152 x 30', '3', '-2.00000', '69', '4104000.00', '4104000.00000', '4104000.00', '1', '0.00', '6.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('199', '126', '43', 'Baclit film 152 x 30', '3', '2.00000', '70', '4104000.00', '4104000.00000', '4104000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('200', '127', '42', 'Baclit film 127 x 30', '3', '-1.00000', '70', '3423166.67', '3423166.67000', '3423166.67', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('201', '127', '43', 'Baclit film 152 x 30', '3', '-1.00000', '70', '4104000.00', '4104000.00000', '4104000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('202', '128', '25', 'Fomat 5 ly', '174', '5.00000', '69', '220000.00', '0.00000', '220000.00', '1', '0.00', '0.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('203', '128', '56', 'Fomat 10 ly', '174', '2.00000', '69', '460000.00', '0.00000', '460000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('204', '129', '25', 'Fomat 5 ly', '174', '-5.00000', '69', '220000.00', '220000.00000', '220000.00', '1', '0.00', '5.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('205', '129', '25', 'Fomat 5 ly', '174', '5.00000', '70', '220000.00', '220000.00000', '220000.00', '1', '0.00', '0.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('206', '129', '56', 'Fomat 10 ly', '174', '-2.00000', '69', '460000.00', '460000.00000', '460000.00', '1', '0.00', '2.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('207', '129', '56', 'Fomat 10 ly', '174', '2.00000', '70', '460000.00', '460000.00000', '460000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('208', '130', '49', 'Canvas 152 x 18', '3', '-1.00000', '70', '1314000.00', '1314000.00000', '1314000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('209', '131', '7', '6 in Fuji láng 186 m', '3', '-1.00000', '70', '1551000.00', '1551000.00000', '1551000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('210', '132', '9', '8 in Fuji láng 90 m', '3', '-1.00000', '70', '1096000.00', '1096000.00000', '1096000.00', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('211', '133', '4', '5 in Fuji láng 186 m', '3', '-2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '46.00000', '44.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('212', '133', '4', '5 in Fuji láng 186 m', '3', '2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '2.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('213', '133', '5', '5 in Fuji lụa 186 m', '3', '-2.00000', '69', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '2.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('214', '133', '5', '5 in Fuji lụa 186 m', '3', '2.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '3.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('215', '134', '4', '5 in Fuji láng 186 m', '3', '-1.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '4.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('216', '134', '5', '5 in Fuji lụa 186 m', '3', '-1.00000', '70', '1304000.00', '1304000.00000', '1304000.00', '1', '0.00', '5.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('220', '137', '22', '50 in Fuji Ty 80 láng 50 m', '3', '2.00000', '69', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '68.00000', '70.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('221', '138', '9', '8 in Fuji láng 90 m', '3', '2.00000', '69', '1096000.00', '1096000.00000', '1096000.00', '1', '0.00', '8.00000', '10.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('222', '139', '9', '8 in Fuji láng 90 m', '3', '-2.00000', '69', '1096000.00', '1096000.00000', '1096000.00', '1', '0.00', '10.00000', '8.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('223', '139', '9', '8 in Fuji láng 90 m', '3', '2.00000', '70', '1096000.00', '1096000.00000', '1096000.00', '1', '0.00', '0.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('224', '140', '16', '12 in giấy ngọc trai', '3', '4.00000', '70', '1500000.00', '1500000.00000', '1500000.00', '1', '0.00', '1.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('574', '254', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-4.00000', '69', '1712568.72', '1712568.72190', '1712568.72', '1', '0.00', '123.00000', '119.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('575', '254', '18', '24 in Fuji Ty 80 láng 50 m', '3', '4.00000', '70', '1712568.72', '1712568.72190', '1712568.72', '1', '0.00', '8.00000', '12.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('576', '255', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-4.00000', '70', '1712568.72', '1712568.72190', '1712568.72', '1', '0.00', '12.00000', '8.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('577', '256', '7', '6 in Fuji láng 186 m', '3', '8.00000', '70', '1370000.00', '1512946.28020', '1497698.68', '1', '0.00', '1.00000', '9.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('578', '256', '8', '6 in Fuji lụa 186 m', '3', '4.00000', '70', '1370000.00', '1525596.49120', '1514677.44', '1', '0.00', '1.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('579', '257', '9', '8 in Fuji láng 90 m', '3', '7.00000', '70', '1006000.00', '1017764.70590', '1012920.42', '1', '0.00', '2.00000', '9.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('580', '258', '14', '10 in Fuji láng 90 m', '3', '5.00000', '70', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '2.00000', '7.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('581', '259', '4', '5 in Fuji láng 186 m', '3', '34.00000', '70', '1250000.00', '1271337.66680', '1264917.48', '1', '0.00', '3.00000', '37.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('582', '260', '16', '12 in giấy ngọc trai', '3', '4.00000', '70', '1500000.00', '1500000.00000', '1500000.00', '1', '0.00', '5.00000', '9.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('583', '261', '18', '24 in Fuji Ty 80 láng 50 m', '3', '25.00000', '70', '1713000.00', '1712568.72190', '1712639.66', '1', '0.00', '8.00000', '33.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('584', '262', '31', 'P2 Pro 40 lít', '4', '42.00000', '70', '493000.00', '493000.00000', '493000.00', '1', '0.00', '26.00000', '68.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('585', '262', '24', 'P1 Pro 40 lít', '4', '49.00000', '70', '790000.00', '790000.00000', '790000.00', '1', '0.00', '22.00000', '71.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('586', '263', '5', '5 in Fuji lụa 186 m', '3', '26.00000', '70', '1250000.00', '1227218.75000', '1245167.61', '1', '0.00', '4.00000', '30.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('587', '264', '29', '30 In Ty 80 láng 75 mét', '3', '18.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '4.00000', '22.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('588', '265', '18', '24 in Fuji Ty 80 láng 50 m', '3', '71.00000', '70', '1711000.00', '1712639.65580', '1712117.61', '1', '0.00', '33.00000', '104.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('589', '266', '22', '50 in Fuji Ty 80 láng 50 m', '3', '60.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '8.00000', '68.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('590', '267', '24', 'P1 Pro 40 lít', '4', '-5.00000', '70', '790000.00', '790000.00000', '790000.00', '1', '0.00', '71.00000', '66.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('591', '267', '31', 'P2 Pro 40 lít', '4', '-5.00000', '70', '493000.00', '493000.00000', '493000.00', '1', '0.00', '68.00000', '63.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('592', '268', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-77.00000', '70', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '104.00000', '27.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('593', '269', '29', '30 In Ty 80 láng 75 mét', '3', '-18.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '22.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('594', '269', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-51.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '68.00000', '17.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('595', '270', '24', 'P1 Pro 40 lít', '4', '-39.00000', '70', '790000.00', '790000.00000', '790000.00', '1', '0.00', '66.00000', '27.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('596', '270', '31', 'P2 Pro 40 lít', '4', '-32.00000', '70', '493000.00', '493000.00000', '493000.00', '1', '0.00', '63.00000', '31.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('597', '271', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-4.00000', '69', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '119.00000', '115.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('598', '271', '18', '24 in Fuji Ty 80 láng 50 m', '3', '4.00000', '70', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '27.00000', '31.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('599', '272', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-4.00000', '70', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '31.00000', '27.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('600', '272', '29', '30 In Ty 80 láng 75 mét', '3', '-1.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '4.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('601', '272', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-3.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '17.00000', '14.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('602', '273', '7', '6 in Fuji láng 186 m', '3', '-6.00000', '70', '1497698.68', '1497698.67700', '1497698.68', '1', '0.00', '9.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('603', '273', '8', '6 in Fuji lụa 186 m', '3', '-4.00000', '70', '1514677.44', '1514677.43920', '1514677.44', '1', '0.00', '5.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('604', '273', '9', '8 in Fuji láng 90 m', '3', '-8.00000', '70', '1012920.42', '1012920.41520', '1012920.42', '1', '0.00', '9.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('605', '273', '4', '5 in Fuji láng 186 m', '3', '-32.00000', '70', '1264917.48', '1264917.48390', '1264917.48', '1', '0.00', '37.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('606', '273', '5', '5 in Fuji lụa 186 m', '3', '-24.00000', '70', '1245167.61', '1245167.61360', '1245167.61', '1', '0.00', '30.00000', '6.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('607', '273', '14', '10 in Fuji láng 90 m', '3', '-4.00000', '70', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '7.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('608', '274', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-4.00000', '69', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '115.00000', '111.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('609', '274', '18', '24 in Fuji Ty 80 láng 50 m', '3', '4.00000', '70', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '27.00000', '31.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('610', '275', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-5.00000', '70', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '31.00000', '26.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('611', '275', '29', '30 In Ty 80 láng 75 mét', '3', '-1.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '3.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('612', '275', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-3.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '14.00000', '11.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('613', '276', '29', '30 In Ty 80 láng 75 mét', '3', '-1.00000', '69', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '32.00000', '31.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('614', '276', '29', '30 In Ty 80 láng 75 mét', '3', '1.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '2.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('615', '277', '4', '5 in Fuji láng 186 m', '3', '-2.00000', '69', '1264917.48', '1264917.48390', '1264917.48', '1', '0.00', '44.00000', '42.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('616', '277', '4', '5 in Fuji láng 186 m', '3', '2.00000', '70', '1264917.48', '1264917.48390', '1264917.48', '1', '0.00', '5.00000', '7.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('617', '277', '5', '5 in Fuji lụa 186 m', '3', '0.00000', '69', '1245167.61', '1245167.61360', '1245167.61', '1', '0.00', '0.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('618', '277', '5', '5 in Fuji lụa 186 m', '3', '0.00000', '70', '1245167.61', '1245167.61360', '1245167.61', '1', '0.00', '6.00000', '6.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('619', '278', '5', '5 in Fuji lụa 186 m', '3', '-3.00000', '70', '1245167.61', '1245167.61360', '1245167.61', '1', '0.00', '6.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('620', '279', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-2.00000', '70', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '26.00000', '24.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('621', '280', '7', '6 in Fuji láng 186 m', '3', '-2.00000', '70', '1497698.68', '1497698.67700', '1497698.68', '1', '0.00', '3.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('622', '281', '29', '30 In Ty 80 láng 75 mét', '3', '-2.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '3.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('623', '282', '14', '10 in Fuji láng 90 m', '3', '-1.00000', '70', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '3.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('624', '283', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-6.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '11.00000', '5.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('625', '284', '29', '30 In Ty 80 láng 75 mét', '3', '-1.00000', '69', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '31.00000', '30.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('626', '284', '29', '30 In Ty 80 láng 75 mét', '3', '1.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '1.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('627', '285', '16', '12 in giấy ngọc trai', '3', '-5.00000', '70', '1500000.00', '1500000.00000', '1500000.00', '1', '0.00', '9.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('628', '286', '4', '5 in Fuji láng 186 m', '3', '-4.00000', '70', '1264917.48', '1264917.48390', '1264917.48', '1', '0.00', '7.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('629', '287', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-20.00000', '70', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '24.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('630', '288', '4', '5 in Fuji láng 186 m', '3', '-1.00000', '70', '1264917.48', '1264917.48390', '1264917.48', '1', '0.00', '3.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('631', '289', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-3.00000', '70', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '4.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('632', '290', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-3.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '5.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('633', '291', '5', '5 in Fuji lụa 186 m', '3', '-1.00000', '70', '1245167.61', '1245167.61360', '1245167.61', '1', '0.00', '3.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('634', '292', '8', '6 in Fuji lụa 186 m', '3', '-1.00000', '70', '1514677.44', '1514677.43920', '1514677.44', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('635', '293', '16', '12 in giấy ngọc trai', '3', '-1.00000', '70', '1500000.00', '1500000.00000', '1500000.00', '1', '0.00', '4.00000', '3.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('636', '294', '14', '10 in Fuji láng 90 m', '3', '-2.00000', '70', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '2.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('637', '294', '15', '10 in Patinum lụa 90 m', '3', '-1.00000', '70', '1035555.56', '1035555.55550', '1035555.56', '1', '0.00', '3.00000', '2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('638', '295', '5', '5 in Fuji lụa 186 m', '3', '-2.00000', '70', '1245167.61', '1245167.61360', '1245167.61', '1', '0.00', '2.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('639', '296', '7', '6 in Fuji láng 186 m', '3', '-1.00000', '70', '1497698.68', '1497698.67700', '1497698.68', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('640', '297', '9', '8 in Fuji láng 90 m', '3', '-1.00000', '70', '1012920.42', '1012920.41520', '1012920.42', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('641', '297', '13', ' 8 in Patinum lụa 90 m  ', '3', '-1.00000', '70', '650000.00', '650000.00000', '650000.00', '1', '0.00', '2.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('642', '298', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-9.00000', '70', '1712117.61', '1712117.61290', '1712117.61', '1', '0.00', '1.00000', '-8.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('643', '299', '18', '24 in Fuji Ty 80 láng 50 m', '3', '38.00000', '70', '1742440.00', '1712117.61290', '1720289.60', '1', '0.00', '-8.00000', '30.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('644', '300', '29', '30 In Ty 80 láng 75 mét', '3', '-2.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '2.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('645', '301', '29', '30 In Ty 80 láng 75 mét', '3', '-10.00000', '69', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '30.00000', '20.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('646', '301', '29', '30 In Ty 80 láng 75 mét', '3', '10.00000', '70', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '0.00000', '10.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('647', '302', '29', '30 In Ty 80 láng 75 mét', '3', '-20.00000', '69', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '20.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('648', '302', '29', '30 In Ty 80 láng 75 mét', '3', '20.00000', '80', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '0.00000', '20.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('649', '303', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-4.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '2.00000', '-2.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('650', '304', '22', '50 in Fuji Ty 80 láng 50 m', '3', '30.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '-2.00000', '28.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('651', '305', '23', '50 in Fuji Ty 80 lụa  50 m', '3', '1.00000', '70', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('652', '306', '24', 'P1 Pro 40 lít', '4', '-4.00000', '70', '790000.00', '790000.00000', '790000.00', '1', '0.00', '27.00000', '23.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('653', '306', '24', 'P1 Pro 40 lít', '4', '4.00000', '80', '790000.00', '790000.00000', '790000.00', '1', '0.00', '0.00000', '4.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('654', '307', '31', 'P2 Pro 40 lít', '4', '-7.00000', '70', '493000.00', '493000.00000', '493000.00', '1', '0.00', '31.00000', '24.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('655', '308', '4', '5 in Fuji láng 186 m', '3', '37.00000', '81', '1264917.48', '1264917.48390', '1264917.48', '1', '0.00', '2.97000', '39.97000');
INSERT INTO `inv_inventorylogdetail` VALUES ('656', '308', '4', '5 in Fuji láng 186 m', '3', '-37.00000', '81', '1264917.48', '1264917.48390', '1264917.48', '1', '0.00', '39.97000', '2.97000');
INSERT INTO `inv_inventorylogdetail` VALUES ('657', '308', '5', '5 in Fuji lụa 186 m', '3', '30.00000', '81', '1245167.61', '1245167.61360', '1245167.61', '1', '0.00', '1.04000', '31.04000');
INSERT INTO `inv_inventorylogdetail` VALUES ('658', '308', '5', '5 in Fuji lụa 186 m', '3', '-30.00000', '81', '1245167.61', '1245167.61360', '1245167.61', '1', '0.00', '31.04000', '1.04000');
INSERT INTO `inv_inventorylogdetail` VALUES ('659', '308', '7', '6 in Fuji láng 186 m', '3', '9.00000', '81', '1497698.68', '1497698.67700', '1497698.68', '1', '0.00', '0.77000', '9.77000');
INSERT INTO `inv_inventorylogdetail` VALUES ('660', '308', '7', '6 in Fuji láng 186 m', '3', '-9.00000', '81', '1497698.68', '1497698.67700', '1497698.68', '1', '0.00', '9.77000', '0.77000');
INSERT INTO `inv_inventorylogdetail` VALUES ('661', '308', '8', '6 in Fuji lụa 186 m', '3', '5.00000', '81', '1514677.44', '1514677.43920', '1514677.44', '1', '0.00', '0.01000', '5.01000');
INSERT INTO `inv_inventorylogdetail` VALUES ('662', '308', '8', '6 in Fuji lụa 186 m', '3', '-5.00000', '81', '1514677.44', '1514677.43920', '1514677.44', '1', '0.00', '5.01000', '0.01000');
INSERT INTO `inv_inventorylogdetail` VALUES ('663', '308', '9', '8 in Fuji láng 90 m', '3', '9.00000', '81', '1012920.42', '1012920.41520', '1012920.42', '1', '0.00', '0.00000', '9.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('664', '308', '9', '8 in Fuji láng 90 m', '3', '-9.00000', '81', '1012920.42', '1012920.41520', '1012920.42', '1', '0.00', '9.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('665', '308', '13', ' 8 in Patinum lụa 90 m  ', '3', '1.00000', '81', '650000.00', '650000.00000', '650000.00', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('666', '308', '13', ' 8 in Patinum lụa 90 m  ', '3', '-1.00000', '81', '650000.00', '650000.00000', '650000.00', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('667', '308', '14', '10 in Fuji láng 90 m', '3', '7.00000', '81', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '0.00000', '7.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('668', '308', '14', '10 in Fuji láng 90 m', '3', '-7.00000', '81', '1257000.00', '1257000.00000', '1257000.00', '1', '0.00', '7.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('669', '308', '15', '10 in Patinum lụa 90 m', '3', '1.00000', '81', '1035555.56', '1035555.55550', '1035555.56', '1', '0.00', '0.00000', '1.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('670', '308', '15', '10 in Patinum lụa 90 m', '3', '-1.00000', '81', '1035555.56', '1035555.55550', '1035555.56', '1', '0.00', '1.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('671', '308', '16', '12 in giấy ngọc trai', '3', '6.00000', '81', '1500000.00', '1500000.00000', '1500000.00', '1', '0.00', '0.00000', '6.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('672', '308', '16', '12 in giấy ngọc trai', '3', '-6.00000', '81', '1500000.00', '1500000.00000', '1500000.00', '1', '0.00', '6.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('673', '308', '18', '24 in Fuji Ty 80 láng 50 m', '3', '124.00000', '81', '1720289.60', '1720289.60370', '1720289.60', '1', '0.00', '0.00000', '124.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('674', '308', '18', '24 in Fuji Ty 80 láng 50 m', '3', '-123.60000', '81', '1720289.60', '1720289.60370', '1720289.60', '1', '0.00', '124.00000', '0.40000');
INSERT INTO `inv_inventorylogdetail` VALUES ('675', '308', '22', '50 in Fuji Ty 80 láng 50 m', '3', '70.00000', '81', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '0.00000', '70.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('676', '308', '22', '50 in Fuji Ty 80 láng 50 m', '3', '-70.00000', '81', '3556000.00', '3556000.00000', '3556000.00', '1', '0.00', '70.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('677', '308', '24', 'P1 Pro 40 lít', '4', '44.00000', '81', '790000.00', '790000.00000', '790000.00', '1', '0.00', '0.00000', '44.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('678', '308', '24', 'P1 Pro 40 lít', '4', '-44.00000', '81', '790000.00', '790000.00000', '790000.00', '1', '0.00', '44.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('679', '308', '29', '30 In Ty 80 láng 75 mét', '3', '24.00000', '81', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '0.00000', '24.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('680', '308', '29', '30 In Ty 80 láng 75 mét', '3', '-24.00000', '81', '3185000.00', '3185000.00000', '3185000.00', '1', '0.00', '24.00000', '0.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('681', '308', '31', 'P2 Pro 40 lít', '4', '44.00000', '81', '493000.00', '493000.00000', '493000.00', '1', '0.00', '0.00000', '44.00000');
INSERT INTO `inv_inventorylogdetail` VALUES ('682', '308', '31', 'P2 Pro 40 lít', '4', '-44.00000', '81', '493000.00', '493000.00000', '493000.00', '1', '0.00', '44.00000', '0.00000');

-- ----------------------------
-- Table structure for `inv_limit`
-- ----------------------------
DROP TABLE IF EXISTS `inv_limit`;
CREATE TABLE `inv_limit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `wh_id` int(11) DEFAULT NULL,
  `qtyLimit` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniquefild` (`product_id`,`wh_id`),
  KEY `wh_id` (`wh_id`),
  CONSTRAINT `inv_limit_ibfk_1` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`),
  CONSTRAINT `inv_limit_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_limit
-- ----------------------------
INSERT INTO `inv_limit` VALUES ('1', '52', '69', '0');
INSERT INTO `inv_limit` VALUES ('2', '52', '70', '0');
INSERT INTO `inv_limit` VALUES ('3', '52', '80', '0');
INSERT INTO `inv_limit` VALUES ('4', '53', '69', '0');
INSERT INTO `inv_limit` VALUES ('5', '53', '70', '0');
INSERT INTO `inv_limit` VALUES ('6', '53', '80', '0');
INSERT INTO `inv_limit` VALUES ('7', '54', '69', '0');
INSERT INTO `inv_limit` VALUES ('8', '54', '70', '0');
INSERT INTO `inv_limit` VALUES ('9', '54', '80', '0');
INSERT INTO `inv_limit` VALUES ('10', '55', '69', '0');
INSERT INTO `inv_limit` VALUES ('11', '55', '70', '0');
INSERT INTO `inv_limit` VALUES ('12', '55', '80', '0');
INSERT INTO `inv_limit` VALUES ('13', '56', '69', '0');
INSERT INTO `inv_limit` VALUES ('14', '56', '70', '0');
INSERT INTO `inv_limit` VALUES ('15', '56', '80', '0');
INSERT INTO `inv_limit` VALUES ('16', '4', '69', '10');
INSERT INTO `inv_limit` VALUES ('17', '4', '70', '2');
INSERT INTO `inv_limit` VALUES ('18', '4', '80', '0');
INSERT INTO `inv_limit` VALUES ('19', '5', '69', '10');
INSERT INTO `inv_limit` VALUES ('20', '5', '70', '2');
INSERT INTO `inv_limit` VALUES ('21', '5', '80', '0');
INSERT INTO `inv_limit` VALUES ('22', '6', '69', '0');
INSERT INTO `inv_limit` VALUES ('23', '6', '70', '0');
INSERT INTO `inv_limit` VALUES ('24', '6', '80', '0');
INSERT INTO `inv_limit` VALUES ('25', '7', '69', '10');
INSERT INTO `inv_limit` VALUES ('26', '7', '70', '2');
INSERT INTO `inv_limit` VALUES ('27', '7', '80', '0');
INSERT INTO `inv_limit` VALUES ('28', '8', '69', '10');
INSERT INTO `inv_limit` VALUES ('29', '8', '70', '2');
INSERT INTO `inv_limit` VALUES ('30', '8', '80', '0');
INSERT INTO `inv_limit` VALUES ('31', '9', '69', '0');
INSERT INTO `inv_limit` VALUES ('32', '9', '70', '2');
INSERT INTO `inv_limit` VALUES ('33', '9', '80', '0');
INSERT INTO `inv_limit` VALUES ('37', '13', '69', '0');
INSERT INTO `inv_limit` VALUES ('38', '13', '70', '0');
INSERT INTO `inv_limit` VALUES ('39', '13', '80', '0');
INSERT INTO `inv_limit` VALUES ('40', '14', '69', '0');
INSERT INTO `inv_limit` VALUES ('41', '14', '70', '0');
INSERT INTO `inv_limit` VALUES ('42', '14', '80', '0');
INSERT INTO `inv_limit` VALUES ('43', '15', '69', '0');
INSERT INTO `inv_limit` VALUES ('44', '15', '70', '0');
INSERT INTO `inv_limit` VALUES ('45', '15', '80', '0');
INSERT INTO `inv_limit` VALUES ('46', '16', '69', '0');
INSERT INTO `inv_limit` VALUES ('47', '16', '70', '0');
INSERT INTO `inv_limit` VALUES ('48', '16', '80', '0');
INSERT INTO `inv_limit` VALUES ('49', '17', '69', '0');
INSERT INTO `inv_limit` VALUES ('50', '17', '70', '0');
INSERT INTO `inv_limit` VALUES ('51', '17', '80', '0');
INSERT INTO `inv_limit` VALUES ('52', '18', '69', '0');
INSERT INTO `inv_limit` VALUES ('53', '18', '70', '0');
INSERT INTO `inv_limit` VALUES ('54', '18', '80', '0');
INSERT INTO `inv_limit` VALUES ('55', '19', '69', '0');
INSERT INTO `inv_limit` VALUES ('56', '19', '70', '0');
INSERT INTO `inv_limit` VALUES ('57', '19', '80', '0');
INSERT INTO `inv_limit` VALUES ('58', '20', '69', '0');
INSERT INTO `inv_limit` VALUES ('59', '20', '70', '0');
INSERT INTO `inv_limit` VALUES ('60', '20', '80', '0');
INSERT INTO `inv_limit` VALUES ('61', '21', '69', '0');
INSERT INTO `inv_limit` VALUES ('62', '21', '70', '0');
INSERT INTO `inv_limit` VALUES ('63', '21', '80', '0');
INSERT INTO `inv_limit` VALUES ('64', '22', '69', '0');
INSERT INTO `inv_limit` VALUES ('65', '22', '70', '0');
INSERT INTO `inv_limit` VALUES ('66', '22', '80', '0');
INSERT INTO `inv_limit` VALUES ('67', '23', '69', '0');
INSERT INTO `inv_limit` VALUES ('68', '23', '70', '0');
INSERT INTO `inv_limit` VALUES ('69', '23', '80', '0');
INSERT INTO `inv_limit` VALUES ('70', '24', '69', '0');
INSERT INTO `inv_limit` VALUES ('71', '24', '70', '0');
INSERT INTO `inv_limit` VALUES ('72', '24', '80', '0');
INSERT INTO `inv_limit` VALUES ('73', '25', '69', '0');
INSERT INTO `inv_limit` VALUES ('74', '25', '70', '0');
INSERT INTO `inv_limit` VALUES ('75', '25', '80', '0');
INSERT INTO `inv_limit` VALUES ('76', '26', '69', '0');
INSERT INTO `inv_limit` VALUES ('77', '26', '70', '0');
INSERT INTO `inv_limit` VALUES ('78', '26', '80', '0');
INSERT INTO `inv_limit` VALUES ('79', '29', '69', '0');
INSERT INTO `inv_limit` VALUES ('80', '29', '70', '0');
INSERT INTO `inv_limit` VALUES ('81', '29', '80', '0');
INSERT INTO `inv_limit` VALUES ('82', '31', '69', '0');
INSERT INTO `inv_limit` VALUES ('83', '31', '70', '0');
INSERT INTO `inv_limit` VALUES ('84', '31', '80', '0');
INSERT INTO `inv_limit` VALUES ('85', '32', '69', '0');
INSERT INTO `inv_limit` VALUES ('86', '32', '70', '0');
INSERT INTO `inv_limit` VALUES ('87', '32', '80', '0');
INSERT INTO `inv_limit` VALUES ('88', '33', '69', '0');
INSERT INTO `inv_limit` VALUES ('89', '33', '70', '0');
INSERT INTO `inv_limit` VALUES ('90', '33', '80', '0');
INSERT INTO `inv_limit` VALUES ('91', '34', '69', '0');
INSERT INTO `inv_limit` VALUES ('92', '34', '70', '0');
INSERT INTO `inv_limit` VALUES ('93', '34', '80', '0');
INSERT INTO `inv_limit` VALUES ('94', '35', '69', '0');
INSERT INTO `inv_limit` VALUES ('95', '35', '70', '0');
INSERT INTO `inv_limit` VALUES ('96', '35', '80', '0');
INSERT INTO `inv_limit` VALUES ('97', '36', '69', '0');
INSERT INTO `inv_limit` VALUES ('98', '36', '70', '0');
INSERT INTO `inv_limit` VALUES ('99', '36', '80', '0');
INSERT INTO `inv_limit` VALUES ('100', '37', '69', '0');
INSERT INTO `inv_limit` VALUES ('101', '37', '70', '0');
INSERT INTO `inv_limit` VALUES ('102', '37', '80', '0');
INSERT INTO `inv_limit` VALUES ('103', '38', '69', '0');
INSERT INTO `inv_limit` VALUES ('104', '38', '70', '0');
INSERT INTO `inv_limit` VALUES ('105', '38', '80', '0');
INSERT INTO `inv_limit` VALUES ('106', '39', '69', '0');
INSERT INTO `inv_limit` VALUES ('107', '39', '70', '0');
INSERT INTO `inv_limit` VALUES ('108', '39', '80', '0');
INSERT INTO `inv_limit` VALUES ('109', '40', '69', '0');
INSERT INTO `inv_limit` VALUES ('110', '40', '70', '0');
INSERT INTO `inv_limit` VALUES ('111', '40', '80', '0');
INSERT INTO `inv_limit` VALUES ('112', '41', '69', '0');
INSERT INTO `inv_limit` VALUES ('113', '41', '70', '0');
INSERT INTO `inv_limit` VALUES ('114', '41', '80', '0');
INSERT INTO `inv_limit` VALUES ('115', '42', '69', '0');
INSERT INTO `inv_limit` VALUES ('116', '42', '70', '0');
INSERT INTO `inv_limit` VALUES ('117', '42', '80', '0');
INSERT INTO `inv_limit` VALUES ('118', '43', '69', '0');
INSERT INTO `inv_limit` VALUES ('119', '43', '70', '0');
INSERT INTO `inv_limit` VALUES ('120', '43', '80', '0');
INSERT INTO `inv_limit` VALUES ('121', '44', '69', '0');
INSERT INTO `inv_limit` VALUES ('122', '44', '70', '0');
INSERT INTO `inv_limit` VALUES ('123', '44', '80', '0');
INSERT INTO `inv_limit` VALUES ('124', '45', '69', '0');
INSERT INTO `inv_limit` VALUES ('125', '45', '70', '0');
INSERT INTO `inv_limit` VALUES ('126', '45', '80', '0');
INSERT INTO `inv_limit` VALUES ('127', '46', '69', '0');
INSERT INTO `inv_limit` VALUES ('128', '46', '70', '0');
INSERT INTO `inv_limit` VALUES ('129', '46', '80', '0');
INSERT INTO `inv_limit` VALUES ('130', '47', '69', '0');
INSERT INTO `inv_limit` VALUES ('131', '47', '70', '0');
INSERT INTO `inv_limit` VALUES ('132', '47', '80', '0');
INSERT INTO `inv_limit` VALUES ('133', '48', '69', '0');
INSERT INTO `inv_limit` VALUES ('134', '48', '70', '0');
INSERT INTO `inv_limit` VALUES ('135', '48', '80', '0');
INSERT INTO `inv_limit` VALUES ('136', '49', '69', '0');
INSERT INTO `inv_limit` VALUES ('137', '49', '70', '0');
INSERT INTO `inv_limit` VALUES ('138', '49', '80', '0');
INSERT INTO `inv_limit` VALUES ('139', '50', '69', '0');
INSERT INTO `inv_limit` VALUES ('140', '50', '70', '0');
INSERT INTO `inv_limit` VALUES ('141', '50', '80', '0');
INSERT INTO `inv_limit` VALUES ('142', '51', '69', '0');
INSERT INTO `inv_limit` VALUES ('143', '51', '70', '0');
INSERT INTO `inv_limit` VALUES ('144', '51', '80', '0');

-- ----------------------------
-- Table structure for `inv_transfer`
-- ----------------------------
DROP TABLE IF EXISTS `inv_transfer`;
CREATE TABLE `inv_transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(50) NOT NULL DEFAULT '',
  `date` date NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` bit(1) DEFAULT b'0',
  `create_uid` int(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `branch_id` tinyint(11) NOT NULL,
  `from_wh_id` int(20) NOT NULL,
  `to_wh_id` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trans_num` (`num`),
  KEY `branch_id` (`branch_id`),
  KEY `from_wh_id` (`from_wh_id`),
  KEY `to_wh_id` (`to_wh_id`),
  CONSTRAINT `inv_transfer_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`),
  CONSTRAINT `inv_transfer_ibfk_2` FOREIGN KEY (`from_wh_id`) REFERENCES `inv_warehouse` (`id`),
  CONSTRAINT `inv_transfer_ibfk_3` FOREIGN KEY (`to_wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_transfer
-- ----------------------------
INSERT INTO `inv_transfer` VALUES ('1', 'CVT1211-001', '2012-11-02', '', '', '1', '2012-11-04 15:14:00', '1', '2012-11-10 17:38:53', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('2', 'CVT1112-001', '2012-11-01', '', '', '1', '2012-11-16 11:49:09', '1', '2012-11-16 11:50:12', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('3', 'CVT1112-001', '2012-11-16', '', '', '1', '2012-11-16 11:58:08', '1', '2012-11-16 11:58:21', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('4', 'CVT1112-002', '2012-11-01', '', '', '1', '2012-11-25 09:33:04', '1', '2012-11-25 09:33:16', '1', '69', '80');
INSERT INTO `inv_transfer` VALUES ('5', 'CVT1112-003', '2012-11-25', '', '', '1', '2012-11-25 09:37:38', '1', '2012-11-25 09:37:48', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('6', 'CVT1112-004', '2012-11-25', '', '', '1', '2012-11-25 09:38:51', '1', '2012-11-25 09:39:02', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('7', 'CVT1112-005', '2012-11-25', '', '', '1', '2012-11-25 09:40:25', '1', '2012-11-25 09:40:36', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('8', 'CVT1112-006', '2012-11-25', '', '', '1', '2012-11-25 09:41:21', '1', '2012-11-25 09:41:32', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('9', 'CVT1112-007', '2012-11-25', '', '', '1', '2012-11-25 09:42:32', '1', '2012-11-25 09:42:40', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('10', 'CVT1112-008', '2012-11-25', '', '', '1', '2012-11-25 09:43:21', '1', '2012-11-25 09:43:35', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('11', 'CVT1112-009', '2012-11-25', '', '', '1', '2012-11-25 09:50:47', '1', '2012-11-25 09:51:00', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('12', 'CVT1112-010', '2012-11-14', '', '', '1', '2012-11-25 10:23:53', '1', '2012-11-25 10:24:04', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('13', 'CVT1112-011', '2012-11-22', '', '', '1', '2012-11-25 10:51:54', '1', '2012-11-25 10:52:05', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('14', 'CVT1112-012', '2012-11-25', '', '', '1', '2012-11-25 14:55:35', '1', '2012-11-25 15:02:06', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('15', 'CVT1112-013', '2012-11-29', '', '', '1', '2012-11-29 15:45:12', '1', '2012-11-29 15:45:44', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('16', 'CVT1112-014', '2012-11-29', '', '', '1', '2012-11-29 15:49:35', '1', '2012-11-29 15:49:45', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('17', 'CVT1112-015', '2012-11-29', '', '', '1', '2012-11-29 15:51:11', '1', '2012-11-29 15:51:21', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('18', 'CVT1112-016', '2012-11-29', '', '', '1', '2012-11-29 15:54:14', '1', '2012-11-29 15:54:24', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('19', 'CVT1112-017', '2012-11-29', '', '', '1', '2012-11-29 18:14:04', '1', '2012-11-29 18:14:12', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('20', 'CVT1112-018', '2012-11-29', '', '', '1', '2012-11-29 18:25:07', '1', '2012-11-29 18:25:15', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('21', 'CVT1112-019', '2012-11-29', '', '', '1', '2012-11-29 18:40:33', '1', '2012-11-29 18:40:41', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('22', 'CVT1112-020', '2012-11-29', '', '', '1', '2012-11-29 18:59:35', '1', '2012-11-29 18:59:43', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('23', 'CVT1112-021', '2012-11-30', '', '', '1', '2012-11-30 10:58:02', '1', '2012-11-30 10:58:16', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('24', 'CVT1112-022', '2012-11-30', '', '', '1', '2012-11-30 11:43:33', '1', '2012-11-30 11:43:46', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('25', 'CVT1112-023', '2012-11-30', '', '', '1', '2012-11-30 11:59:00', '1', '2012-11-30 11:59:08', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('26', 'CVT1112-024', '2012-11-30', '', '', '1', '2012-12-01 10:26:07', '1', '2012-12-01 10:26:19', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('27', 'CVT1212-001', '2012-12-01', '', '', '1', '2012-12-02 08:19:21', '1', '2012-12-02 08:19:31', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('28', 'CVT1112-025', '2012-11-30', '', '', '1', '2012-12-25 17:13:31', '1', '2012-12-25 17:13:44', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('29', 'CVT1212-002', '2012-12-25', '', '', '1', '2012-12-26 08:40:54', '1', '2012-12-26 08:41:16', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('30', 'CVT1212-003', '2012-12-26', '', '', '1', '2012-12-26 18:31:17', '1', '2012-12-26 18:31:40', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('31', 'CVT1212-004', '2012-12-29', '', '', '1', '2012-12-29 18:24:49', '1', '2012-12-29 18:25:01', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('32', 'CVT1212-005', '2012-12-26', '', '', '1', '2012-12-30 09:56:54', '1', '2012-12-30 09:57:08', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('33', 'CVT1212-006', '2012-12-27', '', '', '1', '2012-12-30 09:59:16', '1', '2012-12-30 09:59:31', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('35', 'CVT1212-008', '2012-12-31', '', '', '1', '2013-01-07 17:05:04', '1', '2013-01-07 17:05:44', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('36', 'CVT1212-009', '2012-12-31', '', '', '1', '2013-01-07 17:07:03', '1', '2013-01-07 17:07:23', '1', '69', '80');
INSERT INTO `inv_transfer` VALUES ('37', 'CVT1212-010', '2012-12-31', '', '', '1', '2013-01-07 17:49:31', '1', '2013-01-07 17:50:06', '1', '70', '80');

-- ----------------------------
-- Table structure for `inv_transferline`
-- ----------------------------
DROP TABLE IF EXISTS `inv_transferline`;
CREATE TABLE `inv_transferline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(50) NOT NULL,
  `product_id` int(20) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `uom_id` int(15) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `radio` decimal(19,9) unsigned DEFAULT '1.000000000',
  `qtystd` decimal(19,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`trans_id`) USING BTREE,
  KEY `trans_id` (`trans_id`) USING BTREE,
  KEY `product_id` (`product_id`) USING BTREE,
  KEY `uom_id` (`uom_id`) USING BTREE,
  CONSTRAINT `inv_transferline_ibfk_1` FOREIGN KEY (`trans_id`) REFERENCES `inv_transfer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_transferline_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_transferline
-- ----------------------------
INSERT INTO `inv_transferline` VALUES ('1', '1', '9', '8 in Fuji láng 90 m', '3', '1.00', '1.000000000', '1.00000');
INSERT INTO `inv_transferline` VALUES ('2', '2', '4', '5 in Fuji láng 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('3', '2', '29', '30 In Ty 80 láng 75 mét', '3', '3.00', '1.000000000', '3.00000');
INSERT INTO `inv_transferline` VALUES ('4', '2', '36', 'Mực đỏ in phẳng', '173', '1.00', '1.000000000', '1.00000');
INSERT INTO `inv_transferline` VALUES ('5', '3', '22', '50 in Fuji Ty 80 láng 50 m', '3', '32.00', '1.000000000', '32.00000');
INSERT INTO `inv_transferline` VALUES ('6', '4', '4', '5 in Fuji láng 186 m', '3', '30.00', '1.000000000', '30.00000');
INSERT INTO `inv_transferline` VALUES ('7', '4', '7', '6 in Fuji láng 186 m', '3', '40.00', '1.000000000', '40.00000');
INSERT INTO `inv_transferline` VALUES ('8', '4', '14', '10 in Fuji láng 90 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('9', '4', '8', '6 in Fuji lụa 186 m', '3', '4.00', '1.000000000', '4.00000');
INSERT INTO `inv_transferline` VALUES ('10', '4', '5', '5 in Fuji lụa 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('11', '5', '4', '5 in Fuji láng 186 m', '3', '24.00', '1.000000000', '24.00000');
INSERT INTO `inv_transferline` VALUES ('12', '6', '5', '5 in Fuji lụa 186 m', '3', '20.00', '1.000000000', '20.00000');
INSERT INTO `inv_transferline` VALUES ('13', '7', '7', '6 in Fuji láng 186 m', '3', '8.00', '1.000000000', '8.00000');
INSERT INTO `inv_transferline` VALUES ('14', '8', '8', '6 in Fuji lụa 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('15', '9', '9', '8 in Fuji láng 90 m', '3', '4.00', '1.000000000', '4.00000');
INSERT INTO `inv_transferline` VALUES ('16', '10', '9', '8 in Fuji láng 90 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('17', '11', '14', '10 in Fuji láng 90 m', '3', '4.00', '1.000000000', '4.00000');
INSERT INTO `inv_transferline` VALUES ('18', '12', '18', '24 in Fuji Ty 80 láng 50 m', '3', '33.00', '1.000000000', '33.00000');
INSERT INTO `inv_transferline` VALUES ('19', '13', '29', '30 In Ty 80 láng 75 mét', '3', '16.00', '1.000000000', '16.00000');
INSERT INTO `inv_transferline` VALUES ('20', '14', '4', '5 in Fuji láng 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('21', '15', '5', '5 in Fuji lụa 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('22', '16', '8', '6 in Fuji lụa 186 m', '3', '6.00', '1.000000000', '6.00000');
INSERT INTO `inv_transferline` VALUES ('23', '17', '18', '24 in Fuji Ty 80 láng 50 m', '3', '22.00', '1.000000000', '22.00000');
INSERT INTO `inv_transferline` VALUES ('24', '18', '29', '30 In Ty 80 láng 75 mét', '3', '4.00', '1.000000000', '4.00000');
INSERT INTO `inv_transferline` VALUES ('25', '19', '38', 'Mực xanh in phẳng', '173', '1.00', '1.000000000', '1.00000');
INSERT INTO `inv_transferline` VALUES ('26', '20', '40', 'Mực trắng in phẳng', '173', '1.00', '1.000000000', '1.00000');
INSERT INTO `inv_transferline` VALUES ('27', '21', '35', 'Mực vàng Xerox', '173', '1.00', '1.000000000', '1.00000');
INSERT INTO `inv_transferline` VALUES ('28', '22', '52', 'Drum đen', '173', '1.00', '1.000000000', '1.00000');
INSERT INTO `inv_transferline` VALUES ('29', '23', '4', '5 in Fuji láng 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('30', '23', '5', '5 in Fuji lụa 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('31', '23', '18', '24 in Fuji Ty 80 láng 50 m', '3', '4.00', '1.000000000', '4.00000');
INSERT INTO `inv_transferline` VALUES ('32', '24', '42', 'Baclit film 127 x 30', '3', '1.00', '1.000000000', '1.00000');
INSERT INTO `inv_transferline` VALUES ('33', '24', '43', 'Baclit film 152 x 30', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('34', '25', '25', 'Fomat 5 ly', '174', '5.00', '1.000000000', '5.00000');
INSERT INTO `inv_transferline` VALUES ('35', '25', '56', 'Fomat 10 ly', '174', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('36', '26', '4', '5 in Fuji láng 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('37', '26', '5', '5 in Fuji lụa 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('38', '27', '18', '24 in Fuji Ty 80 láng 50 m', '3', '4.00', '1.000000000', '4.00000');
INSERT INTO `inv_transferline` VALUES ('39', '28', '9', '8 in Fuji láng 90 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('40', '29', '18', '24 in Fuji Ty 80 láng 50 m', '3', '4.00', '1.000000000', '4.00000');
INSERT INTO `inv_transferline` VALUES ('41', '30', '18', '24 in Fuji Ty 80 láng 50 m', '3', '4.00', '1.000000000', '4.00000');
INSERT INTO `inv_transferline` VALUES ('42', '31', '29', '30 In Ty 80 láng 75 mét', '3', '1.00', '1.000000000', '1.00000');
INSERT INTO `inv_transferline` VALUES ('43', '32', '29', '30 In Ty 80 láng 75 mét', '3', '1.00', '1.000000000', '1.00000');
INSERT INTO `inv_transferline` VALUES ('44', '33', '4', '5 in Fuji láng 186 m', '3', '2.00', '1.000000000', '2.00000');
INSERT INTO `inv_transferline` VALUES ('45', '33', '5', '5 in Fuji lụa 186 m', '3', '0.00', '1.000000000', '0.00000');
INSERT INTO `inv_transferline` VALUES ('47', '35', '29', '30 In Ty 80 láng 75 mét', '3', '10.00', '1.000000000', '10.00000');
INSERT INTO `inv_transferline` VALUES ('48', '36', '29', '30 In Ty 80 láng 75 mét', '3', '20.00', '1.000000000', '20.00000');
INSERT INTO `inv_transferline` VALUES ('49', '37', '24', 'P1 Pro 40 lít', '4', '4.00', '1.000000000', '4.00000');

-- ----------------------------
-- Table structure for `inv_warehouse`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouse`;
CREATE TABLE `inv_warehouse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `branch_id` tinyint(11) NOT NULL,
  `active` bit(1) DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `default_wh_in` int(11) DEFAULT NULL,
  `default_wh_out` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_id` (`branch_id`),
  CONSTRAINT `inv_warehouse_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_warehouse
-- ----------------------------
INSERT INTO `inv_warehouse` VALUES ('69', 'Kho chính', '1', '', '1', '2012-06-26 00:00:00', '1', '2012-12-01 16:29:32', null, null);
INSERT INTO `inv_warehouse` VALUES ('70', 'Kho cửa hàng', '1', '', '1', '2012-06-27 00:00:00', '1', '1970-01-01 00:00:00', null, null);
INSERT INTO `inv_warehouse` VALUES ('80', 'Kho Chợ Lớn', '1', '', '1', '1970-01-01 00:00:00', '1', '2012-07-30 10:09:54', null, null);
INSERT INTO `inv_warehouse` VALUES ('81', 'Kho tồn lẻ', '1', '', '1', '2012-12-17 10:06:46', '1', null, null, null);

-- ----------------------------
-- Table structure for `inv_warehousein`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehousein`;
CREATE TABLE `inv_warehousein` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `note` text CHARACTER SET utf8,
  `invdate` date DEFAULT NULL,
  `invnum` varchar(50) DEFAULT NULL,
  `supplier_id` int(22) NOT NULL,
  `paymentterm` tinyint(4) DEFAULT NULL,
  `wh_id` int(11) NOT NULL,
  `paid` bit(1) DEFAULT b'0',
  `create_date` datetime DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `branch_id` tinyint(11) NOT NULL,
  `amounttotal` decimal(19,2) DEFAULT '0.00',
  `amounttax` decimal(19,2) DEFAULT '0.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `num` (`num`),
  KEY `supplier_id` (`supplier_id`),
  KEY `wh_id` (`wh_id`),
  CONSTRAINT `inv_warehousein_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `sys_partner` (`id`),
  CONSTRAINT `inv_warehousein_ibfk_2` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_warehousein
-- ----------------------------
INSERT INTO `inv_warehousein` VALUES ('6', 'NVT1112-001', '2012-11-01', '', null, '', '22', '0', '70', '', '2012-11-12 10:46:35', '1', '2012-11-12 16:11:56', '1', '1', '1', '53434000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('7', 'NVT1112-002', '2012-11-01', '', null, '', '22', '0', '69', '', '2012-11-12 11:18:22', '1', '2012-11-12 16:11:56', '1', '1', '1', '169520000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('8', 'NVT1112-003', '2012-11-01', '', null, '', '22', '0', '69', '', '2012-11-14 11:06:18', '1', '2012-11-14 11:06:43', '1', '1', '1', '210770000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('9', 'NVT1112-004', '2012-11-01', '', null, '', '22', '0', '70', '', '2012-11-14 11:27:41', '1', '2012-11-14 11:33:16', '1', '1', '1', '4600000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('10', 'NVT1112-005', '2012-11-01', '', null, '', '22', '0', '70', '', '2012-11-14 11:31:20', '1', '2012-11-14 11:33:16', '1', '1', '1', '7500000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('11', 'NVT1112-006', '2012-11-01', '', null, '', '22', '0', '70', '', '2012-11-14 11:43:35', '1', '2012-11-14 11:46:36', '1', '1', '1', '5471000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('12', 'NVT1112-007', '2012-11-01', '', null, '', '22', '0', '70', '', '2012-11-14 11:45:56', '1', '2012-11-14 11:46:36', '1', '1', '1', '85344000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('13', 'NVT1112-008', '2012-11-01', '', null, '', '22', '0', '69', '', '2012-11-14 16:12:58', '1', '2012-11-14 16:13:09', '1', '1', '1', '322625000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('14', 'NVT1112-009', '2012-11-10', '', null, '', '22', '0', '70', '', '2012-11-14 16:22:22', '1', '2012-11-14 16:23:00', '1', '1', '1', '51330000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('15', 'NVT1112-010', '2012-11-12', '', null, '', '22', '0', '69', '', '2012-11-14 16:26:23', '1', '2012-11-14 17:08:11', '1', '1', '1', '560920000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('16', 'NVT1112-011', '2012-11-01', '', null, '', '24', '0', '70', '', '2012-11-14 17:05:54', '1', '2012-11-14 17:07:49', '1', '1', '1', '6712000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('17', 'NVT1112-012', '2012-11-01', '', null, '', '24', '0', '69', '', '2012-11-14 17:07:17', '1', '2012-11-14 17:07:50', '1', '1', '1', '36025000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('18', 'NVT1112-013', '2012-11-01', '', null, '', '22', '0', '70', '', '2012-11-14 17:39:29', '1', '2012-11-14 17:39:42', '1', '1', '1', '16070000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('19', 'NVT1112-014', '2012-11-01', '', null, '', '22', '0', '70', '', '2012-11-16 10:38:30', '1', '2012-11-16 10:39:50', '1', '1', '1', '10230000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('20', 'NVT1112-015', '2012-11-01', '', null, '', '22', '0', '70', '', '2012-11-16 10:46:11', '1', '2012-11-16 10:49:19', '1', '1', '1', '8035000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('21', 'NVT1112-016', '2012-11-01', '', null, '', '22', '0', '69', '', '2012-11-16 10:48:46', '1', '2012-11-16 10:49:19', '1', '1', '1', '40175000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('22', 'NVT1112-017', '2012-11-01', '', null, '', '25', '0', '70', '', '2012-11-16 11:37:35', '1', '2012-11-16 11:45:44', '1', '1', '1', '6254000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('23', 'NVT1112-018', '2012-11-01', '', null, '', '25', '0', '70', '', '2012-11-16 11:38:10', '1', '2012-11-16 11:45:45', '1', '1', '1', '873000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('24', 'NVT1112-019', '2012-11-01', '', null, '', '26', '0', '70', '', '2012-11-16 11:42:01', '1', '2012-11-16 11:45:45', '1', '1', '1', '750000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('25', 'NVT1112-020', '2012-11-01', '', null, '', '25', '0', '70', '', '2012-11-16 11:44:28', '1', '2012-11-16 11:45:45', '1', '1', '1', '5320000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('26', 'NVT1112-021', '2012-11-01', '', null, '', '24', '0', '70', '', '2012-11-25 09:56:34', '1', '2012-11-25 10:03:35', '1', '-1', '1', '4800000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('27', 'NVT1112-022', '2012-11-01', '', null, '', '24', '0', '70', '', '2012-11-25 10:10:50', '1', '2012-11-25 10:11:09', '1', '1', '1', '2000000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('28', 'NVT1112-023', '2012-11-25', '', null, '', '24', '0', '69', '', '2012-11-25 10:42:00', '1', '2012-11-25 10:43:11', '1', '-1', '1', '4930000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('29', 'NVT1112-024', '2012-11-25', '', null, '', '24', '0', '69', '', '2012-11-25 10:43:40', '1', '2012-11-25 10:43:55', '1', '1', '1', '2465000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('30', 'NVT1112-025', '2012-11-25', '', null, '', '22', '0', '69', '', '2012-11-25 14:54:52', '1', '2012-11-25 14:55:06', '1', '1', '1', '2608000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('31', 'NVT1112-026', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 15:42:54', '1', '2012-11-29 15:43:29', '1', '1', '1', '2608000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('32', 'NVT1112-027', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 15:47:33', '1', '2012-11-29 15:47:46', '1', '1', '1', '12408000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('33', 'NVT1112-028', '2012-11-29', '', null, '', '24', '0', '70', '', '2012-11-29 17:59:19', '1', '2012-11-29 17:59:28', '1', '1', '1', '1000000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('34', 'NVT1112-029', '2012-11-29', '', null, '', '24', '0', '70', '', '2012-11-29 18:06:50', '1', '2012-11-29 18:07:43', '1', '1', '1', '15800000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('35', 'NVT1112-030', '2012-11-29', '', null, '', '24', '0', '70', '', '2012-11-29 18:07:13', '1', '2012-11-29 18:08:00', '1', '1', '1', '9860000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('36', 'NVT1112-031', '2012-11-29', '', null, '', '24', '0', '70', '', '2012-11-29 18:10:35', '1', '2012-11-29 18:10:50', '1', '1', '1', '4930000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('37', 'NVT1112-032', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 18:17:36', '1', '2012-11-29 18:17:44', '1', '1', '1', '8035000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('38', 'NVT1112-033', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 18:18:33', '1', '2012-11-29 18:18:41', '1', '1', '1', '8035000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('39', 'NVT1112-034', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 18:20:42', '1', '2012-11-29 18:20:50', '1', '1', '1', '16070000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('40', 'NVT1112-035', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 18:22:46', '1', '2012-11-29 18:22:57', '1', '1', '1', '16530000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('41', 'NVT1112-036', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 18:30:29', '1', '2012-11-29 18:30:36', '1', '1', '1', '8035000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('42', 'NVT1112-037', '2012-11-29', '', null, '', '22', '0', '70', '', '2012-11-29 18:32:05', '1', '2012-11-29 18:32:14', '1', '1', '1', '8035000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('43', 'NVT1112-038', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 18:35:10', '1', '2012-11-29 18:35:18', '1', '1', '1', '5060000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('44', 'NVT1112-039', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 18:39:40', '1', '2012-11-29 18:39:48', '1', '1', '1', '5060000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('45', 'NVT1112-040', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 18:44:24', '1', '2012-11-29 18:44:32', '1', '1', '1', '2640000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('46', 'NVT1112-041', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-11-29 18:57:34', '1', '2012-11-29 18:57:48', '1', '1', '1', '22452000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('47', 'NVT1112-042', '2012-11-01', '', null, '', '25', '0', '69', '', '2012-11-30 11:07:13', '1', '2012-11-30 11:07:25', '1', '1', '1', '64881000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('48', 'NVT1112-043', '2012-11-30', '', null, '', '27', '0', '69', '', '2012-11-30 11:58:09', '1', '2012-11-30 11:58:19', '1', '1', '1', '2020000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('49', 'NVT1112-044', '2012-11-20', '', null, '', '22', '0', '69', '', '2012-12-25 17:01:50', '1', '2012-12-25 17:06:39', '1', '1', '1', '7112000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('50', 'NVT1112-045', '2012-11-29', '', null, '', '22', '0', '69', '', '2012-12-25 17:12:10', '1', '2012-12-25 17:12:26', '1', '1', '1', '2192000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('51', 'NVT1112-046', '2012-11-30', '', null, '', '22', '0', '70', '', '2012-12-25 17:17:43', '1', '2012-12-25 17:18:03', '1', '1', '1', '6000000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('52', 'NVT1212-001', '2012-12-20', '', null, '', '22', '0', '70', '', '2012-12-25 19:00:13', '1', '2012-12-25 19:00:46', '1', '1', '1', '121481000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('53', 'NVT1212-002', '2012-12-20', '', null, '', '22', '0', '70', '', '2012-12-25 19:03:45', '1', '2012-12-25 19:04:19', '1', '1', '1', '213360000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('54', 'NVT1212-003', '2012-12-20', '', null, '', '22', '0', '70', '', '2012-12-25 19:08:51', '1', '2012-12-25 19:09:11', '1', '1', '1', '57330000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('55', 'NVT1212-004', '2012-12-18', '', null, '', '24', '0', '70', '', '2012-12-25 19:14:12', '1', '2012-12-25 19:14:37', '1', '1', '1', '59416000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('56', 'NVT1212-005', '2012-12-11', '', null, '', '22', '0', '70', '', '2012-12-29 17:45:14', '1', '2012-12-29 17:45:37', '1', '1', '1', '42500000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('57', 'NVT1212-006', '2012-12-18', '', null, '', '22', '0', '70', '', '2012-12-29 17:50:47', '1', '2012-12-29 17:51:10', '1', '1', '1', '32500000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('58', 'NVT1212-007', '2012-12-11', '', null, '', '22', '0', '70', '', '2012-12-29 17:58:26', '1', '2012-12-29 17:59:40', '1', '1', '1', '16440000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('59', 'NVT1212-008', '2012-12-11', '', null, '', '22', '0', '70', '', '2012-12-29 18:03:10', '1', '2012-12-29 18:03:21', '1', '1', '1', '7042000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('60', 'NVT1212-009', '2012-12-11', '', null, '', '22', '0', '70', '', '2012-12-29 18:05:12', '1', '2012-12-29 18:05:22', '1', '1', '1', '6285000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('61', 'NVT1212-010', '2012-12-10', '', null, '', '22', '0', '70', '', '2012-12-29 18:11:43', '1', '2012-12-29 18:14:44', '1', '-1', '1', '13500000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('62', 'NVT1212-011', '2012-12-11', '', null, '', '22', '0', '70', '', '2012-12-29 18:17:08', '1', '2012-12-29 18:17:40', '1', '1', '1', '6000000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('63', 'NVT1212-012', '2012-12-11', '', null, '', '22', '0', '70', '', '2012-12-29 18:21:33', '1', '2012-12-29 18:21:42', '1', '1', '1', '42825000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('64', 'NVT1212-013', '2012-12-31', '', null, '', '22', '0', '70', '', '2013-01-07 17:00:58', '1', '2013-01-07 17:01:10', '1', '1', '1', '66212720.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('65', 'NVT1212-014', '2012-12-31', '', null, '', '22', '0', '70', '', '2013-01-07 17:38:07', '1', '2013-01-07 17:38:28', '1', '1', '1', '106680000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('66', 'NVT0113-001', '2013-01-31', '', null, '', '22', '0', '70', '', '2013-01-07 17:40:14', '1', '2013-01-07 17:40:33', '1', '1', '1', '3556000.00', '0.00');

-- ----------------------------
-- Table structure for `inv_warehouseinline`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouseinline`;
CREATE TABLE `inv_warehouseinline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `warehousein_id` int(50) DEFAULT NULL,
  `product_id` int(20) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `price` decimal(19,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(19,0) DEFAULT NULL,
  `length` float DEFAULT NULL,
  `width` float DEFAULT NULL,
  `thickness` float DEFAULT NULL,
  `note` text CHARACTER SET utf8,
  `subtotal` decimal(19,2) DEFAULT NULL,
  `subvat` decimal(19,2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `uom_id` int(11) NOT NULL,
  `radio` decimal(19,9) unsigned DEFAULT '1.000000000',
  `qtystd` decimal(19,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stock_warehouseinline_ibfk_4` (`warehousein_id`),
  KEY `product_id` (`product_id`),
  KEY `uom_id` (`uom_id`),
  CONSTRAINT `inv_warehouseinline_ibfk_4` FOREIGN KEY (`warehousein_id`) REFERENCES `inv_warehousein` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_warehouseinline_ibfk_5` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_warehouseinline_ibfk_6` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_warehouseinline
-- ----------------------------
INSERT INTO `inv_warehouseinline` VALUES ('10', '6', '4', '1.00', '5 in Fuji láng 186 m', '1304000.00', null, null, null, null, null, '1304000.00', null, null, '2012-11-12 10:46:35', '1', '2012-11-12 10:46:35', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('11', '6', '5', '4.00', '5 in Fuji lụa 186 m', '1304000.00', null, null, null, null, null, '5216000.00', null, null, '2012-11-12 10:46:35', '1', '2012-11-12 10:46:35', '1', '3', '1.000000000', '4.00000');
INSERT INTO `inv_warehouseinline` VALUES ('12', '6', '7', '1.00', '6 in Fuji láng 186 m', '1551000.00', null, null, null, null, null, '1551000.00', null, null, '2012-11-12 10:46:35', '1', '2012-11-12 10:46:35', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('13', '6', '8', '3.00', '6 in Fuji lụa 186 m', '1551000.00', null, null, null, null, null, '4653000.00', null, null, '2012-11-12 10:46:35', '1', '2012-11-12 10:46:35', '1', '3', '1.000000000', '3.00000');
INSERT INTO `inv_warehouseinline` VALUES ('14', '6', '18', '23.00', '24 in Fuji Ty 80 láng 50 m', '1770000.00', null, null, null, null, null, '40710000.00', null, null, '2012-11-12 10:46:35', '1', '2012-11-12 10:46:35', '1', '3', '1.000000000', '23.00000');
INSERT INTO `inv_warehouseinline` VALUES ('15', '7', '4', '102.00', '5 in Fuji láng 186 m', '1304000.00', null, null, null, null, null, '133008000.00', null, null, '2012-11-12 11:18:22', '1', '2012-11-12 11:18:22', '1', '3', '1.000000000', '102.00000');
INSERT INTO `inv_warehouseinline` VALUES ('16', '7', '5', '28.00', '5 in Fuji lụa 186 m', '1304000.00', null, null, null, null, null, '36512000.00', null, null, '2012-11-12 11:18:22', '1', '2012-11-12 11:18:22', '1', '3', '1.000000000', '28.00000');
INSERT INTO `inv_warehouseinline` VALUES ('17', '8', '7', '66.00', '6 in Fuji láng 186 m', '1551000.00', null, null, null, null, null, '102366000.00', null, null, '2012-11-14 11:06:18', '1', '2012-11-14 11:06:18', '1', '3', '1.000000000', '66.00000');
INSERT INTO `inv_warehouseinline` VALUES ('18', '8', '8', '60.00', '6 in Fuji lụa 186 m', '1551000.00', null, null, null, null, null, '93060000.00', null, null, '2012-11-14 11:06:18', '1', '2012-11-14 11:06:18', '1', '3', '1.000000000', '60.00000');
INSERT INTO `inv_warehouseinline` VALUES ('19', '8', '9', '14.00', '8 in Fuji láng 90 m', '1096000.00', null, null, null, null, null, '15344000.00', null, null, '2012-11-14 11:06:18', '1', '2012-11-14 11:06:18', '1', '3', '1.000000000', '14.00000');
INSERT INTO `inv_warehouseinline` VALUES ('20', '9', '13', '4.00', ' 8 in Patinum lụa 90 m  ', '650000.00', null, null, null, null, null, '2600000.00', null, null, '2012-11-14 11:27:41', '1', '2012-11-14 11:27:41', '1', '3', '1.000000000', '4.00000');
INSERT INTO `inv_warehouseinline` VALUES ('21', '9', '15', '2.00', '10 in Patinum lụa 90 m', '1000000.00', null, null, null, null, null, '2000000.00', null, null, '2012-11-14 11:27:41', '1', '2012-11-14 11:27:41', '1', '3', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('22', '10', '16', '5.00', '12 in giấy ngọc trai', '1500000.00', null, null, null, null, null, '7500000.00', null, null, '2012-11-14 11:31:20', '1', '2012-11-14 11:31:20', '1', '3', '1.000000000', '5.00000');
INSERT INTO `inv_warehouseinline` VALUES ('23', '11', '21', '1.00', '30 in Fuji Ty 80 lụa  50 m', '2286000.00', null, null, null, null, null, '2286000.00', null, null, '2012-11-14 11:43:35', '1', '2012-11-14 11:43:35', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('24', '11', '29', '1.00', '30 In Ty 80 láng 75 mét', '3185000.00', null, null, null, null, null, '3185000.00', null, null, '2012-11-14 11:43:35', '1', '2012-11-14 11:43:35', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('25', '12', '22', '23.00', '50 in Fuji Ty 80 láng 50 m', '3556000.00', null, null, null, null, null, '81788000.00', null, null, '2012-11-14 11:45:56', '1', '2012-11-14 11:45:56', '1', '3', '1.000000000', '23.00000');
INSERT INTO `inv_warehouseinline` VALUES ('26', '12', '23', '1.00', '50 in Fuji Ty 80 lụa  50 m', '3556000.00', null, null, null, null, null, '3556000.00', null, null, '2012-11-14 11:45:56', '1', '2012-11-14 11:45:56', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('27', '13', '14', '30.00', '10 in Fuji láng 90 m', '1257000.00', null, null, null, null, null, '37710000.00', null, null, '2012-11-14 16:12:58', '1', '2012-11-14 16:12:58', '1', '3', '1.000000000', '30.00000');
INSERT INTO `inv_warehouseinline` VALUES ('28', '13', '18', '62.00', '24 in Fuji Ty 80 láng 50 m', '1770000.00', null, null, null, null, null, '109740000.00', null, null, '2012-11-14 16:12:58', '1', '2012-11-14 16:12:58', '1', '3', '1.000000000', '62.00000');
INSERT INTO `inv_warehouseinline` VALUES ('29', '13', '29', '55.00', '30 In Ty 80 láng 75 mét', '3185000.00', null, null, null, null, null, '175175000.00', null, null, '2012-11-14 16:12:58', '1', '2012-11-14 16:12:58', '1', '3', '1.000000000', '55.00000');
INSERT INTO `inv_warehouseinline` VALUES ('30', '14', '18', '30.00', '24 in Fuji Ty 80 láng 50 m', '1711000.00', null, null, null, null, null, '51330000.00', null, null, '2012-11-14 16:22:22', '1', '2012-11-14 16:22:22', '1', '3', '1.000000000', '30.00000');
INSERT INTO `inv_warehouseinline` VALUES ('31', '15', '18', '120.00', '24 in Fuji Ty 80 láng 50 m', '1711000.00', null, null, null, null, null, '205320000.00', null, null, '2012-11-14 16:26:23', '1', '2012-11-14 16:26:23', '1', '3', '1.000000000', '120.00000');
INSERT INTO `inv_warehouseinline` VALUES ('32', '15', '22', '100.00', '50 in Fuji Ty 80 láng 50 m', '3556000.00', null, null, null, null, null, '355600000.00', null, null, '2012-11-14 16:26:23', '1', '2012-11-14 16:26:23', '1', '3', '1.000000000', '100.00000');
INSERT INTO `inv_warehouseinline` VALUES ('33', '16', '24', '6.00', 'P1 Pro 40 lít', '790000.00', null, null, null, null, null, '4740000.00', null, null, '2012-11-14 17:05:54', '1', '2012-11-14 17:05:54', '1', '4', '1.000000000', '6.00000');
INSERT INTO `inv_warehouseinline` VALUES ('34', '16', '31', '4.00', 'P2 Pro 40 lít', '493000.00', null, null, null, null, null, '1972000.00', null, null, '2012-11-14 17:05:54', '1', '2012-11-14 17:05:54', '1', '4', '1.000000000', '4.00000');
INSERT INTO `inv_warehouseinline` VALUES ('35', '17', '24', '30.00', 'P1 Pro 40 lít', '790000.00', null, null, null, null, null, '23700000.00', null, null, '2012-11-14 17:07:17', '1', '2012-11-14 17:07:17', '1', '4', '1.000000000', '30.00000');
INSERT INTO `inv_warehouseinline` VALUES ('36', '17', '31', '25.00', 'P2 Pro 40 lít', '493000.00', null, null, null, null, null, '12325000.00', null, null, '2012-11-14 17:07:17', '1', '2012-11-14 17:07:17', '1', '4', '1.000000000', '25.00000');
INSERT INTO `inv_warehouseinline` VALUES ('37', '18', '32', '2.00', 'Mực đỏ Xerox', '8035000.00', null, null, null, null, null, '16070000.00', null, null, '2012-11-14 17:39:29', '1', '2012-11-14 17:39:29', '1', '173', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('38', '19', '33', '2.00', 'Mực xanh Xerox', '2530000.00', null, null, null, null, null, '5060000.00', null, null, '2012-11-16 10:38:30', '1', '2012-11-16 10:38:30', '1', '173', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('39', '19', '35', '1.00', 'Mực vàng Xerox', '2530000.00', null, null, null, null, null, '2530000.00', null, null, '2012-11-16 10:38:30', '1', '2012-11-16 10:38:30', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('40', '19', '34', '2.00', 'Mực đen Xerox', '1320000.00', null, null, null, null, null, '2640000.00', null, null, '2012-11-16 10:38:30', '1', '2012-11-16 10:38:30', '1', '173', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('41', '20', '39', '1.00', 'Mực đen in phẳng', '8035000.00', null, null, null, null, null, '8035000.00', null, null, '2012-11-16 10:46:11', '1', '2012-11-16 10:46:11', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('42', '21', '38', '2.00', 'Mực xanh in phẳng', '8035000.00', null, null, null, null, null, '16070000.00', null, null, '2012-11-16 10:48:46', '1', '2012-11-16 10:48:46', '1', '173', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('43', '21', '36', '2.00', 'Mực đỏ in phẳng', '8035000.00', null, null, null, null, null, '16070000.00', null, null, '2012-11-16 10:48:46', '1', '2012-11-16 10:48:46', '1', '173', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('44', '21', '37', '1.00', 'Mực vàng in phẳng', '8035000.00', null, null, null, null, null, '8035000.00', null, null, '2012-11-16 10:48:46', '1', '2012-11-16 10:48:46', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('45', '22', '42', '1.00', 'Baclit film 127 x 30', '3394000.00', null, null, null, null, null, '3394000.00', null, null, '2012-11-16 11:37:35', '1', '2012-11-16 11:37:35', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('46', '22', '41', '1.00', 'Baclit film 107 x 30', '2860000.00', null, null, null, null, null, '2860000.00', null, null, '2012-11-16 11:37:35', '1', '2012-11-16 11:37:35', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('47', '23', '44', '1.00', 'Nhựa PP 107 x 30 có keo', '873000.00', null, null, null, null, null, '873000.00', null, null, '2012-11-16 11:38:10', '1', '2012-11-16 11:38:10', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('48', '24', '50', '1.00', 'Film trong IZ75 161 x 20', '750000.00', null, null, null, null, null, '750000.00', null, null, '2012-11-16 11:42:01', '1', '2012-11-16 11:42:01', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('49', '25', '49', '2.00', 'Canvas 152 x 18', '1314000.00', null, null, null, null, null, '2628000.00', null, null, '2012-11-16 11:44:28', '1', '2012-11-16 11:44:28', '1', '3', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('50', '25', '51', '4.00', 'Canvas 91 x 18', '673000.00', null, null, null, null, null, '2692000.00', null, null, '2012-11-16 11:44:28', '1', '2012-11-16 11:44:28', '1', '3', '1.000000000', '4.00000');
INSERT INTO `inv_warehouseinline` VALUES ('51', '26', '15', '4.00', '10 in Patinum lụa 90 m', '1200000.00', null, null, null, null, null, '4800000.00', null, null, '2012-11-25 09:56:34', '1', '2012-11-25 09:56:34', '1', '3', '1.000000000', '4.00000');
INSERT INTO `inv_warehouseinline` VALUES ('52', '27', '15', '2.00', '10 in Patinum lụa 90 m', '1000000.00', null, null, null, null, null, '2000000.00', null, null, '2012-11-25 10:10:50', '1', '2012-11-25 10:10:50', '1', '3', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('53', '28', '31', '10.00', 'P2 Pro 40 lít', '493000.00', null, null, null, null, null, '4930000.00', null, null, '2012-11-25 10:42:00', '1', '2012-11-25 10:42:00', '1', '4', '1.000000000', '10.00000');
INSERT INTO `inv_warehouseinline` VALUES ('54', '29', '31', '5.00', 'P2 Pro 40 lít', '493000.00', null, null, null, null, null, '2465000.00', null, null, '2012-11-25 10:43:40', '1', '2012-11-25 10:43:40', '1', '4', '1.000000000', '5.00000');
INSERT INTO `inv_warehouseinline` VALUES ('55', '30', '4', '2.00', '5 in Fuji láng 186 m', '1304000.00', null, null, null, null, null, '2608000.00', null, null, '2012-11-25 14:54:52', '1', '2012-11-25 14:54:52', '1', '3', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('56', '31', '4', '2.00', '5 in Fuji láng 186 m', '1304000.00', null, null, null, null, null, '2608000.00', null, null, '2012-11-29 15:42:54', '1', '2012-11-29 15:42:54', '1', '3', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('57', '32', '7', '8.00', '6 in Fuji láng 186 m', '1551000.00', null, null, null, null, null, '12408000.00', null, null, '2012-11-29 15:47:33', '1', '2012-11-29 15:47:33', '1', '3', '1.000000000', '8.00000');
INSERT INTO `inv_warehouseinline` VALUES ('58', '33', '15', '1.00', '10 in Patinum lụa 90 m', '1000000.00', null, null, null, null, null, '1000000.00', null, null, '2012-11-29 17:59:19', '1', '2012-11-29 17:59:19', '1', '3', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('59', '34', '24', '20.00', 'P1 Pro 40 lít', '790000.00', null, null, null, null, null, '15800000.00', null, null, '2012-11-29 18:06:50', '1', '2012-11-29 18:06:50', '1', '4', '1.000000000', '20.00000');
INSERT INTO `inv_warehouseinline` VALUES ('60', '35', '31', '20.00', 'P2 Pro 40 lít', '493000.00', null, null, null, null, null, '9860000.00', null, null, '2012-11-29 18:07:13', '1', '2012-11-29 18:07:49', '1', '4', '1.000000000', '20.00000');
INSERT INTO `inv_warehouseinline` VALUES ('61', '36', '31', '10.00', 'P2 Pro 40 lít', '493000.00', null, null, null, null, null, '4930000.00', null, null, '2012-11-29 18:10:35', '1', '2012-11-29 18:10:35', '1', '4', '1.000000000', '10.00000');
INSERT INTO `inv_warehouseinline` VALUES ('62', '37', '36', '1.00', 'Mực đỏ in phẳng', '8035000.00', null, null, null, null, null, '8035000.00', null, null, '2012-11-29 18:17:36', '1', '2012-11-29 18:17:36', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('63', '38', '37', '1.00', 'Mực vàng in phẳng', '8035000.00', null, null, null, null, null, '8035000.00', null, null, '2012-11-29 18:18:33', '1', '2012-11-29 18:18:33', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('64', '39', '39', '2.00', 'Mực đen in phẳng', '8035000.00', null, null, null, null, null, '16070000.00', null, null, '2012-11-29 18:20:42', '1', '2012-11-29 18:20:42', '1', '173', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('65', '40', '40', '3.00', 'Mực trắng in phẳng', '5510000.00', null, null, null, null, null, '16530000.00', null, null, '2012-11-29 18:22:46', '1', '2012-11-29 18:22:46', '1', '173', '1.000000000', '3.00000');
INSERT INTO `inv_warehouseinline` VALUES ('66', '41', '32', '1.00', 'Mực đỏ Xerox', '8035000.00', null, null, null, null, null, '8035000.00', null, null, '2012-11-29 18:30:29', '1', '2012-11-29 18:30:29', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('67', '42', '32', '1.00', 'Mực đỏ Xerox', '8035000.00', null, null, null, null, null, '8035000.00', null, null, '2012-11-29 18:32:05', '1', '2012-11-29 18:32:05', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('68', '43', '33', '2.00', 'Mực xanh Xerox', '2530000.00', null, null, null, null, null, '5060000.00', null, null, '2012-11-29 18:35:10', '1', '2012-11-29 18:35:10', '1', '173', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('69', '44', '35', '2.00', 'Mực vàng Xerox', '2530000.00', null, null, null, null, null, '5060000.00', null, null, '2012-11-29 18:39:40', '1', '2012-11-29 18:39:40', '1', '173', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('70', '45', '34', '2.00', 'Mực đen Xerox', '1320000.00', null, null, null, null, null, '2640000.00', null, null, '2012-11-29 18:44:24', '1', '2012-11-29 18:44:24', '1', '173', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('71', '46', '53', '1.00', 'Drum vàng', '5174000.00', null, null, null, null, null, '5174000.00', null, null, '2012-11-29 18:57:34', '1', '2012-11-29 18:57:34', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('72', '46', '55', '1.00', 'Drum xanh', '5174000.00', null, null, null, null, null, '5174000.00', null, null, '2012-11-29 18:57:34', '1', '2012-11-29 18:57:34', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('73', '46', '54', '1.00', 'Drum đỏ', '5174000.00', null, null, null, null, null, '5174000.00', null, null, '2012-11-29 18:57:34', '1', '2012-11-29 18:57:34', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('74', '46', '52', '1.00', 'Drum đen', '6930000.00', null, null, null, null, null, '6930000.00', null, null, '2012-11-29 18:57:34', '1', '2012-11-29 18:57:34', '1', '173', '1.000000000', '1.00000');
INSERT INTO `inv_warehouseinline` VALUES ('75', '47', '41', '8.00', 'Baclit film 107 x 30', '2889000.00', null, null, null, null, null, '23112000.00', null, null, '2012-11-30 11:07:13', '1', '2012-11-30 11:07:13', '1', '3', '1.000000000', '8.00000');
INSERT INTO `inv_warehouseinline` VALUES ('76', '47', '42', '5.00', 'Baclit film 127 x 30', '3429000.00', null, null, null, null, null, '17145000.00', null, null, '2012-11-30 11:07:13', '1', '2012-11-30 11:07:13', '1', '3', '1.000000000', '5.00000');
INSERT INTO `inv_warehouseinline` VALUES ('77', '47', '43', '6.00', 'Baclit film 152 x 30', '4104000.00', null, null, null, null, null, '24624000.00', null, null, '2012-11-30 11:07:13', '1', '2012-11-30 11:07:13', '1', '3', '1.000000000', '6.00000');
INSERT INTO `inv_warehouseinline` VALUES ('78', '48', '25', '5.00', 'Fomat 5 ly', '220000.00', null, null, null, null, null, '1100000.00', null, null, '2012-11-30 11:58:09', '1', '2012-11-30 11:58:09', '1', '174', '1.000000000', '5.00000');
INSERT INTO `inv_warehouseinline` VALUES ('79', '48', '56', '2.00', 'Fomat 10 ly', '460000.00', null, null, null, null, null, '920000.00', null, null, '2012-11-30 11:58:09', '1', '2012-11-30 11:58:09', '1', '174', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('80', '49', '22', '2.00', '50 in Fuji Ty 80 láng 50 m', '3556000.00', null, null, null, null, null, '7112000.00', null, null, '2012-12-25 17:01:50', '1', '2012-12-25 17:01:50', '1', '3', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('81', '50', '9', '2.00', '8 in Fuji láng 90 m', '1096000.00', null, null, null, null, null, '2192000.00', null, null, '2012-12-25 17:12:10', '1', '2012-12-25 17:12:10', '1', '3', '1.000000000', '2.00000');
INSERT INTO `inv_warehouseinline` VALUES ('82', '51', '16', '4.00', '12 in giấy ngọc trai', '1500000.00', null, null, null, null, null, '6000000.00', null, null, '2012-12-25 17:17:43', '1', '2012-12-25 17:17:43', '1', '3', '1.000000000', '4.00000');
INSERT INTO `inv_warehouseinline` VALUES ('83', '52', '18', '71.00', '24 in Fuji Ty 80 láng 50 m', '1711000.00', null, null, null, null, null, '121481000.00', null, null, '2012-12-25 19:00:13', '1', '2012-12-25 19:00:13', '1', '3', '1.000000000', '71.00000');
INSERT INTO `inv_warehouseinline` VALUES ('84', '53', '22', '60.00', '50 in Fuji Ty 80 láng 50 m', '3556000.00', null, null, null, null, null, '213360000.00', null, null, '2012-12-25 19:03:45', '1', '2012-12-25 19:03:45', '1', '3', '1.000000000', '60.00000');
INSERT INTO `inv_warehouseinline` VALUES ('85', '54', '29', '18.00', '30 In Ty 80 láng 75 mét', '3185000.00', null, null, null, null, null, '57330000.00', null, null, '2012-12-25 19:08:51', '1', '2012-12-25 19:08:51', '1', '3', '1.000000000', '18.00000');
INSERT INTO `inv_warehouseinline` VALUES ('86', '55', '31', '42.00', 'P2 Pro 40 lít', '493000.00', null, null, null, null, null, '20706000.00', null, null, '2012-12-25 19:14:12', '1', '2012-12-25 19:14:12', '1', '4', '1.000000000', '42.00000');
INSERT INTO `inv_warehouseinline` VALUES ('87', '55', '24', '49.00', 'P1 Pro 40 lít', '790000.00', null, null, null, null, null, '38710000.00', null, null, '2012-12-25 19:14:12', '1', '2012-12-25 19:14:12', '1', '4', '1.000000000', '49.00000');
INSERT INTO `inv_warehouseinline` VALUES ('88', '56', '4', '34.00', '5 in Fuji láng 186 m', '1250000.00', null, null, null, null, null, '42500000.00', null, null, '2012-12-29 17:45:14', '1', '2012-12-29 17:45:14', '1', '3', '1.000000000', '34.00000');
INSERT INTO `inv_warehouseinline` VALUES ('89', '57', '5', '26.00', '5 in Fuji lụa 186 m', '1250000.00', null, null, null, null, null, '32500000.00', null, null, '2012-12-29 17:50:47', '1', '2012-12-29 17:50:47', '1', '3', '1.000000000', '26.00000');
INSERT INTO `inv_warehouseinline` VALUES ('90', '58', '7', '8.00', '6 in Fuji láng 186 m', '1370000.00', null, null, null, null, null, '10960000.00', null, null, '2012-12-29 17:58:26', '1', '2012-12-29 17:59:22', '1', '3', '1.000000000', '8.00000');
INSERT INTO `inv_warehouseinline` VALUES ('91', '58', '8', '4.00', '6 in Fuji lụa 186 m', '1370000.00', null, null, null, null, null, '5480000.00', null, null, '2012-12-29 17:58:26', '1', '2012-12-29 17:59:22', '1', '3', '1.000000000', '4.00000');
INSERT INTO `inv_warehouseinline` VALUES ('92', '59', '9', '7.00', '8 in Fuji láng 90 m', '1006000.00', null, null, null, null, null, '7042000.00', null, null, '2012-12-29 18:03:10', '1', '2012-12-29 18:03:10', '1', '3', '1.000000000', '7.00000');
INSERT INTO `inv_warehouseinline` VALUES ('93', '60', '14', '5.00', '10 in Fuji láng 90 m', '1257000.00', null, null, null, null, null, '6285000.00', null, null, '2012-12-29 18:05:12', '1', '2012-12-29 18:05:12', '1', '3', '1.000000000', '5.00000');
INSERT INTO `inv_warehouseinline` VALUES ('94', '61', '16', '9.00', '12 in giấy ngọc trai', '1500000.00', null, null, null, null, null, '13500000.00', null, null, '2012-12-29 18:11:43', '1', '2012-12-29 18:11:43', '1', '3', '1.000000000', '9.00000');
INSERT INTO `inv_warehouseinline` VALUES ('95', '62', '16', '4.00', '12 in giấy ngọc trai', '1500000.00', null, null, null, null, null, '6000000.00', null, null, '2012-12-29 18:17:08', '1', '2012-12-29 18:17:08', '1', '3', '1.000000000', '4.00000');
INSERT INTO `inv_warehouseinline` VALUES ('96', '63', '18', '25.00', '24 in Fuji Ty 80 láng 50 m', '1713000.00', null, null, null, null, null, '42825000.00', null, null, '2012-12-29 18:21:33', '1', '2012-12-29 18:21:33', '1', '3', '1.000000000', '25.00000');
INSERT INTO `inv_warehouseinline` VALUES ('97', '64', '18', '38.00', '24 in Fuji Ty 80 láng 50 m', '1742440.00', null, null, null, null, null, '66212720.00', null, null, '2013-01-07 17:00:58', '1', '2013-01-07 17:00:58', '1', '3', '1.000000000', '38.00000');
INSERT INTO `inv_warehouseinline` VALUES ('98', '65', '22', '30.00', '50 in Fuji Ty 80 láng 50 m', '3556000.00', null, null, null, null, null, '106680000.00', null, null, '2013-01-07 17:38:07', '1', '2013-01-07 17:38:07', '1', '3', '1.000000000', '30.00000');
INSERT INTO `inv_warehouseinline` VALUES ('99', '66', '23', '1.00', '50 in Fuji Ty 80 lụa  50 m', '3556000.00', null, null, null, null, null, '3556000.00', null, null, '2013-01-07 17:40:14', '1', '2013-01-07 17:40:14', '1', '3', '1.000000000', '1.00000');

-- ----------------------------
-- Table structure for `inv_warehouseout`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouseout`;
CREATE TABLE `inv_warehouseout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `note` text,
  `type_id` tinyint(1) DEFAULT '1' COMMENT '1: Xuất sản xuất\r\n, 2: Xuất khác',
  `create_date` datetime DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `branch_id` tinyint(11) NOT NULL,
  `amounttotal` decimal(19,2) DEFAULT '0.00',
  `wh_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `num` (`num`) USING BTREE,
  KEY `wh_id` (`wh_id`),
  KEY `type_id` (`type_id`),
  CONSTRAINT `inv_warehouseout_ibfk_1` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`),
  CONSTRAINT `inv_warehouseout_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `inv_warehouseouttype` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_warehouseout
-- ----------------------------
INSERT INTO `inv_warehouseout` VALUES ('2', 'XVT1112-001', '2012-11-01', '', '1', '2012-11-14 16:37:06', '1', '2012-11-14 16:53:49', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('3', 'XVT1112-002', '2012-11-01', '', '1', '2012-11-14 16:41:51', '1', '2012-11-14 16:53:49', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('4', 'XVT1112-003', '2012-11-05', '', '1', '2012-11-14 17:40:52', '1', '2012-11-14 17:41:16', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('5', 'XVT1112-004', '2012-11-08', '', '1', '2012-11-25 10:14:43', '1', '2012-11-25 10:15:02', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('6', 'XVT1112-005', '2012-11-25', '', '1', '2012-11-25 10:30:57', '1', '2012-11-25 10:31:12', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('7', 'XVT1112-006', '2012-11-22', '', '1', '2012-11-25 10:34:38', '1', '2012-11-25 10:34:50', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('8', 'XVT1112-007', '2012-11-25', '', '1', '2012-11-25 14:49:31', '1', '2012-11-25 14:49:41', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('9', 'XVT1112-008', '2012-11-28', '', '1', '2012-11-25 14:59:38', '1', '2012-11-25 15:00:13', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('10', 'XVT1112-009', '2012-11-25', '', '1', '2012-11-25 15:09:14', '1', '2012-11-29 15:36:47', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('11', 'XVT1112-010', '2012-11-25', '', '1', '2012-11-25 15:23:37', '1', '2012-11-25 15:23:50', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('12', 'XVT1112-011', '2012-11-29', '', '1', '2012-11-29 17:48:36', '1', '2012-11-29 17:49:01', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('13', 'XVT1112-012', '2012-11-29', '', '1', '2012-11-29 17:50:01', '1', '2012-11-29 17:50:19', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('14', 'XVT1112-013', '2012-11-29', '', '1', '2012-11-29 17:51:14', '1', '2012-11-29 17:51:44', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('15', 'XVT1112-014', '2012-11-29', '', '1', '2012-11-29 17:53:43', '1', '2012-11-29 17:53:59', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('16', 'XVT1112-015', '2012-11-29', '', '1', '2012-11-29 17:55:10', '1', '2012-11-29 17:55:19', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('17', 'XVT1112-016', '2012-11-29', '', '1', '2012-11-29 17:56:17', '1', '2012-11-29 17:56:26', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('18', 'XVT1112-017', '2012-11-29', '', '1', '2012-11-29 17:57:14', '1', '2012-11-29 17:57:22', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('19', 'XVT1112-018', '2012-11-29', '', '1', '2012-11-29 18:00:17', '1', '2012-11-29 18:00:32', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('20', 'XVT1112-019', '2012-11-29', '', '1', '2012-11-29 18:02:20', '1', '2012-11-29 18:02:29', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('21', 'XVT1112-020', '2012-11-29', '', '1', '2012-11-29 18:03:20', '1', '2012-11-29 18:03:26', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('22', 'XVT1112-021', '2012-11-29', '', '1', '2012-11-29 18:05:05', '1', '2012-11-29 18:05:13', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('23', 'XVT1112-022', '2012-11-29', '', '1', '2012-11-29 18:08:46', '1', '2012-11-29 18:09:10', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('24', 'XVT1112-023', '2012-11-29', '', '1', '2012-11-29 18:11:36', '1', '2012-11-29 18:11:44', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('25', 'XVT1112-024', '2012-11-29', '', '1', '2012-11-29 18:15:32', '1', '2012-11-29 18:15:41', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('26', 'XVT1112-025', '2012-11-29', '', '1', '2012-11-29 18:19:41', '1', '2012-11-29 18:19:50', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('27', 'XVT1112-026', '2012-11-29', '', '1', '2012-11-29 18:25:56', '1', '2012-11-29 18:26:07', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('28', 'XVT1112-027', '2012-11-29', '', '1', '2012-11-29 18:28:50', '1', '2012-11-29 18:28:58', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('29', 'XVT1112-028', '2012-11-29', '', '1', '2012-11-29 18:32:55', '1', '2012-11-29 18:33:05', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('30', 'XVT1112-029', '2012-11-29', '', '1', '2012-11-29 18:41:38', '1', '2012-11-29 18:41:49', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('31', 'XVT1112-030', '2012-11-29', '', '1', '2012-11-30 11:00:20', '1', '2012-11-30 11:00:33', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('32', 'XVT1112-031', '2012-11-30', '', '1', '2012-11-30 11:44:19', '1', '2012-11-30 11:44:28', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('33', 'XVT1112-032', '2012-11-30', '', '1', '2012-11-30 12:02:09', '1', '2012-11-30 12:02:29', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('34', 'XVT1112-033', '2012-11-30', '', '1', '2012-11-30 14:50:18', '1', '2012-11-30 14:50:58', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('35', 'XVT1112-034', '2012-11-30', '', '1', '2012-11-30 14:50:44', '1', '2012-11-30 14:50:58', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('36', 'XVT1112-035', '2012-11-30', '', '1', '2012-12-01 19:32:42', '1', '2012-12-01 19:33:30', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('37', 'XVT1212-001', '2012-12-01', '', '1', '2012-12-02 08:21:55', '1', '2012-12-02 08:22:06', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('38', 'XVT1212-002', '2012-12-24', '', '1', '2012-12-25 18:12:42', '1', '2012-12-25 18:13:04', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('39', 'XVT1212-003', '2012-12-24', '', '1', '2012-12-25 18:16:03', '1', '2012-12-25 18:29:28', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('41', 'XVT1212-004', '2012-12-24', '', '1', '2012-12-25 19:15:55', '1', '2012-12-25 19:16:19', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('42', 'XVT1212-005', '2012-12-22', '', '1', '2012-12-25 19:20:46', '1', '2012-12-25 19:21:02', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('43', 'XVT1212-006', '2012-12-25', '', '1', '2012-12-26 08:45:02', '1', '2012-12-26 08:45:28', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('44', 'XVT1212-007', '2012-12-25', '', '1', '2012-12-26 18:42:15', '1', '2012-12-29 11:09:10', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('45', 'XVT1212-008', '2012-12-26', '', '1', '2012-12-27 10:28:20', '1', '2012-12-27 10:29:25', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('46', 'XVT1212-009', '2012-12-29', '', '1', '2012-12-29 17:48:42', '1', '2012-12-29 17:49:00', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('47', 'XVT1212-010', '2012-12-29', '', '1', '2012-12-29 17:52:43', '1', '2012-12-29 17:53:05', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('48', 'XVT1212-011', '2012-12-29', '', '1', '2012-12-29 18:00:42', '1', '2012-12-29 18:00:57', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('49', 'XVT1212-012', '2012-12-29', '', '1', '2012-12-29 18:06:58', '1', '2012-12-29 18:07:20', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('50', 'XVT1212-013', '2012-12-29', '', '1', '2012-12-29 18:18:35', '1', '2012-12-29 18:18:50', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('51', 'XVT1212-014', '2012-12-29', '', '1', '2012-12-29 18:22:03', '1', '2012-12-29 18:22:15', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('52', 'XVT1212-015', '2012-12-29', '', '1', '2012-12-29 18:27:48', '1', '2012-12-29 18:28:13', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('53', 'XVT1212-016', '2012-12-29', '', '1', '2012-12-29 18:29:50', '1', '2012-12-29 18:30:03', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('54', 'XVT1212-017', '2012-12-29', '', '1', '2012-12-29 18:31:30', '1', '2012-12-29 18:31:44', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('55', 'XVT1212-018', '2012-12-30', '', '1', '2012-12-30 09:52:16', '1', '2012-12-30 09:52:49', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('56', 'XVT1212-019', '2012-12-30', '', '1', '2012-12-30 09:55:35', '1', '2012-12-30 09:55:49', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('57', 'XVT1212-020', '2012-12-30', '', '1', '2012-12-30 09:59:59', '1', '2012-12-30 10:01:15', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('59', 'XVT1212-021', '2012-12-29', '', '1', '2012-12-30 10:02:51', '1', '2012-12-30 10:03:00', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('60', 'XVT1212-022', '2012-12-29', '', '1', '2012-12-30 10:03:56', '1', '2012-12-30 10:04:12', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('61', 'XVT1212-023', '2012-12-29', '', '1', '2012-12-30 10:05:58', '1', '2012-12-30 10:06:07', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('62', 'XVT1212-024', '2012-12-31', '', '1', '2013-01-07 16:47:10', '1', '2013-01-07 16:47:23', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('63', 'XVT1212-025', '2012-12-31', '', '1', '2013-01-07 16:49:44', '1', '2013-01-07 16:49:54', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('64', 'XVT1212-026', '2012-12-31', '', '1', '2013-01-07 16:51:26', '1', '2013-01-07 16:51:42', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('65', 'XVT1212-027', '2012-12-31', '', '1', '2013-01-07 16:55:21', '1', '2013-01-07 16:55:39', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('66', 'XVT1212-028', '2012-12-31', '', '1', '2013-01-07 16:58:19', '1', '2013-01-07 16:58:33', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('67', 'XVT1212-029', '2012-12-31', '', '1', '2013-01-07 17:02:58', '1', '2013-01-07 17:03:09', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('68', 'XVT1212-030', '2012-12-31', '', '1', '2013-01-07 17:09:06', '1', '2013-01-07 17:09:23', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('69', 'XVT1212-031', '2012-12-31', '', '1', '2013-01-07 17:59:09', '1', '2013-01-07 17:59:25', '1', '1', '1', '0.00', '70');

-- ----------------------------
-- Table structure for `inv_warehouseoutline`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouseoutline`;
CREATE TABLE `inv_warehouseoutline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `warehouseout_id` int(50) DEFAULT NULL,
  `product_id` int(20) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(19,2) NOT NULL DEFAULT '0.00',
  `note` text,
  `subtotal` decimal(19,2) DEFAULT NULL,
  `subvat` decimal(19,2) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `uom_id` int(11) NOT NULL,
  `radio` decimal(10,9) unsigned DEFAULT '1.000000000',
  `qtystd` decimal(10,5) DEFAULT NULL,
  `counter` decimal(19,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stock_warehouseoutline_ibfk_1` (`warehouseout_id`),
  KEY `product_id` (`product_id`),
  KEY `uom_id` (`uom_id`),
  CONSTRAINT `inv_warehouseoutline_ibfk_1` FOREIGN KEY (`warehouseout_id`) REFERENCES `inv_warehouseout` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_warehouseoutline_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_warehouseoutline_ibfk_4` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_warehouseoutline
-- ----------------------------
INSERT INTO `inv_warehouseoutline` VALUES ('2', '2', '4', '1.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-14 16:37:06', '1', '2012-11-14 16:37:06', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('3', '2', '8', '1.00', '6 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-11-14 16:37:06', '1', '2012-11-14 16:37:06', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('4', '2', '13', '1.00', ' 8 in Patinum lụa 90 m  ', '0.00', null, '0.00', null, '2012-11-14 16:37:06', '1', '2012-11-14 16:37:06', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('5', '2', '15', '1.00', '10 in Patinum lụa 90 m', '0.00', null, '0.00', null, '2012-11-14 16:37:06', '1', '2012-11-14 16:37:06', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('6', '3', '18', '3.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-11-14 16:41:51', '1', '2012-11-14 16:41:51', '1', '3', '1.000000000', '3.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('7', '3', '22', '1.00', '50 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-11-14 16:41:51', '1', '2012-11-14 16:41:51', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('8', '4', '32', '1.00', 'Mực đỏ Xerox', '0.00', null, '0.00', null, '2012-11-14 17:40:52', '1', '2012-11-14 17:40:52', '1', '173', '1.000000000', '1.00000', '781733');
INSERT INTO `inv_warehouseoutline` VALUES ('9', '5', '15', '1.00', '10 in Patinum lụa 90 m', '0.00', null, '0.00', null, '2012-11-25 10:14:43', '1', '2012-11-25 10:14:43', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('10', '6', '21', '1.00', '30 in Fuji Ty 80 lụa  50 m', '0.00', null, '0.00', null, '2012-11-25 10:30:57', '1', '2012-11-25 10:30:57', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('11', '7', '23', '1.00', '50 in Fuji Ty 80 lụa  50 m', '0.00', null, '0.00', null, '2012-11-25 10:34:38', '1', '2012-11-25 10:34:38', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('12', '8', '4', '21.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-25 14:49:31', '1', '2012-11-25 14:49:31', '1', '3', '1.000000000', '21.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('13', '9', '4', '2.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-25 14:59:38', '1', '2012-11-25 14:59:38', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('14', '10', '5', '2.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-11-25 15:09:15', '1', '2012-11-25 15:09:15', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('15', '11', '5', '19.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-11-25 15:23:37', '1', '2012-11-25 15:23:37', '1', '3', '1.000000000', '19.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('16', '12', '4', '3.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-29 17:48:36', '1', '2012-11-29 17:48:36', '1', '3', '1.000000000', '3.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('17', '13', '5', '3.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-11-29 17:50:01', '1', '2012-11-29 17:50:01', '1', '3', '1.000000000', '3.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('18', '14', '7', '7.00', '6 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-29 17:51:14', '1', '2012-11-29 17:51:14', '1', '3', '1.000000000', '7.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('19', '15', '8', '9.00', '6 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-11-29 17:53:43', '1', '2012-11-29 17:53:43', '1', '3', '1.000000000', '9.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('20', '16', '9', '5.00', '8 in Fuji láng 90 m', '0.00', null, '0.00', null, '2012-11-29 17:55:10', '1', '2012-11-29 17:55:10', '1', '3', '1.000000000', '5.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('21', '17', '13', '1.00', ' 8 in Patinum lụa 90 m  ', '0.00', null, '0.00', null, '2012-11-29 17:56:17', '1', '2012-11-29 17:56:17', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('22', '18', '14', '2.00', '10 in Fuji láng 90 m', '0.00', null, '0.00', null, '2012-11-29 17:57:14', '1', '2012-11-29 17:57:14', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('23', '19', '16', '4.00', '12 in giấy ngọc trai', '0.00', null, '0.00', null, '2012-11-29 18:00:17', '1', '2012-11-29 18:00:17', '1', '3', '1.000000000', '4.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('24', '20', '18', '101.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-11-29 18:02:20', '1', '2012-11-29 18:02:20', '1', '3', '1.000000000', '101.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('25', '21', '29', '20.00', '30 In Ty 80 láng 75 mét', '0.00', null, '0.00', null, '2012-11-29 18:03:20', '1', '2012-11-29 18:03:20', '1', '3', '1.000000000', '20.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('26', '22', '22', '46.00', '50 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-11-29 18:05:05', '1', '2012-11-29 18:05:05', '1', '3', '1.000000000', '46.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('27', '23', '24', '4.00', 'P1 Pro 40 lít', '0.00', null, '0.00', null, '2012-11-29 18:08:46', '1', '2012-11-29 18:08:46', '1', '4', '1.000000000', '4.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('28', '24', '31', '8.00', 'P2 Pro 40 lít', '0.00', null, '0.00', null, '2012-11-29 18:11:36', '1', '2012-11-29 18:11:36', '1', '4', '1.000000000', '8.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('29', '25', '38', '1.00', 'Mực xanh in phẳng', '0.00', null, '0.00', null, '2012-11-29 18:15:32', '1', '2012-11-29 18:15:32', '1', '173', '1.000000000', '1.00000', '10');
INSERT INTO `inv_warehouseoutline` VALUES ('30', '26', '39', '1.00', 'Mực đen in phẳng', '0.00', null, '0.00', null, '2012-11-29 18:19:41', '1', '2012-11-29 18:19:41', '1', '173', '1.000000000', '1.00000', '10');
INSERT INTO `inv_warehouseoutline` VALUES ('31', '27', '40', '1.00', 'Mực trắng in phẳng', '0.00', null, '0.00', null, '2012-11-29 18:25:56', '1', '2012-11-29 18:25:56', '1', '173', '1.000000000', '1.00000', '10');
INSERT INTO `inv_warehouseoutline` VALUES ('32', '28', '33', '1.00', 'Mực xanh Xerox', '0.00', null, '0.00', null, '2012-11-29 18:28:50', '1', '2012-11-29 18:28:50', '1', '173', '1.000000000', '1.00000', '793847');
INSERT INTO `inv_warehouseoutline` VALUES ('33', '29', '32', '1.00', 'Mực đỏ Xerox', '0.00', null, '0.00', null, '2012-11-29 18:32:55', '1', '2012-11-29 18:32:55', '1', '173', '1.000000000', '1.00000', '791674');
INSERT INTO `inv_warehouseoutline` VALUES ('34', '30', '35', '1.00', 'Mực vàng Xerox', '0.00', null, '0.00', null, '2012-11-29 18:41:38', '1', '2012-11-29 18:41:38', '1', '173', '1.000000000', '1.00000', '789154');
INSERT INTO `inv_warehouseoutline` VALUES ('35', '31', '4', '2.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-30 11:00:20', '1', '2012-11-30 11:00:20', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('36', '31', '5', '1.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-11-30 11:00:20', '1', '2012-11-30 11:00:20', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('37', '32', '42', '1.00', 'Baclit film 127 x 30', '0.00', null, '0.00', null, '2012-11-30 11:44:19', '1', '2012-11-30 11:44:19', '1', '3', '1.000000000', '1.00000', '10');
INSERT INTO `inv_warehouseoutline` VALUES ('38', '32', '43', '1.00', 'Baclit film 152 x 30', '0.00', null, '0.00', null, '2012-11-30 11:44:19', '1', '2012-11-30 11:44:19', '1', '3', '1.000000000', '1.00000', '10');
INSERT INTO `inv_warehouseoutline` VALUES ('39', '33', '49', '1.00', 'Canvas 152 x 18', '0.00', null, '0.00', null, '2012-11-30 12:02:09', '1', '2012-11-30 12:02:09', '1', '3', '1.000000000', '1.00000', '10');
INSERT INTO `inv_warehouseoutline` VALUES ('40', '34', '7', '1.00', '6 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-30 14:50:18', '1', '2012-11-30 14:50:18', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('41', '35', '9', '1.00', '8 in Fuji láng 90 m', '0.00', null, '0.00', null, '2012-11-30 14:50:44', '1', '2012-11-30 14:50:44', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('42', '36', '4', '1.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-12-01 19:32:42', '1', '2012-12-01 19:32:42', '1', '3', '1.000000000', '1.00000', '10');
INSERT INTO `inv_warehouseoutline` VALUES ('43', '36', '5', '1.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-12-01 19:32:42', '1', '2012-12-01 19:32:42', '1', '3', '1.000000000', '1.00000', '1');
INSERT INTO `inv_warehouseoutline` VALUES ('44', '37', '18', '4.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-02 08:21:55', '1', '2012-12-02 08:21:55', '1', '3', '1.000000000', '4.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('45', '38', '18', '77.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-25 18:12:42', '1', '2012-12-25 18:12:42', '1', '3', '1.000000000', '77.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('46', '39', '29', '18.00', '30 In Ty 80 láng 75 mét', '0.00', null, '0.00', null, '2012-12-25 18:16:03', '1', '2012-12-25 18:16:03', '1', '3', '1.000000000', '18.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('47', '39', '22', '51.00', '50 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-25 18:16:03', '1', '2012-12-25 18:16:03', '1', '3', '1.000000000', '51.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('50', '41', '24', '39.00', 'P1 Pro 40 lít', '0.00', null, '0.00', null, '2012-12-25 19:15:55', '1', '2012-12-25 19:15:55', '1', '4', '1.000000000', '39.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('51', '41', '31', '32.00', 'P2 Pro 40 lít', '0.00', null, '0.00', null, '2012-12-25 19:15:55', '1', '2012-12-25 19:15:55', '1', '4', '1.000000000', '32.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('52', '42', '24', '5.00', 'P1 Pro 40 lít', '0.00', null, '0.00', null, '2012-12-25 19:20:46', '1', '2012-12-25 19:20:46', '1', '4', '1.000000000', '5.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('53', '42', '31', '5.00', 'P2 Pro 40 lít', '0.00', null, '0.00', null, '2012-12-25 19:20:46', '1', '2012-12-25 19:20:46', '1', '4', '1.000000000', '5.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('54', '43', '18', '4.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-26 08:45:02', '1', '2012-12-26 08:45:02', '1', '3', '1.000000000', '4.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('55', '43', '29', '1.00', '30 In Ty 80 láng 75 mét', '0.00', null, '0.00', null, '2012-12-26 08:45:02', '1', '2012-12-26 08:45:02', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('56', '43', '22', '3.00', '50 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-26 08:45:02', '1', '2012-12-26 08:45:02', '1', '3', '1.000000000', '3.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('57', '44', '7', '6.00', '6 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-12-26 18:42:15', '1', '2012-12-29 11:08:38', '1', '3', '1.000000000', '6.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('58', '44', '8', '4.00', '6 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-12-26 18:42:15', '1', '2012-12-29 11:08:38', '1', '3', '1.000000000', '4.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('59', '44', '9', '8.00', '8 in Fuji láng 90 m', '0.00', null, '0.00', null, '2012-12-26 18:42:15', '1', '2012-12-29 11:08:38', '1', '3', '1.000000000', '8.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('60', '45', '18', '5.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-27 10:28:20', '1', '2012-12-27 10:28:20', '1', '3', '1.000000000', '5.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('61', '45', '29', '1.00', '30 In Ty 80 láng 75 mét', '0.00', null, '0.00', null, '2012-12-27 10:28:20', '1', '2012-12-27 10:28:20', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('62', '45', '22', '3.00', '50 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-27 10:28:20', '1', '2012-12-27 10:28:20', '1', '3', '1.000000000', '3.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('63', '44', '4', '32.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-12-29 11:08:38', '1', '2012-12-29 11:08:38', '1', '3', '1.000000000', '32.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('64', '44', '5', '24.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-12-29 11:08:38', '1', '2012-12-29 11:08:38', '1', '3', '1.000000000', '24.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('65', '44', '14', '4.00', '10 in Fuji láng 90 m', '0.00', null, '0.00', null, '2012-12-29 11:08:38', '1', '2012-12-29 11:08:38', '1', '3', '1.000000000', '4.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('66', '46', '4', '4.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-12-29 17:48:42', '1', '2012-12-29 17:48:42', '1', '3', '1.000000000', '4.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('67', '47', '5', '3.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-12-29 17:52:43', '1', '2012-12-29 17:52:43', '1', '3', '1.000000000', '3.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('68', '48', '7', '2.00', '6 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-12-29 18:00:42', '1', '2012-12-29 18:00:42', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('69', '49', '14', '1.00', '10 in Fuji láng 90 m', '0.00', null, '0.00', null, '2012-12-29 18:06:58', '1', '2012-12-29 18:06:58', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('70', '50', '16', '5.00', '12 in giấy ngọc trai', '0.00', null, '0.00', null, '2012-12-29 18:18:35', '1', '2012-12-29 18:18:35', '1', '3', '1.000000000', '5.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('71', '51', '18', '20.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-29 18:22:03', '1', '2012-12-29 18:22:03', '1', '3', '1.000000000', '20.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('72', '52', '18', '2.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-29 18:27:48', '1', '2012-12-29 18:27:48', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('73', '53', '29', '2.00', '30 In Ty 80 láng 75 mét', '0.00', null, '0.00', null, '2012-12-29 18:29:50', '1', '2012-12-29 18:29:50', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('74', '54', '22', '6.00', '50 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-29 18:31:30', '1', '2012-12-29 18:31:30', '1', '3', '1.000000000', '6.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('75', '55', '18', '3.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-30 09:52:16', '1', '2012-12-30 09:52:16', '1', '3', '1.000000000', '3.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('76', '56', '22', '3.00', '50 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2012-12-30 09:55:35', '1', '2012-12-30 09:55:35', '1', '3', '1.000000000', '3.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('77', '57', '4', '1.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-12-30 09:59:59', '1', '2012-12-30 09:59:59', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('79', '59', '5', '1.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-12-30 10:02:51', '1', '2012-12-30 10:02:51', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('80', '60', '8', '1.00', '6 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-12-30 10:03:56', '1', '2012-12-30 10:03:56', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('81', '61', '16', '1.00', '12 in giấy ngọc trai', '0.00', null, '0.00', null, '2012-12-30 10:05:58', '1', '2012-12-30 10:05:58', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('82', '62', '14', '2.00', '10 in Fuji láng 90 m', '0.00', null, '0.00', null, '2013-01-07 16:47:10', '1', '2013-01-07 16:47:10', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('83', '62', '15', '1.00', '10 in Patinum lụa 90 m', '0.00', null, '0.00', null, '2013-01-07 16:47:10', '1', '2013-01-07 16:47:10', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('84', '63', '5', '2.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2013-01-07 16:49:44', '1', '2013-01-07 16:49:44', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('85', '64', '7', '1.00', '6 in Fuji láng 186 m', '0.00', null, '0.00', null, '2013-01-07 16:51:26', '1', '2013-01-07 16:51:26', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('86', '65', '9', '1.00', '8 in Fuji láng 90 m', '0.00', null, '0.00', null, '2013-01-07 16:55:21', '1', '2013-01-07 16:55:21', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('87', '65', '13', '1.00', ' 8 in Patinum lụa 90 m  ', '0.00', null, '0.00', null, '2013-01-07 16:55:21', '1', '2013-01-07 16:55:21', '1', '3', '1.000000000', '1.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('88', '66', '18', '9.00', '24 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2013-01-07 16:58:19', '1', '2013-01-07 16:58:19', '1', '3', '1.000000000', '9.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('89', '67', '29', '2.00', '30 In Ty 80 láng 75 mét', '0.00', null, '0.00', null, '2013-01-07 17:02:58', '1', '2013-01-07 17:02:58', '1', '3', '1.000000000', '2.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('90', '68', '22', '4.00', '50 in Fuji Ty 80 láng 50 m', '0.00', null, '0.00', null, '2013-01-07 17:09:06', '1', '2013-01-07 17:09:06', '1', '3', '1.000000000', '4.00000', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('91', '69', '31', '7.00', 'P2 Pro 40 lít', '0.00', null, '0.00', null, '2013-01-07 17:59:09', '1', '2013-01-07 17:59:09', '1', '4', '1.000000000', '7.00000', '0');

-- ----------------------------
-- Table structure for `inv_warehouseouttype`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouseouttype`;
CREATE TABLE `inv_warehouseouttype` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `wh_req` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_warehouseouttype
-- ----------------------------
INSERT INTO `inv_warehouseouttype` VALUES ('1', 'Xuất sản xuất', 'Xuất cho các phân xưởng ', '70');
INSERT INTO `inv_warehouseouttype` VALUES ('2', 'Xuất khác', '', '69');
INSERT INTO `inv_warehouseouttype` VALUES ('3', 'Khác', '', '70');

-- ----------------------------
-- Table structure for `mrp_workorder`
-- ----------------------------
DROP TABLE IF EXISTS `mrp_workorder`;
CREATE TABLE `mrp_workorder` (
  `wo_id` varchar(20) DEFAULT NULL,
  `wodate` date DEFAULT NULL,
  `item_id` varchar(20) DEFAULT NULL,
  `uom` varchar(20) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mrp_workorder
-- ----------------------------

-- ----------------------------
-- Table structure for `product_category`
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `hascounter` bit(1) NOT NULL DEFAULT b'0' COMMENT 'Theo doi so counter tern may in',
  `index` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `product_category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `product_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_category
-- ----------------------------
INSERT INTO `product_category` VALUES ('4', 'Giấy Hình', '1', '1970-01-01 00:00:00', '1', '2012-12-17 10:55:34', '4', '', '1');
INSERT INTO `product_category` VALUES ('5', 'Inkjet nước', '1', '1970-01-01 00:00:00', '1', '2012-12-25 11:04:29', '5', '', '6');
INSERT INTO `product_category` VALUES ('7', 'Inkjet dầu', '1', '2012-06-25 00:00:00', '1', '2012-12-25 11:04:20', '7', '', '5');
INSERT INTO `product_category` VALUES ('8', 'Inkjet UV', '1', '1970-01-01 00:00:00', '1', '2012-12-25 11:03:53', '8', '', '3');
INSERT INTO `product_category` VALUES ('9', 'Xerox', '1', '2012-07-20 15:49:49', '1', '2012-12-25 11:02:20', '9', '', '2');
INSERT INTO `product_category` VALUES ('10', 'SX Album', '1', '2012-07-20 15:50:13', '1', '2012-12-25 11:04:06', '10', '', '4');

-- ----------------------------
-- Table structure for `product_item`
-- ----------------------------
DROP TABLE IF EXISTS `product_item`;
CREATE TABLE `product_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `costmethod` tinyint(4) DEFAULT '1',
  `class` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Stock, Non-Stock, Service, Labor, Materials',
  `category_id` int(20) NOT NULL,
  `type_id` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `po_uom_id` int(11) DEFAULT NULL,
  `pouom_radio` decimal(10,2) DEFAULT '1.00',
  `pouom_radio_std` decimal(10,2) DEFAULT '1.00',
  `uom_id` int(15) NOT NULL COMMENT 'Unit of Measure',
  `sale_uom_id` int(11) DEFAULT NULL,
  `so_uom_id` int(11) DEFAULT NULL,
  `souom_radio` decimal(10,2) DEFAULT '1.00',
  `souom_radio_std` decimal(10,2) DEFAULT '1.00',
  `work_uom_id` int(11) DEFAULT NULL,
  `workuom_radio` decimal(19,2) DEFAULT '1.00',
  `workuom_radio_std` decimal(19,2) DEFAULT '1.00',
  `length` decimal(19,2) DEFAULT NULL,
  `width` decimal(19,2) DEFAULT NULL,
  `heigth` decimal(19,2) DEFAULT NULL,
  `thickness` decimal(19,3) DEFAULT NULL,
  `note` text CHARACTER SET utf8,
  `minqtystock` decimal(19,0) DEFAULT '0',
  `qtyinstock` decimal(19,0) DEFAULT '0',
  `default_wh_id` int(20) DEFAULT NULL,
  `lastcost` decimal(19,4) DEFAULT '0.0000',
  `lastpodate` date DEFAULT NULL,
  `avgcost` decimal(19,4) DEFAULT '0.0000',
  `stdcost` decimal(19,4) DEFAULT NULL,
  `qtysale` decimal(19,2) DEFAULT '0.00',
  `qtypo` decimal(19,2) DEFAULT '0.00',
  `active` bit(1) DEFAULT b'1',
  `hascounter` bit(1) DEFAULT b'0',
  `index` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `uom_id` (`uom_id`),
  KEY `category_id` (`category_id`),
  KEY `type_id` (`type_id`),
  CONSTRAINT `product_item_ibfk_3` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `product_item_ibfk_5` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `product_item_ibfk_6` FOREIGN KEY (`type_id`) REFERENCES `product_type` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_item
-- ----------------------------
INSERT INTO `product_item` VALUES ('4', '5FG186', '5 in Fuji láng 186 m', '1', '1970-01-01 00:00:00', '1', '2013-01-07 18:30:27', '', '1', '3', '4', '5G', '3', '1.00', '1.00', '3', '4', '5', '186.00', '1.00', '175', '23.62', '1.00', '186.00', '12.70', null, '0.001', '', '2', '77', '70', '1264917.4839', '2012-12-27', '1264917.4839', '0.0000', '0.00', '0.00', '', '', '10');
INSERT INTO `product_item` VALUES ('5', '5FL186', '5 in Fuji lụa 186 m', '1', '1970-01-01 00:00:00', '1', '2013-01-07 18:30:28', null, '1', '3', '4', '5L', '3', '1.00', '1.00', '3', null, '5', '186.00', '1.00', '175', '23.62', '1.00', '186.00', '12.70', null, '0.001', '', '2', '3', null, '1245167.6136', '2012-12-27', '1245167.6136', null, null, null, '', '', '20');
INSERT INTO `product_item` VALUES ('6', '5PG186', '5 in Patinum láng 186 m', '1', '1970-01-01 00:00:00', '1', '2012-12-29 18:41:43', null, '1', '3', '4', '5G', '3', '1.00', '1.00', '3', null, '5', '186.00', '1.00', '175', '23.62', '1.00', '186.00', '12.70', null, '1.000', 'd ddsd', '2', null, null, '0.0000', '2012-07-18', '0.0000', null, null, null, '', '', '30');
INSERT INTO `product_item` VALUES ('7', '6FG186', '6 in Fuji láng 186 m', null, null, '1', '2013-01-07 18:30:28', null, '1', '3', '4', '6G', '3', '1.00', '1.00', '3', '1', '5', '186.00', '1.00', '175', '28.27', '1.00', '186.00', '15.20', null, '0.001', '', '2', '67', null, '1497698.6770', '2012-12-11', '1497698.6770', null, '0.00', '0.00', '', '', '40');
INSERT INTO `product_item` VALUES ('8', '6FL186', '6 in Fuji lụa 186 m', '1', '2012-07-26 17:02:23', '1', '2013-01-07 18:30:28', null, '1', '3', '4', '6L', '3', '1.00', '1.00', '3', null, '5', '186.00', '1.00', '175', '28.27', '1.00', '186.00', '15.20', null, '0.001', '', '2', '52', null, '1514677.4392', '2012-12-11', '1514677.4392', null, '0.00', '0.00', '', '', '50');
INSERT INTO `product_item` VALUES ('9', '8FG90', '8 in Fuji láng 90 m', '1', '2012-07-26 17:16:33', '1', '2013-01-07 18:30:28', null, '1', '3', '4', '8G', '3', '1.00', '1.00', '3', null, '5', '90.00', '1.00', '175', '18.27', '1.00', '90.00', '20.30', null, '0.100', '', '2', '8', '69', '1012920.4152', '2012-12-11', '1012920.4152', null, '0.00', '0.00', '', '', '60');
INSERT INTO `product_item` VALUES ('13', ' 8PL90', ' 8 in Patinum lụa 90 m  ', '1', '2012-08-10 14:25:17', '1', '2013-01-07 18:30:29', null, '1', '3', '4', '8L', '3', '1.00', '1.00', '3', null, '5', '90.00', '1.00', '175', '18.27', '1.00', '90.00', '20.30', null, '0.010', '', '2', '1', '69', '650000.0000', '2012-11-01', '650000.0000', null, '0.00', '0.00', '', '', '70');
INSERT INTO `product_item` VALUES ('14', '10FG90', '10 in Fuji láng 90 m', '1', '2012-08-10 14:35:08', '1', '2013-01-07 18:30:29', null, '1', '3', '4', '10G', '3', '1.00', '1.00', '3', null, '5', '90.00', '1.00', '175', '22.86', '1.00', '90.00', '25.40', null, '0.010', '', '2', '26', '69', '1257000.0000', '2012-12-11', '1257000.0000', null, '0.00', '0.00', '', '', '80');
INSERT INTO `product_item` VALUES ('15', '10PL90', '10 in Patinum lụa 90 m', '1', '2012-08-10 14:36:09', '1', '2013-01-07 18:30:29', null, '1', '3', '4', '10L', '3', '1.00', '1.00', '3', null, '5', '90.00', '1.00', '175', '22.86', '1.00', '90.00', '25.40', null, '0.010', '', '2', '2', '69', '1035555.5555', '2012-11-29', '1035555.5555', null, '0.00', '0.00', '', '', '90');
INSERT INTO `product_item` VALUES ('16', '12FN75', '12 in giấy ngọc trai', '1', '2012-08-10 14:37:14', '1', '2013-01-07 18:30:29', null, '1', '3', '4', 'ME', '3', '1.00', '1.00', '3', null, '5', '75.00', '1.00', '175', '22.88', '1.00', '75.00', '30.50', null, '0.010', '', '2', '3', '69', '1500000.0000', '2012-12-11', '1500000.0000', null, '0.00', '0.00', '', '', '100');
INSERT INTO `product_item` VALUES ('17', '12FG90', '12 in Fuji laùng 90 m', '1', '2012-08-10 14:38:07', '1', '2012-12-29 18:45:52', null, '1', '3', '4', '12G', '3', '1.00', '1.00', '3', null, '5', '90.00', '1.00', '175', '27.45', '1.00', '90.00', '30.50', null, '0.001', '', '2', null, null, '0.0000', null, '0.0000', null, '0.00', '0.00', '', '', '110');
INSERT INTO `product_item` VALUES ('18', '24TG50', '24 in Fuji Ty 80 láng 50 m', '1', '2012-08-10 14:39:42', '1', '2013-01-07 18:30:30', null, '1', '3', '4', '24G', '3', '1.00', '1.00', '3', null, '5', '50.00', '1.00', '175', '31.00', '1.00', '50.00', '62.00', null, '0.010', '', '2', '141', '69', '1720289.6037', '2012-12-31', '1720289.6037', null, '0.00', '0.00', '', '', '120');
INSERT INTO `product_item` VALUES ('19', '24TL50', '24 in Fuji Ty 80 lụa 50 m', '1', '2012-08-10 14:40:38', '1', '2012-12-29 18:46:37', null, '1', '3', '4', '24L', '3', '1.00', '1.00', '3', null, '5', '50.00', '1.00', '175', '31.00', '1.00', '50.00', '62.00', null, '0.010', '', '2', null, '69', '0.0000', '2012-10-11', '0.0000', null, '0.00', '0.00', '', '', '130');
INSERT INTO `product_item` VALUES ('20', '30TG50', '30 in Fuji Ty 80 láng 50 m', '1', '2012-08-10 14:41:59', '1', '2012-12-29 18:47:01', null, '1', '3', '4', '30G', '3', '1.00', '1.00', '3', null, '5', '50.00', '1.00', '175', '38.10', '1.00', '50.00', '76.20', null, '0.001', '', '2', null, '69', '0.0000', '2012-10-11', '0.0000', null, '0.00', '0.00', '', '', '140');
INSERT INTO `product_item` VALUES ('21', '30TL50', '30 in Fuji Ty 80 lụa  50 m', '1', '2012-08-10 14:42:50', '1', '2012-12-30 10:28:17', null, '1', '3', '4', '30L', '3', '1.00', '1.00', '3', null, '5', '50.00', '1.00', '175', '38.10', '1.00', '50.00', '76.20', null, '0.010', '', '2', '0', '69', '2286000.0000', '2012-11-01', '2286000.0000', null, '0.00', '0.00', '', '', '150');
INSERT INTO `product_item` VALUES ('22', '50TG50', '50 in Fuji Ty 80 láng 50 m', '1', '2012-08-10 14:44:01', '1', '2013-01-07 18:30:30', null, '1', '3', '4', '50G', '3', '1.00', '1.00', '3', null, '5', '50.00', '1.00', '175', '63.50', '1.00', '50.00', '127.00', null, '0.010', '', '2', '98', '69', '3556000.0000', '2012-12-31', '3556000.0000', null, '0.00', '0.00', '', '', '170');
INSERT INTO `product_item` VALUES ('23', '50TL50', '50 in Fuji Ty 80 lụa  50 m', '1', '2012-08-10 14:44:45', '1', '2013-01-07 17:40:33', null, '1', '3', '4', '50L', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '63.50', '1.00', '50.00', '127.00', null, '0.010', '', '2', '1', '69', '3556000.0000', '2013-01-31', '3556000.0000', null, '0.00', '0.00', '', '', '180');
INSERT INTO `product_item` VALUES ('24', 'P1PRO40', 'P1 Pro 40 lít', '1', '2012-08-10 14:46:24', '1', '2013-01-07 18:30:30', null, '1', '3', '4', 'HCL', null, '1.00', '1.00', '4', null, null, '1.00', '1.00', null, '0.40', '1.00', '1.00', '40.00', null, '0.010', '', '2', '57', '69', '790000.0000', '2012-12-31', '790000.0000', null, '0.00', '0.00', '', '', '190');
INSERT INTO `product_item` VALUES ('25', 'FO5', 'Fomat 5 ly', '1', '2012-11-04 15:56:49', '1', '2012-12-25 15:43:27', null, '1', '3', '8', 'FO', '175', '2.88', '1.00', '174', null, null, '1.00', '1.00', null, '2.88', '1.00', '2.00', '120.00', null, '5.000', '', '2', '5', '69', '220000.0000', '2012-11-30', '220000.0000', null, '0.00', '0.00', '', '', '90');
INSERT INTO `product_item` VALUES ('26', '8PL90', '8 In Patinum lụa 90 mét', '1', '2012-11-14 11:26:17', '1', '2012-12-25 15:55:09', null, '1', '3', '4', '8L', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '18.27', '1.00', '90.00', '20.30', null, '1.000', '', '2', null, '69', '0.0000', null, '0.0000', null, '0.00', '0.00', '', '', null);
INSERT INTO `product_item` VALUES ('29', '30TG75', '30 In Ty 80 láng 75 mét', '1', '2012-11-14 11:41:50', '1', '2013-01-07 18:30:30', null, '1', '3', '4', '30G', '3', '1.00', '1.00', '3', null, '5', '75.00', '1.00', '175', '57.15', '1.00', '75.00', '76.20', null, '0.001', '', '1', '30', '69', '3185000.0000', '2012-12-31', '3185000.0000', null, '0.00', '0.00', '', '', '160');
INSERT INTO `product_item` VALUES ('31', 'P2Pro40', 'P2 Pro 40 lít', '1', '2012-11-14 17:04:59', '1', '2013-01-07 18:30:31', null, '1', '3', '4', 'HCL', null, '1.00', '1.00', '4', null, null, '1.00', '1.00', null, '0.00', '1.00', '40.00', '0.00', null, '0.000', '', '5', '54', '69', '493000.0000', '2012-12-18', '493000.0000', null, '0.00', '0.00', '', '', '200');
INSERT INTO `product_item` VALUES ('32', 'MX', 'Mực đỏ Xerox', '1', '2012-11-14 17:36:48', '1', '2012-12-30 10:28:19', null, '1', '3', '9', 'MX', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '2', '69', '8035000.0000', '2012-11-29', '8035000.0000', null, '0.00', '0.00', '', '', '10');
INSERT INTO `product_item` VALUES ('33', 'CX', 'Mực xanh Xerox', '1', '2012-11-16 10:27:52', '1', '2012-12-30 10:28:20', null, '1', '3', '9', 'MX', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '3', '69', '2530000.0000', '2012-11-29', '2530000.0000', null, '0.00', '0.00', '', '', '11');
INSERT INTO `product_item` VALUES ('34', 'BX', 'Mực đen Xerox', '1', '2012-11-16 10:28:42', '1', '2012-11-29 18:44:32', null, '1', '3', '9', 'MX', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '4', '69', '1320000.0000', '2012-11-29', '1320000.0000', null, '0.00', '0.00', '', '', '12');
INSERT INTO `product_item` VALUES ('35', 'YX', 'Mực vàng Xerox', '1', '2012-11-16 10:29:17', '1', '2012-12-30 10:28:20', null, '1', '3', '9', 'MX', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '2', '69', '2530000.0000', '2012-11-29', '2530000.0000', null, '0.00', '0.00', '', '', '13');
INSERT INTO `product_item` VALUES ('36', 'MU', 'Mực đỏ in phẳng', '1', '2012-11-16 10:32:53', '1', '2012-11-29 18:17:44', null, '1', '3', '8', 'MU', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '3', '69', '8035000.0000', '2012-11-29', '8035000.0000', null, '0.00', '0.00', '', '', '10');
INSERT INTO `product_item` VALUES ('37', 'YU', 'Mực vàng in phẳng', '1', '2012-11-16 10:33:35', '1', '2012-11-29 18:18:41', null, '1', '3', '8', 'MU', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '2', '69', '8035000.0000', '2012-11-29', '8035000.0000', null, '0.00', '0.00', '', '', '20');
INSERT INTO `product_item` VALUES ('38', 'CU', 'Mực xanh in phẳng', '1', '2012-11-16 10:34:13', '1', '2012-12-30 10:28:21', null, '1', '3', '8', 'MU', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '1', '69', '8035000.0000', '2012-11-29', '8035000.0000', null, '0.00', '0.00', '', '', '30');
INSERT INTO `product_item` VALUES ('39', 'BU', 'Mực đen in phẳng', '1', '2012-11-16 10:34:49', '1', '2012-12-30 10:28:21', null, '1', '3', '8', 'MU', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '2', '69', '8035000.0000', '2012-11-29', '8035000.0000', null, '0.00', '0.00', '', '', '40');
INSERT INTO `product_item` VALUES ('40', 'WU', 'Mực trắng in phẳng', '1', '2012-11-16 10:35:24', '1', '2012-12-30 10:28:22', null, '1', '3', '8', 'MU', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '2', '69', '5510000.0000', '2012-11-29', '5510000.0000', null, '0.00', '0.00', '', '', '50');
INSERT INTO `product_item` VALUES ('41', 'BK10730', 'Baclit film 107 x 30', '1', '2012-11-16 11:12:27', '1', '2012-12-01 15:37:55', null, '1', '3', '8', 'BK', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', '175', '38.10', '1.00', '30.00', '127.00', null, '0.001', '', '1', '9', '69', '2889000.0000', '2012-11-01', '2885777.7778', null, '0.00', '0.00', '', '', '60');
INSERT INTO `product_item` VALUES ('42', 'BK12730', 'Baclit film 127 x 30', '1', '2012-11-16 11:13:45', '1', '2012-12-30 10:28:22', null, '1', '3', '8', 'BK', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '38.10', '1.00', '30.00', '127.00', null, '0.000', '', '1', '5', '69', '3423166.6667', '2012-11-30', '3423166.6667', null, '0.00', '0.00', '', '', '70');
INSERT INTO `product_item` VALUES ('43', 'BK15230', 'Baclit film 152 x 30', '1', '2012-11-16 11:15:55', '1', '2012-12-30 10:28:23', null, '1', '3', '8', 'BK', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '45.60', '1.00', '30.00', '152.00', null, '0.001', '', '1', '5', '69', '4104000.0000', '2012-11-30', '4104000.0000', null, '0.00', '0.00', '', '', '80');
INSERT INTO `product_item` VALUES ('44', 'PPC10730', 'Nhựa PP 107 x 30 có keo', '1', '2012-11-16 11:24:45', '1', '2012-11-29 15:17:12', null, '1', '3', '8', 'PPC', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '32.10', '1.00', '30.00', '107.00', null, '0.001', '', '1', '1', '69', '873000.0000', '2012-11-01', '873000.0000', null, '0.00', '0.00', '', '', null);
INSERT INTO `product_item` VALUES ('45', 'GA15030', 'Giấy ảnh inkjet láng 150 x 30', '1', '2012-11-16 11:26:06', '1', '2012-11-29 15:17:23', null, '1', '3', '8', 'GA', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '45.60', '1.00', '30.00', '152.00', null, '0.001', '', '1', null, '69', '0.0000', null, '0.0000', null, '0.00', '0.00', '', '', '150');
INSERT INTO `product_item` VALUES ('46', '9118', 'Canvas 91 x 18', '1', '2012-11-16 11:27:27', '1', '2012-11-16 11:27:27', null, '1', '3', '8', 'CV', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '16.38', '1.00', '18.00', '91.00', null, '0.002', '', '1', null, '69', '0.0000', null, '0.0000', null, '0.00', '0.00', '', '', null);
INSERT INTO `product_item` VALUES ('47', 'CV10718', 'Canvas 107 x 18', '1', '2012-11-16 11:28:54', '1', '2012-11-16 11:28:54', null, '1', '3', '8', 'CV', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '19.26', '1.00', '18.00', '107.00', null, '0.002', '', '1', null, '69', '0.0000', null, '0.0000', null, '0.00', '0.00', '', '', '120');
INSERT INTO `product_item` VALUES ('48', 'CV12718', 'Canvas 127 x 18', '1', '2012-11-16 11:29:45', '1', '2012-11-16 11:29:45', null, '1', '3', '8', 'CV', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '22.86', '1.00', '18.00', '127.00', null, '0.000', '', '1', null, '69', '0.0000', null, '0.0000', null, '0.00', '0.00', '', '', '130');
INSERT INTO `product_item` VALUES ('49', 'CV15218', 'Canvas 152 x 18', '1', '2012-11-16 11:30:31', '1', '2012-12-30 10:28:23', null, '1', '3', '8', 'CV', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '27.36', '1.00', '18.00', '152.00', null, '0.000', '', '1', '1', '69', '1314000.0000', '2012-11-01', '1314000.0000', null, '0.00', '0.00', '', '', '140');
INSERT INTO `product_item` VALUES ('50', 'FT16120', 'Film trong IZ75 161 x 20', '1', '2012-11-16 11:32:18', '1', '2012-11-29 15:17:37', null, '1', '3', '8', 'FT', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '32.20', '1.00', '20.00', '161.00', null, '0.000', '', '1', '1', '69', '750000.0000', '2012-11-01', '750000.0000', null, '0.00', '0.00', '', '', null);
INSERT INTO `product_item` VALUES ('51', 'CV9118', 'Canvas 91 x 18', '1', '2012-11-16 11:44:05', '1', '2012-11-29 15:17:55', null, '1', '3', '8', 'CV', null, '1.00', '1.00', '3', null, null, '1.00', '1.00', null, '16.38', '1.00', '18.00', '91.00', null, '0.000', '', '1', '4', '69', '673000.0000', '2012-11-01', '673000.0000', null, '0.00', '0.00', '', '', '110');
INSERT INTO `product_item` VALUES ('52', 'DRB', 'Drum đen', '1', '2012-11-29 18:48:50', '1', '2012-11-29 18:59:43', null, '1', '3', '9', 'MX', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '1', '69', '6930000.0000', '2012-11-29', '6930000.0000', null, '0.00', '0.00', '', '', '14');
INSERT INTO `product_item` VALUES ('53', 'DRY', 'Drum vàng', '1', '2012-11-29 18:49:35', '1', '2012-11-29 18:57:47', null, '1', '3', '9', 'MX', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '1', '69', '5174000.0000', '2012-11-29', '5174000.0000', null, '0.00', '0.00', '', '', '15');
INSERT INTO `product_item` VALUES ('54', 'DRM', 'Drum đỏ', '1', '2012-11-29 18:50:38', '1', '2012-11-29 18:57:48', null, '1', '3', '9', 'MX', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '1', '69', '5174000.0000', '2012-11-29', '5174000.0000', null, '0.00', '0.00', '', '', '16');
INSERT INTO `product_item` VALUES ('55', 'DRC', 'Drum xanh', '1', '2012-11-29 18:54:38', '1', '2012-11-29 18:57:47', null, '1', '3', '9', 'MX', null, '1.00', '1.00', '173', null, null, '1.00', '1.00', null, '0.00', '1.00', '0.00', '0.00', null, '0.000', '', '1', '1', '69', '5174000.0000', '2012-11-29', '5174000.0000', null, '0.00', '0.00', '', '', '17');
INSERT INTO `product_item` VALUES ('56', 'FO10', 'Fomat 10 ly', '1', '2012-11-30 11:55:06', '1', '2012-11-30 11:59:08', null, '1', '3', '8', 'FO', null, '1.00', '1.00', '174', null, null, '1.00', '1.00', null, '28.80', '1.00', '24.00', '120.00', null, '0.500', '', '1', '2', '69', '460000.0000', '2012-11-30', '460000.0000', null, '0.00', '0.00', '', '', '100');

-- ----------------------------
-- Table structure for `product_type`
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type` (
  `id` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `isM` bit(1) NOT NULL DEFAULT b'1',
  `parent` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_type
-- ----------------------------
INSERT INTO `product_type` VALUES ('10G', 'Giấy 10 In láng', '', '10 in');
INSERT INTO `product_type` VALUES ('10L', 'Giấy 10 In lụa', '', '10 in');
INSERT INTO `product_type` VALUES ('12G', 'Giấy 12 in láng', '', '12 in');
INSERT INTO `product_type` VALUES ('24G', 'Giấy 24 in láng', '', 'GLO');
INSERT INTO `product_type` VALUES ('24L', 'Giấy 24 in lụa', '', 'GLO');
INSERT INTO `product_type` VALUES ('30G', 'Giấy 30 in láng', '', 'GLO');
INSERT INTO `product_type` VALUES ('30L', 'Giấy 30 in lụa', '', 'GLO');
INSERT INTO `product_type` VALUES ('50G', 'Giấy 50 in láng', '', 'GLO');
INSERT INTO `product_type` VALUES ('50L', 'Giấy 50 in lụa', '', 'GLO');
INSERT INTO `product_type` VALUES ('5G', 'Giấy 5 in láng', '', '5 in');
INSERT INTO `product_type` VALUES ('5L', 'Giấy 5 in lụa', '', '5 in');
INSERT INTO `product_type` VALUES ('6G', 'Giấy 6 in láng', '', '6 in');
INSERT INTO `product_type` VALUES ('6L', 'Giấy 6 in lụa', '', '6 in');
INSERT INTO `product_type` VALUES ('8G', 'Giấy 8 in láng', '', '8 in');
INSERT INTO `product_type` VALUES ('8L', 'Giấy 8 in lụa', '', '8 in');
INSERT INTO `product_type` VALUES ('BK', 'Backit film', '', 'BK');
INSERT INTO `product_type` VALUES ('CO', 'Giấy Couche', '', 'CO');
INSERT INTO `product_type` VALUES ('CV', 'Canvas', '', 'CV');
INSERT INTO `product_type` VALUES ('FO', 'Fomat', '', 'FO');
INSERT INTO `product_type` VALUES ('FT', 'Film trong', '', 'FT');
INSERT INTO `product_type` VALUES ('GA', 'Giấy ảnh láng', '', 'GA');
INSERT INTO `product_type` VALUES ('HCL', 'Hóa chất lớn', '', 'HCL');
INSERT INTO `product_type` VALUES ('HCN', 'Hóa chất lab', '', 'HCN');
INSERT INTO `product_type` VALUES ('MC', 'Mica', '', 'MC');
INSERT INTO `product_type` VALUES ('ME', 'Metalit', '', 'ME');
INSERT INTO `product_type` VALUES ('MU', 'Mực UV', '', 'MU');
INSERT INTO `product_type` VALUES ('MX', 'Mực Xerox', '', 'MX');
INSERT INTO `product_type` VALUES ('PPC', 'Nhựa PP có keo', '', 'PPC');
INSERT INTO `product_type` VALUES ('PPK', 'Nhựa PP không keo', '', 'PPK');

-- ----------------------------
-- Table structure for `product_uom`
-- ----------------------------
DROP TABLE IF EXISTS `product_uom`;
CREATE TABLE `product_uom` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_uom
-- ----------------------------
INSERT INTO `product_uom` VALUES ('172', 'Cái');
INSERT INTO `product_uom` VALUES ('1', 'Cây');
INSERT INTO `product_uom` VALUES ('173', 'Hộp');
INSERT INTO `product_uom` VALUES ('2', 'Lít');
INSERT INTO `product_uom` VALUES ('5', 'Mét');
INSERT INTO `product_uom` VALUES ('175', 'Mét 2');
INSERT INTO `product_uom` VALUES ('3', 'Roll');
INSERT INTO `product_uom` VALUES ('174', 'Tấm');
INSERT INTO `product_uom` VALUES ('4', 'Thùng');
INSERT INTO `product_uom` VALUES ('176', 'Tờ');

-- ----------------------------
-- Table structure for `product_uom_convert`
-- ----------------------------
DROP TABLE IF EXISTS `product_uom_convert`;
CREATE TABLE `product_uom_convert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `uom_id` int(11) NOT NULL,
  `convert_to_id` int(11) NOT NULL,
  `factor` decimal(10,9) NOT NULL,
  `rounding` decimal(10,0) DEFAULT NULL,
  `Note` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uom_id` (`uom_id`),
  KEY `convert_to_id` (`convert_to_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_uom_convert_ibfk_2` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`),
  CONSTRAINT `product_uom_convert_ibfk_3` FOREIGN KEY (`convert_to_id`) REFERENCES `product_uom` (`id`),
  CONSTRAINT `product_uom_convert_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_uom_convert
-- ----------------------------
INSERT INTO `product_uom_convert` VALUES ('4', '5', '3', '1', '9.999999999', '0', '1');
INSERT INTO `product_uom_convert` VALUES ('5', '5', '3', '4', '9.999999999', '2', '2');
INSERT INTO `product_uom_convert` VALUES ('6', '4', '5', '3', '0.005376340', '1', '');
INSERT INTO `product_uom_convert` VALUES ('8', '6', '3', '2', '1.000000000', '0', '');

-- ----------------------------
-- Table structure for `purchase_order`
-- ----------------------------
DROP TABLE IF EXISTS `purchase_order`;
CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `po_num` varchar(50) NOT NULL,
  `po_date` date DEFAULT NULL,
  `inv_date` date DEFAULT NULL,
  `inv_num` varchar(50) DEFAULT NULL,
  `supplier_id` int(22) DEFAULT NULL,
  `payment_term` tinyint(4) DEFAULT NULL,
  `paid` bit(1) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `branch_id` tinyint(11) NOT NULL,
  `wh_id` int(11) DEFAULT NULL,
  `amount_total` decimal(10,0) DEFAULT NULL,
  `amount_tax` decimal(10,0) DEFAULT NULL,
  `shipped` bit(1) DEFAULT NULL COMMENT 'Received',
  PRIMARY KEY (`id`),
  KEY `wh_id` (`wh_id`),
  KEY `branch_id` (`branch_id`),
  KEY `supplier_id` (`supplier_id`),
  CONSTRAINT `purchase_order_ibfk_2` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`),
  CONSTRAINT `purchase_order_ibfk_3` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`),
  CONSTRAINT `purchase_order_ibfk_4` FOREIGN KEY (`supplier_id`) REFERENCES `sys_partner` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of purchase_order
-- ----------------------------

-- ----------------------------
-- Table structure for `purchase_order_line`
-- ----------------------------
DROP TABLE IF EXISTS `purchase_order_line`;
CREATE TABLE `purchase_order_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `po_id` int(50) DEFAULT NULL,
  `product_id` int(20) DEFAULT NULL,
  `qty` decimal(10,0) DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `price` decimal(19,2) DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `wh_id` int(20) DEFAULT NULL,
  `lenght` float DEFAULT NULL,
  `width` float DEFAULT NULL,
  `thickness` float DEFAULT NULL,
  `note` text CHARACTER SET utf8,
  `amount_total` decimal(19,2) DEFAULT NULL,
  `amount_vat` decimal(19,2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `uom_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id, po_id` (`id`,`po_id`) USING BTREE,
  KEY `po_id` (`po_id`),
  KEY `product_id` (`product_id`),
  KEY `wh_id` (`wh_id`),
  KEY `discount` (`discount`),
  KEY `uom_id` (`uom_id`),
  CONSTRAINT `purchase_order_line_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `purchase_order` (`id`),
  CONSTRAINT `purchase_order_line_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of purchase_order_line
-- ----------------------------

-- ----------------------------
-- Table structure for `rights`
-- ----------------------------
DROP TABLE IF EXISTS `rights`;
CREATE TABLE `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`),
  CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rights
-- ----------------------------

-- ----------------------------
-- Table structure for `sales`
-- ----------------------------
DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `id` int(5) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `item` varchar(50) DEFAULT NULL,
  `value` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales
-- ----------------------------
INSERT INTO `sales` VALUES ('1', 'Eustaquio Rangel', 'Sao Jose do Rio Preto, SP', 'Book', 'Linux Programming', '25.00');
INSERT INTO `sales` VALUES ('1', 'Eustaquio Rangel', 'Sao Jose do Rio Preto, SP', 'Book', 'Design Patterns', '35.00');
INSERT INTO `sales` VALUES ('1', 'Eustaquio Rangel', 'Sao Jose do Rio Preto, SP', 'CD', 'Primus - Antipop', '12.00');
INSERT INTO `sales` VALUES ('1', 'Eustaquio Rangel', 'Sao Jose do Rio Preto, SP', 'CD', 'Machine Head - Elegies', '12.00');
INSERT INTO `sales` VALUES ('1', 'Eustaquio Rangel', 'Sao Jose do Rio Preto, SP', 'DVD', 'V for Vendetta', '20.00');
INSERT INTO `sales` VALUES ('2', 'Ana Carolina', 'Sao Jose do Rio Preto, SP', 'Book', 'Photoshop', '22.50');
INSERT INTO `sales` VALUES ('2', 'Ana Carolina', 'Sao Jose do Rio Preto, SP', 'Book', 'Learning Ubuntu Linux', '15.00');
INSERT INTO `sales` VALUES ('2', 'Ana Carolina', 'Sao Jose do Rio Preto, SP', 'CD', 'Ramones - Loco Live', '12.00');
INSERT INTO `sales` VALUES ('3', 'Andre Kada', 'Sao Paulo, SP', 'CD', 'Kreator - Violent Revolutions', '15.00');
INSERT INTO `sales` VALUES ('3', 'Andre Kada', 'Sao Paulo, SP', 'CD', 'Kreator - Enemy of God', '15.00');

-- ----------------------------
-- Table structure for `sales_order`
-- ----------------------------
DROP TABLE IF EXISTS `sales_order`;
CREATE TABLE `sales_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `so_num` varchar(20) NOT NULL DEFAULT '',
  `so_date` date DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `customer_id` int(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `total_amt` double(19,2) DEFAULT NULL,
  `vat_amt` double(19,2) DEFAULT NULL,
  `has_invoce` bit(1) DEFAULT NULL,
  `inv_num` varchar(50) DEFAULT NULL,
  `paid` bit(1) DEFAULT NULL,
  `inv_date` date DEFAULT NULL,
  `saleman` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `branch_id` tinyint(11) NOT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `saleman` (`saleman`),
  KEY `customer_id` (`customer_id`),
  KEY `branch_id` (`branch_id`),
  CONSTRAINT `sales_order_ibfk_2` FOREIGN KEY (`saleman`) REFERENCES `sale_saleman` (`saleman`),
  CONSTRAINT `sales_order_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `sys_partner` (`id`),
  CONSTRAINT `sales_order_ibfk_4` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sales_order
-- ----------------------------

-- ----------------------------
-- Table structure for `sales_order_line`
-- ----------------------------
DROP TABLE IF EXISTS `sales_order_line`;
CREATE TABLE `sales_order_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `so_id` int(50) DEFAULT NULL,
  `product_id` int(20) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(19,2) DEFAULT NULL,
  `qty` float DEFAULT NULL,
  `uom_id` int(15) DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `wh_id` int(20) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`so_id`),
  KEY `item_id` (`product_id`),
  KEY `so_id` (`so_id`),
  KEY `wh_id` (`wh_id`),
  KEY `uom_id` (`uom_id`),
  CONSTRAINT `sales_order_line_ibfk_2` FOREIGN KEY (`so_id`) REFERENCES `sales_order` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sales_order_line
-- ----------------------------

-- ----------------------------
-- Table structure for `sale_saleman`
-- ----------------------------
DROP TABLE IF EXISTS `sale_saleman`;
CREATE TABLE `sale_saleman` (
  `saleman` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `salemanname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `branch_id` tinyint(11) NOT NULL,
  PRIMARY KEY (`saleman`),
  KEY `branch_id` (`branch_id`),
  CONSTRAINT `sale_saleman_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sale_saleman
-- ----------------------------

-- ----------------------------
-- Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) NOT NULL DEFAULT 'system',
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_key` (`category`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'hr', 'color_events', 's:97:\"#358575\r\n#bdbf75\r\n#c9ccf7\r\n#0d20f7\r\n#918c03\r\n#734673\r\n#08f56f\r\n#054d69\r\n#fcf408\r\n#a899f2\r\n#f70000\";');
INSERT INTO `settings` VALUES ('2', 'hr', 'color_event_birthday', 's:7:\"#4737fa\";');
INSERT INTO `settings` VALUES ('3', 'hr', 'color_event_weddingday', 's:7:\"#ff66d6\";');
INSERT INTO `settings` VALUES ('4', 'hr', 'color_event_holiday', 's:7:\"#4a98cc\";');
INSERT INTO `settings` VALUES ('7', 'hr', 'preview_color1', 's:7:\"#54d472\";');

-- ----------------------------
-- Table structure for `sitecontent`
-- ----------------------------
DROP TABLE IF EXISTS `sitecontent`;
CREATE TABLE `sitecontent` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL,
  `authorid` varchar(255) DEFAULT NULL,
  `language` varchar(5) NOT NULL,
  `position` int(10) unsigned NOT NULL,
  `metatags` text,
  `redirect` varchar(255) DEFAULT NULL,
  `visible` int(10) NOT NULL,
  `title_url` varchar(80) NOT NULL,
  `title_browser` varchar(80) NOT NULL,
  `title` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `createtime` int(11) DEFAULT NULL,
  `updatetime` int(11) DEFAULT NULL,
  `images` varchar(4096) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `views` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`,`language`),
  KEY `sitecontent_title` (`title`),
  KEY `sitecontent_title_url` (`title_url`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sitecontent
-- ----------------------------
INSERT INTO `sitecontent` VALUES ('1', '0', '1', 'fgfdg', '0', '{\"description\":\"\",\"keywords\":\"\",\"author\":\"\",\"revised\":\"\"}', '', '3', 'fgfdgdf f f ', 'fgfdgdf f f ', 'fgfdgdf f f ghhhhhhhhhhhh opkpkpkpk', null, 'f fd gdf', '1341244780', '1341244780', null, 'fgdf', '0');

-- ----------------------------
-- Table structure for `sys_branch`
-- ----------------------------
DROP TABLE IF EXISTS `sys_branch`;
CREATE TABLE `sys_branch` (
  `id` tinyint(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_branch
-- ----------------------------
INSERT INTO `sys_branch` VALUES ('1', 'Minh Tâm', 'sa', 'sdsa');

-- ----------------------------
-- Table structure for `sys_company`
-- ----------------------------
DROP TABLE IF EXISTS `sys_company`;
CREATE TABLE `sys_company` (
  `id` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `logo` varbinary(255) DEFAULT NULL,
  `header` text CHARACTER SET utf8,
  `header1` text CHARACTER SET utf8,
  `header2` text CHARACTER SET utf8,
  `company_slogan` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_company
-- ----------------------------
INSERT INTO `sys_company` VALUES ('1', 'Minh Tam', '', 'sdas', 'sd', 'sd', '', '', '');

-- ----------------------------
-- Table structure for `sys_fields`
-- ----------------------------
DROP TABLE IF EXISTS `sys_fields`;
CREATE TABLE `sys_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelName` varchar(250) DEFAULT NULL,
  `fieldName` varchar(250) DEFAULT NULL,
  `attributeLabel` varchar(250) DEFAULT NULL,
  `modified` int(11) DEFAULT '0',
  `custom` int(11) DEFAULT '1',
  `type` varchar(20) DEFAULT 'varchar',
  `required` tinyint(4) DEFAULT '0',
  `readOnly` tinyint(4) DEFAULT '0',
  `linkType` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `modelName` (`modelName`)
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sys_fields
-- ----------------------------
INSERT INTO `sys_fields` VALUES ('1', 'Department', 'id', 'Mã', '0', '1', 'int', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('2', 'Department', 'name', 'Phòng Ban', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('3', 'TypeRelation', 'id', 'Mã', '0', '1', 'int', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('4', 'TypeRelation', 'name', 'Loại quan hệ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('5', 'User', 'username', 'Mã NV', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('7', 'User', 'password', 'Mật khẩu', '0', '1', 'varchar', '0', '0', '');
INSERT INTO `sys_fields` VALUES ('8', 'User', 'createtime', 'createtime', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('9', 'User', 'lastvisit', 'User', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('10', 'User', 'superuser', 'superuser', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('11', 'User', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('12', 'User', 'id', 'id', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('13', 'Company', 'id', 'Mã', '0', '1', 'int', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('14', 'Company', 'name', 'Tên công ty', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('15', 'Company', 'logo', 'Logo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('16', 'Company', 'header', 'Tiêu đề', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('17', 'Company', 'header1', 'Tiều đề 1', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('18', 'Company', 'header2', 'Tiêu đề 2', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('19', 'Company', 'company_slogan', 'Slogan', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('20', 'Company', 'address', 'Địa chỉ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('21', 'Company', 'tel', 'tel', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('22', 'Warehouse', 'id', 'id', '0', '1', 'int', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('23', 'Warehouse', 'name', 'Tên kho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('24', 'Warehouse', 'active', 'Sử dụng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('25', 'Warehouse', 'branch_id', 'Chi nhánh', '0', '1', 'int', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('26', 'Warehouse', 'create_uid', 'Người tạo', '0', '1', 'int', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('27', 'Warehouse', 'create_date', 'Ngày tạo', '0', '1', 'date', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('28', 'Uom', 'name', 'Đơn vị tính', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('29', 'ProductType', 'id', 'Mã loại', '0', '1', 'varchar', '0', '0', '');
INSERT INTO `sys_fields` VALUES ('30', 'ProductType', 'name', 'Tên loại', '0', '1', 'varchar', '0', '0', '');
INSERT INTO `sys_fields` VALUES ('31', 'Product', 'code', 'Mã', '0', '1', 'varchar', '0', '0', '');
INSERT INTO `sys_fields` VALUES ('32', 'Product', 'name', 'Tên hàng hóa', '0', '1', 'varchar', '0', '0', '');
INSERT INTO `sys_fields` VALUES ('33', 'Product', 'category_id', 'Nhóm hàng hóa', '0', '1', 'varchar', '0', '0', '');
INSERT INTO `sys_fields` VALUES ('34', 'Product', 'type_id', 'Loại vật tư', '0', '1', 'varchar', '0', '0', '');
INSERT INTO `sys_fields` VALUES ('35', 'Product', 'class', 'Tính chất', '0', '1', 'varchar', '0', '0', '');
INSERT INTO `sys_fields` VALUES ('36', 'Product', 'uom_id', 'ĐVT chuẩn', '0', '1', 'varchar', '0', '0', '');
INSERT INTO `sys_fields` VALUES ('37', 'Product', 'sale_uom_id', 'Đơn vị tính bán', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('38', 'Product', 'po_uom_id', 'ĐVT mua', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('39', 'Product', 'work_uom_id', 'Đơn vị tính cho SX', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('40', 'Product', 'length', 'Dài (mét)', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('41', 'Product', 'width', 'Rộng(cm)', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('42', 'Product', 'thickness', 'Độ dày (cm)', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('43', 'Product', 'note', 'Mô tả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('44', 'Product', 'default_wh_id', 'Chọn kho mặc định', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('45', 'Warehousein', 'num', 'Số phiếu', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('46', 'Warehousein', 'date', 'Ngày nhập', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('47', 'Warehousein', 'note', 'Ghi chú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('48', 'Warehousein', 'invdate', 'Ngày hóa đơn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('49', 'Warehousein', 'invnum', 'Số hóa đơn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('50', 'Warehousein', 'supplier_id', 'Nhà cung cấp', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('51', 'Warehousein', 'paymentterm', 'Thanh toán', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('52', 'Warehousein', 'paid', 'Đã trả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('53', 'Warehousein', 'create_date', 'Ngày tạo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('54', 'Warehousein', 'create_uid', 'Nhân viên nhập', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('55', 'Warehousein', 'update_date', 'Ngày chỉnh sửa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('56', 'Warehousein', 'update_uid', 'Người chỉnh sửa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('57', 'Warehousein', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('58', 'Warehousein', 'branch_id', 'Chi nhánh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('59', 'Warehousein', 'amounttotal', 'Tổng tiền', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('60', 'Warehousein', 'amounttax', 'Tiền VAT', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('61', 'Warehouseinline', 'product_id', 'Mặt hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('62', 'Warehouseinline', 'qty', 'Số lượng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('63', 'Warehouseinline', 'description', 'Mô tả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('64', 'Warehouseinline', 'price', 'Đơn giá', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('65', 'Warehouseinline', 'discount', 'Giảm giá %', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('66', 'Warehouseinline', 'wh_id', 'Kho hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('67', 'Warehouseinline', 'lenght', 'Dài (m)', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('68', 'Warehouseinline', 'width', 'Rộng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('69', 'Warehouseinline', 'thickness', 'Độ dầy', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('70', 'Warehouseinline', 'subtotal', 'Tổng tiền', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('71', 'Warehouseinline', 'subtvat', 'VAT', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('72', 'Warehouseinline', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('73', 'Warehouseinline', 'uom_id', 'ĐVT', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('74', 'Warehouseinline', 'update_uid', 'Người chỉnh sửa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('75', 'Warehouseinline', 'update_date', 'Ngày sửa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('76', 'Warehouseinline', 'create_uid', 'Người tạo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('77', 'Warehouseinline', 'create_date', 'Ngày tạo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('78', 'Warehousein', 'displayStatus', 'Tình Trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('79', 'Product', 'active', 'Sử dụng?', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('80', 'Warehouseinline', 'oum_id', 'Đ.V.T', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('81', 'Warehouseout', 'num', 'Số phiếu xuất', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('82', 'Warehouseout', 'date', 'Ngày xuất', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('83', 'Warehouseout', 'note', 'Lý do xuất', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('84', 'Warehouseout', 'type', 'Xuất cho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('85', 'Warehouseout', 'create_date', 'Ngày tạo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('86', 'Warehouseout', 'create_uid', 'Người tạo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('87', 'Warehouseout', 'update_date', 'Ngày sửa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('88', 'Warehouseout', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('89', 'Warehouseout', 'update_uid', 'Người sửa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('90', 'Warehouseout', 'branch_id', 'Chi nhánh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('91', 'Warehouseout', 'amounttotal', 'Tổng tiền', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('92', 'Warehouseoutline', 'product_id', 'Hàng hóa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('93', 'Warehouseoutline', 'qty', 'Số lượng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('94', 'Warehouseoutline', 'description', 'Mô tả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('95', 'Warehouseoutline', 'price', 'Đơn giá', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('96', 'Warehouseoutline', 'wh_id', 'Kho hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('97', 'Warehouseoutline', 'subtotal', 'Thành tiền', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('98', 'Warehouseoutline', 'uom_id', 'ĐVT', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('99', 'Warehouseout', 'displayStatus', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('100', 'Transfer', 'num', 'Số phiếu chuyển', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('101', 'Transfer', 'date', 'Ngày chuyển', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('102', 'Transfer', 'description', 'Mô tả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('103', 'Transfer', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('104', 'Transfer', 'create_uid', 'Người tạo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('105', 'Transfer', 'create_date', 'Ngày tạo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('106', 'Transfer', 'update_uid', 'Người chỉnh sửa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('107', 'Transfer', 'update_date', 'Ngày chỉnh sửa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('108', 'Transfer', 'branch_id', 'Chi nhánh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('109', 'Transferline', 'product_id', 'Mã hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('110', 'Transferline', 'desciption', 'Tên hàng hóa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('111', 'Transferline', 'uom_id', 'ĐVT', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('112', 'Transferline', 'qty', 'Số lượng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('113', 'Transferline', 'from_wh_id', 'Từ kho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('114', 'Transferline', 'to_wh_id', 'Đến kho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('115', 'Transfer', 'displayStatus', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('116', 'Category', 'parent_id', 'Thuộc nhóm', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('117', 'Category', 'name', 'Tên nhóm', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('118', 'Product', 'pouom_radio', ' ss', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('119', 'Product', 'pouom_radio_std', ' sss', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('120', 'Product', 'so_uom_id', 'ĐVT bán', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('121', 'Partner', 'code', 'Mã đối tác', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('122', 'Partner', 'name', 'Tên đối tác', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('123', 'Partner', 'active', 'Có sử dụng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('124', 'Partner', 'customer', 'Là khách hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('125', 'Partner', 'supplier', 'Là nhà cung cấp', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('126', 'Partner', 'comment', 'Mô tả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('127', 'Partner', 'branch_id', 'Chi nhánh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('128', 'Warehousein', 'wh_id', 'Kho hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('129', 'Warehouseout', 'wh_id', 'Kho hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('130', 'Transfer', 'from_wh_id', 'Từ kho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('131', 'Transfer', 'to_wh_id', 'Đến kho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('132', 'Category', 'hascounter', 'Theo dõi counter', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('133', 'Employee', 'firstname', 'Họ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('134', 'Employee', 'middlename', 'Tên đệm', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('135', 'Employee', 'lastname', 'Tên ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('136', 'Employee', 'code', 'Mã nhân viên', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('137', 'Employee', 'birthday', 'Ngày sinh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('138', 'Employee', 'plate_of_birth', 'Nơi sinh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('139', 'Employee', 'sex', 'Giới tính', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('140', 'Employee', 'identification', 'CMND số', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('141', 'Employee', 'identification_date', 'Ngày cấp', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('142', 'Employee', 'identification_plate', 'Nơi cấp', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('143', 'Employee', 'home_phone', 'Điện thoại bàn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('144', 'Employee', 'mobile_phone', 'Điện thoại di động', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('145', 'Employee', 'probationary_date', 'Ngày thử việc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('146', 'Employee', 'official_register_date', 'Ngày  làm chính thức', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('147', 'Employee', 'address', 'Địa chỉ thường trú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('148', 'Employee', 'city', 'Tỉnh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('149', 'Employee', 'district', 'Quận/Huyện', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('150', 'Employee', 'address_tmp', 'Địa chỉ tạm trú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('151', 'Employee', 'city_tmp', 'Tỉnh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('152', 'Employee', 'district_tmp', 'Quận/Huyện', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('153', 'Employee', 'type', 'Lao động', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('154', 'Education', 'no_levelofedu', '', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('155', 'Employee', 'shop_id', 'Cửa hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('156', 'Employee', 'position_id', 'Chức Vụ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('157', 'Organization', 'no_department_id', 'Phòng ban', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('158', 'Employee', 'department_id', 'Phòng ban', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('159', 'Employee', 'job_id', 'Chức vụ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('160', 'District', 'city_id', 'Tỉnh/Thành Phố', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('161', 'District', 'name', 'Quận/Huyện', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('162', 'Job', 'name', 'Chức Vụ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('163', 'StudyField', 'name', 'Ngành Học', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('164', 'Levelofedu', 'name', 'Trình Độ Văn Hóa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('165', 'Shop', 'name', 'Cửa Hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('166', 'Shop', 'address', 'Địa Chỉ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('167', 'Shop', 'phone', 'Số Điện Thoại', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('168', 'Shop', 'email', 'Email', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('169', 'City', 'name', 'Tỉnh/Thành Phố', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('170', 'City', 'code_city', 'Mã Tỉnh/Thành Phố', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('171', 'Employee', 'district_id', 'Quận/huyện', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('172', 'Employee', 'city_id', 'Tỉnh/thành phố', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('173', 'Employee', 'city_tmp_id', 'Tỉnh/thành phố', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('174', 'Employee', 'district_tmp_id', 'Quận', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('205', 'Employee', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('206', 'Employee', 'image', 'Hình', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('207', 'Stock', 'value_of_stock', 'Vốn cổ phần', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('208', 'Stock', 'date', 'Ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('209', 'Stock', 'stock_up', 'Tăng vốn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('210', 'Stock', 'stock_dow', 'Giảm vốn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('212', 'Stock', 'description', 'Lý do', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('213', 'Employee', 'description_status', 'Lý do nghỉ việc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('214', 'Employee', 'date_status', 'Ngày nghỉ việc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('215', 'Employee', 'description_layoff', 'Lý do nghỉ việc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('216', 'Employee', 'date_layoff', 'Ngày nghỉ việc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('217', 'Employee', 'levelofedu_id', 'Trình độ văn hóa', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('218', 'Employee', 'field_edu', 'Chuyên môn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('219', 'History', 'fromdate', 'Ngày chuyển ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('220', 'History', 'description', 'Ghi chú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('221', 'Shift', 'code', 'Mã ca trực ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('222', 'Shift', 'name', 'Tên ca trực', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('223', 'Shift', 'fodate', 'Từ ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('224', 'Shift', 'tdate', 'Đến ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('225', 'Shift', 'department_id', 'Bộ phận', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('226', 'Shift', 'isovernight', 'Qua đêm', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('227', 'Shift', 'starttime', 'Giờ vào', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('228', 'Shift', 'endtime', 'Giờ ra', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('229', 'Shift', 'note', 'Ghi chú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('230', 'Shift', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('231', 'Eventcalendar', 'description', 'Mô tả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('232', 'Eventcalendar', 'startDate', 'Ngày bắt đầu', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('233', 'Eventcalendar', 'dueDate', 'Ngày kết thúc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('234', 'Eventcalendar', 'visibility', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('235', 'Eventcalendar', 'color', 'Chọn màu', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('236', 'Eventcalendar', 'allDay', 'Cả ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('237', 'Shift', 'shift_plan_id', 'Chu kỳ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('238', 'ShiftPlan', 'department_id', 'Bộ phận', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('239', 'ShiftPlan', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('240', 'ShiftPlan', 'startdate', 'Ngày bắt đầu', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('241', 'ShiftPlan', 'enddate', 'Ngày kết thúc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('242', 'ShiftPlan', 'note', 'Ghi chú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('243', 'ShiftPlan', 'name', 'Tên', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('244', 'Settings', 'color_event_birthday', 'Màu sinh nhật nè', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('245', 'Settings', 'color_events', 'Màu sự kiện', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('246', 'DateRange', 'startdate', 'Ngày bắt đầu', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('247', 'DateRange', 'enddate', 'Ngày kết thúc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('248', 'Warehouseout', 'type_id', 'Xuất cho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('249', 'Eventcalendar', 'startTime', 'Giờ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('250', 'Eventcalendar', 'endTime', 'Giờ', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('251', 'Shift', 'colorEvent', 'Chọn màu', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('252', 'Share', 'valueofstock', 'Giá trị 1 cổ phần', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('253', 'Share', 'totalassets', 'Giá trị', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('254', 'Share', 'note', 'Ghi chú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('255', 'Batch', 'code', 'Mã', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('256', 'Batch', 'name', 'Tên', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('257', 'Batch', 'date', 'Ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('258', 'Batch', 'qty', 'Số cổ phần', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('259', 'Batch', 'amt', 'Giá trị', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('260', 'Batch', 'note', 'Ghi chú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('261', 'Transaction', 'date', 'Ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('262', 'Transaction', 'batch_id', 'Đợt phát hành', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('263', 'Transaction', 'emp_id', 'Nhân viên', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('264', 'Transaction', 'amt', 'Giá trị', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('265', 'Transaction', 'qty', 'Số cổ phần', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('266', 'Product', 'minqtystock', 'Định mức tồn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('267', 'ProductType', 'parent', 'Loại vật tư', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('268', 'Product', 'hascounter', 'Số counter', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('269', 'Limit', 'qtyLimit', 'Định mức tồn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('270', 'WarehouseoutType', 'name', 'Tên', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('271', 'WarehouseoutType', 'note', 'Mô tả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('272', 'WarehouseoutType', 'wh_req', 'Kho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('273', 'Partner', 'tel', 'Điện thoại', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('274', 'Partner', 'create_date', 'Ngày tạo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('275', 'Warehouse', 'default_wh_in', 'Mặc định nhập', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('276', 'Warehouse', 'default_wh_out', 'Mặc định xuất', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('277', 'CheckInventory', 'date', 'Ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('278', 'CheckInventory', 'num', 'Số phiếu', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('279', 'CheckInventory', 'whout_id', 'Kho xuất hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('280', 'CheckInventory', 'whcheck_id', 'Kho kiểm kê', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('281', 'CheckInventory', 'note', 'Ghi chú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('282', 'CheckInventory', 'create_uid', 'Nhân viên nhập', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('283', 'CheckInventory', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('284', 'Category', 'index', 'Số thứ tự', '0', '1', 'varchar', '0', '0', null);

-- ----------------------------
-- Table structure for `sys_lookup`
-- ----------------------------
DROP TABLE IF EXISTS `sys_lookup`;
CREATE TABLE `sys_lookup` (
  `code` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  KEY `code` (`code`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_lookup
-- ----------------------------
INSERT INTO `sys_lookup` VALUES ('1', 'ProductClass', 'Hàng hóa', null);
INSERT INTO `sys_lookup` VALUES ('2', 'ProductClass', 'Dịch vụ', null);
INSERT INTO `sys_lookup` VALUES ('3', 'ProductClass', 'Nguyên liệu', null);
INSERT INTO `sys_lookup` VALUES ('4', 'ProductClass', 'Bán thành phẩm', null);
INSERT INTO `sys_lookup` VALUES ('5', 'ProductClass', 'Thành phẩm', null);
INSERT INTO `sys_lookup` VALUES ('6', 'ProductClass', 'Sản phẩm lắp ráp', null);
INSERT INTO `sys_lookup` VALUES ('0', 'PaymentTerm', null, null);

-- ----------------------------
-- Table structure for `sys_modelsettings`
-- ----------------------------
DROP TABLE IF EXISTS `sys_modelsettings`;
CREATE TABLE `sys_modelsettings` (
  `classname` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  PRIMARY KEY (`classname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sys_modelsettings
-- ----------------------------

-- ----------------------------
-- Table structure for `sys_partner`
-- ----------------------------
DROP TABLE IF EXISTS `sys_partner`;
CREATE TABLE `sys_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `customer` bit(1) DEFAULT NULL,
  `supplier` bit(1) DEFAULT NULL,
  `comment` text CHARACTER SET utf8,
  `branch_id` tinyint(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_partner
-- ----------------------------
INSERT INTO `sys_partner` VALUES ('22', 'MV', 'CTy CP Quốc Tế Minh Việt', '', '', '', '', '2012-10-25 15:32:56', '1', '2012-10-25 15:32:56', '1', '', '', '', '1');
INSERT INTO `sys_partner` VALUES ('24', 'HQ', 'Phan Hà Quảng', '0906 828 183', '', '', '', '2012-11-14 17:02:03', '1', '2012-11-16 10:32:00', '1', '', '', 'Số Tài Khoản 01012 NH ACN chi nhánh Tân Sơn Nhì', '1');
INSERT INTO `sys_partner` VALUES ('25', 'KK', 'CTy Kim Kiều', '0903 698 928', '', '', '', '2012-11-16 11:36:10', '1', '2012-11-16 11:36:10', '1', '', '', 'Bán vật tư inkjet, Cô Chân', '1');
INSERT INTO `sys_partner` VALUES ('26', 'KL', 'CTy Khang Lam', '0918 795 557', '', '', '', '2012-11-16 11:40:44', '1', '2012-11-16 11:40:44', '1', '', '', 'Vật tư Album và Inkjet Anh Lam', '1');
INSERT INTO `sys_partner` VALUES ('27', 'LS', 'Cửa hàng VTQC Lam Sơn', '0864 0590', '', '', '', '2012-11-30 11:51:07', '1', '2012-11-30 11:51:07', '1', '', '', '155 Lý Thường Kiệt P 6 Q Tân Bình', '1');

-- ----------------------------
-- Table structure for `sys_sequence`
-- ----------------------------
DROP TABLE IF EXISTS `sys_sequence`;
CREATE TABLE `sys_sequence` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number_next` bigint(20) DEFAULT NULL,
  `prefix` varchar(20) DEFAULT NULL,
  `suffix` varchar(20) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `branch_id` tinyint(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_sequence
-- ----------------------------
INSERT INTO `sys_sequence` VALUES ('1', 'Warehousein', null, '68', 'NVT', null, null, '1');
INSERT INTO `sys_sequence` VALUES ('2', 'Warehouseout', null, '70', 'XVT', null, null, '1');
INSERT INTO `sys_sequence` VALUES ('3', 'Transfer', null, '38', 'CVT', null, null, '1');
INSERT INTO `sys_sequence` VALUES ('4', 'CheckInventory', null, null, 'KCT', null, null, '1');

-- ----------------------------
-- Table structure for `tbl_columns`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_columns`;
CREATE TABLE `tbl_columns` (
  `id` varchar(100) NOT NULL,
  `data` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_columns
-- ----------------------------
INSERT INTO `tbl_columns` VALUES ('employee-grid_1', 'image||code||firstname||middlename||lastname||sex||mobile_phone||identification||shop_id||department_id||job_id||email||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('holidays-grid_1', 'description||startDate||dueDate||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('hr-employee-new-grid_1', 'code||firstname||middlename||lastname||birthday||mobile_phone||identification||shop_id||department_id||job_id||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('reports-grid_1', 'num||date||invnum||supplier||paymentterm||Mãhàng||product_code||uom||qty||price||subtotal||create_uid||branch_id||status||paid:boolean');
INSERT INTO `tbl_columns` VALUES ('transfer-grid_1', 'num||date||description||create_uid||create_date||update_uid||update_date||branch_id||status||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('warehousein-grid_1', 'date||num||supplier_id||amounttotal||create_uid||status||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('warehouseout-grid_1', 'num||date||note||type||create_uid||create_date||update_date||update_uid||branch_id||amounttotal||status||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('warehousindetails-grid_1', 'warehousein.num||warehousein.date||warehousein.invnum||paymentterm||paid||Mãhàng||product_code||uom||qty||price||subtotal');

-- ----------------------------
-- Table structure for `tbl_profiles`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_profiles`;
CREATE TABLE `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `middlename` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_profiles
-- ----------------------------
INSERT INTO `tbl_profiles` VALUES ('1', 'Admin', 'Administrator', '0000-00-00', '');
INSERT INTO `tbl_profiles` VALUES ('2', 'Demo', 'Demo', '0000-00-00', '');

-- ----------------------------
-- Table structure for `tbl_profiles_fields`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_profiles_fields`;
CREATE TABLE `tbl_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_profiles_fields
-- ----------------------------
INSERT INTO `tbl_profiles_fields` VALUES ('1', 'lastname', 'Last Name', 'VARCHAR', '50', '3', '1', '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', '1', '3');
INSERT INTO `tbl_profiles_fields` VALUES ('2', 'firstname', 'First Name', 'VARCHAR', '50', '3', '1', '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', '0', '3');
INSERT INTO `tbl_profiles_fields` VALUES ('3', 'birthday', 'Birthday', 'DATE', '0', '0', '2', '', '', '', '', '0000-00-00', 'UWjuidate', '{\"ui-theme\":\"redmond\"}', '3', '2');
INSERT INTO `tbl_profiles_fields` VALUES ('5', 'middlename', 'middle name', 'VARCHAR', '255', '0', '0', '', '', '', '', '', '', '', '0', '3');

-- ----------------------------
-- Table structure for `tbl_settings`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_settings`;
CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) NOT NULL DEFAULT 'system',
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_key` (`category`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_settings
-- ----------------------------
INSERT INTO `tbl_settings` VALUES ('1', 'hr', 'color_events', 's:2:\"ss\";');
INSERT INTO `tbl_settings` VALUES ('2', 'test', 'aNewItem', 's:20:\"aNewValueOverwritten\";');
INSERT INTO `tbl_settings` VALUES ('3', 'test', 'itemAlreadySet', 's:18:\"rewrite this value\";');
INSERT INTO `tbl_settings` VALUES ('4', 'hr', 'color_event_birthday', 's:4:\"#888\";');

-- ----------------------------
-- Table structure for `tbl_users`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `branch_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', 'd7512e96eab65502afb469aa1be8e02a', '1261146094', '1357617081', '1', '1', '1');
INSERT INTO `tbl_users` VALUES ('2', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example1.com', '099f825543f7850cc038b90aaff39fac', '1261146096', '1350921314', '0', '1', '1');

-- ----------------------------
-- View structure for `inv_warehouseindetail`
-- ----------------------------
DROP VIEW IF EXISTS `inv_warehouseindetail`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `inv_warehouseindetail` AS select `inv_warehouseinline`.`id` AS `id`,`inv_warehouseinline`.`product_id` AS `product_id`,`inv_warehouseinline`.`qty` AS `qty`,`inv_warehouseinline`.`description` AS `description`,`inv_warehouseinline`.`price` AS `price`,`inv_warehouseinline`.`discount` AS `discount`,`inv_warehouseinline`.`length` AS `length`,`inv_warehouseinline`.`width` AS `width`,`inv_warehouseinline`.`thickness` AS `thickness`,`inv_warehouseinline`.`subtotal` AS `subtotal`,`inv_warehouseinline`.`subvat` AS `subvat`,`inv_warehousein`.`num` AS `num`,`inv_warehousein`.`date` AS `date`,`inv_warehousein`.`note` AS `note`,`inv_warehousein`.`invdate` AS `invdate`,`inv_warehousein`.`invnum` AS `invnum`,`inv_warehousein`.`supplier_id` AS `supplier_id`,`inv_warehousein`.`paymentterm` AS `paymentterm`,`inv_warehousein`.`wh_id` AS `wh_id`,`inv_warehousein`.`paid` AS `paid`,`inv_warehousein`.`create_date` AS `create_date`,`inv_warehousein`.`create_uid` AS `create_uid`,`inv_warehousein`.`update_date` AS `update_date`,`inv_warehousein`.`update_uid` AS `update_uid`,`inv_warehousein`.`status` AS `status`,`inv_warehousein`.`branch_id` AS `branch_id`,`inv_warehousein`.`amounttotal` AS `amounttotal`,`inv_warehousein`.`amounttax` AS `amounttax`,`sys_partner`.`code` AS `partner_code`,`sys_partner`.`name` AS `partner_name`,`product_item`.`code` AS `product_code`,`product_item`.`name` AS `product_name`,`inv_warehouse`.`name` AS `wh_name` from ((((`inv_warehousein` join `inv_warehouseinline` on((`inv_warehouseinline`.`warehousein_id` = `inv_warehousein`.`id`))) join `sys_partner` on((`inv_warehousein`.`supplier_id` = `sys_partner`.`id`))) join `product_item` on((`inv_warehouseinline`.`product_id` = `product_item`.`id`))) join `inv_warehouse` on((`inv_warehousein`.`wh_id` = `inv_warehouse`.`id`))) where (`inv_warehousein`.`status` <> 0) ;

-- ----------------------------
-- Procedure structure for `proTest`
-- ----------------------------
DROP PROCEDURE IF EXISTS `proTest`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `proTest`(IN `test` int)
BEGIN

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `testpro`
-- ----------------------------
DROP PROCEDURE IF EXISTS `testpro`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `testpro`(var1 varchar(64))
BEGIN 
SELECT  product_item.code,product_item.name  FROM product_item
WHERE product_item.type_id=var1;
 END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `testpro1`
-- ----------------------------
DROP PROCEDURE IF EXISTS `testpro1`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `testpro1`(var1 varchar(64))
BEGIN 
SELECT  p.code,p.name  FROM product_item p
WHERE p.type_id=var1;
 END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `testpro11`
-- ----------------------------
DROP PROCEDURE IF EXISTS `testpro11`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `testpro11`(var1 varchar(64))
BEGIN 
SELECT  * FROM product_item p
WHERE p.type_id=var1;
 END
;;
DELIMITER ;
