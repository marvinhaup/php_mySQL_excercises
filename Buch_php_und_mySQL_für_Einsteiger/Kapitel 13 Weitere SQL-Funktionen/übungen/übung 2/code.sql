-- Aufgabe: Anzahl der Produkte ermitteln, von denen der Bestand sich auf 0 befindet

SELECT COUNT(p_id) FROM os_Produkte WHERE p_anzahl = 0;
-- Ausgabe: 0