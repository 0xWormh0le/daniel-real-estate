/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : realestate

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 03/05/2020 02:52:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for attachments
-- ----------------------------
DROP TABLE IF EXISTS `attachments`;
CREATE TABLE `attachments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `small` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `medium` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `big` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 130 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of attachments
-- ----------------------------
INSERT INTO `attachments` VALUES (1, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (2, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (3, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (4, 'uploads/properties/small/apartment-1.jpg', 'uploads/properties/medium/apartment-1.jpg', 'uploads/properties/big/apartment-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (5, 'uploads/properties/small/apartment-2.jpg', 'uploads/properties/medium/apartment-2.jpg', 'uploads/properties/big/apartment-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (6, 'uploads/properties/small/apartment-3.jpg', 'uploads/properties/medium/apartment-3.jpg', 'uploads/properties/big/apartment-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (7, 'uploads/properties/small/apartment-4.jpg', 'uploads/properties/medium/apartment-4.jpg', 'uploads/properties/big/apartment-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (8, 'uploads/properties/small/apartment-5.jpg', 'uploads/properties/medium/apartment-5.jpg', 'uploads/properties/big/apartment-5.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (9, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (10, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (11, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (12, 'uploads/properties/small/flat1-1.jpg', 'uploads/properties/medium/flat1-1.jpg', 'uploads/properties/big/flat1-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (13, 'uploads/properties/small/flat1-2.jpg', 'uploads/properties/medium/flat1-2.jpg', 'uploads/properties/big/flat1-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (14, 'uploads/properties/small/flat1-3.jpg', 'uploads/properties/medium/flat1-3.jpg', 'uploads/properties/big/flat1-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (15, 'uploads/properties/small/flat1-4.jpg', 'uploads/properties/medium/flat1-4.jpg', 'uploads/properties/big/flat1-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (16, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (17, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (18, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (19, 'uploads/properties/small/flat2-1.jpg', 'uploads/properties/medium/flat2-1.jpg', 'uploads/properties/big/flat2-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (20, 'uploads/properties/small/flat2-2.jpg', 'uploads/properties/medium/flat2-2.jpg', 'uploads/properties/big/flat2-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (21, 'uploads/properties/small/flat2-3.jpg', 'uploads/properties/medium/flat2-3.jpg', 'uploads/properties/big/flat2-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (22, 'uploads/properties/small/flat2-4.jpg', 'uploads/properties/medium/flat2-4.jpg', 'uploads/properties/big/flat2-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (23, 'uploads/properties/small/flat2-5.jpg', 'uploads/properties/medium/flat2-5.jpg', 'uploads/properties/big/flat2-5.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (24, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (25, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (26, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (27, 'uploads/properties/small/house1-1.jpg', 'uploads/properties/medium/house1-1.jpg', 'uploads/properties/big/house1-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (28, 'uploads/properties/small/house1-2.jpg', 'uploads/properties/medium/house1-2.jpg', 'uploads/properties/big/house1-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (29, 'uploads/properties/small/house1-3.jpg', 'uploads/properties/medium/house1-3.jpg', 'uploads/properties/big/house1-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (30, 'uploads/properties/small/house1-4.jpg', 'uploads/properties/medium/house1-4.jpg', 'uploads/properties/big/house1-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (31, 'uploads/properties/small/house1-5.jpg', 'uploads/properties/medium/house1-5.jpg', 'uploads/properties/big/house1-5.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (32, 'uploads/properties/small/house1-6.jpg', 'uploads/properties/medium/house1-6.jpg', 'uploads/properties/big/house1-6.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (33, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (34, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (35, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (36, 'uploads/properties/small/house2-1.jpg', 'uploads/properties/medium/house2-1.jpg', 'uploads/properties/big/house2-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (37, 'uploads/properties/small/house2-2.jpg', 'uploads/properties/medium/house2-2.jpg', 'uploads/properties/big/house2-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (38, 'uploads/properties/small/house2-3.jpg', 'uploads/properties/medium/house2-3.jpg', 'uploads/properties/big/house2-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (39, 'uploads/properties/small/house2-4.jpg', 'uploads/properties/medium/house2-4.jpg', 'uploads/properties/big/house2-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (40, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (41, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (42, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (43, 'uploads/properties/small/house3-1.jpg', 'uploads/properties/medium/house3-1.jpg', 'uploads/properties/big/house3-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (44, 'uploads/properties/small/house3-2.jpg', 'uploads/properties/medium/house3-2.jpg', 'uploads/properties/big/house3-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (45, 'uploads/properties/small/house3-3.jpg', 'uploads/properties/medium/house3-3.jpg', 'uploads/properties/big/house3-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (46, 'uploads/properties/small/house3-4.jpg', 'uploads/properties/medium/house3-4.jpg', 'uploads/properties/big/house3-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (47, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (48, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (49, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (50, 'uploads/properties/small/office1-1.jpg', 'uploads/properties/medium/office1-1.jpg', 'uploads/properties/big/office1-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (51, 'uploads/properties/small/office1-2.jpg', 'uploads/properties/medium/office1-2.jpg', 'uploads/properties/big/office1-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (52, 'uploads/properties/small/office1-3.jpg', 'uploads/properties/medium/office1-3.jpg', 'uploads/properties/big/office1-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (53, 'uploads/properties/small/office1-4.jpg', 'uploads/properties/medium/office1-4.jpg', 'uploads/properties/big/office1-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (54, 'uploads/properties/small/office1-5.jpg', 'uploads/properties/medium/office1-5.jpg', 'uploads/properties/big/office1-5.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (55, 'uploads/properties/small/office1-6.jpg', 'uploads/properties/medium/office1-6.jpg', 'uploads/properties/big/office1-6.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (56, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (57, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (58, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (59, 'uploads/properties/small/office2-1.jpg', 'uploads/properties/medium/office2-1.jpg', 'uploads/properties/big/office2-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (60, 'uploads/properties/small/office2-2.jpg', 'uploads/properties/medium/office2-2.jpg', 'uploads/properties/big/office2-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (61, 'uploads/properties/small/office2-3.jpg', 'uploads/properties/medium/office2-3.jpg', 'uploads/properties/big/office2-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (62, 'uploads/properties/small/office2-4.jpg', 'uploads/properties/medium/office2-4.jpg', 'uploads/properties/big/office2-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (63, 'uploads/properties/small/office2-5.jpg', 'uploads/properties/medium/office2-5.jpg', 'uploads/properties/big/office2-5.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (64, 'uploads/properties/small/office2-6.jpg', 'uploads/properties/medium/office2-6.jpg', 'uploads/properties/big/office2-6.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (65, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (66, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (67, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (68, 'uploads/properties/small/apartment-1.jpg', 'uploads/properties/medium/apartment-1.jpg', 'uploads/properties/big/apartment-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (69, 'uploads/properties/small/apartment-2.jpg', 'uploads/properties/medium/apartment-2.jpg', 'uploads/properties/big/apartment-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (70, 'uploads/properties/small/apartment-3.jpg', 'uploads/properties/medium/apartment-3.jpg', 'uploads/properties/big/apartment-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (71, 'uploads/properties/small/apartment-4.jpg', 'uploads/properties/medium/apartment-4.jpg', 'uploads/properties/big/apartment-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (72, 'uploads/properties/small/apartment-5.jpg', 'uploads/properties/medium/apartment-5.jpg', 'uploads/properties/big/apartment-5.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (73, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (74, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (75, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (76, 'uploads/properties/small/flat1-1.jpg', 'uploads/properties/medium/flat1-1.jpg', 'uploads/properties/big/flat1-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (77, 'uploads/properties/small/flat1-2.jpg', 'uploads/properties/medium/flat1-2.jpg', 'uploads/properties/big/flat1-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (78, 'uploads/properties/small/flat1-3.jpg', 'uploads/properties/medium/flat1-3.jpg', 'uploads/properties/big/flat1-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (79, 'uploads/properties/small/flat1-4.jpg', 'uploads/properties/medium/flat1-4.jpg', 'uploads/properties/big/flat1-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (80, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (81, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (82, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (83, 'uploads/properties/small/flat2-1.jpg', 'uploads/properties/medium/flat2-1.jpg', 'uploads/properties/big/flat2-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (84, 'uploads/properties/small/flat2-2.jpg', 'uploads/properties/medium/flat2-2.jpg', 'uploads/properties/big/flat2-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (85, 'uploads/properties/small/flat2-3.jpg', 'uploads/properties/medium/flat2-3.jpg', 'uploads/properties/big/flat2-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (86, 'uploads/properties/small/flat2-4.jpg', 'uploads/properties/medium/flat2-4.jpg', 'uploads/properties/big/flat2-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (87, 'uploads/properties/small/flat2-5.jpg', 'uploads/properties/medium/flat2-5.jpg', 'uploads/properties/big/flat2-5.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (88, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (89, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (90, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (91, 'uploads/properties/small/house1-1.jpg', 'uploads/properties/medium/house1-1.jpg', 'uploads/properties/big/house1-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (92, 'uploads/properties/small/house1-2.jpg', 'uploads/properties/medium/house1-2.jpg', 'uploads/properties/big/house1-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (93, 'uploads/properties/small/house1-3.jpg', 'uploads/properties/medium/house1-3.jpg', 'uploads/properties/big/house1-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (94, 'uploads/properties/small/house1-4.jpg', 'uploads/properties/medium/house1-4.jpg', 'uploads/properties/big/house1-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (95, 'uploads/properties/small/house1-5.jpg', 'uploads/properties/medium/house1-5.jpg', 'uploads/properties/big/house1-5.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (96, 'uploads/properties/small/house1-6.jpg', 'uploads/properties/medium/house1-6.jpg', 'uploads/properties/big/house1-6.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (97, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (98, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (99, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (100, 'uploads/properties/small/house2-1.jpg', 'uploads/properties/medium/house2-1.jpg', 'uploads/properties/big/house2-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (101, 'uploads/properties/small/house2-2.jpg', 'uploads/properties/medium/house2-2.jpg', 'uploads/properties/big/house2-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (102, 'uploads/properties/small/house2-3.jpg', 'uploads/properties/medium/house2-3.jpg', 'uploads/properties/big/house2-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (103, 'uploads/properties/small/house2-4.jpg', 'uploads/properties/medium/house2-4.jpg', 'uploads/properties/big/house2-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (104, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (105, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (106, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (107, 'uploads/properties/small/house3-1.jpg', 'uploads/properties/medium/house3-1.jpg', 'uploads/properties/big/house3-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (108, 'uploads/properties/small/house3-2.jpg', 'uploads/properties/medium/house3-2.jpg', 'uploads/properties/big/house3-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (109, 'uploads/properties/small/house3-3.jpg', 'uploads/properties/medium/house3-3.jpg', 'uploads/properties/big/house3-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (110, 'uploads/properties/small/house3-4.jpg', 'uploads/properties/medium/house3-4.jpg', 'uploads/properties/big/house3-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (111, 'uploads/properties/small/plan-1.jpg', 'uploads/properties/medium/plan-1.jpg', 'uploads/properties/big/plan-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (112, 'uploads/properties/small/plan-2.jpg', 'uploads/properties/medium/plan-2.jpg', 'uploads/properties/big/plan-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (113, 'uploads/properties/video/video-1.mp4', NULL, NULL, NULL, NULL);
INSERT INTO `attachments` VALUES (114, 'uploads/properties/small/office1-1.jpg', 'uploads/properties/medium/office1-1.jpg', 'uploads/properties/big/office1-1.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (115, 'uploads/properties/small/office1-2.jpg', 'uploads/properties/medium/office1-2.jpg', 'uploads/properties/big/office1-2.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (116, 'uploads/properties/small/office1-3.jpg', 'uploads/properties/medium/office1-3.jpg', 'uploads/properties/big/office1-3.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (117, 'uploads/properties/small/office1-4.jpg', 'uploads/properties/medium/office1-4.jpg', 'uploads/properties/big/office1-4.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (118, 'uploads/properties/small/office1-5.jpg', 'uploads/properties/medium/office1-5.jpg', 'uploads/properties/big/office1-5.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (119, 'uploads/properties/small/office1-6.jpg', 'uploads/properties/medium/office1-6.jpg', 'uploads/properties/big/office1-6.jpg', NULL, NULL);
INSERT INTO `attachments` VALUES (129, 'uploads/small/09e19ceb39be7b7.jpg', 'uploads/medium/c559e4facfd3042.jpg', 'uploads/big/948e4237c37d131.jpg', '2019-12-20 19:50:38.000000', '2019-12-20 19:50:39.000000');

-- ----------------------------
-- Table structure for companies
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `zip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fax` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `about_us` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of companies
-- ----------------------------
INSERT INTO `companies` VALUES (1, 'Green View', 'Tioga Ave', NULL, 'uploads/company-logo/aloha.png', 'New York', 'NY', '13532', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `companies` VALUES (2, 'CNH', 'Eshelman st', NULL, 'uploads/company-logo/best.png', 'Austin', 'TX', '13274', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-13 20:36:12.000000', '2019-11-13 20:36:12.000000');

-- ----------------------------
-- Table structure for properties
-- ----------------------------
DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(4096) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `featured` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `property_type_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of properties
-- ----------------------------
INSERT INTO `properties` VALUES (1, 'Modern and quirky flat', 'About GreatSchools\r\nGreatSchools ratings based on test scores and additional metrics when available.\r\n\r\nAbout the ratings: Historically, GreatSchools ratings have been based solely on a comparison of standardized test results for all schools in a given state. As of September 2017, the GreatSchools ratings also incorporate additional information, when available, such as college readiness, academic progress, advanced courses, equity, discipline and attendance data. GreatSchools ratings are designed to be a starting point to help parents compare schools, and should not be the only factor used in selecting the right school for your family. Learn more\r\n\r\nDisclaimer: School attendance zone boundaries are provided by a third party and subject to change. Check with the applicable school district prior to making a decision based on these boundaries. In addition, school data is obtained from a third party vendor and not guaranteed to be accurate, up to date or complete.', 1, 1, 1, NULL, NULL);
INSERT INTO `properties` VALUES (2, 'Centrally Located Office', 'Renovated 1st floor 2 bedroom, 1 bathroom apartment available January 2020. We are looking for a great tenant to fill this space! The apartment is in close proximity to Temple University and it is easy to access any part of Philadelphia from this location, especially Center City. Contact us as soon as possible. This apartment will not be available for long. :-) Tenant is responsible for gas and electric bills, must remove all trash from building, and respect other tenants.\r\n', NULL, 1, 2, NULL, NULL);
INSERT INTO `properties` VALUES (3, 'Comfortable family house', 'Fantastic 3 bedroom 2 bath available December 1st! This modern apartment was renovated only 3 years ago! High end finishes throughout including granite counter tops, stainless steel appliances, hardwood floors and washer/dryers in the unit. Call to schedule a showing today!\r\n', 1, 2, 3, NULL, NULL);
INSERT INTO `properties` VALUES (4, 'Spacious and warm flat', 'Lofts 640 offers you the \"most bang for your buck\" in Philadelphia! Included with your monthly rental price is indoor parking, fitness center, indoor/heated pool and hot tub with attached outdoor roof deck, yoga/fitness studio, cyber lounge, 24/7 front desk attendant and more!! Walk off the busy street into 640 North Broad and enter an urban space that combines the old with the new. Feel the past mix with a refreshing dose of hip, understated sophistication. The original character of the building is not lost but enhanced by modern accents and furnishings. A thriving community dwells within our walls -- a fitness center, cyber lounge and yoga studio serve to nurture body, mind and spirit. Setting the night sky aglow, our glass-domed pool house is the perfect place to unwind. Go for a swim, relax your muscles in the hot tub, or meet and socialize on the roof deck lounge. Enter the lobby, your public space. Experience orange as it bursts in the artwork and pours from geometric ceiling lights that warm the mocha-colored floors. Accented with a healthy dose of pure white and stainless steel, contrast brings together the energizing elements of your entrance. Lofts 640 is just six (6) blocks north of City Hall on Broad Street. Lofts 640 is centrally located to Philadelphia shoppes, restaurants, hospitals and the thriving community of Fairmount. Minutes from Reading Terminal Market and the Pennsylvania Convention Center, Lofts 640 combines commuter convenience of center city living with spectacular urban spaciousness of true loft living.\r\n', NULL, 2, 4, NULL, NULL);
INSERT INTO `properties` VALUES (5, 'House with a pool', 'The entire new construction home is yours to enjoy! When you enter the house the first floor of the home, there is a full bathroom (walk-in shower), 1 of the 3 bedrooms, kitchen & family room. There is a door off of the kitchen which leads to a private deck outside. On the second floor you will find the washer/dryer and the 2 other private bedrooms along with a 2 full bathrooms. This home is a great place for couples, business travelers, & families! Rent month to month, annual lease available!\r\n', NULL, 3, 5, NULL, NULL);
INSERT INTO `properties` VALUES (6, 'Bright and sunny house', 'About GreatSchools\r\nGreatSchools ratings based on test scores and additional metrics when available.\r\n\r\nAbout the ratings: Historically, GreatSchools ratings have been based solely on a comparison of standardized test results for all schools in a given st', 1, 3, 6, NULL, NULL);
INSERT INTO `properties` VALUES (7, 'Luxury office space', 'This is a cute 1 bedroom apt. plenty of cabinet space in kitchen walk in closet in master bedroom. the 2nd bedroom is great for small kid or a reading, gaming, or study room. you got to check this out.', 1, 4, 7, NULL, NULL);
INSERT INTO `properties` VALUES (8, 'Centrally located apartment', 'Beautiful and newly renovated apartment. Near public transportation. Tenant pays their own utilities: Heat, water, and gas.\r\n', 1, 4, 1, NULL, NULL);
INSERT INTO `properties` VALUES (9, 'Morgan Apartments', 'Within walking distance of OARDC/ATI Wooster campus. Large eat-in kitchen with appliances. Bathroom has shower only. Parking is limited so only one vehicle is permitted. Non-smoking. Assist animals only. Requires first month\'s rent and deposit.', NULL, 5, 2, NULL, NULL);
INSERT INTO `properties` VALUES (10, 'Greyson', 'With access to world-class amenities and a prime location just minutes from the Mall at Tuttle Crossing, our beautifully designed apartments give residents the best of both worlds. Welcome to The Greyson, a brand new community', NULL, 6, 3, NULL, NULL);
INSERT INTO `properties` VALUES (11, 'Orchard of Landen', 'School attendance zone boundaries are provided by a third party and subject to change. Check with the applicable school district prior to making a decision based on these boundaries.', 1, 7, 4, NULL, NULL);
INSERT INTO `properties` VALUES (12, 'Devolld Cemetery Ln', 'LARGE SUNNY 2 BEDROOM WITH BEAUTIFUL REAL HARDWOOD floors, high ceilings, and NEW STAINLESS APPLIANCES! Quiet, secure and well-cared-for historic building in Wash West/Midtown Village, right in the center of the city near all transportation and bike lanes. 2 blocks from Jefferson! High ceilings, original touches and responsive owner/ landlord! FEATURING: *2 SUNNY EQUAL-SIZE BEDROOMS! GREAT FOR ROOMMATES OR HOME OFFICE! *MODERN SEPARATE OPEN KITCHEN WITH NEW STAINLESS STEEL APPLIANCES - FREE GAS COOKING AND FULL-SIZE REFRIGERATOR & MICROWAVE *HUGE LIVING/DINING AREA, CABLE READY, WITH CEILING FAN & STUDY AREA *BIG BRIGHT TILED BATH WITH UNIQUE OPEN SKYLIGHT & FULL SIZE TUB *GREAT CLOSET SPACE THROUGHOUT! *PRIVATE TOP FLOOR LOCATION - BUILT IN AC UNIT! ENJOY GREAT SPACE IN THE BEST NEIGHBORHOOD OF CENTER CITY! CLOSE TO EVERYTHING CENTER CITY HAS TO OFFER - INCLUDING JEFFERSON, UNIVERSITY OF THE ARTS, U OF P, PENNSYLVANIA ; HAHNEMANN MEDICAL CENTERS, RESTAURANTS AND GASTROPUBS GALORE! PET FRIENDLY WITH PET FEE & DEPOSIT - LAUNDRY IN BASEMENT Owner pays heat, cold & hot water, cooking, trash & recycling removal. Rent: $2,200 Application Fee: $55 Security Deposit: $2,200 Available Now\r\n', NULL, 4, 5, NULL, NULL);
INSERT INTO `properties` VALUES (13, 'Red Fox Ln', 'Available now this new construction first floor 2 bedroom, 2 bath unit comes equipped with range, refrigerator, microwave, dishwasher, disposal, washer, dryer, gas heat, central air, covered porch/patio, park at your door, flexible leasing available.', NULL, 1, 3, NULL, NULL);
INSERT INTO `properties` VALUES (14, 'Falls Bridge Lofts', 'Beautifully remodeled bathrooms, fresh paint, hardwood floors, LARGE master bedroom with it\'s own FULL bathroom. Tons of storage space in the basement and full one car garage with off street parking. Owner pays trash and sewer.', NULL, 1, 4, NULL, NULL);
INSERT INTO `properties` VALUES (15, 'Sparkle flat', 'Beautiful and newly renovated apartment. Near public transportation. Tenant pays their own utilities: Heat, water, and gas.\r\n', 1, 2, 2, NULL, NULL);
INSERT INTO `properties` VALUES (24, 'asdf', NULL, NULL, 1, NULL, '2019-12-18 18:19:52.000000', '2019-12-18 18:19:52.000000');
INSERT INTO `properties` VALUES (25, 'asdf', NULL, NULL, 1, NULL, '2019-12-18 18:20:41.000000', '2019-12-18 18:20:41.000000');

