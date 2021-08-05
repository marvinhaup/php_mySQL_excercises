<?php

$sortiment = array();

$sortiment[0]["Artikelname"] = "Stichsäge";
$sortiment[0]["Preis"] = 19.99;
$sortiment[0]["Vorrat"] = 3;

$sortiment[1]["Artikelname"] = "Bohrmaschine";
$sortiment[1]["Preis"] = 29.99;
$sortiment[1]["Vorrat"] = 0;

$sortiment[2]["Artikelname"] = "Hammer";
$sortiment[2]["Preis"] = 9.99;
$sortiment[2]["Vorrat"] = 4;

$sortiment[3]["Artikelname"] = "Kreissäge";
$sortiment[3]["Preis"] = 39.99;
$sortiment[3]["Vorrat"] = 5;

foreach ($sortiment as $inhalt) {
    if ($inhalt["Vorrat"] > 0){
        print "Der Artikel: \"".$inhalt["Artikelname"]."\", ist vorrätig.<br>\n";
        print "Der Preis beträgt: ".$inhalt["Preis"]."<br><br>\n";
    }
}



?>