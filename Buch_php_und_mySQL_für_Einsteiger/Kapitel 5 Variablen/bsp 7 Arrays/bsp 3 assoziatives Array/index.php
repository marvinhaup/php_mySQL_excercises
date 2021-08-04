<?php

// assoziatives Array

$meinArray = array();

$meinArray["Artikelnummer"] = 1;
$meinArray["Produktname"] = "Bohrmaschine";
$meinArray["Anzahl"] = 43;
$meinArray["Preis"] = 19.99;
$meinArray["Beschreibung"] = "Kraftvolle Bohrmaschine für Bohr- und Schraubarbeiten";


/* 
oder mit Kurschreibweise: array('schlüssel' => "inhalt");

$meinArray = array('Artikelnummer' => 1, 'Produktname' => "Bohrmaschine", 'Anzahl' => 43, 'Preis' => 19.99, 'Beschreibung' => "Kraftvolle Bohrmaschine für Bohr- und Schraubarbeiten");
*/

print $meinArray["Artikelnummer"]."<br>\n";
print $meinArray["Produktname"]."<br>\n";
print $meinArray["Anzahl"]."<br>\n";
print $meinArray["Preis"]."<br>\n";
print $meinArray["Beschreibung"]."<br>\n";

?>