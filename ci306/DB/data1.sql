CREATE DATABASE projet;
USE projet;

CREATE TABLE user(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(40),
    prenom VARCHAR(40),
    email VARCHAR(40),
    mdp VARCHAR(40)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE admin(
    id_admin INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(40),
    prenom VARCHAR(40),
    email VARCHAR(40),
    mdp VARCHAR(40)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE sante(
    id_user INT,
    id_genre INT,
    taille DOUBLE PRECISION,
    poids DOUBLE PRECISION,
    FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE  TABLE activite ( 
	id_activite INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	activite VARCHAR(100)  NOT NULL,
    etat INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE  TABLE code (
    id_code INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
    prix    DOUBLE PRECISION NOT NULL,
    code    VARCHAR(20)  NOT NULL,
    etat    INT  NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE  TABLE post_valide (
    id_code    INT,
    id_user    INT,
    FOREIGN KEY (id_code) REFERENCES code(id_code),
    FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE  TABLE porte_monnaie (
    id_user   INT,
    argent   DOUBLE PRECISION,
    FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE  TABLE aliment ( 
	id_aliment INT  NOT NULL AUTO_INCREMENT  PRIMARY KEY,
	nom    VARCHAR(40)  NOT NULL,
	prix   DOUBLE PRECISION  NOT NULL,
	etat   INT  NOT NULL   
 );

CREATE  TABLE regime ( 
	id_regime  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nom VARCHAR(50) NOT NULL,
	etat INT NOT NULL   
 );

CREATE  TABLE regime_activite ( 
	id_regime   INT  NOT NULL,
	id_activite INT  NOT NULL,
	FOREIGN KEY (id_activite) REFERENCES activite(id_activite) ,
	FOREIGN KEY (id_regime) REFERENCES regime(id_regime) 
 );

CREATE  TABLE regime_aliment ( 
	id_regime INT  NOT NULL,
	id_aliment INT  NOT NULL,
	FOREIGN KEY (id_regime) REFERENCES regime(id_regime) ,
	FOREIGN KEY (id_aliment) REFERENCES aliment(id_aliment) 
 );

CREATE  TABLE regime_effet ( 
	id_regime INT  NOT NULL,
	effet DOUBLE PRECISION NOT NULL,
	FOREIGN KEY (id_regime) REFERENCES regime(id_regime) 
 );

CREATE TABLE type( 
	id_type INT  NOT NULL AUTO_INCREMENT  PRIMARY KEY,
	nom  VARCHAR(40) NOT NULL     
);

CREATE  TABLE profil_user ( 
	id_user  INT NOT NULL,
	genre  VARCHAR(25) NOT NULL ,
	taille DOUBLE PRECISION  NOT NULL,
	poids DOUBLE PRECISION  NOT NULL,
	FOREIGN KEY (id_user) REFERENCES user(id_user)
);

CREATE  TABLE user_regime ( 
	id_user_regime       INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_user              INT  NOT NULL     ,
	id_regime            INT  NOT NULL     ,
	FOREIGN KEY ( id_regime ) REFERENCES regime( id_regime ) ,
	FOREIGN KEY ( id_user ) REFERENCES user( id_user ) 
);

 CREATE  TABLE type_regime ( 
	id_type   INT  NOT NULL,
	id_regime INT  NOT NULL,
	FOREIGN KEY ( id_regime ) REFERENCES regime( id_regime ) ,
	FOREIGN KEY ( id_type ) REFERENCES type( id_type )
 );


INSERT INTO admin VALUES(null,'RABENANAHARY','Rojo','rojo@gmail.com','rojo');

INSERT INTO user VALUES (null,'Arena','Gracia','arena1976@gmail.com','arena');
INSERT INTO user VALUES (null,'Benjamina', 'RAMAROSON', 'ramarosonbenjamina@gmail.com', 'mdpprom15');
INSERT INTO user VALUES (null,'Judi', 'HERINIRINA', 'judi1968@gmail.com', 'judi');

INSERT INTO activite( activite, etat ) VALUES ( 'Squats', 1);
INSERT INTO activite( activite, etat ) VALUES ( 'Deadlifts', 1);
INSERT INTO activite( activite, etat ) VALUES ( 'Flexion', 1);
INSERT INTO activite( activite, etat ) VALUES ( 'Faire une marche', 1);
INSERT INTO activite( activite, etat ) VALUES ( 'Faire du sport collectif', 1);

INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Viande', 10000.0, 1);
INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Lait', 5000.0, 1);
INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Riz', 3000.0, 1);
INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Paint', 2000.0, 1);
INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Patte', 15000.0, 1);
INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Epinards', 15000.0, 1);
INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Eau', 2500.0, 1);
INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Choux', 5000.0, 1);
INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Salade', 7500.0, 1);
INSERT INTO aliment( nom, prix, etat ) VALUES ( 'Tomate', 2500.0, 1);

INSERT INTO regime( nom, etat ) VALUES ( 'Regime 1', 1);
INSERT INTO regime( nom, etat ) VALUES ( 'Regime 2', 1);
INSERT INTO regime( nom, etat ) VALUES ( 'Regime 3', 1);
INSERT INTO regime( nom, etat ) VALUES ( 'Regime 4', 1);
INSERT INTO regime( nom, etat ) VALUES ( 'Regime 5', 1);

INSERT INTO regime_activite( id_regime, id_activite ) VALUES ( 1, 1);
INSERT INTO regime_activite( id_regime, id_activite ) VALUES ( 2, 2);
INSERT INTO regime_activite( id_regime, id_activite ) VALUES ( 3, 3);
INSERT INTO regime_activite( id_regime, id_activite ) VALUES ( 4, 4);
INSERT INTO regime_activite( id_regime, id_activite ) VALUES ( 5, 5);

INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 1, 1);
INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 1, 4);
INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 2, 2);
INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 2, 5);
INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 3, 3);
INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 4, 6);
INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 4, 8);
INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 4, 10);
INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 5, 7);
INSERT INTO regime_aliment( id_regime, id_aliment ) VALUES ( 5, 9);

