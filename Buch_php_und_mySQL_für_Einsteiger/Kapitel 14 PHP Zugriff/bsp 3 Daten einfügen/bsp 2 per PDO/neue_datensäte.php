<?php

// Einfügen von Inhalten in die Tabelle os_bestellungen
// Speichern der SQL-Abfrage in einer Variable(nicht möglich mit mysqli)

$sql = "INSERT INTO os_bestellungen"."
(b_artikelnummer, b_kundennummer, b_preis, b_anzahl)".
"VALUES (1003, 125, 34.99, 10);".
"INSERT INTO os_bestellungen"."
(b_artikelnummer, b_kundennummer, b_preis, b_anzahl)".
"VALUES (1004, 126, 49.99, 3);".
"INSERT INTO os_bestellungen"."
(b_artikelnummer, b_kundennummer, b_preis, b_anzahl)".
"VALUES (1002, 127, 14.99, 2);".
"INSERT INTO os_bestellungen"."
(b_artikelnummer, b_kundennummer, b_preis, b_anzahl)".
"VALUES (1001, 123, 45.99, 2);";

try
{
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");
    print "Verbindung erfolgreich hergestellt<br>";
    $dbh->query($sql);
    $dbh = null;
}
catch (PDOException $e)
{
    print $e->getMessage();
}

?>