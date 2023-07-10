CREATE DATABASE projet;
USE projet;

CREATE TABLE user(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(40),
    prenom VARCHAR(40),
    email VARCHAR(40),
    mdp VARCHAR(40)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO user VALUES(null,'Arena','Gracia','arena1976@gmail.com','arena');
INSERT INTO user VALUES(null,'Benjamina','RAMAROSON','ramarosonbenjamina@gmail.com','mdpprom15');
INSERT INTO user VALUES(null,'Judi','HERINIRINA','judi1968@gmail.com','judi');

CREATE TABLE admin(
    id_admin INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(40),
    prenom VARCHAR(40),
    email VARCHAR(40),
    mdp VARCHAR(40)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO admin VALUES(null,'RABENANAHARY','Rojo','rojo@gmail.com','rojo');


insert into regime values
(null, 'Regime 1'),
(null, 'Regime 2'),
(null, 'Regime 3'),
(null, 'Regime 4'),
(null, 'Regime 5');

insert into type values
(null, 'Augmenter son poids'),
(null, 'Reduire son poids');

insert into type_regime values
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5);

insert into activite values
(null, 'Squats'),
(null, 'Deadlifts'),
(null, 'Flexion'),
(null, 'Faire une marche'),
(null, 'Faire du sport collectif');

insert into regime_activite values
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

insert into aliment values
(null, 'Viande', 20000, 'viande.jpg'),
(null, 'Lait', 10000, 'lait.jpg'),
(null, 'Riz', 5000, 'riz.jpg'),
(null, 'Legume', 15000, 'legume.jpg'),
(null, 'Eau', 5000, 'eau.jpg');

insert into regime_effet values
(1, 3, 10, 100000),
(2, 5, 20, 175000),
(3, 7, 25, 200000),
(4, 10, 10, 200000),
(5, 15, 11, 300000);

insert into user_regime values
(null, 1, 1),
(null, 2, 2),
(null, 3, 5);

insert into code values
(null, 25000, 111111111111111, 1),
(null, 50000, 222222222222222, 1),
(null, 75000, 333333333333333, 1),
(null, 100000, 444444444444444, 1),
(null, 125000, 555555555555555, 1),
(null, 150000, 666666666666666, 1),
(null, 175000, 777777777777777, 1),
(null, 200000, 888888888888888, 1),
(null, 225000, 999999999999999, 1),
(null, 250000, 101010101010101, 1),
(null, 275000, 121212121212121, 1),
(null, 300000, 131313131313131, 1),
(null, 325000, 141414141414141, 1),
(null, 350000, 151515151515151, 1),
(null, 375000, 161616161616161, 1);