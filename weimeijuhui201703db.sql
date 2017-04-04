/*
Navicat MySQL Data Transfer

Source Server         : 192.168.138.159
Source Server Version : 50635
Source Host           : 192.168.138.159:3306
Source Database       : weimeijuhui201703db

Target Server Type    : MYSQL
Target Server Version : 50635
File Encoding         : 65001

Date: 2017-04-03 13:14:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_test_copy
-- ----------------------------
DROP TABLE IF EXISTS `think_test_copy`;
CREATE TABLE `think_test_copy` (
  `think_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `think_name` varchar(100) DEFAULT '',
  `think_pwd` varchar(32) DEFAULT '',
  `think_picpath` varchar(100) DEFAULT '',
  `think_mobile` varchar(30) DEFAULT '',
  `think_age` tinyint(3) unsigned DEFAULT '0',
  `think_time` int(10) unsigned DEFAULT '0',
  `think_ip` varchar(20) DEFAULT '',
  PRIMARY KEY (`think_id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_test_copy
-- ----------------------------
INSERT INTO `think_test_copy` VALUES ('21', '1', '2', '4', '', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('22', '11', '22', '44', '', '0', '1490844966', '');
INSERT INTO `think_test_copy` VALUES ('23', '111', '222', '444', '', '100', '1490845108', '');
INSERT INTO `think_test_copy` VALUES ('24', '111', '222', '444', '', '200', '1490845144', '');
INSERT INTO `think_test_copy` VALUES ('25', '', '', '4444', '', '200', '1490845276', '');
INSERT INTO `think_test_copy` VALUES ('26', '22222', '22222', '44444', '', '200', '1490845294', '');
INSERT INTO `think_test_copy` VALUES ('27', 'wwww', '', '', '', '200', '1490845730', '');
INSERT INTO `think_test_copy` VALUES ('30', '', 'asdf', 'asdf', '', '0', '1490846318', '');
INSERT INTO `think_test_copy` VALUES ('28', 'aaaa', 'asdf', 'asdf', '', '200', '1490846206', '');
INSERT INTO `think_test_copy` VALUES ('31', '22222', '', '', '', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('32', '3333', '', '', '', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('33', '3333', 'asdfasdfas@126.com', '', '', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('34', '3333', 'asdf@11.com', '', '', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('35', '333', 'asdfasdfas@126.com', '', '', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('36', '333', 'asdfasdfas@126.com', '', '', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('37', '1', 'asdfasdfas@126.com', '', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('38', '1', 'asdfasdfas@126.com', '', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('39', '1', 'asdfasdfas@126.com', '456', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('40', '1', 'asdfasdfas@126.com', '789', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('41', '1', 'asdfasdfas@126.com', '789', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('42', '1', 'asdfasdfas@126.com', '789', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('43', '1', 'asdfasdfas@126.com', '789', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('44', '1', 'asdfasdfas@126.com', 'abc', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('45', '1', 'asdfasdfas@126.com', 'abc', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('46', '1', 'asdfasdfas@126.com', '3233232', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('47', '1', 'asdfasdfas@126.com', 'abc', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('48', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('49', '1', 'asdfasdfas@126.com', '6666', '13939085961', '1', '0', '');
INSERT INTO `think_test_copy` VALUES ('50', '1', 'asdfasdfas@126.com', '6666', '13939085961', '100', '0', '');
INSERT INTO `think_test_copy` VALUES ('51', '1', 'asdfasdfas@126.com', '6666', '13939085961', '3', '0', '');
INSERT INTO `think_test_copy` VALUES ('52', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('53', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('54', '1', 'aabcadfasd@126.com', '6666', '13939085961', '6', '0', '');
INSERT INTO `think_test_copy` VALUES ('55', '1', 'aabcadfasd@126.com', '6666', '13939085961', '1', '0', '');
INSERT INTO `think_test_copy` VALUES ('56', '1', 'aabcadfasd@126.com', '6666', '13939085961', '15', '0', '');
INSERT INTO `think_test_copy` VALUES ('57', '1', 'aabcadfasd@126.com', '6666', '13939085961', '1', '0', '');
INSERT INTO `think_test_copy` VALUES ('58', '1', 'aabcadfasd@126.com', '6666', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('59', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('60', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('61', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');
INSERT INTO `think_test_copy` VALUES ('62', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '0', '');
INSERT INTO `think_test_copy` VALUES ('63', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');
INSERT INTO `think_test_copy` VALUES ('64', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');
INSERT INTO `think_test_copy` VALUES ('65', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');
INSERT INTO `think_test_copy` VALUES ('66', '1', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');
INSERT INTO `think_test_copy` VALUES ('67', '1000', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');
INSERT INTO `think_test_copy` VALUES ('68', '1001', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');
INSERT INTO `think_test_copy` VALUES ('69', '10011', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');
INSERT INTO `think_test_copy` VALUES ('70', '1003', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');
INSERT INTO `think_test_copy` VALUES ('71', '10033', 'asdfasdfas@126.com', '6666', '13939085961', '0', '2017', '');

-- ----------------------------
-- Table structure for web_admin
-- ----------------------------
DROP TABLE IF EXISTS `web_admin`;
CREATE TABLE `web_admin` (
  `AdminID` int(10) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(20) DEFAULT '',
  `AdminPwd` char(32) DEFAULT '',
  `AdminRandPwd` char(32) DEFAULT NULL,
  `AdminSort` smallint(6) unsigned DEFAULT '0',
  `AdminState` tinyint(1) unsigned DEFAULT '0' COMMENT '管理员登录状态0为禁用1为启用',
  `AdminTime` int(10) unsigned DEFAULT '0',
  `AdminAllRole` varchar(10) DEFAULT '',
  PRIMARY KEY (`AdminID`),
  UNIQUE KEY `AdminName` (`AdminName`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_admin
-- ----------------------------
INSERT INTO `web_admin` VALUES ('13', 'admin', '9d81db2aabf136469f73a70a2ebf46a2', 'e33f6f612a25710b7237e7289a7c6006', '44', '1', null, '');
INSERT INTO `web_admin` VALUES ('14', 'php', '9d81db2aabf136469f73a70a2ebf46a2', '43770b14f0b3db68c8b87f47ea16a743', '3', '1', null, '');
INSERT INTO `web_admin` VALUES ('15', 'mysql', '9d81db2aabf136469f73a70a2ebf46a2', null, '2', '1', null, '');
INSERT INTO `web_admin` VALUES ('16', 'apache', '2222', null, '1', '1', null, 'All');
INSERT INTO `web_admin` VALUES ('17', 'linux', '9d81db2aabf136469f73a70a2ebf46a2', null, '0', '1', null, '');
INSERT INTO `web_admin` VALUES ('18', 'windows', '9d81db2aabf136469f73a70a2ebf46a2', null, '0', '1', null, '');
INSERT INTO `web_admin` VALUES ('19', 'iis', '22222333', null, '0', '1', null, '');

-- ----------------------------
-- Table structure for web_admintest
-- ----------------------------
DROP TABLE IF EXISTS `web_admintest`;
CREATE TABLE `web_admintest` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `age` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_admintest
-- ----------------------------
INSERT INTO `web_admintest` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '51');
INSERT INTO `web_admintest` VALUES ('2', 'php', 'asdfasdfasdfasdf', '0');

-- ----------------------------
-- Table structure for web_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `web_auth_group`;
CREATE TABLE `web_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` varchar(1000) NOT NULL DEFAULT '',
  `sort` smallint(6) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='用户组表';

-- ----------------------------
-- Records of web_auth_group
-- ----------------------------
INSERT INTO `web_auth_group` VALUES ('17', '会员管理员', '1', '1,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136', '0');
INSERT INTO `web_auth_group` VALUES ('16', '管理员管理员', '1', '1,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121', '0');

-- ----------------------------
-- Table structure for web_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `web_auth_group_access`;
CREATE TABLE `web_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL COMMENT '用户id',
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户组明细表';

-- ----------------------------
-- Records of web_auth_group_access
-- ----------------------------
INSERT INTO `web_auth_group_access` VALUES ('13', '16');
INSERT INTO `web_auth_group_access` VALUES ('13', '17');
INSERT INTO `web_auth_group_access` VALUES ('14', '16');
INSERT INTO `web_auth_group_access` VALUES ('15', '17');

-- ----------------------------
-- Table structure for web_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `web_auth_rule`;
CREATE TABLE `web_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(8) unsigned DEFAULT '0' COMMENT '当前分类的父ID',
  `typepath` varchar(50) DEFAULT '' COMMENT '所属分类的路径',
  `typenode` tinyint(1) unsigned DEFAULT '0' COMMENT '所属分类的节点',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态：为1正常，为0禁用',
  `type` varchar(30) NOT NULL,
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  `sort` smallint(6) unsigned DEFAULT '0',
  `time` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=utf8 COMMENT='规则表';

-- ----------------------------
-- Records of web_auth_rule
-- ----------------------------
INSERT INTO `web_auth_rule` VALUES ('104', '102', '91|102|104|', '3', 'Admin/Role/add', '添加角色', '1', 'Admin', '', '0', '1491184817');
INSERT INTO `web_auth_rule` VALUES ('105', '102', '91|102|105|', '3', 'Admin/Role/addsave', '添加保存角色', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('92', '91', '91|92|', '2', '', '站点配置', '1', 'Admin', '', '0', '1491184187');
INSERT INTO `web_auth_rule` VALUES ('93', '92', '91|92|93|', '3', 'Admin/System/index', '初始化参数配置', '1', 'Admin', '', '0', '1491184209');
INSERT INTO `web_auth_rule` VALUES ('94', '91', '91|94|', '2', '', '管理员管理', '1', 'Admin', '', '0', '1491184227');
INSERT INTO `web_auth_rule` VALUES ('95', '94', '91|94|95|', '3', 'Admin/Admin/index', '管理员列表', '1', 'Admin', '', '0', '1491184244');
INSERT INTO `web_auth_rule` VALUES ('96', '94', '91|94|96|', '3', 'Admin/Admin/add', '添加管理员', '1', 'Admin', '', '0', '1491184264');
INSERT INTO `web_auth_rule` VALUES ('97', '94', '91|94|97|', '3', 'Admin/Admin/addsave', '添加保存管理员', '0', 'Admin', '', '0', '1491184457');
INSERT INTO `web_auth_rule` VALUES ('98', '94', '91|94|98|', '3', 'Admin/Admin/edit', '修改管理员', '0', 'Admin', '', '0', '1491184496');
INSERT INTO `web_auth_rule` VALUES ('99', '94', '91|94|99|', '3', 'Admin/Admin/editsave', '修改保存管理员', '0', 'Admin', '', '0', '1491184518');
INSERT INTO `web_auth_rule` VALUES ('100', '94', '91|94|100|', '3', 'Admin/Admin/del', '删除管理员', '0', 'Admin', '', '0', '1491184536');
INSERT INTO `web_auth_rule` VALUES ('101', '94', '91|94|101|', '3', 'Admin/Admin/sort', '管理员列表排序', '0', 'Admin', '', '0', '1491184555');
INSERT INTO `web_auth_rule` VALUES ('102', '91', '91|102|', '2', '', '角色管理', '1', 'Admin', '', '0', '1491184784');
INSERT INTO `web_auth_rule` VALUES ('103', '102', '91|102|103|', '3', 'Admin/Role/index', '角色列表', '1', 'Admin', '', '0', '1491184803');
INSERT INTO `web_auth_rule` VALUES ('91', '0', '91|', '1', 'Admin/Admin/index', '系统管理', '1', 'Admin', '', '36', '1491184152');
INSERT INTO `web_auth_rule` VALUES ('106', '102', '91|102|106|', '3', 'Admin/Role/edit', '修改角色', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('107', '102', '91|102|107|', '3', 'Admin/Role/editsave', '修改保存角色', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('108', '102', '91|102|108|', '3', 'Admin/Role/del', '删除角色', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('109', '102', '91|102|109|', '3', 'Admin/Role/sort', '角色列表排序', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('110', '91', '91|110|', '2', '', '栏目管理', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('111', '110', '91|110|111|', '3', 'Admin/Rule/index', '栏目列表', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('112', '110', '91|110|112|', '3', 'Admin/Rule/add', '添加栏目', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('113', '110', '91|110|113|', '3', 'Admin/Rule/addsave', '添加保存栏目', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('114', '110', '91|110|114|', '3', 'Admin/Rule/edit', '修改栏目', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('115', '110', '91|110|115|', '3', 'Admin/Rule/editsave', '修改保存栏目', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('116', '110', '91|110|116|', '3', 'Admin/Rule/del', '删除栏目', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('117', '110', '91|110|117|', '3', 'Admin/Rule/sort', '栏目列表排序', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('118', '91', '91|118|', '2', '', '日志管理', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('119', '118', '91|118|119|', '3', 'Admin/Log/index', '日志列表', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('120', '118', '91|118|120|', '3', 'Admin/Log/del', '日志删除', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('121', '118', '91|118|121|', '3', 'Admin/Log/sort', '日志排序', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('122', '0', '122|', '1', 'Admin/Member/index', '会员管理', '1', 'Admin', '', '1', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('123', '122', '122|123|', '2', '', '会员中心', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('124', '123', '122|123|124|', '3', 'Admin/Member/index', '会员列表', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('125', '123', '122|123|125|', '3', 'Admin/Member/add', '添加会员', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('126', '123', '122|123|126|', '3', 'Admin/Member/addsave', '添加保存会员', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('127', '123', '122|123|127|', '3', 'Admin/Member/edit', '修改会员', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('128', '123', '122|123|128|', '3', 'Admin/Member/editsave', '修改保存会员', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('129', '123', '122|123|129|', '3', 'Admin/Member/del', '删除会员', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('130', '123', '122|123|130|', '3', 'Admin/Member/sort', '会员列表排序', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('131', '122', '122|131|', '2', '', '积分管理', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('132', '131', '122|131|132|', '3', 'Admin/Integral/index', '积分列表', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('133', '131', '122|131|133|', '3', 'Admin/Integral/add', '添加积分', '1', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('134', '131', '122|131|134|', '3', 'Admin/Integral/addsave', '添加保存积分', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('135', '131', '122|131|135|', '3', 'Admin/Integral/del', '积分删除', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('136', '131', '122|131|136|', '3', 'Admin/Integral/sort', '积分记录排序', '0', 'Admin', '', '0', '1491184847');
INSERT INTO `web_auth_rule` VALUES ('1', '0', '1|', '1', 'Admin/Index/index', '系统首页', '1', 'Admin', '', '999', '1491184847');

-- ----------------------------
-- Table structure for web_log
-- ----------------------------
DROP TABLE IF EXISTS `web_log`;
CREATE TABLE `web_log` (
  `LogID` int(10) NOT NULL AUTO_INCREMENT,
  `LogAdminID` int(10) unsigned DEFAULT '0',
  `LogController` varchar(50) DEFAULT '',
  `LogModel` varchar(50) DEFAULT '',
  `LogTitle` varchar(100) DEFAULT '',
  `LogContent` varchar(1000) DEFAULT '',
  `LogTime` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`LogID`),
  KEY `LogAdminID` (`LogAdminID`)
) ENGINE=InnoDB AUTO_INCREMENT=235 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_log
-- ----------------------------
INSERT INTO `web_log` VALUES ('2', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490665304');
INSERT INTO `web_log` VALUES ('3', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490668186');
INSERT INTO `web_log` VALUES ('4', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490668354');
INSERT INTO `web_log` VALUES ('5', '13', 'Rule', 'addsave', '��Ŀ���ӱ����ɹ�', '', '1490671264');
INSERT INTO `web_log` VALUES ('6', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490671311');
INSERT INTO `web_log` VALUES ('7', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490671312');
INSERT INTO `web_log` VALUES ('8', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490671341');
INSERT INTO `web_log` VALUES ('9', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490671810');
INSERT INTO `web_log` VALUES ('10', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490674175');
INSERT INTO `web_log` VALUES ('11', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490674241');
INSERT INTO `web_log` VALUES ('12', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490712413');
INSERT INTO `web_log` VALUES ('13', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490749433');
INSERT INTO `web_log` VALUES ('14', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490750084');
INSERT INTO `web_log` VALUES ('15', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490750116');
INSERT INTO `web_log` VALUES ('16', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490750254');
INSERT INTO `web_log` VALUES ('17', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490750691');
INSERT INTO `web_log` VALUES ('18', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490751347');
INSERT INTO `web_log` VALUES ('19', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490751385');
INSERT INTO `web_log` VALUES ('20', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490751610');
INSERT INTO `web_log` VALUES ('21', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490752091');
INSERT INTO `web_log` VALUES ('22', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490752261');
INSERT INTO `web_log` VALUES ('23', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490752389');
INSERT INTO `web_log` VALUES ('24', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490753729');
INSERT INTO `web_log` VALUES ('25', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754321');
INSERT INTO `web_log` VALUES ('26', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754674');
INSERT INTO `web_log` VALUES ('27', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754721');
INSERT INTO `web_log` VALUES ('28', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754731');
INSERT INTO `web_log` VALUES ('29', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754746');
INSERT INTO `web_log` VALUES ('30', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754819');
INSERT INTO `web_log` VALUES ('31', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754936');
INSERT INTO `web_log` VALUES ('32', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754941');
INSERT INTO `web_log` VALUES ('33', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754975');
INSERT INTO `web_log` VALUES ('34', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754981');
INSERT INTO `web_log` VALUES ('35', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754986');
INSERT INTO `web_log` VALUES ('36', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754994');
INSERT INTO `web_log` VALUES ('37', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490754999');
INSERT INTO `web_log` VALUES ('38', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755005');
INSERT INTO `web_log` VALUES ('39', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755110');
INSERT INTO `web_log` VALUES ('40', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755115');
INSERT INTO `web_log` VALUES ('41', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755361');
INSERT INTO `web_log` VALUES ('42', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755371');
INSERT INTO `web_log` VALUES ('43', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755771');
INSERT INTO `web_log` VALUES ('44', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755824');
INSERT INTO `web_log` VALUES ('45', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755912');
INSERT INTO `web_log` VALUES ('46', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755922');
INSERT INTO `web_log` VALUES ('47', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755935');
INSERT INTO `web_log` VALUES ('48', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755946');
INSERT INTO `web_log` VALUES ('49', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490755989');
INSERT INTO `web_log` VALUES ('50', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490756466');
INSERT INTO `web_log` VALUES ('51', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490756556');
INSERT INTO `web_log` VALUES ('52', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490756630');
INSERT INTO `web_log` VALUES ('53', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490756663');
INSERT INTO `web_log` VALUES ('54', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490756799');
INSERT INTO `web_log` VALUES ('55', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490756862');
INSERT INTO `web_log` VALUES ('56', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759751');
INSERT INTO `web_log` VALUES ('57', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759763');
INSERT INTO `web_log` VALUES ('58', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759787');
INSERT INTO `web_log` VALUES ('59', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759802');
INSERT INTO `web_log` VALUES ('60', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759815');
INSERT INTO `web_log` VALUES ('61', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759832');
INSERT INTO `web_log` VALUES ('62', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759917');
INSERT INTO `web_log` VALUES ('63', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759930');
INSERT INTO `web_log` VALUES ('64', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759939');
INSERT INTO `web_log` VALUES ('65', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490759953');
INSERT INTO `web_log` VALUES ('66', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490768126');
INSERT INTO `web_log` VALUES ('67', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490768145');
INSERT INTO `web_log` VALUES ('68', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773453');
INSERT INTO `web_log` VALUES ('69', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773463');
INSERT INTO `web_log` VALUES ('70', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773471');
INSERT INTO `web_log` VALUES ('71', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773486');
INSERT INTO `web_log` VALUES ('72', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773498');
INSERT INTO `web_log` VALUES ('73', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773505');
INSERT INTO `web_log` VALUES ('74', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773515');
INSERT INTO `web_log` VALUES ('75', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773525');
INSERT INTO `web_log` VALUES ('76', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773530');
INSERT INTO `web_log` VALUES ('77', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773537');
INSERT INTO `web_log` VALUES ('78', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773666');
INSERT INTO `web_log` VALUES ('79', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773674');
INSERT INTO `web_log` VALUES ('80', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773681');
INSERT INTO `web_log` VALUES ('81', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773686');
INSERT INTO `web_log` VALUES ('82', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773691');
INSERT INTO `web_log` VALUES ('83', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773696');
INSERT INTO `web_log` VALUES ('84', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773700');
INSERT INTO `web_log` VALUES ('85', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773708');
INSERT INTO `web_log` VALUES ('86', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773714');
INSERT INTO `web_log` VALUES ('87', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490773810');
INSERT INTO `web_log` VALUES ('88', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773837');
INSERT INTO `web_log` VALUES ('89', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773843');
INSERT INTO `web_log` VALUES ('90', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773847');
INSERT INTO `web_log` VALUES ('91', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773852');
INSERT INTO `web_log` VALUES ('92', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773860');
INSERT INTO `web_log` VALUES ('93', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773866');
INSERT INTO `web_log` VALUES ('94', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490773874');
INSERT INTO `web_log` VALUES ('95', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490836630');
INSERT INTO `web_log` VALUES ('96', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490836661');
INSERT INTO `web_log` VALUES ('97', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490836667');
INSERT INTO `web_log` VALUES ('98', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490836676');
INSERT INTO `web_log` VALUES ('99', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490836681');
INSERT INTO `web_log` VALUES ('100', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490838072');
INSERT INTO `web_log` VALUES ('101', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490838083');
INSERT INTO `web_log` VALUES ('102', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490838091');
INSERT INTO `web_log` VALUES ('103', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490838098');
INSERT INTO `web_log` VALUES ('104', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490840913');
INSERT INTO `web_log` VALUES ('105', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490840931');
INSERT INTO `web_log` VALUES ('106', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490840955');
INSERT INTO `web_log` VALUES ('107', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490840961');
INSERT INTO `web_log` VALUES ('108', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490842842');
INSERT INTO `web_log` VALUES ('109', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490842846');
INSERT INTO `web_log` VALUES ('110', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490842912');
INSERT INTO `web_log` VALUES ('111', '13', 'Rule', 'addsave', '栏目添加保存成功', '', '1490842984');
INSERT INTO `web_log` VALUES ('112', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490860643');
INSERT INTO `web_log` VALUES ('113', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490876333');
INSERT INTO `web_log` VALUES ('114', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490889915');
INSERT INTO `web_log` VALUES ('115', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490893226');
INSERT INTO `web_log` VALUES ('116', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490923001');
INSERT INTO `web_log` VALUES ('117', '13', 'Rule', 'editsave', '栏目数据更新成功', '', '1490926727');
INSERT INTO `web_log` VALUES ('118', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490927014');
INSERT INTO `web_log` VALUES ('119', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1490930819');
INSERT INTO `web_log` VALUES ('120', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1490930830');
INSERT INTO `web_log` VALUES ('121', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1490930836');
INSERT INTO `web_log` VALUES ('122', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490940799');
INSERT INTO `web_log` VALUES ('123', '13', 'Role', 'addsave', '角色数据添加成功', '', '1490941603');
INSERT INTO `web_log` VALUES ('124', '13', 'Role', 'addsave', '角色数据添加成功', '', '1490941629');
INSERT INTO `web_log` VALUES ('125', '13', 'Role', 'addsave', '角色数据添加成功', '', '1490941665');
INSERT INTO `web_log` VALUES ('126', '13', 'Role', 'del', '角色记录删除', '', '1490942325');
INSERT INTO `web_log` VALUES ('127', '13', 'Role', 'del', '角色记录删除，ID：6,7', '', '1490942376');
INSERT INTO `web_log` VALUES ('128', '13', 'Role', 'del', '角色记录删除，ID：5', '', '1490942486');
INSERT INTO `web_log` VALUES ('129', '13', 'Role', 'sort', '角色记录排序，ID：1,4', '', '1490942822');
INSERT INTO `web_log` VALUES ('130', '13', 'Role', 'sort', '角色记录排序，ID：1,4', '', '1490942843');
INSERT INTO `web_log` VALUES ('131', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490942874');
INSERT INTO `web_log` VALUES ('132', '13', 'Role', 'sort', '角色记录排序，ID：4,1', '', '1490942910');
INSERT INTO `web_log` VALUES ('133', '13', 'Role', 'addsave', '角色数据添加成功', '', '1490943450');
INSERT INTO `web_log` VALUES ('134', '13', 'Role', 'addsave', '角色数据添加成功', '', '1490943530');
INSERT INTO `web_log` VALUES ('135', '13', 'Role', 'editsave', '角色记录信息更新成功，ID：10', '', '1490943728');
INSERT INTO `web_log` VALUES ('136', '13', 'Role', 'editsave', '角色记录信息更新成功，ID：10', '', '1490943753');
INSERT INTO `web_log` VALUES ('137', '13', 'Role', 'editsave', '角色记录信息更新成功，ID：10', '', '1490943778');
INSERT INTO `web_log` VALUES ('138', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1490963935');
INSERT INTO `web_log` VALUES ('139', '13', 'Rule', 'editsave', '栏目数据更新成功', '', '1490963959');
INSERT INTO `web_log` VALUES ('140', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1491009047');
INSERT INTO `web_log` VALUES ('141', '13', 'Admin', 'addsave', '管理员添加成功,ID:32', '', '1491013769');
INSERT INTO `web_log` VALUES ('142', '13', 'Admin', 'del', '管理员记录删除，ID：32,31,30', '', '1491014089');
INSERT INTO `web_log` VALUES ('143', '13', 'Admin', 'del', '管理员记录删除，ID：29,28', '', '1491014099');
INSERT INTO `web_log` VALUES ('144', '13', 'Admin', 'del', '管理员记录删除，ID：26', '', '1491014115');
INSERT INTO `web_log` VALUES ('145', '13', 'Admin', 'sort', '管理员记录排序，ID：27,19,18,17,16,15,14,13', '', '1491014309');
INSERT INTO `web_log` VALUES ('146', '13', 'Admin', 'sort', '管理员记录排序，ID：27,19,18,17,16,15,14,13', '', '1491014322');
INSERT INTO `web_log` VALUES ('147', '13', 'Admin', 'editsave', '管理员修改成功，ID：13', '', '1491018239');
INSERT INTO `web_log` VALUES ('148', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491018481');
INSERT INTO `web_log` VALUES ('149', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491018492');
INSERT INTO `web_log` VALUES ('150', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491018496');
INSERT INTO `web_log` VALUES ('151', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491018620');
INSERT INTO `web_log` VALUES ('152', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491018642');
INSERT INTO `web_log` VALUES ('153', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491018671');
INSERT INTO `web_log` VALUES ('154', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491018935');
INSERT INTO `web_log` VALUES ('155', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491019105');
INSERT INTO `web_log` VALUES ('156', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491019205');
INSERT INTO `web_log` VALUES ('157', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491019219');
INSERT INTO `web_log` VALUES ('158', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491019227');
INSERT INTO `web_log` VALUES ('159', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491019231');
INSERT INTO `web_log` VALUES ('160', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491019479');
INSERT INTO `web_log` VALUES ('161', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491019491');
INSERT INTO `web_log` VALUES ('162', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491019536');
INSERT INTO `web_log` VALUES ('163', null, 'Login', 'check', 'admin管理员登录成功。', '', '1491022306');
INSERT INTO `web_log` VALUES ('164', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1491022314');
INSERT INTO `web_log` VALUES ('165', null, 'Login', 'check', 'admin管理员登录成功。', '', '1491022329');
INSERT INTO `web_log` VALUES ('166', '13', 'Admin', 'editsave', '管理员修改成功，ID：17', '', '1491025395');
INSERT INTO `web_log` VALUES ('167', '13', 'Admin', 'addsave', '管理员添加成功,ID:33', '', '1491025409');
INSERT INTO `web_log` VALUES ('168', '13', 'Admin', 'addsave', '管理员添加成功,ID:34', '', '1491025512');
INSERT INTO `web_log` VALUES ('169', '13', 'Admin', 'addsave', '管理员添加成功,ID:35', '', '1491025557');
INSERT INTO `web_log` VALUES ('170', '13', 'Admin', 'editsave', '管理员修改成功，ID：35', '', '1491025568');
INSERT INTO `web_log` VALUES ('171', '13', 'Admin', 'editsave', '管理员修改成功，ID：35', '', '1491025591');
INSERT INTO `web_log` VALUES ('172', '13', 'Admin', 'editsave', '管理员修改成功，ID：35', '', '1491025597');
INSERT INTO `web_log` VALUES ('173', '13', 'Admin', 'addsave', '管理员添加成功,ID:36', '', '1491027735');
INSERT INTO `web_log` VALUES ('174', '13', 'Admin', 'editsave', '管理员修改成功，ID：36', '', '1491027750');
INSERT INTO `web_log` VALUES ('175', '13', 'Admin', 'editsave', '管理员修改成功，ID：36', '', '1491027766');
INSERT INTO `web_log` VALUES ('176', '13', 'Admin', 'addsave', '管理员添加成功,ID:37', '', '1491028970');
INSERT INTO `web_log` VALUES ('177', '13', 'Admin', 'addsave', '管理员添加成功,ID:38', '', '1491029000');
INSERT INTO `web_log` VALUES ('178', '13', 'Admin', 'addsave', '管理员添加成功,ID:39', '', '1491029232');
INSERT INTO `web_log` VALUES ('179', '13', 'Admin', 'addsave', '管理员添加成功,ID:40', '', '1491029258');
INSERT INTO `web_log` VALUES ('180', '13', 'Role', 'del', '角色记录删除，ID：12,13,14,15', '', '1491029311');
INSERT INTO `web_log` VALUES ('181', '13', 'Admin', 'addsave', '管理员添加成功,ID:41', '', '1491029331');
INSERT INTO `web_log` VALUES ('182', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030031');
INSERT INTO `web_log` VALUES ('183', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030045');
INSERT INTO `web_log` VALUES ('184', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030060');
INSERT INTO `web_log` VALUES ('185', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030068');
INSERT INTO `web_log` VALUES ('186', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030193');
INSERT INTO `web_log` VALUES ('187', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030196');
INSERT INTO `web_log` VALUES ('188', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030200');
INSERT INTO `web_log` VALUES ('189', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030259');
INSERT INTO `web_log` VALUES ('190', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030268');
INSERT INTO `web_log` VALUES ('191', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030293');
INSERT INTO `web_log` VALUES ('192', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030308');
INSERT INTO `web_log` VALUES ('193', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030322');
INSERT INTO `web_log` VALUES ('194', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030330');
INSERT INTO `web_log` VALUES ('195', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030338');
INSERT INTO `web_log` VALUES ('196', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030768');
INSERT INTO `web_log` VALUES ('197', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030772');
INSERT INTO `web_log` VALUES ('198', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030774');
INSERT INTO `web_log` VALUES ('199', '13', 'Admin', 'editsave', '管理员修改成功，ID：41', '', '1491030778');
INSERT INTO `web_log` VALUES ('200', '13', 'Admin', 'del', '管理员记录删除，ID：41,40,39,38,37,36', '', '1491030855');
INSERT INTO `web_log` VALUES ('201', '13', 'Admin', 'del', '管理员记录删除，ID：35,34', '', '1491030869');
INSERT INTO `web_log` VALUES ('202', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1491036497');
INSERT INTO `web_log` VALUES ('203', '13', 'Login', 'check', 'admin管理员登录成功。', '', '1491182385');
INSERT INTO `web_log` VALUES ('204', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184152');
INSERT INTO `web_log` VALUES ('205', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184187');
INSERT INTO `web_log` VALUES ('206', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184209');
INSERT INTO `web_log` VALUES ('207', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184227');
INSERT INTO `web_log` VALUES ('208', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184244');
INSERT INTO `web_log` VALUES ('209', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184264');
INSERT INTO `web_log` VALUES ('210', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184457');
INSERT INTO `web_log` VALUES ('211', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184496');
INSERT INTO `web_log` VALUES ('212', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184518');
INSERT INTO `web_log` VALUES ('213', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184536');
INSERT INTO `web_log` VALUES ('214', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184555');
INSERT INTO `web_log` VALUES ('215', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184784');
INSERT INTO `web_log` VALUES ('216', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184803');
INSERT INTO `web_log` VALUES ('217', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184817');
INSERT INTO `web_log` VALUES ('218', '13', 'Rule', 'addsave', '栏目数据添加成功', '', '1491184847');
INSERT INTO `web_log` VALUES ('219', '13', 'Role', 'addsave', '角色数据添加成功，ID：16', '', '1491186675');
INSERT INTO `web_log` VALUES ('220', '13', 'Role', 'addsave', '角色数据添加成功，ID：17', '', '1491186693');
INSERT INTO `web_log` VALUES ('221', '13', 'Role', 'editsave', '角色记录信息更新成功，ID：16', '', '1491186701');
INSERT INTO `web_log` VALUES ('222', '13', 'Role', 'editsave', '角色记录信息更新成功，ID：17', '', '1491186708');
INSERT INTO `web_log` VALUES ('223', '13', 'Admin', 'editsave', '管理员修改成功，ID：13', '', '1491186721');
INSERT INTO `web_log` VALUES ('224', '13', 'Admin', 'editsave', '管理员修改成功，ID：13', '', '1491186726');
INSERT INTO `web_log` VALUES ('225', '13', 'Admin', 'editsave', '管理员修改成功，ID：14', '', '1491186738');
INSERT INTO `web_log` VALUES ('226', '13', 'Admin', 'editsave', '管理员修改成功，ID：15', '', '1491186744');
INSERT INTO `web_log` VALUES ('227', '13', 'Admin', 'editsave', '管理员修改成功，ID：16', '', '1491186750');
INSERT INTO `web_log` VALUES ('228', '13', 'Admin', 'editsave', '管理员修改成功，ID：19', '', '1491186756');
INSERT INTO `web_log` VALUES ('229', '13', 'Rule', 'editsave', '栏目数据更新成功', '', '1491187228');
INSERT INTO `web_log` VALUES ('230', '13', 'Rule', 'editsave', '栏目数据更新成功', '', '1491187644');
INSERT INTO `web_log` VALUES ('231', '14', 'Login', 'check', 'php管理员登录成功。', '', '1491187712');
INSERT INTO `web_log` VALUES ('232', '13', 'Rule', 'sort', '栏目数据排序成功', '', '1491190251');
INSERT INTO `web_log` VALUES ('233', '13', 'Rule', 'sort', '栏目数据排序成功', '', '1491190640');
INSERT INTO `web_log` VALUES ('234', '13', 'Rule', 'editsave', '栏目数据更新成功', '', '1491191334');

-- ----------------------------
-- Table structure for web_member
-- ----------------------------
DROP TABLE IF EXISTS `web_member`;
CREATE TABLE `web_member` (
  `MemberID` int(10) NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(20) DEFAULT '',
  `MemberPwd` char(32) DEFAULT '',
  `AdminID` int(11) DEFAULT NULL,
  `AdminName` varchar(30) DEFAULT '',
  PRIMARY KEY (`MemberID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_member
-- ----------------------------
INSERT INTO `web_member` VALUES ('11', '22', '33', null, null);
INSERT INTO `web_member` VALUES ('12', '11', '', null, null);
INSERT INTO `web_member` VALUES ('13', 'admin', '', null, null);
INSERT INTO `web_member` VALUES ('14', 'php', '', null, null);
INSERT INTO `web_member` VALUES ('15', 'mysql', '', null, null);
INSERT INTO `web_member` VALUES ('16', 'apache', '', null, null);
INSERT INTO `web_member` VALUES ('17', 'linux', '', null, null);
INSERT INTO `web_member` VALUES ('18', 'windows', '', null, null);
INSERT INTO `web_member` VALUES ('19', 'iis', '', null, null);
INSERT INTO `web_member` VALUES ('20', 'nginx', '', '20', 'aaa');
