-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 12, 2024 at 06:02 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `token`, `email`) VALUES
(5, 'anahit', '663a48866eec1', 'anahit.amyan1@gmail.com'),
(6, 'anahit', '663a494467edd', 'anahit.amyan1@gmail.com'),
(7, 'anahit', '663a4a0358465', ''),
(8, 'Anahit', '663ccf270dea9', ''),
(9, 'anahit', '663ddc1914c6a', ''),
(10, 'anahit', '663ddc4e76d08', ''),
(11, 'anahit', '663de003340fc', '');

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
(46, 'anam', 'Ասա՛: «javascript language» բաժնում front-end ծրագրավորման համար որտեղ պետք է սովորել: Տանը ես հասկանում եմ, որ պետք է ամեն ինչ սովորել։ Բայց մինչև ո՞ր կետը պետք է սովորեցնեք հիմունքները:', '2024-05-05', 0),
(47, 'anam', 'Բարեւ բոլորին! Առաջադրանքները կատարելու և պրակտիկայի համար, անհրաժեշտ է՞ ներբեռնել և տեղադրել հատուկ ծրագրեր, խնդրում ենք բացատրել', '2024-05-05', 0),
(48, 'merr77', 'Ներածության մեջ գրված չէ՞, թե ինչ է պետք տեղադրել։ Գումարած, ծրագրավորողի լավագույն գործիքներից մեկը Google-ի տեղեկատվությունը և ձեր հարցերի պատասխանները գտնելու հնարավորությունն է, ', '2024-05-05', 0),
(49, 'merr77', 'Ողջույն, ես լրիվ նոր եմ, ուստի բոլորին խնդրում եմ չհայհոյել, եթե հիմար հարցեր եմ տալիս։\r\nԽնդրում եմ պատասխանեք՝ ի՞նչ իմաստ ունի դասագիրք գնել, եթե այն տեղադրված է վերեւում այս կայքում։', '2024-05-05', 0),
(50, 'merr77', 'Բարի օր Ասացեք, խնդրում եմ, գրքի 2023 թվականի տարբերակը այժմ տեղադրված է կայքում։ Որքա՞ն է այն տարբերվում օրինակ 2021 թվականի տարբերակից։ Ես սկսում եմ JavaScript սովորել, մտածում եմ՝ նոր տարբերակ գնե՞մ', '2024-05-05', 1),
(51, 'anam', 'Բարի օր։', '2024-05-08', 1),
(52, 'anam', 'hello world\r\n', '2024-05-08', 0),
(53, 'anam', 'Բարի օր', '2024-05-08', 0);

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
(3, 'hakkk', 'fsgsf', NULL, '2024-03-23', 0),
(4, 'anam', 'asdadd', NULL, '2024-03-31', 0),
(5, 'anam', 'wdqdds', NULL, '2024-03-31', 1),
(6, 'anam', 'Մեկ հարց՝ .....\r\n', NULL, '2024-05-08', 0);

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
(2, 'Ձեռնարկներ և բնութագրեր', '1.2'),
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
-- Table structure for table `lessons_title_chapter2`
--

