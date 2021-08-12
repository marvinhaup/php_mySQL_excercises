-- Tabelle os_inhalt erstellen

CREATE TABLE os_inhalt(
    i_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    i_title varchar(50),
    i_description varchar(200),
    i_headline varchar(100),
    i_content varchar(3000)
);

-- Tabelle os_inhalt mit Inhalt in erster Zeile füllen

INSERT INTO os_inhalt (i_title, i_description, i_headline, i_content) 
VALUES ('Anmeldeseite unseres online-shops', 
'Anmeldeseite, online-shop, Registrieren', 
'Herzlich Willkommen in unserem Onlineshop!', 
'<p>Registrieren Sie sich als neuer Kunde!</p><br>\n
<form action="ausgabe.php" method="POST">\n
<table>\n
<tr><td>Name:</td>\n
<td><input type="text" name="Nachname"></td></tr>\n
<tr><td>Vorname:</td>\n
<td><input type="text" name="Vorname"></td></tr>\n
<tr><td>Straße:</td>\n
<td><input type="text" name="Straße"></td></tr>\n
<tr><td>Postleitzahl:</td>\n
<td><input type="text" name="PLZ"></td></tr>\n
<tr><td>Ort:</td>\n
<td><input type="text" name="Ort"></td></tr>\n
<tr>\n
<td>E-Mail:</td>\n
<td><input type="text" name="Email"></td></tr>\n
<tr><td>Telefonnummer:</td>\n
<td><input type="text" name="Telefonnummer"></td></tr>\n
<tr><td>Passwort:</td>\n
<td><input type="text" name="Passwort"></td></tr>\n
<tr><td colspan="2" align="center"><input type="submit" value="Anmelden"></td></tr>\n
</table></form>');

-- Erste Zeile der Tabelle os_inhalt abfragen

SELECT * FROM os_inhalt WHERE i_id = 1;