-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 26, 2024 at 02:07 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javascript_lessons`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `comment` varchar(222) NOT NULL,
  `com_time` date NOT NULL,
  `com_likes` int(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`, `com_time`, `com_likes`) VALUES
(1, 'Sir111', 'dsadsad', '2024-03-17', 0),
(2, 'Sir111', 'dsadsa', '2024-03-17', 1),
(3, 'Sir111', 'asds', '2024-03-17', 4),
(15, 'Sir111', 'ss\r\n', '2024-03-19', 3),
(16, 'Sir111', 'sDsSs', '2024-03-19', 3),
(17, 'Sir111', 'hii. this site is cool. it is help me to imprve my js\r\n', '2024-03-19', 4),
(18, 'Sir111', 'werew', '2024-03-19', 23),
(19, 'Sir111', 'dfdfaa', '2024-03-20', 72),
(20, 'Sir111', 'dsmklmw\'dsakjc', '2024-03-21', 2),
(21, 'Sir111', 'okkk', '2024-03-22', 3),
(22, 'Sir111', 'hello world', '2024-03-23', 1),
(23, 'Sir111', 'Dd', '2024-03-23', 2),
(24, 'hakkk', 'ay ul', '2024-03-23', 2),
(25, 'hakkk', 'dgsgs\r\n', '2024-03-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_comm`
--

CREATE TABLE `lessons_comm` (
  `id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `comment` varchar(222) NOT NULL,
  `lesson_page_num` int(222) DEFAULT NULL,
  `com_time` date NOT NULL,
  `com_likes` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons_comm`
--

INSERT INTO `lessons_comm` (`id`, `username`, `comment`, `lesson_page_num`, `com_time`, `com_likes`) VALUES
(1, 'Sir111', 'uiehfiuafhj', NULL, '2024-03-23', 6),
(2, 'hakkk', 'sdsd', NULL, '2024-03-23', 1),
(3, 'hakkk', 'fsgsf', NULL, '2024-03-23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_titles`
--

CREATE TABLE `lessons_titles` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `chapter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons_titles`
--

INSERT INTO `lessons_titles` (`id`, `title`, `chapter`) VALUES
(1, 'JavaScript-ի ներածություն', '1.1'),
(2, 'Ձեռնարքեր և բնութակրեր', '1.2'),
(3, 'Կոդի խմբագիրներ', '1.3'),
(4, 'Console', '1.4'),
(5, 'Բարև, աշխարհ', '2.1'),
(6, 'Կոդի կառուցվածքը', '2.2'),
(7, 'Use strict', '2.3'),
(8, 'Փոփոխականնէր', '2.4'),
(9, 'Տվյալների տիպեր', '2.5'),
(10, 'Взаимодействие: alert, prompt, confirm', '2.6'),
(11, 'Базовые операторы, математика', '2.7'),
(12, 'Операторы сравнения', '2.8'),
(13, 'Условное ветвление: if, <<?>>', '2.9'),
(14, 'Операторы нулевого слияния и присваивания: <<??>>, <<??=>>', '2.10'),
(15, 'Циклы while и for', '2.11'),
(16, 'Конструкция \"switch\"', '2.12'),
(17, 'Функции', '2.13'),
(18, 'Function Expression', '2.14'),
(19, 'Стрелочные функции, основы', '2.15'),
(20, 'Особенности JavaScript', '2.16'),
(21, 'Debug-ը բրաուզերում', '3.1'),
(22, 'Կոդավորման ոճը(syntax)', '3.2'),
(23, 'Մեկնաբանություններ', '3.3'),
(24, 'Օբյեկտներ', '4.1'),
(25, 'Օբյեկտի հղումներ և <br> պատճենում', '4.2'),
(26, 'Garbage collection', '4.3'),
(27, 'Օբյեկտի մեթոդներ, <<this>>', '4.4'),
(28, 'Կանսդրուկդոր, <<new>> <br>օպերատոր', '4.5'),
(29, 'Պրիմիտիվ տիպերի մեթոդներ', '5.1'),
(30, 'Numbers', '5.2'),
(31, 'Strings', '5.3'),
(32, 'Զանգվածներ', '5.4'),
(33, 'Զանգվածի մեթոդներ', '5.5'),
(34, 'Ռեկուրսիա', '6.1'),
(35, 'spread և rest օպերատորներ', '6.2'),
(36, 'Փոփոխականների <br>տեսանելության գոտի', '6.3'),
(37, 'Var հայտարարման ձև', '6.4'),
(38, 'Գլոբալ օբյեկտ', '6.5'),
(39, 'Синтаксис \"new Function\"', '6.6'),
(40, 'Планирование: setTimeout и setInterval', '6.7'),
(41, 'Декораторы и переадресация вызова, call/apply', '6.8'),
(42, 'Հատկությունների դրոշներ', '7.1'),
(43, 'getter և setter հատկություններ', '7.2'),
(44, 'Պրոտոտիպային ժառանգականություն', '8.1'),
(45, 'F.prototype', '8.2'),
(46, 'Class-ի կառուցվածքը', '9.1'),
(47, 'ժառանգականությունը <br>class-երում', '9.2'),
(48, 'Static հակություններ և <br>մեթոդներ', '9.3'),
(49, 'Private և protected <br>հատկություններ և մեթոդներ', '9.4'),
(50, 'Extend class-երում', '9.5'),
(51, 'try...catch', '10.1'),
(52, 'Ներածություն՝ callback', '11.1'),
(53, 'Promise', '11.2'),
(54, 'Սխալի մշակում promise-ով', '11.3'),
(55, 'Promise API', '11.4'),
(56, 'Async/await', '11.5'),
(57, 'Ներածություն՝ մոդուլներ', '12.1'),
(58, 'Export և Import', '12.2'),
(59, 'Dynamyc Import', '12.3'),
(60, 'BigInt', '13.1'),
(61, 'Unicode', '13.2');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL,
  `hard_level` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `hard_level`) VALUES
(1, 'What is the capital of France?', 'London', 'Paris', 'Berlin', 'Madrid', 'Paris', 1),
(2, 'What is the largest ocean in the world?', 'Atlantic Ocean', 'Indian Ocean', 'Arctic Ocean', 'Pacific Ocean', 'Pacific Ocean', 1),
(3, 'Who wrote \"To Kill a Mockingbird\"?', 'Harper Lee', 'J.K. Rowling', 'Stephen King', 'Charles Dickens', 'Harper Lee', 2),
(4, 'Which planet is known as the Red Planet?', 'Earth', 'Venus', 'Mars', 'Jupiter', 'Mars', 2),
(5, 'What is the chemical symbol for water?', 'H2O', 'CO2', 'O2', 'NaCl', 'H2O', 3),
(6, 'Who painted the Mona Lisa?', 'Leonardo da Vinci', 'Pablo Picasso', 'Vincent van Gogh', 'Michelangelo', 'Leonardo da Vinci', 3);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(222) NOT NULL,
  `chapter1` varchar(222) NOT NULL,
  `chapter2` varchar(222) NOT NULL,
  `chapter3` varchar(222) NOT NULL,
  `chapter4` varchar(222) NOT NULL,
  `chapter5` varchar(222) NOT NULL,
  `chapter6` varchar(222) NOT NULL,
  `chapter7` varchar(222) NOT NULL,
  `chapter8` varchar(222) NOT NULL,
  `chapter9` varchar(222) NOT NULL,
  `chapter10` varchar(222) NOT NULL,
  `chapter11` varchar(22) NOT NULL,
  `chapter12` varchar(222) NOT NULL,
  `chapter13` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `coins` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `sname`, `username`, `age`, `email`, `password`, `coins`) VALUES
(13, 'an', 'amyan', 'anam', 19, 'anam@mail.ru', '$2y$10$2/uePxCpQSKnEfSCMkzyWOQNAYVDZxvUe2.v8ISnHGRRJhaXlcCfS', NULL),
(14, 'lil', 'as', 'lilsol', 22, 'lil@mail.ru', '$2y$10$sPm9Genln1q3JCusji2iVO0kQmqwBeWqfTF68lck0j6glXWg9fJnC', NULL),
(19, 'Syuzi', 'Alaverdyan', 'syuzikos', 18, 'fkjdgeklghwoilw@mail.ru', '$2y$10$dD0GXjjL3e/QiwIn70u54.UYb8Uy0ZJr8XYGt.0WtsbbZlzViAa7m', NULL),
(20, 'haykush', 'Alaverdyan', 'hakkk', 18, 'hajhfshf@gmail.ru', '$2y$10$O3TkTukJyQZj9biPPBrGmOLwUXDL2/pXhUGeErH4Jb9r9hKS8gQS2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_message`
--

CREATE TABLE `users_message` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_message`
--

INSERT INTO `users_message` (`id`, `username`, `message`) VALUES
(1, 'ankar', 'sdsd'),
(2, 'ankar', 'ananan'),
(3, 'ankar', 'dsfsd'),
(4, 'ankar', ''),
(5, 'ankar', 'sdsa'),
(6, 'ankar', 'qkwdks'),
(7, 'ankar', 'an'),
(8, 'ankar', 'qsad'),
(9, 'ankar', 'jdadfbhbyf'),
(10, 'ankar', 'jdadfbhbyf'),
(11, 'ankar', 'jdadfbhbyf'),
(12, 'ankar', 'dsd\r\n'),
(13, 'ankar', 'asas'),
(14, 'Sir111', 'Hi. i wanted to say that you are  \r\nalmost finished)\r\n '),
(15, 'Sir111', 'hii'),
(16, 'Sir111', 'nooo'),
(17, 'Sir111', 'looo'),
(18, 'Sir111', 'sdsd'),
(19, 'Sir111', 'asdsad'),
(20, 'Sir111', 'asdfsa\r\n'),
(21, 'Sir111', 'dfsd'),
(22, 'Sir111', 'fasdas'),
(23, 'syuzikos', '7yhrho3yrt98y589y5htu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons_comm`
--
ALTER TABLE `lessons_comm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons_titles`
--
ALTER TABLE `lessons_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_message`
--
ALTER TABLE `users_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lessons_comm`
--
ALTER TABLE `lessons_comm`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lessons_titles`
--
ALTER TABLE `lessons_titles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users_message`
--
ALTER TABLE `users_message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
