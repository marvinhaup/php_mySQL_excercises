<?php

// Erstellen einer neuen Tabelle "os_bestellungen" in der Datenbank "onlineshopDB"

$dbh = mysqli_connect("localhost", "admin", "passwort", "onlineshopDB");

if (mysqli_connect_errno()) 
{
    print "Keine Verbindung zur Datenbank möglich: ".
    mysqli_connect_error();
}
else 
{
    print "Verbindung erfolgreich hergestellt.";
    mysqli_query($dbh, "CREATE TABLE os_bestellungen".
    "(b_id integer unsigned not null auto_increment primary key,".
    "b_artikelnummer integer unsigned not null unique,".
    "b_kundennummer integer unsigned not null unique,".
    "b_preis decimal(7,2) unsigned,".
    "b_anzahl integer unsigned);");
}

mysqli_close($dbh);

?>