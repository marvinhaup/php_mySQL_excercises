-- Oder-Operator, verwendung mit 'OR'
SELECT k_vorname, k_nachname FROM os_kundendaten WHERE k_straße = 'Hauptstraße' OR k_straße = 'Jahnstraße';

--And-Operator, verwendung mit 'AND'
SELECT k_straße, k_hausnummer FROM os_kundendaten WHERE k_nachname = 'Müller' AND k_telefonnummer = 147567562;