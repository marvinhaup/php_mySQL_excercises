<?php

// Ändern von Einträgen
// Dafür kann das gleiche PDO-Programmschema wiederverwendet werden.

// Anzahl der bestellten Artikel bei Bestellung mit b_id = 3 inkrementieren
$sql = "UPDATE os_bestellungen Set b_anzahl = b_anzahl + 1 WHERE b_id = 3;";

try
{
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");
    print "Verbindung erfolgreich hergestellt<br>";
    $dbh->query($sql);
    $error = $dbh->errorInfo(); // erstellen einer Variable die das Error-Array des database-handlers erhält. 

    if ( $error[0] > 0) { // Das Array besitzt nur dann einen Inhalt, wenn ein Fehler aufgetreten ist.
        print "Fehlercode: ".$error[1]."<br>".$error[2];
    }
    $dbh = null;
}
catch (PDOException $e)
{
    print $e->getMessage();
}

?>