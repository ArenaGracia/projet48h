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