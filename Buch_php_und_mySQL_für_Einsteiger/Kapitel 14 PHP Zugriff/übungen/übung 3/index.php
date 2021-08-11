<?php

// Aufgabe: Reklamationen-Tabelle abfragen und erste Spalte davon ausgeben

$sql = "SELECT r_kundennummer, r_artikelnummer, r_datum FROM os_reklamationen WHERE r_id = 1;";

try 
{
    // Database Source Name konfigurieren
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");
    // Wenn Verbindung erfolgreich, Meldung ausgeben
    print "Verbindung erfolgreich hergestellt.";
    // Anfrage in Variable speichern
    $rueckgabe = $dbh->query($sql);
    // Rückgabe mit fetchall() formatieren
    $ergebnis = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);
    foreach ($ergebnis as $iteration) 
    {
        print "<br>Kundennummer: ".$iteration["r_kundennummer"].
        ",    Artikelnummer: ".$iteration["r_artikelnummer"].
        ",    Reklamationsdatum: ".$iteration["r_datum"];
    }

    $error = $dbh->errorInfo();
    if ($error[0] > 0)
    {
        print "<br>Fehlercode: ".$error[1]."<br>Fehler: ".$error[2];
    }
    $dbh = null;
}
catch (PDOException $e)
{
    print "<br>Meldung: ".$e->getMessage();
}

?>