<?php

$bestand[0]["Artikelname"] = "Hammer";
$bestand[0]["Preis"] = 19.99;
$bestand[0]["Vorrat"] = 5;

$bestand[1]["Artikelname"] = "Bohrmaschine";
$bestand[1]["Preis"] = 29.99;
$bestand[1]["Vorrat"] = 3;

$bestand[2]["Artikelname"] = "Kreissäge";
$bestand[2]["Preis"] = 39.99;
$bestand[2]["Vorrat"] = 0;

$myVar = 0;

while ($myVar < 3) {
    if ($bestand[$myVar]["Vorrat"] > 0) {
        print "Der Artikel \"".$bestand[$myVar]["Artikelname"]."\", ist verfügbar.<br>\n";
    }
    $myVar++;
}

?>