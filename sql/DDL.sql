CREATE DATABASE `lib_comp` /*!40100 COLLATE 'utf8_general_ci' */;

CREATE TABLE `book` (
`bookid` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL DEFAULT '0',
`date` INT NOT NULL DEFAULT '0',
`date_changes` INT NOT NULL DEFAULT '0',
PRIMARY KEY (`bookid`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

CREATE TABLE `author` (
`authorid` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL DEFAULT '0',
`date_changes` INT NOT NULL DEFAULT '0',
`date` INT NOT NULL DEFAULT '0',
PRIMARY KEY (`authorid`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

CREATE TABLE `reader` (
`readerid` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL DEFAULT '0',
`date` INT NOT NULL DEFAULT '0',
`date_change` INT NOT NULL DEFAULT '0',
PRIMARY KEY (`readerid`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

CREATE TABLE `author_book`
(
`authid` INT NOT NULL,
`bookid` INT NOT NULL
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;
CREATE TABLE `reader_book`

(
`readerid` INT NOT NULL,
`bookid` INT NOT NULL
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

ALTER TABLE `author_book`
ADD CONSTRAINT `FK_author_book_author` FOREIGN KEY (`authid`) REFERENCES `author` (`authorid`);

ALTER TABLE `author_book`
ADD CONSTRAINT `FK_author_book_book` FOREIGN KEY (`bookid`) REFERENCES `book` (`bookid`);

ALTER TABLE `author_book`
ADD COLUMN `id` INT NOT NULL AFTER `bookid`,
ADD PRIMARY KEY (`id`);

ALTER TABLE `reader_book`
ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT AFTER `bookid`,
ADD PRIMARY KEY (`id`);

ALTER TABLE `author_book`
CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT AFTER `bookid`;

ALTER TABLE `reader_book`
ADD COLUMN `authid` INT(11) NOT NULL DEFAULT '0' AFTER `id`;

ALTER TABLE `reader_book`
ALTER `authid` DROP DEFAULT;
ALTER TABLE `reader_book`
CHANGE COLUMN `authid` `authid` INT(11) NOT NULL AFTER `id`,
ADD CONSTRAINT `FK_reader_book_reader` FOREIGN KEY (`readerid`) REFERENCES `reader` (`readerid`),
ADD CONSTRAINT `FK_reader_book_book` FOREIGN KEY (`bookid`) REFERENCES `book` (`bookid`);


