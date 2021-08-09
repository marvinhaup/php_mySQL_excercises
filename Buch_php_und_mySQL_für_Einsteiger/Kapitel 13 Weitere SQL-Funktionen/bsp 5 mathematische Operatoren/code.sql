-- SQL erlaubt auch mathematische Operatoren wie Addition und Subtraktion
SELECT 2+3;
-- Ausgabe: 5

-- mathematische Operatoren in Abfragen einbinden:
-- ändere die Hausnumer zu Kundennummer 127
UPDATE os_kundendaten SET k_hausnummer = 22 WHERE k_nummer = 100+27;

-- mathematische Operatoren zur Inkrementierung von beständen
UPDATE os_kundendaten SET k_bestellte_artikel = k_bestellte_artikel + 1 WHERE k_nummer = 124;