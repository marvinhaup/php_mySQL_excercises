-- Benutzer erstellen

CREATE USER 'admin'@'localhost' IDENTIFIED BY 'passwort';

-- Rechte Zuweisen

GRANT ALL PRIVILEGES ON onlineshopDB . * TO 'admin'@'localhost';

-- anstatt 'ALL PRIVILEGES' auch möglich: CREATE, DELETE, INSERT oder UPDATE

-- . * Operatoren spezifizieren den Tabellenzgriff. z.B. onlineshopDB.os_Produkte
-- -> Nutzer erhält nur Zugriff auf die Tabelle os_Produkte, nicht auf die gesamte Datenbank(*)


-- Rechte entziehen
REVOKE DELETE ON onlineshopDB.os_Produkte FROM 'admin'@'localhost';
-- Delete-Rechte werden dem Nutzer Admin entzogen