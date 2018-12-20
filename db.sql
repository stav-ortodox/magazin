CREATE SCHEMA `homework` DEFAULT CHARACTER SET utf8 ;


CREATE TABLE `homework`.`books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `rate` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;


INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('Идиот', 'Достоевский Ф.М.', '7', '2018');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('Бесы', 'Достоевский Ф.М.', '9', '2014');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('Братья Карамазовы', 'Достоевский Ф.М.', '10', '2010');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('Дубровский', 'Пушкин А.С.', '10', '2011');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('Война и мир', 'Толстой Л.Н.', '6', '2012');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('Мастер и Маргарита', 'Булкаков М.А.', '3', '2013');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('Мои посмертные приключения', 'Вознесенская Ю.', '9', '2014');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('Архипелаг Гулаг', 'Солженицын А.И.', '5', '2015');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('Камо грядеши', 'Сенкевич Г.', '9', '2016');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `year`) VALUES ('PHP и MySQL', 'Маклафлин Б.', '4', '2017');


ALTER TABLE `homework`.`books`
ADD COLUMN `country` VARCHAR(45) NOT NULL AFTER `year`;


ALTER TABLE `homework`.`books` MODIFY `country` INT(11) NOT NULL;


ALTER TABLE `homework`.`books` DROP `country`;


SELECT * FROM `homework`.`books`;


SELECT `title`, `author` FROM `homework`.`books`;


SELECT * FROM `homework`.`books` WHERE `rate` > 5;


SELECT * FROM `homework`.`books` ORDER BY `rate` DESC;


SELECT * FROM `homework`.`books` WHERE `rate` > 7 ORDER BY `year`;