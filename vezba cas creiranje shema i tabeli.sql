#CREATE SCHEMA `akad` ;

CREATE TABLE if not exists `akad`.`studenti` (
	`id` int(11) NOT NULL UNIQUE AUTO_INCREMENT,
    `ime` varchar(40) NOT NULL,
    `prezime` varchar(60) NOT NULL,
    PRIMARY KEY (`id`)
) 	ENGINE=InnoDB DEFAULT CHARSET=Latin1 AUTO_INCREMENT 5;

#drop table `studenti`;

INSERT INTO `studenti` (`id`, `ime`, `prezime`) VALUES
(1, 'Stavre', 'Stavrovski');

INSERT INTO `studenti` (`ime`, `prezime`) VALUES
('Janko', 'Jankovski');

INSERT INTO `studenti` (`ime`, `prezime`) VALUES
('Stavre', 'Stavrovski'),
('Risto', 'Bombata'),
('Nikola', 'Tasev'),
('Goran', 'Stojanovski')
;

alter table studenti AUTO_INCREMENT = 5;

SELECT * FROM studenti;

select distinct ime, count(ime)
from studenti
group by ime
order by count(ime); #desc - asc default



/*
    kveris za users

SELECT COUNT(*) FROM users;
SELECT * FROM users;
SELECT * FROM users LIMIT 3;
 
SELECT count(*) as perofci
FROM users
WHERE firstname = "Pero";
 
SELECT *
FROM users
WHERE firstname LIKE "%ero%";
 
 
SELECT DISTINCT firstname
FROM users;
 
 #just for show 
CREATE TABLE `blogz`.`new_table` (
  `idnew_table` INT NOT NULL,
  PRIMARY KEY (`idnew_table`));
  
  */



