-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 29 2020 г., 23:24
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mylesson5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(1) NOT NULL,
  `title` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `adress` text CHARACTER SET utf8 DEFAULT NULL,
  `adress_big` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(123) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `title`, `adress`, `adress_big`, `size`, `count`) VALUES
(1, '1.png', '/images/small/', '/images/big/', 36, 2),
(2, '2.jpg', '/images/small/', '/images/big/', 6, 2),
(3, '3.png', '/images/small/', '/images/big/', 46, 0),
(4, '4.png', '/images/small/', '/images/big/', 30, 0),
(5, '5.png', '/images/small/', '/images/big/', 42, 0),
(6, '6.png', '/images/small/', '/images/big/', 39, 0),
(7, '7.png', '/images/small/', '/images/big/', 25, 0),
(8, '8.png', '/images/small/', '/images/big/', 47, 0),
(9, '9.png', '/images/small/', '/images/big/', 44, 0),
(10, '10.png', '/images/small/', '/images/big/', 27, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
