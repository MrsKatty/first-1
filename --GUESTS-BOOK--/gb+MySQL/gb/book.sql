-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2020 г., 21:10
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
-- База данных: `book`
--
CREATE DATABASE IF NOT EXISTS `book` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `book`;

-- --------------------------------------------------------

--
-- Структура таблицы `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table1`
--

INSERT INTO `table1` (`id`, `text`, `name`) VALUES
(2, 'hello', 'max'),
(4, 'hello', 'Andre'),
(6, 'hello', 'Luke'),
(7, 'hello', 'Hans'),
(8, 'hello', 'Tao'),
(9, '2352', 'dfg'),
(10, 'fbvgdgf', 'dfbdgf'),
(11, '', ''),
(12, 'svfr', 'dfbvdf'),
(13, 'svfr', 'dfbvdf'),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, 'hello\r\n', 'hans'),
(18, '', ''),
(19, '', ''),
(20, 'asdad', 'asdda'),
(21, 'asdad', 'asdda'),
(22, 'sdad', 'adad'),
(23, 'asda', 'ads'),
(24, 'asda', 'ads'),
(25, 'asda', 'ads'),
(26, 'asda', 'ads'),
(27, 'asda', 'adsda'),
(28, 'asda', 'adsda'),
(29, 'hello', 'VoVa'),
(30, 'asdd', 'adad'),
(31, 'asad', 'adad'),
(32, 'asda', 'asda'),
(33, 'asda', 'asda'),
(34, 'sqawda', 'asdadad');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
