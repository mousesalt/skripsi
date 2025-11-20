# Host: localhost  (Version 5.5.5-10.4.17-MariaDB)
# Date: 2022-08-16 18:00:20
# Generator: MySQL-Front 6.0  (Build 1.117)


#
# Structure for table "document"
#

DROP TABLE IF EXISTS `document`;
CREATE TABLE `document` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Structure for table "google_auth"
#

DROP TABLE IF EXISTS `google_auth`;
CREATE TABLE `google_auth` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `googlecode` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
