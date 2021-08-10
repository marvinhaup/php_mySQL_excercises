<?php
// Datenbank-Zugriff per mysqli-Funktionen

$dbh = mysqli_connect("localhost", "admin", "passwort", "onlineshopDB");

if (mysqli_connect_errno()) {
    print "Keine Verbindung zur Datenbank möglich: " . mysqli_connect_error();
}

else {
    print "Verbindung erfolgreich hergestellt";
}

mysqli_close($dbh);

?>