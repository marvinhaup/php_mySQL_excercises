<?php

// Aufgabe: In die von übung 1 erstellte Reklamationstabelle einige Werte eingeben

// Reklamations-Einträge
$sql = "INSERT INTO os_reklamationen (r_kundennummer, r_artikelnummer, r_datum) VALUES (126, 1004, '2020-04-22');".
"INSERT INTO os_reklamationen (r_kundennummer, r_artikelnummer, r_datum) VALUES (127, 1002, '2021-06-08');";

try
{
    // Database Source Name
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");
    // Wenn Verbindung erfolgreich, gebe Meldung aus
    print "Verbindung erfolgreich hergestellt.";
    // Übergebe SQL-Befehl mittels $sql Variable
    $dbh->query($sql);
    $dbh = null;
}
catch (PDOException $e)
{
    print "<br>Meldung: ".$e->getMessage();
}







?>