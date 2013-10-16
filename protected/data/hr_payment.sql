/*
Navicat MySQL Data Transfer

Source Server         : nguyenvanan
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : prolab

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2012-12-11 09:21:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hr_payment`
-- ----------------------------
DROP TABLE IF EXISTS `hr_payment`;
CREATE TABLE `hr_payment` (
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
  KEY `period_id` USING BTREE (`period_id`),
  CONSTRAINT `hr_payment_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `hr_batch` (`id`),
  CONSTRAINT `hr_payment_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_payment_ibfk_3` FOREIGN KEY (`tran_id`) REFERENCES `hr_transaction` (`id`),
  CONSTRAINT `hr_payment_ibfk_4` FOREIGN KEY (`period_id`) REFERENCES `hr_payperiod` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_payment
-- ----------------------------
INSERT INTO `hr_payment` VALUES ('126', '0000-00-00', '0', '1', '25', 'Thanh toán', '350000000', null, '98', null);
INSERT INTO `hr_payment` VALUES ('127', '0000-00-00', '0', '4', '25', 'Thanh toán', '150000000', null, '100', null);
INSERT INTO `hr_payment` VALUES ('128', '0000-00-00', '0', '6', '25', 'Thanh toán', '240000000', null, '101', null);
INSERT INTO `hr_payment` VALUES ('129', '0000-00-00', '0', '10', '25', 'Thanh toán', '50000000', null, '103', null);
INSERT INTO `hr_payment` VALUES ('132', '2012-12-07', '0', '4', '27', 'Tiền mặt', '3500000', '0', '121', null);
INSERT INTO `hr_payment` VALUES ('134', '2012-12-07', '0', '9', '27', 'Tiền mặt', '11250000', '0', '123', null);
INSERT INTO `hr_payment` VALUES ('136', '2012-12-07', '0', '1', '27', 'Tiền mặt', '15000000', '0', '119', null);
INSERT INTO `hr_payment` VALUES ('138', '2012-12-10', '1', '1', null, '1', '10000000', null, '127', null);
INSERT INTO `hr_payment` VALUES ('139', '2012-12-11', '1', '1', null, '2', '200000000', null, '128', null);
