/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-01-15 08:54:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `auth_item` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('admin', '1', null, null);
INSERT INTO `auth_assignment` VALUES ('admin', '15', null, null);
INSERT INTO `auth_assignment` VALUES ('guest', '16', null, null);

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('actualizar', '1', null, null, null);
INSERT INTO `auth_item` VALUES ('admin', '2', null, null, null);
INSERT INTO `auth_item` VALUES ('capturar', '1', null, null, null);
INSERT INTO `auth_item` VALUES ('consulta', '1', null, null, null);
INSERT INTO `auth_item` VALUES ('eliminar', '1', null, null, null);
INSERT INTO `auth_item` VALUES ('guest', '2', null, null, null);

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`) USING BTREE,
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`),
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('admin', 'actualizar');
INSERT INTO `auth_item_child` VALUES ('admin', 'capturar');
INSERT INTO `auth_item_child` VALUES ('guest', 'consulta');

-- ----------------------------
-- Table structure for fotos
-- ----------------------------
DROP TABLE IF EXISTS `fotos`;
CREATE TABLE `fotos` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fotos
-- ----------------------------
INSERT INTO `fotos` VALUES ('1', '1', 'https://www.truper.com/media/import/imagenes//INCO-1500.jpg');
INSERT INTO `fotos` VALUES ('2', '2', 'https://www.truper.com/media/import/imagenes//INCO-1500.jpg');
INSERT INTO `fotos` VALUES ('3', '3', 'https://www.truper.com/media/import/imagenes//INCO-1500.jpg');
INSERT INTO `fotos` VALUES ('4', '4', 'https://www.truper.com/media/import/imagenes//INCO-1500.jpg');
INSERT INTO `fotos` VALUES ('5', '5', 'https://www.truper.com/media/import/imagenes//INCO-1500.jpg');
INSERT INTO `fotos` VALUES ('6', '6', 'https://www.truper.com/media/import/imagenes//INCO-1500.jpg');
INSERT INTO `fotos` VALUES ('7', '7', 'https://www.truper.com/media/import/imagenes//INCO-1500.jpg');

-- ----------------------------
-- Table structure for marcas
-- ----------------------------
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of marcas
-- ----------------------------
INSERT INTO `marcas` VALUES ('1', 'truper');
INSERT INTO `marcas` VALUES ('2', 'pretul');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) DEFAULT NULL,
  `sku` varchar(10) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', '10404', 'SKU-001', 'pinzas de corte ', '1', 'de corte alta precision', '1000');
INSERT INTO `productos` VALUES ('2', '10405', 'SKU-002', 'desarmador', '1', 'desarmador azul', '200');
INSERT INTO `productos` VALUES ('3', '10406', 'SKU-003', 'desarmador plano', '2', 'desarmador de precision plano', '600');
INSERT INTO `productos` VALUES ('4', '10406', 'SKU-004', 'taladro ', '2', 'taladro blabla', '500');
INSERT INTO `productos` VALUES ('5', '10407', 'SKU-005', 'cables pasacorriente', '1', 'cables pasacorriente', '400');
INSERT INTO `productos` VALUES ('6', '10409', 'SKU-006', 'matillo', '2', 'martillo 12\"', '600');
INSERT INTO `productos` VALUES ('7', '10410', 'SKU-007', 'foco', '1', '1200 horas de vida', '2000');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre_real` varchar(250) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `authKey` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'admin', '01eac4856b038a9b293bf7c7f2de8abb', 'Administrador', '', '12345b');
INSERT INTO `usuarios` VALUES ('15', 'jasp', '46f64c70ff7df012d4d942f2d5894e75', 'José Antonio Salgado', 'jasp7979@gmail.com', '12345a');
INSERT INTO `usuarios` VALUES ('16', 'fer15', '8a72f2412fc340ca11469a90f71356b1', 'Fernanda', '', '12345c');
