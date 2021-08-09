-- eine Zeile löschen, Zugriff über p_id

-- löscht zweite Zeile der Tabelle os_produkte
DELETE FROM os_Produkte WHERE p_id = 2;


-- mehrere Zeilen aus einer Tabelle löschen

-- löscht alle drei verbleibenden Zeilen der Tabelle, mit den Indexnummern 1, 3 und 4
DELETE FROM os_Produkte WHERE p_id In (1, 3, 4);

-- Auch möglich:

DELETE FROM os_Produkte WHERE p_id >= 0 AND p_id <=5;

-- oder

DELETE FROM os_Produkte WHERE p_id BETWEEN 0 AND 5;

-- ganze Tabelle löschen
DROP TABLE os_Produkte;

-- ganze Datenbank löschen
DROP DATABASE onlineshopDB;