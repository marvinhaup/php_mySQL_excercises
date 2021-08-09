-- Werte in einer Spalte können auch mit dem 'SUM' Befehl addiert werden
-- dazu muss es sich allerdings auch um sinnvolle Inhalte in den Feldern handeln

-- erweiter die Tabelle os_kundendaten um eine Spalte mit dem Namen 'k_bestellte_artikel'
ALTER TABLE os_kundendaten ADD COLUMN k_bestellte_artikel integer unsigned;

-- füge Werte für alle 5 Kunden ein:
UPDATE os_kundendaten SET k_bestellte_artikel = 5 WHERE k_nummer = 123;
UPDATE os_kundendaten SET k_bestellte_artikel = 9 WHERE k_nummer = 124;
UPDATE os_kundendaten SET k_bestellte_artikel = 3 WHERE k_nummer = 125;
UPDATE os_kundendaten SET k_bestellte_artikel = 7 WHERE k_nummer = 126;
UPDATE os_kundendaten SET k_bestellte_artikel = 2 WHERE k_nummer = 127;

-- Summe der bestellten Artikel Ausgeben:
SELECT SUM(k_bestellte_artikel) FROM os_kundendaten;
-- ->Ausgabe: 26

-- Summen nach Kriterien filtern:
SELECT SUM(k_bestellte_artikel) FROM os_kundendaten WHERE k_straße = 'Seealee';
-- Ausgabe: 2