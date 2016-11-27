-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 27 2016 г., 13:48
-- Версия сервера: 5.7.14
-- Версия PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `halfworld`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hotels`
--

CREATE TABLE `hotels` (
  `name` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `roomprice` int(100) NOT NULL,
  `peopleprice` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `hotels`
--

INSERT INTO `hotels` (`name`, `description`, `image_url`, `roomprice`, `peopleprice`) VALUES
('Paris 3: Urow IO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid est dolorem unde natus veritatis, consequatur, ad ipsum ipsam placeat voluptatibus quis nesciunt voluptatem officiis vel odio cumque reprehenderit dignissimos distinctio. Lorem ipsum dolor sit amet, consectetur adipisiciolor sit amet, consectetur adipisicing elit. Aliquid est dolorem unde natus veritatis, consequatur, ad ipsum ipsam placeat voluptatibus quis nesciunt voluptatem officiis vel odio cumque reprehenderit dignissimos distinctio. Lorem ipsum dolor sit amet, consectetur adipisicinolor sit amet, consectetur adipisicing elit. Aliquid est dolorem unde natus veritatis, consequatur, ad ipsum ipsam placeat voluptatibus quis nesciunt voluptatem officiis vel odio cumque reprehenderit dignissimos distinctio. Lorem ipsum dolor sit amet, consectetur adipisicinng elit. Mollitia ex eveniet voluptatem magni consequatur quo quam eius laboriosam, quis cum animi, voluptate ipsam labore soluta enim aspernatur saepe suscipit esse!', 'hotel1.jpg', 80, 45),
('London 4: GreyKing', 'Aux portes de la cité des Ducs, l’ancien Domaine d’Orvault, rebaptisé Quintessia, permet de savourer l’art de vivre à la nantaise. Cette escale de charme est un point de départ idéal pour les randonnées, le golf et la découverte de la cité nantaise. Les 40 chambres récemment rénovées affichent un style volontairement contemporain, tout en étant chaleureuses et élégantes. Le restaurant, lui aussi, a fait peau neuve, et le chef y propose une carte axée sur les produits du terroir et de saison. À cela s’ajoute une sélection intéressante de vins de Loire pour compléter cet instant savoureux. Enfin, pour parfaire le séjour et se ressourcer, la balnéo-Spa de 600 m² offert une véritable parenthèse de bien-être.', 'hotel2.jpg', 115, 80),
('New York 21: OldLand', 'Place au confort et au bien-être : nos 11 chambres Natura vous accueillent au cœur des arbres pour vivre votre séjour la tête dans les nuages. Après une belle nuit, réveillez-vous en douceur avec un petit-déjeuner servi sur votre terrasse privée. Vous profiterez alors en toute tranquillité d’une vue imprenable sur notre jardin fleuri, pour ne penser qu’à une seule chose : prendre le temps de vivre. Pour un séjour en famille, l’hôtel de charme 4* Quintessia met à votre disposition 2 chambres familiales Charmes et Natura : des chambres communicantes qui vous permettront de garder un œil sur vos enfants tout en gardant votre intimité !', 'hotel3.jpg', 95, 50),
('Boston 7: YoungBreath', 'Entièrement rénovées en 2011, les 28 chambres de charme de l’hôtel 4* Quintessia vous accueillent dans un univers d’élégance et de confort. Les couleurs douces y côtoient les matériaux nobles, avec une ambiance feutrée sublimée par un parquet aux teintes naturelles et des carrelages Porcelanosa. Un cadre d’exception - Vous apprécierez également la verdure des paysages environnants et la vue imprenable sur notre jardin fleuri. Un véritable havre de paix dont vous pourrez profiter depuis votre chambre en écoutant l’agréable gazouillis des oiseaux accompagner votre petit-déjeuner. Pour un séjour en famille - L’hôtel 4* Quintessia met à votre disposition 2 chambres de charme familiales : des chambres communicantes qui vous permettront de garder un œil sur vos enfants tout en gardant votre intimité !', 'hotel4.jpg', 75, 40);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `date_from` varchar(100) NOT NULL,
  `date_to` varchar(100) NOT NULL,
  `number_rooms` int(100) NOT NULL,
  `number_people` int(100) NOT NULL,
  `total_price` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `username`, `hotel_name`, `date_from`, `date_to`, `number_rooms`, `number_people`, `total_price`) VALUES
(2, 'firstUser', 'Paris 3: Urow IO', '2016-11-02', '2016-11-10', 3, 4, 420),
(3, 'firstUser', 'London 4: GreyKing', '2016-11-10', '2016-11-11', 3, 4, 665),
(4, 'firstUser', 'London 4: GreyKing', '2016-11-10', '2016-11-11', 3, 4, 665),
(5, 'firstUser', 'London 4: GreyKing', '2016-11-10', '2016-11-11', 3, 4, 665),
(6, 'firstUser', 'New York 21: OldLand', '2016-11-09', '2016-11-24', 3, 3, 435),
(7, 'firstUser', 'New York 21: OldLand', '2016-11-09', '2016-11-24', 3, 3, 435),
(8, 'firstUser', 'New York 21: OldLand', '2016-11-09', '2016-11-24', 3, 3, 435),
(9, 'firstUser', 'New York 21: OldLand', '2016-11-09', '2016-11-24', 3, 3, 435),
(10, 'firstUser', 'Boston 7: YoungBreath', '2016-11-02', '2016-11-06', 3, 3, 345),
(11, 'firstUser', 'Boston 7: YoungBreath', '2016-11-02', '2016-11-06', 3, 3, 345),
(12, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(13, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(14, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(15, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(16, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(17, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(18, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(19, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(20, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(21, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 115),
(22, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-11', 1, 1, 1150),
(23, 'firstUser', 'Boston 7: YoungBreath', '2016-11-01', '2016-11-09', 2, 2, 1840),
(24, 'second', 'Paris 3: Urow IO', '2016-11-15', '2016-11-20', 2, 3, 1475);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id_question` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id_question`, `name`, `email`, `message`) VALUES
(1, 'John', 'myemail@wefwe.com', 'myemail@wefwe.com'),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `surname`, `email`, `tel`) VALUES
('firstUser', '12345', 'John', 'Smith', 'wedw@gmail.com', '+4375893745'),
('wefwe', '1234567', 'qwqw', 'wefwefwf', 'wefwef@fwef.wef', '12412412424'),
('second', 'qwerty', 'Billi', 'Oops', 'wefwfe@wf.wef', '+3123123123'),
('jojo', '123', 'owejfoi', 'weoifjweo', 'weif@wef,wef', '+2342341113');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `username` (`username`),
  ADD KEY `hotel_name` (`hotel_name`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`),
  ADD UNIQUE KEY `id_question` (`id_question`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
