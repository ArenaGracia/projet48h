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