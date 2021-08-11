<?php

// Aufgabe: os_reklamationen erstellen mit index,Kundennummer
// Artikelnummer, Eingangsdatum

$sql = "CREATE TABLE os_reklamationen".
    "(r_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,".
    "r_kundennummer INTEGER UNSIGNED NOT NULL,".
    "r_artikelnummer INTEGER UNSIGNED NOT NULL,".
    "r_datum DATE NOT NULL);";

try 
{   // DSN konfigurieren (Database Source Name)
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");
    // wenn kein Fehler auftritt -> Verbindung erfolgreich
    print "Verbindung erfolgreich hergestellt.";
    // SQL-Befehl an Datenbank weiterleiten
    $dbh->query($sql);
    // handle zurücksetzen
    $dbh = null;
}
catch (PDOException $e) 
{
    print "<br>Meldung: ".$e->getMessage();
}

?>