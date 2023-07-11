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
