-- Zählen, wie viele Kunden in der Tabelle os_kundendaten vorhanden sind
SELECT COUNT(k_nummer) FROM os_kundendaten;

-- Zählen, wie viele Tupel eine gewisse Eigenschaft vorweisen:
SELECT COUNT(k_nachname) FROM os_kundendaten WHERE k_nachname = 'Kraft';