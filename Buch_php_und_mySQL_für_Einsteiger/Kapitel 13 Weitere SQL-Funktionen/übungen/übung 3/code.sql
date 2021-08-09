-- Aufgabe: Summe der Artikel ausgeben, von denen mindestens 30 Stück auf Lager sind

SELECT COUNT(p_id) FROM os_Produkte WHERE p_anzahl >= 30;
-- Ausgabe: 1