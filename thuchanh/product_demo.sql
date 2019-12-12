CREATE DATABASE /*!32312 IF NOT EXISTS*/`product_demo` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `product_demo`;

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `quanlity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`id`,`name`,`quanlity`,`status`) values 
(3,'Zenphone',10,1),
(4,'Iphone',20,1),
(5,'samsung 1',120,1),
(6,'Iphone 11',500,1);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`user_name`,`user_pass`,`fullname`,`role`) values 
(1,'admin','0192023a7bbd73250516f069df18b500','Tai Huynh',1);