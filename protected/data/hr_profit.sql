/*
Navicat MySQL Data Transfer

Source Server         : nguyenvanan
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : prolab

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2012-12-11 09:21:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hr_profit`
-- ----------------------------
DROP TABLE IF EXISTS `hr_profit`;
CREATE TABLE `hr_profit` (
  `id` int(11) NOT NULL auto_increment,
  `date` date default NULL,
  `amt` decimal(19,0) default NULL,
  `rateLoan` float(19,0) default NULL,
  `amtdebit` decimal(19,0) default NULL,
  `note` varchar(255) default NULL,
  `type` tinyint(4) default NULL,
  `batch_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `batch_id` USING BTREE (`batch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_profit
-- ----------------------------
INSERT INTO `hr_profit` VALUES ('21', '2012-11-22', '15000000', null, null, 'Chia lãi đợt 22/11/12', null, null);
INSERT INTO `hr_profit` VALUES ('22', '2012-11-23', '150000000', null, null, 'Chia lãi đợt 23/11/12', null, null);
INSERT INTO `hr_profit` VALUES ('23', '2012-11-24', '60000000', null, null, 'Chia lãi đợt 24/11/12', null, null);
INSERT INTO `hr_profit` VALUES ('24', '2012-11-25', '200000000', null, null, 'Chia lãi đợt 25/11/12', null, null);
