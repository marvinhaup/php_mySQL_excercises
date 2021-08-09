-- Aufgabe: Erstellen einer Kundentabelle in der Datenbank onlineshopDB

CREATE TABLE Kundendaten (
    k_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    k_nummer INTEGER UNSIGNED NOT NULL UNIQUE,
    k_vorname VARCHAR(30) NOT NULL,
    k_nachname VARCHAR(30) NOT NULL,
    k_straße VARCHAR(50) NOT NULL,
    k_hausnummer INTEGER UNSIGNED NOT NULL,
    k_telefonnummer INTEGER UNSIGNED
);