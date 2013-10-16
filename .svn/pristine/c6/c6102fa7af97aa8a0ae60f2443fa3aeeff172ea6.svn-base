/*
Navicat MySQL Data Transfer

Source Server         : nguyenvanan
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : prolab

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2012-12-11 09:21:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hr_profit_detail`
-- ----------------------------
DROP TABLE IF EXISTS `hr_profit_detail`;
CREATE TABLE `hr_profit_detail` (
  `id` int(11) NOT NULL auto_increment,
  `profit_id` int(11) default NULL,
  `emp_id` int(11) NOT NULL,
  `amt` decimal(19,0) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `emp_id` USING BTREE (`emp_id`),
  KEY `profit_id` USING BTREE (`profit_id`),
  CONSTRAINT `hr_profit_detail_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_profit_detail_ibfk_2` FOREIGN KEY (`profit_id`) REFERENCES `hr_profit` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_profit_detail
-- ----------------------------
INSERT INTO `hr_profit_detail` VALUES ('34', '21', '1', '3112033', '0', '2012-11-22');
INSERT INTO `hr_profit_detail` VALUES ('35', '21', '3', '1556017', '0', '2012-11-22');
INSERT INTO `hr_profit_detail` VALUES ('36', '21', '4', '1400415', '0', '2012-11-22');
INSERT INTO `hr_profit_detail` VALUES ('37', '21', '5', '1431535', '0', '2012-11-22');
INSERT INTO `hr_profit_detail` VALUES ('38', '22', '1', '31120332', '0', '2012-11-23');
INSERT INTO `hr_profit_detail` VALUES ('39', '22', '3', '15560166', '0', '2012-11-23');
INSERT INTO `hr_profit_detail` VALUES ('40', '22', '4', '14004149', '0', '2012-11-23');
INSERT INTO `hr_profit_detail` VALUES ('41', '22', '5', '14315353', '0', '2012-11-23');
INSERT INTO `hr_profit_detail` VALUES ('42', '23', '1', '12448133', '0', '2012-11-24');
INSERT INTO `hr_profit_detail` VALUES ('43', '23', '3', '6224066', '0', '2012-11-24');
INSERT INTO `hr_profit_detail` VALUES ('44', '23', '4', '5601660', '0', '2012-11-24');
INSERT INTO `hr_profit_detail` VALUES ('45', '23', '5', '5726141', '0', '2012-11-24');
INSERT INTO `hr_profit_detail` VALUES ('46', '24', '1', '41493776', '0', '2012-11-25');
INSERT INTO `hr_profit_detail` VALUES ('47', '24', '3', '20746888', '0', '2012-11-25');
INSERT INTO `hr_profit_detail` VALUES ('48', '24', '4', '18672199', '0', '2012-11-25');
INSERT INTO `hr_profit_detail` VALUES ('49', '24', '5', '19087137', '0', '2012-11-25');
