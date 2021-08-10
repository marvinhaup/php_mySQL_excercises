<?php

// Einfügen von Inhalten in die Tabelle os_bestellungen
// Speichern der SQL-Abfrage in einer Variable(nicht möglich mit mysqli)

$sql = "asadsdasdasd";   // SQl-Befehl, welcher ausgeführt werden soll 

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