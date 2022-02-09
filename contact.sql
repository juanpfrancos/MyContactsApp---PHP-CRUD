CREATE DATABASE  IF NOT EXISTS `contacts_db`;
USE `contacts_db`;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
)
