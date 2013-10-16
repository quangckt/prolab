/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : prolab

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-03-01 16:31:33
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
INSERT INTO `authassignment` VALUES ('nhanvien', '7', null, 'N;');
INSERT INTO `authassignment` VALUES ('nhapkho', '4', null, 'N;');
INSERT INTO `authassignment` VALUES ('quanlykho', '3', null, 'N;');
INSERT INTO `authassignment` VALUES ('taskFornhanvien', '7', null, 'N;');
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
  PRIMARY KEY (`name`)
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
INSERT INTO `authitem` VALUES ('hr.shiftChange.Create', '0', 'hr.shiftChange.Create', null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.*', '1', null, null, 'N;');
INSERT INTO `authitem` VALUES ('hr.ShiftDetail.AcceptGrade', '0', 'hr.ShiftDetail.AcceptGrade', null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.Admin', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.Create', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('hr.shiftDetail.EarlyLate', '0', 'hr.shiftDetail.EarlyLate', null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.GetItems', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('hr.shiftDetail.Grade', '0', 'hr.shiftDetail.Grade', null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.Index', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.LoadShiftDetail', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('hr.shiftDetail.RegTimeIn', '0', 'hr.shiftDetail.RegTimeIn', null, 'N;');
INSERT INTO `authitem` VALUES ('hr.shiftDetail.RegTimeOut', '0', 'hr.shiftDetail.RegTimeOut', null, 'N;');
INSERT INTO `authitem` VALUES ('Hr.ShiftDetail.SaveShiftDetail', '0', null, null, 'N;');
INSERT INTO `authitem` VALUES ('hr.shiftDetail.SubmitRegTimeIn', '0', 'hr.shiftDetail.SubmitRegTimeIn', null, 'N;');
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
INSERT INTO `authitem` VALUES ('nhanvien', '2', 'nhanvien', null, 'N;');
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
INSERT INTO `authitem` VALUES ('taskFornhanvien', '1', 'taskFornhanvien', null, 'N;');
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
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of authitemchild
-- ----------------------------
INSERT INTO `authitemchild` VALUES ('Authenticated', 'Cms.Default.Admin');
INSERT INTO `authitemchild` VALUES ('taskFornhanvien', 'Hr.Default.*');
INSERT INTO `authitemchild` VALUES ('taskFornhanvien', 'Hr.Employee.*');
INSERT INTO `authitemchild` VALUES ('taskFornhanvien', 'Hr.Eventcalendar.Index');
INSERT INTO `authitemchild` VALUES ('taskFornhanvien', 'hr.shiftChange.Create');
INSERT INTO `authitemchild` VALUES ('taskFornhanvien', 'hr.ShiftDetail.AcceptGrade');
INSERT INTO `authitemchild` VALUES ('taskFornhanvien', 'hr.shiftDetail.EarlyLate');
INSERT INTO `authitemchild` VALUES ('taskFornhanvien', 'hr.shiftDetail.Grade');
INSERT INTO `authitemchild` VALUES ('taskFornhanvien', 'hr.shiftDetail.RegTimeIn');
INSERT INTO `authitemchild` VALUES ('taskFornhanvien', 'hr.shiftDetail.RegTimeOut');
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
INSERT INTO `eventcalendar` VALUES ('248', '1', null, null, 'test 150', '0', null, '0', null, '1351789200', '1:0', null, null, '0', null, null, null, 'No', null, null, null, null, null, null, null, '0', '#f70000', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_batch
-- ----------------------------
INSERT INTO `hr_batch` VALUES ('1', 'VĐL', 'Vốn điều lệ', '2012-12-24', null, '4000000000', 'Vốn điều lệ công ty', null, null, '0');
INSERT INTO `hr_batch` VALUES ('20', 'CP01/2013', 'Đợt 1/2013', '2013-01-03', '250000', '500000000', 'Phát hành cổ phần tháng 01 năm 2013', null, null, '1');
INSERT INTO `hr_batch` VALUES ('21', 'TV0001', 'Tăng vốn đợt 1', '2013-01-04', null, '150000000', 'Mua máy mới phát triển công việc', null, null, '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_department
-- ----------------------------
INSERT INTO `hr_department` VALUES ('3', 'Quầy', null);
INSERT INTO `hr_department` VALUES ('4', 'Quản lý', null);
INSERT INTO `hr_department` VALUES ('5', 'In rọi', null);
INSERT INTO `hr_department` VALUES ('6', 'Album', null);
INSERT INTO `hr_department` VALUES ('7', 'Thiết kế', null);
INSERT INTO `hr_department` VALUES ('8', 'In thanh toán', null);
INSERT INTO `hr_department` VALUES ('9', 'Giao nhận', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_education
-- ----------------------------
INSERT INTO `hr_education` VALUES ('1', '11', 'kinh te', '4', '2', '5', '2010');
INSERT INTO `hr_education` VALUES ('2', '1', 'kinh te', '4', '2', '3', '2010');
INSERT INTO `hr_education` VALUES ('3', '12', 'kinh te', '4', '2', '5', '2010');
INSERT INTO `hr_education` VALUES ('4', '3', 'fsdsdfs', '4', '3', '5', '7');
INSERT INTO `hr_education` VALUES ('5', '4', 'sadasd', '3', '3', '5', '2015');
INSERT INTO `hr_education` VALUES ('9', '9', 'da', '12', '3', '1', '2012');
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
INSERT INTO `hr_education` VALUES ('35', '8', 'asfas', '12', '2', '1', '2012');
INSERT INTO `hr_education` VALUES ('36', '35', 'adfaf', '1', '3', '1', '44');
INSERT INTO `hr_education` VALUES ('37', '39', 'afaf', '5', '4', '3', '45454');
INSERT INTO `hr_education` VALUES ('38', '44', '', null, null, '2', null);
INSERT INTO `hr_education` VALUES ('39', '48', 'sgsg', '4', '4', '2', '4545');
INSERT INTO `hr_education` VALUES ('40', '49', 'sdhsd', '4', '4', '2', '454');
INSERT INTO `hr_education` VALUES ('41', '50', '000', '0', '3', '1', '0');
INSERT INTO `hr_education` VALUES ('42', '51', 'df', '0', '2', '1', '0');
INSERT INTO `hr_education` VALUES ('43', '52', '000', '0', '3', '1', '0');
INSERT INTO `hr_education` VALUES ('44', '53', '000', '0', '3', '1', '0');
INSERT INTO `hr_education` VALUES ('45', '54', '000', '0', '2', '1', '0');
INSERT INTO `hr_education` VALUES ('46', '55', '000', '0', '3', '2', '0');
INSERT INTO `hr_education` VALUES ('47', '56', '000', '0', '3', '1', '0');
INSERT INTO `hr_education` VALUES ('48', '57', '000', '0', '3', '1', '0');
INSERT INTO `hr_education` VALUES ('49', '58', '000', '0', '3', '1', '0');
INSERT INTO `hr_education` VALUES ('50', '59', '000', '0', '3', '1', '0');

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
  `identification` varchar(10) NOT NULL COMMENT 'Số chứng minh nhân dân',
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
  `rateOfStock` decimal(19,2) DEFAULT NULL,
  `qtyOfStock` decimal(19,0) DEFAULT NULL,
  `amtOfStock` decimal(19,0) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_employee
-- ----------------------------
INSERT INTO `hr_employee` VALUES ('1', 'LA', '30', 'Mai', 'Thanh', 'Lan', '1981-10-02', 'Sài Gòn', '213265', '0123456789', '', '', ' 023591096', ' CA TP HCM ', '1997-08-21', '1.jpg', '1', '2006-10-01', 'Dương Quảng Hàm', '', '1', null, '2', null, '1', '2', '2010-02-09', '0', '', null, '3', null, '', '', null, '4', 'Kinh tế', '1.78', '39885', '73950000');
INSERT INTO `hr_employee` VALUES ('3', 'LO', '6', 'Lê ', 'Thị Bích', 'Loan', '2012-10-03', 'Quảng Ngãi', '', '0123589654', '', '', '250595228', 'Long An', '2012-09-04', '3.jpg', '1', '2006-02-01', '123 Tr?n Phú', '', '1', null, '2', null, '1', '2', '2012-09-05', '0', '', null, '3', null, 'nhảm nhí quá ông tuấn ơi', 'tttttttttttttttttttttttttttttttttttt', '1970-01-15', '2', 'Trung học', '1.01', '20938', '41875000');
INSERT INTO `hr_employee` VALUES ('4', 'NH', '7', 'Nguyễn', 'Thị Quỳnh', 'Như', '1982-10-30', 'Đà Lạt', '0633587895', '0903030924', '', 'yummy21vn@yahoo.com', '250564875', 'CA Lâm ??ng', '1999-09-04', '4.jpg', '1', '2008-12-01', '113 ?inh Tiên Hoàng', '', '1', null, '2', null, '1', '2', '2012-09-03', '0', '', null, '3', null, 'sdfsdfsdfsd', '', '2012-09-02', '3', 'kế toán', '2.06', '42688', '85375000');
INSERT INTO `hr_employee` VALUES ('5', 'OA', '8', 'Vũ', 'Thị ', 'Oanh', '1975-10-17', 'Nam Định', '', '0987546854', '', '', '658954652', 'CA Long An', '2010-09-03', '5.jpg', '1', '1995-12-01', '124 B?c H?i', '', '1', null, '2', null, '1', '2', '2012-09-01', '0', '', null, '3', null, 'sdfsdfsdfsd', 'cfbgxdfbvx', '2012-09-02', '1', 'Kinh tế', '3.51', '72813', '145625000');
INSERT INTO `hr_employee` VALUES ('6', 'TG', '5', 'Nguyễn', 'Thị Thùy', 'Trang', '1982-10-01', 'Gò Công ', '', '0906875245', '', '', '98754256', 'CA Lào Cai', '2005-09-03', '6.jpg', '1', '2004-07-01', '', '', null, null, null, null, '1', '2', '2012-09-04', '0', '', null, '3', null, 'cvbfcvbxcbxcv', 'dfgsdgwetwetw', '1970-01-01', '2', 'Kinh tế', '0.63', '13063', '26125000');
INSERT INTO `hr_employee` VALUES ('8', 'PT', '32', 'Phạm ', 'Thị Hoài', 'Thương', '1984-10-01', 'Kiên Giang', '', '0907854568', '', '', '250595254', 'CA Hu?', '2000-09-04', '8.jpg', '1', '2004-05-01', '124 B?c H?i', '', '1', null, '2', null, '1', '2', '2012-09-06', '0', '', null, '3', null, 'regtdfgdfgdfgdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2012-10-08', '2', 'Toán', '0.50', '10375', '20750000');
INSERT INTO `hr_employee` VALUES ('9', 'TR', '31', 'Nguyễn', 'Thị Hương', 'Trinh', '1964-09-08', 'Gò Vấp', '', '0122584758', '', '', '2147483647', 'CA H? Chí Minh', '2012-09-06', '9.jpg', '3', '1997-09-01', '123 Tr?n Phú', '', '1', null, '2', null, '1', '2', '2012-09-11', '0', '', null, '3', null, '', '', '2012-09-02', '2', 'Kinh tế', '1.50', '31125', '62250000');
INSERT INTO `hr_employee` VALUES ('10', 'KT', '55', 'Tô', 'Thị Kim ', 'Thanh', '1984-09-08', 'Sài Gòn', '', '0988655455', '', '', '15489658', 'CA Hà N?i', '1980-09-06', '10.jpg', '1', '2012-10-01', '121, H? Bá Ki?n', '', null, null, '1', null, '1', '2', '2012-08-07', '0', '', null, '3', null, '', '', null, '5', 'kế toán', null, null, null);
INSERT INTO `hr_employee` VALUES ('11', 'KH', '56', 'Phan ', 'Khắc ', 'Hiếu', '1990-09-08', 'Trà Vinh', '', '0256897548', '', '', '50858456', 'CA H? Chí Minh', '2000-09-07', '11.jpg', '1', '2012-10-01', '4/7 Tô Hi?n Thành', '', '1', null, '2', null, '1', '2', '2012-09-11', '0', '', null, '3', null, '', 'buon`', '2012-10-13', '5', 'Tin', null, null, null);
INSERT INTO `hr_employee` VALUES ('12', 'PH', '19', 'Trần ', 'Giang ', 'Phong', '1975-09-09', 'Gò Vấp ', '0633681020', '0949555821', '', '', '250595229', 'Ca lam dong', '2012-09-01', '12.jpg', '3', '1997-08-01', 'dau do', 'sdfsafdas', '1', '1', '2', '2', '0', '2', '2012-09-01', '0', '', null, '5', null, '', 'ban chuyen gia dinh', '2012-09-28', '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('13', 'UT', '57', 'Huỳnh', 'Dân ', 'Trình', '1968-11-06', 'Vĩnh Long', '0633821025', '09068552121', '', 'myhuyen93@yahoo.com', '250568698', 'Ca lam dong', '2000-08-09', '13.jpg', '1', '1994-06-01', '121, H? Bá Ki?n', '', '1', null, '2', null, '0', '2', '2005-11-04', '0', '', null, '5', null, '', '', null, '1', 'kế toán', null, null, null);
INSERT INTO `hr_employee` VALUES ('14', 'DU', '24', 'Trần ', 'Xuân ', 'Đường', '1977-11-06', 'Cần Thơ', '', '0123456784', '', '', '250595257', 'CA Hồ Chí Minh', '2005-09-03', '14.jpg', '1', '2004-05-01', '124 Bắc Hải', '', '1', null, '2', null, '0', '2', '2012-09-11', '0', '', null, '5', null, '', '', null, '1', 'Lý', null, null, null);
INSERT INTO `hr_employee` VALUES ('15', 'GI', '27', 'Lê ', 'Hoàng', 'Giang', '1983-11-16', 'Bến Tre ', '', '0123456789', '', '', '3416546', 'Ca lam dong', '2012-09-07', '15.jpg', '1', '2006-07-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '5', null, '', '', null, '3', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('16', 'DY', '23', 'Nguyễn', 'Khánh ', 'Duy', '1986-11-08', 'Phú Yên', '', '0123456789', '', '', '3416546', 'dfgdfgdfgdf', '2012-09-05', '16.jpg', '1', '2007-07-01', '', '', null, null, null, null, '0', '2', '2012-09-05', '0', '', null, '5', null, '', '', '2012-09-02', '1', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('17', 'QU', '22', 'Dương ', 'Hải ', 'Quan', '1984-11-04', 'Sài Gòn', '', '0123456', '', '', '123456789', 'afafsg', '2012-09-11', '17.jpg', '1', '2005-10-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '5', null, '', '', null, '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('18', 'HU', '11', 'Phan ', 'Tấn ', 'Huy', '1988-12-15', 'Sài Gon', '', '0123456', '', 'minhtuan@sdfsadas.dfgd', '123456789', 'afafaf', '1970-01-01', '18.jpg', '1', '2012-07-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '5', null, '', '', null, '5', 'Lập trình', null, null, null);
INSERT INTO `hr_employee` VALUES ('19', 'TV', '58', 'Nguyễn', 'Thành ', 'Văn', '1987-10-01', 'Hà Nội', '', '253534343', '', '', '123456789', 'adfaf', '2012-09-11', '19.jpg', '1', '2009-06-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '5', null, '', '', null, '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('20', 'CH', '34', 'Dương', ' Hoàng Bảo', 'Châu', '1982-10-26', 'Sài Gòn', '', '535435353', '', '', '123456789', 'afafaf', '1970-01-01', '20.jpg', '1', '2003-11-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '7', null, '', '', null, '1', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('24', 'DH', '33', 'Đào', 'Thị Thu ', 'Huệ', '1970-10-26', 'Sài Gòn', '0393568957', '13213', '', 'yummy21vn@yahoo.com', '3416546', 'dfgdfgdfgdf', '1970-01-01', '24.jpg', '3', '2004-05-01', '', '', null, null, null, null, '0', '2', '1970-01-01', '0', '', null, '7', null, '', '', null, '4', 'Lập trình', null, null, null);
INSERT INTO `hr_employee` VALUES ('25', 'HT', '59', 'Hà ', 'Ngọc ', 'Thiện', '1990-10-10', 'Sài Gòn', '', '13213', '', '', '3416546', 'CA Huế', '1970-01-01', '25.jpg', '1', '2012-01-01', '', '', null, null, null, null, '0', '2', '1970-01-01', '0', '', null, '7', null, '', '', null, '4', 'Kinh tế', null, null, null);
INSERT INTO `hr_employee` VALUES ('26', 'SO', '37', 'Phạm', 'Thanh ', 'Sơn', '1983-10-13', 'Nam Định', '', '0123456789', '', '', '1313', 'CA Huế', '1970-01-01', '26.jpg', '1', '2008-06-01', '', '', null, null, null, null, '0', '2', '1970-01-01', '0', '', null, '7', null, '', '', null, '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('27', 'TT', '36', 'Trần ', 'Lê Thanh', 'Thảo', '1976-10-18', 'Thanh Hóa', '', '316365', '', '', '250595229', 'Ca lam dong', '1970-01-01', '27.jpg', '1', '2000-10-01', '', '', null, null, null, null, '0', '2', '1970-01-01', '0', '', null, '7', null, '', '', null, '5', 'Lập trình', null, null, null);
INSERT INTO `hr_employee` VALUES ('35', 'XH', '13', 'Trần', 'Xuân', 'Hòa', '1990-09-13', 'Cần Thơ ', '', '423434343', '', '', '3416546', 'adad', '1970-01-01', '35.jpg', '1', '2011-01-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '6', null, '', '', null, '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('38', 'NT', '60', 'Trần ', 'Nghiệp', 'Tân', '1971-09-08', 'Sài Gòn', '', '316365', '', '', '3416546', 'dfgdfgdfgdf', '2012-09-14', '38.jpg', '1', '2007-09-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '6', null, '', '', null, '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('39', 'QH', '54', 'Trần', 'Quốc', 'Huy', '1986-09-25', 'Bà Rịa Vũng Tàu', '', '0122584758', '', 'myhuyen93@yahoo.com', '1313', 'dfgdfgdfgdf', '2012-09-03', '39.jpg', '1', '2008-02-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '6', null, '', '', null, '1', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('42', 'VN', '20', 'Lê', 'Văn', 'Nhựt', '1975-11-05', 'Sài Gòn', '', '13213', '', '', '1313', 'dfgdfgdfgdf', '2012-09-06', '42.jpg', '1', '2011-02-01', '', '', null, null, null, null, '0', '2', '2012-09-05', '0', '', null, '6', null, '', '', null, '2', 'Kinh tế', null, null, null);
INSERT INTO `hr_employee` VALUES ('43', 'NV', '38', 'Nguyễn', 'Văn ', 'Trí', '1993-11-22', 'Sài Gòn', '0393568957', '13213', '', '', '3416546', 'Ca lam dong', '2012-09-04', '43.jpg', '1', '2012-11-01', '', '', null, null, null, null, '0', '2', '2012-09-01', '0', '', null, '6', null, '', '', null, '1', 'Kinh tế', null, null, null);
INSERT INTO `hr_employee` VALUES ('44', 'MT', '9', 'Trần ', 'Minh', 'Tấn', '1966-11-24', 'Đà Lạt', '', '0123456789', '', '', '3416546', 'adfaf', '1970-01-01', '44.jpg', '3', '2005-01-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '6', null, '', '', null, '1', 'Lập trình', null, null, null);
INSERT INTO `hr_employee` VALUES ('46', 'VV', '12', 'Nguyễn ', 'Văn', 'Viện', '1989-11-13', 'Đà Lạt', '', '0123456789', '', '', '3416546', 'adfaf', '1970-01-01', '46.jpg', '1', '2007-08-01', '', '', null, null, null, null, '0', '2', null, '0', '', null, '6', null, '', '', null, '1', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('47', 'VL', '41', 'Nguyễn', 'Văn', 'Lộc', '1985-10-01', 'Hồ Chí MInh', '0633681020', '0123456789', '', 'myhuyen93@yahoo.com', '1313', 'Ca lam dong', '2010-10-03', '47.jpg', '1', '2012-10-01', '', '', null, null, null, null, '1', '2', '2012-10-01', '0', '', null, '9', null, 'xyz abc', '', null, '1', 'kế toán', null, null, null);
INSERT INTO `hr_employee` VALUES ('48', 'TO', '35', 'Trần', 'Thị', 'Tơ', '1976-08-22', 'Đồng Nai', '', '761', '', '', '', 'Đồng Nai', '2012-12-26', '', '1', null, '', '', null, null, null, null, '0', '2', null, '0', '', null, '7', null, '', '', null, '1', 'Kinh tế', null, null, null);
INSERT INTO `hr_employee` VALUES ('49', 'VT', '39', 'Lê', 'Văn', 'Trí', '1976-07-15', 'Thanh Hóa', '', '0909388761', '', '', '', 'Tp.HCM', '2012-12-17', '', '1', null, '', '', null, null, null, null, '0', '2', null, '0', '', null, '7', null, '', '', null, '2', 'Lập trình', null, null, null);
INSERT INTO `hr_employee` VALUES ('50', 'AN', '18', 'Phạm', 'Ngọc', 'An', '1970-01-01', 'Tp.HCM', '', '00000000000', '', '', '', 'Tp.HCM', '2013-01-03', '', '1', '1970-01-01', '', '', null, null, null, null, '1', '2', '1970-01-01', '0', '', null, '9', null, '', '', null, '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('51', 'DP', '14', 'Trương', 'Đức', 'Phú', '1970-01-01', 'Tp.HCM', '', '00000000000', '', '', '', 'Tp.HCM', '2013-01-03', '', '3', '1970-01-01', '', '', null, null, null, null, '1', '2', '1970-01-01', '0', '', null, '9', null, '', '', null, '1', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('52', 'LT', '15', 'Lê', 'Ngọc', 'Thanh', '1990-02-13', 'Thanh Hóa', '', '00000000000', '', '', '', 'Tp.HCM', '2013-01-03', '', '1', '1970-01-01', '', '', null, null, null, null, '1', '2', '1970-01-01', '0', '', null, '9', null, '', '', null, '1', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('53', 'BT', '61', 'Nguyễn', 'Bá', 'Tùng', '1970-01-01', 'Thừa Thiên Huế', '', '00000000000', '', '', '', 'Tp.HCM', '2013-01-03', '', '1', '1970-01-01', '', '', null, null, null, null, '1', '2', '1970-01-01', '0', '', null, '9', null, '', '', null, '1', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('54', 'HD', '62', 'Nguyễn', 'Hữu', 'Dung', '1970-01-01', 'Hà Tây', '', '00000000000', '', '', '', 'Tp.HCM', '2013-01-03', '', '1', '1970-01-01', '', '', null, null, null, null, '1', '2', '1970-01-01', '0', '', null, '9', null, '', '', null, '1', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('55', 'HK', '51', 'Huỳnh', 'Nguyễn', 'Khang', '1970-01-01', 'Sài Gòn', '', '00000000000', '', '', '', 'Tp.HCM', '2013-01-03', '', '1', '1970-01-01', '', '', null, null, null, null, '1', '2', '1970-01-01', '0', '', null, '8', null, '', '', null, '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('56', 'NVT', '16', 'Nguyễn', 'Văn', 'Thắng', '1970-01-01', 'Nam Định', '', '00000000000', '', '', '', 'Tp.HCM', '2013-01-03', '', '1', '1970-01-01', '', '', null, null, null, null, '1', '2', '2009-12-27', '0', '', null, '8', null, '', '', null, '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('57', 'CD', '29', 'Lê', 'Chí', 'Đức', '1970-01-01', 'Sài Gòn', '', '00000000000', '', '', '', 'Tp.HCM', '2013-01-03', '', '1', '1970-01-01', '', '', null, null, null, null, '1', '2', '1970-01-01', '0', '', null, '8', null, '', '', null, '2', 'Trung học', null, null, null);
INSERT INTO `hr_employee` VALUES ('58', 'TH', '40', 'Nguyễn', 'Thị Thanh', 'Hương', '1970-01-01', 'Sài Gòn', '0839701143', '0903583747', '', 'thanhhuong@minhtamprolab.com.vn', '021701662', 'CA Tp.HCM', '1970-01-01', '', '2', '1970-01-01', '9 Bành Văn Trân P7', '', '15', null, '2', null, '1', '2', '1970-01-01', '0', '', null, '4', null, '', '', null, '2', 'Kinh tế', null, null, null);
INSERT INTO `hr_employee` VALUES ('59', 'TA', '1', 'Trần', 'Minh', 'Tâm', '1970-01-01', 'Sài Gòn', '0839701143', '0903706113', '', 'minhtam@minhtamprolab.com.vn', '020072508', 'CA Tp.HCM', '1970-01-01', '59.jpg', '7', '1970-01-01', '9 Bành Văn Trân P7', '', '15', null, '2', null, '1', '2', '1970-01-01', '0', '', null, '4', null, '', '', null, '3', 'Kinh tế', null, null, null);

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
-- Table structure for `hr_general_timeinout`
-- ----------------------------
DROP TABLE IF EXISTS `hr_general_timeinout`;
CREATE TABLE `hr_general_timeinout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_general_timeinout
-- ----------------------------
INSERT INTO `hr_general_timeinout` VALUES ('5', '456', '2012-12-07', '', '1');
INSERT INTO `hr_general_timeinout` VALUES ('6', '', null, '', '1');
INSERT INTO `hr_general_timeinout` VALUES ('7', '', null, '', '1');

-- ----------------------------
-- Table structure for `hr_general_work`
-- ----------------------------
DROP TABLE IF EXISTS `hr_general_work`;
CREATE TABLE `hr_general_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_general_work
-- ----------------------------
INSERT INTO `hr_general_work` VALUES ('1', 'quy định tháng 12', '2012-12-01', '1', '');

-- ----------------------------
-- Table structure for `hr_grade`
-- ----------------------------
DROP TABLE IF EXISTS `hr_grade`;
CREATE TABLE `hr_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `a` tinyint(4) DEFAULT NULL,
  `bc` tinyint(4) DEFAULT NULL,
  `bonusMonth` decimal(19,0) DEFAULT NULL,
  `monthyear` varchar(255) DEFAULT NULL,
  `note` text,
  `dep_id` int(11) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`),
  KEY `dep_id` (`dep_id`),
  CONSTRAINT `hr_grade_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_grade_ibfk_2` FOREIGN KEY (`dep_id`) REFERENCES `hr_department` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_grade
-- ----------------------------
INSERT INTO `hr_grade` VALUES ('2', null, null, null, null, null, '<ol><li>Thưởng B,C : Tự đánh giá tinh thần trách nhiệm, thái độ phục vụ khách\r\n hàng, hiệu quả công việc (chất lượng hình ảnh, tiết kiệm vật tư, ít sai\r\n sót...).</li><li>Thưởng A+ : Hiệu quả công việc vượt trội (<b>thời gian làm \r\nviệc &gt;= 15% quy định</b>, tiền lương cao hơn nhiều so với tháng bình \r\nthường).</li><li>Thưởng tháng : Tự đánh giá tinh thần tiết kiệm và chăm \r\nsóc thiết bị nếu ít hao hụt, ít hư hao tư thưởng cho mình <b>tối đa 20%</b> \r\ntrên lương sản phẩm.</li></ol>', '3', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

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
INSERT INTO `hr_history` VALUES ('72', '1', '1', null, '2012-12-26', 'Minh Tâm', '');
INSERT INTO `hr_history` VALUES ('73', '35', '1', '2012-12-20', '2012-12-18', 'jkhgkgh', null);
INSERT INTO `hr_history` VALUES ('74', '39', '3', '2012-12-11', '2012-12-05', 'afafaf', null);
INSERT INTO `hr_history` VALUES ('75', '44', null, null, null, 'asfasfag', null);
INSERT INTO `hr_history` VALUES ('76', '48', '1', '2012-12-11', '2012-12-13', 'asfdaaf', null);
INSERT INTO `hr_history` VALUES ('77', '49', '2', '2012-12-10', '2012-12-19', 'sgs', null);
INSERT INTO `hr_history` VALUES ('78', '50', '2', '2013-01-03', '2013-01-03', '000', null);
INSERT INTO `hr_history` VALUES ('79', '51', '1', '2013-01-03', '2013-01-03', '00', null);
INSERT INTO `hr_history` VALUES ('80', '52', '1', '2013-01-03', '2013-01-03', '00', null);
INSERT INTO `hr_history` VALUES ('81', '53', '2', '2013-01-03', '2013-01-03', '00', null);
INSERT INTO `hr_history` VALUES ('82', '54', '2', '2013-01-03', '2013-01-03', '00', null);
INSERT INTO `hr_history` VALUES ('83', '55', '2', '2013-01-03', '2013-01-03', '00', null);
INSERT INTO `hr_history` VALUES ('84', '56', '2', '2013-01-03', '2013-01-03', '000', null);
INSERT INTO `hr_history` VALUES ('85', '57', '1', '2013-01-03', '2013-01-03', '00', null);
INSERT INTO `hr_history` VALUES ('86', '58', '2', '2013-01-03', '2013-01-03', '00', null);
INSERT INTO `hr_history` VALUES ('87', '59', '2', '2013-01-03', '2013-01-03', '00', null);

-- ----------------------------
-- Table structure for `hr_job`
-- ----------------------------
DROP TABLE IF EXISTS `hr_job`;
CREATE TABLE `hr_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hr_job
-- ----------------------------
INSERT INTO `hr_job` VALUES ('1', ' Nhân Viên');
INSERT INTO `hr_job` VALUES ('2', 'Chủ Doanh Nghiệp');
INSERT INTO `hr_job` VALUES ('3', 'Trưởng phòng');
INSERT INTO `hr_job` VALUES ('4', 'Phó Phòng');
INSERT INTO `hr_job` VALUES ('5', 'Kế toán trưởng');
INSERT INTO `hr_job` VALUES ('6', 'Cửa hàng phó');
INSERT INTO `hr_job` VALUES ('7', 'Quản lý');

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
  `date` date DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL COMMENT '1:mua co phan,2:bán co phan, 3:trả lãi',
  `emp_id` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `amt` decimal(19,0) DEFAULT '0',
  `type1` tinyint(4) DEFAULT NULL,
  `tran_id` int(11) DEFAULT NULL,
  `periodDetail_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `batch_id` (`batch_id`),
  KEY `emp_id` (`emp_id`),
  KEY `tran_id` (`tran_id`),
  KEY `periodDetail_id` (`periodDetail_id`),
  CONSTRAINT `hr_payment_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `hr_batch` (`id`),
  CONSTRAINT `hr_payment_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_payment_ibfk_3` FOREIGN KEY (`tran_id`) REFERENCES `hr_transaction` (`id`),
  CONSTRAINT `hr_payment_ibfk_4` FOREIGN KEY (`periodDetail_id`) REFERENCES `hr_payperioddetail` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_payment
-- ----------------------------
INSERT INTO `hr_payment` VALUES ('98', '2013-01-03', '0', '1', '20', 'Thanh toán', '50000000', '0', '143', null);
INSERT INTO `hr_payment` VALUES ('99', '2013-01-03', '0', '4', '20', 'Thanh toán', '90000000', '0', '145', null);
INSERT INTO `hr_payment` VALUES ('100', '2013-01-03', '0', '5', '20', 'Thanh toán', '100000000', '0', '146', null);
INSERT INTO `hr_payment` VALUES ('101', '2013-01-03', '0', '6', '20', 'Thanh toán', '25000000', '0', '147', null);
INSERT INTO `hr_payment` VALUES ('102', '2013-01-03', '0', '8', '20', 'Thanh toán', '20000000', '0', '148', null);
INSERT INTO `hr_payment` VALUES ('103', '2013-01-03', '0', '1', null, 'Trả nợ', '20000000', '3', null, null);
INSERT INTO `hr_payment` VALUES ('104', '2013-01-03', '0', '3', null, 'Trả nợ', '10000000', '3', null, null);
INSERT INTO `hr_payment` VALUES ('105', '2013-01-03', '0', '5', null, 'Trả nợ', '5000000', '3', null, null);
INSERT INTO `hr_payment` VALUES ('106', '2013-01-03', '0', '6', null, 'Trả nợ', '1500000', '3', null, null);
INSERT INTO `hr_payment` VALUES ('107', '2013-01-04', '0', '1', '21', 'Thanh toán', '1500000', '1', '150', null);
INSERT INTO `hr_payment` VALUES ('108', '2013-01-04', '0', '3', '21', 'Thanh toán', '1000000', '1', '151', null);
INSERT INTO `hr_payment` VALUES ('109', '2013-01-04', '0', '4', '21', 'Thanh toán', '3375000', '1', '152', null);
INSERT INTO `hr_payment` VALUES ('110', '2013-01-04', '0', '5', '21', 'Thanh toán', '2500000', '1', '153', null);
INSERT INTO `hr_payment` VALUES ('111', '2013-01-04', '0', '6', '21', 'Thanh toán', '500000', '1', '154', null);
INSERT INTO `hr_payment` VALUES ('112', '2013-01-04', '0', '8', '21', 'Thanh toán', '650000', '1', '155', null);
INSERT INTO `hr_payment` VALUES ('113', '2013-01-04', '0', '9', '21', 'Thanh toán', '2000000', '1', '156', null);

-- ----------------------------
-- Table structure for `hr_payperiod`
-- ----------------------------
DROP TABLE IF EXISTS `hr_payperiod`;
CREATE TABLE `hr_payperiod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `rateloan` decimal(19,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amt` decimal(19,0) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_payperiod
-- ----------------------------
INSERT INTO `hr_payperiod` VALUES ('2', 'kỳ 01/2013', '1.55', '2013-01-03', null, '0', null);

-- ----------------------------
-- Table structure for `hr_payperioddetail`
-- ----------------------------
DROP TABLE IF EXISTS `hr_payperioddetail`;
CREATE TABLE `hr_payperioddetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `amt` decimal(19,0) DEFAULT NULL,
  `period` decimal(19,0) DEFAULT NULL,
  `payPeriod_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payPeriod_id` (`payPeriod_id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hr_payperioddetail_ibfk_1` FOREIGN KEY (`payPeriod_id`) REFERENCES `hr_payperiod` (`id`),
  CONSTRAINT `hr_payperioddetail_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_payperioddetail
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_payrollrule`
-- ----------------------------
DROP TABLE IF EXISTS `hr_payrollrule`;
CREATE TABLE `hr_payrollrule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `op` varchar(255) DEFAULT NULL,
  `val` decimal(19,2) DEFAULT NULL,
  `rate` decimal(19,2) DEFAULT NULL,
  `type` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_payrollrule
-- ----------------------------
INSERT INTO `hr_payrollrule` VALUES ('1', 'Giờ làm việc thực tế < 25% giờ theo lịch không chấm công', '<', '0.00', '25.00', '1');
INSERT INTO `hr_payrollrule` VALUES ('9', ' Giờ làm việc thực tế >= 25% giờ theo lịch chấm công 0,3 ngày', '>=', '0.30', '25.00', '1');
INSERT INTO `hr_payrollrule` VALUES ('11', 'Giờ làm việc thực tế >= 50% giờ theo lịch chấm công 0,5 ngày', '>=', '0.50', '50.00', '1');
INSERT INTO `hr_payrollrule` VALUES ('12', 'Giờ làm việc thực tế >=65% giờ theo lịch chấm công 0,6 ngày', '>=', '0.60', '65.00', '1');
INSERT INTO `hr_payrollrule` VALUES ('15', 'Giờ làm việc thực tế >=75% giờ theo lịch chấm công 0,7 ngày', '>=', '0.70', '75.00', '1');
INSERT INTO `hr_payrollrule` VALUES ('16', 'Giờ làm việc thực tế >=85% giờ theo lịch chấm công 0,8 ngày', '>=', '0.80', '85.00', '1');
INSERT INTO `hr_payrollrule` VALUES ('17', 'Giờ làm việc thực tế >=96,5% giờ theo lịch chấm công 1 ngày', '>=', '1.00', '96.50', '1');
INSERT INTO `hr_payrollrule` VALUES ('18', 'Ngày nghỉ có đi làm >=0,8: 1 ngày công', '>=', '0.80', '1.00', '6');
INSERT INTO `hr_payrollrule` VALUES ('19', 'Thời gian đến sớm >= 0 phút thưởng 3%', '>=', '0.00', '3.00', '2');
INSERT INTO `hr_payrollrule` VALUES ('20', 'Thời gian đến sớm >= 5 phút thưởng 4%', '>=', '5.00', '4.00', '2');
INSERT INTO `hr_payrollrule` VALUES ('21', 'Thời gian đến trể >= 0 phút thưởng 3%', '>=', '0.00', '3.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('22', 'Thời gian đến trể >=6 phút thưởng 2,5%', '>=', '6.00', '2.50', '3');
INSERT INTO `hr_payrollrule` VALUES ('23', 'Thời gian đến trể >=11 phút thưởng 2%', '>=', '11.00', '2.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('24', 'Thời gian đến trể >=16 phút thưởng 1.5%', '>=', '16.00', '1.50', '3');
INSERT INTO `hr_payrollrule` VALUES ('25', 'Thời gian đến trể >=21 phút thưởng 1%', '>=', '21.00', '1.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('26', 'Thời gian đến trể >=26 phút thưởng 0.5%', '>=', '26.00', '0.50', '3');
INSERT INTO `hr_payrollrule` VALUES ('27', 'Thời gian đến trể >=31 phút thưởng 0%', '>=', '31.00', '0.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('28', 'Thời gian đến trể >=40 phút thưởng -1%', '>=', '40.00', '-1.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('29', 'Thời gian đến trể >=50 phút thưởng -1.5%', '>=', '50.00', '-1.50', '3');
INSERT INTO `hr_payrollrule` VALUES ('30', 'Thời gian đến trể >=60 phút thưởng -2%', '>=', '60.00', '-2.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('31', 'Thời gian đến trể >=90 phút thưởng -2,5%', '>=', '90.00', '-25.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('32', 'Thời gian đến trể >=120 phút thưởng -3%', '>=', '120.00', '-3.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('33', 'Thời gian đến trể >=150 phút thưởng -3,5%', '>=', '150.00', '-3.50', '3');
INSERT INTO `hr_payrollrule` VALUES ('34', 'Thời gian đến trể >=180 phút thưởng -4%', '>=', '180.00', '-4.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('35', 'Thời gian đến trể >=210 phút thưởng -4.5%', '>=', '210.00', '-4.50', '3');
INSERT INTO `hr_payrollrule` VALUES ('36', 'Thời gian đến trể >=360 phút thưởng -5%', '>=', '360.00', '-5.00', '3');
INSERT INTO `hr_payrollrule` VALUES ('37', 'Thời gian về sớm >=121 phút phạt -4%', '>=', '121.00', '-4.00', '4');
INSERT INTO `hr_payrollrule` VALUES ('38', 'Thời gian về sớm >=120 phút phạt -3% ', '>=', '120.00', '-3.00', '4');
INSERT INTO `hr_payrollrule` VALUES ('39', 'Thời gian về sớm >=90 phút phạt -2.5%', '>=', '90.00', '-25.00', '4');
INSERT INTO `hr_payrollrule` VALUES ('40', 'Thời gian về sớm >=60 phút phạt -2%', '>=', '60.00', '-2.00', '4');
INSERT INTO `hr_payrollrule` VALUES ('41', 'Thời gian về sớm >=50 phút phạt -1,5%', '>=', '50.00', '-1.50', '4');
INSERT INTO `hr_payrollrule` VALUES ('42', 'Thời gian về sớm >=40 phút phạt -1%', '>=', '40.00', '-1.00', '4');
INSERT INTO `hr_payrollrule` VALUES ('43', 'Thời gian về sớm >=30 phút phạt 0,5%', '>=', '30.00', '0.50', '4');
INSERT INTO `hr_payrollrule` VALUES ('44', 'Thời gian về sớm >=25 phút phạt 1%', '>=', '25.00', '1.00', '4');
INSERT INTO `hr_payrollrule` VALUES ('45', 'Thời gian về sớm >=20 phút phạt 1,5%', '>=', '20.00', '1.50', '4');
INSERT INTO `hr_payrollrule` VALUES ('46', 'Thời gian về sớm >=10 phút phạt 2%', '>=', '10.00', '2.00', '4');
INSERT INTO `hr_payrollrule` VALUES ('47', 'Thời gian về sớm >=5 phút phạt 2.5%', '>=', '5.00', '2.50', '4');
INSERT INTO `hr_payrollrule` VALUES ('48', 'Thời gian về sớm >=0 phút phạt 3%', '>=', '0.00', '3.00', '5');
INSERT INTO `hr_payrollrule` VALUES ('49', 'Thời gian về trể >=0 phút thưởng 3%	 ', '>=', '0.00', '3.00', '5');
INSERT INTO `hr_payrollrule` VALUES ('50', 'Thời gian về trể >=30 phút thưởng 3,2%	 ', '>=', '30.00', '3.20', '5');
INSERT INTO `hr_payrollrule` VALUES ('51', 'Thời gian về trể >=60 phút thưởng 3,5%	 ', '>=', '60.00', '3.50', '5');
INSERT INTO `hr_payrollrule` VALUES ('52', 'Thời gian về trể >=120 phút thưởng 4%	 ', '>=', '120.00', '4.00', '5');
INSERT INTO `hr_payrollrule` VALUES ('53', 'Thời gian về trể >=180 phút thưởng 5%	 ', '>=', '180.00', '5.00', '5');
INSERT INTO `hr_payrollrule` VALUES ('54', 'Thời gian về trể >=240 phút thưởng 6%	 ', '>=', '240.00', '6.00', '5');
INSERT INTO `hr_payrollrule` VALUES ('55', 'Thời gian về trể >=300 phút thưởng 7%	 ', '>=', '300.00', '7.00', '5');

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
  `rateLoan` float(19,0) DEFAULT NULL,
  `amtdebit` decimal(19,0) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_profit
-- ----------------------------
INSERT INTO `hr_profit` VALUES ('9', '2013-01-03', '150000000', null, null, 'Chia lãi tháng 01/2013', '0');
INSERT INTO `hr_profit` VALUES ('10', '2013-01-03', '100000000', null, null, 'Nhận lãi tháng 01/2013', '1');

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
  KEY `profit_id` (`profit_id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hr_profit_detail_ibfk_1` FOREIGN KEY (`profit_id`) REFERENCES `hr_profit` (`id`),
  CONSTRAINT `hr_profit_detail_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_profit_detail
-- ----------------------------
INSERT INTO `hr_profit_detail` VALUES ('37', '9', '1', '3750000', '0', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('38', '9', '3', '1875000', '0', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('39', '9', '4', '3375000', '0', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('40', '9', '5', '5625000', '0', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('41', '9', '6', '1125000', '0', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('42', '9', '8', '750000', '0', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('43', '9', '9', '2250000', '0', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('44', '10', '1', '2500000', '1', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('45', '10', '3', '1250000', '1', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('46', '10', '4', '2250000', '1', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('47', '10', '5', '3750000', '1', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('48', '10', '6', '750000', '1', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('49', '10', '8', '500000', '1', '2013-01-03');
INSERT INTO `hr_profit_detail` VALUES ('50', '10', '9', '1500000', '1', '2013-01-03');

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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

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
INSERT INTO `hr_relation` VALUES ('33', '42', '1', 'afaf', '2012-12-13', '2012-12-11', null, null, null);
INSERT INTO `hr_relation` VALUES ('34', '43', '1', 'Tran Cao', '2012-12-11', '2012-12-17', null, null, null);
INSERT INTO `hr_relation` VALUES ('35', '5', '3', 'Trương Tòng', '2012-09-06', '2012-09-06', null, null, null);
INSERT INTO `hr_relation` VALUES ('36', '1', '5', 'Thuy Hoa', '2012-09-01', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('37', '46', '1', '', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('38', '47', '1', 'Tran Cao', '2012-09-07', '2012-09-09', null, null, null);
INSERT INTO `hr_relation` VALUES ('39', '35', '3', 'kghkghk', '2012-12-12', '2012-12-19', null, null, null);
INSERT INTO `hr_relation` VALUES ('40', '39', '1', 'asfaf', '2012-12-21', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('41', '44', '4', 'awda', '2012-12-12', '2012-12-18', null, null, null);
INSERT INTO `hr_relation` VALUES ('42', '48', '3', 'safasf', '2012-12-13', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('43', '49', '1', 'safgasgf', '2012-12-11', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('44', '50', '1', '0000', '2013-01-03', '2013-01-03', null, null, null);
INSERT INTO `hr_relation` VALUES ('45', '51', '1', '0000', '2013-01-03', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('46', '52', '1', '0000', '2013-01-03', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('47', '53', '1', '0000', '2013-01-03', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('48', '54', '1', '0000', '2013-01-03', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('49', '55', '1', '000000', '2013-01-03', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('50', '56', '1', '0000', '2013-01-03', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('51', '57', '1', '0000', '2013-01-03', '2012-12-10', null, null, null);
INSERT INTO `hr_relation` VALUES ('52', '58', '1', 'Nguyễn Văn Định', null, '2013-01-31', null, null, null);
INSERT INTO `hr_relation` VALUES ('53', '58', '5', 'Nguyễn Thị Lan', '1970-01-01', '2013-01-29', null, null, null);
INSERT INTO `hr_relation` VALUES ('54', '58', '4', 'Trần Mỹ Hạnh', '1970-01-01', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('55', '58', '3', 'Trần Minh Tâm', '1970-01-01', '1986-10-25', null, null, null);
INSERT INTO `hr_relation` VALUES ('56', '59', '1', 'Trần Minh Tùng', null, null, null, null, null);
INSERT INTO `hr_relation` VALUES ('57', '59', '5', 'Trần Thị Nhã', '1970-01-01', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('58', '59', '4', 'Trần Mỹ Hạnh', '1970-01-01', null, null, null, null);
INSERT INTO `hr_relation` VALUES ('59', '59', '3', 'Nguyễn Thị Thanh hương', '1970-01-01', '1986-10-25', null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_share
-- ----------------------------
INSERT INTO `hr_share` VALUES ('1', '2000', '4150000000', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift
-- ----------------------------
INSERT INTO `hr_shift` VALUES ('65', 'CaQ1', 'Ca 1', '', '07:45:00', '17:00:00', '', null, '40', '#358575');
INSERT INTO `hr_shift` VALUES ('66', 'CaQ2', 'Ca 2', '', '08:00:00', '21:00:00', '', null, '40', '#918c03');
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

-- ----------------------------
-- Table structure for `hr_shift_change`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_change`;
CREATE TABLE `hr_shift_change` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` varchar(255) DEFAULT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `emp_from` int(11) DEFAULT NULL,
  `emp_to` int(11) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `form1_id` (`from_id`),
  KEY `to1_id` (`to_id`),
  KEY `emp_from` (`emp_from`),
  KEY `emp_to` (`emp_to`),
  CONSTRAINT `hr_shift_change_ibfk_5` FOREIGN KEY (`emp_from`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_shift_change_ibfk_6` FOREIGN KEY (`emp_to`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_change
-- ----------------------------
INSERT INTO `hr_shift_change` VALUES ('49', 'df sd fsd fsd ', '3032', '3031', '40', '1', '3', '2012-09-01', '2012-09-01');

-- ----------------------------
-- Table structure for `hr_shift_detail`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_detail`;
CREATE TABLE `hr_shift_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shift_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `timeIn` time DEFAULT NULL,
  `timeOut` time DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq` (`date`,`emp_id`,`shift_id`) USING BTREE,
  KEY `shift_id` (`shift_id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hr_shift_detail_ibfk_1` FOREIGN KEY (`shift_id`) REFERENCES `hr_shift` (`id`),
  CONSTRAINT `hr_shift_detail_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3242 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_detail
-- ----------------------------
INSERT INTO `hr_shift_detail` VALUES ('2742', '65', '2012-09-02', '3', '07:35:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2744', '65', '2012-09-02', '9', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2745', '68', '2012-09-02', '6', null, '22:30:00', '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2746', '68', '2012-09-02', '8', null, '22:15:00', '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2748', '65', '2012-09-03', '8', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2749', '65', '2012-09-03', '9', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2750', '65', '2012-09-04', '9', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2757', '67', '2012-09-03', '1', '10:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2759', '67', '2012-09-03', '3', null, '22:30:00', '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2760', '68', '2012-09-03', '5', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2761', '66', '2012-09-03', '6', '08:05:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2762', '71', '2012-09-03', '10', '08:15:00', '17:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2763', '71', '2012-09-03', '11', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2764', '71', '2012-09-04', '10', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2765', '71', '2012-09-04', '11', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2766', '71', '2012-09-05', '10', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2767', '71', '2012-09-05', '11', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2768', '71', '2012-09-06', '10', '08:15:00', '17:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2769', '71', '2012-09-06', '11', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2770', '71', '2012-09-07', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2771', '71', '2012-09-07', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2772', '71', '2012-09-08', '10', '08:05:00', '17:05:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2773', '71', '2012-09-08', '11', '08:05:00', '17:05:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2776', '71', '2012-09-10', '10', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2777', '71', '2012-09-10', '11', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2778', '71', '2012-09-11', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2779', '71', '2012-09-11', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2780', '71', '2012-09-12', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2781', '71', '2012-09-12', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2782', '71', '2012-09-13', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2783', '71', '2012-09-13', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2784', '71', '2012-09-14', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2785', '71', '2012-09-14', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2786', '71', '2012-09-15', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2787', '71', '2012-09-15', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2788', '71', '2012-09-17', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2789', '71', '2012-09-17', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2790', '71', '2012-09-24', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2791', '71', '2012-09-24', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2792', '71', '2012-09-18', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2793', '71', '2012-09-18', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2794', '71', '2012-09-19', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2795', '71', '2012-09-19', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2796', '71', '2012-09-20', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2797', '71', '2012-09-20', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2798', '71', '2012-09-25', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2799', '71', '2012-09-25', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2800', '71', '2012-09-26', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2801', '71', '2012-09-26', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2802', '71', '2012-09-27', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2803', '71', '2012-09-27', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2804', '71', '2012-09-28', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2805', '71', '2012-09-28', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2806', '71', '2012-09-29', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2807', '71', '2012-09-29', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2812', '71', '2012-09-21', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2813', '71', '2012-09-21', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2814', '71', '2012-09-22', '10', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2815', '71', '2012-09-22', '11', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2834', '67', '2012-09-04', '1', '10:00:00', '22:34:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2835', '68', '2012-09-06', '1', '13:15:00', '22:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2836', '65', '2012-09-07', '1', '07:30:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2837', '66', '2012-09-08', '1', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2838', '65', '2012-09-09', '1', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2839', '65', '2012-09-10', '1', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2840', '67', '2012-09-11', '1', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2841', '68', '2012-09-13', '1', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2842', '65', '2012-09-14', '1', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2843', '66', '2012-09-15', '1', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2844', '65', '2012-09-17', '1', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2845', '67', '2012-09-18', '1', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2846', '68', '2012-09-20', '1', '13:05:00', '22:20:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2847', '65', '2012-09-21', '1', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2848', '66', '2012-09-22', '1', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2849', '68', '2012-09-30', '1', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2850', '65', '2012-09-16', '1', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2851', '65', '2012-09-24', '1', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2852', '67', '2012-09-25', '1', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2853', '68', '2012-09-27', '1', '13:05:00', '22:20:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2854', '65', '2012-09-28', '1', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2855', '66', '2012-09-29', '1', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2866', '66', '2012-09-05', '3', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2867', '65', '2012-09-06', '3', '07:30:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2868', '68', '2012-09-07', '3', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2869', '65', '2012-09-08', '3', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2870', '67', '2012-09-10', '3', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2871', '66', '2012-09-12', '3', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2872', '65', '2012-09-13', '3', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2873', '68', '2012-09-14', '3', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2874', '65', '2012-09-15', '3', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2875', '65', '2012-09-16', '3', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2876', '67', '2012-09-17', '3', '10:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2877', '66', '2012-09-19', '3', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2878', '65', '2012-09-20', '3', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2879', '68', '2012-09-21', '3', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2880', '65', '2012-09-22', '3', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2881', '67', '2012-09-24', '3', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2882', '66', '2012-09-26', '3', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2883', '65', '2012-09-27', '3', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2884', '68', '2012-09-28', '3', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2885', '65', '2012-09-29', '3', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2898', '68', '2012-09-04', '4', '13:15:00', '22:34:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2899', '65', '2012-09-05', '4', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2900', '65', '2012-09-02', '4', '07:35:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2901', '66', '2012-09-06', '4', '08:15:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2902', '65', '2012-09-07', '4', '07:30:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2903', '67', '2012-09-08', '4', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2904', '68', '2012-09-09', '4', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2905', '68', '2012-09-11', '4', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2906', '65', '2012-09-12', '4', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2907', '66', '2012-09-13', '4', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2908', '65', '2012-09-14', '4', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2910', '67', '2012-09-15', '4', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2911', '68', '2012-09-18', '4', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2912', '65', '2012-09-19', '4', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2913', '66', '2012-09-20', '4', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2914', '65', '2012-09-21', '4', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2915', '67', '2012-09-22', '4', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2916', '65', '2012-09-23', '4', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2917', '68', '2012-09-25', '4', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2918', '65', '2012-09-26', '4', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2919', '66', '2012-09-27', '4', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2920', '65', '2012-09-28', '4', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2921', '67', '2012-09-29', '4', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2922', '68', '2012-09-30', '4', '13:05:00', '22:20:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2933', '69', '2012-09-04', '5', '13:15:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2934', '68', '2012-09-05', '5', null, '22:30:00', '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2935', '70', '2012-09-07', '5', '13:00:00', '21:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2936', '69', '2012-09-08', '5', '13:05:00', '17:05:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2937', '68', '2012-09-09', '5', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2938', '68', '2012-09-10', '5', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2939', '69', '2012-09-11', '5', '13:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2940', '68', '2012-09-12', '5', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2941', '70', '2012-09-14', '5', '13:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2942', '69', '2012-09-15', '5', '13:05:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2943', '68', '2012-09-16', '5', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2944', '68', '2012-09-17', '5', '13:05:00', '22:20:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2945', '69', '2012-09-18', '5', '13:05:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2946', '68', '2012-09-19', '5', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2947', '70', '2012-09-21', '5', '13:05:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2948', '69', '2012-09-22', '5', '13:05:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2949', '68', '2012-09-24', '5', '13:05:00', '22:20:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2950', '69', '2012-09-25', '5', '13:05:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2951', '68', '2012-09-26', '5', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2952', '70', '2012-09-28', '5', '13:05:00', '21:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2953', '69', '2012-09-29', '5', '13:05:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2954', '65', '2012-09-30', '5', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2965', '65', '2012-09-04', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2966', '68', '2012-09-05', '6', '13:00:00', '22:45:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2967', '65', '2012-09-06', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2968', '67', '2012-09-07', '6', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2969', '65', '2012-09-09', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2970', '66', '2012-09-10', '6', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2971', '65', '2012-09-11', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2972', '68', '2012-09-12', '6', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2973', '65', '2012-09-13', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2974', '67', '2012-09-14', '6', '10:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2975', '66', '2012-09-17', '6', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2976', '65', '2012-09-18', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2977', '68', '2012-09-19', '6', '13:05:00', '22:20:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2978', '65', '2012-09-20', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2979', '67', '2012-09-21', '6', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2980', '68', '2012-09-23', '6', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2981', '66', '2012-09-24', '6', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2982', '65', '2012-09-25', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2983', '68', '2012-09-26', '6', '13:05:00', '22:20:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2984', '65', '2012-09-27', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2985', '67', '2012-09-28', '6', '10:00:00', '22:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('2986', '65', '2012-09-30', '6', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2997', '66', '2012-09-04', '8', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2998', '65', '2012-09-05', '8', '07:55:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('2999', '67', '2012-09-06', '8', '10:15:00', '22:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3000', '68', '2012-09-08', '8', '13:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3001', '65', '2012-09-10', '8', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3002', '66', '2012-09-11', '8', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3003', '65', '2012-09-12', '8', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3004', '67', '2012-09-13', '8', '10:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3005', '68', '2012-09-15', '8', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3006', '68', '2012-09-16', '8', '13:05:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3007', '65', '2012-09-17', '8', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3008', '66', '2012-09-18', '8', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3009', '65', '2012-09-19', '8', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3010', '67', '2012-09-20', '8', '10:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3011', '68', '2012-09-22', '8', '13:00:00', '22:40:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3012', '65', '2012-09-23', '8', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3013', '65', '2012-09-24', '8', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3014', '66', '2012-09-25', '8', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3015', '65', '2012-09-26', '8', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3016', '67', '2012-09-27', '8', '10:00:00', '22:30:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3017', '68', '2012-09-29', '8', '13:05:00', '22:20:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3028', '68', '2012-09-01', '8', '13:15:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3029', '69', '2012-09-01', '5', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3030', '67', '2012-09-01', '4', '10:15:00', '22:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3031', '65', '2012-09-01', '1', '07:30:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3032', '66', '2012-09-01', '3', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3033', '65', '2012-09-05', '9', null, '17:15:00', '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3034', '65', '2012-09-06', '9', null, '17:00:00', '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3035', '65', '2012-09-07', '9', '07:30:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3036', '65', '2012-09-08', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3037', '65', '2012-09-15', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3038', '65', '2012-09-22', '9', '07:45:00', '17:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3039', '65', '2012-09-29', '9', '07:45:00', '17:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3041', '65', '2012-09-14', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3042', '65', '2012-09-21', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3043', '65', '2012-09-28', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3045', '65', '2012-09-13', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3046', '65', '2012-09-20', '9', '07:45:00', '17:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3047', '65', '2012-09-27', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3049', '65', '2012-09-12', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3050', '65', '2012-09-19', '9', '07:45:00', '17:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3051', '65', '2012-09-26', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3053', '65', '2012-09-11', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3054', '65', '2012-09-18', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3055', '65', '2012-09-25', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3057', '65', '2012-09-10', '9', '07:45:00', '17:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3058', '65', '2012-09-09', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3059', '65', '2012-09-16', '9', '07:45:00', '17:15:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3060', '65', '2012-09-01', '9', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3061', '65', '2012-09-17', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3062', '65', '2012-09-24', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3063', '65', '2012-09-23', '9', '07:45:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3064', '65', '2012-09-30', '9', '07:45:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3072', '71', '2012-09-01', '10', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3073', '71', '2012-09-01', '11', null, '17:05:00', '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3074', '71', '2012-09-01', '47', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3075', '71', '2012-09-03', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3076', '71', '2012-09-04', '47', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3077', '71', '2012-09-05', '47', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3078', '71', '2012-09-06', '47', '08:00:00', null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3079', '71', '2012-09-07', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3080', '71', '2012-09-08', '47', '08:05:00', '17:05:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3081', '71', '2012-09-15', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3082', '71', '2012-09-22', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3083', '71', '2012-09-29', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3084', '71', '2012-09-28', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3085', '71', '2012-09-14', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3086', '71', '2012-09-13', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3087', '71', '2012-09-12', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3088', '71', '2012-09-11', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3089', '71', '2012-09-10', '47', null, null, '1', '');
INSERT INTO `hr_shift_detail` VALUES ('3090', '71', '2012-09-21', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3091', '71', '2012-09-20', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3092', '71', '2012-09-19', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3093', '71', '2012-09-18', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3094', '71', '2012-09-17', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3095', '71', '2012-09-24', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3098', '71', '2012-09-26', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3099', '71', '2012-09-27', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3100', '71', '2012-09-25', '47', '08:00:00', '17:00:00', '0', '');
INSERT INTO `hr_shift_detail` VALUES ('3240', '72', '2012-10-01', '47', '08:00:00', '17:00:00', null, null);
INSERT INTO `hr_shift_detail` VALUES ('3241', '65', '2013-01-31', '1', null, null, null, null);

-- ----------------------------
-- Table structure for `hr_shift_detail_history`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_detail_history`;
CREATE TABLE `hr_shift_detail_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timeIn` time DEFAULT NULL,
  `timeOut` time DEFAULT NULL,
  `shift_detail_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shift_detail_id` (`shift_detail_id`),
  CONSTRAINT `hr_shift_detail_history_ibfk_1` FOREIGN KEY (`shift_detail_id`) REFERENCES `hr_shift_detail` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_detail_history
-- ----------------------------
INSERT INTO `hr_shift_detail_history` VALUES ('1', '07:35:00', '00:00:00', '2742');

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_shift_plan
-- ----------------------------
INSERT INTO `hr_shift_plan` VALUES ('40', '3', '2012-09-01', '2012-09-30', '0', '', '09-2012Q', '0');
INSERT INTO `hr_shift_plan` VALUES ('41', '3', '2012-12-01', '2012-11-30', '1', '', '12-2012Q', '0');
INSERT INTO `hr_shift_plan` VALUES ('43', '4', '2012-11-01', '2012-11-30', '1', '', '11-2012QL', '0');
INSERT INTO `hr_shift_plan` VALUES ('45', '3', '2012-12-01', '2012-12-31', '0', 'Lịch trực mới', '12-2012QL', '0');

-- ----------------------------
-- Table structure for `hr_shift_replace`
-- ----------------------------
DROP TABLE IF EXISTS `hr_shift_replace`;
CREATE TABLE `hr_shift_replace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `old_emp_id` int(11) NOT NULL,
  `new_emp_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `old_emp_id` (`old_emp_id`),
  KEY `new_emp_id` (`new_emp_id`),
  KEY `old_detail_id` (`detail_id`),
  CONSTRAINT `hr_shift_replace_ibfk_1` FOREIGN KEY (`old_emp_id`) REFERENCES `hr_employee` (`id`),
  CONSTRAINT `hr_shift_replace_ibfk_2` FOREIGN KEY (`new_emp_id`) REFERENCES `hr_employee` (`id`)
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
-- Table structure for `hr_status_timekeeping`
-- ----------------------------
DROP TABLE IF EXISTS `hr_status_timekeeping`;
CREATE TABLE `hr_status_timekeeping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_status_timekeeping
-- ----------------------------

-- ----------------------------
-- Table structure for `hr_status_working`
-- ----------------------------
DROP TABLE IF EXISTS `hr_status_working`;
CREATE TABLE `hr_status_working` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_status_working
-- ----------------------------

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
-- Table structure for `hr_time_recorder`
-- ----------------------------
DROP TABLE IF EXISTS `hr_time_recorder`;
CREATE TABLE `hr_time_recorder` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `emp_number` int(11) NOT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2649 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_time_recorder
-- ----------------------------
INSERT INTO `hr_time_recorder` VALUES ('1821', '2012-09-01', '30', '07:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1822', '2012-09-02', '30', '08:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1823', '2012-09-01', '30', '07:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1824', '2012-09-01', '31', '07:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1825', '2012-09-01', '31', '17:10:00');
INSERT INTO `hr_time_recorder` VALUES ('1826', '2012-09-01', '6', '07:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1827', '2012-09-01', '6', '21:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1828', '2012-09-01', '7', '10:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1829', '2012-09-01', '7', '22:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1830', '2012-09-01', '32', '13:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1831', '2012-09-01', '32', '22:55:00');
INSERT INTO `hr_time_recorder` VALUES ('1832', '2012-09-01', '8', '12:55:00');
INSERT INTO `hr_time_recorder` VALUES ('1833', '2012-09-01', '8', '16:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1834', '2012-09-01', '55', '07:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1835', '2012-09-01', '55', '16:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1836', '2012-09-01', '56', '07:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1837', '2012-09-01', '56', '17:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1838', '2012-09-01', '41', '06:55:00');
INSERT INTO `hr_time_recorder` VALUES ('1839', '2012-09-01', '41', '17:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1840', '2012-09-02', '6', '07:35:00');
INSERT INTO `hr_time_recorder` VALUES ('1841', '2012-09-02', '6', '16:46:00');
INSERT INTO `hr_time_recorder` VALUES ('1842', '2012-09-02', '7', '07:35:00');
INSERT INTO `hr_time_recorder` VALUES ('1843', '2012-09-02', '7', '16:12:00');
INSERT INTO `hr_time_recorder` VALUES ('1844', '2012-09-02', '31', '06:55:00');
INSERT INTO `hr_time_recorder` VALUES ('1845', '2012-09-02', '31', '17:25:00');
INSERT INTO `hr_time_recorder` VALUES ('1846', '2012-09-02', '5', '13:25:00');
INSERT INTO `hr_time_recorder` VALUES ('1847', '2012-09-02', '5', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1848', '2012-09-02', '32', '13:40:00');
INSERT INTO `hr_time_recorder` VALUES ('1849', '2012-09-02', '32', '22:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1850', '2012-09-03', '32', '07:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1851', '2012-09-03', '32', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1852', '2012-09-03', '31', '06:35:00');
INSERT INTO `hr_time_recorder` VALUES ('1853', '2012-09-03', '31', '16:35:00');
INSERT INTO `hr_time_recorder` VALUES ('1854', '2012-09-03', '5', '08:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1855', '2012-09-03', '5', '20:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1856', '2012-09-03', '30', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1857', '2012-09-03', '30', '22:10:00');
INSERT INTO `hr_time_recorder` VALUES ('1858', '2012-09-03', '6', '09:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1859', '2012-09-03', '6', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1860', '2012-09-03', '8', '13:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1861', '2012-09-03', '8', '21:50:00');
INSERT INTO `hr_time_recorder` VALUES ('1862', '2012-09-03', '55', '08:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1863', '2012-09-03', '55', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1864', '2012-09-03', '56', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1865', '2012-09-03', '56', '17:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1866', '2012-09-03', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1867', '2012-09-03', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1868', '2012-09-04', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1869', '2012-09-04', '5', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1870', '2012-09-04', '31', '07:25:00');
INSERT INTO `hr_time_recorder` VALUES ('1871', '2012-09-04', '31', '16:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1872', '2012-09-04', '32', '07:25:00');
INSERT INTO `hr_time_recorder` VALUES ('1873', '2012-09-04', '32', '21:25:00');
INSERT INTO `hr_time_recorder` VALUES ('1874', '2012-09-04', '30', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1875', '2012-09-04', '30', '22:34:00');
INSERT INTO `hr_time_recorder` VALUES ('1876', '2012-09-04', '7', '13:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1877', '2012-09-04', '7', '22:34:00');
INSERT INTO `hr_time_recorder` VALUES ('1878', '2012-09-04', '8', '13:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1879', '2012-09-04', '8', '07:25:00');
INSERT INTO `hr_time_recorder` VALUES ('1880', '2012-09-04', '55', '08:25:00');
INSERT INTO `hr_time_recorder` VALUES ('1881', '2012-09-04', '55', '16:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1882', '2012-09-04', '56', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1883', '2012-09-04', '56', '17:35:00');
INSERT INTO `hr_time_recorder` VALUES ('1884', '2012-09-04', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1885', '2012-09-04', '41', '16:35:00');
INSERT INTO `hr_time_recorder` VALUES ('1886', '2012-09-05', '7', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1887', '2012-09-05', '7', '16:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1888', '2012-09-05', '32', '07:55:00');
INSERT INTO `hr_time_recorder` VALUES ('1889', '2012-09-05', '32', '17:55:00');
INSERT INTO `hr_time_recorder` VALUES ('1890', '2012-09-05', '31', '06:50:00');
INSERT INTO `hr_time_recorder` VALUES ('1891', '2012-09-05', '31', '16:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1892', '2012-09-05', '6', '08:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1893', '2012-09-05', '6', '21:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1894', '2012-09-05', '8', '13:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1895', '2012-09-05', '8', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1896', '2012-09-05', '5', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1897', '2012-09-05', '5', '22:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1898', '2012-09-05', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1899', '2012-09-05', '55', '16:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1900', '2012-09-05', '56', '08:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1901', '2012-09-05', '56', '16:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1902', '2012-09-05', '41', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1903', '2012-09-05', '41', '17:39:00');
INSERT INTO `hr_time_recorder` VALUES ('1904', '2012-09-06', '6', '07:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1905', '2012-09-06', '6', '16:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1906', '2012-09-06', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1907', '2012-09-06', '5', '16:55:00');
INSERT INTO `hr_time_recorder` VALUES ('1908', '2012-09-06', '31', '07:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1909', '2012-09-06', '31', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1910', '2012-09-06', '7', '08:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1911', '2012-09-06', '7', '21:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1912', '2012-09-06', '32', '10:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1913', '2012-09-06', '32', '22:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1914', '2012-09-06', '30', '13:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1915', '2012-09-06', '30', '22:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1916', '2012-09-06', '55', '08:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1917', '2012-09-06', '55', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1918', '2012-09-06', '56', '08:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1919', '2012-09-06', '56', '17:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1920', '2012-09-06', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1921', '2012-09-06', '41', '17:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1922', '2012-09-07', '30', '07:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1923', '2012-09-07', '30', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1924', '2012-09-07', '7', '07:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1925', '2012-09-07', '7', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1926', '2012-09-07', '31', '07:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1927', '2012-09-07', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1928', '2012-09-07', '5', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1929', '2012-09-07', '5', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1930', '2012-09-07', '6', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1931', '2012-09-07', '6', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1932', '2012-09-07', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1933', '2012-09-07', '8', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1934', '2012-09-07', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1935', '2012-09-07', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1936', '2012-09-07', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1937', '2012-09-07', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1938', '2012-09-07', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1939', '2012-09-07', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1940', '2012-09-08', '6', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1941', '2012-09-08', '6', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1942', '2012-09-08', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1943', '2012-09-08', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1944', '2012-09-08', '30', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1945', '2012-09-08', '30', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1946', '2012-09-08', '7', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1947', '2012-09-08', '7', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1948', '2012-09-08', '32', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1949', '2012-09-08', '32', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1950', '2012-09-08', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1951', '2012-09-08', '8', '17:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1952', '2012-09-08', '55', '08:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1953', '2012-09-08', '55', '17:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1954', '2012-09-08', '56', '08:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1955', '2012-09-08', '56', '17:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1956', '2012-09-08', '41', '08:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1957', '2012-09-08', '41', '17:05:00');
INSERT INTO `hr_time_recorder` VALUES ('1958', '2012-09-09', '30', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1959', '2012-09-09', '30', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1960', '2012-09-09', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1961', '2012-09-09', '5', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1962', '2012-09-09', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1963', '2012-09-09', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1964', '2012-09-09', '7', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1965', '2012-09-09', '7', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1966', '2012-09-09', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1967', '2012-09-09', '8', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1968', '2012-09-10', '30', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1969', '2012-09-10', '30', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1970', '2012-09-10', '32', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1971', '2012-09-10', '32', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1972', '2012-09-10', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1973', '2012-09-10', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1974', '2012-09-10', '5', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1975', '2012-09-10', '5', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1976', '2012-09-10', '6', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1977', '2012-09-10', '6', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1978', '2012-09-10', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1979', '2012-09-10', '8', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1980', '2012-09-10', '55', '08:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1981', '2012-09-10', '55', '17:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1982', '2012-09-10', '56', '08:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1983', '2012-09-10', '56', '17:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1984', '2012-09-10', '41', '08:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1985', '2012-09-10', '41', '17:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1986', '2012-09-11', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1987', '2012-09-11', '5', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1988', '2012-09-11', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('1989', '2012-09-11', '31', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('1990', '2012-09-11', '32', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1991', '2012-09-11', '32', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1992', '2012-09-11', '30', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1993', '2012-09-11', '30', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1994', '2012-09-11', '7', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1995', '2012-09-11', '7', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('1996', '2012-09-11', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1997', '2012-09-11', '8', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1998', '2012-09-11', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('1999', '2012-09-11', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2000', '2012-09-11', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2001', '2012-09-11', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2002', '2012-09-11', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2003', '2012-09-11', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2323', '2012-09-12', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2324', '2012-09-12', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2325', '2012-09-12', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2326', '2012-09-12', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2327', '2012-09-12', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2328', '2012-09-12', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2329', '2012-09-13', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2330', '2012-09-13', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2331', '2012-09-13', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2332', '2012-09-13', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2333', '2012-09-13', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2334', '2012-09-13', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2335', '2012-09-14', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2336', '2012-09-14', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2337', '2012-09-14', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2338', '2012-09-14', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2339', '2012-09-14', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2340', '2012-09-14', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2341', '2012-09-15', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2342', '2012-09-15', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2343', '2012-09-15', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2344', '2012-09-15', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2345', '2012-09-15', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2346', '2012-09-15', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2347', '2012-09-16', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2348', '2012-09-16', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2349', '2012-09-16', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2350', '2012-09-16', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2351', '2012-09-16', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2352', '2012-09-16', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2353', '2012-09-17', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2354', '2012-09-17', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2355', '2012-09-17', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2356', '2012-09-17', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2357', '2012-09-17', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2358', '2012-09-17', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2359', '2012-09-18', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2360', '2012-09-18', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2361', '2012-09-18', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2362', '2012-09-18', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2363', '2012-09-18', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2364', '2012-09-18', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2365', '2012-09-19', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2366', '2012-09-19', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2367', '2012-09-19', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2368', '2012-09-19', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2369', '2012-09-19', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2370', '2012-09-19', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2371', '2012-09-20', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2372', '2012-09-20', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2373', '2012-09-20', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2374', '2012-09-20', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2375', '2012-09-20', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2376', '2012-09-20', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2377', '2012-09-21', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2378', '2012-09-21', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2379', '2012-09-21', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2380', '2012-09-21', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2381', '2012-09-21', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2382', '2012-09-21', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2383', '2012-09-22', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2384', '2012-09-22', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2385', '2012-09-22', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2386', '2012-09-22', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2387', '2012-09-22', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2388', '2012-09-22', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2389', '2012-09-23', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2390', '2012-09-23', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2391', '2012-09-23', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2392', '2012-09-23', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2393', '2012-09-23', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2394', '2012-09-23', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2395', '2012-09-24', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2396', '2012-09-24', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2397', '2012-09-24', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2398', '2012-09-24', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2399', '2012-09-24', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2400', '2012-09-24', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2401', '2012-09-25', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2402', '2012-09-25', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2403', '2012-09-25', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2404', '2012-09-25', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2405', '2012-09-25', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2406', '2012-09-25', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2407', '2012-09-26', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2408', '2012-09-26', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2409', '2012-09-26', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2410', '2012-09-26', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2411', '2012-09-26', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2412', '2012-09-26', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2413', '2012-09-27', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2414', '2012-09-27', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2415', '2012-09-27', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2416', '2012-09-27', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2417', '2012-09-27', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2418', '2012-09-27', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2419', '2012-09-28', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2420', '2012-09-28', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2421', '2012-09-28', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2422', '2012-09-28', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2423', '2012-09-28', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2424', '2012-09-28', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2425', '2012-09-29', '55', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2426', '2012-09-29', '55', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2427', '2012-09-29', '56', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2428', '2012-09-29', '56', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2429', '2012-09-29', '41', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2430', '2012-09-29', '41', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2431', '2012-09-12', '7', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2432', '2012-09-12', '7', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2433', '2012-09-12', '32', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2434', '2012-09-12', '32', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2435', '2012-09-12', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2436', '2012-09-12', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2437', '2012-09-12', '6', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2438', '2012-09-12', '6', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2439', '2012-09-12', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2440', '2012-09-12', '8', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2441', '2012-09-12', '5', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2442', '2012-09-12', '5', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2443', '2012-09-13', '6', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2444', '2012-09-13', '6', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2445', '2012-09-13', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2446', '2012-09-13', '5', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2447', '2012-09-13', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2448', '2012-09-13', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2449', '2012-09-13', '7', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2450', '2012-09-13', '7', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2451', '2012-09-13', '32', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2452', '2012-09-13', '32', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2453', '2012-09-13', '30', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2454', '2012-09-13', '30', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2455', '2012-09-14', '30', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2456', '2012-09-14', '30', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2457', '2012-09-14', '7', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2458', '2012-09-14', '7', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2459', '2012-09-14', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2460', '2012-09-14', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2461', '2012-09-14', '5', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2462', '2012-09-14', '5', '22:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2463', '2012-09-14', '6', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2464', '2012-09-14', '6', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2465', '2012-09-14', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2466', '2012-09-14', '8', '21:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2467', '2012-09-15', '6', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2468', '2012-09-15', '6', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2469', '2012-09-15', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2470', '2012-09-15', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2471', '2012-09-15', '30', '08:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2472', '2012-09-15', '30', '21:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2473', '2012-09-15', '7', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2474', '2012-09-15', '7', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2475', '2012-09-15', '32', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2476', '2012-09-15', '32', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2477', '2012-09-15', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2478', '2012-09-15', '8', '17:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2479', '2012-09-16', '30', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2480', '2012-09-16', '30', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2481', '2012-09-16', '6', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2482', '2012-09-16', '6', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2483', '2012-09-16', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2484', '2012-09-16', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2485', '2012-09-16', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2486', '2012-09-16', '8', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2487', '2012-09-16', '32', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2488', '2012-09-16', '32', '17:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2489', '2012-09-17', '30', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2490', '2012-09-17', '30', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2491', '2012-09-17', '32', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2492', '2012-09-17', '32', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2493', '2012-09-17', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2494', '2012-09-17', '31', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2495', '2012-09-17', '5', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2496', '2012-09-17', '5', '21:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2497', '2012-09-17', '6', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2498', '2012-09-17', '6', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2499', '2012-09-17', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2500', '2012-09-17', '8', '22:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2501', '2012-09-18', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2502', '2012-09-18', '5', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2503', '2012-09-18', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2504', '2012-09-18', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2505', '2012-09-18', '32', '08:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2506', '2012-09-18', '32', '21:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2507', '2012-09-18', '30', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2508', '2012-09-18', '30', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2509', '2012-09-18', '7', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2510', '2012-09-18', '7', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2511', '2012-09-18', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2512', '2012-09-18', '8', '17:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2513', '2012-09-19', '7', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2514', '2012-09-19', '7', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2515', '2012-09-19', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2516', '2012-09-19', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2517', '2012-09-19', '32', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2518', '2012-09-19', '32', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2519', '2012-09-19', '6', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2520', '2012-09-19', '6', '21:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2521', '2012-09-19', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2522', '2012-09-19', '8', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2523', '2012-09-19', '5', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2524', '2012-09-19', '5', '22:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2525', '2012-09-20', '6', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2526', '2012-09-20', '6', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2527', '2012-09-20', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2528', '2012-09-20', '5', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2529', '2012-09-20', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2530', '2012-09-20', '31', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2531', '2012-09-20', '7', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2532', '2012-09-20', '7', '21:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2533', '2012-09-20', '32', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2534', '2012-09-20', '32', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2535', '2012-09-20', '30', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2536', '2012-09-20', '30', '22:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2537', '2012-09-21', '30', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2538', '2012-09-21', '30', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2539', '2012-09-21', '7', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2540', '2012-09-21', '7', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2541', '2012-09-21', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2542', '2012-09-21', '31', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2543', '2012-09-21', '5', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2544', '2012-09-21', '5', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2545', '2012-09-21', '6', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2546', '2012-09-21', '6', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2547', '2012-09-21', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2548', '2012-09-21', '8', '21:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2549', '2012-09-22', '6', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2550', '2012-09-22', '6', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2551', '2012-09-22', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2552', '2012-09-22', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2553', '2012-09-22', '30', '08:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2554', '2012-09-22', '30', '21:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2555', '2012-09-22', '7', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2556', '2012-09-22', '7', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2557', '2012-09-22', '32', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2558', '2012-09-22', '32', '22:40:00');
INSERT INTO `hr_time_recorder` VALUES ('2559', '2012-09-22', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2560', '2012-09-22', '8', '17:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2561', '2012-09-23', '7', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2562', '2012-09-23', '7', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2563', '2012-09-23', '32', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2564', '2012-09-23', '32', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2565', '2012-09-23', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2566', '2012-09-23', '31', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2567', '2012-09-23', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2568', '2012-09-23', '8', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2569', '2012-09-24', '30', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2570', '2012-09-24', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2571', '2012-09-24', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2572', '2012-09-24', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2573', '2012-09-24', '32', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2574', '2012-09-24', '32', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2575', '2012-09-24', '5', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2576', '2012-09-24', '5', '21:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2577', '2012-09-24', '6', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2578', '2012-09-24', '6', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2579', '2012-09-24', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2580', '2012-09-24', '8', '22:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2581', '2012-09-25', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2582', '2012-09-25', '5', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2583', '2012-09-25', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2584', '2012-09-25', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2585', '2012-09-25', '32', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2586', '2012-09-25', '32', '21:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2587', '2012-09-25', '7', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2588', '2012-09-25', '7', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2589', '2012-09-25', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2590', '2012-09-25', '8', '17:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2591', '2012-09-26', '7', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2592', '2012-09-26', '7', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2593', '2012-09-26', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2594', '2012-09-26', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2595', '2012-09-26', '32', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2596', '2012-09-26', '32', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2597', '2012-09-26', '6', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2598', '2012-09-26', '6', '21:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2599', '2012-09-26', '8', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2600', '2012-09-26', '8', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2601', '2012-09-26', '5', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2602', '2012-09-26', '5', '22:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2603', '2012-09-27', '6', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2604', '2012-09-27', '6', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2605', '2012-09-27', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2606', '2012-09-27', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2607', '2012-09-27', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2608', '2012-09-27', '5', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2609', '2012-09-27', '7', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2610', '2012-09-27', '7', '21:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2611', '2012-09-27', '32', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2612', '2012-09-27', '32', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2613', '2012-09-27', '30', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2614', '2012-09-27', '30', '22:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2615', '2012-09-28', '30', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2616', '2012-09-28', '30', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2617', '2012-09-28', '7', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2618', '2012-09-28', '7', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2619', '2012-09-28', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2620', '2012-09-28', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2621', '2012-09-28', '5', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2622', '2012-09-28', '5', '22:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2623', '2012-09-28', '6', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2624', '2012-09-28', '6', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2625', '2012-09-28', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2626', '2012-09-28', '8', '21:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2627', '2012-09-29', '6', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2628', '2012-09-29', '6', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2629', '2012-09-29', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2630', '2012-09-29', '31', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2631', '2012-09-29', '30', '08:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2632', '2012-09-29', '30', '21:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2633', '2012-09-29', '7', '10:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2634', '2012-09-29', '7', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2635', '2012-09-29', '32', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2636', '2012-09-29', '32', '22:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2637', '2012-09-29', '8', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2638', '2012-09-29', '8', '17:20:00');
INSERT INTO `hr_time_recorder` VALUES ('2639', '2012-09-30', '8', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2640', '2012-09-30', '8', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2641', '2012-09-30', '5', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2642', '2012-09-30', '5', '17:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2643', '2012-09-30', '31', '07:45:00');
INSERT INTO `hr_time_recorder` VALUES ('2644', '2012-09-30', '31', '17:15:00');
INSERT INTO `hr_time_recorder` VALUES ('2645', '2012-09-30', '30', '13:00:00');
INSERT INTO `hr_time_recorder` VALUES ('2646', '2012-09-30', '30', '22:30:00');
INSERT INTO `hr_time_recorder` VALUES ('2647', '2012-09-30', '7', '13:05:00');
INSERT INTO `hr_time_recorder` VALUES ('2648', '2012-09-30', '7', '22:20:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hr_transaction
-- ----------------------------
INSERT INTO `hr_transaction` VALUES ('143', '2013-01-03', '1', '50000', '100000000', '20', 'Mua cổ phần', '0');
INSERT INTO `hr_transaction` VALUES ('144', '2013-01-03', '3', '25000', '50000000', '20', 'Mua cổ phần', '0');
INSERT INTO `hr_transaction` VALUES ('145', '2013-01-03', '4', '45000', '90000000', '20', 'Mua cổ phần', '0');
INSERT INTO `hr_transaction` VALUES ('146', '2013-01-03', '5', '75000', '150000000', '20', 'Mua cổ phần', '0');
INSERT INTO `hr_transaction` VALUES ('147', '2013-01-03', '6', '15000', '30000000', '20', 'Mua cổ phần', '0');
INSERT INTO `hr_transaction` VALUES ('148', '2013-01-03', '8', '10000', '20000000', '20', 'Mua cổ phần', '0');
INSERT INTO `hr_transaction` VALUES ('149', '2013-01-03', '9', '30000', '60000000', '20', 'Mua cổ phần', '0');
INSERT INTO `hr_transaction` VALUES ('150', '2013-01-04', '1', '1875', '3750000', '21', 'Tăng vốn', '1');
INSERT INTO `hr_transaction` VALUES ('151', '2013-01-04', '3', '938', '1875000', '21', 'Tăng vốn', '1');
INSERT INTO `hr_transaction` VALUES ('152', '2013-01-04', '4', '1688', '3375000', '21', 'Tăng vốn', '1');
INSERT INTO `hr_transaction` VALUES ('153', '2013-01-04', '5', '2813', '5625000', '21', 'Tăng vốn', '1');
INSERT INTO `hr_transaction` VALUES ('154', '2013-01-04', '6', '563', '1125000', '21', 'Tăng vốn', '1');
INSERT INTO `hr_transaction` VALUES ('155', '2013-01-04', '8', '375', '750000', '21', 'Tăng vốn', '1');
INSERT INTO `hr_transaction` VALUES ('156', '2013-01-04', '9', '1125', '2250000', '21', 'Tăng vốn', '1');
INSERT INTO `hr_transaction` VALUES ('157', '2013-01-04', '1', '4000', '8000000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('158', '2013-01-04', '3', '5000', '10000000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('159', '2013-01-04', '4', '4000', '8000000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('160', '2013-01-04', '5', '5000', '10000000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('161', '2013-01-04', '6', '2500', '5000000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('162', '2013-01-04', '1', '6000', '12000000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('163', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('164', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('165', '2013-01-05', '1', '90', '6000000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('166', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('167', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('168', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('169', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('170', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('171', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('172', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('173', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('174', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('175', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('176', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('177', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('178', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('179', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('180', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('181', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');
INSERT INTO `hr_transaction` VALUES ('182', '2013-01-05', '1', '100', '200000', null, 'Bán cổ phần', '2');

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
  `wh_id` int(11) DEFAULT NULL,
  `create_date` datetime NOT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` bit(1) DEFAULT b'0',
  `branch_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `check_num` (`num`),
  KEY `whout_id` (`wh_id`),
  CONSTRAINT `inv_check_inventory_ibfk_1` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_check_inventory
-- ----------------------------

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
  CONSTRAINT `inv_check_inventorydetails_ibfk_1` FOREIGN KEY (`check_inventory_id`) REFERENCES `inv_check_inventory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_check_inventorydetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_check_inventorydetails
-- ----------------------------

-- ----------------------------
-- Table structure for `inv_inventory`
-- ----------------------------
DROP TABLE IF EXISTS `inv_inventory`;
CREATE TABLE `inv_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `wh_id` int(11) DEFAULT NULL,
  `qty` decimal(20,5) DEFAULT '0.00000',
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`,`wh_id`),
  KEY `wh_id` (`wh_id`),
  CONSTRAINT `inv_inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_inventory_ibfk_2` FOREIGN KEY (`wh_id`) REFERENCES `inv_warehouse` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_inventory
-- ----------------------------

-- ----------------------------
-- Table structure for `inv_inventorycost`
-- ----------------------------
DROP TABLE IF EXISTS `inv_inventorycost`;
CREATE TABLE `inv_inventorycost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `cost` decimal(20,2) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_uid` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `inv_inventorycost_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_inventorycost
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_inventorylog
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_inventorylogdetail
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_transfer
-- ----------------------------

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
  `qtystd` decimal(19,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`trans_id`) USING BTREE,
  KEY `trans_id` (`trans_id`) USING BTREE,
  KEY `product_id` (`product_id`) USING BTREE,
  KEY `uom_id` (`uom_id`) USING BTREE,
  CONSTRAINT `inv_transferline_ibfk_1` FOREIGN KEY (`trans_id`) REFERENCES `inv_transfer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_transferline_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_transferline
-- ----------------------------

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
  `isM` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id`),
  KEY `branch_id` (`branch_id`),
  CONSTRAINT `inv_warehouse_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `sys_branch` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_warehouse
-- ----------------------------
INSERT INTO `inv_warehouse` VALUES ('69', 'Kho chính', '1', '', '1', '2012-06-26 00:00:00', '1', '1970-01-01 00:00:00', null, null, '');
INSERT INTO `inv_warehouse` VALUES ('70', 'Kho cửa hàng', '1', '', '1', '2012-06-27 00:00:00', '1', '1970-01-01 00:00:00', null, null, '');
INSERT INTO `inv_warehouse` VALUES ('80', 'Kho Chợ Lớn', '1', '', '1', '1970-01-01 00:00:00', '1', '2012-07-30 10:09:54', null, null, '');
INSERT INTO `inv_warehouse` VALUES ('81', 'Kho sản xuất', '1', '', '1', '2012-12-05 14:08:18', '1', '2013-02-25 15:28:05', null, null, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_warehousein
-- ----------------------------

-- ----------------------------
-- Table structure for `inv_warehouseinline`
-- ----------------------------
DROP TABLE IF EXISTS `inv_warehouseinline`;
CREATE TABLE `inv_warehouseinline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `warehousein_id` int(50) DEFAULT NULL,
  `product_id` int(20) NOT NULL,
  `qty` decimal(19,5) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inv_warehouseinline
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_warehouseout
-- ----------------------------

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
  `qtystd` decimal(10,2) DEFAULT NULL,
  `counter` decimal(19,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stock_warehouseoutline_ibfk_1` (`warehouseout_id`),
  KEY `product_id` (`product_id`),
  KEY `uom_id` (`uom_id`),
  CONSTRAINT `inv_warehouseoutline_ibfk_1` FOREIGN KEY (`warehouseout_id`) REFERENCES `inv_warehouseout` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inv_warehouseoutline_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_item` (`id`),
  CONSTRAINT `inv_warehouseoutline_ibfk_4` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inv_warehouseoutline
-- ----------------------------

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
  `workuom_radio` decimal(19,2) DEFAULT '1.00',
  `workuom_radio_std` decimal(19,2) DEFAULT '1.00',
  `hascounter` bit(1) DEFAULT b'0',
  `index` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `uom_id` (`uom_id`),
  KEY `category_id` (`category_id`),
  KEY `type_id` (`type_id`),
  CONSTRAINT `product_item_ibfk_3` FOREIGN KEY (`uom_id`) REFERENCES `product_uom` (`id`),
  CONSTRAINT `product_item_ibfk_5` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`),
  CONSTRAINT `product_item_ibfk_6` FOREIGN KEY (`type_id`) REFERENCES `product_type` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_item
-- ----------------------------
INSERT INTO `product_item` VALUES ('4', '5FG186', '5 in Fuji láng 186 m', '1', '1970-01-01 00:00:00', '1', '2013-02-06 10:11:28', '', '1', '3', '8', '5G', '5', '186.00', '1.00', '3', '4', '5', '186.00', '1.00', '8', '186.00', '12.70', null, '0.001', 'Gi?y ty 80', '4', '10', '69', '1000.0000', '2013-02-05', '1000.0000', '0.0000', '0.00', '0.00', '', '23.62', '1.00', '', '1');
INSERT INTO `product_item` VALUES ('5', '5FL186', '5 in Fuji lụa 186 m', '1', '1970-01-01 00:00:00', '1', '2013-02-06 10:11:29', null, '1', '3', '8', '5L', '5', '186.00', '1.00', '3', null, '5', '186.00', '1.00', '8', '186.00', '230.00', null, '0.000', 'fedfsdf sd', '0', '0', '69', '2000.0000', '2013-02-05', '2000.0000', null, null, null, '', '427.80', '1.00', '', '2');
INSERT INTO `product_item` VALUES ('6', '5PG186', '5 in Patinum láng 186 m', '1', '1970-01-01 00:00:00', '1', '2012-12-22 10:31:03', null, '1', '1', '4', '5G', '5', '186.00', '1.00', '3', null, '5', '186.00', '1.00', null, '186.00', '127.00', null, '1.000', 'd ddsd', '0', null, null, '32000.0000', '2012-12-13', '32000.0000', null, null, null, '', '236.22', '1.00', '', '1');
INSERT INTO `product_item` VALUES ('7', '6FG186', '6 in Fuji láng 186 m', null, null, '1', '2012-11-16 15:49:59', null, '1', '1', '8', '6G', '5', '186.00', '1.00', '3', '1', '5', '186.00', '1.00', null, '186.00', '13.00', null, '0.000', '', '0', null, null, '1000000.0000', '2012-11-15', '0.0000', null, '0.00', '0.00', '', '24.18', '1.00', '', '3');
INSERT INTO `product_item` VALUES ('8', '6FL186', '6 in Fuji lụa 186 m', '1', '2012-07-26 17:02:23', '1', '2012-11-15 14:47:53', null, '1', '1', '8', '6L', '5', '186.00', '1.00', '3', null, '5', '186.00', '1.00', null, '186.00', '15.20', null, '0.010', '', '0', null, '70', '3000.0000', '2012-11-01', '0.0000', null, '0.00', '0.00', '', '28.27', '1.00', '', '4');
INSERT INTO `product_item` VALUES ('9', '8FG90', '8 in Fuji láng 90 m', '1', '2012-07-26 17:16:33', '1', '2012-11-15 16:14:10', null, '1', '1', '4', '8G', '5', '90.00', '1.00', '3', null, '5', '90.00', '1.00', null, '90.00', '20.30', null, '0.100', '', '0', null, '69', '0.0000', null, '0.0000', null, '0.00', '0.00', '', '18.27', '1.00', '', '2');
INSERT INTO `product_item` VALUES ('13', ' 8PL90', ' 8 in Patinum lụa 90 m  ', '1', '2012-08-10 14:25:17', '1', '2012-12-22 10:31:01', null, '1', '1', '4', '8L', '5', '90.00', '1.00', '3', null, '5', '90.00', '1.00', null, '90.00', '20.30', null, '0.010', '', '0', null, '69', '600000.0000', '2012-12-07', '600000.0000', null, '0.00', '0.00', '', '18.27', '1.00', '', '3');
INSERT INTO `product_item` VALUES ('14', '10FG90', '10 in Fuji láng 90 m', '1', '2012-08-10 14:35:08', '1', '2012-12-22 10:31:02', null, '1', '3', '4', '10G', '5', '186.00', '1.00', '3', null, '5', '186.00', '1.00', '8', '90.00', '25.40', null, '0.010', '', '0', null, '69', '0.0000', '2012-12-13', '0.0000', null, '0.00', '0.00', '', '22.86', '1.00', '', '4');
INSERT INTO `product_item` VALUES ('15', '10PL90', '10 in Patinum lụa 90 m', '1', '2012-08-10 14:36:09', '1', '2012-12-22 10:31:03', null, '1', '3', '4', '10L', '5', '90.00', '1.00', '3', null, '5', '90.00', '1.00', '8', '90.00', '25.40', null, '0.010', '', '0', null, '69', '47000.0000', '2012-12-13', '47000.0000', null, '0.00', '0.00', '', '22.86', '1.00', '', '5');
INSERT INTO `product_item` VALUES ('16', '12FN75', '12 in giấy ngọc trai', '1', '2012-08-10 14:37:14', '1', '2012-12-22 10:31:02', null, '1', '1', '4', 'ME', '5', '75.00', '1.00', '3', null, '5', '75.00', '1.00', null, '75.00', '30.50', null, '0.010', '', '0', null, '69', '260000.0000', '2012-12-07', '260000.0000', null, '0.00', '0.00', '', '22.88', '1.00', '', '6');
INSERT INTO `product_item` VALUES ('17', '12FG90', '12 in Fuji laùng 90 m', '1', '2012-08-10 14:38:07', '1', '2012-12-10 11:31:47', null, '1', '1', '4', '24L', '5', '90.00', '1.00', '3', null, '5', '90.00', '1.00', null, '90.00', '30.50', null, '0.010', '', '0', null, '69', '30000.0000', '2012-12-01', '30000.0000', null, '0.00', '0.00', '', '27.45', '1.00', '', '7');
INSERT INTO `product_item` VALUES ('18', '24TG50', '24 in Fuji Ty 80 láng 50 m', '1', '2012-08-10 14:39:42', '1', '2012-12-12 15:39:36', null, '1', '1', '4', '24G', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '62.00', null, '0.010', '', '0', null, '69', '60000.0000', '2012-11-01', '60000.0000', null, '0.00', '0.00', '', '31.00', '1.00', '', '8');
INSERT INTO `product_item` VALUES ('19', '24TL50', '24 in Fuji Ty 80 lụa 50 m', '1', '2012-08-10 14:40:38', '1', '2012-12-12 15:39:36', null, '1', '1', '4', '24L', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '62.00', null, '0.010', '', '0', null, '69', '70000.0000', '2012-11-01', '70000.0000', null, '0.00', '0.00', '', '31.00', '1.00', '', '9');
INSERT INTO `product_item` VALUES ('20', '30TG50', '30 in Fuji Ty 80 láng 50 m', '1', '2012-08-10 14:41:59', '1', '2012-12-10 11:31:47', null, '1', '1', '4', '30G', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '76.20', null, '0.010', '', '0', null, '69', '20000.0000', '2012-12-01', '20000.0000', null, '0.00', '0.00', '', '38.10', '1.00', '', '10');
INSERT INTO `product_item` VALUES ('21', '30TL50', '30 in Fuji Ty 80 lụa  50 m', '1', '2012-08-10 14:42:50', '1', '2012-12-13 15:40:42', null, '1', '1', '4', '30L', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '76.20', null, '0.010', '', '0', null, '69', '900000.0000', '2012-12-07', '900000.0000', null, '0.00', '0.00', '', '38.10', '1.00', '', '11');
INSERT INTO `product_item` VALUES ('22', '50TG50', '50 in Fuji Ty 80 láng 50 m', '1', '2012-08-10 14:44:01', '1', '2012-11-15 16:19:19', null, '1', '1', '4', '50G', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '127.00', null, '0.010', '', '0', null, '69', '0.0000', '2012-08-10', '0.0000', null, '0.00', '0.00', '', '63.50', '1.00', '', '12');
INSERT INTO `product_item` VALUES ('23', '50TL50', '50 in Fuji Ty 80 lụa  50 m', '1', '2012-08-10 14:44:45', '1', '2012-11-16 15:49:59', null, '1', '1', '4', '50L', '5', '50.00', '1.00', '3', null, '5', '50.00', '1.00', null, '50.00', '127.00', null, '0.010', '', '0', null, '69', '1500000.0000', '2012-11-15', '0.0000', null, '0.00', '0.00', '', '63.50', '1.00', '', '13');
INSERT INTO `product_item` VALUES ('24', 'P1PRO40', 'P1 Pro 40 lít', '1', '2012-08-10 14:46:24', '1', '2012-12-22 10:31:01', null, '1', '1', '4', 'HCL', '2', '40.00', '1.00', '4', null, '2', '40.00', '1.00', null, '1.00', '40.00', null, '0.010', '', '0', null, '69', '700000.0000', '2012-12-07', '700000.0000', null, '0.00', '0.00', '', '0.40', '1.00', '', '14');

-- ----------------------------
-- Table structure for `product_type`
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type` (
  `id` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `isM` bit(1) DEFAULT b'1',
  `parent` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_uom
-- ----------------------------
INSERT INTO `product_uom` VALUES ('6', 'Cái');
INSERT INTO `product_uom` VALUES ('1', 'Cây');
INSERT INTO `product_uom` VALUES ('7', 'Hộp');
INSERT INTO `product_uom` VALUES ('2', 'Lít');
INSERT INTO `product_uom` VALUES ('8', 'm2');
INSERT INTO `product_uom` VALUES ('5', 'Mét');
INSERT INTO `product_uom` VALUES ('3', 'Roll');
INSERT INTO `product_uom` VALUES ('4', 'Thùng');

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
) ENGINE=InnoDB AUTO_INCREMENT=344 DEFAULT CHARSET=utf8;

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
INSERT INTO `sys_fields` VALUES ('159', 'Employee', 'job_id', 'Chức vụ', '0', '1', 'varchar', '0', '0', '');
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
INSERT INTO `sys_fields` VALUES ('269', 'ShiftChange', 'note', 'Lý do đổi', '0', '1', 'varchar', '0', '0', null);
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
INSERT INTO `sys_fields` VALUES ('303', 'CheckInventory', 'id', '.', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('304', 'CheckInventory', 'whcheck_id', 'Kho kiểm kê', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('305', 'CheckInventory', 'date', 'Ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('306', 'CheckInventory', 'num', 'Số phiếu', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('307', 'CheckInventory', 'wh_id', 'Kho', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('308', 'CheckInventory', 'note', 'Ghi chú', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('309', 'CheckInventory', 'fdate', 'Từ ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('310', 'CheckInventory', 'tdate', 'Đến ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('311', 'CheckInventory', 'whout_id', 'Kho xuất hàng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('312', 'CheckInventory', 'create_uid', 'Nhân viên nhập', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('313', 'CheckInventory', 'status', 'Tình trạng', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('314', 'StipulateTimeinout', 'n1_time_from', 'Time From', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('315', 'StipulateTimeinout', 'n2_time_to', '', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('316', 'StipulateTimeinout', 'n5_time_to', '', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('317', 'Payrollrule', 'type', 'Quy định', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('318', 'Payrollrule', 'name', 'Mô tả', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('319', 'Payrollrule', 'op', 'Điều kiện', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('320', 'Payrollrule', 'val', 'Giá trị(ngày/phút)', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('321', 'Payrollrule', 'rate', 'Tỉ lệ(%)', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('322', 'ShiftChange', 'empFrom', 'Tên nhân viên đổi', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('323', 'ShiftChange', 'empTo', 'Nhân viên nhận đổi', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('324', 'Payperiod', 'date', 'Ngày', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('325', 'Payperiod', 'amt', 'Tỷ lệ vay', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('326', 'Payperiod', 'name', 'Kỳ trả lãi vay', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('327', 'ShiftChange', 'from1_id', 'Ca đổi', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('328', 'ShiftChange', 'from2_id', 'Ca đổi', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('329', 'ShiftChange', 'from_id', 'Ca đổi', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('330', 'ShiftChange', 'to_id', 'Ca đổi', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('331', 'ShiftReplace', 'detail_id', 'Ca làm thế', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('332', 'Payperiod', 'rateloan', 'Tỷ lệ lãi vay', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('333', 'ShiftPlan', 'id', 'Chọn lịch trực', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('334', 'ShiftDetail', 'timeIn', 'Giờ đến', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('335', 'ShiftDetail', 'timeOut', 'Giờ về', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('336', 'Employee', 'fullName', 'Nhân Viên', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('337', 'Employee', 'workDay', 'Ngày làm việc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('338', 'Employee', 'shift', 'Ca làm việc', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('339', 'Employee', 'startTimeShift', 'Giờ qui định đến', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('340', 'Employee', 'endTimeShift', 'Giờ qui định về', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('341', 'Grade', 'note', 'Chú ý', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('342', 'Grade', 'a', 'Thưởng A+', '0', '1', 'varchar', '0', '0', null);
INSERT INTO `sys_fields` VALUES ('343', 'Grade', 'bc', 'Thưởng B, C', '0', '1', 'varchar', '0', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_partner
-- ----------------------------
INSERT INTO `sys_partner` VALUES ('1', 'kh001', 'Khach hang A', null, null, null, '', null, '1', null, '1', '', '', null, '0');
INSERT INTO `sys_partner` VALUES ('2', 'Kh002', 'Khach hang B', null, null, null, '', null, '1', null, '1', '', '', null, '0');
INSERT INTO `sys_partner` VALUES ('15', 'kh003', 'khach hang 003', '', '', '', '', '2012-07-26 16:54:05', '1', '2012-11-14 15:49:55', '1', '', '', '', '1');
INSERT INTO `sys_partner` VALUES ('16', 'kh004', 'khach hang 004', '', '', '', '', '2012-07-26 16:56:01', '1', '2012-07-26 16:56:01', '1', '', '', '', '1');
INSERT INTO `sys_partner` VALUES ('17', 'kh005', 'khach hang 005', '', '', 'abc@yahoo.com', '', '2012-07-26 16:57:51', '1', '2012-11-22 16:21:09', '1', '', '', '', '1');
INSERT INTO `sys_partner` VALUES ('18', 'test', 'khachhang005', '', '', '', '', '2013-01-15 21:15:10', '1', '2013-01-15 21:15:10', '1', '', '', '', '1');

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
INSERT INTO `sys_sequence` VALUES ('1', 'Warehousein', null, '118', 'NVT', null, null, '1');
INSERT INTO `sys_sequence` VALUES ('2', 'Warehouseout', null, '46', 'XVT', null, null, '1');
INSERT INTO `sys_sequence` VALUES ('3', 'Transfer', null, '26', 'CVT', null, null, '1');
INSERT INTO `sys_sequence` VALUES ('4', 'CheckInventory', null, '1', 'KVT', null, null, '1');

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
  `emp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hr_employee` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('1', 'admin', '625d45c587033e8970af8b4e3fdb575c', 'webmaster@example.com', '4ecf9c0317dff4756a3eb2ca39054fa4', '1261146094', '1362125302', '1', '1', '1', null);
INSERT INTO `tbl_users` VALUES ('2', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example1.com', '099f825543f7850cc038b90aaff39fac', '1261146096', '1359356317', '0', '1', '1', null);
INSERT INTO `tbl_users` VALUES ('3', 'kho', '90177c4c3d399ec487af65451f89b59b', 'minhtuana1@yahoo.com', '20dd93bc3353b4fdb69d16ab420eea7c', '1351485218', '1359356433', '0', '1', '1', null);
INSERT INTO `tbl_users` VALUES ('4', 'nhap', '90177c4c3d399ec487af65451f89b59b', 'nhap@yahoo.com', 'c711c5e8f997f907f1dd96990f07a19b', '1351565925', '1359366871', '0', '1', '1', null);
INSERT INTO `tbl_users` VALUES ('5', 'xuat', '90177c4c3d399ec487af65451f89b59b', 'xuat@yahoo.com', '3fc5b4cd2afa17d55a42dbcad99b6e35', '1351565969', '1359356523', '0', '1', '1', null);
INSERT INTO `tbl_users` VALUES ('7', 'lanlan', '4e224df013b3fd4f0de54126186e75de', 'lan@gmail.com', 'f55bbcc8d2244afbe8395ca458a9fd78', '1359355823', '1360044782', '0', '1', '1', '1');

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
