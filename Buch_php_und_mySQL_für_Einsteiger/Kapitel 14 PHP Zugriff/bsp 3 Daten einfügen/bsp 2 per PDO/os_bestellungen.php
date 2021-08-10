<?php

// Erstellen der Tabelle os_bestellungen mit hilfe des PDO-Objektes
// Speichern der SQL-Abfrage in einer Variable(nicht möglich mit mysqli)

$sql = "CREATE TABLE os_bestellungen".
    "(b_id integer unsigned not null auto_increment primary key,".
    "b_artikelnummer integer unsigned not null unique,".
    "b_kundennummer integer unsigned not null unique,".
    "b_preis decimal(7,2) unsigned,".
    "b_anzahl integer unsigned);";

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