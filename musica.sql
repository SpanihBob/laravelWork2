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

-- Дамп структуры для таблица adventurework.musica
CREATE TABLE IF NOT EXISTS `musica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Genre` text DEFAULT NULL,
  `Poster` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы adventurework.musica: ~0 rows (приблизительно)
INSERT INTO `musica` (`id`, `Title`, `Genre`, `Poster`, `Description`) VALUES
	(1, 'Jony', 'rap hip hop', 'https://avatars.mds.yandex.net/get-afishanew/21422/2b50205727442bf817f20d59163f4a70/s272x146', 'Jony (Джахид Гусейнли) — российский музыкант родом из Азербайджана. В копилке артиста — совместные проекты с популярными исполнителями El\'man\'ом, Andro, Emin\'ом и Мотом и награды в номинациях Жара Music Awards.'),
	(2, 'Ирина Круг', 'chanson', 'https://avatars.mds.yandex.net/get-afishanew/34116/490203b698ac5fd21406c72d23444226/s272x146', 'Королева российского шансона Ирина Круг представит новую программу «Ты сердце и душа». Зрителей ждет концерт из самых популярных и искренних песен певицы, находящих отклик в сердцах тысяч людей. Чувственная, красивая, душевная Ирина Круг, обладательница большого сердца и чарующего тембра голоса, спешит выступить перед своими фанатами и новыми поклонниками! Песни Ирины Круг своей мелодичностью трогают до глубины души, и концерт превращается в искренний разговор с близким и родным человеком, который смог преодолеть все трудности и невзгоды и воплотить свои мечты в жизнь и готов поделиться всем этим со зрителями. Пронизывающая атмосфера позволит не только задуматься и помечтать, но и даст массу ярких и светлых эмоций, которые вырвутся наружу, и вам захочется танцевать. Именно этот искренний фейерверк переживаний ощущаешь на концерте певицы. Ирина Круг и ее новая программа «Ты сердце и душа» не оставят равнодушным ни одного зрителя. Приходите!'),
	(3, 'Дора', 'indi', 'https://avatars.mds.yandex.net/get-afishanew/23114/57a86627db7aab70a10d8037ed83e452/s272x146', 'Дора — восходящая звезда российской эстрады. Поклонники обожают её за милый образ, сильный голос и попадающие в самое подростковое сердце тексты. Дора не вписывается в рамки стандартных музыкальных жанров и называет свою музыку кьют-роком. Певица стремительно завоёвывает сердца фанатов, покоряет ТВ и набирает десятки миллионов просмотров клипов на YouTube. Юная и смелая певица Дора — девушка, которая сочетает в своих песнях, казалось бы, несовместимые вещи: под тяжёлый аккомпанемент гитар и ударных она тоненьким голоском поёт про подростковую жизнь, влюбленности и разочарования.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
