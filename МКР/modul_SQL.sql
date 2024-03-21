-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Бер 21 2024 р., 21:09
-- Версія сервера: 8.0.30
-- Версія PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `modul_SQL`
--

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_url` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image_url`) VALUES
(73, 'Заголовок 1', 'Опис 1 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(74, 'Заголовок 2', 'Опис 2 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(75, 'Заголовок 3', 'Опис 3 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(76, 'Заголовок 4', 'Опис 4 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(77, 'Заголовок 5', 'Опис 5 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(78, 'Заголовок 6', 'Опис 6 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(79, 'Заголовок 7', 'Опис 7 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(80, 'Заголовок 8', 'Опис 8 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(81, 'Заголовок 9', 'Опис 9 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(82, 'Заголовок 10', 'Опис 10 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(83, 'Заголовок 11', 'Опис 11 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg'),
(84, 'Заголовок 12', 'Опис 12 про комарів', 'https://st2.depositphotos.com/7739978/49155/v/1600/depositphotos_491551626-stock-illustration-funny-mosquito-coloring-insect-cartoon.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `Subscriptions`
--

CREATE TABLE `Subscriptions` (
  `id` int NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `Subscriptions`
--

INSERT INTO `Subscriptions` (`id`, `email`) VALUES
(5, 'voloda2017v@gmail.com'),
(6, 'KEFJOPIEJF@gmail.com'),
(7, 'KEFJOPIEJF@gmail.com');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `Subscriptions`
--
ALTER TABLE `Subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблиці `Subscriptions`
--
ALTER TABLE `Subscriptions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
