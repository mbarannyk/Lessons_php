CREATE DATABASE Films;
SHOW DATABASES;
USE Films;

CREATE TABLE Actors (
    id int UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
    name varchar(20),
    surname varchar(20),
    age int
);
INSERT INTO Actors VALUES (1, 'Tom', 'Cruise', 59);
SELECT * FROM Actors;
INSERT INTO Actors (name, surname, age) VALUES ('James', 'Franco', 43);
INSERT INTO Actors (name, surname, age) VALUES ('Adam', 'Sandler', 55);
INSERT INTO Actors (name, surname, age) VALUES ('Anthony', 'Mackie', 43);
SELECT * FROM Actors WHERE age = 43;
USE Films;
SHOW TABLES;

CREATE TABLE Films (
    id int UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
    name varchar(40),
    director varchar(30),
    release_date int
);
INSERT INTO Films VALUES (1, 'Soul', 'Pete Docter', 2020);
SELECT * FROM Films;
INSERT INTO Films (name, director, release_date) VALUES ('The Power of the Dog', 'Jane Campion', 2021);
INSERT INTO Films (name, director, release_date) VALUES ('The Invisible Man', 'Leigh Whannell', 2020);
INSERT INTO Films (name, director, release_date) VALUES ('Dune', 'Denis Villeneuve', 2021);
UPDATE Films SET release_date = 2022 WHERE release_date = 2021;
USE Films;
SHOW TABLES;

CREATE TABLE Directors (
    id int UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
    name varchar(20),
    surname varchar(20),
    film varchar(30),
    is_famous boolean
);
INSERT INTO Directors VALUES (1, 'David', 'Lynch', 'Mulholland Drive', TRUE);
INSERT INTO Directors (name, surname, film, is_famous) VALUES ('Guillermo', 'del Toro', 'Pans Labyrinth', TRUE);
INSERT INTO Directors (name, surname, film, is_famous) VALUES ('GAsghar', 'Farhadi', 'A Separation', FALSE);
INSERT INTO Directors (name, surname, film, is_famous) VALUES ('Pedro', 'Almodóvar', 'Talk to Her', FALSE);
SELECT film FROM Directors WHERE is_famous = TRUE;


mysqldump -u root -p Films > films_dump.sql 

