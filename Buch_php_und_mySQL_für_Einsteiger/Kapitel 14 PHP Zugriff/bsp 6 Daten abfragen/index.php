<?php

// Abfragen von Einträgen
// Dafür kann das gleiche PDO-Programmschema wiederverwendet werden.

// Werte der Spalte b_preis in der Tabelle os_bestellungen abfragen
$sql = "SELECT b_preis FROM os_bestellungen;";

try
{
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");
    print "Verbindung erfolgreich hergestellt<br>";

    $ergebnis = array();
    $i = 0;

    foreach ($dbh->query($sql) as $inhalt)
    {   // $inhalt ist ein Wertetuptel, behandelt wie ein assoziatives Array
        print "Inhalt der Zeile b_preis: ".$inhalt['b_preis']."<br>\n";
        $ergebnis[$i] = $inhalt['b_preis']; // abfrageergebnisse fortlaufen speichern
        $i++;
    }

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