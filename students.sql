-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 18 2019 г., 06:20
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `students`
--

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` tinytext NOT NULL,
  `lastName` tinytext NOT NULL,
  `age` tinyint(4) NOT NULL,
  `university` mediumtext NOT NULL,
  `home` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=79 ;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `firstName`, `lastName`, `age`, `university`, `home`) VALUES
(1, 'Yuriy', 'Dobryanskiy', 28, 'Lviv Polytechnic', 'lviv'),
(2, 'yuriy', '', 29, 'La Laguna', 'Spain'),
(3, 'XXX', '', 30, 'Breslau', 'Poland'),
(4, 'ффф', '', 43, 'Dijon', 'France'),
(65, 'dxe111', '', 0, '', ''),
(78, 'zin', '', 26, 'some', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
