CREATE SCHEMA projet;

CREATE  TABLE projet.activite ( 
	id_activite          INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	activite             VARCHAR(100)  NOT NULL     ,
	etat                 INT  NOT NULL DEFAULT 1    
 ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE  TABLE projet.admin ( 
	id_admin             INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(40)       ,
	prenom               VARCHAR(40)       ,
	email                VARCHAR(40)       ,
	mdp                  VARCHAR(40)       
 ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE  TABLE projet.aliment ( 
	id_aliment           INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(40)  NOT NULL     ,
	prix                 DOUBLE  NOT NULL     ,
	photo                VARCHAR(50)       ,
	etat                 INT  NOT NULL DEFAULT 1    
 ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE  TABLE projet.code ( 
	id_code              INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	prix                 DOUBLE  NOT NULL     ,
	code                 BIGINT  NOT NULL     ,
	etat                 INT  NOT NULL     
 ) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

CREATE  TABLE projet.regime ( 
	id_regime            INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(50)  NOT NULL     ,
	etat                 INT  NOT NULL DEFAULT '1'    
 ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE  TABLE projet.regime_activite ( 
	id_regime            INT  NOT NULL     ,
	id_activite          INT  NOT NULL     ,
	CONSTRAINT fk_regime_activite_activite_0 FOREIGN KEY ( id_activite ) REFERENCES projet.activite( id_activite ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_regime_activite_regime FOREIGN KEY ( id_regime ) REFERENCES projet.regime( id_regime ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE INDEX fk_regime_activite_regime ON projet.regime_activite ( id_regime );

CREATE INDEX fk_regime_activite_activite_0 ON projet.regime_activite ( id_activite );

CREATE  TABLE projet.regime_aliment ( 
	id_regime            INT  NOT NULL     ,
	id_aliment           INT  NOT NULL     ,
	CONSTRAINT unq_regime_aliment_id_aliment UNIQUE ( id_aliment ) ,
	CONSTRAINT fk_regime_aliment_aliment FOREIGN KEY ( id_aliment ) REFERENCES projet.aliment( id_aliment ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_regime_aliment_regime FOREIGN KEY ( id_regime ) REFERENCES projet.regime( id_regime ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE INDEX fk_regime_aliment_regime ON projet.regime_aliment ( id_regime );

CREATE  TABLE projet.regime_effet ( 
	id_regime            INT  NOT NULL     ,
	effet                DOUBLE  NOT NULL     ,
	CONSTRAINT fk_regime_effet_regime FOREIGN KEY ( id_regime ) REFERENCES projet.regime( id_regime ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE INDEX fk_regime_effet_regime ON projet.regime_effet ( id_regime );

CREATE  TABLE projet.`type` ( 
	id_type              INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(40)  NOT NULL     
 ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

CREATE  TABLE projet.type_regime ( 
	id_type              INT  NOT NULL     ,
	id_regime            INT  NOT NULL     ,
	CONSTRAINT fk_type_regime_regime FOREIGN KEY ( id_regime ) REFERENCES projet.regime( id_regime ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_type_regime_type FOREIGN KEY ( id_type ) REFERENCES projet.`type`( id_type ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE INDEX fk_type_regime_type ON projet.type_regime ( id_type );

CREATE INDEX fk_type_regime_regime ON projet.type_regime ( id_regime );

CREATE  TABLE projet.`user` ( 
	id_user              INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(40)       ,
	prenom               VARCHAR(40)       ,
	email                VARCHAR(40)       ,
	mdp                  VARCHAR(40)       
 ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

CREATE  TABLE projet.user_regime ( 
	id_user_regime       INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_user              INT  NOT NULL     ,
	id_regime            INT  NOT NULL     ,
	CONSTRAINT fk_user_regime_regime FOREIGN KEY ( id_regime ) REFERENCES projet.regime( id_regime ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_user_regime_user FOREIGN KEY ( id_user ) REFERENCES projet.`user`( id_user ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE INDEX fk_user_regime_user ON projet.user_regime ( id_user );

CREATE INDEX fk_user_regime_regime ON projet.user_regime ( id_regime );

INSERT INTO projet.activite( activite, etat ) VALUES ( 'Squats', 1);
INSERT INTO projet.activite( activite, etat ) VALUES ( 'Deadlifts', 1);
INSERT INTO projet.activite( activite, etat ) VALUES ( 'Flexion', 1);
INSERT INTO projet.activite( activite, etat ) VALUES ( 'Faire une marche', 1);
INSERT INTO projet.activite( activite, etat ) VALUES ( 'Faire du sport collectif', 1);
INSERT INTO projet.admin( nom, prenom, email, mdp ) VALUES ( 'RABENANAHARY', 'Rojo', 'rojo@gmail.com', 'rojo');
INSERT INTO projet.aliment( nom, prix, photo, etat ) VALUES ( 'Viande', 0.0, null, 1);
INSERT INTO projet.aliment( nom, prix, photo, etat ) VALUES ( 'Lait', 0.0, null, 1);
INSERT INTO projet.aliment( nom, prix, photo, etat ) VALUES ( 'Riz', 0.0, null, 1);
INSERT INTO projet.aliment( nom, prix, photo, etat ) VALUES ( 'Legume', 0.0, null, 1);
INSERT INTO projet.aliment( nom, prix, photo, etat ) VALUES ( 'Eau', 0.0, null, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 25000.0, 111111111111111, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 50000.0, 222222222222222, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 75000.0, 333333333333333, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 100000.0, 444444444444444, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 125000.0, 555555555555555, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 150000.0, 666666666666666, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 175000.0, 777777777777777, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 200000.0, 888888888888888, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 225000.0, 999999999999999, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 250000.0, 101010101010101, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 275000.0, 121212121212121, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 300000.0, 131313131313131, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 325000.0, 141414141414141, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 350000.0, 151515151515151, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 375000.0, 161616161616161, 1);
INSERT INTO projet.regime( nom, etat ) VALUES ( 'Regime 1', 1);
INSERT INTO projet.regime( nom, etat ) VALUES ( 'Regime 2', 1);
INSERT INTO projet.regime( nom, etat ) VALUES ( 'Regime 3', 1);
INSERT INTO projet.regime( nom, etat ) VALUES ( 'Regime 4', 1);
INSERT INTO projet.regime( nom, etat ) VALUES ( 'Regime 5', 1);
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 1, 1);
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 2, 2);
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 3, 3);
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 4, 4);
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 5, 5);
INSERT INTO projet.regime_effet( id_regime, effet ) VALUES ( 1, 10.0);
INSERT INTO projet.regime_effet( id_regime, effet ) VALUES ( 2, 20.0);
INSERT INTO projet.regime_effet( id_regime, effet ) VALUES ( 3, 25.0);
INSERT INTO projet.regime_effet( id_regime, effet ) VALUES ( 4, 10.0);
INSERT INTO projet.regime_effet( id_regime, effet ) VALUES ( 5, 11.0);
INSERT INTO projet.`type`( nom ) VALUES ( 'Augmenter son poids');
INSERT INTO projet.`type`( nom ) VALUES ( 'Reduire son poids');
INSERT INTO projet.type_regime( id_type, id_regime ) VALUES ( 1, 1);
INSERT INTO projet.type_regime( id_type, id_regime ) VALUES ( 1, 2);
INSERT INTO projet.type_regime( id_type, id_regime ) VALUES ( 1, 3);
INSERT INTO projet.type_regime( id_type, id_regime ) VALUES ( 2, 4);
INSERT INTO projet.type_regime( id_type, id_regime ) VALUES ( 2, 5);
INSERT INTO projet.`user`( nom, prenom, email, mdp ) VALUES ( 'Arena', 'Gracia', 'arena1976@gmail.com', 'arena');
INSERT INTO projet.`user`( nom, prenom, email, mdp ) VALUES ( 'Benjamina', 'RAMAROSON', 'ramarosonbenjamina@gmail.com', 'mdpprom15');
INSERT INTO projet.`user`( nom, prenom, email, mdp ) VALUES ( 'Judi', 'HERINIRINA', 'judi1968@gmail.com', 'judi');
INSERT INTO projet.user_regime( id_user, id_regime ) VALUES ( 1, 1);
INSERT INTO projet.user_regime( id_user, id_regime ) VALUES ( 2, 2);
INSERT INTO projet.user_regime( id_user, id_regime ) VALUES ( 3, 5);
