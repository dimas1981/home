/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50537
Source Host           : localhost:3306
Source Database       : cibase

Target Server Type    : MYSQL
Target Server Version : 50537
File Encoding         : 65001

Date: 2014-10-29 01:39:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ci_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------
INSERT INTO `ci_sessions` VALUES ('1be6f6ffb5b57498cca5fce682c6588c', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:30.0) Gecko/20100101 Firefox/30.0', '1414539263', '');
INSERT INTO `ci_sessions` VALUES ('476ea83c9d3f44c898337cdc1cf8464d', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:30.0) Gecko/20100101 Firefox/30.0', '1414523370', 'a:7:{s:9:\"user_data\";s:0:\"\";s:2:\"id\";s:1:\"5\";s:5:\"email\";s:20:\"sergeich-81@inbox.me\";s:9:\"logged_in\";b:1;s:10:\"first_name\";s:7:\"Dmitriy\";s:9:\"last_name\";s:8:\"Zakharov\";s:7:\"user_id\";s:11:\"id_3b7f04cd\";}');
INSERT INTO `ci_sessions` VALUES ('4e5e96b3439d48eb05b3517b95a96e9a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.101 Safari/537.36', '1414517824', '');
INSERT INTO `ci_sessions` VALUES ('78c7308414a391da8eac47011fc00d24', '127.0.0.1', 'Opera/9.80 (X11; Linux x86_64; Edition Linux Mint) Presto/2.12.388 Version/12.16', '1414538821', '');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` char(96) DEFAULT NULL,
  `user_id` char(11) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` enum('w','m') DEFAULT NULL,
  `marital` enum('y','n') DEFAULT NULL,
  `body_type` enum('thin','muscular','thick') DEFAULT NULL,
  `breast` tinyint(3) unsigned DEFAULT NULL,
  `waist` tinyint(3) unsigned DEFAULT NULL,
  `hips` tinyint(3) unsigned DEFAULT NULL,
  `photo` varchar(255) DEFAULT '../../assets/images/No_shield_available.svg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('4', 'Dmitriy', 'Zakharov', 'sergeich-81@inbox.ru', '2b10501d8d78fef7e99d75b785fd316ff2edbf8548ee7b19115174ab203086739c724f9344640e6fede3343203b49273', 'id_39f804b0', 'Manchester, United Kingdom', '1981-03-24', 'm', 'n', 'muscular', null, null, null, '../../assets/images/No_shield_available.svg');
INSERT INTO `users` VALUES ('5', 'Дмитрий', 'Захаров', 'sergeich-81@inbox.me', '2b10501d8d78fef7e99d75b785fd316ff2edbf8548ee7b19115174ab203086739c724f9344640e6fede3343203b49273', 'id_3b7f04cd', 'Харьков, Харьковская область, Украина', '1981-03-23', 'm', 'y', 'muscular', null, null, null, '../../assets/upload/1a223c8813f84a14b70e6fadbdfdb306.png');
INSERT INTO `users` VALUES ('11', 'Alex', 'Pol', 'sergeich-81@inbox.mp', '2b10501d8d78fef7e99d75b785fd316ff2edbf8548ee7b19115174ab203086739c724f9344640e6fede3343203b49273', 'id_39dd04a7', 'Jacksonville, FL, United States', '1981-03-13', 'm', 'y', 'thick', null, null, null, '../../assets/images/No_shield_available.svg');
INSERT INTO `users` VALUES ('12', 'Alina', 'Petuhova', 'anna@web.de', '2b10501d8d78fef7e99d75b785fd316ff2edbf8548ee7b19115174ab203086739c724f9344640e6fede3343203b49273', 'id_39ce04b5', 'Russia, Moscow', '1990-12-30', 'w', 'y', null, '91', '60', '90', '../../assets/upload/738ef0fc77bd82cb85c7ab3595d3f0ff.jpg');
