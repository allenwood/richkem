/*
SQLyog Professional v12.09 (64 bit)
MySQL - 5.6.17 : Database - richkem
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`richkem` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `richkem`;

/*Table structure for table `r_product_categorycn` */

DROP TABLE IF EXISTS `r_product_categorycn`;

CREATE TABLE `r_product_categoryen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '产品类别自增id',
  `title` varchar(256) NOT NULL COMMENT '类别中文名称',
  `create_uid` int(10) unsigned NOT NULL COMMENT '创建者uid',
  `update_uid` int(10) unsigned NOT NULL COMMENT '编辑者uid',
  `create_time` int(10) unsigned NOT NULL COMMENT '创建时间戳',
  `update_time` int(10) unsigned NOT NULL COMMENT '修改时间',
  `status` int(11) DEFAULT NULL COMMENT '-1:删除，0-禁用，1-启用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品类别中文库';

/*Data for the table `r_product_categorycn` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
