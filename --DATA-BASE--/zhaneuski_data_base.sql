-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2020 г., 21:17
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zhaneuski`
--
CREATE DATABASE IF NOT EXISTS `zhaneuski` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `zhaneuski`;

-- --------------------------------------------------------

--
-- Структура таблицы `salarytable`
--

CREATE TABLE `salarytable` (
  `number` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `salary` float NOT NULL,
  `dep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `salarytable`
--

INSERT INTO `salarytable` (`number`, `name`, `salary`, `dep`) VALUES
(1, 'Трамп', 1235160, 'президент'),
(2, 'Гейтс', 124, 'программер'),
(3, 'Джеки Чан', 125, 'Актер'),
(4, 'Женевский', 1234550, 'программер'),
(5, 'Ньютон', 1654, 'Ученый'),
(6, 'Путин', 1324560000, 'президент'),
(7, 'Эйнштейн', 2102160, 'Ученый'),
(8, 'Чак Норрис', 1561160, 'Актер'),
(9, 'Криштиану', 165146000, 'Футболист'),
(10, 'Месси', 5462140, 'Футболист');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
