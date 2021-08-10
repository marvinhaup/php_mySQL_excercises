<?php

// Abfragen von Einträgen mit Hilfe der fetchall()-Methode
// Dafür kann das gleiche PDO-Programmschema wiederverwendet werden.

// Vorteil von fetchall(): Unterteilung der Datenabfrage und der Datenausgabe
// -> saubererer Ablauf des Programmes

// Werte der Spalte b_preis in der Tabelle os_bestellungen abfragen
$sql = "SELECT b_preis FROM os_bestellungen;";

try
{
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");
    print "Verbindung erfolgreich hergestellt<br>";

    $rueckgabe = $dbh->query($sql);
    $ergebnis = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);
    foreach ($ergebnis as $inhalt) 
    {
        print "Inhalt der Zelle b_preis: ".$inhalt['b_preis']."<br>\n";
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