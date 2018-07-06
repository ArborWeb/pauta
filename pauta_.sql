/*
 Navicat Premium Data Transfer

 Source Server         : Garden Pauta
 Source Server Type    : MySQL
 Source Server Version : 50635
 Source Host           : pauta_.mysql.dbaas.com.br
 Source Database       : pauta_

 Target Server Type    : MySQL
 Target Server Version : 50635
 File Encoding         : utf-8

 Date: 05/20/2018 19:48:00 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `campaing_pits`
-- ----------------------------
DROP TABLE IF EXISTS `campaing_pits`;
CREATE TABLE `campaing_pits` (
  `campaing_id` int(11) NOT NULL,
  `pit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `campaings`
-- ----------------------------
DROP TABLE IF EXISTS `campaings`;
CREATE TABLE `campaings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start` date NOT NULL,
  `stop` date NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `situation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `campaings`
-- ----------------------------
BEGIN;
INSERT INTO `campaings` VALUES ('5', 'BIRD - Redes Sociais', '1 Postagem por semana no Facebook, Linkedin e Instagram<br><br>\r\n<strong>Verba de Mídia</strong><br><br>\r\nInstagram R$ 10,00/post<br>\r\nFacebook R$ 30,00/post<br>\r\nLinkedin R$ 35,00/post<br>', '2018-04-02', '2019-03-02', '1', '1', '6'), ('6', 'BIRD - Adwords', 'Verba R$ 200/mês<br><br>\r\nCidades:<br><br>\r\nUberaba<br>\r\nUberlandia<br>\r\nPrata - MG<br>\r\nFrutal<br>\r\nS. J. Rio Preto<br>\r\nAracatuba<br>\r\nPresidente Prudente<br>\r\nPoços de Caldas<br>\r\nPouso Alegre<br>\r\nPiracicaba<br>\r\nLimeira<br>\r\nAmericana<br>\r\nSumaré<br>\r\nCampinas<br>', '2018-05-21', '2019-03-02', '1', '1', '6');
COMMIT;

-- ----------------------------
--  Table structure for `clients`
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `clients`
-- ----------------------------
BEGIN;
INSERT INTO `clients` VALUES ('1', 'BIRD'), ('2', 'Arts Car'), ('3', 'Michelon'), ('4', 'Facioli'), ('5', 'Culture Boss');
COMMIT;

-- ----------------------------
--  Table structure for `notes`
-- ----------------------------
DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `situation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `notes`
-- ----------------------------
BEGIN;
INSERT INTO `notes` VALUES ('14', 'teste', '2018-05-11 16:03:33', '3'), ('15', 'teste', '2018-05-11 16:07:14', '3'), ('16', 'teste', '2018-05-11 16:07:16', '3'), ('17', 'Rogerio ficou de enviar em seguida', '2018-05-11 16:11:35', '3'), ('18', 'rolim quer impulsionar 75 reais um post do protex. aprovar segunda e postar terça\r\n\r\nex.: \"já pensou em um protetor solar pra sua lavoura?\"', '2018-05-11 17:45:37', '3'), ('19', 'enviar boleot michelon, data de amanha com o valor de 2000\r\n', '2018-05-15 09:54:09', '3'), ('20', 'fazer join entre pits e clients', '2018-05-16 10:04:43', '3'), ('21', 'FOBE no ar, segunda feira 21/05', '2018-05-16 11:07:38', '6'), ('22', 'Negociar dívida Anhanguera', '2018-05-16 11:53:41', '6'), ('23', 'Prospectar Demuth', '2018-05-16 11:53:54', '6'), ('24', 'PAUTA SYSTEM - Desenvolver tarefas e comentarios nas pits', '2018-05-16 15:05:17', '6'), ('25', 'PAUTA SYSTEM - terminar camapanhas', '2018-05-16 15:05:41', '6');
COMMIT;

-- ----------------------------
--  Table structure for `pit_tasks`
-- ----------------------------
DROP TABLE IF EXISTS `pit_tasks`;
CREATE TABLE `pit_tasks` (
  `pit_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pits`
-- ----------------------------
DROP TABLE IF EXISTS `pits`;
CREATE TABLE `pits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `campaing_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `stop` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `situation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pits`
-- ----------------------------
BEGIN;
INSERT INTO `pits` VALUES ('6', 'Site Institucional', 'Desenvolver site institucional', '1', '0', '2018-05-16', '2018-05-18', '1', '6'), ('9', 'Site Institucional', 'Desenvolver site para o escritório de advocacia Michelon', '3', '0', '2018-05-16', '2018-05-02', '1', '4'), ('14', 'Site Institucional', 'Desenvolvimento de Site Institucional', '5', '0', '2018-05-16', '2018-05-21', '1', '6'), ('15', 'Conteúdo da semana 14/05', 'Desenvolvimento de postagem para veicular no Faceboo, Instagram e Linkedin.', '1', '0', '2018-05-16', '2018-05-16', '1', '3'), ('16', 'Postagens da Semana', '', '1', '0', '2018-05-16', '2018-05-16', '1', '1'), ('17', 'Relatório de Campanhas', 'Relatório de campanhas de adwords', '2', '0', '2018-05-16', '2018-05-18', '1', '6');
COMMIT;

-- ----------------------------
--  Table structure for `priorities`
-- ----------------------------
DROP TABLE IF EXISTS `priorities`;
CREATE TABLE `priorities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `priorities`
-- ----------------------------
BEGIN;
INSERT INTO `priorities` VALUES ('1', 'Alta'), ('2', 'Média'), ('3', 'Baixa');
COMMIT;

-- ----------------------------
--  Table structure for `situations`
-- ----------------------------
DROP TABLE IF EXISTS `situations`;
CREATE TABLE `situations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `situations`
-- ----------------------------
BEGIN;
INSERT INTO `situations` VALUES ('1', 'Concluída'), ('2', 'Cancelada'), ('3', 'Deletada'), ('4', 'Aguardando Cliente'), ('5', 'Stand By'), ('6', 'Em Andamento');
COMMIT;

-- ----------------------------
--  Table structure for `task`
-- ----------------------------
DROP TABLE IF EXISTS `task`;
CREATE TABLE `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `stop` date NOT NULL,
  `situation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'Guilherme');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
