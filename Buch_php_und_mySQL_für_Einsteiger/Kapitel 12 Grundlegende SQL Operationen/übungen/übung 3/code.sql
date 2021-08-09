-- Aufgabe: Abändern einiger Kundendaten

UPDATE Kundendaten SET k_straße = 'Kiefernweg' WHERE k_id = 1;

UPDATE Kundendaten SET k_hausnummer = 44 WHERE k_nummer = 124;

UPDATE Kundendaten SET k_telefonnummer = 123456789 WHERE k_straße = 'Seealee' AND k_hausnummer = 3;