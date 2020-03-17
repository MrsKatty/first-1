-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 17 2020 г., 21:17
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
-- Структура таблицы `football_players`
--

CREATE TABLE `football_players` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `football_players`
--

INSERT INTO `football_players` (`id`, `name`, `dep`, `salary`) VALUES
(1, 'Криштиану', 'нападающий', NULL),
(2, 'Дибала', 'нападающий', 154161),
(3, 'Рабьо', 'полузащ', 16156),
(4, 'Пьянич', 'полузащ', 16514),
(5, 'Куадрадо', 'полузащ', 5196840),
(6, 'Бонуччи', 'защит', 1561660),
(7, 'Де Лигт', 'защит', 15656500),
(8, 'Щесны', 'вратарь', 15665500),
(9, 'Буффон', 'вратарь', 546744),
(10, 'Игуаин', 'нападающий', 878564);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `price`) VALUES
(1, 'Майка', 2),
(2, 'джинсы', NULL),
(3, 'кросы', 2),
(4, 'шорты', 20),
(5, 'рубашка', 2);

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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `football_players`
--
ALTER TABLE `football_players`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `football_players`
--
ALTER TABLE `football_players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