INSERT INTO regime_effet( id_regime, effet ) VALUES ( 1, 10.0);
INSERT INTO regime_effet( id_regime, effet ) VALUES ( 2, 20.0);
INSERT INTO regime_effet( id_regime, effet ) VALUES ( 3, 25.0);
INSERT INTO regime_effet( id_regime, effet ) VALUES ( 4, 10.0);
INSERT INTO regime_effet( id_regime, effet ) VALUES ( 5, 15.0);

INSERT INTO type( nom ) VALUES ( 'Augmenter son poids');
INSERT INTO type( nom ) VALUES ( 'Reduire son poids');

INSERT INTO type_regime( id_type, id_regime ) VALUES ( 1, 1);
INSERT INTO type_regime( id_type, id_regime ) VALUES ( 1, 2);
INSERT INTO type_regime( id_type, id_regime ) VALUES ( 1, 3);
INSERT INTO type_regime( id_type, id_regime ) VALUES ( 2, 4);
INSERT INTO type_regime( id_type, id_regime ) VALUES ( 2, 5);


INSERT INTO user_regime( id_user, id_regime ) VALUES ( 1, 1);
INSERT INTO user_regime( id_user, id_regime ) VALUES ( 2, 2);
INSERT INTO user_regime( id_user, id_regime ) VALUES ( 3, 5);

INSERT INTO activite VALUES (null, 'Squats',1);
INSERT INTO activite VALUES (null, 'Deadlifts',1);
INSERT INTO activite VALUES (null, 'Flexion',1);
INSERT INTO activite VALUES (null, 'Faire une marche',1);
INSERT INTO activite VALUES (null, 'Faire du sport collectif',1);

INSERT INTO porte_monnaie VALUES(1,200000);

INSERT INTO code( prix, code, etat ) VALUES ( 25000.0, "111111111111111", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 50000.0, "222222222222222", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 75000.0, "333333333333333", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 100000.0, "444444444444444", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 125000.0, "555555555555555", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 150000.0, "666666666666666", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 175000.0, "777777777777777", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 200000.0, "888888888888888", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 225000.0, "999999999999999", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 250000.0, "101010101010101", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 275000.0, "121212121212121", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 300000.0, "131313131313131", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 325000.0, "141414141414141", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 350000.0, "151515151515151", 1);
INSERT INTO code( prix, code, etat ) VALUES ( 375000.0, "161616161616161", 1);

INSERT INTO post_valide VALUES(1,1);
INSERT INTO post_valide VALUES(1,2);
UPDATE code SET etat=5 WHERE id_code=5;

select r.id_regime, r.nom from regime r
join type_regime tr on r.id_regime = tr.id_regime
join type t on t.id_type = tr.id_type
join regime_effet re on re.id_regime = r.id_regime
where t.id_type = 1 and re.effet = 10;

select r.id_regime, r.nom, a.activite from regime r
join type_regime tr on r.id_regime = tr.id_regime
join type t on t.id_type = tr.id_type
join regime_effet re on re.id_regime = r.id_regime
join regime_activite ra on ra.id_regime = r.id_regime
join activite a on a.id_activite = ra.id_activite
where t.id_type = 2 and re.effet = 10;

SELECT r.id_regime, r.nom, a.activite
FROM regime r
JOIN type_regime tr ON r.id_regime = tr.id_regime
JOIN type t ON t.id_type = tr.id_type
JOIN regime_effet re ON re.id_regime = r.id_regime
JOIN regime_activite ra ON ra.id_regime = r.id_regime
JOIN activite a ON a.id_activite = ra.id_activite
WHERE t.id_type = 1
  AND (re.effet = 20 OR re.effet = (
    SELECT re2.effet
    FROM regime_effet re2
    ORDER BY ABS(re2.effet - 20)
    LIMIT 1
));



