-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Бер 21 2024 р., 20:33
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
-- База даних: `bd_SQL`
--

-- --------------------------------------------------------

--
-- Структура таблиці `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(6658) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Таблиця даних про контакти';

--
-- Дамп даних таблиці `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`) VALUES
(5, 'МАКСИМ', 'makssavich@gmail.com', '546544546', 'wdfwwef'),
(6, 'MAKS', 'makssavich@gmail.com', '+3806986589', 'em,fsjkhh'),
(7, 'MAKS', 'makssavich@gmail.com', '+3806986589', 'em,fsjkhh');

-- --------------------------------------------------------

--
-- Структура таблиці `House`
--

CREATE TABLE `House` (
  `id` int NOT NULL,
  `price` varchar(50) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(25) NOT NULL,
  `contactPhone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bedrooms` int NOT NULL,
  `bathrooms` int NOT NULL,
  `discount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Таблиця для збереження даних про будинки';

--
-- Дамп даних таблиці `House`
--

INSERT INTO `House` (`id`, `price`, `name`, `address`, `contactPhone`, `image`, `bedrooms`, `bathrooms`, `discount`) VALUES
(1, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(13, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 0),
(14, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 0),
(15, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(16, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(17, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 0),
(18, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(19, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(20, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(21, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(22, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(23, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(24, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(25, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(26, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1),
(27, '600', 'Detached house • 5y old', '742 Evergreen Terrace', '(555) 555-4321', 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 3, 2, 1);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `House`
--
ALTER TABLE `House`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `House`
--
ALTER TABLE `House`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
