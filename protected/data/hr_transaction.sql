/*
Navicat MySQL Data Transfer

Source Server         : nguyenvanan
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : prolab

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2012-12-11 09:21:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hr_transaction`
-- ----------------------------
DROP TABLE IF EXISTS `hr_transaction`;
CREATE TABLE `hr_transaction` (
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
  KEY `emp_id` USING BTREE (`emp_id`),
  CONSTRAINT `hr_transaction_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `hr_batch` (`id`),
  CONSTRAINT `hr_transaction_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_transaction
-- ----------------------------
INSERT INTO `hr_transaction` VALUES ('98', '2012-12-06', '1', '250000', '500000000', '25', null, null);
INSERT INTO `hr_transaction` VALUES ('99', '2012-12-06', '3', '100000', '200000000', '25', null, null);
INSERT INTO `hr_transaction` VALUES ('100', '2012-12-06', '4', '75000', '150000000', '25', null, null);
INSERT INTO `hr_transaction` VALUES ('101', '2012-12-06', '6', '150000', '300000000', '25', null, null);
INSERT INTO `hr_transaction` VALUES ('102', '2012-12-06', '9', '150000', '300000000', '25', null, null);
INSERT INTO `hr_transaction` VALUES ('103', '2012-12-06', '10', '25000', '50000000', '25', null, null);
INSERT INTO `hr_transaction` VALUES ('119', '2012-12-07', '1', '9375', '18750000', '27', 'Tăng vốn cổ phần', '1');
INSERT INTO `hr_transaction` VALUES ('120', '2012-12-07', '3', '3750', '7500000', '27', 'Tăng vốn cổ phần', '1');
INSERT INTO `hr_transaction` VALUES ('121', '2012-12-07', '4', '2813', '5625000', '27', 'Tăng vốn cổ phần', '1');
INSERT INTO `hr_transaction` VALUES ('122', '2012-12-07', '6', '5625', '11250000', '27', 'Tăng vốn cổ phần', '1');
INSERT INTO `hr_transaction` VALUES ('123', '2012-12-07', '9', '5625', '11250000', '27', 'Tăng vốn cổ phần', '1');
INSERT INTO `hr_transaction` VALUES ('124', '2012-12-07', '10', '938', '1875000', '27', 'Tăng vốn cổ phần', '1');
INSERT INTO `hr_transaction` VALUES ('127', '2012-12-10', '1', '5000', '10000000', null, '1', '0');
INSERT INTO `hr_transaction` VALUES ('128', '2012-12-11', '1', '100000', '200000000', null, '2', '0');
