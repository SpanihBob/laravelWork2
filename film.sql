-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.24-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных adventurework
CREATE DATABASE IF NOT EXISTS `adventurework` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `adventurework`;

-- Дамп структуры для таблица adventurework.film
CREATE TABLE IF NOT EXISTS `film` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Genre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Premiere` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Starring` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Time` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Poster` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы adventurework.film: ~3 rows (приблизительно)
INSERT INTO `film` (`Id`, `Genre`, `Premiere`, `Starring`, `Time`, `Description`, `Country`, `Title`, `Poster`) VALUES
	(1, 'adventures', 'February 10, 2022', 'Tom Holland, Mark Wahlberg, Antonio Banderas, Sophia Taylor Ali, Tati Gabriel, Patricia Meaden, Sarah Jacqueline Petric', '115 min', 'Нейтан Дрейк и Виктор  Салливан, два искателя приключений, отправляются на поиски величайшего сокровища мира. Кроме того, они надеются найти улики, которые приведут их к давно потерянному брату Нейтана.', 'USA, Spain', 'Uncharted', 'https://avatars.mds.yandex.net/get-afishanew/23222/28145492cfa537d193b81a01c7558ef9/s190x280'),
	(2, 'drama', 'February 23, 2022', 'Viktor Khorinyak, Sergey Bezrukov, Angelina Strechina, Inga Oboldina, Evgenia Dmitrieva, Andrei Titchenko, Oleg Chugunov, Viktor Verzhbitsky, Irina Romasheva, Valery Sklyarov, Maxim Antonnikov, Nelya Garyaeva-Vildanova, Evdokia Lavrukhina, Andrei Sergeev, Anton Bystryakov, Dmitry Nikishkin, Viktor Babyuk, Lyudmila GrigorashKonnas Denis Classenis', '117 min', 'История жизни и приключений легендарного советского боксёра Валерия Попенченко, чемпиона СССР, Европы и победителя Олимпийских игр 1964 года в Токио ? о его детстве в суворовском училище в Ташкенте, о службе курсантом-пограничником, о его первых успехах и неудачах, и о его дружбе с тренером спортивного общества ?Динамо? Григорием Кусикьянцем. История о том, что в любом, даже самом престижном поединке, для спортсмена главное ? преодолеть себя, свои страхи и слабости, и только тогда можно будет одержать настоящую победу.', 'Russia', 'Мистер Нокаут', 'https://avatars.mds.yandex.net/get-afishanew/23222/72677b6197624d9122a192e4b1e30ed6/s190x280'),
	(3, 'comedy', 'March 5, 2022', 'Milos Bikovich, Kristina Asmus, Marina Alexandrova, Sergey Gilev, Yuliya Aug, Oleg Komarov, Anastasia Ukolova, Agniya Kuznetsova, Nadezhda Sysoeva, Anna Tsukanova-Kott, Evgenia Akhremenko, Evgeny Kartashov, Igor Negodyaev, Rina Klimenko, Evgenia Tkacheva', '106 min', 'У журналистки Любы всё идёт по плану: работа ведущей на телеканале, успешный и богатый жених Роберт. План катится к чертям, когда у Любы садится телефон, и она просит позвонить с телефона случайного прохожего. Им оказался Сергей, у которого тоже жизнь текла спокойно и размеренно до этого дня. Эта встреча запустит череду событий, которая полностью поменяет и жизнь Любы и Сергея, и их самих.', 'Russia', 'Хочу замуж', 'https://avatars.mds.yandex.net/get-afishanew/23114/7882d6d8714172d808d2640ba7488a55/s190x280');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
