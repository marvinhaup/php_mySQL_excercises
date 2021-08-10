<?php

// neue Datensätze in die Tabelle os_bestellungen hinzufügen
// gleiche Programmstruktur wie bei vorherigem Zugriff

$dbh = mysqli_connect("localhost", "admin", "passwort", "onlineshopDB");

if (mysqli_connect_errno()) 
{
    print "Keine Verbindung zur Datenbank möglich: ".mysqli_connect_error();
}
else 
{
    print "Verbindung erfolgreich hergestellt.";
    mysqli_query($dbh, "INSERT INTO os_bestellungen"."
    (b_artikelnummer, b_kundennummer, b_preis, b_anzahl)".
    "VALUES (1003, 125, 34.99, 10);");
    mysqli_query($dbh, "INSERT INTO os_bestellungen"."
    (b_artikelnummer, b_kundennummer, b_preis, b_anzahl)".
    "VALUES (1004, 126, 49.99, 3);");
    mysqli_query($dbh, "INSERT INTO os_bestellungen"."
    (b_artikelnummer, b_kundennummer, b_preis, b_anzahl)".
    "VALUES (1002, 127, 14.99, 2);");
    mysqli_query($dbh, "INSERT INTO os_bestellungen"."
    (b_artikelnummer, b_kundennummer, b_preis, b_anzahl)".
    "VALUES (1001, 123, 45.99, 2);");
}

mysqli_close($dbh);

?>