-- Testen ob die doppelte Verwendung der Artikelnummer 1004 eine Fehlermeldung erzeugt

INSERT INTO os_Produkte (p_artikelnummer, p_produktname, p_preis, p_beschreibung, p_anzahl) 
VALUES (1004, 'Vorschlaghammer', 29.99, 'Starker Hammer zur groben Vorarbeit und Einschlagen von Wänden', 9);

-- Fehlermeldung: #1062 - Doppelter Eintrag '1004' für Schlüssel 'p_artikelnummer'

-- -> p_artikelnummer darf nur einmalig vergeben werden(UNIQUE)