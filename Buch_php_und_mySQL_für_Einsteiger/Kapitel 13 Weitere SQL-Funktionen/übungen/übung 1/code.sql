-- Aufgabe: Bestimmen, welche Artikel in os_Produkte einen Bestand von weniger als 10 Einheiten haben

SELECT p_artikelnummer FROM os_Produkte WHERE p_anzahl < 10;
-- Ausgabe: art.nr 1002 und 1004
