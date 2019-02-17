-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first name` tinytext NOT NULL,
  `last name` tinytext NOT NULL,
  `age` tinyint(4) NOT NULL,
  `university` mediumtext NOT NULL,
  `home` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

INSERT INTO `students` (`id`, `first name`, `last name`, `age`, `university`, `home`) VALUES
(1,	'Yuriy',	'Dobryanskiy',	28,	'Lviv Polytechnic',	'Pasichna');

-- 2019-02-15 12:18:32