-- ----------------------------
-- Table structure for property_additional_features
-- ----------------------------
DROP TABLE IF EXISTS `property_additional_features`;
CREATE TABLE `property_additional_features`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 56 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of property_additional_features
-- ----------------------------
INSERT INTO `property_additional_features` VALUES (1, 1, 'Heat', 'Natural Gas', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (2, 1, 'Roof', 'Composition/Shingle', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (4, 1, 'Floors', 'Wall-to-Wall Carpet', '2019-11-12 20:08:27.000000', '2019-11-12 20:08:27.000000');
INSERT INTO `property_additional_features` VALUES (5, 1, 'Water', 'District/Public', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (6, 2, 'Cross Streets', 'Orangethorpe-Gilbert', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (7, 2, 'Windows', 'Skylights', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (8, 2, 'Childroom', '2', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (9, 3, 'Flat', '5', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (10, 3, 'Heat', 'Electricity', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (11, 4, 'Heat', 'Natural Gas', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (12, 4, 'Roof', 'Compostion/Shingle', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (13, 4, 'Floors', 'Wall-to-Wall Carpet', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (14, 5, 'Water', 'District/Public', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (15, 5, 'Cross Streets', 'Orangethorpe-Gilbert', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (16, 5, 'Windows', 'Skylights', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (17, 5, 'Childroom', '1', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (18, 6, 'Flat', '3', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (19, 6, 'Heat', 'Natural Gas', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (20, 6, 'Roof', 'Composition/Shingle', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (21, 6, 'Floors', '2', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (22, 7, 'Water', 'District/Public', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (23, 7, 'Cross Streets', 'Orangethorpe-Gilbert', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (24, 8, 'Windows', 'Skylights', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (25, 8, 'Childroom', '3', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (26, 8, 'Flat', '2', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (27, 9, 'Heat', 'Natural Gas', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (28, 9, 'Roof', 'Composition/Shingle', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (29, 9, 'Floors', '3', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (30, 9, 'Water', 'District/Public', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (31, 10, 'Cross Streets', 'Orangethorpe-Gilbert', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (32, 10, 'Windows', 'Skylights', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (33, 10, 'Childroom', '2', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (34, 11, 'Flat', '4', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (35, 11, 'Heat', 'Natural Gas', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (36, 11, 'Roof', 'Composition/Shingle', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (37, 11, 'Floors', '3', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (38, 11, 'Water', 'District/Public', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (39, 11, 'Cross Streets', 'Orangethorpe-Gilbert', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (40, 11, 'Windows', 'Skylights', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (41, 12, 'Childroom', '3', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (42, 12, 'Flat', '2', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (43, 12, 'Heat', 'Natural Gas', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (44, 13, 'Roof', 'Composition/Shingle', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (45, 13, 'Floors', '2', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (46, 13, 'Water', 'District/Public', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (47, 13, 'Cross Streets', 'Orangethorpe-Gilbert', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (48, 14, 'Windows', 'Skylights', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (49, 14, 'Childroom', '1', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (50, 14, 'Flat', '2', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (51, 15, 'Heat', 'Natural Gas', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (52, 15, 'Roof', 'Composition/Shingle', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (53, 15, 'Floors', '2', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (54, 15, 'Water', 'District/Public', NULL, NULL);
INSERT INTO `property_additional_features` VALUES (55, 15, 'Cross Streets', 'Orangethorpe-Gilbert', NULL, NULL);

-- ----------------------------
-- Table structure for property_details
-- ----------------------------
DROP TABLE IF EXISTS `property_details`;
CREATE TABLE `property_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 303 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of property_details
-- ----------------------------
INSERT INTO `property_details` VALUES (1, 1, 'city', 'Chester', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (2, 1, 'zipcode', '551', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (3, 1, 'neighborhood', 'vel eget mauris', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (4, 1, 'street', 'E Venango St', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (5, 1, 'lat', '41.326', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (6, 1, 'lng', '77.8982', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (7, 1, 'address', 'viverra faucibus ante', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (8, 1, 'price_dollar_sale', '927376', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (9, 1, 'price_dollar_rent', '7700', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (10, 1, 'price_euro_sale', '772813', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (11, 1, 'price_euro_rent', '6416', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (12, 1, 'bedrooms', '5', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (13, 1, 'bathrooms', '2', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (14, 1, 'garages', '1', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (15, 1, 'area', '5227', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (16, 1, 'year', '2003', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (17, 1, 'ratings_count', '27', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (18, 1, 'ratings_value', '1.77', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (19, 1, 'published', '2016-5-19', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (20, 1, 'views', '122', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (21, 2, 'city', 'Clairton', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (22, 2, 'zipcode', '576', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (23, 2, 'neighborhood', 'Phasellus eros Maecenas', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (24, 2, 'street', 'Eddington St', '2019-11-15 02:26:31.000000', '2019-11-15 02:26:31.000000');
INSERT INTO `property_details` VALUES (25, 2, 'lat', '41.4836', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (26, 2, 'lng', '77.447', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (27, 2, 'address', 'Lorem justo dictum', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (28, 2, 'price_dollar_sale', '291125', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (29, 2, 'price_dollar_rent', '2353', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (30, 2, 'price_euro_sale', '242604', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (31, 2, 'price_euro_rent', '1960', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (32, 2, 'bedrooms', '4', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (33, 2, 'bathrooms', '2', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (34, 2, 'garages', '1', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (35, 2, 'area', '5617', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (36, 2, 'year', '2016', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (37, 2, 'ratings_count', '8', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (38, 2, 'ratings_value', '1.76', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (39, 2, 'published', '2012-1-9', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (40, 2, 'views', '79', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (41, 3, 'city', 'Corry', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (42, 3, 'zipcode', '344', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (43, 3, 'neighborhood', 'ut rhoncus quam', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (44, 3, 'street', 'Erwin St', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (45, 3, 'lat', '41.7451', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (46, 3, 'lng', '77.4484', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (47, 3, 'address', 'eget parturient velit', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (48, 3, 'price_dollar_sale', '288985', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (49, 3, 'price_dollar_rent', '3125', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (50, 3, 'price_euro_sale', '240820', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (51, 3, 'price_euro_rent', '2604', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (52, 3, 'bedrooms', '3', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (53, 3, 'bathrooms', '2', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (54, 3, 'garages', '1', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (55, 3, 'area', '5619', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (56, 3, 'year', '2008', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (57, 3, 'ratings_count', '26', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (58, 3, 'ratings_value', '2.82', '2019-11-15 02:26:32.000000', '2019-11-15 02:26:32.000000');
INSERT INTO `property_details` VALUES (59, 3, 'published', '2011-1-19', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (60, 3, 'views', '104', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (61, 4, 'city', 'Hazleton', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (62, 4, 'zipcode', '903', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (63, 4, 'neighborhood', 'dapibus elementum porttitor', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (64, 4, 'street', 'Gerry St', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (65, 4, 'lat', '41.1288', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (66, 4, 'lng', '77.4368', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (67, 4, 'address', 'et sit Aliquam', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (68, 4, 'price_dollar_sale', '558743', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (69, 4, 'price_dollar_rent', '18691', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (70, 4, 'price_euro_sale', '465619', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (71, 4, 'price_euro_rent', '15575', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (72, 4, 'bedrooms', '5', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (73, 4, 'bathrooms', '2', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (74, 4, 'garages', '1', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (75, 4, 'area', '4482', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (76, 4, 'year', '2000', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (77, 4, 'ratings_count', '24', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (78, 4, 'ratings_value', '4.85', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (79, 4, 'published', '2016-8-5', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (80, 4, 'views', '92', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (81, 5, 'city', 'Johnstown', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (82, 5, 'zipcode', '548', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (83, 5, 'neighborhood', 'Nam pulvinar Donec', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (84, 5, 'street', 'Harpers Pl', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (85, 5, 'lat', '41.2299', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (86, 5, 'lng', '77.5132', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (87, 5, 'address', 'sapien Quisque leo', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (88, 5, 'price_dollar_sale', '261924', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (89, 5, 'price_dollar_rent', '2310', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (90, 5, 'price_euro_sale', '218270', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (91, 5, 'price_euro_rent', '1925', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (92, 5, 'bedrooms', '3', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (93, 5, 'bathrooms', '1', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (94, 5, 'garages', '1', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (95, 5, 'area', '4417', '2019-11-15 02:26:33.000000', '2019-11-15 02:26:33.000000');
INSERT INTO `property_details` VALUES (96, 5, 'year', '2004', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (97, 5, 'ratings_count', '13', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (98, 5, 'ratings_value', '1.32', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (99, 5, 'published', '2011-6-1', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (100, 5, 'views', '60', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (101, 6, 'city', 'Latrobe', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (102, 6, 'zipcode', '207', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (103, 6, 'neighborhood', 'ut augue tempus', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (104, 6, 'street', 'Inwood Ln', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (105, 6, 'lat', '41.0048', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (106, 6, 'lng', '77.4552', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (107, 6, 'address', 'nec sit blandit', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (108, 6, 'price_dollar_sale', '100914', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (109, 6, 'price_dollar_rent', '11824', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (110, 6, 'price_euro_sale', '84095', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (111, 6, 'price_euro_rent', '9853', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (112, 6, 'bedrooms', '3', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (113, 6, 'bathrooms', '2', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (114, 6, 'garages', '2', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (115, 6, 'area', '5393', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (116, 6, 'year', '2004', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (117, 6, 'ratings_count', '11', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (118, 6, 'ratings_value', '2.45', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (119, 6, 'published', '2015-10-25', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (120, 6, 'views', '116', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (121, 7, 'city', 'Pittston', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (122, 7, 'zipcode', '936', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (123, 7, 'neighborhood', 'fringilla sociis velit', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (124, 7, 'street', 'Kirkwood Rd', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (125, 7, 'lat', '41.6554', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (126, 7, 'lng', '77.0605', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (127, 7, 'address', 'pretium eu hendrerit', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (128, 7, 'price_dollar_sale', '230033', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (129, 7, 'price_dollar_rent', '5266', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (130, 7, 'price_euro_sale', '191694', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (131, 7, 'price_euro_rent', '4388', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (132, 7, 'bedrooms', '3', '2019-11-15 02:26:34.000000', '2019-11-15 02:26:34.000000');
INSERT INTO `property_details` VALUES (133, 7, 'bathrooms', '1', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (134, 7, 'garages', '2', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (135, 7, 'area', '5540', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (136, 7, 'year', '2010', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (137, 7, 'ratings_count', '11', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (138, 7, 'ratings_value', '2.76', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (139, 7, 'published', '2015-11-20', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (140, 7, 'views', '15', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (141, 8, 'city', 'Sharon', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (142, 8, 'zipcode', '382', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (143, 8, 'neighborhood', 'ultricies vel eros', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (144, 8, 'street', 'Linmore Ave', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (145, 8, 'lat', '41.5521', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (146, 8, 'lng', '77.4826', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (147, 8, 'address', 'ipsum dictum justo', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (148, 8, 'price_dollar_sale', '573664', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (149, 8, 'price_dollar_rent', '4577', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (150, 8, 'price_euro_sale', '478053', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (151, 8, 'price_euro_rent', '3814', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (152, 8, 'bedrooms', '3', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (153, 8, 'bathrooms', '1', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (154, 8, 'garages', '2', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (155, 8, 'area', '4680', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (156, 8, 'year', '2007', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (157, 8, 'ratings_count', '6', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (158, 8, 'ratings_value', '0.3', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (159, 8, 'published', '2016-11-27', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (160, 8, 'views', '16', '2019-11-15 02:26:35.000000', '2019-11-15 02:26:35.000000');
INSERT INTO `property_details` VALUES (161, 9, 'city', 'Washington', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (162, 9, 'zipcode', '463', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (163, 9, 'neighborhood', 'eget fringilla ante', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (164, 9, 'street', 'Marigold Ln', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (165, 9, 'lat', '41.116', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (166, 9, 'lng', '77.7837', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (167, 9, 'address', 'ut augue vel', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (168, 9, 'price_dollar_sale', '776670', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (169, 9, 'price_dollar_rent', '30243', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (170, 9, 'price_euro_sale', '647225', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (171, 9, 'price_euro_rent', '25202', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (172, 9, 'bedrooms', '2', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (173, 9, 'bathrooms', '2', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (174, 9, 'garages', '1', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (175, 9, 'area', '3860', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (176, 9, 'year', '2007', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (177, 9, 'ratings_count', '17', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (178, 9, 'ratings_value', '3.02', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (179, 9, 'published', '2015-4-7', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (180, 9, 'views', '7', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (181, 10, 'city', 'Warren', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (182, 10, 'zipcode', '805', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (183, 10, 'neighborhood', 'Cras tellus Nam', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (184, 10, 'street', 'Morning Glory Rd', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (185, 10, 'lat', '41.5234', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (186, 10, 'lng', '77.4472', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (187, 10, 'address', 'leo ipsum justo', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (188, 10, 'price_dollar_sale', '657313', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (189, 10, 'price_dollar_rent', '6310', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (190, 10, 'price_euro_sale', '547760', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (191, 10, 'price_euro_rent', '5258', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (192, 10, 'bedrooms', '5', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (193, 10, 'bathrooms', '2', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (194, 10, 'garages', '1', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (195, 10, 'area', '3842', '2019-11-15 02:26:36.000000', '2019-11-15 02:26:36.000000');
INSERT INTO `property_details` VALUES (196, 10, 'year', '2014', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (197, 10, 'ratings_count', '16', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (198, 10, 'ratings_value', '2.48', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (199, 10, 'published', '2013-11-17', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (200, 10, 'views', '57', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (201, 11, 'city', 'Parker', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (202, 11, 'zipcode', '194', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (203, 11, 'neighborhood', 'velit dui fringilla', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (204, 11, 'street', 'N Convent Ln', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (205, 11, 'lat', '41.3222', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (206, 11, 'lng', '77.3871', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (207, 11, 'address', 'felis tincidunt eleifend', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (208, 11, 'price_dollar_sale', '903963', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (209, 11, 'price_dollar_rent', '9755', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (210, 11, 'price_euro_sale', '753302', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (211, 11, 'price_euro_rent', '8129', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (212, 11, 'bedrooms', '2', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (213, 11, 'bathrooms', '2', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (214, 11, 'garages', '2', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (215, 11, 'area', '2364', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (216, 11, 'year', '2007', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (217, 11, 'ratings_count', '10', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (218, 11, 'ratings_value', '0.29', '2019-11-15 02:26:37.000000', '2019-11-15 02:26:37.000000');
INSERT INTO `property_details` VALUES (219, 11, 'published', '2011-1-3', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (220, 11, 'views', '30', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (221, 12, 'city', 'Chester', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (222, 12, 'zipcode', '301', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (223, 12, 'neighborhood', 'libero vulputate a', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (224, 12, 'street', 'Napfle St', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (225, 12, 'lat', '41.0083', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (226, 12, 'lng', '77.7044', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (227, 12, 'address', 'leo tincidunt feugiat', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (228, 12, 'price_dollar_sale', '993669', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (229, 12, 'price_dollar_rent', '11013', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (230, 12, 'price_euro_sale', '828057', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (231, 12, 'price_euro_rent', '9177', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (232, 12, 'bedrooms', '2', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (233, 12, 'bathrooms', '2', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (234, 12, 'garages', '2', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (235, 12, 'area', '2902', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (236, 12, 'year', '2007', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (237, 12, 'ratings_count', '20', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (238, 12, 'ratings_value', '3', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (239, 12, 'published', '2015-9-1', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (240, 12, 'views', '0', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (241, 13, 'city', 'Clairton', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (242, 13, 'zipcode', '789', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (243, 13, 'neighborhood', 'velit dictum eget', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (244, 13, 'street', 'Oak Lane Rd', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (245, 13, 'lat', '41.2605', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (246, 13, 'lng', '77.1827', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (247, 13, 'address', 'mauris viverra nisi', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (248, 13, 'price_dollar_sale', '334727', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (249, 13, 'price_dollar_rent', '138123', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (250, 13, 'price_euro_sale', '278939', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (251, 13, 'price_euro_rent', '115102', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (252, 13, 'bedrooms', '2', '2019-11-15 02:26:38.000000', '2019-11-15 02:26:38.000000');
INSERT INTO `property_details` VALUES (253, 13, 'bathrooms', '2', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (254, 13, 'garages', '2', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (255, 13, 'area', '4695', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (256, 13, 'year', '2000', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (257, 13, 'ratings_count', '25', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (258, 13, 'ratings_value', '3.11', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (259, 13, 'published', '2012-7-17', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (260, 13, 'views', '96', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (261, 14, 'city', 'Corry', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (262, 14, 'zipcode', '872', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (263, 14, 'neighborhood', 'tempus In Etiam', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (264, 14, 'street', 'E Venango St', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (265, 14, 'lat', '41.7689', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (266, 14, 'lng', '77.5856', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (267, 14, 'address', 'Aenean commodo amet', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (268, 14, 'price_dollar_sale', '714590', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (269, 14, 'price_dollar_rent', '5222', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (270, 14, 'price_euro_sale', '595491', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (271, 14, 'price_euro_rent', '4351', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (272, 14, 'bedrooms', '3', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (273, 14, 'bathrooms', '2', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (274, 14, 'garages', '1', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (275, 14, 'area', '3756', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (276, 14, 'year', '2011', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (277, 14, 'ratings_count', '12', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (278, 14, 'ratings_value', '3.98', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (279, 14, 'published', '2012-10-3', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (280, 14, 'views', '101', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (281, 15, 'city', 'Hazleton', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (282, 15, 'zipcode', '485', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (283, 15, 'neighborhood', 'pulvinar hendrerit nec', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (284, 15, 'street', 'Eddington St', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (285, 15, 'lat', '41.7825', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (286, 15, 'lng', '77.1704', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (287, 15, 'address', 'viverra fringilla Quisque', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (288, 15, 'price_dollar_sale', '1074196', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (289, 15, 'price_dollar_rent', '610655', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (290, 15, 'price_euro_sale', '895163', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (291, 15, 'price_euro_rent', '508879', '2019-11-15 02:26:39.000000', '2019-11-15 02:26:39.000000');
INSERT INTO `property_details` VALUES (292, 15, 'bedrooms', '5', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES (293, 15, 'bathrooms', '2', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES (294, 15, 'garages', '2', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES (295, 15, 'area', '4171', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES (296, 15, 'year', '2008', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES (297, 15, 'ratings_count', '22', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES (298, 15, 'ratings_value', '0.84', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES (299, 15, 'published', '2012-12-14', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES (300, 15, 'views', '41', '2019-11-15 02:26:40.000000', '2019-11-15 02:26:40.000000');
INSERT INTO `property_details` VALUES (301, 25, 'city', 'boston', '2019-12-18 18:20:41.000000', '2019-12-18 18:20:41.000000');
INSERT INTO `property_details` VALUES (302, 25, 'zipcode', '123', '2019-12-18 18:20:41.000000', '2019-12-18 18:20:41.000000');

-- ----------------------------
-- Table structure for property_feature_pivot
-- ----------------------------
DROP TABLE IF EXISTS `property_feature_pivot`;
CREATE TABLE `property_feature_pivot`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NULL DEFAULT NULL,
  `property_feature_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of property_feature_pivot
-- ----------------------------
INSERT INTO `property_feature_pivot` VALUES (1, 1, 2, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (2, 1, 1, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (5, 1, 9, '2019-11-12 20:07:50.000000', '2019-11-12 20:07:50.000000');
INSERT INTO `property_feature_pivot` VALUES (6, 2, 5, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (7, 2, 3, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (8, 2, 5, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (9, 2, 9, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (10, 3, 3, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (11, 3, 7, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (12, 4, 8, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (13, 4, 4, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (14, 4, 6, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (15, 4, 9, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (16, 4, 1, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (17, 5, 8, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (18, 5, 5, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (19, 6, 4, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (20, 6, 8, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (21, 6, 1, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (22, 6, 1, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (23, 7, 2, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (24, 7, 4, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (25, 8, 8, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (26, 9, 4, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (27, 9, 2, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (28, 10, 3, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (29, 10, 7, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (30, 10, 5, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (31, 10, 6, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (32, 10, 2, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (33, 11, 7, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (34, 11, 4, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (35, 12, 3, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (36, 12, 1, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (37, 12, 5, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (38, 13, 5, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (39, 14, 4, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (40, 14, 2, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (41, 14, 6, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (42, 15, 7, NULL, NULL);
INSERT INTO `property_feature_pivot` VALUES (43, 15, 6, NULL, NULL);

-- ----------------------------
-- Table structure for property_features
-- ----------------------------
DROP TABLE IF EXISTS `property_features`;
CREATE TABLE `property_features`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of property_features
-- ----------------------------
INSERT INTO `property_features` VALUES (1, 'Air Conditioning', NULL, NULL);
INSERT INTO `property_features` VALUES (2, 'Barbeque', NULL, NULL);
INSERT INTO `property_features` VALUES (3, 'Dryer', NULL, NULL);
INSERT INTO `property_features` VALUES (4, 'Microwave', NULL, NULL);
INSERT INTO `property_features` VALUES (5, 'Refrigerator', NULL, NULL);
INSERT INTO `property_features` VALUES (6, 'Fireplace', NULL, NULL);
INSERT INTO `property_features` VALUES (7, 'Swimming Pool', NULL, NULL);
INSERT INTO `property_features` VALUES (8, 'TV Cable', NULL, NULL);
INSERT INTO `property_features` VALUES (9, 'Wifi', NULL, NULL);

-- ----------------------------
-- Table structure for property_galleries
-- ----------------------------
DROP TABLE IF EXISTS `property_galleries`;
CREATE TABLE `property_galleries`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NULL DEFAULT NULL,
  `plan_id` int(11) NULL DEFAULT NULL,
  `type` enum('Image','Video') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `attachment_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 120 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of property_galleries
-- ----------------------------
INSERT INTO `property_galleries` VALUES (1, 1, 1, 'Image', NULL, 1, '2019-11-15 02:22:26.000000', '2019-11-15 02:22:26.000000');
INSERT INTO `property_galleries` VALUES (2, 1, 2, 'Image', NULL, 2, '2019-11-15 02:22:26.000000', '2019-11-15 02:22:26.000000');
INSERT INTO `property_galleries` VALUES (3, 1, 0, 'Video', 'Video Overview', 3, '2019-11-15 02:22:26.000000', '2019-11-15 02:22:26.000000');
INSERT INTO `property_galleries` VALUES (4, 1, 0, 'Image', NULL, 4, '2019-11-15 02:22:26.000000', '2019-11-15 02:22:26.000000');
INSERT INTO `property_galleries` VALUES (5, 1, 0, 'Image', NULL, 5, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (6, 1, 0, 'Image', NULL, 6, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (7, 1, 0, 'Image', NULL, 7, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (8, 1, 0, 'Image', NULL, 8, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (9, 2, 3, 'Image', NULL, 9, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (10, 2, 4, 'Image', NULL, 10, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (11, 2, 0, 'Video', 'Video Overview', 11, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (12, 2, 0, 'Image', NULL, 12, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (13, 2, 0, 'Image', NULL, 13, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (14, 2, 0, 'Image', NULL, 14, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (15, 2, 0, 'Image', NULL, 15, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (16, 3, 5, 'Image', NULL, 16, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (17, 3, 6, 'Image', NULL, 17, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (18, 3, 0, 'Video', 'Video Overview', 18, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (19, 3, 0, 'Image', NULL, 19, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (20, 3, 0, 'Image', NULL, 20, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (21, 3, 0, 'Image', NULL, 21, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (22, 3, 0, 'Image', NULL, 22, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (23, 3, 0, 'Image', NULL, 23, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (24, 4, 7, 'Image', NULL, 24, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (25, 4, 8, 'Image', NULL, 25, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (26, 4, 0, 'Video', 'Video Overview', 26, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (27, 4, 0, 'Image', NULL, 27, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (28, 4, 0, 'Image', NULL, 28, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (29, 4, 0, 'Image', NULL, 29, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (30, 4, 0, 'Image', NULL, 30, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (31, 4, 0, 'Image', NULL, 31, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (32, 4, 0, 'Image', NULL, 32, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (33, 5, 9, 'Image', NULL, 33, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (34, 5, 10, 'Image', NULL, 34, '2019-11-15 02:22:27.000000', '2019-11-15 02:22:27.000000');
INSERT INTO `property_galleries` VALUES (35, 5, 0, 'Video', 'Video Overview', 35, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (36, 5, 0, 'Image', NULL, 36, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (37, 5, 0, 'Image', NULL, 37, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (38, 5, 0, 'Image', NULL, 38, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (39, 5, 0, 'Image', NULL, 39, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (40, 6, 11, 'Image', NULL, 40, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (41, 6, 12, 'Image', NULL, 41, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (42, 6, 0, 'Video', 'Video Overview', 42, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (43, 6, 0, 'Image', NULL, 43, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (44, 6, 0, 'Image', NULL, 44, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (45, 6, 0, 'Image', NULL, 45, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (46, 6, 0, 'Image', NULL, 46, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (47, 7, 13, 'Image', NULL, 47, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (48, 7, 14, 'Image', NULL, 48, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (49, 7, 0, 'Video', 'Video Overview', 49, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (50, 7, 0, 'Image', NULL, 50, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (51, 7, 0, 'Image', NULL, 51, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (52, 7, 0, 'Image', NULL, 52, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (53, 7, 0, 'Image', NULL, 53, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (54, 7, 0, 'Image', NULL, 54, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (55, 7, 0, 'Image', NULL, 55, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (56, 8, 15, 'Image', NULL, 56, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (57, 8, 16, 'Image', NULL, 57, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (58, 8, 0, 'Video', 'Video Overview', 58, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (59, 8, 0, 'Image', NULL, 59, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (60, 8, 0, 'Image', NULL, 60, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (61, 8, 0, 'Image', NULL, 61, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (62, 8, 0, 'Image', NULL, 62, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (63, 8, 0, 'Image', NULL, 63, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (64, 8, 0, 'Image', NULL, 64, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (65, 9, 17, 'Image', NULL, 65, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (66, 9, 18, 'Image', NULL, 66, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (67, 9, 0, 'Video', 'Video Overview', 67, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (68, 9, 0, 'Image', NULL, 68, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (69, 9, 0, 'Image', NULL, 69, '2019-11-15 02:22:28.000000', '2019-11-15 02:22:28.000000');
INSERT INTO `property_galleries` VALUES (70, 9, 0, 'Image', NULL, 70, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (71, 9, 0, 'Image', NULL, 71, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (72, 9, 0, 'Image', NULL, 72, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (73, 10, 19, 'Image', NULL, 73, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (74, 10, 20, 'Image', NULL, 74, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (75, 10, 0, 'Video', 'Video Overview', 75, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (76, 10, 0, 'Image', NULL, 76, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (77, 10, 0, 'Image', NULL, 77, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (78, 10, 0, 'Image', NULL, 78, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (79, 10, 0, 'Image', NULL, 79, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (80, 11, 21, 'Image', NULL, 80, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (81, 11, 22, 'Image', NULL, 81, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (82, 11, 0, 'Video', 'Video Overview', 82, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (83, 11, 0, 'Image', NULL, 83, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (84, 11, 0, 'Image', NULL, 84, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (85, 11, 0, 'Image', NULL, 85, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (86, 11, 0, 'Image', NULL, 86, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (87, 11, 0, 'Image', NULL, 87, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (88, 12, 23, 'Image', NULL, 88, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (89, 12, 24, 'Image', NULL, 89, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (90, 12, 0, 'Video', 'Video Overview', 90, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (91, 12, 0, 'Image', NULL, 91, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (92, 12, 0, 'Image', NULL, 92, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (93, 12, 0, 'Image', NULL, 93, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (94, 12, 0, 'Image', NULL, 94, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (95, 12, 0, 'Image', NULL, 95, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (96, 12, 0, 'Image', NULL, 96, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (97, 13, 25, 'Image', NULL, 97, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (98, 13, 26, 'Image', NULL, 98, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (99, 13, 0, 'Video', 'Video Overview', 99, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (100, 13, 0, 'Image', NULL, 100, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (101, 13, 0, 'Image', NULL, 101, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (102, 13, 0, 'Image', NULL, 102, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (103, 13, 0, 'Image', NULL, 103, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (104, 14, 27, 'Image', NULL, 104, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (105, 14, 28, 'Image', NULL, 105, '2019-11-15 02:22:29.000000', '2019-11-15 02:22:29.000000');
INSERT INTO `property_galleries` VALUES (106, 14, 0, 'Video', 'Video Overview', 106, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (107, 14, 0, 'Image', NULL, 107, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (108, 14, 0, 'Image', NULL, 108, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (109, 14, 0, 'Image', NULL, 109, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (110, 14, 0, 'Image', NULL, 110, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (111, 15, 29, 'Image', NULL, 111, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (112, 15, 30, 'Image', NULL, 112, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (113, 15, 0, 'Video', 'Video Overview', 113, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (114, 15, 0, 'Image', NULL, 114, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (115, 15, 0, 'Image', NULL, 115, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (116, 15, 0, 'Image', NULL, 116, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (117, 15, 0, 'Image', NULL, 117, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (118, 15, 0, 'Image', NULL, 118, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');
INSERT INTO `property_galleries` VALUES (119, 15, 0, 'Image', NULL, 119, '2019-11-15 02:22:30.000000', '2019-11-15 02:22:30.000000');

-- ----------------------------
-- Table structure for property_plans
-- ----------------------------
DROP TABLE IF EXISTS `property_plans`;
CREATE TABLE `property_plans`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `area` int(255) NULL DEFAULT NULL,
  `rooms` int(11) NULL DEFAULT NULL,
  `baths` int(11) NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of property_plans
-- ----------------------------
INSERT INTO `property_plans` VALUES (1, 1, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1180, 3, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (2, 1, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1200, 5, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (3, 2, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1342, 4, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (4, 2, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2513, 3, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (5, 3, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2321, 4, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (6, 3, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 3146, 6, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (7, 4, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1422, 5, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (8, 4, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1352, 3, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (9, 5, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2653, 4, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (10, 5, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1241, 6, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (11, 6, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1864, 5, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (12, 6, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1853, 4, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (13, 7, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1643, 3, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (14, 7, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1753, 4, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (15, 8, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1856, 5, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (16, 8, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1367, 4, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (17, 9, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2639, 4, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (18, 9, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2853, 5, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (19, 10, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2658, 6, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (20, 10, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2534, 6, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (21, 11, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1464, 5, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (22, 11, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2643, 3, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (23, 12, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2574, 5, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (24, 12, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2126, 3, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (25, 13, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1362, 4, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (26, 13, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1373, 5, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (27, 14, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1325, 6, 1, NULL, NULL);
INSERT INTO `property_plans` VALUES (28, 14, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1586, 6, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (29, 15, 'First floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 1964, 3, 2, NULL, NULL);
INSERT INTO `property_plans` VALUES (30, 15, 'Second Floor', 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.', 2064, 4, 1, NULL, NULL);

-- ----------------------------
-- Table structure for property_status_pivot
-- ----------------------------
DROP TABLE IF EXISTS `property_status_pivot`;
CREATE TABLE `property_status_pivot`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NULL DEFAULT NULL,
  `property_status_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of property_status_pivot
-- ----------------------------
INSERT INTO `property_status_pivot` VALUES (1, 1, 1, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (2, 1, 3, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (3, 2, 6, '2019-11-12 20:11:42.000000', '2019-11-12 20:11:42.000000');
INSERT INTO `property_status_pivot` VALUES (4, 3, 2, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (5, 4, 2, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (6, 4, 4, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (7, 5, 1, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (8, 6, 6, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (9, 7, 5, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (10, 7, 2, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (11, 8, 1, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (12, 9, 6, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (13, 10, 1, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (14, 10, 5, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (15, 11, 2, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (16, 12, 2, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (17, 12, 4, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (18, 13, 6, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (19, 14, 6, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (20, 15, 2, NULL, NULL);
INSERT INTO `property_status_pivot` VALUES (21, 15, 3, NULL, NULL);

-- ----------------------------
-- Table structure for property_statuses
-- ----------------------------
DROP TABLE IF EXISTS `property_statuses`;
CREATE TABLE `property_statuses`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of property_statuses
-- ----------------------------
INSERT INTO `property_statuses` VALUES (1, 'For Rent', NULL, NULL);
INSERT INTO `property_statuses` VALUES (2, 'For Sale', NULL, NULL);
INSERT INTO `property_statuses` VALUES (3, 'Open House', NULL, NULL);
INSERT INTO `property_statuses` VALUES (4, 'No Fees', NULL, NULL);
INSERT INTO `property_statuses` VALUES (5, 'Hot Offer', NULL, NULL);
INSERT INTO `property_statuses` VALUES (6, 'Sold', NULL, NULL);

-- ----------------------------
-- Table structure for property_types
-- ----------------------------
DROP TABLE IF EXISTS `property_types`;
CREATE TABLE `property_types`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of property_types
-- ----------------------------
INSERT INTO `property_types` VALUES (1, 'Apartment', NULL, NULL);
INSERT INTO `property_types` VALUES (2, 'House', NULL, NULL);
INSERT INTO `property_types` VALUES (3, 'Multi-Plex', NULL, NULL);
INSERT INTO `property_types` VALUES (4, 'Commercial', NULL, NULL);
INSERT INTO `property_types` VALUES (5, 'Land', NULL, NULL);
INSERT INTO `property_types` VALUES (6, 'Townhouse', NULL, NULL);
INSERT INTO `property_types` VALUES (7, 'RV', NULL, NULL);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user_profiles
-- ----------------------------
DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE `user_profiles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `organization` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ratings_count` int(11) NULL DEFAULT NULL,
  `ratings_value` int(11) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cc_num` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cvv` int(11) NULL DEFAULT NULL,
  `expire_date` datetime(6) NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_profiles
-- ----------------------------
INSERT INTO `user_profiles` VALUES (1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, 4, 'uploads/user-avatar/1.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `user_profiles` VALUES (2, 2, NULL, NULL, '+1 2346575', NULL, 'https://twitter/jane', NULL, NULL, NULL, 62, 5, 'uploads/user-avatar/2.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `user_profiles` VALUES (3, 3, NULL, NULL, '+1 4345366', NULL, NULL, 'https://linkedin/in/tom', NULL, NULL, 3, 3, 'uploads/user-avatar/3.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `user_profiles` VALUES (4, 4, NULL, NULL, '+1 4353464', 'https://facebook.com/billy', NULL, NULL, NULL, NULL, 14, 4, 'uploads/user-avatar/4.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `user_profiles` VALUES (5, 5, NULL, NULL, '+1 5523213', 'https:://facebook.com/max', NULL, NULL, NULL, NULL, 18, 2, 'uploads/user-avatar/5.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `user_profiles` VALUES (6, 6, NULL, NULL, '+1 4324566', NULL, NULL, NULL, 'https://instagram.com/jin', NULL, 32, 3, 'uploads/user-avatar/6.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `user_profiles` VALUES (7, 7, NULL, NULL, '+1 342566', NULL, NULL, NULL, NULL, 'https://jin.com', 52, 4, 'uploads/user-avatar/7.jpg', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for user_roles
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `role_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company_id` int(11) NULL DEFAULT NULL,
  `user_type` enum('Admin','CompanyAdmin','PropertyManager','Realtor','Rentor','Buyer') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'jack422@gmail.com', '2fb54875d166ab45a6a8b21f1631dec573a8cf07', 1, 'Rentor', 'Jack', 'Fruin', NULL, NULL);
INSERT INTO `users` VALUES (2, 'jane623@gmail.com', NULL, 2, 'Realtor', 'Jane', 'Ross', NULL, NULL);
INSERT INTO `users` VALUES (3, 'tom853@gmail.com', NULL, 1, 'CompanyAdmin', 'Tom', 'Dawson', NULL, NULL);
INSERT INTO `users` VALUES (4, 'billy753@gmail.com', NULL, 2, 'PropertyManager', 'Billy', 'Kate', NULL, NULL);
INSERT INTO `users` VALUES (5, 'max428@gmail.com', NULL, 1, 'Realtor', 'Max', 'Houston', NULL, NULL);
INSERT INTO `users` VALUES (6, 'jin716@gmail.com', NULL, 2, 'PropertyManager', 'Jin', 'William', NULL, NULL);
INSERT INTO `users` VALUES (7, 'joe826@gmail.com', NULL, 1, 'CompanyAdmin', 'Joe', 'Roach', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
