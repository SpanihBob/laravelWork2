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

-- Дамп структуры для таблица adventurework.favorites
CREATE TABLE IF NOT EXISTS `favorites` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Genre` text DEFAULT NULL,
  `Premiere` text DEFAULT NULL,
  `Starring` text DEFAULT NULL,
  `Time` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Country` text DEFAULT NULL,
  `Title` text DEFAULT NULL,
  `Poster` text DEFAULT NULL,
  `StageDirector` text DEFAULT NULL,
  `Directed` text DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы adventurework.favorites: ~0 rows (приблизительно)
INSERT INTO `favorites` (`Id`, `Genre`, `Premiere`, `Starring`, `Time`, `Description`, `Country`, `Title`, `Poster`, `StageDirector`, `Directed`) VALUES
	(1, 'a', 'a', 'a', 'a', 's', 's', 's', 's', 's', 's');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
