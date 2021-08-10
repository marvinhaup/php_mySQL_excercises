<?php

// Verbindung zu einer Datenbank mittels des PHP Database Objektes

try 
{
    $dbh = new PDO( "mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort"); // Erzeugen einer neuen Instanz der DBO-Klasse
    print "Verbindung erfolgreich hergestellt"; // Falls kein Fehler auftritt, gib erfolgreiche Meldung aus.
    $dbh = null; // Schließe den Zugriff auf die Datenbank
}
catch (PDOException $e) 
{
    print $e->getMessage();
}

?>