-- Alle Informationen der Tabelle Kundendaten ausgeben
SELECT * FROM os_kundendaten;

-- spezifische Spalten der Tabelle Kundedaten ausgeben
SELECT k_vorname, k_nachname, k_straße, k_hausnummer FROM os_kundendaten;

-- nach Eigenschaften filtern
SELECT k_vorname, k_nachname FROM os_kundendaten WHERE k_straße = 'Seealee';