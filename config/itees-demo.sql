-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 23 2017 г., 20:07
-- Версия сервера: 10.1.22-MariaDB
-- Версия PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `itees-demo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`Id`, `name`, `email`, `message`, `date_publication`) VALUES
(78, 'Ольга', 'av@mail.ru', 'One man, no man. Один человек не в счет.', '2017-11-15'),
(79, 'Антон', 'a@mail.ru', 'Zeal without knowledge is a runaway horse\r\nРвение без знания все равно, что лошадь, закусившая удила.', '2014-11-15'),
(80, 'Игорь', 'ab@mail.ru', 'You can take a horse to the water but you cannot make him drink\r\nМожно отвести лошадь на водопой, но невозможно заставить ее пить.', '2017-10-15'),
(81, 'Игорь', 'red-machine@mail.ru', 'Burn not your house to rid it of the mouse. \r\nHe сжигай своего, дома, чтобы избавиться от мышей.', '2017-11-03'),
(82, 'Арсений', 'mechanic@mail.ru', 'To strain at a gnat and swallow a camel. \r\nОтцеживать комара, а проглотить верблюда.  при невнимании к важному обращать внимание на ничтожные вещи.\r\n', '2015-03-03'),
(83, 'Ирина', 'no-spam@bk.ru', 'No pains, no gains. \r\nБез трудов нет и заработка.\r\n', '2013-11-15'),
(84, 'Кира', 'd-tox@mail.ru', 'A blind leader of the blind. \r\nУ слепого слепой поводырь.\r\n\r\n', '2017-10-27'),
(85, 'Марина', 'marina@ya.ru', 'Children are poor men\'s riches. \r\nДети - богатство бедняков.', '2017-11-05'),
(86, 'Алик', 'badchat@google.com', 'All that glitters is not gold. \r\nНе всё то золото, что блестит.', '2017-06-15'),
(89, 'Петр', 'petya@google.com', 'His money burns a hole in his pocket. \r\nУ него деньги прожигают в кармане дыру.', '2016-01-15'),
(90, 'Василий', 'test@rambler.ru', 'Every cook praises his own broth - \r\nКаждый повар свой борщ хвалит', '2017-11-17'),
(92, 'Марья', 'hello@ya.ru', 'To put (set) the cart before the horse. \r\nПоставить повозку впереди лошади.', '2017-11-23');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
