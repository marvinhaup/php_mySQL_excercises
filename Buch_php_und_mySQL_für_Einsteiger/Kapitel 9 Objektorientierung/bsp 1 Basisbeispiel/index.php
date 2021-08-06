<?php

include("Fahrzeugklassen.php");
$meinAuto = new Auto();

$meinAuto->kraftstoffverbrauch = 7;
$meinAuto->maxGeschwindigkeit = 200;

print "Mein Auto verbraucht: ".$meinAuto->kraftstoffverbrauch." Liter pro 100 Kilometer.<br>\n";
print "Mein Auto besitzt eine Spitzengeschwindigkeit von ".$meinAuto->maxGeschwindigkeit." Km/h.<br>\n";
print "Mein Auto hat ".$meinAuto->sitzplaetze." Sitzplätze.<br>\n"; // erzeugt fehler-> Zugriff auf private Variable ausßerhalb der Klassendefinition

?>