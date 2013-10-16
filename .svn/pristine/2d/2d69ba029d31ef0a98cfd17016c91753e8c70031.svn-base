/*
Navicat MySQL Data Transfer

Source Server         : nguyenvanan
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : prolab

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2012-12-11 09:21:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hr_batch`
-- ----------------------------
DROP TABLE IF EXISTS `hr_batch`;
CREATE TABLE `hr_batch` (
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_batch
-- ----------------------------
INSERT INTO `hr_batch` VALUES ('9', null, null, '2012-11-16', null, '4000000000', 'Vốn điều lệ', null, null, '0');
INSERT INTO `hr_batch` VALUES ('25', 'CP12/2012', 'Đợt 12', '2012-12-05', '750000', '1500000000', 'Phát hành cổ phần tháng 12 năm 2012', null, null, null);
INSERT INTO `hr_batch` VALUES ('27', null, null, '2012-12-07', '75000', '150000000', 'Mua máy mới phát triển công tác', null, null, '0');
