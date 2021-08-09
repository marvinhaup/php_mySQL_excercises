-- Datenbestand einer Zeile in einer Tabelle ändern

UPDATE os_produkt SET p_preis = 40.99 WHERE p_id = 1;

-- Preis vorher: 45.99, Preis nachher: 40.99


-- mehrere Spalten mit einem Befehl anpassen

UPDATE os_Produkte SET p_beschreibung = 'Hochwertige Bohrmaschine heute im Sonderangebot!', p_anzahl = 20 WHERE p_id = 1;

-- Tabellen umbenennen:
ALTER TABLE vorherigername RENAME TO geändertername;