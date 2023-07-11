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

CREATE TABLE sante(
    id_user INT,
    taille DOUBLE PRECISION,
    poids DOUBLE PRECISION,
    FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE  TABLE activite ( 
	id_activite INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	activite VARCHAR(100)  NOT NULL,
    
);
INSERT INTO activite VALUES (null, 'Squats');
INSERT INTO activite VALUES (null, 'Deadlifts');
INSERT INTO activite VALUES (null, 'Flexion');
INSERT INTO activite VALUES (null, 'Faire une marche');
INSERT INTO activite VALUES (null, 'Faire du sport collectif');

CREATE TABLE admin(
    id_admin INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(40),
    prenom VARCHAR(40),
    email VARCHAR(40),
    mdp VARCHAR(40)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO admin VALUES(null,'RABENANAHARY','Rojo','rojo@gmail.com','rojo');

CREATE  TABLE code (
    id_code INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
    prix    DOUBLE PRECISION NOT NULL,
    code    VARCHAR(20)  NOT NULL,
    etat    INT  NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE  TABLE postValide (
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


