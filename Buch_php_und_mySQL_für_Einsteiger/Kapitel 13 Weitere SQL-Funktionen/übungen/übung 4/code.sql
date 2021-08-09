-- Aufgabe: Anzahl der vorrätigen Bohrmaschinen um 25 erhöhen

UPDATE os_Produkte SET p_anzahl = p_anzahl + 25 WHERE p_produktname = 'Bohrmaschine';
-- Bestand der Borhmaschinen von 23 auf 48 erhöht