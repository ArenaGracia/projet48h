CREATE SCHEMA projet;

CREATE  TABLE projet.activite ( 
	id_activite          INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	activite             VARCHAR(50)  NOT NULL     
 ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE  TABLE projet.admin ( 
	id_admin             INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(40)       ,
	prenom               VARCHAR(40)       ,
	email                VARCHAR(40)       ,
	mdp                  VARCHAR(40)       
 ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE  TABLE projet.aliment ( 
	id_aliment           INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(40)  NOT NULL     
 ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE  TABLE projet.code ( 
	id_code              INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	prix                 DOUBLE  NOT NULL     ,
	code                 BIGINT  NOT NULL     ,
	etat                 BIGINT  NOT NULL     
 ) engine=InnoDB;

CREATE  TABLE projet.regime ( 
	id_regime            INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(50)  NOT NULL     
 ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE  TABLE projet.regime_activite ( 
	id_regime            INT  NOT NULL     ,
	id_activite          INT  NOT NULL     ,
	CONSTRAINT fk_regime_activite_activite FOREIGN KEY ( id_activite ) REFERENCES projet.activite( id_activite ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_regime_activite_regime FOREIGN KEY ( id_regime ) REFERENCES projet.regime( id_regime ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE INDEX fk_regime_activite_regime ON projet.regime_activite ( id_regime );

CREATE INDEX fk_regime_activite_activite ON projet.regime_activite ( id_activite );

CREATE  TABLE projet.regime_effet ( 
	id_regime            INT  NOT NULL     ,
	duree                INT  NOT NULL     ,
	effet                DOUBLE  NOT NULL     ,
	prix                 DOUBLE  NOT NULL     ,
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

INSERT INTO projet.activite( activite ) VALUES ( 'Dormir plus de 8h');
INSERT INTO projet.activite( activite ) VALUES ( 'Faire une marche');
INSERT INTO projet.activite( activite ) VALUES ( 'Faire du sport');
INSERT INTO projet.admin( nom, prenom, email, mdp ) VALUES ( 'RABENANAHARY', 'Rojo', 'rojo@gmail.com', 'rojo');
INSERT INTO projet.aliment( nom ) VALUES ( 'Viande');
INSERT INTO projet.aliment( nom ) VALUES ( 'Lait');
INSERT INTO projet.aliment( nom ) VALUES ( 'Riz');
INSERT INTO projet.aliment( nom ) VALUES ( 'Legume');
INSERT INTO projet.aliment( nom ) VALUES ( 'Eau');
INSERT INTO projet.code( prix, code, etat ) VALUES ( 100000.0, 111122223333444, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 150000.0, 999988887777666, 1);
INSERT INTO projet.code( prix, code, etat ) VALUES ( 200000.0, 555544443333222, 1);
INSERT INTO projet.regime( nom ) VALUES ( 'Regime 1');
INSERT INTO projet.regime( nom ) VALUES ( 'Regime 2');
INSERT INTO projet.regime( nom ) VALUES ( 'Regime 3');
INSERT INTO projet.regime( nom ) VALUES ( 'Regime 4');
INSERT INTO projet.regime( nom ) VALUES ( 'Regime 5');
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 1, 1);
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 2, 1);
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 3, 1);
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 4, 2);
INSERT INTO projet.regime_activite( id_regime, id_activite ) VALUES ( 5, 3);
INSERT INTO projet.regime_effet( id_regime, duree, effet, prix ) VALUES ( 1, 3, 10.0, 100000.0);
INSERT INTO projet.regime_effet( id_regime, duree, effet, prix ) VALUES ( 2, 5, 20.0, 175000.0);
INSERT INTO projet.regime_effet( id_regime, duree, effet, prix ) VALUES ( 3, 7, 25.0, 200000.0);
INSERT INTO projet.regime_effet( id_regime, duree, effet, prix ) VALUES ( 4, 10, 10.0, 200000.0);
INSERT INTO projet.regime_effet( id_regime, duree, effet, prix ) VALUES ( 5, 15, 11.0, 300000.0);
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
