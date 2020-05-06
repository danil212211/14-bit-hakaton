-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 06 2020 г., 06:35
-- Версия сервера: 5.5.64-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Startup`
--

-- --------------------------------------------------------

--
-- Структура таблицы `proverka`
--

CREATE TABLE IF NOT EXISTS `proverka` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` int(2) NOT NULL,
  `Prov` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Text`
--

CREATE TABLE IF NOT EXISTS `Text` (
  `Text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `Text`
--

INSERT INTO `Text` (`Text`, `id`, `description`, `title`, `Image`, `town`, `User_id`) VALUES
('<p>kjhkjhkjhkj</p>\r\n', 5, 'jkhk', 'sjdfjkkjsfdhj', '177208FKCQx1Pq5S0.jpg', 'kjhkj', 0),
('<p>ололрлоулколорол<strong>куроуикро</strong></p>\r\n', 6, 'овыаролы', 'Проект', '730418hj.jpg', 'лорлрлоролр', 0),
('<p>hkjhkjhkjhkjhkjk</p>\r\n', 7, 'hkjhkj', 'sjdfhjskdhfkjshdfjk', '5000639EA_ldg7Zik.jpg', 'hkjhkj', 0),
('<p><br />\r\nКомитет экологического надзора в ходе рейда выявил загрязнение в реке Верхняя Нерюнгра, <u>передает телеканал &laquo;Якутия 24&raquo; со ссылкой на пресс-службу Минэкологии</u> региона &laquo;По результатам обследования <em>установлено</em> <em>поступление загрязненных вод в реки Верхняя Нерюнгра. Источник</em> поступления &mdash; дамба отстойник, эксплуатируемый обогатительной фабрикой АО ХК &ldquo;Якутуголь&rdquo;&raquo;, &mdash; говорится в сообщении. Госинспекторы отобрали пробы воды и направили в лабораторию для проведения экологической экспертизы. По данному факту возбуждено административное <strong>расследование</strong><br />\r\nЯкутия<sup>24</sup></p>\r\n', 10, 'Загрязнение реки выявлено в Нерюнгринском районе Якутии\r\n', 'Загрязнение реки выявлено в Нерюнгринском районе Якутии\r\n', '461836Без имени-2.png', 'Москва', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(2) NOT NULL,
  `id` int(11) NOT NULL,
  `user_hash` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `password`, `role`, `id`, `user_hash`) VALUES
('danil.zelenskiy.2005@mail.ru', 'danil12345', 0, 4, 'jz7WcjKL4ZHu9vc'),
('bykovvadim18@gmail.com', 'parol', 0, 5, 'Dyqsq8UB2yvYvYb'),
('denzaldymon@gmail.com', '7552901', 0, 6, 'Y7TqQ68SeZ0qAkq');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `proverka`
--
ALTER TABLE `proverka`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Text`
--
ALTER TABLE `Text`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `proverka`
--
ALTER TABLE `proverka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT для таблицы `Text`
--
ALTER TABLE `Text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
