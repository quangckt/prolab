/*
Navicat MySQL Data Transfer

Source Server         : nguyenvanan
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : prolab

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2012-12-11 09:16:39
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
  PRIMARY KEY  (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of authassignment
-- ----------------------------
INSERT INTO `authassignment` VALUES ('Admin', '1', null, 'N;');
INSERT INTO `authassignment` VALUES ('nhapkho', '4', null, 'N;');
INSERT INTO `authassignment` VALUES ('quanlykho', '3', null, 'N;');
INSERT INTO `authassignment` VALUES ('xuatkho', '5', null, 'N;');

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
  PRIMARY KEY  (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of authitem
-- ----------------------------
INSERT INTO `authitem` VALUES ('Admin', '2', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Authenticated', '2', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Default.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Default.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Default.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.AdminImages', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.Auth', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.DeleteImage', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.MoveImage', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.Search', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.UnlinkImage', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.UpdateValue', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Cms.Sitecontent.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('employee', '2', 'employee', null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.ELF', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Fields.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.CreateCapitalIncrease', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.GetBatchAmt', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.IndexCapitalIncrease', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.UpdateCapitalIncrease', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Batch.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.City.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Default.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Default.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Department.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.District.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Education.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.EventCalendar', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.UpdateHistory', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.UpdateLayOff', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Employee.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.EmpRelation.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.CreateHoliday', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.Dropevent', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.UpdateDropEvent', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.UpdateHoliday', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.UpdatEventResize', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Eventcalendar.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.History.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Job.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Levelofedu.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payment.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Payperiod.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.RelationType.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Settings.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Settings.Colors', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Settings.Holidays', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Settings.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.CreateValueOfStock', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.GetShareTotalassets', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.GetShareValueofstock', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Share.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.CopyShift', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shift.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.LoadShiftDetail', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.SaveShiftDetail', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.UpdateShiftDetail', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.CopyDataShift', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftPlan.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Shop.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.StudyField.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.CreateSaleStock', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.IndexSaleStock', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.Transaction.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Default.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Default.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.GetInventory', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Inventory.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.Inventory', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.InventoryToExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.Stock', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.Warehouseindetails', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.WarehouseindetailsToExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.WarehouseindetailsToPdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.Warehouseoutdetails', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.WarehouseoutdetailsToExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Report.WarehouseoutdetailsToPdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.ReportInventory.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.ReportInventory.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.ReportStock.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.ReportStock.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.UpdateStatus', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transfer.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Transferline.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouse.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouse.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouse.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouse.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouse.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouse.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouse.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouse.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouse.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.ListDetails', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.UpdateStatus', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehousein.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseinline.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.UpdateStatus', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseout.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.Warehouseoutline.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inv.WarehouseoutType.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Inventory.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('nhapkho', '1', 'nhapkho', null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Category.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Default.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Default.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Product.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.ProductType.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Uom.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Uom.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Uom.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Uom.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Uom.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Uom.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Uom.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Uom.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.Uom.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Product.UomConvert.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Purchase_order.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('quanlykho', '1', 'Qu?n lý kho', null, 'N;');
INSERT INTO `authitem` VALUES ('Reporting.Default.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Reporting.Default.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Reporting.Report.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Reporting.Report.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Contact', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Error', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Login', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Logout', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Site.Settings', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Suppliers.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Branch.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Branch.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Branch.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Branch.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Branch.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Branch.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Branch.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Branch.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Branch.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Company.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Company.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Company.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Default.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Default.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Modelsettings.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Sys.Partner.View', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Uom.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Uom.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Uom.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Uom.Delete', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Uom.GenerateExcel', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Uom.GeneratePdf', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Uom.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Uom.Update', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Uom.View', '0', null, null, 'N;');
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
INSERT INTO `authitem` VALUES ('xuatkho', '1', 'xuatkho', null, 'N;');

-- ----------------------------
-- Table structure for `authitemchild`
-- ----------------------------
DROP TABLE IF EXISTS `authitemchild`;
CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY  (`parent`,`child`),
  KEY `child` USING BTREE (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of authitemchild
-- ----------------------------
INSERT INTO `authitemchild` VALUES ('Authenticated', 'Cms.Default.Admin');
INSERT INTO `authitemchild` VALUES ('employee', 'Cms.Default.Admin');
INSERT INTO `authitemchild` VALUES ('nhapkho', 'Inv.Default.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Default.*');
INSERT INTO `authitemchild` VALUES ('xuatkho', 'Inv.Default.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Inventory.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Report.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.ReportInventory.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.ReportStock.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Transfer.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Transferline.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Warehouse.*');
INSERT INTO `authitemchild` VALUES ('nhapkho', 'Inv.Warehousein.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Warehousein.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Warehouseinline.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Warehouseout.*');
INSERT INTO `authitemchild` VALUES ('xuatkho', 'Inv.Warehouseout.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.Warehouseoutline.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Inv.WarehouseoutType.*');
INSERT INTO `authitemchild` VALUES ('nhapkho', 'Product.Category.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Product.Category.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Product.Default.*');
INSERT INTO `authitemchild` VALUES ('nhapkho', 'Product.Product.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Product.Product.*');
INSERT INTO `authitemchild` VALUES ('nhapkho', 'Product.ProductType.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Product.ProductType.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Product.Uom.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Product.UomConvert.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Reporting.Default.*');
INSERT INTO `authitemchild` VALUES ('quanlykho', 'Reporting.Report.*');

-- ----------------------------
-- Table structure for `eventcalendar`
-- ----------------------------
DROP TABLE IF EXISTS `eventcalendar`;
CREATE TABLE `eventcalendar` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `assignedTo` varchar(20) default NULL,
  `calendarId` int(11) default NULL,
  `description` text,
  `visibility` int(11) default NULL,
  `associationId` int(11) default NULL,
  `associationType` tinyint(4) NOT NULL,
  `associationName` varchar(100) default NULL,
  `startDate` bigint(20) default NULL,
  `startTime` varchar(20) default NULL,
  `dueDate` bigint(20) default NULL,
  `endTime` varchar(20) default NULL,
  `showTime` tinyint(4) default '0',
  `priority` varchar(10) default NULL,
  `type` varchar(20) default NULL,
  `createDate` bigint(20) default NULL,
  `complete` varchar(5) default 'No',
  `reminder` varchar(5) default NULL,
  `completedBy` varchar(20) default NULL,
  `completeDate` bigint(20) default NULL,
  `lastUpdated` bigint(20) default NULL,
  `updatedBy` varchar(20) default NULL,
  `workflowId` int(10) unsigned default NULL,
  `stageNumber` int(10) unsigned default NULL,
  `allDay` tinyint(4) default NULL,
  `color` varchar(20) default NULL,
  `syncGoogleCalendarEventId` text,
  PRIMARY KEY  (`id`),
  KEY `assignedTo` USING BTREE (`assignedTo`),
  KEY `type` USING BTREE (`type`),
  KEY `associationType` USING BTREE (`associationType`,`associationId`),
  KEY `user_id` USING BTREE (`user_id`),
  CONSTRAINT `eventcalendar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eventcalendar
-- ----------------------------
INSERT INTO `eventcalendar` VALUES ('2', '1', 'chames', null, 'Comment test', '1', '1', '0', 'Trade-in 2006 R1200G', null, null, '1335493846', null, '0', 'Low', '', '1335493846', 'Yes', 'No', 'chames', '1335493846', '1335493846', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('3', '1', 'chames', null, 'Follow up on 10 user opportunity.', '1', '6', '0', 'Joseph Jacobs', null, null, '1336746413', null, '0', 'Medium', '', '1335494170', 'No', 'Yes', '', null, '1335494170', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('4', '1', 'chames', null, 'Schedule demo for local team', '1', '8', '0', 'Chase Harvey', null, null, '1337092013', null, '0', 'Low', '', '1335499539', 'No', 'Yes', '', null, '1335499539', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('5', '1', 'chames', null, 'Call next week', '1', '7', '0', 'Kara Warren', null, null, '1335882413', null, '0', 'Medium', '', '1335499250', 'No', 'Yes', '', null, '1335499250', 'chames', null, null, null, null, null);
INSERT INTO `eventcalendar` VALUES ('6', '1', 'chames', null, 'Answer questions regarding volume discounts', '1', '10', '0', 'William Firth', '1349024400', '0:0', null, null, '0', 'Medium', '', '1335501401', 'No', 'Yes', '', null, '1335501401', 'chames', null, null, '0', '', null);
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
INSERT INTO `eventcalendar` VALUES ('248', '1', null, null, 'test 150', '0', null, '0', null, '1351789200', '01:00', null, null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '0', '#f70000', null);

-- ----------------------------
-- Table structure for `events`
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(1000) default NULL,
  `allDay` smallint(5) unsigned NOT NULL default '0',
  `start` int(10) unsigned default NULL,
  `end` int(10) unsigned default NULL,
  `editable` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
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
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(1000) default NULL,
  PRIMARY KEY  (`id`)
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
  `mobile` varchar(20) default NULL,
  `mobile_alert` tinyint(1) NOT NULL default '0',
  `email` varchar(40) default NULL,
  `email_alert` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`user_id`)
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

-- ----------------------------
-- Table structure for `hr_city`
-- ----------------------------
DROP TABLE IF EXISTS `hr_city`;
CREATE TABLE `hr_city` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 default NULL,
  `code_city` varchar(11) default NULL COMMENT 'mã tỉnh',
  PRIMARY KEY  (`id`)
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
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 default NULL,
  `parent_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 default NULL,
  `city_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `city_id` USING BTREE (`city_id`),
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
  `id` int(11) NOT NULL auto_increment,
  `emp_id` int(11) default NULL,
  `study_at` varchar(255) character set utf8 default NULL,
  `study_long` tinyint(4) default NULL,
  `study_field` tinyint(4) default NULL,
  `levelofedu` tinyint(4) default NULL,
  `finished_year` int(4) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` USING BTREE (`emp_id`),
  KEY `study_field` USING BTREE (`study_field`),
  KEY `levelofedu` USING BTREE (`levelofedu`),
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

-- ----------------------------
-- Table structure for `hr_experience`
-- ----------------------------
DROP TABLE IF EXISTS `hr_experience`;
CREATE TABLE `hr_experience` (
  `id` int(11) NOT NULL auto_increment,
  `emp_id` int(11) default NULL,
  `company` varchar(255) default NULL,
  `description` text,
  `todate` date default NULL,
  `fromdate` date default NULL,
  PRIMARY KEY  (`id`),
  KEY `emp_id` USING BTREE (`emp_id`),
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
  `id` int(11) NOT NULL auto_increment,
  `emp_id` int(11) NOT NULL,
  `job_id` int(11) default NULL,
  `todate` date default NULL,
  `fromdate` date default NULL,
  `company` varchar(255) character set utf8 default NULL,
  `description` text character set utf8,
  PRIMARY KEY  (`id`),
  KEY `emp_id` USING BTREE (`emp_id`),
  CONSTRAINT `hr_history_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

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
INSERT INTO `hr_history` VALUES ('68', '8', '2', null, '2012-11-23', 'Minh Tâm', '');
INSERT INTO `hr_history` VALUES ('69', '8', '1', null, '1970-01-01', 'Minh Tâm', '');
INSERT INTO `hr_history` VALUES ('70', '8', '3', null, '2012-11-23', 'Minh Tâm', '');
INSERT INTO `hr_history` VALUES ('71', '8', '1', null, '2012-11-22', 'Minh Tâm', '');

-- ----------------------------
-- Table structure for `hr_job`
-- ----------------------------
DROP TABLE IF EXISTS `hr_job`;
CREATE TABLE `hr_job` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 default NULL,
  PRIMARY KEY  (`id`)
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
  `id` tinyint(4) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 default NULL,
  PRIMARY KEY  (`id`)
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

-- ----------------------------
-- Table structure for `hr_payperiod`
-- ----------------------------
DROP TABLE IF EXISTS `hr_payperiod`;
CREATE TABLE `hr_payperiod` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `rateloan` decimal(19,2) default NULL,
  `date` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_payperiod
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_position`
-- ----------------------------
DROP TABLE IF EXISTS `hr_position`;
CREATE TABLE `hr_position` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 default NULL,
  PRIMARY KEY  (`id`)
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

-- ----------------------------
-- Table structure for `hr_relation`
-- ----------------------------
DROP TABLE IF EXISTS `hr_relation`;
CREATE TABLE `hr_relation` (
  `id` int(11) NOT NULL auto_increment,
  `emp_id` int(11) default NULL,
  `type_relation` tinyint(4) default NULL,
  `fullname` varchar(255) character set utf8 default NULL,
  `birthday` date default NULL,
  `weddingday` date default NULL,
  `numofbrothers` tinyint(4) default NULL,
  `numofsiters` tinyint(4) default NULL,
  `notes` varchar(255) character set utf8 default NULL,
  PRIMARY KEY  (`id`),
  KEY `type_relation` USING BTREE (`type_relation`),
  KEY `emp_id` USING BTREE (`emp_id`),
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
  `id` tinyint(4) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 default NULL,
  `isShowWeddingDay` bit(1) default NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(11) NOT NULL auto_increment,
  `valueofstock` decimal(10,0) default NULL,
  `totalassets` decimal(10,0) default NULL,
  `note` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_share
-- ----------------------------
INSERT INTO `hr_share` VALUES ('1', '2000', '4150000000', 'Tổng tài sản');

-- ----------------------------
-- Table structure for `hr_shift`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift`;
CREATE TABLE `hr_shift` (
  `id` int(11) NOT NULL auto_increment,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `isovernight` bit(1) default NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `note` varchar(255) default NULL,
  `status` tinyint(4) default NULL,
  `shift_plan_id` int(11) default NULL,
  `colorEvent` varchar(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `code` USING BTREE (`code`,`shift_plan_id`),
  KEY `shift_plan_id` USING BTREE (`shift_plan_id`),
  CONSTRAINT `hr_shift_ibfk_1` FOREIGN KEY (`shift_plan_id`) REFERENCES `hr_shift_plan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift
-- ----------------------------
INSERT INTO `hr_shift` VALUES ('65', 'CaQ1', 'Ca 1', '', '07:45:00', '17:00:00', '', null, '40', '#358575');
INSERT INTO `hr_shift` VALUES ('66', 'CaQ2', 'Ca 2', '', '08:00:00', '21:00:00', '', null, '40', '#918c03');
INSERT INTO `hr_shift` VALUES ('67', 'CaQ3', 'Ca 3', '', '10:00:00', '22:30:00', '', null, '40', '#c9ccf7');
INSERT INTO `hr_shift` VALUES ('68', 'CaQ4', 'Ca 4', '', '13:00:00', '22:30:00', '', null, '40', '#734673');
INSERT INTO `hr_shift` VALUES ('69', 'CaQ5', 'Ca 5', '', '13:05:00', '17:00:00', '', null, '40', '#054d69');
INSERT INTO `hr_shift` VALUES ('70', 'CaQ6', 'Ca 6', '', '13:00:00', '21:00:00', '', null, '40', '#a899f2');
INSERT INTO `hr_shift` VALUES ('71', 'CaQ7', 'Ca 7', '', '08:00:00', '17:00:00', '', null, '40', '#a85a31');
INSERT INTO `hr_shift` VALUES ('72', 'CaQ1', 'Ca 1', '', '07:45:00', '17:00:00', '', null, '41', '#358575');
INSERT INTO `hr_shift` VALUES ('73', 'CaQ2', 'Ca 2', '', '08:00:00', '21:00:00', '', null, '41', '#918c03');
INSERT INTO `hr_shift` VALUES ('74', 'CaQ3', 'Ca 3', '', '10:00:00', '22:30:00', '', null, '41', '#918c03');
INSERT INTO `hr_shift` VALUES ('75', 'CaQ4', 'Ca 4', '', '13:00:00', '22:30:00', '', null, '41', '#734673');
INSERT INTO `hr_shift` VALUES ('76', 'CaQ5', 'Ca 5', '', '13:05:00', '17:00:00', '', null, '41', '#054d69');
INSERT INTO `hr_shift` VALUES ('77', 'CaQ6', 'Ca 6', '', '13:00:00', '21:00:00', '', null, '41', '#a899f2');
INSERT INTO `hr_shift` VALUES ('78', 'CaQ7', 'Ca 7', '', '08:00:00', '17:00:00', '', null, '41', '#f70000');
INSERT INTO `hr_shift` VALUES ('79', 'CaQ1', 'Ca 1', '', '07:45:00', '17:00:00', '', null, '43', '#358575');
INSERT INTO `hr_shift` VALUES ('80', 'CaQ2', 'Ca 2', '', '08:00:00', '21:00:00', '', null, '43', '#918c03');
INSERT INTO `hr_shift` VALUES ('81', 'CaQ3', 'Ca 3', '', '10:00:00', '22:30:00', '', null, '43', '#c9ccf7');
INSERT INTO `hr_shift` VALUES ('82', 'CaQ4', 'Ca 4', '', '13:00:00', '22:30:00', '', null, '43', '#734673');
INSERT INTO `hr_shift` VALUES ('83', 'CaQ5', 'Ca 5', '', '13:05:00', '17:00:00', '', null, '43', '#054d69');
INSERT INTO `hr_shift` VALUES ('84', 'CaQ6', 'Ca 6', '', '13:00:00', '21:00:00', '', null, '43', '#a899f2');
INSERT INTO `hr_shift` VALUES ('85', 'CaQ7', 'Ca 7', '', '08:00:00', '17:00:00', '', null, '43', '#a85a31');
INSERT INTO `hr_shift` VALUES ('86', '145', 'jh', '', '02:15:00', '02:05:00', 'gh', null, '44', '#54d472');

-- ----------------------------
-- Table structure for `hr_shift_change`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_change`;
CREATE TABLE `hr_shift_change` (
  `id` int(11) NOT NULL auto_increment,
  `note` varchar(255) default NULL,
  `form1_id` int(11) default NULL,
  `to1_id` int(11) default NULL,
  `form2_id` int(11) default NULL,
  `to2_id` int(11) default NULL,
  `plan_id` int(11) default NULL,
  `emp_from` int(11) default NULL,
  `emp_to` int(11) default NULL,
  `date_from` date default NULL,
  `date_to` date default NULL,
  PRIMARY KEY  (`id`),
  KEY `form1_id` USING BTREE (`form1_id`),
  KEY `to1_id` USING BTREE (`to1_id`),
  KEY `form2_id` USING BTREE (`form2_id`),
  KEY `to2_id` USING BTREE (`to2_id`),
  KEY `emp_from` USING BTREE (`emp_from`),
  KEY `emp_to` USING BTREE (`emp_to`),
  CONSTRAINT `hr_shift_change_ibfk_1` FOREIGN KEY (`form1_id`) REFERENCES `hr_shift_detail` (`id`),
  CONSTRAINT `hr_shift_change_ibfk_2` FOREIGN KEY (`to1_id`) REFERENCES `hr_shift_detail` (`id`),
  CONSTRAINT `hr_shift_change_ibfk_3` FOREIGN KEY (`form2_id`) REFERENCES `hr_shift_detail` (`id`),
  CONSTRAINT `hr_shift_change_ibfk_4` FOREIGN KEY (`to2_id`) REFERENCES `hr_shift_detail` (`id`),
  CONSTRAINT `hr_shift_change_ibfk_5` FOREIGN KEY (`emp_from`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_shift_change_ibfk_6` FOREIGN KEY (`emp_to`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_change
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_shift_detail`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_detail`;
CREATE TABLE `hr_shift_detail` (
  `id` int(11) NOT NULL auto_increment,
  `shift_id` int(11) default NULL,
  `date` date default NULL,
  `emp_id` int(11) default NULL,
  `shift_change_id` int(11) default NULL,
  `ischanged` bit(1) default '\0',
  `hasreplace` bit(1) default '\0',
  `date_correct` date default NULL,
  `user_correct` varchar(255) default NULL,
  `from_correct` time default NULL,
  `to_correct` time default NULL,
  `status_correct` bit(1) default NULL,
  `note` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uq` USING BTREE (`date`,`emp_id`,`ischanged`),
  KEY `emp_id` USING BTREE (`emp_id`),
  KEY `uk` USING BTREE (`shift_id`),
  CONSTRAINT `hr_shift_detail_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_shift_detail_ibfk_2` FOREIGN KEY (`shift_id`) REFERENCES `hr_shift` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2347 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_detail
-- ----------------------------
INSERT INTO `hr_shift_detail` VALUES ('1861', '65', '2012-11-01', '10', null, '', '', '2012-11-06', '', '06:00:00', '09:00:00', '', 'sdfhksd');
INSERT INTO `hr_shift_detail` VALUES ('1862', '65', '2012-11-01', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1863', '66', '2012-11-02', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1864', '65', '2012-11-02', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1865', '65', '2012-11-02', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1866', '65', '2012-11-03', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1867', '65', '2012-11-03', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1868', '65', '2012-11-03', '13', null, '', '', null, null, '00:00:00', '00:00:00', null, null);
INSERT INTO `hr_shift_detail` VALUES ('1869', '65', '2012-11-05', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1870', '65', '2012-11-05', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1871', '65', '2012-11-05', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1872', '65', '2012-11-07', '9', null, '', '', '2012-11-14', '', '07:30:00', '09:45:00', '', '');
INSERT INTO `hr_shift_detail` VALUES ('1873', '65', '2012-11-06', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1874', '65', '2012-11-06', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1876', '67', '2012-11-07', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1877', '68', '2012-11-07', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1878', '67', '2012-11-08', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1879', '68', '2012-11-09', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1880', '70', '2012-11-10', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1881', '71', '2012-11-12', '9', null, '', '', null, null, '00:00:00', '00:00:00', null, null);
INSERT INTO `hr_shift_detail` VALUES ('1882', '69', '2012-11-13', '9', null, '', '', null, null, '00:00:00', '00:00:00', null, null);
INSERT INTO `hr_shift_detail` VALUES ('1883', '66', '2012-11-14', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1884', '68', '2012-11-15', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1885', '69', '2012-11-16', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1886', '70', '2012-11-17', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1887', '66', '2012-11-19', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1888', '68', '2012-11-20', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1889', '69', '2012-11-21', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1890', '71', '2012-11-22', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1891', '70', '2012-11-23', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1892', '68', '2012-11-24', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1893', '65', '2012-11-26', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1894', '67', '2012-11-27', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1895', '68', '2012-11-28', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1896', '69', '2012-11-29', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1897', '69', '2012-11-30', '9', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1898', '67', '2012-11-08', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1899', '68', '2012-11-09', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1900', '70', '2012-11-10', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1901', '71', '2012-11-12', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1902', '70', '2012-11-13', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1903', '68', '2012-11-14', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1904', '66', '2012-11-15', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1905', '65', '2012-11-16', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1906', '69', '2012-11-17', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1907', '70', '2012-11-19', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1908', '69', '2012-11-20', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1909', '69', '2012-11-21', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1910', '71', '2012-11-22', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1911', '68', '2012-11-23', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1912', '66', '2012-11-24', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1913', '65', '2012-11-26', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1914', '67', '2012-11-27', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1915', '68', '2012-11-28', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1916', '71', '2012-11-30', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1917', '69', '2012-11-29', '10', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1918', '71', '2012-11-08', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1919', '69', '2012-11-11', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1920', '69', '2012-11-10', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1921', '70', '2012-11-12', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1922', '68', '2012-11-14', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1923', '68', '2012-11-15', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1924', '66', '2012-11-16', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1925', '71', '2012-11-17', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1926', '71', '2012-11-18', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1927', '69', '2012-11-20', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1928', '68', '2012-11-21', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1929', '69', '2012-11-22', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1930', '70', '2012-11-23', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1931', '65', '2012-11-24', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1932', '66', '2012-11-25', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1933', '67', '2012-11-26', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1934', '70', '2012-11-27', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1935', '69', '2012-11-28', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1936', '66', '2012-11-29', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1937', '68', '2012-11-30', '13', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1938', '65', '2012-11-01', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1939', '68', '2012-11-02', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1940', '71', '2012-11-03', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1941', '68', '2012-11-04', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1942', '69', '2012-11-05', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1943', '71', '2012-11-06', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1944', '67', '2012-11-07', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1945', '65', '2012-11-08', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1946', '69', '2012-11-09', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1947', '67', '2012-11-10', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1948', '70', '2012-11-12', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1949', '71', '2012-11-11', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1950', '70', '2012-11-13', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1951', '69', '2012-11-15', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1952', '67', '2012-11-16', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1953', '65', '2012-11-17', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1954', '70', '2012-11-18', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1955', '69', '2012-11-19', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1956', '67', '2012-11-20', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1957', '65', '2012-11-21', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1958', '69', '2012-11-22', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1959', '69', '2012-11-23', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1960', '67', '2012-11-24', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1961', '69', '2012-11-25', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1962', '70', '2012-11-26', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1963', '65', '2012-11-27', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1964', '66', '2012-11-28', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1965', '71', '2012-11-29', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1966', '68', '2012-11-30', '16', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1967', '65', '2012-11-01', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1968', '66', '2012-11-02', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1969', '68', '2012-11-03', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1970', '69', '2012-11-05', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1971', '71', '2012-11-06', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1972', '69', '2012-11-07', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1973', '70', '2012-11-08', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1974', '67', '2012-11-09', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1975', '66', '2012-11-10', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1976', '67', '2012-11-11', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1977', '67', '2012-11-12', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1978', '70', '2012-11-13', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1979', '71', '2012-11-14', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1980', '70', '2012-11-15', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1981', '68', '2012-11-16', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1982', '66', '2012-11-17', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1983', '66', '2012-11-18', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1984', '65', '2012-11-19', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1985', '66', '2012-11-20', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1986', '68', '2012-11-21', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1987', '70', '2012-11-22', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1988', '71', '2012-11-23', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1989', '68', '2012-11-24', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1990', '66', '2012-11-25', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1991', '68', '2012-11-26', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1992', '70', '2012-11-27', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1993', '65', '2012-11-28', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1994', '67', '2012-11-30', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1995', '68', '2012-11-29', '19', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1996', '65', '2012-11-01', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1997', '68', '2012-11-02', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1998', '71', '2012-11-03', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('1999', '66', '2012-11-04', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2000', '68', '2012-11-05', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2001', '67', '2012-11-06', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2002', '70', '2012-11-07', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2003', '69', '2012-11-08', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2004', '68', '2012-11-09', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2005', '66', '2012-11-10', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2006', '71', '2012-11-11', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2007', '70', '2012-11-12', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2008', '69', '2012-11-13', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2009', '68', '2012-11-14', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2010', '70', '2012-11-15', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2011', '69', '2012-11-16', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2012', '68', '2012-11-17', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2013', '71', '2012-11-18', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2014', '69', '2012-11-19', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2015', '66', '2012-11-20', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2016', '65', '2012-11-21', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2017', '67', '2012-11-22', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2018', '69', '2012-11-23', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2019', '71', '2012-11-24', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2020', '67', '2012-11-25', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2021', '65', '2012-11-26', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2022', '68', '2012-11-27', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2023', '66', '2012-11-28', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2024', '65', '2012-11-29', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2025', '71', '2012-11-30', '24', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2026', '65', '2012-11-01', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2027', '69', '2012-11-02', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2028', '70', '2012-11-03', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2029', '71', '2012-11-04', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2030', '69', '2012-11-05', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2031', '71', '2012-11-06', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2032', '69', '2012-11-07', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2033', '68', '2012-11-08', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2034', '67', '2012-11-09', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2035', '65', '2012-11-10', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2036', '68', '2012-11-17', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2037', '69', '2012-11-15', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2038', '71', '2012-11-14', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2039', '70', '2012-11-13', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2040', '68', '2012-11-12', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2041', '67', '2012-11-19', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2042', '69', '2012-11-20', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2043', '71', '2012-11-21', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2044', '69', '2012-11-22', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2045', '65', '2012-11-23', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2046', '69', '2012-11-26', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2047', '71', '2012-11-24', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2048', '70', '2012-11-25', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2049', '69', '2012-11-28', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2050', '71', '2012-11-30', '25', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2051', '65', '2012-11-01', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2052', '69', '2012-11-02', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2053', '71', '2012-11-03', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2054', '68', '2012-11-04', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2055', '67', '2012-11-05', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2056', '65', '2012-11-06', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2057', '70', '2012-11-07', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2058', '71', '2012-11-08', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2059', '69', '2012-11-09', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2060', '65', '2012-11-10', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2061', '68', '2012-11-11', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2062', '68', '2012-11-12', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2063', '70', '2012-11-13', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2064', '65', '2012-11-14', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2065', '67', '2012-11-15', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2066', '70', '2012-11-16', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2067', '67', '2012-11-17', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2068', '71', '2012-11-18', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2069', '66', '2012-11-19', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2070', '65', '2012-11-20', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2071', '68', '2012-11-21', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2072', '71', '2012-11-22', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2073', '68', '2012-11-23', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2074', '65', '2012-11-24', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2075', '70', '2012-11-25', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2076', '70', '2012-11-27', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2077', '68', '2012-11-28', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2078', '69', '2012-11-29', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2079', '67', '2012-11-30', '32', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2080', '71', '2012-11-01', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2081', '69', '2012-11-02', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2082', '69', '2012-11-03', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2083', '66', '2012-11-04', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2084', '65', '2012-11-05', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2085', '71', '2012-11-06', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2086', '69', '2012-11-07', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2087', '67', '2012-11-08', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2088', '66', '2012-11-09', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2089', '65', '2012-11-10', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2090', '71', '2012-11-12', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2091', '71', '2012-11-14', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2092', '71', '2012-11-16', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2093', '70', '2012-11-19', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2094', '71', '2012-11-21', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2095', '68', '2012-11-23', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2096', '70', '2012-11-26', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2097', '69', '2012-11-28', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2098', '66', '2012-11-30', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2099', '71', '2012-11-22', '42', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2127', '79', '2012-11-01', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2128', '80', '2012-11-02', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2129', '84', '2012-11-03', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2130', '83', '2012-11-04', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2131', '82', '2012-11-06', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2132', '84', '2012-11-07', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2133', '85', '2012-11-08', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2134', '83', '2012-11-09', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2135', '84', '2012-11-10', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2136', '81', '2012-11-11', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2137', '84', '2012-11-12', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2138', '81', '2012-11-13', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2139', '85', '2012-11-14', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2140', '80', '2012-11-15', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2141', '79', '2012-11-16', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2142', '85', '2012-11-17', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2143', '83', '2012-11-24', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2144', '85', '2012-11-22', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2145', '81', '2012-11-21', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2146', '82', '2012-11-20', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2147', '81', '2012-11-19', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2148', '82', '2012-11-18', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2149', '81', '2012-11-30', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2150', '80', '2012-11-29', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2151', '85', '2012-11-28', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2152', '80', '2012-11-27', '3', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2153', '79', '2012-11-01', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2154', '82', '2012-11-02', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2155', '81', '2012-11-03', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2156', '80', '2012-11-04', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2157', '83', '2012-11-06', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2158', '85', '2012-11-07', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2159', '84', '2012-11-08', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2160', '83', '2012-11-09', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2161', '82', '2012-11-17', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2162', '80', '2012-11-16', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2163', '82', '2012-11-14', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2164', '83', '2012-11-13', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2165', '84', '2012-11-29', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2166', '83', '2012-11-12', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2167', '81', '2012-11-11', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2168', '80', '2012-11-24', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2169', '79', '2012-11-23', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2170', '83', '2012-11-22', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2171', '81', '2012-11-21', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2172', '80', '2012-11-20', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2173', '83', '2012-11-19', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2174', '85', '2012-11-30', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2175', '83', '2012-11-28', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2176', '82', '2012-11-27', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2177', '81', '2012-11-26', '6', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2178', '79', '2012-11-01', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2179', '83', '2012-11-02', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2180', '82', '2012-11-03', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2181', '83', '2012-11-10', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2182', '84', '2012-11-09', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2183', '83', '2012-11-08', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2184', '81', '2012-11-07', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2185', '80', '2012-11-06', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2186', '85', '2012-11-05', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2187', '82', '2012-11-11', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2188', '83', '2012-11-12', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2189', '81', '2012-11-13', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2190', '79', '2012-11-14', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2191', '80', '2012-11-15', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2192', '83', '2012-11-16', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2193', '84', '2012-11-17', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2194', '83', '2012-11-24', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2195', '84', '2012-11-22', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2196', '82', '2012-11-23', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2197', '81', '2012-11-21', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2198', '85', '2012-11-20', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2199', '83', '2012-11-19', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2200', '79', '2012-11-18', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2201', '83', '2012-11-28', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2202', '83', '2012-11-27', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2203', '85', '2012-11-26', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2204', '82', '2012-11-25', '12', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2205', '79', '2012-11-01', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2206', '83', '2012-11-02', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2207', '84', '2012-11-03', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2208', '81', '2012-11-10', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2209', '81', '2012-11-08', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2210', '82', '2012-11-09', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2211', '81', '2012-11-07', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2212', '81', '2012-11-06', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2213', '80', '2012-11-05', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2214', '83', '2012-11-04', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2215', '82', '2012-11-14', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2216', '84', '2012-11-15', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2217', '83', '2012-11-23', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2218', '82', '2012-11-17', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2219', '82', '2012-11-16', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2220', '85', '2012-11-13', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2221', '82', '2012-11-12', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2222', '80', '2012-11-11', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2223', '83', '2012-11-22', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2224', '84', '2012-11-21', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2225', '83', '2012-11-20', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2226', '85', '2012-11-19', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2227', '84', '2012-11-18', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2228', '81', '2012-11-30', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2229', '81', '2012-11-28', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2230', '82', '2012-11-27', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2231', '83', '2012-11-29', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2232', '79', '2012-11-26', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2233', '79', '2012-11-24', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2234', '79', '2012-11-25', '15', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2235', '81', '2012-11-01', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2236', '81', '2012-11-01', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2237', '81', '2012-11-01', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2238', '81', '2012-11-01', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2239', '81', '2012-11-01', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2240', '81', '2012-11-01', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2241', '81', '2012-11-01', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2242', '82', '2012-11-02', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2243', '82', '2012-11-02', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2244', '82', '2012-11-02', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2245', '82', '2012-11-02', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2246', '82', '2012-11-02', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2247', '82', '2012-11-02', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2248', '82', '2012-11-02', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2249', '83', '2012-11-09', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2250', '83', '2012-11-09', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2251', '83', '2012-11-09', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2252', '83', '2012-11-09', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2253', '83', '2012-11-09', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2254', '83', '2012-11-09', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2255', '83', '2012-11-09', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2256', '84', '2012-11-06', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2257', '84', '2012-11-06', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2258', '84', '2012-11-06', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2259', '84', '2012-11-06', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2260', '84', '2012-11-06', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2261', '84', '2012-11-06', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2262', '84', '2012-11-06', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2263', '81', '2012-11-03', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2264', '81', '2012-11-03', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2265', '81', '2012-11-03', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2266', '81', '2012-11-03', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2267', '81', '2012-11-03', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2268', '81', '2012-11-03', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2269', '81', '2012-11-03', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2270', '83', '2012-11-05', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2271', '83', '2012-11-05', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2272', '83', '2012-11-05', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2273', '83', '2012-11-05', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2274', '83', '2012-11-05', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2275', '83', '2012-11-05', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2276', '83', '2012-11-05', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2277', '84', '2012-11-04', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2278', '84', '2012-11-04', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2279', '84', '2012-11-04', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2280', '84', '2012-11-04', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2281', '84', '2012-11-04', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2282', '84', '2012-11-04', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2283', '84', '2012-11-04', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2284', '85', '2012-11-07', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2285', '85', '2012-11-07', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2286', '85', '2012-11-07', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2287', '85', '2012-11-07', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2288', '85', '2012-11-07', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2289', '85', '2012-11-07', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2290', '85', '2012-11-07', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2291', '79', '2012-11-08', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2292', '79', '2012-11-08', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2293', '79', '2012-11-08', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2294', '79', '2012-11-08', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2295', '79', '2012-11-08', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2296', '79', '2012-11-08', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2297', '79', '2012-11-08', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2298', '80', '2012-11-10', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2299', '80', '2012-11-10', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2300', '80', '2012-11-10', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2301', '80', '2012-11-10', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2302', '80', '2012-11-10', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2303', '80', '2012-11-10', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2304', '80', '2012-11-10', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2305', '82', '2012-11-17', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2306', '82', '2012-11-17', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2307', '82', '2012-11-17', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2308', '82', '2012-11-17', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2309', '82', '2012-11-17', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2310', '82', '2012-11-17', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2311', '82', '2012-11-17', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2312', '84', '2012-11-16', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2313', '84', '2012-11-16', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2314', '84', '2012-11-16', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2315', '84', '2012-11-16', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2316', '84', '2012-11-16', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2317', '84', '2012-11-16', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2318', '84', '2012-11-16', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2319', '84', '2012-11-14', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2320', '84', '2012-11-14', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2321', '84', '2012-11-14', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2322', '84', '2012-11-14', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2323', '84', '2012-11-14', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2324', '84', '2012-11-14', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2325', '84', '2012-11-14', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2326', '81', '2012-11-15', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2327', '81', '2012-11-15', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2328', '81', '2012-11-15', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2329', '81', '2012-11-15', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2330', '81', '2012-11-15', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2331', '81', '2012-11-15', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2332', '81', '2012-11-15', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2333', '79', '2012-11-13', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2334', '79', '2012-11-13', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2335', '79', '2012-11-13', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2336', '79', '2012-11-13', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2337', '79', '2012-11-13', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2338', '79', '2012-11-13', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2339', '79', '2012-11-13', '43', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2340', '85', '2012-11-12', '18', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2341', '85', '2012-11-12', '26', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2342', '85', '2012-11-12', '27', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2343', '85', '2012-11-12', '30', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2344', '85', '2012-11-12', '38', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2345', '85', '2012-11-12', '39', null, '', '', null, null, null, null, null, null);
INSERT INTO `hr_shift_detail` VALUES ('2346', '85', '2012-11-12', '43', null, '', '', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `hr_shift_plan`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_plan`;
CREATE TABLE `hr_shift_plan` (
  `id` int(11) NOT NULL auto_increment,
  `department_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `status` tinyint(4) NOT NULL default '2',
  `note` varchar(255) default NULL,
  `name` varchar(255) NOT NULL,
  `earlylatetime` tinyint(4) default '0' COMMENT 'the time to defind who go to early or late',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uk` USING BTREE (`department_id`,`startdate`,`enddate`),
  CONSTRAINT `hr_shift_plan_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `hr_department` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_plan
-- ----------------------------
INSERT INTO `hr_shift_plan` VALUES ('40', '3', '2012-11-01', '2012-11-30', '0', '', '11-2012Q', '0');
INSERT INTO `hr_shift_plan` VALUES ('41', '3', '2012-12-01', '2012-11-30', '1', '', '12-2012Q', '0');
INSERT INTO `hr_shift_plan` VALUES ('43', '4', '2012-11-01', '2012-11-30', '0', '', '11-2012QL', '0');
INSERT INTO `hr_shift_plan` VALUES ('44', '3', '2012-12-01', '2012-12-31', '0', 'abc', '12-2012Q', '0');

-- ----------------------------
-- Table structure for `hr_shift_replace`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_replace`;
CREATE TABLE `hr_shift_replace` (
  `id` int(11) NOT NULL auto_increment,
  `old_emp_id` int(11) NOT NULL,
  `new_emp_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `old_detail_id` int(11) NOT NULL,
  `new_detail_id` int(11) NOT NULL,
  `note` varchar(255) default NULL,
  `plan_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `old_emp_id` USING BTREE (`old_emp_id`),
  KEY `new_emp_id` USING BTREE (`new_emp_id`),
  KEY `old_detail_id` USING BTREE (`old_detail_id`),
  KEY `new_detail_id` USING BTREE (`new_detail_id`),
  CONSTRAINT `hr_shift_replace_ibfk_1` FOREIGN KEY (`old_emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_shift_replace_ibfk_2` FOREIGN KEY (`new_emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_shift_replace_ibfk_3` FOREIGN KEY (`old_detail_id`) REFERENCES `hr_shift_detail` (`id`),
  CONSTRAINT `hr_shift_replace_ibfk_4` FOREIGN KEY (`new_detail_id`) REFERENCES `hr_shift_detail` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_replace
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_shop`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shop`;
CREATE TABLE `hr_shop` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 default NULL,
  `address` varchar(255) character set utf8 default NULL,
  `phone` varchar(50) character set utf8 default NULL,
  `email` varchar(50) character set utf8 default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_shop
-- ----------------------------
INSERT INTO `hr_shop` VALUES ('1', 'Chợ Lớn', '40', '38228599', 'minhtamcl@minhtamprolab.com.vn');
INSERT INTO `hr_shop` VALUES ('2', 'Sài Gòn', '26 Châu Văn Liêm', '38536374', 'minhtamsg@minhtamprolab.com.vn');

-- ----------------------------
-- Table structure for `hr_status_timekeeping`
-- ----------------------------
DROP TABLE IF EXISTS `hr_status_timekeeping`;
CREATE TABLE `hr_status_timekeeping` (
  `id` int(11) NOT NULL auto_increment,
  `note` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_status_timekeeping
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_stipulate_responsibility`
-- ----------------------------
DROP TABLE IF EXISTS `hr_stipulate_responsibility`;
CREATE TABLE `hr_stipulate_responsibility` (
  `id` int(11) NOT NULL auto_increment,
  `rate` decimal(10,0) default NULL,
  `bonus` decimal(10,0) default NULL,
  `note` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_stipulate_responsibility
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_stipulate_timeinout`
-- ----------------------------
DROP TABLE IF EXISTS `hr_stipulate_timeinout`;
CREATE TABLE `hr_stipulate_timeinout` (
  `id` int(11) NOT NULL auto_increment,
  `type` bit(1) default NULL,
  `time_from` decimal(10,0) default NULL,
  `rate` decimal(10,2) default NULL,
  `note` varchar(255) default NULL,
  `time_to` decimal(10,0) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_stipulate_timeinout
-- ----------------------------
INSERT INTO `hr_stipulate_timeinout` VALUES ('1', '', '300', '4.00', null, null);
INSERT INTO `hr_stipulate_timeinout` VALUES ('2', '', '-360', '3.00', null, '300');
INSERT INTO `hr_stipulate_timeinout` VALUES ('3', '', '-660', '2.50', null, '-360');
INSERT INTO `hr_stipulate_timeinout` VALUES ('4', '', '-960', '2.00', null, '-660');
INSERT INTO `hr_stipulate_timeinout` VALUES ('5', '', '-1260', '1.50', null, '-960');
INSERT INTO `hr_stipulate_timeinout` VALUES ('6', '', '-1560', '1.00', null, '-1260');
INSERT INTO `hr_stipulate_timeinout` VALUES ('7', '', '-1860', '0.50', null, '-1560');
INSERT INTO `hr_stipulate_timeinout` VALUES ('8', '', '-2400', '0.00', null, '-1860');
INSERT INTO `hr_stipulate_timeinout` VALUES ('9', '', '-3000', '-1.00', null, '-2400');
INSERT INTO `hr_stipulate_timeinout` VALUES ('10', '', '-3600', '-1.50', null, '-3000');
INSERT INTO `hr_stipulate_timeinout` VALUES ('11', '', '-5400', '-2.00', null, '-3600');
INSERT INTO `hr_stipulate_timeinout` VALUES ('12', '', '-7200', '-2.50', null, '-5400');
INSERT INTO `hr_stipulate_timeinout` VALUES ('13', '', '-9000', '-3.00', null, '-7200');
INSERT INTO `hr_stipulate_timeinout` VALUES ('14', '', '-10800', '-3.50', null, '-9000');
INSERT INTO `hr_stipulate_timeinout` VALUES ('15', '', '-12600', '-4.00', null, '-10800');
INSERT INTO `hr_stipulate_timeinout` VALUES ('16', '', '-21600', '-4.50', null, '-12600');
INSERT INTO `hr_stipulate_timeinout` VALUES ('17', '', null, '-5.00', null, '-21600');
INSERT INTO `hr_stipulate_timeinout` VALUES ('18', '', '-7200', '-4.00', null, null);
INSERT INTO `hr_stipulate_timeinout` VALUES ('19', '', '-5400', '-3.00', null, '-7200');
INSERT INTO `hr_stipulate_timeinout` VALUES ('20', '', '-3600', '-2.50', null, '-3000');
INSERT INTO `hr_stipulate_timeinout` VALUES ('21', '', '-3000', '-2.00', null, null);

-- ----------------------------
-- Table structure for `hr_stipulate_work`
-- ----------------------------
DROP TABLE IF EXISTS `hr_stipulate_work`;
CREATE TABLE `hr_stipulate_work` (
  `id` int(11) NOT NULL auto_increment,
  `rate_from` decimal(10,2) default NULL,
  `work_rate` decimal(10,2) default NULL,
  `note` varchar(255) default NULL,
  `rate_to` decimal(10,2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_stipulate_work
-- ----------------------------
INSERT INTO `hr_stipulate_work` VALUES ('1', '0.00', '25.00', 'giờ làm việc thực tế nhỏ hơn 25% giờ làm việc theo lịch', '25.00');
INSERT INTO `hr_stipulate_work` VALUES ('2', '25.00', '30.00', null, '50.00');
INSERT INTO `hr_stipulate_work` VALUES ('3', '50.00', '50.00', null, '65.00');
INSERT INTO `hr_stipulate_work` VALUES ('4', '65.00', '60.00', null, '75.00');
INSERT INTO `hr_stipulate_work` VALUES ('5', '75.00', '70.00', null, '85.00');
INSERT INTO `hr_stipulate_work` VALUES ('6', '85.00', '80.00', null, '96.50');
INSERT INTO `hr_stipulate_work` VALUES ('7', '96.50', '100.00', null, null);

-- ----------------------------
-- Table structure for `hr_stipulate_workholiday`
-- ----------------------------
DROP TABLE IF EXISTS `hr_stipulate_workholiday`;
CREATE TABLE `hr_stipulate_workholiday` (
  `id` int(11) NOT NULL auto_increment,
  `note` varchar(255) default NULL,
  `bonus` decimal(10,0) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_stipulate_workholiday
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_study_field`
-- ----------------------------
DROP TABLE IF EXISTS `hr_study_field`;
CREATE TABLE `hr_study_field` (
  `id` tinyint(11) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_study_field
-- ----------------------------
INSERT INTO `hr_study_field` VALUES ('2', 'Kế Toán');
INSERT INTO `hr_study_field` VALUES ('3', 'Quản Trị Kinh Doanh');
INSERT INTO `hr_study_field` VALUES ('4', 'In Ấn');
INSERT INTO `hr_study_field` VALUES ('5', 'Phổ Thông');

-- ----------------------------
-- Table structure for `hr_timekeeping`
-- ----------------------------
DROP TABLE IF EXISTS `hr_timekeeping`;
CREATE TABLE `hr_timekeeping` (
  `id` int(11) NOT NULL auto_increment,
  `emp_id` int(11) default NULL,
  `date` date default NULL,
  `time_recorder_id` int(11) default NULL,
  `shift_details_id` int(11) default NULL,
  `status_id` int(4) default NULL,
  `note` varchar(255) default NULL,
  `plan_id` int(11) default NULL,
  `total_work` time default NULL,
  `total_work_shift` time default NULL,
  `compare_time_in` time default NULL,
  `compare_time_out` time default NULL,
  PRIMARY KEY  (`id`),
  KEY `status_id` USING BTREE (`status_id`),
  KEY `emp_id` USING BTREE (`emp_id`),
  KEY `shift_details_id` USING BTREE (`shift_details_id`),
  KEY `time_recorder_id` USING BTREE (`time_recorder_id`),
  CONSTRAINT `hr_timekeeping_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `hr_status_timekeeping` (`id`),
  CONSTRAINT `hr_timekeeping_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_timekeeping_ibfk_3` FOREIGN KEY (`shift_details_id`) REFERENCES `hr_shift_detail` (`id`),
  CONSTRAINT `hr_timekeeping_ibfk_4` FOREIGN KEY (`time_recorder_id`) REFERENCES `hr_time_recorder` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6318 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_timekeeping
-- ----------------------------
INSERT INTO `hr_timekeeping` VALUES ('5843', '10', '2012-11-01', '37', '1861', null, null, '40', '09:15:00', '03:00:00', '01:45:00', '08:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5844', '13', '2012-11-01', '38', '1862', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5845', '10', '2012-11-02', '39', '1864', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5846', '13', '2012-11-02', '40', '1865', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5847', '9', '2012-11-03', '41', '1866', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5848', '10', '2012-11-03', '42', '1867', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5849', '13', '2012-11-03', '43', '1868', null, null, '40', '09:15:00', '00:00:00', '07:45:00', '17:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5850', '9', '2012-11-05', '44', '1869', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5851', '10', '2012-11-05', '45', '1870', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5852', '13', '2012-11-05', '46', '1871', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5853', '9', '2012-11-07', '47', '1872', null, null, '40', '09:15:00', '02:15:00', '00:15:00', '07:15:00');
INSERT INTO `hr_timekeeping` VALUES ('5854', '10', '2012-11-06', '48', '1873', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5855', '13', '2012-11-06', '49', '1874', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5856', '9', '2012-11-26', '50', '1893', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5857', '10', '2012-11-16', '51', '1905', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5858', '10', '2012-11-26', '52', '1913', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5859', '13', '2012-11-24', '53', '1931', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5860', '16', '2012-11-01', '54', '1938', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5861', '16', '2012-11-08', '55', '1945', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5862', '16', '2012-11-17', '56', '1953', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5863', '16', '2012-11-21', '57', '1957', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5864', '16', '2012-11-27', '58', '1963', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5865', '19', '2012-11-01', '59', '1967', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5866', '19', '2012-11-19', '60', '1984', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5867', '19', '2012-11-28', '61', '1993', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5868', '24', '2012-11-01', '62', '1996', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5869', '24', '2012-11-21', '63', '2016', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5870', '24', '2012-11-26', '64', '2021', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5871', '24', '2012-11-29', '65', '2024', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5872', '25', '2012-11-01', '66', '2026', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5873', '25', '2012-11-10', '67', '2035', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5874', '25', '2012-11-23', '68', '2045', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5875', '32', '2012-11-01', '69', '2051', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5876', '32', '2012-11-06', '70', '2056', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5877', '32', '2012-11-10', '71', '2060', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5878', '32', '2012-11-14', '72', '2064', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5879', '32', '2012-11-20', '73', '2070', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5880', '32', '2012-11-24', '74', '2074', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5881', '42', '2012-11-05', '75', '2084', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5882', '42', '2012-11-10', '76', '2089', null, null, '40', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5883', '9', '2012-11-02', '77', '1863', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5884', '9', '2012-11-14', '78', '1883', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5885', '9', '2012-11-19', '79', '1887', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5886', '10', '2012-11-15', '80', '1904', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5887', '10', '2012-11-24', '81', '1912', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5888', '13', '2012-11-16', '82', '1924', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5889', '13', '2012-11-25', '83', '1932', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5890', '13', '2012-11-29', '84', '1936', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5891', '16', '2012-11-28', '85', '1964', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5892', '19', '2012-11-02', '86', '1968', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5893', '19', '2012-11-10', '87', '1975', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5894', '19', '2012-11-17', '88', '1982', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5895', '19', '2012-11-18', '89', '1983', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5896', '19', '2012-11-20', '90', '1985', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5897', '19', '2012-11-25', '91', '1990', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5898', '24', '2012-11-04', '92', '1999', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5899', '24', '2012-11-10', '93', '2005', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5900', '24', '2012-11-20', '94', '2015', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5901', '24', '2012-11-28', '95', '2023', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5902', '32', '2012-11-19', '96', '2069', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5903', '42', '2012-11-04', '97', '2083', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5904', '42', '2012-11-09', '98', '2088', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5905', '42', '2012-11-30', '99', '2098', null, null, '40', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5906', '10', '2012-11-07', '100', '1876', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5907', '9', '2012-11-08', '101', '1878', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5908', '9', '2012-11-27', '102', '1894', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5909', '10', '2012-11-08', '103', '1898', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5910', '10', '2012-11-27', '104', '1914', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5911', '13', '2012-11-26', '105', '1933', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5912', '16', '2012-11-07', '106', '1944', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5913', '16', '2012-11-10', '107', '1947', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5914', '16', '2012-11-16', '108', '1952', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5915', '16', '2012-11-20', '109', '1956', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5916', '16', '2012-11-24', '110', '1960', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5917', '19', '2012-11-09', '111', '1974', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5918', '19', '2012-11-11', '112', '1976', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5919', '19', '2012-11-12', '113', '1977', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5920', '19', '2012-11-30', '114', '1994', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5921', '24', '2012-11-06', '115', '2001', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5922', '24', '2012-11-22', '116', '2017', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5923', '24', '2012-11-25', '117', '2020', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5924', '25', '2012-11-09', '118', '2034', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5925', '25', '2012-11-19', '119', '2041', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5926', '32', '2012-11-05', '120', '2055', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5927', '32', '2012-11-15', '121', '2065', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5928', '32', '2012-11-17', '122', '2067', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5929', '32', '2012-11-30', '123', '2079', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5930', '42', '2012-11-08', '124', '2087', null, null, '40', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5931', '13', '2012-11-07', '125', '1877', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5932', '9', '2012-11-09', '126', '1879', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5933', '9', '2012-11-15', '127', '1884', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5934', '9', '2012-11-20', '128', '1888', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5935', '9', '2012-11-24', '129', '1892', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5936', '9', '2012-11-28', '130', '1895', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5937', '10', '2012-11-09', '131', '1899', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5938', '10', '2012-11-14', '132', '1903', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5939', '10', '2012-11-23', '133', '1911', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5940', '10', '2012-11-28', '134', '1915', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5941', '13', '2012-11-14', '135', '1922', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5942', '13', '2012-11-15', '136', '1923', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5943', '13', '2012-11-21', '137', '1928', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5944', '13', '2012-11-30', '138', '1937', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5945', '16', '2012-11-02', '139', '1939', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5946', '16', '2012-11-04', '140', '1941', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5947', '16', '2012-11-30', '141', '1966', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5948', '19', '2012-11-03', '142', '1969', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5949', '19', '2012-11-16', '143', '1981', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5950', '19', '2012-11-21', '144', '1986', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5951', '19', '2012-11-24', '145', '1989', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5952', '19', '2012-11-26', '146', '1991', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5953', '19', '2012-11-29', '147', '1995', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5954', '24', '2012-11-02', '148', '1997', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5955', '24', '2012-11-05', '149', '2000', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5956', '24', '2012-11-09', '150', '2004', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5957', '24', '2012-11-14', '151', '2009', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5958', '24', '2012-11-17', '152', '2012', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5959', '24', '2012-11-27', '153', '2022', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5960', '25', '2012-11-08', '154', '2033', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5961', '25', '2012-11-17', '155', '2036', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5962', '25', '2012-11-12', '156', '2040', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5963', '32', '2012-11-04', '157', '2054', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5964', '32', '2012-11-11', '158', '2061', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5965', '32', '2012-11-12', '159', '2062', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5966', '32', '2012-11-21', '160', '2071', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5967', '32', '2012-11-23', '161', '2073', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5968', '32', '2012-11-28', '162', '2077', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5969', '42', '2012-11-23', '163', '2095', null, null, '40', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5970', '9', '2012-11-13', '164', '1882', null, null, '40', '03:55:00', '00:00:00', '13:05:00', '17:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5971', '9', '2012-11-16', '165', '1885', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5972', '9', '2012-11-21', '166', '1889', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5973', '9', '2012-11-29', '167', '1896', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5974', '9', '2012-11-30', '168', '1897', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5975', '10', '2012-11-17', '169', '1906', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5976', '10', '2012-11-20', '170', '1908', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5977', '10', '2012-11-21', '171', '1909', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5978', '10', '2012-11-29', '172', '1917', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5979', '13', '2012-11-11', '173', '1919', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5980', '13', '2012-11-10', '174', '1920', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5981', '13', '2012-11-20', '175', '1927', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5982', '13', '2012-11-22', '176', '1929', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5983', '13', '2012-11-28', '177', '1935', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5984', '16', '2012-11-05', '178', '1942', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5985', '16', '2012-11-09', '179', '1946', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5986', '16', '2012-11-15', '180', '1951', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5987', '16', '2012-11-19', '181', '1955', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5988', '16', '2012-11-22', '182', '1958', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5989', '16', '2012-11-23', '183', '1959', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5990', '16', '2012-11-25', '184', '1961', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5991', '19', '2012-11-05', '185', '1970', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5992', '19', '2012-11-07', '186', '1972', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5993', '24', '2012-11-08', '187', '2003', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5994', '24', '2012-11-13', '188', '2008', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5995', '24', '2012-11-16', '189', '2011', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5996', '24', '2012-11-19', '190', '2014', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5997', '24', '2012-11-23', '191', '2018', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5998', '25', '2012-11-02', '192', '2027', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('5999', '25', '2012-11-05', '193', '2030', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6000', '25', '2012-11-07', '194', '2032', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6001', '25', '2012-11-15', '195', '2037', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6002', '25', '2012-11-20', '196', '2042', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6003', '25', '2012-11-22', '197', '2044', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6004', '25', '2012-11-26', '198', '2046', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6005', '25', '2012-11-28', '199', '2049', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6006', '32', '2012-11-02', '200', '2052', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6007', '32', '2012-11-09', '201', '2059', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6008', '32', '2012-11-29', '202', '2078', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6009', '42', '2012-11-02', '203', '2081', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6010', '42', '2012-11-03', '204', '2082', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6011', '42', '2012-11-07', '205', '2086', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6012', '42', '2012-11-28', '206', '2097', null, null, '40', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6013', '9', '2012-11-10', '207', '1880', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6014', '9', '2012-11-17', '208', '1886', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6015', '9', '2012-11-23', '209', '1891', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6016', '10', '2012-11-10', '210', '1900', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6017', '10', '2012-11-13', '211', '1902', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6018', '10', '2012-11-19', '212', '1907', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6019', '13', '2012-11-12', '213', '1921', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6020', '13', '2012-11-23', '214', '1930', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6021', '13', '2012-11-27', '215', '1934', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6022', '16', '2012-11-12', '216', '1948', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6023', '16', '2012-11-13', '217', '1950', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6024', '16', '2012-11-18', '218', '1954', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6025', '16', '2012-11-26', '219', '1962', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6026', '19', '2012-11-08', '220', '1973', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6027', '19', '2012-11-13', '221', '1978', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6028', '19', '2012-11-15', '222', '1980', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6029', '19', '2012-11-22', '223', '1987', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6030', '19', '2012-11-27', '224', '1992', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6031', '24', '2012-11-07', '225', '2002', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6032', '24', '2012-11-12', '226', '2007', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6033', '24', '2012-11-15', '227', '2010', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6034', '25', '2012-11-03', '228', '2028', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6035', '25', '2012-11-13', '229', '2039', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6036', '25', '2012-11-25', '230', '2048', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6037', '32', '2012-11-07', '231', '2057', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6038', '32', '2012-11-13', '232', '2063', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6039', '32', '2012-11-16', '233', '2066', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6040', '32', '2012-11-25', '234', '2075', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6041', '32', '2012-11-27', '235', '2076', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6042', '42', '2012-11-19', '236', '2093', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6043', '42', '2012-11-26', '237', '2096', null, null, '40', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6044', '9', '2012-11-12', '238', '1881', null, null, '40', '09:00:00', '00:00:00', '08:00:00', '17:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6045', '9', '2012-11-22', '239', '1890', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6046', '10', '2012-11-12', '240', '1901', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6047', '10', '2012-11-22', '241', '1910', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6048', '10', '2012-11-30', '242', '1916', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6049', '13', '2012-11-08', '243', '1918', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6050', '13', '2012-11-17', '244', '1925', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6051', '13', '2012-11-18', '245', '1926', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6052', '16', '2012-11-03', '246', '1940', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6053', '16', '2012-11-06', '247', '1943', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6054', '16', '2012-11-11', '248', '1949', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6055', '16', '2012-11-29', '249', '1965', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6056', '19', '2012-11-06', '250', '1971', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6057', '19', '2012-11-14', '251', '1979', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6058', '19', '2012-11-23', '252', '1988', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6059', '24', '2012-11-03', '253', '1998', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6060', '24', '2012-11-11', '254', '2006', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6061', '24', '2012-11-18', '255', '2013', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6062', '24', '2012-11-24', '256', '2019', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6063', '24', '2012-11-30', '257', '2025', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6064', '25', '2012-11-04', '258', '2029', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6065', '25', '2012-11-06', '259', '2031', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6066', '25', '2012-11-14', '260', '2038', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6067', '25', '2012-11-21', '261', '2043', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6068', '25', '2012-11-24', '262', '2047', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6069', '25', '2012-11-30', '263', '2050', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6070', '32', '2012-11-03', '264', '2053', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6071', '32', '2012-11-08', '265', '2058', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6072', '32', '2012-11-18', '266', '2068', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6073', '32', '2012-11-22', '267', '2072', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6074', '42', '2012-11-01', '268', '2080', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6075', '42', '2012-11-06', '269', '2085', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6076', '42', '2012-11-12', '270', '2090', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6077', '42', '2012-11-14', '271', '2091', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6078', '42', '2012-11-16', '272', '2092', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6079', '42', '2012-11-21', '273', '2094', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6080', '42', '2012-11-22', '274', '2099', null, null, '40', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6098', '3', '2012-11-01', '275', '2127', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6099', '3', '2012-11-16', '276', '2141', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6100', '6', '2012-11-01', '277', '2153', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6101', '6', '2012-11-23', '278', '2169', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6102', '12', '2012-11-01', '279', '2178', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6103', '12', '2012-11-14', '280', '2190', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6104', '12', '2012-11-18', '281', '2200', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6105', '15', '2012-11-01', '282', '2205', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6106', '15', '2012-11-26', '283', '2232', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6107', '15', '2012-11-24', '284', '2233', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6108', '15', '2012-11-25', '285', '2234', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6109', '18', '2012-11-08', '286', '2291', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6110', '26', '2012-11-08', '287', '2292', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6111', '27', '2012-11-08', '288', '2293', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6112', '30', '2012-11-08', '289', '2294', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6113', '38', '2012-11-08', '290', '2295', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6114', '39', '2012-11-08', '291', '2296', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6115', '43', '2012-11-08', '292', '2297', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6116', '18', '2012-11-13', '293', '2333', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6117', '26', '2012-11-13', '294', '2334', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6118', '27', '2012-11-13', '295', '2335', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6119', '30', '2012-11-13', '296', '2336', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6120', '38', '2012-11-13', '297', '2337', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6121', '39', '2012-11-13', '298', '2338', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6122', '43', '2012-11-13', '299', '2339', null, null, '43', '09:15:00', '09:15:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6123', '3', '2012-11-02', '300', '2128', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6124', '3', '2012-11-15', '301', '2140', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6125', '3', '2012-11-29', '302', '2150', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6126', '3', '2012-11-27', '303', '2152', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6127', '6', '2012-11-04', '304', '2156', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6128', '6', '2012-11-16', '305', '2162', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6129', '6', '2012-11-24', '306', '2168', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6130', '6', '2012-11-20', '307', '2172', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6131', '12', '2012-11-06', '308', '2185', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6132', '12', '2012-11-15', '309', '2191', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6133', '15', '2012-11-05', '310', '2213', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6134', '15', '2012-11-11', '311', '2222', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6135', '18', '2012-11-10', '312', '2298', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6136', '26', '2012-11-10', '313', '2299', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6137', '27', '2012-11-10', '314', '2300', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6138', '30', '2012-11-10', '315', '2301', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6139', '38', '2012-11-10', '316', '2302', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6140', '39', '2012-11-10', '317', '2303', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6141', '43', '2012-11-10', '318', '2304', null, null, '43', '13:00:00', '13:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6142', '3', '2012-11-11', '319', '2136', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6143', '3', '2012-11-13', '320', '2138', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6144', '3', '2012-11-21', '321', '2145', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6145', '3', '2012-11-19', '322', '2147', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6146', '3', '2012-11-30', '323', '2149', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6147', '6', '2012-11-03', '324', '2155', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6148', '6', '2012-11-11', '325', '2167', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6149', '6', '2012-11-21', '326', '2171', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6150', '6', '2012-11-26', '327', '2177', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6151', '12', '2012-11-07', '328', '2184', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6152', '12', '2012-11-13', '329', '2189', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6153', '12', '2012-11-21', '330', '2197', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6154', '15', '2012-11-10', '331', '2208', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6155', '15', '2012-11-08', '332', '2209', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6156', '15', '2012-11-07', '333', '2211', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6157', '15', '2012-11-06', '334', '2212', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6158', '15', '2012-11-30', '335', '2228', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6159', '15', '2012-11-28', '336', '2229', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6160', '18', '2012-11-01', '337', '2235', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6161', '26', '2012-11-01', '338', '2236', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6162', '27', '2012-11-01', '339', '2237', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6163', '30', '2012-11-01', '340', '2238', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6164', '38', '2012-11-01', '341', '2239', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6165', '39', '2012-11-01', '342', '2240', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6166', '43', '2012-11-01', '343', '2241', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6167', '18', '2012-11-03', '344', '2263', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6168', '26', '2012-11-03', '345', '2264', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6169', '27', '2012-11-03', '346', '2265', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6170', '30', '2012-11-03', '347', '2266', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6171', '38', '2012-11-03', '348', '2267', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6172', '39', '2012-11-03', '349', '2268', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6173', '43', '2012-11-03', '350', '2269', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6174', '18', '2012-11-15', '351', '2326', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6175', '26', '2012-11-15', '352', '2327', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6176', '27', '2012-11-15', '353', '2328', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6177', '30', '2012-11-15', '354', '2329', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6178', '38', '2012-11-15', '355', '2330', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6179', '39', '2012-11-15', '356', '2331', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6180', '43', '2012-11-15', '357', '2332', null, null, '43', '12:30:00', '12:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6181', '3', '2012-11-06', '358', '2131', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6182', '3', '2012-11-20', '359', '2146', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6183', '3', '2012-11-18', '360', '2148', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6184', '6', '2012-11-02', '361', '2154', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6185', '6', '2012-11-17', '362', '2161', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6186', '6', '2012-11-14', '363', '2163', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6187', '6', '2012-11-27', '364', '2176', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6188', '12', '2012-11-03', '365', '2180', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6189', '12', '2012-11-11', '366', '2187', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6190', '12', '2012-11-23', '367', '2196', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6191', '12', '2012-11-25', '368', '2204', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6192', '15', '2012-11-09', '369', '2210', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6193', '15', '2012-11-14', '370', '2215', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6194', '15', '2012-11-17', '371', '2218', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6195', '15', '2012-11-16', '372', '2219', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6196', '15', '2012-11-12', '373', '2221', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6197', '15', '2012-11-27', '374', '2230', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6198', '18', '2012-11-02', '375', '2242', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6199', '26', '2012-11-02', '376', '2243', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6200', '27', '2012-11-02', '377', '2244', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6201', '30', '2012-11-02', '378', '2245', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6202', '38', '2012-11-02', '379', '2246', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6203', '39', '2012-11-02', '380', '2247', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6204', '43', '2012-11-02', '381', '2248', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6205', '18', '2012-11-17', '382', '2305', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6206', '26', '2012-11-17', '383', '2306', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6207', '27', '2012-11-17', '384', '2307', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6208', '30', '2012-11-17', '385', '2308', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6209', '38', '2012-11-17', '386', '2309', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6210', '39', '2012-11-17', '387', '2310', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6211', '43', '2012-11-17', '388', '2311', null, null, '43', '09:30:00', '09:30:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6212', '3', '2012-11-04', '389', '2130', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6213', '3', '2012-11-09', '390', '2134', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6214', '3', '2012-11-24', '391', '2143', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6215', '6', '2012-11-06', '392', '2157', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6216', '6', '2012-11-09', '393', '2160', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6217', '6', '2012-11-13', '394', '2164', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6218', '6', '2012-11-12', '395', '2166', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6219', '6', '2012-11-22', '396', '2170', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6220', '6', '2012-11-19', '397', '2173', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6221', '6', '2012-11-28', '398', '2175', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6222', '12', '2012-11-02', '399', '2179', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6223', '12', '2012-11-10', '400', '2181', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6224', '12', '2012-11-08', '401', '2183', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6225', '12', '2012-11-12', '402', '2188', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6226', '12', '2012-11-16', '403', '2192', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6227', '12', '2012-11-24', '404', '2194', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6228', '12', '2012-11-19', '405', '2199', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6229', '12', '2012-11-28', '406', '2201', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6230', '12', '2012-11-27', '407', '2202', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6231', '15', '2012-11-02', '408', '2206', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6232', '15', '2012-11-04', '409', '2214', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6233', '15', '2012-11-23', '410', '2217', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6234', '15', '2012-11-22', '411', '2223', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6235', '15', '2012-11-20', '412', '2225', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6236', '15', '2012-11-29', '413', '2231', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6237', '18', '2012-11-09', '414', '2249', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6238', '26', '2012-11-09', '415', '2250', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6239', '27', '2012-11-09', '416', '2251', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6240', '30', '2012-11-09', '417', '2252', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6241', '38', '2012-11-09', '418', '2253', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6242', '39', '2012-11-09', '419', '2254', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6243', '43', '2012-11-09', '420', '2255', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6244', '18', '2012-11-05', '421', '2270', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6245', '26', '2012-11-05', '422', '2271', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6246', '27', '2012-11-05', '423', '2272', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6247', '30', '2012-11-05', '424', '2273', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6248', '38', '2012-11-05', '425', '2274', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6249', '39', '2012-11-05', '426', '2275', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6250', '43', '2012-11-05', '427', '2276', null, null, '43', '03:55:00', '03:55:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6251', '3', '2012-11-03', '428', '2129', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6252', '3', '2012-11-07', '429', '2132', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6253', '3', '2012-11-10', '430', '2135', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6254', '3', '2012-11-12', '431', '2137', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6255', '6', '2012-11-08', '432', '2159', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6256', '6', '2012-11-29', '433', '2165', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6257', '12', '2012-11-09', '434', '2182', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6258', '12', '2012-11-17', '435', '2193', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6259', '12', '2012-11-22', '436', '2195', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6260', '15', '2012-11-03', '437', '2207', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6261', '15', '2012-11-15', '438', '2216', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6262', '15', '2012-11-21', '439', '2224', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6263', '15', '2012-11-18', '440', '2227', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6264', '18', '2012-11-06', '441', '2256', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6265', '26', '2012-11-06', '442', '2257', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6266', '27', '2012-11-06', '443', '2258', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6267', '30', '2012-11-06', '444', '2259', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6268', '38', '2012-11-06', '445', '2260', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6269', '39', '2012-11-06', '446', '2261', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6270', '43', '2012-11-06', '447', '2262', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6271', '18', '2012-11-04', '448', '2277', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6272', '26', '2012-11-04', '449', '2278', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6273', '27', '2012-11-04', '450', '2279', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6274', '30', '2012-11-04', '451', '2280', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6275', '38', '2012-11-04', '452', '2281', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6276', '39', '2012-11-04', '453', '2282', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6277', '43', '2012-11-04', '454', '2283', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6278', '18', '2012-11-16', '455', '2312', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6279', '26', '2012-11-16', '456', '2313', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6280', '27', '2012-11-16', '457', '2314', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6281', '30', '2012-11-16', '458', '2315', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6282', '38', '2012-11-16', '459', '2316', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6283', '39', '2012-11-16', '460', '2317', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6284', '43', '2012-11-16', '461', '2318', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6285', '18', '2012-11-14', '462', '2319', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6286', '26', '2012-11-14', '463', '2320', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6287', '27', '2012-11-14', '464', '2321', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6288', '30', '2012-11-14', '465', '2322', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6289', '38', '2012-11-14', '466', '2323', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6290', '39', '2012-11-14', '467', '2324', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6291', '43', '2012-11-14', '468', '2325', null, null, '43', '08:00:00', '08:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6292', '3', '2012-11-08', '469', '2133', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6293', '3', '2012-11-14', '470', '2139', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6294', '3', '2012-11-17', '471', '2142', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6295', '3', '2012-11-22', '472', '2144', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6296', '3', '2012-11-28', '473', '2151', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6297', '6', '2012-11-07', '474', '2158', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6298', '6', '2012-11-30', '475', '2174', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6299', '12', '2012-11-05', '476', '2186', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6300', '12', '2012-11-20', '477', '2198', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6301', '12', '2012-11-26', '478', '2203', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6302', '15', '2012-11-13', '479', '2220', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6303', '15', '2012-11-19', '480', '2226', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6304', '18', '2012-11-07', '481', '2284', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6305', '26', '2012-11-07', '482', '2285', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6306', '27', '2012-11-07', '483', '2286', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6307', '30', '2012-11-07', '484', '2287', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6308', '38', '2012-11-07', '485', '2288', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6309', '39', '2012-11-07', '486', '2289', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6310', '43', '2012-11-07', '487', '2290', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6311', '18', '2012-11-12', '488', '2340', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6312', '26', '2012-11-12', '489', '2341', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6313', '27', '2012-11-12', '490', '2342', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6314', '30', '2012-11-12', '491', '2343', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6315', '38', '2012-11-12', '492', '2344', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6316', '39', '2012-11-12', '493', '2345', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');
INSERT INTO `hr_timekeeping` VALUES ('6317', '43', '2012-11-12', '494', '2346', null, null, '43', '09:00:00', '09:00:00', '00:00:00', '00:00:00');

-- ----------------------------
-- Table structure for `hr_time_recorder`
-- ----------------------------
DROP TABLE IF EXISTS `hr_time_recorder`;
CREATE TABLE `hr_time_recorder` (
  `id` int(11) NOT NULL auto_increment,
  `date` date NOT NULL,
  `emp_id` int(11) NOT NULL,
  `time_in` time default NULL,
  `time_out` time default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `kt` USING BTREE (`date`,`emp_id`),
  KEY `emp_id` USING BTREE (`emp_id`),
  CONSTRAINT `hr_time_recorder_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=495 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_time_recorder
-- ----------------------------
INSERT INTO `hr_time_recorder` VALUES ('37', '2012-11-01', '10', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('38', '2012-11-01', '13', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('39', '2012-11-02', '10', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('40', '2012-11-02', '13', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('41', '2012-11-03', '9', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('42', '2012-11-03', '10', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('43', '2012-11-03', '13', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('44', '2012-11-05', '9', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('45', '2012-11-05', '10', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('46', '2012-11-05', '13', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('47', '2012-11-07', '9', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('48', '2012-11-06', '10', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('49', '2012-11-06', '13', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('50', '2012-11-26', '9', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('51', '2012-11-16', '10', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('52', '2012-11-26', '10', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('53', '2012-11-24', '13', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('54', '2012-11-01', '16', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('55', '2012-11-08', '16', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('56', '2012-11-17', '16', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('57', '2012-11-21', '16', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('58', '2012-11-27', '16', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('59', '2012-11-01', '19', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('60', '2012-11-19', '19', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('61', '2012-11-28', '19', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('62', '2012-11-01', '24', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('63', '2012-11-21', '24', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('64', '2012-11-26', '24', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('65', '2012-11-29', '24', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('66', '2012-11-01', '25', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('67', '2012-11-10', '25', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('68', '2012-11-23', '25', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('69', '2012-11-01', '32', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('70', '2012-11-06', '32', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('71', '2012-11-10', '32', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('72', '2012-11-14', '32', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('73', '2012-11-20', '32', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('74', '2012-11-24', '32', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('75', '2012-11-05', '42', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('76', '2012-11-10', '42', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('77', '2012-11-02', '9', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('78', '2012-11-14', '9', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('79', '2012-11-19', '9', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('80', '2012-11-15', '10', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('81', '2012-11-24', '10', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('82', '2012-11-16', '13', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('83', '2012-11-25', '13', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('84', '2012-11-29', '13', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('85', '2012-11-28', '16', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('86', '2012-11-02', '19', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('87', '2012-11-10', '19', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('88', '2012-11-17', '19', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('89', '2012-11-18', '19', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('90', '2012-11-20', '19', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('91', '2012-11-25', '19', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('92', '2012-11-04', '24', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('93', '2012-11-10', '24', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('94', '2012-11-20', '24', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('95', '2012-11-28', '24', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('96', '2012-11-19', '32', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('97', '2012-11-04', '42', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('98', '2012-11-09', '42', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('99', '2012-11-30', '42', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('100', '2012-11-07', '10', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('101', '2012-11-08', '9', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('102', '2012-11-27', '9', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('103', '2012-11-08', '10', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('104', '2012-11-27', '10', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('105', '2012-11-26', '13', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('106', '2012-11-07', '16', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('107', '2012-11-10', '16', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('108', '2012-11-16', '16', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('109', '2012-11-20', '16', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('110', '2012-11-24', '16', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('111', '2012-11-09', '19', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('112', '2012-11-11', '19', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('113', '2012-11-12', '19', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('114', '2012-11-30', '19', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('115', '2012-11-06', '24', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('116', '2012-11-22', '24', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('117', '2012-11-25', '24', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('118', '2012-11-09', '25', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('119', '2012-11-19', '25', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('120', '2012-11-05', '32', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('121', '2012-11-15', '32', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('122', '2012-11-17', '32', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('123', '2012-11-30', '32', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('124', '2012-11-08', '42', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('125', '2012-11-07', '13', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('126', '2012-11-09', '9', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('127', '2012-11-15', '9', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('128', '2012-11-20', '9', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('129', '2012-11-24', '9', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('130', '2012-11-28', '9', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('131', '2012-11-09', '10', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('132', '2012-11-14', '10', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('133', '2012-11-23', '10', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('134', '2012-11-28', '10', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('135', '2012-11-14', '13', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('136', '2012-11-15', '13', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('137', '2012-11-21', '13', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('138', '2012-11-30', '13', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('139', '2012-11-02', '16', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('140', '2012-11-04', '16', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('141', '2012-11-30', '16', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('142', '2012-11-03', '19', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('143', '2012-11-16', '19', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('144', '2012-11-21', '19', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('145', '2012-11-24', '19', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('146', '2012-11-26', '19', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('147', '2012-11-29', '19', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('148', '2012-11-02', '24', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('149', '2012-11-05', '24', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('150', '2012-11-09', '24', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('151', '2012-11-14', '24', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('152', '2012-11-17', '24', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('153', '2012-11-27', '24', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('154', '2012-11-08', '25', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('155', '2012-11-17', '25', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('156', '2012-11-12', '25', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('157', '2012-11-04', '32', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('158', '2012-11-11', '32', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('159', '2012-11-12', '32', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('160', '2012-11-21', '32', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('161', '2012-11-23', '32', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('162', '2012-11-28', '32', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('163', '2012-11-23', '42', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('164', '2012-11-13', '9', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('165', '2012-11-16', '9', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('166', '2012-11-21', '9', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('167', '2012-11-29', '9', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('168', '2012-11-30', '9', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('169', '2012-11-17', '10', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('170', '2012-11-20', '10', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('171', '2012-11-21', '10', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('172', '2012-11-29', '10', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('173', '2012-11-11', '13', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('174', '2012-11-10', '13', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('175', '2012-11-20', '13', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('176', '2012-11-22', '13', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('177', '2012-11-28', '13', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('178', '2012-11-05', '16', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('179', '2012-11-09', '16', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('180', '2012-11-15', '16', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('181', '2012-11-19', '16', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('182', '2012-11-22', '16', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('183', '2012-11-23', '16', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('184', '2012-11-25', '16', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('185', '2012-11-05', '19', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('186', '2012-11-07', '19', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('187', '2012-11-08', '24', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('188', '2012-11-13', '24', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('189', '2012-11-16', '24', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('190', '2012-11-19', '24', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('191', '2012-11-23', '24', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('192', '2012-11-02', '25', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('193', '2012-11-05', '25', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('194', '2012-11-07', '25', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('195', '2012-11-15', '25', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('196', '2012-11-20', '25', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('197', '2012-11-22', '25', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('198', '2012-11-26', '25', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('199', '2012-11-28', '25', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('200', '2012-11-02', '32', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('201', '2012-11-09', '32', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('202', '2012-11-29', '32', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('203', '2012-11-02', '42', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('204', '2012-11-03', '42', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('205', '2012-11-07', '42', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('206', '2012-11-28', '42', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('207', '2012-11-10', '9', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('208', '2012-11-17', '9', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('209', '2012-11-23', '9', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('210', '2012-11-10', '10', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('211', '2012-11-13', '10', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('212', '2012-11-19', '10', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('213', '2012-11-12', '13', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('214', '2012-11-23', '13', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('215', '2012-11-27', '13', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('216', '2012-11-12', '16', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('217', '2012-11-13', '16', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('218', '2012-11-18', '16', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('219', '2012-11-26', '16', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('220', '2012-11-08', '19', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('221', '2012-11-13', '19', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('222', '2012-11-15', '19', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('223', '2012-11-22', '19', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('224', '2012-11-27', '19', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('225', '2012-11-07', '24', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('226', '2012-11-12', '24', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('227', '2012-11-15', '24', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('228', '2012-11-03', '25', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('229', '2012-11-13', '25', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('230', '2012-11-25', '25', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('231', '2012-11-07', '32', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('232', '2012-11-13', '32', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('233', '2012-11-16', '32', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('234', '2012-11-25', '32', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('235', '2012-11-27', '32', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('236', '2012-11-19', '42', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('237', '2012-11-26', '42', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('238', '2012-11-12', '9', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('239', '2012-11-22', '9', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('240', '2012-11-12', '10', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('241', '2012-11-22', '10', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('242', '2012-11-30', '10', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('243', '2012-11-08', '13', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('244', '2012-11-17', '13', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('245', '2012-11-18', '13', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('246', '2012-11-03', '16', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('247', '2012-11-06', '16', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('248', '2012-11-11', '16', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('249', '2012-11-29', '16', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('250', '2012-11-06', '19', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('251', '2012-11-14', '19', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('252', '2012-11-23', '19', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('253', '2012-11-03', '24', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('254', '2012-11-11', '24', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('255', '2012-11-18', '24', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('256', '2012-11-24', '24', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('257', '2012-11-30', '24', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('258', '2012-11-04', '25', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('259', '2012-11-06', '25', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('260', '2012-11-14', '25', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('261', '2012-11-21', '25', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('262', '2012-11-24', '25', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('263', '2012-11-30', '25', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('264', '2012-11-03', '32', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('265', '2012-11-08', '32', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('266', '2012-11-18', '32', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('267', '2012-11-22', '32', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('268', '2012-11-01', '42', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('269', '2012-11-06', '42', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('270', '2012-11-12', '42', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('271', '2012-11-14', '42', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('272', '2012-11-16', '42', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('273', '2012-11-21', '42', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('274', '2012-11-22', '42', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('275', '2012-11-01', '3', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('276', '2012-11-16', '3', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('277', '2012-11-01', '6', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('278', '2012-11-23', '6', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('279', '2012-11-01', '12', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('280', '2012-11-14', '12', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('281', '2012-11-18', '12', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('282', '2012-11-01', '15', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('283', '2012-11-26', '15', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('284', '2012-11-24', '15', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('285', '2012-11-25', '15', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('286', '2012-11-08', '18', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('287', '2012-11-08', '26', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('288', '2012-11-08', '27', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('289', '2012-11-08', '30', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('290', '2012-11-08', '38', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('291', '2012-11-08', '39', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('292', '2012-11-08', '43', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('293', '2012-11-13', '18', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('294', '2012-11-13', '26', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('295', '2012-11-13', '27', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('296', '2012-11-13', '30', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('297', '2012-11-13', '38', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('298', '2012-11-13', '39', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('299', '2012-11-13', '43', '07:45:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('300', '2012-11-02', '3', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('301', '2012-11-15', '3', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('302', '2012-11-29', '3', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('303', '2012-11-27', '3', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('304', '2012-11-04', '6', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('305', '2012-11-16', '6', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('306', '2012-11-24', '6', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('307', '2012-11-20', '6', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('308', '2012-11-06', '12', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('309', '2012-11-15', '12', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('310', '2012-11-05', '15', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('311', '2012-11-11', '15', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('312', '2012-11-10', '18', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('313', '2012-11-10', '26', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('314', '2012-11-10', '27', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('315', '2012-11-10', '30', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('316', '2012-11-10', '38', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('317', '2012-11-10', '39', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('318', '2012-11-10', '43', '08:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('319', '2012-11-11', '3', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('320', '2012-11-13', '3', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('321', '2012-11-21', '3', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('322', '2012-11-19', '3', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('323', '2012-11-30', '3', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('324', '2012-11-03', '6', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('325', '2012-11-11', '6', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('326', '2012-11-21', '6', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('327', '2012-11-26', '6', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('328', '2012-11-07', '12', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('329', '2012-11-13', '12', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('330', '2012-11-21', '12', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('331', '2012-11-10', '15', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('332', '2012-11-08', '15', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('333', '2012-11-07', '15', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('334', '2012-11-06', '15', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('335', '2012-11-30', '15', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('336', '2012-11-28', '15', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('337', '2012-11-01', '18', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('338', '2012-11-01', '26', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('339', '2012-11-01', '27', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('340', '2012-11-01', '30', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('341', '2012-11-01', '38', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('342', '2012-11-01', '39', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('343', '2012-11-01', '43', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('344', '2012-11-03', '18', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('345', '2012-11-03', '26', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('346', '2012-11-03', '27', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('347', '2012-11-03', '30', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('348', '2012-11-03', '38', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('349', '2012-11-03', '39', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('350', '2012-11-03', '43', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('351', '2012-11-15', '18', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('352', '2012-11-15', '26', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('353', '2012-11-15', '27', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('354', '2012-11-15', '30', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('355', '2012-11-15', '38', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('356', '2012-11-15', '39', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('357', '2012-11-15', '43', '10:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('358', '2012-11-06', '3', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('359', '2012-11-20', '3', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('360', '2012-11-18', '3', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('361', '2012-11-02', '6', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('362', '2012-11-17', '6', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('363', '2012-11-14', '6', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('364', '2012-11-27', '6', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('365', '2012-11-03', '12', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('366', '2012-11-11', '12', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('367', '2012-11-23', '12', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('368', '2012-11-25', '12', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('369', '2012-11-09', '15', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('370', '2012-11-14', '15', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('371', '2012-11-17', '15', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('372', '2012-11-16', '15', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('373', '2012-11-12', '15', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('374', '2012-11-27', '15', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('375', '2012-11-02', '18', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('376', '2012-11-02', '26', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('377', '2012-11-02', '27', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('378', '2012-11-02', '30', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('379', '2012-11-02', '38', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('380', '2012-11-02', '39', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('381', '2012-11-02', '43', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('382', '2012-11-17', '18', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('383', '2012-11-17', '26', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('384', '2012-11-17', '27', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('385', '2012-11-17', '30', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('386', '2012-11-17', '38', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('387', '2012-11-17', '39', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('388', '2012-11-17', '43', '13:00:00', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('389', '2012-11-04', '3', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('390', '2012-11-09', '3', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('391', '2012-11-24', '3', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('392', '2012-11-06', '6', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('393', '2012-11-09', '6', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('394', '2012-11-13', '6', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('395', '2012-11-12', '6', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('396', '2012-11-22', '6', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('397', '2012-11-19', '6', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('398', '2012-11-28', '6', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('399', '2012-11-02', '12', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('400', '2012-11-10', '12', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('401', '2012-11-08', '12', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('402', '2012-11-12', '12', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('403', '2012-11-16', '12', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('404', '2012-11-24', '12', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('405', '2012-11-19', '12', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('406', '2012-11-28', '12', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('407', '2012-11-27', '12', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('408', '2012-11-02', '15', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('409', '2012-11-04', '15', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('410', '2012-11-23', '15', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('411', '2012-11-22', '15', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('412', '2012-11-20', '15', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('413', '2012-11-29', '15', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('414', '2012-11-09', '18', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('415', '2012-11-09', '26', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('416', '2012-11-09', '27', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('417', '2012-11-09', '30', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('418', '2012-11-09', '38', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('419', '2012-11-09', '39', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('420', '2012-11-09', '43', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('421', '2012-11-05', '18', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('422', '2012-11-05', '26', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('423', '2012-11-05', '27', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('424', '2012-11-05', '30', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('425', '2012-11-05', '38', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('426', '2012-11-05', '39', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('427', '2012-11-05', '43', '13:05:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('428', '2012-11-03', '3', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('429', '2012-11-07', '3', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('430', '2012-11-10', '3', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('431', '2012-11-12', '3', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('432', '2012-11-08', '6', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('433', '2012-11-29', '6', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('434', '2012-11-09', '12', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('435', '2012-11-17', '12', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('436', '2012-11-22', '12', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('437', '2012-11-03', '15', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('438', '2012-11-15', '15', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('439', '2012-11-21', '15', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('440', '2012-11-18', '15', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('441', '2012-11-06', '18', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('442', '2012-11-06', '26', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('443', '2012-11-06', '27', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('444', '2012-11-06', '30', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('445', '2012-11-06', '38', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('446', '2012-11-06', '39', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('447', '2012-11-06', '43', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('448', '2012-11-04', '18', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('449', '2012-11-04', '26', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('450', '2012-11-04', '27', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('451', '2012-11-04', '30', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('452', '2012-11-04', '38', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('453', '2012-11-04', '39', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('454', '2012-11-04', '43', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('455', '2012-11-16', '18', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('456', '2012-11-16', '26', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('457', '2012-11-16', '27', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('458', '2012-11-16', '30', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('459', '2012-11-16', '38', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('460', '2012-11-16', '39', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('461', '2012-11-16', '43', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('462', '2012-11-14', '18', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('463', '2012-11-14', '26', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('464', '2012-11-14', '27', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('465', '2012-11-14', '30', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('466', '2012-11-14', '38', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('467', '2012-11-14', '39', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('468', '2012-11-14', '43', '13:00:00', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('469', '2012-11-08', '3', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('470', '2012-11-14', '3', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('471', '2012-11-17', '3', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('472', '2012-11-22', '3', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('473', '2012-11-28', '3', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('474', '2012-11-07', '6', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('475', '2012-11-30', '6', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('476', '2012-11-05', '12', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('477', '2012-11-20', '12', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('478', '2012-11-26', '12', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('479', '2012-11-13', '15', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('480', '2012-11-19', '15', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('481', '2012-11-07', '18', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('482', '2012-11-07', '26', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('483', '2012-11-07', '27', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('484', '2012-11-07', '30', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('485', '2012-11-07', '38', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('486', '2012-11-07', '39', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('487', '2012-11-07', '43', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('488', '2012-11-12', '18', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('489', '2012-11-12', '26', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('490', '2012-11-12', '27', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('491', '2012-11-12', '30', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('492', '2012-11-12', '38', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('493', '2012-11-12', '39', '08:00:00', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('494', '2012-11-12', '43', '08:00:00', '17:00:00');

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

-- ----------------------------
-- Table structure for `inv_check_inventory`
-- ----------------------------
DROP TABLE IF EXISTS `inv_check_inventory`;
CREATE TABLE `inv_check_inventory` (
  `id` int(11) NOT NULL auto_increment,
  `num` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `wh_id` int(11) NOT NULL,
  `create_uid` varchar(255) default NULL,
  `note` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `check_num` USING BTREE (`num`),
  KEY `wh_id` USING BTREE (`wh_id`),
  CONSTRAINT `inv_check_inventory_ibfk_1` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_check_inventory
-- ----------------------------
INSERT INTO `inv_check_inventory` VALUES ('2', 'KT12', '2012-12-05', '81', '1', 'asdasd');
INSERT INTO `inv_check_inventory` VALUES ('3', '213', '2012-12-06', '81', '1', '');
INSERT INTO `inv_check_inventory` VALUES ('4', '567', '2012-12-25', '81', '1', '');
INSERT INTO `inv_check_inventory` VALUES ('6', '154', '2012-12-04', '81', '1', '');
INSERT INTO `inv_check_inventory` VALUES ('7', 'dfgdfgdxcv', '2012-12-14', '81', '1', '');
INSERT INTO `inv_check_inventory` VALUES ('10', 'jhsdgjakshdkas', '2012-12-14', '81', '1', 'sdfsd');
INSERT INTO `inv_check_inventory` VALUES ('11', '567sdfsd', '2012-12-14', '81', '1', '');
INSERT INTO `inv_check_inventory` VALUES ('12', 'ghfhgfjh', '2012-12-07', '81', '1', '');
INSERT INTO `inv_check_inventory` VALUES ('14', 'jhgjhgjhgjhgjgjhgjopiuoiuo', '2012-12-06', '81', '1', '');
INSERT INTO `inv_check_inventory` VALUES ('15', 'jkdghfksdbf', '2012-12-06', '81', '1', 'jksfjksafnksdl');

-- ----------------------------
-- Table structure for `inv_check_inventorydetails`
-- ----------------------------
DROP TABLE IF EXISTS `inv_check_inventorydetails`;
CREATE TABLE `inv_check_inventorydetails` (
  `id` int(11) NOT NULL auto_increment,
  `qty` decimal(10,0) NOT NULL,
  `check_inventory_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `last_update` date default NULL,
  `uom_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `check_inventory_id` USING BTREE (`check_inventory_id`),
  KEY `product_id` USING BTREE (`product_id`),
  CONSTRAINT `inv_check_inventorydetails_ibfk_1` FOREIGN KEY (`check_inventory_id`) REFERENCES `inv_check_inventory` (`id`),
  CONSTRAINT `inv_check_inventorydetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_check_inventorydetails
-- ----------------------------
INSERT INTO `inv_check_inventorydetails` VALUES ('1', '2', '2', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('2', '3', '2', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('3', '0', '3', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('4', '0', '3', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('5', '0', '4', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('6', '0', '4', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('7', '12', '6', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('8', '13', '6', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('9', '25', '7', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('10', '23', '7', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('15', '15', '10', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('16', '24', '10', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('17', '15', '11', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('18', '16', '11', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('19', '168', '12', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('20', '168', '12', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('21', '186', '14', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('22', '186', '14', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('23', '175', '15', '4', null, '5', '5FG186-5 in Fuji láng 186 m');
INSERT INTO `inv_check_inventorydetails` VALUES ('24', '100', '15', '5', null, '5', '5FL186-5 in Fuji lụa 186 m');

-- ----------------------------
-- Table structure for `inv_inventory`
-- ----------------------------
DROP TABLE IF EXISTS `inv_inventory`;
CREATE TABLE `inv_inventory` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) default NULL,
  `wh_id` int(11) default NULL,
  `qty` decimal(19,2) default NULL,
  PRIMARY KEY  (`id`),
  KEY `product_id` USING BTREE (`product_id`,`wh_id`),
  KEY `wh_id` USING BTREE (`wh_id`),
  CONSTRAINT `inv_inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_inventory_ibfk_2` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_inventory
-- ----------------------------
INSERT INTO `inv_inventory` VALUES ('25', '4', '69', '0.00');
INSERT INTO `inv_inventory` VALUES ('26', '5', '69', '50.00');
INSERT INTO `inv_inventory` VALUES ('27', '4', '70', '88.00');
INSERT INTO `inv_inventory` VALUES ('28', '5', '70', '148.00');
INSERT INTO `inv_inventory` VALUES ('29', '14', '69', '2.00');
INSERT INTO `inv_inventory` VALUES ('30', '15', '69', '3.00');
INSERT INTO `inv_inventory` VALUES ('31', '20', '69', '20.00');
INSERT INTO `inv_inventory` VALUES ('32', '21', '69', '30.00');
INSERT INTO `inv_inventory` VALUES ('33', '13', '69', '10.00');
INSERT INTO `inv_inventory` VALUES ('34', '18', '69', '24.00');
INSERT INTO `inv_inventory` VALUES ('35', '24', '69', '25.00');
INSERT INTO `inv_inventory` VALUES ('36', '17', '69', '20.00');
INSERT INTO `inv_inventory` VALUES ('43', '4', '81', '0.94');
INSERT INTO `inv_inventory` VALUES ('44', '5', '81', '0.54');

-- ----------------------------
-- Table structure for `inv_inventorylog`
-- ----------------------------
DROP TABLE IF EXISTS `inv_inventorylog`;
CREATE TABLE `inv_inventorylog` (
  `id` int(11) NOT NULL auto_increment,
  `ref_id` int(11) NOT NULL,
  `reftype` tinyint(4) NOT NULL,
  `remarks` varchar(255) character set utf8 default NULL,
  `refdate` date default NULL,
  `date` date NOT NULL,
  `create_uid` int(11) default NULL,
  `create_date` datetime default NULL,
  `branch_id` tinyint(4) default NULL,
  `refnum` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_inventorylog
-- ----------------------------
INSERT INTO `inv_inventorylog` VALUES ('38', '13', '1', 'Nhập kho', '2012-11-16', '2012-11-16', '1', '2012-11-16 16:42:06', '1', 'NVT1112-001');
INSERT INTO `inv_inventorylog` VALUES ('39', '13', '4', 'Hủy nhập kho', '2012-11-16', '2012-11-16', '1', '2012-11-16 16:42:58', '1', 'NVT1112-001');
INSERT INTO `inv_inventorylog` VALUES ('40', '14', '1', 'Nhập kho', '2012-11-16', '2012-11-16', '1', '2012-11-16 16:48:04', '1', 'NVT1112-002');
INSERT INTO `inv_inventorylog` VALUES ('41', '7', '3', 'Chuyển kho', '2012-11-16', '2012-11-16', '1', '2012-11-16 16:50:05', '1', 'CVT1112-001');
INSERT INTO `inv_inventorylog` VALUES ('42', '6', '2', 'Xuất kho', '2012-11-16', '2012-11-16', '1', '2012-11-16 17:10:36', '1', 'XVT1112-001');
INSERT INTO `inv_inventorylog` VALUES ('43', '15', '1', 'Nhập kho', '2012-11-15', '2012-11-17', '1', '2012-11-17 10:32:38', '1', 'NVT1112-003');
INSERT INTO `inv_inventorylog` VALUES ('44', '7', '2', 'Xuất kho', '2012-11-16', '2012-11-17', '1', '2012-11-17 10:33:47', '1', 'XVT1112-002');
INSERT INTO `inv_inventorylog` VALUES ('45', '8', '3', 'Chuyển kho', '2012-11-19', '2012-11-19', '1', '2012-11-19 15:15:07', '1', 'CVT1112-002');
INSERT INTO `inv_inventorylog` VALUES ('46', '8', '2', 'Xuất kho', '2012-11-27', '2012-11-27', '1', '2012-11-27 13:41:55', '1', 'XVT1112-003');
INSERT INTO `inv_inventorylog` VALUES ('47', '16', '1', 'Nhập kho', '2012-12-01', '2012-12-01', '1', '2012-12-01 09:11:04', '1', 'NVT1212-001');
INSERT INTO `inv_inventorylog` VALUES ('48', '17', '1', 'Nhập kho', '2012-12-01', '2012-12-01', '1', '2012-12-01 09:13:23', '1', 'NVT1212-002');

-- ----------------------------
-- Table structure for `inv_inventorylogdetail`
-- ----------------------------
DROP TABLE IF EXISTS `inv_inventorylogdetail`;
CREATE TABLE `inv_inventorylogdetail` (
  `id` int(11) NOT NULL auto_increment,
  `inventorylog_id` int(11) default NULL,
  `product_id` int(11) default NULL,
  `description` varchar(255) character set utf8 default NULL,
  `uom_id` int(11) default NULL,
  `qty` decimal(19,2) default '1.00',
  `wh_id` int(11) default NULL COMMENT 'from wh',
  `cost` decimal(19,2) default '0.00',
  `before_cost` decimal(19,2) default '0.00',
  `after_cost` decimal(19,2) default '0.00',
  `costmethod` tinyint(4) default '1',
  `subtotal` decimal(19,2) default '0.00',
  `before_qty` decimal(19,2) default '0.00',
  `after_qty` decimal(19,2) default '0.00',
  PRIMARY KEY  (`id`),
  KEY `stock_inventorylogdetail_ibfk_1` USING BTREE (`inventorylog_id`),
  KEY `product_id` USING BTREE (`product_id`),
  KEY `wh_id` USING BTREE (`wh_id`),
  CONSTRAINT `inv_inventorylogdetail_ibfk_1` FOREIGN KEY (`inventorylog_id`) REFERENCES `inv_inventorylog` (`id`),
  CONSTRAINT `inv_inventorylogdetail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_inventorylogdetail_ibfk_3` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_inventorylogdetail
-- ----------------------------
INSERT INTO `inv_inventorylogdetail` VALUES ('65', '38', '4', '5 in Fuji láng 186 m', '3', '100.00', '69', '2000.00', '2000.00', '2000.00', '1', '0.00', '0.00', '100.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('66', '38', '5', '5 in Fuji lụa 186 m', '3', '100.00', '69', '3000.00', '3000.00', '3000.00', '1', '0.00', '0.00', '100.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('67', '39', '4', '5 in Fuji láng 186 m', '3', '-100.00', '69', '2000.00', '2000.00', '2000.00', '1', '0.00', '100.00', '0.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('68', '39', '5', '5 in Fuji lụa 186 m', '3', '-100.00', '69', '3000.00', '3000.00', '3000.00', '1', '0.00', '100.00', '0.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('69', '40', '4', '5 in Fuji láng 186 m', '3', '100.00', '69', '2500.00', '2000.00', '2500.00', '1', '0.00', '0.00', '100.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('70', '40', '5', '5 in Fuji lụa 186 m', '3', '200.00', '69', '3000.00', '3000.00', '3000.00', '1', '0.00', '0.00', '200.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('71', '41', '4', '5 in Fuji láng 186 m', '3', '-100.00', '69', '2500.00', '2500.00', '2500.00', '1', '0.00', '100.00', '0.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('72', '41', '4', '5 in Fuji láng 186 m', '3', '100.00', '70', '2500.00', '2500.00', '2500.00', '1', '0.00', '0.00', '100.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('73', '41', '5', '5 in Fuji lụa 186 m', '3', '-100.00', '69', '3000.00', '3000.00', '3000.00', '1', '0.00', '200.00', '100.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('74', '41', '5', '5 in Fuji lụa 186 m', '3', '100.00', '70', '3000.00', '3000.00', '3000.00', '1', '0.00', '0.00', '100.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('75', '42', '4', '5 in Fuji láng 186 m', '3', '-10.00', '70', '2500.00', '2500.00', '2500.00', '1', '0.00', '100.00', '90.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('76', '42', '5', '5 in Fuji lụa 186 m', '3', '-2.00', '70', '3000.00', '3000.00', '3000.00', '1', '0.00', '100.00', '98.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('77', '43', '14', '10 in Fuji láng 90 m', '3', '5.00', '69', '2000000.00', '0.00', '2000000.00', '1', '0.00', '0.00', '5.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('78', '43', '15', '10 in Patinum lụa 90 m', '3', '5.00', '69', '3000000.00', '0.00', '3000000.00', '1', '0.00', '0.00', '5.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('79', '44', '14', '10 in Fuji láng 90 m', '3', '-3.00', '69', '2000000.00', '2000000.00', '2000000.00', '1', '0.00', '5.00', '2.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('80', '44', '15', '10 in Patinum lụa 90 m', '3', '-2.00', '69', '3000000.00', '3000000.00', '3000000.00', '1', '0.00', '5.00', '3.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('81', '45', '5', '5 in Fuji lụa 186 m', '3', '-50.00', '69', '3000.00', '3000.00', '3000.00', '1', '0.00', '100.00', '50.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('82', '45', '5', '5 in Fuji lụa 186 m', '3', '50.00', '70', '3000.00', '3000.00', '3000.00', '1', '0.00', '98.00', '148.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('83', '46', '4', '5 in Fuji láng 186 m', '3', '-2.00', '70', '2500.00', '2500.00', '2500.00', '1', '0.00', '90.00', '88.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('84', '47', '20', '30 in Fuji Ty 80 láng 50 m', '3', '20.00', '69', '20000.00', '0.00', '20000.00', '1', '0.00', '0.00', '20.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('85', '47', '21', '30 in Fuji Ty 80 lụa  50 m', '3', '30.00', '69', '20000.00', '0.00', '20000.00', '1', '0.00', '0.00', '30.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('86', '47', '13', ' 8 in Patinum lụa 90 m  ', '3', '10.00', '69', '26000.00', '0.00', '26000.00', '1', '0.00', '0.00', '10.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('87', '47', '18', '24 in Fuji Ty 80 láng 50 m', '3', '24.00', '69', '25000.00', '0.00', '25000.00', '1', '0.00', '0.00', '24.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('88', '48', '24', 'P1 Pro 40 lít', '4', '25.00', '69', '24000.00', '0.00', '24000.00', '1', '0.00', '0.00', '25.00');
INSERT INTO `inv_inventorylogdetail` VALUES ('89', '48', '17', '12 in Fuji laùng 90 m', '3', '20.00', '69', '30000.00', '0.00', '30000.00', '1', '0.00', '0.00', '20.00');

-- ----------------------------
-- Table structure for `inv_limit`
-- ----------------------------
DROP TABLE IF EXISTS `inv_limit`;
CREATE TABLE `inv_limit` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) default NULL,
  `wh_id` int(11) default NULL,
  `qtyLimit` int(11) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniquefild` USING BTREE (`product_id`,`wh_id`),
  KEY `wh_id` USING BTREE (`wh_id`),
  CONSTRAINT `inv_limit_ibfk_1` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`),
  CONSTRAINT `inv_limit_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_limit
-- ----------------------------
INSERT INTO `inv_limit` VALUES ('1', '4', '69', '4');
INSERT INTO `inv_limit` VALUES ('2', '4', '70', '4');
INSERT INTO `inv_limit` VALUES ('3', '4', '80', '3');
INSERT INTO `inv_limit` VALUES ('4', '5', '69', '0');
INSERT INTO `inv_limit` VALUES ('5', '5', '70', '20');
INSERT INTO `inv_limit` VALUES ('6', '5', '80', '0');
INSERT INTO `inv_limit` VALUES ('7', '6', '69', '0');
INSERT INTO `inv_limit` VALUES ('8', '6', '70', '0');
INSERT INTO `inv_limit` VALUES ('9', '6', '80', '0');
INSERT INTO `inv_limit` VALUES ('10', '7', '69', '0');
INSERT INTO `inv_limit` VALUES ('11', '7', '70', '0');
INSERT INTO `inv_limit` VALUES ('12', '7', '80', '0');
INSERT INTO `inv_limit` VALUES ('13', '8', '69', '0');
INSERT INTO `inv_limit` VALUES ('14', '8', '70', '0');
INSERT INTO `inv_limit` VALUES ('15', '8', '80', '0');
INSERT INTO `inv_limit` VALUES ('16', '9', '69', '0');
INSERT INTO `inv_limit` VALUES ('17', '9', '70', '0');
INSERT INTO `inv_limit` VALUES ('18', '9', '80', '0');
INSERT INTO `inv_limit` VALUES ('19', '13', '69', '0');
INSERT INTO `inv_limit` VALUES ('20', '13', '70', '0');
INSERT INTO `inv_limit` VALUES ('21', '13', '80', '0');
INSERT INTO `inv_limit` VALUES ('22', '14', '69', '0');
INSERT INTO `inv_limit` VALUES ('23', '14', '70', '0');
INSERT INTO `inv_limit` VALUES ('24', '14', '80', '0');
INSERT INTO `inv_limit` VALUES ('25', '15', '69', '0');
INSERT INTO `inv_limit` VALUES ('26', '15', '70', '0');
INSERT INTO `inv_limit` VALUES ('27', '15', '80', '0');
INSERT INTO `inv_limit` VALUES ('28', '16', '69', '0');
INSERT INTO `inv_limit` VALUES ('29', '16', '70', '0');
INSERT INTO `inv_limit` VALUES ('30', '16', '80', '0');
INSERT INTO `inv_limit` VALUES ('31', '17', '69', '0');
INSERT INTO `inv_limit` VALUES ('32', '17', '70', '0');
INSERT INTO `inv_limit` VALUES ('33', '17', '80', '0');
INSERT INTO `inv_limit` VALUES ('34', '18', '69', '0');
INSERT INTO `inv_limit` VALUES ('35', '18', '70', '0');
INSERT INTO `inv_limit` VALUES ('36', '18', '80', '0');
INSERT INTO `inv_limit` VALUES ('37', '19', '69', '0');
INSERT INTO `inv_limit` VALUES ('38', '19', '70', '0');
INSERT INTO `inv_limit` VALUES ('39', '19', '80', '0');
INSERT INTO `inv_limit` VALUES ('40', '20', '69', '0');
INSERT INTO `inv_limit` VALUES ('41', '20', '70', '0');
INSERT INTO `inv_limit` VALUES ('42', '20', '80', '0');
INSERT INTO `inv_limit` VALUES ('43', '21', '69', '0');
INSERT INTO `inv_limit` VALUES ('44', '21', '70', '0');
INSERT INTO `inv_limit` VALUES ('45', '21', '80', '0');
INSERT INTO `inv_limit` VALUES ('46', '22', '69', '0');
INSERT INTO `inv_limit` VALUES ('47', '22', '70', '0');
INSERT INTO `inv_limit` VALUES ('48', '22', '80', '0');
INSERT INTO `inv_limit` VALUES ('49', '23', '69', '0');
INSERT INTO `inv_limit` VALUES ('50', '23', '70', '0');
INSERT INTO `inv_limit` VALUES ('51', '23', '80', '0');
INSERT INTO `inv_limit` VALUES ('52', '24', '69', '0');
INSERT INTO `inv_limit` VALUES ('53', '24', '70', '0');
INSERT INTO `inv_limit` VALUES ('54', '24', '80', '0');

-- ----------------------------
-- Table structure for `inv_transfer`
-- ----------------------------
DROP TABLE IF EXISTS `inv_transfer`;
CREATE TABLE `inv_transfer` (
  `id` int(11) NOT NULL auto_increment,
  `num` varchar(50) NOT NULL default '',
  `date` date NOT NULL,
  `description` varchar(255) default NULL,
  `status` bit(1) default '\0',
  `create_uid` int(50) default NULL,
  `create_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `branch_id` tinyint(11) NOT NULL,
  `from_wh_id` int(20) NOT NULL,
  `to_wh_id` int(20) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `trans_num` USING BTREE (`num`),
  KEY `branch_id` USING BTREE (`branch_id`),
  KEY `from_wh_id` USING BTREE (`from_wh_id`),
  KEY `to_wh_id` USING BTREE (`to_wh_id`),
  CONSTRAINT `inv_transfer_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`),
  CONSTRAINT `inv_transfer_ibfk_2` FOREIGN KEY (`from_wh_id`) REFERENCES `inv_warehouse` (`id`),
  CONSTRAINT `inv_transfer_ibfk_3` FOREIGN KEY (`to_wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_transfer
-- ----------------------------
INSERT INTO `inv_transfer` VALUES ('7', 'CVT1112-001', '2012-11-16', '', '', '1', '2012-11-16 16:49:00', '1', '2012-11-16 16:50:06', '1', '69', '70');
INSERT INTO `inv_transfer` VALUES ('8', 'CVT1112-002', '2012-11-19', '', '', '1', '2012-11-19 15:14:53', '1', '2012-11-23 11:03:35', '1', '69', '70');

-- ----------------------------
-- Table structure for `inv_transferline`
-- ----------------------------
DROP TABLE IF EXISTS `inv_transferline`;
CREATE TABLE `inv_transferline` (
  `id` int(11) NOT NULL auto_increment,
  `trans_id` int(50) NOT NULL,
  `product_id` int(20) NOT NULL,
  `description` varchar(255) character set utf8 default NULL,
  `uom_id` int(15) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `radio` decimal(19,9) unsigned default '1.000000000',
  `qtystd` decimal(19,2) default NULL,
  PRIMARY KEY  (`id`),
  KEY `id` USING BTREE (`id`,`trans_id`),
  KEY `trans_id` USING BTREE (`trans_id`),
  KEY `product_id` USING BTREE (`product_id`),
  KEY `uom_id` USING BTREE (`uom_id`),
  CONSTRAINT `inv_transferline_ibfk_1` FOREIGN KEY (`trans_id`) REFERENCES `inv_transfer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_transferline_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_transferline
-- ----------------------------
INSERT INTO `inv_transferline` VALUES ('13', '7', '4', '5 in Fuji láng 186 m', '3', '100.00', '1.000000000', '100.00');
INSERT INTO `inv_transferline` VALUES ('14', '7', '5', '5 in Fuji lụa 186 m', '3', '100.00', '1.000000000', '100.00');
INSERT INTO `inv_transferline` VALUES ('15', '8', '5', '5 in Fuji lụa 186 m', '3', '50.00', '1.000000000', '50.00');

-- ----------------------------
-- Table structure for `inv_warehouse`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouse`;
CREATE TABLE `inv_warehouse` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) character set utf8 NOT NULL,
  `branch_id` tinyint(11) NOT NULL,
  `active` bit(1) default NULL,
  `create_uid` int(11) default NULL,
  `create_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `default_wh_in` int(11) default NULL,
  `default_wh_out` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `branch_id` USING BTREE (`branch_id`),
  CONSTRAINT `inv_warehouse_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_warehouse
-- ----------------------------
INSERT INTO `inv_warehouse` VALUES ('69', 'Kho chính', '1', '', '1', '2012-06-26 00:00:00', '1', '1970-01-01 00:00:00', null, null);
INSERT INTO `inv_warehouse` VALUES ('70', 'Kho cửa hàng', '1', '', '1', '2012-06-27 00:00:00', '1', '1970-01-01 00:00:00', null, null);
INSERT INTO `inv_warehouse` VALUES ('80', 'Kho Chợ Lớn', '1', '', '1', '1970-01-01 00:00:00', '1', '2012-07-30 10:09:54', null, null);
INSERT INTO `inv_warehouse` VALUES ('81', 'Kho tồn lẻ', '1', '', '1', '2012-12-05 14:08:18', '1', '2012-12-05 14:08:18', null, null);

-- ----------------------------
-- Table structure for `inv_warehousein`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehousein`;
CREATE TABLE `inv_warehousein` (
  `id` int(11) NOT NULL auto_increment,
  `num` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `note` text character set utf8,
  `invdate` date default NULL,
  `invnum` varchar(50) default NULL,
  `supplier_id` int(22) NOT NULL,
  `paymentterm` tinyint(4) default NULL,
  `wh_id` int(11) NOT NULL,
  `paid` bit(1) default '\0',
  `create_date` datetime default NULL,
  `create_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `status` tinyint(4) default NULL,
  `branch_id` tinyint(11) NOT NULL,
  `amounttotal` decimal(19,2) default '0.00',
  `amounttax` decimal(19,2) default '0.00',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `num` USING BTREE (`num`),
  KEY `supplier_id` USING BTREE (`supplier_id`),
  KEY `wh_id` USING BTREE (`wh_id`),
  CONSTRAINT `inv_warehousein_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `sys_partner` (`id`),
  CONSTRAINT `inv_warehousein_ibfk_2` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_warehousein
-- ----------------------------
INSERT INTO `inv_warehousein` VALUES ('13', 'NVT1112-001', '2012-11-16', '', '2012-11-16', '', '1', '0', '69', '', '2012-11-16 16:18:27', '1', '2012-11-16 16:42:58', '1', '-1', '1', '500000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('14', 'NVT1112-002', '2012-11-16', '', '2012-11-16', '', '1', '0', '69', '', '2012-11-16 16:46:46', '1', '2012-11-16 16:48:04', '1', '1', '1', '850000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('15', 'NVT1112-003', '2012-11-15', '', '2012-11-17', '', '2', '0', '69', '', '2012-11-17 10:30:22', '1', '2012-11-17 10:32:39', '1', '1', '1', '25000000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('16', 'NVT1212-001', '2012-12-01', '', null, '', '1', '0', '69', '', '2012-12-01 09:10:48', '1', '2012-12-01 09:11:05', '1', '1', '1', '1860000.00', '0.00');
INSERT INTO `inv_warehousein` VALUES ('17', 'NVT1212-002', '2012-12-01', '', null, '', '2', '0', '69', '', '2012-12-01 09:13:14', '1', '2012-12-01 09:13:23', '1', '1', '1', '1200000.00', '0.00');

-- ----------------------------
-- Table structure for `inv_warehouseinline`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouseinline`;
CREATE TABLE `inv_warehouseinline` (
  `id` int(11) NOT NULL auto_increment,
  `warehousein_id` int(50) default NULL,
  `product_id` int(20) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `description` varchar(255) character set utf8 default NULL,
  `price` decimal(19,2) NOT NULL default '0.00',
  `discount` decimal(19,0) default NULL,
  `length` float default NULL,
  `width` float default NULL,
  `thickness` float default NULL,
  `note` text character set utf8,
  `subtotal` decimal(19,2) default NULL,
  `subvat` decimal(19,2) default NULL,
  `status` tinyint(1) default NULL,
  `create_date` datetime default NULL,
  `create_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `uom_id` int(11) NOT NULL,
  `radio` decimal(19,9) unsigned default '1.000000000',
  `qtystd` decimal(19,2) default NULL,
  PRIMARY KEY  (`id`),
  KEY `stock_warehouseinline_ibfk_4` USING BTREE (`warehousein_id`),
  KEY `product_id` USING BTREE (`product_id`),
  KEY `uom_id` USING BTREE (`uom_id`),
  CONSTRAINT `inv_warehouseinline_ibfk_1` FOREIGN KEY (`warehousein_id`) REFERENCES `inv_warehousein` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_warehouseinline_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_warehouseinline_ibfk_3` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_warehouseinline
-- ----------------------------
INSERT INTO `inv_warehouseinline` VALUES ('18', '13', '4', '100.00', '5 in Fuji láng 186 m', '2000.00', null, null, null, null, null, '200000.00', null, null, '2012-11-16 16:18:27', '1', '2012-11-16 16:18:27', '1', '3', '1.000000000', '100.00');
INSERT INTO `inv_warehouseinline` VALUES ('19', '13', '5', '100.00', '5 in Fuji lụa 186 m', '3000.00', null, null, null, null, null, '300000.00', null, null, '2012-11-16 16:18:27', '1', '2012-11-16 16:18:27', '1', '3', '1.000000000', '100.00');
INSERT INTO `inv_warehouseinline` VALUES ('20', '14', '4', '100.00', '5 in Fuji láng 186 m', '2500.00', null, null, null, null, null, '250000.00', null, null, '2012-11-16 16:46:46', '1', '2012-11-16 16:46:46', '1', '3', '1.000000000', '100.00');
INSERT INTO `inv_warehouseinline` VALUES ('21', '14', '5', '200.00', '5 in Fuji lụa 186 m', '3000.00', null, null, null, null, null, '600000.00', null, null, '2012-11-16 16:46:46', '1', '2012-11-16 16:46:46', '1', '3', '1.000000000', '200.00');
INSERT INTO `inv_warehouseinline` VALUES ('22', '15', '14', '5.00', '10 in Fuji láng 90 m', '2000000.00', null, null, null, null, null, '10000000.00', null, null, '2012-11-17 10:30:23', '1', '2012-11-17 10:30:23', '1', '3', '1.000000000', '5.00');
INSERT INTO `inv_warehouseinline` VALUES ('23', '15', '15', '5.00', '10 in Patinum lụa 90 m', '3000000.00', null, null, null, null, null, '15000000.00', null, null, '2012-11-17 10:30:23', '1', '2012-11-17 10:30:23', '1', '3', '1.000000000', '5.00');
INSERT INTO `inv_warehouseinline` VALUES ('24', '16', '20', '20.00', '30 in Fuji Ty 80 láng 50 m', '20000.00', null, null, null, null, null, '400000.00', null, null, '2012-12-01 09:10:48', '1', '2012-12-01 09:10:48', '1', '3', '1.000000000', '20.00');
INSERT INTO `inv_warehouseinline` VALUES ('25', '16', '21', '30.00', '30 in Fuji Ty 80 lụa  50 m', '20000.00', null, null, null, null, null, '600000.00', null, null, '2012-12-01 09:10:48', '1', '2012-12-01 09:10:48', '1', '3', '1.000000000', '30.00');
INSERT INTO `inv_warehouseinline` VALUES ('26', '16', '13', '10.00', ' 8 in Patinum lụa 90 m  ', '26000.00', null, null, null, null, null, '260000.00', null, null, '2012-12-01 09:10:48', '1', '2012-12-01 09:10:48', '1', '3', '1.000000000', '10.00');
INSERT INTO `inv_warehouseinline` VALUES ('27', '16', '18', '24.00', '24 in Fuji Ty 80 láng 50 m', '25000.00', null, null, null, null, null, '600000.00', null, null, '2012-12-01 09:10:48', '1', '2012-12-01 09:10:48', '1', '3', '1.000000000', '24.00');
INSERT INTO `inv_warehouseinline` VALUES ('28', '17', '24', '25.00', 'P1 Pro 40 lít', '24000.00', null, null, null, null, null, '600000.00', null, null, '2012-12-01 09:13:14', '1', '2012-12-01 09:13:14', '1', '4', '1.000000000', '25.00');
INSERT INTO `inv_warehouseinline` VALUES ('29', '17', '17', '20.00', '12 in Fuji laùng 90 m', '30000.00', null, null, null, null, null, '600000.00', null, null, '2012-12-01 09:13:15', '1', '2012-12-01 09:13:15', '1', '3', '1.000000000', '20.00');

-- ----------------------------
-- Table structure for `inv_warehouseout`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouseout`;
CREATE TABLE `inv_warehouseout` (
  `id` int(11) NOT NULL auto_increment,
  `num` varchar(50) character set latin1 NOT NULL,
  `date` date NOT NULL,
  `note` text,
  `type_id` tinyint(1) default '1' COMMENT '1: Xuất sản xuất\r\n, 2: Xuất khác',
  `create_date` datetime default NULL,
  `create_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `status` tinyint(4) default NULL,
  `branch_id` tinyint(11) NOT NULL,
  `amounttotal` decimal(19,2) default '0.00',
  `wh_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `num` USING BTREE (`num`),
  KEY `wh_id` USING BTREE (`wh_id`),
  KEY `type_id` USING BTREE (`type_id`),
  CONSTRAINT `inv_warehouseout_ibfk_1` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`),
  CONSTRAINT `inv_warehouseout_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `inv_warehouseouttype` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_warehouseout
-- ----------------------------
INSERT INTO `inv_warehouseout` VALUES ('6', 'XVT1112-001', '2012-11-16', '', '1', '2012-11-16 17:10:10', '1', '2012-11-16 17:10:36', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('7', 'XVT1112-002', '2012-11-16', '', '2', '2012-11-17 10:33:33', '1', '2012-11-23 11:03:08', '1', '2', '1', '0.00', '69');
INSERT INTO `inv_warehouseout` VALUES ('8', 'XVT1112-003', '2012-11-27', '', '1', '2012-11-27 13:41:43', '1', '2012-11-27 13:41:55', '1', '1', '1', '0.00', '70');
INSERT INTO `inv_warehouseout` VALUES ('9', 'XVT1112-004', '2012-11-30', '', '1', '2012-11-30 16:56:48', '1', '2012-11-30 16:56:48', '1', null, '1', '0.00', '70');

-- ----------------------------
-- Table structure for `inv_warehouseoutline`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouseoutline`;
CREATE TABLE `inv_warehouseoutline` (
  `id` int(11) NOT NULL auto_increment,
  `warehouseout_id` int(50) default NULL,
  `product_id` int(20) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `description` varchar(255) default NULL,
  `price` decimal(19,2) NOT NULL default '0.00',
  `note` text,
  `subtotal` decimal(19,2) default NULL,
  `subvat` decimal(19,2) default NULL,
  `create_date` datetime default NULL,
  `create_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `uom_id` int(11) NOT NULL,
  `radio` decimal(10,9) unsigned default '1.000000000',
  `qtystd` decimal(10,2) default NULL,
  `counter` decimal(19,0) default NULL,
  PRIMARY KEY  (`id`),
  KEY `stock_warehouseoutline_ibfk_1` USING BTREE (`warehouseout_id`),
  KEY `product_id` USING BTREE (`product_id`),
  KEY `uom_id` USING BTREE (`uom_id`),
  CONSTRAINT `inv_warehouseoutline_ibfk_1` FOREIGN KEY (`warehouseout_id`) REFERENCES `inv_warehouseout` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_warehouseoutline_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_warehouseoutline_ibfk_3` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_warehouseoutline
-- ----------------------------
INSERT INTO `inv_warehouseoutline` VALUES ('11', '6', '4', '10.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-16 17:10:10', '1', '2012-11-16 17:10:10', '1', '3', '1.000000000', '10.00', '1233');
INSERT INTO `inv_warehouseoutline` VALUES ('12', '6', '5', '2.00', '5 in Fuji lụa 186 m', '0.00', null, '0.00', null, '2012-11-16 17:10:10', '1', '2012-11-16 17:10:10', '1', '3', '1.000000000', '2.00', '1234');
INSERT INTO `inv_warehouseoutline` VALUES ('13', '7', '14', '3.00', '10 in Fuji láng 90 m', '0.00', null, '0.00', null, '2012-11-17 10:33:33', '1', '2012-11-17 10:33:33', '1', '3', '1.000000000', '3.00', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('14', '7', '15', '2.00', '10 in Patinum lụa 90 m', '0.00', null, '0.00', null, '2012-11-17 10:33:33', '1', '2012-11-17 10:33:33', '1', '3', '1.000000000', '2.00', '0');
INSERT INTO `inv_warehouseoutline` VALUES ('15', '8', '4', '2.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-27 13:41:43', '1', '2012-11-27 13:41:43', '1', '3', '1.000000000', '2.00', '1');
INSERT INTO `inv_warehouseoutline` VALUES ('16', '9', '4', '1.00', '5 in Fuji láng 186 m', '0.00', null, '0.00', null, '2012-11-30 16:56:48', '1', '2012-11-30 16:56:48', '1', '3', '1.000000000', '1.00', '1');

-- ----------------------------
-- Table structure for `inv_warehouseouttype`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouseouttype`;
CREATE TABLE `inv_warehouseouttype` (
  `id` tinyint(4) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `note` varchar(255) default NULL,
  `wh_req` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_warehouseouttype
-- ----------------------------
INSERT INTO `inv_warehouseouttype` VALUES ('1', 'Xuất sản xuất', 'Xuất cho các phân xưởng ', '70');
INSERT INTO `inv_warehouseouttype` VALUES ('2', 'Xuất khác', '', '69');

-- ----------------------------
-- Table structure for `mrp_workorder`
-- ----------------------------
DROP TABLE IF EXISTS `mrp_workorder`;
CREATE TABLE `mrp_workorder` (
  `wo_id` varchar(20) default NULL,
  `wodate` date default NULL,
  `item_id` varchar(20) default NULL,
  `uom` varchar(20) default NULL,
  `description` varchar(255) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mrp_workorder
-- ----------------------------

-- ----------------------------
-- Table structure for `product_category`
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `id` int(20) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 NOT NULL,
  `create_uid` int(11) default NULL,
  `create_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `parent_id` int(11) default NULL,
  `hascounter` bit(1) NOT NULL default '\0' COMMENT 'Theo doi so counter tern may in',
  `index` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `parent_id` USING BTREE (`parent_id`),
  CONSTRAINT `product_category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `product_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_category
-- ----------------------------
INSERT INTO `product_category` VALUES ('4', 'Giấy Hình', '1', '1970-01-01 00:00:00', '1', '2012-12-03 13:16:08', null, '', '1');
INSERT INTO `product_category` VALUES ('5', 'Inkjet nước', '1', '1970-01-01 00:00:00', '1', '2012-12-03 13:16:13', null, '', '2');
INSERT INTO `product_category` VALUES ('7', 'Inkjet dầu', '1', '2012-06-25 00:00:00', '1', '2012-12-03 13:16:17', null, '', '3');
INSERT INTO `product_category` VALUES ('8', 'Inkjet UV', '1', '1970-01-01 00:00:00', '1', '2012-12-03 13:16:22', null, '', '4');
INSERT INTO `product_category` VALUES ('9', 'Xerox', '1', '2012-07-20 15:49:49', '1', '2012-12-03 13:16:27', null, '', '5');
INSERT INTO `product_category` VALUES ('10', 'SX Album', '1', '2012-07-20 15:50:13', '1', '2012-12-03 13:16:31', '7', '', '6');

-- ----------------------------
-- Table structure for `product_item`
-- ----------------------------
DROP TABLE IF EXISTS `product_item`;
CREATE TABLE `product_item` (
  `id` int(11) NOT NULL auto_increment,
  `code` varchar(20) NOT NULL default '',
  `name` varchar(255) character set utf8 NOT NULL,
  `create_uid` int(11) default NULL,
  `create_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `description` varchar(255) default NULL,
  `costmethod` tinyint(4) default '1',
  `class` tinyint(4) NOT NULL default '1' COMMENT 'Stock, Non-Stock, Service, Labor, Materials',
  `category_id` int(20) NOT NULL,
  `type_id` varchar(20) character set utf8 default NULL,
  `po_uom_id` int(11) default NULL,
  `pouom_radio` decimal(10,2) default '1.00',
  `pouom_radio_std` decimal(10,2) default '1.00',
  `uom_id` int(15) NOT NULL COMMENT 'Unit of Measure',
  `sale_uom_id` int(11) default NULL,
  `so_uom_id` int(11) default NULL,
  `souom_radio` decimal(10,2) default '1.00',
  `souom_radio_std` decimal(10,2) default '1.00',
  `work_uom_id` int(11) default NULL,
  `length` decimal(19,2) default NULL,
  `width` decimal(19,2) default NULL,
  `heigth` decimal(19,2) default NULL,
  `thickness` decimal(19,3) default NULL,
  `note` text character set utf8,
  `minqtystock` decimal(19,0) default '0',
  `qtyinstock` decimal(19,0) default '0',
  `default_wh_id` int(20) default NULL,
  `lastcost` decimal(19,4) default '0.0000',
  `lastpodate` date default NULL,
  `avgcost` decimal(19,4) default '0.0000',
  `stdcost` decimal(19,4) default NULL,
  `qtysale` decimal(19,2) default '0.00',
  `qtypo` decimal(19,2) default '0.00',
  `active` bit(1) default '',
  `workuom_radio` decimal(19,2) default '1.00',
  `workuom_radio_std` decimal(19,2) default '1.00',
  `hascounter` bit(1) default '\0',
  `index` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `code` USING BTREE (`code`),
  KEY `uom_id` USING BTREE (`uom_id`),
  KEY `category_id` USING BTREE (`category_id`),
  KEY `type_id` USING BTREE (`type_id`),
  CONSTRAINT `product_item_ibfk_1` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`),
  CONSTRAINT `product_item_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`),
  CONSTRAINT `product_item_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `product_type` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_item
-- ----------------------------
INSERT INTO `product_item` VALUES ('4', '5FG186', '5 in Fuji láng 186 m', '1', '1970-01-01 00:00:00', '1', '2012-11-30 15:47:12', '', '1', '3', '8', '5G', '5', '186.00', '1.00', '3', '4', '5', '186.00', '1.00', '174', '186.00', '127.20', null, '0.000', 'Gi?y ty 80', '4', '88', '69', '2500.0000', '2012-11-16', '2500.0000', '0.0000', '0.00', '0.00', '', '236.59', '1.00', '', '1');
INSERT INTO `product_item` VALUES ('5', '5FL186', '5 in Fuji lụa 186 m', '1', '1970-01-01 00:00:00', '1', '2012-11-19 15:15:08', null, '1', '3', '8', '5L', '5', '186.00', '1.00', '3', null, '5', '186.00', '1.00', '174', '186.00', '230.00', null, '0.000', 'fedfsdf sd', '0', '198', '69', '3000.0000', '2012-11-19', '3000.0000', null, null, null, '', '427.80', '1.00', '', '2');
INSERT INTO `product_item` VALUES ('6', '5PG186', '5 in Patinum láng 186 m', '1', '1970-01-01 00:00:00', '1', '2012-11-16 15:49:58', null, '1', '1', '4', '5G', '5', '186.00', '1.00', '3', null, '5', '186.00', '1.00', null, '186.00', '127.00', null, '1.000', 'd ddsd', '0', '0', null, '2700000.0000', '2012-11-15', '0.0000', null, null, null, '', '236.22', '1.00', '', '1');
INSERT INTO `product_item` VALUES ('7', '6FG186', '6 in Fuji láng 186 m', null, null, '1', '2012-11-16 15:49:59', null, '1', '1', '8', '6G', '5', '186.00', '1.00', '3', '1', '5', '186.00', '1.00', null, '186.00', '13.00', null, '0.000', '', '0', '0', null, '1000000.0000', '2012-11-15', '0.0000', null, '0.00', '0.00', '', '24.18', '1.00', '', '3');
INSERT INTO `product_item` VALUES ('8', '6FL186', '6 in Fuji lụa 186 m', '1', '2012-07-26 17:02:23', '1', '2012-11-15 14:47:53', null, '1', '1', '8', '6L', '5', '186.00', '1.00', '3', null, '5', '186.00', '1.00', null, '186.00', '15.20', null, '0.010', '', '0', '0', '70', '3000.0000', '2012-11-01', '0.0000', null, '0.00', '0.00', '', '28.27', '1.00', '', '4');
INSERT INTO `product_item` VALUES ('9', '8FG90', '8 in Fuji láng 90 m', '1', '2012-07-26 17:16:33', '1', '2012-11-15 16:14:10', null, '1', '1', '4', '8G', '5', '90.00', '1.00', '3', null, '5', '90.00', '1.00', null, '90.00', '20.30', null, '0.100', '', '0', '0', '69', '0.0000', null, '0.0000', null, '0.00', '0.00', '', '18.27', '1.00', '', '2');
INSERT INTO `product_item` VALUES ('13', ' 8PL90', ' 8 in Patinum lụa 90 m  ', '1', '2012-08-10 14:25:17', '1', '2012-12-01 09:11:04', null, '1', '1', '4', '8L', '5', '90.00', '1.00', '3', null, '5', '90.00', '1.00', null, '90.00', '20.30', null, '0.010', '', '0', '10', '69', '26000.0000', '2012-12-01', '26000.0000', null, '0.00', '0.00', '', '18.27', '1.00', '', '3');
INSERT INTO `product_item` VALUES ('14', '10FG90', '10 in Fuji láng 90 m', '1', '2012-08-10 14:35:08', '1', '2012-11-30 10:22:20', null, '1', '3', '4', '10G', '5', '186.00', '1.00', '3', null, '5', '186.00', '1.00', '174', '90.00', '25.40', null, '0.010', '', '0', '2', '69', '2000000.0000', '2012-11-15', '2000000.0000', null, '0.00', '0.00', '', '22.86', '1.00', '', '4');
INSERT INTO `product_item` VALUES ('15', '10PL90', '10 in Patinum lụa 90 m', '1', '2012-08-10 14:36:09', '1', '2012-11-17 10:33:49', null, '1', '3', '4', '10L', '5', '90.00', '1.00', '3', null, '5', '90.00', '1.00', '174', '90.00', '25.40', null, '0.010', '', '0', '3', '69', '3000000.0000', '2012-11-15', '3000000.0000', null, '0.00', '0.00', '', '22.86', '1.00', '', '5');
INSERT INTO `product_item` VALUES ('16', '12FN75', '12 in giấy ngọc trai', '1', '2012-08-10 14:37:14', '1', '2012-11-15 16:15:13', null, '1', '1', '4', 'ME', '5', '75.00', '1.00', '3', null, '5', '75.00', '1.00', null, '75.00', '30.50', null, '0.010', '', '0', '0', '69', '0.0000', '2012-09-21', '0.0000', null, '0.00', '0.00', '', '22.88', '1.00', '', '6');
INSERT INTO `product_item` VALUES ('17', '12FG90', '12 in Fuji laùng 90 m', '1', '2012-08-10 14:38:07', '1', '2012-12-01 09:13:23', null, '1', '1', '4', '24L', '5', '90.00', '1.00', '3', null, '5', '90.00', '1.00', null, '90.00', '30.50', null, '0.010', '', '0', '20', '69', '30000.0000', '2012-12-01', '30000.0000', null, '0.00', '0.00', '', '27.45', '1.00', '', '7');
INSERT INTO `product_item` VALUES ('18', '24TG50', '24 in Fuji Ty 80 láng 50 m', '1', '2012-08-10 14:39:42', '1', '2012-12-01 09:11:05', null, '1', '1', '4', '24G', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '62.00', null, '0.010', '', '0', '24', '69', '25000.0000', '2012-12-01', '25000.0000', null, '0.00', '0.00', '', '31.00', '1.00', '', '8');
INSERT INTO `product_item` VALUES ('19', '24TL50', '24 in Fuji Ty 80 lụa 50 m', '1', '2012-08-10 14:40:38', '1', '2012-11-15 16:17:09', null, '1', '1', '4', '24L', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '62.00', null, '0.010', '', '0', '0', '69', '0.0000', null, '0.0000', null, '0.00', '0.00', '', '31.00', '1.00', '', '9');
INSERT INTO `product_item` VALUES ('20', '30TG50', '30 in Fuji Ty 80 láng 50 m', '1', '2012-08-10 14:41:59', '1', '2012-12-01 09:11:04', null, '1', '1', '4', '30G', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '76.20', null, '0.010', '', '0', '20', '69', '20000.0000', '2012-12-01', '20000.0000', null, '0.00', '0.00', '', '38.10', '1.00', '', '10');
INSERT INTO `product_item` VALUES ('21', '30TL50', '30 in Fuji Ty 80 lụa  50 m', '1', '2012-08-10 14:42:50', '1', '2012-12-01 09:11:04', null, '1', '1', '4', '30L', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '76.20', null, '0.010', '', '0', '30', '69', '20000.0000', '2012-12-01', '20000.0000', null, '0.00', '0.00', '', '38.10', '1.00', '', '11');
INSERT INTO `product_item` VALUES ('22', '50TG50', '50 in Fuji Ty 80 láng 50 m', '1', '2012-08-10 14:44:01', '1', '2012-11-15 16:19:19', null, '1', '1', '4', '50G', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '127.00', null, '0.010', '', '0', '0', '69', '0.0000', '2012-08-10', '0.0000', null, '0.00', '0.00', '', '63.50', '1.00', '', '12');
INSERT INTO `product_item` VALUES ('23', '50TL50', '50 in Fuji Ty 80 lụa  50 m', '1', '2012-08-10 14:44:45', '1', '2012-11-16 15:49:59', null, '1', '1', '4', '50L', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '127.00', null, '0.010', '', '0', '0', '69', '1500000.0000', '2012-11-15', '0.0000', null, '0.00', '0.00', '', '63.50', '1.00', '', '13');
INSERT INTO `product_item` VALUES ('24', 'P1PRO40', 'P1 Pro 40 lít', '1', '2012-08-10 14:46:24', '1', '2012-12-01 09:13:23', null, '1', '1', '4', 'HCL', '2', '40.00', '1.00', '4', null, '2', '40.00', '1.00', null, '1.00', '40.00', null, '0.010', '', '0', '25', '69', '24000.0000', '2012-12-01', '24000.0000', null, '0.00', '0.00', '', '40.00', '1.00', '', '14');

-- ----------------------------
-- Table structure for `product_type`
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type` (
  `id` varchar(20) character set utf8 NOT NULL default '',
  `name` varchar(255) character set utf8 NOT NULL,
  `isM` bit(1) default '',
  `parent` varchar(255) character set utf8 default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_type
-- ----------------------------
INSERT INTO `product_type` VALUES ('10G', 'Giấy 10 in láng', '', '10 in');
INSERT INTO `product_type` VALUES ('10L', 'Giấy 10 in lụa', '', '10 in');
INSERT INTO `product_type` VALUES ('12G', 'Giấy 12 in láng', '', '12 in');
INSERT INTO `product_type` VALUES ('24G', 'Giấy 24 in láng', '', '24 in');
INSERT INTO `product_type` VALUES ('24L', 'Giấy 24 in lụa', '', '24 in');
INSERT INTO `product_type` VALUES ('30G', 'Giấy 30 in láng', '', '30 in');
INSERT INTO `product_type` VALUES ('30L', 'Giấy 30 in lụa', '', '30 in');
INSERT INTO `product_type` VALUES ('50G', 'Giấy 50 in láng', '', '50 in');
INSERT INTO `product_type` VALUES ('50L', 'Giấy 50 in lụa', '', '50 in');
INSERT INTO `product_type` VALUES ('5G', 'Giấy 5 in láng', '', '5 in');
INSERT INTO `product_type` VALUES ('5L', 'Giấy 5 in lụa', '', '5 in');
INSERT INTO `product_type` VALUES ('6G', 'Giấy 6 in láng', '', '6 in');
INSERT INTO `product_type` VALUES ('6L', 'Giấy 6 in lụa', '', '6 in');
INSERT INTO `product_type` VALUES ('8G', 'Giấy 8 in láng', '', '8 in');
INSERT INTO `product_type` VALUES ('8L', 'Giấy 8 in lụa', '', '8 in');
INSERT INTO `product_type` VALUES ('HCL', 'Hóa chất lớn', '', 'HCL');
INSERT INTO `product_type` VALUES ('HCN', 'Hóa chất lab', '', 'HCN');
INSERT INTO `product_type` VALUES ('ME', 'Metalit', '', 'ME');

-- ----------------------------
-- Table structure for `product_uom`
-- ----------------------------
DROP TABLE IF EXISTS `product_uom`;
CREATE TABLE `product_uom` (
  `id` int(15) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` USING BTREE (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_uom
-- ----------------------------
INSERT INTO `product_uom` VALUES ('172', 'Cái');
INSERT INTO `product_uom` VALUES ('1', 'Cây');
INSERT INTO `product_uom` VALUES ('173', 'Hộp');
INSERT INTO `product_uom` VALUES ('2', 'Lít');
INSERT INTO `product_uom` VALUES ('174', 'm2');
INSERT INTO `product_uom` VALUES ('5', 'Mét');
INSERT INTO `product_uom` VALUES ('3', 'Roll');
INSERT INTO `product_uom` VALUES ('4', 'Thùng');

-- ----------------------------
-- Table structure for `product_uom_convert`
-- ----------------------------
DROP TABLE IF EXISTS `product_uom_convert`;
CREATE TABLE `product_uom_convert` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL,
  `uom_id` int(11) NOT NULL,
  `convert_to_id` int(11) NOT NULL,
  `factor` decimal(10,9) NOT NULL,
  `rounding` decimal(10,0) default NULL,
  `Note` varchar(255) character set utf8 default NULL,
  PRIMARY KEY  (`id`),
  KEY `uom_id` USING BTREE (`uom_id`),
  KEY `convert_to_id` USING BTREE (`convert_to_id`),
  KEY `product_id` USING BTREE (`product_id`),
  CONSTRAINT `product_uom_convert_ibfk_1` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`),
  CONSTRAINT `product_uom_convert_ibfk_2` FOREIGN KEY (`convert_to_id`) REFERENCES `product_uom` (`id`),
  CONSTRAINT `product_uom_convert_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
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
  `id` int(11) NOT NULL auto_increment,
  `po_num` varchar(50) NOT NULL,
  `po_date` date default NULL,
  `inv_date` date default NULL,
  `inv_num` varchar(50) default NULL,
  `supplier_id` int(22) default NULL,
  `payment_term` tinyint(4) default NULL,
  `paid` bit(1) default NULL,
  `create_date` datetime default NULL,
  `create_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `status` tinyint(4) default NULL,
  `branch_id` tinyint(11) NOT NULL,
  `wh_id` int(11) default NULL,
  `amount_total` decimal(10,0) default NULL,
  `amount_tax` decimal(10,0) default NULL,
  `shipped` bit(1) default NULL COMMENT 'Received',
  PRIMARY KEY  (`id`),
  KEY `wh_id` USING BTREE (`wh_id`),
  KEY `branch_id` USING BTREE (`branch_id`),
  KEY `supplier_id` USING BTREE (`supplier_id`),
  CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`),
  CONSTRAINT `purchase_order_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`),
  CONSTRAINT `purchase_order_ibfk_3` FOREIGN KEY (`supplier_id`) REFERENCES `sys_partner` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of purchase_order
-- ----------------------------

-- ----------------------------
-- Table structure for `purchase_order_line`
-- ----------------------------
DROP TABLE IF EXISTS `purchase_order_line`;
CREATE TABLE `purchase_order_line` (
  `id` int(11) NOT NULL auto_increment,
  `po_id` int(50) default NULL,
  `product_id` int(20) default NULL,
  `qty` decimal(10,0) default NULL,
  `description` varchar(255) character set utf8 default NULL,
  `price` decimal(19,2) default NULL,
  `discount` float default NULL,
  `wh_id` int(20) default NULL,
  `lenght` float default NULL,
  `width` float default NULL,
  `thickness` float default NULL,
  `note` text character set utf8,
  `amount_total` decimal(19,2) default NULL,
  `amount_vat` decimal(19,2) default NULL,
  `status` tinyint(1) default NULL,
  `create_date` datetime default NULL,
  `create_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `uom_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id, po_id` USING BTREE (`id`,`po_id`),
  KEY `po_id` USING BTREE (`po_id`),
  KEY `product_id` USING BTREE (`product_id`),
  KEY `wh_id` USING BTREE (`wh_id`),
  KEY `discount` USING BTREE (`discount`),
  KEY `uom_id` USING BTREE (`uom_id`),
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
  PRIMARY KEY  (`itemname`),
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
  `id` int(5) default NULL,
  `name` varchar(50) default NULL,
  `city` varchar(50) default NULL,
  `type` varchar(10) default NULL,
  `item` varchar(50) default NULL,
  `value` decimal(15,2) default NULL
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
  `id` int(11) NOT NULL auto_increment,
  `so_num` varchar(20) NOT NULL default '',
  `so_date` date default NULL,
  `description` text character set utf8,
  `customer_id` int(50) default NULL,
  `status` tinyint(4) default NULL,
  `total_amt` double(19,2) default NULL,
  `vat_amt` double(19,2) default NULL,
  `has_invoce` bit(1) default NULL,
  `inv_num` varchar(50) default NULL,
  `paid` bit(1) default NULL,
  `inv_date` date default NULL,
  `saleman` varchar(20) character set utf8 default NULL,
  `branch_id` tinyint(11) NOT NULL,
  `create_uid` int(11) default NULL,
  `create_date` datetime default NULL,
  `update_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `saleman` USING BTREE (`saleman`),
  KEY `customer_id` USING BTREE (`customer_id`),
  KEY `branch_id` USING BTREE (`branch_id`),
  CONSTRAINT `sales_order_ibfk_1` FOREIGN KEY (`saleman`) REFERENCES `sale_saleman` (`saleman`),
  CONSTRAINT `sales_order_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `sys_partner` (`id`),
  CONSTRAINT `sales_order_ibfk_3` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sales_order
-- ----------------------------

-- ----------------------------
-- Table structure for `sales_order_line`
-- ----------------------------
DROP TABLE IF EXISTS `sales_order_line`;
CREATE TABLE `sales_order_line` (
  `id` int(11) NOT NULL auto_increment,
  `so_id` int(50) default NULL,
  `product_id` int(20) default NULL,
  `description` varchar(255) default NULL,
  `price` decimal(19,2) default NULL,
  `qty` float default NULL,
  `uom_id` int(15) default NULL,
  `discount` float default NULL,
  `wh_id` int(20) default NULL,
  `create_date` datetime default NULL,
  `create_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` USING BTREE (`id`,`so_id`),
  KEY `item_id` USING BTREE (`product_id`),
  KEY `so_id` USING BTREE (`so_id`),
  KEY `wh_id` USING BTREE (`wh_id`),
  KEY `uom_id` USING BTREE (`uom_id`),
  CONSTRAINT `sales_order_line_ibfk_1` FOREIGN KEY (`so_id`) REFERENCES `sales_order` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sales_order_line
-- ----------------------------

-- ----------------------------
-- Table structure for `sale_saleman`
-- ----------------------------
DROP TABLE IF EXISTS `sale_saleman`;
CREATE TABLE `sale_saleman` (
  `saleman` varchar(20) character set utf8 NOT NULL default '',
  `salemanname` varchar(255) character set utf8 default NULL,
  `branch_id` tinyint(11) NOT NULL,
  PRIMARY KEY  (`saleman`),
  KEY `branch_id` USING BTREE (`branch_id`),
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
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(64) NOT NULL default 'system',
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `category_key` USING BTREE (`category`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'hr', 'color_events', 's:115:\"#a85a31\r\n#54d472\r\n#327542\r\n#358575\r\n#bdbf75\r\n#c9ccf7\r\n#0d20f7\r\n#918c03\r\n#734673\r\n#08f56f\r\n#054d69\r\n#fcf408\r\n#a899f2\";');
INSERT INTO `settings` VALUES ('2', 'hr', 'color_event_birthday', 's:7:\"#4737fa\";');
INSERT INTO `settings` VALUES ('3', 'hr', 'color_event_weddingday', 's:7:\"#ff66d6\";');
INSERT INTO `settings` VALUES ('4', 'hr', 'color_event_holiday', 's:7:\"#4a98cc\";');
INSERT INTO `settings` VALUES ('7', 'hr', 'preview_color1', 's:7:\"#a85a31\";');

-- ----------------------------
-- Table structure for `sitecontent`
-- ----------------------------
DROP TABLE IF EXISTS `sitecontent`;
CREATE TABLE `sitecontent` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `parent` int(11) NOT NULL,
  `authorid` varchar(255) default NULL,
  `language` varchar(5) NOT NULL,
  `position` int(10) unsigned NOT NULL,
  `metatags` text,
  `redirect` varchar(255) default NULL,
  `visible` int(10) NOT NULL,
  `title_url` varchar(80) NOT NULL,
  `title_browser` varchar(80) NOT NULL,
  `title` varchar(255) NOT NULL,
  `password` varchar(255) default NULL,
  `content` text NOT NULL,
  `createtime` int(11) default NULL,
  `updatetime` int(11) default NULL,
  `images` varchar(4096) default NULL,
  `tags` varchar(255) default NULL,
  `views` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`,`language`),
  KEY `sitecontent_title` USING BTREE (`title`),
  KEY `sitecontent_title_url` USING BTREE (`title_url`)
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
  `name` varchar(255) character set utf8 NOT NULL,
  `address` varchar(255) character set utf8 default NULL,
  `tel` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(11) NOT NULL default '1',
  `name` varchar(255) character set utf8 NOT NULL,
  `logo` varbinary(255) default NULL,
  `header` text character set utf8,
  `header1` text character set utf8,
  `header2` text character set utf8,
  `company_slogan` varchar(255) character set utf8 default NULL,
  `address` varchar(255) character set utf8 default NULL,
  `tel` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(11) NOT NULL auto_increment,
  `modelName` varchar(250) default NULL,
  `fieldName` varchar(250) default NULL,
  `attributeLabel` varchar(250) default NULL,
  `modified` int(11) default '0',
  `custom` int(11) default '1',
  `type` varchar(20) default 'varchar',
  `required` tinyint(4) default '0',
  `readOnly` tinyint(4) default '0',
  `linkType` varchar(250) default NULL,
  PRIMARY KEY  (`id`),
  KEY `modelName` USING BTREE (`modelName`)
) ENGINE=InnoDB AUTO_INCREMENT=303 DEFAULT CHARSET=utf8;

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
INSERT INTO `sys_fields` VALUES ('266', 'ShiftDetail', 'emp_id', 'Nhân viên', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('267', 'ShiftDetail', 'date', 'Ngày trực', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('268', 'ShiftDetail', 'shift_id', 'Ca trực', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('269', 'ShiftChange', 'note', 'Lý do', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('270', 'CodeEmployee', 'codeEmployee', 'sfafafaf', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('271', 'ShiftChange', 'emp_from', 'Nhân viên đổi trực', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('272', 'ShiftChange', 'emp_to', 'Nhân viên nhận đổi trực', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('273', 'ShiftChange', 'date_from', 'Ngày đổi trực', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('274', 'ShiftChange', 'date_to', 'Ngày nhận đổi trực', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('275', 'ShiftChange', 'form1_id', 'Ca trực nhân viên đổi', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('276', 'ShiftChange', 'form2_id', 'Ca trực nhân viên nhận đổi', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('277', 'ShiftReplace', 'old_emp_id', 'Nhân viên nhờ làm thế', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('278', 'ShiftReplace', 'date', 'Ngày nhờ làm thế', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('279', 'ShiftReplace', 'old_detail_id', 'Ca nhờ làm thế', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('280', 'ShiftReplace', 'new_emp_id', 'Nhân viên nhận làm thế', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('281', 'ShiftReplace', 'note', 'Lý do', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('282', 'Product', 'minqtystock', 'Định mức tồn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('283', 'Profit', 'amt', 'Giá trị lãi', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('284', 'Partner', 'tel', 'Điện thoại', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('285', 'Partner', 'create_date', 'Ngày tạo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('286', 'WarehouseoutType', 'note', 'Mô tả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('287', 'WarehouseoutType', 'wh_req', 'Xuất cho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('288', 'Limit', 'qtyLimit', 'Định mức tồn', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('289', 'Profit', 'date', 'Ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('290', 'Profit', 'note', 'Ghi chú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('291', 'ProfitDetail', 'amt', 'Giá trị', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('292', 'ShiftDetail', 'date_correct', 'Ngày điều chỉnh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('293', 'ShiftDetail', 'from_correct', 'Điều chỉnh vào', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('294', 'ShiftDetail', 'to_correct', 'Điều chỉnh ra', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('295', 'ShiftDetail', 'note', 'Lý do điều chỉnh', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('296', 'Payment', 'amt', 'Tiền mặt', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('297', 'ProductType', 'parent', 'Nhóm', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('298', 'Product', 'hascounter', 'Counter', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('299', 'Warehouse', 'default_wh_in', 'Mặc định nhập', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('300', 'Warehouse', 'default_wh_out', 'Mặc đinh xuất', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('301', 'Search', 'month', 'Tìm kiếm theo', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('302', 'Category', 'index', 'Số thứ tự', '0', '1', 'varchar', '0', '0', null);

-- ----------------------------
-- Table structure for `sys_lookup`
-- ----------------------------
DROP TABLE IF EXISTS `sys_lookup`;
CREATE TABLE `sys_lookup` (
  `code` int(11) NOT NULL default '0',
  `type` varchar(255) NOT NULL default '',
  `name` varchar(255) character set utf8 default NULL,
  `position` int(11) default NULL,
  KEY `code` USING BTREE (`code`,`type`)
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
  `classname` varchar(255) NOT NULL default '',
  `data` text,
  PRIMARY KEY  (`classname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sys_modelsettings
-- ----------------------------

-- ----------------------------
-- Table structure for `sys_partner`
-- ----------------------------
DROP TABLE IF EXISTS `sys_partner`;
CREATE TABLE `sys_partner` (
  `id` int(11) NOT NULL auto_increment,
  `code` varchar(50) NOT NULL default '',
  `name` varchar(255) character set utf8 NOT NULL,
  `tel` varchar(50) default NULL,
  `web` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `active` bit(1) default NULL,
  `create_date` datetime default NULL,
  `create_uid` int(11) default NULL,
  `update_date` datetime default NULL,
  `update_uid` int(11) default NULL,
  `customer` bit(1) default NULL,
  `supplier` bit(1) default NULL,
  `comment` text character set utf8,
  `branch_id` tinyint(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `company_id` USING BTREE (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_partner
-- ----------------------------
INSERT INTO `sys_partner` VALUES ('1', 'kh001', 'Khach hang A', null, null, null, '', null, '1', null, '1', '', '', null, '0');
INSERT INTO `sys_partner` VALUES ('2', 'Kh002', 'Khach hang B', null, null, null, '', null, '1', null, '1', '', '', null, '0');
INSERT INTO `sys_partner` VALUES ('15', 'kh003', 'khach hang 003', '', '', '', '', '2012-07-26 16:54:05', '1', '2012-11-14 15:49:55', '1', '', '', '', '1');
INSERT INTO `sys_partner` VALUES ('16', 'kh004', 'khach hang 004', '', '', '', '', '2012-07-26 16:56:01', '1', '2012-07-26 16:56:01', '1', '', '', '', '1');
INSERT INTO `sys_partner` VALUES ('17', 'kh005', 'khach hang 005', '', '', 'abc@yahoo.com', '', '2012-07-26 16:57:51', '1', '2012-11-22 16:21:09', '1', '', '', '', '1');

-- ----------------------------
-- Table structure for `sys_sequence`
-- ----------------------------
DROP TABLE IF EXISTS `sys_sequence`;
CREATE TABLE `sys_sequence` (
  `id` int(20) NOT NULL auto_increment,
  `code` varchar(20) default NULL,
  `name` varchar(255) default NULL,
  `number_next` bigint(20) default NULL,
  `prefix` varchar(20) default NULL,
  `suffix` varchar(20) default NULL,
  `active` bit(1) default NULL,
  `branch_id` tinyint(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `code` USING BTREE (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_sequence
-- ----------------------------
INSERT INTO `sys_sequence` VALUES ('1', 'Warehousein', null, '104', 'NVT', null, null, '1');
INSERT INTO `sys_sequence` VALUES ('2', 'Warehouseout', null, '34', 'XVT', null, null, '1');
INSERT INTO `sys_sequence` VALUES ('3', 'Transfer', null, '14', 'CVT', null, null, '1');

-- ----------------------------
-- Table structure for `tbl_columns`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_columns`;
CREATE TABLE `tbl_columns` (
  `id` varchar(100) NOT NULL,
  `data` varchar(1024) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_columns
-- ----------------------------
INSERT INTO `tbl_columns` VALUES ('batch-grid_1', 'code||name||amt||qty||date||note||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('capitalIncrease-grid_1', 'date||amt||note||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('employee-grid_1', 'image||code||firstname||middlename||lastname||sex||mobile_phone||identification||shop_id||department_id||job_id||email||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('holidays-grid_1', 'description||startDate||dueDate||Màus?ki?n||startDate_1||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('hr-employee-new-grid_1', 'code||firstname||middlename||lastname||birthday||mobile_phone||identification||shop_id||department_id||job_id||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('reports-grid_1', 'num||date||invnum||supplier||paymentterm||Mãhàng||product_code||uom||qty||price||subtotal||create_uid||branch_id||status||paid:boolean');
INSERT INTO `tbl_columns` VALUES ('shift-plan-grid_1', 'name||department_id||startdate||enddate||status||details||change||replate||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('transfer-grid_1', 'num||date||description||create_uid||create_date||update_uid||update_date||branch_id||status||bootstrap.widgets.TbButtonColumn||create_date_1');
INSERT INTO `tbl_columns` VALUES ('warehousein-grid_1', 'num||date||supplier_id||invdate||invnum||amounttotal||paymentterm||paid||status||create_uid||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('warehouseout-grid_1', 'num||date||type||create_uid||create_date||update_date||update_uid||branch_id||amounttotal||status||note||bootstrap.widgets.TbButtonColumn');
INSERT INTO `tbl_columns` VALUES ('warehousindetails-grid_1', 'warehousein.num||warehousein.date||warehousein.invnum||paymentterm||paid||Mãhàng||product_code||uom||qty||price||subtotal');

-- ----------------------------
-- Table structure for `tbl_profiles`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_profiles`;
CREATE TABLE `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL default '',
  `firstname` varchar(50) NOT NULL default '',
  `birthday` date NOT NULL default '0000-00-00',
  `middlename` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`user_id`)
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
  `id` int(10) NOT NULL auto_increment,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL default '0',
  `field_size_min` int(3) NOT NULL default '0',
  `required` int(1) NOT NULL default '0',
  `match` varchar(255) NOT NULL default '',
  `range` varchar(255) NOT NULL default '',
  `error_message` varchar(255) NOT NULL default '',
  `other_validator` varchar(5000) NOT NULL default '',
  `default` varchar(255) NOT NULL default '',
  `widget` varchar(255) NOT NULL default '',
  `widgetparams` varchar(5000) NOT NULL default '',
  `position` int(3) NOT NULL default '0',
  `visible` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `varname` USING BTREE (`varname`,`widget`,`visible`)
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
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(64) NOT NULL default 'system',
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `category_key` USING BTREE (`category`,`key`)
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
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL default '',
  `createtime` int(10) NOT NULL default '0',
  `lastvisit` int(10) NOT NULL default '0',
  `superuser` int(1) NOT NULL default '0',
  `status` int(1) NOT NULL default '0',
  `branch_id` int(11) default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` USING BTREE (`username`),
  UNIQUE KEY `email` USING BTREE (`email`),
  KEY `status` USING BTREE (`status`),
  KEY `superuser` USING BTREE (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('1', 'admin', '625d45c587033e8970af8b4e3fdb575c', 'webmaster@example.com', '4ecf9c0317dff4756a3eb2ca39054fa4', '1261146094', '1354865209', '1', '1', '1');
INSERT INTO `tbl_users` VALUES ('2', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example1.com', '099f825543f7850cc038b90aaff39fac', '1261146096', '1351509527', '0', '1', '1');
INSERT INTO `tbl_users` VALUES ('3', 'kho', '81dc9bdb52d04dc20036dbd8313ed055', 'minhtuana1@yahoo.com', '0b5fbb3db945d0276df3907fc568e039', '1351485218', '1351509591', '0', '1', '1');
INSERT INTO `tbl_users` VALUES ('4', 'nhap', '81dc9bdb52d04dc20036dbd8313ed055', 'nhap@yahoo.com', 'bdb136310663dc63aabeac780f31edc8', '1351565925', '1351567687', '0', '1', '1');
INSERT INTO `tbl_users` VALUES ('5', 'xuat', '81dc9bdb52d04dc20036dbd8313ed055', 'xuat@yahoo.com', 'f6de07045cf42d5fa5d5f794af3c028b', '1351565969', '1351567872', '0', '1', '1');

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
