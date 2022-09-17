/*
Navicat MySQL Data Transfer

Source Server         : Lexy
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : realestate

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-05 18:39:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for activations
-- ----------------------------
DROP TABLE IF EXISTS `activations`;
CREATE TABLE `activations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activations
-- ----------------------------
INSERT INTO `activations` VALUES ('1', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-27 14:20:08', '2020-04-27 14:20:08');
INSERT INTO `activations` VALUES ('2', '10', 'Bt1u9evtGkMmZs10nvzt4DcsVYWYdLrb74rh0PRb5dzdUDCmdzTOg9z6VJWqxTV7', '0.0.0.0', '2020-04-27 19:57:22', '2020-04-27 19:57:22');
INSERT INTO `activations` VALUES ('3', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-27 20:35:17', '2020-04-27 20:35:17');
INSERT INTO `activations` VALUES ('4', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 02:14:40', '2020-04-28 02:14:40');
INSERT INTO `activations` VALUES ('5', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 12:34:41', '2020-04-28 12:34:41');
INSERT INTO `activations` VALUES ('6', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 12:59:17', '2020-04-28 12:59:17');
INSERT INTO `activations` VALUES ('7', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 13:12:41', '2020-04-28 13:12:41');
INSERT INTO `activations` VALUES ('8', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 13:18:18', '2020-04-28 13:18:18');
INSERT INTO `activations` VALUES ('9', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 13:34:27', '2020-04-28 13:34:27');
INSERT INTO `activations` VALUES ('10', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 13:36:30', '2020-04-28 13:36:30');
INSERT INTO `activations` VALUES ('11', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 13:39:51', '2020-04-28 13:39:51');
INSERT INTO `activations` VALUES ('12', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 13:40:22', '2020-04-28 13:40:22');
INSERT INTO `activations` VALUES ('13', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-28 13:40:53', '2020-04-28 13:40:53');
INSERT INTO `activations` VALUES ('14', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-29 05:33:24', '2020-04-29 05:33:24');
INSERT INTO `activations` VALUES ('15', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-29 11:43:58', '2020-04-29 11:43:58');
INSERT INTO `activations` VALUES ('16', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-30 12:10:39', '2020-04-30 12:10:39');
INSERT INTO `activations` VALUES ('17', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-30 17:30:25', '2020-04-30 17:30:25');
INSERT INTO `activations` VALUES ('18', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-04-30 18:24:56', '2020-04-30 18:24:56');
INSERT INTO `activations` VALUES ('19', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-05-01 14:19:50', '2020-05-01 14:19:50');
INSERT INTO `activations` VALUES ('20', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-05-04 08:25:09', '2020-05-04 08:25:09');
INSERT INTO `activations` VALUES ('21', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-05-04 13:45:40', '2020-05-04 13:45:40');
INSERT INTO `activations` VALUES ('22', '9', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', '2020-05-05 05:37:54', '2020-05-05 05:37:54');

-- ----------------------------
-- Table structure for attachments
-- ----------------------------
DROP TABLE IF EXISTS `attachments`;
CREATE TABLE `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `small` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `big` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of attachments
-- ----------------------------
INSERT INTO `attachments` VALUES ('1', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('2', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('3', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('4', 'uploads/properties/small/apartment-1.jpg', 'uploads/properties/medium/apartment-1.jpg', 'uploads/properties/big/apartment-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('5', 'uploads/properties/small/apartment-2.jpg', 'uploads/properties/medium/apartment-2.jpg', 'uploads/properties/big/apartment-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('6', 'uploads/properties/small/apartment-3.jpg', 'uploads/properties/medium/apartment-3.jpg', 'uploads/properties/big/apartment-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('7', 'uploads/properties/small/apartment-4.jpg', 'uploads/properties/medium/apartment-4.jpg', 'uploads/properties/big/apartment-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('8', 'uploads/properties/small/apartment-5.jpg', 'uploads/properties/medium/apartment-5.jpg', 'uploads/properties/big/apartment-5.jpg', null, null);
INSERT INTO `attachments` VALUES ('9', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('10', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('11', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('12', 'uploads/properties/small/flat1-1.jpg', 'uploads/properties/medium/flat1-1.jpg', 'uploads/properties/big/flat1-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('13', 'uploads/properties/small/flat1-2.jpg', 'uploads/properties/medium/flat1-2.jpg', 'uploads/properties/big/flat1-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('14', 'uploads/properties/small/flat1-3.jpg', 'uploads/properties/medium/flat1-3.jpg', 'uploads/properties/big/flat1-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('15', 'uploads/properties/small/flat1-4.jpg', 'uploads/properties/medium/flat1-4.jpg', 'uploads/properties/big/flat1-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('16', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('17', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('18', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('19', 'uploads/properties/small/flat2-1.jpg', 'uploads/properties/medium/flat2-1.jpg', 'uploads/properties/big/flat2-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('20', 'uploads/properties/small/flat2-2.jpg', 'uploads/properties/medium/flat2-2.jpg', 'uploads/properties/big/flat2-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('21', 'uploads/properties/small/flat2-3.jpg', 'uploads/properties/medium/flat2-3.jpg', 'uploads/properties/big/flat2-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('22', 'uploads/properties/small/flat2-4.jpg', 'uploads/properties/medium/flat2-4.jpg', 'uploads/properties/big/flat2-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('23', 'uploads/properties/small/flat2-5.jpg', 'uploads/properties/medium/flat2-5.jpg', 'uploads/properties/big/flat2-5.jpg', null, null);
INSERT INTO `attachments` VALUES ('24', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('25', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('26', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('27', 'uploads/properties/small/house1-1.jpg', 'uploads/properties/medium/house1-1.jpg', 'uploads/properties/big/house1-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('28', 'uploads/properties/small/house1-2.jpg', 'uploads/properties/medium/house1-2.jpg', 'uploads/properties/big/house1-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('29', 'uploads/properties/small/house1-3.jpg', 'uploads/properties/medium/house1-3.jpg', 'uploads/properties/big/house1-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('30', 'uploads/properties/small/house1-4.jpg', 'uploads/properties/medium/house1-4.jpg', 'uploads/properties/big/house1-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('31', 'uploads/properties/small/house1-5.jpg', 'uploads/properties/medium/house1-5.jpg', 'uploads/properties/big/house1-5.jpg', null, null);
INSERT INTO `attachments` VALUES ('32', 'uploads/properties/small/house1-6.jpg', 'uploads/properties/medium/house1-6.jpg', 'uploads/properties/big/house1-6.jpg', null, null);
INSERT INTO `attachments` VALUES ('33', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('34', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('35', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('36', 'uploads/properties/small/house2-1.jpg', 'uploads/properties/medium/house2-1.jpg', 'uploads/properties/big/house2-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('37', 'uploads/properties/small/house2-2.jpg', 'uploads/properties/medium/house2-2.jpg', 'uploads/properties/big/house2-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('38', 'uploads/properties/small/house2-3.jpg', 'uploads/properties/medium/house2-3.jpg', 'uploads/properties/big/house2-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('39', 'uploads/properties/small/house2-4.jpg', 'uploads/properties/medium/house2-4.jpg', 'uploads/properties/big/house2-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('40', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('41', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('42', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('43', 'uploads/properties/small/house3-1.jpg', 'uploads/properties/medium/house3-1.jpg', 'uploads/properties/big/house3-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('44', 'uploads/properties/small/house3-2.jpg', 'uploads/properties/medium/house3-2.jpg', 'uploads/properties/big/house3-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('45', 'uploads/properties/small/house3-3.jpg', 'uploads/properties/medium/house3-3.jpg', 'uploads/properties/big/house3-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('46', 'uploads/properties/small/house3-4.jpg', 'uploads/properties/medium/house3-4.jpg', 'uploads/properties/big/house3-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('47', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('48', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('49', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('50', 'uploads/properties/small/office1-1.jpg', 'uploads/properties/medium/office1-1.jpg', 'uploads/properties/big/office1-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('51', 'uploads/properties/small/office1-2.jpg', 'uploads/properties/medium/office1-2.jpg', 'uploads/properties/big/office1-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('52', 'uploads/properties/small/office1-3.jpg', 'uploads/properties/medium/office1-3.jpg', 'uploads/properties/big/office1-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('53', 'uploads/properties/small/office1-4.jpg', 'uploads/properties/medium/office1-4.jpg', 'uploads/properties/big/office1-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('54', 'uploads/properties/small/office1-5.jpg', 'uploads/properties/medium/office1-5.jpg', 'uploads/properties/big/office1-5.jpg', null, null);
INSERT INTO `attachments` VALUES ('55', 'uploads/properties/small/office1-6.jpg', 'uploads/properties/medium/office1-6.jpg', 'uploads/properties/big/office1-6.jpg', null, null);
INSERT INTO `attachments` VALUES ('56', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('57', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('58', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('59', 'uploads/properties/small/office2-1.jpg', 'uploads/properties/medium/office2-1.jpg', 'uploads/properties/big/office2-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('60', 'uploads/properties/small/office2-2.jpg', 'uploads/properties/medium/office2-2.jpg', 'uploads/properties/big/office2-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('61', 'uploads/properties/small/office2-3.jpg', 'uploads/properties/medium/office2-3.jpg', 'uploads/properties/big/office2-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('62', 'uploads/properties/small/office2-4.jpg', 'uploads/properties/medium/office2-4.jpg', 'uploads/properties/big/office2-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('63', 'uploads/properties/small/office2-5.jpg', 'uploads/properties/medium/office2-5.jpg', 'uploads/properties/big/office2-5.jpg', null, null);
INSERT INTO `attachments` VALUES ('64', 'uploads/properties/small/office2-6.jpg', 'uploads/properties/medium/office2-6.jpg', 'uploads/properties/big/office2-6.jpg', null, null);
INSERT INTO `attachments` VALUES ('65', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('66', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('67', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('68', 'uploads/properties/small/apartment-1.jpg', 'uploads/properties/medium/apartment-1.jpg', 'uploads/properties/big/apartment-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('69', 'uploads/properties/small/apartment-2.jpg', 'uploads/properties/medium/apartment-2.jpg', 'uploads/properties/big/apartment-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('70', 'uploads/properties/small/apartment-3.jpg', 'uploads/properties/medium/apartment-3.jpg', 'uploads/properties/big/apartment-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('71', 'uploads/properties/small/apartment-4.jpg', 'uploads/properties/medium/apartment-4.jpg', 'uploads/properties/big/apartment-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('72', 'uploads/properties/small/apartment-5.jpg', 'uploads/properties/medium/apartment-5.jpg', 'uploads/properties/big/apartment-5.jpg', null, null);
INSERT INTO `attachments` VALUES ('73', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('74', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('75', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('76', 'uploads/properties/small/flat1-1.jpg', 'uploads/properties/medium/flat1-1.jpg', 'uploads/properties/big/flat1-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('77', 'uploads/properties/small/flat1-2.jpg', 'uploads/properties/medium/flat1-2.jpg', 'uploads/properties/big/flat1-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('78', 'uploads/properties/small/flat1-3.jpg', 'uploads/properties/medium/flat1-3.jpg', 'uploads/properties/big/flat1-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('79', 'uploads/properties/small/flat1-4.jpg', 'uploads/properties/medium/flat1-4.jpg', 'uploads/properties/big/flat1-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('80', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('81', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('82', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('83', 'uploads/properties/small/flat2-1.jpg', 'uploads/properties/medium/flat2-1.jpg', 'uploads/properties/big/flat2-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('84', 'uploads/properties/small/flat2-2.jpg', 'uploads/properties/medium/flat2-2.jpg', 'uploads/properties/big/flat2-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('85', 'uploads/properties/small/flat2-3.jpg', 'uploads/properties/medium/flat2-3.jpg', 'uploads/properties/big/flat2-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('86', 'uploads/properties/small/flat2-4.jpg', 'uploads/properties/medium/flat2-4.jpg', 'uploads/properties/big/flat2-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('87', 'uploads/properties/small/flat2-5.jpg', 'uploads/properties/medium/flat2-5.jpg', 'uploads/properties/big/flat2-5.jpg', null, null);
INSERT INTO `attachments` VALUES ('88', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('89', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('90', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('91', 'uploads/properties/small/house1-1.jpg', 'uploads/properties/medium/house1-1.jpg', 'uploads/properties/big/house1-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('92', 'uploads/properties/small/house1-2.jpg', 'uploads/properties/medium/house1-2.jpg', 'uploads/properties/big/house1-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('93', 'uploads/properties/small/house1-3.jpg', 'uploads/properties/medium/house1-3.jpg', 'uploads/properties/big/house1-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('94', 'uploads/properties/small/house1-4.jpg', 'uploads/properties/medium/house1-4.jpg', 'uploads/properties/big/house1-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('95', 'uploads/properties/small/house1-5.jpg', 'uploads/properties/medium/house1-5.jpg', 'uploads/properties/big/house1-5.jpg', null, null);
INSERT INTO `attachments` VALUES ('96', 'uploads/properties/small/house1-6.jpg', 'uploads/properties/medium/house1-6.jpg', 'uploads/properties/big/house1-6.jpg', null, null);
INSERT INTO `attachments` VALUES ('97', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('98', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('99', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('100', 'uploads/properties/small/house2-1.jpg', 'uploads/properties/medium/house2-1.jpg', 'uploads/properties/big/house2-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('101', 'uploads/properties/small/house2-2.jpg', 'uploads/properties/medium/house2-2.jpg', 'uploads/properties/big/house2-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('102', 'uploads/properties/small/house2-3.jpg', 'uploads/properties/medium/house2-3.jpg', 'uploads/properties/big/house2-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('103', 'uploads/properties/small/house2-4.jpg', 'uploads/properties/medium/house2-4.jpg', 'uploads/properties/big/house2-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('104', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('105', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('106', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('107', 'uploads/properties/small/house3-1.jpg', 'uploads/properties/medium/house3-1.jpg', 'uploads/properties/big/house3-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('108', 'uploads/properties/small/house3-2.jpg', 'uploads/properties/medium/house3-2.jpg', 'uploads/properties/big/house3-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('109', 'uploads/properties/small/house3-3.jpg', 'uploads/properties/medium/house3-3.jpg', 'uploads/properties/big/house3-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('110', 'uploads/properties/small/house3-4.jpg', 'uploads/properties/medium/house3-4.jpg', 'uploads/properties/big/house3-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('111', 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('112', 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('113', 'uploads/properties/video/video-1.mp4', null, null, null, null);
INSERT INTO `attachments` VALUES ('114', 'uploads/properties/small/office1-1.jpg', 'uploads/properties/medium/office1-1.jpg', 'uploads/properties/big/office1-1.jpg', null, null);
INSERT INTO `attachments` VALUES ('115', 'uploads/properties/small/office1-2.jpg', 'uploads/properties/medium/office1-2.jpg', 'uploads/properties/big/office1-2.jpg', null, null);
INSERT INTO `attachments` VALUES ('116', 'uploads/properties/small/office1-3.jpg', 'uploads/properties/medium/office1-3.jpg', 'uploads/properties/big/office1-3.jpg', null, null);
INSERT INTO `attachments` VALUES ('117', 'uploads/properties/small/office1-4.jpg', 'uploads/properties/medium/office1-4.jpg', 'uploads/properties/big/office1-4.jpg', null, null);
INSERT INTO `attachments` VALUES ('118', 'uploads/properties/small/office1-5.jpg', 'uploads/properties/medium/office1-5.jpg', 'uploads/properties/big/office1-5.jpg', null, null);
INSERT INTO `attachments` VALUES ('119', 'uploads/properties/small/office1-6.jpg', 'uploads/properties/medium/office1-6.jpg', 'uploads/properties/big/office1-6.jpg', null, null);
INSERT INTO `attachments` VALUES ('129', 'uploads/small/09e19ceb39be7b7.jpg', 'uploads/medium/c559e4facfd3042.jpg', 'uploads/big/948e4237c37d131.jpg', '2019-12-20 19:50:38.000000', '2019-12-20 19:50:39.000000');

-- ----------------------------
-- Table structure for companies
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `about_us` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of companies
-- ----------------------------
INSERT INTO `companies` VALUES ('1', 'Green View', 'Tioga Ave', null, '/upload/company-logo/aloha.png', 'New York', 'NY', '13532', null, null, null, null, null, null, null, null, null);
INSERT INTO `companies` VALUES ('2', 'CNH', 'Eshelman st', null, '/upload/company-logo/best.png', 'Austin', 'TX', '13274', null, null, null, null, null, null, '2019-11-13 20:36:12.000000', '2019-11-13 20:36:12.000000', null);
INSERT INTO `companies` VALUES ('5', 'Silver', 'adf', 'adf', '/upload/company-logo/1588251302qESWwQPOLJ.png', 'adf', 'adf', '12345', '123', '123', null, 'silver@silver.com', null, 'adf', '2020-04-30 12:55:01.000000', '2020-04-30 12:55:02.000000', null);
INSERT INTO `companies` VALUES ('6', 'Test', 'test', 'test', '/upload/company-logo/15882753899ZyoW8Oqw4.jpg', 'test', 'test', '123', '123', '123', '123', 'test@123.com', 'test1234', 'test', '2020-04-30 18:27:47.000000', '2020-05-01 14:34:10.000000', '2020-05-01 14:34:10');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2020_05_01_135815_create_companies_table', '1');
INSERT INTO `migrations` VALUES ('2', '2020_05_01_135934_create_activations_table', '1');
INSERT INTO `migrations` VALUES ('3', '2020_05_01_140003_create_attachments_table', '1');
INSERT INTO `migrations` VALUES ('4', '2020_05_01_140030_create_profiles_table', '1');
INSERT INTO `migrations` VALUES ('5', '2020_05_01_140042_create_properties_table', '1');
INSERT INTO `migrations` VALUES ('6', '2020_05_01_140104_create_property_additional_features_table', '1');
INSERT INTO `migrations` VALUES ('7', '2020_05_01_140127_create_property_details_table', '1');
INSERT INTO `migrations` VALUES ('8', '2020_05_01_140148_create_property_feature_pivot_table', '1');
INSERT INTO `migrations` VALUES ('9', '2020_05_01_140156_create_property_features_table', '1');
INSERT INTO `migrations` VALUES ('10', '2020_05_01_140209_create_property_galleries_table', '1');
INSERT INTO `migrations` VALUES ('11', '2020_05_01_140218_create_property_plans_table', '1');
INSERT INTO `migrations` VALUES ('12', '2020_05_01_140229_create_property_status_pivot_table', '1');
INSERT INTO `migrations` VALUES ('13', '2020_05_01_140248_create_property_statuses_table', '1');
INSERT INTO `migrations` VALUES ('14', '2020_05_01_140258_create_property_types_table', '1');
INSERT INTO `migrations` VALUES ('15', '2020_05_01_140312_create_role_user_table', '1');
INSERT INTO `migrations` VALUES ('16', '2020_05_01_140335_create_roles_table', '1');
INSERT INTO `migrations` VALUES ('17', '2020_05_01_140407_create_themes_table', '1');
INSERT INTO `migrations` VALUES ('18', '2020_05_01_140418_create_user_profiles_table', '1');

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `theme_id` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `avatar_status` varchar(255) DEFAULT NULL,
  `user_profile_bg` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_state` varchar(255) DEFAULT NULL,
  `billing_zipcode` varchar(255) DEFAULT NULL,
  `billing_country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profiles
-- ----------------------------
INSERT INTO `profiles` VALUES ('1', '9', '288', null, 'Home', 'NY', 'NY', '/upload/profile/1588344712s9KCeV9ztI.jpg', '0', '/assets/img/default-user-bg.png', '2020-05-01 17:51:52', '2020-05-01 14:51:52', 'NY', '10365', 'US', 'NY', 'NY', 'NY', '10365', 'US');
INSERT INTO `profiles` VALUES ('2', '2', '1', null, null, null, null, '', '0', '/assets/img/default-user-bg.jpg', '2020-04-28 17:10:49', '2020-04-28 17:10:49', null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('3', '1', null, null, null, null, null, '', '0', '/assets/img/default-user-bg.jpg', '2020-04-28 17:10:55', '2020-04-28 17:10:55', null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('4', '3', null, null, null, null, null, null, '0', '/assets/img/default-user-bg.jpg', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('5', '4', null, null, null, null, null, null, '0', '/assets/img/default-user-bg.jpg', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('6', '5', null, null, null, null, null, null, '0', '/assets/img/default-user-bg.jpg', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('7', '6', null, null, null, null, null, null, '0', '/assets/img/default-user-bg.jpg', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('8', '7', null, null, null, null, null, null, '0', '/assets/img/default-user-bg.jpg', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('9', '8', null, null, null, null, null, null, '0', '/assets/img/default-user-bg.jpg', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('10', '10', null, null, null, null, null, null, '0', '/assets/img/default-user-bg.jpg', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('11', '13', '1', null, '1', 'a', 'b', null, '0', '/assets/img/default-user-bg.jpg', '2020-04-29 06:28:57', '2020-04-29 06:28:57', 'c', '12345', 'US', 'a', 'b', 'c', '12345', 'US');
INSERT INTO `profiles` VALUES ('12', '14', '1', null, '1', 'a', 'b', null, '0', '/assets/img/default-user-bg.jpg', '2020-04-29 06:49:25', '2020-04-29 06:49:25', 'c', '12345', 'US', 'a', 'b', 'c', '12345', 'US');
INSERT INTO `profiles` VALUES ('13', '16', '1', null, '1', 'a', '2', null, '0', '/assets/img/default-user-bg.jpg', '2020-04-29 07:05:12', '2020-04-29 07:05:12', '3', '12345', 'US', 'a', '2', '3', '12345', 'US');
INSERT INTO `profiles` VALUES ('14', '17', '1', null, '1', 'a', 'b', '/upload/profile/1588164801jCHsCuUzlI.jpg', '0', '/assets/img/default-user-bg.jpg', '2020-04-29 15:53:21', '2020-04-29 12:53:21', 'c', '12345', 'US', 'a', 'b', 'c', '12345', 'US');
INSERT INTO `profiles` VALUES ('15', '18', '1', null, '2', '1', '2', '/upload/profile/1588164009vjcyMzdO63.jpg', '0', '/assets/img/default-user-bg.jpg', '2020-04-29 15:40:09', '2020-04-29 12:40:09', '3', '12345', 'US', '1', '2', '3', '12345', 'US');
INSERT INTO `profiles` VALUES ('16', '20', '1', null, '1', 'test123', 'test123', '/upload/profile/1588163524gp28SNXzaM.jpg', '0', '/assets/img/default-user-bg.jpg', '2020-04-29 15:32:04', '2020-04-29 12:32:04', 'test123', '12345', 'United States', 'test123', 'test123', 'test123', '12345', 'United States');
INSERT INTO `profiles` VALUES ('17', '21', '1', null, '5', 'test4', 'test4', '/upload/profile/1588271175PjVCs71UVY.jpg', '0', '/assets/img/default-user-bg.jpg', '2020-04-30 18:26:15', '2020-04-30 18:26:15', 'test4', '123456', 'test4', 'test4', 'test4', 'test4', '123456', 'test4');

-- ----------------------------
-- Table structure for properties
-- ----------------------------
DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(4096) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `property_type_id` int(11) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of properties
-- ----------------------------
INSERT INTO `properties` VALUES ('1', 'Modern and quirky flat', 'About GreatSchools\r\nGreatSchools ratings based on test scores and additional metrics when available.\r\n\r\nAbout the ratings: Historically, GreatSchools ratings have been based solely on a comparison of standardized test results for all schools in a given state. As of September 2017, the GreatSchools ratings also incorporate additional information, when available, such as college readiness, academic progress, advanced courses, equity, discipline and attendance data. GreatSchools ratings are designed to be a starting point to help parents compare schools, and should not be the only factor used in selecting the right school for your family. Learn more\r\n\r\nDisclaimer: School attendance zone boundaries are provided by a third party and subject to change. Check with the applicable school district prior to making a decision based on these boundaries. In addition, school data is obtained from a third party vendor and not guaranteed to be accurate, up to date or complete.', '1', '1', '1', null, null, null);
INSERT INTO `properties` VALUES ('2', 'Centrally Located Office', 'Renovated 1st floor 2 bedroom, 1 bathroom apartment available January 2020. We are looking for a great tenant to fill this space! The apartment is in close proximity to Temple University and it is easy to access any part of Philadelphia from this location, especially Center City. Contact us as soon as possible. This apartment will not be available for long. :-) Tenant is responsible for gas and electric bills, must remove all trash from building, and respect other tenants.\r\n', null, '1', '2', null, null, null);
INSERT INTO `properties` VALUES ('3', 'Comfortable family house', 'Fantastic 3 bedroom 2 bath available December 1st! This modern apartment was renovated only 3 years ago! High end finishes throughout including granite counter tops, stainless steel appliances, hardwood floors and washer/dryers in the unit. Call to schedule a showing today!\r\n', '1', '2', '3', null, null, null);
INSERT INTO `properties` VALUES ('4', 'Spacious and warm flat', 'Lofts 640 offers you the \"most bang for your buck\" in Philadelphia! Included with your monthly rental price is indoor parking, fitness center, indoor/heated pool and hot tub with attached outdoor roof deck, yoga/fitness studio, cyber lounge, 24/7 front desk attendant and more!! Walk off the busy street into 640 North Broad and enter an urban space that combines the old with the new. Feel the past mix with a refreshing dose of hip, understated sophistication. The original character of the building is not lost but enhanced by modern accents and furnishings. A thriving community dwells within our walls -- a fitness center, cyber lounge and yoga studio serve to nurture body, mind and spirit. Setting the night sky aglow, our glass-domed pool house is the perfect place to unwind. Go for a swim, relax your muscles in the hot tub, or meet and socialize on the roof deck lounge. Enter the lobby, your public space. Experience orange as it bursts in the artwork and pours from geometric ceiling lights that warm the mocha-colored floors. Accented with a healthy dose of pure white and stainless steel, contrast brings together the energizing elements of your entrance. Lofts 640 is just six (6) blocks north of City Hall on Broad Street. Lofts 640 is centrally located to Philadelphia shoppes, restaurants, hospitals and the thriving community of Fairmount. Minutes from Reading Terminal Market and the Pennsylvania Convention Center, Lofts 640 combines commuter convenience of center city living with spectacular urban spaciousness of true loft living.\r\n', null, '2', '4', null, null, null);
INSERT INTO `properties` VALUES ('5', 'House with a pool', 'The entire new construction home is yours to enjoy! When you enter the house the first floor of the home, there is a full bathroom (walk-in shower), 1 of the 3 bedrooms, kitchen & family room. There is a door off of the kitchen which leads to a private deck outside. On the second floor you will find the washer/dryer and the 2 other private bedrooms along with a 2 full bathrooms. This home is a great place for couples, business travelers, & families! Rent month to month, annual lease available!\r\n', null, '3', '5', null, null, null);
INSERT INTO `properties` VALUES ('6', 'Bright and sunny house', 'About GreatSchools\r\nGreatSchools ratings based on test scores and additional metrics when available.\r\n\r\nAbout the ratings: Historically, GreatSchools ratings have been based solely on a comparison of standardized test results for all schools in a given st', '1', '3', '6', null, null, null);
INSERT INTO `properties` VALUES ('7', 'Luxury office space', 'This is a cute 1 bedroom apt. plenty of cabinet space in kitchen walk in closet in master bedroom. the 2nd bedroom is great for small kid or a reading, gaming, or study room. you got to check this out.', '1', '4', '7', null, null, null);
INSERT INTO `properties` VALUES ('8', 'Centrally located apartment', 'Beautiful and newly renovated apartment. Near public transportation. Tenant pays their own utilities: Heat, water, and gas.\r\n', '1', '4', '1', null, null, null);
INSERT INTO `properties` VALUES ('9', 'Morgan Apartments', 'Within walking distance of OARDC/ATI Wooster campus. Large eat-in kitchen with appliances. Bathroom has shower only. Parking is limited so only one vehicle is permitted. Non-smoking. Assist animals only. Requires first month\'s rent and deposit.', null, '5', '2', null, null, null);
INSERT INTO `properties` VALUES ('10', 'Greyson', 'With access to world-class amenities and a prime location just minutes from the Mall at Tuttle Crossing, our beautifully designed apartments give residents the best of both worlds. Welcome to The Greyson, a brand new community', null, '6', '3', null, null, null);
INSERT INTO `properties` VALUES ('11', 'Orchard of Landen', 'School attendance zone boundaries are provided by a third party and subject to change. Check with the applicable school district prior to making a decision based on these boundaries.', '1', '7', '4', null, null, null);
INSERT INTO `properties` VALUES ('12', 'Devolld Cemetery Ln', 'LARGE SUNNY 2 BEDROOM WITH BEAUTIFUL REAL HARDWOOD floors, high ceilings, and NEW STAINLESS APPLIANCES! Quiet, secure and well-cared-for historic building in Wash West/Midtown Village, right in the center of the city near all transportation and bike lanes. 2 blocks from Jefferson! High ceilings, original touches and responsive owner/ landlord! FEATURING: *2 SUNNY EQUAL-SIZE BEDROOMS! GREAT FOR ROOMMATES OR HOME OFFICE! *MODERN SEPARATE OPEN KITCHEN WITH NEW STAINLESS STEEL APPLIANCES - FREE GAS COOKING AND FULL-SIZE REFRIGERATOR & MICROWAVE *HUGE LIVING/DINING AREA, CABLE READY, WITH CEILING FAN & STUDY AREA *BIG BRIGHT TILED BATH WITH UNIQUE OPEN SKYLIGHT & FULL SIZE TUB *GREAT CLOSET SPACE THROUGHOUT! *PRIVATE TOP FLOOR LOCATION - BUILT IN AC UNIT! ENJOY GREAT SPACE IN THE BEST NEIGHBORHOOD OF CENTER CITY! CLOSE TO EVERYTHING CENTER CITY HAS TO OFFER - INCLUDING JEFFERSON, UNIVERSITY OF THE ARTS, U OF P, PENNSYLVANIA ; HAHNEMANN MEDICAL CENTERS, RESTAURANTS AND GASTROPUBS GALORE! PET FRIENDLY WITH PET FEE & DEPOSIT - LAUNDRY IN BASEMENT Owner pays heat, cold & hot water, cooking, trash & recycling removal. Rent: $2,200 Application Fee: $55 Security Deposit: $2,200 Available Now\r\n', null, '4', '5', null, null, null);
INSERT INTO `properties` VALUES ('13', 'Red Fox Ln', 'Available now this new construction first floor 2 bedroom, 2 bath unit comes equipped with range, refrigerator, microwave, dishwasher, disposal, washer, dryer, gas heat, central air, covered porch/patio, park at your door, flexible leasing available.', null, '1', '3', null, null, null);
INSERT INTO `properties` VALUES ('14', 'Falls Bridge Lofts', 'Beautifully remodeled bathrooms, fresh paint, hardwood floors, LARGE master bedroom with it\'s own FULL bathroom. Tons of storage space in the basement and full one car garage with off street parking. Owner pays trash and sewer.', null, '1', '4', null, null, null);
INSERT INTO `properties` VALUES ('15', 'Sparkle flat', 'Beautiful and newly renovated apartment. Near public transportation. Tenant pays their own utilities: Heat, water, and gas.\r\n', '1', '2', '2', null, null, null);

-- ----------------------------
-- Table structure for property_additional_features
-- ----------------------------
DROP TABLE IF EXISTS `property_additional_features`;
CREATE TABLE `property_additional_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of property_additional_features
-- ----------------------------
INSERT INTO `property_additional_features` VALUES ('1', '1', 'Heat', 'Natural Gas', null, null);
INSERT INTO `property_additional_features` VALUES ('2', '1', 'Roof', 'Composition/Shingle', null, null);
INSERT INTO `property_additional_features` VALUES ('4', '1', 'Floors', 'Wall-to-Wall Carpet', '2019-11-12 20:08:27.000000', '2019-11-12 20:08:27.000000');
INSERT INTO `property_additional_features` VALUES ('5', '1', 'Water', 'District/Public', null, null);
INSERT INTO `property_additional_features` VALUES ('6', '2', 'Cross Streets', 'Orangethorpe-Gilbert', null, null);
INSERT INTO `property_additional_features` VALUES ('7', '2', 'Windows', 'Skylights', null, null);
INSERT INTO `property_additional_features` VALUES ('8', '2', 'Childroom', '2', null, null);
INSERT INTO `property_additional_features` VALUES ('9', '3', 'Flat', '5', null, null);
INSERT INTO `property_additional_features` VALUES ('10', '3', 'Heat', 'Electricity', null, null);
INSERT INTO `property_additional_features` VALUES ('11', '4', 'Heat', 'Natural Gas', null, null);
INSERT INTO `property_additional_features` VALUES ('12', '4', 'Roof', 'Compostion/Shingle', null, null);
INSERT INTO `property_additional_features` VALUES ('13', '4', 'Floors', 'Wall-to-Wall Carpet', null, null);
INSERT INTO `property_additional_features` VALUES ('14', '5', 'Water', 'District/Public', null, null);
INSERT INTO `property_additional_features` VALUES ('15', '5', 'Cross Streets', 'Orangethorpe-Gilbert', null, null);
INSERT INTO `property_additional_features` VALUES ('16', '5', 'Windows', 'Skylights', null, null);
INSERT INTO `property_additional_features` VALUES ('17', '5', 'Childroom', '1', null, null);
INSERT INTO `property_additional_features` VALUES ('18', '6', 'Flat', '3', null, null);
INSERT INTO `property_additional_features` VALUES ('19', '6', 'Heat', 'Natural Gas', null, null);
INSERT INTO `property_additional_features` VALUES ('20', '6', 'Roof', 'Composition/Shingle', null, null);
INSERT INTO `property_additional_features` VALUES ('21', '6', 'Floors', '2', null, null);
INSERT INTO `property_additional_features` VALUES ('22', '7', 'Water', 'District/Public', null, null);
INSERT INTO `property_additional_features` VALUES ('23', '7', 'Cross Streets', 'Orangethorpe-Gilbert', null, null);
INSERT INTO `property_additional_features` VALUES ('24', '8', 'Windows', 'Skylights', null, null);
INSERT INTO `property_additional_features` VALUES ('25', '8', 'Childroom', '3', null, null);
INSERT INTO `property_additional_features` VALUES ('26', '8', 'Flat', '2', null, null);
INSERT INTO `property_additional_features` VALUES ('27', '9', 'Heat', 'Natural Gas', null, null);
INSERT INTO `property_additional_features` VALUES ('28', '9', 'Roof', 'Composition/Shingle', null, null);
INSERT INTO `property_additional_features` VALUES ('29', '9', 'Floors', '3', null, null);
INSERT INTO `property_additional_features` VALUES ('30', '9', 'Water', 'District/Public', null, null);
INSERT INTO `property_additional_features` VALUES ('31', '10', 'Cross Streets', 'Orangethorpe-Gilbert', null, null);
INSERT INTO `property_additional_features` VALUES ('32', '10', 'Windows', 'Skylights', null, null);
INSERT INTO `property_additional_features` VALUES ('33', '10', 'Childroom', '2', null, null);
INSERT INTO `property_additional_features` VALUES ('34', '11', 'Flat', '4', null, null);
INSERT INTO `property_additional_features` VALUES ('35', '11', 'Heat', 'Natural Gas', null, null);
INSERT INTO `property_additional_features` VALUES ('36', '11', 'Roof', 'Composition/Shingle', null, null);
INSERT INTO `property_additional_features` VALUES ('37', '11', 'Floors', '3', null, null);
INSERT INTO `property_additional_features` VALUES ('38', '11', 'Water', 'District/Public', null, null);
INSERT INTO `property_additional_features` VALUES ('39', '11', 'Cross Streets', 'Orangethorpe-Gilbert', null, null);
INSERT INTO `property_additional_features` VALUES ('40', '11', 'Windows', 'Skylights', null, null);
INSERT INTO `property_additional_features` VALUES ('41', '12', 'Childroom', '3', null, null);
INSERT INTO `property_additional_features` VALUES ('42', '12', 'Flat', '2', null, null);
INSERT INTO `property_additional_features` VALUES ('43', '12', 'Heat', 'Natural Gas', null, null);
INSERT INTO `property_additional_features` VALUES ('44', '13', 'Roof', 'Composition/Shingle', null, null);
INSERT INTO `property_additional_features` VALUES ('45', '13', 'Floors', '2', null, null);
INSERT INTO `property_additional_features` VALUES ('46', '13', 'Water', 'District/Public', null, null);
INSERT INTO `property_additional_features` VALUES ('47', '13', 'Cross Streets', 'Orangethorpe-Gilbert', null, null);
INSERT INTO `property_additional_features` VALUES ('48', '14', 'Windows', 'Skylights', null, null);
INSERT INTO `property_additional_features` VALUES ('49', '14', 'Childroom', '1', null, null);
INSERT INTO `property_additional_features` VALUES ('50', '14', 'Flat', '2', null, null);
INSERT INTO `property_additional_features` VALUES ('51', '15', 'Heat', 'Natural Gas', null, null);
INSERT INTO `property_additional_features` VALUES ('52', '15', 'Roof', 'Composition/Shingle', null, null);
INSERT INTO `property_additional_features` VALUES ('53', '15', 'Floors', '2', null, null);
INSERT INTO `property_additional_features` VALUES ('54', '15', 'Water', 'District/Public', null, null);
INSERT INTO `property_additional_features` VALUES ('55', '15', 'Cross Streets', 'Orangethorpe-Gilbert', null, null);

-- ----------------------------
-- Table structure for property_details
-- ----------------------------
DROP TABLE IF EXISTS `property_details`;
CREATE TABLE `property_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=303 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of property_details
-- ----------------------------
INSERT INTO `property_details` VALUES ('1', '1', 'city', 'Chester', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('2', '1', 'zipcode', '551', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('3', '1', 'neighborhood', 'vel eget mauris', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('4', '1', 'street', 'E Venango St', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('5', '1', 'lat', '41.326', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('6', '1', 'lng', '77.8982', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('7', '1', 'address', 'viverra faucibus ante', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('8', '1', 'price_dollar_sale', '927376', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('9', '1', 'price_dollar_rent', '7700', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('10', '1', 'price_euro_sale', '772813', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('11', '1', 'price_euro_rent', '6416', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('12', '1', 'bedrooms', '5', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('13', '1', 'bathrooms', '2', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('14', '1', 'garages', '1', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('15', '1', 'area', '5227', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('16', '1', 'year', '2003', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('17', '1', 'ratings_count', '27', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('18', '1', 'ratings_value', '1.77', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('19', '1', 'published', '2016-5-19', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('20', '1', 'views', '122', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('21', '2', 'city', 'Clairton', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('22', '2', 'zipcode', '576', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('23', '2', 'neighborhood', 'Phasellus eros Maecenas', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('24', '2', 'street', 'Eddington St', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES ('25', '2', 'lat', '41.4836', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('26', '2', 'lng', '77.447', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('27', '2', 'address', 'Lorem justo dictum', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('28', '2', 'price_dollar_sale', '291125', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('29', '2', 'price_dollar_rent', '2353', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('30', '2', 'price_euro_sale', '242604', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('31', '2', 'price_euro_rent', '1960', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('32', '2', 'bedrooms', '4', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('33', '2', 'bathrooms', '2', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('34', '2', 'garages', '1', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('35', '2', 'area', '5617', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('36', '2', 'year', '2016', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('37', '2', 'ratings_count', '8', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('38', '2', 'ratings_value', '1.76', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('39', '2', 'published', '2012-1-9', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('40', '2', 'views', '79', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('41', '3', 'city', 'Corry', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('42', '3', 'zipcode', '344', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('43', '3', 'neighborhood', 'ut rhoncus quam', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('44', '3', 'street', 'Erwin St', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('45', '3', 'lat', '41.7451', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('46', '3', 'lng', '77.4484', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('47', '3', 'address', 'eget parturient velit', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('48', '3', 'price_dollar_sale', '288985', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('49', '3', 'price_dollar_rent', '3125', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('50', '3', 'price_euro_sale', '240820', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('51', '3', 'price_euro_rent', '2604', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('52', '3', 'bedrooms', '3', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('53', '3', 'bathrooms', '2', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('54', '3', 'garages', '1', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('55', '3', 'area', '5619', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('56', '3', 'year', '2008', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('57', '3', 'ratings_count', '26', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('58', '3', 'ratings_value', '2.82', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES ('59', '3', 'published', '2011-1-19', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('60', '3', 'views', '104', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('61', '4', 'city', 'Hazleton', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('62', '4', 'zipcode', '903', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('63', '4', 'neighborhood', 'dapibus elementum porttitor', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('64', '4', 'street', 'Gerry St', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('65', '4', 'lat', '41.1288', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('66', '4', 'lng', '77.4368', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('67', '4', 'address', 'et sit Aliquam', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('68', '4', 'price_dollar_sale', '558743', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('69', '4', 'price_dollar_rent', '18691', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('70', '4', 'price_euro_sale', '465619', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('71', '4', 'price_euro_rent', '15575', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('72', '4', 'bedrooms', '5', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('73', '4', 'bathrooms', '2', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('74', '4', 'garages', '1', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('75', '4', 'area', '4482', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('76', '4', 'year', '2000', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('77', '4', 'ratings_count', '24', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('78', '4', 'ratings_value', '4.85', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('79', '4', 'published', '2016-8-5', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('80', '4', 'views', '92', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('81', '5', 'city', 'Johnstown', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('82', '5', 'zipcode', '548', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('83', '5', 'neighborhood', 'Nam pulvinar Donec', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('84', '5', 'street', 'Harpers Pl', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('85', '5', 'lat', '41.2299', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('86', '5', 'lng', '77.5132', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('87', '5', 'address', 'sapien Quisque leo', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('88', '5', 'price_dollar_sale', '261924', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('89', '5', 'price_dollar_rent', '2310', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('90', '5', 'price_euro_sale', '218270', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('91', '5', 'price_euro_rent', '1925', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('92', '5', 'bedrooms', '3', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('93', '5', 'bathrooms', '1', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('94', '5', 'garages', '1', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('95', '5', 'area', '4417', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES ('96', '5', 'year', '2004', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('97', '5', 'ratings_count', '13', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('98', '5', 'ratings_value', '1.32', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('99', '5', 'published', '2011-6-1', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('100', '5', 'views', '60', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('101', '6', 'city', 'Latrobe', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('102', '6', 'zipcode', '207', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('103', '6', 'neighborhood', 'ut augue tempus', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('104', '6', 'street', 'Inwood Ln', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('105', '6', 'lat', '41.0048', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('106', '6', 'lng', '77.4552', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('107', '6', 'address', 'nec sit blandit', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('108', '6', 'price_dollar_sale', '100914', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('109', '6', 'price_dollar_rent', '11824', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('110', '6', 'price_euro_sale', '84095', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('111', '6', 'price_euro_rent', '9853', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('112', '6', 'bedrooms', '3', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('113', '6', 'bathrooms', '2', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('114', '6', 'garages', '2', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('115', '6', 'area', '5393', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('116', '6', 'year', '2004', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('117', '6', 'ratings_count', '11', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('118', '6', 'ratings_value', '2.45', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('119', '6', 'published', '2015-10-25', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('120', '6', 'views', '116', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('121', '7', 'city', 'Pittston', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('122', '7', 'zipcode', '936', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('123', '7', 'neighborhood', 'fringilla sociis velit', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('124', '7', 'street', 'Kirkwood Rd', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('125', '7', 'lat', '41.6554', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('126', '7', 'lng', '77.0605', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('127', '7', 'address', 'pretium eu hendrerit', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('128', '7', 'price_dollar_sale', '230033', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('129', '7', 'price_dollar_rent', '5266', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('130', '7', 'price_euro_sale', '191694', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('131', '7', 'price_euro_rent', '4388', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('132', '7', 'bedrooms', '3', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES ('133', '7', 'bathrooms', '1', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('134', '7', 'garages', '2', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('135', '7', 'area', '5540', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('136', '7', 'year', '2010', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('137', '7', 'ratings_count', '11', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('138', '7', 'ratings_value', '2.76', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('139', '7', 'published', '2015-11-20', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('140', '7', 'views', '15', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('141', '8', 'city', 'Sharon', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('142', '8', 'zipcode', '382', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('143', '8', 'neighborhood', 'ultricies vel eros', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('144', '8', 'street', 'Linmore Ave', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('145', '8', 'lat', '41.5521', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('146', '8', 'lng', '77.4826', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('147', '8', 'address', 'ipsum dictum justo', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('148', '8', 'price_dollar_sale', '573664', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('149', '8', 'price_dollar_rent', '4577', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('150', '8', 'price_euro_sale', '478053', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('151', '8', 'price_euro_rent', '3814', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('152', '8', 'bedrooms', '3', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('153', '8', 'bathrooms', '1', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('154', '8', 'garages', '2', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('155', '8', 'area', '4680', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('156', '8', 'year', '2007', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('157', '8', 'ratings_count', '6', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('158', '8', 'ratings_value', '0.3', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('159', '8', 'published', '2016-11-27', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('160', '8', 'views', '16', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES ('161', '9', 'city', 'Washington', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('162', '9', 'zipcode', '463', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('163', '9', 'neighborhood', 'eget fringilla ante', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('164', '9', 'street', 'Marigold Ln', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('165', '9', 'lat', '41.116', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('166', '9', 'lng', '77.7837', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('167', '9', 'address', 'ut augue vel', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('168', '9', 'price_dollar_sale', '776670', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('169', '9', 'price_dollar_rent', '30243', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('170', '9', 'price_euro_sale', '647225', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('171', '9', 'price_euro_rent', '25202', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('172', '9', 'bedrooms', '2', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('173', '9', 'bathrooms', '2', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('174', '9', 'garages', '1', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('175', '9', 'area', '3860', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('176', '9', 'year', '2007', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('177', '9', 'ratings_count', '17', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('178', '9', 'ratings_value', '3.02', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('179', '9', 'published', '2015-4-7', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('180', '9', 'views', '7', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('181', '10', 'city', 'Warren', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('182', '10', 'zipcode', '805', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('183', '10', 'neighborhood', 'Cras tellus Nam', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('184', '10', 'street', 'Morning Glory Rd', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('185', '10', 'lat', '41.5234', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('186', '10', 'lng', '77.4472', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('187', '10', 'address', 'leo ipsum justo', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('188', '10', 'price_dollar_sale', '657313', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('189', '10', 'price_dollar_rent', '6310', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('190', '10', 'price_euro_sale', '547760', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('191', '10', 'price_euro_rent', '5258', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('192', '10', 'bedrooms', '5', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('193', '10', 'bathrooms', '2', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('194', '10', 'garages', '1', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('195', '10', 'area', '3842', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES ('196', '10', 'year', '2014', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('197', '10', 'ratings_count', '16', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('198', '10', 'ratings_value', '2.48', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('199', '10', 'published', '2013-11-17', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('200', '10', 'views', '57', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('201', '11', 'city', 'Parker', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('202', '11', 'zipcode', '194', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('203', '11', 'neighborhood', 'velit dui fringilla', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('204', '11', 'street', 'N Convent Ln', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('205', '11', 'lat', '41.3222', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('206', '11', 'lng', '77.3871', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('207', '11', 'address', 'felis tincidunt eleifend', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('208', '11', 'price_dollar_sale', '903963', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('209', '11', 'price_dollar_rent', '9755', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('210', '11', 'price_euro_sale', '753302', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('211', '11', 'price_euro_rent', '8129', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('212', '11', 'bedrooms', '2', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('213', '11', 'bathrooms', '2', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('214', '11', 'garages', '2', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('215', '11', 'area', '2364', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('216', '11', 'year', '2007', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('217', '11', 'ratings_count', '10', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('218', '11', 'ratings_value', '0.29', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES ('219', '11', 'published', '2011-1-3', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('220', '11', 'views', '30', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('221', '12', 'city', 'Chester', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('222', '12', 'zipcode', '301', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('223', '12', 'neighborhood', 'libero vulputate a', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('224', '12', 'street', 'Napfle St', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('225', '12', 'lat', '41.0083', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('226', '12', 'lng', '77.7044', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('227', '12', 'address', 'leo tincidunt feugiat', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('228', '12', 'price_dollar_sale', '993669', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('229', '12', 'price_dollar_rent', '11013', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('230', '12', 'price_euro_sale', '828057', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('231', '12', 'price_euro_rent', '9177', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('232', '12', 'bedrooms', '2', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('233', '12', 'bathrooms', '2', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('234', '12', 'garages', '2', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('235', '12', 'area', '2902', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('236', '12', 'year', '2007', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('237', '12', 'ratings_count', '20', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('238', '12', 'ratings_value', '3', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('239', '12', 'published', '2015-9-1', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('240', '12', 'views', '0', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('241', '13', 'city', 'Clairton', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('242', '13', 'zipcode', '789', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('243', '13', 'neighborhood', 'velit dictum eget', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('244', '13', 'street', 'Oak Lane Rd', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('245', '13', 'lat', '41.2605', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('246', '13', 'lng', '77.1827', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('247', '13', 'address', 'mauris viverra nisi', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('248', '13', 'price_dollar_sale', '334727', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('249', '13', 'price_dollar_rent', '138123', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('250', '13', 'price_euro_sale', '278939', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('251', '13', 'price_euro_rent', '115102', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('252', '13', 'bedrooms', '2', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES ('253', '13', 'bathrooms', '2', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('254', '13', 'garages', '2', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('255', '13', 'area', '4695', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('256', '13', 'year', '2000', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('257', '13', 'ratings_count', '25', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('258', '13', 'ratings_value', '3.11', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('259', '13', 'published', '2012-7-17', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('260', '13', 'views', '96', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('261', '14', 'city', 'Corry', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('262', '14', 'zipcode', '872', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('263', '14', 'neighborhood', 'tempus In Etiam', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('264', '14', 'street', 'E Venango St', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('265', '14', 'lat', '41.7689', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('266', '14', 'lng', '77.5856', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('267', '14', 'address', 'Aenean commodo amet', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('268', '14', 'price_dollar_sale', '714590', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('269', '14', 'price_dollar_rent', '5222', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('270', '14', 'price_euro_sale', '595491', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('271', '14', 'price_euro_rent', '4351', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('272', '14', 'bedrooms', '3', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('273', '14', 'bathrooms', '2', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('274', '14', 'garages', '1', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('275', '14', 'area', '3756', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('276', '14', 'year', '2011', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('277', '14', 'ratings_count', '12', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('278', '14', 'ratings_value', '3.98', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('279', '14', 'published', '2012-10-3', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('280', '14', 'views', '101', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('281', '15', 'city', 'Hazleton', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('282', '15', 'zipcode', '485', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('283', '15', 'neighborhood', 'pulvinar hendrerit nec', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('284', '15', 'street', 'Eddington St', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('285', '15', 'lat', '41.7825', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('286', '15', 'lng', '77.1704', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('287', '15', 'address', 'viverra fringilla Quisque', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('288', '15', 'price_dollar_sale', '1074196', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('289', '15', 'price_dollar_rent', '610655', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('290', '15', 'price_euro_sale', '895163', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('291', '15', 'price_euro_rent', '508879', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES ('292', '15', 'bedrooms', '5', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES ('293', '15', 'bathrooms', '2', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES ('294', '15', 'garages', '2', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES ('295', '15', 'area', '4171', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES ('296', '15', 'year', '2008', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES ('297', '15', 'ratings_count', '22', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES ('298', '15', 'ratings_value', '0.84', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES ('299', '15', 'published', '2012-12-14', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES ('300', '15', 'views', '41', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES ('301', '25', 'city', 'boston', '2019-12-18 18:20:41.000000', '2019-12-18 18:20:41.000000');
INSERT INTO `property_details` VALUES ('302', '25', 'zipcode', '123', '2019-12-18 18:20:41.000000', '2019-12-18 18:20:41.000000');

-- ----------------------------
-- Table structure for property_features
-- ----------------------------
DROP TABLE IF EXISTS `property_features`;
CREATE TABLE `property_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of property_features
-- ----------------------------
INSERT INTO `property_features` VALUES ('1', 'Air Conditioning', null, null);
INSERT INTO `property_features` VALUES ('2', 'Barbeque', null, null);
INSERT INTO `property_features` VALUES ('3', 'Dryer', null, null);
INSERT INTO `property_features` VALUES ('4', 'Microwave', null, null);
INSERT INTO `property_features` VALUES ('5', 'Refrigerator', null, null);
INSERT INTO `property_features` VALUES ('6', 'Fireplace', null, null);
INSERT INTO `property_features` VALUES ('7', 'Swimming Pool', null, null);
INSERT INTO `property_features` VALUES ('8', 'TV Cable', null, null);
INSERT INTO `property_features` VALUES ('9', 'Wifi', null, null);

-- ----------------------------
-- Table structure for property_feature_pivot
-- ----------------------------
DROP TABLE IF EXISTS `property_feature_pivot`;
CREATE TABLE `property_feature_pivot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `property_feature_id` int(11) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of property_feature_pivot
-- ----------------------------
INSERT INTO `property_feature_pivot` VALUES ('1', '1', '2', null, null);
INSERT INTO `property_feature_pivot` VALUES ('2', '1', '1', null, null);
INSERT INTO `property_feature_pivot` VALUES ('5', '1', '9', '2019-11-12 20:07:50.000000', '2019-11-12 20:07:50.000000');
INSERT INTO `property_feature_pivot` VALUES ('6', '2', '5', null, null);
INSERT INTO `property_feature_pivot` VALUES ('7', '2', '3', null, null);
INSERT INTO `property_feature_pivot` VALUES ('8', '2', '5', null, null);
INSERT INTO `property_feature_pivot` VALUES ('9', '2', '9', null, null);
INSERT INTO `property_feature_pivot` VALUES ('10', '3', '3', null, null);
INSERT INTO `property_feature_pivot` VALUES ('11', '3', '7', null, null);
INSERT INTO `property_feature_pivot` VALUES ('12', '4', '8', null, null);
INSERT INTO `property_feature_pivot` VALUES ('13', '4', '4', null, null);
INSERT INTO `property_feature_pivot` VALUES ('14', '4', '6', null, null);
INSERT INTO `property_feature_pivot` VALUES ('15', '4', '9', null, null);
INSERT INTO `property_feature_pivot` VALUES ('16', '4', '1', null, null);
INSERT INTO `property_feature_pivot` VALUES ('17', '5', '8', null, null);
INSERT INTO `property_feature_pivot` VALUES ('18', '5', '5', null, null);
INSERT INTO `property_feature_pivot` VALUES ('19', '6', '4', null, null);
INSERT INTO `property_feature_pivot` VALUES ('20', '6', '8', null, null);
INSERT INTO `property_feature_pivot` VALUES ('21', '6', '1', null, null);
INSERT INTO `property_feature_pivot` VALUES ('22', '6', '1', null, null);
INSERT INTO `property_feature_pivot` VALUES ('23', '7', '2', null, null);
INSERT INTO `property_feature_pivot` VALUES ('24', '7', '4', null, null);
INSERT INTO `property_feature_pivot` VALUES ('25', '8', '8', null, null);
INSERT INTO `property_feature_pivot` VALUES ('26', '9', '4', null, null);
INSERT INTO `property_feature_pivot` VALUES ('27', '9', '2', null, null);
INSERT INTO `property_feature_pivot` VALUES ('28', '10', '3', null, null);
INSERT INTO `property_feature_pivot` VALUES ('29', '10', '7', null, null);
INSERT INTO `property_feature_pivot` VALUES ('30', '10', '5', null, null);
INSERT INTO `property_feature_pivot` VALUES ('31', '10', '6', null, null);
INSERT INTO `property_feature_pivot` VALUES ('32', '10', '2', null, null);
INSERT INTO `property_feature_pivot` VALUES ('33', '11', '7', null, null);
INSERT INTO `property_feature_pivot` VALUES ('34', '11', '4', null, null);
INSERT INTO `property_feature_pivot` VALUES ('35', '12', '3', null, null);
INSERT INTO `property_feature_pivot` VALUES ('36', '12', '1', null, null);
INSERT INTO `property_feature_pivot` VALUES ('37', '12', '5', null, null);
INSERT INTO `property_feature_pivot` VALUES ('38', '13', '5', null, null);
INSERT INTO `property_feature_pivot` VALUES ('39', '14', '4', null, null);
INSERT INTO `property_feature_pivot` VALUES ('40', '14', '2', null, null);
INSERT INTO `property_feature_pivot` VALUES ('41', '14', '6', null, null);
INSERT INTO `property_feature_pivot` VALUES ('42', '15', '7', null, null);
INSERT INTO `property_feature_pivot` VALUES ('43', '15', '6', null, null);

-- ----------------------------
-- Table structure for property_galleries
-- ----------------------------
DROP TABLE IF EXISTS `property_galleries`;
CREATE TABLE `property_galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `type` enum('Image','Video') DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `attachment_id` int(11) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of property_galleries
-- ----------------------------
INSERT INTO `property_galleries` VALUES ('1', '1', '1', 'Image', null, '1', '2019-11-15 02:22:26.000000', '2019-11-15 02:22:26.000000');
INSERT INTO `property_galleries` VALUES ('2', '1', '2', 'Image', null, '2', '2019-11-15 02:22:26.000000', '2019-11-15 02:22:26.000000');
INSERT INTO `property_galleries` VALUES ('3', '1', '0', 'Video', 'Video Overview', '3', '2019-11-15 02:22:26.000000', '2019-11-15 02:22:26.000000');
INSERT INTO `property_galleries` VALUES ('4', '1', '0', 'Image', null, '4', '2019-11-15 02:22:26.000000', '2019-11-15 02:22:26.000000');
INSERT INTO `property_galleries` VALUES ('5', '1', '0', 'Image', null, '5', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('6', '1', '0', 'Image', null, '6', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('7', '1', '0', 'Image', null, '7', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('8', '1', '0', 'Image', null, '8', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('9', '2', '3', 'Image', null, '9', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('10', '2', '4', 'Image', null, '10', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('11', '2', '0', 'Video', 'Video Overview', '11', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('12', '2', '0', 'Image', null, '12', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('13', '2', '0', 'Image', null, '13', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('14', '2', '0', 'Image', null, '14', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('15', '2', '0', 'Image', null, '15', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('16', '3', '5', 'Image', null, '16', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('17', '3', '6', 'Image', null, '17', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('18', '3', '0', 'Video', 'Video Overview', '18', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('19', '3', '0', 'Image', null, '19', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('20', '3', '0', 'Image', null, '20', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('21', '3', '0', 'Image', null, '21', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('22', '3', '0', 'Image', null, '22', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('23', '3', '0', 'Image', null, '23', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('24', '4', '7', 'Image', null, '24', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('25', '4', '8', 'Image', null, '25', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('26', '4', '0', 'Video', 'Video Overview', '26', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('27', '4', '0', 'Image', null, '27', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('28', '4', '0', 'Image', null, '28', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('29', '4', '0', 'Image', null, '29', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('30', '4', '0', 'Image', null, '30', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('31', '4', '0', 'Image', null, '31', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('32', '4', '0', 'Image', null, '32', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('33', '5', '9', 'Image', null, '33', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('34', '5', '10', 'Image', null, '34', '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES ('35', '5', '0', 'Video', 'Video Overview', '35', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('36', '5', '0', 'Image', null, '36', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('37', '5', '0', 'Image', null, '37', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('38', '5', '0', 'Image', null, '38', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('39', '5', '0', 'Image', null, '39', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('40', '6', '11', 'Image', null, '40', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('41', '6', '12', 'Image', null, '41', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('42', '6', '0', 'Video', 'Video Overview', '42', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('43', '6', '0', 'Image', null, '43', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('44', '6', '0', 'Image', null, '44', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('45', '6', '0', 'Image', null, '45', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('46', '6', '0', 'Image', null, '46', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('47', '7', '13', 'Image', null, '47', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('48', '7', '14', 'Image', null, '48', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('49', '7', '0', 'Video', 'Video Overview', '49', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('50', '7', '0', 'Image', null, '50', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('51', '7', '0', 'Image', null, '51', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('52', '7', '0', 'Image', null, '52', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('53', '7', '0', 'Image', null, '53', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('54', '7', '0', 'Image', null, '54', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('55', '7', '0', 'Image', null, '55', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('56', '8', '15', 'Image', null, '56', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('57', '8', '16', 'Image', null, '57', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('58', '8', '0', 'Video', 'Video Overview', '58', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('59', '8', '0', 'Image', null, '59', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('60', '8', '0', 'Image', null, '60', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('61', '8', '0', 'Image', null, '61', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('62', '8', '0', 'Image', null, '62', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('63', '8', '0', 'Image', null, '63', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('64', '8', '0', 'Image', null, '64', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('65', '9', '17', 'Image', null, '65', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('66', '9', '18', 'Image', null, '66', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('67', '9', '0', 'Video', 'Video Overview', '67', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('68', '9', '0', 'Image', null, '68', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('69', '9', '0', 'Image', null, '69', '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES ('70', '9', '0', 'Image', null, '70', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('71', '9', '0', 'Image', null, '71', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('72', '9', '0', 'Image', null, '72', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('73', '10', '19', 'Image', null, '73', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('74', '10', '20', 'Image', null, '74', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('75', '10', '0', 'Video', 'Video Overview', '75', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('76', '10', '0', 'Image', null, '76', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('77', '10', '0', 'Image', null, '77', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('78', '10', '0', 'Image', null, '78', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('79', '10', '0', 'Image', null, '79', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('80', '11', '21', 'Image', null, '80', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('81', '11', '22', 'Image', null, '81', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('82', '11', '0', 'Video', 'Video Overview', '82', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('83', '11', '0', 'Image', null, '83', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('84', '11', '0', 'Image', null, '84', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('85', '11', '0', 'Image', null, '85', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('86', '11', '0', 'Image', null, '86', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('87', '11', '0', 'Image', null, '87', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('88', '12', '23', 'Image', null, '88', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('89', '12', '24', 'Image', null, '89', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('90', '12', '0', 'Video', 'Video Overview', '90', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('91', '12', '0', 'Image', null, '91', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('92', '12', '0', 'Image', null, '92', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('93', '12', '0', 'Image', null, '93', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('94', '12', '0', 'Image', null, '94', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('95', '12', '0', 'Image', null, '95', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('96', '12', '0', 'Image', null, '96', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('97', '13', '25', 'Image', null, '97', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('98', '13', '26', 'Image', null, '98', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('99', '13', '0', 'Video', 'Video Overview', '99', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('100', '13', '0', 'Image', null, '100', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('101', '13', '0', 'Image', null, '101', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('102', '13', '0', 'Image', null, '102', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('103', '13', '0', 'Image', null, '103', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('104', '14', '27', 'Image', null, '104', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('105', '14', '28', 'Image', null, '105', '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES ('106', '14', '0', 'Video', 'Video Overview', '106', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('107', '14', '0', 'Image', null, '107', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('108', '14', '0', 'Image', null, '108', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('109', '14', '0', 'Image', null, '109', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('110', '14', '0', 'Image', null, '110', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('111', '15', '29', 'Image', null, '111', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('112', '15', '30', 'Image', null, '112', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('113', '15', '0', 'Video', 'Video Overview', '113', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('114', '15', '0', 'Image', null, '114', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('115', '15', '0', 'Image', null, '115', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('116', '15', '0', 'Image', null, '116', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('117', '15', '0', 'Image', null, '117', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('118', '15', '0', 'Image', null, '118', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES ('119', '15', '0', 'Image', null, '119', '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');

-- ----------------------------
-- Table structure for property_plans
-- ----------------------------
DROP TABLE IF EXISTS `property_plans`;
CREATE TABLE `property_plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `area` int(255) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of property_plans
-- ----------------------------
INSERT INTO `property_plans` VALUES ('1', '1', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1180', '3', '2', null, null);
INSERT INTO `property_plans` VALUES ('2', '1', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1200', '5', '1', null, null);
INSERT INTO `property_plans` VALUES ('3', '2', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1342', '4', '2', null, null);
INSERT INTO `property_plans` VALUES ('4', '2', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2513', '3', '2', null, null);
INSERT INTO `property_plans` VALUES ('5', '3', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2321', '4', '2', null, null);
INSERT INTO `property_plans` VALUES ('6', '3', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '3146', '6', '1', null, null);
INSERT INTO `property_plans` VALUES ('7', '4', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1422', '5', '1', null, null);
INSERT INTO `property_plans` VALUES ('8', '4', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1352', '3', '2', null, null);
INSERT INTO `property_plans` VALUES ('9', '5', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2653', '4', '2', null, null);
INSERT INTO `property_plans` VALUES ('10', '5', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1241', '6', '1', null, null);
INSERT INTO `property_plans` VALUES ('11', '6', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1864', '5', '1', null, null);
INSERT INTO `property_plans` VALUES ('12', '6', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1853', '4', '1', null, null);
INSERT INTO `property_plans` VALUES ('13', '7', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1643', '3', '2', null, null);
INSERT INTO `property_plans` VALUES ('14', '7', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1753', '4', '2', null, null);
INSERT INTO `property_plans` VALUES ('15', '8', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1856', '5', '2', null, null);
INSERT INTO `property_plans` VALUES ('16', '8', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1367', '4', '1', null, null);
INSERT INTO `property_plans` VALUES ('17', '9', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2639', '4', '1', null, null);
INSERT INTO `property_plans` VALUES ('18', '9', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2853', '5', '2', null, null);
INSERT INTO `property_plans` VALUES ('19', '10', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2658', '6', '1', null, null);
INSERT INTO `property_plans` VALUES ('20', '10', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2534', '6', '2', null, null);
INSERT INTO `property_plans` VALUES ('21', '11', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1464', '5', '2', null, null);
INSERT INTO `property_plans` VALUES ('22', '11', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2643', '3', '2', null, null);
INSERT INTO `property_plans` VALUES ('23', '12', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2574', '5', '2', null, null);
INSERT INTO `property_plans` VALUES ('24', '12', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2126', '3', '2', null, null);
INSERT INTO `property_plans` VALUES ('25', '13', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1362', '4', '2', null, null);
INSERT INTO `property_plans` VALUES ('26', '13', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1373', '5', '1', null, null);
INSERT INTO `property_plans` VALUES ('27', '14', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1325', '6', '1', null, null);
INSERT INTO `property_plans` VALUES ('28', '14', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1586', '6', '2', null, null);
INSERT INTO `property_plans` VALUES ('29', '15', 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '1964', '3', '2', null, null);
INSERT INTO `property_plans` VALUES ('30', '15', 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', '2064', '4', '1', null, null);

-- ----------------------------
-- Table structure for property_statuses
-- ----------------------------
DROP TABLE IF EXISTS `property_statuses`;
CREATE TABLE `property_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of property_statuses
-- ----------------------------
INSERT INTO `property_statuses` VALUES ('1', 'For Rent', null, null);
INSERT INTO `property_statuses` VALUES ('2', 'For Sale', null, null);
INSERT INTO `property_statuses` VALUES ('3', 'Open House', null, null);
INSERT INTO `property_statuses` VALUES ('4', 'No Fees', null, null);
INSERT INTO `property_statuses` VALUES ('5', 'Hot Offer', null, null);
INSERT INTO `property_statuses` VALUES ('6', 'Sold', null, null);

-- ----------------------------
-- Table structure for property_status_pivot
-- ----------------------------
DROP TABLE IF EXISTS `property_status_pivot`;
CREATE TABLE `property_status_pivot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `property_status_id` int(11) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of property_status_pivot
-- ----------------------------
INSERT INTO `property_status_pivot` VALUES ('1', '1', '1', null, null);
INSERT INTO `property_status_pivot` VALUES ('2', '1', '3', null, null);
INSERT INTO `property_status_pivot` VALUES ('3', '2', '6', '2019-11-12 20:11:42.000000', '2019-11-12 20:11:42.000000');
INSERT INTO `property_status_pivot` VALUES ('4', '3', '2', null, null);
INSERT INTO `property_status_pivot` VALUES ('5', '4', '2', null, null);
INSERT INTO `property_status_pivot` VALUES ('6', '4', '4', null, null);
INSERT INTO `property_status_pivot` VALUES ('7', '5', '1', null, null);
INSERT INTO `property_status_pivot` VALUES ('8', '6', '6', null, null);
INSERT INTO `property_status_pivot` VALUES ('9', '7', '5', null, null);
INSERT INTO `property_status_pivot` VALUES ('10', '7', '2', null, null);
INSERT INTO `property_status_pivot` VALUES ('11', '8', '1', null, null);
INSERT INTO `property_status_pivot` VALUES ('12', '9', '6', null, null);
INSERT INTO `property_status_pivot` VALUES ('13', '10', '1', null, null);
INSERT INTO `property_status_pivot` VALUES ('14', '10', '5', null, null);
INSERT INTO `property_status_pivot` VALUES ('15', '11', '2', null, null);
INSERT INTO `property_status_pivot` VALUES ('16', '12', '2', null, null);
INSERT INTO `property_status_pivot` VALUES ('17', '12', '4', null, null);
INSERT INTO `property_status_pivot` VALUES ('18', '13', '6', null, null);
INSERT INTO `property_status_pivot` VALUES ('19', '14', '6', null, null);
INSERT INTO `property_status_pivot` VALUES ('20', '15', '2', null, null);
INSERT INTO `property_status_pivot` VALUES ('21', '15', '3', null, null);

-- ----------------------------
-- Table structure for property_types
-- ----------------------------
DROP TABLE IF EXISTS `property_types`;
CREATE TABLE `property_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of property_types
-- ----------------------------
INSERT INTO `property_types` VALUES ('1', 'Apartment', null, null);
INSERT INTO `property_types` VALUES ('2', 'House', null, null);
INSERT INTO `property_types` VALUES ('3', 'Multi-Plex', null, null);
INSERT INTO `property_types` VALUES ('4', 'Commercial', null, null);
INSERT INTO `property_types` VALUES ('5', 'Land', null, null);
INSERT INTO `property_types` VALUES ('6', 'Townhouse', null, null);
INSERT INTO `property_types` VALUES ('7', 'RV', null, null);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Admin', 'Administrator', '2020-04-27 17:22:42', '2020-04-27 17:22:44');
INSERT INTO `roles` VALUES ('2', 'Seller', 'selling', '2020-04-27 17:23:07', '2020-04-27 17:23:10');
INSERT INTO `roles` VALUES ('3', 'Rentor', 'rentor', '2020-04-27 17:23:21', '2020-04-27 17:23:23');
INSERT INTO `roles` VALUES ('4', 'PropertyManager', 'property manager', '2020-04-29 09:33:28', '2020-04-29 09:33:31');
INSERT INTO `roles` VALUES ('5', 'CompanyAdmin', 'company admin', '2020-04-29 09:33:33', '2020-04-29 09:33:34');

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES ('1', '1', '9', '2020-04-27 17:35:40', '2020-04-27 17:35:43');
INSERT INTO `role_user` VALUES ('2', '2', '1', '2020-04-27 19:02:55', '2020-04-27 19:02:58');
INSERT INTO `role_user` VALUES ('3', '3', '2', '2020-04-27 19:03:02', '2020-04-27 19:03:04');
INSERT INTO `role_user` VALUES ('4', '2', '3', '2020-04-27 19:03:08', '2020-04-27 19:03:09');
INSERT INTO `role_user` VALUES ('5', '2', '4', '2020-04-27 19:03:10', '2020-04-27 19:03:11');
INSERT INTO `role_user` VALUES ('6', '2', '5', '2020-04-27 19:03:12', '2020-04-27 19:03:13');
INSERT INTO `role_user` VALUES ('7', '3', '6', '2020-04-27 19:03:13', '2020-04-27 19:03:14');
INSERT INTO `role_user` VALUES ('8', '2', '7', '2020-04-27 19:03:15', '2020-04-27 19:03:16');
INSERT INTO `role_user` VALUES ('9', '3', '8', '2020-04-27 19:03:16', '2020-04-27 19:03:17');
INSERT INTO `role_user` VALUES ('10', '2', '14', '2020-04-29 06:49:25', '2020-04-29 06:49:25');
INSERT INTO `role_user` VALUES ('11', '2', '16', '2020-04-29 07:05:12', '2020-04-29 07:05:12');
INSERT INTO `role_user` VALUES ('12', '2', '17', '2020-04-29 07:10:12', '2020-04-29 07:10:12');
INSERT INTO `role_user` VALUES ('13', '4', '10', '2020-04-29 10:40:17', '2020-04-29 10:40:20');
INSERT INTO `role_user` VALUES ('14', '2', '18', '2020-04-29 08:01:32', '2020-04-29 08:01:32');
INSERT INTO `role_user` VALUES ('15', '4', '19', '2020-04-29 12:17:39', '2020-04-29 12:17:39');
INSERT INTO `role_user` VALUES ('16', '2', '20', '2020-04-29 12:18:43', '2020-04-29 12:18:43');
INSERT INTO `role_user` VALUES ('17', '3', '21', '2020-04-30 18:26:15', '2020-04-30 18:26:15');

-- ----------------------------
-- Table structure for themes
-- ----------------------------
DROP TABLE IF EXISTS `themes`;
CREATE TABLE `themes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `themes_name_unique` (`name`),
  UNIQUE KEY `themes_link_unique` (`link`),
  KEY `themes_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`),
  KEY `themes_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=289 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of themes
-- ----------------------------
INSERT INTO `themes` VALUES ('1', 'Default', 'material.min.css', null, '1', 'theme', '1', '2019-11-14 18:58:55', '2019-11-14 18:59:06', null);
INSERT INTO `themes` VALUES ('2', 'Amber / Blue', 'material.amber-blue.min.css', null, '1', 'theme', '2', '2019-11-14 18:58:55', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('3', 'Amber / Cyan', 'material.amber-cyan.min.css', null, '1', 'theme', '3', '2019-11-14 18:58:55', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('4', 'Amber / Deep Orange', 'material.amber-deep_orange.min.css', null, '1', 'theme', '4', '2019-11-14 18:58:55', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('5', 'Amber / Deep Purple', 'material.amber-deep_purple.min.css', null, '1', 'theme', '5', '2019-11-14 18:58:55', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('6', 'Amber / Green', 'material.amber-green.min.css', null, '1', 'theme', '6', '2019-11-14 18:58:55', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('7', 'Amber / Indigo', 'material.amber-indigo.min.css', null, '1', 'theme', '7', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('8', 'Amber / Light Blue', 'material.amber-light_blue.min.css', null, '1', 'theme', '8', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('9', 'Amber / Light Green', 'material.amber-light_green.min.css', null, '1', 'theme', '9', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('10', 'Amber / Lime', 'material.amber-lime.min.css', null, '1', 'theme', '10', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('11', 'Amber / Orange', 'material.amber-orange.min.css', null, '1', 'theme', '11', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('12', 'Amber / Pink', 'material.amber-pink.min.css', null, '1', 'theme', '12', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('13', 'Amber / Purple', 'material.amber-purple.min.css', null, '1', 'theme', '13', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('14', 'Amber / Red', 'material.amber-red.min.css', null, '1', 'theme', '14', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('15', 'Amber / Teal', 'material.amber-teal.min.css', null, '1', 'theme', '15', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('16', 'Amber / Yellow', 'material.amber-yellow.min.css', null, '1', 'theme', '16', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('17', 'Blue Grey / Amber', 'material.blue_grey-amber.min.css', null, '1', 'theme', '17', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('18', 'Blue Grey / Blue', 'material.blue_grey-blue.min.css', null, '1', 'theme', '18', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('19', 'Blue Grey / Cyan', 'material.blue_grey-cyan.min.css', null, '1', 'theme', '19', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('20', 'Blue Grey / Deep Orange', 'material.blue_grey-deep_orange.min.css', null, '1', 'theme', '20', '2019-11-14 18:58:56', '2019-11-14 18:59:07', null);
INSERT INTO `themes` VALUES ('21', 'Blue Grey / Deep Purple', 'material.blue_grey-deep_purple.min.css', null, '1', 'theme', '21', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('22', 'Blue Grey / Green', 'material.blue_grey-green.min.css', null, '1', 'theme', '22', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('23', 'Blue Grey / Indigo', 'material.blue_grey-indigo.min.css', null, '1', 'theme', '23', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('24', 'Blue Grey / Light Blue', 'material.blue_grey-light_blue.min.css', null, '1', 'theme', '24', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('25', 'Blue Grey / Light Green', 'material.blue_grey-light_green.min.css', null, '1', 'theme', '25', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('26', 'Blue Grey / Lime', 'material.blue_grey-lime.min.css', null, '1', 'theme', '26', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('27', 'Blue Grey / Orange', 'material.blue_grey-orange.min.css', null, '1', 'theme', '27', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('28', 'Blue Grey / Pink', 'material.blue_grey-pink.min.css', null, '1', 'theme', '28', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('29', 'Blue Grey / Purple', 'material.blue_grey-purple.min.css', null, '1', 'theme', '29', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('30', 'Blue Grey / Red', 'material.blue_grey-red.min.css', null, '1', 'theme', '30', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('31', 'Blue Grey / Teal', 'material.blue_grey-teal.min.css', null, '1', 'theme', '31', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('32', 'Blue Grey / Yellow', 'material.blue_grey-yellow.min.css', null, '1', 'theme', '32', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('33', 'Blue / Amber', 'material.blue-amber.min.css', null, '1', 'theme', '33', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('34', 'Blue / Cyan', 'material.blue-cyan.min.css', null, '1', 'theme', '34', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('35', 'Blue / Deep Orange', 'material.blue-deep_orange.min.css', null, '1', 'theme', '35', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('36', 'Blue / Deep Purple', 'material.blue-deep_purple.min.css', null, '1', 'theme', '36', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('37', 'Blue / Green', 'material.blue-green.min.css', null, '1', 'theme', '37', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('38', 'Blue / Indigo', 'material.blue-indigo.min.css', null, '1', 'theme', '38', '2019-11-14 18:58:56', '2019-11-14 18:59:08', null);
INSERT INTO `themes` VALUES ('39', 'Blue / Light Blue', 'material.blue-light_blue.min.css', null, '1', 'theme', '39', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('40', 'Blue / Light Green', 'material.blue-light_green.min.css', null, '1', 'theme', '40', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('41', 'Blue / Lime', 'material.blue-lime.min.css', null, '1', 'theme', '41', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('42', 'Blue / Orange', 'material.blue-orange.min.css', null, '1', 'theme', '42', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('43', 'Blue / Pink', 'material.blue-pink.min.css', null, '1', 'theme', '43', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('44', 'Blue / Purple', 'material.blue-purple.min.css', null, '1', 'theme', '44', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('45', 'Blue / Red', 'material.blue-red.min.css', null, '1', 'theme', '45', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('46', 'Blue / Teal', 'material.blue-teal.min.css', null, '1', 'theme', '46', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('47', 'Blue / Yellow', 'material.blue-yellow.min.css', null, '1', 'theme', '47', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('48', 'Brown / Amber', 'material.brown-amber.min.css', null, '1', 'theme', '48', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('49', 'Brown / Blue', 'material.brown-blue.min.css', null, '1', 'theme', '49', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('50', 'Brown / Cyan', 'material.brown-cyan.min.css', null, '1', 'theme', '50', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('51', 'Brown / Deep Orange', 'material.brown-deep_orange.min.css', null, '1', 'theme', '51', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('52', 'Brown / Deep Purple', 'material.brown-deep_purple.min.css', null, '1', 'theme', '52', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('53', 'Brown / Green', 'material.brown-green.min.css', null, '1', 'theme', '53', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('54', 'Brown / Indigo', 'material.brown-indigo.min.css', null, '1', 'theme', '54', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('55', 'Brown / Light Blue', 'material.brown-light_blue.min.css', null, '1', 'theme', '55', '2019-11-14 18:58:57', '2019-11-14 18:59:09', null);
INSERT INTO `themes` VALUES ('56', 'Brown / Light Green', 'material.brown-light_green.min.css', null, '1', 'theme', '56', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('57', 'Brown / Lime', 'material.brown-lime.min.css', null, '1', 'theme', '57', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('58', 'Brown / Orange', 'material.brown-orange.min.css', null, '1', 'theme', '58', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('59', 'Brown / Pink', 'material.brown-pink.min.css', null, '1', 'theme', '59', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('60', 'Brown / Purple', 'material.brown-purple.min.css', null, '1', 'theme', '60', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('61', 'Brown / Red', 'material.brown-red.min.css', null, '1', 'theme', '61', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('62', 'Brown / Teal', 'material.brown-teal.min.css', null, '1', 'theme', '62', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('63', 'Brown / Yellow', 'material.brown-yellow.min.css', null, '1', 'theme', '63', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('64', 'Cyan / Amber', 'material.cyan-amber.min.css', null, '1', 'theme', '64', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('65', 'Cyan / Blue', 'material.cyan-blue.min.css', null, '1', 'theme', '65', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('66', 'Cyan / Deep Orange', 'material.cyan-deep_orange.min.css', null, '1', 'theme', '66', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('67', 'Cyan / Deep Purple', 'material.cyan-deep_purple.min.css', null, '1', 'theme', '67', '2019-11-14 18:58:57', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('68', 'Cyan / Green', 'material.cyan-green.min.css', null, '1', 'theme', '68', '2019-11-14 18:58:58', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('69', 'Cyan / Indigo', 'material.cyan-indigo.min.css', null, '1', 'theme', '69', '2019-11-14 18:58:58', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('70', 'Cyan / Light Blue', 'material.cyan-light_blue.min.css', null, '1', 'theme', '70', '2019-11-14 18:58:58', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('71', 'Cyan / Light Green', 'material.cyan-light_green.min.css', null, '1', 'theme', '71', '2019-11-14 18:58:58', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('72', 'Cyan / Lime', 'material.cyan-lime.min.css', null, '1', 'theme', '72', '2019-11-14 18:58:58', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('73', 'Cyan / Orange', 'material.cyan-orange.min.css', null, '1', 'theme', '73', '2019-11-14 18:58:58', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('74', 'Cyan / Pink', 'material.cyan-pink.min.css', null, '1', 'theme', '74', '2019-11-14 18:58:58', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('75', 'Cyan / Purple', 'material.cyan-purple.min.css', null, '1', 'theme', '75', '2019-11-14 18:58:58', '2019-11-14 18:59:10', null);
INSERT INTO `themes` VALUES ('76', 'Cyan / Red', 'material.cyan-red.min.css', null, '1', 'theme', '76', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('77', 'Cyan / Teal', 'material.cyan-teal.min.css', null, '1', 'theme', '77', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('78', 'Cyan / Yellow', 'material.cyan-yellow.min.css', null, '1', 'theme', '78', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('79', 'Deep Orange / Amber', 'material.deep_orange-amber.min.css', null, '1', 'theme', '79', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('80', 'Deep Orange / Blue', 'material.deep_orange-blue.min.css', null, '1', 'theme', '80', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('81', 'Deep Orange / Cyan', 'material.deep_orange-cyan.min.css', null, '1', 'theme', '81', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('82', 'Deep Orange / Deep Purple', 'material.deep_orange-deep_purple.min.css', null, '1', 'theme', '82', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('83', 'Deep Orange / Green', 'material.deep_orange-green.min.css', null, '1', 'theme', '83', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('84', 'Deep Orange / Indigo', 'material.deep_orange-indigo.min.css', null, '1', 'theme', '84', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('85', 'Deep Orange / Light Blue', 'material.deep_orange-light_blue.min.css', null, '1', 'theme', '85', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('86', 'Deep Orange / Light Green', 'material.deep_orange-light_green.min.css', null, '1', 'theme', '86', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('87', 'Deep Orange / Lime', 'material.deep_orange-lime.min.css', null, '1', 'theme', '87', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('88', 'Deep Orange / Orange', 'material.deep_orange-orange.min.css', null, '1', 'theme', '88', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('89', 'Deep Orange / Pink', 'material.deep_orange-pink.min.css', null, '1', 'theme', '89', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('90', 'Deep Orange / Purple', 'material.deep_orange-purple.min.css', null, '1', 'theme', '90', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('91', 'Deep Orange / Red', 'material.deep_orange-red.min.css', null, '1', 'theme', '91', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('92', 'Deep Orange / Teal', 'material.deep_orange-teal.min.css', null, '1', 'theme', '92', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('93', 'Deep Orange / Yellow', 'material.deep_orange-yellow.min.css', null, '1', 'theme', '93', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('94', 'Deep Purple / Amber', 'material.deep_purple-amber.min.css', null, '1', 'theme', '94', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('95', 'Deep Purple / Blue', 'material.deep_purple-blue.min.css', null, '1', 'theme', '95', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('96', 'Deep Purple / Cyan', 'material.deep_purple-cyan.min.css', null, '1', 'theme', '96', '2019-11-14 18:58:58', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('97', 'Deep Purple / Deep Orange', 'material.deep_purple-deep_orange.min.css', null, '1', 'theme', '97', '2019-11-14 18:58:59', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('98', 'Deep Purple / Green', 'material.deep_purple-green.min.css', null, '1', 'theme', '98', '2019-11-14 18:58:59', '2019-11-14 18:59:11', null);
INSERT INTO `themes` VALUES ('99', 'Yellow / Teal', 'material.yellow-teal.min.css', null, '1', 'theme', '99', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('100', 'Yellow / Red', 'material.yellow-red.min.css', null, '1', 'theme', '100', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('101', 'Yellow / Orange', 'material.yellow-orange.min.css', null, '1', 'theme', '101', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('102', 'Yellow / Pink', 'material.yellow-pink.min.css', null, '1', 'theme', '102', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('103', 'Yellow / Purple', 'material.yellow-purple.min.css', null, '1', 'theme', '103', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('104', 'Yellow / Lime', 'material.yellow-lime.min.css', null, '1', 'theme', '104', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('105', 'Yellow / Light Green', 'material.yellow-light_green.min.css', null, '1', 'theme', '105', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('106', 'Yellow / Indigo', 'material.yellow-indigo.min.css', null, '1', 'theme', '106', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('107', 'Yellow / Light Blue', 'material.yellow-light_blue.min.css', null, '1', 'theme', '107', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('108', 'Yellow / Green', 'material.yellow-green.min.css', null, '1', 'theme', '108', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('109', 'Yellow / Deep Purple', 'material.yellow-deep_purple.min.css', null, '1', 'theme', '109', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('110', 'Yellow / Deep Orange', 'material.yellow-deep_orange.min.css', null, '1', 'theme', '110', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('111', 'Yellow / Cyan', 'material.yellow-cyan.min.css', null, '1', 'theme', '111', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('112', 'Yellow / Blue', 'material.yellow-blue.min.css', null, '1', 'theme', '112', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('113', 'Yellow / Amber', 'material.yellow-amber.min.css', null, '1', 'theme', '113', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('114', 'Teal / Yellow', 'material.teal-yellow.min.css', null, '1', 'theme', '114', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('115', 'Teal / Red', 'material.teal-red.min.css', null, '1', 'theme', '115', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('116', 'Teal / Purple', 'material.teal-purple.min.css', null, '1', 'theme', '116', '2019-11-14 18:58:59', '2019-11-14 18:59:12', null);
INSERT INTO `themes` VALUES ('117', 'Teal / Pink', 'material.teal-pink.min.css', null, '1', 'theme', '117', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('118', 'Teal / Orange', 'material.teal-orange.min.css', null, '1', 'theme', '118', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('119', 'Teal / Lime', 'material.teal-lime.min.css', null, '1', 'theme', '119', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('120', 'Teal / Light Green', 'material.teal-light_green.min.css', null, '1', 'theme', '120', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('121', 'Teal / Light Blue', 'material.teal-light_blue.min.css', null, '1', 'theme', '121', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('122', 'Teal / Indigo', 'material.teal-indigo.min.css', null, '1', 'theme', '122', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('123', 'Teal / Green', 'material.teal-green.min.css', null, '1', 'theme', '123', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('124', 'Teal / Deep Purple', 'material.teal-deep_purple.min.css', null, '1', 'theme', '124', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('125', 'Teal / Deep Orange', 'material.teal-deep_orange.min.css', null, '1', 'theme', '125', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('126', 'Teal / Cyan', 'material.teal-cyan.min.css', null, '1', 'theme', '126', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('127', 'Teal / Blue', 'material.teal-blue.min.css', null, '1', 'theme', '127', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('128', 'Teal / Amber', 'material.teal-amber.min.css', null, '1', 'theme', '128', '2019-11-14 18:58:59', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('129', 'Red / Yellow', 'material.red-yellow.min.css', null, '1', 'theme', '129', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('130', 'Red / Teal', 'material.red-teal.min.css', null, '1', 'theme', '130', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('131', 'Red / Purple', 'material.red-purple.min.css', null, '1', 'theme', '131', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('132', 'Red / Pink', 'material.red-pink.min.css', null, '1', 'theme', '132', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('133', 'Red / Orange', 'material.red-orange.min.css', null, '1', 'theme', '133', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('134', 'Red / Lime', 'material.red-lime.min.css', null, '1', 'theme', '134', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('135', 'Red / Light Green', 'material.red-light_green.min.css', null, '1', 'theme', '135', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('136', 'Red / Light Blue', 'material.red-light_blue.min.css', null, '1', 'theme', '136', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('137', 'Red / Indigo', 'material.red-indigo.min.css', null, '1', 'theme', '137', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('138', 'Red / Green', 'material.red-green.min.css', null, '1', 'theme', '138', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('139', 'Red / Deep Purple', 'material.red-deep_purple.min.css', null, '1', 'theme', '139', '2019-11-14 18:59:00', '2019-11-14 18:59:13', null);
INSERT INTO `themes` VALUES ('140', 'Red / Deep Orange', 'material.red-deep_orange.min.css', null, '1', 'theme', '140', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('141', 'Red / Cyan', 'material.red-cyan.min.css', null, '1', 'theme', '141', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('142', 'Red / Blue', 'material.red-blue.min.css', null, '1', 'theme', '142', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('143', 'Red / Amber', 'material.red-amber.min.css', null, '1', 'theme', '143', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('144', 'Purple / Yellow', 'material.purple-yellow.min.css', null, '1', 'theme', '144', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('145', 'Purple / Teal', 'material.purple-teal.min.css', null, '1', 'theme', '145', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('146', 'Purple / Pink', 'material.purple-pink.min.css', null, '1', 'theme', '146', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('147', 'Purple / Orange', 'material.purple-orange.min.css', null, '1', 'theme', '147', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('148', 'Purple / Lime', 'material.purple-lime.min.css', null, '1', 'theme', '148', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('149', 'Purple / Light Green', 'material.purple-light_green.min.css', null, '1', 'theme', '149', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('150', 'Purple / Light Blue', 'material.purple-light_blue.min.css', null, '1', 'theme', '150', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('151', 'Purple / Indigo', 'material.purple-indigo.min.css', null, '1', 'theme', '151', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('152', 'Purple / Green', 'material.purple-green.min.css', null, '1', 'theme', '152', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('153', 'Purple / Deep Purple', 'material.purple-deep_purple.min.css', null, '1', 'theme', '153', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('154', 'Purple / Deep Orange', 'material.purple-deep_orange.min.css', null, '1', 'theme', '154', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('155', 'Purple / Cyan', 'material.purple-cyan.min.css', null, '1', 'theme', '155', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('156', 'Purple / Blue', 'material.purple-blue.min.css', null, '1', 'theme', '156', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('157', 'Purple / Amber', 'material.purple-amber.min.css', null, '1', 'theme', '157', '2019-11-14 18:59:00', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('158', 'Pink / Yellow', 'material.pink-yellow.min.css', null, '1', 'theme', '158', '2019-11-14 18:59:01', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('159', 'Pink / Teal', 'material.pink-teal.min.css', null, '1', 'theme', '159', '2019-11-14 18:59:01', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('160', 'Pink / Red', 'material.pink-red.min.css', null, '1', 'theme', '160', '2019-11-14 18:59:01', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('161', 'Pink / Purple', 'material.pink-purple.min.css', null, '1', 'theme', '161', '2019-11-14 18:59:01', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('162', 'Pink / Orange', 'material.pink-orange.min.css', null, '1', 'theme', '162', '2019-11-14 18:59:01', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('163', 'Pink / Lime', 'material.pink-lime.min.css', null, '1', 'theme', '163', '2019-11-14 18:59:01', '2019-11-14 18:59:14', null);
INSERT INTO `themes` VALUES ('164', 'Pink / Light Green', 'material.pink-light_green.min.css', null, '1', 'theme', '164', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('165', 'Pink / Light Blue', 'material.pink-light_blue.min.css', null, '1', 'theme', '165', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('166', 'Pink / Indigo', 'material.pink-indigo.min.css', null, '1', 'theme', '166', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('167', 'Pink / Green', 'material.pink-green.min.css', null, '1', 'theme', '167', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('168', 'Pink / Deep Purple', 'material.pink-deep_purple.min.css', null, '1', 'theme', '168', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('169', 'Pink / Deep Orange', 'material.pink-deep_orange.min.css', null, '1', 'theme', '169', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('170', 'Pink / Cyan', 'material.pink-cyan.min.css', null, '1', 'theme', '170', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('171', 'Pink / Blue', 'material.pink-blue.min.css', null, '1', 'theme', '171', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('172', 'Pink / Amber', 'material.pink-amber.min.css', null, '1', 'theme', '172', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('173', 'Orange / Yellow', 'material.orange-yellow.min.css', null, '1', 'theme', '173', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('174', 'Orange / Teal', 'material.orange-teal.min.css', null, '1', 'theme', '174', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('175', 'Orange / Red', 'material.orange-red.min.css', null, '1', 'theme', '175', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('176', 'Orange / Purple', 'material.orange-purple.min.css', null, '1', 'theme', '176', '2019-11-14 18:59:01', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('177', 'Orange / Pink', 'material.orange-pink.min.css', null, '1', 'theme', '177', '2019-11-14 18:59:02', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('178', 'Orange / Lime', 'material.orange-lime.min.css', null, '1', 'theme', '178', '2019-11-14 18:59:02', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('179', 'Orange / Light Green', 'material.orange-light_green.min.css', null, '1', 'theme', '179', '2019-11-14 18:59:02', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('180', 'Orange / Light Blue', 'material.orange-light_blue.min.css', null, '1', 'theme', '180', '2019-11-14 18:59:02', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('181', 'Orange / Indigo', 'material.orange-indigo.min.css', null, '1', 'theme', '181', '2019-11-14 18:59:02', '2019-11-14 18:59:15', null);
INSERT INTO `themes` VALUES ('182', 'Orange / Green', 'material.orange-green.min.css', null, '1', 'theme', '182', '2019-11-14 18:59:02', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('183', 'Orange / Deep Purple', 'material.orange-deep_purple.min.css', null, '1', 'theme', '183', '2019-11-14 18:59:02', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('184', 'Orange / Deep Orange', 'material.orange-deep_orange.min.css', null, '1', 'theme', '184', '2019-11-14 18:59:02', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('185', 'Orange / Cyan', 'material.orange-cyan.min.css', null, '1', 'theme', '185', '2019-11-14 18:59:02', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('186', 'Orange / Amber', 'material.orange-amber.min.css', null, '1', 'theme', '186', '2019-11-14 18:59:02', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('187', 'Orange / Blue', 'material.orange-blue.min.css', null, '1', 'theme', '187', '2019-11-14 18:59:02', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('188', 'Lime / Yellow', 'material.lime-yellow.min.css', null, '1', 'theme', '188', '2019-11-14 18:59:02', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('189', 'Lime / Teal', 'material.lime-teal.min.css', null, '1', 'theme', '189', '2019-11-14 18:59:02', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('190', 'Lime / Red', 'material.lime-red.min.css', null, '1', 'theme', '190', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('191', 'Lime / Purple', 'material.lime-purple.min.css', null, '1', 'theme', '191', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('192', 'Lime / Pink', 'material.lime-pink.min.css', null, '1', 'theme', '192', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('193', 'Lime / Orange', 'material.lime-orange.min.css', null, '1', 'theme', '193', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('194', 'Lime / Light Green', 'material.lime-light_green.min.css', null, '1', 'theme', '194', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('195', 'Lime / Light Blue', 'material.lime-light_blue.min.css', null, '1', 'theme', '195', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('196', 'Lime / Indigo', 'material.lime-indigo.min.css', null, '1', 'theme', '196', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('197', 'Lime / Green', 'material.lime-green.min.css', null, '1', 'theme', '197', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('198', 'Lime / Deep Orange', 'material.lime-deep_orange.min.css', null, '1', 'theme', '198', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('199', 'Lime / Deep Purple', 'material.lime-deep_purple.min.css', null, '1', 'theme', '199', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('200', 'Lime / Cyan', 'material.lime-cyan.min.css', null, '1', 'theme', '200', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('201', 'Lime / Blue', 'material.lime-blue.min.css', null, '1', 'theme', '201', '2019-11-14 18:59:03', '2019-11-14 18:59:16', null);
INSERT INTO `themes` VALUES ('202', 'Lime / Amber', 'material.lime-amber.min.css', null, '1', 'theme', '202', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('203', 'Light Green / Yellow', 'material.light_green-yellow.min.css', null, '1', 'theme', '203', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('204', 'Light Green / Teal', 'material.light_green-teal.min.css', null, '1', 'theme', '204', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('205', 'Light Green / Red', 'material.light_green-red.min.css', null, '1', 'theme', '205', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('206', 'Light Green / Purple', 'material.light_green-purple.min.css', null, '1', 'theme', '206', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('207', 'Light Green / Pink', 'material.light_green-pink.min.css', null, '1', 'theme', '207', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('208', 'Light Green / Orange', 'material.light_green-orange.min.css', null, '1', 'theme', '208', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('209', 'Light Green / Lime', 'material.light_green-lime.min.css', null, '1', 'theme', '209', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('210', 'Light Green / Light Blue', 'material.light_green-light_blue.min.css', null, '1', 'theme', '210', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('211', 'Light Green / Indigo', 'material.light_green-indigo.min.css', null, '1', 'theme', '211', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('212', 'Light Green / Green', 'material.light_green-green.min.css', null, '1', 'theme', '212', '2019-11-14 18:59:03', '2019-11-14 18:59:17', null);
INSERT INTO `themes` VALUES ('213', 'Light Green / Deep Purple', 'material.light_green-deep_purple.min.css', null, '1', 'theme', '213', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('214', 'Light Green / Deep Orange', 'material.light_green-deep_orange.min.css', null, '1', 'theme', '214', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('215', 'Light Green / Cyan', 'material.light_green-cyan.min.css', null, '1', 'theme', '215', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('216', 'Light Green / Blue', 'material.light_green-blue.min.css', null, '1', 'theme', '216', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('217', 'Light Green / Amber', 'material.light_green-amber.min.css', null, '1', 'theme', '217', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('218', 'Light Blue / Yellow', 'material.light_blue-yellow.min.css', null, '1', 'theme', '218', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('219', 'Light Blue / Teal', 'material.light_blue-teal.min.css', null, '1', 'theme', '219', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('220', 'Light Blue / Red', 'material.light_blue-red.min.css', null, '1', 'theme', '220', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('221', 'Light Blue / Purple', 'material.light_blue-purple.min.css', null, '1', 'theme', '221', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('222', 'Light Blue / Pink', 'material.light_blue-pink.min.css', null, '1', 'theme', '222', '2019-11-14 18:59:03', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('223', 'Light Blue / Orange', 'material.light_blue-orange.min.css', null, '1', 'theme', '223', '2019-11-14 18:59:04', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('224', 'Light Blue / Lime', 'material.light_blue-lime.min.css', null, '1', 'theme', '224', '2019-11-14 18:59:04', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('225', 'Light Blue / Light Green', 'material.light_blue-light_green.min.css', null, '1', 'theme', '225', '2019-11-14 18:59:04', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('226', 'Light Blue / Indigo', 'material.light_blue-indigo.min.css', null, '1', 'theme', '226', '2019-11-14 18:59:04', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('227', 'Light Blue / Green', 'material.light_blue-green.min.css', null, '1', 'theme', '227', '2019-11-14 18:59:04', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('228', 'Light Blue / Deep Purple', 'material.light_blue-deep_purple.min.css', null, '1', 'theme', '228', '2019-11-14 18:59:04', '2019-11-14 18:59:18', null);
INSERT INTO `themes` VALUES ('229', 'Light Blue / Deep Orange', 'material.light_blue-deep_orange.min.css', null, '1', 'theme', '229', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('230', 'Light Blue / Cyan', 'material.light_blue-cyan.min.css', null, '1', 'theme', '230', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('231', 'Light Blue / Blue', 'material.light_blue-blue.min.css', null, '1', 'theme', '231', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('232', 'Light Blue / Amber', 'material.light_blue-amber.min.css', null, '1', 'theme', '232', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('233', 'Indigo / Yellow', 'material.indigo-yellow.min.css', null, '1', 'theme', '233', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('234', 'Indigo / Teal', 'material.indigo-teal.min.css', null, '1', 'theme', '234', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('235', 'Indigo / Red', 'material.indigo-red.min.css', null, '1', 'theme', '235', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('236', 'Indigo / Purple', 'material.indigo-purple.min.css', null, '1', 'theme', '236', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('237', 'Indigo / Pink', 'material.indigo-pink.min.css', null, '1', 'theme', '237', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('238', 'Indigo / Orange', 'material.indigo-orange.min.css', null, '1', 'theme', '238', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('239', 'Indigo / Lime', 'material.indigo-lime.min.css', null, '1', 'theme', '239', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('240', 'Indigo / Light Green', 'material.indigo-light_green.min.css', null, '1', 'theme', '240', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('241', 'Indigo / Light Blue', 'material.indigo-light_blue.min.css', null, '1', 'theme', '241', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('242', 'Indigo / Green', 'material.indigo-green.min.css', null, '1', 'theme', '242', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('243', 'Indigo / Deep Purple', 'material.indigo-deep_purple.min.css', null, '1', 'theme', '243', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('244', 'Indigo / Deep Orange', 'material.indigo-deep_orange.min.css', null, '1', 'theme', '244', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('245', 'Indigo / Cyan', 'material.indigo-cyan.min.css', null, '1', 'theme', '245', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('246', 'Indigo / Blue', 'material.indigo-blue.min.css', null, '1', 'theme', '246', '2019-11-14 18:59:04', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('247', 'Indigo / Amber', 'material.indigo-amber.min.css', null, '1', 'theme', '247', '2019-11-14 18:59:05', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('248', 'Grey / Yellow', 'material.grey-yellow.min.css', null, '1', 'theme', '248', '2019-11-14 18:59:05', '2019-11-14 18:59:19', null);
INSERT INTO `themes` VALUES ('249', 'Grey / Teal', 'material.grey-teal.min.css', null, '1', 'theme', '249', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('250', 'Grey / Red', 'material.grey-red.min.css', null, '1', 'theme', '250', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('251', 'Grey / Purple', 'material.grey-purple.min.css', null, '1', 'theme', '251', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('252', 'Grey / Pink', 'material.grey-pink.min.css', null, '1', 'theme', '252', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('253', 'Grey / Orange', 'material.grey-orange.min.css', null, '1', 'theme', '253', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('254', 'Grey / Lime', 'material.grey-lime.min.css', null, '1', 'theme', '254', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('255', 'Grey / Light Green', 'material.grey-light_green.min.css', null, '1', 'theme', '255', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('256', 'Grey / Light Blue', 'material.grey-light_blue.min.css', null, '1', 'theme', '256', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('257', 'Grey / Indigo', 'material.grey-indigo.min.css', null, '1', 'theme', '257', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('258', 'Grey / Green', 'material.grey-green.min.css', null, '1', 'theme', '258', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('259', 'Grey / Deep Purple', 'material.grey-deep_purple.min.css', null, '1', 'theme', '259', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('260', 'Grey / Deep Orange', 'material.grey-deep_orange.min.css', null, '1', 'theme', '260', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('261', 'Grey / Cyan', 'material.grey-cyan.min.css', null, '1', 'theme', '261', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('262', 'Grey / Blue', 'material.grey-blue.min.css', null, '1', 'theme', '262', '2019-11-14 18:59:05', '2019-11-14 18:59:20', null);
INSERT INTO `themes` VALUES ('263', 'Grey / Amber', 'material.grey-amber.min.css', null, '1', 'theme', '263', '2019-11-14 18:59:05', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('264', 'Green / Yellow', 'material.green-yellow.min.css', null, '1', 'theme', '264', '2019-11-14 18:59:05', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('265', 'Green / Teal', 'material.green-teal.min.css', null, '1', 'theme', '265', '2019-11-14 18:59:05', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('266', 'Green / Red', 'material.green-red.min.css', null, '1', 'theme', '266', '2019-11-14 18:59:05', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('267', 'Green / Purple', 'material.green-purple.min.css', null, '1', 'theme', '267', '2019-11-14 18:59:05', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('268', 'Green / Pink', 'material.green-pink.min.css', null, '1', 'theme', '268', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('269', 'Green / Orange', 'material.green-orange.min.css', null, '1', 'theme', '269', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('270', 'Green / Lime', 'material.green-lime.min.css', null, '1', 'theme', '270', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('271', 'Green / Light Green', 'material.green-light_green.min.css', null, '1', 'theme', '271', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('272', 'Green / Light Blue', 'material.green-light_blue.min.css', null, '1', 'theme', '272', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('273', 'Green / Indigo', 'material.green-indigo.min.css', null, '1', 'theme', '273', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('274', 'Green / Deep Purple', 'material.green-deep_purple.min.css', null, '1', 'theme', '274', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('275', 'Green / Deep Orange', 'material.green-deep_orange.min.css', null, '1', 'theme', '275', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('276', 'Green / Cyan', 'material.green-cyan.min.css', null, '1', 'theme', '276', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('277', 'Green / Blue', 'material.green-blue.min.css', null, '1', 'theme', '277', '2019-11-14 18:59:06', '2019-11-14 18:59:21', null);
INSERT INTO `themes` VALUES ('278', 'Green / Amber', 'material.green-amber.min.css', null, '1', 'theme', '278', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('279', 'Deep Purple / Yellow', 'material.deep_purple-yellow.min.css', null, '1', 'theme', '279', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('280', 'Deep Purple / Teal', 'material.deep_purple-teal.min.css', null, '1', 'theme', '280', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('281', 'Deep Purple / Red', 'material.deep_purple-red.min.css', null, '1', 'theme', '281', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('282', 'Deep Purple / Purple', 'material.deep_purple-purple.min.css', null, '1', 'theme', '282', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('283', 'Deep Purple / Pink', 'material.deep_purple-pink.min.css', null, '1', 'theme', '283', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('284', 'Deep Purple / Orange', 'material.deep_purple-orange.min.css', null, '1', 'theme', '284', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('285', 'Deep Purple / Lime', 'material.deep_purple-lime.min.css', null, '1', 'theme', '285', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('286', 'Deep Purple / Light Green', 'material.deep_purple-light_green.min.css', null, '1', 'theme', '286', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('287', 'Deep Purple / Light Blue', 'material.deep_purple-light_blue.min.css', null, '1', 'theme', '287', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);
INSERT INTO `themes` VALUES ('288', 'Deep Purple / Indigo', 'material.deep_purple-indigo.min.css', null, '1', 'theme', '288', '2019-11-14 18:59:06', '2019-11-14 18:59:22', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `activated` tinyint(4) DEFAULT '1',
  `token` varchar(255) DEFAULT NULL,
  `signup_ip_address` varchar(255) DEFAULT NULL,
  `signup_confirmation_ip_addresss` varchar(255) DEFAULT NULL,
  `signup_sm_ip_address` varchar(255) DEFAULT NULL,
  `admin_ip_address` varchar(255) DEFAULT NULL,
  `updated_ip_address` varchar(255) DEFAULT NULL,
  `deleted_ip_address` varchar(255) DEFAULT NULL,
  `last_chat_id` int(11) DEFAULT NULL,
  `online_state` tinyint(4) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'jack422@gmail.com', '2fb54875d166ab45a6a8b21f1631dec573a8cf07', '1', 'Jack', 'Fruin', '2020-04-27 19:48:09', '2020-04-27 19:48:32', null, '1', 'LfaF0OEX6xGim6yMTtwDoiAFXBnuASlcCsKRihcIKLqEoxB6jVhClcAJc7pYb3Qu', null, null, null, null, null, null, null, null, 'user1', null, null);
INSERT INTO `users` VALUES ('2', 'jane623@gmail.com', null, '2', 'Jane', 'Ross', '2020-04-27 19:48:14', '2020-04-27 19:48:35', null, '1', 'XfFjSeTGKGlrApVS7UfCbilg91VqfeIWbP2Qgm1wJ7UyucUGBS3B7fmEhz0OiLWZ', null, null, null, null, null, null, null, null, 'user2', null, null);
INSERT INTO `users` VALUES ('3', 'tom853@gmail.com', null, '1', 'Tom', 'Dawson', '2020-04-27 19:48:19', '2020-04-27 19:48:37', null, '1', 'iot2YWbzeIHGcQS0v8LOVon3GEUOdnkk0UrKZLXHnCu63Ftij7z0wZKsImDBBe3m', null, null, null, null, null, null, null, null, 'user3', null, null);
INSERT INTO `users` VALUES ('4', 'billy753@gmail.com', null, '2', 'Billy', 'Kate', '2020-04-27 19:48:22', '2020-04-27 19:48:40', null, '1', 'wb2qriUtxyJUFkEUeuypylW6VU4xJ7NJKw5G9Udi0hVQtCrpxAp4frzvVH5Lde3p', null, null, null, null, null, null, null, null, 'user4', null, null);
INSERT INTO `users` VALUES ('5', 'max428@gmail.com', null, '1', 'Max', 'Houston', '2020-04-27 19:48:24', '2020-04-27 19:48:42', null, '1', 'pFURzHtFJyfnHIPsn40T0aDPSrwoEe5WxnMwJ12ISwRWZLT43ZdgegvAP40Jgmrx', null, null, null, null, null, null, null, null, 'user5', null, null);
INSERT INTO `users` VALUES ('6', 'jin716@gmail.com', null, '2', 'Jin', 'William', '2020-04-27 19:48:27', '2020-04-27 19:48:44', null, '1', 'NHdukQHS04DOFOFWHInVgDjTFQxOgig5YFvR5o5CcPToD0hPaWq4aXnJAyGvnZlq', null, null, null, null, null, null, null, null, 'user6', null, null);
INSERT INTO `users` VALUES ('7', 'joe826@gmail.com', null, '1', 'Joe', 'Roach', '2020-04-27 19:48:29', '2020-04-27 19:48:46', null, '1', 'zyEgCQQ2tqcRAYFlweYu1l3UOcusjaJlN1IouLEFInp66brup94jVNdvmK4d7QLe', null, null, null, null, null, null, null, null, 'user7', null, null);
INSERT INTO `users` VALUES ('8', 'aaa@aaa.com', 'a95fe5d3cf46ef9607102b3fdbc15c2756db794c', '1', 'Judy', 'Han', '2020-03-27 06:51:06', '2020-03-27 06:51:06', null, '1', 'OXxCTTISLUmqs8AoWULb5O5rQ9u7uLpbq20rGFSV5Hq2tEelxMXfbvvQyERKfoma', null, null, null, null, null, null, null, null, 'user8', null, 'Admin');
INSERT INTO `users` VALUES ('9', 'user@user.com', '$2y$10$y90LU2FqzyyGbH/TNXabH.FYmjC9ivQ1voKyItjMJ91VEt8nwBL2q', null, 'User', 'user', '2020-04-27 14:17:05', '2020-05-01 14:51:52', 'wL4S6n3Qnst3YgJDjmEVHDuVR3mP65xg0C0RJCWtr8E9o86O5fZE4EjlTBfj', '1', 'nMQAt56hHnxnobZpVVf9eLShM4jPHDrJkgmjgNQdAjBNVMs3X7ISmYXPX9oghI01', '0.0.0.0', null, null, null, null, null, null, null, 'user123', null, null);
INSERT INTO `users` VALUES ('10', 'admin@admin.com', '$2y$10$a3I6EPdwZJz/23MSE.Tsn.BOkXLNIZTwRZceoYOMlqDZXEU9PVhLq', '2', 'Admin', 'admin', '2020-04-27 19:56:13', '2020-04-27 19:56:13', null, '1', 'Bt1u9evtGkMmZs10nvzt4DcsVYWYdLrb74rh0PRb5dzdUDCmdzTOg9z6VJWqxTV7', '0.0.0.0', null, null, null, null, null, null, null, 'Admin123', null, null);
INSERT INTO `users` VALUES ('14', 'tester2@test.com', '$2y$10$/Qq3yhtFoeQOsIehpKbh1uCtDzDxVTsj1v/03LOjq9GVG5xLCHQLu', '2', 'tester2', 'tester2', '2020-04-29 06:49:25', '2020-05-01 14:21:44', null, '1', 'UkiQH8MqjAlfvVEf032J9CZNu64S9aTYVM341ziWuezEVSOZMoRIrVAIBchoqfGo', null, null, null, '0.0.0.0', null, null, null, null, 'tester1234', '2020-05-01 14:21:44', null);
INSERT INTO `users` VALUES ('17', 'test3@test.com', '$2y$10$fmvZKw2S8on.q9hbZv6WKey/Ia7.D9BqVxrfApDacPlA6/vg1jm9i', '1', 'test3', 'test3', '2020-04-29 07:10:12', '2020-04-29 12:53:21', null, '1', 't1l0wH8fE87nmuB9kfrYeVllz9mnLNrBP1oc6uYNpPQHESxUdZqX0ZPR363S71tc', null, null, null, '0.0.0.0', '0.0.0.0', null, null, null, 'test3', null, null);
INSERT INTO `users` VALUES ('18', 'test4@test.com', '$2y$10$hHi860OpyfypR.lmHUk54eXsCaIpu5JJqcEJqVSDGNqTaC/x14pEK', '2', 'test4', 'test4', '2020-04-29 08:01:32', '2020-04-29 12:40:09', null, '1', 'TnbmrDfMVHwRVlKx2OtstGx0WeERWFLHdyy3LfGVJtogm72wdcAbeuvqe9DeSaUa', null, null, null, '0.0.0.0', '0.0.0.0', null, null, null, 'test4', null, null);
INSERT INTO `users` VALUES ('20', 'test123@test.com', '$2y$10$B.hR/AOOEj1b.jtPCV2PnOOOlm172HAeJ8LgjyOWlCdsMdMHNGqCS', '1', 'test123', 'test123', '2020-04-29 12:18:43', '2020-04-29 12:32:04', null, '1', 'XO6xlH2i4COK88mASaVxRrFLqpwnWHVrz6JLhbaUjjB3Buznc2XwQP3S5scfgzD4', null, null, null, '0.0.0.0', '0.0.0.0', null, null, null, 'test123', null, null);
INSERT INTO `users` VALUES ('21', 'test4@test4.com', '$2y$10$7arEpVCNzwVURjCNsQJIIuZHPvFOz3tnU9nr1M/pCNZCVI0scugq2', '5', 'test4', 'test4', '2020-04-30 18:26:15', '2020-04-30 18:26:15', null, '1', 'NM32h6nMphshrqlvnroKbVVxO7gKFew048HxIbcmynaGmiQI5PUTFQxifmpUqbKb', null, null, null, '0.0.0.0', null, null, null, null, 'test4', null, null);
INSERT INTO `users` VALUES ('22', 'judy@hopps.com', 'd380168c4904d4fd73ba5579ed96c236bd332580', null, 'Judy', 'hhh', '2020-05-01 19:17:28', '2020-05-01 19:17:28', null, '1', null, null, null, null, null, null, null, null, null, null, null, 'Buyer');
INSERT INTO `users` VALUES ('23', 'user2@user2.com', 'd380168c4904d4fd73ba5579ed96c236bd332580', null, 'User2', 'User2', '2020-05-01 19:19:44', '2020-05-01 19:19:44', null, '1', null, null, null, null, null, null, null, null, null, null, null, 'Rentor');

-- ----------------------------
-- Table structure for user_profiles
-- ----------------------------
DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `ratings_count` int(11) DEFAULT NULL,
  `ratings_value` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cc_num` varchar(255) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `expire_date` datetime(6) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of user_profiles
-- ----------------------------
INSERT INTO `user_profiles` VALUES ('1', '1', null, null, null, null, null, null, null, null, '23', '4', 'uploads/user-avatar/1.jpg', null, null, null, null, null);
INSERT INTO `user_profiles` VALUES ('2', '2', null, null, '+1 2346575', null, 'https://twitter/jane', null, null, null, '62', '5', 'uploads/user-avatar/2.jpg', null, null, null, null, null);
INSERT INTO `user_profiles` VALUES ('3', '3', null, null, '+1 4345366', null, null, 'https://linkedin/in/tom', null, null, '3', '3', 'uploads/user-avatar/3.jpg', null, null, null, null, null);
INSERT INTO `user_profiles` VALUES ('4', '4', null, null, '+1 4353464', 'https://facebook.com/billy', null, null, null, null, '14', '4', 'uploads/user-avatar/4.jpg', null, null, null, null, null);
INSERT INTO `user_profiles` VALUES ('5', '5', null, null, '+1 5523213', 'https:://facebook.com/max', null, null, null, null, '18', '2', 'uploads/user-avatar/5.jpg', null, null, null, null, null);
INSERT INTO `user_profiles` VALUES ('6', '6', null, null, '+1 4324566', null, null, null, 'https://instagram.com/jin', null, '32', '3', 'uploads/user-avatar/6.jpg', null, null, null, null, null);
INSERT INTO `user_profiles` VALUES ('7', '7', null, null, '+1 342566', null, null, null, null, 'https://jin.com', '52', '4', 'uploads/user-avatar/7.jpg', null, null, null, null, null);
INSERT INTO `user_profiles` VALUES ('8', '8', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2020-03-27 06:51:06.000000', '2020-03-27 06:51:06.000000');
INSERT INTO `user_profiles` VALUES ('9', '22', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2020-05-01 16:17:28.000000', '2020-05-01 16:17:28.000000');
INSERT INTO `user_profiles` VALUES ('10', '23', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2020-05-01 16:19:44.000000', '2020-05-01 16:19:44.000000');

-- ----------------------------
-- Table structure for user_roles
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of user_roles
-- ----------------------------