CREATE TABLE `lessons_title_chapter2` (
  `id` int(255) NOT NULL,
  `title` varchar(222) NOT NULL,
  `chapter` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons_title_chapter2`
--

INSERT INTO `lessons_title_chapter2` (`id`, `title`, `chapter`) VALUES
(1, 'Բրաուզերի միջավայր', '1.1'),
(2, 'DOM ծառ', '1.2'),
(3, 'Որոնում՝ getElement*, querySelector*', '1.3'),
(4, 'Ոճեր և դասեր', '1.4'),
(5, 'Տարրերի չափերը և ոլորումը', '1.5'),
(6, 'Պատուհանների չափերը և ոլորումը', '1.6'),
(7, 'Բրաուզերի իրադարձությունների ներածություն', '2.1'),
(8, 'Всплытие и погружение', '2.2'),
(9, 'Действия браузера по умолчанию', '2.3'),
(10, 'Основы событий мыши', '3.1'),
(11, 'Движение мыши: mouseover/out, mouseenter/leave', '3.2'),
(12, 'Drag\'n\'Drop с событиями мыши', '3.3'),
(13, 'Клавиатура: keydown и keyup', '3.4'),
(14, 'Свойства и методы формы', '4.1'),
(15, 'Фокусировка: focus/blur', '4.2'),
(16, 'События: change, input, cut, copy, paste', '4.3'),
(17, 'Отправка формы: событие и метод submit', '4.4'),
(18, 'Страница: DOMContentLoaded, load, beforeunload, unload', '5.1'),
(19, 'Скрипты: async, defer', '5.2'),
(20, 'Загрузка ресурсов: onload и onerror', '5.3'),
(21, 'Событийный цикл: микрозадачи и макрозадачи', '6.1');

-- --------------------------------------------------------

--
-- Table structure for table `level1_question`
--

CREATE TABLE `level1_question` (
  `id` int(222) NOT NULL,
  `question` varchar(222) NOT NULL,
  `option1` varchar(222) NOT NULL,
  `option2` varchar(222) NOT NULL,
  `option3` varchar(222) NOT NULL,
  `option4` varchar(222) NOT NULL,
  `correct_answer` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level1_question`
--

INSERT INTO `level1_question` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(1, 'Ի՞նչ է ալգորիթմը', 'Ալգորիթմը պրոցեդուրա կամ բանաձև է, որն օգտագործվում է խնդրի լուծման համար։', 'Ալգորիթմը համակարգչային ծրագրի ստեղծման գործընթաց է։', 'Ալգորիթմը պատահական հրահանգների հավաքածու է։', 'Բոլոր պատասխանները ճիշտ են։', 'Ալգորիթմը պրոցեդուրա կամ բանաձև է, որն օգտագործվում է խնդրի լուծման համար։'),
(2, 'ալգորիթմին բնութագրող հիմնական հատկանիշները:', 'Ճշգրտությունը,Վերջավորություն', 'Ճշգրտությունը,Եզակիություն,Օպտիմալություն,Վերջավորություն,Արդյունք', 'Վերջավորություն,Արդյունք', 'Բոլոր պատասխանները ճիշտ են։', 'Ճշգրտությունը,Եզակիություն,Օպտիմալություն,Վերջավորություն,Արդյունք'),
(3, 'ալգորիթմի տեսակները', 'Բլոկ-սխեմատիկ,Գրաֆիկական', 'Տեքստային(կոդային)', 'Բլոկ-սխեմատիկ,Գրաֆիկական,Տեքստային(կոդային)', 'Բոլոր պատասխանները ճիշտ են։', 'Բլոկ-սխեմատիկ,Գրաֆիկական,Տեքստային(կոդային)'),
(4, 'Ի՞նչ է փոփոխականը', 'Փոփոխականը որևէ տրամաբանական անվանում ունեցող, հիշողության տարածք\r\nզբաղեցնող տարրա է, որը իր մեջ կարող է պահել տարբեր տիպի փոփոխվող տվյալներ։', 'Փոփոխականը տվյալների պահոց է։', 'Փոփոխականը որևէ տրամաբանական անվանում ունեցող, հիշողության տարածք\r\nզբաղեցնող տարրա է, որը իր մեջ կարող է պահել միայն տեքստային տիպի տվյալներ։', 'Բոլոր պատասխանները ճիշտ են։', 'Փոփոխականը որևէ տրամաբանական անվանում ունեցող, հիշողության տարածք\r\nզբաղեցնող տարրա է, որը իր մեջ կարող է պահել տարբեր տիպի փոփոխվող տվյալներ։');

-- --------------------------------------------------------

--
-- Table structure for table `level2_question`
--

CREATE TABLE `level2_question` (
  `id` int(222) NOT NULL,
  `question` varchar(222) NOT NULL,
  `option1` varchar(222) NOT NULL,
  `option2` varchar(222) NOT NULL,
  `option3` varchar(222) NOT NULL,
  `option4` varchar(222) NOT NULL,
  `correct_answer` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level2_question`
--

INSERT INTO `level2_question` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(1, 'Ի՞նչ է globalThis –ը', '1', 'globalThis –ը հատուկ օբյեկտ է,որը ապահովում է գլոբալտարածք մուտք գործելու\r\nհնարավորությունը', '3', '4', 'globalThis –ը հատուկ օբյեկտ է,որը ապահովում է գլոբալտարածք մուտք գործելու\r\nհնարավորությունը'),
(2, 'Ի՞նչ է զանգվածը', 'Զանգվածը գլոբալ object-ի տեսակ է,որը հիշողության որևէ տարածք զբաղեցնելով,իր մեջ\r\nկարող է պահել տարբեր տիպի համարակալված (ինդեղավորված) տվյալների\r\nհավաքածու։', '2', '3', '4', 'Զանգվածը գլոբալ object-ի տեսակ է,որը հիշողության որևէ տարածք զբաղեցնելով,իր մեջ\r\nկարող է պահել տարբեր տիպի համարակալված (ինդեղավորված) տվյալների\r\nհավաքածու։'),
(3, 'Մեկնաբանել destructuring գործողությունը', '1', '2', 'destructuring գործողությունը օբյեկտից կամ զանգվածից արժեքներ մասնատելու,դուրս\r\nբերելու,փոփոխականներին վերագրելու համար է։', '4', 'destructuring գործողությունը օբյեկտից կամ զանգվածից արժեքներ մասնատելու,դուրս\r\nբերելու,փոփոխականներին վերագրելու համար է։');

-- --------------------------------------------------------

--
-- Table structure for table `level3_question`
--

CREATE TABLE `level3_question` (
  `id` int(222) NOT NULL,
  `question` varchar(222) NOT NULL,
  `option1` varchar(222) NOT NULL,
  `option2` varchar(222) NOT NULL,
  `option3` varchar(222) NOT NULL,
  `option4` varchar(222) NOT NULL,
  `correct_answer` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level3_question`
--

INSERT INTO `level3_question` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(1, 'DragEvent -ի տեսակները', 'drag, dragstart, dragenter, dragleave, dragover, drop, dragened․', '2', '3', '4', 'drag, dragstart, dragenter, dragleave, dragover, drop, dragened․'),
(2, 'Մեկնաբանել import/export հրամանները', '1', '2', '3', 'Մեկնաբանել import/export հրամանները', 'Մեկնաբանել import/export հրամանները'),
(3, 'Ի՞նչ է DOM – ը', '1', 'DOM', '3', '4', 'DOM'),
(4, 'Ի՞նչ է մոդուլը', 'Մոդուլը ուղղղակի ֆայլ է։ մի script-ը մի մոդուլ է։ Մոդուլները կարող են զագռուզկա անել\r\nմեկը մյուսին,և օգտագործել միմիյանց ֆունկցիանալությունը,կանչել մի մոդուլի\r\nֆունկցիան մյուսի մեջ։ ', '2', '3', '4', 'Մոդուլը ուղղղակի ֆայլ է։ մի script-ը մի մոդուլ է։ Մոդուլները կարող են զագռուզկա անել\r\nմեկը մյուսին,և օգտագործել միմիյանց ֆունկցիանալությունը,կանչել մի մոդուլի\r\nֆունկցիան մյուսի մեջ։ ');

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
  `correct_answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(1, 'Ալգորիթմի տեսակները', 'Բլոկ-սխեմատիկ, Գրաֆիկական', 'Բլոկ-սխեմատիկ, Գրաֆիկական, \r\nՏեքստային', 'Բլոկ-սխեմատիկ,Կոդային', 'Բլոկ-սխեմատիկ', 'Բլոկ-սխեմատիկ, Գրաֆիկական, \r\nՏեքստային'),
(28, 'Ի՞նչ է ալգորիթմը', 'Ալգորիթմը պրոցեդուրա կամ բանաձև է, որն օգտագործվում է խնդրի լուծման համար։', 'Ալգորիթմը տվյալների ներքին պահոց է։', 'Ալգորիթմը տարբեր տիպի տվյալների հավաքածու է', 'Ճիշտ են բոլոր պատասխանները։', 'Ալգորիթմը պրոցեդուրա կամ բանաձև է, որն օգտագործվում է խնդրի լուծման համար։'),
(29, 'Որո՞նք են ալգորիթմին բնութագրող հիմնական հատկանիշները:', 'Ճշգրտությունը, Եզակիություն, Օպտիմալություն, Վերջավորություն\r\n', 'Ճշգրտությունը Եզակիություն,Օպտիմալություն, Վերջավորություն, Արդյունք', 'Արդյունք', 'Օպտիմալություն, Վերջավորություն, Արդյունք', 'Ճշգրտությունը Եզակիություն,Օպտիմալություն, Վերջավորություն, Արդյունք');

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
  `coins` int(200) DEFAULT NULL,
  `profile_img` text,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `sname`, `username`, `age`, `email`, `password`, `coins`, `profile_img`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(22, 'Hakob', 'Shahnazaryan', 'Hak', 25, 'hakob.shahnazaryan.2014@gmail.com', '$2y$10$RUedn9/KztWlsHJJCBj4nOfi39Y.dPU7ZHQQJ8uyRkS6pdzaBFtbu', NULL, NULL, NULL, NULL),
(23, 'Svetik', 'n', 'svetikkk', 19, 'nazaretyan2503@gmail.com', '$2y$10$wgOaHZnI0o3U5bDBUcGVKe/oNItRt8E6Jb2C5tTGbeVnU4KZ591cO', NULL, NULL, NULL, NULL),
(25, 'an', 'amyan', 'anam', 19, 'anam@gmail.com', '$2y$10$ewyhDcGX46yGD.dns6fA8eL5BhP27XrYJm4NDfkeBiSeWcjJ4CoSe', NULL, NULL, NULL, NULL),
(26, 'meri', 'Alaverdyan', 'merr77', 18, 'meri.alaverdyan@mail.ru', '$2y$10$QhObOHJMT9Sz0RJmBLMrZufS.1CG5dWa/hQ8xbk7t6etdcLGy1Wfu', NULL, NULL, NULL, NULL),
(27, 'Anahit', 'Amyan', 'anam77', 19, 'anahit.amyan1@gmail.com', '$2y$10$WsLaNypOwK7LrqXbKKo9ret0Bc8QXHNSKPxkgrcMP6PAt6G7B0d9C', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_message`
--

CREATE TABLE `users_message` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `current_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_message`
--

INSERT INTO `users_message` (`id`, `username`, `message`, `current_time`) VALUES
(25, 'anam', 'Ողջույն, շնորհակալ եմ դասընթացների համար, միայն կցանկանայի ավելի մանրամասն ինֆո լիներ թեստերի մեջ', '2024-05-04'),
(26, 'anam', 'կցանկանայի ավելի մանրամասն ինֆո լիներ թեստերի մեջ', '2024-05-04'),
(27, 'anam', 'Ողջույն, շատ հաջելի միջավայր է', '2024-05-04'),
(28, 'anam', 'Բարև Ձեզ:)', '2024-05-08'),
(29, 'anam', 'Բարև Ձեզ:)', '2024-05-08'),
(30, 'anam', 'Բարև Յեզ:)', '2024-05-08'),
(31, 'anam', 'Բարև Ձեզ:)', '2024-05-08'),
(32, 'anam', 'Բարև Ձեզ:)\r\n', '2024-05-08'),
(33, 'anam', 'Բարև Ձեզ', '2024-05-08'),
(34, 'anam', 'Բարև Ձեզ:)', '2024-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `lessons_title_chapter2`
--
ALTER TABLE `lessons_title_chapter2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level1_question`
--
ALTER TABLE `level1_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level2_question`
--
ALTER TABLE `level2_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level3_question`
--
ALTER TABLE `level3_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_reset_token_hash` (`reset_token_hash`);

--
-- Indexes for table `users_message`
--
ALTER TABLE `users_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `lessons_comm`
--
ALTER TABLE `lessons_comm`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lessons_titles`
--
ALTER TABLE `lessons_titles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `lessons_title_chapter2`
--
ALTER TABLE `lessons_title_chapter2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `level1_question`
--
ALTER TABLE `level1_question`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `level2_question`
--
ALTER TABLE `level2_question`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level3_question`
--
ALTER TABLE `level3_question`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users_message`
--
ALTER TABLE `users_message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
