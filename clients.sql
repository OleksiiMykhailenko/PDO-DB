-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 01 2019 г., 00:07
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `DB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `company_name` varchar(45) NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `email`, `company_name`, `is_active`, `age`) VALUES
(1, 'Vasia', 'Vasichkin', 'vasia@gmail.com', 'Umbrella_Corporation', 0, 25),
(2, 'Petja', 'Petrov', 'petja@gmail.com', 'Umbrella_Corporation', 1, 45),
(3, 'Masha', 'Pupkina', 'masha@gmail.com', 'Umbrella_Corporation', 1, 35),
(4, 'Viktor', 'Viktorov', 'viktor@gmail.com', 'Umbrella_Corporation', 0, 26),
(5, 'Yurii', 'Yurov', 'yurii@gmail.com', 'Umbrella_Corporation', 1, 23),
(6, 'Ekaterina', 'Ekatereva', 'ekaterina@gmail.com', 'Umbrella_Corporation', 0, 33),
(7, 'Sergii', 'Sergiev', 'sergii@gmail.com', 'Umbrella_Corporation', 1, 37),
(8, 'Vladislav', 'Vladislavov', 'vladislav@gmail.com', 'Umbrella_Corporation', 0, 44),
(9, 'Lera', 'Lerova', 'lera@gmail.com', 'Umbrella_Corporation', 1, 47),
(10, 'Oleksii', 'Oleksiiv', 'oleksii@gmail.com', 'Umbrella_Corporation', 0, 31),
(11, 'Oleksander', 'Oleksandrov', 'oleksander@gmail.com', 'Umbrella_Corporation', 1, 19);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
