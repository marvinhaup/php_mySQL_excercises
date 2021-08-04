<?php

$warenbestand = array();

$warenbestand[0]["Artikelname"] = "Schraubenzieher"; 
$warenbestand[0]["MengeVorraetig"] = 0;
$warenbestand[0]["Preis"] = 9.99;

$warenbestand[1]["Artikelname"] = "Hammer"; 
$warenbestand[1]["MengeVorraetig"] = 3;
$warenbestand[1]["Preis"] = 19.99;

$warenbestand[2]["Artikelname"] = "Kreissäge";
$warenbestand[2]["MengeVorraetig"] = 5;
$warenbestand[2]["Preis"] = 29.99;

// Abfrage der Artikelwerte zum jeweiligen Artikel

if ($warenbestand[2]["MengeVorraetig"] < 1) {
    print "Der Artikel: ".$warenbestand[2]["Artikelname"].", ist nicht mehr vorrätig.<br>\n";
}
elseif ($warenbestand[2]["Preis"] < 20) {
    print "Der Artikel: ".$warenbestand[2]["Artikelname"].", ist vorrätig, allerdings fallen 5Euro Versandkosten an.<br>\n";
}
else {
    print "Der Artikel: ".$warenbestand[2]["Artikelname"].", ist vorrätig und kann Versandkostenfrei geliefert werden.<br>\n";
}


?>