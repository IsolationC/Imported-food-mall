/*
Navicat MySQL Data Transfer

Source Server         : cccc
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2019-08-07 00:02:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `admin_name` varchar(8) NOT NULL COMMENT '管理员名',
  `admin_password` varchar(10) NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'ccc', '12345');

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `item_id` int(5) NOT NULL COMMENT '商品ID',
  `user_id` int(5) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`item_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('5', '4');
INSERT INTO `cart` VALUES ('10', '4');
INSERT INTO `cart` VALUES ('14', '4');
INSERT INTO `cart` VALUES ('23', '4');
INSERT INTO `cart` VALUES ('28', '5');

-- ----------------------------
-- Table structure for `item`
-- ----------------------------
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `item_id` int(8) NOT NULL AUTO_INCREMENT COMMENT '商品ID',
  `shop_id` int(8) NOT NULL COMMENT '店铺ID',
  `item_name` varchar(20) NOT NULL COMMENT '商品名',
  `item_image` varchar(200) NOT NULL COMMENT '商品图片',
  `introduce` varchar(200) NOT NULL COMMENT '商品介绍',
  `country` varchar(10) NOT NULL COMMENT '产地',
  `price` double(10,0) NOT NULL COMMENT '价格',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `pass` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否通过审核',
  `complain` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否被投诉',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item
-- ----------------------------
INSERT INTO `item` VALUES ('2', '2', '进口红茶', '', '好喝的红茶~~~', '英国', '20', '1', '1', '0');
INSERT INTO `item` VALUES ('4', '3', '进口软糖', '', '果汁含量不低于20%', '美国', '7', '1', '1', '0');
INSERT INTO `item` VALUES ('5', '5', '花果茶', '', '日本进口花果茶', '日本', '15', '1', '1', '0');
INSERT INTO `item` VALUES ('6', '1', '汽水', '085dae237e5a87e72fe26300c810e515.jpg', '美国生产的汽水', '美国', '9', '1', '1', '0');
INSERT INTO `item` VALUES ('7', '1', '汽水2', '085dae237e5a87e72fe26300c810e515.jpg', '美国生产的汽水', '美国', '9', '1', '0', '0');
INSERT INTO `item` VALUES ('8', '1', '曲奇', '085dae237e5a87e72fe26300c810e515.jpg', '好吃好吃甜甜', '丹麦', '40', '1', '0', '2');
INSERT INTO `item` VALUES ('9', '1', '曲奇饼干2', '085dae237e5a87e72fe26300c810e515.jpg', '甜甜松软', '丹麦', '45', '1', '1', '1');
INSERT INTO `item` VALUES ('10', '1', '曲奇饼干', '085dae237e5a87e72fe26300c810e515.jpg', '甜甜松软', '丹麦', '45', '1', '1', '0');
INSERT INTO `item` VALUES ('12', '1', '橘子汁', '27cad1df2160dde0cc5c0e6398ec05fd.jpg', '酸酸甜甜', '马来西亚', '5', '1', '0', '0');
INSERT INTO `item` VALUES ('13', '1', '进口脱脂牛奶', 'd3ebf5b8bf806be0ff5fa267c29e5798.jpg', '脱脂牛奶', '新西兰', '12', '1', '1', '0');
INSERT INTO `item` VALUES ('14', '1', '巧克力派', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1558216111159&di=59f06edd86682c30d3e2ecd8d0e9d14e&imgtype=0&src=http%3A%2F%2Fimg3.duitang.com%2Fuploads%2Fitem%2F201202%2F08%2F20120', '好吃，香甜', '日本', '15', '1', '1', '0');
INSERT INTO `item` VALUES ('15', '1', '巧克力派2', '4b9cfc86b52c93e2829274387ab3f5a1.jpeg', '好吃，香甜', '日本', '15', '0', '0', '0');
INSERT INTO `item` VALUES ('16', '1', '水果派', '水果.jpg', '多种口味', '美国', '15', '0', '0', '0');
INSERT INTO `item` VALUES ('17', '1', '进口软糖', 'backg6.jpg', '', '美国', '7', '0', '0', '0');
INSERT INTO `item` VALUES ('18', '1', '进口水果软糖', '', '', '美国', '7', '0', '0', '0');
INSERT INTO `item` VALUES ('19', '1', '樱花口味软糖', '', '', '日本', '7', '0', '0', '0');
INSERT INTO `item` VALUES ('20', '1', '汽水', '', '', '美国', '9', '0', '0', '0');
INSERT INTO `item` VALUES ('21', '1', '汽水2', '', '', '美国', '9', '0', '0', '0');
INSERT INTO `item` VALUES ('22', '6', '', '', '', '', '0', '1', '0', '0');
INSERT INTO `item` VALUES ('23', '1', '披萨', '085dae237e5a87e72fe26300c810e515.jpg', '好吃', '美国', '20', '1', '1', '0');
INSERT INTO `item` VALUES ('24', '1', '披萨披萨', '27cad1df2160dde0cc5c0e6398ec05fd.jpg', '三生三世', '美国', '20', '1', '1', '0');
INSERT INTO `item` VALUES ('25', '7', '甜甜圈', '', '多种口味', '美国', '5', '0', '0', '0');
INSERT INTO `item` VALUES ('26', '7', '波子汽水', '4738e52066f7c639d9a4e40b472e755a.jpg', '好喝', '日本', '7', '0', '0', '0');
INSERT INTO `item` VALUES ('27', '7', '华夫饼', '', '阿萨啊啊', '英国', '15', '1', '1', '0');
INSERT INTO `item` VALUES ('28', '7', '美味华夫饼', '4b9cfc86b52c93e2829274387ab3f5a1.jpeg', '特别松软', '美国', '9', '1', '1', '0');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `item_id` int(5) NOT NULL COMMENT '商品ID',
  `user_id` int(5) NOT NULL COMMENT '用户ID',
  `order_condition` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单状态',
  `comment` varchar(200) DEFAULT NULL COMMENT '评价',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('2', '10', '4', '1', '物美价廉！');
INSERT INTO `order` VALUES ('3', '10', '4', '1', null);
INSERT INTO `order` VALUES ('4', '10', '4', '1', null);
INSERT INTO `order` VALUES ('5', '10', '4', '0', null);
INSERT INTO `order` VALUES ('6', '10', '4', '0', null);
INSERT INTO `order` VALUES ('7', '10', '4', '0', null);
INSERT INTO `order` VALUES ('8', '10', '4', '0', null);
INSERT INTO `order` VALUES ('9', '10', '4', '0', null);
INSERT INTO `order` VALUES ('10', '14', '4', '0', null);
INSERT INTO `order` VALUES ('11', '10', '4', '0', null);
INSERT INTO `order` VALUES ('12', '23', '4', '1', '好吃好吃便宜');
INSERT INTO `order` VALUES ('13', '28', '5', '1', null);

-- ----------------------------
-- Table structure for `shop`
-- ----------------------------
DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `shop_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '店铺ID',
  `shop_name` varchar(8) NOT NULL COMMENT '店铺名',
  `shop_image` varchar(64) NOT NULL COMMENT '店铺头像',
  `shopmanager_id` int(8) NOT NULL COMMENT '店主ID',
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop
-- ----------------------------
INSERT INTO `shop` VALUES ('1', '七七11', '27cad1df2160dde0cc5c0e6398ec05fd.jpg', '4');
INSERT INTO `shop` VALUES ('2', '巴巴的店', '4b9cfc86b52c93e2829274387ab3f5a1.jpeg', '7');
INSERT INTO `shop` VALUES ('3', '阿贝小铺', '085dae237e5a87e72fe26300c810e515.jpg', '8');
INSERT INTO `shop` VALUES ('5', '毛毛食品商店', '水果.jpg', '9');
INSERT INTO `shop` VALUES ('6', '', '27cad1df2160dde0cc5c0e6398ec05fd.jpg', '10');
INSERT INTO `shop` VALUES ('7', 'dddd', '', '5');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `user_name` varchar(8) NOT NULL COMMENT '用户名',
  `user_password` varchar(10) NOT NULL COMMENT '用户密码',
  `image` varchar(100) NOT NULL DEFAULT 'http://hbimg.b0.upaiyun.com/fb9431a4c99691e54952d85ed034faf9a6b7e4f22d45-xy5FHF_fw658' COMMENT '用户头像',
  `address` varchar(64) NOT NULL COMMENT '住址',
  `tel` int(11) NOT NULL COMMENT '联系电话',
  `shopkeeper` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否是店主',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('4', '七七七', '123', 'http://hbimg.b0.upaiyun.com/fb9431a4c99691e54952d85ed034faf9a6b7e4f22d45-xy5FHF_fw658', '哈哈哈哈', '2147483647', '1');
INSERT INTO `user` VALUES ('5', '七七七3', '12345', 'http://hbimg.b0.upaiyun.com/fb9431a4c99691e54952d85ed034faf9a6b7e4f22d45-xy5FHF_fw658', '哈哈哈哈', '2147483647', '1');
INSERT INTO `user` VALUES ('7', '巴巴5', '123', 'http://hbimg.b0.upaiyun.com/fb9431a4c99691e54952d85ed034faf9a6b7e4f22d45-xy5FHF_fw658', '哈哈哈哈', '2147483647', '1');
INSERT INTO `user` VALUES ('8', '阿贝', '123', 'http://tvax1.sinaimg.cn/crop.0.0.750.750.1024/eac9d4d5ly8fzu0fxce9lj20ku0ku0ss.jpg', '黑龙江哈尔滨', '2147483647', '1');
INSERT INTO `user` VALUES ('9', '阿毛', '123', 'http://tvax1.sinaimg.cn/crop.0.0.750.750.1024/eac9d4d5ly8fzu0fxce9lj20ku0ku0ss.jpg', '黑龙江哈尔滨', '2147483647', '1');
INSERT INTO `user` VALUES ('10', '啊啊啊啊', '1234', 'http://tvax1.sinaimg.cn/crop.0.0.750.750.1024/eac9d4d5ly8fzu0fxce9lj20ku0ku0ss.jpg', '黑龙江哈尔滨', '2147483647', '1');
INSERT INTO `user` VALUES ('16', 'maomao', '123', 'http://tvax1.sinaimg.cn/crop.0.0.750.750.1024/eac9d4d5ly8fzu0fxce9lj20ku0ku0ss.jpg', '黑龙江哈尔滨', '2147483647', '0');
