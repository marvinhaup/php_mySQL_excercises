<?php

include("Fahrzeugklassen.php");

$meinAudi = new Auto();

$meinAudi->setVerbrauch (10);
$meinAudi->setMaxGeschwindigkeit (250);

print "Mein Audi hat ".$meinAudi->getSitzplaetze()." Sitzplätze.<br>\n";
print "Mein Audi verbraucht ".$meinAudi->getVerbrauch()." Liter pro 100 Kilometer.<br>\n";
print "Mein Audi besitzt eine Höchstgeschwindigkeit von ".$meinAudi->getMaxGeschwindigkeit()." km/h.<br>\n";

?>